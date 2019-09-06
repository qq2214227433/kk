<?php 
	//生成日期:2011-11-11 16点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php

require('../config_ksreg.php');
require(KS_DIR.'/inc/import.fun.php');
require(KS_DIR.'/inc/mysql.cls.php');
$_MMVAR_9f95914834184aeeae=New mysql_cls;
$_MMVAR_9f95914834184aeeae->_MMFUN_06067bafeb84eaf0af($_MMVAR_abb6c66b467898e5c7);
if(CCMODE==1)
include(KS_DIR.'/inc/cc_api.php');
_MMFUN_205549c1b9bb4d4d50();
if(isset($_POST['s'])){
$_MMVAR_e21ee1d236d13da420=$_POST['s'];
}else{
$_MMVAR_e21ee1d236d13da420=$_GET['s'];
}
$_MMVAR_a78f3425a9457376a7=_MMFUN_cc3cf510bffd973b95('d', 'get', 'sql', '');
$_MMVAR_a78f3425a9457376a7=md5($_MMVAR_a78f3425a9457376a7);
$_MMVAR_7eae06bcce25334736=_MMFUN_cc3cf510bffd973b95('uapi', 'get', 'int', 0);
$_MMVAR_e21ee1d236d13da420=_MMFUN_fd9991e434eadc1b7d($_MMVAR_e21ee1d236d13da420);
$_MMVAR_b0b00e6800c176858c=explode(':|:', $_MMVAR_e21ee1d236d13da420);
if($_MMVAR_e21ee1d236d13da420=='SIGNERR'){
if($_MMVAR_7eae06bcce25334736==1)
exit('向服务器发送的数据错误SIGN！');
if($_MMVAR_a78f3425a9457376a7=='46e7b5849c67b7fd9a60cdb012e41ff7'){echo "<pre>";print_r($_MMVAR_b0b00e6800c176858c);echo "</pre>";}
exit('632');
}elseif($_MMVAR_e21ee1d236d13da420=='TIMEERR' && $_MMVAR_a78f3425a9457376a7 !='46e7b5849c67b7fd9a60cdb012e41ff7'){
if($_MMVAR_7eae06bcce25334736==1)
exit('向服务器发送的数据错误TIME！');
if($_MMVAR_a78f3425a9457376a7=='46e7b5849c67b7fd9a60cdb012e41ff7'){echo "<pre>";print_r($_MMVAR_b0b00e6800c176858c);echo "</pre>";}
exit('633');

}
if(RECORDTIMES==1)_MMFUN_96f9ca19db63126ed1();

$_MMVAR_f1c8cf7cf0e1561333="E";  $_MMVAR_be0ff7fbb4af7d07f5="";  $_MMVAR_80d88ec48b70fed130=0;

if($_MMVAR_a78f3425a9457376a7=='46e7b5849c67b7fd9a60cdb012e41ff7'){echo "<pre>";print_r($_MMVAR_b0b00e6800c176858c);echo "</pre>";}

