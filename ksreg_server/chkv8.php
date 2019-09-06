<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php

require('../config_ksreg.php');
require(KS_DIR.'/inc/import.fun.php');
require(KS_DIR.'/inc/mysql.cls.php');
require('cryptbyphp.php');
if(_MMFUN_cccffb711bc5a3fd77()=='自己的IP')
exit('<p>主服不可用</p>');
$_MMVAR_cfa5e1db9fb8093a6b='';
$_MMVAR_9a20152442375584e1='';

define('FIRSTNOTTIMES',1);
$_MMVAR_9f95914834184aeeae=New mysql_cls;
$_MMVAR_9f95914834184aeeae->_MMFUN_06067bafeb84eaf0af($_MMVAR_abb6c66b467898e5c7);
if(CCMODE==1)
include(KS_DIR.'/inc/cc_api.php');


if(isset($_GET['webapi'])){
include('chkv8api.php');
$_MMVAR_eb95a6095fd9d6b025=array();
switch ($_GET['webapi']){
Case "reguser":
$_MMVAR_eb95a6095fd9d6b025[]='webapi';
$_MMVAR_eb95a6095fd9d6b025[]='reguser';
$_MMVAR_eb95a6095fd9d6b025[]='web'.substr(md5(time()),0,13);
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['softcode'];
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['username'];
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['password1'];
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['password2'];
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['key'];
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['bdinfo'];
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['puser'];
$_MMVAR_eb95a6095fd9d6b025[]='';
_MMFUN_337d0a70204682195a($_MMVAR_eb95a6095fd9d6b025);
break;
Case "recharge":
$_MMVAR_eb95a6095fd9d6b025[]='webapi';
$_MMVAR_eb95a6095fd9d6b025[]='recharge';
$_MMVAR_eb95a6095fd9d6b025[]='';
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['softcode'];
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['username'];
$_MMVAR_eb95a6095fd9d6b025[]=$_GET['key'];
_MMFUN_3a4bea12ce89e48a80($_MMVAR_b0b00e6800c176858c);
break;
default:
_MMFUN_6f484219d146c647f3('访问服务器接口名错误。');
}
}

if(isset($_POST['s'])){
$_MMVAR_1be06f0e183a1f6f17=$_POST['s'];
}else{
$_MMVAR_1be06f0e183a1f6f17=$_GET['s'];
}
if($_MMVAR_1be06f0e183a1f6f17=='synccheck'){
_MMFUN_205549c1b9bb4d4d50('newversion');
exit('sync_task_ok');
}

$_MMVAR_557061cfd16fafe262=md5(_MMFUN_cc3cf510bffd973b95('view', 'get', 'sql', ''));
$_MMVAR_fc16405ec9ab44b8de=_MMFUN_cc3cf510bffd973b95('resultnotencrypt', 'get', 'int', 0);
$_MMVAR_a84290412d2881d844=0;
$_MMVAR_1be06f0e183a1f6f17=_MMFUN_702c0b5fce9dc69d2a($_MMVAR_1be06f0e183a1f6f17,DEUSERKEY,$_MMVAR_a84290412d2881d844);

if(substr($_MMVAR_1be06f0e183a1f6f17,0,5)!='crypt'){
if($_MMVAR_fc16405ec9ab44b8de==1) _MMFUN_6f484219d146c647f3('服务器无法正常解密数据。');
_MMFUN_6f484219d146c647f3('crypt801');
}

$_MMVAR_b0b00e6800c176858c=explode(':|:', $_MMVAR_1be06f0e183a1f6f17);

$_MMVAR_f1c8cf7cf0e1561333='E';  $_MMVAR_be0ff7fbb4af7d07f5='';  $_MMVAR_80d88ec48b70fed130=0;

if($_MMVAR_557061cfd16fafe262=='46e7b5849c67b7fd9a60cdb012e41ff7'){echo '<pre>';print_r($_MMVAR_b0b00e6800c176858c);echo '</pre>';}


if($_MMVAR_b0b00e6800c176858c[1]=='logout')_MMFUN_f8620cf3b4e82253b3($_MMVAR_b0b00e6800c176858c);


if ($_MMVAR_b0b00e6800c176858c[1]=="basechk") _MMFUN_d5f42e77a3a11c4ade($_MMVAR_b0b00e6800c176858c);


