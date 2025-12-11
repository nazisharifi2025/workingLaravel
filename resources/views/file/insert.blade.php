<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ URL('songs/create') }}" method="post">
        @csrf
        <input type="text" name="senger" placeholder="enter your senger name" class=" px-4 py-2 border">
        <input type="file" name="song" accept="audio/*" placeholder="enter your senger name" class=" px-4 py-2 border">
        <button type="submit">Send</button>
    </form>
</body>
</html>