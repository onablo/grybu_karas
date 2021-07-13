<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrybasController extends Controller
{
    public function hello($grybas)
    {
        return 'Hello, grybas, from Controller. Cia <b>$grybas<b>';
    }

    public function color($color, $wig)
    {
        return '<b style="color:'.$color.'">'.$wig.'<b>.';
    }
}
