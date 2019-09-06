<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
define('LOCKSFILE',KS_DIRP.KS_PATH.'/sync.lock');
$_MMVAR_91d37c325c2ce4cbce=false;

$_MMVAR_25da1a9e95f04d69b8=strtolower(ini_get('allow_url_fopen'));
$_MMVAR_260802ccd192442298=ini_get('disable_functions');
$_MMVAR_2ecc500ab3c536a406=ini_get('max_execution_time');

echo '[disable_functions]:',$_MMVAR_260802ccd192442298,'[allow_url_fopen]:',$_MMVAR_25da1a9e95f04d69b8,'[max_execution_time]:',$_MMVAR_2ecc500ab3c536a406;

$_MMVAR_52ac97ff6c8e060935=stripos($_MMVAR_260802ccd192442298,'ignore_user_abort');
$_MMVAR_e52ceb94910b183129=stripos($_MMVAR_260802ccd192442298,'set_time_limit');
if($_MMVAR_25da1a9e95f04d69b8=='on' || $_MMVAR_25da1a9e95f04d69b8=='1'){
$_MMVAR_25da1a9e95f04d69b8=false;
}else{
$_MMVAR_25da1a9e95f04d69b8=true;
}
if($_MMVAR_25da1a9e95f04d69b8==false && $_MMVAR_52ac97ff6c8e060935===false && $_MMVAR_e52ceb94910b183129===false){
oldsync();
}else{
_MMFUN_ad0caae3da5b3e74fa();
}

function _MMFUN_94cbbd0f87c2efae38(){
global $_MMVAR_91d37c325c2ce4cbce;
$_MMVAR_91d37c325c2ce4cbce=fopen(LOCKSFILE,'w+');
if(flock($_MMVAR_91d37c325c2ce4cbce, LOCK_EX | LOCK_NB)){
return true;
}
return false;
}

function _MMFUN_ad0caae3da5b3e74fa(){
global $_MMVAR_52ac97ff6c8e060935,$_MMVAR_e52ceb94910b183129,$_MMVAR_2ecc500ab3c536a406;
$_MMVAR_43d7eb8ae56c5860b8=SYNCCSTIME;
if($_MMVAR_e52ceb94910b183129===false)
$_MMVAR_43d7eb8ae56c5860b8=$_MMVAR_2ecc500ab3c536a406;

}

?>