<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortafolioController extends Controller
{
    public function portafolio()
    {
        return view('front.portafolio');
    }
}
