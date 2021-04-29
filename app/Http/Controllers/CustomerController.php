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
        $customer = new Customer();
        return view('customer.create', compact('customer'));
    }

    public function store(Request $request)
    {
        $customer = Customer::create($this->validateData());

        return redirect('/customers/' . $customer->id);
    }

    // public function show($customerID)

    /**
     * find Customer or 404
     *
     * @param Customer $customer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(\App\Models\Customer $customer)
    {
        // $customerID = (int) $customerID;
        // if (!is_int($customerID) || $customerID == 0) {
        //    return redirect('/customers');
        // }

        // $customer = Customer::find($customerID);
        // $customer = Customer::findOrFail($customerID); // 404

        // if(is_null($customer)) {}
        // if (!$customer) {
        //    return redirect('/customers');
        // }

        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {

        // $data = request()->validate([
        //    'name' => 'required',
        //    'email' => 'required|email'
        // ]);

        // $customer->update($data);
        $customer->update($this->validateData());

        return redirect('/customers');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->back();
    }

    protected function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
    }

}
