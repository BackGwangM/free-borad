<?php
    $conn = mysqli_connect('localhost', 'root', '111111');
    mysqli_select_db($conn, "worktest");

    if($_POST["id"] != '')
    {
        $id = $_POST["id"];
    }
    if($_POST["pw"] != '')
    {
    $pw = $_POST["pw"];
    }
    else
    {
        echo "<script>window.alert('잘못된 접근입니다.');  history.back(); </script>";
    }

    $sql = "SELECT * FROM user_id WHERE id = '".$id."' && pw = '".$pw."';";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0 && $_POST["id"] != '' && $_POST["pw"] != '')
    {
        $sql = "SELECT * FROM user_id;";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo "<script>
        window.alert('로그인에 성공하였습니다.');
        </script>
        ";
        
    }
    else if($result->num_rows = 0 && $_POST["id"] != '' && $_POST["pw"] != ''){
        echo "
        <script> 
        window.alert('ID나 PASSWORD가 잘못 되었습니다. 확인 또는 회원가입을 시도해 보시길 권합니다.');
        history.back(); 
        </script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>자유게시판</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/homework/main_style.css">
</head>
<body>
    <div id="main"><h1>자유게시판</h1></div> <div id="serch_place"><form action="serch.php"><input type="text" placeholder="검색"> <input type="submit" value="검색" class="btn btn-success"></form></div><br>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>