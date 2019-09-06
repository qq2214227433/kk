<?php
/*请一定要用NotePad2来修改本文件(不要用Windows自带的记事本，NotePad2不是记事本)*/
@ob_start();
@header('content-type:text/html;charset=utf-8');
$_MMVAR_8ba3d4eca95ad63bc6=false;
include('ksreg_version.php');
include('global_ksreg.php');

$_MMVAR_050d4884b0828b4e6c=array(99999);  /* 特殊代理可直接下单提卡，不用实时付款，订单自动完成状态（该功能只能对你特别信任的代理）比如要给代理ID为1和2的用户开放该功能：括号中就填 1,2 */


define('MYSQL1HostNameOrIp','localhost');	/* 主服数据库主机名或IP，如果MYSQL和网站在同一个服务器上填localhost即可 */
define('MYSQL1UserName','root');			/* 主服数据库用户名 */
define('MYSQL1Password','123456');			/* 主服数据库密码 */
define('MYSQL1DataBaseName','d19');		/* 主服数据库名 */

define('MYSQL2HostNameOrIp','localhost');	/* 备服数据库IP，无备服可以不填 */
define('MYSQL2UserName','root43');			/* 备服数据库用户名，无备服可以不填 */
define('MYSQL2Password','12345643');	/* 备服数据库密码，无备服可以不填 */
define('MYSQL2DataBaseName','d19b');		/* 备服数据库名，无备服可以不填 */


/*  注意：下边的参数，请用户不要自行修改 */
define('YH',chr(34));
define('SIGNFILENUMS',5);						/* signdata文件夹下的签名文件数量除以2 */
define('MD5KEY','OxEs6aoPM7vtH3S8uYdKfAWU4kILRV5qrTDzjwZiBm9ye1gFp02hNlQGcbJnCX');		/* 算法密钥 */
define('HTTPKEY','_7AjtXa65vgBiGJz4QWPwuHhEDMOI9C8kUpNb0myxeVKSsL1lq3FnR2fordYTZc|');	/* 通讯密钥 */
define('DEUSERKEY','windowsxpsystem');	/*   内置参数  add by v8 */

define('ROOTID',10000);   /* 超级管理员ID */
define('OUTVERSION',1);   /* 多用户授权改0，0检查用户卡量上限，1不检查 */
define('HOSTA','http://www.baidu.com');				/* 主服域名，以http开头，不要以/结尾 */
define('HOSTB','http://www2.baidu.com');			/* 备服域名，以http开头，不要以/结尾 */
define('KS_PATH_SERVER','/ksreg_server');		/* 服务端验证接口文件夹，请不要修改 */
define('TNREG','reg');							/* 数据表前缀名 */


define('KS_DIRP',str_replace('\\','/',dirname(__FILE__)));		/* 程序目录根路径 d:/wwwroot */
define('KS_DIR',KS_DIRP.KS_PATH);		/* 管理目录根路径 d:/wwwroot/admin */
define('KS_SESSIONDIR',KS_DIRP.'/ksreg_session');		/* session保存目录 */


function _MMFUN_e58f74c5ea3d676934(){return SVRID==1?HOSTA:HOSTB;}
function _MMFUN_dfbc78476298e0e159(){return SVRID==1?HOSTA.KS_PATH_PUBLIC:HOSTB.KS_PATH_PUBLIC;}
$_MMVAR_c8681bb53a59c8b871=array('0'=>0,'0.04'=>1,	'0.08'=>2,'0.12'=>3,'0.25'=>6,'0.51'=>12,'0.99'=>24,'1.99'=>48,'2.99'=>72);	/* 系统内置效验参数，无卡用户注册赠送设置，不允许修改 */
$_MMVAR_3dbbdfa5c2332dd525=array('1'=>1,'7'=>1,'30'=>1,'90'=>1,'185'=>1,'365'=>1,'9000'=>1);		/* 系统内置效验参数，不允许修改 */

