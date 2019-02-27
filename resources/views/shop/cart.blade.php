@extends('layouts.app')

@section('content')	

@component('shop.components.breadcrumbs')
        @slot('title') Корзина @endslot
        @slot('parent') Категории @endslot
        @slot('active') Новости @endslot
@endcomponent	


	<!-- Shoping Cart -->
	<div class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				

				<div class="col-lg-12 col-xl-12 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						


						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Товар</th>
									<th class="column-2"></th>
									<th class="column-3">Цена</th>
									<th class="column-4">Количество</th>
									<th class="column-5">Стоимость</th>
									<th class="column-6">Удалить</th>
								</tr>
								
@forelse($itemsInOrder as $itemInOrder)

								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<a href="">
                            					
                        					</a>
										</div>
									</td>
									<td class="column-2">
										<a href="">
										    
											<p>{{$itemInOrder->product_id}}</p>
                        				</a>
									</td>
									<td class="column-3">{{$itemInOrder->order_price}} Руб.</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down-incart cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="{{$itemInOrder->getItemQuantity()}}">

											<div class="btn-num-product-up-incart cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">{{$itemInOrder->getItemAmount()}} Руб.</td>
									<td class="column-6">
										
										<form method="post">
											<input type="hidden" name="product_id" id="product_id" value="{{$itemInOrder->product_id}}" />
    										
    										<input id="form-token" type="hidden" name=""
        									value=""/>
    
    										<input type="submit" class="btn btn-danger" value="Удалить" />
										</form>
										
										
										
									</td>
								</tr>

@empty

                            <div style="text-align: left">No items found</div>
						
@endforelse
 
							</table>
							<h4></h4>
							<p>{{$cartStatus['totalQuantity']}}</p>
							<br><br>
							<h4></h4>
							<p>{{$cartStatus['totalAmount']}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection

