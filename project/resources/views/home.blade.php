
@extends('layouts.layout')
    @php
        $title = 'Домашняя';
    @endphp
@section('content')

    <div class="home_container">
        <div class="home__img"> 
          <img class="home__img_img" alt="cup" src="img/home.jpg" />
        </div>  
        <div class="home__basic">
            <h2 class="home__basic_h2">Любимый кофе в уютном кафе или с собой!</h2>
            <h3 class="home__basic_h3">со скидкой для студентов 20%!</h3> 
            <p class="home__basic_p">Отличный, бодрящий и безумно ароматный кофе ждёт вас каждый день с 8.00 до 23.00</p>
            <p class="home__basic_p">Без перерывов и выходных</p>
            <p style="text-align:center;"><button class="home__basic_order">ЗАКАЗАТЬ</button></p>
        </div>
    </div>
    <div class="arrive">
        <div class="arrive__div">
            <div class="arrive__img">
                <img src="img/AdobeStock_498428899.png" alt="arrive" class="arrive__pic" />
            </div>
            <div class="arrive__context">
                <h1 class="arrive__h1">Доставка</h1>
                <p class="arrive__p">Доставка по городам Ревда, Первоуральск и Дгтярск бесплатна.</p>
                <p class="arrive__p">Для остальных населённых пунктов необходимо договариваться с оператором.</p>
            </div>
        </div>
    </div>
    <script>
        const btn = document.querySelector('.home__basic_order');
        btn.addEventListener('click', function(){
            window.location.href = '/coffe';
        });

    </script>
@endsection