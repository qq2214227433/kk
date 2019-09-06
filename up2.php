<?php
/*
升级到最新版本，支持D09及以后的所有版本
*/

if(!is_file('config_ksreg_mb.php'))
	exit('Didn'.chr(39).'t find the configuration file template!');
if(is_file('up1.php'))
	exit('请选访问up1.php升级数据库!');
if(!is_file('config_ksreg.php'))
	exit('Didn'.chr(39).'t find the configuration file!');
include('config_ksreg.php');

if(!is_file(KS_DIRP.KS_PATH_SERVER.'/cryptbyphp.php'))
	copy(KS_DIRP.KS_PATH_SERVER.'/cryptbyphp16.php',KS_DIRP.KS_PATH_SERVER.'/cryptbyphp.php');
	
require(KS_DIR.'/inc/inc.php');

$dver=substr(SVERION,1,2);



	if($dver>16){
		if(!copy('global_ksreg.php','global_ksreg_bak.php'))
			exit('备份global_ksreg.php失败');
	}
	if(!copy('config_ksreg.php','config_ksreg_bak.php'))
		exit('备份config_ksreg.php失败');
	if(is_file('ksreg_version.php') && !copy('ksreg_version.php','ksreg_version_bak.php'))
		exit('备份ksreg_version.php失败');
	if(!copy('ksreg_version_mb.php','ksreg_version.php'))
		exit('更新ksreg_version.php失败');
    
    
	$cd=file_get_contents("./config_ksreg_mb.php");
	$cd=mco($cd,'MYSQL1HostNameOrIp',MYSQL1HostNameOrIp);
	$cd=mco($cd,'MYSQL2HostNameOrIp',MYSQL2HostNameOrIp);
	$cd=mco($cd,'MYSQL1UserName',MYSQL1UserName);
	$cd=mco($cd,'MYSQL2UserName',MYSQL2UserName);
	$cd=mco($cd,'MYSQL1Password',MYSQL1Password);
	$cd=mco($cd,'MYSQL2Password',MYSQL2Password);
	$cd=mco($cd,'MYSQL1DataBaseName',MYSQL1DataBaseName);
	$cd=mco($cd,'MYSQL2DataBaseName',MYSQL2DataBaseName);
	

	$cd=mco($cd,'KS_PATH_PUBLIC',KS_PATH_PUBLIC);
	$cd=mco($cd,'MD5KEY',MD5KEY);
	$cd=mco($cd,'HTTPKEY',HTTPKEY);
	$cd=mco($cd,'HOSTA',HOSTA);
	$cd=mco($cd,'HOSTB',HOSTB);	
	$cd=mco($cd,'KS_PATH_SERVER',KS_PATH_SERVER);
	$cd=mco($cd,'TNREG',TNREG);
	

	if(!file_put_contents('config_ksreg.php',$cd))
		exit('更新config_ksreg.php失败');
		
 	if(!unlink('config_ksreg_mb.php'))
		echo '删除config_ksreg_mb.php失败';   
    
    	
	$cd=file_get_contents("global_ksreg_mb.php");	
	$cd=mco($cd,'SUPERPASSWORD',SUPERPASSWORD);
	$cd=mco2($cd,'IS2SVR',IS2SVR);
	$cd=mco2($cd,'SVRID',SVRID);	
	$cd=mco2($cd,'SYNCTIME',SYNCTIME);
	$cd=mco2($cd,'SYNCCSTIME',SYNCCSTIME);	
	$cd=mco2($cd,'ALIPAYSAFE',ALIPAYSAFE);
	$cd=mco($cd,'KS_PATH',KS_PATH);	
	$cd=mco2($cd,'CCMODE',CCMODE);
	$cd=mco2($cd,'CCTIME',CCTIME);
	$cd=mco2($cd,'CCTIMES',CCTIMES);
	//$cd=mco2($cd,'MEMEXT',MEMEXT);
	//$cd=mco($cd,'MEMCHACEDNAME',MEMCHACEDNAME);
	//$cd=mco2($cd,'RECORDTIMES',RECORDTIMES);
	$cd=mco($cd,'ICPNUM',ICPNUM);
	$cd=mco2($cd,'DAY1KEYNUM',DAY1KEYNUM);
	$cd=mco2($cd,'MAXAGENT',MAXAGENT);
	$cd=mco2($cd,'LOGINADMIN',LOGINADMIN);	
	$cd=mco2($cd,'SAVELOGTIME',SAVELOGTIME);
	$cd=mco2($cd,'DELKEYTIME',DELKEYTIME);
	$cd=mco2($cd,'AUTODELKEYTIME',AUTODELKEYTIME);
	$cd=mco2($cd,'RECHARGELOGTIME',RECHARGELOGTIME);	
	$cd=mco($cd,'KS_PATH_PAY',KS_PATH_PAY);
	$cd=mco2($cd,'PRINTERROR',PRINTERROR);
	$cd=mco2($cd,'KS_SESSIONSAVEWEBDIR',KS_SESSIONSAVEWEBDIR);	

	if($dver>17){
		$cd=mco($cd,'CryptMode',CryptMode);
		$cd=mco($cd,'CLEAR_HasPrepaidCard',CLEAR_HasPrepaidCard);
		$cd=mco($cd,'CLEAR_ExpiredFreeAccount',CLEAR_ExpiredFreeAccount);
		$cd=mco($cd,'CLEAR_FreeSaveDay',CLEAR_FreeSaveDay);
		$cd=mco($cd,'CLEAR_OrderA',CLEAR_OrderA);
		$cd=mco($cd,'CLEAR_OrderB',CLEAR_OrderB);
	}
		
	if(!file_put_contents('global_ksreg.php',$cd))
		exit('更新global_ksreg.php失败');
	
 	if(!unlink('global_ksreg_mb.php'))
		echo '删除global_ksreg_mb.php失败';  

	if(!unlink('ksreg_version_mb.php'))
		echo '删除ksreg_version_mb.php失败';
		
	if(!unlink('up2.php'))
		echo '删除up2.php失败';
		
	echo "已完成升级升级！";
	

function mco($c,$n,$v){		//字符串
	return preg_replace('/define\(\''.$n.'\',\'[^\']*\'\)/i','define(\''.$n.'\',\''.$v.'\')', $c); 
} 
function mco2($c,$n,$v){		//数字
	return preg_replace('/define\(\''.$n.'\',[^\)]*\)/i','define(\''.$n.'\','.$v.')', $c); 
} 
?>