if ($_MMVAR_b0b00e6800c176858c[0]=="chkkey"){
if(count($_MMVAR_b0b00e6800c176858c) != 16)
exit('632');
_MMFUN_d5f42e77a3a11c4ade($_MMVAR_b0b00e6800c176858c);
exit('632');
}else{
include('chkapi77.php');

if(SVRID==1){
if($_MMVAR_b0b00e6800c176858c[0]=='unbind' || $_MMVAR_b0b00e6800c176858c[0]=='reguser' || $_MMVAR_b0b00e6800c176858c[0]=='viewkey' || $_MMVAR_b0b00e6800c176858c[0]=='edituser' || $_MMVAR_b0b00e6800c176858c[0]=='recharge1' || $_MMVAR_b0b00e6800c176858c[0]=='advapisenddata'){
$_MMVAR_f891938bc14c36bf02=count($_MMVAR_b0b00e6800c176858c);
if(count($_MMVAR_b0b00e6800c176858c) > 9)
exit('向服务器发送的数据错误1，可能你输入的数据中有字符串:|:');	
if(count($_MMVAR_b0b00e6800c176858c) != 9)				
exit('向服务器发送的数据错误1！');			

switch ($_MMVAR_b0b00e6800c176858c[0]){
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
Case "recharge1":
_MMFUN_86251ede32d8f601bc($_MMVAR_b0b00e6800c176858c);
break;
Case "advapisenddata":
_MMFUN_90f382f8220c3338a0($_MMVAR_b0b00e6800c176858c);
break;
default:
}
exit();
}
exit('访问服务器接口名错误。');
}else{
echo '备服操作，';
if($_MMVAR_b0b00e6800c176858c[0]=='reguserext' || $_MMVAR_b0b00e6800c176858c[0]=='viewkeyext' || $_MMVAR_b0b00e6800c176858c[0]=='recharge1ext' || $_MMVAR_b0b00e6800c176858c[0]='advapisenddata'){
if($_MMVAR_b0b00e6800c176858c[0]=='reguserext' || $_MMVAR_b0b00e6800c176858c[0]=='recharge1ext'){				
$_MMVAR_43e9195d525683d0f7=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_taskset` where `id`=1');
if($_MMVAR_43e9195d525683d0f7['starttime'] + 1200 > time())
exit('请等'.intval(($_MMVAR_43e9195d525683d0f7['starttime'] + 1200 - time()) / 60).'分钟再试，主服务器可能还在正常运行中！');
if(_MMFUN_b5b21f5cf4050f894a()==true)
exit('主服务器可用，禁止在备服上执行本操作！');
}
if(count($_MMVAR_b0b00e6800c176858c) != 8){
if(count($_MMVAR_b0b00e6800c176858c) > 8)
exit('向服务器发送的数据错误，可能你输入的数据中有字符串:|:');
exit('向服务器发送的数据错误3！');
}			
switch ($_MMVAR_b0b00e6800c176858c[0]){
Case "reguserext":
_MMFUN_5ac4e8410da781c0c4($_MMVAR_b0b00e6800c176858c);
break;
Case "viewkeyext":
_MMFUN_fe7fdc9b4a82de1a28($_MMVAR_b0b00e6800c176858c);
break;
Case "recharge1ext":
_MMFUN_710ca2416a88d30289($_MMVAR_b0b00e6800c176858c);
break;
Case "advapisenddata":
_MMFUN_90f382f8220c3338a0($_MMVAR_b0b00e6800c176858c);
break;
default:
}
exit();
}
exit('访问服务器接口名错误。');
}
}

function _MMFUN_d5f42e77a3a11c4ade($_MMVAR_b0b00e6800c176858c){
global $_MMVAR_9f95914834184aeeae, $_MMVAR_f1c8cf7cf0e1561333, $_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_80d88ec48b70fed130;
$_MMVAR_b70bd996b0bf4e27ef=array();
$_MMVAR_8e47823876210f2e4b=time();
$_MMVAR_33a8b9db2156aec1e6=intval(date('d'));
list($_MMVAR_7b6896960481a4d007, $_MMVAR_c90455ba5250dd5068, $_MMVAR_58de0eebf9c657e599, $_MMVAR_22a70aaa8ab69db4b0, $_MMVAR_f08e348f6b101d999f, $_MMVAR_9138a06826d11c8510, $_MMVAR_477afeb555696efb83, $_MMVAR_45e2d7f115c6bc331e, $_MMVAR_fff456afd2b989a8fd, $_MMVAR_e267720ec5ec11cc8c, $_MMVAR_e9cecf1e96749d9a82, $_MMVAR_9ead9b0958c0f8079a, $_MMVAR_0e0e5d5748acd45adc, $_MMVAR_856056e948ad33ed5d, $_MMVAR_d99dead5e849c2cbe4,$_MMVAR_e71529762b29c24556)=$_MMVAR_b0b00e6800c176858c;

$_MMVAR_9ead9b0958c0f8079a=_MMFUN_c3428c7e6251d22b7d($_MMVAR_9ead9b0958c0f8079a);

$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);	
$_MMVAR_58de0eebf9c657e599=_MMFUN_4bb069f11df5d99e54($_MMVAR_58de0eebf9c657e599);	
$_MMVAR_22a70aaa8ab69db4b0=_MMFUN_4bb069f11df5d99e54($_MMVAR_22a70aaa8ab69db4b0);	
$_MMVAR_f08e348f6b101d999f=_MMFUN_4bb069f11df5d99e54($_MMVAR_f08e348f6b101d999f);	
$_MMVAR_477afeb555696efb83=_MMFUN_4bb069f11df5d99e54($_MMVAR_477afeb555696efb83);	
$_MMVAR_45e2d7f115c6bc331e=_MMFUN_4bb069f11df5d99e54($_MMVAR_45e2d7f115c6bc331e);	
$_MMVAR_fff456afd2b989a8fd=_MMFUN_4bb069f11df5d99e54($_MMVAR_fff456afd2b989a8fd);	
$_MMVAR_e267720ec5ec11cc8c=_MMFUN_4bb069f11df5d99e54($_MMVAR_e267720ec5ec11cc8c);	
$_MMVAR_e9cecf1e96749d9a82=_MMFUN_4bb069f11df5d99e54($_MMVAR_e9cecf1e96749d9a82);	
$_MMVAR_0e0e5d5748acd45adc=_MMFUN_4bb069f11df5d99e54($_MMVAR_0e0e5d5748acd45adc);	
$_MMVAR_856056e948ad33ed5d=_MMFUN_4bb069f11df5d99e54($_MMVAR_856056e948ad33ed5d);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_xjl` where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('634');
$_MMVAR_80d88ec48b70fed130=$_MMVAR_22a70aaa8ab69db4b0;
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_477afeb555696efb83.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('635');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('635');
}else{
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_9ead9b0958c0f8079a.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('635');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('635');
if($_MMVAR_be0ff7fbb4af7d07f5['cpassword'] != $_MMVAR_0e0e5d5748acd45adc)
exit('636');
if($_MMVAR_d99dead5e849c2cbe4!='' && $_MMVAR_be0ff7fbb4af7d07f5['v7ext1'].'' != $_MMVAR_d99dead5e849c2cbe4.'')
exit('637');
}	
if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) !== 1)
exit('638');
$_MMVAR_99ffe781e5f217cc40=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_user` where `id`='.$_MMVAR_e9ffef5bdc7675ff63['userid']);
if(empty($_MMVAR_99ffe781e5f217cc40))
exit('639');
if($_MMVAR_99ffe781e5f217cc40['endtime'] < $_MMVAR_8e47823876210f2e4b)
exit('640');
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
if(strlen($_MMVAR_9ead9b0958c0f8079a) < 2 || strlen($_MMVAR_0e0e5d5748acd45adc) < 5)
exit('641');
}elseif($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
if(strlen($_MMVAR_477afeb555696efb83) != 16 && strlen($_MMVAR_477afeb555696efb83) != 24)
exit('642');
}else{
exit('643');
}
if(round($_MMVAR_be0ff7fbb4af7d07f5['cday'], 2)==0.01)
exit('645');
$_MMVAR_958b9222cc9a85126a='';
if($_MMVAR_856056e948ad33ed5d != 0){
if($_MMVAR_be0ff7fbb4af7d07f5['int1']==0){
$_MMVAR_958b9222cc9a85126a=',`int1`=\''.$_MMVAR_856056e948ad33ed5d.'\'';
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['int1'] != $_MMVAR_856056e948ad33ed5d)
exit('644');
}
}
$_MMVAR_14bc5257ff07018a0f=substr($_MMVAR_9138a06826d11c8510, 0, 1);
$_MMVAR_efbd0702871961d1f7=substr($_MMVAR_9138a06826d11c8510, 1);
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
exit('646');
}

if($_MMVAR_be0ff7fbb4af7d07f5['cday']==0){
if($_MMVAR_22a70aaa8ab69db4b0 >= $_MMVAR_e9ffef5bdc7675ff63['testtime']){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 1);
exit('647');
}
if(intval($_MMVAR_22a70aaa8ab69db4b0)==0){
$_MMVAR_8208e2d87ae46acd9c=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select `id`,`times` from `'.TNREG.'_testkey` FORCE INDEX (`bdcode`) where `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\' and `xjlid`='.$_MMVAR_d2f5d1fafeb2059fdf['xjlid'].' and `keyid`='.$_MMVAR_be0ff7fbb4af7d07f5['id'].' and `nday`='.$_MMVAR_33a8b9db2156aec1e6);
if(!empty($_MMVAR_8208e2d87ae46acd9c)){
if($_MMVAR_8208e2d87ae46acd9c['times'] >= $_MMVAR_e9ffef5bdc7675ff63['testtimes']){ 
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 2);
exit('648');
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
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_cf8c11a79575861c0c($_MMVAR_22a70aaa8ab69db4b0.$_MMVAR_f08e348f6b101d999f.$_MMVAR_58de0eebf9c657e599.$_MMVAR_e9ffef5bdc7675ff63['xjlkey'], 16);
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_52c05912695833f79b($_MMVAR_e267720ec5ec11cc8c, $_MMVAR_e9ffef5bdc7675ff63, $_MMVAR_fff456afd2b989a8fd, 1, $_MMVAR_0c24ae14cd1214a44f);
exit($_MMVAR_0c24ae14cd1214a44f);
}	
if(intval($_MMVAR_be0ff7fbb4af7d07f5['activetime']) != 0 && $_MMVAR_be0ff7fbb4af7d07f5['activetime'] + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400 < $_MMVAR_8e47823876210f2e4b)
exit('645');



