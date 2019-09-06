<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
// 解绑硬件码   crypt,unbind，机器码，软件编号，用户名，用户密码
function _MMFUN_c4b272df3edf323d93($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_0454bf37b62d08d089,$_MMVAR_7b6896960481a4d007,$_MMVAR_a5afa007e70518d858,$_MMVAR_c90455ba5250dd5068,$_MMVAR_05ae76f9a28f3b3904, $_MMVAR_2d2ab0b1464ddcb9cb)=$_MMVAR_a9ecec9b36cd18d921;
$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);
$_MMVAR_05ae76f9a28f3b3904=_MMFUN_c3428c7e6251d22b7d($_MMVAR_05ae76f9a28f3b3904);
$_MMVAR_2d2ab0b1464ddcb9cb=_MMFUN_4bb069f11df5d99e54($_MMVAR_2d2ab0b1464ddcb9cb);
$_MMVAR_a5afa007e70518d858=_MMFUN_4bb069f11df5d99e54($_MMVAR_a5afa007e70518d858);
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('软件未找到。');	

$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];

if(intval($_MMVAR_e9ffef5bdc7675ff63['autojbtime'])<90)
exit('自助解绑功能未生效。'.$_MMVAR_e9ffef5bdc7675ff63['autojbtime']);	


if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_05ae76f9a28f3b3904.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('解绑失败：注册卡错误。'); 
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('解绑失败：注册卡错误已被删除。');			
}else{
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_05ae76f9a28f3b3904.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('解绑失败：用户名错误。');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('解绑失败：用户已被删除。');
if($_MMVAR_be0ff7fbb4af7d07f5['cpassword'] != $_MMVAR_2d2ab0b1464ddcb9cb)
exit('解绑失败：用户密码错误。');
}	

if($_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1000' || $_MMVAR_be0ff7fbb4af7d07f5['bdcode']=='1001')
exit('未绑定状态，无需解绑。');

if($_MMVAR_e9ffef5bdc7675ff63['autojbtime']=='91' && $_MMVAR_be0ff7fbb4af7d07f5['bdcode']!=$_MMVAR_a5afa007e70518d858)
exit('解绑失败：只可以在绑定的电脑上解绑。');

if($_MMVAR_be0ff7fbb4af7d07f5['d13int5']=='1')
exit('解绑失败：用户在线状态（登录标识）禁止解绑。如若上次登陆未正常退出，请在上次登陆的电脑上重新运行一下软件即可（仅运行软件，不用登陆）。');

$_MMVAR_3bf534660d00be59f7='';
$_MMVAR_33a8b9db2156aec1e6=intval(date('d'));
if($_MMVAR_33a8b9db2156aec1e6==intval($_MMVAR_be0ff7fbb4af7d07f5['bdday']) && $_MMVAR_e9ffef5bdc7675ff63['jbtimes'] <= $_MMVAR_be0ff7fbb4af7d07f5['bdtimes'])
exit('解绑失败：解绑次数限制，当日不可以再解绑。');

if($_MMVAR_be0ff7fbb4af7d07f5['cday']-$_MMVAR_e9ffef5bdc7675ff63['clientunbindmintime']<1)
exit('解绑失败：帐号剩余天数不足不可解绑。');

if($_MMVAR_33a8b9db2156aec1e6==intval($_MMVAR_be0ff7fbb4af7d07f5['bdday'])){
$_MMVAR_3a2e6f3d72f1e544a8=',`bdtimes`='.($_MMVAR_be0ff7fbb4af7d07f5['bdtimes']+1);
}else{
$_MMVAR_3a2e6f3d72f1e544a8=',`bdday`='.$_MMVAR_33a8b9db2156aec1e6.',`bdtimes`=1';  
}
$_MMVAR_495c1548ee561f58bc='';
if($_MMVAR_e9ffef5bdc7675ff63['clientunbindmintime']!=0){
$_MMVAR_3bf534660d00be59f7=',`cday`='.($_MMVAR_be0ff7fbb4af7d07f5['cday']-$_MMVAR_e9ffef5bdc7675ff63['clientunbindmintime']).',`endtime`='.($_MMVAR_be0ff7fbb4af7d07f5['endtime']-86400*$_MMVAR_e9ffef5bdc7675ff63['clientunbindmintime']);
$_MMVAR_495c1548ee561f58bc='，扣除'.$_MMVAR_e9ffef5bdc7675ff63['clientunbindmintime'].'天';
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO '.TNREG.'_unbindlog (`userid`,`xjlid`,`addtime`,`basekey`,`oldcday`,`newcday`,`edittype`) VALUES ('.$_MMVAR_e9ffef5bdc7675ff63['userid'].', '.$_MMVAR_e9ffef5bdc7675ff63['id'].', '.time().', \''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\', '.$_MMVAR_be0ff7fbb4af7d07f5['cday'].', '.($_MMVAR_be0ff7fbb4af7d07f5['cday']-$_MMVAR_e9ffef5bdc7675ff63['clientunbindmintime']).',\'pccode\')', 'notsync');
}
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `chkcode`=\'aaaaaaaaa\', `bdcode`=\'1001\',`v7ext2`=\'\''.$_MMVAR_3bf534660d00be59f7.$_MMVAR_3a2e6f3d72f1e544a8.' where `keys`=\''.$_MMVAR_be0ff7fbb4af7d07f5['keys'].'\'', 'sync');

exit('解绑成功'.$_MMVAR_495c1548ee561f58bc.'。');
}


function _MMFUN_337d0a70204682195a($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_0454bf37b62d08d089,$_MMVAR_7b6896960481a4d007,$_MMVAR_a5afa007e70518d858, $_MMVAR_c90455ba5250dd5068, $_MMVAR_6a6b5ab96d7a7da64f, $_MMVAR_2d2ab0b1464ddcb9cb, $_MMVAR_4ad740ebe9783dfa93, $_MMVAR_71e6303534ceac4f32, $_MMVAR_7ad49afa325c70c486, $_MMVAR_3646bf05f90f5a2181,$_MMVAR_8fb0dd4f956115dffa)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_6a6b5ab96d7a7da64f) < 3)
exit('用户名3位字符以上。');

$_MMVAR_490a890afb59119c96=_MMFUN_c3428c7e6251d22b7d($_MMVAR_6a6b5ab96d7a7da64f);		
$_MMVAR_6a6b5ab96d7a7da64f=_MMFUN_4bb069f11df5d99e54($_MMVAR_6a6b5ab96d7a7da64f);
$_MMVAR_3646bf05f90f5a2181=_MMFUN_c3428c7e6251d22b7d($_MMVAR_3646bf05f90f5a2181);

if(_MMFUN_b975f45914ee3d5106($_MMVAR_490a890afb59119c96) >60)
exit('英文名60字符以内，中文名10字符以内。');

if(_MMFUN_b975f45914ee3d5106($_MMVAR_4ad740ebe9783dfa93) < 8 || _MMFUN_b975f45914ee3d5106($_MMVAR_4ad740ebe9783dfa93) >20 || !_MMFUN_72287d2d89425c2782($_MMVAR_4ad740ebe9783dfa93))
exit('超级密码必须是8-20个字符的英文或数字。');

if(_MMFUN_b975f45914ee3d5106($_MMVAR_2d2ab0b1464ddcb9cb) < 5 || _MMFUN_b975f45914ee3d5106($_MMVAR_2d2ab0b1464ddcb9cb) >20 || !_MMFUN_72287d2d89425c2782($_MMVAR_4ad740ebe9783dfa93))
exit('登陆密码必须是5-20个字符的英文或数字。');

$_MMVAR_2d2ab0b1464ddcb9cb=_MMFUN_4bb069f11df5d99e54($_MMVAR_2d2ab0b1464ddcb9cb);
$_MMVAR_7ad49afa325c70c486=_MMFUN_4bb069f11df5d99e54($_MMVAR_7ad49afa325c70c486);
$_MMVAR_4ad740ebe9783dfa93=_MMFUN_4bb069f11df5d99e54($_MMVAR_4ad740ebe9783dfa93);
$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);
$_MMVAR_71e6303534ceac4f32=_MMFUN_4bb069f11df5d99e54($_MMVAR_71e6303534ceac4f32);
//$_MMVAR_bb6713f19abe5e75c5=_MMFUN_4bb069f11df5d99e54($_MMVAR_bb6713f19abe5e75c5);
//$_MMVAR_3646bf05f90f5a2181=_MMFUN_4bb069f11df5d99e54($_MMVAR_3646bf05f90f5a2181);


