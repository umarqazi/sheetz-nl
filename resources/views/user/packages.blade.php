@extends('layouts.app')
<!---->
@section('content')
<div class="intro package_main">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>SHEETZ PACKAGES</h1>
            <p>Enjoy nature, culture or shopping with these <span class="white_txt">attractive packages</span></p>

        </div>
    </div>
</div>
<div class="main_packages_wrapper">
    @include('includes/packages_tabs')
</div>
<!---->
@endsection
