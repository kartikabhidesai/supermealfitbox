@extends('frontend.layout.app')
@section('content')
<section class="sec-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_slider_3" class="rev_slide fullwidthabanner" data-version="5.4.5" style="display:none">
            <ul>
                <!-- Slide 1 -->
                <li data-transition="fade">
                    <!--  -->
                    <img src="{{ url('public/images/bg-slide-03.jpg') }}" alt="IMG-BG" class="rev-slidebg">
                    <h2 class="tp-caption tp-resizeme layer2" 
                        data-frames='[{"delay":500,"split":"chars","splitdelay":0.0,"speed":0.1,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                        data-visibility="['on', 'on', 'on', 'on']"

                        data-fontsize="['120', '120', '100', '80']" 
                        data-lineheight="['165', '130', '110', '82']"
                        data-color="['#fff']" 
                        data-textAlign="['center', 'center', 'center', 'center']"

                        data-x="['center']" 
                        data-y="['center']" 
                        data-hoffset="['0', '0', '0', '0']" 
                        data-voffset="['30', '30', '20', '0']"

                        data-width="['960','960','768','576']"
                        data-height="['auto']" 
                        data-whitespace="['normal']" 

                        data-paddingtop="[0, 0, 0, 0]"
                        data-paddingright="[15, 15, 15, 15]"
                        data-paddingbottom="[0, 0, 0, 0]"
                        data-paddingleft="[15, 15, 15, 15]"

                        data-basealign="slide" 
                        data-responsive_offset="on"
                        >
                        super meal fit box
                    </h2>
                </li>
            </ul>				
        </div>
    </div>
</section>

<!-- Special Product -->
<section class="sec-specical-product bg0 p-t-60 p-b-80 p-rl-60 p-rl-0-xl">
    <div class="size-a-1 flex-col-c-m p-b-30">
        <h3 class="txt-center txt-l-101 cl3 respon1">
            Our special products
        </h3>
    </div>

    <!-- slide5 -->
    <div class="wrap-slick5">
        <div class="slick5">

            <div class="item-slick5 p-all-15">
                <!-- Block1 -->
                <a href="{{ route('ketodiet') }}">
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-90 p-t-10">
                            <img style="height: 200px" src="{{ url('public/images/small_ketodiet.png') }}" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-40">
                                <div class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    Keto Diet
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- - -->
            <div class="item-slick5 p-all-15">
                <!-- Block1 -->
                <a href="{{ route('musclegain') }}">
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-100">
                            <img style="height: 200px" src="{{ url('public/images/small_muscle.jpg') }}" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <div class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    Muscle Gain
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- - -->
            <div class="item-slick5 p-all-15">
                <!-- Block1 -->
                <a href="{{ route('healthyjuice') }}">
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-100">
                            <img style="height: 200px" src="{{ url('public/images/small_juice.png') }}" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <div class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    Healthy Juice
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- - -->
            <div class="item-slick5 p-all-15">
                <!-- Block1 -->
                <a href="{{ route('salad') }}">
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-100">
                            <img style="height: 200px" src="{{ url('public/images/small_salad.png') }}" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <div class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    Salad
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="item-slick5 p-all-15">
                <!-- Block1 -->
                <a href="{{ route('customizemeal') }}">
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-100">
                            <img style="height: 200px" src="{{ url('public/images/small_customizemeal.png') }}" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <div class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    Customize Meal
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- - -->
            <div class="item-slick5 p-all-15">
                <!-- Block1 -->
                <a href="{{ route('smoothies') }}">
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04 p-b-100">
                            <img style="height: 200px" src="{{ url('public/images/small_smoothie.jpg') }}" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <div class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    Smoothie
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="wrap-dot-slick5 p-rl-15 p-t-40"></div>
    </div>
</section>

