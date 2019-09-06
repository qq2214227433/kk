<?php 
	//生成日期:2011-11-04 16点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
/*请一定要用NotePad2来修改本文件(不要用Windows自带的记事本，NotePad2不是记事本)*/
@ob_start();
@header('content-type:text/html;charset=utf-8');
$_MMVAR_8ba3d4eca95ad63bc6=false;
define('SUPERPASSWORD','670b14728ad9902aecba32e22fa4f6bd');		/* 超级密码，标准MD5算法加密保存的，以该密码的原始字符串可以登陆任意用户帐号 */

define('IS2SVR',0);			/* 是否是双服验证，是的话填1，如果你只有一个服务器，请填0 */
define('SVRID',1);				/* 当前服务器ID，是主服的话填1，备服请填2 */

define('CHKADVAPI',1);				/* Add by B0128 是否检查连接advapi用户的合法性，1为检查(增加一部份mysql开销，提高安全性)，0为不检查  */

define('MYSQL1HostNameOrIp','localhost');	/* 主服数据库主机名或IP，如果MYSQL和网站在同一个服务器上填localhost即可 */
define('MYSQL1UserName','root');			/* 主服数据库用户名 */
define('MYSQL1Password','123456');			/* 主服数据库密码 */
define('MYSQL1DataBaseName','d15');		/* 主服数据库名 */

define('MYSQL2HostNameOrIp','******');	/* 备服数据库IP，无备服可以不填 */
define('MYSQL2UserName','******');			/* 备服数据库用户名，无备服可以不填 */
define('MYSQL2Password','******');	/* 备服数据库密码，无备服可以不填 */
define('MYSQL2DataBaseName','******');		/* 备服数据库名，无备服可以不填 */

define('MEMEXT',0);						/* 单用户授权请填0，多用户授权如果你想限制用户使用advapi的次数的话，主机不支持memcache扩展填1，支持的话填2 */
define('ROOTUSER','admin');				/* 超级管理员权限绑定的用户名，也就是说以该用户名登录的拥有超级管理员权限 */
define('ICPNUM','*ICP备*******号');		/* 网站ICP备案号 */
define('DAY1KEYNUM',2000);		/* 每个用户最多天卡数，默认2000 */
define('MAXAGENT',80);			/* 每个用户最多允许添加多少代理用户 */
define('LOGINADMIN',1);		/* 打个首页跳转到管理后台登陆页，0为跳到用户id为10000的售卡系统 */

define('SAVELOGTIME',2);		/* 自动删除多少天前的安全日志，建议只保留两天的 */
define('DELKEYTIME',7);		/* 自动删除多少天前被标记为删除的卡 */
define('AUTODELKEYTIME',60);	/* 自动删除多少天前过期或已充值的卡 */
define('RECHARGELOGTIME',120);	/* 自动删除多少天前的充值日志 */

define('SYNCTIME',900);		/* 900秒同步一次数据 */
define('SYNCCSTIME',300);		/* 每次同步最长时间为300秒，超出算超时 */

define('ALIPAYSAFE',1);		/* 如若售卡系统客户在线支付不能取卡，请将此参数改为0 */
define('KS_PATH','/ksreg_admin');	/* 管理目录路径，建议修改，以/开头，不要以/结尾 */

define('CCMODE',0);					/* 为1开启防刷新，封IP。 */
define('CCTIME',70);				/* CCMODE为了时才有效，同一IP两次访问少于该值累加一次，大于该值该IP累加次数清0。 */
define('CCTIMES',8);				/* CCMODE为了时才有效，累计次数超出该值，封IP。 */
/* 
以下两个参数建议不要修改
有两种情况强列建议你修改以下配置
1、你不想用售卡系统
2、KS_PATH_PAY或KS_PATH_PUBLIC目录的某个文件被CC攻击
如果你修改了KS_PATH_PAY记得通知你的客户新的售卡系统页面链接
*/
define('KS_PATH_PAY','/kspay');							/* 售卡系统目录路径，以/开头，不要以/结尾 */
define('KS_PATH_PUBLIC','/ksreg_public');				/* 系统公用的目录路径，以/开头，不要以/结尾 */


