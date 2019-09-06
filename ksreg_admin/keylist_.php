<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
if(KS_SESSIONSAVEWEBDIR==1)
session_save_path(KS_SESSIONDIR);
if(ini_get('session.auto_start')==0)session_start();
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');


switch ($_MMVAR_7b6896960481a4d007){
Case "add":
_MMFUN_37cedbaace7eeb28ab();
break;
Case "keyfiledown":
$_MMVAR_be018edb8064418cd6=_MMFUN_cc3cf510bffd973b95('keyfile','get','no','');
$_MMVAR_0ae35bf3483db40020=_MMFUN_cc3cf510bffd973b95('keyday','post','no','');
$_MMVAR_9b99532769996fe740=_MMFUN_cc3cf510bffd973b95('keynum','post','no','');
$_MMVAR_14e115b66d2198dda1=_MMFUN_cc3cf510bffd973b95('downfile','get','no','');

$_MMVAR_0886c66fe7b0e69023=substr($_MMVAR_be018edb8064418cd6,10,strlen($_MMVAR_be018edb8064418cd6)-43);
$_MMVAR_d67fe59245bb3558a6=explode('_', $_MMVAR_0886c66fe7b0e69023);
$_MMVAR_0886c66fe7b0e69023='key_'.$_MMVAR_d67fe59245bb3558a6[0].'_'.$_MMVAR_0ae35bf3483db40020.'_'.$_MMVAR_9b99532769996fe740.'_'.$_MMVAR_d67fe59245bb3558a6[1].$_MMVAR_d67fe59245bb3558a6[2];
if(is_file("./keycache/".$_MMVAR_be018edb8064418cd6.".php")){
ob_clean();
header("Content-Disposition: attachment; filename=".$_MMVAR_14e115b66d2198dda1);
echo str_rot13(substr(file_get_contents("./keycache/".$_MMVAR_be018edb8064418cd6.".php"),30));
}else{
echo '<script>top.$.msgbox({height:120,width:700,animation:0,title:\'系统提示\',content:{type:\'alert\', content:\'未找到缓存文件夹中的卡号记录文件!\'}});</script>';        
}
exit();
break;
Case "keyfiledel":
$_MMVAR_be018edb8064418cd6=_MMFUN_cc3cf510bffd973b95('keyfile','get','no','');
if(is_file("./keycache/".$_MMVAR_be018edb8064418cd6.".php")){
unlink("./keycache/".$_MMVAR_be018edb8064418cd6.".php");
echo '<script>top.$.msgbox({height:120,width:700,animation:0,title:\'系统提示\',content:{type:\'alert\', content:\'删除文件成功\'}});</script>';
}else{ 
echo '<script>top.$.msgbox({height:120,width:700,animation:0,title:\'系统提示\',content:{type:\'alert\', content:\'文件不存在或已经被删除!\'}});</script>';         
}
exit();
break;
Case "outline":
_MMFUN_8807245d4c9cbff691();
break;
Case "save":
_MMFUN_da1a125ba68654f531();
break;
Case "savetemp":
_MMFUN_c53446d14938af0af3();
break;
Case "batch":
_MMFUN_c28ed738ed2a89f6e9();
break;
Case "keyaddtime":
_MMFUN_e44e9985eac2df65f6();
break;
Case "batchaddtime":
batchaddtime();
break;
Case "batchaddtimesave":
_MMFUN_7307558a1f65fb66bd();
break;
Case "saveintro":
_MMFUN_87e3d11323b6e06eec();
break;
Case "clearinvaliddata":
_MMFUN_56b20bdff0ec90e3e1();
break;
Case "main1":
_MMFUN_08f9176982e865c1a9();
break;
Case "main2":
_MMFUN_d8bbf987953722a36d();
break;
Case "main3":
_MMFUN_cc4e20a3ba375ff51a();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}

