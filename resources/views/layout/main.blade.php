<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title','Stonyzon')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">

    <link href="{{asset('themes/css/bootstrappage.cs')}}s" rel="stylesheet"/>

    <!-- global styles -->
    <link href="{{asset('themes/css/flexslider.css')}}" rel="stylesheet"/>
    <link href="{{asset('themes/css/main.css')}}" rel="stylesheet"/>

    <!-- scripts -->
    <script src="{{asset('themes/js/jquery-1.7.2.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('themes/js/superfish.js')}}"></script>
    <script src="{{asset('themes/js/jquery.scrolltotop.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{asset('http://html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <input type="text" class="input-block-level search-query" Placeholder="eg. Apple ">
            </form>
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">

                    @if (Route::has('login'))

                        @auth
                            <li>Hi {{ Auth::user()->firstName }}</li>
                            <li><a href="{{ url('/home') }}">My Account</a></li>
                            <li><a href={{'/cart'}}>Your Cart</a></li>
                            <li><a href="{{route('login')}}">Checkout</a></li>
                            <li><a href="{{route('logout')}}">Logout</a></li>

                        @else
                            <li><a href="{{route('login')}}">Login/Register</a></li>

                        @endauth
                    @endif



                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <div>
                <a href="{{route('store')}}" class="logo pull-left  "><img src="themes/images/logo.png" width="200" height="40" alt=""> </a>
                <p  class="logo pull-left  col-md-9" ></p>
            </div>
            <nav id="menu" class="pull-right">
                <ul>
                    <li><a href="{{route('electronic')}}">Electronics</a></li>
                    <li><a href="{{route('furniture')}}">Furnitures</a></li>
                    <li><a href="{{route('clothing')}}">Clothing</a>
                        <ul>
                            <li><a href="{{url('/items')}}">Men</a></li>
                            <li><a href="{{url('/items')}}">Women</a></li>
                            <li><a href="{{url('/items')}}">Children</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('food')}}">Food & Groceries</a></li>
                    <li><a href="{{url('/items')}}">Best Seller</a></li>
                    <li><a href="{{url('/items')}}">Top Seller</a></li>
                </ul>
            </nav>
        </div>
    </section>
    @yield('content')
    <section id="footer-bar">
        <div class="row">
            <div class="span3">
                <h4>Navigation</h4>
                <ul class="nav">
                    <li><a href="./index.html">Homepage</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="./contact.html">Contact Us</a></li>
                    <li><a href="{{route('login')}}">Your Cart</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
            </div>
            <div class="span4">
                <h4>My Account</h4>
                <ul class="nav">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </div>
            <div class="span5">
                <p class="logo"><img src="{{asset('themes/images/logo.png')}}" class="site_logo" alt=""></p>
                <p></p>
                <br/>
                <span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
            </div>
        </div>
    </section>
    <section id="copyright">
        <span>Copyright 2017 Stonyzon CSE 305 Project  All right reserved.</span>
    </section>
</div>
<script src="{{asset('themes/js/common.js')}}"></script>
<script src="{{asset('themes/js/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript">
    $(function() {
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    });


</script>
</body>
</html>