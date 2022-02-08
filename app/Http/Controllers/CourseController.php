<?php

namespace App\Http\Controllers;

use App\Models\availability;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course::all();
        return view('course.index', compact('courses'));
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
            'name'          =>  'required',
            'type'          =>  'required',
            'featured'      =>  'required',
            'short_desc'    =>  'required',
            'desc'          =>  'required',
            'units'         =>  'required',
            'assessment'    =>  'required',
        ]);
        $input  = $request->all();
        // dd($request->featured);
        if($request->featured)
        {
            $input['featured'] = Storage::disk('uploads')->putFile('', $request->featured);
        }
        $course = course::create($input);
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
        $idEdit = true;
        $course = course::where('id', $id)->get();
        return view('course.create', compact('idEdit', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        $request->validate([
            'name'          =>  'required',
            'type'          =>  'required',
            'short_desc'    =>  'required',
            'assessment'    =>  'required',
        ]);
        $input  = $request->all();
        if($request->featured)
        {
            Storage::disk('uploads')->delete($request->featured);
            $input['featured'] = Storage::disk('uploads')->putFile('', $request->featured);
        }
        $course->update($input);
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        Storage::disk('uploads')->delete($request->featured);
        $course->delete();
        return redirect()->route('course.index');
    }
}