function _MMFUN_8807245d4c9cbff691(){
global $_MMVAR_9f95914834184aeeae;
ob_clean();	
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_991adc3b8a3f24bac2=_MMFUN_cc3cf510bffd973b95('sid','post','int',1);
$_MMVAR_21d5b26895994339c1=_MMFUN_cc3cf510bffd973b95('kid','post','int',0);	
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_991adc3b8a3f24bac2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit('你不能操作这个用户的数据');
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];
if($_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `lastonlinetime`=0,  `d13int5`=0, `v7ext2`=\'\' where `id`='.$_MMVAR_21d5b26895994339c1,'sync')){
exit('ok');
}else{
exit('执行离线操作的SQL失败UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `lastonlinetime`=0,  `d13int5`=0 where `id`='.$_MMVAR_21d5b26895994339c1);
}
}

function _MMFUN_7307558a1f65fb66bd(){	
_MMFUN_d68ee68ae41a1d89f0();
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
if($_MMVAR_a68c41bd0ae0e8ec59[0]<3)
_MMFUN_6da5ed7d3a356dcac7('<script>top.$mbox.close();</script>仅年费用户才可以进行批量加时操作!');

$_MMVAR_8efe40afa18df48bf3=_MMFUN_cc3cf510bffd973b95('maddtime','post','num',0);	
$_MMVAR_5b06b269f221d0a58d=_MMFUN_cc3cf510bffd973b95('xjlidd','post','int',0);
if($_MMVAR_8efe40afa18df48bf3==0)
_MMFUN_6da5ed7d3a356dcac7('<script>top.$mbox.close();</script>加时不能为0!');
if($_MMVAR_5b06b269f221d0a58d==0){
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_9a036496d66f59815a['id'];
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cday`=cday+'.$_MMVAR_8efe40afa18df48bf3.',  `endtime`=endtime+'.($_MMVAR_8efe40afa18df48bf3*86400).' where cday >1 and activetime>0 ','sync');
//echo 'delete from `'.$_MMVAR_3fc22e00af1642a292.'` where isdel=1 and deltime>0';
}
_MMFUN_6da5ed7d3a356dcac7('<script>top.$mbox.close();</script>给所有软件用户批量加时成功！');
}else{
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_5b06b269f221d0a58d;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_3fc22e00af1642a292.'` SET `cday`=cday+'.$_MMVAR_8efe40afa18df48bf3.',  `endtime`=endtime+'.($_MMVAR_8efe40afa18df48bf3*86400).' where cday >1 and activetime>0 ','sync');
_MMFUN_6da5ed7d3a356dcac7('<script>top.$mbox.close();</script>给ID为'.$_MMVAR_5b06b269f221d0a58d.'的软件用户批量加时成功！');		
}
}	

