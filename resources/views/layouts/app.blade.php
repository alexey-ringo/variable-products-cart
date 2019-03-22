<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        
        <!-- Page Preloder -->
	    {{-- <div id="preloder">
		    <div class="loader"></div>
	    </div> --}}
	    
	    @include('layouts.header')


{{--
	    <!-- Header section -->
	    <header class="header-section">
		    <div class="header-top">
			    <div class="container">
				    <div class="row">
					    <div class="col-lg-2 text-center text-lg-left">
						    <!-- logo -->
						    <a href="./index.html" class="site-logo">
							    <img src="img/logo.png" alt="">
						    </a>
					    </div>
					    <div class="col-xl-6 col-lg-5">
						    <form class="header-search-form">
							    <input type="text" placeholder="Search on divisima ....">
							    <button><i class="flaticon-search"></i></button>
						    </form>
					    </div>
					    <div class="col-xl-4 col-lg-5">
						    <div class="user-panel">
							    <div class="up-item">
								    <i class="flaticon-profile"></i>
								    <a href="#">Sign</a> In or <a href="#">Create Account</a>
							    </div>
							    <div class="up-item">
								    <div class="shopping-card">
									    <i class="flaticon-bag"></i>
									    <span>0</span>
								    </div>
								    <a href="#">Shopping Cart</a>
							    </div>
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
		    <nav class="main-navbar">
			    <div class="container">
				    <!-- menu -->
				    <ul class="main-menu">
					    <li><a href="#">Home</a></li>
					    <li><a href="#">Women</a></li>
					    <li><a href="#">Men</a></li>
					    <li><a href="#">Jewelry
						    <span class="new">New</span>
					    </a></li>
					    <li><a href="#">Shoes</a>
						    <ul class="sub-menu">
							    <li><a href="#">Sneakers</a></li>
							    <li><a href="#">Sandals</a></li>
							    <li><a href="#">Formal Shoes</a></li>
							    <li><a href="#">Boots</a></li>
							    <li><a href="#">Flip Flops</a></li>
						    </ul>
					    </li>
					    <li><a href="#">Pages</a>
						    <ul class="sub-menu">
							    <li><a href="./product.html">Product Page</a></li>
							    <li><a href="./category.html">Category Page</a></li>
							    <li><a href="./cart.html">Cart Page</a></li>
							    <li><a href="./checkout.html">Checkout Page</a></li>
							    <li><a href="./contact.html">Contact Page</a></li>
						    </ul>
					    </li>
					    <li><a href="#">Blog</a></li>
				    </ul>
			    </div>
		    </nav>
	    </header>
	    <!-- Header section end -->


--}}
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
