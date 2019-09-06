<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . 'GMT'); 
header('Cache-Control: no-cache, must-revalidate'); 
header('Pragma: no-cache');
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
$_MMVAR_d6858a6d9e9ee80bab=_MMFUN_cc3cf510bffd973b95('userid','get','int',0);
$_MMVAR_e23c7e328f1c3356dc=_MMFUN_cc3cf510bffd973b95('ext1','get','sql','all');
$_MMVAR_a857d51426fee0a13a=_MMFUN_28b0167863be78793b();
$_MMVAR_53d17c3545aae95b9e=_MMFUN_6f3cdb13acde5824da($_MMVAR_a857d51426fee0a13a[0]);	
if($_MMVAR_53d17c3545aae95b9e[0]==0)
exit("无权访问，请登陆！");
if($_MMVAR_e23c7e328f1c3356dc=='keys' || $_MMVAR_e23c7e328f1c3356dc=='user'){
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_xjl where `id` in('.substr($_MMVAR_53d17c3545aae95b9e[4],2).') and `userid`='.$_MMVAR_d6858a6d9e9ee80bab.' and ext1=\''.$_MMVAR_e23c7e328f1c3356dc.'\'';
}else{
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_xjl where `id` in('.substr($_MMVAR_53d17c3545aae95b9e[4],2).') and `userid`='.$_MMVAR_d6858a6d9e9ee80bab;
}

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
if(empty($_MMVAR_5a0f5f64cd15c205df))
exit('无授权软件');

echo '<table width=780 style=\'border:0\' border=\'0\' cellpadding=\'0\' align=\'center\'>';
$_MMVAR_8ff60a7771c3f2c087=0;	
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
if($_MMVAR_8ff60a7771c3f2c087 % 5==0)
echo '<tr>';
?>
<a class="boxa" href="###" xjlid="<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>" title="<?php echo $_MMVAR_9a036496d66f59815a['xjlname']?>"><?php echo _MMFUN_542a28b318312d6938($_MMVAR_9a036496d66f59815a['xjlname'],0,9)?></a>
<?php
if($_MMVAR_8ff60a7771c3f2c087 % 5==4)
echo '</tr>';
$_MMVAR_8ff60a7771c3f2c087=$_MMVAR_8ff60a7771c3f2c087+1;
}
if($_MMVAR_8ff60a7771c3f2c087-1 % 5 == 3){
echo '<td>&nbsp;</td></tr>';
}else if($_MMVAR_8ff60a7771c3f2c087-1 % 5 == 2){
echo '<td>&nbsp;</td><td>&nbsp;</td></tr>';
}else if($_MMVAR_8ff60a7771c3f2c087-1 % 5 == 1){
echo '<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
}else if($_MMVAR_8ff60a7771c3f2c087-1 % 5 == 0){
echo '<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
}
echo '</table>';		
?>