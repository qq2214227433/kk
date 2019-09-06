<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php


if(SVRID==1)
_MMFUN_6da5ed7d3a356dcac7("非主服才可以添加临时卡");

if(stripos(ini_get('disable_functions'),'set_time_limit')===false)@set_time_limit(0);
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_1bb3b551860658ae3b=_MMFUN_cc3cf510bffd973b95('vcode','post','int');
if(isset($_SESSION['vcode'])){
if($_MMVAR_1bb3b551860658ae3b!=$_SESSION['vcode'])
_MMFUN_6da5ed7d3a356dcac7("验证码错误1");
}else{
_MMFUN_6da5ed7d3a356dcac7("验证码错误2");
}	
unset($_SESSION['vcode']);
session_unset();
session_destroy();
$_MMVAR_1ae5c625f8a2656a60=_MMFUN_cc3cf510bffd973b95('xjlid','post','int',0);
$_MMVAR_33c78d9516bbab648a=10;
$_MMVAR_b3cf8fb9a20804256b=_MMFUN_cc3cf510bffd973b95('linknum','post','int',1);
$_MMVAR_711d60731a9d8adcbf=_MMFUN_cc3cf510bffd973b95('keynum','post','int',1);
$_MMVAR_e23c7e328f1c3356dc=_MMFUN_cc3cf510bffd973b95('ext1','post','sql','匿名');
$_MMVAR_d9c887456b803d668c=_MMFUN_cc3cf510bffd973b95('intro','post','sql',"无");
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
if($_MMVAR_711d60731a9d8adcbf>300)
_MMFUN_6da5ed7d3a356dcac7("每次最多可添加300张卡！");


if($_MMVAR_1ae5c625f8a2656a60==0)
_MMFUN_6da5ed7d3a356dcac7("请选择软件");

$_MMVAR_208b2ae6cbddd24d27=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_xjl` where `id`='.$_MMVAR_1ae5c625f8a2656a60.' and `userid`='.$_MMVAR_a68c41bd0ae0e8ec59[1] );
if($_MMVAR_208b2ae6cbddd24d27==false)
_MMFUN_6da5ed7d3a356dcac7("所属软件未找到");	
$_MMVAR_f4f7c71d67b2d5613f='';
$_MMVAR_57b47b5acdc2f64db3=$_MMVAR_1ae5c625f8a2656a60;
if($_MMVAR_208b2ae6cbddd24d27['ext1']=='user')
$_MMVAR_f4f7c71d67b2d5613f='1';	
$_MMVAR_99ffe781e5f217cc40=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_a68c41bd0ae0e8ec59[1] );
if($_MMVAR_99ffe781e5f217cc40==false)
_MMFUN_6da5ed7d3a356dcac7("用户信息未找到");
$_MMVAR_3fc22e00af1642a292='_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_1ae5c625f8a2656a60;


$_MMVAR_6e4136d617f6388ff8=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100('select * from `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` where cday=9.99');
if($_MMVAR_6e4136d617f6388ff8+$_MMVAR_711d60731a9d8adcbf>1000)
_MMFUN_6da5ed7d3a356dcac7("该软件里最多只允许添加1000张临时卡现有".$_MMVAR_6e4136d617f6388ff8);


$_MMVAR_1b9a8444ab646a930c='添加临时卡成功<br>';	
$_MMVAR_1b9a8444ab646a930c.='所属软件：'.$_MMVAR_208b2ae6cbddd24d27["xjlname"].'　　天数：10　　连接：'.$_MMVAR_b3cf8fb9a20804256b.'<br>注册卡列表：　　　　　<br>';	

$_MMVAR_25fcab801959161988='L';

$_MMVAR_bb1d37417398abcdf5=_MMFUN_90732a0da1412e2b45($_MMVAR_25fcab801959161988,$_MMVAR_3fc22e00af1642a292);

$_MMVAR_2e4079af223d76e6d0 = array('/1/','/2/','/3/','/4/','/5/','/6/','/7/','/8/','/9/','/A/','/B/','/C/','/D/','/E/','/F/');
$_MMVAR_87cf4483165909ec22 = array('G-','H-','I-','J-','K-','L-','M-','N-','P-','Q-','R-','S-','T-','U-','V-');
shuffle($_MMVAR_87cf4483165909ec22);			
$_MMVAR_0f91d794ba87cd9ce8=array($_MMVAR_2e4079af223d76e6d0,$_MMVAR_87cf4483165909ec22);

$_MMVAR_676a1786faaa9e46d8=time();
$_MMVAR_e3bdef30964a1750f9='INSERT INTO `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` (`ordernum`, `userid`, `isused`, `xjlid`, `agentid`, `isdel`, `cday`, `ispay`, `linknum`, `addtime`, `activetime`, `endtime`, `bdday`, `bdtimes`, `bdcode`, `chkcode`, `lastbdtime`, `lastonlinetime`, `normal`, `deltime`, `activetimes`, `keys`, `ext1`, `intro`,`int2`) VALUES ';
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<=abs(floor($_MMVAR_711d60731a9d8adcbf/-100));$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_1b87417a49fe9d71e1='';
$_MMVAR_530d7538dd2f66b5ca='';
for($_MMVAR_21a9f2323f653b8d2f=1;$_MMVAR_21a9f2323f653b8d2f<=100;$_MMVAR_21a9f2323f653b8d2f++){
if(($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f>$_MMVAR_711d60731a9d8adcbf)
break;
$_MMVAR_1f0f8d5cbff25f40ae=strtoupper($_MMVAR_bb1d37417398abcdf5.substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$_MMVAR_208b2ae6cbddd24d27['keylen']-9)._MMFUN_5b85fb04c723594158(($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f,$_MMVAR_0f91d794ba87cd9ce8));
$_MMVAR_530d7538dd2f66b5ca.=$_MMVAR_1b87417a49fe9d71e1.'(\'0\', \''.$_MMVAR_a68c41bd0ae0e8ec59[1].'\', \'0\', \''.$_MMVAR_1ae5c625f8a2656a60.'\', \'0\', \'0\', \''.$_MMVAR_33c78d9516bbab648a.'\', \'1\', \''.$_MMVAR_b3cf8fb9a20804256b.'\', \''.$_MMVAR_676a1786faaa9e46d8.'\', \'0\', \'0\', \'0\', \'0\', \'1000\', \'100000\', \'0\', \'0\', \'1\', \'0\', \'0\', \''.$_MMVAR_1f0f8d5cbff25f40ae.'\', \''.$_MMVAR_e23c7e328f1c3356dc.'\', \''.$_MMVAR_d9c887456b803d668c.'\',1)';
$_MMVAR_1b87417a49fe9d71e1=',';
$_MMVAR_1b9a8444ab646a930c.=$_MMVAR_1f0f8d5cbff25f40ae."<br>\r\n";				
}
if($_MMVAR_530d7538dd2f66b5ca!='')
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_e3bdef30964a1750f9.$_MMVAR_530d7538dd2f66b5ca,'sync');
}
$_MMVAR_d3b00a9f10db411a5c=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_temppay` whrer `tablename`=\''.TNREG.$_MMVAR_3fc22e00af1642a292.'\'');
if(empty($_MMVAR_d3b00a9f10db411a5c))
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_temppay` (`tablename`, `basekey`) VALUES(\''.TNREG.$_MMVAR_3fc22e00af1642a292.'\',\'haveaddtempkey\')','notsync');	
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_1b9a8444ab646a930c,'?action=main'.$_MMVAR_f4f7c71d67b2d5613f.'&sxjlid='.$_MMVAR_57b47b5acdc2f64db3);
?>