<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\availability;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function course_detail($id)
    {
        return view('coursedetails');
    }

    public function course_search($course, $location)
    {
        return view('search');
    }
}
