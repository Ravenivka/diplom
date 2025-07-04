@extends('layouts.layout')
    @php
        $title = 'Регистрация';
    @endphp
@section('content')

@include('auth.register', ['parent' => $parent])

  
@endsection