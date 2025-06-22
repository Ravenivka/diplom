<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{   
    private $person = null;
    private $parent = '/';
    public function index(){
        $this->parent = '/';
        return view('home', ['person' => $this->person, 'parent' => $this->parent]);
        //return $this->parent;
    }

    public function team() {
        $this->parent = '/team';
        //return $this->parent;
        return view('team', ['person' => $this->person, 'parent' => $this->parent]);
    }
    public function coffe() {
        $this->parent = '/coffe';
        //return $this->parent;
        return view('coffe', ['person' => $this->person, 'parent' => $this->parent]);
    }
        public function feed() {
        $this->parent = '/feed';
        //return $this->parent;
        return view('feed', ['person' => $this->person, 'parent' => $this->parent]);
    }
    public function order() {
        $this->parent = '/order';
        //return $this->parent;
        return view('order', ['person' => $this->person, 'parent' => $this->parent]);
    }
  

    public function aut () {
        $mail = null;
        $users = User::where('email', $mail)->get();         
        $from = $_POST['from'];
        return $from;       
    }
}