if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){		
if($_MMVAR_be0ff7fbb4af7d07f5['ispay']==0 && $_MMVAR_be0ff7fbb4af7d07f5['agentid'] > 0){
$_MMVAR_e7535b29e4e69b2793=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select djtime from '.TNREG.'_agent where id='.$_MMVAR_be0ff7fbb4af7d07f5['agentid']);
if(!empty($_MMVAR_e7535b29e4e69b2793) && $_MMVAR_8e47823876210f2e4b > $_MMVAR_be0ff7fbb4af7d07f5['addtime'] + 3600 * $_MMVAR_e7535b29e4e69b2793['djtime']){				
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 6);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `normal`=0 where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
exit('649');
}
}	
if(intval($_MMVAR_efbd0702871961d1f7) > intval($_MMVAR_be0ff7fbb4af7d07f5['linknum']) || intval($_MMVAR_efbd0702871961d1f7)<1){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 7);
exit('651');
}	
if(intval($_MMVAR_be0ff7fbb4af7d07f5['linknum']) > 1){
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']=='0'){
$_MMVAR_daccb0c66a972c1322=($_MMVAR_be0ff7fbb4af7d07f5['linknum']-1) / 2 + 1;
if($_MMVAR_99ffe781e5f217cc40['vipkeynums'] > 0 && $_MMVAR_99ffe781e5f217cc40['key1num'] + $_MMVAR_daccb0c66a972c1322 > $_MMVAR_99ffe781e5f217cc40['vipkeynums'])
exit('650');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('Update `'.TNREG.'_user` set `key1num`=`key1num`+'.$_MMVAR_daccb0c66a972c1322.' where id='.$_MMVAR_99ffe781e5f217cc40['id'], 'sync');
}

