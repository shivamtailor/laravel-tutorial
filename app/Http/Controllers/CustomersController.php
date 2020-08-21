<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Cassandra\Custom;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customersList = Customer::all();
        return view('customers.index',compact('customersList'));
    }

    public function create()
    {
        $companiesList = Company::all();
        $customer = new Customer();
        return view('customers.create', compact('companiesList','customer'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);
        $customer = Customer::create($data);
        return redirect('customers');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companiesList = Company::all();
        return view('customers.edit', compact('customer','companiesList'));
    }

    public function update(Customer $customer)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
        $customer->update($data);
        return redirect('customers/'. $customer->id);
    }
}
