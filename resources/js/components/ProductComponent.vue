<template>
    <div class="row">
		<div class="col-lg-6">
			<div class="product-pic-zoom">
				<img class="product-big-img" v-bind:src="'/storage/' + selectedImage">
			</div>
			<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
				<div class="product-thumbs-track">
					<div
					v-for="(currentImage, index) in currentImages"
					class="pt"
					v-on:click="selectImage(index)"
					v-bind:class="{'active': selectedImageIndex === index}"
					>
						<img v-bind:src="'/storage/' + currentImage" alt="">
					</div>
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
			
			<h4>Цвет</h4>
			<ul class="list-group-product">
				<li
				v-for="(color, index) in colors"
				class="list-group-item-product list-group-item-action pointer"
				v-on:click="selectColor(index)"
				v-bind:class="{'active': selectedColorIndex === index}"
				>
					{{color}}
				</li>
			</ul>
				
			
			<h4>Размер</h4>		
			<ul class="list-group-product">
				<li
				v-for="(currentSize, index) in currentSizes"
				class="list-group-item-product list-group-item-action pointer"
				v-on:click="selectSize(index)"
				v-bind:class="{'active': selectedSizeIndex === index}"
				>
					{{currentSize}}
				</li>
				</ul>
					
					
					
					<div class="quantity">
						<p>Количество</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
					<a href="#" class="site-btn" v-on:click="addCart">Купить</a>
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
	import swal from 'sweetalert';

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
                selectedSizeIndex: 0,
                selectedImage: 'default',
                selectedImageIndex: 0,
                currentImages: [0]
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
            	this.selectedColor = this.defaultColor;
                this.selectedSize = this.defaultSize;
                this.selectedImage = this.selectedProduct.images[0]; //Переделать!
                this.getCurrentImages();
            },
            
            selectColor: function(index) {            	
            	this.selectedColor = this.colors[index];
            	this.selectedColorIndex = index;
            	this.getCurrentImages();
            	this.selectImage(0); //Переделать! Где реактивность?!
            },
            
            selectSize: function(index) {
            	this.selectedSize = this.currentSizes[index];
            	this.selectedSizeIndex = index;
            },
            
            selectImage: function(index) {
            	this.selectedImage = this.currentImages[index];
            	this.selectedImageIndex = index;
            },
            
            getCurrentImages: function() {
            	this.currentImages = this.selectedProduct.images;
            },
            
            addCart: function(event) {
            	event.preventDefault();
            	axios.post('/add-cart', {
            		product: this.selectedProduct.id,
            		quantity: 1
            		})
            		.then((response) => {
                    	console.log(response.data.response.add_attributes);
                    	this.$emit("addcartevent", 1);
                    	swal(response.data.response.add_attributes.groupproduct.name, "успешно добавлен в корзину", "success");
                    	//this.urldata = response.data
                    	//this.is_refresh = false
                    	//this.id++
                    })
                    .catch(e => {
                    	console.log(e);
                    });
                    
                    
                //this.$emit("addcartevent", 1);
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
	
			defaultColor: function() {
				return this.colors[0];
			},
			
			defaultSize: function() {
				return this.globalProducts.products[0].size.value;
			},
			
			
			currentSizes: function() {
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
	   			for(let i = 0; i < this.globalProducts.products.length; i++) {
    				if(this.globalProducts.products[i].color.value == this.selectedColor && this.globalProducts.products[i].size.value == this.selectedSize) {
    					return this.globalProducts.products[i];
    				}
    			}
    			
			}
    	}
    }
</script>