<?php 
	//生成日期:2011-11-11 16点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!",'report');
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');
$_MMVAR_1e1161d84868ce26e2='';
switch ($_MMVAR_7b6896960481a4d007){
Case "mselect":
_MMFUN_f86a5a3ad59a73e74f();
break;
Case "save":
_MMFUN_1bbaa45acd7ed1cd49();
break;
default:
_MMFUN_6da5ed7d3a356dcac7("参数错误1!");
}
function _MMFUN_1bbaa45acd7ed1cd49(){
$_MMVAR_b4f6e217a2569bae34=_MMFUN_cc3cf510bffd973b95('optype','post','int','1');
switch ($_MMVAR_b4f6e217a2569bae34){
Case 1:
_MMFUN_482105420b151a212d();
break;
Case 2:
_MMFUN_758f8a48591addd77a();
break;
Case 3:
_MMFUN_ab8d8db1aa06c97a12();
break;
Case 4:
_MMFUN_699c21348e5237c636();
break;
Case 5:
_MMFUN_a3a850e4496dc4fddc();
break;
default:
_MMFUN_6da5ed7d3a356dcac7("参数错误2!");
}
}

function _MMFUN_482105420b151a212d(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_1e1161d84868ce26e2;		
$_MMVAR_90502be476664717ad=20;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件未找到!",'report');

$_MMVAR_6acb770a66d220e25e='select `keys`, `cday` from `'.TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.'` where cday<>0 ';
$_MMVAR_6acb770a66d220e25e.=_MMFUN_05b1a14009297dadeb($_MMVAR_e9ffef5bdc7675ff63);

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);

echo '<table width=\'980\' style=\'border:0\' border=\'0\' cellpadding=\'0\' style=\'margin-top:20px\' align=\'center\'><tr><td>';
echo '<textarea align=center style=\'width:980px;height:300px\'>';
echo '软件名：'.$_MMVAR_e9ffef5bdc7675ff63['xjlname']."\r\n";
echo '导出日期：'.date('y-m-d H:i:s',time())."\r\n";
echo "\r\n";
echo $_MMVAR_1e1161d84868ce26e2."\r\n";
echo '共有：'.count($_MMVAR_5a0f5f64cd15c205df)."个\r\n";
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
echo  $_MMVAR_9a036496d66f59815a['keys']."\t".$_MMVAR_9a036496d66f59815a['cday']."\r\n"; 
}	
echo '</textarea></td></tr></table>';	
}

function _MMFUN_758f8a48591addd77a(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_1e1161d84868ce26e2;		
$_MMVAR_90502be476664717ad=20;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件未找到!",'report');

$_MMVAR_6acb770a66d220e25e='delete from `'.TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.'` where cday<>0 ';
$_MMVAR_6acb770a66d220e25e.=_MMFUN_05b1a14009297dadeb($_MMVAR_e9ffef5bdc7675ff63,1);


$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e,'sync');
if($_MMVAR_5a0f5f64cd15c205df!==false)
_MMFUN_6da5ed7d3a356dcac7("执行语句".$_MMVAR_6acb770a66d220e25e."成功!",'report');
_MMFUN_6da5ed7d3a356dcac7("执行语句".$_MMVAR_6acb770a66d220e25e."失败!",'report');
}


function _MMFUN_ab8d8db1aa06c97a12(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_1e1161d84868ce26e2;		
$_MMVAR_90502be476664717ad=20;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件未找到!",'report');

$_MMVAR_6acb770a66d220e25e='UPDATE `'.TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.'` SET bdcode=\'1001\' where bdcode<>\'1001\' ';
$_MMVAR_6acb770a66d220e25e.=_MMFUN_05b1a14009297dadeb($_MMVAR_e9ffef5bdc7675ff63);


$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e,'sync');
if($_MMVAR_5a0f5f64cd15c205df!==false)
_MMFUN_6da5ed7d3a356dcac7("执行语句".$_MMVAR_6acb770a66d220e25e."成功!",'report');
_MMFUN_6da5ed7d3a356dcac7("执行语句".$_MMVAR_6acb770a66d220e25e."失败!",'report');
}

function _MMFUN_699c21348e5237c636(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_1e1161d84868ce26e2;		
$_MMVAR_90502be476664717ad=20;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件未找到!",'report');

$_MMVAR_6acb770a66d220e25e='UPDATE `'.TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.'` SET `normal`=0 where `normal`<>0 ';
$_MMVAR_6acb770a66d220e25e.=_MMFUN_05b1a14009297dadeb($_MMVAR_e9ffef5bdc7675ff63);

//exit($_MMVAR_6acb770a66d220e25e);
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e,'sync');
if($_MMVAR_5a0f5f64cd15c205df!==false)
_MMFUN_6da5ed7d3a356dcac7("执行语句".$_MMVAR_6acb770a66d220e25e."成功!",'report');
_MMFUN_6da5ed7d3a356dcac7("执行语句".$_MMVAR_6acb770a66d220e25e."失败!",'report');
}

