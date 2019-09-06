<?php 
	//生成日期:2012-04-04 10点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php

function _MMFUN_337d0a70204682195a($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_7b6896960481a4d007, $_MMVAR_bb6713f19abe5e75c5, $_MMVAR_0b2e3ad4d3a65dc3bd, $_MMVAR_6ecc0d16521a4508ea, $_MMVAR_4a9f8efac528d03123, $_MMVAR_c90455ba5250dd5068, $_MMVAR_71e6303534ceac4f32, $_MMVAR_3646bf05f90f5a2181, $_MMVAR_9b08456e81c293144a)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_bb6713f19abe5e75c5) < 3)
exit('用户名3位字符以上！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_0b2e3ad4d3a65dc3bd) < 5)
exit('密码5位字符以上！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_4a9f8efac528d03123) < 8)
exit('超级密码必须8个字符以上！');
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要充值的软件未找到！');
$_MMVAR_2e09935932ab75e961=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_user where `id`='.$_MMVAR_e9ffef5bdc7675ff63['userid']);
if(empty($_MMVAR_2e09935932ab75e961))
exit('要充值的软件的作者信息未找到！');
$_MMVAR_daccb0c66a972c1322=$_MMVAR_2e09935932ab75e961['key1num'] + 1;
if($_MMVAR_2e09935932ab75e961['vipkeynums'] > 0 && $_MMVAR_daccb0c66a972c1322 > $_MMVAR_2e09935932ab75e961['vipkeynums'])
exit('作者可管理的用户已达上限，暂不允许新用户注册');
if($_MMVAR_e9ffef5bdc7675ff63['ext1'] <> 'user')
exit('该软件为卡模式，不能使用用户模式注册！（软件编号：'.$_MMVAR_c90455ba5250dd5068.'）');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_c4194f008376629764=0;
$_MMVAR_71e6303534ceac4f32=trim($_MMVAR_71e6303534ceac4f32);
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 16 && _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 24){
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)==0){
if(ceil($_MMVAR_e9ffef5bdc7675ff63['mfday'])==0)
exit('该软件注册新用户必须使用充值卡，你未输入充值卡号！'.$_MMVAR_e9ffef5bdc7675ff63['mfday'].ceil($_MMVAR_e9ffef5bdc7675ff63['mfday']));
$_MMVAR_87e4ed813b9c6dfa1b=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_havereg where `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\' ');
if(!empty($_MMVAR_87e4ed813b9c6dfa1b)){
if($_MMVAR_e9ffef5bdc7675ff63['id']==$_MMVAR_87e4ed813b9c6dfa1b['xjlid'])
exit('该帐号在'._MMFUN_59e7c3854a78f9e590($_MMVAR_87e4ed813b9c6dfa1b['addtime'], 1).'被免费注册过一次，如需再注册请输入充值卡号');
}
$_MMVAR_c4194f008376629764=1;
}else{
exit('充值卡填写错误，长度必须16或24位！');
}
}
if(_MMFUN_b975f45914ee3d5106($_MMVAR_3646bf05f90f5a2181) <> 0 && _MMFUN_b975f45914ee3d5106($_MMVAR_3646bf05f90f5a2181) < 3)
exit('推广帐号长度少于3个字符！');
$_MMVAR_0a01de1a2cc36ba930=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `xjlid`='.$_MMVAR_e9ffef5bdc7675ff63['id'].' and `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\' ');
if(!empty($_MMVAR_0a01de1a2cc36ba930)){
if(intval($_MMVAR_0a01de1a2cc36ba930['isdel'])==1)
exit('该帐号已存在，并且处于删除状态，不可重复注册，有问题请联系作者！');
exit('帐号已存在！');
}

if($_MMVAR_c4194f008376629764==1){

$_MMVAR_273aa5d2794e847523=array(
'xjlid'=>$_MMVAR_e9ffef5bdc7675ff63['id'],
'ordernum'=>'0',
'userid'=>$_MMVAR_e9ffef5bdc7675ff63['userid'],
'agentid'=>0,
'cday'=>$_MMVAR_e9ffef5bdc7675ff63['mfday'],
'linknum'=>1,
'addtime'=>time(),
'endtime'=>0,
'bdday'=>0,
'bdtimes'=>0,
'bdcode'=>'1000',
'chkcode'=>'100000',
'lastbdtime'=>0,
'lastonlinetime'=>0,
'normal'=>1,
'isdel'=>0,
'ispay'=>1,
'deltime'=>time(),
'ext1'=>'无卡注册',
'activetime'=>0,
'activetimes'=>0,
'chktimes'=>0,
'keys'=>_MMFUN_90732a0da1412e2b45('M', $_MMVAR_3fc22e00af1642a292).strtoupper(substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"), 0, 10)),
'isused'=>2,
'intro'=>$_MMVAR_bb6713f19abe5e75c5,
'ext2'=>$_MMVAR_4a9f8efac528d03123,
'cusername'=>$_MMVAR_bb6713f19abe5e75c5,
'cpassword'=>$_MMVAR_0b2e3ad4d3a65dc3bd
);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_user` set `key1num`=`key1num`+1 where id='.$_MMVAR_2e09935932ab75e961['id'], 'sync');
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006($_MMVAR_3fc22e00af1642a292, $_MMVAR_273aa5d2794e847523, 'sync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_havereg` (`userid`, `xjlid`, `addtime`, `cusername`) VALUES ('.$_MMVAR_e9ffef5bdc7675ff63['userid'].', '.$_MMVAR_e9ffef5bdc7675ff63['id'].', '.time().', \''.$_MMVAR_bb6713f19abe5e75c5.'\') ', 'nosync');
exit('注册免费帐号成功，帐号可使用时间'.ceil($_MMVAR_e9ffef5bdc7675ff63['mfday'] * 24).'小时！');
}

$_MMVAR_23b534f77bc06508e2=0;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_3646bf05f90f5a2181) >= 3){
$_MMVAR_29e6f464de0211e625=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_3646bf05f90f5a2181.'\' and `cday`<>0');
if(empty($_MMVAR_29e6f464de0211e625))
exit('推广帐号不存在，如果你不清楚推广帐号请留空！');
$_MMVAR_23b534f77bc06508e2=1;
}
$_MMVAR_a5f72524ded13edf27=explode('|', $_MMVAR_71e6303534ceac4f32);
$_MMVAR_98e747f15bf473b354=array_unique ($_MMVAR_a5f72524ded13edf27);
if(count($_MMVAR_a5f72524ded13edf27) != count($_MMVAR_98e747f15bf473b354))
exit('输入的充值卡号有相同的！');
$_MMVAR_e184a42e36062e2b67=array();
$_MMVAR_618ffbeda183ee8861=0;
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'\'');
if(empty($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]))
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'不存在！');
if($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['xjlid'] <> $_MMVAR_e9ffef5bdc7675ff63['id'])
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'不属于该软件！');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['isused']) != 0)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'已经被使用！');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['ispay']) != 1)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'是代理提取的卡，代理还未付款，暂时不支持未付款卡充值！');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['cday'])==0)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'是特殊卡（天数为0）！');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['cday'])==intval($_MMVAR_e9ffef5bdc7675ff63['int3']))
$_MMVAR_618ffbeda183ee8861=$_MMVAR_618ffbeda183ee8861 + 1;
}
$_MMVAR_7290e63fc244ed6b0b=0;

