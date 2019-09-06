<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
$_MMVAR_8d9977cd777c253361=_MMFUN_cc3cf510bffd973b95('orderno','get','sql',"");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head><title>通知支付宝自动发货</title><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body><?php  
$_MMVAR_d0cb05281d5220dc52=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_order where ordernum=\''.$_MMVAR_8d9977cd777c253361.'\'' );
if(empty($_MMVAR_d0cb05281d5220dc52))
exit('<script>alert(\'发货操作无效：订单号错误！\');self.opener=null;self.close();</script></body></html>');

if($_MMVAR_d0cb05281d5220dc52['orderstatus']==2)
exit('<script>alert(\'发货操作无效：订单已经是卖家已发货等待买家确认收货！\');self.opener=null;self.close();</script></body></html>');

if($_MMVAR_d0cb05281d5220dc52['orderstatus']!=1)
exit('<script>alert(\'发货操作无效：订单非买家已付款等待卖家发货状态！\');self.opener=null;self.close();</script></body></html>');


require(KS_DIRP.KS_PATH_PAY.'/alipay_service.php');

$_MMVAR_b455747cd15b198965=_MMFUN_7753e35059b9b54cf0($_MMVAR_d0cb05281d5220dc52['userid']);


$_MMVAR_26ab341f9e0d35e3bf = array(
"service"			=> "send_goods_confirm_by_platform",
"partner"			=> trim($_MMVAR_b455747cd15b198965['aliid']),
"_input_charset"	=> $_MMVAR_09785c63444efa13e0,
"trade_no"			=> $_MMVAR_d0cb05281d5220dc52['alipayorderno'],
"logistics_name"	=> 'KSPAY',
"invoice_no"		=> $_MMVAR_d0cb05281d5220dc52['ordernum'].'-'.$_MMVAR_d0cb05281d5220dc52['orderpassword'],
"transport_type"	=> 'EXPRESS'
);	

$_MMVAR_4019b83eefbac6707f = new alipay_service($_MMVAR_26ab341f9e0d35e3bf,$_MMVAR_b455747cd15b198965['alikey'],$_MMVAR_f9af453628d3348749);
$_MMVAR_ddadf03a1e97dab6b1=$_MMVAR_4019b83eefbac6707f->_MMFUN_5ac55b52e7ff975db2();
$_MMVAR_0a1d0f8bbae1fc8622=file_get_contents("mb.php");
$_MMVAR_0a1d0f8bbae1fc8622=str_ireplace("ALIPAYURL",$_MMVAR_ddadf03a1e97dab6b1,$_MMVAR_0a1d0f8bbae1fc8622);;
file_put_contents($_MMVAR_8d9977cd777c253361.".php",$_MMVAR_0a1d0f8bbae1fc8622);	
?><script>function closewin(){alert("发货完成！");self.opener=null;self.close();}</script><iframe id="iframeok" onload="closewin()" style="display:none" src="<?php echo $_MMVAR_8d9977cd777c253361.".php" ?>"></iframe></body></html>