<?php

include "PHPMailer/PHPMailerAutoload.php";

header('Content-Type: text/html; charset=utf-8');
//$config=array( 'host'=>'ssl://smtp.gmail.com', 'smtp_id'=>'example@gmail.com', 'smtp_pw'=>'password', 'debug'=>1, 'charset'=>'utf-8', 'ctype'=>'text/plain' );
//$sendmail = new Sendmail($config);

$name=$_POST['userName'];
$email=$_POST['userEmail'];
$contents=$_POST['contents'];
$emailContents=[];
$emailContents[0]=$email;
$emailContents[1]=$contents;
$content=implode(" ||| ",$emailContents);
$myEmail="753cindy@naver.com";
//$sendmail=new Sendmail();
//
//$to="753cindy@naver.com";
//$from=$email;
//$subject=$name;
//$body=$contents;
//
//$result=$sendmail->send_mail($to,$from,$subject,$body);
//
//if($result==true){
//	echo "
//	<script>
//		alert('전송완료!');
//	</script>";
//}else{
//	echo "
//	<script>
//		alert('전송실패');
//	</script>";
//}exit;
include_once("mailer.lib.php");

$result=mailer($name,$myEmail,$myEmail,"mysite",$content,1);

if($result==true){
	echo "
	<script>
		alert('전송완료!');
		history.go(-1);
	</script>";
}else{
	echo "
	<script>
		alert('전송실패!');
		history.go(-1);
	</script>";
}exit;
?>