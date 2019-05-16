<template>
		<div class="container">
			<div class="row" v-if="totalCartQuantity">
				<div class="col-lg-8 order-2 order-lg-1">
					<form v-on:submit="checkout" class="checkout-form">
						<div class="cf-title">Billing Address</div>
						<div class="row">
							<div class="col-md-7">
								<p>*Billing Information</p>
							</div>
							<div class="col-md-5">
								<div class="cf-radio-btns address-rb">
									<div class="cfr-item">
										<input type="radio" name="pm" id="one">
										<label for="one">Use my regular address</label>
									</div>
									<div class="cfr-item">
										<input type="radio" name="pm" id="two">
										<label for="two">Use a different address</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row address-inputs">
							<div class="col-md-6">
								<input type="text" v-model="checkoutForm.name" placeholder="Имя" required>
							</div>
							<div class="col-md-6">
								<input type="text" v-model="checkoutForm.surname" required placeholder="Фамилия">
							</div>
							<div class="col-md-12">
								<input type="text" v-model="checkoutForm.sity" required placeholder="Город">
								<input type="text" v-model="checkoutForm.street" required placeholder="Улица">
							</div>
							<div class="col-md-6">
								<input type="text" v-model="checkoutForm.building" required placeholder="Дом">
							</div>
							<div class="col-md-6">
								<input type="text" v-model="checkoutForm.flat" required placeholder="Квартира">
							</div>
							<div class="col-md-6">
								<input type="text" v-model="checkoutForm.email" required placeholder="email">
							</div>
							<div class="col-md-6">
								<input type="text" v-model="checkoutForm.phone" required placeholder="Телефон - 11 знаков (с '8' или '7') без '+'">
							</div>
						</div>
						<div class="cf-title">Доставка</div>
						<div class="row shipping-btns">
							<div class="col-6">
								<h4>Самовывоз</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-1">
										<label for="ship-1">Бесплатно</label>
									</div>
								</div>
							</div>
							<div class="col-6">
								<h4>Курьер</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-2">
										<label for="ship-2">500 Руб.</label>
									</div>
								</div>
							</div>
						</div>
						<div class="cf-title">Способ оплаты</div>
						<ul class="payment-list">
							<li>Paypal<a href="#"><img src="img/paypal.png" alt=""></a></li>
							<li>Credit / Debit card<a href="#"><img src="img/mastercart.png" alt=""></a></li>
							<li>При получении заказа</li>
						</ul>
						<button class="site-btn submit-order-btn">Оформить заказ</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
					    
						<h3>Ваша корзина</h3>
					
						<ul class="product-list">
							<cart-checkout></cart-checkout>
						</ul>
						<ul class="price-list">
							<li>Total<span>$99.90</span></li>
							<li>Shipping<span>free</span></li>
							<li class="total">Total<span>$99.90</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</template>

<script>
    import CartCheckout from './items/CartCheckoutComponent.vue';
    //import KladrApi from 'kladrapi-for-node';
    import 'jquery.kladr';

    export default {
        components: {
            'cart-checkout': CartCheckout,
        },
        props: [
            'totalCartQuantity'
            ],
        data: function() {
            return {
                checkoutForm: {
                	name: '',
                	surname: '',
                	sity: '',
                	street: '',
                	building: '',
                	flat: '',
                	email: '',
                	phone: ''
                }
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
            
            },
        checkout: function(event) {
        	event.preventDefault();
        	axios.post('/start-checkout', this.checkoutForm/*{
        		}*/)
        		.then((response) => {
        			if(response.data) {
        				if(response.data.error) {
        					console.log(response.data.error);
        					let errorsArray = response.data.error.join(', ');
        					swal("Ошибка в заполнении полей", errorsArray, "error");
        					return;
        				}
                		this.$emit("changecartevent", 1);
                		console.log(response.data);
                		swal("Заказ", "Ваш заказ принят!", "success");
            		}
            		else {/*
            			swal({
							title: "Страница устарела!",
							text: "Обновите пожалуйста страницу товара, используя кнопку ниже",
							icon: "warning",
							buttons: true,
							dangerMode: true,
						})
						.then((willDelete) => {
							if (willDelete) {
    							swal("Poof! Your imaginary file has been deleted!", {
    							icon: "success",
    							});
							} else {
    							swal("Your imaginary file is safe!");
							}
						});*/
						this.$emit("changecartevent", 1);
            			swal("Заказ", "Что то пошло не так...", "error");
            		}
                })
                .catch(e => {
                	//console.log(e);
               		swal('Ошибка', "Внутренняя ошибка сервера", "error");
                });
            },
        getSuggestions: function(query){
			const Kladr = new kladrApi();
			let q = {query: query, contentType: 'city', withParent: 0};
                        Kladr.getData(q, (err, result)=>{
                                 console.log(err, result);
                        });

                },
    	}
    }
</script>