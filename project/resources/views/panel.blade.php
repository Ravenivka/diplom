@extends('layouts.layout')
@php
    use App\Models\User;
    use App\Models\Booking;
    use App\Models\Feedback;
    $users = User::all();
    $bookings = Booking::all();
    $feeds = Feedback::orderBy('created_at', 'desc')->get()            ;

@endphp

@section('content')
<style>
    .panel_menu {
        width: 100%;
        display: flex;
        justify-content: space-around;
    }
    .panel_btn {
        width: 150px;
        margin: 15px;
    }
    .vis_table {
        width:100%;
        visibility: visible;
        border-collapse: collapse;
    }
    .invis_table {
        width:1%;
        visibility: hidden;        
    }
    th {
        border: 1px solid black;
    }
    td {
        border: 1px solid black;
    }
    #table2 input {
        width: 100px;
    }
    #table3 textarea {
        width: 300px;
    }
</style>
<div class="panel_menu">
    <button class="panel_btn" id="pan1">Пользователи</button>
    <button class="panel_btn" id="pan2">Заказы</button>
    <button class="panel_btn" id="pan3">Отзывы</button>
</div>
<table id="table1" class="vis_table">
    <tr><th>id</th><th>name</th><th>email</th><th>role</th><th>address</th><th>phone</th><th>avatar</th> <th></th> </tr>
    <?php
        foreach ($users as $value) {
            echo '<form action="admin_user" method="POST"><input type="hidden" name="id" value = "'.$value->id.'" />';
            ?>@CSRF<?php
            echo '<tr>';
            echo '<td>'. $value->id .'</td>';
            echo '<td><input type="text" value="'. $value->name .'" name="name" /> </td>';
            echo '<td><input type="text" value="'. $value->email .'" name="email" /> </td>';
            echo '<td>'. $value->role .'</td>';
            echo '<td><input type="text" value="'. $value->address .'" name="address" /> </td>';
            echo '<td><input type="text" value="'. $value->phone .'" name="phone" /> </td>';
            echo '<td><input type="text" value="'. $value->avatar .'" name="avatar" /> </td>';
            echo '<td><button type="submit">Save</button></td>';
            echo '</tr>';
            echo '</form>';
        }
    ?>

</table>
<br>
<table id="table2" style="font-size: 8px;" class="vis_table">
    <tr><th>id</th><th>user_id</th><th>composition</th><th>address</th><th>paid</th><th>phone</th><th>email</th><th>amount</th><th>status</th><th></th></tr>
    <?php
        foreach ($bookings as $value){
            echo '<form action="admin_book" method="POST"><input type="hidden" name="id" value = "'.$value->id.'" />';
            ?>@CSRF<?php
            echo '<tr>';
            echo '<td>'. $value->id .'</td>';
            echo '<td><input type="text" value="'. $value->user_id .'" name="user_id" /> </td>';  
            echo '<td><textarea name="composition">'. $value->composition .'</textarea> </td>'; 
            echo '<td><input type="text" value="'. $value->address .'" name="address" /> </td>';
            echo '<td><input type="text" value="'. $value->paid .'" name="paid" /> </td>'; 
            echo '<td><input type="text" value="'. $value->phone .'" name="phone" /> </td>'; 
            echo '<td><input type="text" value="'. $value->email .'" name="email" /> </td>';
            echo '<td><input type="text" value="'. $value->amount .'" name="amount" /> </td>';
            echo '<td><input type="text" value="'. $value->status .'" name="status" /> </td>';
            echo '<td><button type="submit">Save</button></td>';
            echo '</tr>';
            echo '</form>';
        }
    ?>
</table>
<br>
<table id="table3" class="vis_table">
    <tr><th>ID</th><th>User ID</th><th>Text</th><th></th></tr>
    <?php
        foreach ($feeds as $value){
            echo '<form action="admin_feed" method="POST"><input type="hidden" name="id" value = "'.$value->id.'" />';
            ?>@CSRF<?php
            echo '<tr>';
            echo '<td>'. $value->id .'</td>';
            echo '<td><input type="text" value="'. $value->user_id .'" name="user_id" /> </td>';  
            echo '<td><textarea name="text">'. $value->text .'</textarea> </td>'; 
            echo '<td><button type="submit">Save</button></td>';
            echo '</tr>';
            echo '</form>';
        }
    ?>
</table>



@endsection