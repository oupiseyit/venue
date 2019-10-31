@extends('layouts.front')
@section('content')

    @include('home/slider-carousel')

    <div class="py-5">
        <div class="container">

            @include('home/search')

            @include('home/inspiring-venue')

            @include('home/new-venue')

            @include('home/dicovery-space')
           
        </div>
    </div>

    
@endsection