<template>
	<div>
		
		
		<!-- Header section -->
		<header class="header-section">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 text-center text-lg-left">
							<!-- logo -->
							<a v-bind:href="'/'" class="site-logo">
								<img v-bind:src="'/img/template/logo.png'" alt="">
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
									<a v-bind:href="'/login'">Войти</a> или <a v-bind:href="'/register'">Зарегистрироваться</a>
								</div>
								
									<cart-info-component 
										v-bind:totalCartQuantity="totalCartQuantity"
										v-bind:totalCartAmount="totalCartAmount"
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
	    					<a v-bind:href="'/'">Главная</a>
	    				</li>
	    				<li v-on:click="getProducts(''); resetCurrentCategory()">
	    					<router-link :to="{ name: 'category'}">Витрина</router-link>
	    				</li>
						<main-category-item
							v-for="(category, index) in categories"
							v-bind:key="category.id" 
							v-bind:category="category"
							v-bind:globalIndex="(index+1)"
							v-on:selectCategory="selectCategory"
							v-on:selectMenu="selectMenuItem"
						></main-category-item>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Header section end -->
		
		
		<main class="py-4">
			
			<!-- Page info -->
			<div class="page-top-info">
				<div class="container">
					<div class="site-pagination">
						<a href="#">Parent</a> /
						Title
						Active
					</div>
				</div>
			</div>
			<!-- Page info end -->
			
			
			<section class="category-section spad">
		
				<div class="container">
					<div class="row">
						<div class="col-lg-3 order-2 order-lg-1">
							<div class="filter-widget">
								<ul class="category-menu">
									<category-item	v-for="(category, index) in categories" 
										v-bind:key="category.id" 
										v-bind:category="category"
										v-bind:initialCurrentCategory="currentCategory"
										v-bind:selectedMenu="selectedMenuItem"
										v-bind:globalIndex="(index+1)" 
										v-on:selectMenu="selectMenuItem"
										v-on:selectCategory="selectCategory">
									>
									</category-item>
								</ul>
							</div>
							<div class="filter-widget mb-0">
								<h2 class="fw-title">refine by</h2>
								<div class="price-range-wrap">
									<h4>Price</h4>
                					<div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
										<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
										<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
										</span>
										<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
										</span>
									</div>
									<div class="range-slider">
                    					<div class="price-input">
                        					<input type="text" id="minamount">
                         					<input type="text" id="maxamount">
                    					</div>
                					</div>
            					</div>
							</div>
							<div class="filter-widget mb-0">
								<h2 class="fw-title">color by</h2>
								<div class="fw-color-choose">
									<div class="cs-item">
										<input type="radio" name="cs" id="gray-color">
										<label class="cs-gray" for="gray-color">
											<span>(3)</span>
										</label>
									</div>
									<div class="cs-item">
										<input type="radio" name="cs" id="orange-color">
										<label class="cs-orange" for="orange-color">
											<span>(25)</span>
										</label>
									</div>
									<div class="cs-item">
										<input type="radio" name="cs" id="yollow-color">
										<label class="cs-yollow" for="yollow-color">
											<span>(112)</span>
										</label>
									</div>
									<div class="cs-item">
										<input type="radio" name="cs" id="green-color">
										<label class="cs-green" for="green-color">
											<span>(75)</span>
										</label>
									</div>
									<div class="cs-item">
										<input type="radio" name="cs" id="purple-color">
										<label class="cs-purple" for="purple-color">
											<span>(9)</span>
										</label>
									</div>
									<div class="cs-item">
										<input type="radio" name="cs" id="blue-color" checked="">
										<label class="cs-blue" for="blue-color">
											<span>(29)</span>
										</label>
									</div>
								</div>
							</div>
							<div class="filter-widget mb-0">
								<h2 class="fw-title">Size</h2>
								<div class="fw-size-choose">
									<div class="sc-item">
										<input type="radio" name="sc" id="xs-size">
										<label for="xs-size">XS</label>
									</div>
									<div class="sc-item">
										<input type="radio" name="sc" id="s-size">
										<label for="s-size">S</label>
									</div>
									<div class="sc-item">
										<input type="radio" name="sc" id="m-size"  checked="">
										<label for="m-size">M</label>
									</div>
									<div class="sc-item">
										<input type="radio" name="sc" id="l-size">
										<label for="l-size">L</label>
									</div>
									<div class="sc-item">
										<input type="radio" name="sc" id="xl-size">
										<label for="xl-size">XL</label>
									</div>
									<div class="sc-item">
										<input type="radio" name="sc" id="xxl-size">
										<label for="xxl-size">XXL</label>
									</div>
								</div>
							</div>
							<div class="filter-widget">
								<h2 class="fw-title">Brand</h2>
								<ul class="category-menu">
									<li><a href="#">Abercrombie & Fitch <span>(2)</span></a></li>
									<li><a href="#">Asos<span>(56)</span></a></li>
									<li><a href="#">Bershka<span>(36)</span></a></li>
									<li><a href="#">Missguided<span>(27)</span></a></li>
									<li><a href="#">Zara<span>(19)</span></a></li>
								</ul>
							</div>
						</div>
				




						<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
							<div class="row">
						
						
						
						
								<div v-for="(product, index) in products" class="col-lg-4 col-sm-6">
							
									<div class="product-item">
										<div class="pi-pic">
											<div class="tag-sale">ON SALE</div>
											<a v-bind:href="'/products/' + product.slug">
			        							<img class="img-fluid" v-bind:src="'/storage/' + product.image" alt="">
			    							</a>
											<div class="pi-links">
												<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
												<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
											</div>
										</div>
										<div class="pi-text">
											<h6>{{ product.price }} руб.</h6>
											<a v-bind:href="'/products/' + product.slug">
												<p>{{ product.name }}</p>
											</a>
										</div>
									</div>
								</div>
						
						
						
						
						
								<div v-if="!products" style="text-align: left">Товаров в категории  не найдено</div>
						
					
					
					
					
						
								<div class="text-center w-100 pt-3">
									<button class="site-btn sb-line sb-dark">LOAD MORE</button>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			</section>
				
		</main>
		
		
		
		
		
			<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;2019 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->
		
		
		
		
	</div>		
