<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BookingController extends Controller
{
    public function create(Request $request) {
        
        
        $goods_array = [];
        foreach(Order::all() as $order) {
          $goods_array[$order->id] = $order->count;  
        }
        if (count($goods_array)>0 ){
            $book =  new Booking;
        } else {
            return redirect('/order');
        }
        $goods_string = json_encode($goods_array);
        $book->user_id=$_POST['user_id'];
        $book->composition = $goods_string;
        $time = time();
        $book->time_creation = $time ;
        $book->time_modification = $time ;
        $book->status = 'Заказ создан';
        $method = $_POST['drive'];
        if($method == 'address') {
            $book->address = $_POST['address'];
        } else {
            $book->address = $_POST['drive'];
        }
        $book->paid = false;
        $book->pay_method = $_POST['method'];
        $book->phone = $_POST['phone'];
        $book->email = $_POST['email'];
        $book->amount = $_POST['amount'];
        $book->save();
        $request->session()->put('email', $_POST['email']);
        $record = Booking::where('composition', $goods_string) ->where('time_creation', $time)->first();
        Order::truncate();
        return view('list', ['record'=>$record]);
    }
    public function order(Request $request) {
        if (Auth::check()){
            $email = Auth::user()->email;
        } else {
            if ($request->session()->has('email')) {
                $email = $request->session()->get('email');
            } else {
                $email = null;
            }            
        }
        if ($email == null) {
            return 'no result';
        }

        
        $books = Booking::where('email', $email)->get();
        return view('myorder',['books'=> $books]);
    }

    public function posts() {
        $message = "Тут дожно быть API банка";
        $title = "Внимание";
        return view('message', ['message'=>$message, 'title'=>$title, 'parent'=>'myoder']);
    }
}


