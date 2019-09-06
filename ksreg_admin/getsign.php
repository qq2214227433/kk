<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

$_MMVAR_5175c641a64e81c1c0=array();
$_MMVAR_2b5aa9d813af66f212=array();
$_MMVAR_59f1cb7f4e54336e53='';
if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
_MMFUN_eda1522f568dd11d05();

function _MMFUN_eda1522f568dd11d05(){
global $_MMVAR_59f1cb7f4e54336e53;
$_MMVAR_5643dca0e59706fc49=array();
$_MMVAR_2fe10313919cfdf0d7=array();
$_MMVAR_26e32e3a529c693201="";
$_MMVAR_d7aed629a7fbbb9a99="";
$_MMVAR_8e47823876210f2e4b=time();
$_MMVAR_47a45a9b9a000bbcf6=file('..'.KS_PATH_PUBLIC.'/signdata/'.rand(1,SIGNFILENUMS).'.php');
//$_MMVAR_47a45a9b9a000bbcf6=file('..'.KS_PATH_PUBLIC.'/signdata/1.php');	
$_MMVAR_c9a811fbf1c9d04ebe=file('..'.KS_PATH_PUBLIC.'/signdata/_'.rand(1,SIGNFILENUMS).'.php');	
echo '<table width=\'980\' style=\'border:0\' border=\'0\' cellpadding=\'0\' align=\'center\'>';
echo '<tr><td style=\'line-height:30px\'><b>以下为原始DLL的签名数据(<font color=red>V7.8的 VC VB 易语言用这里的</font>)</b></td></tr>'."\n";	
echo '<tr><td><textarea scroll=\'no\' id=\'arraycode\' style=\'width:980px;height:50px;overflow-x:hidden;overflow-y:hidden;\'>'."\n";
echo 'signData='.chr(34).trim($_MMVAR_c9a811fbf1c9d04ebe[rand(1,100)]).chr(34);
echo '</textarea></td></tr>';
echo '<tr><td style=\'line-height:30px\'><b>以下为易语言模块签名数据（易的V7.5和之前版本用这个）</b></td></tr>'."\n";	
echo '<tr><td><textarea scroll=\'no\' id=\'arraycode2\' style=\'width:980px;height:50px;overflow-x:hidden;overflow-y:hidden;\'>'."\n";
echo '签名数据 ＝“'.trim($_MMVAR_47a45a9b9a000bbcf6[rand(1,100)]).'”';
echo '</textarea></td></tr>';
echo '<tr><td style=\'line-height:30px\'><b>以下为DELPHI 变种签名数据（DLL）</b></td></tr>'."\n";	
echo '<tr><td><textarea scroll=\'no\' id=\'arraycode2\' style=\'width:980px;height:50px;overflow-x:hidden;overflow-y:hidden;\'>'."\n";
$_MMVAR_59f1cb7f4e54336e53=trim($_MMVAR_c9a811fbf1c9d04ebe[rand(1,100)]);
$_MMVAR_3f73099b3213774ca9=$_MMVAR_59f1cb7f4e54336e53;
_MMFUN_3ce601c1441e059c6f();
echo '</textarea></td></tr>';
echo '<tr><td style=\'line-height:30px\'><b>以下为VB 变种签名数据（VB的V7.5和之前版本用这个）</b></td></tr>'."\n";	
echo '<tr><td><textarea scroll=\'no\' id=\'arraycode2\' style=\'width:980px;height:50px;overflow-x:hidden;overflow-y:hidden;\'>'."\n";
$_MMVAR_59f1cb7f4e54336e53=$_MMVAR_3f73099b3213774ca9;
_MMFUN_c00c53a0df4ccf94f3();
echo '</textarea></td></tr>';
echo '<tr><td style=\'line-height:30px\'><b>以下为按键 变种签名数据（DLL）</b></td></tr>'."\n";	
echo '<tr><td><textarea scroll=\'no\' id=\'arraycode2\' style=\'width:980px;height:50px;overflow-x:hidden;overflow-y:hidden;\'>'."\n";
$_MMVAR_59f1cb7f4e54336e53=$_MMVAR_3f73099b3213774ca9;
_MMFUN_384682324b72d18596();
echo '</textarea></td></tr>';
echo '<tr><td style=\'line-height:30px\'><b>以下为按键9 KS.qml源文件含签名数据（DLL）</b></td></tr>'."\n";	
echo '<tr><td><textarea scroll=\'no\' id=\'arraycode2\' style=\'width:980px;height:50px;overflow-x:hidden;overflow-y:hidden;\'>'."\n";
$_MMVAR_59f1cb7f4e54336e53=$_MMVAR_3f73099b3213774ca9;
_MMFUN_ea98806b5a309d3295();
echo '</textarea></td></tr></table>';
echo '<script>$(document).ready(function(){$(\'textarea\').bind(\'mousedown\',function(){if(window.clipboardData.setData(\'text\',this.innerText)){$.msgbox({width:300,height:120,content:{type:\'信息提示\', content:\'签名数据已复制到剪贴板！\'},autoClose:2});}});});</script>';
}

