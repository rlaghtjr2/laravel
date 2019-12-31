<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div style=" margin-top: 50px;">
    <h1 align="center">회원가입</h1>
</div>
<form method="post" action ='create' style="margin-left:530px; margin-top: 100px;">
    @csrf
    <div>
        <td>
            name
            <input type="text" class="form-control" name = 'name' style='width:300px;'/>
        </td><br>
        <td>
            email
            <input type="text" class="form-control" name = 'email' style='width:300px;'/>
        </td><br>
        <td>
            password
            <input type="password" class="form-control" name = 'password' style='width:300px;'/>
        </td><br><br>
    </div>
    <button type="submit" class="alert alert-dark">회원가입</button>
    <a href="login" class="alert alert-dark">돌아가기</a>
    {{$error}}
</form>
