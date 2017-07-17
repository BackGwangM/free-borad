<?php
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>로그인 페이지</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" type="text/css" href="http://localhost/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/homework/login_style.css">
</head>
<body >
    <div id = "main" >
        <h1>자유게시판 로그인</h1>
    <form action="http://localhost/homework/main.php" method="POST">
        <p><input type="text" placeholder="아이디" name="id" maxlength="20" size=25px required> </p>
        <p><input type="password" placeholder="비밀번호" name="pw" maxlength="16" size=25px required></p>
        <a href="http://localhost/homework/join.php"><input type="button" name="회원가입" value="회원가입" class = "btn btn-info"></a>
        <input type="submit" name="로그인" value="로그인" class="btn btn-success">
    </form>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        
</body>
</html>