@extends('layouts.layout')
    @php
        use App\Models\Feedback;
        use App\Models\User;
        $title = 'Отзывы';
        $feeds = Feedback::all();
    @endphp
    <style>
        .feed_text {
            width: 25%;
            height: 25vh;
        }
        .feedform {
            display: flex;
            flex-direction: column;
        }
        .feed_btn {
            width: 25%;
        }
        .multyfeed {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }
    </style>    
@section('content')

    <div class="feed_container">
        <h1 style="text-align: center;">Отзывы</h1>
        <details>
            <summary class="feed_summary">
                Добавить отзыв
            </summary>
            <div class="feed_summary">
                <form action="/feed" method="POST" class="feedform">
                    @CSRF
                    <textarea name="text" id="text" class="feed_text"></textarea>
                    <button class="feed_btn">Опубликовать</button>
                </form>
            </div>

        </details>  
        <div class="multyfeed"> 
        @if (Feedback::count() != 0)
            <?php
                foreach (Feedback::orderBy('created_at', 'desc')->get() as $value) {
                    $text = $value->text;
                    if ($value->user_id == -1) {
                        $avatar = "img/user.png";
                        $name = "Гость";
                    } else {
                        $user = User::find($value->user_id);
                        $avatar = $user->avatar;
                        $name = $user->name;
                    }
            ?>
                @include('components.single_feed', ['avatar'=>$avatar, 'name'=>$name, 'text'=>$text])
            
            <?php        
                }
            ?>
        @endif
        </div> 
    </div>
       
@endsection