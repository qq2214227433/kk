<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php


function _MMFUN_4152bee70f1d9bea3a(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_c8681bb53a59c8b871;
$_MMVAR_33a8b9db2156aec1e6=intval(date('d'));
$_MMVAR_8e47823876210f2e4b=time();
$_MMVAR_f74db5de7ac8db8d6c=$_MMVAR_8e47823876210f2e4b-SAVELOGTIME*86400;
$_MMVAR_34ea39000221c46b50=$_MMVAR_8e47823876210f2e4b-AUTODELKEYTIME*86400;
$_MMVAR_bb28360e7ce1f2acbf=$_MMVAR_8e47823876210f2e4b-DELKEYTIME*86400;
$_MMVAR_196561d90b947638a7=$_MMVAR_8e47823876210f2e4b-CLEAR_ExpiredFreeAccount*86400;
$_MMVAR_b3e6ba301bac7ab4bd=$_MMVAR_8e47823876210f2e4b-CLEAR_HasPrepaidCard*86400;
$_MMVAR_c95c677f76fcf16c59=$_MMVAR_8e47823876210f2e4b-CLEAR_FreeSaveDay*86400;

$_MMVAR_6e3c32a4f733f13d4c=$_MMVAR_8e47823876210f2e4b-CLEAR_OrderA*86400;
$_MMVAR_27c3613f5d49798811=$_MMVAR_8e47823876210f2e4b-CLEAR_OrderB*86400;


$_MMVAR_6175ac50e10a0016d4=$_MMVAR_8e47823876210f2e4b-30*86400;
$_MMVAR_9f6c5f4aeed73c35f6=$_MMVAR_8e47823876210f2e4b-86400;
$_MMVAR_0d0bd84b7604f9d5df=$_MMVAR_8e47823876210f2e4b-3*86400;
$_MMVAR_9ca69ea066a955963e=$_MMVAR_8e47823876210f2e4b-7*86400;
$_MMVAR_0cb957a2418a4a141b=$_MMVAR_8e47823876210f2e4b-RECHARGELOGTIME*86400;
$_MMVAR_99ffe781e5f217cc40=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select `id` from '.TNREG.'_user');
$_MMVAR_1b9a8444ab646a930c='';
foreach ($_MMVAR_99ffe781e5f217cc40 as $_MMVAR_59a0f17735c2ba1f14){
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select `id`,`ext1` from '.TNREG.'_xjl where `userid`='.$_MMVAR_59a0f17735c2ba1f14['id']);
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_fc8b1bbe7498a4f269){
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_59a0f17735c2ba1f14['id'].'_'.$_MMVAR_fc8b1bbe7498a4f269['id'];
$_MMVAR_d302108bf5bda53c31=TNREG.'_logs_'.$_MMVAR_59a0f17735c2ba1f14['id'].'_'.$_MMVAR_fc8b1bbe7498a4f269['id'];


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_d302108bf5bda53c31.'` where `addtime`<'.$_MMVAR_f74db5de7ac8db8d6c, 'sync');	
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.='删除'.SAVELOGTIME.'天前的安全日志失败['.$_MMVAR_59a0f17735c2ba1f14['id'].'_'.$_MMVAR_fc8b1bbe7498a4f269['id'].'delete from `'.$_MMVAR_d302108bf5bda53c31.'` where `addtime`<'.$_MMVAR_f74db5de7ac8db8d6c."]\r\n";


$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `endtime`=`activetime`+`cday`*86400 where `activetime`>0 and `cday`>0','sync');
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_3fc22e00af1642a292.'` where `endtime`>0  and `endtime`<'.$_MMVAR_34ea39000221c46b50.' and `cday`>0', 'sync');	
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.='删除'.AUTODELKEYTIME.'天以前过期的卡失败['.$_MMVAR_59a0f17735c2ba1f14['id'].'_'.$_MMVAR_fc8b1bbe7498a4f269['id']."]\r\n";	


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_3fc22e00af1642a292.'` where `isdel`=1 and `deltime`<'.$_MMVAR_bb28360e7ce1f2acbf, 'sync');	
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.='删除'.DELKEYTIME.'天以前被标记为删除的卡失败['.$_MMVAR_59a0f17735c2ba1f14['id'].'_'.$_MMVAR_fc8b1bbe7498a4f269['id']."]\r\n";


