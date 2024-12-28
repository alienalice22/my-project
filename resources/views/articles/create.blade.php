@extends('layouts.app')

@section('title', 'Создать новую статью')

@section('content')
<div class="container">
    <h1>Создать новую статью</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Текст</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection
