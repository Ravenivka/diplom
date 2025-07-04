<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Request $request) {
        $book =  new Booking;
        
        $goods_array = [];
        foreach(Order::all() as $order) {
          $goods_array[$order->id] = $order->count;  
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
        
        $record = Booking::where('composition', $goods_string) ->where('time_creation', $time)->first();
        Order::truncate();
        return view('list', ['record'=>$record]);
    }
}
