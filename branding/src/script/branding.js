/*partner*/
$(function(){
	$('#submit').on('click',check);
	$('form').on('submit', function(){return false;});
});

/*partner 무한스크롤*/
$(window).scroll(function() {
  /* var totImg = 30;
   var currentImg = $('.partner_person').length;

	if(totImg > currentImg){*/
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
		  $(".partner_gall_ul").eq(1).removeClass('hide');
		}
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
		  $(".partner_gall_ul").eq(2).removeClass('hide');
		}
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
		  $(".partner_gall_ul").eq(3).removeClass('hide');
		}
	/*
	}else{
	
	}
	console.log(currentImg);*/
});
	
	


/*partner_select*/
function setSelected(){
	var schField=$("#partnersel_gall option:selected").val();
	if(schField=="development"){
		location.href="./branding_partner.php?blu=3&name=dev";
	}else if(schField=="design"){
		location.href="./branding_partner.php?blu=3&name=design";
	}else if(schField=="sales2"){
		location.href="./branding_partner.php?blu=3&name=sales2";
	}else if(schField=="sales"){
		location.href="./branding_partner.php?blu=3&name=sales";		
	}else if(schField=="contentslab"){
		location.href="./branding_partner.php?blu=3&name=contentslab";
	}else if(schField=="marketing"){
		location.href="./branding_partner.php?blu=3&name=marketing";
	}else if(schField=="offline"){
		location.href="./branding_partner.php?blu=3&name=offline";
	}else if(schField=="online"){
		location.href="./branding_partner.php?blu=3&name=online";
	}else if(schField=="publisher"){
		location.href="./branding_partner.php?blu=3&name=publisher";
	}else{
		location.href="./branding_partner.php?blu=3&name=all";	
	}
	
}

var brandingContent=$('.brandingContent');
$(window).load(function(){
	/*home*/
	$('.brandingContent').animate({
		opacity:1,
		bottom: "+=10%"
		},1000);
	/*partner_hover*/
	$(".partner_person").hover(
	function() {
		$(this).children(".hover_wrap").removeClass("hide");
		$(this).children(".hover_wrap_t").removeClass("hide");
		$(this).children(".hover_wrap_t").animate({bottom: "50px"},100);
	  }, function() {
		$(this).children(".hover_wrap").addClass("hide");
		$(this).children(".hover_wrap_t").addClass("hide");
		$(this).children(".hover_wrap_t").css("bottom", "0px");
	  }
	);
});

/*partner_next*/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  if(n>6){
	slideIndex=6;
  }
  if(n<1){
	slideIndex=1;
  }
  var i;
  var slides = $('.partner_t1');
  var textchange = $('.textchange');
  for (i = 0; i < slides.length; i++) {
    slides.eq(i).css("display","none");
  }
  slides.eq(slideIndex-1).css("display","block");
  textchange.text(slideIndex);
}


/*contact*/
function check(){
	var name=$('input').eq(0).val();
	var company=$('input').eq(1).val();
	var email=$('input').eq(2).val();
	var phone=$('input').eq(3).val();
	var content=$('textarea').val();

	if(name=="" || name==null){
		$('input').eq(0).siblings().css({borderColor:'#dadada'});
		$('#name').css({borderColor:'#e74c3c'});
		$('input').eq(0).addClass('redplace');
		$('input').eq(0).focus();
		$('input').eq(0).attr('placeholder','이름을 입력해주세요.');
		return false;
	}
	if(email=="" || email==null){
		$('input').eq(2).siblings().css({borderColor:'#dadada'});
		$('#email').css({borderColor:'#e74c3c'});
		$('input').eq(2).addClass('redplace');
		$('input').eq(2).focus();
		$('input').eq(2).attr('placeholder','이메일 주소를 입력해주세요.');
		return false;
	}
	if(phone=="" || phone==null){
		$('input').eq(3).siblings().css({borderColor:'#dadada'});
		$('#phone').css({borderColor:'#e74c3c'});
		$('input').eq(3).addClass('redplace');
		$('input').eq(3).focus();
		$('input').eq(3).attr('placeholder','연락처를 입력해주세요.');
		return false;
	}
	if(content=="" || content==null){
		$('textarea').siblings().css({borderColor:'#dadada'});
		$('#content').css({borderColor:'#e74c3c'});
		$('textarea').addClass('redplace');
		$('textarea').focus();
		$('textarea').attr('placeholder','제휴 및 문의 내용을 작성해주세요.');
		return false;
	}
	if(name!="" && name!=null && email!="" && email!=null && phone!="" && phone!=null && content!="" && content!=null){
		location.href="./contactOk.php?name="+name+"&company="+company+"&email="+email+"&phone="+phone+"&content="+content;
	}
}