function _MMFUN_c00c53a0df4ccf94f3(){
global $_MMVAR_59f1cb7f4e54336e53,$_MMVAR_5175c641a64e81c1c0,$_MMVAR_2b5aa9d813af66f212;
$_MMVAR_59f1cb7f4e54336e53=str_replace('qq8511175','',$_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_59f1cb7f4e54336e53=str_replace('O','',$_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_59f1cb7f4e54336e53=strtoupper($_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_e56cc4395d5e5640fa=strlen($_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_a75ae33dc6ebaf4f4b='';
$_MMVAR_e7981886e30ec7678f='';
$_MMVAR_2379ea6cf9c59d0c4b=mt_rand(10,20);
$_MMVAR_5175c641a64e81c1c0=array();
$_MMVAR_2b5aa9d813af66f212=array();
$_MMVAR_5d5af5e6b49935d731=array();
$_MMVAR_d826eb68b9e10d32e5=array();
$_MMVAR_892872c0d6d62f8a0b=str_shuffle("12345678ABC");
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<9;$_MMVAR_8ff60a7771c3f2c087++){
if($_MMVAR_8ff60a7771c3f2c087<5)
$_MMVAR_5175c641a64e81c1c0[]=_MMFUN_d24c95fab5ceeaf63c();	
$_MMVAR_2b5aa9d813af66f212[]=_MMFUN_d24c95fab5ceeaf63c();	
$_MMVAR_d826eb68b9e10d32e5[]=_MMFUN_122a63233da5d8743c($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_2379ea6cf9c59d0c4b,$_MMVAR_2b5aa9d813af66f212,$_MMVAR_8ff60a7771c3f2c087);
//echo $_MMVAR_d826eb68b9e10d32e5[$_MMVAR_8ff60a7771c3f2c087-1];
}
//echo "<br>";
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<$_MMVAR_e56cc4395d5e5640fa+1;$_MMVAR_8ff60a7771c3f2c087++){
if($_MMVAR_8ff60a7771c3f2c087 % 240 === 1)
$_MMVAR_e7981886e30ec7678f='	'.$_MMVAR_5175c641a64e81c1c0[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)]."=Array(";
$_MMVAR_e7981886e30ec7678f.=$_MMVAR_a75ae33dc6ebaf4f4b.(ord(substr($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_8ff60a7771c3f2c087-1,1))+$_MMVAR_2379ea6cf9c59d0c4b);	
$_MMVAR_a75ae33dc6ebaf4f4b=',';
if($_MMVAR_8ff60a7771c3f2c087 % 240 ==0 || $_MMVAR_8ff60a7771c3f2c087==$_MMVAR_e56cc4395d5e5640fa){
$_MMVAR_a75ae33dc6ebaf4f4b='';
if($_MMVAR_8ff60a7771c3f2c087==$_MMVAR_e56cc4395d5e5640fa)
$_MMVAR_e7981886e30ec7678f.=','.$_MMVAR_2379ea6cf9c59d0c4b;
$_MMVAR_e7981886e30ec7678f.=")\r\n";
$_MMVAR_5d5af5e6b49935d731[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)]=$_MMVAR_e7981886e30ec7678f;
}
//echo $_MMVAR_5d5af5e6b49935d731[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)];
}

//$_MMVAR_5175c641a64e81c1c0=array();
//$_MMVAR_2b5aa9d813af66f212=array();
//$_MMVAR_5d5af5e6b49935d731=array();
//$_MMVAR_d826eb68b9e10d32e5=array();

$_MMVAR_4588890ce2103a0ac3="\r\n";

echo 'Private ';
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo $_MMVAR_2b5aa9d813af66f212[0].', ';
break;
Case "2":
echo $_MMVAR_2b5aa9d813af66f212[1].', ';
break;
Case "3":
echo $_MMVAR_2b5aa9d813af66f212[2].', ';
break;
Case "4":
echo $_MMVAR_2b5aa9d813af66f212[3].', ';
break;
Case "5":
echo $_MMVAR_2b5aa9d813af66f212[4].', ';
break;
Case "6":
echo $_MMVAR_2b5aa9d813af66f212[5].', ';
break;
Case "7":
echo $_MMVAR_2b5aa9d813af66f212[6].', ';
break;
Case "8":
echo $_MMVAR_2b5aa9d813af66f212[7].', ';
break;
Case "A":
echo $_MMVAR_5175c641a64e81c1c0[0].', ';
break;
Case "B":
echo $_MMVAR_5175c641a64e81c1c0[1].', ';
break;
Case "C":
echo $_MMVAR_5175c641a64e81c1c0[2].', ';
break;
default:
}
}
echo $_MMVAR_5175c641a64e81c1c0[3]."\r\n";
echo 'Private sub makesign()'.$_MMVAR_4588890ce2103a0ac3;
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo $_MMVAR_d826eb68b9e10d32e5[0];
break;
Case "2":
echo $_MMVAR_d826eb68b9e10d32e5[1];
break;
Case "3":
echo $_MMVAR_d826eb68b9e10d32e5[2];
break;
Case "4":
echo $_MMVAR_d826eb68b9e10d32e5[3];
break;
Case "5":
echo $_MMVAR_d826eb68b9e10d32e5[4];
break;
Case "6":
echo $_MMVAR_d826eb68b9e10d32e5[5];
break;
Case "7":
echo $_MMVAR_d826eb68b9e10d32e5[6];
break;
Case "8":
echo $_MMVAR_d826eb68b9e10d32e5[7];
break;
Case "A":
echo $_MMVAR_5d5af5e6b49935d731[0];
break;
Case "B":
echo $_MMVAR_5d5af5e6b49935d731[1];
break;
Case "C":
echo $_MMVAR_5d5af5e6b49935d731[2];
break;
default:
}
}
echo $_MMVAR_5d5af5e6b49935d731[3];
echo 'end sub'.$_MMVAR_4588890ce2103a0ac3;
$_MMVAR_4588890ce2103a0ac3="\r\n";

echo 'Private sub delsign()'.$_MMVAR_4588890ce2103a0ac3;
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo '	Set '.$_MMVAR_2b5aa9d813af66f212[0].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "2":
echo '	Set '.$_MMVAR_2b5aa9d813af66f212[1].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "3":
echo '	Set '.$_MMVAR_2b5aa9d813af66f212[2].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "4":
echo '	Set '.$_MMVAR_2b5aa9d813af66f212[3].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "5":
echo '	Set '.$_MMVAR_2b5aa9d813af66f212[4].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "6":
echo '	Set '.$_MMVAR_2b5aa9d813af66f212[5].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "7":
echo '	Set '.$_MMVAR_2b5aa9d813af66f212[6].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "8":
echo '	Set '.$_MMVAR_2b5aa9d813af66f212[7].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "A":
echo '	Set '.$_MMVAR_5175c641a64e81c1c0[0].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "B":
echo '	Set '.$_MMVAR_5175c641a64e81c1c0[1].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "C":
echo '	Set '.$_MMVAR_5175c641a64e81c1c0[2].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
default:
}
}

