@extends('layouts.front')
@section('title', 'Home')
@section('content')
<!--Banner Wrap Start-->
<div id="slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="1" class="active"></li>
        <li data-target="#slider" data-slide-to="2" class=""></li>
        <li data-target="#slider" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner" style="height:400px;">
        <div style="background-image:url('')" class="carousel-item active">
            <div class="carousel-overlay"></div>

            <div class="carousel-caption">
                <h2 class="mb-3">Slide 1 Title</h2>
                <h5 class="mb-5">Descriptions</h5>
            </div>
        </div>
        <div style="background-image:url('')" class="carousel-item">
            <div class="carousel-overlay"></div>

            <div class="carousel-caption">
                <h2 class="mb-3">Slide 2 Title</h2>
                <h5 class="mb-5">Descriptions</h5>
            </div>
        </div>
        <div style="background-image:url('')" class="carousel-item">
            <div class="carousel-overlay"></div>

            <div class="carousel-caption">
                <h2 class="mb-3">Slide 3 Title</h2>
                <h5 class="mb-5">Descriptions</h5>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--Banner Wrap End-->
<div class="gt_content_wrap">

</div>
@endsection
