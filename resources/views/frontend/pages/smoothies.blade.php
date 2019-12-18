@extends('frontend.layout.app')
@section('content')
<div class="bg12">
    <section class="how-overlay2 bg-img1" style="background-image: url(public/images/smoothie.jpg);">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    SMOOTHIE
                </h2>
                <span class="txt-m-201 cl0 flex-c-m flex-w">
                    <a href="{{ route('home') }}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                        Home
                    </a>
                    <span>
                        / smoothie
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
        <h3 class="txt-m-201"><u><b>Smoothie Menu</b></u></h3>
        <div class="row  p-t-15 p-b-15">

            <div class="col-md-auto container bg13">
                <p class="p-t-25 p-b-10 txt-m-201"><b>Strawberry Vanilla Smoothie................................................................ Rs. 135</b></p>

                <p class="p-t-25 p-b-25 txt-m-201"><b>Pina Colada Smoothie .......................................................................... Rs. 135</b></p>
            </div>
        </div>
    </div>

    <!-- Subscribe -->
</div>
@endsection