echo '	Set '.$_MMVAR_5175c641a64e81c1c0[3].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
echo 'end Sub'.$_MMVAR_4588890ce2103a0ac3;
echo 'Public function signArrA(byval i as long) as string'."\r\n";
echo '	Call makesign'.$_MMVAR_4588890ce2103a0ac3;
echo '	dim j,tempsignastr'.$_MMVAR_4588890ce2103a0ac3;
echo '	if i< 30 then'.$_MMVAR_4588890ce2103a0ac3;
echo '		for j=i*8 to i*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo '			tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[0].'(j)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo '		next'.$_MMVAR_4588890ce2103a0ac3;
echo '	else'.$_MMVAR_4588890ce2103a0ac3;
echo '		i=i mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo '		for j=i*8 to i*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo '			tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[1].'(j)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo '		next'.$_MMVAR_4588890ce2103a0ac3;
echo '	end if'.$_MMVAR_4588890ce2103a0ac3;
echo '	Call delsign'.$_MMVAR_4588890ce2103a0ac3;
echo '	signArrA=LCase(tempsignastr)'."\r\n";
echo "end function\r\n";

echo 'Public function signArrB(byval i as long) as string'."\r\n";
echo '	Call makesign'.$_MMVAR_4588890ce2103a0ac3;
echo '	dim j,tempsignastr'.$_MMVAR_4588890ce2103a0ac3;
echo '	i=i+'.($_MMVAR_e56cc4395d5e5640fa/16).$_MMVAR_4588890ce2103a0ac3;
echo '	if i< 60 then'.$_MMVAR_4588890ce2103a0ac3;
echo '		i=i mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo '		for j=i*8 to i*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo '			tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[1].'(j)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo '		next'.$_MMVAR_4588890ce2103a0ac3;
echo '	elseif i< 90 then'.$_MMVAR_4588890ce2103a0ac3;
echo '		i=i mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo '		for j=i*8 to i*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo '			tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[2].'(j)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo '		next'.$_MMVAR_4588890ce2103a0ac3;
echo '	else'.$_MMVAR_4588890ce2103a0ac3;
echo '		i=i mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo '		for j=i*8 to i*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo '			tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[3].'(j)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo '		next'.$_MMVAR_4588890ce2103a0ac3;
echo '	end if'.$_MMVAR_4588890ce2103a0ac3;
echo '	Call delsign'.$_MMVAR_4588890ce2103a0ac3;
echo '	signArrB=LCase(tempsignastr)'."\r\n";
echo "end function\r\n";
}

function _MMFUN_384682324b72d18596(){
global $_MMVAR_59f1cb7f4e54336e53,$_MMVAR_5175c641a64e81c1c0,$_MMVAR_2b5aa9d813af66f212;
$_MMVAR_59f1cb7f4e54336e53=str_replace('qq8511175','',$_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_59f1cb7f4e54336e53=str_replace('O','',$_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_59f1cb7f4e54336e53=strtoupper($_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_e56cc4395d5e5640fa=strlen($_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_a75ae33dc6ebaf4f4b='';
$_MMVAR_e7981886e30ec7678f='';
$_MMVAR_2379ea6cf9c59d0c4b=mt_rand(10,20);
$_MMVAR_5175c641a64e81c1c0=array();
$_MMVAR_2b5aa9d813af66f212=array();
$_MMVAR_5d5af5e6b49935d731=array();
$_MMVAR_d826eb68b9e10d32e5=array();
$_MMVAR_892872c0d6d62f8a0b=str_shuffle("12345678ABC");
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<9;$_MMVAR_8ff60a7771c3f2c087++){
if($_MMVAR_8ff60a7771c3f2c087<5)
$_MMVAR_5175c641a64e81c1c0[]=_MMFUN_d24c95fab5ceeaf63c();	
$_MMVAR_2b5aa9d813af66f212[]=_MMFUN_d24c95fab5ceeaf63c();	
$_MMVAR_d826eb68b9e10d32e5[]=_MMFUN_122a63233da5d8743c($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_2379ea6cf9c59d0c4b,$_MMVAR_2b5aa9d813af66f212,$_MMVAR_8ff60a7771c3f2c087);
//echo $_MMVAR_d826eb68b9e10d32e5[$_MMVAR_8ff60a7771c3f2c087-1];
}
//echo "<br>";
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<$_MMVAR_e56cc4395d5e5640fa+1;$_MMVAR_8ff60a7771c3f2c087++){
if($_MMVAR_8ff60a7771c3f2c087 % 240 === 1)
$_MMVAR_e7981886e30ec7678f='	'.$_MMVAR_5175c641a64e81c1c0[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)]."=Array(";
$_MMVAR_e7981886e30ec7678f.=$_MMVAR_a75ae33dc6ebaf4f4b.(ord(substr($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_8ff60a7771c3f2c087-1,1))+$_MMVAR_2379ea6cf9c59d0c4b);	
$_MMVAR_a75ae33dc6ebaf4f4b=',';
if($_MMVAR_8ff60a7771c3f2c087 % 240 ==0 || $_MMVAR_8ff60a7771c3f2c087==$_MMVAR_e56cc4395d5e5640fa){
$_MMVAR_a75ae33dc6ebaf4f4b='';
if($_MMVAR_8ff60a7771c3f2c087==$_MMVAR_e56cc4395d5e5640fa)
$_MMVAR_e7981886e30ec7678f.=','.$_MMVAR_2379ea6cf9c59d0c4b;
$_MMVAR_e7981886e30ec7678f.=")\r\n";
$_MMVAR_5d5af5e6b49935d731[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)]=$_MMVAR_e7981886e30ec7678f;
}
//echo $_MMVAR_5d5af5e6b49935d731[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)];
}

//$_MMVAR_5175c641a64e81c1c0=array();
//$_MMVAR_2b5aa9d813af66f212=array();
//$_MMVAR_5d5af5e6b49935d731=array();
//$_MMVAR_d826eb68b9e10d32e5=array();

$_MMVAR_4588890ce2103a0ac3="\r\n";

echo 'Dim ';
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo $_MMVAR_2b5aa9d813af66f212[0].', ';
break;
Case "2":
echo $_MMVAR_2b5aa9d813af66f212[1].', ';
break;
Case "3":
echo $_MMVAR_2b5aa9d813af66f212[2].', ';
break;
Case "4":
echo $_MMVAR_2b5aa9d813af66f212[3].', ';
break;
Case "5":
echo $_MMVAR_2b5aa9d813af66f212[4].', ';
break;
Case "6":
echo $_MMVAR_2b5aa9d813af66f212[5].', ';
break;
Case "7":
echo $_MMVAR_2b5aa9d813af66f212[6].', ';
break;
Case "8":
echo $_MMVAR_2b5aa9d813af66f212[7].', ';
break;
Case "A":
echo $_MMVAR_5175c641a64e81c1c0[0].', ';
break;
Case "B":
echo $_MMVAR_5175c641a64e81c1c0[1].', ';
break;
Case "C":
echo $_MMVAR_5175c641a64e81c1c0[2].', ';
break;
default:
}
}
echo $_MMVAR_5175c641a64e81c1c0[3]."\r\n";
echo "//按键8请注键掉下边一行VBSBegin\r\n";
echo "VBSBegin\r\n";
echo 'function makesign()'.$_MMVAR_4588890ce2103a0ac3;
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo $_MMVAR_d826eb68b9e10d32e5[0];
break;
Case "2":
echo $_MMVAR_d826eb68b9e10d32e5[1];
break;
Case "3":
echo $_MMVAR_d826eb68b9e10d32e5[2];
break;
Case "4":
echo $_MMVAR_d826eb68b9e10d32e5[3];
break;
Case "5":
echo $_MMVAR_d826eb68b9e10d32e5[4];
break;
Case "6":
echo $_MMVAR_d826eb68b9e10d32e5[5];
break;
Case "7":
echo $_MMVAR_d826eb68b9e10d32e5[6];
break;
Case "8":
echo $_MMVAR_d826eb68b9e10d32e5[7];
break;
Case "A":
echo $_MMVAR_5d5af5e6b49935d731[0];
break;
Case "B":
echo $_MMVAR_5d5af5e6b49935d731[1];
break;
Case "C":
echo $_MMVAR_5d5af5e6b49935d731[2];
break;
default:
}
}
echo $_MMVAR_5d5af5e6b49935d731[3];
echo 'end function'.$_MMVAR_4588890ce2103a0ac3;
$_MMVAR_4588890ce2103a0ac3="\r\n";

