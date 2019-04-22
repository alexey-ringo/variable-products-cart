<template>
	<tr>
		<td class="product-col">
			<img v-bind:src="'/storage/' + product.add_attributes.product.images[0]" alt="">
			<div class="pc-title">
				<h4>{{product.add_attributes.groupproduct.name}}</h4>
				<p>{{product.add_attributes.product.name}}</p>
			</div>
		</td>
		<td class="quy-col">
			<div class="quantity">
                <div class="pro-qty">
                    <span class="dec qtybtn" v-on:click="onQtyDel(product.quantity)">-</span>
					<input type="text" :value="product.quantity">
					<span class="inc qtybtn" v-on:click="onQtyAdd(product.quantity)">+</span>
				</div>
			</div>
		</td>
		<td class="size-col">
		    <button type="button" class="btn btn-outline-danger" v-on:click="delItem">Удалить</button>
		</td>
		<td class="size-col">
		    <button type="button" class="btn btn-outline-dark">Отложить</button>
		</td>
		<td class="total-col"><h4>{{itemAmount}}</h4></td>
	</tr>
</template>

<script>
    export default {
        props: [
            'product',
            'globalIndex',
            ],
        data: function() {
            return {
                productId: this.product.add_attributes.product.id,
                itemAmount: 0
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
            	this.getItemAmount();
            },
            delItem: function(event) {
            	event.preventDefault();
            	axios.post('/delete-cart', {
            		product: this.productId,
            		})
            		.then((response) => {
            		    if(response) {
                    	    this.$emit("changecartevent", 1);
            		    }
                    })
                    .catch(e => {
                    	console.log(e);
                    });
                    
                    
                //this.$emit("addcartevent", 1);
            },
            getItemAmount: function() {
                axios.get('/get-item-amount', {
                    params: {
                        product: this.productId
                    }
                })
            	.then((response) => {
                	this.itemAmount = response.data.itemAmount;
                })
                .catch(e => {
                	console.log(e);
                });
            },
            onQtyAdd: function(event, qty) {
            	event.preventDefault();
            	axios.post('/add-cart', {
            		product: this.selectedProduct.id,
            		quantity: 1
            		})
            		.then((response) => {
            			if(response) {
                    		this.$emit("addcartevent", 1);
                    		swal(response.data.response.add_attributes.groupproduct.name, "успешно добавлен в корзину", "success");
            			}
                    })
                    .catch(e => {
                    	console.log(e);
                    });
                    
                    
                //this.$emit("addcartevent", 1);
            },
           
    	}
    }
</script>