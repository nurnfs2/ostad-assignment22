<?php

namespace App\Http\Controllers;

use App\Mail\PromotionalEmail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    //

    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            // Add other validation rules for contact_number and other fields
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer added successfully!');
    }


    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }


    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'contact_number' => 'nullable',
            // Add other validation rules for additional fields if needed.
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully!');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully!');
    }




    public function sendPromotionalEmail(Request $request, Customer $customer)
    {
        // Validate the request and check if the customer exists

        // Send the promotional email
        Mail::to($customer->email)->send(new PromotionalEmail($customer->name));

        return redirect()->route('customers.index')->with('success', 'Promotional email sent successfully!');
    }



}
