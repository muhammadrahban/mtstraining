@extends('layouts.front')
@section('title', 'Course?')
@section('content')
     <!--Sub Banner Wrap Start -->
     <div class="gt_sub_banner_bg default_width" style="background-image:url('./assets/images/placeholder.png')">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h2>{{$courses[0]->name}}</h2>
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->
    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap bg-light">
        <!--Who We Are Wrap Start-->
        <section class="gt_who_we_bg text-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="default_width">
                            <h5>
                                <b>Short Description - </b>{{ $courses[0]->short_desc }}
                            </h5>
                            @if ($courses[0]->featured != null)
                                <img src="{{asset('/uploads/'.$courses[0]->featured)}}" class="w-100 my-4">
                            @else
                                <img src="{{asset('front/')}}/images/placeholder.png" class="w-100 my-4">
                            @endif
                            <div class="mb-4">
                                <a href="{{route('search')}}" class="btn btn-lg btn-primary">Check Availabilities</a>
                                <a href="#" class="btn btn-lg btn-secondary">Book Now</a>
                            </div>

                            <h6>Course Details</h6>
                            <p><b>Long Description</b> {!! $courses[0]->desc !!} </p>

                            <h6>Course Dates</h6>
                            <h6>Course Locations</h6>
                            <h6>FAQs</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4">
                            <b>COURSE NAME</b>
                            <h6 class="text-primary font-weight-bold mb-3">{{$courses[0]->name}}</h6>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <b>DURATION</b>
                                    <h6>6 days</h6>
                                </div>
                                <div class="mx-3">
                                    <b>FROM</b>
                                    <h6>&pound; 199.99</h6>
                                </div>
                                <div>
                                    <b>EARNING POTENTIAL</b>
                                    <h6>&pound; 10-14 per hour</h6>
                                </div>
                            </div>

                            <b>AGE REQUIREMENT</b>
                            <h6 class="mb-3">18+ years</h6>

                            <b>COURSE UNITS</b>
                            {!! $courses[0]->units !!}


                            <b>ASSESSMENT</b>
                            <h6 class="mb-3">{{$courses[0]->assessment}}</h6>
                        </div>
                    </div>
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </section>
        <!--Who We Are Wrap End-->
    </div>
    <!--Main Content Wrap End-->
@endsection
