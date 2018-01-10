@extends('layouts.app')
<!---->
@section('content')
<!---->
<div class="intro gifts">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>GIFT VOUCHERS</h1>
            <p>Would you like to treat someone to an <strong>original gift?</strong></p>

        </div>
    </div>
</div>
<div class="package_availability">

    <div class="row clearfix">
        <div class="col-sm-5 col-xs-12 pull-right package_include">
            <ul>
                <li>Full hotel package or Bilderberg credit</li>
                <li>Can be used in all Bilderberg hotels</li>
                <li>Pay via invoice</li>
                <li>Sent within a week of payment</li>
                <li>Can be sent directly to the recipient </li>
            </ul>
        </div>
        <div class="col-sm-7 col-xs-12">
            <p>Looking for the perfect gift? A Bilderberg gift voucher or Gift Package is an excellent choice if you are looking for a special surprise for your friends, family, staff or business contacts. Give someone the gift of a wonderful overnight stay and/or delicious dinner in one of the welcoming Bilderberg hotels.</p>
        </div>
    </div>
</div>
<div class="gift_wrapper text-center">
    <h1>ORDER YOUR GIFT VOUCHER</h1>
    <p>The ideal gift for friends, family or business contacts.</p>

    <div class="packages_wrapper clearfix">
        <div class="col-sm-4 col-xs-12">
            <div class="package_img">
                <img src="images/img1.jpg">
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
        <div class="col-sm-4 col-xs-12">
            <div class="package_img">
                <img src="images/img1.jpg">
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
        <div class="col-sm-4 col-xs-12">
            <div class="package_img">
                <img src="images/img1.jpg">
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

@include('includes/vouchar_received')

<div class="terms_conditions">
    <h3>TERMS AND CONDITIONS</h3>
    <ul>
        <li>In the event of loss or theft, we are unable to issue new gift vouchers and/or Gift Packages.</li>
        <li>Gift vouchers and Gift Packages are valid untill 3 years after activation.</li>
        <li>Gift vouchers and Gift Packages can not be exchanged for cash.</li>
        <li>At several hotels, the Gift Packages are subject to a surcharge which must be paid at the hotel:</li>
        <li>For the Bilderberg Landgoed Lauswolt, a surcharge of € 200 for each 2-person package applies.</li>
        <li>It is not possible to use the gift voucher for non-refundable rates, as these require immediate payment by credit card.</li>
    </ul>
</div>
<!---->
@endsection
