<?php 
	//生成日期:2011-11-11 16点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
define('CUSTOMPRICE',0);			/* 多用户授权才需开放，计时作者帐号的各软件卡类的卡币价格可独立设置 0为关闭 1为开放 */
define('CUSTOMPRICE2',0);	

function _MMFUN_8e6475363d9317e98b($_MMVAR_1c987bcf5dd1a26bc8){	
$_MMVAR_ab939f9c64dd491efc=array();
$_MMVAR_21a2088ae03ff00310=preg_replace('/\\r|\\n|\\t| /i',"",$_MMVAR_1c987bcf5dd1a26bc8);
$_MMVAR_6327587d433265dba4=explode(';', $_MMVAR_21a2088ae03ff00310);
if(!empty($_MMVAR_6327587d433265dba4)){
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<count($_MMVAR_6327587d433265dba4);$_MMVAR_8ff60a7771c3f2c087++){
if(strlen($_MMVAR_6327587d433265dba4[$_MMVAR_8ff60a7771c3f2c087])>3){
$_MMVAR_f82afd4aa225291f77=explode('|',$_MMVAR_6327587d433265dba4[$_MMVAR_8ff60a7771c3f2c087]);
$_MMVAR_d60c0a8ddce2d1ba08=explode(',',$_MMVAR_f82afd4aa225291f77[1]);
for($_MMVAR_21a9f2323f653b8d2f=0;$_MMVAR_21a9f2323f653b8d2f<count($_MMVAR_d60c0a8ddce2d1ba08);$_MMVAR_21a9f2323f653b8d2f++){
$_MMVAR_29fb865c052f8c2d73=explode(':',$_MMVAR_d60c0a8ddce2d1ba08[$_MMVAR_21a9f2323f653b8d2f]);
$_MMVAR_ab939f9c64dd491efc[$_MMVAR_f82afd4aa225291f77[0]][$_MMVAR_29fb865c052f8c2d73[0]]=$_MMVAR_29fb865c052f8c2d73[1];
}		
}		
}
}
return $_MMVAR_ab939f9c64dd491efc;	
}

?>