<?php

namespace App\Http\Controllers;
use App\Models\Promosi; 

use Illuminate\Http\Request;

class PromosiController extends Controller
{
    public function index()
    {
        return view('home');
    }

    
}
