<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
/*
保护域名，禁止以Web方式访问ksreg_server目录外的php页面
*/
define('VIPUSER','1');
$_MMVAR_8ec69fce5078565a7e=array(
'servera1.zcs1.net',
'servera2.zcs1.net',
'serverb1.zcs1.net',
'serverb2.zcs1.net'
);
$_MMVAR_951117be485c4a7b3b=strtolower($_SERVER['HTTP_HOST']);
if(in_array($_MMVAR_951117be485c4a7b3b,$_MMVAR_8ec69fce5078565a7e)){	
$_MMVAR_8605badc3b5a72a1e0=strtolower($_SERVER['REQUEST_URI']);
if(stripos($_MMVAR_8605badc3b5a72a1e0,'ksreg_server')===false){
header("HTTP/1.1 301 Moved Permanently");
header("location:http://www.zxzc.net/tree/");
exit();
}
}
?>