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
                    <hr>
                    <form class="account_form">
                        <div class="form-group row">
                            <label class="col-sm-3 col-xs-12">Profile picture</label>
                            <div class="col-sm-9 col-xs-12">
                                <div class="uploaded_photo">
                                    <img src="images/dummy_user.png">
                                    <div class="box">
                                        <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                                        <label for="file-1" class="hvr-sweep-to-right view_all"><span>change photo</span></label>
                                        <p><i class="fa fa-info-circle"></i><span>The first thing people see is your photo, so show them your best side!</span></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-xs-12">First & last name</label>
                            <div class="col-sm-9 col-xs-12">
                                <div class="row">
                                    <input type="text" class="form-control w50" placeholder="Your first name" value="{{Auth::guard('web')->user()->fname}}">
                                    <input type="text" class="form-control w50" placeholder="Your last name" value="{{Auth::guard('web')->user()->lname}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-xs-12">Phone number</label>
                            <div class="col-sm-3 col-xs-12">
                                <input type="text" class="form-control" placeholder="+X XXX XXX XX XX">
                            </div>
                            <label class="col-sm-2 col-xs-12">E-mail</label>
                            <div class="col-sm-4 col-xs-12">
                                <input type="text" class="form-control" placeholder="Your conact e-mail..." value="{{Auth::guard('web')->user()->email}}">
                            </div>
                        </div>
                        <hr>
                        <div class="hotel_filter">
                            <ul>
                                <div class="filter_inner row">
                                    <li class="dropdown">
                                        <label class="">Birthday</label>
                                    </li>
                                    <li class="dropdown">
                                        <img src="images/calender.png">
                                        <input type="text" class="form-control datepicker" placeholder="Check In">
                                    </li>
                                    <li class="dropdown">
                                        <label class="">Country</label>
                                    </li>
                                    <li class="dropdown">
                                        <img src="images/flag_icon.png">
                                        <select class="selectpicker">
                    <option><span>Room Type</span></option>
                    <option><span>aaa</span></option>
                </select>
                                    </li>
                                </div>
                            </ul>
                            <span><i class="fa fa-info-circle"></i>We’ll display this info as an age range, like “25-30.”</span>
                            <span><i class="fa fa-info-circle"></i>People are curious about where you’re from.</span>
                        </div>
                        <hr>
                        <h3>Credit Cards</h3>
                        <p>We’ll autofill your details and make it easier for you to book properties and additional services through Sheetz. Your payment details are stored securely.</p>
                        <div class="cards_list">
                            <ul>
                                <li>
                                    <a href="#"><img src="images/visa.png"><span>0000 **** **** 0000</span><img src="images/close.png"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/visa.png"><span>0000 **** **** 0000</span><img src="images/close.png"></a>
                                </li>
                            </ul>
                            <a href="#" data-target=".signin_modal" data-toggle="modal" class="hvr-sweep-to-right view_all">ADD NEW CARD</a>
                        </div>
                        <hr>
                        <h3>Change password</h3>
                        <p>Try to change your password at least 1 time per year.</p>
                        <div class="form-group row">
                            <label class="col-sm-3 col-xs-12">Change password</label>
                            <div class="col-sm-9 col-xs-12">
                                <div class="row">
                                    <input type="text" class="form-control w50" placeholder="New password...">
                                    <input type="text" class="form-control w50" placeholder="Confirm password...">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a href="#" class="hvr-sweep-to-right view_all">update profile</a>
                        <hr>
                        <h3>Social connections</h3>
                        <p>Sign in with just 1 click when you link to Facebook or Google</p>
                        <div class="social_login">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="orders">

                    <h3>Your Active Orders</h3>
                    <p>Browse the details of your active orders and manage them. You can remove your order by pressing cross at the top left corner.</p>
                    <div class="row">
                        <div class="orders_card col-sm-6 col-xs-12">

                            <div class="clearfix">
                                <a href="#" class="close_order"><img src="images/close.png"></a>
                                <h5>Persons, dates and hotel</h5>
                                <h4 class="pull-left">Grand Hotel Ter Duin <span>Netherlands</span>
                                </h4>
                                <div class="pull-right rateit abc" data-rateit-mode="font" data-rateit-icon="" style="font-family:fontawesome"></div>
                                <ul>
                                    <li>From 25.10.2015 - 27.10.2015</li>
                                    <li>2 Adults</li>
                                    <li>1 Child</li>
                                </ul>
                                <div class="payment_info">
                                    <h5>Payment info</h5>
                                    <div class="payment_info_content">
                                        <h5>John Michael Doe</h5>
                                        <p>johmichaeldoe@gmail.com</p>
                                        <p>4242 ********** 2525</p>
                                    </div>
                                    <hr>
                                    <h1>$ 475</h1>
                                    <p>(98$ room + $ 15 All taxes)</p>
                                </div>
                            </div>
                        </div>
                        <div class="orders_card col-sm-6 col-xs-12">

                            <div class="clearfix">
                                <a href="#" class="close_order"><img src="images/close.png"></a>
                                <h5>Persons, dates and hotel</h5>
                                <h4 class="pull-left">Grand Hotel Ter Duin <span>Netherlands</span>
                                </h4>
                                <div class="pull-right rateit" data-rateit-mode="font" data-rateit-icon="" style="font-family:fontawesome"></div>
                                <ul>
                                    <li>From 25.10.2015 - 27.10.2015</li>
                                    <li>2 Adults</li>
                                    <li>1 Child</li>
                                </ul>
                                <div class="payment_info">
                                    <h5>Payment info</h5>
                                    <div class="payment_info_content">
                                        <h5>John Michael Doe</h5>
                                        <p>johmichaeldoe@gmail.com</p>
                                        <p>4242 ********** 2525</p>
                                    </div>
                                    <hr>
                                    <h1>$ 475</h1>
                                    <p>(98$ room + $ 15 All taxes)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div role="tabpanel" class="tab-pane fade" id="order_history">
    <h3>Your booking history</h3>
    <p>Browse the details of your orders history.</p>
    <div class="orders_card">
        <div class="clearfix">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <h4 class="pull-left">Grand Hotel Ter Duin <span>Netherlands</span>
                    </h4>
                    <div class="pull-right rateit" data-rateit-mode="font" data-rateit-icon="" style="font-family:fontawesome"></div>
                    <div class="col-xs-12 payment_info_content">
                        <h5>John Michael Doe</h5>
                        <p>johmichaeldoe@gmail.com</p>
                        <p>4242 ********** 2525</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <ul>
                        <li>From 25.10.2015 - 27.10.2015</li>
                        <li>2 Adults</li>
                        <li>1 Child</li>
                    </ul>
                    <div class="payment_info">
                        <h1>$ 475</h1>
                        <p>(98$ room + $ 15 All taxes)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="orders_card">
        <div class="clearfix">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <h4 class="pull-left">Grand Hotel Ter Duin <span>Netherlands</span>
                    </h4>
                    <div class="pull-right rateit" data-rateit-mode="font" data-rateit-icon="" style="font-family:fontawesome"></div>
                    <div class="col-xs-12 payment_info_content">
                        <h5>John Michael Doe</h5>
                        <p>johmichaeldoe@gmail.com</p>
                        <p>4242 ********** 2525</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <ul>
                        <li>From 25.10.2015 - 27.10.2015</li>
                        <li>2 Adults</li>
                        <li>1 Child</li>
                    </ul>
                    <div class="payment_info">
                        <h1>$ 475</h1>
                        <p>(98$ room + $ 15 All taxes)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="orders_card">
        <div class="clearfix">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <h4 class="pull-left">Grand Hotel Ter Duin <span>Netherlands</span>
                    </h4>
                    <div class="pull-right rateit" data-rateit-mode="font" data-rateit-icon="" style="font-family:fontawesome"></div>
                    <div class="col-xs-12 payment_info_content">
                        <h5>John Michael Doe</h5>
                        <p>johmichaeldoe@gmail.com</p>
                        <p>4242 ********** 2525</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <ul>
                        <li>From 25.10.2015 - 27.10.2015</li>
                        <li>2 Adults</li>
                        <li>1 Child</li>
                    </ul>
                    <div class="payment_info">
                        <h1>$ 475</h1>
                        <p>(98$ room + $ 15 All taxes)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="orders_card">
        <div class="clearfix">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <h4 class="pull-left">Grand Hotel Ter Duin <span>Netherlands</span>
                    </h4>
                    <div class="pull-right rateit" data-rateit-mode="font" data-rateit-icon="" style="font-family:fontawesome"></div>
                    <div class="col-xs-12 payment_info_content">
                        <h5>John Michael Doe</h5>
                        <p>johmichaeldoe@gmail.com</p>
                        <p>4242 ********** 2525</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <ul>
                        <li>From 25.10.2015 - 27.10.2015</li>
                        <li>2 Adults</li>
                        <li>1 Child</li>
                    </ul>
                    <div class="payment_info">
                        <h1>$ 475</h1>
                        <p>(98$ room + $ 15 All taxes)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
                <div role="tabpanel" class="tab-pane fade" id="rewards">
                    <h3>Your Reward Points</h3>
                    <p>Reward points for your orders, choosed wellness and events packages.</p>
                    <div class="row">
                        <div class="your_rewards col-sm-6 col-xs-12">
                            <h1>475 pt</h1>
                            <ul>
                                <li>150 points for orders</li>
                                <li>300 points for packages</li>
                                <li>25 points bonus as regular customer</li>
                            </ul>
                        </div>
                        <div class="your_rewards col-sm-6 col-xs-12">
                            <h1>1 pt<span> = 1 $</span></h1>
                            <ul>
                                <li>You can use your reward points as discoint for your next orders.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!---->
<div class="modal fade signin_modal accounts_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="wedding_form modal-content">
            <a href="#" class="modal_dismiss" data-dismiss="modal" aria-label="Close"><img src="/images/close.png"></a>
            <h3>Add new card</h3>
            <img src="images/payment.png">
            <form>
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Cardholder`s name...">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Card Number...">
                </div>
                <div class="row">
                    <div class="form-group col-sm-4 col-xs-12">
                        <input type="text" class="form-control" placeholder="CVV">
                    </div>
                    <div class="form-group col-sm-8 col-xs-12">
                        <input type="text" class="form-control datepicker" placeholder="Cardholder`s name...">
                    </div>
                </div>

                <button type="submit" class="hvr-sweep-to-right"><span>save card</span></button>
            </form>
        </div>
    </div>
</div>

@endsection
