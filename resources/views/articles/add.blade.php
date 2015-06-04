@extends('layout')

@section('content')
<h1>Add Article</h1>
<hr>
    <a href="{{ url('/article') }}"> << back </a>


    @include('errors.list')
    
    
   {!! Form::open(['url' => 'article']) !!}
   		
        @include('articles._form', ['submitButtonText' => 'Add'])
   
   {!! Form::close() !!}
   

    
@stop
