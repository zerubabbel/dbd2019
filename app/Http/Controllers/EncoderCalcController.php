<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncoderCalcController extends Controller
{
    //
    public function index(){
    		return view('EncoderCalc.calculator');
    }
}
