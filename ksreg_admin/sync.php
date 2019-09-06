<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

$_MMVAR_a9ecec9b36cd18d921=_MMFUN_cc3cf510bffd973b95('op','','sql','');


switch ($_MMVAR_7b6896960481a4d007){

Case "getstate":
ob_clean();
if(IS2SVR != 1)
exit('$.msgbox({width:500,height:100,title:\'同步提示\',content:{type:\'alert\', content:\'<font color=#ff0000>未开放备服，无需同步！</font>\'}});');

$_MMVAR_2e20ef2f23c00368f7=_MMFUN_fedad267f3bb7f4219();
$_MMVAR_a68c41bd0ae0e8ec59=array(0=>'系统任务正常，',1=>'扩展，',2=>'<font color=#ff0000>系统任务异常</font>，',3=>'<font color=#ff0000>系统任务关闭</font>，');
$_MMVAR_4649ce9d7f752e00e0=array(0=>'待机中',1=>'执行中');
if($_MMVAR_2e20ef2f23c00368f7['clearday']==date('d')){
$_MMVAR_050fdb56422d02ffca='(当日已清理数据)<br>';
}else{
$_MMVAR_050fdb56422d02ffca='(当日未清理数据)<br>';
}
if($_MMVAR_2e20ef2f23c00368f7['isclose']==0){
if($_MMVAR_2e20ef2f23c00368f7['starttime']<$_MMVAR_2e20ef2f23c00368f7['endtime']){
$_MMVAR_5c17f222f60bf1209f='下次同步时间：'.date('Y-m-d H:i',$_MMVAR_2e20ef2f23c00368f7['endtime']+SYNCTIME);
}else{
$_MMVAR_5c17f222f60bf1209f='下次同步时间：'.date('Y-m-d H:i',$_MMVAR_2e20ef2f23c00368f7['starttime']+SYNCTIME);			
}
}else{		
$_MMVAR_5c17f222f60bf1209f='下次同步时间：未知';
}
$_MMVAR_054f529ae5114e52a3='上次同步时间：'.date('Y-m-d H:i',$_MMVAR_2e20ef2f23c00368f7['starttime']).'<br>';
if($_MMVAR_2e20ef2f23c00368f7['isclose']==3)
exit('$.msgbox({width:500,height:100,title:\'同步提示\',content:{type:\'alert\', content:\'<font color=#ff0000>系统任务已被管理员关闭！</font>\'}});');
exit('$.msgbox({width:500,height:150,title:\'同步提示\',content:{type:\'alert\', content:\''.$_MMVAR_a68c41bd0ae0e8ec59[$_MMVAR_2e20ef2f23c00368f7['isclose']].$_MMVAR_4649ce9d7f752e00e0[$_MMVAR_2e20ef2f23c00368f7['isrun']].$_MMVAR_050fdb56422d02ffca.$_MMVAR_054f529ae5114e52a3.$_MMVAR_5c17f222f60bf1209f.'<br>当前状态：'.$_MMVAR_2e20ef2f23c00368f7['syncintro'].'\'}});');
Case "del":
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
_MMFUN_d66f119ad4ffa669b3();
break;
Case "task":
if(stripos(ini_get('disable_functions'),'ignore_user_abort')!==false)exit('不支持ignore_user_abort，必须用新的同步机制！'); 
if(stripos(ini_get('disable_functions'),'set_time_limit')===false)@set_time_limit(SYNCCSTIME-10);
$_MMVAR_b9cd684c6d29890599=_MMFUN_cc3cf510bffd973b95('p','get','no','0');
$_MMVAR_a09233fd7489fad857=_MMFUN_cc3cf510bffd973b95('clear','get','int',0);
if($_MMVAR_b9cd684c6d29890599==HTTPKEY){
echo str_repeat('1',8192);
ob_flush();       
flush();
_MMFUN_0237c0b82dbcba1e09('↓↓↓↓↓↓↓↓↓↓↓开始同步！');
if($_MMVAR_a09233fd7489fad857==1) _MMFUN_769b2e7965e0440f52(0);
_MMFUN_0a93b06747e440ec2d();	
}	
exit('nopassword');

Case "unlock":
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
$_MMVAR_2e20ef2f23c00368f7=_MMFUN_fedad267f3bb7f4219();
if(defined('SAE_MYSQL_USER')!=true)
file_put_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/syncerr.txt',0);
if($_MMVAR_2e20ef2f23c00368f7['isrun']==1){
if($_MMVAR_2e20ef2f23c00368f7['isclose']==0){
if($_MMVAR_2e20ef2f23c00368f7['starttime']+300<time()){
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[解锁并启动]，操作成功，任务执行中，本次操作可能会操成作协重复执行！</font>');
_MMFUN_6da5ed7d3a356dcac7("解锁并启动成功，如果你没有查出上次同步意外终止的原因并修正，同步任务可能会再次意外终止！");
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_taskset` SET `isclose`=0,`isrun`=0 where `id`=1','notsync'); 
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[解锁并启动]，操作成功，上次同步长时间未停止，现已正常！</font>');
_MMFUN_6da5ed7d3a356dcac7("解锁并启动成功，上次同步长时间未停止，现已正常！");

}			
}else if($_MMVAR_2e20ef2f23c00368f7['isclose']==2){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_taskset` SET `isclose`=0,`isrun`=0 where `id`=1','notsync'); 
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[解锁并启动]，操作成功，如果你没有查出上次同步意外终止的原因并修正，同步任务可能会再次意外终止！</font>');
_MMFUN_6da5ed7d3a356dcac7("解锁并启动成功，如果你没有查出上次同步意外终止的原因并修正，同步任务可能会再次意外终止！");			
}else if($_MMVAR_2e20ef2f23c00368f7['isclose']==3){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_taskset` SET `isclose`=0,`isrun`=0 where `id`=1','notsync'); 
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[解锁并启动]，原状态：任务关闭，但是在执行中？现已正常！</font>');
_MMFUN_6da5ed7d3a356dcac7("解锁并启动成功，原状态：任务关闭，但是在执行中？现已正常！");
}        
}else{
if($_MMVAR_2e20ef2f23c00368f7['isclose']==3){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_taskset` SET `isclose`=0,`isrun`=0 where `id`=1','notsync'); 
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[解锁并启动]，操作成功，仅启动任务，无需解锁！</font>');
_MMFUN_6da5ed7d3a356dcac7("操作成功，仅启动任务，无需解锁！");
}else if($_MMVAR_2e20ef2f23c00368f7['isclose']==2){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_taskset` SET `isclose`=0,`isrun`=0 where `id`=1','notsync'); 
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[解锁并启动]，操作成功，如果上次同步是意外终止的，并且你还没查出原因和修正，同步任务可能会再次意外终止！</font>');
_MMFUN_6da5ed7d3a356dcac7("如果上次同步是意外终止的，并且你还没查出原因和修正，任务可能会再次意外终止！");			
}else{
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[解锁并启动]，无需解锁并启动，任务正常运行中！</font>');
_MMFUN_6da5ed7d3a356dcac7("无需解锁并启动，任务正常运行中！");			
}
}
break;
Case "taskslog":
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
_MMFUN_6fbb1b9c753c2fb7d7();
break;
Case "tasksstop":
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");			
$_MMVAR_2e20ef2f23c00368f7=_MMFUN_fedad267f3bb7f4219();
if(intval($_MMVAR_2e20ef2f23c00368f7['isclose'])==2){	
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[关闭系统任务]，上次同步出现意外错误，系统任务已于本次操作前停止！</font>');
_MMFUN_6da5ed7d3a356dcac7("上次同步意外终止，请查明原因，系统任务已于本次操作前停止！");
}
if(intval($_MMVAR_2e20ef2f23c00368f7['isrun'])==1)	{
if($_MMVAR_2e20ef2f23c00368f7['starttime']+SYNCCSTIME>time()){
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[关闭系统任务]，正在同步数据，请稍后操作！</font>');
_MMFUN_6da5ed7d3a356dcac7("正在同步数据，请稍后操作！");
}
}
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_taskset` SET `isclose`=3 where `id`=1','notsync'); 
_MMFUN_0237c0b82dbcba1e09('<font color=#0825D6>管理操作[关闭系统任务]，操作成功！</font>');
_MMFUN_6da5ed7d3a356dcac7("已关闭系统任务！");
break;
Case "up_date":
if(stripos(ini_get('disable_functions'),'set_time_limit')===false)@set_time_limit(90);
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
_MMFUN_769b2e7965e0440f52(1);
break;
default:
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
_MMFUN_e2839677d485d00cfa();
}

function _MMFUN_6fbb1b9c753c2fb7d7(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_7b6896960481a4d007;

$_MMVAR_90502be476664717ad=50;
$_MMVAR_0ecbe44a2d4417e190=array('action'=>$_MMVAR_7b6896960481a4d007);
$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',0);	
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_tasklog';	
$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
$_MMVAR_4a134686cf4c02ac8d=$_MMVAR_4fa302d033574933a4;
$_MMVAR_4fa302d033574933a4=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
if($_MMVAR_2dc0051b4a3fa32b83==0)
$_MMVAR_2dc0051b4a3fa32b83=$_MMVAR_4fa302d033574933a4;
$_MMVAR_6acb770a66d220e25e.=' order by id asc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;
include KS_DIR.'/inc/runtime.php';
$_MMVAR_77e413c0c731500d10= new runtime;
$_MMVAR_77e413c0c731500d10->_MMFUN_75ca9dc8ef905464ef(); 
$_MMVAR_3fac05200815e9252b=$_MMVAR_6acb770a66d220e25e;
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
$_MMVAR_77e413c0c731500d10->_MMFUN_2ff52b47fa1890bb43();
?>


<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="4">系统同步日志,<?php echo $_MMVAR_4a134686cf4c02ac8d?>条</td>
</tr>
<tr class="tb_header">
<td width=50>ID</td>
<td width=120>时间</td>
<td width=810>备注</td>
</tr>

<?php	
if(!empty($_MMVAR_5a0f5f64cd15c205df)){			
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;
?><tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">

<td><?php echo $_MMVAR_9a036496d66f59815a['id']?></td>
<td><?php echo date('Y-m-d H:i:s',$_MMVAR_9a036496d66f59815a['addtime'])?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['intro']?></td>
</tr>
<?php } 
}?><tr class="tb_header">
<td colspan="3" align=right><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</table>
<script language="javascript" src="<?php echo _MMFUN_dfbc78476298e0e159() ?>/js/keylist.js"></script>
<?php
}


function _MMFUN_e2839677d485d00cfa(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);
$_MMVAR_90502be476664717ad=20;
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_sql';	
$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
$_MMVAR_4fa302d033574933a4=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
$_MMVAR_6acb770a66d220e25e.=' order by id asc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
?>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="4">数据变更日志</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>时间</td>
<td>SQL</td>
<td>删除</td>
</tr>
<?php
if(!empty($_MMVAR_5a0f5f64cd15c205df)){		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
?>
<tr class="tb_tr1">
<td><?php echo $_MMVAR_9a036496d66f59815a['id'] ?></td>
<td><?php echo date('Y-m-d H:i:s',$_MMVAR_9a036496d66f59815a['addtime'])?></td>
<td><?php echo htmlspecialchars($_MMVAR_9a036496d66f59815a['sqltext'])?></td>
<td width=40><a href=?action=del&id=<?php echo $_MMVAR_9a036496d66f59815a['id']?>>删除</a></td>
</tr>
<?php
}
}
?>
<tr class="tb_tr1">
<td colspan="4"><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,array())?></td>
</tr>

