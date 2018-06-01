<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Simply Me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }

        p {
            font-size: 16px;
        }

        .margin {
            margin-bottom: 45px;
        }

        .bg-1 {
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }

        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }

        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }

        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }

        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }

        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }

        .navbar-nav li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">LOGO</a>
    </div>
</div>
<section>
    <nav class="navbar navbar-default">
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Home</a></li>
                <li><a href="#">Best Home</a></li>
                <li><a href="#">Life style</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
    </nav>


    <!-- First Container -->

    <!-- Third Container (Grid) -->
    {{--@foreach($aps as $ap)--}}

    {{--<tr id="row-{{$ap -> id}}">--}}
    {{--<td class="row-id">{{$ap -> id}}</td>--}}
    {{--<td class="row-name">{{$ap -> name}}</td>--}}
    {{--<td class="row-add">{{$ap -> add}}</td>--}}
    {{--<td class="row-price">{{$ap -> price}}</td>--}}
    {{--<td class="row-info">{{$ap -> info}}</td>--}}
    {{--<td class="row-infodetail">{{$ap -> infodetail}}</td>--}}
    {{--<td class="row-imgurl"><img src="{{$ap -> imgurl}}" alt=""></td>--}}
    {{--<td class="row-status">{{$ap -> status}}</td>--}}


    {{--</tr>--}}
    {{--@endforeach--}}

    <div>
        <div class="col-md-9">
            <@foreach($aps as $ap)
                <div class="col-sm-4">
                    <p>{{$ap -> name}}</p>
                    <p>{{$ap -> add}}</p>
                    <p>{{$ap -> price}}</p>
                    <p>{{$ap -> info}}</p>
                    <p>{{$ap -> infodetail}}</p>
                    

                    <img src="{{$ap -> imgurl}}" class="img-responsive margin" width="200px" height="140px">
                </div>
            @endforeach
            {{--<div class="col-sm-3">--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
            {{--<img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
            {{--<img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">--}}
            {{--</div>--}}


        </div>
</section>




<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <p>Tran Trung Viet D00465 - T17707M</p>
</footer>
</body>


</html>
