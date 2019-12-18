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
    <div class="p-t-60 p-b-15 text-center">
        <h3 class="txt-m-201"><u><b>Keto Diet Menu</b></u></h3>
        <div class="p-t-45 p-b-15">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 bg13 txt-m-501">
                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left">3 Time Meal (30 Days)</span><span class="pull-right"> Rs. 13500 + GST</span></b></p><br>
                        <p class="p-t-15 p-b-5"><b>Break Fast + Detox Juice</b></p>
                        <p class="p-b-10"><b>Lunch & Dinner</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-t-45 p-b-15 text-center">
        <h3 class="txt-m-201"><u><b>Benefits of Keto Diet</b></u></h3>
        <div class="p-t-45 p-b-15">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 bg13 txt-m-501">
                        <ul class="text-left">
                            <li class="p-t-15"><i class="fa fa-leaf text-success" aria-hidden="true"></i>&nbsp;&nbsp; Best Therapy For Weight Lose.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i>&nbsp;&nbsp; Improving Skin Glow.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i>&nbsp;&nbsp; May Help Reduce Risk of Cancer.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i>&nbsp;&nbsp; Improve Heart Health.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i>&nbsp;&nbsp; May Protect Brain Functioning.</li>
                            <li class="p-t-10 p-b-15"><i class="fa fa-leaf text-success" aria-hidden="true"></i>&nbsp;&nbsp; Improve Health in Women With PCOS (Polycystic Overies Syndrome).</li>
                        </ul>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection