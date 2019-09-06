<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
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
echo 'SQL：'.$_MMVAR_6acb770a66d220e25e."\r\n";
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
$_MMVAR_cc1bdfbaa410317619=_MMFUN_cc3cf510bffd973b95('addtime1','','time','2000-01-01');
$_MMVAR_d5be70f2213fa9e0d6=_MMFUN_cc3cf510bffd973b95('addtime3','','time','2000-01-02');
$_MMVAR_3f00e656aa13aa2dd2=_MMFUN_cc3cf510bffd973b95('deltime1','','time','2000-01-01');
$_MMVAR_f02d0f7dc8c0c40928=_MMFUN_cc3cf510bffd973b95('deltime3','','time','2000-01-02');
$_MMVAR_a7e472c925e29b3c58=_MMFUN_cc3cf510bffd973b95('endtime1','','time','2000-01-01');
$_MMVAR_ca1a99cd8f732c58d7=_MMFUN_cc3cf510bffd973b95('endtime3','','time','2000-01-02');
$_MMVAR_e93441182723b4d297=_MMFUN_cc3cf510bffd973b95('activetime1','','time','2000-01-01');
$_MMVAR_5d75303b3aacbb1d8a=_MMFUN_cc3cf510bffd973b95('activetime3','','time','2000-01-02');


$_MMVAR_190dcf0e958f8fa871=_MMFUN_cc3cf510bffd973b95('keystr','','sql','');
$_MMVAR_e23c7e328f1c3356dc=_MMFUN_cc3cf510bffd973b95('ext1','','sql','');
$_MMVAR_b4f6e217a2569bae34=_MMFUN_cc3cf510bffd973b95('optype','','int',1);


$_MMVAR_1e1161d84868ce26e2="\r\n";
$_MMVAR_6acb770a66d220e25e='';	
$_MMVAR_f610e4d1036b9e27f9=' and ';
if(!empty($_MMVAR_190dcf0e958f8fa871)){
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `keys` like \''.$_MMVAR_190dcf0e958f8fa871.'%\' ';
$_MMVAR_f610e4d1036b9e27f9=' and ';
$_MMVAR_1e1161d84868ce26e2.='卡号以'.$_MMVAR_190dcf0e958f8fa871."开头的\r\n";
}
if(!empty($_MMVAR_e23c7e328f1c3356dc)){
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `ext1` like \''.$_MMVAR_e23c7e328f1c3356dc.'%\' ';
$_MMVAR_f610e4d1036b9e27f9=' and ';
$_MMVAR_1e1161d84868ce26e2.='标签以'.$_MMVAR_e23c7e328f1c3356dc."开头的\r\n";
}
switch ($_MMVAR_6356c35a3d01d5ca1d){
Case -2:
break;
Case -1:
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `agentid` >0 ';
$_MMVAR_f610e4d1036b9e27f9=' and ';
$_MMVAR_1e1161d84868ce26e2.="所有代理的卡\r\n";
break;
default:
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `agentid` ='.$_MMVAR_6356c35a3d01d5ca1d;
$_MMVAR_f610e4d1036b9e27f9=' and ';
if($_MMVAR_6356c35a3d01d5ca1d==0){
$_MMVAR_1e1161d84868ce26e2.="作者的卡\r\n";
}else{
$_MMVAR_1e1161d84868ce26e2.='代理ID为'.$_MMVAR_6356c35a3d01d5ca1d."的卡\r\n";
}
}
if($_MMVAR_de69f1e800e4ff66bd != -2){
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `normal`='.$_MMVAR_de69f1e800e4ff66bd;
$_MMVAR_f610e4d1036b9e27f9=' and ';
if($_MMVAR_de69f1e800e4ff66bd==1){
$_MMVAR_1e1161d84868ce26e2.="未被冻结的卡\r\n";		
}elseif($_MMVAR_de69f1e800e4ff66bd=0){
$_MMVAR_1e1161d84868ce26e2.="被作者冻结的卡\r\n";		
}else{
$_MMVAR_1e1161d84868ce26e2.="被代理冻结的卡\r\n";
}
}

if($_MMVAR_063ed8684611fefba6 != -2){
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `ispay`='.$_MMVAR_063ed8684611fefba6;
$_MMVAR_f610e4d1036b9e27f9=' and ';
if($_MMVAR_063ed8684611fefba6==1){
$_MMVAR_1e1161d84868ce26e2.="已付款的卡\r\n";		
}else{
$_MMVAR_1e1161d84868ce26e2.="未付款的卡\r\n";		
}
}

