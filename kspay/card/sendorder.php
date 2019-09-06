<?php
include_once KS_DIR.'/class.phpmailer.php';




function sendorder($sendmail,$sendpassword,$qq,$ordernum,$key,$userid,$xjlname,$payname){
	$mailbody='<html><head><title>订单记录</title></head>';
	$mailbody.='<body>这是系统自动发送的邮件，请不要回复！<br>';
	$mailbody.='<br><span style=\'color:red;font-size:14px;font-weight:700\'>注意：订单完成付款收货确认后，注册卡才会录入正式表，未完成的订单里的卡是不能查询或使用的。</span>';
	$mailbody.='<br><a href=\''.HOSTA.KS_PATH_PAY.'/card.php?userid='.$userid.'&action=sorder&ordercode='.$ordernum.'\'>点击这里进查看订单状态</a><br>';
	$mailbody.='<br>订单号：'.$ordernum.'<br>注册卡号：'.$key.'</body></html>';

	$mail  = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Host 	= "smtp.qq.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 25;                   // set the SMTP port for the GMAIL server
	$mail->Username   = $sendmail;  // GMAIL username
	$mail->Password   = $sendpassword;            // GMAIL password	 
	$mail->From       = $sendmail;
	$mail->FromName   = $xjlname;
	$mail->Subject    = "在线购卡订单卡号";
	$mail->MsgHTML($mailbody);
	$mail->AddAddress($qq."@qq.com",$payname);
	$mail->IsHTML(true); 
	if(!$mail->Send()) {
		return '系统不能发送订单资料和注册卡号到你的QQ邮箱。';
	}else{
		return '系统已将订单资料和注册卡号发送到你的QQ邮箱。';
	}
}


?>
