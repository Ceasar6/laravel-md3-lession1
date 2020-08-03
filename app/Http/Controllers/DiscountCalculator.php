<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DiscountCalculator extends Controller
{
    public function showCalculator(){
        return view('calculator');
    }


    public function discount(Request $request){
        $productDesc = $request->productDesc;
        $listPrice = $request->listPrice;
        $discount = $request->discount;
        $amount = ($listPrice/100)*$discount;
        $discountPrice = $listPrice - $amount;
        return view('showdiscount',compact('productDesc', 'listPrice', 'discount','amount','discountPrice'));
    }

}
