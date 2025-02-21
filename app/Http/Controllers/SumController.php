<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class SumController extends Controller {
        public function getNumber(Request $request) 
        {
            $numberA = $request-> input('number1');
            $numberB = $request->input('number2');
            $sum = $numberA + $numberB ;
            return view('calculateSum', compact('numberA','numberB','sum'));
        }
    }
    