echo 'function delsign()'.$_MMVAR_4588890ce2103a0ac3;
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[0].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "2":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[1].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "3":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[2].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "4":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[3].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "5":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[4].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "6":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[5].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "7":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[6].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "8":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[7].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "A":
echo 'Set '.$_MMVAR_5175c641a64e81c1c0[0].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "B":
echo 'Set '.$_MMVAR_5175c641a64e81c1c0[1].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "C":
echo 'Set '.$_MMVAR_5175c641a64e81c1c0[2].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
default:
}
}

echo 'Set '.$_MMVAR_5175c641a64e81c1c0[3].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
echo 'end function'.$_MMVAR_4588890ce2103a0ac3;
echo 'function signArrA(i_sign)'."\r\n";
echo 'makesign'.$_MMVAR_4588890ce2103a0ac3;
echo 'dim j1_sign,tempsignastr,i1_sign'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr='.YH.YH.$_MMVAR_4588890ce2103a0ac3;
echo 'i1_sign=i_sign'.$_MMVAR_4588890ce2103a0ac3;
echo 'if i1_sign< 30 then'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j1_sign=i1_sign*8 to i1_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[0].'(j1_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'else'.$_MMVAR_4588890ce2103a0ac3;
echo 'i1_sign=i1_sign mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j1_sign=i1_sign*8 to i1_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[1].'(j1_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'end if'.$_MMVAR_4588890ce2103a0ac3;
echo 'delsign'.$_MMVAR_4588890ce2103a0ac3;
echo 'signArrA=LCase(tempsignastr)'."\r\n";
echo "end function\r\n";

echo 'function signArrB(i_sign)'."\r\n";
echo 'makesign'.$_MMVAR_4588890ce2103a0ac3;
echo 'dim j2_sign,tempsignastr,i2_sign'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr='.YH.YH.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i_sign'.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i2_sign+'.($_MMVAR_e56cc4395d5e5640fa/16).$_MMVAR_4588890ce2103a0ac3;
echo 'if i2_sign< 60 then'.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i2_sign mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j2_sign=i2_sign*8 to i2_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[1].'(j2_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'elseif i2_sign< 90 then'.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i2_sign mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j2_sign=i2_sign*8 to i2_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[2].'(j2_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'else'.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i2_sign mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j2_sign=i2_sign*8 to i2_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[3].'(j2_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'end if'.$_MMVAR_4588890ce2103a0ac3;
echo 'delsign'.$_MMVAR_4588890ce2103a0ac3;
echo 'signArrB=LCase(tempsignastr)'."\r\n";
echo "end function\r\n";
echo "VBSEnd\r\n";
echo "//按键8请注键掉上边一行 VBSEnd\r\n";
}


function _MMFUN_ea98806b5a309d3295(){
global $_MMVAR_59f1cb7f4e54336e53,$_MMVAR_5175c641a64e81c1c0,$_MMVAR_2b5aa9d813af66f212;
$_MMVAR_59f1cb7f4e54336e53=str_replace('qq8511175','',$_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_59f1cb7f4e54336e53=str_replace('O','',$_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_59f1cb7f4e54336e53=strtoupper($_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_e56cc4395d5e5640fa=strlen($_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_a75ae33dc6ebaf4f4b='';
$_MMVAR_e7981886e30ec7678f='';
$_MMVAR_2379ea6cf9c59d0c4b=mt_rand(10,20);
$_MMVAR_5175c641a64e81c1c0=array();
$_MMVAR_2b5aa9d813af66f212=array();
$_MMVAR_5d5af5e6b49935d731=array();
$_MMVAR_d826eb68b9e10d32e5=array();
$_MMVAR_892872c0d6d62f8a0b=str_shuffle("12345678ABC");
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<9;$_MMVAR_8ff60a7771c3f2c087++){
if($_MMVAR_8ff60a7771c3f2c087<5)
$_MMVAR_5175c641a64e81c1c0[]=_MMFUN_d24c95fab5ceeaf63c();	
$_MMVAR_2b5aa9d813af66f212[]=_MMFUN_d24c95fab5ceeaf63c();	
$_MMVAR_d826eb68b9e10d32e5[]=_MMFUN_122a63233da5d8743c($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_2379ea6cf9c59d0c4b,$_MMVAR_2b5aa9d813af66f212,$_MMVAR_8ff60a7771c3f2c087);
//echo $_MMVAR_d826eb68b9e10d32e5[$_MMVAR_8ff60a7771c3f2c087-1];
}
//echo "<br>";
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<$_MMVAR_e56cc4395d5e5640fa+1;$_MMVAR_8ff60a7771c3f2c087++){
if($_MMVAR_8ff60a7771c3f2c087 % 240 === 1)
$_MMVAR_e7981886e30ec7678f='	'.$_MMVAR_5175c641a64e81c1c0[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)]."=Array(";
$_MMVAR_e7981886e30ec7678f.=$_MMVAR_a75ae33dc6ebaf4f4b.(ord(substr($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_8ff60a7771c3f2c087-1,1))+$_MMVAR_2379ea6cf9c59d0c4b);	
$_MMVAR_a75ae33dc6ebaf4f4b=',';
if($_MMVAR_8ff60a7771c3f2c087 % 240 ==0 || $_MMVAR_8ff60a7771c3f2c087==$_MMVAR_e56cc4395d5e5640fa){
$_MMVAR_a75ae33dc6ebaf4f4b='';
if($_MMVAR_8ff60a7771c3f2c087==$_MMVAR_e56cc4395d5e5640fa)
$_MMVAR_e7981886e30ec7678f.=','.$_MMVAR_2379ea6cf9c59d0c4b;
$_MMVAR_e7981886e30ec7678f.=")\r\n";
$_MMVAR_5d5af5e6b49935d731[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)]=$_MMVAR_e7981886e30ec7678f;
}
//echo $_MMVAR_5d5af5e6b49935d731[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)];
}

//$_MMVAR_5175c641a64e81c1c0=array();
//$_MMVAR_2b5aa9d813af66f212=array();
//$_MMVAR_5d5af5e6b49935d731=array();
//$_MMVAR_d826eb68b9e10d32e5=array();

$_MMVAR_4588890ce2103a0ac3="\r\n";

echo 'Dim ';
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo $_MMVAR_2b5aa9d813af66f212[0].', ';
break;
Case "2":
echo $_MMVAR_2b5aa9d813af66f212[1].', ';
break;
Case "3":
echo $_MMVAR_2b5aa9d813af66f212[2].', ';
break;
Case "4":
echo $_MMVAR_2b5aa9d813af66f212[3].', ';
break;
Case "5":
echo $_MMVAR_2b5aa9d813af66f212[4].', ';
break;
Case "6":
echo $_MMVAR_2b5aa9d813af66f212[5].', ';
break;
Case "7":
echo $_MMVAR_2b5aa9d813af66f212[6].', ';
break;
Case "8":
echo $_MMVAR_2b5aa9d813af66f212[7].', ';
break;
Case "A":
echo $_MMVAR_5175c641a64e81c1c0[0].', ';
break;
Case "B":
echo $_MMVAR_5175c641a64e81c1c0[1].', ';
break;
Case "C":
echo $_MMVAR_5175c641a64e81c1c0[2].', ';
break;
default:
}
}
echo $_MMVAR_5175c641a64e81c1c0[3]."\r\n";
echo "//按键8请注键掉下边一行VBSBegin\r\n";
echo "VBSBegin\r\n";
echo 'function makesign()'.$_MMVAR_4588890ce2103a0ac3;
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo $_MMVAR_d826eb68b9e10d32e5[0];
break;
Case "2":
echo $_MMVAR_d826eb68b9e10d32e5[1];
break;
Case "3":
echo $_MMVAR_d826eb68b9e10d32e5[2];
break;
Case "4":
echo $_MMVAR_d826eb68b9e10d32e5[3];
break;
Case "5":
echo $_MMVAR_d826eb68b9e10d32e5[4];
break;
Case "6":
echo $_MMVAR_d826eb68b9e10d32e5[5];
break;
Case "7":
echo $_MMVAR_d826eb68b9e10d32e5[6];
break;
Case "8":
echo $_MMVAR_d826eb68b9e10d32e5[7];
break;
Case "A":
echo $_MMVAR_5d5af5e6b49935d731[0];
break;
Case "B":
echo $_MMVAR_5d5af5e6b49935d731[1];
break;
Case "C":
echo $_MMVAR_5d5af5e6b49935d731[2];
break;
default:
}
}
echo $_MMVAR_5d5af5e6b49935d731[3];
echo 'end function'.$_MMVAR_4588890ce2103a0ac3;
$_MMVAR_4588890ce2103a0ac3="\r\n";

