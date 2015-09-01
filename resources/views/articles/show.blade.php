@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>
        <article>
            {{ $article->title}}
            <div class="body"> {{ $article->body }}</div>
        </article>
@stop
