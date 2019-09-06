<?php 
	//生成日期:2011-11-11 16点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');

?>
<html>
<head>
<title>安装KSREG网络验证系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script language="javascript" src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.1.3.2.pack.js"></script>
<style>
*{margin:0;padding:0;font-size:14px;color:#333}

</style>
</head>
<body>
<?php

if(is_file('install.sql')!==true)exit('<br><br><br><br><br><p align=center>缺少安装所需的文件install.sql，可能是系统已经安装，如果你想再次全新安装，请通过FTP上传install.sql文件到install文件夹。</p></body></html>');



$_MMVAR_2c26ea7aa06ba0db7e=0;
if(isset($_GET['step']))
$_MMVAR_2c26ea7aa06ba0db7e=$_GET['step'];
if($_MMVAR_2c26ea7aa06ba0db7e==1){
_MMFUN_ad3dd04c8e723cbd60();
exit();
}elseif($_MMVAR_2c26ea7aa06ba0db7e==2){
$_MMVAR_d6eb84fc9180818db7=$_GET['rn'];
$_MMVAR_ca88e2ca19e416dd51=$_GET['rp'];
?>	
<br>
<fieldset style="width:620px;" align=center>
<legend>最后一步，安装数据库</legend><div id=div1 style="text-align:left;line-height:150%;width:580px;height:185px;padding:5px;border:0;OVERFLOW-X:auto;OVERFLOW-Y:auto;">
<script language="javascript">
var e=document.getElementById("div1") ; var gd=1;function sc() {if(gd==1)e.scrollTop=e.scrollHeight; } var s=setInterval("sc()",50);</script>
<?php
echo '<!--  '.str_repeat(' ',8192).' -->';
if(SVRID==1){
$_MMVAR_9f95914834184aeeae = mysql_connect(MYSQL1HostNameOrIp,MYSQL1UserName,MYSQL1Password);
mysql_select_db(MYSQL1DataBaseName,$_MMVAR_9f95914834184aeeae);
}else{
$_MMVAR_9f95914834184aeeae = mysql_connect(MYSQL2HostNameOrIp,MYSQL2UserName,MYSQL2Password);
mysql_select_db(MYSQL2DataBaseName,$_MMVAR_9f95914834184aeeae);
}
$_MMVAR_9f696e4d4bbbbe4ce9=file_get_contents('install.sql');
$_MMVAR_9f696e4d4bbbbe4ce9=str_replace("\r","",$_MMVAR_9f696e4d4bbbbe4ce9);
$_MMVAR_9f696e4d4bbbbe4ce9=str_replace("\n","",$_MMVAR_9f696e4d4bbbbe4ce9);
$_MMVAR_523d1aba54acc20470=explode(';', $_MMVAR_9f696e4d4bbbbe4ce9);
foreach($_MMVAR_523d1aba54acc20470 as $_MMVAR_6acb770a66d220e25e){
$_MMVAR_510ba85d0c08c74283=mysql_query($_MMVAR_6acb770a66d220e25e,$_MMVAR_9f95914834184aeeae);
if(empty($_MMVAR_510ba85d0c08c74283)){
echo '<span style=\'color:red\'>no->'.$_MMVAR_6acb770a66d220e25e.'</span><br>';
exit('导入数据库出错，请联系可可--');
}else{
echo 'ok->'.$_MMVAR_6acb770a66d220e25e.'<br>';
ob_flush();       
flush();
}  
}

$_MMVAR_510ba85d0c08c74283=mysql_query('UPDATE `'.TNREG.'_user` SET `username`=\''.$_MMVAR_d6eb84fc9180818db7.'\',`password` = \''.$_MMVAR_ca88e2ca19e416dd51.'\' WHERE `id` =10000',$_MMVAR_9f95914834184aeeae); 
if(empty($_MMVAR_510ba85d0c08c74283)){
echo '<span style=\'color:red\'>no->'.$_MMVAR_6acb770a66d220e25e.'</span><br>';
exit('设置管理员用户名和密码出错，请联系可可--');
}else{
echo 'ok->'.$_MMVAR_6acb770a66d220e25e.'<br>';
ob_flush();       
flush();
}  


mysql_close($_MMVAR_9f95914834184aeeae);
unlink('install.sql');
echo '<div></fieldset><script language=\'javascript\'>function sgd(){gd=0;}setTimeout(\'sgd()\', \'1000\');</script>';
if(is_file('install.sql'))echo('<br><br><p align=center style=\'font-color:#ff0;font-size:14px;font-weight:700\'>危险警告：请手动登录FTP删除install文件夹。</p><br><br>');
exit('<br><br><br><p align=center><a href=../index.php>安装完成，点击登陆系统</a></p></body></html>');
}

function _MMFUN_ad3dd04c8e723cbd60(){
?>	
<br><br><br><br>
<fieldset style="width:620px;" align=center>
<legend>配置config_ksreg.php文件</legend>
<?php
$_MMVAR_ced55faeb78eb02c0c=$_POST['SUPERPASSWORD'];
$_MMVAR_4d2cd7493a78f46e80=$_POST['MYSQL1HostNameOrIp'];
$_MMVAR_dd3561d7d6b08f9518=$_POST['MYSQL2HostNameOrIp'];
$_MMVAR_a0d1a01570d2052786=$_POST['MYSQL1UserName'];
$_MMVAR_ecddeeb1f96a2d8933=$_POST['MYSQL2UserName'];
$_MMVAR_c13038a4db40a570c7=$_POST['MYSQL1Password'];
$_MMVAR_3c82437c061576f2c9=$_POST['MYSQL2Password'];
$_MMVAR_dc18e292f400569206=$_POST['MYSQL1DataBaseName'];
$_MMVAR_7b86abfb025095eed8=$_POST['MYSQL2DataBaseName'];
$_MMVAR_6bf0b5de061900f4d8=$_POST['ROOTUSER'];
$_MMVAR_3d8900eaa0e9777d35=$_POST['IS2SVR'];
$_MMVAR_d63d7149230c818f92=$_POST['PASSWORD'];
$_MMVAR_c108edf27cd86437c4=$_POST['SVRID'];

$_MMVAR_588b885bb075d1c25c=$_POST['SAVELOGTIME'];
$_MMVAR_31dcfb0b6b857b9523=$_POST['DELKEYTIME'];
$_MMVAR_eb5adda3e7cb25c861=$_POST['AUTODELKEYTIME'];
$_MMVAR_81bbe9b75f2989fb85=$_POST['RECHARGELOGTIME'];
$_MMVAR_4b21ce030152e2974f=$_POST['KS_PATH_PAY'];
$_MMVAR_5d7edd1877273b7bd1=$_POST['KS_PATH'];

echo '<!--'.str_repeat('1',8192).'-->';
ob_flush();       
flush();
if(is_file('install.sql')!==true)exit('数据库文件install.sql未找到,请上传install.sql文件。<br><br><p align=center><a href=\'javascript:history.go(-1);\'>点这里返回上一步重新操作</a></p></fieldset></body></html>');
if($_MMVAR_3d8900eaa0e9777d35==1){
if(ini_get('allow_url_fopen')!=1)
exit('[php.ini] 检测到allow_url_fopen关闭状态，双服需要allow_url_fopen开启');
if($_MMVAR_c108edf27cd86437c4==1){
echo '<!--'.str_repeat('1',8192).'--><p>开始连接主服数据库……</p>';
ob_flush();       
flush();
$_MMVAR_147f8dcb0740ac83a0=_MMFUN_5bf03da8c6cb5f450d($_MMVAR_4d2cd7493a78f46e80,$_MMVAR_a0d1a01570d2052786,$_MMVAR_c13038a4db40a570c7,$_MMVAR_dc18e292f400569206);
if($_MMVAR_147f8dcb0740ac83a0!='22'){
if($_MMVAR_147f8dcb0740ac83a0=='11')
exit('连接主服数据库服务器失败。<br><br><p align=center><a href=\'javascript:history.go(-1);\'>重新配置</a></p></fieldset></body></html>');
if($_MMVAR_147f8dcb0740ac83a0=='21')
exit('连接主服数据库服务器成功，但是未找到相应数据库。<br><br><p align=center><a href=\'javascript:history.go(-1);\'>重新配置</a></p></fieldset></body></html>');
}else{
echo '连接主服数据库成功！';
}
echo '<!--'.str_repeat('1',8192).'--><p>开始连接备服数据库……</p>';
ob_flush();       
flush();
$_MMVAR_a5632cfa82fd57cf77=_MMFUN_5bf03da8c6cb5f450d($_MMVAR_dd3561d7d6b08f9518,$_MMVAR_ecddeeb1f96a2d8933,$_MMVAR_3c82437c061576f2c9,$_MMVAR_7b86abfb025095eed8);
if($_MMVAR_a5632cfa82fd57cf77!='22'){
if($_MMVAR_a5632cfa82fd57cf77=='11')
exit('连接备服数据库服务器失败。<br><br><p align=center><a href=\'javascript:history.go(-1);\'>重新配置</a></p></fieldset></body></html>');
if($_MMVAR_a5632cfa82fd57cf77=='21')
exit('连接备服数据库服务器成功，但是未找到相应数据库。<br><br><p align=center><a href=\'javascript:history.go(-1);\'>重新配置</a></p></fieldset></body></html>');
}else{
echo '<!--'.str_repeat('1',8192).'-->';
ob_flush();       
flush();
echo '连接备服数据库成功！';
}
}else{
echo '<!--'.str_repeat('1',8192).'--><p>开始连接主服数据库……</p>';
ob_flush();       
flush();
$_MMVAR_a5632cfa82fd57cf77=_MMFUN_5bf03da8c6cb5f450d($_MMVAR_dd3561d7d6b08f9518,$_MMVAR_ecddeeb1f96a2d8933,$_MMVAR_3c82437c061576f2c9,$_MMVAR_7b86abfb025095eed8);
if($_MMVAR_a5632cfa82fd57cf77!='22'){
if($_MMVAR_a5632cfa82fd57cf77=='11')
exit('连接备服数据库服务器失败。<br><br><p align=center><a href=\'javascript:history.go(-1);\'>重新配置</a></p></fieldset></body></html>');
if($_MMVAR_a5632cfa82fd57cf77=='21')
exit('连接备服数据库服务器成功，但是未找到相应数据库。<br><br><p align=center><a href=\'javascript:history.go(-1);\'>重新配置</a></p></fieldset></body></html>');
}else{
echo '连接备服数据库成功！';
echo '<!--'.str_repeat('1',8192).'-->';
ob_flush();       
flush();
}		
}
}else{
$_MMVAR_c108edf27cd86437c4=1;
$_MMVAR_dd3561d7d6b08f9518='******';
$_MMVAR_ecddeeb1f96a2d8933='******';
$_MMVAR_3c82437c061576f2c9='******';
$_MMVAR_7b86abfb025095eed8='******';
$_MMVAR_147f8dcb0740ac83a0=_MMFUN_5bf03da8c6cb5f450d($_MMVAR_4d2cd7493a78f46e80,$_MMVAR_a0d1a01570d2052786,$_MMVAR_c13038a4db40a570c7,$_MMVAR_dc18e292f400569206);
if($_MMVAR_147f8dcb0740ac83a0!='22'){
if($_MMVAR_147f8dcb0740ac83a0=='11')
exit('连接主服数据库服务器失败。<br><br><p align=center><a href=\'javascript:history.go(-1);\'>重新配置</a></p></fieldset></body></html>');
if($_MMVAR_147f8dcb0740ac83a0=='21')
exit('连接主服数据库服务器成功，但是未找到相应数据库。<br><br><p align=center><a href=\'javascript:history.go(-1);\'>重新配置</a></p></fieldset></body></html>');
}else{
echo '连接主服数据库成功！';
echo '<!--'.str_repeat('1',8192).'-->';
ob_flush();       
flush();
}	
}

$_MMVAR_5be6c8e4ba88db25c3=file_get_contents("../config_ksreg.php");
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'SUPERPASSWORD',md5($_MMVAR_ced55faeb78eb02c0c));
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'MYSQL1HostNameOrIp',$_MMVAR_4d2cd7493a78f46e80);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'MYSQL1UserName',$_MMVAR_a0d1a01570d2052786);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'MYSQL1Password',$_MMVAR_c13038a4db40a570c7);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'MYSQL1DataBaseName',$_MMVAR_dc18e292f400569206);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'MYSQL2HostNameOrIp',$_MMVAR_dd3561d7d6b08f9518);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'MYSQL2UserName',$_MMVAR_ecddeeb1f96a2d8933);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'MYSQL2Password',$_MMVAR_3c82437c061576f2c9);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'MYSQL2DataBaseName',$_MMVAR_7b86abfb025095eed8);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'ROOTUSER',$_MMVAR_6bf0b5de061900f4d8);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'IS2SVR',$_MMVAR_3d8900eaa0e9777d35);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'SVRID',$_MMVAR_c108edf27cd86437c4);

