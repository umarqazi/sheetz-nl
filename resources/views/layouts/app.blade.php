<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sheetz | Hotel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/mansory.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet">
    <!--  this @yeild styles is to render styles for different pages  -->
    @yield('styles')


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header>
        <div class="top_header hidden-xs">
            <div class="container-fluid">
                <div class="main_row">
                    <div class="top_nav clearfix">
                        <ul>
                            <li>
                                <a href="#">Vouchers</a>
                            </li>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                        <div class="lang_list pull-right">
                            <ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/flag.png"> <span>English</span> <img src="images/icon9.png"></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#"><img src="images/flag.png"> <span>US</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/flag.png"> <span>US</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="main_nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                        <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main_custom_nav">

                            <li><a href="#">HOTELS</a></li>
                            <li><a href="#">PACKAGES</a></li>
                            <li><a href="#">MEETINGS</a></li>
                            <li><a href="#">EVENTS</a></li>
                            <li><a href="#">WELLNESS</a></li>
                            <li><a href="#">WEDDINGS</a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right myreservations">
                            <li><a href="#"><img src="images/user.png"> My RESERVATIONS</a></li>

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

        </div>
    </header>
    <!--    @yeild is the section for general content of the whole site... whenever there is a change in any 
page it will render here dynamically... -->
    @yield('content')

    <!--    @yeilds ends here -->

    <footer></footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/freewall.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/custom.js"></script>
    <!--  this @yeild scripts is to render scripts for different pages  -->
    @yield('scripts')


</body>

</html>
