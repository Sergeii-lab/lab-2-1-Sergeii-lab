<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Изменить пост</h1>
    <form {{ route('posts.store') }} method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required value="{{ $post -> title }}">
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" >{{ $post -> content }}</textarea>
        <br>
        <button type="submit" class="btn">Обновить</button>
    </form>
</body>
</html>
