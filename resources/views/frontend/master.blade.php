<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') - Laravel Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/css/blog-home.css') }}" rel="stylesheet">

    <style type="text/css">

        figure {

            margin: 0;
            padding: 0;
            background: #fff;
            overflow: hidden;
        }
        figure:hover+span {
            bottom: -36px;
            opacity: 1;
        }



        .hover01 figure img {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }
        .hover01 figure:hover img {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }


    </style>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item @if(Request::is('/')) active @endif">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fa fa-home"></i> Home
                    </a>
                </li>

                <li class="nav-item @if(Request::is('contact')) active @endif">
                    <a class="nav-link" href="{{ route('contact') }}">
                        <i class="fa fa-map-marker-alt"></i>  Contact
                    </a>
                </li>
            </ul>

            @auth()

                <ul class="nav navbar-nav navbar-right">

                    {{--<li class="nav-item active">--}}
                        {{--<a class="nav-link" href="">--}}
                            {{--<i class="fa fa-tachometer-alt "></i>  Dashboard--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li class="nav-item active">--}}
                        {{--<a class="nav-link" href="">--}}
                            {{--<i class="fa fa-user"></i>  {{ auth()->user()->name }}--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li class="nav-itemf">--}}
                        {{--<a class="nav-link " href="{{ route('logout') }}">--}}
                            {{--<i class="fa fa-sign-out-alt"></i>   Logout--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>  {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('dashboard') }}"> <i class="fa fa-tachometer-alt "></i>  Dashboard</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i>  Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-sign-out-alt"></i>   Logout</a>
                        </div>
                    </li>

                </ul>

            @endauth

            @guest()

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item @if(Request::is('login')) active @endif">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fa fa-sign-in-alt"></i>  Login
                    </a>
                </li>
                <li class="nav-item @if(Request::is('register')) active @endif">
                    <a class="nav-link " href="{{ route('register') }}">
                        <i class="fa fa-registered"></i>   Registration
                    </a>
                </li>
            </ul>

                @endguest
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    @if(Request::is('contact') or Request::is('dashboard') )

    @yield('content')

     @else


        <div class="row p-4">

            <div class="col-md-8">

                @yield('content')

            </div>


            <div class="col-md-4">

                @include('frontend.inc.categories')

            </div>

        </div>

    @endif


</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark align-bottom">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