if(_MMFUN_b975f45914ee3d5106($_MMVAR_7ad49afa325c70c486) >100 )
exit('绑定信息太长。');	

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要充值的软件未找到。');
if(stripos(b226_softid,'_'.$_MMVAR_e9ffef5bdc7675ff63['id'].'_')!==false)exit('该软件已关闭注册新用户。');	/* add by D14-226 */
$_MMVAR_2e09935932ab75e961=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_user where `id`='.$_MMVAR_e9ffef5bdc7675ff63['userid']);
if(empty($_MMVAR_2e09935932ab75e961))
exit('要充值的软件的作者信息未找到。');
$_MMVAR_daccb0c66a972c1322=$_MMVAR_2e09935932ab75e961['key1num'] + 1;
if($_MMVAR_2e09935932ab75e961['vipkeynums'] > 0 && $_MMVAR_daccb0c66a972c1322 > $_MMVAR_2e09935932ab75e961['vipkeynums'])
exit('作者可管理的用户已达上限，暂不允许新用户注册');
if($_MMVAR_e9ffef5bdc7675ff63['ext1'] <> 'user')
exit('该软件为卡模式，不能使用用户模式注册。（软件编号：'.$_MMVAR_c90455ba5250dd5068.'）');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_c4194f008376629764=0;
$_MMVAR_71e6303534ceac4f32=trim($_MMVAR_71e6303534ceac4f32);
if((_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)+1) % 17 != 0 && (_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)+1) % 25 != 0){
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)==0){
if(ceil($_MMVAR_e9ffef5bdc7675ff63['mfday'])==0)
exit('该软件注册新用户必须使用充值卡，你未输入充值卡号。'.$_MMVAR_e9ffef5bdc7675ff63['mfday'].ceil($_MMVAR_e9ffef5bdc7675ff63['mfday']));
$_MMVAR_d4eb7ade2f075d12e2='';$_MMVAR_2e21e686aca527e999='';
if($_MMVAR_e9ffef5bdc7675ff63['reg_multi_user']==0){
$_MMVAR_d4eb7ade2f075d12e2=' UNION select * from '.TNREG.'_havereg where xjlid='.$_MMVAR_e9ffef5bdc7675ff63['id'].' and `cusername`=\''.$_MMVAR_a5afa007e70518d858.'\' ';
$_MMVAR_2e21e686aca527e999='或电脑';				
}				
$_MMVAR_87e4ed813b9c6dfa1b=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_havereg where xjlid='.$_MMVAR_e9ffef5bdc7675ff63['id'].' and `cusername`=\''.$_MMVAR_490a890afb59119c96.'\' '.$_MMVAR_d4eb7ade2f075d12e2);
if(!empty($_MMVAR_87e4ed813b9c6dfa1b)){
if($_MMVAR_e9ffef5bdc7675ff63['id']==$_MMVAR_87e4ed813b9c6dfa1b['xjlid'])
exit('该帐号'.$_MMVAR_2e21e686aca527e999.'在'._MMFUN_59e7c3854a78f9e590($_MMVAR_87e4ed813b9c6dfa1b['addtime'], 1).'免费注册过一次，如需再注册请输入充值卡号');
}
$_MMVAR_c4194f008376629764=1;
}else{
exit('充值卡填写错误，长度必须16或24位。');
}
}
if(_MMFUN_b975f45914ee3d5106($_MMVAR_3646bf05f90f5a2181) <> 0 && _MMFUN_b975f45914ee3d5106($_MMVAR_3646bf05f90f5a2181) < 3)
exit('推广帐号长度少于3个字符。');
$_MMVAR_0a01de1a2cc36ba930=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `xjlid`='.$_MMVAR_e9ffef5bdc7675ff63['id'].' and `cusername`=\''.$_MMVAR_490a890afb59119c96.'\' ');
if(!empty($_MMVAR_0a01de1a2cc36ba930)){
if(intval($_MMVAR_0a01de1a2cc36ba930['isdel'])==1)
exit('该帐号已存在，并且处于删除状态，不可重复注册，有问题请联系作者。');
exit('帐号已存在。');
}

