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
                    <span class="dec qtybtn" v-on:click="onQtyDel">-</span>
					<input type="text" :value="quantity">
					<span class="inc qtybtn" v-on:click="onQtyAdd">+</span>
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
                itemAmount: 0,
                quantity: this.product.quantity
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
            		    if(response.data) {
                    	    this.$emit("changecartevent", 1);
            		    }
            		    else {
            		        this.$emit("changecartevent", 1);
            				swal('Товар не удален!', "Что то пошло не так...", "error");
            		    }
                    })
                    .catch(e => {
                    	//console.log(e);
                    	swal('Ошибка', "Внутренняя ошибка сервера", "error");
                    });
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
                	//console.log(e);
                	swal('Ошибка', "Внутренняя ошибка сервера", "error");
                });
            },
            onQtyAdd: function(event) {
            	event.preventDefault();
            	this.quantity ++;
            	axios.post('/update-cart', {
            		productId: this.productId,
            		quantity: this.quantity
            		})
            		.then((response) => {
            			if(response.data) {
                    		this.$emit("changecartevent", 1);
            			}
            			else {
            			    this.$emit("changecartevent", 1);
            				swal('Количество товара не изменено!', "Что то пошло не так...", "error");
            			}
                    })
                    .catch(e => {
                    	//console.log(e);
               			swal('Ошибка', "Внутренняя ошибка сервера", "error");
                    });
            },
            onQtyDel: function(event) {
            	event.preventDefault();
            	if(this.quantity > 1) {
            	    this.quantity --;
            	}
            	axios.post('/update-cart', {
            		productId: this.productId,
            		quantity: this.quantity
            		})
            		.then((response) => {
            			if(response.data) {
                    		this.$emit("changecartevent", 1);
            			}
            			else {
            			    this.$emit("changecartevent", 1);
            				swal('Количество товара не изменено!', "Что то пошло не так...", "error");
            			}
                    })
                    .catch(e => {
                    	//console.log(e);
               	        swal('Ошибка', "Внутренняя ошибка сервера", "error");
                    });
            },
    	}
    }
</script>