if ($_MMVAR_b0b00e6800c176858c[1]=="advapi"){
_MMFUN_fcab322959e9ff7dea($_MMVAR_b0b00e6800c176858c);
}else{

include('chkv8api.php');
if(SVRID==1){
if($_MMVAR_b0b00e6800c176858c[1]=='unbind' || $_MMVAR_b0b00e6800c176858c[1]=='reguser' || $_MMVAR_b0b00e6800c176858c[1]=='viewkey' || $_MMVAR_b0b00e6800c176858c[1]=='edituser' || $_MMVAR_b0b00e6800c176858c[1]=='editkey'|| $_MMVAR_b0b00e6800c176858c[1]=='recharge'){
switch ($_MMVAR_b0b00e6800c176858c[1]){
Case "unbind":
_MMFUN_c4b272df3edf323d93($_MMVAR_b0b00e6800c176858c);
break;
Case "reguser":
_MMFUN_337d0a70204682195a($_MMVAR_b0b00e6800c176858c);
break;
Case "viewkey":
_MMFUN_78601124d5e6917c3d($_MMVAR_b0b00e6800c176858c);
break;
Case "edituser":
_MMFUN_b2e7f4b840a0e994cc($_MMVAR_b0b00e6800c176858c);
break;
Case "editkey":
_MMFUN_34844143d34a8e889b($_MMVAR_b0b00e6800c176858c);
break;
Case "recharge":
_MMFUN_3a4bea12ce89e48a80($_MMVAR_b0b00e6800c176858c);
break;
default:
}
_MMFUN_6f484219d146c647f3();
}
_MMFUN_6f484219d146c647f3('访问服务器接口名错误。');
}else{
echo '备服操作，';
if($_MMVAR_b0b00e6800c176858c[1]=='reguserext' || $_MMVAR_b0b00e6800c176858c[1]=='viewkeyext' || $_MMVAR_b0b00e6800c176858c[1]=='rechargeext'){
if($_MMVAR_b0b00e6800c176858c[1]=='reguserext' || $_MMVAR_b0b00e6800c176858c[1]=='rechargeext'){				
$_MMVAR_43e9195d525683d0f7=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_taskset` where `id`=1');
if($_MMVAR_43e9195d525683d0f7['starttime'] + 1200 > time())
_MMFUN_6f484219d146c647f3('请等'.intval(($_MMVAR_43e9195d525683d0f7['starttime'] + 1200 - time()) / 60).'分钟再试，主服务器可能还在正常运行中。');
}

switch ($_MMVAR_b0b00e6800c176858c[1]){
Case "reguserext":
_MMFUN_5ac4e8410da781c0c4($_MMVAR_b0b00e6800c176858c);
break;
Case "viewkeyext":
_MMFUN_78601124d5e6917c3d($_MMVAR_b0b00e6800c176858c);
break;
Case "rechargeext":
_MMFUN_9e6d6419410a560039($_MMVAR_b0b00e6800c176858c);
break;
default:
}
_MMFUN_6f484219d146c647f3();
}
_MMFUN_6f484219d146c647f3('访问服务器接口名错误。');
}
}


function api_ds($_MMVAR_3196e54d5656921ca9){

global $_MMVAR_9f95914834184aeeae,$_MMVAR_9a20152442375584e1,$_MMVAR_cfa5e1db9fb8093a6b;
if($_MMVAR_3196e54d5656921ca9<=0)
return 'no';
$_MMVAR_d3fbf02d487178a212=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select `dayactivetimes` from `'.$_MMVAR_9a20152442375584e1.'` where  `keys`=\''.$_MMVAR_cfa5e1db9fb8093a6b[5].'\''); 
if($_MMVAR_d3fbf02d487178a212['dayactivetimes']<$_MMVAR_3196e54d5656921ca9)
return 'no';
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_9a20152442375584e1.'` SET `dayactivetimes`=`dayactivetimes`-'.$_MMVAR_3196e54d5656921ca9.' where `keys`=\''.$_MMVAR_cfa5e1db9fb8093a6b[5].'\'', 'sync');
return 'ok';

}

function _MMFUN_fcab322959e9ff7dea($_MMVAR_b0b00e6800c176858c){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_a84290412d2881d844,$_MMVAR_cfa5e1db9fb8093a6b;
list($_MMVAR_0454bf37b62d08d089,$_MMVAR_7b6896960481a4d007,$_MMVAR_58de0eebf9c657e599,$_MMVAR_e8a3403d69ff92b042,$_MMVAR_690ac2799052e80b82,$_MMVAR_9bc3356454a08037c9,$_MMVAR_efbd0702871961d1f7,$_MMVAR_f08e348f6b101d999f)=$_MMVAR_b0b00e6800c176858c;
$_MMVAR_cfa5e1db9fb8093a6b=$_MMVAR_b0b00e6800c176858c;
$_MMVAR_7a95935f671f06ce97=KS_DIRP.KS_PATH.'/phpcode/'.$_MMVAR_e8a3403d69ff92b042.'_'._MMFUN_cf8c11a79575861c0c($_MMVAR_e8a3403d69ff92b042,8).'.php';

if(is_file($_MMVAR_7a95935f671f06ce97)!==true)
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR Didn'.chr(39).'t find the API PHP files',DEUSERKEY,$_MMVAR_a84290412d2881d844));

if(CHKADVAPI==1)_MMFUN_94b26cf2048ac72ae3($_MMVAR_b0b00e6800c176858c);
include($_MMVAR_7a95935f671f06ce97);

$_MMVAR_ea8a834b6a94523fe3=explode(',', $_MMVAR_690ac2799052e80b82);
$_MMVAR_570fecca21fcc45976=$_MMVAR_ea8a834b6a94523fe3[0];
if(substr($_MMVAR_570fecca21fcc45976,0,2)!='v_')
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR API function name must begin with v_',DEUSERKEY,$_MMVAR_a84290412d2881d844));

if (!function_exists($_MMVAR_570fecca21fcc45976))
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR API didn'.chr(39).'t find it',DEUSERKEY,$_MMVAR_a84290412d2881d844));

_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889($_MMVAR_570fecca21fcc45976($_MMVAR_ea8a834b6a94523fe3),DEUSERKEY,$_MMVAR_a84290412d2881d844));
}


function _MMFUN_94b26cf2048ac72ae3($_MMVAR_b0b00e6800c176858c){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_a84290412d2881d844,$_MMVAR_9a20152442375584e1;
list($_MMVAR_0454bf37b62d08d089,$_MMVAR_7b6896960481a4d007,$_MMVAR_58de0eebf9c657e599,$_MMVAR_e8a3403d69ff92b042,$_MMVAR_690ac2799052e80b82,$_MMVAR_9bc3356454a08037c9,$_MMVAR_efbd0702871961d1f7,$_MMVAR_f08e348f6b101d999f)=$_MMVAR_b0b00e6800c176858c;
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_xjl` where `xjlcode`='.$_MMVAR_e8a3403d69ff92b042);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR Didn'.chr(39).'t find software',DEUSERKEY,$_MMVAR_a84290412d2881d844));
$_MMVAR_5469941594cb77a2cc=$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_d033b340b90db33987=$_MMVAR_e9ffef5bdc7675ff63['userid'];
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_9a20152442375584e1=$_MMVAR_3fc22e00af1642a292;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_9bc3356454a08037c9.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR Account didn'.chr(39).'t find',DEUSERKEY,$_MMVAR_a84290412d2881d844));

if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR Account didn'.chr(39).'t find',DEUSERKEY,$_MMVAR_a84290412d2881d844));

if($_MMVAR_be0ff7fbb4af7d07f5['normal'] != 1)
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR Account is locked',DEUSERKEY,$_MMVAR_a84290412d2881d844));

if(($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys' && $_MMVAR_be0ff7fbb4af7d07f5['linknum']<2) || (intval($_MMVAR_e9ffef5bdc7675ff63['dkbindpc']) < 2 && $_MMVAR_e9ffef5bdc7675ff63['ext1']=='user')){
if($_MMVAR_be0ff7fbb4af7d07f5['cday']!=0 && $_MMVAR_be0ff7fbb4af7d07f5['chkcode'] != $_MMVAR_f08e348f6b101d999f)
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR Online code(1)',DEUSERKEY,$_MMVAR_a84290412d2881d844));
}else{
if(intval($_MMVAR_e9ffef5bdc7675ff63['dkbindpc']) < 2 && $_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
$_MMVAR_5d8476ca936eea9a12=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_link` where `keys`=\''.$_MMVAR_9bc3356454a08037c9.'\' and `xjlid`='.$_MMVAR_be0ff7fbb4af7d07f5['xjlid'].' and `clientid`='.$_MMVAR_efbd0702871961d1f7);
if(empty($_MMVAR_5d8476ca936eea9a12))
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR Not found activities record(s)',DEUSERKEY,$_MMVAR_a84290412d2881d844));
if($_MMVAR_5d8476ca936eea9a12['linecode'] != $_MMVAR_f08e348f6b101d999f)
_MMFUN_6f484219d146c647f3('crypt'._MMFUN_df8fb5929e03bb4889('ERR Online code(s)',DEUSERKEY,$_MMVAR_a84290412d2881d844));
}  
}
}


