@extends('layouts.app')
<!---->
@section('content')
<div class="intro weddings">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>Events</h1>
            <p>Make your event memorable with our <span class="white_txt">beautiful locations</span> in the Netherlands</p>

        </div>
    </div>
</div>

<!---->
<br><br>
<div class="wedding_locations text-center">
    <h1><span>OUR EVENTS LOCATIONS</span></h1>
    @include('includes/wellness_center')
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
    </p>
</div>
<div class="common_gallery amazing_day text-center">
    <h1 class="text-uppercase">
        <p><span class="gold">#</span>AMAZING DAY</p>
    </h1>
    <span>from our customers and members</span>
    <div class="container">
        <div class="row">
            <div class="amazing_day clearfix">
                <div class="col-sm-4 col-xs-12">
                    <div class="slider_img">
                        <a href="#"><img src="images/img11.jpg"></a>
                    </div>
                    <div class="slider_txt">
                        <h3>Official wedding venues</h3>
                        <p>The wedding venues of Sheetz among to the most beautiful of the Netherlands. Give each other the vows in an old fortress, a romantic castle or a stylish residence. All wedding venues of Bilderberg are official "House of Commons". We take care of everything.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="slider_img">
                        <a href="#"><img src="images/img16.jpg"></a>
                    </div>
                    <div class="slider_txt">
                        <h3>Perfectly arranged</h3>
                        <p>We think along with you! In all Sheetz wedding venues we help you to make your special day unforgettable. The wedding cake, photography or a luxury dinner: you can leave it to us.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="slider_img">
                        <a href="#"><img src="images/img13.jpg"></a>
                    </div>
                    <div class="slider_txt">
                        <h3>For every budget</h3>
                        <p>Bilderberg has space for every budget. A small wedding or a joyful party: the possibilities are endless. We help you to make your day memorable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---->

<!-- testimonial sldier -->
<div class="testimonials text-center">
    <h1 class="text-uppercase"><span>YOUR KIND FEEDBACK</span></h1>
    @include('includes/testimonial_slider')
</div>
<div class="wedding_form_wrapper clearfix">

    <div class="col-sm-6 hidden-xs">
        <img src="images/img10.jpg">
    </div>
    <div class="wedding_form col-sm-6 col-xs-12">
        <span>REQUEST YOUR EVENT INFORMATION</span>
        <h2><em>Make your event successful</em></h2>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name and Last Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="E-mail...">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Question and remarks...">
            </div>
            <div class="hotel_filter">
                <ul>
                    <div class="filter_inner clearfix">

                        <li class="dropdown">
                            <span>Desired Hotel</span>
                            <img src="images/icon2.png">
                            <input type="text" class="form-control datepicker" placeholder="Check In">
                        </li>
                        <li class="dropdown">
                            <span>Event Date</span>
                            <img src="images/icon1.png">
                            <input type="text" class="form-control datepicker" placeholder="Select Date">
                        </li>
                    </div>
                </ul>


            </div>
            <div class="view_all hvr-sweep-to-right">SEND REQUEST</div>
        </form>
    </div>
</div>

@endsection
