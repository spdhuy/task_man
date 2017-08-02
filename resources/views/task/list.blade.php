<table>
@foreach($tasks as $task)
    <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->name}}</td>
        <td>{{$task->created_at}}</td>
        <td><form method="get" action="/edit" >
            <input type="hidden" name="id" readonly="true" value="{{$task->id}}">
            <input type="hidden" name="name" value="{{$task->name}}">
            <input type="submit" value="Sua">
        </form>
        </td>
        <td><form method="get" action="/delete/id/{{$task->id}}/name/{{$task->name}}" >
                <input type="submit" value="Xoá">
            </form>
        </td>
    </tr>
@endforeach
    <a href="/add" >Them</a>
</table>