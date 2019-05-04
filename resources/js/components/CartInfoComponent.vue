<template>
    <div class="up-item">
        <div class="shopping-card">
		    <i class="flaticon-bag"></i>
		    <span v-if="totalCartQuantity">{{totalCartQuantity}}</span>
		</div>
		<ul class="cart-dropdown-menu">
		    <cart-dropdown></cart-dropdown>
		</ul>
	</div>
</template>

<script>
    import CartDropdown from './items/CartDropdownComponent.vue';

    export default {
        components: {
            'cart-dropdown': CartDropdown,
        },
        props: [
            'totalCartQuantity',
            'totalCartAmount'
            ],
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                //axios.get('/status-cart')
            	//	.then((response) => {
                //  	console.log(response);
                //    	this.totalQuantity = response.data.cartStatus.totalQuantity;
                    	//this.resp = response;
                //    })
                //    .catch(e => {
                //    	console.log(e);
                //    });
            	
            },
    	}
    }
</script>