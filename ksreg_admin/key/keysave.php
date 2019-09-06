<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php


_MMFUN_d68ee68ae41a1d89f0();
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
session_destroy();

$_MMVAR_5ac70227f7ff58e5b2=array(0=>'S',1=>'T',7=>'Z',9.99=>'L',30=>'Y',90=>'J',185=>'R',365=>'N',9000=>'A');
$_MMVAR_1ae5c625f8a2656a60=_MMFUN_cc3cf510bffd973b95('xjlid','post','int',0);
$_MMVAR_33c78d9516bbab648a=_MMFUN_cc3cf510bffd973b95('cday','post','num',0);
$_MMVAR_2a84e670cab8778002=_MMFUN_cc3cf510bffd973b95('agentid','post','num',0);
$_MMVAR_5d07e63ebd54c9b2f4=_MMFUN_cc3cf510bffd973b95('cday2','post','int',0);
$_MMVAR_b3cf8fb9a20804256b=_MMFUN_cc3cf510bffd973b95('linknum','post','int',1);
$_MMVAR_711d60731a9d8adcbf=_MMFUN_cc3cf510bffd973b95('keynum','post','int',1);
$_MMVAR_e23c7e328f1c3356dc=_MMFUN_cc3cf510bffd973b95('ext1','post','sql','匿名');
$_MMVAR_d9c887456b803d668c=_MMFUN_cc3cf510bffd973b95('intro','post','sql',"无");

$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
if($_MMVAR_33c78d9516bbab648a==0)
_MMFUN_6da5ed7d3a356dcac7("卡类型参数错误1！");


$_MMVAR_c62cd815015690a8f9=$_MMVAR_33c78d9516bbab648a;
$_MMVAR_0b1a77f0d4ac89ba01=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_keyattribute where id='.$_MMVAR_33c78d9516bbab648a);	
if(empty($_MMVAR_0b1a77f0d4ac89ba01))
_MMFUN_6da5ed7d3a356dcac7("所属卡类未找到！");

$_MMVAR_33c78d9516bbab648a=$_MMVAR_0b1a77f0d4ac89ba01['keycday'];

if($_MMVAR_711d60731a9d8adcbf>1000)
_MMFUN_6da5ed7d3a356dcac7("每次最多可添加1000张卡！");

if($_MMVAR_b3cf8fb9a20804256b=='0')
_MMFUN_6da5ed7d3a356dcac7("连接数不可为0");

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

$_MMVAR_09e96d007b3ab4fe02=_MMFUN_be508a66d5e356ab9c($_MMVAR_a68c41bd0ae0e8ec59[0],$_MMVAR_1ae5c625f8a2656a60,$_MMVAR_c62cd815015690a8f9,$_MMVAR_b3cf8fb9a20804256b);
if($_MMVAR_09e96d007b3ab4fe02==-1)
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_b3cf8fb9a20804256b.'开'.$_MMVAR_0b1a77f0d4ac89ba01['keyname'].'扣币规则未设置，请联系本系统的超级管理员到[软件管理->扩展扣币规则]里设置');


if($_MMVAR_33c78d9516bbab648a==9000){
$_MMVAR_a8da369c10dfdad5bf=intval((mktime(0,0,0,1,1,2038)-mktime(0,0,0,date("m"),date("d"),date("y")))/86400);
if($_MMVAR_a8da369c10dfdad5bf<9000)
$_MMVAR_33c78d9516bbab648a=$_MMVAR_a8da369c10dfdad5bf;
}




$_MMVAR_febe3bf74cab09e86b=$_MMVAR_09e96d007b3ab4fe02*$_MMVAR_711d60731a9d8adcbf;
if($_MMVAR_a68c41bd0ae0e8ec59[0]<3 && $_MMVAR_99ffe781e5f217cc40['rmb']<$_MMVAR_09e96d007b3ab4fe02*$_MMVAR_711d60731a9d8adcbf)
_MMFUN_6da5ed7d3a356dcac7('帐户内卡币不足，无法添加'.$_MMVAR_711d60731a9d8adcbf.'张'.$_MMVAR_3baee5e4bc5c4c4d09[$_MMVAR_33c78d9516bbab648a]);

$_MMVAR_1d4aa003d5948966f2=_MMFUN_b3efe1487b20e72104($_MMVAR_a68c41bd0ae0e8ec59[1],1);

