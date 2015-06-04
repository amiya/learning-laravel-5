@extends('layout')

@section('content')
<h1>Add Article</h1>
<hr>
    <a href="{{ url('/article') }}"> << back to list </a>


  @include('errors.list')
    
  <br /><h2> Edit :: {{ $article->title }} </h2>
    
   {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleController@update', $article->id]]) !!}

        @include('articles._form', ['submitButtonText' => 'Update'])
          
   {!! Form::close() !!}
   

    
@stop
