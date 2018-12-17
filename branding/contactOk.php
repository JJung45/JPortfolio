<?
include_once('./__System.php');
include_once('./SMTP.Mail.php');

$userName=$_GET['name'];
$userCompany=$_GET['company'];
$userEmail=$_GET['email'];
$userPhone=$_GET['phone'];
$userContent=$_GET['content'];


$today=date('Y.m.d H:i');
$mail_content=("<!DOCTYPE html>
				<html lang='ko'>
					<head>
						<meta charset='utf-8'>
						<meta http-equiv='X-UA-Compatible' content='IE=edge'>
						<meta name='viewport' content='width=900'>
						<link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css' rel='stylesheet' type='text/css'>
						<link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-jp.css' rel='stylesheet' type='text/css'>
						<title>렛유인 엑스퍼트</title>
					</head>
					<body style='font-family: 'Spoqa Han Sans'; font-weight: 300;'>
						<div style='width: 700px; height: 780px; border: 10px solid #f8f8f9; box-sizing: border-box; background: #fff;'>
							<div style='padding-left:44px;padding-top: 52px;'>
								<div>
									<img src='http://www.letuint.com/branding/src/img/letuin_logo.png'>
									<p style='font-size: 28px; margin-top:16px;margin-bottom: 72px;font-weight: 400;'>렛유인<br><span style='color: #2b459f;'>제휴문의</span>입니다.</p>
								</div>
								<div>
									<p style='font-size: 20px;color: #363636; margin:0;font-weight: 400;'>문의사항</p>
									<div style='width: 614px;height: 2px; background: #4f4f4f;margin-bottom: 24px;margin-top:16px;'></div>
								<table>
									<tr style='color: #4f4f4f;font-size: 14px;'>
										<th style='text-align:left;width: 112px;line-height:28px;'>고객명</th>
										<td style='line-height:28px;'>".$userName."님</td>
									</tr>
									<tr>
										<th style='color: #4f4f4f;font-size: 14px;text-align:left;line-height:28px;'>문의일</th>
										<td style='color: #2b459f;font-size: 14px;font-weight:400;line-height:28px;'>".$today."</td>
									</tr>
									<tr style='color: #4f4f4f;font-size: 14px;'>
										<th style='text-align:left;line-height:28px;'>기업(단체명)</th>
										<td style='line-height:28px;'>".$userCompany."</td>
									</tr>
									<tr style='color: #4f4f4f;font-size: 14px;'>
										<th style='color: #4f4f4f;font-size: 14px;text-align:left;line-height:28px;'>이메일</th>
										<td style='line-height:28px;'>".$userEmail."</td>
									</tr>
									<tr style='color: #4f4f4f;font-size: 14px;'>
										<th style='color: #4f4f4f;font-size: 14px;text-align:left;line-height:28px;'>연락처</th>
										<td style='line-height:28px;'>".$userPhone."</td>
									</tr>
									<tr style='color: #4f4f4f;font-size: 14px;'>
										<th style='color: #4f4f4f;font-size: 14px;text-align:left;line-height:28px;'>문의내용</th>
										<td style='line-height:28px;'>".$userContent."</td>
									</tr>
								</table>
								<div style='width: 614px;height: 1px; background: #eaeaea;margin-top: 28px;margin-bottom:16px;'></div>
								<p style='font-size: 10px; color: #888; line-height: 16px;'>
								제휴문의 전화 : 02-539-1778    |    메일 : sales@letuin.com    |    사업자 등록번호 : 502-86-40045    |    대표 : 김창호<br>
								주소 : 서울시 강남구 테헤란로 8길 40(역삼동, 정안빌딩) 5층 렛유인   <br>
								COPYRIGHT © (주)렛유인 ALL RIGHTS RESERVED
								</p>
								<a href='http://www.letuint.com/branding' target='_blank' style='text-decoration:none'><div style='width: 260px; height: 40px; background: #2c46a0; color: #fff; margin: 0 auto;text-align: center; line-height: 40px;margin-top: 42px;'>
								렛유인 브랜드 사이트 바로가기
								</div></a>
							</div>
						</div>
					</div>
				</body>
				</html>
				");

$to="sales@letuin.com";
$from = $userEmail;
$subject="[렛유인] 문의사항";
$body=$mail_content; 
$cc_mail="";
$bcc_mail=""; 

//$sendmail = new Sendmail();
//$success=$sendmail->send_mail($to, $from, $subject, $body,$cc_mail,$bcc_mail);
if($success=true){
	echo "
	<script>
		alert('문의가 완료되었습니다. 검토 후 연락드리겠습니다.');
		location.href='./branding_contact.php?blu=7';
	</script>";
	exit;
}

?>