<?php
header("Content-Type:text/html;charset=UTF-8");
?>
<?php

$hostName='localhost';
$dbId='wjdgkrud';
$dbPw='awt5fgse45.';
$dbName='wjdgkrud';

$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);
$conn->query("SET NAMES utf8");

if($conn->connect_error){
    echo "
    <script>
        alert('접속 오류');
        history.go(-1);
    </script>";
    exit;
}



?>