if($_MMVAR_fc8b1bbe7498a4f269['ext1']=='user'){

$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys` LIKE \'M%\' AND endtime >0 AND endtime<'.$_MMVAR_196561d90b947638a7.' and `cday`<2', 'sync');	
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.='删除'.CLEAR_ExpiredFreeAccount.'天前过期的免费帐号失败['.$_MMVAR_59a0f17735c2ba1f14['id'].'_'.$_MMVAR_fc8b1bbe7498a4f269['id']."]\r\n";


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_3fc22e00af1642a292.'` where `cday`>0 and `isused`=1 and `deltime`<'.$_MMVAR_b3e6ba301bac7ab4bd, 'sync');		
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.='删除'.CLEAR_HasPrepaidCard.'天以前充值的卡失败['.$_MMVAR_59a0f17735c2ba1f14['id'].'_'.$_MMVAR_fc8b1bbe7498a4f269['id']."]\r\n";				

}


}
}



$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_testkey` where `nday`<>'.$_MMVAR_33a8b9db2156aec1e6, 'sync');
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.="删除非当天的试用记录失败\r\n";


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_havereg` where `addtime`<'.$_MMVAR_c95c677f76fcf16c59, 'sync');
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.='删除'.CLEAR_FreeSaveDay."天前免费注册记录表的记录失败\r\n";


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_tasklog` where `addtime`<'.$_MMVAR_0d0bd84b7604f9d5df, 'sync');
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.="删除3天前系统任务日志\r\n";			


$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_user` set `rmb`=999999 where `membertype`=3','sync');


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_link` where `lasttime`<'.$_MMVAR_9f6c5f4aeed73c35f6, 'sync');
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.="删除1天前的多开卡日志失败\r\n";


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_order` where `addtime`<'.$_MMVAR_27c3613f5d49798811, 'notsync');
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.="删除".CLEAR_OrderB."天前的订单失败\r\n";


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_order` where orderstatus<3 and addtime<'.$_MMVAR_6e3c32a4f733f13d4c, 'notsync');
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.="删除".CLEAR_OrderA."天以前未支付并且未发卡的订单失败\r\n";


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_timelog` where `addtime`<'.$_MMVAR_0cb957a2418a4a141b, 'notsync');	
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.="删除".RECHARGELOGTIME."天前的充值转帐日志失败\r\n";


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_ccip` where `lasttime`<'.($_MMVAR_8e47823876210f2e4b-3600), 'notsync');	
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_1b9a8444ab646a930c.="删除1小时前的IP访问记录失败\r\n";		

return $_MMVAR_1b9a8444ab646a930c;
}

function _MMFUN_6eafe6603fc17ec926($_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_1ae5c625f8a2656a60){
/*
reg_havereg 		删软件、删用户  xjlid
reg_keys_***_***	删软件、删用户
reg_logs_***_***	删软件、删用户
reg_order		删软件、删用户	xjlid
*/
global $_MMVAR_9f95914834184aeeae;

$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_havereg` where `userid`='.$_MMVAR_d6858a6d9e9ee80bab.' and `xjlid`='.$_MMVAR_1ae5c625f8a2656a60, 'sync');
if($_MMVAR_510ba85d0c08c74283==false){
return "1清理软件的已免费注册用户表失败";
}


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_order` where `userid`='.$_MMVAR_d6858a6d9e9ee80bab.' and `xjlid`='.$_MMVAR_1ae5c625f8a2656a60, 'sync');	
if($_MMVAR_510ba85d0c08c74283==false){
return "2清理该软件的订单表失败";
}


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('DROP TABLE IF EXISTS `'.TNREG.'_keys_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_1ae5c625f8a2656a60.'`', 'sync');
if($_MMVAR_510ba85d0c08c74283==false){
return "3删除软件的卡表失败";
}	


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('DROP TABLE IF EXISTS `'.TNREG.'_logs_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_1ae5c625f8a2656a60.'`', 'sync');
if($_MMVAR_510ba85d0c08c74283==false){
return "4删除软件的日志表失败";
}


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_bdlogs` where `userid`='.$_MMVAR_d6858a6d9e9ee80bab.' and `xjlid`='.$_MMVAR_1ae5c625f8a2656a60, 'sync');
if($_MMVAR_510ba85d0c08c74283==false){
return "5清理软件的备服激活日志失败";
}


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_link` where `userid`='.$_MMVAR_d6858a6d9e9ee80bab.' and `xjlid`='.$_MMVAR_1ae5c625f8a2656a60, 'sync');
if($_MMVAR_510ba85d0c08c74283==false){
return "6清理软件的多开卡记录失败";
}


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_testkey` where `xjlid`='.$_MMVAR_1ae5c625f8a2656a60, 'sync');	
if($_MMVAR_510ba85d0c08c74283==false){
return "7清理软件的试用帐号记录、试用卡记录失败";
}	


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_timelog` where `userid`='.$_MMVAR_d6858a6d9e9ee80bab.' and `xjlid`='.$_MMVAR_1ae5c625f8a2656a60, 'sync');
if($_MMVAR_510ba85d0c08c74283==false){
return "8清理软件的转帐，充值记录失败";
}		


$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_xjl` where `userid`='.$_MMVAR_d6858a6d9e9ee80bab.' and `id`='.$_MMVAR_1ae5c625f8a2656a60, 'sync');
if($_MMVAR_510ba85d0c08c74283==false){
return "9删除软件失败";
}	
return 1;
}

