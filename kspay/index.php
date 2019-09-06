<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
/* 中文 */
if(is_file('install/install.sql'))exit('Find install/install.sql files! If have successfully installed KSREG, Please delete the files!');
require('../config_ksreg.php');
if(KS_SESSIONSAVEWEBDIR==1)
session_save_path(KS_SESSIONDIR);
if(ini_get('session.auto_start')==0)session_start();
require(KS_DIR.'/inc/inc.php');

_MMFUN_d68ee68ae41a1d89f0();
$_MMVAR_559c5dca20e8494aad=_MMFUN_cc3cf510bffd973b95('uid','get','int',0);
if($_MMVAR_559c5dca20e8494aad!=0)
exit('<html><head><title> 售卡系统网址变更</title><meta http-equiv=\'Content-Type\' content=\'text/html; charset=utf-8\' /><META http-equiv=refresh content=\'3;url=?userid='.$_MMVAR_559c5dca20e8494aad.'\'></head><body>售卡系统地址已更新，正在自动转向。如若长时间没打开页面<a href=\'?userid='.$_MMVAR_559c5dca20e8494aad.'\'>请点击这里</a></body></html>');


$_MMVAR_d6858a6d9e9ee80bab=_MMFUN_cc3cf510bffd973b95('userid','get','int',0);

$_MMVAR_a857d51426fee0a13a=_MMFUN_28b0167863be78793b();
$_MMVAR_53d17c3545aae95b9e=_MMFUN_6f3cdb13acde5824da($_MMVAR_a857d51426fee0a13a[0]);
$_MMVAR_f42ece220c533593f7=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_user` where `id`='.$_MMVAR_d6858a6d9e9ee80bab);
if(empty($_MMVAR_f42ece220c533593f7))
_MMFUN_6da5ed7d3a356dcac7('该作者帐号已被删除！');
if($_MMVAR_f42ece220c533593f7['islock']==1)
_MMFUN_6da5ed7d3a356dcac7('该作者帐号已被锁定！');
require('./card/head.php');

$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');
$_MMVAR_5ea0b7bb347d1d2d15="0";

switch ($_MMVAR_7b6896960481a4d007){
Case "chklogin":
ob_clean();
_MMFUN_a472771baa3a0a78c4();
break;
Case "login":		
_MMFUN_8f173abef5aa0b21f6();
break;
Case "logout":
ob_clean();		
_MMFUN_502db1c18e5cb599f3();
break;
Case "sorder":
_MMFUN_62a6fa2e8898f1680d();
break;
Case "morder":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_2333facf5ccf8bb18f();
break;
Case "sorder2":
_MMFUN_21bf2ac59156aacf81();
break;
Case "step1":
_MMFUN_97a413db6145b1e704();
break;
Case "step2":
_MMFUN_f3d218e0bc0d7482ca();
break;
Case "report":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_6c5678f2ce648e6ed3();
break;
Case "keylist0":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_1a9d13a377f6fd9e09();
break;
Case "keylist1":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_3553a0df8c771e4fb5();
break;
Case "keylist2":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_b8efc4c0c265626249();
break;
Case "keylist3":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_5a92f71b5c74d3ea83();
break;
Case "editpass":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_3186e622b3d120733b();
break;
Case "savepass":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_9d5c4e0184d872fc05();
break;
Case "saveintro":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_87e3d11323b6e06eec();
break;

Case "batch":
if($_MMVAR_53d17c3545aae95b9e[0]==0)
_MMFUN_6da5ed7d3a356dcac7("无权访问，请登陆！",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=login');
_MMFUN_c28ed738ed2a89f6e9();
break;
default:
_MMFUN_9d3dccd8d272c3e866();
break;
}

function _MMFUN_6c5678f2ce648e6ed3(){	
include('./card/report.php');
}

function _MMFUN_8f173abef5aa0b21f6(){	
include('./card/card_agentLogin.php');
}

function _MMFUN_a472771baa3a0a78c4(){	
include('./card/card_chkLogin.php');
}

function _MMFUN_502db1c18e5cb599f3(){
global $_MMVAR_d6858a6d9e9ee80bab;
setcookie('agent','0_0_0');	
exit('<script>window.top.location=\'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&nc='.time().'\';</script>');
_MMFUN_6da5ed7d3a356dcac7("你已安全退出！","card.php?userid=".$_MMVAR_d6858a6d9e9ee80bab);
}

function _MMFUN_87e3d11323b6e06eec(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_53d17c3545aae95b9e;

global $_MMVAR_8ba3d4eca95ad63bc6;
if(empty($_MMVAR_8ba3d4eca95ad63bc6))ob_clean();

if(SVRID!=1)
exit("备服数据禁止操作!");
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','post','int',0);
$_MMVAR_e23c7e328f1c3356dc=_MMFUN_cc3cf510bffd973b95('ext1','post','sql','匿名');
$_MMVAR_91d0460a0fb8c0c646=_MMFUN_cc3cf510bffd973b95('ext2','post','sql','');
$_MMVAR_0e0e5d5748acd45adc=_MMFUN_cc3cf510bffd973b95('cpassword','post','sql','');
$_MMVAR_7ca6661cda24ab3ecb=_MMFUN_cc3cf510bffd973b95('ktname','post','sql','');
$_MMVAR_d9c887456b803d668c=_MMFUN_cc3cf510bffd973b95('intro','post','sql',"无");
$_MMVAR_841058cfee62dc8fb5=_MMFUN_cc3cf510bffd973b95('int1','post','int',"0");
$_MMVAR_7cbd6da0a575ad7196=_MMFUN_cc3cf510bffd973b95('v7ext1','post','sql',"");


$_MMVAR_7de708661bef41b3bc=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.TNREG.$_MMVAR_7ca6661cda24ab3ecb.'` where id='.$_MMVAR_7ca1659d6f01cb3410);	
if(empty($_MMVAR_7de708661bef41b3bc))
exit('传递的参数错误(id)!SELECT * from `'.TNREG.$_MMVAR_7ca6661cda24ab3ecb.'` where id='.$_MMVAR_7ca1659d6f01cb3410);
if($_MMVAR_7de708661bef41b3bc['agentid']!=$_MMVAR_53d17c3545aae95b9e[0])	
exit('不是你的卡禁止修改!');	

