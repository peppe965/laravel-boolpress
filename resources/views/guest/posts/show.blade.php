@extends('layouts.app')

@section('content')
    <style>
        h1:first-of-type{
            color:red;
        }
    </style>
    <h1>Pubblico</h1>

    <h2>titolo</h2>
    <h1>{{$article->title}}</h1>
    <p>slug</p>
    <p>{{$article->slug}}</p>
    <h3>contentuto</h3>
    <p>{{$article->content}}</p>
@endsection