function _MMFUN_f8620cf3b4e82253b3($_MMVAR_b0b00e6800c176858c){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_0454bf37b62d08d089,$_MMVAR_7b6896960481a4d007,$_MMVAR_58de0eebf9c657e599,$_MMVAR_c90455ba5250dd5068,$_MMVAR_9bc3356454a08037c9,$_MMVAR_efbd0702871961d1f7,$_MMVAR_f08e348f6b101d999f,$_MMVAR_8fb0dd4f956115dffa,$_MMVAR_9af6ec928bc5fb5f77)=$_MMVAR_b0b00e6800c176858c;
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_xjl` where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);    
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('exitok1');
if($_MMVAR_e9ffef5bdc7675ff63['muestexit']==0)
exit('exitok');

$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];

$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_9bc3356454a08037c9.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('exitok2');

if($_MMVAR_be0ff7fbb4af7d07f5['d13int5']!='1'){
exit('exitok');
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['v7ext2']==$_MMVAR_8fb0dd4f956115dffa || $_MMVAR_be0ff7fbb4af7d07f5['v7ext2']==''){ 
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET lastonlinetime=0, v7ext2=\'\',d13int5=0 where `keys`=\''.$_MMVAR_9bc3356454a08037c9.'\'', 'sync');
exit('exitok');	
}else{
exit('exitok5');
}		
}
}

function _MMFUN_d5f42e77a3a11c4ade($_MMVAR_b0b00e6800c176858c){
global $_MMVAR_9f95914834184aeeae, $_MMVAR_f1c8cf7cf0e1561333, $_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_80d88ec48b70fed130,$_MMVAR_a84290412d2881d844;
$_MMVAR_b70bd996b0bf4e27ef=array();
$_MMVAR_8e47823876210f2e4b=time();
$_MMVAR_33a8b9db2156aec1e6=intval(date('d'));
//crypt，______，机器码，软件编号，验证次数，在线码，客户端ID，注册卡号，是否换服，软件版本，网卡号 ,用户名，登陆密码，绑定分区，绑定信息，语言ID
list($_MMVAR_0454bf37b62d08d089,$_MMVAR_7b6896960481a4d007, $_MMVAR_58de0eebf9c657e599, $_MMVAR_c90455ba5250dd5068, $_MMVAR_22a70aaa8ab69db4b0, $_MMVAR_f08e348f6b101d999f, $_MMVAR_efbd0702871961d1f7, $_MMVAR_477afeb555696efb83, $_MMVAR_45e2d7f115c6bc331e, $_MMVAR_fff456afd2b989a8fd, $_MMVAR_e9cecf1e96749d9a82, $_MMVAR_9ead9b0958c0f8079a, $_MMVAR_0e0e5d5748acd45adc, $_MMVAR_856056e948ad33ed5d, $_MMVAR_d99dead5e849c2cbe4,$_MMVAR_e71529762b29c24556,$_MMVAR_8fb0dd4f956115dffa)=$_MMVAR_b0b00e6800c176858c;

$_MMVAR_9ead9b0958c0f8079a=_MMFUN_c3428c7e6251d22b7d($_MMVAR_9ead9b0958c0f8079a);

$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);	
$_MMVAR_58de0eebf9c657e599=_MMFUN_4bb069f11df5d99e54($_MMVAR_58de0eebf9c657e599);	
$_MMVAR_22a70aaa8ab69db4b0=_MMFUN_4bb069f11df5d99e54($_MMVAR_22a70aaa8ab69db4b0);	
$_MMVAR_f08e348f6b101d999f=_MMFUN_4bb069f11df5d99e54($_MMVAR_f08e348f6b101d999f);	
$_MMVAR_477afeb555696efb83=_MMFUN_4bb069f11df5d99e54($_MMVAR_477afeb555696efb83);	
$_MMVAR_45e2d7f115c6bc331e=_MMFUN_4bb069f11df5d99e54($_MMVAR_45e2d7f115c6bc331e);	
$_MMVAR_fff456afd2b989a8fd=_MMFUN_4bb069f11df5d99e54($_MMVAR_fff456afd2b989a8fd);	

$_MMVAR_e9cecf1e96749d9a82=_MMFUN_4bb069f11df5d99e54($_MMVAR_e9cecf1e96749d9a82);	
$_MMVAR_0e0e5d5748acd45adc=_MMFUN_4bb069f11df5d99e54($_MMVAR_0e0e5d5748acd45adc);	
$_MMVAR_856056e948ad33ed5d=_MMFUN_4bb069f11df5d99e54($_MMVAR_856056e948ad33ed5d);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_xjl` where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);    
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6f484219d146c647f3('crypt634');
$_MMVAR_80d88ec48b70fed130=$_MMVAR_22a70aaa8ab69db4b0;
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
if(strlen($_MMVAR_477afeb555696efb83)<16)
_MMFUN_6f484219d146c647f3('crypt642');
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_477afeb555696efb83.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
_MMFUN_6f484219d146c647f3('crypt635');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
_MMFUN_6f484219d146c647f3('crypt635');
}else{
if($_MMVAR_9ead9b0958c0f8079a=='' || $_MMVAR_0e0e5d5748acd45adc=='')
_MMFUN_6f484219d146c647f3('crypt641');
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_9ead9b0958c0f8079a.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
_MMFUN_6f484219d146c647f3('crypt635');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
_MMFUN_6f484219d146c647f3('crypt635');
if($_MMVAR_be0ff7fbb4af7d07f5['cpassword'] != $_MMVAR_0e0e5d5748acd45adc)
_MMFUN_6f484219d146c647f3('crypt636');
if($_MMVAR_d99dead5e849c2cbe4!='' && $_MMVAR_be0ff7fbb4af7d07f5['v7ext1'].'' != $_MMVAR_d99dead5e849c2cbe4.'')
_MMFUN_6f484219d146c647f3('crypt637');
}
$_MMVAR_c513e8133a17e03ee9='';


