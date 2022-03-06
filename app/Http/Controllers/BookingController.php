<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(Request $request){
        // dd($request->all());
        $avalibilty = $request->avalibilty;
        $course = $request->course;
        $user = $request->user;


        $cart = session()->get('cart');
        $data = $avalibilty.'_'.$course.'_'.$user;
        // return $cart[$data][$data];
        if(!isset($cart[$data][$data])) {
            session()->push('cart', [$data=>$data]);
            return response()->json(['success' => 'Product added to cart successfully!', 'cart' => $cart], 200);
        }else{
            // session()->forget('cart');
            return response()->json(['success' => 'Already have Data!'], 200);
        }
        return  session()->get('cart');
        return response()->json(['error' => 'Out of Condition!'], 200);

    }
}