/* 
注意：下边的参数，请用户不要自行修改
*/
define('YH',chr(34));
define('PRINTERROR',1);						/* 屏幕输出出错信息，1为是，0为否 */
define('SIGNFILENUMS',5);						/* signdata文件夹下的签名文件数量除以2 */
define('MD5KEY','lQGcYdKfABm9ye1gFp02O3S8ukILRM7vtHhNxTDzjwZis6aoPEWU4bJnCXV5qr');		/* 算法密钥 */
define('HTTPKEY','_AjtXa65vQWPwfokUpNbh7uq3FnR2HlcI9CgBEDMOiG8xeVKJz4SsL10myrdYTZ|');	/* 通讯密钥 */
define('MEMCHACEDNAME','cache_testcom');		/* memcache缓存前缀名，以防冲突 */
define('RECORDTIMES',0);						/* 是否记录验证总次数0不记录 1记录，记录总次数会占用一定的CPU */
define('HOSTA','http://127.0.0.1');				/* 主服域名，以http开头，不要以/结尾 */
define('HOSTB','http://127.0.0.1');			/* 备服域名，以http开头，不要以/结尾 */
define('KS_PATH_SERVER','/ksreg_server');		/* 服务端验证接口文件夹，请不要修改 */
define('TNREG','reg');							/* 数据表前缀名 */


define('KS_DIRP',str_replace('\\','/',dirname(__FILE__)));		/* 程序目录根路径 d:/wwwroot */
define('KS_DIR',KS_DIRP.KS_PATH);		/* 管理目录根路径 d:/wwwroot/admin */
define('KS_SESSIONSAVEWEBDIR',1);				/* session保存在web目录，由系统控制的设为 0 */
define('KS_SESSIONDIR',KS_DIRP.'/ksreg_session');		/* session保存目录 */

include(KS_DIR.'/inc/ProtectDomain.php');
include(KS_DIRP.'/ksreg_version.php');
include(KS_DIR.'/patch/patch_index.php');

function _MMFUN_e58f74c5ea3d676934(){return SVRID==1?HOSTA:HOSTB;}
function _MMFUN_dfbc78476298e0e159(){return SVRID==1?HOSTA.KS_PATH_PUBLIC:HOSTB.KS_PATH_PUBLIC;}
$_MMVAR_c8681bb53a59c8b871=array('0'=>0,'0.04'=>1,	'0.08'=>2,'0.12'=>3,'0.25'=>6,'0.51'=>12,'0.99'=>24,'1.99'=>48,'2.99'=>72);	/* 系统内置效验参数，无卡用户注册赠送设置，不允许修改 */
$_MMVAR_3dbbdfa5c2332dd525=array('1'=>1,'7'=>1,'30'=>1,'90'=>1,'185'=>1,'365'=>1,'9000'=>1);		/* 系统内置效验参数，不允许修改 */

/* 主服正常返回true 不正常返回false */
function _MMFUN_b5b21f5cf4050f894a(){
$_MMVAR_e2e9249f829647ae87 = @fopen (HOSTB.KS_PATH_PUBLIC.'/chkhosta.php?rand='.time(), 'rb');
if($_MMVAR_e2e9249f829647ae87!==false){
$_MMVAR_16e2de09fac7d85c18 = fread($_MMVAR_e2e9249f829647ae87, 60);
fclose($_MMVAR_e2e9249f829647ae87);
if(stristr($_MMVAR_16e2de09fac7d85c18,'connection normal')!==false)
return true;
}
return false;
}