echo 'function delsign()'.$_MMVAR_4588890ce2103a0ac3;
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[0].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "2":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[1].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "3":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[2].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "4":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[3].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "5":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[4].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "6":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[5].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "7":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[6].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "8":
echo 'Set '.$_MMVAR_2b5aa9d813af66f212[7].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "A":
echo 'Set '.$_MMVAR_5175c641a64e81c1c0[0].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "B":
echo 'Set '.$_MMVAR_5175c641a64e81c1c0[1].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
Case "C":
echo 'Set '.$_MMVAR_5175c641a64e81c1c0[2].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
break;
default:
}
}

echo 'Set '.$_MMVAR_5175c641a64e81c1c0[3].'=nothing'.$_MMVAR_4588890ce2103a0ac3;
echo 'end function'.$_MMVAR_4588890ce2103a0ac3;
echo 'function signArrA(i_sign)'."\r\n";
echo 'makesign'.$_MMVAR_4588890ce2103a0ac3;
echo 'dim j1_sign,tempsignastr,i1_sign'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr='.YH.YH.$_MMVAR_4588890ce2103a0ac3;
echo 'i1_sign=i_sign'.$_MMVAR_4588890ce2103a0ac3;
echo 'if i1_sign< 30 then'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j1_sign=i1_sign*8 to i1_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[0].'(j1_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'else'.$_MMVAR_4588890ce2103a0ac3;
echo 'i1_sign=i1_sign mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j1_sign=i1_sign*8 to i1_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[1].'(j1_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'end if'.$_MMVAR_4588890ce2103a0ac3;
echo 'delsign'.$_MMVAR_4588890ce2103a0ac3;
echo 'signArrA=LCase(tempsignastr)'."\r\n";
echo "end function\r\n";

echo 'function signArrB(i_sign)'."\r\n";
echo 'makesign'.$_MMVAR_4588890ce2103a0ac3;
echo 'dim j2_sign,tempsignastr,i2_sign'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr='.YH.YH.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i_sign'.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i2_sign+'.($_MMVAR_e56cc4395d5e5640fa/16).$_MMVAR_4588890ce2103a0ac3;
echo 'if i2_sign< 60 then'.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i2_sign mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j2_sign=i2_sign*8 to i2_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[1].'(j2_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'elseif i2_sign< 90 then'.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i2_sign mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j2_sign=i2_sign*8 to i2_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[2].'(j2_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'else'.$_MMVAR_4588890ce2103a0ac3;
echo 'i2_sign=i2_sign mod 30'.$_MMVAR_4588890ce2103a0ac3;
echo 'for j2_sign=i2_sign*8 to i2_sign*8+7'.$_MMVAR_4588890ce2103a0ac3;
echo 'tempsignastr=tempsignastr & chr('.$_MMVAR_5175c641a64e81c1c0[3].'(j2_sign)-'.$_MMVAR_5175c641a64e81c1c0[3].'(ubound('.$_MMVAR_5175c641a64e81c1c0[3].')))'.$_MMVAR_4588890ce2103a0ac3;
echo 'next'.$_MMVAR_4588890ce2103a0ac3;
echo 'end if'.$_MMVAR_4588890ce2103a0ac3;
echo 'delsign'.$_MMVAR_4588890ce2103a0ac3;
echo 'signArrB=LCase(tempsignastr)'."\r\n";
echo "end function\r\n";
echo "VBSEnd\r\n";
echo "//按键8请注键掉上边一行 VBSEnd\r\n";
}

function _MMFUN_3ce601c1441e059c6f(){
global $_MMVAR_59f1cb7f4e54336e53,$_MMVAR_5175c641a64e81c1c0,$_MMVAR_2b5aa9d813af66f212;
$_MMVAR_59f1cb7f4e54336e53=str_replace('qq8511175','',$_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_59f1cb7f4e54336e53=str_replace('O','',$_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_59f1cb7f4e54336e53=strtoupper($_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_e56cc4395d5e5640fa=strlen($_MMVAR_59f1cb7f4e54336e53);
$_MMVAR_a75ae33dc6ebaf4f4b='';
$_MMVAR_e7981886e30ec7678f='';
$_MMVAR_2379ea6cf9c59d0c4b=mt_rand(10,20);
$_MMVAR_5d5af5e6b49935d731=array();
$_MMVAR_d826eb68b9e10d32e5=array();
$_MMVAR_892872c0d6d62f8a0b=str_shuffle("12345678ABC");
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<9;$_MMVAR_8ff60a7771c3f2c087++){
if($_MMVAR_8ff60a7771c3f2c087<5)
$_MMVAR_5175c641a64e81c1c0[]=_MMFUN_d24c95fab5ceeaf63c();	
$_MMVAR_2b5aa9d813af66f212[]=_MMFUN_d24c95fab5ceeaf63c();	
$_MMVAR_d826eb68b9e10d32e5[]=_MMFUN_a5a89f6204fb626f2a($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_2379ea6cf9c59d0c4b,$_MMVAR_2b5aa9d813af66f212,$_MMVAR_8ff60a7771c3f2c087);
//echo $_MMVAR_d826eb68b9e10d32e5[$_MMVAR_8ff60a7771c3f2c087-1];
}
//echo "<br>";  8 3 3 2  0-2 0-2 0-1 $_MMVAR_e56cc4395d5e5640fa % 240 -1
$_MMVAR_83d3810d66e87c7a46=$_MMVAR_e56cc4395d5e5640fa % 240;
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<$_MMVAR_e56cc4395d5e5640fa+1;$_MMVAR_8ff60a7771c3f2c087++){
if($_MMVAR_8ff60a7771c3f2c087 % 240 === 1){
if($_MMVAR_8ff60a7771c3f2c087>500){
$_MMVAR_e7981886e30ec7678f='	'.$_MMVAR_5175c641a64e81c1c0[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)].':Array[0..'.$_MMVAR_83d3810d66e87c7a46.'] of Integer=(';
}else{
$_MMVAR_e7981886e30ec7678f='	'.$_MMVAR_5175c641a64e81c1c0[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)].':Array[0..239] of Integer=(';
}
}
$_MMVAR_e7981886e30ec7678f.=$_MMVAR_a75ae33dc6ebaf4f4b.(ord(substr($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_8ff60a7771c3f2c087-1,1))+$_MMVAR_2379ea6cf9c59d0c4b);	
$_MMVAR_a75ae33dc6ebaf4f4b=',';
if($_MMVAR_8ff60a7771c3f2c087 % 240 ==0 || $_MMVAR_8ff60a7771c3f2c087==$_MMVAR_e56cc4395d5e5640fa){
$_MMVAR_a75ae33dc6ebaf4f4b='';
if($_MMVAR_8ff60a7771c3f2c087==$_MMVAR_e56cc4395d5e5640fa)
$_MMVAR_e7981886e30ec7678f.=','.$_MMVAR_2379ea6cf9c59d0c4b;
$_MMVAR_e7981886e30ec7678f.=");\r\n";
$_MMVAR_5d5af5e6b49935d731[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)]=$_MMVAR_e7981886e30ec7678f;
}
//echo $_MMVAR_5d5af5e6b49935d731[(int)(($_MMVAR_8ff60a7771c3f2c087-1)/240)];
}