$_MMVAR_23b534f77bc06508e2=0;
$_MMVAR_ad5fc4eaa7e0988e1e='';
if(_MMFUN_b975f45914ee3d5106($_MMVAR_3646bf05f90f5a2181) >= 3 && $_MMVAR_e9ffef5bdc7675ff63['editjs']!=0){
$_MMVAR_29e6f464de0211e625=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_3646bf05f90f5a2181.'\' and `cday`<>0');
if(empty($_MMVAR_29e6f464de0211e625))
exit('注册失败：所填的推广帐号不存在，如果你不清楚推广帐号请留空。');
if(intval($_MMVAR_29e6f464de0211e625['activetime'])==0)
exit('注册失败：所填的推广帐号还未激活。');
if(intval($_MMVAR_29e6f464de0211e625['activetime']) + $_MMVAR_29e6f464de0211e625['cday'] * 86400 < time())
exit('注册失败：所填的推广帐号已过期。');
if(intval($_MMVAR_29e6f464de0211e625['normal']) != 1)
exit('注册失败：所填的推广帐号被冻结。');
$_MMVAR_23b534f77bc06508e2=1;
$_MMVAR_ad5fc4eaa7e0988e1e=',fuser=\''.$_MMVAR_3646bf05f90f5a2181.'\' ';
}
if($_MMVAR_7ad49afa325c70c486!='')
$_MMVAR_ad5fc4eaa7e0988e1e=',v7ext1=\''.$_MMVAR_7ad49afa325c70c486.'\' ';
if($_MMVAR_23b534f77bc06508e2==0)$_MMVAR_3646bf05f90f5a2181='';

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
'keys'=>_MMFUN_90732a0da1412e2b45('M', $_MMVAR_3fc22e00af1642a292).strtoupper(substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"), 0, 10)),
'isused'=>2,
'intro'=>$_MMVAR_6a6b5ab96d7a7da64f,
'ext2'=>$_MMVAR_4ad740ebe9783dfa93,
'cusername'=>$_MMVAR_490a890afb59119c96,
'cpassword'=>$_MMVAR_2d2ab0b1464ddcb9cb,
'fuser'=>$_MMVAR_3646bf05f90f5a2181,
'v7ext1'=>$_MMVAR_7ad49afa325c70c486,
'dayactivetimes'=>0
);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_user` set `key1num`=`key1num`+1 where id='.$_MMVAR_2e09935932ab75e961['id'], 'sync');
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006($_MMVAR_3fc22e00af1642a292, $_MMVAR_273aa5d2794e847523, 'sync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_havereg` (`userid`, `xjlid`, `addtime`, `cusername`) VALUES ('.$_MMVAR_e9ffef5bdc7675ff63['userid'].', '.$_MMVAR_e9ffef5bdc7675ff63['id'].', '.time().', \''.$_MMVAR_490a890afb59119c96.'\') ', 'nosync');
if($_MMVAR_e9ffef5bdc7675ff63['reg_multi_user']==0)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_havereg` (`userid`, `xjlid`, `addtime`, `cusername`) VALUES ('.$_MMVAR_e9ffef5bdc7675ff63['userid'].', '.$_MMVAR_e9ffef5bdc7675ff63['id'].', '.time().', \''.$_MMVAR_a5afa007e70518d858.'\') ', 'nosync');
//echo 'INSERT INTO `'.TNREG.'_havereg` (`userid`, `xjlid`, `addtime`, `cusername`) VALUES ('.$_MMVAR_e9ffef5bdc7675ff63['userid'].', '.$_MMVAR_e9ffef5bdc7675ff63['id'].', '.time().', \''.$_MMVAR_bb6713f19abe5e75c5.'\') ';
exit('注册免费帐号成功，帐号可使用时间'.ceil($_MMVAR_e9ffef5bdc7675ff63['mfday'] * 24).'小时。');
}

$_MMVAR_a5f72524ded13edf27=explode('|', $_MMVAR_71e6303534ceac4f32);
$_MMVAR_98e747f15bf473b354=array_unique ($_MMVAR_a5f72524ded13edf27);
if(count($_MMVAR_a5f72524ded13edf27) != count($_MMVAR_98e747f15bf473b354))
exit('输入的充值卡号有相同的。');
$_MMVAR_e184a42e36062e2b67=array();
$_MMVAR_618ffbeda183ee8861=0;
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'\'');
if(empty($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]))
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'不存在。');
if($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['xjlid'] <> $_MMVAR_e9ffef5bdc7675ff63['id'])
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'不属于该软件。');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['isused']) != 0)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'已经被使用。');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['normal']) != 1)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'已经被冻结。');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['ispay']) != 1)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'是代理提取的卡，代理还未付款，暂时不支持未付款卡充值。');
if($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['cday']==0)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'是特殊卡（天数为0）。');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['cday'])==intval($_MMVAR_e9ffef5bdc7675ff63['int3']))
$_MMVAR_618ffbeda183ee8861=$_MMVAR_618ffbeda183ee8861 + 1;
}
$_MMVAR_7290e63fc244ed6b0b=0;

if(intval($_MMVAR_e9ffef5bdc7675ff63['int2']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int3']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int4']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int2'])==count($_MMVAR_a5f72524ded13edf27) && intval($_MMVAR_e9ffef5bdc7675ff63['int2'])==$_MMVAR_618ffbeda183ee8861)
$_MMVAR_7290e63fc244ed6b0b=intval($_MMVAR_e9ffef5bdc7675ff63['int4']);
$_MMVAR_a9a832cc2eb685881b="";
$_MMVAR_e4166e802d490cbfbf=0;
$_MMVAR_158d5fe88c9d4587f9=0;
for($_MMVAR_8fdbca33e031eb6432=0;$_MMVAR_8fdbca33e031eb6432 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8fdbca33e031eb6432++){
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e4166e802d490cbfbf + $_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['cday'];
$_MMVAR_158d5fe88c9d4587f9=$_MMVAR_158d5fe88c9d4587f9+$_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['dayactivetimes'];
$_MMVAR_a9a832cc2eb685881b .= " ".$_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['cday'];
}
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e4166e802d490cbfbf + $_MMVAR_7290e63fc244ed6b0b;
$_MMVAR_303322a92013db2b0d=0;
$_MMVAR_fb299babe9700c932e=0;
if($_MMVAR_23b534f77bc06508e2==1)
$_MMVAR_fb299babe9700c932e=$_MMVAR_e9ffef5bdc7675ff63['editjs'] * $_MMVAR_e4166e802d490cbfbf / 24;
if(!empty($_MMVAR_e9ffef5bdc7675ff63['tguser2']))
$_MMVAR_303322a92013db2b0d=$_MMVAR_fb299babe9700c932e;

for($_MMVAR_8fdbca33e031eb6432=0;$_MMVAR_8fdbca33e031eb6432 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8fdbca33e031eb6432++){
if($_MMVAR_8fdbca33e031eb6432==0){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cusername`=\''.$_MMVAR_490a890afb59119c96.'\', `cpassword`=\''.$_MMVAR_2d2ab0b1464ddcb9cb.'\', `ext2`=\''.$_MMVAR_4ad740ebe9783dfa93.'\', `isused`=2, cday='.($_MMVAR_e4166e802d490cbfbf+$_MMVAR_303322a92013db2b0d).',`dayactivetimes`='.$_MMVAR_158d5fe88c9d4587f9.', deltime='.time().',intro=\''.$_MMVAR_6a6b5ab96d7a7da64f.'\''.$_MMVAR_ad5fc4eaa7e0988e1e.' where `keys`=\''.$_MMVAR_a5f72524ded13edf27[0].'\'', 'sync');
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `isused`=1, deltime='.time().',intro=\''.$_MMVAR_6a6b5ab96d7a7da64f.'\' where `keys`=\''.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8fdbca33e031eb6432].'\'', 'sync');
}
}
$_MMVAR_9fecb5494f62ff4f6c=array(
'addtime'=>time(),
'userid'=>$_MMVAR_e184a42e36062e2b67[0]['userid'],
'xjlid'=>$_MMVAR_e184a42e36062e2b67[0]['xjlid'],
'logtype'=>0,
'username1'=>$_MMVAR_490a890afb59119c96,
'u1d1'=>0,
'u1d2'=>$_MMVAR_e4166e802d490cbfbf+$_MMVAR_fb299babe9700c932e,
'addday'=>$_MMVAR_e4166e802d490cbfbf+$_MMVAR_fb299babe9700c932e,
'sysdelday'=>0,
'username2'=>'0',
'u2d1'=>0,
'u2d2'=>0,
'intro'=>$_MMVAR_71e6303534ceac4f32
);
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');

if($_MMVAR_23b534f77bc06508e2==1){
$_MMVAR_9fecb5494f62ff4f6c=array(
'addtime'=>time(),
'userid'=>$_MMVAR_29e6f464de0211e625['userid'],
'xjlid'=>$_MMVAR_29e6f464de0211e625['xjlid'],
'logtype'=>3,
'username1'=>$_MMVAR_3646bf05f90f5a2181,
'u1d1'=>$_MMVAR_29e6f464de0211e625['cday'],
'addday'=>$_MMVAR_fb299babe9700c932e,
'sysdelday'=>0,
'username2'=>$_MMVAR_490a890afb59119c96,
'u2d1'=>0,
'u2d2'=>$_MMVAR_e4166e802d490cbfbf,
'intro'=>$_MMVAR_71e6303534ceac4f32
);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cday`='.($_MMVAR_29e6f464de0211e625['cday'] + $_MMVAR_fb299babe9700c932e).', `endtime`=endtime+'.($_MMVAR_fb299babe9700c932e * 86400).' where `keys`=\''.$_MMVAR_29e6f464de0211e625['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_29e6f464de0211e625['cday'] + $_MMVAR_fb299babe9700c932e;
echo '给推广帐户 ['._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_3646bf05f90f5a2181).'] 添加了'.round($_MMVAR_fb299babe9700c932e, 2).'天有效期。'."\r\n";
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');
}
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_user` set `key1num`=`key1num`+1 where id='.$_MMVAR_2e09935932ab75e961['id'], 'sync');
$_MMVAR_c4c4e5a38df8acea64='';
if($_MMVAR_7290e63fc244ed6b0b!=0)
$_MMVAR_c4c4e5a38df8acea64='，充值套餐系统赠送：'.$_MMVAR_7290e63fc244ed6b0b.'天';
if($_MMVAR_303322a92013db2b0d!=0)
$_MMVAR_c4c4e5a38df8acea64.='，推广赠送：'.round($_MMVAR_303322a92013db2b0d,2).'天';
$_MMVAR_a1c9b60b1963ba3f24='';
if($_MMVAR_e9ffef5bdc7675ff63['locktimes']>0)
$_MMVAR_a1c9b60b1963ba3f24=$_MMVAR_158d5fe88c9d4587f9.'点';
exit('注册用户成功，帐号可使用时间'.round($_MMVAR_e4166e802d490cbfbf+$_MMVAR_fb299babe9700c932e,2)."天".$_MMVAR_a1c9b60b1963ba3f24."。\r\n（使用的卡类型：".$_MMVAR_a9a832cc2eb685881b.$_MMVAR_c4c4e5a38df8acea64.'）');
}


function _MMFUN_3a4bea12ce89e48a80($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_0454bf37b62d08d089,$_MMVAR_7b6896960481a4d007,$_MMVAR_a5afa007e70518d858, $_MMVAR_c90455ba5250dd5068, $_MMVAR_6a6b5ab96d7a7da64f, $_MMVAR_71e6303534ceac4f32)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_6a6b5ab96d7a7da64f) < 3)
exit('用户名3位字符以上。');
if((_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)+1) % 17 != 0 && (_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)+1) % 25 != 0)
exit('充值卡填写错误。');

$_MMVAR_bb6713f19abe5e75c5=_MMFUN_c3428c7e6251d22b7d($_MMVAR_6a6b5ab96d7a7da64f);		
$_MMVAR_6a6b5ab96d7a7da64f=_MMFUN_4bb069f11df5d99e54($_MMVAR_6a6b5ab96d7a7da64f);
$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);
$_MMVAR_71e6303534ceac4f32=_MMFUN_4bb069f11df5d99e54($_MMVAR_71e6303534ceac4f32);		


