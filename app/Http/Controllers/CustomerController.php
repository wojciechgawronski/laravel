<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create', );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        Customer::create($data);

        return redirect('/customers');
    }

    public function show($customerID)
    {
        $customerID = (int) $customerID;


        if (!is_int($customerID) || $customerID == 0) {
            return redirect('/customers');
        }

        $customer = Customer::find($customerID);
        // $customer = Customer::findOrFail($customerID); // 404

        // if(is_null($customer)) {}
        if (!$customer) {
            return redirect('/customers');
        }

        return view('customer.show', compact('customer'));
    }
}
