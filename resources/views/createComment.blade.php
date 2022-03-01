<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <title>Document</title>
</head>
<body>
    <h1>Create comment</h1>
    <form action="{{route('storeComment')}}" method="POST">
        @csrf
        <label for="">buku</label>
        <select name="book" id="">
            @foreach ($books as $book)
                <option value="{{$book->id}}">{{$book->bookTitle}}</option>
            @endforeach

        </select>
        <br>
        <label for="">comment</label>
        <input type="text" name="comment">
        <button>submit</button>
    </form>
</body>
</html>
