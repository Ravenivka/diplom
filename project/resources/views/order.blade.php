@extends('layouts.layout')
    @php
        use App\Models\Order;
        use App\Models\Good;
        $title = 'Заказ'; 
        var_dump($cart);   
    @endphp
@section('content')
<!-- move to team.css
    <style> 
        
    </style>
 -->
    <div class="order_container">
        <h1 style="text-align: center; margin: 10px;">Ваша корзина </h1>
                <div class="inner_cart">
                    <div class="order_container_left"> @include('components.order_list', ['goods'=>$cart]) </div>
                    <div class="order_container_right">
                        <div>
                        <ol class="right_ul">
                            <?php
                                $all_amount = 0;
                                foreach($cart as $element){
                                    $item = Good::find($element['id']);
                                    echo '<li>';
                                    echo '<b>'.$item->name.'</b> - Количество: '.$element['count'].' - Сумма - ';
                                    $amount = $item->price * $element['count'];
                                    $all_amount = $all_amount + $amount;
                                    echo $amount.' руб.';
                                    echo '</li>';
                                }
                            ?>
                        </ol>
                        </div>
                        <span class="after_ol">ИТОГО: {{ $all_amount }} руб.</span>
                    </div>
                </div>
                <div class="formed_span">                    
                    <a class="formed_a" href="/form">Оформить</a>                   
                </div>
       
    </div>
       
@endsection