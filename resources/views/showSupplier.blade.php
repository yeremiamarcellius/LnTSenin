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
            <th>supplier</th>
            <th>book</th>
        </tr>
        @foreach ($suppliers as $supplier)
            <tr>
                <td>{{$supplier->supplierName}}</td>
                <ul>
                    @foreach ($supplier->books as $book)
                        <li>{{$book->bookTitle}}</li>
                    @endforeach
                </ul>
            </tr>
        @endforeach
    </table>
</body>
</html>
