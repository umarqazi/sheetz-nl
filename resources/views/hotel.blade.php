@extends('layouts.app')
<!---->
@section('content')
<!---->
<div class="intro hotel_banner">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>Grand Hotel Ter Duin</h1>
            <p>Classic <span class="white_txt">grandeur and contemporary</span> hotspot in the centre of lively Netherlands.</p>

        </div>
    </div>
</div>
<div class="hotel_content">
    <div class="scroll_tabs">
        <div class="packages_tabs hotel_menu">

            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#OVERVIEW" aria-controls="OVERVIEW" role="tab" data-toggle="tab">OVERVIEW</a></li>
                <li role="presentation"><a href="#PHOTOS" aria-controls="PHOTOS" role="tab" data-toggle="tab">PHOTOS</a></li>
                <li role="presentation"><a href="#ROOMS" aria-controls="ROOMS" role="tab" data-toggle="tab">ROOMS</a></li>
                <li role="presentation"><a href="#PACKAGES" aria-controls="PACKAGES" role="tab" data-toggle="tab">PACKAGES</a></li>
                <li role="presentation"><a href="#MEETINGS" aria-controls="MEETINGS" role="tab" data-toggle="tab">MEETINGS AND EVENTS</a></li>
                <li role="presentation"><a href="#RESTAURANT" aria-controls="RESTAURANT" role="tab" data-toggle="tab">RESTAURANT</a></li>
                <li role="presentation"><a href="#MORE" aria-controls="MORE" role="tab" data-toggle="tab">MORE</a></li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="OVERVIEW">
            <div class="container-fluid">
                <div class="client_review">
                    <div class="about_ceo">
                        <div class="ceo_message clearfix">
                            <div class="ceo_img"><img src="images/logo1.png"></div>
                            <div class="ceo_txt">
                                <em>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"</em>
                                <h5>Maurice Lacroix</h5>
                                <span>International Fashion Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="restaurant_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <img src="images/img7.jpg">
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <span>WELCOME TO</span>
                            <h1><em>Grand Hotel Ter Duin</em></h1>
                            <address>
                            <p>
<span class="gold">Address:</span><span>Westersingel 70, 3015 LB Rotterdam</span>
                            </p>
                            <p>
                                <span class="gold">Telephone:</span><a href="tel:+31 (0)10 436 3611">+31 (0)10 436 3611</a>
                            </p>
                            <p>
