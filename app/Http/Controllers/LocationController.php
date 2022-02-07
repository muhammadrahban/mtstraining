<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\availability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Json;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = course::all();
        return view('location.create', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_id'     =>  'required',
            'location'      =>  'required',
            'price'         =>  'required',
            'seats'         =>  'required',
            'starting'      =>  'required',
            'ending'        =>  'required',
        ]);
        availability::where('user_id', Auth::user()->id)->where('course_id', $request->course_id)->delete();
        // return $request->all();
        $count = 0;
        foreach($request->location as $location){
            $data = [
                'course_id'     =>  $request->course_id,
                'user_id'       =>  Auth::user()->id,
                'location'      =>  $request->location[$count],
                'price'         =>  $request->price[$count],
                'seats'         =>  $request->seats[$count],
                'starting'      =>  $request->starting[$count],
                'ending'        =>  $request->ending[$count],
            ];
            availability::create($data);
            $count++;
        }
        return redirect(route('location.index'))->with('status', "Successfully Inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user()->id;
        $availiblitiy = availability::where('course_id', $id)->where('user_id', $user)->orderBy('starting', 'DESC')->get();
        return response()->json(['data'=>$availiblitiy]);
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