if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
if($_MMVAR_ed66ae51ae5556faa2 != -2){
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `isused`='.$_MMVAR_ed66ae51ae5556faa2.'';	
$_MMVAR_f610e4d1036b9e27f9=' and ';		
if($_MMVAR_ed66ae51ae5556faa2==1){
$_MMVAR_1e1161d84868ce26e2.="已充值的卡\r\n";		
}elseif($_MMVAR_ed66ae51ae5556faa2==2){
$_MMVAR_1e1161d84868ce26e2.="用户基卡\r\n";			
}elseif($_MMVAR_ed66ae51ae5556faa2==3){
$_MMVAR_1e1161d84868ce26e2.="已充值的卡和用户基卡\r\n";		
}else{
$_MMVAR_1e1161d84868ce26e2.="未充值的卡\r\n";			
}
if($_MMVAR_ed66ae51ae5556faa2>0){
if($_MMVAR_3f00e656aa13aa2dd2 != '2000-01-01' && $_MMVAR_f02d0f7dc8c0c40928 != '2000-01-02'){
$_MMVAR_19254df2f83ef51980=strtotime($_MMVAR_3f00e656aa13aa2dd2);
$_MMVAR_dd6f70bf7cbf429917=strtotime($_MMVAR_f02d0f7dc8c0c40928); 
if($_MMVAR_19254df2f83ef51980<$_MMVAR_dd6f70bf7cbf429917){	 
$_MMVAR_1e1161d84868ce26e2.="充值日期大于".$_MMVAR_3f00e656aa13aa2dd2."，小于或等于".$_MMVAR_f02d0f7dc8c0c40928."\r\n";	           
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `deltime`>'.$_MMVAR_19254df2f83ef51980.' and  `deltime`<='.$_MMVAR_dd6f70bf7cbf429917.'';
$_MMVAR_f610e4d1036b9e27f9=' and ';
}
}
}
}	
}

if($_MMVAR_e93441182723b4d297!='2000-01-01' && $_MMVAR_5d75303b3aacbb1d8a != '2000-01-02'){
$_MMVAR_2f1c492c9b8d4accd3=strtotime($_MMVAR_e93441182723b4d297);
$_MMVAR_86ef93892cc44d76dc=strtotime($_MMVAR_5d75303b3aacbb1d8a);
if($_MMVAR_2f1c492c9b8d4accd3<$_MMVAR_86ef93892cc44d76dc){		
$_MMVAR_1e1161d84868ce26e2.="激活日期大于".$_MMVAR_e93441182723b4d297."，小于或等于".$_MMVAR_5d75303b3aacbb1d8a."\r\n";	
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `activetime`>'.$_MMVAR_2f1c492c9b8d4accd3.' and  `activetime`<='.$_MMVAR_86ef93892cc44d76dc.'';
$_MMVAR_f610e4d1036b9e27f9=' and ';
}
}

if($_MMVAR_cc1bdfbaa410317619!='2000-01-01' && $_MMVAR_d5be70f2213fa9e0d6 != '2000-01-02'){
$_MMVAR_1fb2d74ceeb6fce2a9=strtotime($_MMVAR_cc1bdfbaa410317619);
$_MMVAR_46a1eae833dd0644d6=strtotime($_MMVAR_d5be70f2213fa9e0d6);
if($_MMVAR_1fb2d74ceeb6fce2a9<$_MMVAR_46a1eae833dd0644d6){		
$_MMVAR_1e1161d84868ce26e2.="添加日期大于".$_MMVAR_cc1bdfbaa410317619."，小于或等于".$_MMVAR_d5be70f2213fa9e0d6."\r\n";	
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `addtime`>'.$_MMVAR_1fb2d74ceeb6fce2a9.' and  `addtime`<='.$_MMVAR_46a1eae833dd0644d6.'';
$_MMVAR_f610e4d1036b9e27f9=' and ';
}
}

