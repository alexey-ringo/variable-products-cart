<template>
	<li v-on:mouseover="onHoverCartList" v-on:mouseleave="onLeaveCartList">
	    <a v-bind:href="'/cart'">Корзина</a>
		<ul v-if="(!cartProducts.length == 0)" class="sub-menu" v-bind:style="{visibility: styleCartList}">
			<li v-for="(cartProduct, index) in cartProducts" 
			    v-bind:key="cartProduct.id"
			>
			    <div class="dropcart-item-img">
			        <img v-bind:src="'/storage/' + cartProduct.add_attributes.product.images[0]" alt="">
			    </div>
			    <div class="dropcart-item-text">
				    <h6>{{cartProduct.add_attributes.groupproduct.name}}</h6>
				    <p>{{cartProduct.add_attributes.product.name}}</p>
			    </div>
			    <div class="dropcart-item-price">
				    <p>{{cartProduct.quantity}} шт.</p>
			    </div>
			</li>
		</ul>
	</li>
</template>

<script>
    export default {
        data: function() {
            return {
                styleCartList: 'hidden',
                cartProducts: [],
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                
            },
            
            getProductsInCart: function() {
                axios.get('/products-in-cart')
            		.then((response) => {
                    	this.cartProducts = response.data.itemsInOrder;
                    })
                    .catch(e => {
                    	console.log(e);
                    });
            },
            
            //onClickCartList: function(subCategory) {
            //    this.$emit("selectCategory", subCategory);
            //    this.styleCartList = 'hidden';
            //},
            onHoverCartList: function() {
                this.getProductsInCart();
                this.styleCartList = 'visible';
            },
            onLeaveCartList: function() {
                this.styleCartList = 'hidden';
            },
    	},
    	/*
    	computed: {
    	    styleSubMenu: {
    	        get: function () {
                    return {
                        visibility: 'hidden'
                    }
    	        },
                set: function(val) {
                    { visibility: "val"}
                }
            },
        },*/
    }
</script>