<!-- Why chose -->
<section class="sec-whychose bg12 ">
    <div class="container">
        <div class="row">
            <div class="col-md-7 order-md-2">
                <div class="p-l-50 p-t-20 p-l-0-lg">
                    <div class="size-a-1 flex-col-l-m">
                        <!--                        <div class="txt-m-201 cl10 how-pos1-parent m-b-14">
                                                    Quality Assurance
                        
                                                    <div class="how-pos1">
                                                        <img src="{{ url('public/images/icons/symbol-02.png') }}" alt="IMG">
                                                    </div>
                                                </div>-->

                        <h3 class="txt-l-101 cl3 respon1">
                            Get active
                        </h3>
                        <p class="txt-s-101 cl6 p-t-12">
                            To be healthy along with healthy eating habits, you need regular physical activity. 
                        </p>
                    </div>

                    <div class="p-t-20">
                        <div class="flex-w p-b-50">
                            <div class="size-w-22 wrap-pic-max-s flex-t-l p-t-5">
                                <img src="{{ url('public/images/icons/icon-grid1.png') }}" alt="SYMBOL">
                            </div>

                            <div class="size-w-23">
                                <span class="txt-m-101 cl3">
                                    Adults and children 
                                </span>

                                <p class="txt-s-101 cl6 p-t-12">
                                    To maintain a healthy weight adults need at least 30 minutes a day of moderate activity on 5 days a week or 150 minutes a week. Children need to be active at a moderate to vigorous level for at least 60 minutes every day. 
                                </p>
                            </div>
                        </div>

                        <div class="flex-w p-b-50">
                            <div class="size-w-22 wrap-pic-max-s flex-t-l p-t-5">
                                <img src="{{ url('public/images/icons/icon-grid1.png') }}" alt="SYMBOL">
                            </div>

                            <div class="size-w-23">
                                <span class="txt-m-101 cl3">
                                    Moderate activity 
                                </span>

                                <p class="txt-s-101 cl6 p-t-12">
                                    Moderate activity is any activity that causes your heart to beat slightly faster and your breathing to become noticeably heavier without feeling out of breath. Examples include brisk walking and cycling slower than 10mph. 
                                </p>
                            </div>
                        </div>

                        <div class="flex-w p-b-50">
                            <div class="size-w-22 wrap-pic-max-s flex-t-l p-t-5">
                                <img src="{{ url('public/images/icons/icon-grid1.png') }}" alt="SYMBOL">
                            </div>

                            <div class="size-w-23">
                                <span class="txt-m-101 cl3">
                                    Vigorous activity 
                                </span>

                                <p class="txt-s-101 cl6 p-t-12">
                                    Vigorous activity is any activity that causes a big increase in heart rate and your breathing becomes much faster and deeper leaving you feeling out of breath and sweaty. Examples include running and sports such as football or basketball.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 order-md-1 p-t-1">
                <div class="flex-b h-full">
                    <div class="wrap-pic-max-w"><img style="height: 600px" src="{{ url('public/images/dashboard.png') }}" alt="IMG"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product -->


<!-- We Bring -->
<section class="sec-bring bg-img1 p-t-60 p-b-100" style="background-image: {{ url('public/images/bg-03.jpg') }}">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-40">
            <h3 class="txt-center txt-l-101 cl3 respon1">
                We bring clean food
            </h3>
        </div>

        <div class="how-pos6-parent">
            <!--  -->
            <div class="flex-c-b how-pos6 dis-none-lg">
                <div class="size-w-28 wrap-pic-max-s w-full-sm">
                    <img style="height: 600px" src="{{ url('public/images/demo.png') }}" alt="IMG">
                </div>
            </div>


            <!--  -->
            <div class="flex-w flex-sb m-rl--15 m-rl-0-lg respon20">
                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-e w-full-lg">
                        <div class="size-w-26 flex-r-m txt-right cl3 respon6-01">
                            <b>You are what you Eat, so dont't be FAST CHEAP EASY, or FAKE</b>
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="{{ url('public/images/icons/favicon.png') }}" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">

                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-s w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img src="{{ url('public/images/icons/symbol-23.png') }}" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m cl3">
                            <b>"I DON'T NEED ALARM. MY PASSION WAKES ME UP!"</b>
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">

                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-c p-r-6 w-full-lg">
                        <div class="size-w-26 flex-r-m txt-right cl3 respon6-01">
                            <b>"SIT BACK RELAX AND WATCH BURN OFF"</b>
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="{{ url('public/images/icons/symbol-21.png') }}" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">

                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-c p-l-6 w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img src="{{ url('public/images/icons/symbol-24.png') }}" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m cl3">
                            <b>"EVERY BITE YOU TAKE IS EITHER FIGHTING DISEASE OR FEEDING IT."</b>
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">

                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-s w-full-lg">
                        <div class="size-w-26 flex-r-m txt-right  cl3 respon6-01">
                            <b>"SET PEACE OF MIND AS YOUR HIGHEST GOAL AND ORGANIZE YOUR LIFE AROUND IT"</b>
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="{{ url('public/images/icons/symbol-22.png') }}" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-e w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img src="{{ url('public/images/icons/symbol-25.png') }}" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m  cl3">
                            <b>"One Unhealthy Meal Won't Make You Unhealthy One Healthy Meal Won't Make You Healthy"</b>
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">
                        </p>
                    </div>
                </div>
                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-s w-full-lg">
                        <div class="size-w-26 flex-r-m txt-right  cl3 respon6-01">
                            <b>"Someone's story helped you. Your story will help someone."</b>
                        </div>

                        <div class="size-w-25 flex-r-m respon6-02">
                            <img src="{{ url('public/images/icons/symbol-20.png') }}" alt="SYMBOL">
                        </div>

                        <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                        </p>
                    </div>
                </div>

                <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                    <div class="flex-w flex-str size-w-27 al-self-e w-full-lg">
                        <div class="size-w-25 flex-m">
                            <img style="height: 65px" src="{{ url('public/images/icons/symbol-52.png') }}" alt="SYMBOL">
                        </div>

                        <div class="size-w-26 flex-m  cl3">
                            <b>"Historically humans evolved on high-protein high-fat diets."</b>
                        </div>

                        <p class="txt-s-101 cl6 p-t-7">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our farmers -->
