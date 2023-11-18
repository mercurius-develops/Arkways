<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\transaction;


class transaction_controller extends Controller
{
    public function show_transaction_signup()
    {
        $customer = customer::all();
        return view('transaction.signup')->with(['customers'=>$customer]);
    }

    public function store(Request $request) {
        $transaction = new transaction; 
        $transaction->customer_id = $request->get('customer');
        $transaction->ref_no = $request->get('ref_no');
        $transaction->trans_type = $request->get('trans_type');
        $transaction->save(); 

        $customer = $transaction->customer;
        $customer->update([
            'referral_count' => $request->get('ref_count'), 
            'transaction_count' => $request->get('free_count')
        ]);

        return redirect('home');
        // --------------------------------------
    }
    
    public function readtransactions()
    {
        $transaction = transaction::all()->reverse();
        $customer = customer::all();
        return view('transaction/show_transaction')->with(['transactions'=>$transaction])->with(['customers'=>$customer]);
    }

    //function for editing
    public function edit($id) {

        $customer = customer::all();
        $transaction = transaction::find($id); 
        return view('transaction/edit_transaction')->with(['DEF' => $transaction])->with(['customers'=>$customer]);
    }
    //function for updating info
    public function update(Request $request, $id) {
        $transaction = transaction::find($id);
        $transaction->customer_id = $request->get('customer'); // Copy from textbox and paste on the handler
        $transaction->ref_no = $request->get('ref_no');
        $transaction->save(); 
        return redirect('transaction/show_transaction')->with('status', 'transaction updated Successfully!');
    }

    //For delete Operation 
    public function delete($id) {
        transaction::destroy($id);

        return redirect('transaction/show_transaction')->with('status', 'transaction deleted Successfully!');
        // --------------------------------------
    }
}

