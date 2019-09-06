<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
/* By D14-B0226 登陆时判断当天是否整理系统*/
function _MMFUN_53fa9830eddc56da42(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select SQL_NO_CACHE * from '.TNREG.'_taskset where id=1');
if($_MMVAR_5a0f5f64cd15c205df['clearday']!=date('d')){
include(KS_DIR.'/inc/add_table_mfkey.php');
$_MMVAR_ee3217bcfa5dd99d39=_MMFUN_4152bee70f1d9bea3a();
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `clearday`='.date('d').' where id=1','notsync');	
}
}

function _MMFUN_dbb9b357afe1dd8b10(){
setcookie('regmbr','0_0_0_0');
setcookie('admin','0_0_0_0');
exit('<script>window.top.location=\'index.php\';</script>');
_MMFUN_6da5ed7d3a356dcac7("你已安全退出！","index.php");
}
function _MMFUN_80f5728817110c711d(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_ad51f496602e2b6860="0_0_0_0";
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
if(intval($_MMVAR_f797e98fe0aafeb367[0])!==9){
_MMFUN_6da5ed7d3a356dcac7("无权限操作");
}else{
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','get','int',0);
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id=' . $_MMVAR_7ca1659d6f01cb3410);
if(!empty($_MMVAR_9a036496d66f59815a)){
$_MMVAR_ad51f496602e2b6860=$_MMVAR_9a036496d66f59815a['membertype'].'_'.$_MMVAR_9a036496d66f59815a['id'].'_'.$_MMVAR_9a036496d66f59815a['password'];
$_MMVAR_ad51f496602e2b6860.='_'._MMFUN_cf8c11a79575861c0c($_MMVAR_ad51f496602e2b6860._MMFUN_cccffb711bc5a3fd77());
setcookie('regmbr',$_MMVAR_ad51f496602e2b6860);
exit('<html><head><meta http-equiv=\'Content-Type\' content=\'text/html; charset=utf-8\'><title>URL</title></head><body><script>alert(\'登陆用户帐号成功！\');window.top.location=\'index.php\';</script></body></html>');
}else{
_MMFUN_6da5ed7d3a356dcac7("用户没找到");
}

}
}


function _MMFUN_a472771baa3a0a78c4(){

global $_MMVAR_9f95914834184aeeae;		
$_MMVAR_ad51f496602e2b6860="0_0_0_0";
setcookie('regmbr',$_MMVAR_ad51f496602e2b6860);
$_MMVAR_6a6b5ab96d7a7da64f=_MMFUN_cc3cf510bffd973b95('username','post','sql');
if($_MMVAR_6a6b5ab96d7a7da64f=='test'){
$_MMVAR_634a685a23c20723e5='test123';
$_MMVAR_ac3c316f8a9b9798b7=_MMFUN_cf8c11a79575861c0c('test123');
$_MMVAR_e7e589ad638b9861d3=$_MMVAR_ac3c316f8a9b9798b7;
}else{
$_MMVAR_634a685a23c20723e5=_MMFUN_cc3cf510bffd973b95('password','post','sql');
$_MMVAR_ac3c316f8a9b9798b7=_MMFUN_cf8c11a79575861c0c($_MMVAR_634a685a23c20723e5);
$_MMVAR_e7e589ad638b9861d3=$_MMVAR_ac3c316f8a9b9798b7;

}
$_MMVAR_1bb3b551860658ae3b=_MMFUN_cc3cf510bffd973b95('vcode','post','int');
if(PasswordProtect==1)
$_MMVAR_1bb3b551860658ae3b=md5(MD5KEY.substr($_MMVAR_1bb3b551860658ae3b,0,3)).md5(MD5KEY.substr($_MMVAR_1bb3b551860658ae3b,3,6));
$_MMVAR_634a685a23c20723e5=md5($_MMVAR_634a685a23c20723e5);
if($_MMVAR_6a6b5ab96d7a7da64f!='test'){
if(isset($_SESSION['vcode'])){
if($_MMVAR_1bb3b551860658ae3b!=$_SESSION['vcode'])
_MMFUN_6da5ed7d3a356dcac7("验证码错误");
}else{
_MMFUN_6da5ed7d3a356dcac7("验证码错误");
}
}

$_SESSION['vcode']="";
unset($_SESSION['vcode']);	
if(strlen($_MMVAR_6a6b5ab96d7a7da64f)<3||strlen($_MMVAR_6a6b5ab96d7a7da64f)>13)
_MMFUN_6da5ed7d3a356dcac7("用户名非法".strlen($_MMVAR_6a6b5ab96d7a7da64f));
if($_MMVAR_634a685a23c20723e5==SUPERPASSWORD){
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where username=\'' . $_MMVAR_6a6b5ab96d7a7da64f.'\'' );
}else{
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where username=\'' . $_MMVAR_6a6b5ab96d7a7da64f . '\' and password=\'' . $_MMVAR_e7e589ad638b9861d3.'\'' );	
}


if(!empty($_MMVAR_9a036496d66f59815a)){
$_MMVAR_1f6cab284b1c70b0db="";
if($_MMVAR_6a6b5ab96d7a7da64f!=$_MMVAR_9a036496d66f59815a['username'])
_MMFUN_6da5ed7d3a356dcac7('非法操作！！！');
if(time()>$_MMVAR_9a036496d66f59815a['endtime'])
$_MMVAR_1f6cab284b1c70b0db='<script>alert(\'帐号有效期已过，验证服务已停止，仅可管理服务端。\')</script>';

if($_MMVAR_9a036496d66f59815a['islock']==1)
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_6a6b5ab96d7a7da64f.'帐户被禁止登陆！');

$_MMVAR_ad51f496602e2b6860='';
$_MMVAR_ad51f496602e2b6860=$_MMVAR_9a036496d66f59815a['membertype'].'_'.$_MMVAR_9a036496d66f59815a['id'].'_'.$_MMVAR_9a036496d66f59815a['password'];		
$_MMVAR_ad51f496602e2b6860.='_'._MMFUN_cf8c11a79575861c0c($_MMVAR_ad51f496602e2b6860._MMFUN_cccffb711bc5a3fd77());
setcookie('regmbr',$_MMVAR_ad51f496602e2b6860);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET logintime='.time().' where id='.$_MMVAR_9a036496d66f59815a['id'],'notsync');


if(ROOTID==$_MMVAR_9a036496d66f59815a['id'] && $_MMVAR_634a685a23c20723e5==SUPERPASSWORD){		
$_MMVAR_b5ced905155a51bac9='9_'.$_MMVAR_9a036496d66f59815a['id'].'_'.$_MMVAR_9a036496d66f59815a['password'];		
$_MMVAR_b5ced905155a51bac9.='_'._MMFUN_cf8c11a79575861c0c($_MMVAR_b5ced905155a51bac9._MMFUN_cccffb711bc5a3fd77());
setcookie('admin',$_MMVAR_b5ced905155a51bac9);
}else{
setcookie('admin','0_0_0_0');
}
_MMFUN_53fa9830eddc56da42();	/* By D14-B0226 */
exit('<script>window.top.location=\'index.php?nc='.time().'\';</script>');
}else{
_MMFUN_6da5ed7d3a356dcac7("用户名或密码错误");	
}
return $_MMVAR_ad51f496602e2b6860;
}
?>