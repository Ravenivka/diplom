

<?php
    use App\Http\Classes\User ;
    use Illuminate\Support\Facades\Auth;    
    

    $user = Auth::user(); 
    if ($user == null) {
        $uName = 'Гость';
    } else {
        $uName = $user->name;
    }
    

    
?>

    <div class="row__start"> <h1 class="row__h1" id="home">КОФЕЙНЯ</h1></div>
    <div class="row__finish">
        <span class="row__span" id="team">Команда</span>
        <span class="row__span" id="feed">Отзывы</span><span class="row__span" id="coffe">Кофе</span>        
        <span class="row__span" id="order">Заказ</span>
    </div>
    <div class="row__panel">        
    <span class="row_person">{{ $uName }}</span>        
    <details>
        <summary class="row__summary" > <img width="30" height="30" alt="user" src="{{ url('img/user.png') }}" /> </summary>
        <div class="row__div" id="row__div">
            <a class="row__a" id="row__a1" href="/aut/{{ $parent }}">Войти</a><hr/>
            <a class="row__a" id="row__a2" href="/reg/{{ $parent }}">Регистрация</a><hr/>
            <a class="row__a" id="row__a2" href="/info/user">Профиль</a><hr/>
            <a class="row__a" id="row__a2" href="/myorder">Мои заказы</a><hr/>
            <a class="row__a" href="/exit/{{ $parent }}">Выход</a><hr/>
            @if ($user != null && $user->role > 0)
                <a class="row__a" id="row__a3" href="/panel">Панель управления</a>
            @endif
            
        </div>
    </details>

    </div>
    <script>
        const span = document.getElementById('order');
        span.addEventListener('click', function(){
            window.location.href = '/order';
        } );
        const t = document.getElementById('team'); 
        t.addEventListener('click', function(){
            window.location.href = '/team';
        } );
        const home = document.getElementById('home'); 
        home.addEventListener('click', function(){
            window.location.href = '/';
        } );
        const coffe = document.getElementById('coffe'); 
        coffe.addEventListener('click', function(){
            window.location.href = '/coffe';
        } );
        const feed = document.getElementById('feed'); 
        feed.addEventListener('click', function(){
            window.location.href = '/feed';
        } );


    </script>
