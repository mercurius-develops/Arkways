<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\transaction;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $endDate = Carbon::today();
        $startDate = $endDate->copy()->subDays(7);

        // Create an array of dates within the date range
        $dateRange = [];
        $currentDate = $startDate->copy();
        while ($currentDate <= $endDate) {
            $dateRange[] = $currentDate->format('d-m-y');
            $currentDate->addDay();
        }

        $transactionData = Transaction::whereBetween('created_at', [$startDate, $endDate])
            ->get(['created_at'])
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('d-m-y');
            })
            ->map(function ($group) {
                return $group->count();
            });

        // Fill in the counts for all dates, including those with 0 sales
        $sales = [];
        foreach ($dateRange as $date) {
            $sales[$date] = $transactionData->has($date) ? $transactionData[$date] : 0;
        }
        $referral = customer::all()->where('referred_id', '==', '' );


        $customers = customer::all();
        $totalCustomers = customer::count();
        $totalReferralTransactions = transaction::whereHas('customer', function ($query) {
            $query->where('referred_id', '!=', null);
        })->count();
        $totalTransactions = Transaction::count();
        $transactions = transaction::orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        return view('home', compact('transactions', 'totalTransactions', 'customers', 'totalReferralTransactions', 'totalCustomers'))->with(['sales' => $sales]);
    }

    
    
}
