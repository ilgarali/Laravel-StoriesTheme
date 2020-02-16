@extends('front.layouts.master')
@section('content')
<section class="home-slider owl-carousel">
    @foreach($slides as $slide)
<div class="slider-item">
<div class="container">
<div class="row d-flex slider-text justify-content-center align-items-center" data-scrollax-parent="true">

    <div class="img" style="background-image: url({{asset($slide->img)}});"></div>

    <div class="text d-flex align-items-center ftco-animate">
        <div class="text-2 pb-lg-5 mb-lg-4 px-4 px-md-5">
            <h3 class="subheading mb-3">Featured Posts</h3>
            <h1 class="mb-5">{{$slide->title}}</h1>
            <p class="mb-md-5">{{Str::words($slide->content,15)}}</p>
            <p><a href="{{route('single',[$slide->category->slug,$slide->slug])}}" class="btn btn-black px-3 px-md-4 py-3">Read More <span class="icon-arrow_forward ml-lg-4"></span></a></p>
        </div>
    </div>

</div>
</div>
</div>

@endforeach
</section>


<section class="ftco-section">
<div class="container">
<div class="row">
<div class="col-md-7 heading-section ftco-animate">
    <h2 class="mb-4"><span>Recent Stories</span></h2>
</div>
</div>
<div class="row">
<div class="col-md-6 order-md-last col-lg-6 ftco-animate">
    <div class="blog-entry">
        <div class="img img-big d-flex align-items-end" style="background-image: url({{$food->img}});">
            <div class="overlay"></div>
            <div class="text">
                <span class="subheading">{{$food->category->category}}</span>
                <h3><a href="{{route('single',[$food->category->slug,$food->slug])}}">Tasty &amp; Delicious Foods</a></h3>
                <p class="mb-0"><a href="{{route('single',[$food->category->slug,$food->slug])}}" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row">

        @foreach($posts as $post)
        <div class="col-md-6 ftco-animate">
            <div class="blog-entry">
                <a href="{{route('single',[$post->category->slug,$post->slug])}}" class="img d-flex align-items-end"
                   style="background-image: url({{asset($post->img)}});">
                    <div class="overlay"></div>
                </a>
                <div class="text pt-3">
                    <p class="meta d-flex"><span class="pr-3">{{$post->category->category}}</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                    <h3><a href="{{route('single',[$post->category->slug,$post->slug])}}">{{$post->title}}</a></h3>
                    <p class="mb-0"><a href="{{route('single',[$post->category->slug,$post->slug])}}" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                </div>
            </div>
        </div>
       @endforeach


    </div>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-no-pt">
<div class="container">
<div class="row">
<div class="col-lg-9">
    <div class="row">
        <div class="col-md-12 heading-section ftco-animate">
            <h2 class="mb-4"><span>Featured Posts</span></h2>
        </div>
    </div>
    <div class="row">
        @foreach($slides as $slide)
        <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
                <a href="{{route('single',[$food->category->slug,$food->slug])}}" class="img-2"><img src="{{asset($slide->img)}}"
                        class="img-fluid" alt="Colorlib Template"></a>
                <div class="text pt-3">
                    <p class="meta d-flex"><span class="pr-3">{{$slide->category->category}}</span><span class="ml-auto pl-3">
                           {{$slide->created_at}}</span></p>
                    <h3><a href="{{route('single',[$food->category->slug,$food->slug])}}">{{$slide->title}}</a></h3>
                    <p class="mb-0"><a href="{{route('single',[$food->category->slug,$food->slug])}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                </div>
            </div>
        </div>
       @endforeach
    </div>
</div>

<div class="col-lg-3">
    <div class="sidebar-wrap">
        <div class="sidebar-box p-4 about text-center ftco-animate">
            <h2 class="heading mb-4">About Me</h2>
            <img src="images/author.jpg" class="img-fluid" alt="Colorlib Template">
            <div class="text pt-4">
                <p>Hi! My name is <strong>Cathy Deon</strong>, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="sidebar-box p-4 ftco-animate">
            <form action="#" class="search-form">
                <div class="form-group">
                    <span class="icon icon-search"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</section>



<section class="ftco-subscribe ftco-section bg-light">
<div class="overlay">
<div class="container">
<div class="row d-flex justify-content-center">
    <div class="col-md-8 text-wrap text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>Subcribe to our Newsletter</span></h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <div class="row d-flex justify-content-center mt-4 mb-4">
            <div class="col-md-8">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
@endsection