function _MMFUN_0ddfd0448eb857b2bd($_MMVAR_84658532b0d797c52d,$_MMVAR_e8a3403d69ff92b042,$_MMVAR_e23c7e328f1c3356dc){
global $_MMVAR_9f95914834184aeeae;

$_MMVAR_273aa5d2794e847523 = array(
'userid'		=>$_MMVAR_84658532b0d797c52d,
'xjlcode'		=>$_MMVAR_e8a3403d69ff92b042,
'addtime'		=>time(),
'xjlkey'		=>substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,16),
'xjlname'		=>'K_'.substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,6),
'testtime'		=>1,
'testtimes'		=>3,
'rmb1'			=>0,
'rmb7'			=>0,
'rmb30'			=>0,
'rmb90'			=>0,
'rmb365'		=>0,
'isautoup'		=>0,
'intro'			=>'无',
'xjlurl'		=>'http://',
'xjlver'		=>'1',
'uplogs'		=>'这里填你的升级日志',
'autojbtime'	=>17,
'jbtimes'		=>3,
'orderpayinfo'	=>'户名：***
卡号：*******************
支付后请尽快联系作者，以便你第一时间可以取卡',
'rmb1s'			=>0,
'rmb7s'			=>0,
'rmb30s'		=>0,
'rmb90s'		=>0,
'rmb365s'		=>0,
'linkClientNum'		=>2,
'int1'		=>0,
'int2'		=>3,
'int3'		=>7,
'int4'		=>0,
'ext1'		=>'keys',
'ext2'		=>'',
'ext3'		=>'',
'dkbindpc'		=>0,
'phpcode'		=>"",
'kbsetting'		=>'1|0:0.1,1:0.2,7:1,30:2,90:6,185:12,365:24,9000:200'
);
if($_MMVAR_e23c7e328f1c3356dc=='user'){
$_MMVAR_273aa5d2794e847523['xjlname']='U_'.substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,6);
$_MMVAR_273aa5d2794e847523['ext1']='user';
$_MMVAR_273aa5d2794e847523['reg_multi_user']=0;
}
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_xjl',$_MMVAR_273aa5d2794e847523,'sync');
$_MMVAR_61a3ad9505d0bea3fa=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_84658532b0d797c52d.' order by id desc limit 1');
return $_MMVAR_61a3ad9505d0bea3fa['id'];
}

