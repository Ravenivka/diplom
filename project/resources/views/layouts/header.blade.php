
<header class="row">

    <div class="row__start"> <h1 class="row__h1">КОФЕЙНЯ</h1></div>
    <div class="row__finish">
        <span class="row__span">Команда</span>
        <span class="row__span">Кофе</span>
        <span class="row__span">Отзывы</span>
        <span class="row__span" id="order">Заказ</span>
    </div>
    <div class="row__panel"> 
    @if (is_null($person))
    <form method="post" action="/aut" class="row__panel_form">
        @CSRF
        <input class="row__panel_input" placeholder="e-mail" type="email" name="mail"/>  
        <button class="row__panel_button" type="submit" >
           <svg viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#444" d="M7.3 14.2l-7.1-5.2 1.7-2.4 4.8 3.5 6.6-8.5 2.3 1.8z"></path> </g></svg>
        </button>
    </form>
    @else
        <p class="persona">{{ $person }}</p>
    @endif
    </div>
    <script>
        const span = document.getElementById('order');
        span.addEventListener('click', function(){
            window.location.href = '/order';
        } );
         
    </script>
</header>