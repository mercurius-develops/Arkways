<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\referal_customer;
use App\Models\transaction;

class customer_controller extends Controller
{
    
    public function show_customer_signup()
    {
        $customer = customer::all();
        return view('customer.signup')->with(['customers'=>$customer]);
    }
    
    public function store(Request $request) {

        $customer = new customer; 
        $customer->referred_id = $request->get('referred_id');
        $customer->name = $request->get('name');
        $customer->doc_no = $request->get('doc_no');
        $customer->mobile_no = $request->get('mobile_no');
        $customer->dob = $request->get('dob');
        $customer->primary_email = $request->get('primary_email');

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $extension = $file->getClientOriginalExtension();
            $filename = 'document_' . time() . '.' . $extension;
    
            // Determine the storage path based on the file extension
            if (in_array($extension, ['pdf', 'jpg', 'jpeg', 'png', 'gif'])) {
                $storagePath = 'document_images';
            } else {
                // Handle other file types (you can customize this logic)
                $storagePath = 'other_images';
            }
    
            // Store the file in the specified storage location
            $file->storeAs($storagePath, $filename, 'public');
    
            // Save the file path in the database
            $customer->document_images = $storagePath . '/' . $filename;
        }
    

        $customer->save(); 
       
       
        return redirect('home');
        // --------------------------------------
        }

    public function readcustomerdata(){
        $customer = customer::all();
        $transaction = transaction::all(); 
        return view('customer/show_customer')->with(['customers'=>$customer])->with(['transactions'=> $transaction]);;
        }
    //function for adding specific customer trans
    public function addTrans($id) {  
        $customer = customer::all();
        $transaction = transaction::find($id); 
        return view('customer/customerTrans')->with(['DEF' => $transaction])->with(['customers'=>$customer]);
    }
    public function updateTrans(Request $request) {
        $transaction = new transaction; 
        $transaction->customer_id = $request->get('customer');
        $transaction->ref_no = $request->get('ref_no');
        $transaction->trans_type = $request->get('trans_type');
        $transaction->save(); 
        return redirect('/home')->with('status', 'transaction updated Successfully!');
    }

    //function for editing
        public function edit($id) {
           
            $customer = customer::find($id); 
            return view('customer/edit_customer')->with(['DEF' => $customer]);
        }
    //function for updating info
        public function update(Request $request, $id) {
            $customer = customer::find($id);
            $customer->name = $request->get('name'); // Copy from textbox and paste on the handler
            $customer->primary_email = $request->get('primary_email');
            $customer->mobile_no = $request->get('mobile_no');
            $customer->mobile_no = $request->get('doc_no');
            if ($request->hasFile('document')) {
                $documentPath = $request->file('document')->store('document_images', 'public');
                $customer->document_images = $documentPath;
            }
            $customer->save(); 
            return redirect('customer/show_customer')->with('status', 'customer updated Successfully!');
        }

        //For delete Operation 
        public function delete($id) {
            customer::destroy($id);

            return redirect('customer/show_customer')->with('status', 'customer deleted Successfully!');
            // --------------------------------------
        }

        public function show($id)
        {
              
            $customer = Customer::with('transactions')->findOrFail($id);

            $transaction = $customer->transactions->first();

            return view('customer/customer_detail', compact('customer', 'transaction'));
        }

        public function show_customer_detail()
        {
            $transaction = transaction::all();
            return view('customer/customer_detail')->with(['transactions'=> $transaction]);
        }

        public function downloadDocument($customerId)
{
    $customer = Customer::find($customerId);

    if (!$customer || !$customer->document_images) {
        abort(404); // Handle the case when the customer or document doesn't exist
    }

    $filePath = storage_path('app/public/' . $customer->document_images);

    if (file_exists($filePath)) {
        $originalFilename = pathinfo($customer->document_images, PATHINFO_FILENAME);
        $extension = pathinfo($customer->document_images, PATHINFO_EXTENSION);
        $downloadedFilename = $originalFilename . '.' . $extension;

        return response()->download($filePath, $downloadedFilename);
    } else {
        abort(404); // Handle the case when the file doesn't exist
    }
}



       
}
