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
                            <form class="row" method="post" action="{{route('search')}}">
                                @csrf
                                <div class="col-md-5">
                                    <input type="text" name="location" class="form-control mb-3" placeholder="Postcode or Address" />
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control mb-3" name="course">
                                        <option value="0">Choose</option>
                                        @foreach ($course as $cor)
                                            <option value="{{$cor->id}}">{{$cor->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary btn-block mb-3">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <P>We've found 901 course dates across 102 locations</P>
                @foreach ($search as $key => $loc)
                    @foreach ($loc as $cos)
                        @foreach ($cos as $items)
                            <!--Single Item Start-->
                            {{-- <form action="{{route('booking')}}" method="post"> --}}
                            <div>
                                @csrf
                                <div class="card mb-4 single">
                                    <div class="row mx-0">
                                        <div class="col-md-8 p-4">
                                            <span class="badge alert-warning px-4 py-3 mb-3">Best selling SIA course</span>
                                            <h4 class="font-weight-bold mb-3">{{$items[0]->course->name}}</h4>
                                            <div class="d-flex mb-3">
                                                <i class="fa fa-map-marker fa-2x mr-3"></i>
                                                <p><b>Location</b> <span class="text-muted">{{$items[0]->location}}</span></p>
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
                                                Avg. wage rate ??15/hr
                                            </span>
                                            <span class="badge alert-success px-4 py-3 mb-3">
                                                <i class="far fa-phone-laptop mr-3"></i>
                                                Instant eLearning access
                                            </span>
                                            <h6 class="mt-3">Pick your course dates</h6>
                                            <select class="form-control mb-3" onchange="evalDate(this)" name="avalibilty">
                                                @foreach ($items as $sea)
                                                    <option
                                                    data-id="loc_avail_{{$sea->course_i}}"
                                                    data-price="{{$sea->price}}"
                                                    data-days="{{ Carbon\Carbon::parse($sea->starting)->diffInDays(Carbon\Carbon::parse($sea->ending))}}"
                                                    data-timing="{{ (!empty($sea->timing))? $sea->timing : 'Not Available'}}"
                                                      value="{{$sea->id}}">{{$sea->starting}} to {{$sea->ending}}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name="user_id" value="{{ $sea->user_id }}">
                                            <input type="hidden" name="course_id" value="{{ $sea->course_id }}">
                                            <span class="px-4 py-3 mb-3">
                                                <i class="far fa-calendar-check"></i>
                                                <span id="loc_avail_{{$sea->course_i}}_days">{{ Carbon\Carbon::parse($sea->starting)->diffInDays(Carbon\Carbon::parse($sea->ending))}} </span>
                                                Days
                                            </span>

                                            <span class="px-4 py-3 mb-3">
                                                <i class="fa fa-clock"></i>
                                                <span id="loc_avail_{{$sea->course_i}}_time">{{ (!empty($sea->timing))? $sea->timing : 'Not Available'}}</span>
                                            </span>

                                            <span class="px-4 py-3 mb-3">
                                                <i class="fa fa-bolt"></i>
                                                Results seaable in 5 working days
                                            </span>
                                        </div>
                                        <div class="col-md-1 p-0 text-center" style="position:relative">
                                            <div class="divider ml-auto mr-0"></div>
                                        </div>
                                        <div class="col-md-3 p-4 text-center">
                                            <h4 class="font-weight-bold mb-5">Reserve your seat</h4>
                                            <h6>Price from</h6>
                                            <h5 class="text-primary font-weight-bold">&pound;<span  id="loc_avail_{{$sea->course_i}}_price">{{$items[0]->price}}</span></h5>
                                            <h6 class="text-danger font-weight-bold mb-3">Hurry! - Only {{$items[0]->seats}} seats left</h6>
                                            @if(isset($cart))
                                                @foreach ($items as $check_sea)
                                                    @foreach($cart[0] as $key => $value)
                                                        @if ($value['course'] == $check_sea->course_id || $value['user'] == $check_sea->user_id)
                                                            @php
                                                                $data = $check_sea->id.'_'. $check_sea->course_id.'_'. $check_sea->user_id;
                                                            @endphp
                                                            @if ($key === $data)
                                                                <p>Booked</p>
                                                                <button type="button" class="btn btn-primary btn-lg btn-block mb-4">Checkout</button>
                                                            @endif
                                                        @else
                                                            <button type="button" onclick="addtocart(this)" class="btn btn-primary btn-lg btn-block mb-4">Book Now</button>
                                                            <small class="mt-4">
                                                                Course provided by
                                                                <br>
                                                                {{$items[0]->user->name}}
                                                            </small>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            @else
                                                <button type="button" onclick="addtocart(this)" class="btn btn-primary btn-lg btn-block mb-4">Book Now</button>
                                                <small class="mt-4">
                                                    Course provided by
                                                    <br>
                                                    {{$items[0]->user->name}}
                                                </small>
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- </form> --}}
                        @endforeach
                    @endforeach
                @endforeach
                <!--Single Item End-->
            </div>
        </section>
        <!--Who We Are Wrap End-->
    </div>
    <!--Main Content Wrap End-->
    <script>
        function evalDate(obj){
            var theID=$(obj).find('option[value="'+$(obj).val()+'"]').last().attr('data-id');
            var price=$(obj).find('option[value="'+$(obj).val()+'"]').last().attr('data-price');
            var time=$(obj).find('option[value="'+$(obj).val()+'"]').last().attr('data-timing');
            var days=$(obj).find('option[value="'+$(obj).val()+'"]').last().attr('data-days');
            $('#'+theID+'_price').text(price);
            $('#'+theID+'_days').text(days);
            $('#'+theID+'_time').text(time);
        }

        function addtocart(obj){
            var pickupdate  = $(obj).closest('.single').find('select[name="avalibilty"]').val();
            var course      = $(obj).closest('.single').find('input[name="course_id"]').val();
            var user_id     = $(obj).closest('.single').find('input[name="user_id"]').val();
            $.ajax({
                url:'{{route('booking')}}',
                type:'post',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data:{
                    // 'csrf-token':'{{ csrf_token() }}',
                    'avalibilty':pickupdate,
                    'course':course,
                    'user':user_id,
                },
                success : function(response){
                    console.log(response);
                    if(response.success){
                        $(obj).replaceWith('<p>Booked</p><a href="#">Checkout</a>');
                    }
                },
                error:function(error){
                    console.log(error);
                }
            })
        }
    </script>
@endsection
