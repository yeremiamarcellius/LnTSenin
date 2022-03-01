<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$book->bookTitle}}</h1>
    <p>{{$book->author}}</p>
    <p>{{$book->genre}}</p>
    <p>{{$book->releaseDate}}</p>
    <ul>
        @foreach ($book->comments as $comment)
            <li>{{$comment->Comment}}</li>
        @endforeach

    </ul>
    <ul>
        @foreach ($book->suppliers as $supplier)
            <li>{{$supplier->supplierName}}</li>
        @endforeach
    </ul>

</body>
</html>