function _MMFUN_56b20bdff0ec90e3e1(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();	
if(SVRID!=1){
$_MMVAR_1d4aa003d5948966f2=_MMFUN_b3efe1487b20e72104($_MMVAR_a68c41bd0ae0e8ec59[1],1);
_MMFUN_6da5ed7d3a356dcac7('备服只更新了统计数据，被标记为删除的卡未被删除。');	
}else{
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_9a036496d66f59815a['id'];
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_3fc22e00af1642a292.'` where isdel=1 and deltime>0','sync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_3fc22e00af1642a292.'` where ispay=0 and addtime<'.(time()-86400*3),'sync');
//echo 'delete from `'.$_MMVAR_3fc22e00af1642a292.'` where isdel=1 and deltime>0';
}
$_MMVAR_1d4aa003d5948966f2=_MMFUN_b3efe1487b20e72104($_MMVAR_a68c41bd0ae0e8ec59[1],1);
_MMFUN_6da5ed7d3a356dcac7('所有被标记为删除的数据(卡或用户)已彻底从数据库中删除!<br>三天前代理提取的未付款卡被删除。<br>数据统计已更新：有效卡和用户：'.$_MMVAR_1d4aa003d5948966f2[0].'，全部卡和用户：'.$_MMVAR_1d4aa003d5948966f2[1]);
}
}

function _MMFUN_87e3d11323b6e06eec(){
global $_MMVAR_9f95914834184aeeae;

global $_MMVAR_8ba3d4eca95ad63bc6;
if(empty($_MMVAR_8ba3d4eca95ad63bc6))ob_clean();

if(SVRID!=1)
exit("备服数据禁止操作!");
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','post','int',0);
$_MMVAR_841058cfee62dc8fb5=_MMFUN_cc3cf510bffd973b95('int1','post','int',0);
$_MMVAR_b3cf8fb9a20804256b=_MMFUN_cc3cf510bffd973b95('linknum','post','int',1);
$_MMVAR_3fc22e00af1642a292=_MMFUN_cc3cf510bffd973b95('ktname','post','sql','');
$_MMVAR_e23c7e328f1c3356dc=_MMFUN_cc3cf510bffd973b95('ext1','post','sql','匿名');
$_MMVAR_91d0460a0fb8c0c646=_MMFUN_cc3cf510bffd973b95('ext2','post','sql','');
$_MMVAR_7cbd6da0a575ad7196=_MMFUN_cc3cf510bffd973b95('v7ext1','post','sql','');
$_MMVAR_0e0e5d5748acd45adc=_MMFUN_cc3cf510bffd973b95('cpassword','post','sql','');
$_MMVAR_d9c887456b803d668c=_MMFUN_cc3cf510bffd973b95('intro','post','sql',"无");
$_MMVAR_3249c4d8629372af6e=_MMFUN_cc3cf510bffd973b95('dayactivetimes','post','int',0);


if(strlen($_MMVAR_e23c7e328f1c3356dc)>20)exit('标签20字节内，一个中文字符占三个字节!');
$_MMVAR_7de708661bef41b3bc=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` where id='.$_MMVAR_7ca1659d6f01cb3410);	
if(empty($_MMVAR_7de708661bef41b3bc))
exit('传递的参数错误(id)!');

$_MMVAR_32fccc1bff0bffe0e5='';		
if($_MMVAR_a68c41bd0ae0e8ec59[0]>2)
$_MMVAR_32fccc1bff0bffe0e5=', `linknum`=\''.$_MMVAR_b3cf8fb9a20804256b.'\'';
//$_MMVAR_32fccc1bff0bffe0e5='';	
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` set `cpassword`=\''.$_MMVAR_0e0e5d5748acd45adc.'\',`ext1`=\''.$_MMVAR_e23c7e328f1c3356dc.'\',`ext2`=\''.$_MMVAR_91d0460a0fb8c0c646.'\',`v7ext1`=\''.$_MMVAR_7cbd6da0a575ad7196.'\',`int1`=\''.$_MMVAR_841058cfee62dc8fb5.'\', `intro`=\''.$_MMVAR_d9c887456b803d668c.'\' '.$_MMVAR_32fccc1bff0bffe0e5.', `dayactivetimes`='.$_MMVAR_3249c4d8629372af6e.' where `keys`=\''.$_MMVAR_7de708661bef41b3bc['keys'].'\'','sync');

exit('ok');
}

function _MMFUN_f845b4be82a2064ad0(){
include(KS_DIR.'/key/keymain0.php');
}


function _MMFUN_08f9176982e865c1a9(){
include(KS_DIR.'/key/keymain1.php');
}

function _MMFUN_d8bbf987953722a36d(){
include(KS_DIR.'/key/keymain2.php');
}


function _MMFUN_cc4e20a3ba375ff51a(){
include(KS_DIR.'/key/keymain3.php');
}

function _MMFUN_37cedbaace7eeb28ab(){
include(KS_DIR.'/key/keyadd.php');
}

function _MMFUN_e44e9985eac2df65f6(){
include(KS_DIR.'/key/keyedittime.php');
}

function _MMFUN_da1a125ba68654f531(){
include(KS_DIR.'/key/keysave.php');
}
function _MMFUN_c53446d14938af0af3(){
include(KS_DIR.'/key/keysavetemp.php');
}


function _MMFUN_c28ed738ed2a89f6e9(){
include(KS_DIR.'/key/keybatch.php');
}

echo COPYRIGHT;
?>
</body>
</html>