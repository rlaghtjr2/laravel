<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<td><h2 align="center" style="margin-top: 50px">{{$login->name}}님 어서오세요</h2></td>
<br><br>
<div class = "container">
    <table class = "table">
        <tr>
            <td>id</td>
            <td>제목</td>
            <td>이름</td>
            <td>작성시간</td>
            <td>수정</td>
            <td>삭제</td>

        </tr>
        @foreach($rows as $row)
            <tr>
                <td>
                    {{$row->id}}
                </td>
                <td>
                    <a href="index/{{$row->id}}">{{$row->subject}}</a>
                </td>
                <td>
                    {{$row->writer}}
                </td>
                <td>
                    {{$row->created_at}}
                </td>
                <td>
                    <a href="/index/{{$row->id}}/edit">수정</a>
                </td>
                <td>
                    <form method="post" action = "/index/{{$row->id}}">
                        @csrf
                        <button type ="submit">삭제하기</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{$rows->links()}}
    <br>
    <form method="post" action ="index">
        @csrf
        @method('put')
        <select name="type">
            <option value="id">ID</option>
            <option value="subject">제목</option>
            <option value="writer">작성자</option>
        </select>
        <input type="text" name = 'subject'>
        <button type = "submit"> 검색하기 </button>
    </form>
    <form method="post" action = "logout">
        @csrf
        <button type = "submit">로그아웃</button>
    </form>
    <a href = "/index/create">글쓰기</a>
</div>
