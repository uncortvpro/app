<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $key=>$user)
        <ul>
            <li><b>Имя: </b>{{$user->name}}</li>
            @foreach ($user->books as $book)
                <li>{{$book->title}}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>