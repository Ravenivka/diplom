@extends('layouts.layout')
<?php 
    use App\Models\Booking;
    $title='Заказы'; 
    $parent='myorder'; 
    
?>
<style>
    .list_text {
        margin-left: 25px;
        font-size: 14px;
    }
</style>


@section('content')
<div class="order_container">    
    <div class="multiline">
        <h1 style="text-align: center;">Ваши заказы </h1>    
        <?php 
            
            foreach ($books as $value) {
        ?>        
                    @include('components.line', ['book' => $value])
        <?php
                
            }
        ?>
    </div>
</div>
@endsection