if($_MMVAR_b3cf8fb9a20804256b=='1'){	
if($_MMVAR_99ffe781e5f217cc40['vipkeynums']!=0){	
if($_MMVAR_33c78d9516bbab648a>1 && $_MMVAR_99ffe781e5f217cc40['vipkeynums']*3<$_MMVAR_1d4aa003d5948966f2[1]+$_MMVAR_711d60731a9d8adcbf){
_MMFUN_6da5ed7d3a356dcac7('总共可管理'.($_MMVAR_99ffe781e5f217cc40['vipkeynums']*3).'张天数大于1的卡，现有'.$_MMVAR_1d4aa003d5948966f2[1].'张，无法再添加'.$_MMVAR_711d60731a9d8adcbf.'张'.$_MMVAR_33c78d9516bbab648a.'天卡');
}
}
}else{	
if($_MMVAR_99ffe781e5f217cc40['vipkeynums']!=0){	
if($_MMVAR_33c78d9516bbab648a>1 && $_MMVAR_99ffe781e5f217cc40['vipkeynums']*3<$_MMVAR_1d4aa003d5948966f2[1]+$_MMVAR_711d60731a9d8adcbf*$_MMVAR_b3cf8fb9a20804256b/2){
_MMFUN_6da5ed7d3a356dcac7('总共可管理'.$_MMVAR_99ffe781e5f217cc40['vipkeynums'].'张天数大于1的卡，现有'.$_MMVAR_1d4aa003d5948966f2[1].'张，无法再添加'.($_MMVAR_711d60731a9d8adcbf+$_MMVAR_711d60731a9d8adcbf*($_MMVAR_b3cf8fb9a20804256b-1)/2).'张'.$_MMVAR_33c78d9516bbab648a.'天卡（多开卡计算）');
}
}
}

$_MMVAR_1b9a8444ab646a930c='添加注册卡成功';
if($_MMVAR_a68c41bd0ae0e8ec59[0]<3){
$_MMVAR_1b9a8444ab646a930c.='(已从你的帐户中扣除'.$_MMVAR_febe3bf74cab09e86b.'卡币)!';
$_MMVAR_1b9a8444ab646a930c.='<script>var c=window.parent.document.getElementById(\'drmb\').innerHTML;window.parent.document.getElementById(\'drmb\').innerHTML=(c*10-'.$_MMVAR_febe3bf74cab09e86b.'*10)/10;</script>';	
}
$_MMVAR_1b9a8444ab646a930c.='<br>';	
$_MMVAR_1b9a8444ab646a930c.='所属软件：'.$_MMVAR_208b2ae6cbddd24d27["xjlname"]."\r\n天数：".$_MMVAR_33c78d9516bbab648a."\r\n连接：".$_MMVAR_b3cf8fb9a20804256b;	
if($_MMVAR_208b2ae6cbddd24d27['locktimes']>0){
$_MMVAR_1b9a8444ab646a930c.='点数：'.$_MMVAR_0b1a77f0d4ac89ba01['keytimes']."\r\n<br>";
}	
$_MMVAR_1b9a8444ab646a930c.="<br>注册卡列表：　　　　　<br>\r\n";	


$_MMVAR_bb1d37417398abcdf5=_MMFUN_90732a0da1412e2b45($_MMVAR_0b1a77f0d4ac89ba01['keyfirststr'],$_MMVAR_3fc22e00af1642a292);

$_MMVAR_2e4079af223d76e6d0 = array('/1/','/2/','/3/','/4/','/5/','/6/','/7/','/8/','/9/','/A/','/B/','/C/','/D/','/E/','/F/');
$_MMVAR_87cf4483165909ec22 = array('G-','H-','I-','J-','K-','L-','M-','N-','P-','Q-','R-','S-','T-','U-','V-');

shuffle($_MMVAR_87cf4483165909ec22);			
$_MMVAR_0f91d794ba87cd9ce8=array($_MMVAR_2e4079af223d76e6d0,$_MMVAR_87cf4483165909ec22);

