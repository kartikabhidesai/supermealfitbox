@extends('frontend.layout.app')
@section('content')
<div class="bg12">
    <section class="how-overlay2 bg-img1" style="background-image: url(public/images/slider.jpg);">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    KETO DIET
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
                    <a href="{{ route('home') }}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                        Home
                    </a>

                    <span>
                        / Keto Diet
                    </span>
                </span>
            </div>
        </div>
    </section>
    <section class="sec-subscribe bg13 p-t-15 p-b-15">
        <div class="container">
        </div>
    </section>
    <div class="p-t-50 p-b-15 text-center">
        <h3 class="txt-m-201"><u><b>Keto Diet Menu</b></u></h3>
        <div class="row  p-t-15 p-b-15">

            <div class="col-md-auto container bg13 txt-m-501">
                <p class="p-t-15 p-b-10 txt-m-201"><b>3 Time Meal (30 Days) ..................... &#x20b9; 13500 + GST</b></p>
                <p class="p-t-15 p-b-5"><b>Break Fast + Detox Juice</b></p>
                <p class="p-b-10"><b>Lunch & Dinner</b></p>
            </div>
        </div>
    </div>
    <div class="p-t-25 p-b-15 text-center">
        <h3 class="txt-m-201"><u><b>Benefits of Keto Diet</b></u></h3>
        <div class="row  p-t-15 p-b-15">

            <div class="col-md-auto container bg1 txt-m-501">
                <ul class="text-left" style="color: white">
                    <li class="p-t-15"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Best Therapy For Weight Lose.</li>
                    <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Improving Skin Glow.</li>
                    <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> May Help Reduce Risk of Cancer.</li>
                    <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Improve Heart Health.</li>
                    <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> May Protect Brain Functioning.</li>
                    <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Improve Health in Women With PCOS</li>
                    <li class="p-t-10 p-b-15"> (Polycystic Overies Syndrome).</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="sec-subscribe bg13 p-t-15 p-b-15">
        <div class="container">
        </div>
    </section>
</div>
@endsection