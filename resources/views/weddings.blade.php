@extends('layouts.app')
<!---->
@section('content')
<div class="intro weddings">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>WEDDINGS</h1>
            <p>The best day of your life, in the most <strong>beautiful locations</strong> in the Netherlands</p>

        </div>
    </div>
</div>
<div class="meetings_content text-center">
    <div class="packages text-center">
        <p class="view_popular">
            It is the <span>best day</span>
        </p>
        <h1>Of your life</h1>
    </div>
    <p>Saying your vows to each other, surrounded by family and friends. An unforgettable day, full of love and romance. Sheetz unique wedding locations offer everything you need to make your day truly special. How about getting married on a country estate in South Limburg or in an authentic castle, or a fabulous party in a charming farmhouse? </p>
    <p>Check our locations and <a href="#" class="gold">contact us</a> for wedding advice.</p>
</div>
<!---->
<div class="our_hotels_content text-center">
    <h1><span>OUR WEDDING LOCATIONS</span></h1>
    @include('includes/wellness_center')
</div>
<div class="common_gallery text-center">
    <h1 class="text-uppercase">
        <p><span class="gold">#</span>AMAZING DAY</p>

    </h1>
    <span>from our customers and members</span>
</div>
<!---->
<div class="what_client_say packages text-center">
    <div class="container">
        <div class="row">
            <p class="view_popular">
                What <span>our</span>
            </p>
            <h1>Partners say</h1>
            <div class="packages_wrapper clearfix">
                <div class="responsive3">
                    <div class="col-sm-4 col-xs-12">
                        <div class="package_img">
                            <img src="images/partner.png">
                        </div>
                        <div class="package_desc text-center">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="package_img">
                            <img src="images/partner.png">
                        </div>
                        <div class="package_desc text-center">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="package_img">
                            <img src="images/partner.png">
                        </div>
                        <div class="package_desc text-center">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="package_img">
                            <img src="images/partner.png">
                        </div>
                        <div class="package_desc text-center">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="package_img">
                            <img src="images/partner.png">
                        </div>
                        <div class="package_desc text-center">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="package_img">
                            <img src="images/partner.png">
                        </div>
                        <div class="package_desc text-center">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
