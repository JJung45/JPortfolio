<?php
    header("Content-Type:text/html;charset=UTF-8");
?>
<?php

$userEmail=$_POST['userEmail'];
$userPw=$_POST['userPw'];

include "dbConnect.php";

if(!isset($userEmail) || !isset($userPw)){
    echo "
    <script>
        alert('로그인 오류!');
        location.href='loginMain.php';
    </script>";
    exit;
}

if($userEmail==null || $userEmail==""){
    echo "
    <script>
        alert('아이디를 입력하세요!');
        history.go(-1);
    </script>";
    exit;
}
//$_POST['userEmail'].focus();

if($userPw==null || $userPw==""){
    echo "
    <script>
        alert('비번을 입력하세요!');
        history.go(-1);
    </script>";
    exit;
}

session_start();
$_SESSION['userEmail']=$userEmail;

$query="select * from portjoinmember where userEmail='$userEmail' and userPw='$userPw'";

$result=$conn->query($query);
if($result->num_rows==0){
    echo "
    <script>
        alert('다시 로그인해주세요!');
        history.go(-1);
    </script>";
    exit;
}
echo "
<script>
    alert('로그인 성공! 어서오세요^.^');
    location.href='earthtory.php';
</script>";
exit;
?>