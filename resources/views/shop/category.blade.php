@extends('layouts.app_category')

@section('title', 'Категории')

@section('extra-css')

@endsection


@section('content')
	<category-component
		v-bind:initial-groupproducts = "{{$groupproducts}}"
		v-bind:initial-categories = "{{$menu_categories}}" 
		v-bind:initial-current-category = "{{$current_category}}"
		v-bind:total-cart-quantity = "totalCartQuantity"
		v-bind:user-name = "userName"
	>
	</category-component>
@endsection