if($_MMVAR_22a70aaa8ab69db4b0==0 &&  $_MMVAR_be0ff7fbb4af7d07f5['cday']!=0 && $_MMVAR_e9ffef5bdc7675ff63['muestexit']>0){
if($_MMVAR_be0ff7fbb4af7d07f5['d13int5']==1){
if($_MMVAR_be0ff7fbb4af7d07f5['linknum'] == 1){
_MMFUN_6f484219d146c647f3('crypt802');
}
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['linknum'] == 1){
$_MMVAR_c513e8133a17e03ee9=',`d13int5`=1';
}			
}
}
$_MMVAR_546457f3d29e4839df='';
if($_MMVAR_be0ff7fbb4af7d07f5['v7ext2'].''=='')
$_MMVAR_546457f3d29e4839df=',`v7ext2`=\''.$_MMVAR_8fb0dd4f956115dffa.'\' ';

if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) !== 1)
_MMFUN_6f484219d146c647f3('crypt638');
$_MMVAR_99ffe781e5f217cc40=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_user` where `id`='.$_MMVAR_e9ffef5bdc7675ff63['userid']);
if(empty($_MMVAR_99ffe781e5f217cc40))
_MMFUN_6f484219d146c647f3('crypt639');
if($_MMVAR_99ffe781e5f217cc40['endtime'] < $_MMVAR_8e47823876210f2e4b)
_MMFUN_6f484219d146c647f3('crypt640');
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
if(strlen($_MMVAR_9ead9b0958c0f8079a) < 2 || strlen($_MMVAR_0e0e5d5748acd45adc) < 5)
_MMFUN_6f484219d146c647f3('crypt641');
}elseif($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
if(strlen($_MMVAR_477afeb555696efb83) != 16 && strlen($_MMVAR_477afeb555696efb83) != 24)
_MMFUN_6f484219d146c647f3('crypt642');
}else{
_MMFUN_6f484219d146c647f3('crypt643');
}
if(round($_MMVAR_be0ff7fbb4af7d07f5['cday'], 2)==0.01)
_MMFUN_6f484219d146c647f3('crypt645');
$_MMVAR_958b9222cc9a85126a='';
if($_MMVAR_856056e948ad33ed5d != 0){
if($_MMVAR_be0ff7fbb4af7d07f5['int1']==0){
$_MMVAR_958b9222cc9a85126a=',`int1`=\''.$_MMVAR_856056e948ad33ed5d.'\'';
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['int1'] != $_MMVAR_856056e948ad33ed5d)
_MMFUN_6f484219d146c647f3('crypt644');
}
}

$_MMVAR_8dba5f7cd79c4f7a3c='';
if($_MMVAR_be0ff7fbb4af7d07f5['cday']!=0 && $_MMVAR_e9ffef5bdc7675ff63['locktimes']==1 && $_MMVAR_be0ff7fbb4af7d07f5['dayactivetimes']<1)
_MMFUN_6f484219d146c647f3('crypt661');

if($_MMVAR_efbd0702871961d1f7=='')$_MMVAR_efbd0702871961d1f7=1;
$_MMVAR_d2f5d1fafeb2059fdf['userid']=$_MMVAR_e9ffef5bdc7675ff63['userid'];
$_MMVAR_d2f5d1fafeb2059fdf['xjlid']=$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_d2f5d1fafeb2059fdf['clientid']=$_MMVAR_efbd0702871961d1f7;
$_MMVAR_d2f5d1fafeb2059fdf['keys']=$_MMVAR_be0ff7fbb4af7d07f5['keys'];
$_MMVAR_d2f5d1fafeb2059fdf['ip']=_MMFUN_cccffb711bc5a3fd77();
$_MMVAR_d2f5d1fafeb2059fdf['mac']=$_MMVAR_e9cecf1e96749d9a82;
$_MMVAR_d2f5d1fafeb2059fdf['pccode']=$_MMVAR_58de0eebf9c657e599.'-'.$_MMVAR_f08e348f6b101d999f;





if($_MMVAR_be0ff7fbb4af7d07f5['cday']==0){
$_MMVAR_f1c8cf7cf0e1561333=($_MMVAR_e9ffef5bdc7675ff63['addchktime']+900)*$_MMVAR_e9ffef5bdc7675ff63['testtime'];
if($_MMVAR_e9ffef5bdc7675ff63['testtimes']=='0')$_MMVAR_f1c8cf7cf0e1561333=870000;
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']=='0'){
$_MMVAR_f1c8cf7cf0e1561333=$_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400;
}else{
$_MMVAR_f1c8cf7cf0e1561333=$_MMVAR_be0ff7fbb4af7d07f5['activetime'] + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400 - $_MMVAR_8e47823876210f2e4b;
}
}	



if($_MMVAR_be0ff7fbb4af7d07f5['cday']==0 || $_MMVAR_e9ffef5bdc7675ff63['mfday']==$_MMVAR_be0ff7fbb4af7d07f5['cday']){
$_MMVAR_1a2991b66d7daacf2b=explode('-', $_MMVAR_e9ffef5bdc7675ff63['mftimearea']);
$_MMVAR_443ccc9c02094c3f71=intval(date('H', time()));
if($_MMVAR_443ccc9c02094c3f71 < $_MMVAR_1a2991b66d7daacf2b[0] || $_MMVAR_443ccc9c02094c3f71 > $_MMVAR_1a2991b66d7daacf2b[1])
_MMFUN_6f484219d146c647f3('crypt646');
}




if($_MMVAR_be0ff7fbb4af7d07f5['cday']==0){
if($_MMVAR_e9ffef5bdc7675ff63['testtimes']!='0' && $_MMVAR_22a70aaa8ab69db4b0 >= $_MMVAR_e9ffef5bdc7675ff63['testtime'] ){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 1); 
_MMFUN_6f484219d146c647f3('crypt647');
}
if($_MMVAR_22a70aaa8ab69db4b0==0){
$_MMVAR_8208e2d87ae46acd9c=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select `id`,`times` from `'.TNREG.'_testkey` FORCE INDEX (`bdcode`) where `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\' and `xjlid`='.$_MMVAR_d2f5d1fafeb2059fdf['xjlid'].' and `keyid`='.$_MMVAR_be0ff7fbb4af7d07f5['id'].' and `nday`='.$_MMVAR_33a8b9db2156aec1e6);
if(!empty($_MMVAR_8208e2d87ae46acd9c)){
if($_MMVAR_e9ffef5bdc7675ff63['testtimes']!='0' && $_MMVAR_8208e2d87ae46acd9c['times'] >= $_MMVAR_e9ffef5bdc7675ff63['testtimes']){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 2);
_MMFUN_6f484219d146c647f3('crypt648');
}
$_MMVAR_f7ff4348b70580b5a4=$_MMVAR_8208e2d87ae46acd9c['times'] + 1;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_testkey` SET `times`='.$_MMVAR_f7ff4348b70580b5a4.' where `id`='.$_MMVAR_8208e2d87ae46acd9c['id'], 'notsync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 4);
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO '.TNREG.'_testkey (`xjlid`,`bdcode`,`keyid`,`nday`,`times`,`lastlinetime` ) VALUES ('.$_MMVAR_d2f5d1fafeb2059fdf['xjlid'].', \''.$_MMVAR_58de0eebf9c657e599.'\', '.$_MMVAR_be0ff7fbb4af7d07f5['id'].', '.$_MMVAR_33a8b9db2156aec1e6.', 1, '.$_MMVAR_8e47823876210f2e4b.')', 'notsync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 3);
}
}
if($_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1000'){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `activetime`='.$_MMVAR_8e47823876210f2e4b.', `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `bdcode`=\'No machine code\' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 5);
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET lastonlinetime='.$_MMVAR_8e47823876210f2e4b.' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'notsync');
}
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_cf8c11a79575861c0c($_MMVAR_22a70aaa8ab69db4b0.$_MMVAR_f08e348f6b101d999f.$_MMVAR_e9ffef5bdc7675ff63['xjlkey'], 16);
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_52c05912695833f79b($_MMVAR_e9ffef5bdc7675ff63, $_MMVAR_fff456afd2b989a8fd, 1, $_MMVAR_0c24ae14cd1214a44f);
_MMFUN_6f484219d146c647f3('crypt'.$_MMVAR_0c24ae14cd1214a44f);
}	



