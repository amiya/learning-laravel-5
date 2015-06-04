@extends('layout')

@section('content')
<h1>Articles Details</h1>
<hr>
    <a href="{{ url('/article') }}"> << back </a>
    
    <article>
        <h2>{{ $article->title }} </h2>
        <div class='body'>{{ $article->body }}</div>
    </article>    
    
@stop
