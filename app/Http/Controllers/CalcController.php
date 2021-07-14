<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class CalcController extends Controller
{
    public function suma($a, $b)
    {
        return view('calculator.suma', ['susumuota' => $a + $b]);

        //return $a + $b;
    }

    public function showDaugyba()
    {
        $rez = Session::pull('rez', '');
        $x = Session::pull('x', '');
        $y = Session::pull('y', '');
        return view('calculator.daugyba', [
            'rezultatas' => $rez,
            'x' => $x,
            'y' => $y
        ]);
    }


    public function doDaugyba(Request $request)
    {
        $iksas = $request->x; // name="x"
        $igrekas = $request->y; // name="y"
        $result = $iksas * $igrekas;
        Session::put('rez', $result);
        Session::put('x', $iksas);
        Session::put('y', $igrekas);
        return redirect()->route('show');
    }



}


