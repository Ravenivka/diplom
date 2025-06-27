@extends('layouts.layout')
    @php
    use App\Models\Good;
    use App\Http\Controllers\HomeController;
        $title = 'Каталог';
        $newcoffee = Good::where('cat', 'coffe')->where('new', true)->get();
        $oldcoffee = Good::where('cat', 'coffe')->where('new', false)->get();
        if (!isset($dataList)) {
          $dataList = Array();
        }
        $dataList = [
          ['id' => 1, 'count' => 1], ['id' => 4, 'count' => 3]
        ]
    @endphp
@section('content')
    <style>
        .coffe_container {
          width: 100%;
        }
        .coffe__h1 {
          text-align: center;
          margin: 5px auto;
        }
        .coffe__box {
          width: 100%;
          display: flex;
          flex-wrap: wrap;
          position: relative;
        }

        .lenta {
          width: 100%;
          display: flex;
          flex-wrap: wrap;
          position: relative;
        }
        .lenta__title {
          width: 100%;
          height: 150px;
          position: relative;
          display: flex;
          justify-content: center;
          align-items: center;          
          background-position: center;
          background-size: contain;
          background-repeat: no-repeat;
        }
        .lenta__h2 {
          display: block;
          position: relative;
          text-align: center;
        }   
        .coffe__summary {
          margin-left: 50px;
          margin-top: 10px;
          font-family: Arial, Helvetica, sans-serif;
          font-size: 18px;
          color: violet;
        }     
    </style>
    <div class="coffe_container">
        <h1 class="coffe__h1">Наш ассортимент</h1>
        @include('components.goodsgroup',['cat'=>'coffe', 'category' => 'Кофе' ])  
        <form method="post" action = {{ action([HomeController::class, 'getorder']) }}>
          @CSRF
          <?php $_POST['data'] = $dataList; ?>
          <p style="text-align: center;"> <button class="coffee_button" type="submit">Перейти в корзину</button> </p>
        </form>
        @include('components.goodsgroup',['cat'=>'dessert', 'category' => 'Десерты' ])  
        @include('components.goodsgroup',['cat'=>'blin', 'category' => 'Блины' ])  
    </div>
       
@endsection