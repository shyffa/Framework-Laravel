<!-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'TEL-C')}}</title>     
    </head>
    <body>
        <h1>Laravel</h1>
        <p>This is my first web using laravel application</p>
        @if (count$services > 0)
            @foreach($services as $service)
    </body>
</html> -->
@extends('layouts.app')

@section('content')
    <h1>Laravel</h1>
    <p>This is my first web using laravel application</p>
    @if (count$services > 0)
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach
    @endif
@endsection