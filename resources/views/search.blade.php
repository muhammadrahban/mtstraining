@extends('layouts.front')
@section('title', 'Search')
@section('content')
     <!--Main Content Wrap Start-->
     <div class="gt_content_wrap bg-light">
        <!--Who We Are Wrap Start-->
        <section class="gt_who_we_bg text-dark">
            <div class="container">

                <div class="card px-4 pt-4 mb-4">
                    <div class="row">
                        <div class="col-md-1 text-center">
                            <i class="fa fa-map-marker fa-3x my-4"></i>
                        </div>
                        <div class="col-md-11">
                            <h4 class="font-weight-bold">Find your nearest course</h4>
                            <p>We have a large selection of dates and locations. Find a course that suits you by entering your location or postcode.</p>
                            <form class="row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control mb-3" placeholder="Postcode or Address" />
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control mb-3">
                                        <option value="1">Course 1</option>
                                        <option value="2">Course 2</option>
                                        <option value="3">Course 3</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary btn-block mb-3">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <h4 class="text-primary font-weight-bold">Course Title</h4>
                <P>We've found 901 course dates across 102 locations</P>
                <!--Single Item Start-->
                <div class="card mb-4">
                    <div class="row mx-0">
                        <div class="col-md-8 p-4">
                            <span class="badge alert-warning px-4 py-3 mb-3">Best selling SIA course</span>
                            <h4 class="font-weight-bold mb-3">Course Title</h4>
                            <div class="d-flex mb-3">
                                <i class="fa fa-map-marker fa-2x mr-3"></i>
                                <p><b>Location</b> <span class="text-muted">Lane End Conference Centre,Church Rd, Lane End, High Wycombe HP14 3HH, United Kingdom</span></p>
                            </div>
                            <span class="badge alert-success px-4 py-3 mb-3">
                                <i class="far fa-users mr-3"></i>
                                Booked 1,704 times
                            </span>
                            <span class="badge alert-success px-4 py-3 mb-3">
                                <i class="far fa-rocket mr-3"></i>
                                Unlimited exam retakes
                            </span>
                            <span class="badge alert-success px-4 py-3 mb-3">
                                <i class="far fa-wallet mr-3"></i>
                                Avg. wage rate £15/hr
                            </span>
                            <span class="badge alert-success px-4 py-3 mb-3">
                                <i class="far fa-phone-laptop mr-3"></i>
                                Instant eLearning access
                            </span>
                            <h6 class="mt-3">Pick your course dates</h6>
                            <select class="form-control mb-3">
                                <option value="1">Tue 22nd Feb 2022 to Sun 27th Feb 2022</option>
                                <option value="2">Tue 19th Apr 2022 to Sun 24th Apr 2022</option>
                                <option value="3">Tue 14th Jun 2022 to Sun 19th Jun 2022</option>
                            </select>
                            <span class="px-4 py-3 mb-3">
                                <i class="far fa-calendar-check"></i>
                                6-day course
                            </span>
                            <span class="px-4 py-3 mb-3">
                                <i class="fa fa-clock"></i>
                                8am to 6pm
                            </span>
                            <span class="px-4 py-3 mb-3">
                                <i class="fa fa-bolt"></i>
                                Results available in 5 working days
                            </span>
                        </div>
                        <div class="col-md-1 p-0 text-center" style="position:relative">
                            <div class="divider ml-auto mr-0"></div>
                        </div>
                        <div class="col-md-3 p-4 text-center">
                            <h4 class="font-weight-bold mb-5">Reserve your seat</h4>
                            <h6>Price from</h6>
                            <h6 class="font-weight-bold"><del>&pound;263.99</del></h6>
                            <h5 class="text-primary font-weight-bold">&pound;239.99</h5>
                            <h6 class="text-primary mb-5">You save &pound;24.00</h6>

                            <h6 class="text-danger font-weight-bold mb-3">Hurry! - Only 4 seats left</h6>
                            <button class="btn btn-primary btn-lg btn-block mb-4">Book Now</button>
                            <small class="mt-4">
                                Course provided by
                                <br>
                                Branch Name
                            </small>
                        </div>
                    </div>
                </div>
                <!--Single Item End-->
            </div>
        </section>
        <!--Who We Are Wrap End-->
    </div>
    <!--Main Content Wrap End-->
@endsection
