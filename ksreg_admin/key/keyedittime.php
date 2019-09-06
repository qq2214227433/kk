<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
ob_clean();

if(SVRID!=1)	
exit('$.msgbox({width:500,height:120,content:{type:\'alert\', content:\'备服数据禁止操作！\'},animation:0,drag:false,autoClose:3});');


global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_b760668e2ace0f883d=_MMFUN_cc3cf510bffd973b95('keyid','get','sql','');
$_MMVAR_3fc22e00af1642a292=_MMFUN_cc3cf510bffd973b95('ktname','get','sql','');
$_MMVAR_3e9f3e4491a4bd3e84=_MMFUN_cc3cf510bffd973b95('keyaddtime','get','num',0);

if($_MMVAR_3e9f3e4491a4bd3e84=='0')
exit('$.msgbox({width:500,height:120,content:{type:\'alert\', content:\'授权天数填写错误\'},animation:0,drag:false,autoClose:3});');

$_MMVAR_0abc6a6990b8c8acb4=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` where `id`='.$_MMVAR_b760668e2ace0f883d );
if(empty($_MMVAR_0abc6a6990b8c8acb4))
exit('$.msgbox({width:500,height:120,content:{type:\'alert\', content:\'未找到注册卡信息，请不要非法提交参数！\'},animation:0,drag:false,autoClose:3});');


if($_MMVAR_0abc6a6990b8c8acb4['cday']==0)	
exit('$.msgbox({width:500,height:120,content:{type:\'alert\', content:\'试用卡，不允许加时！\'},animation:0,drag:false,autoClose:3});');


if($_MMVAR_0abc6a6990b8c8acb4['userid']!=$_MMVAR_a68c41bd0ae0e8ec59[1])	
exit('$.msgbox({width:500,height:120,content:{type:\'alert\', content:\'该注册卡不是你的，不能加时操作！\'},animation:0,drag:false,autoClose:3});');


if($_MMVAR_0abc6a6990b8c8acb4['cday']+$_MMVAR_3e9f3e4491a4bd3e84<=0)	
exit('$.msgbox({width:500,height:120,content:{type:\'alert\', content:\'加时操作后，天数小于或等于0，禁止这样操作！\'},animation:0,drag:false,autoClose:3});');


$_MMVAR_99ffe781e5f217cc40=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_user` where `id`='.$_MMVAR_a68c41bd0ae0e8ec59[1] );

$_MMVAR_33c78d9516bbab648a=$_MMVAR_0abc6a6990b8c8acb4['cday'];
$_MMVAR_5d07e63ebd54c9b2f4=$_MMVAR_3e9f3e4491a4bd3e84+$_MMVAR_0abc6a6990b8c8acb4['cday'];
if($_MMVAR_3e9f3e4491a4bd3e84+$_MMVAR_33c78d9516bbab648a>9000)	
exit('$.msgbox({width:500,height:120,content:{type:\'alert\', content:\'天数累计大于9000，请不要非法提交参数！\'},animation:0,drag:false,autoClose:3});');

if(intval($_MMVAR_3e9f3e4491a4bd3e84)>0){	
$_MMVAR_0b2e3ad4d3a65dc3bd=floor($_MMVAR_33c78d9516bbab648a/30)*2;
if($_MMVAR_0b2e3ad4d3a65dc3bd>=2){
$_MMVAR_09e96d007b3ab4fe02=floor(($_MMVAR_33c78d9516bbab648a / 30)*2*100)/100;
}else{
if($_MMVAR_33c78d9516bbab648a/7>2){
$_MMVAR_09e96d007b3ab4fe02=2;
}else{
$_MMVAR_09e96d007b3ab4fe02=floor($_MMVAR_33c78d9516bbab648a/7*100)/100;
}
if($_MMVAR_33c78d9516bbab648a==1)
$_MMVAR_09e96d007b3ab4fe02=0.2;
}

$_MMVAR_03261a834e0d33b057=$_MMVAR_33c78d9516bbab648a+$_MMVAR_3e9f3e4491a4bd3e84;	
$_MMVAR_0b2e3ad4d3a65dc3bd=floor($_MMVAR_03261a834e0d33b057/30)*2;
if($_MMVAR_0b2e3ad4d3a65dc3bd>=2){
$_MMVAR_1cbde74def07fe3f9c=floor(($_MMVAR_03261a834e0d33b057 / 30)*2*100)/100;
}else{
if($_MMVAR_03261a834e0d33b057/7>2){
$_MMVAR_1cbde74def07fe3f9c=2;
}else{
$_MMVAR_1cbde74def07fe3f9c=floor($_MMVAR_03261a834e0d33b057/7*100)/100;
}
}
$_MMVAR_127d4d9181b49c7235=$_MMVAR_1cbde74def07fe3f9c-$_MMVAR_09e96d007b3ab4fe02;
$_MMVAR_127d4d9181b49c7235=$_MMVAR_127d4d9181b49c7235+($_MMVAR_0abc6a6990b8c8acb4['linknum']-1)*$_MMVAR_127d4d9181b49c7235/2;
if($_MMVAR_99ffe781e5f217cc40['rmb']<$_MMVAR_127d4d9181b49c7235)	
exit('$.msgbox({width:500,height:120,content:{type:\'alert\', content:\'帐户内卡币不足，本次加时需'.$_MMVAR_127d4d9181b49c7235.'卡币！\'},animation:0,drag:false,autoClose:3});');

}
$_MMVAR_366e5a7306859da4cc="";
$_MMVAR_1b9a8444ab646a930c="";
if($_MMVAR_0abc6a6990b8c8acb4['activetime']>0){
$_MMVAR_43cc9950e3d1094875=$_MMVAR_0abc6a6990b8c8acb4['activetime']+86400*($_MMVAR_0abc6a6990b8c8acb4['cday']+$_MMVAR_3e9f3e4491a4bd3e84);
$_MMVAR_366e5a7306859da4cc=', `endtime`='.$_MMVAR_43cc9950e3d1094875;	
$_MMVAR_1b9a8444ab646a930c='document.getElementById(\'jsendtime'.$_MMVAR_b760668e2ace0f883d.'\').innerHTML=\''._MMFUN_59e7c3854a78f9e590($_MMVAR_43cc9950e3d1094875,1).'\';';
}

