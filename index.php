<?php 
	//生成日期:2011-11-11 16点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php

include('config_ksreg.php');
if(is_file('install/install.sql')){		
header('location:'._MMFUN_e58f74c5ea3d676934().'/install/index.php');
exit();
}
if(LOGINADMIN==1){
header('location:'._MMFUN_e58f74c5ea3d676934().KS_PATH.'/index.php');
}else if(LOGINADMIN==0){
header('location:'._MMFUN_e58f74c5ea3d676934().KS_PATH_PAY.'/card.php?userid=10000');
}else{	
echo '<p align=center><div style=\'margin:100px 0 0 0\'><img src=./ksreg_public/images/noweb.gif></div></p>';
}
?>