if(intval($_MMVAR_e9ffef5bdc7675ff63['int2']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int3']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int4']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int2'])==count($_MMVAR_a5f72524ded13edf27) && intval($_MMVAR_e9ffef5bdc7675ff63['int2'])==$_MMVAR_618ffbeda183ee8861)
$_MMVAR_7290e63fc244ed6b0b=intval($_MMVAR_e9ffef5bdc7675ff63['int4']);
$_MMVAR_a9a832cc2eb685881b="";
$_MMVAR_e4166e802d490cbfbf=0;
for($_MMVAR_8fdbca33e031eb6432=0;$_MMVAR_8fdbca33e031eb6432 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8fdbca33e031eb6432++){
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e4166e802d490cbfbf + $_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['cday'];
$_MMVAR_a9a832cc2eb685881b .= " ".$_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['cday'];
}
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e4166e802d490cbfbf + $_MMVAR_7290e63fc244ed6b0b;
for($_MMVAR_8fdbca33e031eb6432=0;$_MMVAR_8fdbca33e031eb6432 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8fdbca33e031eb6432++){
if($_MMVAR_8fdbca33e031eb6432==0){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\', `cpassword`=\''.$_MMVAR_0b2e3ad4d3a65dc3bd.'\', `ext2`=\''.$_MMVAR_4a9f8efac528d03123.'\', `isused`=2, cday='.$_MMVAR_e4166e802d490cbfbf.', deltime='.time().',intro=\''.$_MMVAR_bb6713f19abe5e75c5.'\' where `keys`=\''.$_MMVAR_a5f72524ded13edf27[0].'\'', 'sync');
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `isused`=1, deltime='.time().',intro=\''.$_MMVAR_bb6713f19abe5e75c5.'\' where `keys`=\''.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8fdbca33e031eb6432].'\'', 'sync');
}
}
$_MMVAR_9fecb5494f62ff4f6c=array(
'addtime'=>time(),
'userid'=>$_MMVAR_e184a42e36062e2b67[0]['userid'],
'xjlid'=>$_MMVAR_e184a42e36062e2b67[0]['xjlid'],
'logtype'=>0,
'username1'=>$_MMVAR_bb6713f19abe5e75c5,
'u1d1'=>0,
'u1d2'=>$_MMVAR_e4166e802d490cbfbf,
'addday'=>$_MMVAR_e4166e802d490cbfbf,
'sysdelday'=>0,
'username2'=>'0',
'u2d1'=>0,
'u2d2'=>0,
'intro'=>$_MMVAR_71e6303534ceac4f32
);
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');