if($_MMVAR_a7e472c925e29b3c58!='2000-01-01' && $_MMVAR_ca1a99cd8f732c58d7 != '2000-01-02'){
$_MMVAR_04d30bb0ce52322049=strtotime($_MMVAR_a7e472c925e29b3c58);
$_MMVAR_67ae836fdc65df3505=strtotime($_MMVAR_ca1a99cd8f732c58d7);
if($_MMVAR_67ae836fdc65df3505>time()) $_MMVAR_67ae836fdc65df3505=time()-3600;
if($_MMVAR_04d30bb0ce52322049<$_MMVAR_67ae836fdc65df3505){
$_MMVAR_1e1161d84868ce26e2.="到期日期大于".$_MMVAR_a7e472c925e29b3c58."，小于或等于".date('Y-m-d H:i ',$_MMVAR_67ae836fdc65df3505)."\r\n";	
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_f610e4d1036b9e27f9.' `endtime`>'.$_MMVAR_04d30bb0ce52322049.' and  `endtime`<='.$_MMVAR_67ae836fdc65df3505.'';
$_MMVAR_f610e4d1036b9e27f9=' and ';		
}
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
<option value=-2>不限</option>
<option value=1>正常</option>
<option value=0>作者冻结</option>
<option value=2>代理冻结</option>
</select></td>
</tr>
<tr class="tb_tr1">
<td>	付款状态：</td><td><select name="ispay" id="ispay" style="width:120px;height:22px">
<option value=-2>不限</option>
<option value=0>未付款</option>
<option value=1>已付款</option>
</select></td>
</tr>
<tr class="tb_tr2 umode">
<td>	充值状态：</td><td><select name="isused" id="isused" style="width:120px;height:22px">
<option value=-2>不限</option>
<option value=0>未充值的卡</option>
<option havetime="1" value=1>已充值的卡</option>
<option havetime="1" value=2>用户基卡</option>
<option havetime="1" value=3>已充值的卡和用户基卡</option>
</select> <span id="deltimediv" style="display:none">充值时间大于<input name="deltime1" type="text" value="" class="inputText2 my_date_input" />  且 小于或等于<input name="deltime3" type="text" value="" class="inputText2 my_date_input" /></span></td>
</tr>
<tr class="tb_tr2">
<td>	卡　　号：</td><td><input name="keystr" type="text" value="" class="inputText" /> 数据库字段名 `keys`<br>  
搜索表达式：`keys` like '搜索的卡号%'<br>
注：从卡号开头匹配的，如 ZABCDE 匹配所有ZABCDE***开头的卡，不能匹配*ZABCDE***的卡<br>
由此而知只输入一个字母就可以配匹卡类： Z匹配周卡 T匹配天卡 Y匹配月卡 J匹配季卡 R匹配半年卡 N匹配年卡 A匹配终身卡</td>
</tr>
<tr class="tb_tr1">
<td>	标　　签：</td><td><input name="ext1" type="text" value="" class="inputText" />数据库字段名 `ext1`<br> 
搜索表达式：`ext1` like '搜索的标签%'<br>
注：从标签开头匹配的，如 Ke0929 匹配标Ke0929***开头的标签 不能匹配*Ke0929***的标签</td>
</tr>
<tr class="tb_tr1">
<td>	添加日期：</td><td>大于<input name="addtime1" type="text" value="" class="inputText2 my_date_input" />  且 小于或等于<input name="addtime3" type="text" value="" class="inputText2 my_date_input" />   要填的话两个都要写</td>
</tr>
<tr class="tb_tr2">
<td>	到期日期：</td><td>大于<input name="endtime1" type="text" value="" class="inputText2 my_date_input" />  且 小于或等于<input name="endtime3" type="text" value="" class="inputText2 my_date_input" />  填的话两个都要写</td>
</tr>
<tr class="tb_tr1 kmode">
<td>	激活日期：</td><td>大于<input name="activetime1" type="text" value="" class="inputText2 my_date_input" />  且 小于或等于<input name="activetime3" type="text" value="" class="inputText2 my_date_input" />  填的话两个都要写</td>
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
if(ext1=='user'){$(".umode").show();$(".kmode").hide();}else{$(".umode").hide();$(".kmode").show();}
});
$("#isused").change(function(){
var havetime=$(this).children("option:selected").attr('havetime');
if(havetime=='1'){$("#deltimediv").show();}else{$("#deltimediv").hide();}
});
var ext1s=$("#sxjlid").children("option:selected").attr('ext1');
if(ext1s=='user'){$(".umode").show();$(".kmode").hide();}else{$(".umode").hide();$(".kmode").show();}
});
</script>	
<?php
}

echo COPYRIGHT;
?>
</body>
</html>