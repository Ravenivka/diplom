@extends('layouts.layout')
    @php
        $title = 'Регистрация';
    @endphp
@section('content')




<div class="aut_container">
  <form class="aut_form" action="/record" method="post">
    @CSRF
    <div>
        <input type="text" name="uName" class="form-style" placeholder="Ваше имя" id="uName" autocomplete="off"><br/>
        <input type="email" name="uMail" class="form-style" placeholder="Your Email *" id="uMail" autocomplete="off" required><br/>
        <input type="text" name="uPhone" class="form-style" placeholder="Ваш телефон *" id="uPhone" autocomplete="off" required><br/>
        <input type="password" name="uPass" class="form-style" placeholder="Your Password *" id="uPass" autocomplete="off" required><br/>
        <textarea name="uAdress" id="uAdress" placeholder="Адрес доставки"></textarea>
        <p style="text-align:center"> <button class="aut_btn">OK</button> </p>
        <span style="font-size:10px; color:red;text-align:center; width:100%; display:block; margin-top: 10px;" id="error">тут будут ошибки</span>
      </div>
  </form>

	
</div>
       
@endsection