if($_MMVAR_23b534f77bc06508e2==1){
$_MMVAR_fb299babe9700c932e=$_MMVAR_e9ffef5bdc7675ff63['editjs'] * $_MMVAR_e4166e802d490cbfbf / 24;
$_MMVAR_9fecb5494f62ff4f6c=array(
'addtime'=>time(),
'userid'=>$_MMVAR_29e6f464de0211e625['userid'],
'xjlid'=>$_MMVAR_29e6f464de0211e625['xjlid'],
'logtype'=>3,
'username1'=>$_MMVAR_3646bf05f90f5a2181,
'u1d1'=>$_MMVAR_29e6f464de0211e625['cday'],
'addday'=>$_MMVAR_fb299babe9700c932e,
'sysdelday'=>0,
'username2'=>$_MMVAR_bb6713f19abe5e75c5,
'u2d1'=>0,
'u2d2'=>$_MMVAR_e4166e802d490cbfbf,
'intro'=>$_MMVAR_71e6303534ceac4f32
);
if(intval($_MMVAR_29e6f464de0211e625['activetime'])==0){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET cday='.($_MMVAR_29e6f464de0211e625['cday'] + $_MMVAR_fb299babe9700c932e).' where `keys`=\''.$_MMVAR_29e6f464de0211e625['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_29e6f464de0211e625['cday'] + $_MMVAR_fb299babe9700c932e;
echo '给推广帐户'._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_3646bf05f90f5a2181).'添加了'.round($_MMVAR_fb299babe9700c932e, 2).'天有效期，计时从下次登陆算起！';
}else{
if(intval($_MMVAR_29e6f464de0211e625['activetime']) + $_MMVAR_29e6f464de0211e625['cday'] * 86400 < time()){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `activetime`='.time().', `cday`='.$_MMVAR_fb299babe9700c932e.', `endtime`='.(time() + $_MMVAR_fb299babe9700c932e * 86400).' where `keys`=\''.$_MMVAR_29e6f464de0211e625['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d1']=0.01;
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_fb299babe9700c932e;
echo '给推广帐户'._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_3646bf05f90f5a2181).'添加了'.round($_MMVAR_fb299babe9700c932e, 2).'天有效期(0)！';
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cday`='.($_MMVAR_29e6f464de0211e625['cday'] + $_MMVAR_fb299babe9700c932e).', `endtime`=endtime+'.($_MMVAR_fb299babe9700c932e * 86400).' where `keys`=\''.$_MMVAR_29e6f464de0211e625['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_29e6f464de0211e625['cday'] + $_MMVAR_fb299babe9700c932e;
echo '给推广帐户'._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_3646bf05f90f5a2181).'添加了'.round($_MMVAR_fb299babe9700c932e, 2).'天有效期(1)！';
}
}
echo "\r\n";
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');
}
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_user` set `key1num`=`key1num`+1 where id='.$_MMVAR_2e09935932ab75e961['id'], 'sync');
exit('注册用户成功，帐号可使用时间'.$_MMVAR_e4166e802d490cbfbf.'天！（使用的卡类型：'.$_MMVAR_a9a832cc2eb685881b.'，系统赠送：'.$_MMVAR_7290e63fc244ed6b0b.'天）');
}

function _MMFUN_86251ede32d8f601bc($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_7b6896960481a4d007, $_MMVAR_bb6713f19abe5e75c5, $_MMVAR_0b2e3ad4d3a65dc3bd, $_MMVAR_6ecc0d16521a4508ea, $_MMVAR_4a9f8efac528d03123, $_MMVAR_c90455ba5250dd5068, $_MMVAR_71e6303534ceac4f32, $_MMVAR_3646bf05f90f5a2181, $_MMVAR_9b08456e81c293144a)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_bb6713f19abe5e75c5) < 3)
exit('用户名3位字符以上！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) !=16 && _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 24)
exit('充值卡填写错误！');
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要充值的软件未找到！');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];

$_MMVAR_350816a7d3bdc2711f=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\'');
if(empty($_MMVAR_350816a7d3bdc2711f))
exit('用户不存在，无法充值！');
if(intval($_MMVAR_350816a7d3bdc2711f['isused']) != 2)
exit('该帐号在回收站，不可充值1！');
if(intval($_MMVAR_350816a7d3bdc2711f['isdel'])==1)
exit('该帐号在回收站，不可充值2！');
if(intval($_MMVAR_350816a7d3bdc2711f['normal']) !== 1)
exit('该帐号被冻结了，不可充值！');
if($_MMVAR_350816a7d3bdc2711f['cday'] == 0)
exit('你钱多？这是试用帐号不用充值。');
$_MMVAR_a5f72524ded13edf27=explode('|', $_MMVAR_71e6303534ceac4f32);
$_MMVAR_98e747f15bf473b354=array_unique ($_MMVAR_a5f72524ded13edf27);
if(count($_MMVAR_a5f72524ded13edf27) != count($_MMVAR_98e747f15bf473b354))
exit('输入的充值卡号有相同的！');
$_MMVAR_e184a42e36062e2b67=array();
$_MMVAR_618ffbeda183ee8861=0;
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'\'');
if(empty($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]))
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'不存在！');
if($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['xjlid'] <> $_MMVAR_e9ffef5bdc7675ff63['id'])
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'不属于该软件！');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['isused']) != 0)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'已经被使用！');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['ispay']) != 1)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'是代理提取的卡，代理还未付款，不支持未付款卡充值！');
if($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['cday']==0)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'是特殊卡（天数为0）！');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['cday'])==intval($_MMVAR_e9ffef5bdc7675ff63['int3']))
$_MMVAR_618ffbeda183ee8861=$_MMVAR_618ffbeda183ee8861 + 1;
}
$_MMVAR_7290e63fc244ed6b0b=0;

if(intval($_MMVAR_e9ffef5bdc7675ff63['int2']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int3']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int4']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int2'])==count($_MMVAR_a5f72524ded13edf27) && intval($_MMVAR_e9ffef5bdc7675ff63['int2'])==$_MMVAR_618ffbeda183ee8861)
$_MMVAR_7290e63fc244ed6b0b=intval($_MMVAR_e9ffef5bdc7675ff63['int4']);
$_MMVAR_a9a832cc2eb685881b="";
$_MMVAR_e4166e802d490cbfbf=0;
for($_MMVAR_8fdbca33e031eb6432=0;$_MMVAR_8fdbca33e031eb6432 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8fdbca33e031eb6432++){
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e4166e802d490cbfbf + $_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['cday'];
$_MMVAR_a9a832cc2eb685881b .= " ".$_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['cday'];
}
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e4166e802d490cbfbf + $_MMVAR_7290e63fc244ed6b0b;
for($_MMVAR_8fdbca33e031eb6432=0;$_MMVAR_8fdbca33e031eb6432 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8fdbca33e031eb6432++){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `isused`=1, deltime='.time().',intro=\''.$_MMVAR_bb6713f19abe5e75c5.'\' where `keys`=\''.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8fdbca33e031eb6432].'\'', 'sync');
}
$_MMVAR_9fecb5494f62ff4f6c=array(
'addtime'=>time(),
'userid'=>$_MMVAR_350816a7d3bdc2711f['userid'],
'xjlid'=>$_MMVAR_350816a7d3bdc2711f['xjlid'],
'logtype'=>0,
'username1'=>$_MMVAR_bb6713f19abe5e75c5,
'u1d1'=>$_MMVAR_350816a7d3bdc2711f['cday'],
'u1d2'=>$_MMVAR_e4166e802d490cbfbf,
'addday'=>$_MMVAR_e4166e802d490cbfbf,
'sysdelday'=>0,
'username2'=>'0',
'u2d1'=>0,
'u2d2'=>0,
'intro'=>$_MMVAR_71e6303534ceac4f32
);