function _MMFUN_a3a850e4496dc4fddc(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_1e1161d84868ce26e2;		
$_MMVAR_90502be476664717ad=20;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件未找到!",'report');

$_MMVAR_6acb770a66d220e25e='UPDATE `'.TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.'` SET `normal`=1 where `normal`<>1 ';
$_MMVAR_6acb770a66d220e25e.=_MMFUN_05b1a14009297dadeb($_MMVAR_e9ffef5bdc7675ff63);

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e,'sync');
_MMFUN_6da5ed7d3a356dcac7("执行语句".$_MMVAR_6acb770a66d220e25e."成功!",'report');
}


function _MMFUN_05b1a14009297dadeb($_MMVAR_e9ffef5bdc7675ff63,$_MMVAR_22fd5196e6b580a247=0){
global $_MMVAR_1e1161d84868ce26e2;
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_6356c35a3d01d5ca1d=_MMFUN_cc3cf510bffd973b95('sagentid','','int',-2);
$_MMVAR_de69f1e800e4ff66bd=_MMFUN_cc3cf510bffd973b95('normal','','int',-1);
$_MMVAR_063ed8684611fefba6=_MMFUN_cc3cf510bffd973b95('ispay','','int',-1);
$_MMVAR_ed66ae51ae5556faa2=_MMFUN_cc3cf510bffd973b95('isused','','int',-1);
$_MMVAR_cc1bdfbaa410317619=_MMFUN_cc3cf510bffd973b95('addtime1','','sql','');
$_MMVAR_d5be70f2213fa9e0d6=_MMFUN_cc3cf510bffd973b95('addtime3','','sql','');
$_MMVAR_e93441182723b4d297=_MMFUN_cc3cf510bffd973b95('activetime1','','sql','');
$_MMVAR_5d75303b3aacbb1d8a=_MMFUN_cc3cf510bffd973b95('activetime3','','sql','');
$_MMVAR_a7e472c925e29b3c58=_MMFUN_cc3cf510bffd973b95('endtime1','','sql','');
$_MMVAR_ca1a99cd8f732c58d7=_MMFUN_cc3cf510bffd973b95('endtime3','','sql','');
$_MMVAR_3e9f3e4491a4bd3e84=_MMFUN_cc3cf510bffd973b95('cday1','','sql','');
$_MMVAR_49c0e59bd2ba32162e=_MMFUN_cc3cf510bffd973b95('cday3','','sql','');
$_MMVAR_e23c7e328f1c3356dc=_MMFUN_cc3cf510bffd973b95('ext1','','sql','');

$_MMVAR_1e1161d84868ce26e2="\r\n";
$_MMVAR_6acb770a66d220e25e='';	
if(!empty($_MMVAR_e23c7e328f1c3356dc)){
$_MMVAR_6acb770a66d220e25e.=' and `ext1` like \''.$_MMVAR_e23c7e328f1c3356dc.'%\' ';
$_MMVAR_1e1161d84868ce26e2.='标签='.$_MMVAR_e23c7e328f1c3356dc."\r\n";
}
switch ($_MMVAR_6356c35a3d01d5ca1d){
Case -2:
break;
Case -1:
$_MMVAR_6acb770a66d220e25e.=' and `agentid` >0 ';
$_MMVAR_1e1161d84868ce26e2.="所有代理的卡\r\n";
break;
default:
$_MMVAR_6acb770a66d220e25e.=' and `agentid`='.$_MMVAR_6356c35a3d01d5ca1d.' ';
if($_MMVAR_6356c35a3d01d5ca1d==0){
$_MMVAR_1e1161d84868ce26e2.="作者的卡\r\n";
}else{
$_MMVAR_1e1161d84868ce26e2.='代理ID为'.$_MMVAR_6356c35a3d01d5ca1d."的卡\r\n";
}
}
if($_MMVAR_de69f1e800e4ff66bd != -1){
$_MMVAR_6acb770a66d220e25e.=' and `normal`='.$_MMVAR_de69f1e800e4ff66bd;
if($_MMVAR_de69f1e800e4ff66bd==1){
$_MMVAR_1e1161d84868ce26e2.="未被冻结的卡\r\n";		
}elseif($_MMVAR_de69f1e800e4ff66bd=0){
$_MMVAR_1e1161d84868ce26e2.="被作者冻结的卡\r\n";		
}else{
$_MMVAR_1e1161d84868ce26e2.="被代理冻结的卡\r\n";
}
}

if($_MMVAR_063ed8684611fefba6 != -1){
$_MMVAR_6acb770a66d220e25e.=' and `ispay`='.$_MMVAR_063ed8684611fefba6.'';
if($_MMVAR_063ed8684611fefba6==1){
$_MMVAR_1e1161d84868ce26e2.="已付款的卡\r\n";		
}else{
$_MMVAR_1e1161d84868ce26e2.="未付款的卡\r\n";		
}
}

if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
if($_MMVAR_ed66ae51ae5556faa2 != -1){
$_MMVAR_6acb770a66d220e25e.=' and `isused`='.$_MMVAR_ed66ae51ae5556faa2.'';			
if($_MMVAR_ed66ae51ae5556faa2==1){
$_MMVAR_1e1161d84868ce26e2.="已充值的卡\r\n";		
}elseif($_MMVAR_ed66ae51ae5556faa2==2){
$_MMVAR_1e1161d84868ce26e2.="用户基卡\r\n";		
}else{
$_MMVAR_1e1161d84868ce26e2.="未充值的卡\r\n";			
}
}	
}
if($_MMVAR_cc1bdfbaa410317619!='' && $_MMVAR_d5be70f2213fa9e0d6 != ''){
$_MMVAR_1e1161d84868ce26e2.="添加日期大于".$_MMVAR_cc1bdfbaa410317619."，小于".$_MMVAR_d5be70f2213fa9e0d6."\r\n";	
$_MMVAR_cc1bdfbaa410317619=strtotime($_MMVAR_cc1bdfbaa410317619);
$_MMVAR_d5be70f2213fa9e0d6=strtotime($_MMVAR_d5be70f2213fa9e0d6);
$_MMVAR_6acb770a66d220e25e.=' and `addtime`>'.$_MMVAR_cc1bdfbaa410317619.' and  `addtime`<'.$_MMVAR_d5be70f2213fa9e0d6.'';
}
if($_MMVAR_e93441182723b4d297!='' && $_MMVAR_5d75303b3aacbb1d8a != ''){
$_MMVAR_1e1161d84868ce26e2.="激活日期大于".$_MMVAR_e93441182723b4d297."，小于".$_MMVAR_5d75303b3aacbb1d8a."\r\n";	
$_MMVAR_e93441182723b4d297=strtotime($_MMVAR_e93441182723b4d297);
$_MMVAR_5d75303b3aacbb1d8a=strtotime($_MMVAR_5d75303b3aacbb1d8a);
$_MMVAR_6acb770a66d220e25e.=' and `activetime`>'.$_MMVAR_e93441182723b4d297.' and  `activetime`<'.$_MMVAR_5d75303b3aacbb1d8a.'';
}
if($_MMVAR_22fd5196e6b580a247==1){
$_MMVAR_1e1161d84868ce26e2.="到期日期";	
if($_MMVAR_a7e472c925e29b3c58==''){
$_MMVAR_a7e472c925e29b3c58=0;
}else{
$_MMVAR_a7e472c925e29b3c58=strtotime($_MMVAR_a7e472c925e29b3c58);
$_MMVAR_1e1161d84868ce26e2.="大于".$_MMVAR_a7e472c925e29b3c58;	
}
if($_MMVAR_ca1a99cd8f732c58d7==''){
$_MMVAR_1e1161d84868ce26e2.="且一小时前已到期";	
$_MMVAR_ca1a99cd8f732c58d7=time()-3600;
}else{
$_MMVAR_1e1161d84868ce26e2.="小于".$_MMVAR_ca1a99cd8f732c58d7."\r\n";	
$_MMVAR_ca1a99cd8f732c58d7=strtotime($_MMVAR_ca1a99cd8f732c58d7);
}

$_MMVAR_6acb770a66d220e25e.=' and  `endtime`>'.$_MMVAR_a7e472c925e29b3c58.' and  `endtime`<'.$_MMVAR_ca1a99cd8f732c58d7.'';
}