</template>

<script>
    import CategoryItem from './items/CategoryItemComponent.vue';
    import MainCategoryItem from './items/MainCategoryItemComponent.vue';

    export default {
        components: {
            'category-item': CategoryItem,
            'main-category-item': MainCategoryItem
        },
        props: [
        	'initialGroupproducts',
            'initialCategories',
            'initialCurrentCategory',
            'totalCartQuantity',
            'totalCartAmount',
            ],
        data: function() {
            return {
                categories: [],
                selectedMenuItem: 0,
                products: [],
                currentCategory: [],
                //или
                //currentCategory: this.initialCurrentCategory
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
            	this.categories = this.initialCategories;
            	this.products = this.initialGroupproducts;
            	//this.getProducts();
            	//Только в случае currentCategory: []
            	//this.currentCategory = this.initialCurrentCategory;
            	this.currentCategory = this.computedCurrentCategory;
            },
            getProducts: function(slug) {
            	axios.get('/shop-ajax', {
                    params: {
                        slug: slug
                    }
                })
            	.then((response) => {
            	    //console.log(response.data);
                	this.categories = response.data.menu_categories;
                	this.products = response.data.groupproducts;
                })
                .catch(e => {
                	console.log(e);
                });
            },
            resetCurrentCategory: function() {
            	this.currentCategory = [];
            	this.selectedMenuItem = 0;
            },
            selectMenuItem: function(menuItem) {
            	this.selectedMenuItem = menuItem;
            },
            selectCategory: function(subCategory) {
            	this.getProducts(subCategory.slug);
            	this.currentCategory = subCategory;
            },
            
            
    	},
    	computed: {
    		computedCurrentCategory: function() {
    			return this.initialCurrentCategory ? this.initialCurrentCategory : [];
    		}
    	}
    }
</script>