if($_MMVAR_be0ff7fbb4af7d07f5['activetime'] != 0 && $_MMVAR_be0ff7fbb4af7d07f5['activetime'] + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400 < $_MMVAR_8e47823876210f2e4b)
_MMFUN_6f484219d146c647f3('crypt645');



if($_MMVAR_be0ff7fbb4af7d07f5['ispay']==0 && $_MMVAR_be0ff7fbb4af7d07f5['agentid'] > 0){
$_MMVAR_e7535b29e4e69b2793=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select djtime from '.TNREG.'_agent where id='.$_MMVAR_be0ff7fbb4af7d07f5['agentid']);
if(!empty($_MMVAR_e7535b29e4e69b2793) && $_MMVAR_8e47823876210f2e4b > $_MMVAR_be0ff7fbb4af7d07f5['addtime'] + 3600 * $_MMVAR_e7535b29e4e69b2793['djtime']){				
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 6);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `normal`=0 where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
_MMFUN_6f484219d146c647f3('crypt649');
}
}



if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user') $_MMVAR_efbd0702871961d1f7=1;
if(intval($_MMVAR_efbd0702871961d1f7) > intval($_MMVAR_be0ff7fbb4af7d07f5['linknum']) || intval($_MMVAR_efbd0702871961d1f7)<1){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 7);
_MMFUN_6f484219d146c647f3('crypt651');
}	








if(($_MMVAR_be0ff7fbb4af7d07f5['linknum'] > 1 && $_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys')){
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']=='0'){
$_MMVAR_daccb0c66a972c1322=($_MMVAR_be0ff7fbb4af7d07f5['linknum']-1) / 2 + 1;
if(OUTVERSION==0 && $_MMVAR_99ffe781e5f217cc40['vipkeynums'] > 0 && $_MMVAR_99ffe781e5f217cc40['key1num'] + $_MMVAR_daccb0c66a972c1322 > $_MMVAR_99ffe781e5f217cc40['vipkeynums'])
_MMFUN_6f484219d146c647f3('crypt650');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('Update `'.TNREG.'_user` set `key1num`=`key1num`+'.$_MMVAR_daccb0c66a972c1322.' where id='.$_MMVAR_99ffe781e5f217cc40['id'], 'sync');
}

$_MMVAR_fc816a7d55029bd4c8=0;
if($_MMVAR_e9ffef5bdc7675ff63['dkbindpc']!='0'){
$_MMVAR_fc816a7d55029bd4c8=1;
$_MMVAR_d12831713fc7ee1577=0;
if($_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1000' || $_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1001'){
$_MMVAR_d12831713fc7ee1577=1;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\',`v7ext2`=\''.$_MMVAR_8fb0dd4f956115dffa.'\' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['bdcode'] != $_MMVAR_58de0eebf9c657e599){
$_MMVAR_d12831713fc7ee1577=1;
if(intval($_MMVAR_45e2d7f115c6bc331e)==1){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\',`v7ext2`=\''.$_MMVAR_8fb0dd4f956115dffa.'\' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 10);
}else{
if($_MMVAR_22a70aaa8ab69db4b0==0){
if(intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])==0 || intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])>89){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 11);
_MMFUN_6f484219d146c647f3('crypt652');
}								
if($_MMVAR_be0ff7fbb4af7d07f5['lastonlinetime'] + 60 * $_MMVAR_e9ffef5bdc7675ff63['autojbtime'] > $_MMVAR_8e47823876210f2e4b){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 12);
_MMFUN_6f484219d146c647f3('crypt653');
}
$_MMVAR_65f99011682cf7b068='';							