<span class="gold">Email:</span><a href="mailto:">parkhotel@sheetz.nl</a>
                            </p>
                        </address>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cont aining of Letraset sheets cont ainin Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inspirational text-center">
                <div class="container-fluid">
                    <h2><span class="gold">#</span>GRAND HOTEL TER DUIN</h2>
                    <div class="inspirational_slider">
                        <a href="#"><img src="images/HotelPage_07.jpg"></a>
                        <a href="#"><img src="images/HotelPage_09.jpg"></a>
                        <a href="#"><img src="images/HotelPage_11.jpg"></a>
                        <a href="#"><img src="images/HotelPage_07.jpg"></a>
                        <a href="#"><img src="images/HotelPage_09.jpg"></a>
                        <a href="#"><img src="images/HotelPage_11.jpg"></a>
                    </div>
                </div>
            </div>
            <div class="events_at_sheetz">
                <div class="responsive1 hidden-xs">
                    <div class="events_wrapper clearfix">
                        <div class="package_img"><img src="images/HotelPage_20.jpg"></div>
                        <div class="package_desc text-left">
                            <h3>ACTIVITIES</h3>
                            <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="readmore">read more</a>
                        </div>
                    </div>
                    <div class="events_wrapper clearfix">
                        <div class="package_img"><img src="images/HotelPage_24.jpg"></div>
                        <div class="package_desc text-left">
                            <h3>HOTEL WATERPOOL</h3>
                            <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="readmore">read more</a>
                        </div>
                    </div>
                </div>
                <div class="event_slider visible-xs">
                    <div class="events_wrapper clearfix">
                        <div class="package_img"><img src="images/MainPage_30.jpg"></div>
                        <div class="package_desc text-left">
                            <h3>EVENTS AT SHEETZ</h3>
                            <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="readmore">read more</a>
                        </div>
                    </div>
                    <div class="events_wrapper clearfix">
                        <div class="package_img"><img src="images/HotelPage_24.jpg"></div>
                        <div class="package_desc text-left">
                            <h3>MEETINGS AT SHEETZ</h3>
                            <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="readmore">read more</a>
                        </div>
                    </div>
                    <div class="events_wrapper clearfix">
                        <div class="package_img"><img src="images/HotelPage_20.jpg"></div>
                        <div class="package_desc text-left">
                            <h3>WEDDINGS AT SHEETZ</h3>
                            <p>Everything is possible: A multi-day conference at a party with live music, a great BBQ or a team building on the beach or in the woods. Our team ensures that everything goes smoothly.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="readmore">read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="common_gallery text-center">
                <h1 class="text-uppercase">
                    <p>Discover more about <span class="gold">#Sheetz</span></p>
                </h1>
                <span>from our customers and members</span>
                <div class="container-fluid">
                    <div id="freewall" class="free-wall hidden-xs"></div>
                </div>
            </div>
            @include('includes/gallery_slider')
            <div class="social_links text-center">
                <ul>
                    <li class="hidden-xs">
                        <p>Visit our profiles in social media:</p>
                    </li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="our_locations text-center">
                <span><em>Location &</em></span>
                <h2>directions</h2>
                <ul>
                    <li><img src="images/map.png"><span>Hogeweg 55, Burgh-haamstede, Nederland</span></li>
                    <li><img src="images/arrow-sm.png"></li>
                    <li><img src="images/map.png"><span>Hogeweg 55, Burgh-haamstede, Nederland</span></li>
                    <li><a href="#" class="hvr-sweep-to-right view_all">GET DIRECTIONS</a></li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47340147884!2d-0.24168155595638174!3d51.52855824123293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2s!4v1515431623689" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="PHOTOS">
            <div class="container-fluid">
                <div id="freewall" class="free-wall"></div>
            </div>

        </div>
        <div role="tabpanel" class="tab-pane fade" id="ROOMS">
            <div class="room_wrapper">
                <div class="room_content clearfix">
                    <div class="pull-left">
                        <div class="slider_img">
                            <img class="media-object" src="images/img8.jpg" alt="...">
                        </div>
                        <div class="package_include text-left">
                            <h3>Premium</h3>
                            <span>1-3 persons</span>
                            <ul class="room_features">
                                <li><img src="images/HotelPage_Rooms_06.png"></li>
                                <li><img src="images/HotelPage_Rooms_08.png"></li>
                                <li><img src="images/HotelPage_Rooms_10.png"></li>
                                <li><img src="images/HotelPage_Rooms_03.png"></li>
                            </ul>
                            <p class="room_description">The difference is in the details. At 22-25 m2, the Luxury Room is the smallest, yet equally as luxurious.<a href="#">View room details</a></p>

                        </div>
                    </div>
                    <div class="package_price text-right">
                        <p>from<span class="gold">$ 128</span></p>
                        <span>per night</span>
                        <a href="#" class="hvr-sweep-to-right readmore" tabindex="0">show rates</a>
                        <div class="billing_details">
                            <p>Prices are per room</p>
                            <p>Inculded: 10% Vat </p>
                        </div>
                    </div>
                </div>
                <div class="room_content clearfix">
                    <div class="pull-left">
                        <div class="slider_img">
                            <img class="media-object" src="images/img9.jpg" alt="...">
                        </div>
                        <div class="package_include text-left">
                            <h3>Luxury suite</h3>
                            <span>1-3 persons</span>
                            <ul class="room_features">
                                <li><img src="images/HotelPage_Rooms_06.png"></li>
                                <li><img src="images/HotelPage_Rooms_08.png"></li>
                                <li><img src="images/HotelPage_Rooms_10.png"></li>
                                <li><img src="images/HotelPage_Rooms_03.png"></li>
                            </ul>
                            <p class="room_description">The difference is in the details. At 22-25 m2, the Luxury Room is the smallest, yet equally as luxurious.<a href="#">View room details</a></p>

                        </div>
                    </div>
                    <div class="package_price text-right">
                        <p>from<span class="gold">$ 178</span></p>
                        <span>per night</span>
                        <a href="#" class="hvr-sweep-to-right readmore" tabindex="0">show rates</a>
                        <div class="billing_details">
                            <p>Prices are per room</p>
                            <p>Inculded: 10% Vat </p>
                        </div>
                    </div>
                </div>

                <div class="room_content clearfix">
                    <div class="pull-left">
                        <div class="slider_img">
                            <img class="media-object" src="images/img8.jpg" alt="...">
                        </div>
                        <div class="package_include text-left">
                            <h3>Premium</h3>
                            <span>1-3 persons</span>
                            <ul class="room_features">
                                <li><img src="images/HotelPage_Rooms_06.png"></li>
                                <li><img src="images/HotelPage_Rooms_08.png"></li>
                                <li><img src="images/HotelPage_Rooms_10.png"></li>
                                <li><img src="images/HotelPage_Rooms_03.png"></li>
                            </ul>
                            <p class="room_description">The difference is in the details. At 22-25 m2, the Luxury Room is the smallest, yet equally as luxurious.<a href="#">View room details</a></p>

                        </div>
                    </div>
                    <div class="package_price text-right">
                        <p>from<span class="gold">$ 128</span></p>
                        <span>per night</span>
                        <a href="#" class="hvr-sweep-to-right readmore" tabindex="0">show rates</a>
                        <div class="billing_details">
                            <p>Prices are per room</p>
                            <p>Inculded: 10% Vat </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div role="tabpanel" class="tab-pane fade" id="PACKAGES">
            @include('includes/packages_tabs')
        </div>
        <div role="tabpanel" class="tab-pane fade" id="MEETINGS">
            <div class="container-fluid clearfix">
                <div class="main_row">
                    <div class="packages_wrapper">
                        <div class="responsive3">
                            <div class="col-sm-4 col-xs-12">
                                <div class="package_img">
                                    <img src="images/img4.jpg">
                                </div>
                                <div class="package_desc">
                                    <h3>8-HOUR MEETING PACKAGE</h3>
                                    <p>Enjoy a relaxing one-day meeting in a plenary meeting room. The room offers every convenience, such as a tool kit, high-speed wifi, whiteboard, flip charts and a projector with screen.</p>
                                    <ul>
                                        <li>Fresh coffee and tea in the Bilderberg Coffee Corner</li>
                                        <li>The comprehensive Bilderberg Lunch</li>
                                        <li>Personal service from the Maître B’</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="package_img">
                                    <img src="images/img5.jpg">
                                </div>
                                <div class="package_desc">
                                    <h3>12-HOURS MEETING PACKAGE</h3>
                                    <p>Get the most out of your day with a 12-hour package. Hold your meeting during the day and enjoy a culinary dinner in the evening, possibly followed by an evening session. Content of the 8-hour business package, plus:</p>
                                    <ul>
                                        <li>The Bilderberg Dinner</li>
                                        <li>Use of the plenary meeting room in the evening</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="package_img">
                                    <img src="images/img6.jpg">
                                </div>
                                <div class="package_desc">
                                    <h3>32-HOUR MEETING PACKAGE</h3>
                                    <p>Would you like to book a multi-day meeting package? The 32-hour meeting package gives you the use of the plenary meeting room for two days, a delicious dinner and a relaxing overnight stay. </p>
                                    <ul>
                                        <li>Overnight stay in a luxury hotel room</li>
                                        <li>The Bilderberg Breakfast</li>
                                        <li>Use of the meeting room on the second day</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="package_img">
                                    <img src="images/img4.jpg">
                                </div>
                                <div class="package_desc">
                                    <h3>8-HOUR MEETING PACKAGE</h3>
                                    <p>Enjoy a relaxing one-day meeting in a plenary meeting room. The room offers every convenience, such as a tool kit, high-speed wifi, whiteboard, flip charts and a projector with screen.</p>
                                    <ul>
                                        <li>Fresh coffee and tea in the Bilderberg Coffee Corner</li>
                                        <li>The comprehensive Bilderberg Lunch</li>
                                        <li>Personal service from the Maître B’</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="package_img">
                                    <img src="images/img5.jpg">
                                </div>
                                <div class="package_desc">
                                    <h3>12-HOURS MEETING PACKAGE</h3>
                                    <p>Get the most out of your day with a 12-hour package. Hold your meeting during the day and enjoy a culinary dinner in the evening, possibly followed by an evening session. Content of the 8-hour business package, plus:</p>
                                    <ul>
                                        <li>The Bilderberg Dinner</li>
                                        <li>Use of the plenary meeting room in the evening</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="package_img">
                                    <img src="images/img6.jpg">
                                </div>
                                <div class="package_desc">
                                    <h3>32-HOUR MEETING PACKAGE</h3>
                                    <p>Would you like to book a multi-day meeting package? The 32-hour meeting package gives you the use of the plenary meeting room for two days, a delicious dinner and a relaxing overnight stay. </p>
                                    <ul>
                                        <li>Overnight stay in a luxury hotel room</li>
                                        <li>The Bilderberg Breakfast</li>
                                        <li>Use of the meeting room on the second day</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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

        </div>
        <div role="tabpanel" class="tab-pane fade" id="RESTAURANT">
            <div class="restaurant_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <img src="images/img7.jpg">
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <span>RESTAURANT</span>
                            <h1><em>Wanderloo</em></h1>
                            <address>
                            <p>
