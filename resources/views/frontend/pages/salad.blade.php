@extends('frontend.layout.app')
@section('content')
<section class="how-overlay2 bg-img1" style="background-image: url(public/images/keto-diet-t.jpg);">
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
                    <th class="column-1 p-l-30">Salad Name</th>
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
                        <b style="color: black"> &#x20b9; 215</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                Cal 214 kcal, Protein 20 grams, Carbs - 24 gram
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
                        <b style="color: black"> &#x20b9; 125</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                Cal- 167 kcal, Protein 30 grams, Carbs-30 gram
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
                                Brown Rice Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Brown rice burrito bowl loaded with kidney beans, Spicy tomoto Salasa, Sweet corn and cream on top
                    </td>
                    <td class="column-2">
                        <b style="color: black"> &#x20b9; 145</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                Cal 240 Kcal, Protein 32 grams, Carbs 52 gram
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
                                Brown Rice with Paneer tikka Masala Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Brown rice, fudina chutney, baby tomatose with delicious panner tikka Masala
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 195</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                Cal 210 Kcal, Protein 45 gram, carbs 30 gram
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
                                 Protein Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Mix Sprouts, Cucumber, tomato, Onion, Pepsicum Capcicum, Peanut on top with cream on top
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 115</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                Cal-240 Kcal, Protein 55 gram, Carbs 20 gram
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
                                Rajma Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Boiled Rajma, Veggies with cream on top
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 125</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                Cal - 150 Kcal, Protein 30 gram, carbs 25 gram
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
                                 Pasta Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Pasta with mayo and dressing with veggie
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 165</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                - - -
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
                                 Fruit Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Banana, Apple, Honey, Sapota, Kiwi, Graps, Dragon Fruit with Seasonal Fruit with cream on top
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 215</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                - - -
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
                                 Chana tofu Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        boiled Chana with helthy tofu, tomato, brocoli, cucumber with cream on top
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 135</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                - - -
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
                                Panner Corn Sproute Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                       Fry Paneer, boiled baby corn, Pepsicum, Sprouts with Red wine vinaigaratte with chili garlic topping
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 145</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                - - -
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
                                Chole Masala Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Boiled Chole, Brocoli, tomato with chessy mayo
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 125</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                - - -
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
                                Fry Veg Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Crispy brocoli, crispy pepsicum, tomato with delicious souce gravy
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 135</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                - - -
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
                                 Penut Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Boiled penut, Veggied with delicious gravy
                    </td>
                    <td class="column-2">
                       <b style="color: black"> &#x20b9; 125</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                - - -
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
                                Maxican Salad
                            </span>
                        </div>
                    </td>
                    <td class="column-2">
                        Pepsicum, brocoli, lettuce with Kidney beans, top with fry Paneer and baby tomato
                    </td>
                    <td class="column-2">
                      <b style="color: black"> &#x20b9; 135</b>
                    </td>
                    <td class="column-3">
                        <div class="flex-t">
                            <span class="size-w-53 txt-m-104 cl6">
                                - - -
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