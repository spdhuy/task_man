<FORM action="/delete" method="post" >
    <input type="text" name="id" readonly="true" value="{{$task->id}}">
    <label> {{$task -> name}}</label>
    <p> Bạn có muốn xoá task này hay không</p>
    <input type="submit" value="Xoa">
</FORM>