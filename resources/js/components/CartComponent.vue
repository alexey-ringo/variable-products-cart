<template>
	<div class="cart-table-warp">
		<table>
			<thead>
				<tr>
					<th class="product-th">Product</th>
					<th class="quy-th">Quantity</th>
					<th class="size-th">SizeSize</th>
					<th class="total-th">Price</th>
				</tr>
			</thead>
			<tbody>
			    
<cart-item v-for="(cartProduct, index) in cartProducts" v-bind:key="cartProduct.id" v-bind:product="cartProduct" v-bind:globalIndex="(index+1)"></cart-item>
								
			</tbody>
		</table>
	</div>
</template>

<script>
    import CartItem from './items/CartItemComponent.vue';

    export default {
        components: {
            'cart-item': CartItem
        },
        //props: [
        //    'initialCartProducts'
        //    ],
        data: function() {
            return {
            //    cartProducts: this.initialCartProducts
            	cartProducts: []
                
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
            	//console.log(this.initialCartProducts);
            	this.getProductsInCart()
            },
            getProductsInCart: function() {
                axios.get('/products-in-cart')
            		.then((response) => {
                    	//console.log(response);
                    	this.cartProducts = response.data.itemsInOrder;
                    	//this.resp = response;
                    })
                    .catch(e => {
                    	console.log(e);
                    });
            }
           
    	}
    }
</script>