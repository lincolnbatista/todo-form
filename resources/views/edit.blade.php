<form action="/todo/{{$todo->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="todo" value="{{ $todo->todo }}" class="btn btn-primary">
    <input type="submit" value="add">

</form>
<a href="/todo">volta</a>

