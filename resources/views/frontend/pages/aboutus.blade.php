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
                Healthy Food

                <div class="how-pos1">
                    <img src="{{ url('public/images/icons/symbol-02.png') }}" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                welcome to Super Meal Fit Box
            </h3>
        </div>

        <div class="wrap-pic-max-w flex-c-t flex-w p-t-255 item-welcome-parent">
            <img class="size-w-3" src="{{ url('public/images/basket.png') }}" alt="IMG">

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
                        Confidence in being well-prepared from everything
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
                    </p>
                </div>
            </div>

            <div class="item-welcome five">
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
                        Optimal gains from the training programme
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
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
                        Enhanced recovery within and between workouts and events
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
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
                        Achievement and maintenance of an ideal body weight and physique
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
                    </p>
                </div>
            </div>
            <div class="item-welcome seven">
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
                        A reduced risk of injury and illness
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
                    </p>
                </div>
            </div>

            <!-- item welcome -->
            <div class="item-welcome eight">
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
                        Healthy and energetic lifestyle.
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
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
                        Consistency in achieving high-level performances
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
                    </p>
                </div>
            </div>
            <div class="item-welcome six">
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
                        Enjoyment of food and social eating occasions
                    </h4>

                    <p class="txt-s-101 cl6 txt-center">
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- We do -->
<section class="sec-wedo flex-w flex-str p-t-120 ">
    <div class="size-w-12 bg12 p-t-60 p-b-20 p-rl-60 w-full-md p-rl-15-sm bg13">
        <div class="size-a-1 flex-col-c-m">
            <h3 class="txt-center txt-l-101 cl3 respon1">
                Common problems and challenges
            </h3>
        </div>
        <div class="p-b-15 text-left">
            <div class="row  p-t-15 p-b-15">

                <div class="col-md-auto container ">
                    <p class=" p-b-10 txt-m-201">
                        <b><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color: #8eb854"></i>&nbsp;&nbsp;Poor knowledge of foods and drinks and inadequate cooking skills</b>
                    </p>
                    <p class=" p-b-10 txt-m-201">
                        <b><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color: #8eb854"></i>&nbsp;&nbsp;Poor choices when shopping or dining out</b>
                    </p>
                    <p class=" p-b-10 txt-m-201">
                        <b><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color: #8eb854"></i>&nbsp;&nbsp;Poor or outdated knowledge of nutrition</b>
                    </p>
                    <p class=" p-b-10 txt-m-201">
                        <b><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color: #8eb854"></i>&nbsp;&nbsp;Inadequate finances</b>
                    </p>
                    <p class=" p-b-10 txt-m-201">
                        <b><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color: #8eb854"></i>&nbsp;&nbsp;Busy lifestyle leading to inadequate time to obtain or consume appropriate foods</b>
                    </p>
                    <p class=" p-b-10 txt-m-201">
                        <b><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color: #8eb854"></i>&nbsp;&nbsp;Poor availability of good food and drink choices</b>
                    </p>
                    <p class=" p-b-10 txt-m-201">
                        <b><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color: #8eb854"></i>&nbsp;&nbsp;Frequent travel</b>
                    </p>
                    <p class=" p-b-10 txt-m-201">
                        <b><i class="fa fa-chevron-circle-right" aria-hidden="true" style="color: #8eb854"></i>&nbsp;&nbsp;Indiscriminate use of supplements and sports foods</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sec-testimonials bg0 p-t-60 p-b-80">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-40">
            <h3 class="txt-center txt-l-101 cl3 respon1">
                KEY MESSAGES
            </h3>
        </div>


        <div class="wrap-slick7 m-rl--15">
            <div class="slick7">
                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t  p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">
                        <div class="flex-col-l p-t-10 w-full-sm ">
                            <p class="txt-s-101 cl6 p-b-17 txt-m-201">
                                All people need to be aware of their personal nutritional goals and of how they can select an eating strategy to meet those goals.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t  p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">
                        <div class="flex-col-l p-t-10 w-full-sm">
                            <p class="txt-s-101 cl6 p-b-17 txt-m-201">
                                Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t  p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">
                        <div class="flex-col-l p-t-10 w-full-sm">
                            <p class="txt-s-101 cl6 p-b-17 txt-m-201">
                                Carbohydrate supplies the muscles and brain with the fuels they need to meet the stress of training and competition. People must be aware of what foods they should choose to meet their carbohydrate needs
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">

                        <div class="flex-col-l p-t-10 w-full-sm">
                            <p class="txt-s-101 cl6 p-b-17 txt-m-201">
                                Diet may have its biggest impact on training, and a good diet will help support consistent intensive training while limiting the risks of illness or injury. Good food choices can also promote adaptations to the training stimulus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">
                        <div class="flex-col-l p-t-10 w-full-sm">
                            <p class="txt-s-101 cl6 p-b-17 txt-m-201">
                                Getting the right amount of energy to stay healthy and to perform well is essential. Consuming too much energy increases body fat. If one do not eat enough, performance falls, injuries are more likely to occur, and results in illness.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item-slick7 p-rl-15">
                    <div class="flex-w flex-sb-t p-rl-33 p-t-33 p-b-30 hov7-parent p-rl-15-sm">

                        <div class="flex-col-l p-t-10 w-full-sm">
                            <p class="txt-s-101 cl6 p-b-17 txt-m-201">
                                People often covers a wide range of events which require varying inputs of technique, strength, power, speed and endurance. Everyone is also different, and there is no single diet that meets the needs of all at all times. Individual needs also change across the season and one must be flexible to accommodate this.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-dot-slick7 p-rl-15 p-t-65"></div>
        </div>
    </div>
</section>
@endsection