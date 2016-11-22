<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<div>
    @foreach($posts as $post)
        <ul>
            <li>{{ $post->title }}</li>
            <li>{{ $post->content }}</li>
            <li>{{ $post->description }}</li>
        </ul>
        <hr>
    @endforeach
</div>
</body>
</html>
