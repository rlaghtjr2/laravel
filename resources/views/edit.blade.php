<form method="post" action ="/index/{{$row->id}}">
    @csrf
    제목 <input type="text" name = "subject" value = {{$row->subject}}><br><br>
    내용 <br><textarea rows="10" name="contents">{{$row->content}}</textarea><br><br>
    작성자 <br><input type = "text" name ="writer" value="김호석"><br><br>
    <button type = "submit">저장</button>
</form>
