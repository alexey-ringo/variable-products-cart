
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import route from './route.js';

let routes = [
	{path: '/shop/:slug?', name: 'category', component: require('./components/CategoryComponent.vue')}
	];

const router = new VueRouter({
	mode: 'history',
	routes
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('category-component', require('./components/CategoryComponent.vue').default);
//Vue.component('category-item-component', require('./components/items/CategoryItemComponent.vue').default);
Vue.component('product-component', require('./components/ProductComponent.vue').default);
Vue.component('cart-component', require('./components/CartComponent.vue').default);
Vue.component('checkout-component', require('./components/CheckoutComponent.vue').default);
//Vue.component('cart-item-component', require('./components/items/CartItemComponent.vue').default);
Vue.component('cart-info-component', require('./components/CartInfoComponent.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    data: {
    	productsInCart: [],
    	totalCartQuantity: 0,
    	totalCartAmount: 0,
    	userName: '',
    },
    mounted() {
            this.update()
        },
    methods: {
    	update: function() {
    		this.getStatusCart();
    		this.getUsername();
           },
        getStatusCart: function() {
            axios.get('/status-cart')
           		.then((response) => {
                   	this.totalCartQuantity = response.data.totalQuantity;
                   	this.totalCartAmount = response.data.totalAmount;
                })
                .catch(e => {
               	//console.log(e);
               	swal('Ошибка', "Внутренняя ошибка сервера", "error");
            });
        },
        changecartevent: function(id) {
            	this.getStatusCart();
        },
        getUsername: function() {
            	axios.get('/get-username')
            	.then((response) => {
                	this.userName = response.data.userName;
                })
                .catch(e => {
                	console.log(e);
                	swal('Ошибка', "Внутренняя ошибка сервера", "error");
                });
        },
    }
    
});



$(document).ready(function(){
  
	$('.owl-carousel').owlCarousel({
		items: 1,
		URLhashListener:true,
    	mouseDrag: false
	});
  
  
	$('.product-pic-zoom').zoom();
	
	/*------------------
		Navigation
	--------------------*/
	
	$('.main-menu').slicknav({
		prependTo:'.main-navbar .container',
		closedSymbol: '<i class="flaticon-right-arrow"></i>',
		openedSymbol: '<i class="flaticon-down-arrow"></i>'
	});
	
	/*------------------
		ScrollBar
	--------------------*/
	setTimeout(function () {
		$(".cart-table-warp, .product-thumbs").niceScroll({
			cursorborder:"",
			cursorcolor:"#afafaf",
			boxzoom:false
		});
	}, 1000); // время в мс
  
  
});


/* =================================
------------------------------------
	Divisima | eCommerce Template
	Version: 1.0
 ------------------------------------
 ====================================*/


//'use strict';


//$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
//	$(".loader").fadeOut();
//	$("#preloder").delay(400).fadeOut("slow");

//});

(function($) {


	/*------------------
		Category menu
	--------------------*/
	/*
	$('.category-menu > li').hover( function(e) {
		$(this).addClass('active');
		e.preventDefault();
	});
	$('.category-menu').mouseleave( function(e) {
		$('.category-menu li').removeClass('active');
		e.preventDefault();
	});
	*/
	/*
	$('.category-menu > li').click( function(e) {
		if(!$(this).hasClass('active')) {
			$(this).addClass('active');
			e.preventDefault();
		}
		else {
			$('.category-menu li').removeClass('active');
			e.preventDefault();
		}
	});
*/

	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});



	/*------------------
		Hero Slider
	--------------------*/
	var hero_s = $(".hero-slider");
    hero_s.owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        dots: true,
        animateOut: 'fadeOut',
    	animateIn: 'fadeIn',
        navText: ['<i class="flaticon-left-arrow-1"></i>', '<i class="flaticon-right-arrow-1"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        onInitialized: function() {
        	var a = this.items().length;
            $("#snh-1").html("<span>1</span><span>" + a + "</span>");
        }
    }).on("changed.owl.carousel", function(a) {
        var b = --a.item.index, a = a.item.count;
    	$("#snh-1").html("<span> "+ (1 > b ? b + a : b > a ? b - a : b) + "</span><span>" + a + "</span>");

    });

	hero_s.append('<div class="slider-nav-warp"><div class="slider-nav"></div></div>');
	$(".hero-slider .owl-nav, .hero-slider .owl-dots").appendTo('.slider-nav');



	/*------------------
		Brands Slider
	--------------------*/
	$('.product-slider').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		margin : 30,
		autoplay: true,
		navText: ['<i class="flaticon-left-arrow-1"></i>', '<i class="flaticon-right-arrow-1"></i>'],
		responsive : {
			0 : {
				items: 1,
			},
			480 : {
				items: 2,
			},
			768 : {
				items: 3,
			},
			1200 : {
				items: 4,
			}
		}
	});


	/*------------------
		Popular Services
	--------------------*/
	$('.popular-services-slider').owlCarousel({
		loop: true,
		dots: false,
		margin : 40,
		autoplay: true,
		nav:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive : {
			0 : {
				items: 1,
			},
			768 : {
				items: 2,
			},
			991: {
				items: 3
			}
		}
	});


	/*------------------
		Accordions
	--------------------*/
	$('.panel-link').on('click', function (e) {
		$('.panel-link').removeClass('active');
		var $this = $(this);
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		e.preventDefault();
	});


	/*-------------------
		Range Slider
	--------------------- */
	var rangeSlider = $(".price-range"),
		minamount = $("#minamount"),
		maxamount = $("#maxamount"),
		minPrice = rangeSlider.data('min'),
		maxPrice = rangeSlider.data('max');
	rangeSlider.slider({
		range: true,
		min: minPrice,
		max: maxPrice,
		values: [minPrice, maxPrice],
		slide: function (event, ui) {
			minamount.val('$' + ui.values[0]);
			maxamount.val('$' + ui.values[1]);
		}
	});
	minamount.val('$' + rangeSlider.slider("values", 0));
	maxamount.val('$' + rangeSlider.slider("values", 1));


	/*-------------------
		Quantity change
	--------------------- */
	/*
    var proQty = $('.pro-qty');
	proQty.prepend('<span class="dec qtybtn">-</span>');
	proQty.append('<span class="inc qtybtn">+</span>');
	proQty.on('click', '.qtybtn', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find('input').val(newVal);
	});
	*/


})(jQuery);