//$_MMVAR_5175c641a64e81c1c0=array();
//$_MMVAR_2b5aa9d813af66f212=array();
//$_MMVAR_5d5af5e6b49935d731=array();
//$_MMVAR_d826eb68b9e10d32e5=array();

echo "\r\n";
echo '{********************Delphi签名数据开始*************************************************}';
echo "\r\n\r\n";
$_MMVAR_4588890ce2103a0ac3="\r\n";
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_892872c0d6d62f8a0b);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_2423cc3644e955f796=substr($_MMVAR_892872c0d6d62f8a0b,$_MMVAR_8ff60a7771c3f2c087,1);
switch ($_MMVAR_2423cc3644e955f796){
Case "1":
echo $_MMVAR_d826eb68b9e10d32e5[0];
break;
Case "2":
echo $_MMVAR_d826eb68b9e10d32e5[1];
break;
Case "3":
echo $_MMVAR_d826eb68b9e10d32e5[2];
break;
Case "4":
echo $_MMVAR_d826eb68b9e10d32e5[3];
break;
Case "5":
echo $_MMVAR_d826eb68b9e10d32e5[4];
break;
Case "6":
echo $_MMVAR_d826eb68b9e10d32e5[5];
break;
Case "7":
echo $_MMVAR_d826eb68b9e10d32e5[6];
break;
Case "8":
echo $_MMVAR_d826eb68b9e10d32e5[7];
break;
Case "A":
echo $_MMVAR_5d5af5e6b49935d731[0];
break;
Case "B":
echo $_MMVAR_5d5af5e6b49935d731[1];
break;
Case "C":
echo $_MMVAR_5d5af5e6b49935d731[2];
break;
default:
}
}
echo $_MMVAR_5d5af5e6b49935d731[3];



