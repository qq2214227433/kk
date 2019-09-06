<?php
	function ksmail($dbfilename,$dbname){
		global $mail,$sssyncerror;
		if($dbfilename!==''){
			$mail->AddAttachment(KS_DIR."/".$dbfilename); // 添加附件
			$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
			$mail->Subject = $dbname."_数据库备份_".date('Y-m-d H:i:s'); //邮件标题
			$mail->Body = "数据库名：$dbname<br>备份日期：".date('Y-m-d H:i:s')."<br>这是KSREG网络验证自动发送的备份数据库邮件，请不要回复。"; //邮件内容
			$mail->AltBody = "附件信息"; //附加信息，可以省略
			if(!$mail->Send()){
				unlink($dbfilename);
				exitlog("数据库备份邮件发送失败，错误原因: " . $mail->ErrorInfo);
			}else{
				unlink($dbfilename);
				exitlog("数据库备份邮件发送成功：备份数据已发送到您指定的邮箱！");
			}			
		}else{
			$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
			$mail->Subject = "KSREG同步异常"; //邮件标题
			$mail->Body = "这是KSREG网络验证自动发送的错误报告，请不要回复。<br>错误信息：".$sssyncerror; //邮件内容
			if(!$mail->Send())
				exitlog("同步错误报告发送失败，错误原因: " . $mail->ErrorInfo);
			exitlog("同步错误报告发送成功：备份数据已发送到您指定的邮箱！");
		}
	}
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "smtp.qq.com:25";
	$mail->SMTPAuth = true;
	$mail->Username = ksreg_mail_name;
	$mail->Password = ksreg_mail_password;
	$mail->From = ksreg_mail_name; 
	$mail->FromName = "KSREG网络验证";
	$mnames=explode("@",ksreg_mail_name);
	$mail->AddAddress(ksreg_mail_name, $mnames[0]);

?>