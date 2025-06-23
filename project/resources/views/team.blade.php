@extends('layouts.layout')
    @php
        $title = 'Команда';
        $squad = [
            ['src' => "img/b1.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b1.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b1.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b1.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b1.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b1.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b1.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.'],
            ['src' => "img/b1.webp", 'caption' => 'Lorem, ipsum.', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, voluptate.']
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