@extends('layouts.layout')
<?php 
    use App\Models\Good;
    $title='Заказ'; 
    $parent='create'; 
    $string = $record->composition;
    $array = json_decode($string);
?>



@section('content')
<div class="order_container">
    <h1 style="text-align: center;">Ваш заказ №{{ $record->id }}</h1>    
    <div>
        <?php
            $str='';
            foreach ($array as $key => $value) {
                $item = Good::find($key);
                $str = $str.$item->name.' - '.$value.'; ';
            }
            //echo $str;
        ?>
        <p style="margin-left: 25px;">{{ $str }} ИТОГО: {{ $record->amount }} руб.</p>
        
            
    </div>

</div>
@endsection
