<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>JoinMain</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/joinMain.css">
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
        <div class="joinmodal">
            <div class="joinFirst">
                <h2><p>어스토리 회원가입 </p><span>x</span>
                </h2>
            </div>
            <div class="joinSecond">
                <form action="joinOk.php" method="post" name="join">
                   <input type="text" name="userName" placeholder="이름" class="text name"><br>
                    <input type="email" name="userEmail" placeholder="이메일 주소" class="text email"><br>
                    <input type="password" name="userPw" placeholder="비밀번호 (6자~20자)" class="text"><br>
                    <input type="radio" name="userGender" value="woman" checked>여
                    <input type="radio" name="userGender" value="man">남
                    <input type="submit" value="회원가입">
                </form>
            </div>
            <div class="joinThird">
            <p>이미 회원이신가요? <a href="loginMain.php">로그인</a></p>
            </div>
        </div>
    </div>
    <script>
        var joinmodal=$('.joinmodal');
        var overlaywidth=$('#overlay').width();
        var overlayheight=$('#overlay').height();
        var joinmodalwidth=$('.joinmodal').width();
        var joinmodalheight=$('.joinmodal').height();
        var joinmodalleft=overlaywidth/2-joinmodalwidth/2;
         var joinmodaltop=overlayheight/2-joinmodalheight/2;
        
        joinmodal.css({
            left: joinmodalleft,
            top: joinmodaltop
        })
        
        var close=$('span');
        close.on('click',function(){
            joinmodal.fadeOut();
            history.go(-1);
                 })
    </script>
</body>

</html>
