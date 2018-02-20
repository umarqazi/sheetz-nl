@extends('layouts.app')
<!---->
@section('content')
<!---->

<div class="account_wrapper">
    <h1 class="text-center">Your Sheetz</h1>
    <div class="account_content row">
        <div class="account_tab_links col-sm-3 col-xs-12">
            <div class="packages_tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="icon1 active"><a href="#your_account" aria-controls="your_account" role="tab" data-toggle="tab">Your account</a></li>
                    <li role="presentation" class="icon2"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab">Active orders</a></li>
                    <li role="presentation" class="icon3"><a href="#order_history" aria-controls="order_history" role="tab" data-toggle="tab">Orders history</a></li>
                    <li role="presentation" class="icon4"><a href="#rewards" aria-controls="rewards" role="tab" data-toggle="tab">Rewards</a></li>
                </ul>
            </div>
        </div>
        <div class="account_description col-sm-9 col-xs-12">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="your_account">
                    <h3>Your Sheetz Account</h3>
                    <p>These details are displayed next to your publicly shared reviews, ratings, photos, etc. Any updates you make here will also appear in past contributions.</p>
                    <form class="account_form">
                        <div class="form-group row">
                            <label class="col-sm-3 col-xs-12">Profile picture</label>
                            <div class="col-sm-9 col-xs-12">
                                <div class="uploaded_photo">
                                    <img src="images/client.png">
                                    <div class="box">
                                        <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                                        <label for="file-1"><span>Choose a file&hellip;</span></label>
                                        <p><i class="fa fa-info-circle"></i><span>The first thing people see is your photo, so show them your best side!</span></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="orders">
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
                <div role="tabpanel" class="tab-pane fade" id="order_history">
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
                <div role="tabpanel" class="tab-pane fade" id="rewards">
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
</div>
@endsection