$_MMVAR_fc816a7d55029bd4c8=0;			
if(intval($_MMVAR_e9ffef5bdc7675ff63['dkbindpc'])==1){
$_MMVAR_fc816a7d55029bd4c8=1;
$_MMVAR_d12831713fc7ee1577=0;
if($_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1000' || $_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1001'){
$_MMVAR_d12831713fc7ee1577=1;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['bdcode'] != $_MMVAR_58de0eebf9c657e599){
$_MMVAR_d12831713fc7ee1577=1;
if(intval($_MMVAR_45e2d7f115c6bc331e)==1){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 10); //换服，绑定;
}else{
if($_MMVAR_22a70aaa8ab69db4b0==0){
if(intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])==0 || intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])>89){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 11);
exit('652');
}								
if($_MMVAR_be0ff7fbb4af7d07f5['lastonlinetime'] + 60 * $_MMVAR_e9ffef5bdc7675ff63['autojbtime'] > $_MMVAR_8e47823876210f2e4b){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 12);
exit('653');
}
$_MMVAR_65f99011682cf7b068='';							

if($_MMVAR_33a8b9db2156aec1e6==intval($_MMVAR_be0ff7fbb4af7d07f5['bdday']) && $_MMVAR_e9ffef5bdc7675ff63['jbtimes'] <= $_MMVAR_be0ff7fbb4af7d07f5['bdtimes']){
exit('654');
}elseif($_MMVAR_33a8b9db2156aec1e6 != intval($_MMVAR_be0ff7fbb4af7d07f5['bdday'])){
$_MMVAR_65f99011682cf7b068=', `bdday`='.$_MMVAR_33a8b9db2156aec1e6.', `bdtimes`=1';
}else{
$_MMVAR_65f99011682cf7b068=', `bdday`='.$_MMVAR_33a8b9db2156aec1e6.', `bdtimes`=`bdtimes`+1';
}								
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\''.$_MMVAR_65f99011682cf7b068.' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
}else{
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 13);
exit('656');
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
if($_MMVAR_e9cecf1e96749d9a82 != $_MMVAR_ef0f12dfd3179b2cac['macnum']){
if($_MMVAR_ef0f12dfd3179b2cac['lasttime'] + 60 * $_MMVAR_e9ffef5bdc7675ff63['autojbtime'] > $_MMVAR_8e47823876210f2e4b){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 14);
exit('657');
}
}else{
if($_MMVAR_14bc5257ff07018a0f=='Y'){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 15);
exit('658');
}
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
if($_MMVAR_14bc5257ff07018a0f=='Y'){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 19);
}else{
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 20);
}
exit('659');
}
if($_MMVAR_f08e348f6b101d999f != $_MMVAR_ef0f12dfd3179b2cac['linecode']){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 21);
exit('659');
}				
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_link SET `lasttime`='.time().' where `id`='.$_MMVAR_ef0f12dfd3179b2cac['id'], 'notsync');
}
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `activetimes` =`activetimes`+1 where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_cf8c11a79575861c0c($_MMVAR_22a70aaa8ab69db4b0.$_MMVAR_f08e348f6b101d999f.$_MMVAR_58de0eebf9c657e599.$_MMVAR_e9ffef5bdc7675ff63['xjlkey'], 16);
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_52c05912695833f79b($_MMVAR_e267720ec5ec11cc8c, $_MMVAR_e9ffef5bdc7675ff63, $_MMVAR_fff456afd2b989a8fd, 0, $_MMVAR_0c24ae14cd1214a44f);
exit($_MMVAR_0c24ae14cd1214a44f);
}		
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']=='0'){
if($_MMVAR_99ffe781e5f217cc40['vipkeynums'] > 0 && $_MMVAR_99ffe781e5f217cc40['key1num'] + 1 > $_MMVAR_99ffe781e5f217cc40['vipkeynums'])
exit('650');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('updatE `'.TNREG.'_user` set `key1num`=`key1num`+1 where id='.$_MMVAR_99ffe781e5f217cc40['id'], 'sync');
}
}



