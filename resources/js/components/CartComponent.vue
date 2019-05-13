<template>
    <div class="row" v-if="totalCartQuantity">
        <div class="col-lg-8">
		    <div class="cart-table">
			    <h3>Корзина</h3>
	            <div class="cart-table-warp">
		            <table>
			            <thead>
				            <tr>
					            <th class="product-th">Product</th>
					            <th class="quy-th">Кол-во</th>
					            <th class="size-th">Удалить</th>
					            <th class="size-th">Отложить</th>
					            <th class="total-th">Стоимость</th>
				            </tr>
			            </thead>
			            <tbody>
			    
                            <cart-item v-for="(cartProduct, index) in cartProducts" 
                                        v-bind:key="cartProduct.id" 
                                        v-bind:product="cartProduct" 
                                        v-bind:globalIndex="(index+1)"
                                        v-on:changecartevent="changecartevent"
                                        >
                            </cart-item>
								
			            </tbody>
		            </table>
	            </div>
	            <div class="total-cost">
				    <h6>Total <span>{{ totalCartAmount }} Руб.</span></h6>
			    </div>
		    </div>
	    </div>
	    
	    <div class="col-lg-4 card-right">
			<form class="promo-code-form">
				<input type="text" placeholder="Enter promo code">
				<button>Submit</button>
			</form>
			<a v-bind:href="'/checkout'" class="site-btn">Оформление заказа</a>
			<a v-bind:href="'/'" class="site-btn sb-dark">Вернуться в магазин</a>
		</div>
	</div>
</template>

<script>
    import CartItem from './items/CartItemComponent.vue';

    export default {
        components: {
            'cart-item': CartItem,
        },
        props: [
            'totalCartQuantity',
            'totalCartAmount'
            ],
        data: function() {
            return {
            //    cartProducts: this.initialCartProducts
            	cartProducts: [],
            	oldCartProducts: [],
            	holdCartProducts: [],
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function() {
            	this.getProductsInCart();
            	//this.getOldCart();
            	//this.getHoldCart();
            },
            getProductsInCart: function() {
                axios.get('/products-in-cart')
            		.then((response) => {
                    	this.cartProducts = response.data.itemsInOrder;
                    })
                    .catch(e => {
                    	//console.log(e);
                    	swal('Ошибка', "Внутренняя ошибка сервера", "error");
                    });
            },
            /*
            getOldCart: function() {
                axios.get('/get-old-cart')
            		.then((response) => {
                    	this.oldCartProducts = response.data.itemsInOldOrder;
                    })
                    .catch(e => {
                    	console.log(e);
                    });
            },
            getHoldCart: function() {
                axios.get('/get-hold-cart')
            		.then((response) => {
                    	this.holdCartProducts = response.data.itemsInHoldOrder;
                    })
                    .catch(e => {
                    	console.log(e);
                    });
            },
            */
            changecartevent: function(id) {
                this.$emit("changecartevent", 1);
                this.getProductsInCart();
            },
    	}
    }
</script>