<?php


namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;

class ConvertTime
{
    function convert(Request $request){
        $crrTime = Carbon::now();
        $input = $request->inputTime;
        $result = $crrTime->diffInYears($input);
        return view('convert',compact('result'));
    }
    function showConvert(){
        return view('convert');
    }
}
