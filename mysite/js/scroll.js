/*스르르 나타나게 하기*/
$(document).ready(function(){
	
	$('.sectionMain p').animate({
		'opacity':'1'
	},1500);
	$('.scrollimg img ').animate({
		'opacity':'1'
	},1500);
	
	$(window).scroll(function(){
		
			var docTop=$(document).scrollTop();
				
				if(docTop>600 && docTop<1000){
					
					$('.sec1').animate({
					'opacity':'1','margin-left':'0px'
				},1000);
					
					$('.bar').animate({
						'height':'400px' 
					},2000);
				}
				else if(docTop>=1000 && docTop<1499){
					$('.sec2').animate({
					'opacity':'1','margin-left':'0px'
				},1000);
					$('.box2_1').animate({
						'width':'100%'
					},2000);
					$('.box2_2').animate({
						'width':'100%'
					},2000);
					$('.box2_3').animate({
						'width':'90%'
					},2000);
					$('.box2_4').animate({
						'width':'90%'
					},2000);
					$('.box2_5').animate({
						'width':'95%'
					},2000);
					$('.box2_6').animate({
						'width':'90%'
					},2000);
					$('.box2_7').animate({
						'width':'90%'
					},2000);
				}
		else if(docTop>=1500 && docTop<1999){
			$('.sec3 .secMaintxt').animate({
			'opacity':'1','margin-left':'0px'
				},1000);
			
			function sec3work(content){
			for(var i=0; i<content.length; i++){
				var time=(i+1)*400;
			content.eq(i).delay(time).animate({
				'bottom':'0px',
				'opacity':'1'
			});
			}
			}
			
			sec3work($('.sec3Content'));
		}
		else if(docTop>=2000){
			$('.sec4').animate({
			'opacity':'1','margin-left':'0px'
				},1000);
		}
		});
});
/*메뉴 클릭시 해당 섹션으로 이동*/

$('.menu1').click(function(){
	var position=$('.sec1').offset();
	$('html,body').stop().animate({scrollTop: position.top-50+'px'},500);
});
$('.menu2').click(function(){
	var position=$('.sec2').offset();
	$('html,body').stop().animate({scrollTop: position.top-30+'px'},500);
});
$('.menu3').click(function(){
	var position=$('.sec3').offset();
	$('html,body').stop().animate({scrollTop: position.top-40+'px'},500);
});
$('.menu4').click(function(){
	var position=$('.sec4').offset();
	$('html,body').stop().animate({scrollTop: position.top-50+'px'},500);
});

///*스크롤시마다 이동*/
//var windowHeight=$(window).height();
//$('.section').each(function(index){
//	$(this).attr("data-index",windowHeight*index);
//});
//$('.section').on('mousewheel',function(e){
//	var sectionPos=parseInt($(this).attr("data-index"));
//	if(e.originalEvent.wheelDelta>=0){
//		$('html,body').stop().animate({
//			scrollTop:sectionPos-windowHeight
//		});
//		return false;
//	}else if(e.originalEvent.wheelDelta<0){
//		$('html,body').stop().animate({
//			scrollTop:sectionPos+windowHeight
//		});
//		return false;
//	}
//});

/*sectionMain아래로 내려가면 menu고정*/
var menu=$('.menu').offset();
$(window).scroll(function(){
	if($(document).scrollTop()>menu.top){
		$('.menu').addClass('sticky');
	}else{
		$('.menu').removeClass('sticky');
	}
})