<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{   
    private $person = null;
    private $parent = '/';
    public function index(){
        return view('home', ['person' => $this->person, 'parent' => $this->parent]);
    }
    public function order() {
        $this->parent = '/order';
        return view('order', ['person' => $this->person, 'parent' => $this->parent]);
    }
  

    public function aut () {
        $mail = null;
        $users = User::where('email', $mail)->get();         
        $from = $this->parent;
        return $from;       
    }
}
