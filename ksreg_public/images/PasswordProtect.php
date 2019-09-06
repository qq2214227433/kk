<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
if(KS_SESSIONSAVEWEBDIR==1)session_save_path(KS_SESSIONDIR);
if(ini_get('session.auto_start')==0)session_start();
srand((double)microtime()*1000000);
$_MMVAR_cf6aa97c6011167409=imagecreate(45,18);
$_MMVAR_5d4b4bfed55223f916=imagecolorallocate($_MMVAR_cf6aa97c6011167409,0,0,0);
$_MMVAR_ee8701667281adf645=imagecolorallocate($_MMVAR_cf6aa97c6011167409,255,255,255);
$_MMVAR_6d8833ead07161f06d=imagecolorallocate($_MMVAR_cf6aa97c6011167409,238,238,238);
imagefill($_MMVAR_cf6aa97c6011167409,0,0,$_MMVAR_6d8833ead07161f06d);
session_register("vcode");
$_SESSION["vcode"]="";
$_MMVAR_6a6b5ab96d7a7da64f=_MMFUN_cc3cf510bffd973b95('uname','get','sql');
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select `id` from '.TNREG.'_user where username=\'' . $_MMVAR_6a6b5ab96d7a7da64f.'\'' );
if(empty($_MMVAR_9a036496d66f59815a)){
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<4;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_1b9a8444ab646a930c=mt_rand(1,3);
$_MMVAR_acaeb4df973f69be59=mt_rand(3,6);
if($_MMVAR_8ff60a7771c3f2c087==0 || $_MMVAR_8ff60a7771c3f2c087==2){
$_MMVAR_c42976bb5621e37ac8=substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXY'),0,1);
}else{
$_MMVAR_c42976bb5621e37ac8=mt_rand(1,9);
}
$_SESSION["vcode"].=$_MMVAR_c42976bb5621e37ac8;
imagestring($_MMVAR_cf6aa97c6011167409,$_MMVAR_acaeb4df973f69be59,(5+$_MMVAR_8ff60a7771c3f2c087*10),$_MMVAR_1b9a8444ab646a930c,$_MMVAR_c42976bb5621e37ac8,imagecolorallocate($_MMVAR_cf6aa97c6011167409,rand(0,130),rand(0,130),rand(0,130)));
}
}else{
$_MMVAR_fc8b1bbe7498a4f269=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * FROM '.TNREG.'_passwordprotect WHERE userid ='.$_MMVAR_9a036496d66f59815a['id'].' ORDER BY rand() LIMIT 2;');
if(empty($_MMVAR_fc8b1bbe7498a4f269)){
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<4;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_1b9a8444ab646a930c=mt_rand(1,3);
$_MMVAR_acaeb4df973f69be59=mt_rand(3,6);
if($_MMVAR_8ff60a7771c3f2c087==0 || $_MMVAR_8ff60a7771c3f2c087==2){
$_MMVAR_c42976bb5621e37ac8=substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXY'),0,1);
}else{
$_MMVAR_c42976bb5621e37ac8=mt_rand(1,9);
}
$_SESSION["vcode"].=$_MMVAR_c42976bb5621e37ac8;
imagestring($_MMVAR_cf6aa97c6011167409,$_MMVAR_acaeb4df973f69be59,(5+$_MMVAR_8ff60a7771c3f2c087*10),$_MMVAR_1b9a8444ab646a930c,$_MMVAR_c42976bb5621e37ac8,imagecolorallocate($_MMVAR_cf6aa97c6011167409,rand(0,130),rand(0,130),rand(0,130)));
}    
}else{
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_fc8b1bbe7498a4f269 as $_MMVAR_3537e64d044a58bc4b) {          
$_SESSION["vcode"].=$_MMVAR_3537e64d044a58bc4b['scvalue'];
$_MMVAR_1b9a8444ab646a930c=mt_rand(1,3);
$_MMVAR_acaeb4df973f69be59=mt_rand(3,6);
$_MMVAR_c42976bb5621e37ac8=substr($_MMVAR_3537e64d044a58bc4b['sckey'],0,1);
imagestring($_MMVAR_cf6aa97c6011167409,$_MMVAR_acaeb4df973f69be59,(5+$_MMVAR_8ff60a7771c3f2c087*10),$_MMVAR_1b9a8444ab646a930c,$_MMVAR_c42976bb5621e37ac8,imagecolorallocate($_MMVAR_cf6aa97c6011167409,rand(0,130),rand(0,130),rand(0,130)));
$_MMVAR_8ff60a7771c3f2c087=$_MMVAR_8ff60a7771c3f2c087+1;
$_MMVAR_1b9a8444ab646a930c=mt_rand(1,3);
$_MMVAR_acaeb4df973f69be59=mt_rand(3,6);
$_MMVAR_c42976bb5621e37ac8=substr($_MMVAR_3537e64d044a58bc4b['sckey'],1,1);
imagestring($_MMVAR_cf6aa97c6011167409,$_MMVAR_acaeb4df973f69be59,(5+$_MMVAR_8ff60a7771c3f2c087*10),$_MMVAR_1b9a8444ab646a930c,$_MMVAR_c42976bb5621e37ac8,imagecolorallocate($_MMVAR_cf6aa97c6011167409,rand(0,130),rand(0,130),rand(0,130))); 
$_MMVAR_8ff60a7771c3f2c087=$_MMVAR_8ff60a7771c3f2c087+1;       
}  
}
}
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<100;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_754519233d53d4dd97=imagecolorallocate($_MMVAR_cf6aa97c6011167409,rand(0,255),rand(0,255),rand(0,255));
imagesetpixel($_MMVAR_cf6aa97c6011167409,rand()%70,rand()%30,$_MMVAR_754519233d53d4dd97);
}
imagepng($_MMVAR_cf6aa97c6011167409);
imagedestroy($_MMVAR_cf6aa97c6011167409);
?>