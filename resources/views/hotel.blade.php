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
    <div class="package_description">

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="OVERVIEW">
                <div class="package_intro text-center">
                    <h1>Popular</h1>
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
                    <div class="col-sm-4 col-xs-6">
                        <div class="package_img">
                            <img src="images/MainPage_24.jpg">
                        </div>
                        <div class="package_desc">
                            <h3>SHEETZ VARIOUS PACKAGE</h3>
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
                    <div class="col-sm-4 col-xs-6">
                        <div class="package_img">
                            <img src="images/MainPage_24.jpg">
                        </div>
                        <div class="package_desc">
                            <h3>SHEETZ VARIOUS PACKAGE</h3>
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
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="PHOTOS">
                <div class="package_intro text-center">
                    <h1>Active</h1>
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
                    <div class="col-sm-4 col-xs-6">
                        <div class="package_img">
                            <img src="images/MainPage_24.jpg">
                        </div>
                        <div class="package_desc">
                            <h3>SHEETZ VARIOUS PACKAGE</h3>
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
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="ROOMS">
                <div class="package_intro text-center">
                    <h1>Culinary</h1>
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
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="PACKAGES">
                <div class="package_intro text-center">
                    <h1>Theatre and culture</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="packages_wrapper clearfix">
                    <div class="col-md-4 col-sm-2 col-xs-12">
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
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="MEETINGS">
                <div class="container-fluid clearfix">
                    <div class="main_row">
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
            <div role="tabpanel" class="tab-pane" id="RESTAURANT">
                @include('includes/hotel_slider')</div>
            <div role="tabpanel" class="tab-pane" id="MORE">
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
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
