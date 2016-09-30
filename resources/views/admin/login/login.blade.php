<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
</head>
<body>
    <center>
        <form action="{{ url('adminCheck') }}" method='post'>
        <input type="hidden" name='_token' value='{{ csrf_token() }}'>
            账号：<input type="text" name='name'><br/><br/>
            密码：<input type="password" name='pass'><br/><br/>
            <input type="submit" value='登录'>
        </form>
    </center>
</body>
</html>
