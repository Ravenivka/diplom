<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    private $person = null;
    public function index(){
        return view('home', ['person' => $this->person]);
    }

    public function aut () {
        echo $_POST['mail'];
    }
}
