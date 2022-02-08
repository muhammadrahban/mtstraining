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
            $courses = course::with('availability')->where('id', $id)->get();
            // return $courses;
            return view('coursedetails', compact('courses'));
        }

    }

    public function course_search($course = null, $location = null)
    {
        $query = availability::with('course')->when($course != null, function($c) use ($course){
                        return $c->whereHas('course', function($query) use ($course){
                            return $query->where('id', $course);
                        });
                    })->when($location != null , function ($query) use($location){
                        return $query->where('location', 'LIKE', '%'.$location.'%');
                    })
                    ->where('starting' , '>=' , Carbon::now()->toDateTimeString())->get();
        return $query;
        return view('search');
    }
}