if($_MMVAR_33a8b9db2156aec1e6==$_MMVAR_be0ff7fbb4af7d07f5['bdday'] && $_MMVAR_e9ffef5bdc7675ff63['jbtimes'] <= $_MMVAR_be0ff7fbb4af7d07f5['bdtimes']){
_MMFUN_6f484219d146c647f3('crypt654');
}elseif($_MMVAR_33a8b9db2156aec1e6 != $_MMVAR_be0ff7fbb4af7d07f5['bdday']){
$_MMVAR_65f99011682cf7b068=', `bdday`='.$_MMVAR_33a8b9db2156aec1e6.', `bdtimes`=1';
}else{
$_MMVAR_65f99011682cf7b068=', `bdday`='.$_MMVAR_33a8b9db2156aec1e6.', `bdtimes`=`bdtimes`+1';
}								
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\''.$_MMVAR_65f99011682cf7b068.' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
}else{
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 13);
_MMFUN_6f484219d146c647f3('crypt656');
}
}
}
}
}

if($_MMVAR_22a70aaa8ab69db4b0==0){

$_MMVAR_ef0f12dfd3179b2cac=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_link FORCE INDEX (`keys`) where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\' and `xjlid`='.$_MMVAR_d2f5d1fafeb2059fdf['xjlid'].' and `clientid`='.$_MMVAR_efbd0702871961d1f7);
if(empty($_MMVAR_ef0f12dfd3179b2cac)){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO '.TNREG.'_link (`userid`,`xjlid`,`keys`,`lasttime`,`linecode`,`clientid`,`macnum`) VALUES ('.$_MMVAR_d2f5d1fafeb2059fdf['userid'].','.$_MMVAR_d2f5d1fafeb2059fdf['xjlid'].',\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\','.time().',\''.$_MMVAR_f08e348f6b101d999f.'\','.$_MMVAR_efbd0702871961d1f7.',\''.$_MMVAR_e9cecf1e96749d9a82.'\')', 'notsync');
$_MMVAR_ef0f12dfd3179b2cac=array('userid'=>$_MMVAR_d2f5d1fafeb2059fdf['userid'], 'xjlid'=>$_MMVAR_d2f5d1fafeb2059fdf['xjlid'], 'keys'=>$_MMVAR_be0ff7fbb4af7d07f5['keys'], 'lasttime'=>time(), 'linecode'=>$_MMVAR_f08e348f6b101d999f, 'clientid'=>$_MMVAR_efbd0702871961d1f7, 'macnum'=>$_MMVAR_e9cecf1e96749d9a82);
}else{
if($_MMVAR_e9cecf1e96749d9a82 != $_MMVAR_ef0f12dfd3179b2cac['macnum'] && $_MMVAR_ef0f12dfd3179b2cac['lasttime'] + 60 * $_MMVAR_e9ffef5bdc7675ff63['autojbtime'] > $_MMVAR_8e47823876210f2e4b){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 14);
_MMFUN_6f484219d146c647f3('crypt657');
}						
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_link SET `macnum`=\''.$_MMVAR_e9cecf1e96749d9a82.'\', `linecode`=\''.$_MMVAR_f08e348f6b101d999f.'\', `lasttime`='.time().' where `id`='.$_MMVAR_ef0f12dfd3179b2cac['id'], 'notsync');
}

if(intval($_MMVAR_be0ff7fbb4af7d07f5['activetime'])==0){
if($_MMVAR_fc816a7d55029bd4c8==1){
$_MMVAR_7498d99b146e40f727='';
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 8);
}else{
$_MMVAR_7498d99b146e40f727=', bdcode=\'1001\'';
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 9);
}
$_MMVAR_0b898d12d9e2c4513f=$_MMVAR_8e47823876210f2e4b + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET activetime='.$_MMVAR_8e47823876210f2e4b.', endtime='.$_MMVAR_0b898d12d9e2c4513f.$_MMVAR_7498d99b146e40f727.$_MMVAR_958b9222cc9a85126a.' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
if(SVRID != 1 && $_MMVAR_be0ff7fbb4af7d07f5['int2'] != 1)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO '.TNREG.'_bdlogs (`userid`,`xjlid`,`bdcode`,`addtime`,`keys`) VALUES ('.$_MMVAR_d2f5d1fafeb2059fdf['userid'].', '.$_MMVAR_d2f5d1fafeb2059fdf['xjlid'].', \''.$_MMVAR_58de0eebf9c657e599.'\', '.$_MMVAR_8e47823876210f2e4b.',\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\')');
}else{
if($_MMVAR_fc816a7d55029bd4c8==0){
if($_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1000')
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `bdcode`=\'1001\' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 16);
}else{
if($_MMVAR_d12831713fc7ee1577==0){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 17);
}else{
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 18);
}
}
}
}else{


$_MMVAR_ef0f12dfd3179b2cac=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_link where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\' and `xjlid`='.$_MMVAR_d2f5d1fafeb2059fdf['xjlid'].' and `clientid`='.$_MMVAR_efbd0702871961d1f7);
if(empty($_MMVAR_ef0f12dfd3179b2cac)){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 20);
_MMFUN_6f484219d146c647f3('crypt659');
}
if($_MMVAR_f08e348f6b101d999f != $_MMVAR_ef0f12dfd3179b2cac['linecode']){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 21);
_MMFUN_6f484219d146c647f3('crypt659');
}				
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_link SET `lasttime`='.time().' where `id`='.$_MMVAR_ef0f12dfd3179b2cac['id'], 'notsync');
}
$_MMVAR_32a3601e41fb70a5a6='';
if($_MMVAR_8e47823876210f2e4b-$_MMVAR_be0ff7fbb4af7d07f5['lastonlinetime']>300)
$_MMVAR_32a3601e41fb70a5a6='`lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', ';
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_32a3601e41fb70a5a6.'`activetimes` =`activetimes`+1'.$_MMVAR_8dba5f7cd79c4f7a3c.' where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_cf8c11a79575861c0c($_MMVAR_22a70aaa8ab69db4b0.$_MMVAR_f08e348f6b101d999f.$_MMVAR_e9ffef5bdc7675ff63['xjlkey'], 16);
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_52c05912695833f79b($_MMVAR_e9ffef5bdc7675ff63, $_MMVAR_fff456afd2b989a8fd, 0, $_MMVAR_0c24ae14cd1214a44f);
_MMFUN_6f484219d146c647f3('crypt'.$_MMVAR_0c24ae14cd1214a44f);	
}