$_MMVAR_f8e22f88aa3ec7edea=$_MMVAR_350816a7d3bdc2711f['ext1'];
$_MMVAR_a2b61b117245cadb5a=explode('§', $_MMVAR_f8e22f88aa3ec7edea.'');
$_MMVAR_70b765a036619af266=count($_MMVAR_a2b61b117245cadb5a);
if($_MMVAR_70b765a036619af266 > 1){
$_MMVAR_f8e22f88aa3ec7edea=$_MMVAR_a2b61b117245cadb5a[0].'§'.($_MMVAR_a2b61b117245cadb5a[$_MMVAR_70b765a036619af266-1] + 1);
}else{
$_MMVAR_f8e22f88aa3ec7edea=$_MMVAR_f8e22f88aa3ec7edea.'§1';
}
if(intval($_MMVAR_350816a7d3bdc2711f['activetime'])==0){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `ext1`=\''.$_MMVAR_f8e22f88aa3ec7edea.'\', cday='.($_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf).' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf;
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');
exit('充值完成，给帐户'._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_bb6713f19abe5e75c5).'添加了'.$_MMVAR_e4166e802d490cbfbf.'天有效期，计时从下次登陆算起！');
}else{
if(intval($_MMVAR_350816a7d3bdc2711f['activetime']) + $_MMVAR_350816a7d3bdc2711f['cday'] * 86400 < time()){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `ext1`=\''.$_MMVAR_f8e22f88aa3ec7edea.'\', `activetime`='.time().', `cday`='.$_MMVAR_e4166e802d490cbfbf.', `endtime`='.(time() + $_MMVAR_e4166e802d490cbfbf * 86400).' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d1']=0.01;
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_e4166e802d490cbfbf;
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');
exit('充值完成，给帐户'._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_bb6713f19abe5e75c5).'添加了'.$_MMVAR_e4166e802d490cbfbf.'天有效期，计时从现在算起（因为原帐户已过期）！');
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET	`ext1`=\''.$_MMVAR_f8e22f88aa3ec7edea.'\', `cday`='.($_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf).', `endtime`=endtime+'.($_MMVAR_e4166e802d490cbfbf * 86400).' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf;
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');
exit('充值完成，给帐户 '._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_bb6713f19abe5e75c5).' 添加了'.$_MMVAR_e4166e802d490cbfbf.'天有效期，到期时间'._MMFUN_59e7c3854a78f9e590($_MMVAR_350816a7d3bdc2711f['endtime'] + $_MMVAR_e4166e802d490cbfbf * 86400, 1).'！');
}
}
}

