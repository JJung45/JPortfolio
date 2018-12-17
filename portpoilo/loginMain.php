<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"><title>loginMain</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/loginMain.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
</head>
<body>
   <?php
	if($_GET['num']==1){
    include 'earthtory.php';}
	else{
		include "tourdestination.php";
	}
    ?>
    <div id="overlay">
        <div class="loginmodal">
            <div class="loginFirst">
                <h2><p>어스토리 로그인 </p><span>x</span>
                </h2>
            </div>
            <div class="loginSecond">
                <form action="loginOk.php" method="post" name="login">
                    <input type="email" name="userEmail" placeholder="이메일 주소" class="text email"><br>
                    <input type="password" name="userPw" placeholder="비밀번호" class="text"><br>
                    <input type="submit" value="로그인">
                </form>
                <ul>
                <li class="findPw"><a href="#">비밀번호 찾기</a></li>
                <li class="join"><a href="joinMain.php">회원가입</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        var loginmodal=$('.loginmodal');
        var overlaywidth=$('#overlay').width();
        var overlayheight=$('#overlay').height();
        var loginmodalwidth=$('.loginmodal').width();
        var loginmodalheight=$('.loginmodal').height();
        var loginmodalleft=overlaywidth/2-loginmodalwidth/2;
         var loginmodaltop=overlayheight/2-loginmodalheight/2;
        
        loginmodal.css({
            left: loginmodalleft,
            top: loginmodaltop
        })
        
        var close=$('span');
        close.on('click',function(){
            loginmodal.fadeOut();
            history.go(-1);
                 })
    </script>
</body>

</html>
