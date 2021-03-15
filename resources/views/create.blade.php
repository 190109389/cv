<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PostCreate</title>
</head>
<body>
    <form action="{{ route('add-post') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="body" placeholder="body">
        <button type="submit">Create post</button>
    </form>
</body>
</html>