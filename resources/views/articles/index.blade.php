@extends('layouts.app')

@section('title', 'Список статей')

@section('content')
<div class="container">
    <h1>Список статей</h1>
    <div class="table">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    @if(Auth::check() && Auth::user()->role === 'admin')
                        <th>ID</th>
                    @endif
                    
                    <th>Заголовок</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        @if(Auth::check() && Auth::user()->role === 'admin')
                            <td>{{ $article->id }}</td>
                        @endif
                        <td>{{ $article->title }}</td>
                        <td class="actions">
                            <a class="btn btn-primary show-link" href="{{ route('articles.show', $article->id) }}">Просмотреть</a>
                            @if(Auth::check() && Auth::user()->role === 'admin')
                                <a class="btn btn-warning edit-link" href="{{ route('articles.edit', $article->id) }}">Редактировать</a>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger destroy-link" type="submit">Удалить</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        <a href="{{ route('articles.create') }}" class="btn btn-primary">Создать новую статью</a>

</div>
@endsection
