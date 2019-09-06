<?php 
	//生成日期:2011-11-11 16点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
define('RECODEDATA','注册卡或基卡号');			/* 记录出错的卡号数据 */


function _MMFUN_f99eb0bcb72ec8106f($_MMVAR_e25f4c48fafafc7da4,$_MMVAR_a293a79e866de775cb){
file_put_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/bug_'.$_MMVAR_e25f4c48fafafc7da4.'.log',date('Y-m-d H:i:s')."	".$_MMVAR_a293a79e866de775cb."\r\n",FILE_APPEND);
}

?>