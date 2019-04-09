@extends('layouts.app')

@section('title', $category->name ?? 'Категории')

@section('extra-css')

@endsection


@section('content')	

@component('shop.components.breadcrumbs')
        @slot('title') Категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') {{$category->name ?? ''}} @endslot
@endcomponent	
	
	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<category-component v-bind:initial-categories="{{$menu_categories}}" v-bind:initial-current-category="{{$current_category}}"></category-component>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						@forelse ($groupproducts as $groupproduct)
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-sale">ON SALE</div>
									<a href="{{ route('shop.product', $groupproduct->slug) }}">
										<img class="img-fluid" src="{{ asset('storage/' . $groupproduct->image) }}" alt="">
									</a>
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>{{ $groupproduct->price }} руб.</h6>
									<a href="{{ route('shop.product', $groupproduct->slug) }}">
										<p>{{ $groupproduct->name }}</p>
									</a>
								</div>
							</div>
						</div>
						@empty
						
						<div style="text-align: left">Товаров в категории {{$category->name ?? '' }} не найдено</div>
						
						@endforelse
						
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->
	
@endsection