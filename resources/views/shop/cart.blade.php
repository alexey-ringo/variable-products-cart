@extends('layouts.app')

@section('content')	

@component('shop.components.breadcrumbs')
        @slot('title')@endslot
        @slot('parent') Главная @endslot
        @slot('active') Корзина @endslot
@endcomponent	


<!-- cart section end -->
<section class="cart-section spad">
	<div class="container">
			
        <cart-component {{--v-bind:initial-cart-products="{{$itemsInOrder}}"--}}
        				v-bind:total-cart-quantity="totalCartQuantity"
        				v-bind:total-cart-amount="totalCartAmount"
        				v-on:addcartevent="addcartevent"
        >
        </cart-component>
				
	</div>
</section>
<!-- cart section end -->


@endsection