if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys' && $_MMVAR_be0ff7fbb4af7d07f5['activetime']=='0'){
if(OUTVERSION==0 && $_MMVAR_99ffe781e5f217cc40['vipkeynums'] > 0 && $_MMVAR_99ffe781e5f217cc40['key1num'] + 1 > $_MMVAR_99ffe781e5f217cc40['vipkeynums'])
_MMFUN_6f484219d146c647f3('crypt650');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('updatE `'.TNREG.'_user` set `key1num`=`key1num`+1 where id='.$_MMVAR_99ffe781e5f217cc40['id'], 'sync');
}



$_MMVAR_49d0a5e6481e9ab325='';
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']=='0'){
$_MMVAR_cbc6ff7e79613a5f82=0;
}elseif($_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1001'){
$_MMVAR_cbc6ff7e79613a5f82=1;
}else{
$_MMVAR_cbc6ff7e79613a5f82=2;
if($_MMVAR_be0ff7fbb4af7d07f5['bdcode'] != $_MMVAR_58de0eebf9c657e599 || ($_MMVAR_e9ffef5bdc7675ff63['muestexit']==1 && $_MMVAR_be0ff7fbb4af7d07f5['v7ext2']!=$_MMVAR_8fb0dd4f956115dffa && $_MMVAR_be0ff7fbb4af7d07f5['v7ext2']!='')){
$_MMVAR_cbc6ff7e79613a5f82=4;
if(intval($_MMVAR_45e2d7f115c6bc331e) != 1){
if($_MMVAR_22a70aaa8ab69db4b0 != '0'){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 22);
_MMFUN_6f484219d146c647f3('crypt656');
}
if(intval($_MMVAR_e9ffef5bdc7675ff63['jbtimes'])==0){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 23);
_MMFUN_6f484219d146c647f3('crypt652');
}				
if($_MMVAR_be0ff7fbb4af7d07f5['lastonlinetime'] + 60 * $_MMVAR_e9ffef5bdc7675ff63['autojbtime'] > $_MMVAR_8e47823876210f2e4b || intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])==0 || intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])>89){
if(intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])==0 || intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])>89){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 11);
_MMFUN_6f484219d146c647f3('crypt652');
}else{
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 12);
_MMFUN_6f484219d146c647f3('crypt653');
}
}				
if($_MMVAR_33a8b9db2156aec1e6==intval($_MMVAR_be0ff7fbb4af7d07f5['bdday']) && $_MMVAR_e9ffef5bdc7675ff63['jbtimes'] <= $_MMVAR_be0ff7fbb4af7d07f5['bdtimes']){
_MMFUN_6f484219d146c647f3('crypt654');
}elseif($_MMVAR_33a8b9db2156aec1e6 != intval($_MMVAR_be0ff7fbb4af7d07f5['bdday'])){
$_MMVAR_49d0a5e6481e9ab325=', `bdday`='.$_MMVAR_33a8b9db2156aec1e6.', `bdtimes`=1';
}else{
$_MMVAR_49d0a5e6481e9ab325=', `bdday`='.$_MMVAR_33a8b9db2156aec1e6.', `bdtimes`=`bdtimes`+1';
}
$_MMVAR_cbc6ff7e79613a5f82=3;
}
}
}
$_MMVAR_9a271979657594bfcf='';
if(intval($_MMVAR_22a70aaa8ab69db4b0)==0 || intval($_MMVAR_45e2d7f115c6bc331e)==1){
$_MMVAR_9a271979657594bfcf='`chkcode`=\''.$_MMVAR_f08e348f6b101d999f.'\',';
}else{
if($_MMVAR_f08e348f6b101d999f != $_MMVAR_be0ff7fbb4af7d07f5['chkcode']){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 24);
_MMFUN_6f484219d146c647f3('crypt655');
}
}
switch ($_MMVAR_cbc6ff7e79613a5f82){
Case 0:
$_MMVAR_0b898d12d9e2c4513f=$_MMVAR_8e47823876210f2e4b + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `activetime`='.$_MMVAR_8e47823876210f2e4b.', `endtime`='.$_MMVAR_0b898d12d9e2c4513f.', `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\', `v7ext2`=\''.$_MMVAR_8fb0dd4f956115dffa.'\', `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `activetimes` =`activetimes`+1'.$_MMVAR_958b9222cc9a85126a.$_MMVAR_c513e8133a17e03ee9.$_MMVAR_8dba5f7cd79c4f7a3c.' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 25);
if(SVRID != 1 && $_MMVAR_be0ff7fbb4af7d07f5['int2'] != 1)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO '.TNREG.'_bdlogs (`userid`,`xjlid`,`bdcode`,`addtime`,`keys`) VALUES ('.$_MMVAR_d2f5d1fafeb2059fdf['userid'].', '.$_MMVAR_d2f5d1fafeb2059fdf['xjlid'].', \''.$_MMVAR_58de0eebf9c657e599.'\', '.$_MMVAR_8e47823876210f2e4b.',\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\')');
break;
Case 1:
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\', `v7ext2`=\''.$_MMVAR_8fb0dd4f956115dffa.'\', `activetimes` =`activetimes`+1'.$_MMVAR_c513e8133a17e03ee9.$_MMVAR_8dba5f7cd79c4f7a3c.' where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
if($_MMVAR_22a70aaa8ab69db4b0==0)
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 26);
break;
Case 2:
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `activetimes` =`activetimes`+1'.$_MMVAR_c513e8133a17e03ee9.$_MMVAR_546457f3d29e4839df.$_MMVAR_8dba5f7cd79c4f7a3c.' where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
if($_MMVAR_22a70aaa8ab69db4b0=='0')
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 27);
break;
Case 3:
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\', `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `activetimes` =`activetimes`+1 '.$_MMVAR_49d0a5e6481e9ab325.$_MMVAR_546457f3d29e4839df.$_MMVAR_c513e8133a17e03ee9.$_MMVAR_8dba5f7cd79c4f7a3c.' where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 28);
break;
default:
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\', `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `activetimes` =`activetimes`+1'.$_MMVAR_546457f3d29e4839df.$_MMVAR_c513e8133a17e03ee9.$_MMVAR_8dba5f7cd79c4f7a3c.' where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 29);
}
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_cf8c11a79575861c0c($_MMVAR_22a70aaa8ab69db4b0.$_MMVAR_f08e348f6b101d999f.$_MMVAR_e9ffef5bdc7675ff63['xjlkey'], 16);
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_52c05912695833f79b($_MMVAR_e9ffef5bdc7675ff63, $_MMVAR_fff456afd2b989a8fd, 0, $_MMVAR_0c24ae14cd1214a44f);
_MMFUN_6f484219d146c647f3('crypt'.$_MMVAR_0c24ae14cd1214a44f);
}

