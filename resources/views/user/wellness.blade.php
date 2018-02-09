@extends('layouts.app')
<!---->
@section('content')
<div class="intro wellness">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>WELLNESS</h1>
            <p><span class="white_txt">Wellness</span>and relaxation for body and soul</p>

        </div>
    </div>
</div>
<div class="wellness_sheetz text-center">
    <h1 class="text-uppercase hidden-xs"><span>wellness at sheetz</span></h1>
    <div class="intro">
        <p>The ultimate escape: enjoy exclusive treatments and total peace of mind. Bilderberg's Wellness Centres guarantee expert facial and body treatments with high-quality products in a luxurious setting. </p>
        <p>Time for some personal attention and well-earned rest and relaxation! Our Wellness Centres are cosy and welcoming. We only cater for a limited number of guests in the Centres, so you can be sure of personal attention.</p>
    </div>
    <div class="wellness_packages">
        <h2><em>Wellness packages</em></h2>
        <div class="intro">
            <p>An escape from the everyday hustle and bustle. Book one, two or three nights the Sheetz Wellness package, including a Wellness treatment and culinary 3-course dinner.</p>
        </div>
        <div class="wellness_slider">
            <div class="single_item">
                <div>
                    <div class="slide_wrapper">
                        <div class="slider_img">

                            <img class="media-object" src="images/Wellness_03.jpg" alt="...">

                        </div>
                        <div class="package_include text-left">
                            <ul>
                                <li>2, 4 or 8 x overnight stay</li>
                                <li>4, 5 or 7 x Bilderberg breakfast</li>
                                <li>2 x three-course dinner</li>
                                <li>welcome drink</li>
                                <li>choice of facial or body massage</li>
                                <li>use bathrobes during your stay</li>
                            </ul>

                        </div>
                        <div class="package_price">
                            <p class="from gold">€149.00</p>
                            <span>per stay with two persons </span>
                            <a href="#" class="hvr-sweep-to-right readmore" tabindex="0">read more</a>
                        </div>
                    </div>
                    <div class="slide_wrapper">
                        <div class="slider_img">

                            <img class="media-object" src="images/Wellness_03.jpg" alt="...">

                        </div>
                        <div class="package_include text-left">
                            <ul>
                                <li>2, 4 or 8 x overnight stay</li>
                                <li>4, 5 or 7 x Bilderberg breakfast</li>
                                <li>2 x three-course dinner</li>
                                <li>welcome drink</li>
                                <li>choice of facial or body massage</li>
                                <li>use bathrobes during your stay</li>
                            </ul>

                        </div>
                        <div class="package_price">
                            <p class="from gold">€149.00</p>
                            <span>per stay with two persons </span>
                            <a href="#" class="hvr-sweep-to-right readmore" tabindex="0">read more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide_wrapper">
                        <div class="slider_img">

                            <img class="media-object" src="images/Wellness_03.jpg" alt="...">

                        </div>
                        <div class="package_include text-left">
                            <ul>
                                <li>2, 4 or 8 x overnight stay</li>
                                <li>4, 5 or 7 x Bilderberg breakfast</li>
                                <li>2 x three-course dinner</li>
                                <li>welcome drink</li>
                                <li>choice of facial or body massage</li>
                                <li>use bathrobes during your stay</li>
                            </ul>

                        </div>
                        <div class="package_price">
                            <p class="from gold">€149.00</p>
                            <span>per stay with two persons </span>
                            <a href="#" class="hvr-sweep-to-right readmore" tabindex="0">read more</a>
                        </div>
                    </div>
                    <div class="slide_wrapper">
                        <div class="slider_img">

                            <img class="media-object" src="images/Wellness_03.jpg" alt="...">

                        </div>
                        <div class="package_include text-left">
                            <ul>
                                <li>2, 4 or 8 x overnight stay</li>
                                <li>4, 5 or 7 x Bilderberg breakfast</li>
                                <li>2 x three-course dinner</li>
                                <li>welcome drink</li>
                                <li>choice of facial or body massage</li>
                                <li>use bathrobes during your stay</li>
                            </ul>

                        </div>
                        <div class="package_price">
                            <p class="from gold">€149.00</p>
                            <span>per stay with two persons </span>
                            <a href="#" class="hvr-sweep-to-right readmore" tabindex="0">read more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('includes/wellness_package')
<div class="our_hotels_content text-center">
    <h1><span>our wellness centers</span></h1>
    @include('includes/wellness_center')
</div>
@endsection
