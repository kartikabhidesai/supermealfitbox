@extends('frontend.layout.app')
@section('content')
<div class="bg12">
    <section class="how-overlay2 bg-img1" style="background-image: url(public/images/salad.png);background-position: top">
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
    <div class="p-t-60 p-b-15 text-center">
        <h3 class="txt-m-201"><u><b>Salad Menu</b></u></h3>
        <div class="  p-t-45 p-b-15">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 bg13 txt-m-501">
                        <p class="p-t-20 p-b-10 txt-m-201"><b><span class="pull-left">Salad (30 Days)</span><span class="pull-right"> Rs. 3080 + GST</span></span></b></p><br><br>
                        <p class="p-b-10 txt-m-501">New Salad Every Day</p><hr>

                        <p class="p-t-20 p-b-10 txt-m-201"><b><span class="pull-left">Fit Box Special Salad</span><span class="pull-right"> Rs. 215</span></b></p><br>
                        <p class="p-b-10 txt-m-501">Brown rice, corn, Pasta, Pineapple and Veggeis</p>
                        <p class="p-b-15">(Cal 214 kcal, Protein 20 grams, Carbs - 24 gram)</p><hr>


                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left">Chana Salad</span><span class="pull-right"> Rs. 125</span></b></p><br>
                        <p class="p-b-10 txt-m-501">Boiled Chana, Cucumber, Tomato, Onion, Capcicum, honey, Olives</p>
                        <p class="p-b-15">(Cal- 167 kcal, Protein 30 grams, Carbs-30 gram)</p><hr>


                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left">Brown Rice Salad</span><span class="pull-right"> Rs. 145</span></b></p><br>
                        <p class="p-b-10 txt-m-501">Brown rice burrito bowl loaded with kidney beans, Spicy tomoto Salasa, Sweet corn and cream on top.</p>
                        <p class="p-b-15">(Cal 240 Kcal, Protein 32 grams, Carbs 52 gram)</p><hr>


                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left">Brown Rice with Paneer tikka Masala Salad</span><span class="pull-right">Rs. 195</span></b></p><br>
                        <p class="p-b-10 txt-m-501">Brown rice, fudina chutney, baby tomatose with delicious panner tikka Masala.</p>
                        <p class="p-b-15">(Cal 210 Kcal, Protein 45 gram, carbs 30 gram)</p><hr>


                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left">Protein Salad</span><span class="pull-right"> Rs. 115</span></b></p><br>
                        <p class="p-b-10 txt-m-501">Mix Sprouts, Cucumber, tomato, Onion, Pepsicum Capcicum, Peanut on top with cream on top.</p>
                        <p class="p-b-15">(Cal-240 Kcal, Protein 55 gram, Carbs 20 gram)</p><hr>


                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left">Rajma Salad</span><span class="pull-right"> Rs. 125</span></b></p><br>
                        <p class="p-b-10 txt-m-501">Boiled Rajma, Veggies with cream on top.</p>
                        <p class="p-b-15">(Cal - 150 Kcal, Protein 30 gram, carbs 25 gram)</p><hr>


                        <p class="p-t-15 p-b-10 txt-m-201"><b><span class="pull-left">Pasta Salad</span><span class="pull-right"> Rs. 165</span></b></p><br>
                        <p class="p-b-15 txt-m-501">Pasta with mayo and dressing with veggie Seasonal Fruit with cream on top.</p><hr>

                        <p class="p-t-25 p-b-10 txt-m-201"><b><span class="pull-left">Fruit Salad</span><span class="pull-right"> Rs. 215</span></b></p><br>
                        <p class="p-b-15 txt-m-501">Banana, Apple, Honey, Sapota, Kiwi, Graps, Dragon Fruit with</p><hr>

                        <p class="p-t-25 p-b-10 txt-m-201"><b><span class="pull-left">Chana tofu Salad</span><span class="pull-right"> Rs. 135</span></b></p><br>
                        <p class="p-b-15 txt-m-501">boiled Chana with helthy tofu, tomato, brocoli, cucumber with cream on top.</p><hr>

                        <p class="p-t-25 p-b-10 txt-m-201"><b><span class="pull-left">Panner Corn Sproute Salad</span><span class="pull-right"> Rs. 145</span></b></p><br>
                        <p class="p-b-15 txt-m-501">Fry Paneer, boiled baby corn, Pepsicum, Sprouts with Red wine vinaigaratte with chili garlic topping.</p><hr>

                        <p class="p-t-25 p-b-10 txt-m-201"><b><span class="pull-left">Chole Masala Salad</span><span class="pull-right"> Rs. 125</span></b></p><br>
                        <p class="p-b-15 txt-m-501">Boiled Chole, Brocoli, tomato with chessy mayo</p><hr>

                        <p class="p-t-25 p-b-10 txt-m-201"><b><span class="pull-left">Fry Veg Salad</span><span class="pull-right"> Rs. 135</span></b></p><br>
                        <p class="p-b-15 txt-m-501">Crispy brocoli, crispy pepsicum, tomato with delicious souce gravy.</p><hr>

                        <p class="p-t-25 p-b-10 txt-m-201"><b><span class="pull-left">Penut Salad</span><span class="pull-right"> Rs. 125</span></b></p><br>
                        <p class="p-b-15 txt-m-501">Boiled penut, Veggied with delicious gravy</p><hr>

                        <p class="p-t-25 p-b-10 txt-m-201"><b><span class="pull-left">Maxican Salad</span><span class="pull-right"> Rs. 135</span></b></p><br>
                        <p class="p-b-20 txt-m-501">Pepsicum, brocoli, lettuce with Kidney beans, top with fry Paneer and baby tomato.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-t-45 p-b-15 text-center">
        <h3 class="txt-m-201"><u><b>Benefits of Salad</b></u></h3>
        <div class="p-t-45 p-b-15">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 bg13 txt-m-501">
                        <ul class="text-left">
                            <li class="p-t-15"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Best Therapy For Weight Lose.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> A daily salad will Aid your in take of health fats.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Build strong bones.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Protect Your Heart.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Natural Source of Fiber.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Protect Your Peepers.</li>
                            <li class="p-t-10"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Improve Muscle Performance.</li>
                            <li class="p-t-10 p-b-15"><i class="fa fa-leaf text-success" aria-hidden="true"></i></i> Improve Skin Tone.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection