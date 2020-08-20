<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        $customers = [
            'John Doe',
            'Jane Masse',
            'Bob The Builder'
        ];
        return view('internals.customers',[
            'customersList' => $customers
        ]);
    }
}
