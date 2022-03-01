<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>comment</th>
            <th>book</th>
        </tr>
        @foreach ($comments as $comment)
        <tr>
            <td>{{$comment->Comment}}</td>
            <td>{{$comment->book->bookTitle}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
