Уважаемый {{$sendEmailData->purchase->name }}
<hr>
Ваш заказ № {{ $sendEmailData->purchase->id }} в составе:
<hr> 
@foreach($sendEmailData->order->orderItems as $purchaseItem)
<hr>
{{ $purchaseItem->product->groupproduct->name . ' ' . $purchaseItem->product->name . ' - ' . $purchaseItem->quantity . ' шт.'}}
<hr>
@endforeach

<hr>
Будет доставлен по адресу {{ $sendEmailData->purchase->sity . ' ' .
                            $sendEmailData->purchase->street . ' ' .
                            $sendEmailData->purchase->building . ' ' .
                            $sendEmailData->purchase->flat}}

<hr>
Всего товаров в заказе {{ $sendEmailData->order->totalQuantity() }} шт.
<hr>
<hr>
Сумма к оплате {{ $sendEmailData->order->totalAmount() }} Руб.
<hr>