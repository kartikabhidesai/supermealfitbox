@extends('frontend.layout.app')
@section('content')
<section class="how-overlay2 bg-img1" style="background-image: url('public/images/bg-07.jpg')">
    <div class="container">
        <div class="txt-center p-t-160 p-b-165">
            <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                About us
            </h2>

            <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="{{ route('home') }}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    Home
                </a>

                <span>
                    / About Us
                </span>
            </span>
        </div>
    </div>
</section>

<!-- Welcome -->
<section class="sec-welcome bg0 p-t-145 p-b-95">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-90">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                Green Agriculture

                <div class="how-pos1">
                    <img src="{{ url('public/images/icons/symbol-02.png') }}" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                welcome to organive
            </h3>
        </div>

        <div class="wrap-pic-max-w flex-c-t flex-w p-t-255 item-welcome-parent">
            <img class="size-w-1" src="{{ url('public/images/other-01.jpg') }}" alt="IMG">

            <!-- item welcome -->
            <div class="item-welcome one">
                <div class="item-welcome-pic pos-relative">
                    <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                        <img src="{{ url('public/images/icons/icon1.png') }}" alt="IMG">
                    </div>

                    <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                        <img src="{{ url('public/images/icons/icon1.1.png') }}" alt="IMG">
                    </div>
                </div>

                <div class="item-welcome-txt p-t-27">
                    <h4 class="txt-m-101 cl3 txt-center p-b-11">
                        100% Organic
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting .
                    </p>
                </div>
            </div>

            <!-- item welcome -->
            <div class="item-welcome two">
                <div class="item-welcome-pic pos-relative">
                    <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                        <img src="{{ url('public/images/icons/icon2.png') }}" alt="IMG">
                    </div>

                    <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                        <img src="{{ url('public/images/icons/icon2.2.png') }}" alt="IMG">
                    </div>
                </div>

                <div class="item-welcome-txt p-t-27">
                    <h4 class="txt-m-101 cl3 txt-center p-b-11">
                        family healthy
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting .
                    </p>
                </div>
            </div>

            <!-- item welcome -->
            <div class="item-welcome three">
                <div class="item-welcome-pic pos-relative">
                    <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                        <img src="{{ url('public/images/icons/icon3.png') }}" alt="IMG">
                    </div>

                    <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                        <img src="{{ url('public/images/icons/icon3.3.png') }}" alt="IMG">
                    </div>
                </div>

                <div class="item-welcome-txt p-t-27">
                    <h4 class="txt-m-101 cl3 txt-center p-b-11">
                        Always Fresh
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting .
                    </p>
                </div>
            </div>

            <!-- item welcome -->
            <div class="item-welcome four">
                <div class="item-welcome-pic pos-relative">
                    <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                        <img src="{{ url('public/images/icons/icon4.png') }}" alt="IMG">
                    </div>

                    <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                        <img src="{{ url('public/images/icons/icon4.4.png') }}" alt="IMG">
                    </div>
                </div>

                <div class="item-welcome-txt p-t-27">
                    <h4 class="txt-m-101 cl3 txt-center p-b-11">
                        Food safety
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting .
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- We do -->
<section class="sec-wedo flex-w flex-str">
    <div class="size-w-3 bg-img1 respon12" style="background-image: url('public/images/bg-05.jpg')"></div>

    <div class="size-w-3 bg12 p-t-145 p-b-100 p-rl-60 w-full-md p-rl-15-sm">
        <div class="size-a-1 flex-col-c-m p-b-20">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                Business Number Of We

                <div class="how-pos1">
                    <img src="{{ url('public/images/icons/symbol-02.png') }}" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                What can we do?
            </h3>
        </div>

        <!-- Progress -->
        <div class="wrap-progress">
            <span class="dis-block txt-m-121 cl6 p-b-21 p-t-41">
                Best Quality Products
            </span>

            <div class="progress-item" data-percent="85">
                <div class="progress-inner txt-s-113 cl0 txt-right p-r-10">0%</div>
            </div>

            <span class="dis-block txt-m-121 cl6 p-b-21 p-t-41">
                Best Quality Products
            </span>

            <div class="progress-item" data-percent="70">
                <div class="progress-inner txt-s-113 cl0 txt-right p-r-10">0%</div>
            </div>

            <span class="dis-block txt-m-121 cl6 p-b-21 p-t-41">
                Best Quality Products
            </span>

            <div class="progress-item" data-percent="90">
                <div class="progress-inner txt-s-113 cl0 txt-right p-r-10">0%</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="sec-testimonials bg0 p-t-145 p-b-80">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-70">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                Our Testimonials

                <div class="how-pos1">
                    <img src="{{ url('public/images/icons/symbol-02.png') }}" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                Feel the customer
            </h3>
        </div>

        <!-- slide7 -->
        <div class="wrap-slick7 m-rl--15">
            <div class="slick7">
                <!-- - -->
                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t bo-all-2 bocl18 p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">
                        <div class="size-a-14 wrap-pic-s bo-3-rad-50per bocl11 of-hidden trans-04 hov7">
                            <img src="{{ url('public/images/avatar-01.jpg') }}" alt="AVATAR">
                        </div>

                        <div class="size-w-7 flex-col-l p-t-10 w-full-sm">
                            <p class="txt-s-101 cl6 p-b-17">
                                Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure.
                            </p>

                            <span class="txt-m-117 cl3 p-b-4">
                                Christina Cox
                            </span>

                            <span class="txt-s-106 cl10">
                                Local famer
                            </span>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t bo-all-2 bocl18 p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">
                        <div class="size-a-14 wrap-pic-s bo-3-rad-50per bocl11 of-hidden trans-04 hov7">
                            <img src="{{ url('public/images/avatar-02.jpg') }}" alt="AVATAR">
                        </div>

                        <div class="size-w-7 flex-col-l p-t-10 w-full-sm">
                            <p class="txt-s-101 cl6 p-b-17">
                                Except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.
                            </p>

                            <span class="txt-m-117 cl3 p-b-4">
                                Daniel Ross
                            </span>

                            <span class="txt-s-106 cl10">
                                Local famer
                            </span>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t bo-all-2 bocl18 p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">
                        <div class="size-a-14 wrap-pic-s bo-3-rad-50per bocl11 of-hidden trans-04 hov7">
                            <img src="{{ url('public/images/avatar-01.jpg') }}" alt="AVATAR">
                        </div>

                        <div class="size-w-7 flex-col-l p-t-10 w-full-sm">
                            <p class="txt-s-101 cl6 p-b-17">
                                Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure.
                            </p>

                            <span class="txt-m-117 cl3 p-b-4">
                                Christina Cox
                            </span>

                            <span class="txt-s-106 cl10">
                                Local famer
                            </span>
                        </div>
                    </div>
                </div>

                <!-- - -->
                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t bo-all-2 bocl18 p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">
                        <div class="size-a-14 wrap-pic-s bo-3-rad-50per bocl11 of-hidden trans-04 hov7">
                            <img src="{{ url('public/images/avatar-02.jpg') }}" alt="AVATAR">
                        </div>

                        <div class="size-w-7 flex-col-l p-t-10 w-full-sm">
                            <p class="txt-s-101 cl6 p-b-17">
                                Except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.
                            </p>

                            <span class="txt-m-117 cl3 p-b-4">
                                Daniel Ross
                            </span>

                            <span class="txt-s-106 cl10">
                                Local famer
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-dot-slick7 p-rl-15 p-t-65"></div>
        </div>
    </div>
</section>

<!-- Subscribe -->
<section class="sec-subscribe bg13 p-t-15 p-b-15">
    <div class="container">
    </div>
</section>
@endsection