$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.$_MMVAR_7ca6661cda24ab3ecb.'` set `cpassword`=\''.$_MMVAR_0e0e5d5748acd45adc.'\',`ext1`=\''.$_MMVAR_e23c7e328f1c3356dc.'\',`ext2`=\''.$_MMVAR_91d0460a0fb8c0c646.'\',`int1`=\''.$_MMVAR_841058cfee62dc8fb5.'\', `intro`=\''.$_MMVAR_d9c887456b803d668c.'\', `v7ext1`=\''.$_MMVAR_7cbd6da0a575ad7196.'\' where `keys`=\''.$_MMVAR_7de708661bef41b3bc['keys'].'\'','sync');

exit('ok');

}


function _MMFUN_1a9d13a377f6fd9e09(){
include('./card/card_keylist0.php');
}
function _MMFUN_3553a0df8c771e4fb5(){
include('./card/card_keylist1.php');
}
function _MMFUN_b8efc4c0c265626249(){
include('./card/card_keylist2.php');
}
function _MMFUN_5a92f71b5c74d3ea83(){
include('./card/card_keylist3.php');
}

function _MMFUN_07263153303b083813(){
include('./card/card_user.php');
}

function _MMFUN_9d3dccd8d272c3e866(){
include('./card/card_prolist.php');
}

function _MMFUN_21bf2ac59156aacf81(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab;
$_MMVAR_31a0a0e03f320411b8=_MMFUN_cc3cf510bffd973b95('orderpassword','post','int',0);
$_MMVAR_857106807c4a0c833a=_MMFUN_cc3cf510bffd973b95('ordernum','post','sql','0');
$_MMVAR_85d93eaeb1bc701990=_MMFUN_cc3cf510bffd973b95('intro','post','sql','无');	
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET intro=\''.$_MMVAR_85d93eaeb1bc701990.'\' where ordernum=\''.$_MMVAR_857106807c4a0c833a.'\' and orderpassword=\''.$_MMVAR_31a0a0e03f320411b8.'\'','notsync');
_MMFUN_6da5ed7d3a356dcac7("修改订单成功。","card.php?userid=".$_MMVAR_d6858a6d9e9ee80bab);
}


function _MMFUN_62a6fa2e8898f1680d(){
include('./card/card_sorder.php');
}	
function _MMFUN_2333facf5ccf8bb18f(){
include('./card/card_morder.php');
}