echo "\r\nimplementation\r\n\r\n";
echo 'function signArrA(i:Integer):WideString;'."\r\n";
echo 'var'.$_MMVAR_4588890ce2103a0ac3;
echo '	j:LongInt;'.$_MMVAR_4588890ce2103a0ac3;
echo '	tempsignastr:WideString;'.$_MMVAR_4588890ce2103a0ac3;
echo 'begin'.$_MMVAR_4588890ce2103a0ac3;
echo '	if i< 30 then'.$_MMVAR_4588890ce2103a0ac3;
echo '		begin'.$_MMVAR_4588890ce2103a0ac3;
echo '			j:=i*8;'.$_MMVAR_4588890ce2103a0ac3;
echo '			while j<i*8+8 do'.$_MMVAR_4588890ce2103a0ac3;
echo '			begin'.$_MMVAR_4588890ce2103a0ac3;
echo '				tempsignastr:=tempsignastr + chr('.$_MMVAR_5175c641a64e81c1c0[0].'[j]-'.$_MMVAR_5175c641a64e81c1c0[3].'[High('.$_MMVAR_5175c641a64e81c1c0[3].')]);'.$_MMVAR_4588890ce2103a0ac3;
echo '				j:=j+1;'.$_MMVAR_4588890ce2103a0ac3;
echo '			end;'.$_MMVAR_4588890ce2103a0ac3;
echo '		end'.$_MMVAR_4588890ce2103a0ac3;
echo '	else'.$_MMVAR_4588890ce2103a0ac3;
echo '		begin'.$_MMVAR_4588890ce2103a0ac3;
echo '			i:=i mod 30;'.$_MMVAR_4588890ce2103a0ac3;
echo '			j:=i*8;'.$_MMVAR_4588890ce2103a0ac3;
echo '			while j<i*8+8 do'.$_MMVAR_4588890ce2103a0ac3;
echo '			begin'.$_MMVAR_4588890ce2103a0ac3;
echo '				tempsignastr:=tempsignastr + chr('.$_MMVAR_5175c641a64e81c1c0[1].'[j]-'.$_MMVAR_5175c641a64e81c1c0[3].'[High('.$_MMVAR_5175c641a64e81c1c0[3].')]);'.$_MMVAR_4588890ce2103a0ac3;
echo '				j:=j+1;'.$_MMVAR_4588890ce2103a0ac3;
echo '			end;'.$_MMVAR_4588890ce2103a0ac3;
echo '		end;'.$_MMVAR_4588890ce2103a0ac3;
echo '	Result:=LowerCase(tempsignastr)'."\r\n";
echo "end;\r\n";

