@extends('layouts.app')
<!---->
@section('content')
<div class="intro meetings">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>MEETINGS AT SHEETZ</h1>
            <p>Because meetings should be a <span class="white_txt">source of inspiration</span></p>

        </div>
    </div>
</div>
<div class="meetings_content text-center">
    <span>Meetings at</span>
    <h1>Sheetz</h1>
    <p>Every business meeting is different. But whichever business package you book, you will always experience Sheetz quality. We offer the very best facilities, an attractive setting and our Maître B' at your complete disposal. We will be very happy to draw up a proposal on the basis of your requirements and budget!</p>
    <a class="downloads"><img src="images/icon12.png"><span>Download capacity overview</span></a>
</div>
<div class="meetings_packages text-center">
    <h1><span>COMPLETE MEETING PACKAGES</span></h1>
    @include('includes/meetings_slider')

</div>
<div class="inspirational text-center">
    <div class="container-fluid">
        <h2><span class="gold">#</span>INSPIRATIONAL MEETINGS</h2>
        <div class="inspirational_slider">
            <a href="#"><img src="images/HotelPage_07.jpg"></a>
            <a href="#"><img src="images/HotelPage_09.jpg"></a>
            <a href="#"><img src="images/HotelPage_11.jpg"></a>
            <a href="#"><img src="images/HotelPage_07.jpg"></a>
            <a href="#"><img src="images/HotelPage_09.jpg"></a>
            <a href="#"><img src="images/HotelPage_11.jpg"></a>
        </div>
    </div>
    <div class="text-center general_txt">
        <p>When you think of a meeting, do you think of tedious sessions which never seem to end? We don't. After all, a meeting can be enjoyable as well as useful. For example, you could meet outside in the forest or end your meeting with a running clinic, wine-tasting session or (our favourite) a sheep herding workshop. It's guaranteed to be an experience!</p>
    </div>
</div>
<div class="what_client_say fix_you_need text-center">
    <div class="container">
        <div class="row">
            <p class="view_popular">
                Service at <span>Sheetz level</span>
            </p>
            <h1><em>All you need for successful meeting</em></h1>
            <div class="clearfix need_wrapper">
                <div class="col-sm-4 col-xs-12 text-center">
                    <div class="need_img"><img src="images/icon6.png"></div>
                    <div class="need_txt">
                        <h4>All facilities</h4>
                        <p>From high-speed wifi to a classic flip chart, the Sheetz locations have everything you need to ensure that your meeting runs smoothly.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 text-center">
                    <div class="need_img"><img src="images/icon7.png"></div>
                    <div class="need_txt">
                        <h4>Food and drink</h4>
                        <p>Need renewed energy? No problem with the freshly-ground coffee in our coffee corner, a healthy lunch or with a high-quality dinner and breakfast.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 text-center">
                    <div class="need_img"><img src="images/icon8.png"></div>
                    <div class="need_txt">
                        <h4>Personal waiters</h4>
                        <p>During your meeting, our waiters will always be at your disposal to answer any questions and to provide support and extra service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="press_release meetings_contact container">
    <div class="row">
        <div class="col-sm-4 col-xs-12">
            <div class="release_content text-center">
                <h3><em>contact</em></h3>
                <h5>Sheetz Head Office</h5>
                <span>Beukenlaan 52 | 6871 CL Renkum</span>
                <span>Telephone: +31 (0)317 - 318 319</span>
                <a href="mailto:info@sheetz.nl">info@sheetz.nl</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="release_content text-center">
                <h3><em>Exclusive hotel use</em></h3>
                <p>The exclusive use of a hotel offers numerous possibilities. Privacy, all the facilities at your disposal and your own personal programme.</p>
                <a href="tel:+31 (0)317 362 266">+31 (0)317 362 266.</a>
            </div>
        </div>
    </div>
</div>
<!---->
@endsection
