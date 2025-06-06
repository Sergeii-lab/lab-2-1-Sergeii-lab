<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <a href="{{ route('posts.index') }}">Назад</a>
    <h1>Просмотр поста</h1>
    <h2>{{ $post -> title}}</h2>
    <p>{{ $post -> content}}</p>
    <form action="{{ route('posts.delete', ['id' => $post->id]) }}" method="POST">
        @csrf  <!-- Для защиты от CSRF атак -->
        @method('DELETE')
        <button type="submit" class='btn'>Удалить</button>
    </form>
    <br>
    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn">Редактировать</a>
</body>
</html>
