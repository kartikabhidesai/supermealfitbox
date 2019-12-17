@extends('frontend.layout.app')
@section('content')
<div class="bg12">
    <section class="how-overlay2 bg-img1" style="background-image: url(public/images/slider.jpg);">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    CUSTOMIZE MEAL
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
                    <a href="{{ route('home') }}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                        Home
                    </a>

                    <span>
                       / Customize Meal
                    </span>
                </span>
            </div>
        </div>
    </section>
</div>
<section class="sec-subscribe bg13 p-t-15 p-b-15">
    <div class="container">
    </div>
</section>
<div class="text-center"><h1>Content</h1></div>
<section class="sec-subscribe bg13 p-t-15 p-b-15">
    <div class="container">
    </div>
</section>  
@endsection