if(intval($_MMVAR_3e9f3e4491a4bd3e84)>0 && $_MMVAR_a68c41bd0ae0e8ec59[0]<3)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET rmb=rmb-'.$_MMVAR_127d4d9181b49c7235.' where id='.$_MMVAR_a68c41bd0ae0e8ec59[1], 'sync');
$_MMVAR_c9fdf7d0b61766d854=$_MMVAR_0abc6a6990b8c8acb4['cday']+$_MMVAR_3e9f3e4491a4bd3e84;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` SET `cday`='.$_MMVAR_c9fdf7d0b61766d854.$_MMVAR_366e5a7306859da4cc.' where `keys`=\''.$_MMVAR_0abc6a6990b8c8acb4['keys'].'\'','sync');

if(intval($_MMVAR_3e9f3e4491a4bd3e84)>0 && $_MMVAR_a68c41bd0ae0e8ec59[0]<3){
$_MMVAR_1b9a8444ab646a930c.='var c=window.parent.document.getElementById(\'drmb\').innerHTML;window.parent.document.getElementById(\'drmb\').innerHTML=Math.floor((c-'.$_MMVAR_127d4d9181b49c7235.')*100)/100;';
}else{
$_MMVAR_127d4d9181b49c7235=0;
}
$_MMVAR_1b9a8444ab646a930c.='document.getElementById(\'jsday'.$_MMVAR_b760668e2ace0f883d.'\').innerHTML='.($_MMVAR_33c78d9516bbab648a+$_MMVAR_3e9f3e4491a4bd3e84).';';
$_MMVAR_1b9a8444ab646a930c.='document.getElementById(\'js'.$_MMVAR_b760668e2ace0f883d.'\').value=0;';
if($_MMVAR_0abc6a6990b8c8acb4['isused']==2){
$_MMVAR_44bec6307d546924ce='用户'.htmlspecialchars(_MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_0abc6a6990b8c8acb4['cusername'])).'加时'.$_MMVAR_3e9f3e4491a4bd3e84.'天成功';
if($_MMVAR_a68c41bd0ae0e8ec59[0]<3)$_MMVAR_44bec6307d546924ce.='扣除卡币'.$_MMVAR_127d4d9181b49c7235.'！';
}else{
$_MMVAR_44bec6307d546924ce='为注册卡'.$_MMVAR_0abc6a6990b8c8acb4['keys'].'加时'.$_MMVAR_3e9f3e4491a4bd3e84.'天成功';
if($_MMVAR_a68c41bd0ae0e8ec59[0]<3)$_MMVAR_44bec6307d546924ce.='扣除卡币'.$_MMVAR_127d4d9181b49c7235.'！';
}

if($_MMVAR_0abc6a6990b8c8acb4['isused']==2){
$_MMVAR_273aa5d2794e847523 = array(
'addtime'		=>time(),
'userid'		=>$_MMVAR_a68c41bd0ae0e8ec59[1],
'xjlid'			=>$_MMVAR_0abc6a6990b8c8acb4['xjlid'],
'logtype'		=>2,
'username1'		=>$_MMVAR_0abc6a6990b8c8acb4['cusername'],
'u1d1'			=>$_MMVAR_0abc6a6990b8c8acb4['cday'],
'u1d2'			=>$_MMVAR_5d07e63ebd54c9b2f4,
'addday'		=>$_MMVAR_3e9f3e4491a4bd3e84,
'sysdelday'		=>0,
'username2'		=>'0',
'u2d1'		=>0,
'u2d2'		=>0
);
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog',$_MMVAR_273aa5d2794e847523,'nosync');
}	
exit($_MMVAR_1b9a8444ab646a930c.'$.msgbox({width:500,height:120,content:{type:\'alert\', content:\''.$_MMVAR_44bec6307d546924ce.'\'},animation:0,drag:false,autoClose:3});');
exit($_MMVAR_1b9a8444ab646a930c);
?>