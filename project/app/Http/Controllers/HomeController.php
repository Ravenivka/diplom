<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{   
    private $person = null;
    public function index(){
        return view('home', ['person' => $this->person]);
    }
    public function order() {
        return view('order', ['person' => $this->person]);
    }
  

    public function aut () {
        $mail = null;
        $users = User::where('email', $mail)->get();         
        $from = filter_input(INPUT_SERVER, 'QUERY_STRING');
        return $_SERVER['HTTP_REFERER'];       
    }
}