function _MMFUN_b0d2be65cbad2ce72c($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_7b6896960481a4d007, $_MMVAR_bb6713f19abe5e75c5, $_MMVAR_0b2e3ad4d3a65dc3bd, $_MMVAR_6ecc0d16521a4508ea, $_MMVAR_4a9f8efac528d03123, $_MMVAR_c90455ba5250dd5068, $_MMVAR_71e6303534ceac4f32, $_MMVAR_3646bf05f90f5a2181, $_MMVAR_9b08456e81c293144a)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_bb6713f19abe5e75c5) < 3)
exit('用户名长度少于3个字符！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_4a9f8efac528d03123) < 5)
exit('超级密码长度少于5个字符！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_6ecc0d16521a4508ea) < 5)
exit('新密码长度少于5个字符！');
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('软件信息不存在！');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_477afeb555696efb83=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\' ');
if(empty($_MMVAR_477afeb555696efb83))
exit('帐号不存在1！');
if($_MMVAR_477afeb555696efb83['isused'] != 2)
exit('帐号不存在2！');
if($_MMVAR_477afeb555696efb83['ext2'] != $_MMVAR_4a9f8efac528d03123)
exit('超级密码错误！');
if(intval($_MMVAR_477afeb555696efb83['normal']) !== 1)
exit('帐号被冻结了，不可修改密码！');
if(intval($_MMVAR_477afeb555696efb83['isdel'])==1)
exit('帐号在回收站，不可修改密码！');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cpassword`=\''.$_MMVAR_6ecc0d16521a4508ea.'\' where `keys`=\''.$_MMVAR_477afeb555696efb83['keys'].'\'', 'sync');
exit('修改密码成功！');
}

function _MMFUN_962719b659dece14e2($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae, $_MMVAR_a78f3425a9457376a7;

// exit("稍后开放");
list($_MMVAR_7b6896960481a4d007, $_MMVAR_bb6713f19abe5e75c5, $_MMVAR_0b2e3ad4d3a65dc3bd, $_MMVAR_6ecc0d16521a4508ea, $_MMVAR_4a9f8efac528d03123, $_MMVAR_c90455ba5250dd5068, $_MMVAR_71e6303534ceac4f32, $_MMVAR_3646bf05f90f5a2181, $_MMVAR_9b08456e81c293144a)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_bb6713f19abe5e75c5) < 3)
exit('用户名长度少于3个字符！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_4a9f8efac528d03123) < 8)
exit('超级密码长度少于8个字符！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_0b2e3ad4d3a65dc3bd) < 3)
exit('要转到的帐号名长度少于3个字符！');
if($_MMVAR_bb6713f19abe5e75c5==$_MMVAR_0b2e3ad4d3a65dc3bd)
exit('转出和转入的帐号名相同！');
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('软件信息不存在！');
if($_MMVAR_e9ffef5bdc7675ff63['editks']==99)
exit('禁止转帐！');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_477afeb555696efb83=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\' ');
if(empty($_MMVAR_477afeb555696efb83))
exit('老用户不存在1！');
if($_MMVAR_477afeb555696efb83['isused'] != 2)
exit('老用户不存在2！');
if($_MMVAR_477afeb555696efb83['ext2'] != $_MMVAR_4a9f8efac528d03123)
exit('超级密码错误！');
if(intval($_MMVAR_477afeb555696efb83['normal']) !== 1)
exit('老帐号被冻结了，不可转出时间！');
if(intval($_MMVAR_477afeb555696efb83['isdel'])==1)
exit('老帐号在回收站，不可转出时间！');
$_MMVAR_350816a7d3bdc2711f=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_0b2e3ad4d3a65dc3bd.'\' ');
if(empty($_MMVAR_350816a7d3bdc2711f))
exit('要转入时间的帐号不存在1！');
if($_MMVAR_350816a7d3bdc2711f['isused'] != 2)
exit('要转入时间的帐号不存在2！');
if(intval($_MMVAR_350816a7d3bdc2711f['normal']) != 1)
exit('要转入时间的帐号被冻结了！');
if(intval($_MMVAR_350816a7d3bdc2711f['isdel'])==1)
exit('要转入时间的帐号在回收站！');

$_MMVAR_579149166037c22813=$_MMVAR_e9ffef5bdc7675ff63['mfday'];
$_MMVAR_579149166037c22813=1;
if($_MMVAR_477afeb555696efb83['activetime']==0){
$_MMVAR_e1c79a0e11dcb1774b=$_MMVAR_477afeb555696efb83['cday'] * 24;
if(round($_MMVAR_477afeb555696efb83['cday'], 2) < round($_MMVAR_579149166037c22813, 2))
exit('操作失败：系统限制，要转出帐号时间，本帐号最少要剩余'.ceil($_MMVAR_579149166037c22813 * 24).'小时(当前剩余('.$_MMVAR_e1c79a0e11dcb1774b.'小时)');
}else{
$_MMVAR_e1c79a0e11dcb1774b=$_MMVAR_477afeb555696efb83['cday'] * 24 - (time() - $_MMVAR_477afeb555696efb83['activetime']) / 3600;
if($_MMVAR_477afeb555696efb83['activetime'] + ($_MMVAR_477afeb555696efb83['cday'] - $_MMVAR_579149166037c22813) * 86400 < time())
exit('操作失败：系统限制，要转出帐号时间，本帐号最少要剩余'.ceil($_MMVAR_579149166037c22813 * 24).'小时(当前剩余('.$_MMVAR_e1c79a0e11dcb1774b.'小时)');
}
if($_MMVAR_477afeb555696efb83['activetime']==0){
if($_MMVAR_477afeb555696efb83['cday'] * 24 < $_MMVAR_e9ffef5bdc7675ff63['editks'])
exit('操作失败：帐号剩余时间不够，本次转出帐号时间操作最少需扣除'.$_MMVAR_e9ffef5bdc7675ff63['editks'].'小时(当前剩余('.$_MMVAR_e1c79a0e11dcb1774b.'小时)');
$_MMVAR_e029ec35b9a7d66b2a=round($_MMVAR_477afeb555696efb83['cday'] - $_MMVAR_e9ffef5bdc7675ff63['editks'] / 24, 2);
// echo '['.$_MMVAR_477afeb555696efb83['cday'].']['.$_MMVAR_e9ffef5bdc7675ff63['editks'].']';
_MMFUN_8b0e5db1871ad9be91($_MMVAR_477afeb555696efb83, $_MMVAR_350816a7d3bdc2711f);
_MMFUN_3cd86d42204c103a45($_MMVAR_477afeb555696efb83, $_MMVAR_350816a7d3bdc2711f, $_MMVAR_e029ec35b9a7d66b2a);
}else{
if($_MMVAR_477afeb555696efb83['activetime'] + $_MMVAR_477afeb555696efb83['cday'] * 86400 - $_MMVAR_e9ffef5bdc7675ff63['editks'] * 3600 < time())
exit('操作失败：帐号剩余时间不够，本次转出帐号时间最少需扣除！'.$_MMVAR_e9ffef5bdc7675ff63['editks'].'小时(当前剩余('.$_MMVAR_e1c79a0e11dcb1774b.'小时)');
$_MMVAR_e029ec35b9a7d66b2a=round(($_MMVAR_e1c79a0e11dcb1774b - $_MMVAR_e9ffef5bdc7675ff63['editks']) / 24, 2);
// echo '['.$_MMVAR_e1c79a0e11dcb1774b.']['.$_MMVAR_e029ec35b9a7d66b2a.']';
_MMFUN_8b0e5db1871ad9be91($_MMVAR_477afeb555696efb83, $_MMVAR_350816a7d3bdc2711f);
_MMFUN_3cd86d42204c103a45($_MMVAR_477afeb555696efb83, $_MMVAR_350816a7d3bdc2711f, $_MMVAR_e029ec35b9a7d66b2a);
}
$_MMVAR_9fecb5494f62ff4f6c=array(
'addtime'=>time(),
'userid'=>$_MMVAR_477afeb555696efb83['userid'],
'xjlid'=>$_MMVAR_477afeb555696efb83['xjlid'],
'logtype'=>1,
'username1'=>$_MMVAR_bb6713f19abe5e75c5,
'u1d1'=>$_MMVAR_477afeb555696efb83['cday'],
'u1d2'=>0.01,
'addday'=>0 - $_MMVAR_e029ec35b9a7d66b2a,
'sysdelday'=>round($_MMVAR_e9ffef5bdc7675ff63['editks'] / 24, 2),
'username2'=>$_MMVAR_0b2e3ad4d3a65dc3bd,
'u2d1'=>$_MMVAR_350816a7d3bdc2711f['cday'],
'u2d2'=>$_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e029ec35b9a7d66b2a
);
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');
exit('从用户 '._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_bb6713f19abe5e75c5).' 转 '.$_MMVAR_e029ec35b9a7d66b2a.' 天使用时间到用户 ['._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_0b2e3ad4d3a65dc3bd)."] 成功\r\n提示：如果帐号 ["._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_0b2e3ad4d3a65dc3bd).'] 还未被使用过，现在将开始计时！');
}
function _MMFUN_3cd86d42204c103a45($_MMVAR_477afeb555696efb83, $_MMVAR_350816a7d3bdc2711f, $_MMVAR_e4166e802d490cbfbf){
global $_MMVAR_9f95914834184aeeae;

$_MMVAR_73a33c02dab4f21822=1;
if(intval($_MMVAR_350816a7d3bdc2711f['activetime'])==0){
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf;
if(intval($_MMVAR_350816a7d3bdc2711f['activetime'])==0){
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_keys_'.$_MMVAR_477afeb555696efb83['userid'].'_'.$_MMVAR_477afeb555696efb83['xjlid'].'` SET `cday`='.$_MMVAR_e4166e802d490cbfbf.' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
}else{
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_keys_'.$_MMVAR_477afeb555696efb83['userid'].'_'.$_MMVAR_477afeb555696efb83['xjlid'].'` SET `cday`='.$_MMVAR_e4166e802d490cbfbf.',`activetime`='.time().', `endtime`='.(time() + $_MMVAR_e4166e802d490cbfbf * 86400).' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
}
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_73a33c02dab4f21822=0;
}else{
if(intval($_MMVAR_350816a7d3bdc2711f['activetime']) + $_MMVAR_350816a7d3bdc2711f['cday'] * 86400 < time()){
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_keys_'.$_MMVAR_477afeb555696efb83['userid'].'_'.$_MMVAR_477afeb555696efb83['xjlid'].'` SET `cday`='.$_MMVAR_e4166e802d490cbfbf.', `activetime`='.time().', `endtime`='.(time() + $_MMVAR_e4166e802d490cbfbf * 86400).' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_73a33c02dab4f21822=0;
}else{
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf;
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_keys_'.$_MMVAR_477afeb555696efb83['userid'].'_'.$_MMVAR_477afeb555696efb83['xjlid'].'` SET `cday`='.$_MMVAR_e4166e802d490cbfbf.', `endtime`=endtime+'.($_MMVAR_e4166e802d490cbfbf * 86400).' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
if($_MMVAR_510ba85d0c08c74283==false)
$_MMVAR_73a33c02dab4f21822=0;
}
}
if($_MMVAR_73a33c02dab4f21822==0){
$_MMVAR_9fecb5494f62ff4f6c=array(
'addtime'=>time(),
'userid'=>$_MMVAR_477afeb555696efb83['userid'],
'xjlid'=>$_MMVAR_477afeb555696efb83['xjlid'],
'logtype'=>4,
'username1'=>$_MMVAR_477afeb555696efb83['cusername'],
'u1d1'=>$_MMVAR_477afeb555696efb83['cday'],
'u1d2'=>0.01,
'addday'=>0 - $_MMVAR_477afeb555696efb83['cday'],
'sysdelday'=>0,
'username2'=>$_MMVAR_350816a7d3bdc2711f['cusername'],
'u2d1'=>0,
'u2d2'=>0
);
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');
exit('已扣去原帐号时间，但由于某种原因导致给新帐号加时失败，本次操作已记录！');
}
}
function _MMFUN_8b0e5db1871ad9be91($_MMVAR_477afeb555696efb83, $_MMVAR_350816a7d3bdc2711f){
global $_MMVAR_9f95914834184aeeae;

if(intval($_MMVAR_477afeb555696efb83['activetime'])==0){
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_keys_'.$_MMVAR_477afeb555696efb83['userid'].'_'.$_MMVAR_477afeb555696efb83['xjlid'].'` SET `cday`=0.01 where `keys`=\''.$_MMVAR_477afeb555696efb83['keys'].'\'', 'sync');
if($_MMVAR_510ba85d0c08c74283==false)
exit('扣时失败，请稍后操作(1)!');
}else{
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_keys_'.$_MMVAR_477afeb555696efb83['userid'].'_'.$_MMVAR_477afeb555696efb83['xjlid'].'` SET `cday`=0.01, `endtime`=`activetime`+864 where `keys`=\''.$_MMVAR_477afeb555696efb83['keys'].'\'', 'sync');
if($_MMVAR_510ba85d0c08c74283==false)
exit('扣时失败，请稍后操作(2)!');
}

$_MMVAR_d1f628749792b5e319=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_keys_'.$_MMVAR_477afeb555696efb83['userid'].'_'.$_MMVAR_477afeb555696efb83['xjlid'].'` where `id`='.$_MMVAR_477afeb555696efb83['id']);
if($_MMVAR_d1f628749792b5e319['cday'] != 0.01)
exit('扣时失败，请稍后操作(复查)!');
}

