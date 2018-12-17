<?php
header("Content-Type:text/html;charset=UTF-8");
?>
<?php

include "dbConnect.php";

$userName=$_POST['userName'];
$userEmail=$_POST['userEmail'];
$userPw=$_POST['userPw'];
$userGender=$_POST['userGender'];

if(!isset($userName) || !isset($userEmail) || !isset($userPw) || !isset($userGender)){
    echo "
    <script>
        alert('회원가입 오류!');
        location.href='joinMain.php';
    </script>";
    exit;
}

if($userName==null || $userName==""){
    echo "
    <script>
        alert('이름을 입력하세요!');
        history.go(-1);
        $userName.focus();
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

if($userGender==null || $userGender==""){
    echo "
    <script>
        alert('비번을 입력하세요!');
        history.go(-1);
    </script>";
    exit;
}

$query="insert into portjoinmember(userName,userEmail,userPw,userGender) values('$userName','$userEmail','$userPw','$userGender')";

$result=$conn->query($query);

if($result==false){
    echo "
    <script>
        alert('회원가입 실패');
        history.go(-1);
    </script>";
    exit;
}

echo "
<script>
    alert('회원가입 성공!환영합니다:>');
    location.href='earthtory.php';
</script>";
exit;
?>