@extends('frontend.layout.app')
@section('content')
<section class="how-overlay2 bg-img1" style="background-image: url(public/images/salad.jpg);">
    <div class="container">
        <div class="txt-center p-t-160 p-b-165">
            <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                Salad
            </h2>
            <span class="txt-m-201 cl0 flex-c-m flex-w">
                <a href="{{ route('home') }}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
                    Home
                </a>
                <span>
                    / Salad
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
                    <th class="column-2">Dish Item</th>
                    <th class="column-2">Dish Price</th>
                    <th class="column-2">kcal, Protein, Carbs</th>
                </tr>

                <tr class="table_row">
                    <td class="column-1">
                        <div class="flex-w flex-m">
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="{{ url('public/images/keto-diet-t.jpg') }}" alt="IMG">
                            </div>

                            <span>
                                Fit Box Special Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Brown rice, corn, Pasta, Pineapple and Veggeis
                    </td>
                    <td class="column-2">
                        &#x20b9; 215
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                214 kcal, 20 grams, 24 gram
                            </span>
                        </div>
                    </td>
                </tr>
                <tr class="table_row">
                    <td class="column-1">
                        <div class="flex-w flex-m">
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="{{ url('public/images/keto-diet-t.jpg') }}" alt="IMG">
                            </div>

                            <span>
                                 Chana Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Boiled Chana, Cucumber, Tomato, Onion, Capcicum, honey, Olives
                    </td>
                    <td class="column-2">
                        &#x20b9; 125
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                167 kcal, 30 grams, 30 gram
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="bg0 p-t-100 p-b-80">
    <div class="container">
        <div class="wrap-table-shopping-cart rs1-table">
            <table class="table-shopping-cart">
                <tr class="table_head bg12">
                    <th class="column-1 p-l-30">Product Name</th>
                    <th class="column-2">Dish Item</th>
                    <th class="column-2">Dish Price</th>
                    <th class="column-2">kcal, Protein, Carbs</th>
                </tr>

                <tr class="table_row">
                    <td class="column-1">
                        <div class="flex-w flex-m">
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="{{ url('public/images/keto-diet-t.jpg') }}" alt="IMG">
                            </div>

                            <span>
                                Fit Box Special Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Brown rice, corn, Pasta, Pineapple and Veggeis
                    </td>
                    <td class="column-2">
                        &#x20b9; 215
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                214 kcal, 20 grams, 24 gram
                            </span>
                        </div>
                    </td>
                </tr>
                <tr class="table_row">
                    <td class="column-1">
                        <div class="flex-w flex-m">
                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                <img src="{{ url('public/images/keto-diet-t.jpg') }}" alt="IMG">
                            </div>

                            <span>
                                 Chana Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Boiled Chana, Cucumber, Tomato, Onion, Capcicum, honey, Olives
                    </td>
                    <td class="column-2">
                        &#x20b9; 125
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                167 kcal, 30 grams, 30 gram
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