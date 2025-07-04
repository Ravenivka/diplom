@extends('layouts.layout')
    @php
        $title = 'Вход';
    @endphp
@section('content')

@include('auth.login', ['parent' => $parent])



@endsection