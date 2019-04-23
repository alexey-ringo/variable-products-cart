@extends('layouts.app')

@section('content')	

@component('shop.components.breadcrumbs')
        @slot('previous') <a href="{{url()->previous()}}">Назад</a> / @endslot
        @slot('active') 
        	@php
        		$productName = json_decode($result, true);
        		echo $productName['groupproduct']['name'];
        	@endphp
        @endslot
@endcomponent	

	<!-- product section -->
	<section class="product-section">
		<div class="container">
			
			<product-component v-bind:initial-products="{{$result}}" v-on:changecartevent="changecartevent"></product-component>
			
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	@if(count($relatedProducts))
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>Рекомендуем также посмотреть:</h2>
			</div>
			<div class="product-slider owl-carousel">
				@foreach ($relatedProducts as $relatedProduct)
				<div class="product-item">
					<div class="pi-pic">
						<a href="{{ route('shop.product', $relatedProduct->slug) }}">
							<img src="{{ asset('storage/' . $relatedProduct->image) }}" alt="">
						</a>
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>{{ $relatedProduct->price }} руб.</h6>
						<p>{{ $relatedProduct->name }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->
	@endif

@endsection