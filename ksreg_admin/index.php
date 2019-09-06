<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
define('WEBUI','_');
if(is_file('install/install.sql'))exit('Find install/install.sql files! If have successfully installed KSREG, Please delete the files!');
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
if(KS_SESSIONSAVEWEBDIR==1)
session_save_path(KS_SESSIONDIR);
if(ini_get('session.auto_start')==0)session_start();

$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');
$_MMVAR_060bce8bed3fe106da=_MMFUN_cc3cf510bffd973b95('furl','get','no','myinfo.php');
$_MMVAR_5ea0b7bb347d1d2d15="0";
switch ($_MMVAR_7b6896960481a4d007){
Case "chklogin":
include(KS_DIR.'/chklogin.php');
_MMFUN_a472771baa3a0a78c4();
break;
Case "adminlogin":
include(KS_DIR.'/chklogin.php');
_MMFUN_80f5728817110c711d();
break;
Case "chkagentlogin":
include(KS_DIR.'/chklogin.php');
break;
Case "logout":
include(KS_DIR.'/chklogin.php');
_MMFUN_dbb9b357afe1dd8b10();
break;
default:
}

$_MMVAR_53d17c3545aae95b9e=_MMFUN_6287f702166510a45d();
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();

if(!$_MMVAR_53d17c3545aae95b9e[0]>0){
ob_clean();
$_MMVAR_8765c84fb1de77c6ef='';
$_MMVAR_2261ec494ab5a478f2='';
$_MMVAR_66324601e5aa38a28a='';
if(isset($_GET['u'])){
$_MMVAR_8765c84fb1de77c6ef='test';
$_MMVAR_2261ec494ab5a478f2='********';
$_MMVAR_66324601e5aa38a28a='8888';
}
?>
<html>
<head>
<title>管理登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Author" content="可可-- QQ:168511175  Mail:keke#hphu.com  WebSite:http://www.hphu.com verion:<?php echo SVERION ?>" />
<script language="javascript" src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.1.3.2.pack.js"></script>
<script type="text/javascript" src="../ksreg_public/js/jquery.msgbox.js"></script>
<script type="text/javascript" src="../ksreg_public/js/jquery.dragndrop.min.js"></script>
<script>var ksreg_public_jspath="<?php echo KS_PATH_PUBLIC?>";</script>
<style>
*{margin:0;padding:0;font-size:14px;color:#338DAD}
img{border:0}
body{background:url(..<?php echo KS_PATH_PUBLIC?>/images<?php echo WEBUI?>/login_bg.jpg) repeat-x}
a{color:#066B8D}
</style>
</head>
<body>
<script language="javascript">
$(document).ready(function(){
<?php if($_MMVAR_8765c84fb1de77c6ef=='test'){
echo '$(\'#vcode\').focus();';
echo '$(\'#f1\').submit();';
echo '$.msgbox({height:120,width:250,content:{type:\'text\', content: \'正在登录，请稍候……\'}});';
}else{
echo '$(\'#username\').focus();';
}?>
<?php
if(PasswordProtect==1){
?>
$("#username").blur(function () {
$(".vimg").attr("src","..<?php echo KS_PATH_PUBLIC?>/images/PasswordProtect.php?uname="+$("#username").val()+'&rndt='+sTime()); 
}); 
$(".vimg").live("click",function(){
$(this).attr("src","..<?php echo KS_PATH_PUBLIC?>/images/PasswordProtect.php?uname="+$("#username").val()+'&rndt='+sTime());
});
<?php
}else{
?>
$(".vimg").live("click",function(){
$(this).attr("src","..<?php echo KS_PATH_PUBLIC?>/images/code.php?"+sTime())
});
<?php
}
?>
});
function chkfrom1(){
var wm="";
var errorno=0;
var t1 = $("#username").attr("value");
if (t1.length> 20 || t1.length< 3) {
wm += "用户名长度3-10个字符\r\n";
errorno = 1;
}
var p1 = $("#password").attr("value");
if(p1.length<5){
wm += "密码少于五个字符\r\n";
errorno = 1;			
}
var t1 = $("#vcode").attr("value");
if (t1.length != 4 && t1.length != 6) {
wm += "请输入正确的验证码\r\n";
errorno = 1;
}

if (errorno != 0) {
alert(wm);
return false;
}
return true;
}
function sTime(){var d,s;d = new Date();s=d.getSeconds(); return(s)}
</script>
<table align=center width="625" height="615" border="0" cellpadding="0" cellspacing="0">
<tr>
<td colspan="3" width="625" height="333" background="..<?php echo KS_PATH_PUBLIC?>/images<?php echo WEBUI?>/login_01.jpg">&nbsp;</td>
</tr>
<tr>
<td background="..<?php echo KS_PATH_PUBLIC?>/images<?php echo WEBUI?>/login_02.jpg" width="237" height="173" valign=top align=right>&nbsp;</td>
<td width="340" height="173" background="..<?php echo KS_PATH_PUBLIC?>/images<?php echo WEBUI?>/login_03.jpg" valign=top>
<form action ="index.php?action=chklogin" method=post id=f1 name=f1 onsubmit="return chkfrom1()">
<table align=center width="220" style="margin-top:20px" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align=right height=36>用户名：</td><td align=left><input value='<?php echo $_MMVAR_8765c84fb1de77c6ef?>' maxlength='20' type="text" id="username" name="username" style="width:154px;border:1px solid #338DAD;height:24px;line-height:24px"></td>
</tr>
<tr>
<td align=right height=36>密　码：</td><td align=left><input value='<?php echo $_MMVAR_2261ec494ab5a478f2?>' maxlength='20' type="password" id="password" name="password" value="" style="width:154px;border:1px solid #338DAD;height:24px;line-height:24px"></td>
</tr>
<tr>
<td align=right height=36>验证码：</td><td align=left><input maxlength='6' type="text" id="vcode" name="vcode" value="<?php echo $_MMVAR_66324601e5aa38a28a?>" style="width:154px;border:1px solid #338DAD;height:24px;line-height:24px"><span style="position:absolute;"><span style='position:relative;left:-50px;top:2px;'><img class="vimg" src="..<?php echo KS_PATH_PUBLIC?>/images/code.php" align=absmiddle></span></span></td>
</tr>
<tr>
<td colspan=2 align=center><input type=image src="..<?php echo KS_PATH_PUBLIC?>/images/login_submit.jpg"></td>
</tr>
</table></from></td>
<td background="..<?php echo KS_PATH_PUBLIC?>/images<?php echo WEBUI?>/login_04.jpg" width="48" height="173">&nbsp;</td>
</tr>
<tr>
<td colspan="3" background="..<?php echo KS_PATH_PUBLIC?>/images<?php echo WEBUI?>/login_05.jpg" width="625" height="109" valign=top>
<div  style="text-align:center;font-family: Verdana, sans-serif;text-align:center;margin-top:50px;color:#066B8D;font-size:12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;© 2008 - 2012 keke. All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo ICPNUM?></a><span style="display:none"></span></div></td>
</td>
</tr>
</table>
</body>
</html>
<?php

exit();
}

//$_MMVAR_53d17c3545aae95b9e[0]=3;
if($_MMVAR_53d17c3545aae95b9e[1]>0)$_MMVAR_060bce8bed3fe106da="myinfo.php";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>注册系统---KSREG&#8482;</title>
<script>var ksreg_public_jspath="<?php echo KS_PATH_PUBLIC?>";</script>
<script type='text/javascript' src='..<?php echo KS_PATH_PUBLIC?>/js/jquery.1.3.2.pack.js'></script>
<script type='text/javascript' src='..<?php echo KS_PATH_PUBLIC?>/js/index.js'></script>
<SCRIPT type='text/javascript' src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.msgbox.js"></SCRIPT>
<SCRIPT type='text/javascript' src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.dragndrop.min.js"></SCRIPT>
<LINK rel='stylesheet' type='text/css' href="..<?php echo KS_PATH_PUBLIC?>/index.css">
</head>
<body scroll="no" style='overflow-x:hidden;overflow-y:hidden;'>
<div align=center>
<iframe style="position:absolute;left:-200px;top:48px;width:134px;height:0" src="..<?php echo KS_PATH_PUBLIC?>/images/bg_.htm" frameborder='0' id='fbg' name='fbg' ></iframe>
<table width='1003' align=center border='0' cellpadding='0' cellspacing='0'>
<tr><td colspan='2' class='td_1'></td></tr>
<tr>
<td class='td_2' width='160'><img src='..<?php echo KS_PATH_PUBLIC?>/images/logo.jpg' /></td>
<td class='td_2'>
<div id='nave'>
<ul id='navmenu'>
<li class='snav1'><a href='index.php?action=logout' hidefocus=true>退出登录</a></li>
<li class='snav1' s='1'><a href='javascript:void(0)' hidefocus=true>注册卡模式</a>
<ul>
<li><a href='keylist_.php?action=main' box="1">注册卡列表</a></li>
<?php if(SVRID==1){
echo '<li><a href=\'keylist_.php?action=add&ext1=keys\'>添加注册卡</a></li>';
}else{
echo '<li><a href=\'keylist_.php?action=add&ext1=keys\'>添加临时注册卡</a></li>'	;						
} ?>
<li><a href='keylink.php?action=main' box="1">多开卡信息</a></li>
</ul></li>
<li class='snav1' s='1'><a href='javascript:void(0)' hidefocus=true>用户密码模式</a>
<ul>
<li><a href='keylist_.php?action=main1' box="2">用户列表</a></li>
<li><a href='keylist_.php?action=main2' box="2">未使用充值卡</a></li>
<li><a href='keylist_.php?action=main3' box="2">已使用充值卡</a></li>
<?php if(SVRID==1){
echo '<li><a href=\'keylist_.php?action=add&ext1=user\'>添加充值卡</a></li>';
echo '<li><a href=\'timelog.php?action=timelog\' box=\'2\'>充值和转绑日志</a></li>';
echo '<li><a href=\'regmfuserlog.php?action=timelog\' box=\'2\'>免费帐号日志</a></li>';
}else{
echo '<li><a href=\'keylist_.php?action=add&ext1=user\'>添加临时充值卡</a></li>';						
}?>
</ul></li>
<li class='snav1' s='1'><a href='prolist.php?action=main' hidefocus=true>软件管理</a>
<ul>
<li><a href='prolist.php?action=main'>软件列表</a></li>
<?php 
if(SVRID==1){ 
?>
<li><a href='prolist.php?action=add'>添加软件</a></li>
<?php
if(PRICESET==1){
if($_MMVAR_f797e98fe0aafeb367[0]==9)
echo '<li><a href=\'keyprice.php?action=main\' box=\'3\'>价格设置</a></li>';
}else{
echo '<li><a href=\'keyprice.php?action=main\' box=\'3\'>价格设置</a></li>';
}
if($_MMVAR_f797e98fe0aafeb367[0]==9){	
?>
<li><a href='keygroup.php?action=main'>卡类设置</a></li>
<li><a href='keygroup.php?action=main2'>扩展扣币设置</a></li>
<?php 
}
} ?>
</ul></li>
<li class='snav1' s='1'><a href='agentlist.php?action=main' hidefocus=true>代理商管理</a>
<ul>
<li><a href='agentlist.php?action=main'>代理商列表</a></li>
<?php if(SVRID==1){ ?>
<li><a href='agentlist.php?action=add'>添加代理</a></li>
<li><a href='myorder.php'>订单管理</a></li>
<?php
echo '<li><a href=..'.KS_PATH_PAY.'/card.php?userid='.$_MMVAR_53d17c3545aae95b9e[1].' target=\'_blank\'>代理登陆售卡系统</a></li>';
}
?>
</ul></li>
<li class='snav1' s='1'><a href='myinfo.php' hidefocus=true>我的信息</a>
<ul>
<li><a href='myinfo.php'>我的资料</a></li>
<?php if(SVRID==1){ ?>
<li><a href='getsign.php'>获取签名数据</a></li>
<?php
}
?>
</ul></li>
<li class='snav1' s='1'><a href='javascript:void(0);' hidefocus=true>高级管理</a>
<ul>
<li><a href="javascript:void(0)" onclick="$.msgbox({height:180,width:450,title:'清理数据',content:{type:'confirm', content: '<p align=left>确认清理系统吗？<br><br>清理系统包括：<br>1、删除三天前代理取的未付款卡<br>2、彻底从数据库中删除被标记为删除的卡或用户<br>3、更新统计数据</p>'},onClose:function(v){if(v){$('#rwin').attr('src','keylist_.php?action=clearinvaliddata');}else{}}});">清理数据</a></li>
<?php if($_MMVAR_53d17c3545aae95b9e[0]>2 && SVRID==1){?>
<li><a href='javascript:void(0)' onclick="$mbox=$.msgbox({height:120,width:700,animation:0,title:'批量加时',content:{type:'ajax', content: 'key/alladd.php'}});">批量加时</a></li>
<?php } ?>
<li><a href='query.php?action=mselect' box="3">批量处理数据</a></li>
<li><a href='exitkey.php?action=main' box="3">退卡处理</a></li>
<li><a href='report.php?action=main' box="3">查看报表</a></li>
<li><a href='logs.php?action=main' box="3">安全日志</a></li>
<!--li><a href='getinfologs.php?action=main' box="3">收集资料日志</a></li-->
</ul></li>
<?php
if($_MMVAR_f797e98fe0aafeb367[0]==9){	
?>
<li class='snav1' s='1'><a href='javascript:void(0);' hidefocus=true>超级管理</a>
<ul>
<li><a href='userlist.php'>用户管理</a></li>
<?php if(SVRID==1){ ?>
<!--li><a href='reg.php'>添加用户</a></li-->
<li><a href='sync.php?action=up_date'>整理系统</a></li>
<li><a href='spsql.php?action=main'>执行SQL命令</a></li>
<?php } ?>
<li><a href='sysset.php'>全局参数设置</a></li>
<li><a href='debug.php'>Debug数据</a></li>
<li><a href='BackupData.php?action=main'>数据库备份还原</a></li>
<li><a href='showtables.php?action=main'>数据库优化</a></li>
<li><a href='sync.php?action=main'>数据变更记录</a></li>
<?php if(SVRID==1){ ?>
<li><a href='sync.php?action=taskslog'>系统任务日志</a></li>
<li><a href='sync.php?action=unlock'>启动系统任务</a></li>
<li><a href='sync.php?action=tasksstop'>关闭系统任务</a></li>
<?php } ?>
</ul></li>
<?php
}	
?>	
<li class='s_nav3'></li>
<li class='s_nav'><a href='http://www.hphu.com/url/?p=homepage' hidefocus=true target="_blank">访问官网</a></li>
</ul>
</div>
</td>
</tr>
<tr hm="a">
<td colspan=2 align='left' class='td_3'><?php
$_MMVAR_64e9a6eac9b2450746=_MMFUN_fedad267f3bb7f4219();
$_MMVAR_e0efc4a8ef6c4e4414='<img src=..'.KS_PATH_PUBLIC.'/images/red.gif align=absmiddle/>';
if($_MMVAR_64e9a6eac9b2450746['isclose']==0 && IS2SVR==1)
$_MMVAR_e0efc4a8ef6c4e4414='<img src=..'.KS_PATH_PUBLIC.'/images/green.gif align=absmiddle/>';
echo SVRID==1?'<span id=\'taskbut\' style=\'color:#f00;font-weight:700;cursor:pointer\'>'.$_MMVAR_e0efc4a8ef6c4e4414.'主服</span>':'<span style=\'color:#f00;font-weight:700\'>备服</span>'; ?> <span id="syncarea"><div id="synclog"></div></span>&nbsp;&nbsp;<?php 
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_f797e98fe0aafeb367[1]);
$_MMVAR_e2ccf78aa7a387b62b='';
if(!empty($_MMVAR_9a036496d66f59815a))				
echo '管理员:'.$_MMVAR_9a036496d66f59815a['username'].'，&nbsp;&nbsp;&nbsp;&nbsp;';
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_53d17c3545aae95b9e[1]);
if(!empty($_MMVAR_9a036496d66f59815a)){
if($_MMVAR_9a036496d66f59815a['membertype']==1){		
echo '试用帐号:'.$_MMVAR_9a036496d66f59815a['username'].'，&nbsp;&nbsp;到期日期'._MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['endtime'],1).'，&nbsp;&nbsp;帐户卡币：<span id=\'drmb\'>'.$_MMVAR_9a036496d66f59815a['rmb'].'</span>'.$_MMVAR_e2ccf78aa7a387b62b;
}elseif($_MMVAR_9a036496d66f59815a['membertype']==2){	
echo '计币帐号:'.$_MMVAR_9a036496d66f59815a['username'].'，&nbsp;&nbsp;到期日期'._MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['endtime'],1).'，&nbsp;&nbsp;帐户卡币：<span id=\'drmb\'>'.$_MMVAR_9a036496d66f59815a['rmb'].'</span>'.$_MMVAR_e2ccf78aa7a387b62b;
}elseif($_MMVAR_9a036496d66f59815a['membertype']==3){
if($_MMVAR_9a036496d66f59815a['username']=='test'){
echo '体验帐号:'.$_MMVAR_9a036496d66f59815a['username'];
}else{
echo '计时帐号:'.$_MMVAR_9a036496d66f59815a['username'];
}		
echo '，&nbsp;&nbsp;到期日期'._MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['endtime'],1).'&nbsp;&nbsp;<span style=\'display:none\'>帐户卡币：<span id=\'drmb\'>'.$_MMVAR_9a036496d66f59815a['rmb'].'</span></span>'.$_MMVAR_e2ccf78aa7a387b62b;
}
}else{
echo '您还未登陆！';
}
?>&nbsp;&nbsp;&nbsp;&nbsp;<span id='sync'></span><iframe frameborder='0' style='width:0;height:0' id='stwin' name='stwin' src=''></iframe>&nbsp;&nbsp;&nbsp;<span style='color:#ff0000;font-weight:700'>所有带红色下划线的词，都可以通过点击该词来查看详细说明</span></td>
</tr>
</table>
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
<tr>
<td id="hvm" dis="1" class="hvm" align=center><img src=..<?php echo KS_PATH_PUBLIC?>/images/closem.jpg></td>
</tr>
</table>
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
<tr>
<td colspan=2 style='background:#F5FCFF;'><iframe allowTransparency="true" frameborder='0' style='width:100%;height:300px' id='rwin' name='rwin' src='myinfo.php'></iframe></td>
</tr>
</table>
<div style='display:none'></div>
</div>
<script>
$(document).ready(function(){
$("#taskbut").bind("click",function(){
var d=new Date();
$.getScript("sync.php?action=getstate&rand="+d.getTime());
});

$("#hvm").bind("click",function(){
var odis=$(this).attr("dis");
if(odis==1){
$("tr[hm='a']").hide();
$(this).attr("dis","0");
$(this).html("<img src=..<?php echo KS_PATH_PUBLIC?>/images/openm.jpg>");
}else{
$("tr[hm='a']").show();
$(this).attr("dis","1");
$(this).html("<img src=..<?php echo KS_PATH_PUBLIC?>/images/closem.jpg>");
}

});
});
</script>
</body>
</html>