/* 出现意外错误时记录日志 */
function _KSFUN_O58f74c5ea3d676934($_MMVAR_7c033e8683336007a1, $_MMVAR_11d996825e9794b5b2,$_MMVAR_bcb6ce23fc15423aec,$_MMVAR_5afbdc5740159eef09,$_MMVAR_914a6a6157441c610a){ 
global $_MMVAR_8ba3d4eca95ad63bc6,$_MMVAR_e21ee1d236d13da420,$_MMVAR_633a5e390b3be6a833;
$_MMVAR_07e79bfae22cb3717a=$_SERVER['PHP_SELF'];$_MMVAR_f9bde8b5103f4c797d=$_POST;$_MMVAR_8aa0da0f5f5c7a5dba=$_GET;$_MMVAR_38f56b706a2499182b='';$_MMVAR_b44492ea35dff9d220='';
if(!empty($_MMVAR_f9bde8b5103f4c797d)){foreach ($_MMVAR_f9bde8b5103f4c797d as $_MMVAR_74617e88896219981c=>$_MMVAR_eeae5438e6bcefcdba){$_MMVAR_38f56b706a2499182b.='&'.$_MMVAR_74617e88896219981c.'='.$_MMVAR_eeae5438e6bcefcdba;}}
if(!empty($_MMVAR_8aa0da0f5f5c7a5dba)){foreach ($_MMVAR_8aa0da0f5f5c7a5dba as $_MMVAR_74617e88896219981c=>$_MMVAR_eeae5438e6bcefcdba){$_MMVAR_b44492ea35dff9d220.='&'.$_MMVAR_74617e88896219981c.'='.$_MMVAR_eeae5438e6bcefcdba;}}
$_MMVAR_63508e3c320f486862='';$_MMVAR_63508e3c320f486862.="\r\nweb:(  "._MMFUN_dfbc78476298e0e159()."\r\n";
$_MMVAR_63508e3c320f486862.='date:  '.date('Y-m-d H:i:s')."\r\nfilename:  ".$_MMVAR_07e79bfae22cb3717a."\r\nget:  ".$_MMVAR_b44492ea35dff9d220."\r\npost:  ".$_MMVAR_38f56b706a2499182b."\r\nline:  ".$_MMVAR_5afbdc5740159eef09."\r\nErrID:  ".$_MMVAR_7c033e8683336007a1."\r\nErrInfo:  ".$_MMVAR_11d996825e9794b5b2."\r\n";
$_MMVAR_684eb165e875504dbd=KS_DIRP.KS_PATH_PUBLIC.'/logs/errlog/'.date('Y-m-d').'-'.substr(md5(date('Y-m-d').MD5KEY),0,8).'.txt';
/* 
如果是自己的服务器的话，发生数据库连接10055错误时，写一个文件到指定目录
服务端添加一计划任务：每五分钟运行一次bat文件，该bat文件检查10055错误文件是否存在，存在的话重启服务器并删除该错误记录文件。
以实现服务器出现mysql 10055错误时能在短时间内自动重启。
*/
if(stripos($_MMVAR_63508e3c320f486862,'(10055)')!==false){		
file_put_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/MysqlErr10055.txt','1');
file_put_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/mysqlerr10055.log','errDate:'.date('Y-m-d H:i:s')."\r\n",FILE_APPEND);
$_MMVAR_63508e3c320f486862.='err:mysql 10055';
}

file_put_contents(''.$_MMVAR_684eb165e875504dbd.'',$_MMVAR_63508e3c320f486862,FILE_APPEND);   /* 记录错误日志	 */

if(stripos($_MMVAR_11d996825e9794b5b2,'php_network_getaddresses'))return false;
if(stripos($_MMVAR_11d996825e9794b5b2,'function.fopen'))return false;
$_MMVAR_8ba3d4eca95ad63bc6=true;
if(PRINTERROR==1)		/* 输出错误显示到IE */
echo '<p align=center style=\'color:red;margin-top:50px\'><b>',basename($_MMVAR_bcb6ce23fc15423aec),'[',$_MMVAR_5afbdc5740159eef09,'] ErrID:',$_MMVAR_7c033e8683336007a1,', ',$_MMVAR_11d996825e9794b5b2,'</b></p>';
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

if(CCMODE==1){
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

/* 以下参数请勿修改 */
$_MMVAR_16c425f366caa676c0     = _MMFUN_e58f74c5ea3d676934().KS_PATH_PAY.'/notify_url.php';
$_MMVAR_a37dc03aac8db00e9c     = _MMFUN_e58f74c5ea3d676934().KS_PATH_PAY.'/return_url.php';
$_MMVAR_09785c63444efa13e0 = "utf-8";
$_MMVAR_f9af453628d3348749      = "MD5";
$_MMVAR_4e23ba844976b63fb0      = "http";
$_MMVAR_a165e76d7ce4c4b348       = "";
$_MMVAR_9cb1706a7053f1b445			= 0;

define('COPYRIGHT1','<div style=\'font-family: Verdana, sans-serif;text-align:center;margin-top:50px\'>');
define('COPYRIGHT2','&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />');
define('COPYRIGHT3','Copyright © 2008-2011 www.hphu.com, All rights Reserved.  &nbsp;&nbsp;&nbsp;&nbsp;Server version: <a href=http://www.hphu.com/url/version.php target=_blank>'.SVERION.'</a><br><br><br> </div> ');
define('COPYRIGHT',COPYRIGHT1.COPYRIGHT2.COPYRIGHT3);

?>