@extends('layouts.layout')
<?php

?>
<style>
    .profile {
        width: 100%;
        position: relative;
    }
    .profile__info{
        position: relative;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        background-color: #111827;
    }
    .frame1 {
        width: 100%;
        height: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .img_profile {
        
        max-height:100%; max-width:100%;       
    }
    .inner__frame {
        height: 50%;
        width: 50%;
        position: relative;
    }
    .inner__form {
        height: 50%;
        position: relative;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .upload_btn .upload2_btn{
        border-radius: 10px;
        background-color: blueviolet;
        color: gold;
        width: 150px;
    }
    #input__upload {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        position: absolute;
        z-index: -10;
    }
    .frame2{
        position: relative;
    }
    .frame21 {
        margin: 25% auto;
        width: 300px;
    }

</style>

@section('content')
<div class="profile">
    <h1 style="text-align:center">Профиль</h1>
    <form action="/profile" method="POST" id="user_update"> @CSRF </form>
    <div class="profile__info">
        <div class="frame1">
            <div class="inner__frame">
                <img src="{{ url($user->avatar) }}" alt="img_profile" class="img_profile">
            </div>
            <form action="/getImg/user" method="POST" enctype="multipart/form-data" class="inner__form">
                @csrf
                <br>
                <label for="input__upload"><img class="upload_img" src="{{ url('img/icons64.png') }}" width="64" height="64" alt="uplod"/></label>
                <input id="input__upload" type="file" name="file" accept=".jpg, .png"> <button class="upload_btn" type="submit">Загрузить файл</button>
            </form>
        </div>
        <div class="frame2">
            
            <div class="frame21">
                <h2 style="text-align:center; color:burlywood;">ИНФО</h2>
                <div>
                    <label class='reg_label' for="name">Name</label><br/> 
                    <input id="name" class="reg_input" type="text" name="name" value="{{ $user->name }}" form="user_update"/>              
                </div>

        <!--     Email Address -->
                <div >
                    <label class='reg_label' for="email" >Email</label><br/>
                    <input id="email" class="reg_input" type="email" name="email" value="{{ $user->email }}"  form="user_update"/>           
                </div>

        <!--    phone -->
                <div >
                    <label class='reg_label' for="phone" >Phone</label><br/>
                    <input id="phone" class="reg_input" type="tel" name="phone" value="{{ $user->phone }}"  form="user_update"/>            
                </div>
                <textarea style="width: 242px;" id="address" name="address" class="reg-address"  form="user_update">{{ $user->address }}</textarea>
                <button class="upload2_btn" type="submit"  form="user_update">Сохранить</button>
            </div>
        </div>
    </div>

</div>

@endsection