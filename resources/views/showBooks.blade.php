<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Book Title</th>
      <th scope="col">Release Date</th>
      <th scope="col">Author</th>
      <th scope="col">Genre</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($books as $book)
      <tr>
        <th scope="row"><a href="{{route('showBook', $book->id)}}">{{$book->bookTitle}}</a></th>
        <td>{{$book->releaseDate}}</td></td>
        <td>{{$book->author}}</td>
        <td>{{$book->genre}}</td>
        <td>
          <a class="btn btn-primary" href="{{route('formUpdateBook', $book->id)}}" role="button">update</a>
          <form action="{{route('deleteBook', $book->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">delete</button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
    </table>
    <a href="" >back</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
