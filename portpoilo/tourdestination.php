<?php
session_start();
$num=2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tourdestination</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/tourdestination.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
        <div id="wrap">
        <div class="header">
            <div class="gnb">
                <div class="logo"></div>
                <ul class="mainMenu">
                    <li class="main travel"><a href="#">여행지</a></li>
                    <li class="main schedule"><a href="makeschedule.php">일정만들기</a></li>
                    <li class="main hotels"><a href="#">호텔</a></li>
                    <li class="main howto"><a href="#">이용방법</a></li>
                    <li class=" main items"><a href="#">여행상품</a></li>
                    <li class="menubar">
                        <ul>
                            <li class="travel"><a href="#">여행지</a>
                            </li>
                            <li class="schedule"><a href="#">일정만들기</a></li>
                            <li class="hotels"><a href="#">호텔</a></li>
                            <li class="howto"><a href="#">이용방법</a></li>
                            <li class="items"><a href="#">여행상품</a></li>
                            <?php if(!isset($_SESSION['userEmail'])){  ?>
                            <li class="loginetc"><a href='loginMain.php?num=<?=$num?>' class='login'>로그인</a></li>
                            <li class="loginetc"><a href='joinMain.php?num=<?=$num?>' class='join'>회원가입</a></li>
                            <?php
                    }
                    else{
                    ?>
                                <li class="loginetc"><a href='#' class='login'>나의 페이지</a></li>
                                <li class="loginetc"><a href='logOut.php' class='join'>로그아웃</a></li>
                                <?php
                    } ?>
                        </ul>
                    </li>
                </ul>
                <ul class="subMenu">
                    <li>
                        <form action="search.php" name="search">
                            <input type="search" name="search" placeholder="도시/장소를 찾아보세요.">
                        </form>
                    </li>
                    <?php if(!isset($_SESSION['userEmail'])){  ?>
                    <li><a href='loginMain.php?num=<?=$num?>' class='login'>로그인</a></li>
                    <li><a href='joinMain.php?num=<?=$num?>' class='join'>회원가입</a></li>
                    <?php
                    }
                    else{
                    ?>
                        <li><a href='#' class='login'>나의 페이지</a></li>
                        <li><a href='#' class='join'>로그아웃</a></li>
                        <?php
                    } ?>
                </ul>
            </div>
        </div>
                <div class="nav">
            <div class="navContent">
                <div class="navUp">
                    <h1>어디로 여행을 가시나요?</h1>
                </div>
                <div class="navDown">
                    <form action="navSearch.php" method="get">
                        <input type="search" name="navSearch" placeholder="국가명, 도시명으로 검색">
                    </form>
                    <p>추천도시: 타이베이, 런던, 상하이<span>지도에서 검색></span></p>
                </div>
            </div>
        </div>
        <section class="sec1_2">
           <div class="center sec1_2contents">
               <h2>국내 여행지</h2>
               <div class="sec1_2content">
                   <ul>
                      <li class="mainCountry">주요도시</li>
                      <li><a href="#">서울</a></li>
                      <li><a href="#">제주</a></li>
                      <li><a href="#">부산</a></li>
                      <li><a href="#">경주</a></li>
                      <li><a href="#">양평</a></li>
                      <li><a href="#">태안</a></li>
                      <li><a href="#">진주</a></li>
                      <li><a href="#">강릉</a></li>
                   </ul>
                   <ul>
                      <div class="box">
                       <li>서울</li>
                       <li class="secdown">강원도<img src="img/area_arrow.gif" alt="arrow" class="arrow">
                       <ul class="subLi">
                       	<li>강릉</li>
                       	<li>고성</li>
                 
                       </ul>
                       </li>
                       <li class="show secdown">경기도<img src="img/area_arrow.gif" alt="arrow" class="arrow">
                       <ul class="subLi">
                       	<li>가평</li>
                       	<li>고양</li>
                      
                       </ul>
                       </li>
                       </div>
                       <div class="box">
                       <li class="show secdown2">경상남도<img src="img/area_arrow.gif" alt="arrow" class="arrow">
                       <ul class="subLi">
                       	<li>거제</li>
                       	<li>부산</li>

                       </ul>
                       </li>
                       <li class="show secdown2">경상북도<img src="img/area_arrow.gif" alt="arrow" class="arrow">
                       <ul class="subLi">
                       	<li>경주</li>
                       	<li>김천</li>
                   
                       </ul>
                       </li>
                       <li class="show secdown2">전라남도<img src="img/area_arrow.gif" alt="arrow" class="arrow">
                       <ul class="subLi">
                       	<li>곡성</li>
                       	<li>담양</li>
                  
                       </ul>
                       </li>
                       </div>
                       <div class="box">
                       <li class="show secdown3">전라북도<img src="img/area_arrow.gif" alt="arrow" class="arrow">
                       <ul class="subLi">
                       	<li>군산</li>
                       	<li>남원</li>
                
                       </ul>
                       </li>
                       <li class="show secdown3">충청남도<img src="img/area_arrow.gif" alt="arrow" class="arrow">
                       <ul class="subLi">
                       	<li>당진</li>
                       	<li>보령</li>
                  
                       </ul>
                       </li>
                       <li class="show secdown3">충청북도<img src="img/area_arrow.gif" alt="arrow" class="arrow">
                       <ul class="subLi">
                       	<li>단양</li>
						   <li>보은</li>
                   </ul>
					   </li>
					   </div>
				   </ul>
               </div>
           </div>
        </section>
        <section class="center sec2_2">
           <div class="center sec2_2contents">
               <h2>해외 인기 여행지</h2>
               <div class="col-3 sec2_2content">
                   <div class="sec2_2gallery"><span>후쿠오카</span></div>
               </div>
           <div class="col-3 sec2_2content">
                   <div class="sec2_2gallery"><span>방콕</span></div>
               </div>
           <div class="col-3 sec2_2content">
                   <div class="sec2_2gallery"><span>싱가포르</span></div>
               </div>
           <div class="col-3 sec2_2content">
                   <div class="sec2_2gallery"><span>바르셀로나</span></div>
               </div>
           <div class="col-3 sec2_2content">
                   <div class="sec2_2gallery"><span>괌</span></div>
               </div>
           <div class="col-3 sec2_2content">
                   <div class="sec2_2gallery"><span>부에노스아이레스</span></div>
               </div>
           <div class="col-3 sec2_2content">
                   <div class="sec2_2gallery"><span>토론토</span></div>
               </div>
           <div class="col-3 sec2_2content">
                   <div class="sec2_2gallery"><span>비엔티안</span></div>
               </div>
               </div> 
        </section>
        <section class="center sec3_2">
             <div class="center sec3_2contents">
            <h2>국가리스트</h2>
                <div class="country asia">
                    <h3>아시아</h3>
                    <div class="sec3_2content asiaContent">
                       <ul>
                           <li class="col-3"><a href="#">네팔</a></li>
                           <li class="col-3"><a href="#">대만</a></li>
                           <li class="col-3"><a href="#">대한민국</a></li>
                           <li class="col-3"><a href="#">라오스</a></li>
        
                           <li class="col-3"><a href="#">마카오</a></li>
                           <li class="col-3"><a href="#">말레이시아</a></li>
                           <li class="col-3"><a href="#">몰디브</a></li>
                           <li class="col-3"><a href="#">미얀마(버마)</a></li>
          
                           <li class="col-3"><a href="#">베트남</a></li>
                           <li class="col-3"><a href="#">스리랑카</a></li>
                           <li class="col-3"><a href="#">싱가포르</a></li>
                           <li class="col-3"><a href="#">아랍에미리트</a></li>
                       </ul>  
                    </div>
                </div>
                <div class="country europe">
                    <h3>유럽</h3>
                    <div class="sec3_2content europeContent">
                     <ul>
                           <li class="col-3"><a href="#">그리스</a></li>
                           <li class="col-3"><a href="#">네덜란드</a></li>
                           <li class="col-3"><a href="#">노르웨이</a></li>
                           <li class="col-3"><a href="#">덴마크</a></li>
        
                           <li class="col-3"><a href="#">독일</a></li>
                           <li class="col-3"><a href="#">러시아</a></li>
                           <li class="col-3"><a href="#">루마니아</a></li>
                           <li class="col-3"><a href="#">룩셈부르크</a></li>
          
                           <li class="col-3"><a href="#">모나코</a></li>
                           <li class="col-3"><a href="#">벨기에</a></li>
                           <li class="col-3"><a href="#">보스니아 헤르체고비나</a></li>
                           <li class="col-3"><a href="#">불가리아</a></li>
                       </ul>  
                    </div>
                </div>
                <div class="country southpacific">
                    <h3>남태평양</h3>
                    <div class="sec3_2content southpacificContent">
                       <ul>
                           <li class="col-3"><a href="#">괌</a></li>
                           <li class="col-3"><a href="#">뉴질랜드</a></li>
                           <li class="col-3"><a href="#">뉴칼레도니아</a></li>
                           <li class="col-3"><a href="#">사이판</a></li>
        
                           <li class="col-3"><a href="#">오스트레일리아</a></li>
                           <li class="col-3"><a href="#">프렌치폴리네이사</a></li>
                           <li class="col-3"><a href="#">피지</a></li>
                       </ul>  
                    </div>
                </div>
                 <div class="country northamerica">
                    <h3>북미</h3>
                    <div class="sec3_2content northamericaContent">
                       <ul>
                           <li class="col-3"><a href="#">미국</a></li>
                           <li class="col-3"><a href="#">캐나다</a></li>
                       </ul>  
                    </div>
                </div>
                <div class="country latinamerica">
                    <h3>중남미</h3>
                    <div class="sec3_2content latinamericaContent">
                     <ul>
                           <li class="col-3"><a href="#">멕시코</a></li>
                           <li class="col-3"><a href="#">바하마</a></li>
                           <li class="col-3"><a href="#">볼리비아</a></li>
                           <li class="col-3"><a href="#">브라질</a></li>
        
                           <li class="col-3"><a href="#">아르헨티나</a></li>
                           <li class="col-3"><a href="#">에콰도르</a></li>
                           <li class="col-3"><a href="#">자메이카</a></li>
                           <li class="col-3"><a href="#">칠레</a></li>
          
                           <li class="col-3"><a href="#">콜롬비아</a></li>
                           <li class="col-3"><a href="#">쿠바</a></li>
                           <li class="col-3"><a href="#">페루</a></li>
                       </ul>  
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="footerup">
                <ul class="footerContents">
                    <li>
                        <h5>어스토리</h5>
                        <div class="footerbar"></div>
                        <ul class="footerupmenu">
                            <li>여행지</li>
                            <li>일정만들기</li>
                            <li>호텔</li>
                            <li>QA</li>
                            <li>여행TIP</li>
                            <li>모바일</li>
                        </ul>
                    </li>
                    <li>
                        <h5>회사이야기</h5>
                        <div class="footerbar"></div>
                        <ul class="footerupmenu">
                            <li>회사소개</li>
                            <li>이용방법</li>
                            <li>광고 및 제휴</li>
                        </ul>
                    </li>
                    <li>
                        <h5>고객센터</h5>
                        <div class="footerbar"></div>
                        <ul class="footerupmenu">
                            <li>FAQ</li>
                            <li>문의하기</li>
                            <li>이용약관</li>
                            <li>개인정보처리방침</li>
                        </ul>
                    </li>
                    <li>
                        <div class="footerBoxs">
                            <div class="footerBox1">한국어</div>
                            <div class="footerBox2">KRW</div>
                        </div>
                        <div class="footericons">
                            <div class="footericon1"><img src="img/footericon1.png" alt="f"></div>
                            <div class="footericon2"><img src="img/footericon2.png" alt="b"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footerdown">
                <div class="footerdownContent">
                    <div class="right">Copyright ⓒ 2015 Earthtory.com, All Rights Reserved.</div>
                    <div class="question">제휴문의: wonwoo@earthtory.com | 02-6441-4100</div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script>
	 /*logo*/
    var logo = $('.logo');
    logo.on('click', function() {
        location.href = 'earthtory.php';
    })

    /*menubar*/
    var menubar = $('.menubar');
    var menubarul = $('li.menubar ul');
    menubar.on('click', function() {
        menubarul.toggle();
    })
	
	var arrow=$('.arrow');
	var sec1_2=$('section.sec1_2');