$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'SAVELOGDIME',$_MMVAR_588b885bb075d1c25c);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'DELKEYTIME',$_MMVAR_31dcfb0b6b857b9523);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'AUTODELKEYTIME',$_MMVAR_eb5adda3e7cb25c861);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'RECHARGELOGTIME',$_MMVAR_81bbe9b75f2989fb85);

$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'KS_PATH_PAY','/'.$_MMVAR_4b21ce030152e2974f);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'KS_PATH','/'.$_MMVAR_5d7edd1877273b7bd1);


$_MMVAR_5be6c8e4ba88db25c3=file_put_contents("../config_ksreg.php",$_MMVAR_5be6c8e4ba88db25c3);

exit('<br>配置文件更新成功！<br><br><p id=\'sh\' style=\'display:none\' align=center>请稍候片刻……</p><p align=center id=\'hhd\'><form action=?step=2&rn='.$_MMVAR_6bf0b5de061900f4d8.'&rp='.md5(MD5KEY.chr(102).chr(104).chr(117).chr(111).chr(121).chr(117).chr(110).$_MMVAR_d63d7149230c818f92).' method=post id=f2 name=f2><input type=submit value=\'下一步\'  onclick='.YH.'$(\'#hhd\').hide();$(\'#sh\').show();'.YH.'></from></p></fieldset></body></html>');



}
function _MMFUN_5bf03da8c6cb5f450d($_MMVAR_a68c41bd0ae0e8ec59,$_MMVAR_4649ce9d7f752e00e0,$_MMVAR_050fdb56422d02ffca,$_MMVAR_5c17f222f60bf1209f){
$_MMVAR_9f95914834184aeeae = mysql_connect($_MMVAR_a68c41bd0ae0e8ec59, $_MMVAR_4649ce9d7f752e00e0, $_MMVAR_050fdb56422d02ffca);
if($_MMVAR_9f95914834184aeeae==false)
return '11';
$_MMVAR_054f529ae5114e52a3=mysql_select_db($_MMVAR_5c17f222f60bf1209f,$_MMVAR_9f95914834184aeeae);
if($_MMVAR_054f529ae5114e52a3==false)
return '21';
mysql_close();
return '22';

}
function _MMFUN_edb86dbb4323344740($_MMVAR_050fdb56422d02ffca,$_MMVAR_7be1c2a87120a791f2,$_MMVAR_eeae5438e6bcefcdba){
return preg_replace('/define\(\''.$_MMVAR_7be1c2a87120a791f2.'\',\'[^\']*\'\)/i','define(\''.$_MMVAR_7be1c2a87120a791f2.'\',\''.$_MMVAR_eeae5438e6bcefcdba.'\')', $_MMVAR_050fdb56422d02ffca); 
} 
function _MMFUN_49a8c661f04d31dedb($_MMVAR_050fdb56422d02ffca,$_MMVAR_7be1c2a87120a791f2,$_MMVAR_eeae5438e6bcefcdba){
return preg_replace('/define\(\''.$_MMVAR_7be1c2a87120a791f2.'\',[^\)]*\)/i','define(\''.$_MMVAR_7be1c2a87120a791f2.'\','.$_MMVAR_eeae5438e6bcefcdba.')', $_MMVAR_050fdb56422d02ffca); 
} 

