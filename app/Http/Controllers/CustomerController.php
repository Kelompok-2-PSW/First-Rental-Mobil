<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.dashboard');
    }

    public function about()
    {
        return view('customer.about');
    }

    public function rent()
    {
        return view('customer.rent');
    }
    
}
