@extends('layouts.app')

@section('title', 'Редактировать статью')

@section('content')
<div class="container">
    <h1>Редактирование статьи</h1>
    <form action="{{ route('articles.update', $article->id) }}" method="POST" class="container mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Название:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $article->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Контент:</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ $article->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Сохранить</button>
    </form>
</div>
@endsection