if($_MMVAR_3e9f3e4491a4bd3e84!='' && $_MMVAR_49c0e59bd2ba32162e != ''){
$_MMVAR_1e1161d84868ce26e2.="天数大于".$_MMVAR_3e9f3e4491a4bd3e84."，小于".$_MMVAR_49c0e59bd2ba32162e."\r\n";	
$_MMVAR_6acb770a66d220e25e.=' and `cday`>'.$_MMVAR_3e9f3e4491a4bd3e84.' and  `cday`<'.$_MMVAR_49c0e59bd2ba32162e.'';
}
return $_MMVAR_6acb770a66d220e25e;

}
function _MMFUN_f86a5a3ad59a73e74f(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if($_MMVAR_135a723a975f2e33a2==0){					
$_MMVAR_135a723a975f2e33a2=$_MMVAR_e9ffef5bdc7675ff63[0]['id'];
}

?>
<link rel="stylesheet" href="..<?php echo KS_PATH_PUBLIC?>/date_input.css" type="text/css">
<script type="text/javascript" src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.date_input.js"></script>

<script>
function chkfrom37(){
if($("#optype").val()==2)
if(confirm("确认要执行该删除操作吗？请慎重考虑！")){return true;}else{return false;}
return true;
}	
$(function() {
$(".my_date_input").date_input({addhss:"00:00"});
});
</script>
<form action="?action=save" method="post" target="_self" id="f37" name="f37" onsubmit="return chkfrom37()">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td>所属软件：</td><td><select name="sxjlid" id="sxjlid" style="width:120px;height:22px"><?php
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option ext1='.$_MMVAR_9a036496d66f59815a['ext1'].' value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2){
echo ' selected';
$_MMVAR_e4019df8eca2c2ac2c=$_MMVAR_9a036496d66f59815a['xjlname'];
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;
}
echo '>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
?>
</select></td>
</tr>
<tr class="tb_tr1">
<td>	所属身份：</td><td><select name="sagentid" id="agentid" style="width:120px;height:22px"><?php
$_MMVAR_f87ca4bad6ff9068f9=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_agent where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
echo '<option value=\'-2\' selected>不限</option>';					
echo '<option value=\'0\'>仅自己的</option>';							
echo '<option value=\'-1\'>所有代理的</option>';					
foreach ($_MMVAR_f87ca4bad6ff9068f9 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'].'>'.$_MMVAR_9a036496d66f59815a['agentname'].'</option>';
}
?>
</select></td>
</tr>
<tr class="tb_tr2">
<td>	冻结状态：</td><td><select name="normal" id="normal" style="width:120px;height:22px">
<option value=-1>不限</option>
<option value=1>正常</option>
<option value=0>作者冻结</option>
<option value=2>代理冻结</option>
</select></td>
</tr>
<tr class="tb_tr1">
<td>	付款状态：</td><td><select name="ispay" id="ispay" style="width:120px;height:22px">
<option value=-1>不限</option>
<option value=0>未付款</option>
<option value=1>已付款</option>
</select></td>
</tr>
<tr class="tb_tr2 umode">
<td>	充值卡类：</td><td><select name="isused" id="isused" style="width:120px;height:22px">
<option value=-1>不限</option>
<option value=0>未充值的卡</option>
<option value=1>已充值的卡</option>
<option value=2>用户基卡</option>
</select></td>
</tr>
<tr class="tb_tr1">
<td>	添加日期：</td><td>大于<input name="addtime1" type="text" value="" class="inputText2 my_date_input" />  且 小于<input name="addtime3" type="text" value="" class="inputText2 my_date_input" />   *时间格式 年-月-日 时:分</td>
</tr>
<tr class="tb_tr2">
<td>	激活日期：</td><td>大于<input name="activetime1" type="text" value="" class="inputText2 my_date_input" />  且 小于<input name="activetime3" type="text" value="" class="inputText2 my_date_input" />  *时间格式 年-月-日 时:分</td>
</tr>
<tr class="tb_tr1">
<td>	到期日期：</td><td>大于<input name="endtime1" type="text" value="" class="inputText2 my_date_input" />  且 小于<input name="endtime3" type="text" value="" class="inputText2 my_date_input" />  *时间格式 年-月-日 时:分</td>
</tr>
<tr class="tb_tr2">
<td>	天　　数：</td><td>大于<input name="cday1" type="text" value="" class="inputText2" />  且 小于<input name="cday3" type="text" value="" class="inputText2" /></td>
</tr>
<tr class="tb_tr1">
<td>	标　　签：</td><td>等于<input name="ext1" type="text" value="" class="inputText2" /></td>
</tr>
<tr class="tb_tr2" >
<td>执行操作：</td>
<td>	<select name="optype" id="optype" style="width:120px;height:22px">
<option value=1>导出</option>
<option value=3>解绑</option>
<option value=4>冻结</option>
<option value=5>解冻</option>
<optgroup value=5>———</optgroup>
<option value=2>删除</option>
</select><input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" />     </td>
</tr>
</table>
</form>

<script>
$(document).ready(function(){
$("#sxjlid").change(function(){
var ext1=$(this).children("option:selected").attr('ext1');
if(ext1=='user'){$(".umode").show();}else{$(".umode").hide();}
});
var ext1s=$("#sxjlid").children("option:selected").attr('ext1');
if(ext1s=='user'){$(".umode").show();}else{$(".umode").hide();}
});
</script>	
<?php
}

echo COPYRIGHT;
?>
</body>
</html>