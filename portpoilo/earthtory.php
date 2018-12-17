<?php
session_start();
$num=1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>earthtory</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/earthtory.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
    <div id="wrap">
        <div class="header">
            <div class="gnb">
                <div class="logo"></div>
                <ul class="mainMenu">
                    <li class="main travel"><a href="tourdestination.php">여행지</a></li>
                    <li class="main schedule"><a href="#">일정만들기</a></li>
                    <li class="main hotels"><a href="#">호텔</a></li>
                    <li class="main howto"><a href="#">이용방법</a></li>
                    <li class=" main items"><a href="#">여행상품</a></li>
                    <li class="menubar">
                        <ul>
                            <li class="travel"><a href="tourdestination.php">여행지</a>
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
                        <li><a href='logOut.php' class='join'>로그아웃</a></li>
                        <?php
                    } ?>
                </ul>
            </div>
        </div>
        <div class="nav">
            <div class="navContent">
                <div class="navUp">
                    <h1>나만의 여행 플래너 어스토리!</h1>
                    <h2>쉽고 빠르게 여행을 계획하세요.</h2>
                </div>
                <div class="navDown">
                    <form action="navSearch.php" method="get">
                        <input type="search" name="navSearch" placeholder="국가명, 도시명으로 검색">
                    </form>
                    <p>추천도시: 타이베이, 런던, 상하이<span>지도에서 검색></span></p>
                </div>
            </div>
        </div>
        <section class="sec1">
            <div class="sec1contents">
                <h2>어스토리에서 여행을 시작하세요!</h2>
                <div class="col-4 sec1content">
                    <div class="sec1gallery"></div>
                    <div class="sec1txt">
                        <h4>여행정보</h4>
                        <p>전 세계 800개 도시, 30만개의 관광명소, 음식점, 쇼핑정보를 확인하세요.</p>
                    </div>
                </div>
                <div class="col-4 sec1content">
                    <div class="sec1gallery"></div>
                    <div class="sec1txt">
                        <h4>여행일정</h4>
                        <p>전 세계 100,000개 이상의 여행일정을 확인하고 나만의 일정을 계획해 보세요.</p>
                    </div>
                </div>
                <div class="col-4 sec1content">
                    <div class="sec1gallery"></div>
                    <div class="sec1txt">
                        <h4>커뮤니티</h4>
                        <p>여행자들의 정보를 공유하고, 궁금한 것은 언제든 물어보세요.</p>
                    </div>
                </div>
            </div>
            <p class="sec1undertxt">사용방법이 궁금하신가요?</p>
            <div class="best">
                <div class="col-3 icon">
                    <div class="bestgallery"></div>
                    <p class="besttxt">HAND PICKED GUIDES</p>
                </div>
                <div class="col-3 icon">
                    <div class="bestgallery"></div>
                    <p class="besttxt">24/7 CUSTOMER SUPPORT</p>
                </div>
                <div class="col-3 icon">
                    <div class="bestgallery"></div>
                    <p class="besttxt">EVERY TOUR PRIVATE AND CUSTOMIZABLE</p>
                </div>
                <div class="col-3 icon">
                    <div class="bestgallery"></div>
                    <p class="besttxt">VERIFIED CUSTOMER REVIEWS</p>
                </div>
            </div>
        </section>
        <section class="sec2">
            <div class="sec2contents">
                <h2>인기 여행일정</h2>
                <p class="h2title">다른 여행자들의 일정을 참고해 나만의 여행을 계획해보세요!</p>
                <div class="col-4 sec2content">
                    <div class="sec2gallery">
                        <div class="sec2galltxt">
                            <span class="date">2015-07-16</span><span class="days">39DAYS</span>
                            <p>마지막계획</p>
                        </div>
                    </div>
                    <div class="sec2txt">
                        <div class="sec2txtcontent">
                            <p>가족 여행</p>
                            <p>런던,로테르담,파리,취리히,인터라켄,바르셀로나...</p>
                            <p>김민지</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 sec2content">
                    <div class="sec2gallery">
                        <div class="sec2galltxt">
                            <span class="date">2015-08-17</span><span class="days">5DAYS</span>
                            <p>결혼 후 설레는 첫 휴가!</p>
                        </div>
                    </div>
                    <div class="sec2txt">
                        <div class="sec2txtcontent">
                            <p>가족 여행</p>
                            <p>런던,로테르담,파리,취리히,인터라켄,바르셀로나...</p>
                            <p>김민지</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 sec2content">
                    <div class="sec2gallery">
                        <div class="sec2galltxt">
                            <span class="date">2015-07-24</span><span class="days">19DAYS</span>
                            <p>RANG's Europe</p>
                        </div>
                    </div>
                    <div class="sec2txt">
                        <div class="sec2txtcontent">
                            <p>가족 여행</p>
                            <p>런던,로테르담,파리,취리히,인터라켄,바르셀로나...</p>
                            <p>김민지</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 sec2content">
                    <div class="sec2gallery">
                        <div class="sec2galltxt">
                            <span class="date">2015-06-14</span><span class="days">6DAYS</span>
                            <p>씽가</p>
                        </div>
                    </div>
                    <div class="sec2txt">
                        <div class="sec2txtcontent">
                            <p>가족 여행</p>
                            <p>런던,로테르담,파리,취리히,인터라켄,바르셀로나...</p>
                            <p>김민지</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 sec2content">
                    <div class="sec2gallery">
                        <div class="sec2galltxt">
                            <span class="date">2015-07-25</span><span class="days">8DAYS</span>
                            <p>2015년도 방콕 여행</p>
                        </div>
                    </div>
                    <div class="sec2txt">
                        <div class="sec2txtcontent">
                            <p>가족 여행</p>
                            <p>런던,로테르담,파리,취리히,인터라켄,바르셀로나...</p>
                            <p>김민지</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 sec2content">
                    <div class="sec2gallery">
                        <div class="sec2galltxt">
                            <span class="date">2015-07-13</span><span class="days">5DAYS</span>
                            <p>진주랑 지현이랑 대만여행 </p>
                        </div>
                    </div>
                    <div class="sec2txt">
                        <div class="sec2txtcontent">
                            <p class="title">가족 여행</p>
                            <p class="nation">런던,로테르담,파리,취리히,인터라켄,바르셀로나...</p>
                            <p class="writer">김민지</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="secviewall">56,065개 추천일정 모두보기</div>
        </section>
        <section class="sec3">
            <div class="sec3contents">
                <h2>어디로 갈까?</h2>
                <p class="h2title">팁에서 아이디어를 얻어보세요.</p>
                <div class="col-6 sec3content">
                    <div class="sec3gallery">
                        <div class="overlay"></div>
                        <div class="sec3txt">
                            <div class="sec3txtcontent">
                                <p class="sec3TxtTitle">대도시 홍콩의 숨겨진 자연 찾기</p>
                                <p>해변이나 산, 공원을 걸으며, 자연을 감상할 수 있는 곳들. 도시와 자연의 이중적인 매력을 가진 홍콩.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 sec3content">
                    <div class="sec3gallery">
                        <div class="overlay"></div>
                        <div class="sec3txt">
                            <div class="sec3txtcontent">
                                <p class="sec3TxtTitle">축제의 도시 멜버른</p>
                                <p>축제가 끊이지 않은 도시, 멜버른의 시기별 다양한 축제와 이벤트 속으로..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 sec3content">
                    <div class="sec3gallery">
                        <div class="overlay"></div>
                        <div class="sec3txt">
                            <div class="sec3txtcontent">
                                <p class="sec3TxtTitle">바티칸, 미리 둘러보기</p>
                                <p>기독교 세계에서 가장 성스러운 곳 중 하나인 바티칸, 미리 공부해서 더 많...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 sec3content">
                    <div class="sec3gallery">
                        <div class="overlay"></div>
                        <div class="sec3txt">
                            <div class="sec3txtcontent">
                                <p class="sec3TxtTitle">놓치면 안 될, 싱가폴의 명소!</p>
                                <p>싱가포르에 왔다면 꼭 보고가야 할 명소들. 여행다녀 온 티내기 좋은 곳들.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 sec3content">
                    <div class="sec3gallery">
                        <div class="overlay"></div>
                        <div class="sec3txt">
                            <div class="sec3txtcontent">
                                <p class="sec3TxtTitle">로마, 3대 젤라또 맛집</p>
                                <p>로마의 3대 젤라또 맛집 탐방!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 sec3content">
                    <div class="sec3gallery">
                        <div class="overlay"></div>
                        <div class="sec3txt">
                            <div class="sec3txtcontent">
                                <p class="sec3TxtTitle">놓치기 아쉬운 이색 박물관</p>
                                <p>런던의 셜록 홈즈 박물관, 도쿄의 미타카 지브리 미술관, 뮌헨의 비엠더블유 박물관 그리고 빈의 음악의 집.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="secviewall">399개의 여행지TIP 모두 보기</div>
        </section>
        <section class="sec4">
            <div class="sec4contents">
                <h2>인기도시 TOP10</h2>
                <div class="col-6 sec4content">
                    <div class="sec4gallery"><span class="sec4Txt">런던</span></div>
                </div>
                <div class="col-3 sec4content">
                    <div class="sec4gallery"><span class="sec4Txt">파리</span>
                    </div>
                </div>
                <div class="col-3 sec4content">
                    <div class="sec4gallery"><span class="sec4Txt">싱가포르</span>
                    </div>
                </div>
                <div class="col-3 sec4content">
                    <div class="sec4gallery"><span class="sec4Txt">이스탄불</span>
                    </div>
                </div>
                <div class="col-3 sec4content">
                    <div class="sec4gallery"><span class="sec4Txt">베네치아</span>
                    </div>
                </div>
                <div class="col-3 sec4content">
                    <div class="sec4gallery"><span class="sec4Txt">바르셀로나</span>
                    </div>
                </div>
                <div class="col-3 col-right sec4content">
                    <div class="sec4gallery sec4Etc"><span class="sec4Txt">타이베이</span>
                    </div>
                </div>
                <div class="col-3 sec4content">
                    <div class="sec4gallery"><span class="sec4Txt">홍콩</span>
                    </div>
                </div>
                <div class="col-3 sec4content">
                    <div class="sec4gallery"><span class="sec4Txt">방콕</span>
                    </div>
                </div>
                <div class="col-3 sec4content">
                    <div class="sec4gallery"><span class="sec4Txt">제주도</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec5">
            <div class="secContents center">
                <div class="sec5ph"><img src="img/sec5ph.png" alt="phone"></div>
                <div class="sec5Txts">
                    <div class="sec5Txt">
                        <h3>모바일에서도 어스토리를 만나보세요.</h3>
                        <p>내가 계획한 일정과 전세계 주요 관광지 정보를 빠르고 쉽게 찾을 수 있습니다. <br> 어스토리의 모든 서비스는 무료 입니다.</p>
                    </div>
                    <ul class="sec5boxs">
                        <li class="box1"><img src="img/sec5box1.png" alt="x"></li>
                        <li class="box2"><img src="img/sec5box2.png" alt="x"></li>
                    </ul>
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