function _MMFUN_78601124d5e6917c3d($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_7b6896960481a4d007, $_MMVAR_bb6713f19abe5e75c5, $_MMVAR_0b2e3ad4d3a65dc3bd, $_MMVAR_6ecc0d16521a4508ea, $_MMVAR_4a9f8efac528d03123, $_MMVAR_c90455ba5250dd5068, $_MMVAR_71e6303534ceac4f32, $_MMVAR_3646bf05f90f5a2181, $_MMVAR_9b08456e81c293144a)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) < 3)
exit('卡号或用户名错误！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_c90455ba5250dd5068) <> 7)
exit('软件编号错误！');
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要查询的软件未找到！');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_8e47823876210f2e4b=time();
$_MMVAR_33a8b9db2156aec1e6=intval(date('d'));
$_MMVAR_85865ad30acb27f870=1;
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
$_MMVAR_85865ad30acb27f870=1;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 16 && _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 24)
exit('卡号错误！');
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('要查询的卡未找到！');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的卡被删除！');
}else{
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)==16 || _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) == 24){
$_MMVAR_85865ad30acb27f870=1;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5)){
$_MMVAR_85865ad30acb27f870=0;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('要查询的卡或用户未找到！');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的卡或用户被删除！');
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的卡被删除！');
}
}else{
$_MMVAR_85865ad30acb27f870=0;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('要查询的用户未找到！');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的用户被删除！');
}
}
if($_MMVAR_e9ffef5bdc7675ff63['ext1'] <> 'user'){

if($_MMVAR_be0ff7fbb4af7d07f5['cday']==0){
if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1){
exit('这是张试用卡，已被冻结！');
}else{
exit('这是张试用卡，每天每台机可使用'.$_MMVAR_e9ffef5bdc7675ff63['testtimes'].'次，每次可使用'.($_MMVAR_e9ffef5bdc7675ff63['testtime'] * (15 + $_MMVAR_e9ffef5bdc7675ff63['addchktime'] / 60)).'分钟！');
}
}

if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1)
exit('这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天卡，已被冻结！');
echo '这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天卡，允许同时连接数：'.$_MMVAR_be0ff7fbb4af7d07f5['linknum']."。\r\n";
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']==0){
echo "这是卡还未使用过。";
}else{

echo '激活日期：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['activetime'])."\r\n";
echo '有效期至：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['activetime'] + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400);
}
exit();
}else{

if($_MMVAR_be0ff7fbb4af7d07f5['cday']==0){
if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1){
if($_MMVAR_85865ad30acb27f870==1){
exit('这是张系统试用帐号基卡，已被冻结！');
}else{
exit('这是张系统试用帐号，已被冻结！');
}
}else{
if($_MMVAR_85865ad30acb27f870==1){
exit('这是张系统试用帐号基卡！');
}else{
exit('这是张系统试用帐号！');
}
}
}
$_MMVAR_e8c4e409dad981c681='充值卡';
if(intval($_MMVAR_be0ff7fbb4af7d07f5['isused'])==2)$_MMVAR_e8c4e409dad981c681='基卡[基卡就是用户注册时使用的第一张卡]';

