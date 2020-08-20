<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/todo" method="POST">
    @csrf
    <input type="text" name="todo" class="btn btn-primary">
    <input type="submit" value="add">
<!-- vulue add um valo no button -->
</form>

<hr>
<ul>
    @foreach($todos as $todo)
    <li>
         {{ $todo->todo }}
        <a href="/todo/{{ $todo->id }}/edit" >editar </a>
        <a href="/todo/{{ $todo->id }}" >show </a>

        <form action="/todo/{{$todo->id}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit"> Excluir</button>
        </form>
    </li>


    @endforeach
</ul>



</body>
</html>