$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要充值的软件未找到。');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];

$_MMVAR_350816a7d3bdc2711f=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\'');
if(empty($_MMVAR_350816a7d3bdc2711f))
exit('用户不存在，无法充值。');
if(intval($_MMVAR_350816a7d3bdc2711f['isused']) != 2)
exit('该帐号在回收站，不可充值1。');
if(intval($_MMVAR_350816a7d3bdc2711f['isdel'])==1)
exit('该帐号在回收站，不可充值2。');
if(intval($_MMVAR_350816a7d3bdc2711f['normal']) !== 1)
exit('该帐号被冻结了，不可充值。');
if($_MMVAR_350816a7d3bdc2711f['cday'] == 0)
exit('你钱多？这是试用帐号不用充值。');
$_MMVAR_a5f72524ded13edf27=explode('|', $_MMVAR_71e6303534ceac4f32);
$_MMVAR_98e747f15bf473b354=array_unique ($_MMVAR_a5f72524ded13edf27);
if(count($_MMVAR_a5f72524ded13edf27) != count($_MMVAR_98e747f15bf473b354))
exit('输入的充值卡号有相同的。');
$_MMVAR_e184a42e36062e2b67=array();
$_MMVAR_618ffbeda183ee8861=0;
$_MMVAR_d4e2d1a70a5ec2d36e='';

for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'\'');
if(empty($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]))
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'不存在。');
if($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['xjlid'] <> $_MMVAR_e9ffef5bdc7675ff63['id'])
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'不属于该软件。');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['isused']) != 0)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'已经被使用。');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['normal']) != 1)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'已经被冻结。');
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['ispay']) != 1)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'是代理提取的卡，代理还未付款，不支持未付款卡充值。');
if($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['cday']==0)
exit('充值卡'.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8ff60a7771c3f2c087].'是特殊卡（天数为0）。');
if(empty($_MMVAR_350816a7d3bdc2711f['agentid'])){
if(!empty($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['agentid']) && empty($_MMVAR_d4e2d1a70a5ec2d36e) && substr($_MMVAR_350816a7d3bdc2711f['keys'],0,1)=='M')
$_MMVAR_d4e2d1a70a5ec2d36e=', `agentid`='.$_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['agentid'].' ';
}
if(intval($_MMVAR_e184a42e36062e2b67[$_MMVAR_8ff60a7771c3f2c087]['cday'])==intval($_MMVAR_e9ffef5bdc7675ff63['int3']))
$_MMVAR_618ffbeda183ee8861=$_MMVAR_618ffbeda183ee8861 + 1;
}
$_MMVAR_7290e63fc244ed6b0b=0;

if(intval($_MMVAR_e9ffef5bdc7675ff63['int2']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int3']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int4']) != 0 && intval($_MMVAR_e9ffef5bdc7675ff63['int2'])==count($_MMVAR_a5f72524ded13edf27) && intval($_MMVAR_e9ffef5bdc7675ff63['int2'])==$_MMVAR_618ffbeda183ee8861)
$_MMVAR_7290e63fc244ed6b0b=intval($_MMVAR_e9ffef5bdc7675ff63['int4']);
$_MMVAR_a9a832cc2eb685881b="";
$_MMVAR_e4166e802d490cbfbf=0;
$_MMVAR_158d5fe88c9d4587f9=0;
for($_MMVAR_8fdbca33e031eb6432=0;$_MMVAR_8fdbca33e031eb6432 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8fdbca33e031eb6432++){
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e4166e802d490cbfbf + $_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['cday'];
$_MMVAR_158d5fe88c9d4587f9=$_MMVAR_158d5fe88c9d4587f9+$_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['dayactivetimes'];
$_MMVAR_a9a832cc2eb685881b .= " ".$_MMVAR_e184a42e36062e2b67[$_MMVAR_8fdbca33e031eb6432]['cday'];
}
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e4166e802d490cbfbf + $_MMVAR_7290e63fc244ed6b0b;
for($_MMVAR_8fdbca33e031eb6432=0;$_MMVAR_8fdbca33e031eb6432 < count($_MMVAR_a5f72524ded13edf27);$_MMVAR_8fdbca33e031eb6432++){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `isused`=1, deltime='.time().',intro=\''.$_MMVAR_bb6713f19abe5e75c5.'\' where `keys`=\''.$_MMVAR_a5f72524ded13edf27[$_MMVAR_8fdbca33e031eb6432].'\'', 'sync');
}


$_MMVAR_23b534f77bc06508e2=0;
$_MMVAR_196dd6d62fce995819='';
if(strlen($_MMVAR_350816a7d3bdc2711f['fuser']) >= 3 && $_MMVAR_e9ffef5bdc7675ff63['editjs']!=0){
$_MMVAR_29e6f464de0211e625=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_350816a7d3bdc2711f['fuser'].'\' and `cday`<>0');
if(empty($_MMVAR_29e6f464de0211e625)){
$_MMVAR_196dd6d62fce995819='，你所属的推广帐号不存在';
}else{
if(intval($_MMVAR_29e6f464de0211e625['activetime'])==0){
$_MMVAR_196dd6d62fce995819='，你所属的推广帐号还未激活';
}elseif(intval($_MMVAR_29e6f464de0211e625['activetime']) + $_MMVAR_29e6f464de0211e625['cday'] * 86400 < time()){
$_MMVAR_196dd6d62fce995819='，你所属的推广帐号已过期';
}elseif(intval($_MMVAR_29e6f464de0211e625['normal']) !== 1){
$_MMVAR_196dd6d62fce995819='，你所属的推广帐号被冻结';
}
}
if(empty($_MMVAR_196dd6d62fce995819))
$_MMVAR_23b534f77bc06508e2=1;
}
$_MMVAR_9a5a633f7b866503d5=0;

if(!empty($_MMVAR_e9ffef5bdc7675ff63['tgrecharge']) && $_MMVAR_23b534f77bc06508e2==1){
$_MMVAR_9a5a633f7b866503d5=1;
if(!empty($_MMVAR_e9ffef5bdc7675ff63['tguser2'])){
$_MMVAR_9a5a633f7b866503d5=2;
}
}


$_MMVAR_f8e22f88aa3ec7edea=$_MMVAR_350816a7d3bdc2711f['ext1'];
$_MMVAR_a2b61b117245cadb5a=explode('§', $_MMVAR_f8e22f88aa3ec7edea.'');
$_MMVAR_70b765a036619af266=count($_MMVAR_a2b61b117245cadb5a);
if($_MMVAR_70b765a036619af266 > 1){
$_MMVAR_f8e22f88aa3ec7edea=$_MMVAR_a2b61b117245cadb5a[0].'§'.($_MMVAR_a2b61b117245cadb5a[$_MMVAR_70b765a036619af266-1] + 1);
}else{
$_MMVAR_f8e22f88aa3ec7edea=$_MMVAR_f8e22f88aa3ec7edea.'§1';
}