/* 该函数被禁用 主服正常返回true 不正常返回false */
function _MMFUN_b5b21f5cf4050f894a(){	
return false;
}

/* 错误输出控制函数 */
function _KSFUN_O58f74c5ea3d676934($_MMVAR_7c033e8683336007a1, $_MMVAR_11d996825e9794b5b2,$_MMVAR_bcb6ce23fc15423aec,$_MMVAR_5afbdc5740159eef09,$_MMVAR_914a6a6157441c610a){ 
global $_MMVAR_8ba3d4eca95ad63bc6;
if(!defined('SAE_MYSQL_USER')){  /* 可操作IO记录错误日志	 */
$_MMVAR_07e79bfae22cb3717a=$_SERVER['PHP_SELF'];$_MMVAR_f9bde8b5103f4c797d=$_POST;$_MMVAR_8aa0da0f5f5c7a5dba=$_GET;$_MMVAR_38f56b706a2499182b='';$_MMVAR_b44492ea35dff9d220='';
if(!empty($_MMVAR_f9bde8b5103f4c797d)){foreach ($_MMVAR_f9bde8b5103f4c797d as $_MMVAR_74617e88896219981c=>$_MMVAR_eeae5438e6bcefcdba){$_MMVAR_38f56b706a2499182b.='&'.$_MMVAR_74617e88896219981c.'='.$_MMVAR_eeae5438e6bcefcdba;}}
if(!empty($_MMVAR_8aa0da0f5f5c7a5dba)){foreach ($_MMVAR_8aa0da0f5f5c7a5dba as $_MMVAR_74617e88896219981c=>$_MMVAR_eeae5438e6bcefcdba){$_MMVAR_b44492ea35dff9d220.='&'.$_MMVAR_74617e88896219981c.'='.$_MMVAR_eeae5438e6bcefcdba;}}
$_MMVAR_63508e3c320f486862.="\r\ndate:  ".date('Y-m-d H:i:s')."\r\nfilename:  ".$_MMVAR_07e79bfae22cb3717a."\r\nget:  ".$_MMVAR_b44492ea35dff9d220."\r\npost:  ".$_MMVAR_38f56b706a2499182b."\r\nline:  ".$_MMVAR_5afbdc5740159eef09."\r\nErrID:  ".$_MMVAR_7c033e8683336007a1."\r\nErrInfo:  ".$_MMVAR_11d996825e9794b5b2."\r\n";
$_MMVAR_684eb165e875504dbd=KS_DIRP.KS_PATH_PUBLIC.'/logs/errlog/'.date('Y-m-d').'-'.substr(md5(date('Y-m-d').MD5KEY),0,8).'.txt';
file_put_contents(''.$_MMVAR_684eb165e875504dbd.'',$_MMVAR_63508e3c320f486862,FILE_APPEND);   
}
if(stripos($_MMVAR_11d996825e9794b5b2,'php_network_getaddresses'))return false;
if(stripos($_MMVAR_11d996825e9794b5b2,'function.fopen'))return false;
$_MMVAR_8ba3d4eca95ad63bc6=true;
if(PRINTERROR==1)		/* 输出错误显示到IE */
echo '>><p style=\'color:red\'><b>',basename($_MMVAR_bcb6ce23fc15423aec),'[',$_MMVAR_5afbdc5740159eef09,'] ErrID:',$_MMVAR_7c033e8683336007a1,', ',$_MMVAR_11d996825e9794b5b2,'</b></p>';
if(stripos($_MMVAR_11d996825e9794b5b2,'mysql_')!==false)return false;
exit();

}

