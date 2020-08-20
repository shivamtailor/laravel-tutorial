<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){

        $activeCustomersList = Customer::active()->get();
        $inactiveCustomersList = Customer::inactive();

        /*
        return view('internals.customers',[
            'activeCustomersList' => $activeCustomersList,
            'inactiveCustomersList' => $inactiveCustomersList,
        ]);
        */

        return view('internals.customers',compact('activeCustomersList','inactiveCustomersList'));
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
        ]);

        $customer = Customer::create($data);

        /*
        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->active = request('active');
        $customer->save();
        */

        return back();
    }
}
