<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(Request $request){
        $avalibilty = $request->avalibilty;
        $course = $request->course;
        $user = $request->user;
        
        $cart = session()->get('cart');
        $data = $avalibilty.'_'.$course.'_'.$user;
        if (!$cart) {
            $cart[$data] = [
                "avalibilty"    => $avalibilty,
                "course"        => $course,
                "user"          => $user,
                "quantity"      => '1'
            ];
            session()->push('cart', $cart);
            return response()->json(['success' => 'New Bucket Create Course added to cart successfully!'], 200);
        }

        if(isset($cart[$data])) {
            $cart[$data]['quantity']++;
            session()->put('cart', $cart);
            return response()->json(['success' => 'Course quantity Increse added to cart successfully!'], 200);
        }

        $cart[$data] = [
            "avalibilty"    => $avalibilty,
            "course"        => $course,
            "user"          => $user,
            "quantity"      => '1'
        ];
        session()->put('cart', $cart);
        return response()->json(['success' => 'New Course added to cart successfully!'], 200);

        // if(!$cart) {
        //     session()->push('cart', [$data=>$data]);
        //     return response()->json(['success' => 'Already have Data!'], 200);
        // }else{
        //     session()->push('cart', [$data=>$data]);
        //     return response()->json(['success' => 'Product added to cart successfully!', 'cart' => $cart], 200);
        // }
        // return  session()->get('cart');
        // return response()->json(['error' => 'Out of Condition!'], 200);

    }
}
