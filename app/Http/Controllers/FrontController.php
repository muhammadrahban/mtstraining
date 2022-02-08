<?php

namespace App\Http\Controllers;

use App\Models\course;
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

    public function course_search($course, $location)
    {
        return view('search');
    }
}
