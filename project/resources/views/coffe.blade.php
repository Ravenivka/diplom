@extends('layouts.layout')
    @php
    use App\Models\Good;
    use App\Http\Controllers\HomeController;
        $title = 'Каталог';
        
    @endphp
@section('content')

    <div class="coffe_container">
        <h1 class="coffe__h1">Наш ассортимент</h1>
        @include('components.goodsgroup',['cat'=>'coffe', 'category' => 'Кофе' ])  
        <form method="post" action = "/order" id="main_form">
          @CSRF         
        </form>
        <p style="text-align: center;"> <button class="coffee_button" type="submit" form="main_form">Перейти в корзину</button> </p>
        @include('components.goodsgroup',['cat'=>'dessert', 'category' => 'Десерты' ])  
        <p style="text-align: center;"> <button class="coffee_button" type="submit" form="main_form">Перейти в корзину</button> </p>
        @include('components.goodsgroup',['cat'=>'blin', 'category' => 'Блины' ])  
        <p style="text-align: center;"> <button class="coffee_button" type="submit" form="main_form">Перейти в корзину</button> </p>
    </div>       
@endsection