</html>
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

    //sec1
    var sec1gallery = $('.sec1gallery');
    var gallarray = [];
    for (var i = 0; i < 3; i++) {
        gallarray.push('url(img/intro_' + i + '.jpg) no-repeat 50%');
        sec1gallery.eq(i).css({
            background: gallarray[i],
            backgroundSize: 'cover'
        });
    }

    var bestgallery = $('.bestgallery');
    var bestgallarray = [];
    for (var i = 0; i < 4; i++) {
        bestgallarray.push('url(img/sec1underbg' + i + '.png) no-repeat 50%');
        bestgallery.eq(i).css({
            background: bestgallarray[i],
            backgroundSize: 'cotain'
        });
    }

    //sec2
    var sec2gallery = $('.sec2gallery');
    var sec2gallarray = [];
    for (var i = 0; i < 6; i++) {
        sec2gallarray.push('url(img/sec2bg' + i + '.jpg) no-repeat 50%');
        sec2gallery.eq(i).css({
            background: sec2gallarray[i],
            backgroundSize: 'cover'
        });
    }

    //sec3
    var sec3gallery = $('.sec3gallery');
    var sec3gallarray = [];
    for (var i = 0; i < 6; i++) {
        sec3gallarray.push('url(img/sec3bg' + i + '.jpg) no-repeat 50%');
        sec3gallery.eq(i).css({
            background: sec3gallarray[i],
            backgroundSize: 'cover'
        });
    }

    var sec3txt = $('.sec3txt');
    sec3txt.hover(
        function() {
            $(this).parent().find('.overlay').fadeOut();
        },
        function() {
            $(this).parent().find('.overlay').fadeIn();
        }
    );


    //sec4
    var sec4gallery = $('.sec4gallery');
    var sec4gallarray = [];
    for (var i = 0; i < 10; i++) {
        sec4gallarray.push('url(img/sec4bg' + i + '.jpg) no-repeat 50%');
        sec4gallery.eq(i).css({
            background: sec4gallarray[i],
            backgroundSize: 'cover'
        });
    }

</script>
