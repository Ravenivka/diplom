<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;    

class HomeController extends Controller
{   
    public function exit(Request $request, $parent) {
        $parent = '/'.$parent;
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        //return $this->parent;
        return redirect(url($parent)) ;
    }
    
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

  

    public function aut ($parent) {
      
      return view('aut',[ 'parent' => $parent]);
    }

    public function order(Request $request) {
        
        return view('order', [ 'parent'=> $request->path()]);
    }
    public function reg ($parent) {
      
      return view('reg', [ 'parent' => $parent]);
    }





}