$_MMVAR_676a1786faaa9e46d8=time();
$_MMVAR_e3bdef30964a1750f9='INSERT INTO `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` (`ordernum`, `userid`, `isused`, `xjlid`, `agentid`, `isdel`, `cday`, `ispay`, `linknum`, `addtime`, `activetime`, `endtime`, `bdday`, `bdtimes`, `bdcode`, `chkcode`, `lastbdtime`, `lastonlinetime`, `normal`, `deltime`, `activetimes`, `keys`, `ext1`, `intro`,`dayactivetimes`) VALUES ';
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<=abs(floor($_MMVAR_711d60731a9d8adcbf/-100));$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_1b87417a49fe9d71e1='';
$_MMVAR_530d7538dd2f66b5ca='';
for($_MMVAR_21a9f2323f653b8d2f=1;$_MMVAR_21a9f2323f653b8d2f<=100;$_MMVAR_21a9f2323f653b8d2f++){
if(($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f>$_MMVAR_711d60731a9d8adcbf)
break;
$_MMVAR_1f0f8d5cbff25f40ae=strtoupper($_MMVAR_bb1d37417398abcdf5.substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$_MMVAR_208b2ae6cbddd24d27['keylen']-9)._MMFUN_5b85fb04c723594158(($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f,$_MMVAR_0f91d794ba87cd9ce8));
$_MMVAR_530d7538dd2f66b5ca.=$_MMVAR_1b87417a49fe9d71e1.'(\'0\', \''.$_MMVAR_a68c41bd0ae0e8ec59[1].'\', \'0\', \''.$_MMVAR_1ae5c625f8a2656a60.'\', \''.$_MMVAR_2a84e670cab8778002.'\', \'0\', \''.$_MMVAR_33c78d9516bbab648a.'\', \'1\', \''.$_MMVAR_b3cf8fb9a20804256b.'\', \''.$_MMVAR_676a1786faaa9e46d8.'\', \'0\', \'0\', \'0\', \'0\', \'1000\', \'100000\', \'0\', \'0\', \'1\', \'0\', \'0\', \''.$_MMVAR_1f0f8d5cbff25f40ae.'\', \''.$_MMVAR_e23c7e328f1c3356dc.'\', \''.$_MMVAR_d9c887456b803d668c.'\',\''.$_MMVAR_0b1a77f0d4ac89ba01['keytimes'].'\')';
$_MMVAR_1b87417a49fe9d71e1=',';
$_MMVAR_1b9a8444ab646a930c.=$_MMVAR_1f0f8d5cbff25f40ae."<br>\r\n";				
}
if($_MMVAR_530d7538dd2f66b5ca!='')
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_e3bdef30964a1750f9.$_MMVAR_530d7538dd2f66b5ca,'sync');
}
if(defined('SAE_MYSQL_USER')!=true){
$_MMVAR_97dc1b87d8f4cef7d0='key_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_1ae5c625f8a2656a60.'_'.date('Ymd_His',time()).'_'._MMFUN_cf8c11a79575861c0c(date('YmdHis',time()));
$_MMVAR_14e115b66d2198dda1=date('mdHi',time()).'_'.intval($_MMVAR_33c78d9516bbab648a).'天_'.$_MMVAR_711d60731a9d8adcbf.'张_'.$_MMVAR_e23c7e328f1c3356dc.'_soft'.$_MMVAR_1ae5c625f8a2656a60.'.txt';
$_MMVAR_23db24320b7b30b187='<'.'?php exit(\'Web invalid!\'); ?'.'>'."\r\n\r\n\r\n".str_rot13(str_ireplace('<br>','',$_MMVAR_1b9a8444ab646a930c));
file_put_contents('./keycache/'.$_MMVAR_97dc1b87d8f4cef7d0.'.php',$_MMVAR_23db24320b7b30b187);
$_MMVAR_1b9a8444ab646a930c='<form action =\'keylist_.php?action=keyfiledown&downfile='.$_MMVAR_14e115b66d2198dda1.'&keyfile='.$_MMVAR_97dc1b87d8f4cef7d0.'\' method=post id=fdown2 name=fdown2 target=\'downframe\'><input name=keyday type=hidden value='.$_MMVAR_0b1a77f0d4ac89ba01['keyfirststr'].'><input name=keynum type=hidden value='.$_MMVAR_711d60731a9d8adcbf.'><input name=sumit value=\'如未弹出下载窗口，请点击这里下载刚生成的卡号\' type=submit style=\'width:300px;height:24px;border:1px solid #ccc;padding:3px 8px\'></form><form action =\'keylist_.php?action=keyfiledel&keyfile='.$_MMVAR_97dc1b87d8f4cef7d0.'\' method=post style=\'margin-top:10px\' id=fdown23 name=fdown23 target=\'downframe\'><input name=sumit value=\'下载卡号后请点击这里从服务器中删除临时文件\' type=submit style=\'width:300px;height:24px;border:1px solid #ccc;padding:3px 8px\'></form><iframe name=downframe id=downframe marginwidth=0 marginheight=0 width=200 height=30 src=\'\' frameborder=0></iframe><br>'."\r\n".$_MMVAR_1b9a8444ab646a930c;
}


if($_MMVAR_a68c41bd0ae0e8ec59[0]<3)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET rmb=rmb-'.$_MMVAR_febe3bf74cab09e86b.' where id='.$_MMVAR_a68c41bd0ae0e8ec59[1],'sync');


if($_MMVAR_b3cf8fb9a20804256b=='1'){	
if($_MMVAR_33c78d9516bbab648a>1)				
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET `key2num`=`key2num`+'.$_MMVAR_711d60731a9d8adcbf.' where id='.$_MMVAR_a68c41bd0ae0e8ec59[1],'sync');
}else{
if($_MMVAR_33c78d9516bbab648a>1)				
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET `key2num`=`key2num`+'.($_MMVAR_711d60731a9d8adcbf+$_MMVAR_711d60731a9d8adcbf*($_MMVAR_b3cf8fb9a20804256b-1)/2).' where id='.$_MMVAR_a68c41bd0ae0e8ec59[1],'sync');
}
//exit();		
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_1b9a8444ab646a930c,'?action=main'.$_MMVAR_f4f7c71d67b2d5613f.'&sxjlid='.$_MMVAR_57b47b5acdc2f64db3);
?>