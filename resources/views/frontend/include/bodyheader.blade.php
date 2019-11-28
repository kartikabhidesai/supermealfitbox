<header class="header-v2">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop">
                <div class="left-header">
                    <!-- Logo desktop -->		
                    <div class="logo">
                        <a href="index-2.html"><img src="{{ ('public/images/icons/logo-02.png') }}" alt="IMG-LOGO"></a>
                    </div>	
                </div>

                <div class="pull-right">
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="{{ route('home') }}">home</a>
                                <!--                                <ul class="sub-menu">
                                                                    <li><a href="index-2.html">Homepage 1</a></li>
                                                                    <li><a href="home-02.html">Homepage 2</a></li>
                                                                    <li><a href="home-03.html">Homepage 3</a></li>
                                                                    <li><a href="home-04.html">Homepage 4</a></li>
                                                                    <li><a href="home-05.html">Homepage 5</a></li>
                                                                    <li><a href="home-06.html">Homepage 6</a></li>
                                                                </ul>-->
                            </li>

                            <li>
                                <a href="{{ route('aboutus') }}">about Us</a>
                            </li>

                            <li>
                                <a href="{{ route('ketodiet') }}">keto diet</a>
                            </li>

                            <li>
                                <a href="{{ route('musclegain') }}">muscle gain</a>
                            </li>

                            <li>
                                <a href="{{ route('healthyjuice') }}">healthy juice</a>
                            </li>

                            <li>
                                <a href="{{ route('salad') }}">salad</a>
                            </li>
                            <li>
                                <a href="{{ route('customizemeal') }}">customize meal</a>
                            </li>
                            <li>
                                <a href="{{ route('smoothies') }}">smoothies</a>
                            </li>
                            <li>
                                <a href="{{ route('contactus') }}">contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>


            </nav>
        </div>	
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->		
        <div class="logo-mobile">
            <a href="index-2.html"><img src="{{ ('public/images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
            <div class="wrap-cart-header h-full flex-m m-l-5 menu-click">

                <div class="cart-header menu-click-child trans-04">
                    <div class="bo-b-1 bocl15">
                        <!-- cart header item -->
                        <div class="flex-w flex-str m-b-25">
                            <div class="size-w-15 flex-w flex-t">
                                <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                    <img src="{{ ('public/images/item-cart-01.jpg') }}" alt="PRODUCT">
                                </a>

                                <div class="size-w-17 flex-col-l">
                                    <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                        Cheery
                                    </a>

                                    <span class="txt-s-101 cl9">
                                        18$
                                    </span>

                                    <span class="txt-s-109 cl12">
                                        x2
                                    </span>
                                </div>
                            </div>

                            <div class="size-w-14 flex-b">
                                <button class="lh-10">
                                    <img src="{{ ('public/images/icons/icon-close.png') }}" alt="CLOSE">
                                </button>
                            </div>
                        </div>

                        <!-- cart header item -->
                        <div class="flex-w flex-str m-b-25">
                            <div class="size-w-15 flex-w flex-t">
                                <a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                    <img src="{{ ('public/images/item-cart-02.jpg') }}" alt="PRODUCT">
                                </a>

                                <div class="size-w-17 flex-col-l">
                                    <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                        Asparagus
                                    </a>

                                    <span class="txt-s-101 cl9">
                                        12$
                                    </span>

                                    <span class="txt-s-109 cl12">
                                        x1
                                    </span>
                                </div>
                            </div>

                            <div class="size-w-14 flex-b">
                                <button class="lh-10">
                                    <img src="{{ ('public/images/icons/icon-close.png') }}" alt="CLOSE">
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-w flex-sb-m p-t-22 p-b-12">
                        <span class="txt-m-103 cl3 p-r-20">
                            Subtotal
                        </span>

                        <span class="txt-m-111 cl6">
                            48$
                        </span>
                    </div>

                    <div class="flex-w flex-sb-m p-b-31">
                        <span class="txt-m-103 cl3 p-r-20">
                            Total
                        </span>

                        <span class="txt-m-111 cl10">
                            48$
                        </span>
                    </div>

                    <a href="checkout.html" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                        check out
                    </a>	
                </div>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="{{ route('home') }}">home</a>
                <!--                                <ul class="sub-menu">
                                                    <li><a href="index-2.html">Homepage 1</a></li>
                                                    <li><a href="home-02.html">Homepage 2</a></li>
                                                    <li><a href="home-03.html">Homepage 3</a></li>
                                                    <li><a href="home-04.html">Homepage 4</a></li>
                                                    <li><a href="home-05.html">Homepage 5</a></li>
                                                    <li><a href="home-06.html">Homepage 6</a></li>
                                                </ul>-->
            </li>

            <li>
                <a href="{{ route('aboutus') }}">about Us</a>
            </li>

            <li>
                <a href="{{ route('ketodiet') }}">keto diet</a>
            </li>

            <li>
                <a href="{{ route('musclegain') }}">muscle gain</a>
            </li>

            <li>
                <a href="{{ route('healthyjuice') }}">healthy juice</a>
            </li>

            <li>
                <a href="{{ route('salad') }}">salad</a>
            </li>
            <li>
                <a href="{{ route('customizemeal') }}">customize meal</a>
            </li>
            <li>
                <a href="{{ route('smoothies') }}">smoothies</a>
            </li>
            <li>
                <a href="{{ route('contactus') }}">contact us</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->

</header>