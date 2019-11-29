@extends('frontend.layout.app')
@section('content')
<section class="how-overlay2 bg-img1" style="background-image: url(public/images/bg-07.jpg);">
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
<div class="bg0 p-t-100 p-b-80">
    <div class="container">
        <div class="wrap-table-shopping-cart rs1-table">
            <table class="table-shopping-cart">
                <tr class="table_head bg12">
                    <th class="column-1 p-l-30">Product Name</th>
                    <th class="column-2">Monthly Price</th>
                    <th class="column-2">Monthly Day</th>
                    <th class="column-3">Time Status</th>
                </tr>

                <tr class="table_row">
                    <td class="column-1">
                        <div class="flex-w flex-m">
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="{{ url('public/images/keto-diet-t.jpg') }}" alt="IMG">
                            </div>

                            <span>
                                Break Fast + Detox Juice
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        &#x20b9; 13500 + GST
                    </td>
                    <td class="column-2">
                        30 Days
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <img class="m-t-4 m-r-8" src="{{ url('public/images/icons/icon-list3.png') }}" alt="IMG">
                            <span class="size-w-53 txt-m-104 cl6">
                                Lunch & Dinner
                            </span>
                        </div>
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