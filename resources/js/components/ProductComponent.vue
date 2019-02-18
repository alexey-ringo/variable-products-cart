<template>
    <div class="row">
		<div class="col-lg-6">
			<div class="product-pic-zoom">
				<img class="product-big-img" v-bind:src="selectedProduct.images.image1" alt="">
			</div>
			<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
				<div class="product-thumbs-track">
					<div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="" alt=""></div>
					<div class="pt" data-imgbigurl="img/single-product/2.jpg"><img src="img/single-product/thumb-2.jpg" alt=""></div>
					<div class="pt" data-imgbigurl="img/single-product/3.jpg"><img src="img/single-product/thumb-3.jpg" alt=""></div>
					<div class="pt" data-imgbigurl="img/single-product/4.jpg"><img src="img/single-product/thumb-4.jpg" alt=""></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 product-details">
			<h2 class="p-title">{{globalProducts.groupproduct.name}}</h2>
			<h2 class="p-title">{{selectedColor}}</h2>
			<h3 class="p-price">{{globalProducts.groupproduct.price}} руб.</h3>
			<h4 class="p-stock">Available: <span>In Stock</span></h4>
			<div class="p-rating">
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o fa-fade"></i>
			</div>
			<div class="p-review">
				<a href="">3 reviews</a>|<a href="">Add your review</a>
			</div>
			<div class="fw-size-choose">
				<p>Color</p>
				
				<div class="sc-item" v-for="color in colors">
					<input type="radio" name="sc" id="xs-size">
					<label for="xs-size">{{color}}</label>
				</div>
				
			</div>
				
			<ul class="list-group">
				<li
				v-for="(color, index) in colors"
				class="list-group-item list-group-item-action pointer"
				v-on:click="selectColor(index)"
				v-bind:class="{'active': selectedColorIndex === index}"
				>
					{{color}}
				</li>
			</ul>
				
			<div class="fw-size-choose">
				<p>Size</p>
				
				<div class="sc-item">
					<input type="radio" name="sc" id="xs-size">
					<label for="xs-size"></label>
				</div>
					
			</div>
					
			<ul class="list-group">
				<li
				v-for="(currentSize, index) in currentSizes"
				class="list-group-item list-group-item-action pointer"
				v-on:click="selectSize(index)"
				v-bind:class="{'active': selectedSizeIndex === index}"
				>
					{{currentSize}}
				</li>
				</ul>
					
					
					
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
					<a href="#" class="site-btn" v-on:click="addCart()">SHOP NOW</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
									<p>Approx length 66cm/26" (Based on a UK size 8 sample)</p>
									<p>Mixed fibres</p>
									<p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
</template>

<script>
    export default {
        props: [
            'initialProducts'
            ],
        data: function() {
            return {
            	globalProducts: this.initialProducts,
                selectedColor: 'default',
                selectedColorIndex: 0,
                selectedSize: 'default',
                selectedSizeIndex: 0
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
            	this.selectedColor = this.defaultColor;
                this.selectedSize = this.defaultSize;
            },
            selectColor: function(index) {            	
            	this.selectedColor = this.colors[index];
            	this.selectedColorIndex = index;
            },
            selectSize: function(index) {
            	this.selectedSize = this.currentSizes[index];
            	this.selectedSizeIndex = index;
            },
            
            addCart: function() {
            	/*
            	axios.get('/start/get-json').then((response) => {
                    console.log(response)
                    this.urldata = response.data
                    this.is_refresh = false
                    this.id++
                    });
                    */
                console.log(this.selectedProduct);
            
            }
            
        },
        computed: {
			colors: function () {
    			let arr = [];
    			for(let i = 0; i < this.globalProducts.products.length; i++) {
    				arr[i] = this.globalProducts.products[i].color.value;
    			}
    			
				let result = Array.from(new Set(arr));
				return result;
			},
			/*
			sizesForColors: function () {
    			var product = new Object();
    			for(let j = 0; j < this.colors.length; j++) {
    				product[this.colors[j]] = new Object();
    				for(let k = 0; k < this.globalProducts.products.length; k++) {
    					if(this.globalProducts.products[k].color.value == this.colors[j]) {
    						product[this.colors[j]][k] = this.globalProducts.products[k].size.value;
    					}
    				}
    			}
				return product;
			},
			*/
			defaultColor: function() {
				return this.colors[0];
			},
			
			defaultSize: function() {
				return this.globalProducts.products[0].size.value;
			},
			
			
			currentSizes: function() {
				//console.log('Sizes are updated');
				let arr = [];
				let j = 0;
    			for(let i = 0; i < this.globalProducts.products.length; i++) {
    				if(this.globalProducts.products[i].color.value == this.selectedColor) {
    					arr[j] = this.globalProducts.products[i].size.value;
    					j++;
    				}
    			}
				//let result = Array.from(new Set(arr));
				//return result;
				return arr;
			},
			selectedProduct: function() {
				//console.log('Product is updated');
    			for(let i = 0; i < this.globalProducts.products.length; i++) {
    				if(this.globalProducts.products[i].color.value == this.selectedColor && this.globalProducts.products[i].size.value == this.selectedSize) {
    							return this.globalProducts.products[i];
    				}
    			}
    			
			}
			
    	}
    }
</script>