<span class="gold">Address:</span><span>Westersingel 70, 3015 LB Rotterdam</span>
                            </p>
                            <p>
                                <span class="gold">Telephone:</span><a href="tel:+31 (0)10 436 3611">+31 (0)10 436 3611</a>
                            </p>
                            <p>
<span class="gold">Email:</span><a href="mailto:">parkhotel@sheetz.nl</a>
                            </p>
                        </address>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cont aining of Letraset sheets cont ainin Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="general_txt text-center">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                </p>
            </div>
            <div class="press_release container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="release_content text-center">
                            <h3><em>Opening hours</em></h3>

                            <span>Monday to Friday&nbsp;&nbsp;&nbsp;12 noon - 1 am</span>
                            <span>Saturday&nbsp;&nbsp;&nbsp;6 pm - 1 am</span>
                            <span>Sunday&nbsp;&nbsp;&nbsp;6 pm - 1 am</span>
                            <h5>Kitchen open until 10 pm</h5>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="release_content text-center">
                            <h3><em>menus</em></h3>
                            <div class="view_our_menu">
                                <a href="#">View our menu</a>
                                <a href="#">View our High Tea menu</a>
                                <a href="#">View our wine menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="release_content text-center">
                            <h3><em>book</em></h3>
                            <span>Telephone: +31 (0)317 - 318 319</span>
                            <a class="book_order" href="mailto:info@thepark.nl">info@thepark.nl</a>
                            <a href="#" class="readmore">book hotel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="what_client_say packages text-center">
                <div class="container">
                    <div class="row">
                        <p class="view_popular">
                            What <span>our</span>
                        </p>
                        <h1>Clients say</h1>
                        @include('includes/what_client_slider')
                    </div>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="MORE">
            <!--