function _MMFUN_52c05912695833f79b($_MMVAR_e9ffef5bdc7675ff63, $_MMVAR_1b0f0405d1fd338f51, $_MMVAR_d91827722fa041c88d, $_MMVAR_0c24ae14cd1214a44f){
global $_MMVAR_f1c8cf7cf0e1561333, $_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_80d88ec48b70fed130, $_MMVAR_a84290412d2881d844;
$_MMVAR_6701f410609696e781=str_ireplace('#time#',date("Y-m-d H:i",time()),$_MMVAR_e9ffef5bdc7675ff63['ext2'].'');
$_MMVAR_c71dafac771bf55d8b=str_ireplace('#time#',date("Y-m-d H:i",time()),$_MMVAR_e9ffef5bdc7675ff63['ext3'].'');
if($_MMVAR_80d88ec48b70fed130==0){
$_MMVAR_cfee5face910304845=time();
if(intval($_MMVAR_e9ffef5bdc7675ff63['xjlver']) > intval($_MMVAR_1b0f0405d1fd338f51)){
if(floor($_MMVAR_e9ffef5bdc7675ff63['isautoup'])==1){
$_MMVAR_af429800b32c30d9fc='630';
}else{
$_MMVAR_af429800b32c30d9fc='631';
}
$_MMVAR_0c24ae14cd1214a44f=$_MMVAR_0c24ae14cd1214a44f.':|:'.$_MMVAR_af429800b32c30d9fc.':|:'.$_MMVAR_e9ffef5bdc7675ff63['xjlurl'].':|:'.$_MMVAR_d91827722fa041c88d.':|:'.$_MMVAR_6701f410609696e781.':|:'.$_MMVAR_e9ffef5bdc7675ff63['addchktime'].':|:'.$_MMVAR_f1c8cf7cf0e1561333.':|:'.$_MMVAR_be0ff7fbb4af7d07f5['linknum'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['keys'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['v7ext1'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['int1'].':|:'.$_MMVAR_e9ffef5bdc7675ff63['xjlver'].':|:'.$_MMVAR_c71dafac771bf55d8b.':|:'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].':|:'.date("Y-m-d H:i",time()).':|:'.$_MMVAR_be0ff7fbb4af7d07f5['dayactivetimes'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['ext1'].':|:e14:|:e15:|:';
}else{
$_MMVAR_0c24ae14cd1214a44f=$_MMVAR_0c24ae14cd1214a44f.':|:0:|:'.$_MMVAR_e9ffef5bdc7675ff63['xjlurl'].':|:'.$_MMVAR_d91827722fa041c88d.':|:'.$_MMVAR_6701f410609696e781.':|:'.$_MMVAR_e9ffef5bdc7675ff63['addchktime'].':|:'.$_MMVAR_f1c8cf7cf0e1561333.':|:'.$_MMVAR_be0ff7fbb4af7d07f5['linknum'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['keys'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['v7ext1'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['int1'].':|:'.$_MMVAR_e9ffef5bdc7675ff63['xjlver'].':|:'.$_MMVAR_c71dafac771bf55d8b.':|:'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].':|:'.date("Y-m-d H:i",time()).':|:'.$_MMVAR_be0ff7fbb4af7d07f5['dayactivetimes'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['ext1'].':|:e14:|:e15:|:';  
}
}
return _MMFUN_df8fb5929e03bb4889($_MMVAR_0c24ae14cd1214a44f,DEUSERKEY,$_MMVAR_a84290412d2881d844);
}


function _MMFUN_3c35ddd0378b7f9185($_MMVAR_23b59cee1d0230a542,$_MMVAR_09785c63444efa13e0 ='GBK',$_MMVAR_1264b92e117c28b977 ='utf-8' ) {
$_MMVAR_ca42f03dc8040f35bb = '';
if (function_exists('mb_convert_encoding')){
$_MMVAR_ca42f03dc8040f35bb = mb_convert_encoding($_MMVAR_23b59cee1d0230a542,$_MMVAR_1264b92e117c28b977,$_MMVAR_09785c63444efa13e0);
} elseif(function_exists('iconv')) {
$_MMVAR_ca42f03dc8040f35bb = iconv($_MMVAR_09785c63444efa13e0,$_MMVAR_1264b92e117c28b977,$_MMVAR_23b59cee1d0230a542);
} else die('sorry, you have no libs support for charset change.');
return $_MMVAR_ca42f03dc8040f35bb;
}

function _MMFUN_15d22b8a6d797b6307($_MMVAR_b70bd996b0bf4e27ef, $_MMVAR_b4f6e217a2569bae34){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_6acb770a66d220e25e='INSERT INTO `'.TNREG.'_logs_'.$_MMVAR_b70bd996b0bf4e27ef['userid'].'_'.$_MMVAR_b70bd996b0bf4e27ef['xjlid'].'` (`addtime`, `keys`, `ip`, `mac`, `pccode`, `clientid`,`optype`) VALUES ('.time().', \''.$_MMVAR_b70bd996b0bf4e27ef['keys'].'\', \''.$_MMVAR_b70bd996b0bf4e27ef['ip'].'\', \''.$_MMVAR_b70bd996b0bf4e27ef['mac'].'\', \''.$_MMVAR_b70bd996b0bf4e27ef['pccode'].'\', \''.$_MMVAR_b70bd996b0bf4e27ef['clientid'].'\', \''.$_MMVAR_b4f6e217a2569bae34.'\')';
$_MMVAR_3806d9861444b87188=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e, 'nosync');
if($_MMVAR_3806d9861444b87188===false) $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('REPAIR TABLE '.TNREG.'_logs_'.$_MMVAR_b70bd996b0bf4e27ef['userid'].'_'.$_MMVAR_b70bd996b0bf4e27ef['xjlid']);
}

function _MMFUN_6f484219d146c647f3($_MMVAR_1c0e9d3b1692a55b28=''){
exit($_MMVAR_1c0e9d3b1692a55b28);
}
?>