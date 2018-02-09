@extends('layouts.app')
<!---->
@section('content')
<div class="intro about_content">
    <div class="main_banner">
        <div class="hotel_description text-center">
            <h1>ABOUT US</h1>

            <p>We take pride in service with great<span class="white_txt">attention</span>to detail</p>

        </div>
    </div>
</div>
<div class="about_txt">
    <h3>About Sheetz</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
</div>
<div class="about_ceo">
    <img src="images/banner.jpg">
    <div class="ceo_message clearfix">
        <div class="ceo_img"><img src="images/client.png"></div>
        <div class="ceo_txt">
            <em>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"</em>
            <h5>William Dawson</h5>
            <span>Sheetz CEO</span>
        </div>
    </div>
    <div class="general_txt text-center">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
        </p>
    </div>
</div>
<div class="press_release container">
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
                <h3><em>Press</em></h3>
                <h5>For press information, please contact:</h5>
                <span>Arlette Gilbert</span>
                <span>Commercial Director</span>
                <a href="mailto:ceo@sheetz.nl">ceo@sheetz.nl</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="release_content text-center">
                <h3><em>News</em></h3>
                <h5>Sheetz hotels finalised</h5>
                <span>QMH Limited (‘QMH’)</span>
                <span>announced today sale for...</span>
                <a href="#" class="readmore">read more</a>
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
            <h1>Partners say</h1>
            @include('includes/what_client_slider')
        </div>
    </div>
</div>
<!---->
@endsection
