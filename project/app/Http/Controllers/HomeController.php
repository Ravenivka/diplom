<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Pail\ValueObjects\Origin\Console  ;

class HomeController extends Controller
{   
    private $person = null;
    public function index(){
        return view('home', ['person' => $this->person]);
    }

    public function aut () {
        $mail = null;
        
        if (trim($_POST['mail']) == '') {
            error_log('zero');
            $mail = null; 
        } elseif (isset($_POST['mail']) ) {
            $mail = $_POST['mail'];
        
        } else {            
            error_log('zero');
        }

        return $mail;
        
        
            
       
    }
}
