<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Title: {{ $post->title }}</h1>
    <p>Description: {{ $post->description }}</p>
    @if(!empty($post->story))
        <p>Story: {{ $post->story }}</p>
    @endif
</body>
</html>
