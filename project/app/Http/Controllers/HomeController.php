<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;    

class HomeController extends Controller
{   
    
    public function index(Request $request){      
        
        return view('home', ['parent'=> $request->path()]);
        //return $this->parent;
    }

    public function team(Request $request) {
        
        //return $this->parent;
        return view('team', ['parent'=> $request->path()]);
    }
    public function coffe(Request $request) {
        
        //return $this->parent;
        return view('coffe', ['parent'=> $request->path()]);
    }
        public function feed(Request $request) {
        
        //return $this->parent;
        return view('feed', ['parent'=> $request->path()] );
    }
    public function order(Request $request) {
       
        //return $this->parent;
        return view('order', ['parent'=> $request->path()]);
    }
  

    public function aut ($parent) {
      
      return view('aut',[ 'parent' => $parent]);
    }

    public function getorder(Request $request, $data) {
        
        return view('order', [ 'data' => $data, 'parent'=> $request->path()]);
    }
    public function reg ($parent) {
      
      return view('reg', [ 'parent' => $parent]);
    }





}
