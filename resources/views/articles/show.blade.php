@extends('layouts.app')

@section('title', 'Просмотр статьи')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    @if(Auth::check() && Auth::user()->role === 'admin')
        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Редактировать</a>
    @endif
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Назад к списку</a>
</div>
@endsection
