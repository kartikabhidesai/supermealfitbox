@extends('frontend.layout.app')
@section('content')
<section class="how-overlay2 bg-img1" style="background-image: url(public/images/keto-diet-t.jpg);">
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
<div class="bg0 p-t-100 p-b-80">
    <div class="container">
        <div class="wrap-table-shopping-cart rs1-table">
            <table class="table-shopping-cart">
                <tr class="table_head bg12">
                    <th class="column-1 p-l-30">Smoothie Name</th>
                    <th class="column-2">Price</th>
                </tr>

                <tr class="table_row">
                    <td class="column-1">
                        <div class="flex-w flex-m">
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="{{ url('public/images/keto-diet-t.jpg') }}" alt="IMG">
                            </div>

                            <span>
                                Stawaberry Vanilla Smoothie
                            </span>
                        </div>
                    </td>

                    <td class="column-2">
                        <b style="color: black"> &#x20b9; 135</b>
                    </td>

                </tr>
                <tr class="table_row">
                    <td class="column-1">
                        <div class="flex-w flex-m">
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="{{ url('public/images/keto-diet-t.jpg') }}" alt="IMG">
                            </div>

                            <span>
                                Pina Colada Smoothie
                            </span>
                        </div>
                    </td>

                    <td class="column-2">
                        <b style="color: black"> &#x20b9; 135</b>
                    </td>

                </tr>
            </table>
        </div>
    </div>
</div>
<!-- Subscribe -->
<section class="sec-subscribe bg13 p-t-15 p-b-15">
    <div class="container">
    </div>
</section>
@endsection