function _MMFUN_c871af7703ca85749e($_MMVAR_559c5dca20e8494aad,$_MMVAR_1ae5c625f8a2656a60,$_MMVAR_e23c7e328f1c3356dc){
global $_MMVAR_9f95914834184aeeae;

$_MMVAR_6acb770a66d220e25e='CREATE TABLE IF NOT EXISTS `reg_logs_'.$_MMVAR_559c5dca20e8494aad.'_'.$_MMVAR_1ae5c625f8a2656a60.'` (  `id` int(10) NOT NULL auto_increment,  `addtime` int(10) NOT NULL,  `keys` varchar(24) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,  `ip` char(15) CHARACTER SET ascii COLLATE ascii_bin NOT NULL, `mac` char(12) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,  `pccode` char(26) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,  `clientid` smallint(5) unsigned NOT NULL,  `optype` tinyint(3) unsigned NOT NULL,  PRIMARY KEY  (`id`),  KEY `keys` (`keys`(8))) ENGINE=MyISAM DEFAULT CHARSET=ascii AUTO_INCREMENT=1';
$_MMVAR_00b164b35222cc70df=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e,'sync');
if($_MMVAR_00b164b35222cc70df==false)
_MMFUN_6da5ed7d3a356dcac7('创建'.TNREG.'_logs_'.$_MMVAR_559c5dca20e8494aad.'_'.$_MMVAR_1ae5c625f8a2656a60.'表失败');

$_MMVAR_6acb770a66d220e25e='CREATE TABLE IF NOT EXISTS `'.TNREG.'_keys_'.$_MMVAR_559c5dca20e8494aad.'_'.$_MMVAR_1ae5c625f8a2656a60.'` (';
$_MMVAR_6acb770a66d220e25e.='`id` int(8) unsigned NOT NULL auto_increment,';
$_MMVAR_6acb770a66d220e25e.='`ordernum` varchar(18) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`userid` int(8) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`isused` int(1) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`xjlid` int(8) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`agentid` int(8) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`isdel` tinyint(1) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`cday` decimal(8,2) NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`ispay` tinyint(1) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`linknum` int(4) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`addtime` int(10) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`activetime` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`endtime` int(10) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`bdday` tinyint(2) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`bdtimes` tinyint(2) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`bdcode` char(16) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`chkcode` varchar(10) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`lastbdtime` int(10) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`lastonlinetime` int(10) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`normal` tinyint(1) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`deltime` int(10) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`activetimes` int(8) unsigned NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`ext2` varchar(200) CHARACTER SET ascii COLLATE ascii_bin  default \'\',';
$_MMVAR_6acb770a66d220e25e.='`keys` varchar(24) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,';
$_MMVAR_6acb770a66d220e25e.='`ext1` varchar(20) default \'\',';
$_MMVAR_6acb770a66d220e25e.='`cusername` varchar(60) CHARACTER SET ascii COLLATE ascii_bin default \'\',';
$_MMVAR_6acb770a66d220e25e.='`intro` varchar(60) default \'\',';
$_MMVAR_6acb770a66d220e25e.='`cpassword` varchar(30) CHARACTER SET ascii COLLATE ascii_bin default \'\',';
$_MMVAR_6acb770a66d220e25e.='`fuser` varchar(60) CHARACTER SET ascii COLLATE ascii_bin default \'\',';
$_MMVAR_6acb770a66d220e25e.='`int1` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`int2` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`int3` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`v7ext1` varchar(100) default \'\',';
$_MMVAR_6acb770a66d220e25e.='`v7ext2` varchar(100) default \'\',';
$_MMVAR_6acb770a66d220e25e.='`daychklock` tinyint(2) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`dayactivetimes` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`d13int1` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`d13int2` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`d13int3` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`d13int4` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='`d13int5` int(10) unsigned default \'0\',';
$_MMVAR_6acb770a66d220e25e.='PRIMARY KEY  (`id`),';
$_MMVAR_6acb770a66d220e25e.='KEY `cusername` (`cusername`(10)),';
$_MMVAR_6acb770a66d220e25e.='KEY `keys` (`keys`(10)),';
$_MMVAR_6acb770a66d220e25e.='KEY `ext1` (`ext1`(10)),';
$_MMVAR_6acb770a66d220e25e.='KEY `intro` (`intro`(6)),';
$_MMVAR_6acb770a66d220e25e.='KEY `agentid` (`agentid`),';
$_MMVAR_6acb770a66d220e25e.='KEY `int2` (`int2`),';
if($_MMVAR_e23c7e328f1c3356dc=='keys')$_MMVAR_6acb770a66d220e25e.='KEY `activetime` (`activetime`),';
$_MMVAR_6acb770a66d220e25e.='KEY `isused` (`isused`,`agentid`)';
$_MMVAR_6acb770a66d220e25e.=') ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ';
$_MMVAR_00b164b35222cc70df=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e,'sync');
if($_MMVAR_00b164b35222cc70df==false)
_MMFUN_6da5ed7d3a356dcac7('创建'.TNREG.'_keys_'.$_MMVAR_559c5dca20e8494aad.'_'.$_MMVAR_1ae5c625f8a2656a60.'表失败');
}


