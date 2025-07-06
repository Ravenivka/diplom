<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function form() {
        return view('formation');
    }
    
    public function order(Request $request) {         
       
        
        foreach($_POST as $key => $value){
            if (str_contains($key, 'coffe')){
                if (Order::find($value) != null && Order::find($value)->exists()) {
                    $item = Order::find($value);
                    $item->count = $item->count + 1;                    
                    $item->save();                    
                } else {
                    $item = new Order;
                    $item->id = $value;
                    $item->count = 1;
                    $item->cat = 'coffe';
                    $item->save();
                }                
            }
            if (str_contains($key, 'blin')){
                if (Order::find($value) != null && Order::find($value)->exists()) {
                    $item = Order::find($value);
                    $item->count = $item->count + 1;
                    $item->save();
                } else {
                    $item = new Order;
                    $item->id = $value;
                    $item->count = 1;
                    $item->cat = 'blin';
                    $item->save();
                }                
            }
            if ( str_contains($key, 'dessert')){
                if (Order::find($value) != null && Order::find($value)->exists()) {
                    $item = Order::find($value);
                    $item->count = $item->count + 1;
                    $item->save();
                } else {
                    $item = new Order;
                    $item->id = $value;
                    $item->count = 1;
                    $item->cat = 'dessert';
                    $item->save();
                }                
            }
        } 
        $cart=[];
        $i = 0;
        foreach(Order::all() as $item)  {
            $cart[$i] = ['cat' => $item->cat, 'id' =>$item->id, 'count' => $item->count];
            $i++;
        } 
                
        if (count($cart)==0) {
            return view('message', ['parent'=> $request->path(), 'title'=>'Внимание', 'message'=>'Ваша корзина пуста']); 
        } 
        //return $cart;    
        return view('order', [ 'parent'=> $request->path(), 'cart'=> $cart]);
    }


    public function increase($id) {
        $line = Order::find($id);
        $line->count++;
        $line->save();
        return view('order', ['parent'=>'order']);
    }
        public function decrease($id) {
        $line = Order::find($id);
        $line->count--;
        if ($line->count == 0) {
            $line->delete();
        } else {
            $line->save();
        }
        
        return view('order', ['parent'=>'order']);
    }

}
