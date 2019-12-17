<footer class="bg12">
    <div class="container">
        <div class="wrap-footer flex-w row">
            <div class="footer-col3 p-b-10 p-t-10 col-md-3">
                <img style="height: 200px" src="{{ url('public/images/logo-fitbox.png') }}" alt="IMG">
            </div>
            <div class="footer-col3 p-b-10 p-t-30 p-l-50 col-md-3">
                <div class="p-b-30">
                    <span class="txt-m-109 cl3">
                        Contact Us
                    </span>
                </div>
                <ul>
                    <li class="txt-s-101 cl6 flex-t p-b-10">
                        <span class="size-w-11">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>

                        <span class="size-w-12 p-t-1">
                            markrussell@example.com
                        </span>
                    </li>

                    <li class="txt-s-101 cl6 flex-t p-b-10">
                        <span class="size-w-11">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>

                        <span class="size-w-12 p-t-1">
                            Bhavanagar
                        </span>
                    </li>

                    <li class="txt-s-101 cl6 flex-t p-b-10">
                        <span class="size-w-11">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>

                        <span class="size-w-12 p-t-1">
                            + 91 96 97 98 68 98
                        </span>
                    </li>
                </ul>
            </div>
            <div class="footer-col3 p-b-10 p-t-30 p-l-50 col-md-3">
                <div class="p-b-30">
                    <span class="txt-m-109 cl3">
                        Follow Us
                    </span>
                </div>
                <ul>
                    <li class="txt-s-101 cl6 flex-t p-b-10">
                        <span class="size-w-11">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </span>
                        <a href="https://www.instagram.com/fitbox_bhavnagar/">
                            <span class="size-w-12 p-t-1">
                                fitbox_bhavnagar
                            </span>
                        </a>
                    </li>
                    <li class="txt-s-101 cl6 flex-t p-b-10">

                        <span class="size-w-11">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </span>
                        <a href="https://www.facebook.com/fitboxbhavnagar">
                            <span class="size-w-12 p-t-1">
                                fitboxbhavnagar
                            </span>
                        </a>
                    </li>
                    <li class="txt-s-101 cl6 flex-t p-b-10">
                        <span class="size-w-11">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        </span>

                        <span class="size-w-12 p-t-1">
                            fitboxbhavnagar
                        </span>
                    </li>
                </ul>
            </div>
            <div class="footer-col3 p-b-10 p-t-30 col-md-3">
                <div class="p-b-30 text-center">
                    <span class="txt-m-109 cl3">
                        My Menu
                    </span>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <ul>
                            <li class="p-b-10">
                                <a href="{{ route('ketodiet') }}" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
                                    Customize Meal

                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ route('musclegain') }}" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
                                    Muscle Gain

                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ route('healthyjuice') }}" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
                                    Healthy Juice

                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <ul>
                            <li class="p-b-10">
                                <a href="{{ route('salad') }}" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
                                    Salad

                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="customizemeal" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
                                    Keto Diet
                                </a>
                            </li>
                            <li class="p-b-10">
                                <a href="{{ route('smoothies') }}" class="txt-s-101 cl6 hov-cl10 trans-04 p-tb-5">
                                    Smoothies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-w flex-sb-m bo-t-1 bocl14 p-tb-10">
            <span class="txt-s-101 cl9 p-tb-5 p-r-29">
                Copyright © {{ date('Y') }} Super Meal Fit Box. All rights reserved.
            </span>
            <div class="flex-w flex-m">
            </div>
        </div>
    </div>
</footer>