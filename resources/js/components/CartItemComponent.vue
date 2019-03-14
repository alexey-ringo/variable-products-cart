<template>
	<tr>
		<td class="product-col">
			<img src="img/cart/1.jpg" alt="">
			<div class="pc-title">
				<h4>{{product.add_attributes.groupproduct.name}}</h4>
				<p>{{product.add_attributes.product.name}}</p>
			</div>
		</td>
		<td class="quy-col">
			<div class="quantity">
                <div class="pro-qty">
					<input type="text" :value="product.quantity">
				</div>
			</div>
		</td>
		<td class="size-col"><h4>{{product.quantity}}</h4></td>
		<td class="total-col"><h4>{{product.order_price}}</h4></td>
	</tr>
</template>

<script>
    export default {
        props: [
            'product',
            'index',
            ],
        data: function() {
            return {
            	
                
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
            	console.log(this.index);
            },
           
    	}
    }
</script>