<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hakyoung's page</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
</head>
<body>
	<div id="wrap">
		<div class="section sectionMain">
			<div class="center txt">
			<p class="maintxt">웹퍼블리셔/프론트엔드</p>
			<p class="subtxt">Jung Hakyoung</p>
			</div>
			<div class="scrollimg">
			<p>scrolldown</p>
			<img src="img/scrolldown.png" class="scrolldown"  alt="scrolldown">
			</div>
		</div>
		<ul class="clearfix menu">
			<li class="menu1">AboutMe</li>
			<li class="menu2">MYSkills</li>
			<li class="menu3">MyWorks</li>
			<li class="menu4">GetInTouch</li>
		</ul>
		<div class="sectionAll">
		<div class="clearfix section sec1 hide">
			<p class="secMaintxt">
				About Me
			</p>	
			<div class="sec1Main clearfix">
				<div class="col-6 sec1Profile">
					<p class="sec1Maintxt">Profile</p>
					<p>정하경</p>
					<p>1995.4.5</p>
					<p>서울특별시 영등포구</p>
					<p>753cindy@naver.com</p>
				</div>
				<div class="bar"></div>
				<div class="col-6 sec1Education">
					<p class="sec1Maintxt">Education</p>
					<p>수원대 정보미디어학과</p>
					<p style="line-height:30px">그린컴퓨터아카데미<br>웹퍼블리셔/프론트엔드 수료</p>
				</div>
			</div>	
		</div>
		<div class="section sec2 hide clearfix">
			<p class="secMaintxt">
				MY Skills
			</p>
			<div class="center sec2Main">
			<div class="col-6 sec2Left">
			<div class="clearfix">
			<div  class="skillImg"></div>
			<span class="box"><span class="box2 box2_1"></span><span class="sec2Txt">100%</span></span>
			</div>
			<div class="clearfix">
				<div  class="skillImg"></div>
			<span class="box"><span class="box2 box2_2"></span><span class="sec2Txt">100%</span></span>
				</div>
			<div class="clearfix">
			<div  class="skillImg"></div>
			<span class="box"><span class="box2 box2_3"></span><span class="sec2Txt">90%</span></span>
			</div>
			<div class="clearfix">
			<div  class="skillImg"></div>
			<span class="box"><span class="box2 box2_4"></span><span class="sec2Txt">90%</span></span>
				</div>
			</div>
			<div class="col-6 sec2Right">
			<div class="clearfix">
			<div class="skillImg"></div>
			<span class="box"><span class="box2 box2_5"></span><span class="sec2Txt">95%</span></span>
			</div>
			<div class="clearfix">
			<div  class="skillImg"></div>
			<span class="box"><span class="box2 box2_6"></span><span class="sec2Txt">90%</span></span>
			</div>
			<div class="clearfix">
			<div  class="skillImg"></div>
			<span class="box"><span class="box2 box2_7"></span><span class="sec2Txt">90%</span></span>
			</div>
				</div>
			</div>	
		</div>
		<div class="clearfix section sec3">
			<p class="hide secMaintxt">
				My Works
			</p>
			<div class="sec3Left">
			<div class="clearfix sec3Content zeroWork hideSec3">
				<span class="sec3Txt">hyundaicard <br><span class="sec3Subtxt">(팀플/menu구현x,반응형x)</span></span>
					<span class="sec3Site"><a href="http://wjdgkrud.dothome.co.kr/hyundaicard/design_main.html">http://wjdgkrud.dothome.co.kr/hyundaicard/design_main.html</a></span>
			</div>
				<div class="sec3Content firstWork hideSec3">
					<span class="sec3Txt">EarthTory</span>
					<span class="sec3Site"><a href="http://wjdgkrud.dothome.co.kr/portpoilo/earthtory.php">http://wjdgkrud.dothome.co.kr/portpoilo/earthtory.php</a></span>
				</div>
				<div class="sec3Content secondWork hideSec3">
					<span class="sec3Txt">TourHere</span>
					<span class="sec3Site">
					<a href="http://wjdgkrud.dothome.co.kr/project42/contents/main.php">http://wjdgkrud.dothome.co.kr/project42/contents/main.php</a></span>
				</div>
			</div>
			<div class="sec3Right">
				<div class="sec3Content thirdWork hideSec3">
					<span class="sec3Txt">zara</span>
					<span class="sec3Site">
					<a href="http://wjdgkrud.dothome.co.kr/zara/">http://wjdgkrud.dothome.co.kr/zara/</a></span>
				</div>
				<div class="sec3Content fourthWork hideSec3">
					<span class="sec3Txt">hakyoung's page</span>
					<span class="sec3Site"><a href="http://wjdgkrud.dothome.co.kr/mysite/">http://wjdgkrud.dothome.co.kr/mysite/</a></span>
				</div>
			</div>
		</div>
		<div class="section sec4 hide clearfix">
			<p class="secMaintxt">
				Get in Touch 
			</p>
			<form action="getintouch.php" method="post" name="getintouch" class="center">
			<p class="info">연락주시는 분의 정보를 알려주세요!감사합니다 :&#41;</p>
				<div class="col-6 sec4Left">
					<input type="text" placeholder="NAME" name="userName"><br>
					<input type="email" placeholder="EMAIL" name="userEmail"><br>
					<input type="submit" value="SEND" name="submit" class="submit">
				</div>
				<div class="col-6 sec4Right">
					<textarea name="contents" id="userContents" cols="30" rows="10" placeholder="CONTENT"></textarea>
				</div>
			</form>
		</div>
	</div>
	</div>
</body>
<script>
	var bgArr=[];
	for(var i=0; i<7; i++){
		bgArr.push('url(img/bg'+i+'.png) no-repeat 50%');
	$('.skillImg').eq(i).css({
		background:bgArr[i],
		backgroundSize:'contain'
	});
	}
</script>
<script src="js/scroll.js">
</script>
</html>