set_error_handler('_KSFUN_O58f74c5ea3d676934');
if (function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Chongqing');
if(SVRID==1){
$_MMVAR_abb6c66b467898e5c7=array('dbhost'=>MYSQL1HostNameOrIp,'dbuser'=>MYSQL1UserName,'dbpass'=>MYSQL1Password,'dbname'=>MYSQL1DataBaseName,'dbcharset'=>'utf8','pconnect'=>0,'newlink'=>0);
$_MMVAR_fd562bda169cdce28d=array('dbhost'=>MYSQL2HostNameOrIp,'dbuser'=>MYSQL2UserName,'dbpass'=>MYSQL2Password,'dbname'=>MYSQL2DataBaseName,'dbcharset'=>'utf8','pconnect'=>0,'newlink'=>1);
}else{
$_MMVAR_abb6c66b467898e5c7=array('dbhost'=>MYSQL2HostNameOrIp,'dbuser'=> MYSQL2UserName,'dbpass'=> MYSQL2Password,'dbname'=> MYSQL2DataBaseName,	'dbcharset'=>'utf8','pconnect'=>0,'newlink'=>0);
$_MMVAR_fd562bda169cdce28d=array('dbhost'=>MYSQL1HostNameOrIp,'dbuser'=>MYSQL1UserName,'dbpass'=>MYSQL1Password,'dbname'=>MYSQL1DataBaseName,'dbcharset'=>'utf8','pconnect'=>0,'newlink'=>1);
}

if(CCMODE==1 && defined('SAE_MYSQL_USER')==false){
$_MMVAR_6cd2e572bb6c2102d1=_MMFUN_60236b5ec048822205();
$_MMVAR_c41d05a435b3047505=file_get_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/lockip.txt');
if(stripos($_MMVAR_c41d05a435b3047505,','.$_MMVAR_6cd2e572bb6c2102d1.',')!==false){ 
exit('ip locked!');
}
}

function _MMFUN_60236b5ec048822205(){
$_MMVAR_7b799c0855ce864100='';
if (isset($_SERVER)){
if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
$_MMVAR_7b799c0855ce864100 = $_SERVER["HTTP_X_FORWARDED_FOR"];
} else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
$_MMVAR_7b799c0855ce864100 = $_SERVER["HTTP_CLIENT_IP"];
} else {
$_MMVAR_7b799c0855ce864100 = $_SERVER["REMOTE_ADDR"];
}
} else {
if (getenv("HTTP_X_FORWARDED_FOR")){
$_MMVAR_7b799c0855ce864100 = getenv("HTTP_X_FORWARDED_FOR");
} else if (getenv("HTTP_CLIENT_IP")) {
$_MMVAR_7b799c0855ce864100 = getenv("HTTP_CLIENT_IP");
} else {
$_MMVAR_7b799c0855ce864100 = getenv("REMOTE_ADDR");
}
}
$_MMVAR_894adae45c080e5c07=explode('.',$_MMVAR_7b799c0855ce864100);
list($_MMVAR_544f6c42df5d6c766c,$_MMVAR_4db23968efd9224179,$_MMVAR_04523c294cd94aea02,$_MMVAR_95a7c54e1bf23f9546)=$_MMVAR_894adae45c080e5c07;	
$_MMVAR_9adf49a7dd07a343fc=($_MMVAR_544f6c42df5d6c766c<<24)|($_MMVAR_4db23968efd9224179<<16)|($_MMVAR_04523c294cd94aea02<<8)|($_MMVAR_95a7c54e1bf23f9546);
return sprintf("%u",$_MMVAR_9adf49a7dd07a343fc);
}

/* 支付宝接口相关数据，请勿修改 */
$_MMVAR_16c425f366caa676c0     = _MMFUN_e58f74c5ea3d676934().KS_PATH_PAY.'/notify_url.php';
$_MMVAR_a37dc03aac8db00e9c     = _MMFUN_e58f74c5ea3d676934().KS_PATH_PAY.'/return_url.php';
$_MMVAR_09785c63444efa13e0 = "utf-8";
$_MMVAR_f9af453628d3348749      = "MD5";
$_MMVAR_4e23ba844976b63fb0      = "http";
$_MMVAR_a165e76d7ce4c4b348       = '';
$_MMVAR_9cb1706a7053f1b445			= 0;

?>