	    <!-- Header section -->
	    <header class="header-section">
		    <div class="header-top">
			    <div class="container">
				    <div class="row">
					    <div class="col-lg-2 text-center text-lg-left">
						    <!-- logo -->
						    <a href="{{route('shop.index')}}" class="site-logo">
							    <img src="{{ asset('img/template/logo.png') }}" alt="">
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
						    @if(Auth::guard('web')->check())	
								<div class="up-item">
								    <i class="flaticon-profile"></i>
								    <p>{{ Auth::user()->name }}</p>
								 </div>
								 <div class="up-item margin-right-30">
								    <a href="{{route('user.logout')}}">Выйти</a>
							    </div>
							@else
							    <div class="up-item">
								    <i class="flaticon-profile"></i>
								    <a href="{{route('login')}}">Войти</a> или <a href="{{route('register')}}">Зарегистрироваться</a>
							    </div>
							@endif
							    <cart-info-component 
									v-bind:total-cart-quantity="totalCartQuantity"
									v-bind:total-cart-amount="totalCartAmount"
									>
								</cart-info-component>
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
		    <nav class="main-navbar">
			    <div class="container">
				    <!-- menu -->
				    <ul class="main-menu">
						<li>
	    					<a href="{{route('shop.index')}}">Главная</a>
	    				</li>
	    				<li>
	    					<a href="{{route('shop.categories')}}">Витрина</a>
	    				</li>
					    @include('layouts.menu', ['menu_categories' => $menu_categories])
				    </ul>
			    </div>
		    </nav>
	    </header>
	    <!-- Header section end -->