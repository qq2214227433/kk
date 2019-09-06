<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
$_MMVAR_9593a075de3958115c=time();
$_MMVAR_a816b68d1c663ff5c5='f=1&t='.$_MMVAR_9593a075de3958115c.'&sign='._MMFUN_cf8c11a79575861c0c('1'.$_MMVAR_9593a075de3958115c);
$_MMVAR_f9e9317d0e19d9c48e='e=&t=同步数据库异常'.$_MMVAR_9593a075de3958115c.'&sign='._MMFUN_cf8c11a79575861c0c('同步数据库异常'.$_MMVAR_9593a075de3958115c);

$_MMVAR_e2e9249f829647ae87 = @fopen (_MMFUN_e58f74c5ea3d676934().KS_PATH.'/BackupData.php?action=sendmail&'.$_MMVAR_a816b68d1c663ff5c5, 'r');
if($_MMVAR_e2e9249f829647ae87!==false){
$_MMVAR_16e2de09fac7d85c18 = fread($_MMVAR_e2e9249f829647ae87, 60);
}
fclose($_MMVAR_e2e9249f829647ae87);
?>