function _MMFUN_3186e622b3d120733b(){
global $_MMVAR_d6858a6d9e9ee80bab;
?>
<script>
function chkfrom1(){
var wm="";
var errorno=0;
var t1 = $("#password").attr("value");
if (t1.length> 10 || t1.length< 3) {
wm += "旧密码错误\r\n";
errorno = 1;
}
var p1 = $("#password1").attr("value");
var p2 = $("#password2").attr("value");
if(p1.length<5||p1.length>10){
wm += "新密码少于五个字符\r\n";
errorno = 1;			
}
if(p1!==p2){
wm += "两次输入的密码不一样\r\n";
errorno = 1;			
}
var t1 = $("#vcode").attr("value");
if (t1.length != 4) {
wm += "请输入正确的验证码\r\n";
errorno = 1;
}

if (errorno != 0) {
alert(wm);
return false;
}
return true;
}
</script>	
<table width="400px" border="0" cellpadding="0" class="list_tb" align="center">
<form action ="card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&action=savepass" method=post id=f1 name=f1 onsubmit="return chkfrom1()">
<tr class="tb_tip">
<td colspan="2">　　修改密码</td>
</tr>
<tr class="tb_tr1">
<td align=right>请输入旧密码</td>
<td><input maxlength='10' type="password" class="inputText" id="password" name="password" value=""><span style='position:relative;left:-35px;color:#aaa'>*必填</span></td>
</tr>
<tr class="tb_tr2">
<td align=right>新的密码</td>
<td><input maxlength='10' type="password" class="inputText" id="password1" name="password1" value=""><span style='position:relative;left:-35px;color:#aaa'>*必填</span></td>
</tr>
<tr class="tb_tr1">
<td align=right>新的密码</td>
<td><input maxlength='10' type="password" class="inputText" id="password2" name="password2" value=""><span style='position:relative;left:-35px;color:#aaa'>*必填</span></td>
</tr>
<tr class="tb_tr2">
<td align=right>验证码</td>
<td><input maxlength='4' type="text" class="vinputText" id="vcode" name="vcode" value=""><img src="..<?php echo KS_PATH_PUBLIC?>/images/code.php?<?php echo mt_rand(1000,9999)?>" align=absmiddle></td>
</tr>
<tr class="tb_tr1">
<td></td>
<td><input type='submit' name='submit1' id="submit1" value='submit' style='width:0;height:0'><img type="submit" src="..<?php echo KS_PATH_PUBLIC?>/images/submit_out.gif"> <img type="return" src="..<?php echo KS_PATH_PUBLIC?>/images/nosubmit_out.gif"> </td>
</tr>
</from>
</table>
<?php
}

function _MMFUN_9d5c4e0184d872fc05(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_53d17c3545aae95b9e;
$_MMVAR_e7e589ad638b9861d3=_MMFUN_cc3cf510bffd973b95('password','post','sql','');
$_MMVAR_21defd428ea8e766cf=_MMFUN_cc3cf510bffd973b95('password1','post','sql','');
$_MMVAR_ac3c316f8a9b9798b7=_MMFUN_cc3cf510bffd973b95('password2','post','sql','');
$_MMVAR_e7535b29e4e69b2793=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_agent where password=\''._MMFUN_cf8c11a79575861c0c($_MMVAR_e7e589ad638b9861d3).'\' and id='.$_MMVAR_53d17c3545aae95b9e[0]);

if(empty($_MMVAR_e7535b29e4e69b2793))
_MMFUN_6da5ed7d3a356dcac7('旧密码错误。');
if($_MMVAR_21defd428ea8e766cf==$_MMVAR_ac3c316f8a9b9798b7){	
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_agent SET password=\''._MMFUN_cf8c11a79575861c0c($_MMVAR_21defd428ea8e766cf).'\' where id='.$_MMVAR_53d17c3545aae95b9e[0],'sync');
_MMFUN_6da5ed7d3a356dcac7("修改密码成功！");
}
}

function _MMFUN_97a413db6145b1e704(){
include('./card/card_step1.php');
}

function _MMFUN_f3d218e0bc0d7482ca(){
include('./card/card_step2.php');
}

function _MMFUN_c28ed738ed2a89f6e9(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_53d17c3545aae95b9e,$_MMVAR_8ba3d4eca95ad63bc6;
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','','sql','');
$_MMVAR_d6858a6d9e9ee80bab=_MMFUN_cc3cf510bffd973b95('userid','','int',0);
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_a9ecec9b36cd18d921=_MMFUN_cc3cf510bffd973b95('op','get','sql','');
if($_MMVAR_8ba3d4eca95ad63bc6==false)ob_clean();
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_keys_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_135a723a975f2e33a2.'` where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\'');
if(empty($_MMVAR_9a036496d66f59815a))
exit('卡号错误');
if($_MMVAR_9a036496d66f59815a['agentid']!=$_MMVAR_53d17c3545aae95b9e[0])
exit('该卡不是您代理的!');

switch ($_MMVAR_a9ecec9b36cd18d921){
Case "jb":			
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_keys_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_135a723a975f2e33a2.'` set bdcode=\'1001\'  where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\' and bdcode<>\'1000\'','sync');
exit("ok");
break;
Case "dj":		
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_keys_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_135a723a975f2e33a2.'` set normal=2  where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\' and normal<>0 ','sync');
exit("ok");
break;
Case "jd":
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_keys_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_135a723a975f2e33a2.'` set normal=1  where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\' and normal<>0 ','sync');
exit("ok");
break;
default:
exit("参数错误");
echo "none";
}
}




$_MMVAR_aa4d8eb1db92c293d8=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_user where id='.$_MMVAR_d6858a6d9e9ee80bab);	
echo COPYRIGHT1.'<a target=blank href=tencent://message/?uin='.$_MMVAR_aa4d8eb1db92c293d8['regqq'].'&Site=buycard&Menu=yes><img border=\'0\' SRC=http://wpa.qq.com/pa?p=1:'.$_MMVAR_aa4d8eb1db92c293d8['regqq'].':1 alt=\'在线咨询\'></a>&nbsp;&nbsp;&nbsp;&nbsp;';
if(defined("PAY_COPYRIGHT")){
echo PAY_COPYRIGHT;
}else{
echo COPYRIGHT3;
}
?>
</body>
</html>