</table>	
<?php
}

function _MMFUN_d66f119ad4ffa669b3(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','','int',0);
$_MMVAR_a9ecec9b36cd18d921=_MMFUN_cc3cf510bffd973b95('op','get','int',0);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from '.TNREG.'_sql where id ='.$_MMVAR_7ca1659d6f01cb3410,'nosync');
_MMFUN_6da5ed7d3a356dcac7("删除成功!",'sync.php?rand='.time());

}

function _MMFUN_769b2e7965e0440f52($_MMVAR_7dc729a17fae44e21f=0){
global $_MMVAR_9f95914834184aeeae;
include(KS_DIR.'/inc/add_table_mfkey.php');
chdir('../ksreg_session');	
file_put_contents(KS_SESSIONDIR.'/ses not.del','1');
foreach (glob("sess*") as $_MMVAR_07e79bfae22cb3717a) {
@unlink($_MMVAR_07e79bfae22cb3717a);
}
$_MMVAR_ee3217bcfa5dd99d39=_MMFUN_4152bee70f1d9bea3a();
$_MMVAR_ee3217bcfa5dd99d39=str_replace("\r\n","<br>",$_MMVAR_ee3217bcfa5dd99d39);
if($_MMVAR_ee3217bcfa5dd99d39==''){
if($_MMVAR_7dc729a17fae44e21f==0){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `clearday`='.date('d').' where id=1','notsync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET `phpmftimes`=20000 ','sync');			
}	
$_MMVAR_ee3217bcfa5dd99d39="清理操作完成!";
}
if($_MMVAR_7dc729a17fae44e21f==0){
_MMFUN_0237c0b82dbcba1e09($_MMVAR_ee3217bcfa5dd99d39);
return '';
}

_MMFUN_6da5ed7d3a356dcac7($_MMVAR_ee3217bcfa5dd99d39);
}

