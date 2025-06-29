@extends('layouts.layout')
    @php
        $title = 'Регистрация';
    @endphp
@section('content')

@include('auth.register', ['parent' => $parent])

<!--
<div class="aut_container">
  <form class="aut_form" action="/record" method="post">
    @CSRF
    <div class="aut_div" style="width: 500px;">
        <input type="text" name="name" class="form-style" placeholder="Ваше имя" id="uName" autocomplete="off"><br/>
        <input type="email" name="email" class="form-style" placeholder="Your Email *" id="uMail" autocomplete="off" required min="5"><br/>
        <input type="tel" name="phone" class="form-style" placeholder="Номер телефона *" id="uTel" autocomplete="off" required min="5"><br/>
        
        <input type="password" name="password" class="form-style" placeholder="Your Password *" id="uPass" autocomplete="off" required min="8"><br/>
        <textarea name="adress" id="uAdress" >Адрес доставки:</textarea>
        <p> <button class="aut_btn">OK</button> </p>
        <p style="mrgin-top:10px; color: wheat;">Пароль - минимум 6 символов, должен содержать спецсимволы, большие и маленькие буквы</p>
        @if($errors->any())
        <div style="font-size:14px; color:red;text-align:center; width:100%; display:block; margin-top: 10px;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      </div>
  </form>
      
	
</div>
-->       
@endsection