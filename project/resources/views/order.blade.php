@extends('layouts.layout')
    @php
        $title = 'Заказ';        
    @endphp
@section('content')

    <div class="order_container">
        <?php
            if(!isset($data)){
                echo 'Cart is empty';
            } else {
                var_dump ( json_decode($data));
            }
        ?>
    </div>
       
@endsection