//	arrow.on('click',function(){
//		sec1_2.animate({
//			height: '280px'
//		},500);
//	$(this).parent().find('ul').slideToggle("slow");
//	
//	});
	
	var count=1;
	arrow.on('click',function(){
	if(count==1){
		count=2;
		$(this).parent().find('ul.subLi>li').css({
			color: '#49b2e9'
		});
		$(this).parent().find('ul').slideDown('slow');
//		$(this).parent().animate({
//			height: '90px'
//		},500);
		
		if($(window).outerWidth()>'768px'){
			$(this).parent().animate({
			height: '90px'
		},500);
		}else if($(window).outerWidth()<='768px'){
		   $(this).parent().parent().animate({
			height: '400px'
		},500);
		}		
		} 
	else if(count==2){
		count=1;
		$(this).parent().css({
			color: '#000'
		});
		$(this).parent().find('ul').slideUp('slow');
//		$(this).parent().animate({
//			height: '50px'
//		},500);
		
		
		if($(window).outerWidth()>'768px'){
			$(this).parent().parent().animate({
			height: '50px'
		},500);
		}else if($(window).outerWidth()<='768px'){
		   $(this).parent().parent().animate({
			height: '50px'
		},500);
	}
	}
	});
	
	var gall=$('.sec2_2gallery');
	
	var bgArr=[];
	for(var i=0; i<8; i++){
	 bgArr.push('url(img/bg'+i+'.jpg) no-repeat 50%');
       gall.eq(i).css({'background':bgArr[i],"background-size":'cover'});
	}
	
	gall.hover(
	function(){
		$(this).css({
			transform: 'scale(1.05)'
		});
	},
	function(){
		$(this).css({
			transform: 'scale(1)'
		});
	});
	
	var logo=$('.logo');
	logo.on('click',function(){
		location.href='earthtory.php';
	})
</script>
</html>