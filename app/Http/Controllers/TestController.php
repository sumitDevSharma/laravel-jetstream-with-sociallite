<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function calculate()
    {   
        calculateToMinutes("34 hours 5 mins") ;
    }
}
