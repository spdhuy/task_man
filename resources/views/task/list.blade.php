<table>
@foreach($tasks as $task)
    <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->name}}</td>
        <td>{{$task->date_created}}</td>
    </tr>
@endforeach
    <a href="/add" >Them</a>
</table>