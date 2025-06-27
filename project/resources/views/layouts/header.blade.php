
<style>
    .row_person {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        color: coral;
        font-weight: bold;
    }
    .row__summary{
        display: block;
        margin-left: 10px;
    }
    .row__panel {
        display: flex;
        align-items: center;
    }
    .row__div {
        position: absolute;
        top: 50px;
        right: 220px;
        background-color: #505050;
        visibility: hidden;
    }
    .row__a {
        color: gold;
        border: none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 16px;
        width: 150px;
        text-align: left;
        padding-left: 5px;
    }
</style>


    <div class="row__start"> <h1 class="row__h1" id="home">КОФЕЙНЯ</h1></div>
    <div class="row__finish">
        <span class="row__span" id="team">Команда</span>
        <span class="row__span" id="coffe">Кофе</span>
        <span class="row__span" id="feed">Отзывы</span>
        <span class="row__span" id="order">Заказ</span>
    </div>
    <div class="row__panel">        
    <span class="row_person">{{ $person }}</span>        
    
        <button class="row__summary" > <img width="30" height="30" alt="user" src="img/user.png" /> </button>
        <div class="row__div" id="row__div">
            <a class="row__a" href="/aut">Войти</a><hr/>
            <a class="row__a" href="/reg">Регистрация</a><hr/>
            <a class="row__a" href="/panel">Панель управления</a>
        </div>
        

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
        const visa = document.querySelector('.row__summary');
        const diva = document.getElementById('row__div');
        visa.addEventListener('click', function(){
            if (diva.style.visibility == 'visible') {
                diva.style.visibility = 'hidden';
            } else {
                diva.style.visibility = 'visible';
            }
        })
    </script>