$_MMVAR_ab9c61c4fe337136b4=0;
$_MMVAR_303322a92013db2b0d=0;
$_MMVAR_169619a0bb2962f836='';
if($_MMVAR_9a5a633f7b866503d5>0){
$_MMVAR_303322a92013db2b0d=$_MMVAR_e9ffef5bdc7675ff63['editjs'] * $_MMVAR_e4166e802d490cbfbf / 24;
$_MMVAR_f87f8ce6fcf42eb4bc=array(
'addtime'=>time(),
'userid'=>$_MMVAR_29e6f464de0211e625['userid'],
'xjlid'=>$_MMVAR_29e6f464de0211e625['xjlid'],
'logtype'=>3,
'username1'=>$_MMVAR_350816a7d3bdc2711f['fuser'],
'u1d1'=>$_MMVAR_29e6f464de0211e625['cday'],
'addday'=>$_MMVAR_303322a92013db2b0d,
'sysdelday'=>0,
'username2'=>$_MMVAR_bb6713f19abe5e75c5,
'u2d1'=>$_MMVAR_350816a7d3bdc2711f['cday'],
'u2d2'=>$_MMVAR_e4166e802d490cbfbf,
'intro'=>$_MMVAR_71e6303534ceac4f32
);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cday`='.($_MMVAR_29e6f464de0211e625['cday'] + $_MMVAR_303322a92013db2b0d).', `endtime`='.($_MMVAR_29e6f464de0211e625['endtime']+$_MMVAR_303322a92013db2b0d * 86400).' where `keys`=\''.$_MMVAR_29e6f464de0211e625['keys'].'\'', 'sync');
$_MMVAR_f87f8ce6fcf42eb4bc['u1d2']=$_MMVAR_29e6f464de0211e625['cday'] + $_MMVAR_303322a92013db2b0d;
echo '给推广帐户 ['._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_350816a7d3bdc2711f['fuser']).'] 添加了'.round($_MMVAR_303322a92013db2b0d, 2).'天有效期。'."\r\n";
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_f87f8ce6fcf42eb4bc, 'nosync');
if($_MMVAR_9a5a633f7b866503d5==2){
$_MMVAR_ab9c61c4fe337136b4=$_MMVAR_303322a92013db2b0d;
$_MMVAR_169619a0bb2962f836='(其中推广赠送'.round($_MMVAR_ab9c61c4fe337136b4,2).'天)';
}
}

$_MMVAR_9fecb5494f62ff4f6c=array(
'addtime'=>time(),
'userid'=>$_MMVAR_350816a7d3bdc2711f['userid'],
'xjlid'=>$_MMVAR_350816a7d3bdc2711f['xjlid'],
'logtype'=>0,
'username1'=>$_MMVAR_bb6713f19abe5e75c5,
'u1d1'=>$_MMVAR_350816a7d3bdc2711f['cday'],
'u1d2'=>$_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4,
'addday'=>$_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4,
'sysdelday'=>0,
'username2'=>'0',
'u2d1'=>0,
'u2d2'=>0,
'intro'=>$_MMVAR_71e6303534ceac4f32
);
$_MMVAR_a1c9b60b1963ba3f24='';
if($_MMVAR_e9ffef5bdc7675ff63['locktimes']>0)
$_MMVAR_a1c9b60b1963ba3f24=$_MMVAR_158d5fe88c9d4587f9.'点';
if(intval($_MMVAR_350816a7d3bdc2711f['activetime'])==0){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `ext1`=\''.$_MMVAR_f8e22f88aa3ec7edea.'\',`dayactivetimes`=`dayactivetimes`+'.$_MMVAR_158d5fe88c9d4587f9.', cday='.($_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf + $_MMVAR_ab9c61c4fe337136b4).$_MMVAR_d4e2d1a70a5ec2d36e.' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4;
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');

exit('充值完成，给帐户 ['._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_bb6713f19abe5e75c5).'] 添加了'.($_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4).'天'.$_MMVAR_a1c9b60b1963ba3f24.$_MMVAR_169619a0bb2962f836.'，计时从下次登陆算起。');
}else{
if(intval($_MMVAR_350816a7d3bdc2711f['activetime']) + $_MMVAR_350816a7d3bdc2711f['cday'] * 86400 < time()){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `ext1`=\''.$_MMVAR_f8e22f88aa3ec7edea.'\', `activetime`='.time().',`dayactivetimes`=`dayactivetimes`+'.$_MMVAR_158d5fe88c9d4587f9.', `cday`='.($_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4).', `endtime`='.(time() + $_MMVAR_e4166e802d490cbfbf * 86400).$_MMVAR_d4e2d1a70a5ec2d36e.' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d1']=0.01;
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4;
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');
exit('充值完成，给帐户 ['._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_bb6713f19abe5e75c5).'] 添加了'.($_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4).'天'.$_MMVAR_a1c9b60b1963ba3f24.$_MMVAR_169619a0bb2962f836.'，计时从现在算起（因为原帐户已过期）。');
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET	`ext1`=\''.$_MMVAR_f8e22f88aa3ec7edea.'\',`dayactivetimes`=`dayactivetimes`+'.$_MMVAR_158d5fe88c9d4587f9.', `cday`='.($_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4).', `endtime`='.($_MMVAR_350816a7d3bdc2711f['endtime']+$_MMVAR_e4166e802d490cbfbf * 86400).$_MMVAR_d4e2d1a70a5ec2d36e.' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'sync');
$_MMVAR_9fecb5494f62ff4f6c['u1d2']=$_MMVAR_350816a7d3bdc2711f['cday'] + $_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4;
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'nosync');
exit('充值完成，给帐户 ['._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_bb6713f19abe5e75c5).'] 添加了'.($_MMVAR_e4166e802d490cbfbf+$_MMVAR_ab9c61c4fe337136b4).'天'.$_MMVAR_a1c9b60b1963ba3f24.$_MMVAR_169619a0bb2962f836.'，到期时间'._MMFUN_59e7c3854a78f9e590($_MMVAR_350816a7d3bdc2711f['endtime'] + $_MMVAR_e4166e802d490cbfbf * 86400, 1).'。');
}
}
}


function _MMFUN_34844143d34a8e889b($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_0454bf37b62d08d089, $_MMVAR_7b6896960481a4d007,$_MMVAR_a5afa007e70518d858, $_MMVAR_c90455ba5250dd5068, $_MMVAR_6a6b5ab96d7a7da64f, $_MMVAR_c4283b064e4682449a)=$_MMVAR_a9ecec9b36cd18d921;

if(_MMFUN_b975f45914ee3d5106($_MMVAR_6a6b5ab96d7a7da64f) <>16 && _MMFUN_b975f45914ee3d5106($_MMVAR_6a6b5ab96d7a7da64f) <>24)
exit('用注册卡号长度错误。');



if($_MMVAR_c4283b064e4682449a!='' && (_MMFUN_b975f45914ee3d5106($_MMVAR_c4283b064e4682449a) < 2 || _MMFUN_b975f45914ee3d5106($_MMVAR_c4283b064e4682449a) > 99))
exit('绑定信息长度应该是2-99个字符。'.$_MMVAR_c4283b064e4682449a);	

$_MMVAR_ce2814866c72b83589=_MMFUN_4bb069f11df5d99e54($_MMVAR_c4283b064e4682449a);				
$_MMVAR_bb6713f19abe5e75c5=_MMFUN_c3428c7e6251d22b7d($_MMVAR_6a6b5ab96d7a7da64f);	
$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);

$_MMVAR_8e8c556b181b8b9d0c=0;

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('软件信息不存在。');

if($_MMVAR_e9ffef5bdc7675ff63['editks']==99 && $_MMVAR_ce2814866c72b83589 != '')
exit('禁止修改绑定信息。');


if($_MMVAR_e9ffef5bdc7675ff63['ext1']!='keys')
exit('这不是卡模式软件，无法进行本操作。');

$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];

if(strlen($_MMVAR_ce2814866c72b83589) <2)
exit('绑定文本信息长度小于2。');
$_MMVAR_477afeb555696efb83=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_bb6713f19abe5e75c5.'\' ');

if(empty($_MMVAR_477afeb555696efb83))
exit('注册卡不存在。');
if(intval($_MMVAR_477afeb555696efb83['normal']) !== 1)
exit('注册卡被冻结了，不可修改绑定文本信息。');
if(intval($_MMVAR_477afeb555696efb83['isdel'])==1)
exit('注册卡在回收站，不可修改绑定文本信息。');

if($_MMVAR_ce2814866c72b83589 != '' && $_MMVAR_c4283b064e4682449a==$_MMVAR_477afeb555696efb83['v7ext1'])
exit('绑定信息是旧的，不修改绑定文本信息请留空。');	



$_MMVAR_ab3ae7484e49f139cc='';
$_MMVAR_518f28bb7763954853='';

$_MMVAR_d1d4a5e32b498d5107=0;
if($_MMVAR_e9ffef5bdc7675ff63['editks']==0 || $_MMVAR_477afeb555696efb83['v7ext1']==''){
$_MMVAR_e029ec35b9a7d66b2a=$_MMVAR_477afeb555696efb83['cday'];
$_MMVAR_ab3ae7484e49f139cc=' `v7ext1`=\''.$_MMVAR_ce2814866c72b83589.'\' ';
}else{
$_MMVAR_579149166037c22813=$_MMVAR_e9ffef5bdc7675ff63['mfday'];
$_MMVAR_579149166037c22813=1;
if($_MMVAR_477afeb555696efb83['cday']<1)
exit('操作失败：天数小于1的帐号，不能修改绑定信息');
$_MMVAR_e029ec35b9a7d66b2a=round($_MMVAR_477afeb555696efb83['cday'] - $_MMVAR_e9ffef5bdc7675ff63['editks'] / 24, 2);
if($_MMVAR_477afeb555696efb83['activetime']==0){
if($_MMVAR_477afeb555696efb83['cday'] * 24 <= $_MMVAR_e9ffef5bdc7675ff63['editks'])
exit('操作失败：帐号剩余时间不够，不能修改绑定信息');
$_MMVAR_ab3ae7484e49f139cc=' `cday`='.$_MMVAR_e029ec35b9a7d66b2a.', `v7ext1`=\''.$_MMVAR_ce2814866c72b83589.'\' ';
}else{
if($_MMVAR_477afeb555696efb83['cday'] * 86400 - time() + $_MMVAR_477afeb555696efb83['activetime'] <= $_MMVAR_e9ffef5bdc7675ff63['editks'] * 3600)
exit('操作失败：帐号剩余时间不够，不能修改绑定信息');
$_MMVAR_adcb134fe04cdb86a9=$_MMVAR_477afeb555696efb83['endtime']-$_MMVAR_e9ffef5bdc7675ff63['editks']*3600;
$_MMVAR_ab3ae7484e49f139cc=' `cday`='.$_MMVAR_e029ec35b9a7d66b2a.',`endtime`='.$_MMVAR_adcb134fe04cdb86a9.', `v7ext1`=\''.$_MMVAR_ce2814866c72b83589.'\' ';        
} 
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys')
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO '.TNREG.'_unbindlog (`userid`,`xjlid`,`addtime`,`basekey`,`oldcday`,`newcday`,`edittype`) VALUES ('.$_MMVAR_e9ffef5bdc7675ff63['userid'].', '.$_MMVAR_e9ffef5bdc7675ff63['id'].', '.time().', \''.$_MMVAR_477afeb555696efb83['keys'].'\', '.$_MMVAR_477afeb555696efb83['cday'].', '.$_MMVAR_e029ec35b9a7d66b2a.',\'bindtext\')', 'notsync');
} 

$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_ab3ae7484e49f139cc.' where `keys`=\''.$_MMVAR_477afeb555696efb83['keys'].'\'', 'sync');

exit('用户注册卡绑定文本信息成功。' );
}


function _MMFUN_b2e7f4b840a0e994cc($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae, $_MMVAR_9cb1706a7053f1b445;
list($_MMVAR_0454bf37b62d08d089, $_MMVAR_7b6896960481a4d007,$_MMVAR_a5afa007e70518d858, $_MMVAR_c90455ba5250dd5068, $_MMVAR_6a6b5ab96d7a7da64f, $_MMVAR_4a9f8efac528d03123, $_MMVAR_6ecc0d16521a4508ea, $_MMVAR_c4283b064e4682449a)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_6a6b5ab96d7a7da64f) < 3)
exit('用户名或卡号长度少于3个字符。');



if($_MMVAR_c4283b064e4682449a!='' && (_MMFUN_b975f45914ee3d5106($_MMVAR_c4283b064e4682449a) < 2 || _MMFUN_b975f45914ee3d5106($_MMVAR_c4283b064e4682449a) > 99))
exit('绑定信息长度应该是2-99个字符。'.$_MMVAR_c4283b064e4682449a);		

$_MMVAR_bb6713f19abe5e75c5=_MMFUN_c3428c7e6251d22b7d($_MMVAR_6a6b5ab96d7a7da64f);	
$_MMVAR_ce2814866c72b83589=_MMFUN_4bb069f11df5d99e54($_MMVAR_c4283b064e4682449a);	

$_MMVAR_6ecc0d16521a4508ea=_MMFUN_4bb069f11df5d99e54($_MMVAR_6ecc0d16521a4508ea);
$_MMVAR_4a9f8efac528d03123=_MMFUN_4bb069f11df5d99e54($_MMVAR_4a9f8efac528d03123);
$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);


$_MMVAR_8e8c556b181b8b9d0c=0;

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('软件信息不存在。');		
if($_MMVAR_e9ffef5bdc7675ff63['editks']==99 && $_MMVAR_ce2814866c72b83589 != '')
$_MMVAR_8e8c556b181b8b9d0c=1;

if($_MMVAR_e9ffef5bdc7675ff63['ext1']!='user')
exit('这不是用户模式软件，无法进行本操作。');


if(_MMFUN_b975f45914ee3d5106($_MMVAR_4a9f8efac528d03123) < 8)
exit('超级密码长度少于8个字符。');

if($_MMVAR_c4283b064e4682449a=='' && $_MMVAR_6ecc0d16521a4508ea=='')
exit('你没有输入任何要修改的资料。');	

if($_MMVAR_6ecc0d16521a4508ea!='' && (_MMFUN_b975f45914ee3d5106($_MMVAR_6ecc0d16521a4508ea) < 5 || _MMFUN_b975f45914ee3d5106($_MMVAR_6ecc0d16521a4508ea) >20))
exit('新密码长度 小于5 或 大于20 个字符。');


$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];

$_MMVAR_477afeb555696efb83=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\' ');
//echo 'SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\' ';
if(empty($_MMVAR_477afeb555696efb83) || $_MMVAR_477afeb555696efb83['isused'] != 2)
exit('用户不存在。');
if($_MMVAR_477afeb555696efb83['ext2'] != $_MMVAR_4a9f8efac528d03123)
exit('超级密码错误。');
if($_MMVAR_477afeb555696efb83['normal'] != 1)
exit('帐号被冻结了，不可修改资料。');
if(intval($_MMVAR_477afeb555696efb83['isdel'])==1)
exit('帐号在回收站，不可修改资料。');

if($_MMVAR_8e8c556b181b8b9d0c==1 && $_MMVAR_477afeb555696efb83['v7ext1'] != '')
exit('禁止修改绑定信息。');

if($_MMVAR_ce2814866c72b83589 != '' && $_MMVAR_c4283b064e4682449a==$_MMVAR_477afeb555696efb83['v7ext1'])
exit('绑定信息是旧的，不修改绑定文本信息请留空。');	


$_MMVAR_ab3ae7484e49f139cc='';
$_MMVAR_518f28bb7763954853='';
if($_MMVAR_ce2814866c72b83589 != ''){
if($_MMVAR_e9ffef5bdc7675ff63['editks']==0){
$_MMVAR_e029ec35b9a7d66b2a=$_MMVAR_477afeb555696efb83['cday'];
$_MMVAR_ab3ae7484e49f139cc=' `v7ext1`=\''.$_MMVAR_ce2814866c72b83589.'\' ';
}else{
$_MMVAR_579149166037c22813=$_MMVAR_e9ffef5bdc7675ff63['mfday'];
$_MMVAR_579149166037c22813=1;
if($_MMVAR_477afeb555696efb83['cday']<1)
exit('操作失败：天数小于1的帐号，不能修改绑定信息');
$_MMVAR_e029ec35b9a7d66b2a=round($_MMVAR_477afeb555696efb83['cday'] - $_MMVAR_e9ffef5bdc7675ff63['editks'] / 24, 2);
if($_MMVAR_477afeb555696efb83['activetime']==0){
if($_MMVAR_477afeb555696efb83['cday'] * 24 < $_MMVAR_e9ffef5bdc7675ff63['editks'])
exit('操作失败：帐号剩余时间不够，不能修改绑定信息');
$_MMVAR_ab3ae7484e49f139cc=' `cday`='.$_MMVAR_e029ec35b9a7d66b2a.', `v7ext1`=\''.$_MMVAR_ce2814866c72b83589.'\' ';
}else{
if($_MMVAR_477afeb555696efb83['cday'] * 86400 - time() + $_MMVAR_477afeb555696efb83['activetime'] < $_MMVAR_e9ffef5bdc7675ff63['editks'] * 3600)
exit('操作失败：帐号剩余时间不够，不能修改绑定信息');
$_MMVAR_adcb134fe04cdb86a9=$_MMVAR_477afeb555696efb83['endtime']-$_MMVAR_e9ffef5bdc7675ff63['editks']*3600;
$_MMVAR_ab3ae7484e49f139cc=' `cday`='.$_MMVAR_e029ec35b9a7d66b2a.',`endtime`='.$_MMVAR_adcb134fe04cdb86a9.', `v7ext1`=\''.$_MMVAR_ce2814866c72b83589.'\' ';        
} 
} 
}

$_MMVAR_820a8cb9d77cddb6db=$_MMVAR_ab3ae7484e49f139cc;
if($_MMVAR_6ecc0d16521a4508ea!=''){
$_MMVAR_820a8cb9d77cddb6db=' `cpassword`=\''.$_MMVAR_6ecc0d16521a4508ea.'\' ';
if($_MMVAR_ab3ae7484e49f139cc!='')
$_MMVAR_820a8cb9d77cddb6db=$_MMVAR_820a8cb9d77cddb6db.', '.$_MMVAR_ab3ae7484e49f139cc;
}

$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET '.$_MMVAR_820a8cb9d77cddb6db.' where `keys`=\''.$_MMVAR_477afeb555696efb83['keys'].'\'', 'sync');

if($_MMVAR_ab3ae7484e49f139cc!=''){
$_MMVAR_9fecb5494f62ff4f6c=array(
'addtime'=>time(),
'userid'=>$_MMVAR_477afeb555696efb83['userid'],
'xjlid'=>$_MMVAR_477afeb555696efb83['xjlid'],
'logtype'=>5,
'username1'=>$_MMVAR_bb6713f19abe5e75c5,
'u1d1'=>$_MMVAR_477afeb555696efb83['cday'],
'u1d2'=>$_MMVAR_e029ec35b9a7d66b2a,
'addday'=>0,
'sysdelday'=>round($_MMVAR_e9ffef5bdc7675ff63['editks'] / 24, 2),
'username2'=>'0',
'u2d1'=>0,
'u2d2'=>0,
'intro'=>_MMFUN_c3428c7e6251d22b7d($_MMVAR_c4283b064e4682449a)
);
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_timelog', $_MMVAR_9fecb5494f62ff4f6c, 'notsync9');
}
exit('用户信息修改成功。' );
}


function _MMFUN_78601124d5e6917c3d($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_0454bf37b62d08d089, $_MMVAR_7b6896960481a4d007,$_MMVAR_a5afa007e70518d858, $_MMVAR_c90455ba5250dd5068, $_MMVAR_71e6303534ceac4f32)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) < 3)
exit('卡号或用户名错误。');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_c90455ba5250dd5068) <> 7)
exit('软件编号错误。');


$_MMVAR_71e6303534ceac4f32=_MMFUN_c3428c7e6251d22b7d($_MMVAR_71e6303534ceac4f32);
$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要查询的软件未找到。');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_8e47823876210f2e4b=time();
$_MMVAR_33a8b9db2156aec1e6=intval(date('d'));
$_MMVAR_85865ad30acb27f870=1;
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
$_MMVAR_85865ad30acb27f870=1;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 16 && _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 24)
exit('卡号错误。');
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('要查询的卡未找到。');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的卡被删除。');
}else{
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)==16 or _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32)==24){
$_MMVAR_85865ad30acb27f870=1;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5)){
$_MMVAR_85865ad30acb27f870=0;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('要查询的卡或用户未找到。');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的卡或用户被删除。');
}else{
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的卡被删除。');
}
}else{
$_MMVAR_85865ad30acb27f870=0;
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit('要查询的用户未找到。');
if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit('要查询的用户被删除。');
}
}

$_MMVAR_a1c9b60b1963ba3f24='';
if($_MMVAR_e9ffef5bdc7675ff63['locktimes']>0)
$_MMVAR_a1c9b60b1963ba3f24=$_MMVAR_be0ff7fbb4af7d07f5['dayactivetimes'].'点';
$_MMVAR_96e8495ce85c6f1c54='';
if($_MMVAR_be0ff7fbb4af7d07f5['v7ext1']!='')
$_MMVAR_96e8495ce85c6f1c54='，绑定信息：'.$_MMVAR_be0ff7fbb4af7d07f5['v7ext1'];
if($_MMVAR_e9ffef5bdc7675ff63['ext1'] != 'user'){

if($_MMVAR_be0ff7fbb4af7d07f5['cday']==0){
if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1){
exit('这是张试用卡，已被冻结。');
}else{
exit('这是张试用卡，每天每台机可使用'.$_MMVAR_e9ffef5bdc7675ff63['testtimes'].'次，每次可使用'.($_MMVAR_e9ffef5bdc7675ff63['testtime'] * (15 + $_MMVAR_e9ffef5bdc7675ff63['addchktime'] / 60)).'分钟。');
}
}


if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1)
exit('这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天'.$_MMVAR_a1c9b60b1963ba3f24.'，已被冻结。');
echo '这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天'.$_MMVAR_a1c9b60b1963ba3f24.'，'.$_MMVAR_96e8495ce85c6f1c54.'允许同时连接数：'.$_MMVAR_be0ff7fbb4af7d07f5['linknum']."。\r\n";
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
exit('这是张系统试用帐号基卡，已被冻结。');
}else{
exit('这是张系统试用帐号，已被冻结。');
}
}else{
if($_MMVAR_85865ad30acb27f870==1){
exit('这是张系统试用帐号基卡。');
}else{
exit('这是张系统试用帐号。');
}
}
}
$_MMVAR_e8c4e409dad981c681='充值卡';
if(intval($_MMVAR_be0ff7fbb4af7d07f5['isused'])==2)$_MMVAR_e8c4e409dad981c681='基卡[基卡就是用户注册时使用的第一张卡]';

if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) != 1){
if($_MMVAR_85865ad30acb27f870==1){
exit('这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天'.$_MMVAR_a1c9b60b1963ba3f24.$_MMVAR_e8c4e409dad981c681.'，已被冻结。');
}else{
exit('这是有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天'.$_MMVAR_a1c9b60b1963ba3f24.'用户，已被冻结。');
}
}
if($_MMVAR_85865ad30acb27f870==1){
echo '这是张有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天'.$_MMVAR_a1c9b60b1963ba3f24.$_MMVAR_e8c4e409dad981c681.$_MMVAR_96e8495ce85c6f1c54."。\r\n";
}else{
echo '这是有效期'.$_MMVAR_be0ff7fbb4af7d07f5['cday'].'天'.$_MMVAR_a1c9b60b1963ba3f24."用户。".$_MMVAR_96e8495ce85c6f1c54."\r\n";
}
if(intval($_MMVAR_be0ff7fbb4af7d07f5['isused'])==1){
exit('该充值卡已经充值过，充值日期：'.date('Y-m-d H:i:s', $_MMVAR_be0ff7fbb4af7d07f5['deltime']));
}elseif(intval($_MMVAR_be0ff7fbb4af7d07f5['isused'])==0){
exit('该充值卡还未被使用。');
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
list($_MMVAR_0454bf37b62d08d089,$_MMVAR_7b6896960481a4d007,$_MMVAR_a5afa007e70518d858, $_MMVAR_c90455ba5250dd5068, $_MMVAR_6a6b5ab96d7a7da64f, $_MMVAR_2d2ab0b1464ddcb9cb, $_MMVAR_4ad740ebe9783dfa93, $_MMVAR_71e6303534ceac4f32, $_MMVAR_7ad49afa325c70c486, $_MMVAR_3646bf05f90f5a2181)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_6a6b5ab96d7a7da64f) < 3)
exit('用户名3位字符以上。');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_2d2ab0b1464ddcb9cb) < 5)
exit('密码5位字符以上。');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_4ad740ebe9783dfa93) < 8)
exit('超级密码必须8个字符以上。');


$_MMVAR_6a6b5ab96d7a7da64f=_MMFUN_4bb069f11df5d99e54($_MMVAR_6a6b5ab96d7a7da64f);
$_MMVAR_bb6713f19abe5e75c5=_MMFUN_c3428c7e6251d22b7d($_MMVAR_6a6b5ab96d7a7da64f);
$_MMVAR_3646bf05f90f5a2181=_MMFUN_c3428c7e6251d22b7d($_MMVAR_3646bf05f90f5a2181);
$_MMVAR_2d2ab0b1464ddcb9cb=_MMFUN_4bb069f11df5d99e54($_MMVAR_2d2ab0b1464ddcb9cb);
$_MMVAR_7ad49afa325c70c486=_MMFUN_4bb069f11df5d99e54($_MMVAR_7ad49afa325c70c486);
$_MMVAR_4ad740ebe9783dfa93=_MMFUN_4bb069f11df5d99e54($_MMVAR_4ad740ebe9783dfa93);
$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);
$_MMVAR_71e6303534ceac4f32=_MMFUN_4bb069f11df5d99e54($_MMVAR_71e6303534ceac4f32);

if(_MMFUN_b975f45914ee3d5106($_MMVAR_bb6713f19abe5e75c5) >60)
exit('用户名长度超出60个字符。');

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要充值的软件未找到。');
$_MMVAR_2e09935932ab75e961=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_user where `id`='.$_MMVAR_e9ffef5bdc7675ff63['userid']);
if(empty($_MMVAR_2e09935932ab75e961))
exit('要充值的软件的作者信息未找到。');
$_MMVAR_daccb0c66a972c1322=$_MMVAR_2e09935932ab75e961['key1num'] + 1;
if($_MMVAR_2e09935932ab75e961['vipkeynums'] > 0 && $_MMVAR_daccb0c66a972c1322 > $_MMVAR_2e09935932ab75e961['vipkeynums'])
exit('作者可管理的用户已达上限，暂不允许新用户注册');
if($_MMVAR_e9ffef5bdc7675ff63['ext1'] <> 'user')
exit('该软件为卡模式，不能使用用户模式注册。（软件编号：'.$_MMVAR_c90455ba5250dd5068.'）');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_c4194f008376629764=0;
$_MMVAR_71e6303534ceac4f32=trim($_MMVAR_71e6303534ceac4f32);
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 16 && _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 24)
exit('充值卡填写错误，备服注册只能用一张卡。');
$_MMVAR_0a01de1a2cc36ba930=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `xjlid`='.$_MMVAR_e9ffef5bdc7675ff63['id'].' and `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\' ');
if(!empty($_MMVAR_0a01de1a2cc36ba930)){
if(intval($_MMVAR_0a01de1a2cc36ba930['isdel'])==1)
exit('该帐号已存在，并且处于删除状态，不可重复注册，有问题请联系作者。');
exit('帐号已存在。');
}
$_MMVAR_e184a42e36062e2b67=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\' ');
if(empty($_MMVAR_e184a42e36062e2b67))
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不存在。');
if($_MMVAR_e184a42e36062e2b67['xjlid'] <> $_MMVAR_e9ffef5bdc7675ff63['id'])
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不属于该软件。');
if(intval($_MMVAR_e184a42e36062e2b67['isused']) != 0)
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'已经被使用。');
if(intval($_MMVAR_e184a42e36062e2b67['int2']) != 1)
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不是临时充值卡，只有临时充值卡才可以在备服注册时使用。');
if(strlen($_MMVAR_3646bf05f90f5a2181) > 2)
echo '备服是临时注册不支持推广赠送优惠，';
$_MMVAR_a64760a1a1cc4b4e43='';
if($_MMVAR_7ad49afa325c70c486!='')
$_MMVAR_ad5fc4eaa7e0988e1e=',v7ext1=\''.$_MMVAR_7ad49afa325c70c486.'\' ';
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\', `cpassword`=\''.$_MMVAR_2d2ab0b1464ddcb9cb.'\', `ext2`=\''.$_MMVAR_4ad740ebe9783dfa93.'\', `isused`=2, deltime='.time().',intro=\''.$_MMVAR_bb6713f19abe5e75c5.'\''.$_MMVAR_a64760a1a1cc4b4e43.' where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'', 'notsync');
exit("注册临时用户成功，帐号可以开始使用。\r\n提醒：主服恢复正常后该用户将会被系统清理掉，给你带来的不便敬请谅解。。");
}