function _MMFUN_68cb3e143bf09daf01(){
echo 'fopen http检测开始<br>';

//function_exists('abc');

}
?>
<br><br><br><br>
<fieldset style="width:620px;" align=center>
<legend>全新安装配置</legend>

<form action ="index.php?step=1" method=post id=f1 name=f1 onsubmit="return chkfrom1()">
<table align=center width="800" style="margin-top:20px" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align=right height=36>管理员帐号：</td><td align=left colspan=3><input value='' maxlength='20' type="text" id="ROOTUSER" name="ROOTUSER"></td>
</tr>
<tr>
<td align=right height=36>管理员密码：</td><td align=left colspan=3><input value='' maxlength='20' type="text" id="PASSWORD" name="PASSWORD" value=""></td>
</tr>
<tr>
<td align=right height=36 style="color:#f00">超级密码：</td><td align=left colspan=3><input value='' maxlength='20' type="text" id="SUPERPASSWORD" name="SUPERPASSWORD"></td>
</tr>
<tr style="display:none">
<td align=right height=36>管理文件夹名：</td><td align=left colspan=3><input value='ksreg_admin' maxlength='20' type="text" id="KS_PATH" name="KS_PATH"></td>
</tr>
<tr style="display:none">
<td align=right height=36>售卡系统文件夹名：</td><td align=left colspan=3><input value='kspay' maxlength='20' type="text" id="KS_PATH_PAY" name="KS_PATH_PAY"></td>
</tr>
<tr style="display:none">
<td align=right height=36>自动删除多少天前的安全日志：</td><td align=left colspan=3>
<select name="SAVELOGTIME" id="SAVELOGTIME" style="width:207px;height:22px">						
<option value='1' >1天</option>						
<option value='2' selected>2天(推荐)</option>						
<option value='3'>3天</option>						
<option value='4'>4天</option>						
<option value='5'>5天</option>						
<option value='6'>6天</option>						
<option value='7'>7天</option>
</select></td>
</tr>
<tr style="display:none">
<td align=right height=36>自动删除多少天前被标记为删除的卡：</td><td align=left colspan=3>
<select name="DELKEYTIME" id="DELKEYTIME" style="width:207px;height:22px">						
<option value='7' selected>7天(推荐)</option>						
<option value='15'>15天</option>						
<option value='30'>30天</option>						
<option value='90'>90天</option>						
<option value='365'>365天</option>	
</select></td>
</tr>
<tr style="display:none">
<td align=right height=36>自动删除多少天前过期的卡：</td><td align=left colspan=3>
<select name="AUTODELKEYTIME" id="AUTODELKEYTIME" style="width:207px;height:22px">				
<option value='60'>60天(推荐)</option>						
<option value='90'>90天</option>						
<option value='120'>120天</option>						
<option value='365' selected>365天</option>	
</select></td>
</tr>
<tr style="display:none">
<td align=right height=36>自动删除多少天前的充值日志：</td><td align=left colspan=3>
<select name="RECHARGELOGTIME" id="RECHARGELOGTIME" style="width:207px;height:22px">					
<option value='120'>120天(推荐)</option>					
<option value='180'>180天</option>				
<option value='365' selected>365天</option>
</select></td>
</tr>
<tr>
<td align=right height=36>是否有两个验证服务器：</td><td align=left colspan=3>
<select name="IS2SVR" id="IS2SVR" style="width:207px;height:22px">						
<option value='0'>我只有一个验证服务器</option>						
<option value='1'>我有两个验证服务器</option>
</select></td>
</tr>
<tr c=1 style="display:none">
<td align=right height=36>当前是哪一个服务器：</td><td align=left colspan=3>
<select name="SVRID" id="SVRID" style="width:207px;height:22px">						
<option value='1'>当前安装的是主服</option>						
<option value='2'>当前安装的是备服</option>
</select></td>
</tr>
<tr>
<td align=right height=36>主服数据库IP地址：</td><td align=left><input value='localhost' maxlength='60' type="text" id="MYSQL1HostNameOrIp" name="MYSQL1HostNameOrIp" value=""></td>

