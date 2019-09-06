<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab;

$_MMVAR_ad51f496602e2b6860="0_0_0";
setcookie('agent',$_MMVAR_ad51f496602e2b6860);
$_MMVAR_6a6b5ab96d7a7da64f=_MMFUN_cc3cf510bffd973b95('agentname','post','sql');
$_MMVAR_ac3c316f8a9b9798b7=_MMFUN_cf8c11a79575861c0c(_MMFUN_cc3cf510bffd973b95('password','post','sql'));
$_MMVAR_e7e589ad638b9861d3=$_MMVAR_ac3c316f8a9b9798b7;
$_MMVAR_1bb3b551860658ae3b=_MMFUN_cc3cf510bffd973b95('vcode','post','int');

if(isset($_SESSION['vcode'])){
if($_MMVAR_1bb3b551860658ae3b != $_SESSION['vcode'])
_MMFUN_6da5ed7d3a356dcac7("验证码错误");
}else{
_MMFUN_6da5ed7d3a356dcac7("验证码错误(session不存在)");
}
$_SESSION['vcode']="";
if(strlen($_MMVAR_6a6b5ab96d7a7da64f)<3||strlen($_MMVAR_6a6b5ab96d7a7da64f)>18)
_MMFUN_6da5ed7d3a356dcac7("用户名长度3-18个字符");

$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_agent where `userid`='.$_MMVAR_d6858a6d9e9ee80bab.' and `agentname`=\'' . $_MMVAR_6a6b5ab96d7a7da64f . '\' and `password`=\'' . $_MMVAR_e7e589ad638b9861d3.'\'' );
if(!empty($_MMVAR_9a036496d66f59815a)){
if($_MMVAR_6a6b5ab96d7a7da64f!=$_MMVAR_9a036496d66f59815a['agentname'] || $_MMVAR_e7e589ad638b9861d3!=$_MMVAR_9a036496d66f59815a['password'])
_MMFUN_6da5ed7d3a356dcac7('非法操作！！！');

if($_MMVAR_9a036496d66f59815a['islock']==1)
_MMFUN_6da5ed7d3a356dcac7("你的帐户被禁止登陆！");

$_MMVAR_ad51f496602e2b6860='';
$_MMVAR_ad51f496602e2b6860=$_MMVAR_9a036496d66f59815a['id'].'_'.$_MMVAR_9a036496d66f59815a['password'];		
$_MMVAR_ad51f496602e2b6860.='_'._MMFUN_cf8c11a79575861c0c($_MMVAR_ad51f496602e2b6860._MMFUN_cccffb711bc5a3fd77());
setcookie('agent',$_MMVAR_ad51f496602e2b6860);
exit('<script>window.top.location=\'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&nc='.time().'\';</script>');
_MMFUN_6da5ed7d3a356dcac7("登陆成功，请点击确定刷新界面！","card.php?userid=".$_MMVAR_d6858a6d9e9ee80bab);
}else{
_MMFUN_6da5ed7d3a356dcac7("用户名或密码错误");	
}
?>