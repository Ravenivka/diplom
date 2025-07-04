@extends('layouts.layout')
    @php
        $title = 'Команда';
        $squad = [
            ['src' => "img/b1.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b2.jpeg", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b3.jpg", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b4.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b5.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b6.jpg", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b7.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b8.png", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.']
        ];
    @endphp
@section('content')

    <div class="team">
        <h1 class="team__h1">Наша команда</h1>
        <div class="squad">
            @for ($i = 0; $i < count($squad); $i++)
                @include('components.personal', ['src' => $squad[$i]['src'], 'caption' => $squad[$i]['caption'], 'text' =>  $squad[$i]['text']])
            @endfor
        </div>
    </div>
       
@endsection