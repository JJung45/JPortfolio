<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div id="wrap_menu" class="po-fixed bor-right greyishbrown">
	<div class="menu">
		<div class="logo">
			<a href="./index.php"><img src="./src/img/brandingLogo_.png"></a>
		</div>
		<div class="menuList">
			<ul>
				<li class="blu"><a href="./index.php?blu=1" class="regular">홈</a></li>
				<li><a href="./branding_intro.php?blu=2" class="regular">렛유인 소개</a></li>
				<li><a href="./branding_partner.php?blu=3&name=all" class="regular">렛유인 동반자들</a></li>
				<li>
					<a href="./branding_ac.php?blu=4" class="regular">사업소개</a>
				<ul class="hide submenu">
					<li class="fontthird" style="height:28px;line-height: 28px;"><a href="./branding_ac.php?blu=4" class="regular">렛유인 아카데미</a></li>
					<li class="fontthird"><a href="./branding_ex.php?blu=8" class="regular">렛유인 엑스퍼트</a></li>
				</ul>
				</li>
				<li><a href="./branding_scholar.php?blu=5" class="regular">꿈을 이룬 사람들</a></li>
				<li><a href="./branding_media.php?blu=6" class="regular">언론보도</a></li>
				<li><a href="./branding_contact.php?blu=7" class="regular">제휴문의</a></li>
			</ul>
		</div>
		<div class="under">
			<div class="col-left">
				<a href="https://www.facebook.com/letuincompany/" target="_blank"><img src="./src/img/facebookIcon.png"></a>
			</div>
			<div class="col-left">
				<a href="https://www.youtube.com/channel/UClWWrurSeL7sYjMehPW_2Ng" target="_blank"><img src="./src/img/youtubeIcon.png"></a>
			</div>
			<div class="clearfix"></div>
		</div>
		<p class="copyright">Copyright ⓒ2018 Letuin Co,Ltd. <br>All rights reserved.</p>
	</div>
</div>

<?php

	if(isset($_GET['blu'])){
		$blu=$_GET['blu'];
	}else{
		$blu="";
	}
	if($blu==1){
	echo "
	<script>
		$('.menuList>ul>li').eq(0).removeClass('blu');
		$('.menuList>ul>li').eq(0).addClass('blu');
	</script>";
	}else if($blu==2){
	echo "
	<script>
		$('.menuList>ul>li').eq(0).removeClass('blu');
		$('.menuList>ul>li').eq(1).addClass('blu');
	</script>";
	}else if($blu==3){
	echo "
	<script>
		$('.menuList>ul>li').eq(0).removeClass('blu');
		$('.menuList>ul>li').eq(2).addClass('blu');
	</script>";
	}else if($blu==4){
	echo "
	<script>
		$('.submenu').addClass('show');
		$('.menuList>ul>li').eq(0).removeClass('blu');
		$('.submenu>li').eq(0).addClass('blu');
	</script>";
	}else if($blu==5){
	echo "
	<script>
		$('.menuList>ul>li').eq(0).removeClass('blu');
		$('.menuList>ul>li').eq(4).addClass('blu');
	</script>";
	}else if($blu==6){
	echo "
	<script>
		$('.menuList>ul>li').eq(0).removeClass('blu');
		$('.menuList>ul>li').eq(5).addClass('blu');
	</script>";
	}else if($blu==7){
	echo "
	<script>
		$('.menuList>ul>li').eq(0).removeClass('blu');
		$('.menuList>ul>li').eq(6).addClass('blu');
	</script>";
	}else if($blu==8){
	echo "
	<script>
		$('.submenu').addClass('show');
		$('.menuList>ul>li').eq(0).removeClass('blu');
		$('.submenu>li').eq(1).addClass('blu');
	</script>";
	}
	else{
	echo "
	<script>
		$('.menuList>ul>li').eq(0).addClass('blu');
	</script>";
	}
?>