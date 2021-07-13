<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function suma($a, $b)
    {
        return view('calculator.suma', ['susumuota' => $a + $b]);

        //return $a + $b;
    }
}
