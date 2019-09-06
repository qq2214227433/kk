<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/import.fun.php');
require(KS_DIR.'/inc/mysql.cls.php');
$_MMVAR_9f95914834184aeeae=New mysql_cls;
$_MMVAR_9f95914834184aeeae->_MMFUN_06067bafeb84eaf0af($_MMVAR_abb6c66b467898e5c7);
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select SQL_NO_CACHE * from '.TNREG.'_taskset where id=1');
echo $_MMVAR_5a0f5f64cd15c205df['isclose'];
?>