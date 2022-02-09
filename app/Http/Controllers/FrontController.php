<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\course;
use App\Models\availability;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function course_detail($id = null)
    {
        if ($id != null) {
            $courses = course::with('availability', 'desc')->where('id', $id)->get();
            // return $courses;
            return view('coursedetails', compact('courses'));
        }
    }

    public function course_search($course = null, $location = null)
    {
        // $search = availability::with('course')->when(($course != null) && ($course != 0), function($c) use ($course){
        //         return $c->whereHas('course', function($query) use ($course){
        //             return $query->where('id', $course);
        //         });
        //     })->when($location != null , function ($query) use($location){
        //         return $query->where('location', 'LIKE', '%'.$location.'%');
        //     })
        //     ->where('starting' , '>=' , Carbon::now()->toDateTimeString())->get();
            $search = course::with('availability')->when(($course != null) && ($course != 0), function($c) use ($course){
                    return $c->where('id', $course);
                })->when($location != null , function ($query) use($location){
                    return $query->whereHas('availability',function ($l) use($location){
                        return $l->where('location', 'LIKE', '%'.$location.'%');
                    });
                })->whereHas('availability', function($query){
                    $query->where('starting' , '>=' , Carbon::now()->toDateTimeString());
                })->groupBy('id')->get();
        $course = course::all();
        // return $search;
        return view('search', compact('search', 'course'));
    }
}