function _MMFUN_9e6d6419410a560039($_MMVAR_a9ecec9b36cd18d921){
global $_MMVAR_9f95914834184aeeae;
list($_MMVAR_0454bf37b62d08d089,$_MMVAR_7b6896960481a4d007,$_MMVAR_a5afa007e70518d858, $_MMVAR_c90455ba5250dd5068, $_MMVAR_6a6b5ab96d7a7da64f, $_MMVAR_71e6303534ceac4f32)=$_MMVAR_a9ecec9b36cd18d921;
if(_MMFUN_b975f45914ee3d5106($_MMVAR_6a6b5ab96d7a7da64f) < 3)
exit('用户名3位字符以上。');
if(_MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 16 && _MMFUN_b975f45914ee3d5106($_MMVAR_71e6303534ceac4f32) != 24)
exit('充值卡填写错误，备服充值一次只能用一张充值卡并且必须是以L开头的临时卡。');


$_MMVAR_bb6713f19abe5e75c5=_MMFUN_c3428c7e6251d22b7d($_MMVAR_6a6b5ab96d7a7da64f);			
$_MMVAR_6a6b5ab96d7a7da64f=_MMFUN_4bb069f11df5d99e54($_MMVAR_6a6b5ab96d7a7da64f);
$_MMVAR_c90455ba5250dd5068=_MMFUN_4bb069f11df5d99e54($_MMVAR_c90455ba5250dd5068);
$_MMVAR_71e6303534ceac4f32=_MMFUN_4bb069f11df5d99e54($_MMVAR_71e6303534ceac4f32);		

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where `xjlcode`='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('要充值的软件未找到。');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];

$_MMVAR_350816a7d3bdc2711f=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `cusername`=\''.$_MMVAR_bb6713f19abe5e75c5.'\'');
if(empty($_MMVAR_350816a7d3bdc2711f))
exit('用户不存在，无法充值。');
if(intval($_MMVAR_350816a7d3bdc2711f['isused']) != 2)
exit('该帐号在回收站，不可充值1。');
if(intval($_MMVAR_350816a7d3bdc2711f['isdel'])==1)
exit('该帐号在回收站，不可充值2。');
if(intval($_MMVAR_350816a7d3bdc2711f['normal']) !== 1)
exit('该帐号被冻结了，不可充值。');
$_MMVAR_e184a42e36062e2b67=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_71e6303534ceac4f32.'\'');
if(empty($_MMVAR_e184a42e36062e2b67))
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不存在。');
if($_MMVAR_e184a42e36062e2b67['xjlid'] <> $_MMVAR_e9ffef5bdc7675ff63['id'])
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不属于该软件。');
if(intval($_MMVAR_e184a42e36062e2b67['isused']) != 0)
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'已经被使用。');
if(intval($_MMVAR_e184a42e36062e2b67['int2']) != 1)
exit('充值卡'.$_MMVAR_71e6303534ceac4f32.'不是临时充值卡，只有以L开头的临时充值卡才可以在备服充值。');
$_MMVAR_e4166e802d490cbfbf=$_MMVAR_e184a42e36062e2b67['cday'];

if(intval($_MMVAR_350816a7d3bdc2711f['activetime'])==0){
exit('禁止对未使用过的帐号进行充值。');
}else{
if(intval($_MMVAR_350816a7d3bdc2711f['activetime']) + $_MMVAR_350816a7d3bdc2711f['cday'] * 86400 < time()){
if($_MMVAR_350816a7d3bdc2711f['int2'] != 1)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_temppay` (`tablename`, `basekey`) VALUES(\''.$_MMVAR_3fc22e00af1642a292.'\',\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\')', 'notsync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `ext1`=\''.$_MMVAR_f8e22f88aa3ec7edea.'\', `activetime`='.time().', `cday`='.$_MMVAR_e4166e802d490cbfbf.', `endtime`='.(time() + $_MMVAR_e4166e802d490cbfbf * 86400).' where `keys`=\''.$_MMVAR_350816a7d3bdc2711f['keys'].'\'', 'notsync');
exit('充值完成，给帐户 ['._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_bb6713f19abe5e75c5).'] 添加了'.$_MMVAR_e4166e802d490cbfbf."天有效期，计时从现在算起。\r\n提醒：主服恢复正常后本次充值操作会被注销。");
}else{
exit('禁止对未过期的帐号进行充值。');
}
}
}


?>