function _MMFUN_0a93b06747e440ec2d(){
global $_MMVAR_abb6c66b467898e5c7,$_MMVAR_fd562bda169cdce28d,$_MMVAR_9f95914834184aeeae;
ob_clean();	

$_MMVAR_bc59f0e83bcdc1e6d9=New mysql_cls;
_MMFUN_0237c0b82dbcba1e09('开始连接备用数据库');	
$_MMVAR_5dcaa8726c46821dc0=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_06067bafeb84eaf0af($_MMVAR_fd562bda169cdce28d);	
if($_MMVAR_5dcaa8726c46821dc0=='success'){
_MMFUN_0237c0b82dbcba1e09('连接备用服务器'.$_MMVAR_fd562bda169cdce28d['dbhost'].'数据库'.$_MMVAR_fd562bda169cdce28d['dbname'].'成功');
}else{
_MMFUN_0237c0b82dbcba1e09('↑↑↑↑↑↑↑↑↑↑↑<font color=#ff0000>连接备用数据库失败：'.$_MMVAR_5dcaa8726c46821dc0.'</font>');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isrun`=0,`endtime`='.time().',`syncintro`=\'连接备用数据库失败，15分钟后重新检查\' where id=1','notsync');	
exit();
}
$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update from `'.TNREG.'_taskset` set `starttime`='.time().',`syncintro`=\'主服连接本服成功\' where `id`=1','notsync');



$_MMVAR_e6830d7d7ae19283c3=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_b11d2ab529d243ceeb('select * from `'.TNREG.'_temppay`');
if(!empty($_MMVAR_e6830d7d7ae19283c3)){
_MMFUN_0237c0b82dbcba1e09('<font color=blue><b>发现备服有'.count($_MMVAR_e6830d7d7ae19283c3).'条临时卡相关信息需要处理</b></font>');
_MMFUN_0ff8b6bd33f0151d69();
foreach ($_MMVAR_e6830d7d7ae19283c3 as $_MMVAR_9a036496d66f59815a) {
_MMFUN_0ff8b6bd33f0151d69();
if($_MMVAR_9a036496d66f59815a['basekey']=='haveaddtempkey'){
$_MMVAR_7ce34e40d966145ea2=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_9a036496d66f59815a['tablename'].'` where `int2`=1','notsync');
if($_MMVAR_7ce34e40d966145ea2!==false){
_MMFUN_0237c0b82dbcba1e09('备服表'.$_MMVAR_9a036496d66f59815a['tablename'].'里的所有临时卡删除成功');
}else{
_MMFUN_0237c0b82dbcba1e09('备服表'.$_MMVAR_9a036496d66f59815a['tablename'].'里的所有临时卡删除<font color=#ff0000>失败</font>');					
}
$_MMVAR_38ac4be418b29aee4a=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_temppay` where `id`='.$_MMVAR_9a036496d66f59815a['id'],'notsync');
if($_MMVAR_38ac4be418b29aee4a!==false){
_MMFUN_0237c0b82dbcba1e09(TNREG.'_temppay表记录有添加临时卡的表名记录删除成功');
}else{
_MMFUN_0237c0b82dbcba1e09(TNREG.'_temppay表记录有添加临时卡的表名记录删除<font color=#ff0000>失败</font>');
}
continue;
}

$_MMVAR_7040e149ada26e9f02=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_9a036496d66f59815a['tablename'].'` where `keys`=\''.$_MMVAR_9a036496d66f59815a['basekey'].'\'');
if(!empty($_MMVAR_7040e149ada26e9f02)){
$_MMVAR_755bcfb505b222b07a=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.$_MMVAR_9a036496d66f59815a['tablename'].'` SET `cday`=\''.$_MMVAR_7040e149ada26e9f02['cday'].'\',`activetime`='.$_MMVAR_7040e149ada26e9f02['activetime'].',`endtime`='.$_MMVAR_7040e149ada26e9f02['endtime'].',`bdcode`=\''.$_MMVAR_7040e149ada26e9f02['bdcode'].'\' where `keys`=\''.$_MMVAR_9a036496d66f59815a['basekey'].'\'','notsync');
if($_MMVAR_755bcfb505b222b07a!==false){
_MMFUN_0237c0b82dbcba1e09('被临时卡充值的帐号('.$_MMVAR_7040e149ada26e9f02['cusername'].'-'.$_MMVAR_7040e149ada26e9f02['keys'].')资料已被主服同步成功');
}else{
_MMFUN_0237c0b82dbcba1e09('被临时卡充值的帐号('.$_MMVAR_7040e149ada26e9f02['cusername'].'-'.$_MMVAR_7040e149ada26e9f02['keys'].')资料同步到主服<font color=#ff0000>失败</font>');
}
}
}
_MMFUN_0237c0b82dbcba1e09('------备服临时卡信息处理完毕!');
unset($_MMVAR_e6830d7d7ae19283c3);
}


