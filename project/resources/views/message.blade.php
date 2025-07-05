@extends('layouts.layout')
@section('content')
<style>
    .warning{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 80vh;
        position: relative;
    }
    .warning__text{
        font-size: 20px;
    }
</style>
<div class="warning">
    
    <span class="warning__text">{{ $message }}</span>
</div>

@endsection