<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>all posts</title>
</head>
<body>
    <h1>All Posts</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">price</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
      <tr>
        <td scope="row">{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->price}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('posts.edit',$post->id)}}" role="button">Edit</a>
            <a class="btn btn-dark" href="{{route('posts.delete',$post->id)}}" role="button">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="btn btn-dark" href="{{route('posts.delete.all.truncate')}}" role="button">Delete All </a>

</body>
</html>


