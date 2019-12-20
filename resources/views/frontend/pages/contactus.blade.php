@extends('frontend.layout.app')
@section('content')
<section class="how-overlay2 bg-img1" style="background-image: url('public/images/contactus.jpg')">
    <div class="container">
        <div class="txt-center p-t-160 p-b-165">
            <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                Contact
            </h2>

            <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="{{ route('home') }}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    Home
                </a>

                <span>
                    / Contact
                </span>
            </span>
        </div>
    </div>
</section>

<!-- Form Contact -->
<section class="bg0 p-t-60 p-b-60">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-70">
            <h3 class="txt-center txt-l-101 cl3 respon1">
                Leave us a message!
            </h3>
        </div>

        <form id="contact-form" class="validate-form" method="post" name="contact">@csrf
            <div class="row">
                <div class="col-sm-6 p-b-30">
                    <div class="validate-input" data-validate = "Name is required">
                        <input class="txt-s-101 cl3 plh1 size-a-46 bo-all-1 bocl15 focus1 p-rl-20 form-control" type="text" name="name" placeholder="Your Full Name *">
                    </div>
                </div>

                <div class="col-sm-6 p-b-30">
                    <div class="validate-input" data-validate = "Valid email is: ex@abc.xyz">
                        <input class="txt-s-101 cl3 plh1 size-a-46 bo-all-1 bocl15 focus1 p-rl-20 form-control" type="text" name="email" placeholder="Your Email *">
                    </div>
                </div>

                <div class="col-sm-6 p-b-30">
                    <div>
                        <input class="txt-s-101 cl3 plh1 size-a-46 bo-all-1 bocl15 focus1 p-rl-20 form-control" type="text" name="address" placeholder="Your Address">
                    </div>
                </div>

                <div class="col-sm-6 p-b-30">
                    <div class="validate-input" data-validate = "Phone is required">
                        <input class="txt-s-101 cl3 plh1 size-a-46 bo-all-1 bocl15 focus1 p-rl-20 form-control" type="text" name="phone" placeholder="Your Phone *">
                    </div>
                </div>

                <div class="col-12 p-b-30">
                    <div class="validate-input" data-validate = "Message is required">
                        <textarea class="txt-s-101 cl3 plh1 size-a-47 bo-all-1 bocl15 focus1 p-rl-20 p-tb-10 form-control" name="msg" placeholder="Your Message"></textarea>
                    </div>	
                </div>
            </div>

            <div class="flex-c p-t-10">
                <button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04" type="submit">
                    Send us now
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Map -->


<!-- Ccontact -->
<section class="container p-t-30 p-b-45">
    <div class="row">
        <div class="col-sm-6 col-lg-3 p-b-50">
            <div class="flex-col-c-m p-rl-25">
                <div class="wrap-pic-max-s p-b-25">
                    <img src="{{ url('public/images/icons/icon-address.png') }}" alt="IMG">
                </div>

                <h5 class="txt-m-114 cl3 txt-center p-b-9">
                    Address
                </h5>

                <span class="txt-s-101 cl6 txt-center">
                    Plot no 64 , jagannath park -2 Airport road subhashnagar , bhavngar
                </span>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
            <div class="flex-col-c-m p-rl-25">
                <div class="wrap-pic-max-s p-b-25">
                    <img src="{{ url('public/images/icons/icon-phone-03.png') }}" alt="IMG">
                </div>

                <h5 class="txt-m-114 cl3 txt-center p-b-9">
                    Phone
                </h5>

                <span class="txt-s-101 cl6 txt-center">
                    + 91 96 97 98 68 98
                </span>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
            <div class="flex-col-c-m p-rl-25">
                <div class="wrap-pic-max-s p-b-25 p-t-5">
                    <img src="{{ url('public/images/icons/icon-mail-03.png') }}" alt="IMG">
                </div>

                <h5 class="txt-m-114 cl3 txt-center p-b-9">
                    Emaill contact
                </h5>

                <span class="txt-s-101 cl6 txt-center">
                    healthyfitbox@gmail.com
                </span>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 p-b-50">
            <div class="flex-col-c-m p-rl-25">
                <div class="wrap-pic-max-s p-b-25">
                    <img src="{{ url('public/images/icons/icon-web.png') }}" alt="IMG">
                </div>

                <h5 class="txt-m-114 cl3 txt-center p-b-9">
                    Website
                </h5>

                <span class="txt-s-101 cl6 txt-center">
                    supermealfitbox.com
                </span>
            </div>
        </div>
    </div>
</section>
@endsection