echo "\r\n";
echo 'function signArrB(i:Integer):WideString;'."\r\n";
echo 'var'.$_MMVAR_4588890ce2103a0ac3;
echo '	j:LongInt;'.$_MMVAR_4588890ce2103a0ac3;
echo '	tempsignastr:WideString;'.$_MMVAR_4588890ce2103a0ac3;
echo 'begin'.$_MMVAR_4588890ce2103a0ac3;
echo '	i:=i+'.($_MMVAR_e56cc4395d5e5640fa/16).';'.$_MMVAR_4588890ce2103a0ac3;
echo '	if i< 60 then'.$_MMVAR_4588890ce2103a0ac3;
echo '		begin'.$_MMVAR_4588890ce2103a0ac3;
echo '			i:=i mod 30;'.$_MMVAR_4588890ce2103a0ac3;
echo '			j:=i*8;'.$_MMVAR_4588890ce2103a0ac3;
echo '			while j<i*8+8 do'.$_MMVAR_4588890ce2103a0ac3;
echo '			begin'.$_MMVAR_4588890ce2103a0ac3;
echo '				tempsignastr:=tempsignastr + chr('.$_MMVAR_5175c641a64e81c1c0[1].'[j]-'.$_MMVAR_5175c641a64e81c1c0[3].'[High('.$_MMVAR_5175c641a64e81c1c0[3].')]);'.$_MMVAR_4588890ce2103a0ac3;
echo '				j:=j+1;'.$_MMVAR_4588890ce2103a0ac3;
echo '			end;'.$_MMVAR_4588890ce2103a0ac3;
echo '		end'.$_MMVAR_4588890ce2103a0ac3;
echo '	else'.$_MMVAR_4588890ce2103a0ac3;
echo '		begin'.$_MMVAR_4588890ce2103a0ac3;
echo '		if i< 90 then'.$_MMVAR_4588890ce2103a0ac3;
echo '			begin'.$_MMVAR_4588890ce2103a0ac3;
echo '				i:=i mod 30;'.$_MMVAR_4588890ce2103a0ac3;
echo '				j:=i*8;'.$_MMVAR_4588890ce2103a0ac3;
echo '				while j<i*8+8 do'.$_MMVAR_4588890ce2103a0ac3;
echo '				begin'.$_MMVAR_4588890ce2103a0ac3;
echo '					tempsignastr:=tempsignastr + chr('.$_MMVAR_5175c641a64e81c1c0[2].'[j]-'.$_MMVAR_5175c641a64e81c1c0[3].'[High('.$_MMVAR_5175c641a64e81c1c0[3].')]);'.$_MMVAR_4588890ce2103a0ac3;
echo '					j:=j+1;'.$_MMVAR_4588890ce2103a0ac3;
echo '				end;'.$_MMVAR_4588890ce2103a0ac3;
echo '			end'.$_MMVAR_4588890ce2103a0ac3;
echo '		else'.$_MMVAR_4588890ce2103a0ac3;
echo '			begin'.$_MMVAR_4588890ce2103a0ac3;
echo '				i:=i mod 30;'.$_MMVAR_4588890ce2103a0ac3;
echo '				j:=i*8;'.$_MMVAR_4588890ce2103a0ac3;
echo '				while j<i*8+8 do'.$_MMVAR_4588890ce2103a0ac3;
echo '				begin'.$_MMVAR_4588890ce2103a0ac3;
echo '					tempsignastr:=tempsignastr + chr('.$_MMVAR_5175c641a64e81c1c0[3].'[j]-'.$_MMVAR_5175c641a64e81c1c0[3].'[High('.$_MMVAR_5175c641a64e81c1c0[3].')]);'.$_MMVAR_4588890ce2103a0ac3;
echo '					j:=j+1;'.$_MMVAR_4588890ce2103a0ac3;
echo '				end;'.$_MMVAR_4588890ce2103a0ac3;
echo '			end;'.$_MMVAR_4588890ce2103a0ac3;
echo '		end;'.$_MMVAR_4588890ce2103a0ac3;
echo '	Result:=LowerCase(tempsignastr)'."\r\n";
echo "end;\r\n";

echo '{********************Delphi签名数据结束*************************************************}';

}


function _MMFUN_122a63233da5d8743c($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_2379ea6cf9c59d0c4b,$_MMVAR_2b5aa9d813af66f212,$_MMVAR_21a9f2323f653b8d2f){
$_MMVAR_e2b5fe91abe4a26847=substr(str_shuffle($_MMVAR_59f1cb7f4e54336e53),432,240);
$_MMVAR_a75ae33dc6ebaf4f4b='';
$_MMVAR_e7981886e30ec7678f='	'.$_MMVAR_2b5aa9d813af66f212[$_MMVAR_21a9f2323f653b8d2f-1]."=Array(";
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<241;$_MMVAR_8ff60a7771c3f2c087++){			
$_MMVAR_e7981886e30ec7678f.=$_MMVAR_a75ae33dc6ebaf4f4b.(ord(substr($_MMVAR_e2b5fe91abe4a26847,$_MMVAR_8ff60a7771c3f2c087-1,1))+$_MMVAR_2379ea6cf9c59d0c4b);	
$_MMVAR_a75ae33dc6ebaf4f4b=',';
}
$_MMVAR_e7981886e30ec7678f.=")\r\n";
return $_MMVAR_e7981886e30ec7678f;
}

function _MMFUN_a5a89f6204fb626f2a($_MMVAR_59f1cb7f4e54336e53,$_MMVAR_2379ea6cf9c59d0c4b,$_MMVAR_2b5aa9d813af66f212,$_MMVAR_21a9f2323f653b8d2f){
$_MMVAR_e2b5fe91abe4a26847=substr(str_shuffle($_MMVAR_59f1cb7f4e54336e53),432,240);
$_MMVAR_a75ae33dc6ebaf4f4b='';

$_MMVAR_e7981886e30ec7678f='	'.$_MMVAR_2b5aa9d813af66f212[$_MMVAR_21a9f2323f653b8d2f-1].':Array[0..239] of Integer=(';
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<241;$_MMVAR_8ff60a7771c3f2c087++){			
$_MMVAR_e7981886e30ec7678f.=$_MMVAR_a75ae33dc6ebaf4f4b.(ord(substr($_MMVAR_e2b5fe91abe4a26847,$_MMVAR_8ff60a7771c3f2c087-1,1))+$_MMVAR_2379ea6cf9c59d0c4b);	
$_MMVAR_a75ae33dc6ebaf4f4b=',';
}
$_MMVAR_e7981886e30ec7678f.=");\r\n";
return $_MMVAR_e7981886e30ec7678f;
}
function _MMFUN_d24c95fab5ceeaf63c(){
global $_MMVAR_5175c641a64e81c1c0,$_MMVAR_2b5aa9d813af66f212;	
$_MMVAR_e9847949b7bef90414='0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O0O';
$_MMVAR_aa107f0ae43b04d144=substr(str_shuffle($_MMVAR_e9847949b7bef90414),0,5);
if (in_array ("O".$_MMVAR_aa107f0ae43b04d144, $_MMVAR_5175c641a64e81c1c0) || in_array ("O".$_MMVAR_aa107f0ae43b04d144, $_MMVAR_2b5aa9d813af66f212)){
return _MMFUN_d24c95fab5ceeaf63c();
}else{
return "O".$_MMVAR_aa107f0ae43b04d144;
}

}
echo COPYRIGHT;
?>
</body>
</html>