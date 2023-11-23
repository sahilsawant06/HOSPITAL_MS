<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<h1>Hello this is fetched data page</h1>
<a href="todo_add">ADD RECORD</a>
<br>
{{session('msg')}}

    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>created at </td>
            <td>Action </td>
        </tr>
        @foreach ($todoarr as $todo )
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->name}}</td>
            <td>{{$todo->created_at}} </td>
            <td><a href="todo_delete/{{$todo->id}}">DELETE</a></td>
            <td><a href="todo_edit/{{$todo->id}}">EDIT</a></td>
        </tr>

        @endforeach
    </table>


</body>
</html>
