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
								    <cart-info-component v-bind:total-cart-quantity="totalCartQuantity"></cart-info-component>
								    <a href="{{route('cart.show')}}">Корзина</a>
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
					    @include('layouts.menu', ['menu_categories' => $menu_categories])
				    </ul>
			    </div>
		    </nav>
	    </header>
	    <!-- Header section end -->