<div class="package_intro text-center">
    <h1>Wellness and Leisure</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
<div class="packages_wrapper clearfix">
    <div class="col-sm-4 col-xs-6">
        <div class="package_img">
            <img src="images/MainPage_20.jpg">
        </div>
        <div class="package_desc">
            <h3>SHEETZ ALL-IN-ONE PACKAGE</h3>
            <span>3 Hotels</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="clearfix package_desc_inline">
                <div class="col-lg-7 col-xs-12">
                    <p class="from">From <span>€149.00 </span></p>
                    <span>per stay with two persons </span>
                </div>
                <div class="col-lg-5 col-xs-12">
                    <a href="#" class="hvr-sweep-to-right readmore">read more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-6">
        <div class="package_img">
            <img src="images/MainPage_22.jpg">
        </div>
        <div class="package_desc">
            <h3>SHEETZ HOTEL PACKAGE</h3>
            <span>3 Hotels</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="clearfix package_desc_inline">
                <div class="col-lg-7 col-xs-12">
                    <p class="from">From <span>€149.00 </span></p>
                    <span>per stay with two persons </span>
                </div>
                <div class="col-lg-5 col-xs-12">
                    <a href="#" class="hvr-sweep-to-right readmore">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>-->
        </div>

    </div>
</div>
@endsection
