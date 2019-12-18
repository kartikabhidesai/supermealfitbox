@extends('frontend.layout.app')
@section('content')
<div class="bg12">
    <section class="how-overlay2 bg-img1" style="background-image: url(public/images/slider.jpg);">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    MUSCLE GAIN
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
                    <a href="{{ route('home') }}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                        Home
                    </a>

                    <span>
                        / Muscle Gain
                    </span>
                </span>
            </div>
        </div>
    </section>
    <div class="p-t-60 p-b-15 text-center">
        <h3 class="txt-m-201"><u><b>Protein Shake</b></u></h3>
        <div class="  p-t-45 p-b-15">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 bg13 txt-m-501">
                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left"> Banana Protein Shake</span><span class="pull-right"> Rs. 175</span></b></p><br>
                        <p class="p-b-5">(Best Pre-post workout Shake, fiber and Potassium with Protein.)</p><hr>

                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left"> Stawberry Protein Shake</span><span class="pull-right"> Rs. 195</span></b></p><br>
                        <p class="p-b-5">(Vitamin C, Pre-post Workout Shake, Protein)</p><hr>

                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left"> Banana Stawberry Cashew nuts Protein Shake</span><span class="pull-right"> Rs. 235</span></b></p><br>
                        <p class="p-b-5">(Vitamin C, Pre-post workout Shake, Protein, Fiber, Potassium)</p><hr>

                        <p class="p-t-15 p-b-15 txt-m-201"><b><span class="pull-left"> Apple and Ots Milkshake</span><span class="pull-right"> Rs. 165</span></b></p><br>
                    </div>
                    <div class="col-md-2">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection