<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;  
use App\Models\Order;  
use Illuminate\Support\Facades\Storage;
    use App\Models\User;
    use App\Models\Booking;
    use App\Models\Feedback;

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


  

    public function aut ($parent) {
      
      return view('aut',[ 'parent' => $parent]);
    }

    public function order(Request $request) {
        $cart=[];
        $i = 0;
        foreach(Order::all() as $item)  {
            $cart[$i] = ['cat' => $item->cat, 'id' =>$item->id, 'count' => $item->count];
            $i++;
        } 
        if (count($cart)==0) {
            return view('message', ['parent'=> $request->path(), 'title'=>'Внимание', 'message'=>'Ваша корзина пуста']); 
        } 
        return view('order', [ 'parent'=> $request->path(),'cart'=>$cart]);
    }

    public function reg ($parent) {
      
      return view('reg', [ 'parent' => $parent]);
    }

    public function profile(Request $request, $edit) {
        
        if (!Auth::check()) {
            return view('message', ['parent'=>'home', 'title'=> 'Внимание', 'message'=>'Вы не зарегистрированы']);
        }
        if ($edit == 'user') {
            $user = Auth::user();
        }

        return view('info', ['title'=>'Информация', 'parent'=>$request->path(), 'user'=> $user]);

    }

    public function getImg(Request $request, $edit) {        

        
        try{
           $path = $request->file('file')->store(('/avatar'), 'public_uploads'); 
        } catch (Exception $e) {
           return redirect('/info/'.$edit); 
        }
        
        
        $user = Auth::user();
        $user->avatar = 'uploads/'.$path;
        $user->save();
        return redirect('/info/'.$edit);
    }

    public function getInfo(Request $request, $edit) { 
           
        if ($edit == 'user') {
            $user = Auth::user();
        }
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect('/info/'.$edit);
    }

    public function index2()
    {
        return view('feed',['parent'=>'feed']);
    }

    public function feed() {
        if (!isset($_POST['text']) || $_POST['text'] == '') {
            return view('feed',['parent'=>'feed']);
        } else {
            $text = $_POST['text'];
        }
        if (!Auth::check()){
            $user_id = -1;
            $user_name = "Гость";
        } else {
            $user = Auth::user();
            $user_id = $user->id;
            $user_name = $user->name;
        }
        $feed = new Feedback;
        $feed->user_id = $user_id;
        $feed->text = $text;
        $feed->save();
        return view('feed',['parent'=>'feed']);
    }

    public function panel(Request $request) {
        $user = Auth::user(); 
        if (!Auth::check() && $user->role > 0) {
            return view('message', ['title'=>'Внимание', 'message'=> 'У Вас нет прав на просмотр этой страницы']);
        }
        return view('panel', ['title'=>'Панель управления', 'parent'=>$request->path()]);
    }

    public function admin_user(Request $request) {
        $user=User::find($_POST['id']);
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];        
        $user->address = $_POST['address'];        
        $user->phone = $_POST['phone'];
        $user->avatar = $_POST['avatar'];
        $user->save();
        return view('panel', ['title'=>'Панель управления', 'parent'=>$request->path()]);
    }

    public function admin_book(Request $request) {
        $book = Booking::find($_POST['id']) ;        
        $book->user_id = $_POST['user_id'];
        $book->composition = $_POST['composition'];
        $book->address = $_POST['address'];
        $book->paid = $_POST['paid'];
        $book->phone = $_POST['phone'];
        $book->email = $_POST['email'];
        $book->amount = $_POST['amount'];
        $book->status = $_POST['status'];
        $book->save();
        return view('panel', ['title'=>'Панель управления', 'parent'=>$request->path()]);
    }

    public function admin_feed(Request $request) {
        $feed = Feedback::find($_POST['id']) ;        
        $feed->user_id = $_POST['user_id'];
        $feed->text = $_POST['text'];  
        $feed->save();
         return view('panel', ['title'=>'Панель управления', 'parent'=>$request->path()]);     
    }

}
