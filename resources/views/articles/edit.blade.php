<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать статью</title>
</head>
<body>
    <h1>Редактирование статьи</h1>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Название:</label>
            <input type="text" id="title" name="title" value="{{ $article->title }}" required>
        </div>

        <div>
            <label for="content">Контент:</label>
            <textarea id="content" name="content" required>{{ $article->content }}</textarea>
        </div>

        <button type="submit">Сохранить</button>
    </form>

</body>
</html>
