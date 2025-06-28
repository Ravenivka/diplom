@extends('layouts.layout')
    @php
        $title = 'Вход';
    @endphp
@section('content')


<div class="aut_container">
  <form class="aut_form" action="/check" method="post">
    @CSRF
    <div>
      <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off"><br/>
      <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off"><br/>
      <p style="text-align:center"> <button class="aut_btn">OK</button> </p>
      <span style="font-size:10px; color:red;text-align:center; width:100%; display:block;" id="error">тут будут ошибки</span>
      </div>
  </form>

	
</div>
       
@endsection