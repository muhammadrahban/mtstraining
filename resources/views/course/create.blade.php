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
                            <a class="nav-link active"  href="{{route('course.edit', $course[0]->id)}}" ><i class="icon icon-pencil"></i> Edit Course</a>
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
                        <form action="{{route('course.update', $course[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                    @else
                        <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                    @endif
                        @csrf
                        <div class="card no-b no-r">
                            <div class="card-body">
                                <h5 class="card-title">Course</h5>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="avatar-upload" style="height: 270px">
                                            <div class="avatar-edit">
                                                <input type='file' name="featured" id="imageUpload1"
                                                    accept=".png, .jpg, .jpeg"  />
                                                <label for="imageUpload1"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview1"
                                                    style="background-image : url({{url('').'/uploads/'}}{{$course[0]->featured ?? 'placeholder.jpg'}}">
                                                </div>
                                            </div>
                                        </div>
                                        @error('featured')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group m-0">
                                                    <label for="name" class="col-form-label s-12">Course Name</label>
                                                    <input id="name" placeholder="Enter Course Name" class="form-control r-0 light s-12 @error('name') is-invalid @enderror" name="name" type="text" @if ($idEdit) value="{{ $course[0]->name }}" @endif>
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
                                                    <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12 @error('type') is-invalid @enderror" id="inlineFormCustom" name="type">
                                                        <option value="">Choose...</option>
                                                        <option value="1" @if ($idEdit)  {{ ($course[0]->type == 1) ? 'selected' : '' }} @endif>Physical</option>
                                                        <option value="2" @if ($idEdit)  {{ ($course[0]->type == 2) ? 'selected' : '' }} @endif >Other</option>
                                                    </select>
                                                    @error('type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group m-0">
                                                    <label for="assessment" class="col-form-label s-12">Assessment</label>
                                                    <input id="assessment" placeholder="Enter assessment" class="form-control r-0 light s-12 @error('assessment') is-invalid @enderror" name="assessment" type="text" @if ($idEdit) value="{{ $course[0]->assessment }}" @endif />
                                                    @error('assessment')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-0">
                                                    <label for="duration" class="col-form-label s-12">Duration</label>
                                                    <input id="duration" placeholder="Enter Duration" class="form-control r-0 light s-12 @error('duration') is-invalid @enderror" name="duration" type="text" @if ($idEdit) value="{{ $course[0]->duration }}" @endif />
                                                    @error('duration')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group m-0">
                                                    <label for="earning" class="col-form-label s-12">Earning Potential</label>
                                                    <input id="earning" placeholder="Enter Earning Potential" class="form-control r-0 light s-12 @error('earning') is-invalid @enderror" name="earning" type="text" @if ($idEdit) value="{{ $course[0]->earning }}" @endif />
                                                    @error('earning')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group m-0">
                                                    <label for="ageLimit" class="col-form-label s-12">Age Limit</label>
                                                    <input id="ageLimit" placeholder="Enter Age Limit" class="form-control r-0 light s-12 @error('ageLimit') is-invalid @enderror" name="ageLimit" type="text" @if ($idEdit) value="{{ $course[0]->ageLimit }}" @endif />
                                                    @error('ageLimit')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group m-0">
                                                    <label for="price" class="col-form-label s-12">Price</label>
                                                    <input id="price" placeholder="Enter Price" class="form-control r-0 light s-12 @error('price') is-invalid @enderror" name="price" type="text" @if ($idEdit) value="{{ $course[0]->price }}" @endif />
                                                    @error('price')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <label for="short" class="col-form-label s-12">Short Description</label>
                                            <textarea id="short" placeholder="Enter Short Description" class="form-control r-0 light s-12 @error('short_desc') is-invalid @enderror" name="short_desc"> @if ($idEdit) {{ $course[0]->short_desc }} @endif </textarea>
                                            @error('short_desc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <label for="unit" class="col-form-label s-12">Units</label>
                                            <textarea id="unit" name="units" placeholder="Enter units" class="form-control r-0 light s-12 @error('units') is-invalid @enderror" > @if ($idEdit) {{$course[0]->units}} @endif </textarea>
                                            @error('units')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group m-0">
                                            <label for="description" class="col-form-label s-12">Description</label>
                                            <textarea id="description" name="desc" placeholder="Enter Description" class="form-control r-0 light s-12 @error('desc') is-invalid @enderror" > @if ($idEdit) {{$course[0]->desc}} @endif </textarea>
                                            @error('desc')
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

<script>
    jQuery(document).ready(function(){
        function readURL(input, number) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview' + number).css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview' + number).hide();
                    $('#imagePreview' + number).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function () {
            readURL(this, 1);
        });
    });
    CKEDITOR.replace( 'units' );
    CKEDITOR.replace( 'desc' );
</script>

@endsection