//查询备服激活记录更新主服 `userid`,`xjlid`,`bdcode`,`addtime`,`keys`
$_MMVAR_777a31f8c461605658=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_bdlogs order by id asc');	
_MMFUN_0ff8b6bd33f0151d69();	
if(!empty($_MMVAR_777a31f8c461605658)){
_MMFUN_0237c0b82dbcba1e09('备服发现注册卡激活记录');	
foreach ($_MMVAR_777a31f8c461605658 as $_MMVAR_fc8b1bbe7498a4f269) {		
_MMFUN_0ff8b6bd33f0151d69();
$_MMVAR_84e8f6a0c02914a8e0=TNREG.'_keys_'.$_MMVAR_fc8b1bbe7498a4f269['userid'].'_'.$_MMVAR_fc8b1bbe7498a4f269['xjlid'];
$_MMVAR_59a0f17735c2ba1f14=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_84e8f6a0c02914a8e0.'` where `keys`=\''.$_MMVAR_fc8b1bbe7498a4f269['keys'].'\'');	
if(empty($_MMVAR_59a0f17735c2ba1f14)){
_MMFUN_0237c0b82dbcba1e09('<font color=blue>主服未发现卡'.$_MMVAR_fc8b1bbe7498a4f269['keys'].'</font>');
}else{			

if( (int)($_MMVAR_59a0f17735c2ba1f14['activetime']) > (int)($_MMVAR_fc8b1bbe7498a4f269['addtime']) ){
_MMFUN_0237c0b82dbcba1e09("userid:".$_MMVAR_fc8b1bbe7498a4f269['userid'].',xjlid:'.$_MMVAR_fc8b1bbe7498a4f269['xjlid'].',keys:'.$_MMVAR_fc8b1bbe7498a4f269['keys'].' 主备全激活过->备服先激活->更新主服激活日期为'.date('Y-m-d H:i',$_MMVAR_fc8b1bbe7498a4f269['addtime']));
$_MMVAR_3620572969b1f91220=$_MMVAR_fc8b1bbe7498a4f269['addtime']+$_MMVAR_59a0f17735c2ba1f14['cday']*86400;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_84e8f6a0c02914a8e0.'` set bdcode=\''.$_MMVAR_fc8b1bbe7498a4f269['bdcode'].'\', activetime='.$_MMVAR_fc8b1bbe7498a4f269['addtime'].', endtime='.$_MMVAR_3620572969b1f91220.' where id='.$_MMVAR_59a0f17735c2ba1f14['id'],'notsync');
}elseif( (int)($_MMVAR_59a0f17735c2ba1f14['activetime']) < (int)($_MMVAR_fc8b1bbe7498a4f269['addtime']) ){
if( (int)($_MMVAR_59a0f17735c2ba1f14['activetime']) !==0 ){

_MMFUN_0237c0b82dbcba1e09("userid:".$_MMVAR_fc8b1bbe7498a4f269['userid'].',xjlid:'.$_MMVAR_fc8b1bbe7498a4f269['xjlid'].',keys:'.$_MMVAR_fc8b1bbe7498a4f269['keys'].' 主备全激活过->主服先激活->更新备服激活日期为'.date('Y-m-d H:i:s',$_MMVAR_59a0f17735c2ba1f14['activetime']));
$_MMVAR_3620572969b1f91220=$_MMVAR_59a0f17735c2ba1f14['activetime']+$_MMVAR_59a0f17735c2ba1f14['cday']*86400;
$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_84e8f6a0c02914a8e0.'` set bdcode=\''.$_MMVAR_59a0f17735c2ba1f14['bdcode'].'\', activetime='.$_MMVAR_59a0f17735c2ba1f14['activetime'].', endtime='.$_MMVAR_3620572969b1f91220.' where id='.$_MMVAR_fc8b1bbe7498a4f269['id'],'notsync');
}else{

_MMFUN_0237c0b82dbcba1e09("userid:".$_MMVAR_fc8b1bbe7498a4f269['userid'].',xjlid:'.$_MMVAR_fc8b1bbe7498a4f269['xjlid'].',keys:'.$_MMVAR_fc8b1bbe7498a4f269['keys'].' 主服未激活->更新主服激活日期为'.date('Y-m-d H:i:s',$_MMVAR_fc8b1bbe7498a4f269['addtime']));
$_MMVAR_3620572969b1f91220=$_MMVAR_fc8b1bbe7498a4f269['addtime']+$_MMVAR_59a0f17735c2ba1f14['cday']*86400;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_84e8f6a0c02914a8e0.'` set bdcode=\''.$_MMVAR_fc8b1bbe7498a4f269['bdcode'].'\', activetime='.$_MMVAR_fc8b1bbe7498a4f269['addtime'].', endtime='.$_MMVAR_3620572969b1f91220.' where id='.$_MMVAR_59a0f17735c2ba1f14['id'],'notsync');
}	
}else{
_MMFUN_0237c0b82dbcba1e09($_MMVAR_59a0f17735c2ba1f14['activetime'].','.$_MMVAR_fc8b1bbe7498a4f269['addtime']);
}

}
$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_bdlogs` where `id` ='.$_MMVAR_fc8b1bbe7498a4f269['id'],'notsync');
_MMFUN_0237c0b82dbcba1e09($_MMVAR_fc8b1bbe7498a4f269['keys'].'备服激活记录已删除');
}
unset($_MMVAR_777a31f8c461605658);
_MMFUN_0237c0b82dbcba1e09('注册卡激活记录同步完成');

}else{	
_MMFUN_0237c0b82dbcba1e09('备服未发现注册卡激活记录');
}



$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from `'.TNREG.'_sql` order by id asc');
if(empty($_MMVAR_5a0f5f64cd15c205df)){		
_MMFUN_0ff8b6bd33f0151d69();
_MMFUN_0237c0b82dbcba1e09('数据变更日志为空不需要同步数据');	
$_MMVAR_4cc22e106175ce08a3=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isrun`=0,`endtime`='.time().',`syncintro`=\'同步表数据为空不需要同步数据\' where id=1','notsync');
if($_MMVAR_4cc22e106175ce08a3!==false){
_MMFUN_0237c0b82dbcba1e09('当次任务主服结束标志写入成功');
}else{
_MMFUN_0237c0b82dbcba1e09('当次任务主服结束标志写入<font color=#ff0000>失败</font>');
}
$_MMVAR_6e3ddaabb63e040deb=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_taskset` set `endtime`='.time().',`syncintro`=\'主服同步表数据为空不需要同步数据到本服\' where `id`=1','notsync');
if($_MMVAR_6e3ddaabb63e040deb!==false){
_MMFUN_0237c0b82dbcba1e09('当次任务备服结束标志写入成功');
}else{
_MMFUN_0237c0b82dbcba1e09('当次任务备服结束标志写入<font color=#ff0000>失败</font>');
}
_MMFUN_0237c0b82dbcba1e09('↑↑↑↑↑↑↑↑↑↑↑');
exit();
}

foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
_MMFUN_0ff8b6bd33f0151d69();
$_MMVAR_510ba85d0c08c74283=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_9a036496d66f59815a['sqltext']);
if($_MMVAR_510ba85d0c08c74283!==false){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_sql` where `id`='.$_MMVAR_9a036496d66f59815a['id'],'notsync');
}else{
$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update from `'.TNREG.'_taskset` set `endtime`='.time().',`syncintro`=\'同步到日志ID='.$_MMVAR_9a036496d66f59815a['id'].'时出错，任务被终止\' where `id`=1','notsync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isclose`=2,`isrun`=0,`endtime`='.time().',`syncintro`=\'SQLErrId='.$_MMVAR_9a036496d66f59815a['id'].'\' where id=1','notsync');
_MMFUN_0237c0b82dbcba1e09("同步到日志ID=".$_MMVAR_9a036496d66f59815a['id']."时出错，任务被终止，请联系技术支持QQ 8511175！");
_MMFUN_0237c0b82dbcba1e09("↑↑↑↑↑↑↑↑↑↑↑");
exit();
}
}
unset($_MMVAR_5a0f5f64cd15c205df);
if(defined('SAE_MYSQL_USER')!=true)
file_put_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/syncerr.txt',0);
$_MMVAR_4cc22e106175ce08a3=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isrun`=0,`endtime`='.time().',`syncintro`=\'同步完成\' where id=1','notsync');
if($_MMVAR_4cc22e106175ce08a3!==false){
_MMFUN_0237c0b82dbcba1e09('当次任务主服结束标志写入成功');
}else{
_MMFUN_0237c0b82dbcba1e09('当次任务主服结束标志写入<font color=#ff0000>失败</font>');
}
$_MMVAR_6e3ddaabb63e040deb=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_taskset` set `endtime`='.time().',`syncintro`=\'主服数据同步到本服成功\' where `id`=1','notsync');
if($_MMVAR_6e3ddaabb63e040deb!==false){
_MMFUN_0237c0b82dbcba1e09('当次任务备服结束标志写入成功');
}else{
_MMFUN_0237c0b82dbcba1e09('当次任务备服结束标志写入<font color=#ff0000>失败</font>');
}
_MMFUN_0237c0b82dbcba1e09('↑↑↑↑↑↑↑↑↑↑↑');
$_MMVAR_bc59f0e83bcdc1e6d9->close();
exit();
}

echo COPYRIGHT;

function _MMFUN_0ff8b6bd33f0151d69(){
$_MMVAR_d1b2eeb26468dbfeea=file_get_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/sync.txt');
if(time()-$_MMVAR_d1b2eeb26468dbfeea>5)
file_put_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/sync.txt',time());
}

?>
</body>
</html>