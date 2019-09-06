<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
if(stripos(ini_get('disable_functions'),'set_time_limit')===false)@set_time_limit(3);
echo 'hosta:';

$_MMVAR_25da1a9e95f04d69b8=strtolower(ini_get('allow_url_fopen'));
if($_MMVAR_25da1a9e95f04d69b8=='on' || $_MMVAR_25da1a9e95f04d69b8=='1'){
$_MMVAR_e2e9249f829647ae87 = @fopen (HOSTA.KS_PATH_PUBLIC.'/logs/jsq.txt?rand='.time(), 'rb');
if($_MMVAR_e2e9249f829647ae87!==false){		
echo 'connection normal!';
}else{
echo 'connection failure!';
}
fclose($_MMVAR_e2e9249f829647ae87);
}else{
exit('connection failure!');
}
?>