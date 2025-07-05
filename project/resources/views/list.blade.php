@extends('layouts.layout')
<?php 
    use App\Models\Booking;
    $title='Заказ'; 
    $parent='create'; 
    
?>



@section('content')
<div class="order_container">
    <h1 style="text-align: center;">Ваш заказ №{{ $record->id }} создан</h1>    
    @include('components.line', ['book' => $record])
    <div class="multiline">
        <h1 style="text-align: center;">Ваши заказы </h1>    
        <?php 
            $books = Booking::where('email', $record->email)->get();
            foreach ($books as $value) {
                if ($value->id != $record->id) { ?>
                    @include('components.line', ['book' => $value])
                    <?php
                }
            }
        ?>
    </div>
</div>
@endsection