$_MMVAR_49d0a5e6481e9ab325='';
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']=='0'){
$_MMVAR_cbc6ff7e79613a5f82=0;
}elseif($_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1001'){
$_MMVAR_cbc6ff7e79613a5f82=1;
}else{
$_MMVAR_cbc6ff7e79613a5f82=2;
if($_MMVAR_be0ff7fbb4af7d07f5['bdcode'] != $_MMVAR_58de0eebf9c657e599){
$_MMVAR_cbc6ff7e79613a5f82=4;
if(intval($_MMVAR_45e2d7f115c6bc331e) != 1){
if($_MMVAR_22a70aaa8ab69db4b0 != '0'){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 22);
exit('656');
}
if(intval($_MMVAR_e9ffef5bdc7675ff63['jbtimes'])==0){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 23);
exit('652');
}				
if($_MMVAR_be0ff7fbb4af7d07f5['lastonlinetime'] + 60 * $_MMVAR_e9ffef5bdc7675ff63['autojbtime'] > $_MMVAR_8e47823876210f2e4b || intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])==0){
if(intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])==0 || intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])>89){
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 11);
exit('652');
}else{
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 12);
exit('653');
}
}				
if($_MMVAR_33a8b9db2156aec1e6==intval($_MMVAR_be0ff7fbb4af7d07f5['bdday']) && $_MMVAR_e9ffef5bdc7675ff63['jbtimes'] <= $_MMVAR_be0ff7fbb4af7d07f5['bdtimes']){
exit('654');
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
exit('655');
}
}
switch ($_MMVAR_cbc6ff7e79613a5f82){
Case 0:
$_MMVAR_0b898d12d9e2c4513f=$_MMVAR_8e47823876210f2e4b + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `activetime`='.$_MMVAR_8e47823876210f2e4b.', `endtime`='.$_MMVAR_0b898d12d9e2c4513f.', `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\', `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `activetimes` =`activetimes`+1'.$_MMVAR_958b9222cc9a85126a.' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 25);
if(SVRID != 1 && $_MMVAR_be0ff7fbb4af7d07f5['int2'] != 1)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO '.TNREG.'_bdlogs (`userid`,`xjlid`,`bdcode`,`addtime`,`keys`) VALUES ('.$_MMVAR_d2f5d1fafeb2059fdf['userid'].', '.$_MMVAR_d2f5d1fafeb2059fdf['xjlid'].', \''.$_MMVAR_58de0eebf9c657e599.'\', '.$_MMVAR_8e47823876210f2e4b.',\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\')');
break;
Case 1:
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\', `activetimes` =`activetimes`+1 where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
if($_MMVAR_22a70aaa8ab69db4b0==0)
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 26);
break;
Case 2:
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `activetimes` =`activetimes`+1 where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
if($_MMVAR_22a70aaa8ab69db4b0=='0')
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 27);
break;
Case 3:
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\', `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `activetimes` =`activetimes`+1 '.$_MMVAR_49d0a5e6481e9ab325.' where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 28);
break;
default:
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_9a271979657594bfcf.' `lastbdtime`='.$_MMVAR_8e47823876210f2e4b.', `bdcode`=\''.$_MMVAR_58de0eebf9c657e599.'\', `lastonlinetime`='.$_MMVAR_8e47823876210f2e4b.', `activetimes` =`activetimes`+1 where `id`='.$_MMVAR_be0ff7fbb4af7d07f5['id'], 'notsync');
_MMFUN_15d22b8a6d797b6307($_MMVAR_d2f5d1fafeb2059fdf, 29);
}
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_cf8c11a79575861c0c($_MMVAR_22a70aaa8ab69db4b0.$_MMVAR_f08e348f6b101d999f.$_MMVAR_58de0eebf9c657e599.$_MMVAR_e9ffef5bdc7675ff63['xjlkey'], 16);
$_MMVAR_0c24ae14cd1214a44f=_MMFUN_52c05912695833f79b($_MMVAR_e267720ec5ec11cc8c, $_MMVAR_e9ffef5bdc7675ff63, $_MMVAR_fff456afd2b989a8fd, 0, $_MMVAR_0c24ae14cd1214a44f);
exit($_MMVAR_0c24ae14cd1214a44f);
}
function _MMFUN_52c05912695833f79b($_MMVAR_e267720ec5ec11cc8c, $_MMVAR_e9ffef5bdc7675ff63, $_MMVAR_1b0f0405d1fd338f51, $_MMVAR_d91827722fa041c88d, $_MMVAR_0c24ae14cd1214a44f){
global $_MMVAR_f1c8cf7cf0e1561333, $_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_80d88ec48b70fed130;
if($_MMVAR_80d88ec48b70fed130==0){
$_MMVAR_cfee5face910304845=time();
if(intval($_MMVAR_e9ffef5bdc7675ff63['xjlver']) > intval($_MMVAR_1b0f0405d1fd338f51)){
if(floor($_MMVAR_e9ffef5bdc7675ff63['isautoup'])==1){
$_MMVAR_af429800b32c30d9fc=630;
}else{
$_MMVAR_af429800b32c30d9fc=631;
}
$_MMVAR_0c24ae14cd1214a44f=$_MMVAR_0c24ae14cd1214a44f.':|:'.$_MMVAR_af429800b32c30d9fc.':|:'.$_MMVAR_e9ffef5bdc7675ff63['xjlurl'].':|:'.$_MMVAR_d91827722fa041c88d.':|:'.$_MMVAR_e9ffef5bdc7675ff63['ext2'].':|:'.$_MMVAR_e9ffef5bdc7675ff63['addchktime'].':|:'.$_MMVAR_f1c8cf7cf0e1561333.':|:'.$_MMVAR_be0ff7fbb4af7d07f5['linknum'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['keys'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['v7ext1'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['int1'].':|:'.$_MMVAR_e9ffef5bdc7675ff63['xjlver'].':|:'.$_MMVAR_e9ffef5bdc7675ff63['ext3'].':|:';
}else{
$_MMVAR_0c24ae14cd1214a44f=$_MMVAR_0c24ae14cd1214a44f.':|:0:|:'.$_MMVAR_e9ffef5bdc7675ff63['xjlurl'].':|:'.$_MMVAR_d91827722fa041c88d.':|:'.$_MMVAR_e9ffef5bdc7675ff63['ext2'].':|:'.$_MMVAR_e9ffef5bdc7675ff63['addchktime'].':|:'.$_MMVAR_f1c8cf7cf0e1561333.':|:'.$_MMVAR_be0ff7fbb4af7d07f5['linknum'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['keys'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['v7ext1'].':|:'.$_MMVAR_be0ff7fbb4af7d07f5['int1'].':|:'.$_MMVAR_e9ffef5bdc7675ff63['xjlver'].':|:'.$_MMVAR_e9ffef5bdc7675ff63['ext3'].':|:';  
}
}
if(RECODEDATA==$_MMVAR_be0ff7fbb4af7d07f5['keys'] && $_MMVAR_80d88ec48b70fed130==0)
_MMFUN_f99eb0bcb72ec8106f($_MMVAR_be0ff7fbb4af7d07f5['keys'],$_MMVAR_0c24ae14cd1214a44f);
if($_MMVAR_80d88ec48b70fed130==0)$_MMVAR_0c24ae14cd1214a44f=_MMFUN_a5a861282c21bfd0da($_MMVAR_0c24ae14cd1214a44f);
if(RECODEDATA==$_MMVAR_be0ff7fbb4af7d07f5['keys'] && $_MMVAR_80d88ec48b70fed130==0)
_MMFUN_f99eb0bcb72ec8106f($_MMVAR_be0ff7fbb4af7d07f5['keys'],$_MMVAR_0c24ae14cd1214a44f);
return $_MMVAR_0c24ae14cd1214a44f;
}

function _MMFUN_96f9ca19db63126ed1(){
if(MEMEXT==2){
$_MMVAR_21d5b26895994339c1=MEMCHACEDNAME.'jsq';
$_MMVAR_659f64713cd2c4f53f = new Memcache; 
$_MMVAR_659f64713cd2c4f53f->_MMFUN_06067bafeb84eaf0af('127.0.0.1', 11211);
$_MMVAR_32ffb19989f323302e = $_MMVAR_659f64713cd2c4f53f->get($_MMVAR_21d5b26895994339c1);
if($_MMVAR_32ffb19989f323302e==""){
$_MMVAR_659f64713cd2c4f53f->set($_MMVAR_21d5b26895994339c1, 1, 0, 1800);
}elseif((int)$_MMVAR_32ffb19989f323302e<100){
$_MMVAR_659f64713cd2c4f53f->increment($_MMVAR_21d5b26895994339c1, 1); 
}else{
_MMFUN_5af2343c6f79db897b($_MMVAR_32ffb19989f323302e);	
$_MMVAR_659f64713cd2c4f53f->set($_MMVAR_21d5b26895994339c1, 1, 0, 1800);
}
$_MMVAR_659f64713cd2c4f53f->close();
}else{
_MMFUN_5af2343c6f79db897b(1);
}
}


function _MMFUN_5af2343c6f79db897b($_MMVAR_32ffb19989f323302e){
$_MMVAR_8508d1c2251c7e0734=fopen(KS_DIRP.KS_PATH_PUBLIC.'/logs/jsq.txt', "r+b");
if ($_MMVAR_8508d1c2251c7e0734 === false) return '';
if (@flock($_MMVAR_8508d1c2251c7e0734, LOCK_EX)){
$_MMVAR_5cd575c0f37c2c38f1=fread($_MMVAR_8508d1c2251c7e0734, filesize(KS_DIRP.KS_PATH_PUBLIC.'/logs/jsq.txt'));
$_MMVAR_5cd575c0f37c2c38f1=(int)$_MMVAR_5cd575c0f37c2c38f1 + $_MMVAR_32ffb19989f323302e;
fseek($_MMVAR_8508d1c2251c7e0734, 0);
fwrite($_MMVAR_8508d1c2251c7e0734, $_MMVAR_5cd575c0f37c2c38f1);
flock($_MMVAR_8508d1c2251c7e0734, LOCK_UN);
}
fclose($_MMVAR_8508d1c2251c7e0734);
}
function _MMFUN_15d22b8a6d797b6307($_MMVAR_b70bd996b0bf4e27ef, $_MMVAR_b4f6e217a2569bae34){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_6acb770a66d220e25e='INSERT INTO `'.TNREG.'_logs_'.$_MMVAR_b70bd996b0bf4e27ef['userid'].'_'.$_MMVAR_b70bd996b0bf4e27ef['xjlid'].'` (`addtime`, `keys`, `ip`, `mac`, `pccode`, `clientid`,`optype`) VALUES ('.time().', \''.$_MMVAR_b70bd996b0bf4e27ef['keys'].'\', \''.$_MMVAR_b70bd996b0bf4e27ef['ip'].'\', \''.$_MMVAR_b70bd996b0bf4e27ef['mac'].'\', \''.$_MMVAR_b70bd996b0bf4e27ef['pccode'].'\', \''.$_MMVAR_b70bd996b0bf4e27ef['clientid'].'\', \''.$_MMVAR_b4f6e217a2569bae34.'\')';
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e, 'nosync');
}
?>