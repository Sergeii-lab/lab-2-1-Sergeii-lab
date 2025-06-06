<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <ul>
        @foreach ($posts as $post)

            <a href="{{ route('posts.show',  $post->id)}}"><li>{{ $post->title }}</li></a>
        @endforeach
    </ul>
</body>
</html>
