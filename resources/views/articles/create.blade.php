@extends('app')

@section('content')
    <h1>Write an article</h1>

    <br/>

    {!! Form::open(['url'=>'articles']) !!}

    @include('articles.form', ['submitButton' => 'Add Article'])

    {!! Form::close() !!}

    @include ('errors.list')

@stop