if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1){
if($_MMVAR_85865ad30acb27f870==1){
exit('这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天的'.$_MMVAR_e8c4e409dad981c681.'，已被冻结！');
}else{
exit('这是有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天的用户，已被冻结！');
}
}
if($_MMVAR_85865ad30acb27f870==1){
echo '这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天的'.$_MMVAR_e8c4e409dad981c681."。\r\n";
}else{
echo '这是有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday']."天的用户。\r\n";
}
if(intval($_MMVAR_be0ff7fbb4af7d07f5['isused'])==1){
exit('该充值卡已经充值过，充值日期：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['deltime']));
}elseif(intval($_MMVAR_be0ff7fbb4af7d07f5['isused'])==0){
exit('该充值卡还未被使用！');
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']==0){
exit('还未使用过。');
}else{
echo '激活日期：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['activetime'])."\r\n";
exit('到期日期：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['activetime'] + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400));
}
}
}
}

function _MMFUN_5ac4e8410da781c0c4($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_7b6896960481a4d007, $_MMVAR_bb6713f19abe5e75c5, $_MMVAR_0b2e3ad4d3a65dc3bd, $_MMVAR_6ecc0d16521a4508ea, $_MMVAR_4a9f8efac528d03123, $_MMVAR_c90455ba5250dd5068, $_MMVAR_71e6303534ceac4f32, $_MMVAR_3646bf05f90f5a2181, $_MMVAR_9b08456e81c293144a)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_bb6713f19abe5e75c5) < 3)
exit('用户名3位字符以上！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_0b2e3ad4d3a65dc3bd) < 5)
exit('密码5位字符以上！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_4a9f8efac528d03123) < 8)
exit('超级密码必须8个字符以上！');
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要充值的软件未找到！');
$_MMVAR_2e09935932ab75e961=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_user where `id`='.$_MMVAR_e9ffef5bdc7675ff63['userid']);
if(empty($_MMVAR_2e09935932ab75e961))
exit('要充值的软件的作者信息未找到！');
$_MMVAR_daccb0c66a972c1322=$_MMVAR_2e09935932ab75e961['key1num'] + 1;
if($_MMVAR_2e09935932ab75e961['vipkeynums'] > 0 && $_MMVAR_daccb0c66a972c1322 > $_MMVAR_2e09935932ab75e961['vipkeynums'])
exit('作者可管理的用户已达上限，暂不允许新用户注册');
if($_MMVAR_e9ffef5bdc7675ff63['ext1'] <> 'user')
exit('该软件为卡模式，不能使用用户模式注册！（软件编号：'.$_MMVAR_c90455ba5250dd5068.'）');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_c4194f008376629764=0;
$_MMVAR_71e6303534ceac4f32=trim($_MMVAR_71e6303534ceac4f32);
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 16 && _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 24)
exit('充值卡填写错误，备服注册只能用一张卡！');
$_MMVAR_0a01de1a2cc36ba930=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `xjlid`='.$_MMVAR_e9ffef5bdc7675ff63['id'].' and `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\' ');
if(!empty($_MMVAR_0a01de1a2cc36ba930)){
if(intval($_MMVAR_0a01de1a2cc36ba930['isdel'])==1)
exit('该帐号已存在，并且处于删除状态，不可重复注册，有问题请联系作者！');
exit('帐号已存在！');
}
$_MMVAR_e184a42e36062e2b67=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\' ');
if(empty($_MMVAR_e184a42e36062e2b67))
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不存在！');
if($_MMVAR_e184a42e36062e2b67['xjlid'] <> $_MMVAR_e9ffef5bdc7675ff63['id'])
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不属于该软件！');
if(intval($_MMVAR_e184a42e36062e2b67['isused']) != 0)
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'已经被使用！');
if(intval($_MMVAR_e184a42e36062e2b67['int2']) != 1)
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不是临时充值卡，只有临时充值卡才可以在备服注册时使用！');
if(strlen($_MMVAR_3646bf05f90f5a2181) > 2)
echo '备服是临时注册不支持推广赠送优惠，';
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\', `cpassword`=\''.$_MMVAR_0b2e3ad4d3a65dc3bd.'\', `ext2`=\''.$_MMVAR_4a9f8efac528d03123.'\', `isused`=2, deltime='.time().',intro=\''.$_MMVAR_bb6713f19abe5e75c5.'\' where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'', 'notsync');
exit("注册临时用户成功，帐号可以开始使用！\r\n提醒：主服恢复正常后该用户将会被系统清理掉，给你带来的不便敬请谅解！。");
}

function _MMFUN_710ca2416a88d30289($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_7b6896960481a4d007, $_MMVAR_bb6713f19abe5e75c5, $_MMVAR_0b2e3ad4d3a65dc3bd, $_MMVAR_6ecc0d16521a4508ea, $_MMVAR_4a9f8efac528d03123, $_MMVAR_c90455ba5250dd5068, $_MMVAR_71e6303534ceac4f32, $_MMVAR_3646bf05f90f5a2181, $_MMVAR_9b08456e81c293144a)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_bb6713f19abe5e75c5) < 3)
exit('用户名3位字符以上！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 16 && _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 24)
exit('充值卡填写错误，备服充值一次只能用一张充值卡并且必须是以L开头的临时卡！');
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要充值的软件未找到！');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];

$_MMVAR_350816a7d3bdc2711f=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\'');
if(empty($_MMVAR_350816a7d3bdc2711f))
exit('用户不存在，无法充值！');
if(intval($_MMVAR_350816a7d3bdc2711f['isused']) != 2)
exit('该帐号在回收站，不可充值1！');
if(intval($_MMVAR_350816a7d3bdc2711f['isdel'])==1)
exit('该帐号在回收站，不可充值2！');
if(intval($_MMVAR_350816a7d3bdc2711f['normal']) !== 1)
exit('该帐号被冻结了，不可充值！');
$_MMVAR_e184a42e36062e2b67=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_e184a42e36062e2b67))
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不存在！');
if($_MMVAR_e184a42e36062e2b67['xjlid'] <> $_MMVAR_e9ffef5bdc7675ff63['id'])
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不属于该软件！');
if(intval($_MMVAR_e184a42e36062e2b67['isused']) != 0)
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'已经被使用！');
if(intval($_MMVAR_e184a42e36062e2b67['int2']) != 1)
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不是临时充值卡，只有以L开头的临时充值卡才可以在备服充值！');
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e184a42e36062e2b67['cday'];

if(intval($_MMVAR_350816a7d3bdc2711f['activetime'])==0){
exit('禁止对未使用过的帐号进行充值！');
}else{
if(intval($_MMVAR_350816a7d3bdc2711f['activetime']) + $_MMVAR_350816a7d3bdc2711f['cday'] * 86400 < time()){
if($_MMVAR_350816a7d3bdc2711f['int2'] != 1)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_temppay` (`tablename`, `basekey`) VALUES(\''.$_MMVAR_3fc22e00af1642a292.'\',\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\')', 'notsync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `ext1`=\''.$_MMVAR_f8e22f88aa3ec7edea.'\', `activetime`='.time().', `cday`='.$_MMVAR_e4166e802d490cbfbf.', `endtime`='.(time() + $_MMVAR_e4166e802d490cbfbf * 86400).' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'notsync');
exit('充值完成，给帐户'._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_bb6713f19abe5e75c5).'添加了'.$_MMVAR_e4166e802d490cbfbf."天有效期，计时从现在算起！\r\n提醒：主服恢复正常后本次充值操作会被注销。");
}else{
exit('禁止对未过期的帐号进行充值！');
}
}
}