<!--<section class="sec-farmer bg12 p-t-145 p-b-70">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-70">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                The Best Farmers

                <div class="how-pos1">
                    <img src="{{ url('public/images/icons/symbol-02.png') }}" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                Our farmers
            </h3>
        </div>



        <div class="row">
            <div class="col-sm-8 col-md-4 p-b-30 m-rl-auto">
                <div class="hov10 trans-04">
                    <a href="#" class="hov-img0">
                        <img src="{{ url('public/images/farmer-01.jpg') }}" alt="IMG">
                    </a>

                    <div class="flex-col-c-m bg0 p-rl-15 p-t-37 p-b-35">
                        <a href="#" class="txt-m-114 cl3 txt-center hov-cl10 trans-04 p-b-9">
                            Kenneth Snyder
                        </a>

                        <span class="txt-s-101 cl6 txt-center">
                            Vegetables
                        </span>

                        <div class="flex-w flex-c-m p-t-30">
                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-instagram.png') }}" alt="instagram">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-instagram2.png') }}" alt="instagram">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-twitter.png') }}" alt="twitter">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-twitter2.png') }}" alt="twitter">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-google.png') }}" alt="google">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-google2.png') }}" alt="google">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-facebook.png') }}" alt="facebook">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-facebook2.png') }}" alt="facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-4 p-b-30 m-rl-auto">
                <div class="hov10 trans-04">
                    <a href="#" class="hov-img0">
                        <img src="{{ url('public/images/farmer-02.jpg') }}" alt="IMG">
                    </a>

                    <div class="flex-col-c-m bg0 p-rl-15 p-t-37 p-b-35">
                        <a href="#" class="txt-m-114 cl3 txt-center hov-cl10 trans-04 p-b-9">
                            Denise Hoffman
                        </a>

                        <span class="txt-s-101 cl6 txt-center">
                            Vegetables
                        </span>

                        <div class="flex-w flex-c-m p-t-30">
                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-instagram.png') }}" alt="instagram">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-instagram2.png') }}" alt="instagram">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-twitter.png') }}" alt="twitter">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-twitter2.png') }}" alt="twitter">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-google.png') }}" alt="google">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-google2.png') }}" alt="google">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-facebook.png') }}" alt="facebook">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-facebook2.png') }}" alt="facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-md-4 p-b-30 m-rl-auto">
                <div class="hov10 trans-04">
                    <a href="#" class="hov-img0">
                        <img src="{{ url('public/images/farmer-03.jpg') }}" alt="IMG">
                    </a>

                    <div class="flex-col-c-m bg0 p-rl-15 p-t-37 p-b-35">
                        <a href="#" class="txt-m-114 cl3 txt-center hov-cl10 trans-04 p-b-9">
                            Carl Herrera
                        </a>

                        <span class="txt-s-101 cl6 txt-center">
                            Vegetables
                        </span>

                        <div class="flex-w flex-c-m p-t-30">
                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-instagram.png') }}" alt="instagram">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-instagram2.png') }}" alt="instagram">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-twitter.png') }}" alt="twitter">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-twitter2.png') }}" alt="twitter">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-google.png') }}" alt="google">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-google2.png') }}" alt="google">
                            </a>

                            <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                <img class="hov6-child1 trans-04" src="{{ url('public/images/icons/icon-facebook.png') }}" alt="facebook">
                                <img class="ab-t-l hov6-child2 trans-04" src="{{ url('public/images/icons/icon-facebook2.png') }}" alt="facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- Subscribe -->
@endsection