function _MMFUN_cd157ac313b1eb1202($_MMVAR_559c5dca20e8494aad,$_MMVAR_1ae5c625f8a2656a60,$_MMVAR_e23c7e328f1c3356dc){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_273aa5d2794e847523 = array(
'xjlid'			=>$_MMVAR_1ae5c625f8a2656a60,
'ordernum'		=>'0',
'userid'		=>$_MMVAR_559c5dca20e8494aad,
'agentid'		=>0,
'cday'			=>0,
'linknum'		=>1,
'addtime'		=>time(),
'endtime'		=>2145974399,
'bdday'			=>0,
'bdtimes'		=>0,
'bdcode'		=>'1001',
'chkcode'		=>'100000',
'lastbdtime'	=>0,
'lastonlinetime'=>0,
'normal'		=>0,
'isdel'			=>0,
'ispay'			=>1,
'deltime'		=>0,
'activetime'	=>time(),
'activetimes'	=>0,
'chktimes'		=>0,
'keys'			=>_MMFUN_90732a0da1412e2b45('S','_keys_'.$_MMVAR_559c5dca20e8494aad.'_'.$_MMVAR_1ae5c625f8a2656a60).strtoupper(substr(md5(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789")),0,10)),
'isused'		=>2,
'isuser'		=>1,
'chktype'		=>1
);
if($_MMVAR_e23c7e328f1c3356dc=='keys'){
$_MMVAR_273aa5d2794e847523['ext1']='试用卡';
$_MMVAR_273aa5d2794e847523['intro']='试用卡，不允许删除，可冻结';
}else{
$_MMVAR_273aa5d2794e847523['cusername']='test';
$_MMVAR_273aa5d2794e847523['cpassword']=substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,6);	
$_MMVAR_273aa5d2794e847523['ext2']=substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,15);
$_MMVAR_273aa5d2794e847523['ext1']='试用帐号';
$_MMVAR_273aa5d2794e847523['intro']='试用帐号，不允许删除，可冻结';
}
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_keys_'.$_MMVAR_559c5dca20e8494aad.'_'.$_MMVAR_1ae5c625f8a2656a60,$_MMVAR_273aa5d2794e847523,'sync');
}
?>