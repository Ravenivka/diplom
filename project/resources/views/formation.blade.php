@extends('layouts.layout')
@php
    use App\Models\Order;
    use App\Models\Booking;
    use App\Models\Good;
    use App\Models\User;
    $orders = Order::all();
    $title="Оформление";
    $parent = 'form';
@endphp

@section('content')
<h1 style="text-align:center;">Оформление заказа</h1>
<div class="formation">
    <div class="formation__left">
        <h2 style="text-align:center;">Состав:</h2>
        <ol class="right_ul">
            <?php
                $all_amount = 0;
                foreach ($orders as $element) {
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
        
        <span class="after_ol">ИТОГО: {{ $all_amount }} руб.</span>
    </div>
    <div class="formation__right"><br>
        <form method="post" action="/create">
            <input type="hidden" name='amount' value="{{ $all_amount }}" />
            @CSRF
            <ol class="formation__right_ol">
                <li>
                    <h3>Способ оплаты</h3>
                    <div class="inner__li">
                        <p><input type="radio" name="method" value="При получении" class="inner__radio"> При получении </p>
                        <p><input type="radio" name="method" value="СБП" class="inner__radio"> СБП </p>
                        <p><input type="radio" name="method" value="Банковской картoй" class="inner__radio"> Банковской картoй </p>
                    </div>
                </li>
                <li>
                    <h3>Персональные данные</h3>
                    <div class="inner__li">
                        <?php
                            $user = Auth::user();  
                            echo '<p>Ваш e-mail: <input required name="email" type="text" class="inner__text" value="' ;
                            if  ($user == null) {
                                echo ''; 
                            }  else {
                                echo $user->email;
                            } 
                            echo '"/>  </p>  <p>Ваш телефон: <input name="phone" type="text" class="inner__text" value="' ;
                            if  ($user == null) {
                                echo ''; 
                            }  else {
                                echo $user->phone;
                            } 
                            echo '"/></p>'                                                                           
                        ?>
                        
                            
                            
 
                            
                    </div>
                </li>
                <li>
                    <h3>Способ доставки</h3>
                    <p><input name="drive" type="radio" value="Заказать столик" class="inner__radio"> Заказать столик </p>
                    <p><input name="drive" type="radio" value="Самовывоз" class="inner__radio"> Самовывоз </p>
                    <p><input name="drive" type="radio" value="address" class="inner__radio"> Курьером</p>
                    <textarea name="address" style="height: 25%; width: 80%; padding: 3px;"><?php
                        if ($user != null) {
                            echo $user->address;
                        }
                    ?></textarea>
                </li>
            </ol>
            <br>
            <input type="hidden" name="user_id" value="
                <?php
                    if ($user != null) {
                        echo $user->id;
                    } else {
                        echo -1;
                    }
                ?>
            " />
            <p><button class="confirm" type="submit">Подтвердить</button></p>
        </form>
    </div>
</div>




@endsection