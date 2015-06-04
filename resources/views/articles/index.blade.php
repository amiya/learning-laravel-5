@extends('layout')

@section('content')
<h1>Articles</h1>
 <a href="{{ url('/article/create') }}"> + Add New</a>
<hr>
    @foreach($articles as $article)
        <article>
            <h2><a href="{{ url('/article', $article->id) }}"> {{ $article->title }} </a></h2>
            <div class='body'>{{ $article->body }}</div>
            <div class='btn btn-success'><a href="{{ url('/article/'.$article->id.'/edit') }}"> - Edit </a></div>
        </article>    
    @endforeach
    
@stop
    