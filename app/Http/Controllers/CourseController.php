<?php

namespace App\Http\Controllers;

use App\Models\availability;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = course::with('availability')->get();
        return view('course.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idEdit = false;
        return view('course.create', compact('idEdit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'name'  =>  'required',
            'Type'  =>  'required',
        ]);
        $input  = $request->only(['name', 'Type']);
        $course = course::create($input);

        foreach ($request->location as $key => $value) {
            $avaliblility = new availability();
            $avaliblility->course_id = $course->id;
            $avaliblility->location  = $request->location[$key];
            $avaliblility->price     = $request->price[$key];
            $avaliblility->seats     = $request->seats[$key];
            $avaliblility->starting  = $request->starting[$key];
            $avaliblility->ending    = $request->ending[$key];
            $avaliblility->save();
        }
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
