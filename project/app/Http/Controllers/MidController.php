<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;    

class MidController extends Controller
{   

    public function exit(Request $request, $parent) {
        $parent = '/'.$parent;
        Auth::logout();
        
        //return $this->parent;
        return redirect(url($parent)) ;
    }
}