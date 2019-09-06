<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
switch ($_MMVAR_7b6896960481a4d007){
Case "regsave2":
_MMFUN_26bf67f81bb6cf577d();
break;
Case "regn":
_MMFUN_e648e22ab1d6d281a5();
break;
default:
_MMFUN_e648e22ab1d6d281a5();
}


function _MMFUN_e648e22ab1d6d281a5(){
_MMFUN_d68ee68ae41a1d89f0();
?>
<script>
function chkfrom1(){
var wm="";
var errorno=0;
var t1 = $("#username").attr("value");
if (t1.length> 10 || t1.length< 3) {
wm += "用户名长度3-10个字符\r\n";
errorno = 1;
}
var t1 = $("#regqq").attr("value");
if (t1.length> 20 || t1.length< 5) {
wm += "用户QQ长度5-11个字符\r\n";
errorno = 1;
}
var p1 = $("#password1").attr("value");
var p2 = $("#password2").attr("value");
if(p1!=p2 || p1.length<5){
wm += "两次输入的密码不一样，或密码少于五个字符\r\n";
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
<form action ="?action=regsave2" method=post id=f1 name=f1 onsubmit="return chkfrom1()">
<tr class="tb_tip">
<td colspan="2">　　添加作者帐号</td>
</tr>
<tr class="tb_tr1">
<td align=right>用户名</td>
<td><input maxlength='10' type="text" class="inputText" id="username" name="username" value=""><span style='position:relative;left:2px;color:#aaa'>*由a-z,A-Z,0-9字符</span></td>
</tr>
<tr class="tb_tr1">
<td align=right>用户密码</td>
<td><input maxlength='20' type="password" class="inputText" id="password1" name="password1" value=""><span style='position:relative;left:2px;color:#aaa'>*</span></td>
</tr>
<tr class="tb_tr1">
<td align=right>确认密码</td>
<td><input maxlength='20' type="password" class="inputText" id="password2" name="password2" value=""><span style='position:relative;left:2px;color:#aaa'>*</span></td>
</tr>
<tr class="tb_tr1">
<td align=right>用户QQ</td>
<td><input maxlength='11' type="text" class="inputText" id="regqq" name="regqq" value=""><span style='position:relative;left:2px;color:#aaa'>*数字</span></td>
</tr>
<tr class="tb_tr1">
<td></td>
<td><input type='submit' name='submit1' id="submit1" value='submit' style='width:0;height:0'><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif"> <img type="return" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/nosubmit_out.gif"> </td>
</tr>
</from>
</table>
<?php
}


function _MMFUN_26bf67f81bb6cf577d(){
global $_MMVAR_9f95914834184aeeae;	
_MMFUN_d68ee68ae41a1d89f0();
$_MMVAR_6a6b5ab96d7a7da64f=_MMFUN_cc3cf510bffd973b95('username','post','sql');
$_MMVAR_21defd428ea8e766cf=_MMFUN_cc3cf510bffd973b95('password1','post','sql');
$_MMVAR_ac3c316f8a9b9798b7=_MMFUN_cc3cf510bffd973b95('password2','post','sql');
$_MMVAR_7fa63148f442396b5e=_MMFUN_cc3cf510bffd973b95('regqq','post','int');
$_MMVAR_1bb3b551860658ae3b=_MMFUN_cc3cf510bffd973b95('vcode','post','int');



if(!preg_match("/^[a-zA-Z0-9]+$/",$_MMVAR_6a6b5ab96d7a7da64f))
_MMFUN_6da5ed7d3a356dcac7('用户名只能由a-z,A-Z,0-9字符组成');


if(strlen($_MMVAR_6a6b5ab96d7a7da64f)<3||strlen($_MMVAR_6a6b5ab96d7a7da64f)>10)
_MMFUN_6da5ed7d3a356dcac7("用户名长度3-10个字符");


if(strlen($_MMVAR_7fa63148f442396b5e)<5||strlen($_MMVAR_7fa63148f442396b5e)>11)
_MMFUN_6da5ed7d3a356dcac7("用户QQ长度5-11个字符,并且只能填数字");

if($_MMVAR_21defd428ea8e766cf!=$_MMVAR_ac3c316f8a9b9798b7)
_MMFUN_6da5ed7d3a356dcac7("两次输入的密码不一样");

$_MMVAR_716e2de54df8df7a40=$_MMVAR_6a6b5ab96d7a7da64f;

$_MMVAR_59a0f17735c2ba1f14=$_MMVAR_9f95914834184aeeae->_MMFUN_b7d71b457d63cce936('select * from `'.TNREG.'_user` where username=\''.$_MMVAR_716e2de54df8df7a40.'\' or regqq='.$_MMVAR_7fa63148f442396b5e);
if(!empty($_MMVAR_59a0f17735c2ba1f14))
_MMFUN_6da5ed7d3a356dcac7("注册失败，用户名或注册QQ已存在");	

$_MMVAR_4334f141fd65ec8fcc=array(
'username'=>$_MMVAR_6a6b5ab96d7a7da64f,
'password'=>_MMFUN_cf8c11a79575861c0c($_MMVAR_21defd428ea8e766cf),
'regqq'=>$_MMVAR_7fa63148f442396b5e,
'regtime'=>time(),
'endtime'=>time()+31622400,
'rmb'=>999999,
'membertype'=>3,
'vipkeynums'=>3000,
'alitype'=>'create_direct_pay_by_user',
'aliid'=>'16位的数字ID',
'alikey'=>'alikey',
'alimail'=>'这里填你的支付宝帐号',
'orderpayinfo'=>'0',
'islock'=>0
);
$_MMVAR_84658532b0d797c52d=$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_user', $_MMVAR_4334f141fd65ec8fcc,'sync');
if($_MMVAR_84658532b0d797c52d){	
include(KS_DIR.'/inc/add_table_mfkey.php');
$_MMVAR_61a3ad9505d0bea3fa=_MMFUN_0ddfd0448eb857b2bd($_MMVAR_84658532b0d797c52d,$_MMVAR_84658532b0d797c52d.'01','keys');
_MMFUN_c871af7703ca85749e($_MMVAR_84658532b0d797c52d,$_MMVAR_61a3ad9505d0bea3fa,'keys');
_MMFUN_cd157ac313b1eb1202($_MMVAR_84658532b0d797c52d,$_MMVAR_61a3ad9505d0bea3fa,'keys');
$_MMVAR_61a3ad9505d0bea3fa=_MMFUN_0ddfd0448eb857b2bd($_MMVAR_84658532b0d797c52d,$_MMVAR_84658532b0d797c52d.'02','user');
_MMFUN_c871af7703ca85749e($_MMVAR_84658532b0d797c52d,$_MMVAR_61a3ad9505d0bea3fa,'user');
_MMFUN_cd157ac313b1eb1202($_MMVAR_84658532b0d797c52d,$_MMVAR_61a3ad9505d0bea3fa,'user');
_MMFUN_6da5ed7d3a356dcac7("添加新用户成功！");
}else{
_MMFUN_6da5ed7d3a356dcac7("添加新用失败".$_MMVAR_9f95914834184aeeae->error);
}
}
echo COPYRIGHT;
?>

</body>
</html>