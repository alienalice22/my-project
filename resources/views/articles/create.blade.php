<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать статью</title>
</head>
<body>
    <h1>Создание статьи</h1>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Название:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="content">Содержание:</label>
            <textarea id="content" name="content" required></textarea>
        </div>

        <button type="submit">Сохранить</button>
    </form>

</body>
</html>
