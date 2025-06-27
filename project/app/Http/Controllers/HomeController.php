<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Classes\User as Person;


class HomeController extends Controller
{   
    private $person = null;
    private $parent = '/';



    public function getPerson() {
        return $this->person;
    }
    public function getParent() {
        return $this->parent;
    }

    public function setPerson($value) {
        $this->person = $value;
    }
    public function setParent($value) {
        $this->parent = $value;
    }    

    public function index(){
        if ($this->person == null) {
            $this->setPerson(new Person());
        }
        $this->parent = '/';
        return view('home', ['person' => $this->person->getname(), 'parent' => $this->parent]);
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
      $person = $this->getPerson();
      
    }

    public function getorder(Request $request, $data) {
        
        return view('order', ['person' => $this->person, 'parent' => $this->parent, 'data' => $data]);
    }
}
