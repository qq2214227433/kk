<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
$_MMVAR_c963786d1c5456695a=$_GET['userid'];
$_MMVAR_6978be9c6c70b7f23d='INSERT INTO `'.TNREG.'_passwordprotect` (`userid`,`sckey`,`scvalue`) VALUES ';
$_MMVAR_8671d7d04e594f4abd=substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXY'),0,10);
$_MMVAR_bf0f9d836d4de804d6=array();
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<10;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_f01f204d79d0c2b7dd=substr($_MMVAR_8671d7d04e594f4abd,$_MMVAR_8ff60a7771c3f2c087,1);
$_MMVAR_bf0f9d836d4de804d6[$_MMVAR_f01f204d79d0c2b7dd]=array();
for($_MMVAR_21a9f2323f653b8d2f=1;$_MMVAR_21a9f2323f653b8d2f<10;$_MMVAR_21a9f2323f653b8d2f++){
$_MMVAR_14b60b7ade8ea1a771=rand(100,999);
$_MMVAR_6eca839069d9b000af=$_MMVAR_f01f204d79d0c2b7dd.$_MMVAR_21a9f2323f653b8d2f;
$_MMVAR_8c5e0bb09c450c91e0=md5(MD5KEY.$_MMVAR_14b60b7ade8ea1a771);
$_MMVAR_bf0f9d836d4de804d6[$_MMVAR_f01f204d79d0c2b7dd][$_MMVAR_21a9f2323f653b8d2f]=$_MMVAR_14b60b7ade8ea1a771;
$_MMVAR_6978be9c6c70b7f23d.='('.$_MMVAR_c963786d1c5456695a.', \''.$_MMVAR_6eca839069d9b000af.'\', \''.$_MMVAR_8c5e0bb09c450c91e0.'\')';
if($_MMVAR_8ff60a7771c3f2c087==9 && $_MMVAR_21a9f2323f653b8d2f==9){
$_MMVAR_6978be9c6c70b7f23d.="";
}else{
$_MMVAR_6978be9c6c70b7f23d.=",";
}
}	
}
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('DELETE FROM `'.TNREG.'_passwordprotect` WHERE `userid` = '.$_MMVAR_c963786d1c5456695a,'sync'); 
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6978be9c6c70b7f23d,'sync'); 

$_MMVAR_3765699277ed37222c="<table border=1 width=400 height=200 cellPadding=0 cellSpacing=0 align=center>\r\n";
$_MMVAR_3765699277ed37222c.="<tr><td>&nbsp;</td><td>&nbsp;1&nbsp;</td><td>&nbsp;2&nbsp;</td><td>&nbsp;3&nbsp;</td><td>&nbsp;4&nbsp;</td><td>&nbsp;5&nbsp;</td><td>&nbsp;6&nbsp;</td><td>&nbsp;7&nbsp;</td><td>&nbsp;8&nbsp;</td><td>&nbsp;9&nbsp;</td></tr>\r\n";
foreach ($_MMVAR_bf0f9d836d4de804d6 as $_MMVAR_70502f97f422029762=>$_MMVAR_0454b3951fe446ab40) {
$_MMVAR_3765699277ed37222c.='<tr><td>'.$_MMVAR_70502f97f422029762.'</td>';
$_MMVAR_3765699277ed37222c.='<td>'.$_MMVAR_0454b3951fe446ab40[1].'</td>';
$_MMVAR_3765699277ed37222c.='<td>'.$_MMVAR_0454b3951fe446ab40[2].'</td>';
$_MMVAR_3765699277ed37222c.='<td>'.$_MMVAR_0454b3951fe446ab40[3].'</td>';
$_MMVAR_3765699277ed37222c.='<td>'.$_MMVAR_0454b3951fe446ab40[4].'</td>';
$_MMVAR_3765699277ed37222c.='<td>'.$_MMVAR_0454b3951fe446ab40[5].'</td>';
$_MMVAR_3765699277ed37222c.='<td>'.$_MMVAR_0454b3951fe446ab40[6].'</td>';
$_MMVAR_3765699277ed37222c.='<td>'.$_MMVAR_0454b3951fe446ab40[7].'</td>';
$_MMVAR_3765699277ed37222c.='<td>'.$_MMVAR_0454b3951fe446ab40[8].'</td>';
$_MMVAR_3765699277ed37222c.='<td>'.$_MMVAR_0454b3951fe446ab40[9].'</td>';
}


echo $_MMVAR_3765699277ed37222c;

?>