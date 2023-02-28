<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body >
    <h1>Add Posts</h1><br/>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="enter the title"></br></br>
        <input type="text" name="price" placeholder="enter the price"></br></br>
        <button type="submit">save</button>
    </form>
</body>
</html>
