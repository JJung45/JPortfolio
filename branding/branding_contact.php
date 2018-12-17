<?php include_once("header.php");?>
<?php include_once("branding_menu.php")?>

<div id="brandingIntro">
	<div class="brandingNav contactNav po-re">
		<div class="brandingNav_t">
			<p class="brandingNav_t1">여러분의 동반자 렛유인</p>
			<p class="brandingNav_t2">CONTACT US</p>
		</div>
	</div>
	<div class="introContent">
		<div class="introUp">
			<p class="intro_t3">렛유인 제휴문의</p>
			<div class="map fl-left">
				<div style="line-height:22px;">
					<div id="daumRoughmapContainer1530754021862" class="root_daum_roughmap root_daum_roughmap_landing"></div>
					<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
					<script charset="UTF-8">
						new daum.roughmap.Lander({
							"timestamp" : "1530754021862",
							"key" : "owb4",
							"mapWidth" : "400",
							"mapHeight" : "300"
						}).render();
					</script>
					<p class="fontfive regular" style="padding-bottom:16px;padding-top:42px;">서울시 강남구 테헤란로 8길 40(역삼동, 정안빌딩) 5층 렛유인</p>
					<img src="./src/img/contact_phone.png" class="fl-left" style="padding-top:4px;"><p class="fl-left fontthird warmgrey regular" style="text-indent:5px;">고객센터 02-539-1778  (월 ~ 금 / 10:00 ~ 19:00)</p>
					<div class="clearfix"></div>
					<img src="./src/img/contact_mail.png" class="fl-left" style="padding-top:9px;"><p class="fl-left fontthird warmgrey regular" style="text-indent:8px;">sales@letuin.com</p>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form fl-left">
				<form class="fontfive warmgrey">
					<input type="text" name="userName" placeholder="이름*" style="width:180px;margin-right: 12px;" id="name">
					<input type="text" name="userCompany" placeholder="기업(단체명)" style="width:280px;"><br>
					<input type="email" name="userEmail" placeholder="이메일 주소*" id="email"><br>
					<input type="text" name="userPhone" placeholder="연락처*" id="phone"><br>
					<textarea name="userContent" placeholder="제휴 및 문의 내용을 작성해주세요.*" id="content"></textarea><br>
					<input type="submit" value="문의하기" class="fontfive col-right" id="submit">
				</form>
				<p class="fontthird"><span class="red">*</span> 표시는 필수 입력사항입니다.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<?php include_once("./footer.php");?>