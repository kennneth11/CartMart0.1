<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('customer')){
            return view('customer/customerdashboard');
        }elseif(Auth::user()->hasRole('seller')){
            return view('seller/sellerdashboard');
        }elseif(Auth::user()->hasRole('admin')){
            return view('admin/admindashboard');
        }
    }
}
