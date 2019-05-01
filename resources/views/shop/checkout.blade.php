@extends('layouts.app')

@section('content')	

@component('shop.components.breadcrumbs')
        @slot('previous') <a href="{{url()->previous()}}">Назад</a> / @endslot
        @slot('active') Оформление заказа  @endslot
@endcomponent	

	<!-- checkout section  -->
	<section class="checkout-section spad">
	    
	    <checkout-component
		v-bind:total-cart-quantity="totalCartQuantity"
		v-on:changecartevent="changecartevent"
		></checkout-component>

	</section>
	<!-- checkout section end -->


@endsection