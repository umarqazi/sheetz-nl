<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sheetz | Hotel</title>

    <style>
        .container{
            display: block;
            text-align: center;
        }

        .wrapper{
            display: inline-block;
            text-align: left;
            max-width: 600px;
            padding: 15px;
        }
        h2{
            margin: 0px 0px 30px 0px;
            padding: 15px 0px;
            font-size: 22px;
            text-align: center;
            background: #ba9e75;
            text-transform: uppercase;
            color: #fff;
        }
        footer{
            background: #eee;
            padding: 12px;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h2>Welcome To Sheetz</h2>
            <div class="main_wrapper">
                <div>
                    <strong>Hii {{$admin->name}}</strong>
                </div>
                <p>Thank You for Registering As An Admin at Sheetz. We have received your registration. You can now login to sheetz admin Panel.</p>
                <p>Thank You again for registering at sheetz, if you have any Questions please Let us Know.</p>
                <div>
                    <p>Regards</p>
                    <p>Sheetz Management</p>
                </div>
            </div>
            <footer>
                <img src="images/logo.png">
                <p style="margin: 0; padding-top: 10px">2017© Sheetz hotels. All rights reserved.</p>
            </footer>
        </div>
    </div>
</body>
</html>