<td align=right height=36 b=1 style="visibility:hidden">备服数据库IP地址：</td><td align=left b=1 style="visibility:hidden"><input value='' maxlength='60' type="text" id="MYSQL2HostNameOrIp" name="MYSQL2HostNameOrIp" value=""></td>
</tr>
<tr>
<td align=right height=36>主服数据库用户名：</td><td align=left><input value='' maxlength='20' type="text" id="MYSQL1UserName" name="MYSQL1UserName" value=""></td>

<td align=right height=36 b=1 style="visibility:hidden">备服数据库用户名：</td><td align=left b=1 style="visibility:hidden"><input value='' maxlength='20' type="text" id="MYSQL2UserName" name="MYSQL2UserName" value=""></td>
</tr>
<tr>
<td align=right height=36>主服数据库密码：</td><td align=left><input value='' maxlength='20' type="password" id="MYSQL1Password" name="MYSQL1Password" value=""></td>

<td align=right height=36 b=1 style="visibility:hidden">备服数据库密码：</td><td align=left b=1 style="visibility:hidden"><input value='' maxlength='20' type="password" id="MYSQL2Password" name="MYSQL2Password" value=""></td>
</tr>
<tr>
<td align=right height=36>主服数据库名：</td><td align=left><input value='' maxlength='20' type="text" id="MYSQL1DataBaseName" name="MYSQL1DataBaseName" value=""></td>

<td align=right height=36 b=1 style="visibility:hidden">备服数据库名：</td><td align=left b=1 style="visibility:hidden"><input value='' maxlength='20' type="text" id="MYSQL2DataBaseName" name="MYSQL2DataBaseName" value=""></td>
</tr>
<tr>
<td colspan=4 align=center>主备两个服务器的数据库请先自行创建好。</td>
</tr>
<tr>
<td colspan=4 align=center><input type=submit value="下一步"></td>
</tr>
</table></from>
</fieldset><br><br>
<script>
$(document).ready(function(){
$("#IS2SVR").change(function(){
if(this.value==0){
$("td[b=1]").css('visibility','hidden');
$("tr[c=1]").hide();
}else{
$("td[b=1]").css('visibility','visible');
$("tr[c=1]").show();
}
});
});
</script>
</body>
</html>