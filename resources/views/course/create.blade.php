@extends('layouts.dashboard')

@section('content')

<div class="page has-sidebar-left  height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Courses
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link" href="{{route('course.index')}}"><i class="icon icon-home2"></i>All Courses</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('course.create')}}"><i class="icon icon-plus-circle"></i> Add New Course</a>
                    </li>
                    @if ($idEdit)
                        <li class="float-right">
                            <a class="nav-link active"  href="{{route('course.edit', $user[0]->id)}}" ><i class="icon icon-pencil"></i> Edit Course</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort go">
            <div class="row my-3">
                <div class="col-md-12">
                    @if ($idEdit)
                        <form action="{{route('course.update', $user[0]->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{route('course.store')}}" method="POST">
                    @endif
                        @csrf
                        <div class="card no-b no-r">
                            <div class="card-body">
                                <h5 class="card-title">Course</h5>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">Course Name</label>
                                            <input id="name" placeholder="Enter Course Name" class="form-control r-0 light s-12 @error('name') is-invalid @enderror" name="name" type="text" @if ($idEdit) value="{{ $user[0]->name }}" @endif>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group m-0">
                                            <label class="my-1 mr-2" for="inlineFormCustom" >Course Type</label>
                                            <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12 @error('Type') is-invalid @enderror" id="inlineFormCustom" name="Type">
                                                <option value="">Choose...</option>
                                                <option value="1">Physical</option>
                                                <option value="2">Other</option>
                                            </select>
                                            @error('Type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body after-add-more">
                                <div class="form-row">
                                    <div class="col-md-5">
                                        <div class="form-group m-0">
                                            <label for="Location" class="col-form-label s-12">Location</label>
                                            <input id="Location" name="location[]" placeholder="Enter Location" class="form-control r-0 light s-12 @error('location') is-invalid @enderror" type="text" @if ($idEdit) disabled @endif>
                                            @error('location')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group m-0">
                                            <label for="price" class="col-form-label s-12">Price</label>
                                            <input id="price" name="price[]" placeholder="Enter Price" class="form-control r-0 light s-12 @error('price') is-invalid @enderror" type="number" @if ($idEdit) disabled @endif>
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group m-0">
                                            <label for="seat" class="col-form-label s-12">seats</label>
                                            <input id="seat" name="seats[]" placeholder="Enter seats" class="form-control r-0 light s-12 @error('seat') is-invalid @enderror" type="number" @if ($idEdit) disabled @endif>
                                            @error('seat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1 mt-4 pl-4">
                                        <input type="button" class="btn btn-primary add-more" value="+" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5">
                                        <div class="form-group m-0">
                                            <label for="starting" class="col-form-label s-12">Starting Date</label>
                                            <input id="starting" name="starting[]" class="form-control r-0 light s-12 @error('starting') is-invalid @enderror" type="date" @if ($idEdit) disabled @endif>
                                            @error('starting')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group m-0">
                                            <label for="ending" class="col-form-label s-12">Ending Date</label>
                                            <input id="ending" name="ending[]" class="form-control r-0 light s-12 @error('ending') is-invalid @enderror" type="date" @if ($idEdit) disabled @endif>
                                            @error('ending')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
</div>

<div class="copy d-none">
    <div class="card-body new_one">
        <div class="form-row">
            <div class="col-md-5">
                <div class="form-group m-0">
                    <label for="Location" class="col-form-label s-12">Location</label>
                    <input id="Location" name="location[]" placeholder="Enter Location" class="form-control r-0 light s-12 @error('location') is-invalid @enderror" type="text" @if ($idEdit) disabled @endif>
                    @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group m-0">
                    <label for="price" class="col-form-label s-12">Price</label>
                    <input id="price" name="price[]" placeholder="Enter Price" class="form-control r-0 light s-12 @error('price') is-invalid @enderror" type="number" @if ($idEdit) disabled @endif>
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group m-0">
                    <label for="seat" class="col-form-label s-12">seats</label>
                    <input id="seat" name="seats[]" placeholder="Enter seats" class="form-control r-0 light s-12 @error('seat') is-invalid @enderror" type="number" @if ($idEdit) disabled @endif>
                    @error('seat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-1 mt-4 pl-4">
                <input type="button" class="btn btn-danger remove" value="X" />
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-5">
                <div class="form-group m-0">
                    <label for="starting" class="col-form-label s-12">Starting Date</label>
                    <input id="starting" name="starting[]" class="form-control r-0 light s-12 @error('starting') is-invalid @enderror" type="date" @if ($idEdit) disabled @endif>
                    @error('starting')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group m-0">
                    <label for="ending" class="col-form-label s-12">Ending Date</label>
                    <input id="ending" name="ending[]" class="form-control r-0 light s-12 @error('ending') is-invalid @enderror" type="date" @if ($idEdit) disabled @endif>
                    @error('ending')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function() {

            $(".add-more").click(function(){
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });

        $("body").on("click",".remove",function(){
            $(this).parents(".new_one").remove();
        });
    });
</script>

@endsection