function _MMFUN_fe7fdc9b4a82de1a28($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_7b6896960481a4d007, $_MMVAR_bb6713f19abe5e75c5, $_MMVAR_0b2e3ad4d3a65dc3bd, $_MMVAR_6ecc0d16521a4508ea, $_MMVAR_4a9f8efac528d03123, $_MMVAR_c90455ba5250dd5068, $_MMVAR_71e6303534ceac4f32, $_MMVAR_3646bf05f90f5a2181, $_MMVAR_9b08456e81c293144a)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) < 3)
exit('卡号或用户名错误！');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_c90455ba5250dd5068) <> 7)
exit('软件编号错误！');
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要查询的软件未找到！');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_8e47823876210f2e4b=time();
$_MMVAR_33a8b9db2156aec1e6=intval(date('d'));
$_MMVAR_85865ad30acb27f870=1;
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
$_MMVAR_85865ad30acb27f870=1;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 16 && _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 24)
exit('卡号错误！');
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('要查询的卡未找到！');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的卡被删除！');
}else{
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)==16 || _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) == 24){
$_MMVAR_85865ad30acb27f870=1;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5)){
$_MMVAR_85865ad30acb27f870=0;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('要查询的卡或用户未找到！');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的卡或用户被删除！');
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的卡被删除！');
}
}else{
$_MMVAR_85865ad30acb27f870=0;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('要查询的用户未找到！');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的用户被删除！');
}
}
if($_MMVAR_e9ffef5bdc7675ff63['ext1'] <> 'user'){

if($_MMVAR_be0ff7fbb4af7d07f5['cday']==0){
if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1){
exit('这是张试用卡，已被冻结！');
}else{
exit('这是张试用卡，每天每台机可使用'.$_MMVAR_e9ffef5bdc7675ff63['testtimes'].'次，每次可使用'.($_MMVAR_e9ffef5bdc7675ff63['testtime'] * (15 + $_MMVAR_e9ffef5bdc7675ff63['addchktime'] / 60)).'分钟！');
}
}

if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1)
exit('这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天卡，已被冻结！');
echo '这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天卡，允许同时连接数：'.$_MMVAR_be0ff7fbb4af7d07f5['linknum']."。\r\n";
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']==0){
echo "这是卡还未使用过。";
}else{

echo '激活日期：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['activetime'])."\r\n";
echo '有效期至：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['activetime'] + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400);
}
exit();
}else{

if($_MMVAR_be0ff7fbb4af7d07f5['cday']==0){
if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1){
if($_MMVAR_85865ad30acb27f870==1){
exit('这是张系统试用帐号基卡，已被冻结！');
}else{
exit('这是张系统试用帐号，已被冻结！');
}
}else{
if($_MMVAR_85865ad30acb27f870==1){
exit('这是张系统试用帐号基卡！');
}else{
exit('这是张系统试用帐号！');
}
}
}
$_MMVAR_e8c4e409dad981c681='充值卡';
if(intval($_MMVAR_be0ff7fbb4af7d07f5['isused'])==2)$_MMVAR_e8c4e409dad981c681='基卡[基卡就是用户注册时使用的第一张卡]';

if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1){
if($_MMVAR_85865ad30acb27f870==1){
exit('这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天的'.$_MMVAR_e8c4e409dad981c681.'，已被冻结！');
}else{
exit('这是有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天的用户，已被冻结！');
}
}
if($_MMVAR_85865ad30acb27f870==1){
echo '这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天的'.$_MMVAR_e8c4e409dad981c681."。\r\n";
}else{
echo '这是有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday']."天的用户。\r\n";
}
if(intval($_MMVAR_be0ff7fbb4af7d07f5['isused'])==1){
exit('该充值卡已经充值过，充值日期：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['deltime']));
}elseif(intval($_MMVAR_be0ff7fbb4af7d07f5['isused'])==0){
exit('该充值卡还未被使用！');
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['activetime']==0){
exit('还未使用过。');
}else{
echo '激活日期：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['activetime'])."\r\n";
exit('到期日期：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['activetime'] + $_MMVAR_be0ff7fbb4af7d07f5['cday'] * 86400));
}
}
}
}
?>