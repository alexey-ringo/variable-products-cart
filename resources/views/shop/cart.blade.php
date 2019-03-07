@extends('layouts.app')

@section('content')	

@component('shop.components.breadcrumbs')
        @slot('title') Корзина @endslot
        @slot('parent') Категории @endslot
        @slot('active') Новости @endslot
@endcomponent	


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
                        <cart-component {{--v-bind:initial-cart-products="{{$itemsInOrder}}"--}}></cart-component>
                        
						<div class="total-cost">
							<h6>Total <span>$99.90</span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form>
					<a href="" class="site-btn">Proceed to checkout</a>
					<a href="" class="site-btn sb-dark">Continue shopping</a>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->


@endsection