<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php

$_MMVAR_91d37c325c2ce4cbce=false;
$_MMVAR_cf3bf99ecc60e0d603=time();

function _MMFUN_72287d2d89425c2782($_MMVAR_a68c41bd0ae0e8ec59){
$_MMVAR_ae7b0cc151838ec010=unPack("C*",$_MMVAR_a68c41bd0ae0e8ec59);
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_a68c41bd0ae0e8ec59);$_MMVAR_8ff60a7771c3f2c087++){
if($_MMVAR_ae7b0cc151838ec010[$_MMVAR_8ff60a7771c3f2c087]<48 || $_MMVAR_ae7b0cc151838ec010[$_MMVAR_8ff60a7771c3f2c087]>122)
return false;
if($_MMVAR_ae7b0cc151838ec010[$_MMVAR_8ff60a7771c3f2c087]<65 && $_MMVAR_ae7b0cc151838ec010[$_MMVAR_8ff60a7771c3f2c087]>57)
return false;
if($_MMVAR_ae7b0cc151838ec010[$_MMVAR_8ff60a7771c3f2c087]<97 && $_MMVAR_ae7b0cc151838ec010[$_MMVAR_8ff60a7771c3f2c087]>90)
return false;
}
return true;
}


function _MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_46d74b4a61bb259f26){
$_MMVAR_46d74b4a61bb259f26=_MMFUN_902e03433da18c20b6(urldecode($_MMVAR_46d74b4a61bb259f26),"UTF-8","GBK");
return $_MMVAR_46d74b4a61bb259f26;
}


function _MMFUN_c3428c7e6251d22b7d($_MMVAR_46d74b4a61bb259f26,$_MMVAR_f2598fbed56da5bc63=0){
if($_MMVAR_f2598fbed56da5bc63 != 0){
if (get_magic_quotes_gpc())
$_MMVAR_46d74b4a61bb259f26 = stripslashes($_MMVAR_46d74b4a61bb259f26);
$_MMVAR_46d74b4a61bb259f26=urlencode(_MMFUN_902e03433da18c20b6($_MMVAR_46d74b4a61bb259f26,"GBK","UTF-8"));
$_MMVAR_46d74b4a61bb259f26=str_replace('%','\\%',$_MMVAR_46d74b4a61bb259f26);
$_MMVAR_46d74b4a61bb259f26=str_replace('_','\\_',$_MMVAR_46d74b4a61bb259f26);
}else{
$_MMVAR_46d74b4a61bb259f26=urlencode(_MMFUN_902e03433da18c20b6($_MMVAR_46d74b4a61bb259f26,"GBK","UTF-8"));	
}
return $_MMVAR_46d74b4a61bb259f26;
}


function _MMFUN_4bb069f11df5d99e54($_MMVAR_57f384361bee4abe29){
$_MMVAR_57f384361bee4abe29=str_replace('\\','\\\\',$_MMVAR_57f384361bee4abe29);
$_MMVAR_57f384361bee4abe29=str_replace(chr(0),'\0',$_MMVAR_57f384361bee4abe29);
$_MMVAR_57f384361bee4abe29=str_replace('\'','\\\'',$_MMVAR_57f384361bee4abe29);
$_MMVAR_57f384361bee4abe29=str_replace(YH,'\\'.YH,$_MMVAR_57f384361bee4abe29);
return $_MMVAR_57f384361bee4abe29;
}

function _MMFUN_fedad267f3bb7f4219(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select SQL_NO_CACHE * from '.TNREG.'_taskset where id=1');
return $_MMVAR_5a0f5f64cd15c205df;
}
function _MMFUN_0237c0b82dbcba1e09($_MMVAR_1e1161d84868ce26e2){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_6acb770a66d220e25e='INSERT INTO `'.TNREG.'_tasklog` (`addtime`, `intro`) VALUES ('.time().', \''.$_MMVAR_1e1161d84868ce26e2.'\')';
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e,'nosync');
}

function _MMFUN_6287f702166510a45d($_MMVAR_337b1aaafb2f1e4fd9=0){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_1d18b0e853008717be=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
if($_MMVAR_337b1aaafb2f1e4fd9==1 && $_MMVAR_1d18b0e853008717be==0)
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误!");
if(isset($_COOKIE['regmbr'])){
$_MMVAR_a68c41bd0ae0e8ec59=explode('_',$_COOKIE['regmbr']);
if(count($_MMVAR_a68c41bd0ae0e8ec59)!==4)			
return array(0,0,0,0,0,0);

if(_MMFUN_cf8c11a79575861c0c($_MMVAR_a68c41bd0ae0e8ec59[0].'_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_a68c41bd0ae0e8ec59[2]._MMFUN_cccffb711bc5a3fd77())==$_MMVAR_a68c41bd0ae0e8ec59[3]){
$_MMVAR_9c05e2b09b99078ccb=mysql_real_escape_string($_MMVAR_a68c41bd0ae0e8ec59[2]);
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id=' . mysql_real_escape_string($_MMVAR_a68c41bd0ae0e8ec59[1]) . ' and password=\'' . $_MMVAR_9c05e2b09b99078ccb.'\'' );
if(empty($_MMVAR_9a036496d66f59815a))
$_MMVAR_a68c41bd0ae0e8ec59=array(0,0,0,0,0,0);
}else{
$_MMVAR_a68c41bd0ae0e8ec59=array(0,0,0,0,0,0);
}
}else{
$_MMVAR_a68c41bd0ae0e8ec59=array(0,0,0,0,0,0);
}
return array($_MMVAR_a68c41bd0ae0e8ec59[0],$_MMVAR_a68c41bd0ae0e8ec59[1],$_MMVAR_a68c41bd0ae0e8ec59[2],$_MMVAR_a68c41bd0ae0e8ec59[3],$_MMVAR_1d18b0e853008717be,'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_1d18b0e853008717be);
}

function _MMFUN_be508a66d5e356ab9c($_MMVAR_2dec93121014a08afb,$_MMVAR_6ca1d48a32ba884582,$_MMVAR_0a2142beae67222d3e,$_MMVAR_b3cf8fb9a20804256b){
global $_MMVAR_9f95914834184aeeae;
if($_MMVAR_2dec93121014a08afb>2)return 0.01;

$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_keyextkb where softid='.$_MMVAR_6ca1d48a32ba884582.' and keytypeid='.$_MMVAR_0a2142beae67222d3e.' and linknum='.$_MMVAR_b3cf8fb9a20804256b);

if(empty($_MMVAR_9a036496d66f59815a))
return -1;
return $_MMVAR_9a036496d66f59815a['rmb'];

}


function _MMFUN_6f3cdb13acde5824da($_MMVAR_a3b6a631fe599fb2a5){
global $_MMVAR_9f95914834184aeeae;
if($_MMVAR_a3b6a631fe599fb2a5==0)
return array(0,0,0,100,0,0,'普通购卡',0);
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_agent where id=' . mysql_real_escape_string($_MMVAR_a3b6a631fe599fb2a5) );
if(empty($_MMVAR_9a036496d66f59815a))
return array(0,0,0,100,0,0,'普通购卡',0);
return array($_MMVAR_9a036496d66f59815a['id'],$_MMVAR_9a036496d66f59815a['minrmb'],$_MMVAR_9a036496d66f59815a['maxtimes'],$_MMVAR_9a036496d66f59815a['b100'],$_MMVAR_9a036496d66f59815a['xjlcodes'],$_MMVAR_9a036496d66f59815a['nopaytimes'],'代理商：'.$_MMVAR_9a036496d66f59815a['agentname'].'，余额：'.$_MMVAR_9a036496d66f59815a['rmb'].'元，积分：'.$_MMVAR_9a036496d66f59815a['jifeng'],$_MMVAR_9a036496d66f59815a['rmb']);
}

function _MMFUN_28b0167863be78793b($_MMVAR_337b1aaafb2f1e4fd9="cook"){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab;
if(isset($_COOKIE['agent'])){
$_MMVAR_a68c41bd0ae0e8ec59=explode('_',$_COOKIE['agent']);
if(count($_MMVAR_a68c41bd0ae0e8ec59)!==3)			
return array(0,0,0);

if(_MMFUN_cf8c11a79575861c0c($_MMVAR_a68c41bd0ae0e8ec59[0].'_'.$_MMVAR_a68c41bd0ae0e8ec59[1]._MMFUN_cccffb711bc5a3fd77())==$_MMVAR_a68c41bd0ae0e8ec59[2]){
$_MMVAR_9c05e2b09b99078ccb=mysql_real_escape_string($_MMVAR_a68c41bd0ae0e8ec59[1]);
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_agent where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and id=' . mysql_real_escape_string($_MMVAR_a68c41bd0ae0e8ec59[0]) . ' and password=\'' . $_MMVAR_9c05e2b09b99078ccb.'\'' );
if(empty($_MMVAR_9a036496d66f59815a))
$_MMVAR_a68c41bd0ae0e8ec59=array(0,0,0);
}else{
$_MMVAR_a68c41bd0ae0e8ec59=array(0,0,0);
}
}else{
$_MMVAR_a68c41bd0ae0e8ec59=array(0,0,0);
}
return $_MMVAR_a68c41bd0ae0e8ec59;
}

function _MMFUN_d68ee68ae41a1d89f0(){
if(SVRID!=1)
_MMFUN_6da5ed7d3a356dcac7("只能在主服上进行本操作");
}

function _MMFUN_90732a0da1412e2b45($_MMVAR_25fcab801959161988,$_MMVAR_3fc22e00af1642a292){
global $_MMVAR_9f95914834184aeeae;
if(substr($_MMVAR_3fc22e00af1642a292,0,1)=='_')
$_MMVAR_3fc22e00af1642a292=TNREG.$_MMVAR_3fc22e00af1642a292;
$_MMVAR_1ae5c625f8a2656a60=substr($_MMVAR_3fc22e00af1642a292,15,2);
$_MMVAR_873e896ffdbd8840ac=substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,5);
$_MMVAR_fa67f9018df0aef6fd=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys` like \''.$_MMVAR_25fcab801959161988.$_MMVAR_873e896ffdbd8840ac.'%\'');
if(empty($_MMVAR_fa67f9018df0aef6fd)){
$_MMVAR_8c4ad692d25ff6af84=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_order where orderstatus<5 and xjlid='.$_MMVAR_1ae5c625f8a2656a60.' and `regkeys` like \''.$_MMVAR_25fcab801959161988.$_MMVAR_873e896ffdbd8840ac.'%\'');
if(empty($_MMVAR_8c4ad692d25ff6af84)){
return $_MMVAR_25fcab801959161988.$_MMVAR_873e896ffdbd8840ac;
}else{
return _MMFUN_90732a0da1412e2b45($_MMVAR_25fcab801959161988,$_MMVAR_3fc22e00af1642a292);
}
}else{
return _MMFUN_90732a0da1412e2b45($_MMVAR_25fcab801959161988,$_MMVAR_3fc22e00af1642a292);
}
}

function _MMFUN_5b85fb04c723594158($_MMVAR_02ae720af7deab87a6,$_MMVAR_1e720240d1e0489faf){
$_MMVAR_692a476cc999300a3f=strtoupper('000'.dechex($_MMVAR_02ae720af7deab87a6));
$_MMVAR_692a476cc999300a3f=substr($_MMVAR_692a476cc999300a3f,strlen($_MMVAR_692a476cc999300a3f)-3);

$_MMVAR_692a476cc999300a3f=preg_replace($_MMVAR_1e720240d1e0489faf[0], $_MMVAR_1e720240d1e0489faf[1], $_MMVAR_692a476cc999300a3f);
$_MMVAR_692a476cc999300a3f=str_replace('0', 'W-', $_MMVAR_692a476cc999300a3f);
$_MMVAR_40d68d780093b8ea9d=explode('-', $_MMVAR_692a476cc999300a3f);

$_MMVAR_692a476cc999300a3f=str_replace('W',substr('XYZ123456789',mt_rand(0,11),1),$_MMVAR_40d68d780093b8ea9d[0]);	
$_MMVAR_692a476cc999300a3f.=str_replace('W',substr('XYZ123456789',mt_rand(0,11),1),$_MMVAR_40d68d780093b8ea9d[1]);	
$_MMVAR_692a476cc999300a3f.=str_replace('W',substr('XYZ123456789',mt_rand(0,11),1),$_MMVAR_40d68d780093b8ea9d[2]);	

return $_MMVAR_692a476cc999300a3f;
}


function _MMFUN_b3efe1487b20e72104($_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_7dbd3a6f9f3566a84c=0){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_9cfb0c4fff2d828d27='';

if($_MMVAR_7dbd3a6f9f3566a84c==0){
$_MMVAR_f87ca4bad6ff9068f9=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select `vipkeynums`,`key1num`,`key2num` from `'.TNREG.'_user` where userid='.$_MMVAR_d6858a6d9e9ee80bab);
return Array($_MMVAR_f87ca4bad6ff9068f9['key1num'],$_MMVAR_f87ca4bad6ff9068f9['key2num']);
}
$_MMVAR_f87ca4bad6ff9068f9=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_d6858a6d9e9ee80bab);

$_MMVAR_46c9fedfc2fa212240=0;$_MMVAR_42d5b52853494f8afe=0;$_MMVAR_c4367accfe4fd6b84c=0;$_MMVAR_5d796a8d993d5495af=0;$_MMVAR_ddfc6ac724b3bc0cb2=0;$_MMVAR_18aad5f28bbd43774c=0;$_MMVAR_95cf651d5a7299f838=0;$_MMVAR_9d238e58b83b51de12=0;$_MMVAR_fa6a2f63d550c641ef=0;$_MMVAR_8807b1fa840d4425ca=0;$_MMVAR_409716ac1f8b39356e=0;
foreach ($_MMVAR_f87ca4bad6ff9068f9 as $_MMVAR_c13b018f2d29bfc17d) {
$_MMVAR_f6abeba96baacf29ce=TNREG.'_keys_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_c13b018f2d29bfc17d['id'];

if($_MMVAR_c13b018f2d29bfc17d['ext1']=='user'){
$_MMVAR_c098757b35b2a80f66=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where isused=2');
$_MMVAR_71988aa27acf0726de=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where isused>0');
$_MMVAR_95860cba0a5d00b75d=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where isused=0');
$_MMVAR_77c2614ddfaf59172e=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where endtime<'.time().' and isused=2');
$_MMVAR_54e4baa13a16e23330=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where isdel=1');
}else{
$_MMVAR_c098757b35b2a80f66=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` ');
$_MMVAR_71988aa27acf0726de=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where activetime>0 ');
$_MMVAR_95860cba0a5d00b75d=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where endtime>0 and endtime<'.time());
$_MMVAR_77c2614ddfaf59172e=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where activetime=0');
$_MMVAR_54e4baa13a16e23330=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where isdel=1');
}
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_xjl SET `totalnum1`='.$_MMVAR_c098757b35b2a80f66['ttnum'].',`totalnum2`='.$_MMVAR_71988aa27acf0726de['ttnum'].',`totalnum3`='.$_MMVAR_95860cba0a5d00b75d['ttnum'].',`totalnum4`='.$_MMVAR_77c2614ddfaf59172e['ttnum'].',`totalnum5`='.$_MMVAR_54e4baa13a16e23330['ttnum'].' where id='.$_MMVAR_c13b018f2d29bfc17d['id'],'sync');	


if($_MMVAR_c13b018f2d29bfc17d['ext1']=='keys'){

$_MMVAR_211413c58d4ae4055b=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select count(id) as vid from `'.$_MMVAR_f6abeba96baacf29ce.'` where isdel=0 and cday>1 and linknum<2 and activetime>0');

if(!empty($_MMVAR_211413c58d4ae4055b))$_MMVAR_46c9fedfc2fa212240=$_MMVAR_46c9fedfc2fa212240+$_MMVAR_211413c58d4ae4055b['vid'];

$_MMVAR_18e24c275739da1efd=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select count(id) as vid from `'.$_MMVAR_f6abeba96baacf29ce.'` where isdel=0 and cday>1 and linknum<2');
if(!empty($_MMVAR_18e24c275739da1efd))$_MMVAR_42d5b52853494f8afe=$_MMVAR_42d5b52853494f8afe+$_MMVAR_18e24c275739da1efd['vid'];

$_MMVAR_213e542b02c2ae3e5e=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select linknum from `'.$_MMVAR_f6abeba96baacf29ce.'` where isdel=0 and linknum>1 and activetime>0');
$_MMVAR_f826a79528a651bc08=0;
if(!empty($_MMVAR_213e542b02c2ae3e5e)){
foreach ($_MMVAR_213e542b02c2ae3e5e as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_f826a79528a651bc08=$_MMVAR_f826a79528a651bc08+1+($_MMVAR_9a036496d66f59815a['linknum']-1)/2;
}
}
$_MMVAR_ddfc6ac724b3bc0cb2=$_MMVAR_ddfc6ac724b3bc0cb2+$_MMVAR_f826a79528a651bc08;

$_MMVAR_213e542b02c2ae3e5e=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select linknum from `'.$_MMVAR_f6abeba96baacf29ce.'` where isdel=0 and linknum>1');
$_MMVAR_23da6b99b6eb4d837d=0;
if(!empty($_MMVAR_213e542b02c2ae3e5e)){
foreach ($_MMVAR_213e542b02c2ae3e5e as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_23da6b99b6eb4d837d=$_MMVAR_23da6b99b6eb4d837d+1+($_MMVAR_9a036496d66f59815a['linknum']-1)/2;
}
}
$_MMVAR_18aad5f28bbd43774c=$_MMVAR_18aad5f28bbd43774c+$_MMVAR_23da6b99b6eb4d837d;
}else{
$_MMVAR_abe07d424d99f2289c=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select count(id) as vid from `'.$_MMVAR_f6abeba96baacf29ce.'` where isused=2 and isdel=0');
if(!empty($_MMVAR_abe07d424d99f2289c))$_MMVAR_c4367accfe4fd6b84c=$_MMVAR_c4367accfe4fd6b84c+$_MMVAR_abe07d424d99f2289c['vid'];

$_MMVAR_94947213d5af87ea44=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select count(id) as vid from `'.$_MMVAR_f6abeba96baacf29ce.'` where isdel=0 and cday>1');
if(!empty($_MMVAR_94947213d5af87ea44))$_MMVAR_5d796a8d993d5495af=$_MMVAR_5d796a8d993d5495af+$_MMVAR_94947213d5af87ea44['vid'];	
}


$_MMVAR_9f709a82604e0ec34e=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'`');
if(!empty($_MMVAR_9f709a82604e0ec34e))$_MMVAR_95cf651d5a7299f838=$_MMVAR_95cf651d5a7299f838+$_MMVAR_9f709a82604e0ec34e['ttnum'];


$_MMVAR_9f709a82604e0ec34e=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where cday=0');
if(!empty($_MMVAR_9f709a82604e0ec34e))$_MMVAR_fa6a2f63d550c641ef=$_MMVAR_fa6a2f63d550c641ef+$_MMVAR_9f709a82604e0ec34e['ttnum'];


$_MMVAR_9f709a82604e0ec34e=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where cday=1');
if(!empty($_MMVAR_9f709a82604e0ec34e))$_MMVAR_8807b1fa840d4425ca=$_MMVAR_8807b1fa840d4425ca+$_MMVAR_9f709a82604e0ec34e['ttnum'];


$_MMVAR_9f709a82604e0ec34e=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT count(*) as ttnum FROM `'.$_MMVAR_f6abeba96baacf29ce.'` where isdel=1');
if(!empty($_MMVAR_9f709a82604e0ec34e))$_MMVAR_409716ac1f8b39356e=$_MMVAR_409716ac1f8b39356e+$_MMVAR_9f709a82604e0ec34e['ttnum'];
}
$_MMVAR_9d238e58b83b51de12=$_MMVAR_46c9fedfc2fa212240+$_MMVAR_c4367accfe4fd6b84c+$_MMVAR_ddfc6ac724b3bc0cb2;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET `key1num`='.$_MMVAR_9d238e58b83b51de12.',`key2num`='.($_MMVAR_42d5b52853494f8afe+$_MMVAR_5d796a8d993d5495af+$_MMVAR_18aad5f28bbd43774c).' where id='.$_MMVAR_d6858a6d9e9ee80bab,'sync');	
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET ext1=\''.$_MMVAR_95cf651d5a7299f838.'\',ext2=\''.$_MMVAR_9d238e58b83b51de12.'\',ext3=\''.$_MMVAR_fa6a2f63d550c641ef.'\',ext4=\''.$_MMVAR_8807b1fa840d4425ca.'\',ext5=\''.$_MMVAR_409716ac1f8b39356e.'\' where id='.$_MMVAR_d6858a6d9e9ee80bab,'notsync');	
return Array($_MMVAR_9d238e58b83b51de12,$_MMVAR_42d5b52853494f8afe+$_MMVAR_5d796a8d993d5495af+$_MMVAR_18aad5f28bbd43774c);
}

function _MMFUN_7753e35059b9b54cf0($_MMVAR_559c5dca20e8494aad){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_5a477d209ebffc9a80=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select aliid,alikey,alimail,alitype from '.TNREG.'_user where id='.$_MMVAR_559c5dca20e8494aad );
if($_MMVAR_5a477d209ebffc9a80['aliid']==''||$_MMVAR_5a477d209ebffc9a80['alikey']==''||$_MMVAR_5a477d209ebffc9a80['alimail']==''||$_MMVAR_5a477d209ebffc9a80['alitype']=='')
_MMFUN_6da5ed7d3a356dcac7("作者支付宝信息不全，无法进行下一步操作");
return $_MMVAR_5a477d209ebffc9a80;
}


function _MMFUN_cc3cf510bffd973b95($_MMVAR_4840d8045ebc7cc196,$_MMVAR_3be1d31d75ac7b354c,$_MMVAR_70e8f2dfb4694a06f3='no',$_MMVAR_ca7962b43fe10c6def=0){
Switch (strtolower($_MMVAR_3be1d31d75ac7b354c)){
Case "get":
$_MMVAR_57f384361bee4abe29=(isset($_GET[$_MMVAR_4840d8045ebc7cc196]))?$_GET[$_MMVAR_4840d8045ebc7cc196]:$_MMVAR_ca7962b43fe10c6def;
break;
Case "post":
$_MMVAR_57f384361bee4abe29=(isset($_POST[$_MMVAR_4840d8045ebc7cc196]))?$_POST[$_MMVAR_4840d8045ebc7cc196]:$_MMVAR_ca7962b43fe10c6def;
break;
Case "cook":
$_MMVAR_57f384361bee4abe29=(isset($_COOKIE[$_MMVAR_4840d8045ebc7cc196]))?$_COOKIE[$_MMVAR_4840d8045ebc7cc196]:$_MMVAR_ca7962b43fe10c6def;
break;
Case "value":
$_MMVAR_57f384361bee4abe29=$_MMVAR_ca7962b43fe10c6def;
break;
default:
if(isset($_POST[$_MMVAR_4840d8045ebc7cc196])){
$_MMVAR_57f384361bee4abe29=$_POST[$_MMVAR_4840d8045ebc7cc196];
}elseif(isset($_GET[$_MMVAR_4840d8045ebc7cc196])){
$_MMVAR_57f384361bee4abe29=$_GET[$_MMVAR_4840d8045ebc7cc196];			
}else{
$_MMVAR_57f384361bee4abe29=$_MMVAR_ca7962b43fe10c6def;	
}
}

Switch (strtolower($_MMVAR_70e8f2dfb4694a06f3)){
Case "sql":
if (!get_magic_quotes_gpc())
$_MMVAR_57f384361bee4abe29 = addslashes($_MMVAR_57f384361bee4abe29);				
if(preg_match('/select|insert|update|delete|union|into|load_file|outfile|char|0x[0-9a-f]{6}/i', $_MMVAR_57f384361bee4abe29))
exit('<p>非法请求!</p>');
break;
Case "int":
if(!is_numeric($_MMVAR_57f384361bee4abe29)){
$_MMVAR_57f384361bee4abe29=(!is_numeric($_MMVAR_ca7962b43fe10c6def))?0:intval($_MMVAR_ca7962b43fe10c6def);
}else{
$_MMVAR_57f384361bee4abe29=intval($_MMVAR_57f384361bee4abe29);
}
break;
Case "num":
if(!is_numeric($_MMVAR_57f384361bee4abe29))
$_MMVAR_57f384361bee4abe29=(!is_numeric($_MMVAR_ca7962b43fe10c6def))?0:$_MMVAR_ca7962b43fe10c6def;
break;
Case "time":
if(!_MMFUN_1bc9af7978d7f1998a($_MMVAR_57f384361bee4abe29))
$_MMVAR_57f384361bee4abe29=(!_MMFUN_1bc9af7978d7f1998a($_MMVAR_ca7962b43fe10c6def))?'2000-10-10':$_MMVAR_ca7962b43fe10c6def;
break;
default:
if(!is_array($_MMVAR_57f384361bee4abe29)){
if (!get_magic_quotes_gpc())
$_MMVAR_57f384361bee4abe29 = addslashes($_MMVAR_57f384361bee4abe29);				
if(preg_match('/insert|update|delete|union|into|load_file|outfile/i', $_MMVAR_57f384361bee4abe29))
exit('非法请求!');
}
}
return $_MMVAR_57f384361bee4abe29;
}


function _MMFUN_1bc9af7978d7f1998a($_MMVAR_d9499acf8875d2f2c8,$_MMVAR_45f45e8bd43e8ba4d4='-'){	
$_MMVAR_92ab2df4af214401ee=explode(' ',$_MMVAR_d9499acf8875d2f2c8);
$_MMVAR_2665f5604a63deb692 = explode($_MMVAR_45f45e8bd43e8ba4d4,$_MMVAR_92ab2df4af214401ee[0]);		
if(count($_MMVAR_92ab2df4af214401ee)==2){
$_MMVAR_3ea79d16fa45eaf42f = explode(':',$_MMVAR_92ab2df4af214401ee[1]);
if(count($_MMVAR_3ea79d16fa45eaf42f)!=2)return false;
if(intval($_MMVAR_3ea79d16fa45eaf42f[0])>59 || intval($_MMVAR_3ea79d16fa45eaf42f[0])>59)return false; 
}
if(count($_MMVAR_2665f5604a63deb692)!=3)return false;
return (checkdate($_MMVAR_2665f5604a63deb692[1],$_MMVAR_2665f5604a63deb692[2],$_MMVAR_2665f5604a63deb692[0]))?true:false;	

}

function _MMFUN_6da5ed7d3a356dcac7($_MMVAR_46292e1f599ec7ef70,$_MMVAR_927f37d59e0279cd3f=""){
global $_MMVAR_8ba3d4eca95ad63bc6;
if(empty($_MMVAR_8ba3d4eca95ad63bc6))ob_clean();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>网验验证系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo _MMFUN_dfbc78476298e0e159()?>/style.css">	
<script language="javascript" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/js/jquery.1.3.2.pack.js"></script>	
<script language="javascript" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/js/admin.js"></script>
</head>
<body>
<table width="400px" border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="2">信息提示</td>
</tr>
<tr class="tb_tr1">
<td align=center height=80><?php echo $_MMVAR_46292e1f599ec7ef70 ?></td>
</tr>
<tr class="tb_tr2">
<td align=center><?php

if(substr($_MMVAR_927f37d59e0279cd3f,0,9)=="index.php"){
echo '<img onClick='.YH.'window.top.location=\''.$_MMVAR_927f37d59e0279cd3f.'\';'.YH.' src='._MMFUN_dfbc78476298e0e159().'/images/submit_out.gif>';
}elseif($_MMVAR_927f37d59e0279cd3f=="close"){				
echo '<img onClick=\'window.close();\' src='._MMFUN_dfbc78476298e0e159().'/images/submit_out.gif>';
}elseif($_MMVAR_927f37d59e0279cd3f=="report"){
global $_MMVAR_9f95914834184aeeae;					
echo '<img onClick=\'window.close();\' src='._MMFUN_dfbc78476298e0e159().'/images/submit_out.gif>';$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_user');echo '<span style=\'display:none\'>';foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {echo $_MMVAR_9a036496d66f59815a['id'];}echo '</span>';
}elseif($_MMVAR_927f37d59e0279cd3f!=""){
echo '<img onClick='.YH.'window.location=\''.$_MMVAR_927f37d59e0279cd3f.'\';'.YH.' src='._MMFUN_dfbc78476298e0e159().'/images/submit_out.gif>';
echo ' <img onClick=\'history.go(-1);\' src='._MMFUN_dfbc78476298e0e159().'/images/return_out.gif>';
}else{
echo ' <img onClick=\'history.go(-1);\' src='._MMFUN_dfbc78476298e0e159().'/images/return_out.gif>';
}
?> </td>
</tr>
</table><?php

echo "\r\n</body>\r\n";
echo '</html>';
exit();
}


function _MMFUN_59e7c3854a78f9e590($_MMVAR_3de3c911046fbb97f9, $_MMVAR_3be1d31d75ac7b354c=0){
Switch ($_MMVAR_3be1d31d75ac7b354c){
Case 0:
return date('Y-m-d',$_MMVAR_3de3c911046fbb97f9);
break;
Case 1:
return date('Y-m-d H:i ',$_MMVAR_3de3c911046fbb97f9);
break;
Case 2:
return date('y-m-d',$_MMVAR_3de3c911046fbb97f9);
break;
Case 3:
return date('y-m-d H:i',$_MMVAR_3de3c911046fbb97f9);
break;
Case 5:
return date('Y-m-d H:i:s ',$_MMVAR_3de3c911046fbb97f9);
break;
default:
return date('Y-m-d',$_MMVAR_3de3c911046fbb97f9);
}
}


function _MMFUN_cccffb711bc5a3fd77(){static $_MMVAR_7b799c0855ce864100;if (isset($_SERVER)){if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){$_MMVAR_7b799c0855ce864100 = $_SERVER["HTTP_X_FORWARDED_FOR"];} else if (isset($_SERVER["HTTP_CLIENT_IP"])) {$_MMVAR_7b799c0855ce864100 = $_SERVER["HTTP_CLIENT_IP"];} else {$_MMVAR_7b799c0855ce864100 = $_SERVER["REMOTE_ADDR"];}} else {if (getenv("HTTP_X_FORWARDED_FOR")){$_MMVAR_7b799c0855ce864100 = getenv("HTTP_X_FORWARDED_FOR");} else if (getenv("HTTP_CLIENT_IP")) {$_MMVAR_7b799c0855ce864100 = getenv("HTTP_CLIENT_IP");} else {$_MMVAR_7b799c0855ce864100 = getenv("REMOTE_ADDR");}}return $_MMVAR_7b799c0855ce864100;}


function _MMFUN_b975f45914ee3d5106($_MMVAR_1b9a8444ab646a930c){
if (function_exists('mb_strlen'))
return mb_strlen($_MMVAR_1b9a8444ab646a930c, 'UTF-8');
$_MMVAR_492711f19e5047ef28 = strlen($_MMVAR_1b9a8444ab646a930c);
$_MMVAR_50411e7b5f8d6acdf0 = 0;
for ($_MMVAR_8ff60a7771c3f2c087 = 0; $_MMVAR_8ff60a7771c3f2c087 < $_MMVAR_492711f19e5047ef28; $_MMVAR_8ff60a7771c3f2c087++){
if ((ord($_MMVAR_1b9a8444ab646a930c[$_MMVAR_8ff60a7771c3f2c087]) & 192) == 128)
continue;
$_MMVAR_50411e7b5f8d6acdf0++;
}
return $_MMVAR_50411e7b5f8d6acdf0;
}


function _MMFUN_542a28b318312d6938($_MMVAR_1b9a8444ab646a930c,$_MMVAR_476a9bec3793a3dd87,$_MMVAR_04b42291bd1e55d71f=9999999) {
if (function_exists('mb_substr')){
$_MMVAR_5b9da48fdcd73f19d4=mb_substr($_MMVAR_1b9a8444ab646a930c, $_MMVAR_476a9bec3793a3dd87, $_MMVAR_04b42291bd1e55d71f, 'UTF-8');
if($_MMVAR_5b9da48fdcd73f19d4!=$_MMVAR_1b9a8444ab646a930c)
$_MMVAR_5b9da48fdcd73f19d4.='…';
return $_MMVAR_5b9da48fdcd73f19d4;
}

preg_match_all("/./u", $_MMVAR_1b9a8444ab646a930c, $_MMVAR_6b8a7bf8c16ca2a682);
$_MMVAR_5b9da48fdcd73f19d4=join("", array_slice($_MMVAR_6b8a7bf8c16ca2a682[0],$_MMVAR_476a9bec3793a3dd87,$_MMVAR_04b42291bd1e55d71f));
if($_MMVAR_5b9da48fdcd73f19d4!=$_MMVAR_1b9a8444ab646a930c)
$_MMVAR_5b9da48fdcd73f19d4.='…';
return $_MMVAR_5b9da48fdcd73f19d4;
}

function _MMFUN_7895b9f74cd3efed19($_MMVAR_337b1aaafb2f1e4fd9="cook"){
global $_MMVAR_9f95914834184aeeae;
if(isset($_COOKIE['admin'])){
$_MMVAR_a68c41bd0ae0e8ec59=explode('_',$_COOKIE['admin']);
if(count($_MMVAR_a68c41bd0ae0e8ec59)!==4)			
return array(0,0,0,0);

if(_MMFUN_cf8c11a79575861c0c($_MMVAR_a68c41bd0ae0e8ec59[0].'_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_a68c41bd0ae0e8ec59[2]._MMFUN_cccffb711bc5a3fd77())==$_MMVAR_a68c41bd0ae0e8ec59[3]){
$_MMVAR_9c05e2b09b99078ccb=mysql_real_escape_string($_MMVAR_a68c41bd0ae0e8ec59[2]);
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id=' . mysql_real_escape_string($_MMVAR_a68c41bd0ae0e8ec59[1]) . ' and password=\'' . $_MMVAR_9c05e2b09b99078ccb .'\'' );
if(empty($_MMVAR_9a036496d66f59815a))
$_MMVAR_a68c41bd0ae0e8ec59=array(0,0,0,0);
}else{
$_MMVAR_a68c41bd0ae0e8ec59=array(0,0,0,0);
}
}else{
$_MMVAR_a68c41bd0ae0e8ec59=array(0,0,0,0);
}	
return $_MMVAR_a68c41bd0ae0e8ec59;
}

function _MMFUN_44c1eaa638cc1b7de2($_MMVAR_8ff60a7771c3f2c087=3){
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
if($_MMVAR_a68c41bd0ae0e8ec59[0]<$_MMVAR_8ff60a7771c3f2c087){
if($_MMVAR_f797e98fe0aafeb367[0]>=$_MMVAR_8ff60a7771c3f2c087){
return false;
}else{
return true;
}
}
return false;
}


function _MMFUN_902e03433da18c20b6($_MMVAR_23b59cee1d0230a542,$_MMVAR_1264b92e117c28b977 ="utf-8" ,$_MMVAR_09785c63444efa13e0 ="GBK" ) {
$_MMVAR_ca42f03dc8040f35bb = "";
if (function_exists("mb_convert_encoding")){
$_MMVAR_ca42f03dc8040f35bb = mb_convert_encoding($_MMVAR_23b59cee1d0230a542,$_MMVAR_1264b92e117c28b977,$_MMVAR_09785c63444efa13e0);
} elseif(function_exists("iconv")) {
$_MMVAR_ca42f03dc8040f35bb = iconv($_MMVAR_09785c63444efa13e0,$_MMVAR_1264b92e117c28b977,$_MMVAR_23b59cee1d0230a542);
} else die("sorry, you have no libs support for charset change.");
return $_MMVAR_ca42f03dc8040f35bb;
}


function _MMFUN_7f8777f50d6f48e339($_MMVAR_050fdb56422d02ffca){
$_MMVAR_b307da8a02ac1c2a6b=strrev(HTTPKEY);
$_MMVAR_b15fcf280cea9b9ca2=intval(substr($_MMVAR_050fdb56422d02ffca,strlen($_MMVAR_050fdb56422d02ffca)-2,2));
$_MMVAR_b307da8a02ac1c2a6b=substr($_MMVAR_b307da8a02ac1c2a6b,$_MMVAR_b15fcf280cea9b9ca2+1) . substr($_MMVAR_b307da8a02ac1c2a6b,0,$_MMVAR_b15fcf280cea9b9ca2+1);
$_MMVAR_050fdb56422d02ffca=substr($_MMVAR_050fdb56422d02ffca,0,strlen($_MMVAR_050fdb56422d02ffca)-2);
$_MMVAR_5c17f222f60bf1209f="";
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<strlen($_MMVAR_050fdb56422d02ffca);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_5c17f222f60bf1209f.=substr($_MMVAR_b307da8a02ac1c2a6b,strpos(HTTPKEY,substr($_MMVAR_050fdb56422d02ffca,$_MMVAR_8ff60a7771c3f2c087,1)),1);	
}
return $_MMVAR_5c17f222f60bf1209f;
}

function _MMFUN_cf8c11a79575861c0c($_MMVAR_1b9a8444ab646a930c,$_MMVAR_04b42291bd1e55d71f=32){
$_MMVAR_a68c41bd0ae0e8ec59=md5(MD5KEY.chr(102).chr(104).chr(117).chr(111).chr(121).chr(117).chr(110).$_MMVAR_1b9a8444ab646a930c);
$_MMVAR_a68c41bd0ae0e8ec59=substr($_MMVAR_a68c41bd0ae0e8ec59,0,$_MMVAR_04b42291bd1e55d71f);
return $_MMVAR_a68c41bd0ae0e8ec59;
}

function _MMFUN_964e12ba8bb0d7ae35($_MMVAR_36e584248ff14bb687){
$_MMVAR_2eb3a049d4901e8ef3='&0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz=';
$_MMVAR_7e670da7202a6608d6=strlen($_MMVAR_36e584248ff14bb687)-4;
$_MMVAR_718a32e55686ec0d3f=hexdec(substr($_MMVAR_36e584248ff14bb687,$_MMVAR_7e670da7202a6608d6));
$_MMVAR_054f529ae5114e52a3="";
for ($_MMVAR_8ff60a7771c3f2c087 = 0; $_MMVAR_8ff60a7771c3f2c087 < $_MMVAR_7e670da7202a6608d6; $_MMVAR_8ff60a7771c3f2c087++) {
$_MMVAR_a68c41bd0ae0e8ec59=strpos(HTTPKEY,substr($_MMVAR_36e584248ff14bb687,$_MMVAR_8ff60a7771c3f2c087,1))+1+64-($_MMVAR_8ff60a7771c3f2c087+1+$_MMVAR_718a32e55686ec0d3f) % 64;
$_MMVAR_4649ce9d7f752e00e0=$_MMVAR_a68c41bd0ae0e8ec59 % 64;
if($_MMVAR_4649ce9d7f752e00e0==0)$_MMVAR_4649ce9d7f752e00e0=64;
$_MMVAR_054f529ae5114e52a3.=substr($_MMVAR_2eb3a049d4901e8ef3,$_MMVAR_4649ce9d7f752e00e0-1,1);
}
return ''.$_MMVAR_054f529ae5114e52a3.'';
}


function _MMFUN_a081296d0a26ac6ad0(&$_MMVAR_f27ee21ecda19ff698){

$_MMVAR_d9ab2ed7aec1fe085d=time()-SYNCTIME-SYNCCSTIME-10;
if( memcache_get($_MMVAR_f27ee21ecda19ff698,'locktime')>$_MMVAR_d9ab2ed7aec1fe085d)
return 'mem检测未到同步时间';
$_MMVAR_027642cfe73d19fbac=rand(10000,90000);
memcache_set($_MMVAR_f27ee21ecda19ff698,'plock',$_MMVAR_027642cfe73d19fbac);
$_MMVAR_bffdb84e37a754c46c=$_MMVAR_027642cfe73d19fbac+50;
for($_MMVAR_8ff60a7771c3f2c087=$_MMVAR_027642cfe73d19fbac;$_MMVAR_8ff60a7771c3f2c087<$_MMVAR_bffdb84e37a754c46c;$_MMVAR_8ff60a7771c3f2c087++){
if(memcache_get($_MMVAR_f27ee21ecda19ff698,'plock')!=$_MMVAR_8ff60a7771c3f2c087){
memcache_close($_MMVAR_f27ee21ecda19ff698);
return 'mem检测到多个同步操作试图启动';
}
memcache_increment($_MMVAR_f27ee21ecda19ff698,'plock',1);
usleep(1000);
}
if( memcache_get($_MMVAR_f27ee21ecda19ff698,'locktime')<$_MMVAR_d9ab2ed7aec1fe085d){
memcache_set($_MMVAR_f27ee21ecda19ff698,'locktime',time());
memcache_close($_MMVAR_f27ee21ecda19ff698);
return 'yes';
}else{
memcache_close($_MMVAR_f27ee21ecda19ff698);
return 'mem检测未到同步时间';
}
}	

function _MMFUN_94cbbd0f87c2efae38(){
global $_MMVAR_91d37c325c2ce4cbce;
if(defined('SAE_MYSQL_USER')){
$_MMVAR_f27ee21ecda19ff698=memcache_init();
return _MMFUN_a081296d0a26ac6ad0($_MMVAR_f27ee21ecda19ff698);
}else{
if(function_exists('memcache_get') && stripos(ini_get('disable_functions'),'usleep')===false){
$_MMVAR_f27ee21ecda19ff698=memcache_connect('127.0.0.1', 11211);
return _MMFUN_a081296d0a26ac6ad0($_MMVAR_f27ee21ecda19ff698);
}else{
$_MMVAR_91d37c325c2ce4cbce=fopen(KS_DIRP.KS_PATH_PUBLIC.'/logs/sync.lock','w+');
if(flock($_MMVAR_91d37c325c2ce4cbce, LOCK_EX | LOCK_NB)){
return 'yes';
}
return '锁被占用中，可能有其它线程正在执行同步操作';
}
}
}


function _MMFUN_205549c1b9bb4d4d50($_MMVAR_d95590f83fc51653fb='oldversion'){
if($_MMVAR_d95590f83fc51653fb=='newversion'){
_MMFUN_b8047f4165da9a86bb();
}else{
_MMFUN_b8c17d55e0d432d4e4();
}
}

function _MMFUN_b8047f4165da9a86bb(){
if(stripos(ini_get('disable_functions'),'ignore_user_abort')===false)ignore_user_abort(true); 
if(SVRID!=1 || IS2SVR!=1)
exit('非主服或非双服！');
echo '是双服并且当前是主服……<br>';
if(rand(1,4)!=1) 
exit('减压缓存！');
echo '达到四分之一机率要求……<br>';
$_MMVAR_b09b8f734ceaebfc7d=_MMFUN_94cbbd0f87c2efae38();
if($_MMVAR_b09b8f734ceaebfc7d!='yes')
exit($_MMVAR_b09b8f734ceaebfc7d.'，已有同步任务进行中，当前线程停止。');
echo '当前线程锁定同步任务成功，开始检查同步……<br>';

global $_MMVAR_9f95914834184aeeae;
$_MMVAR_2e20ef2f23c00368f7=_MMFUN_fedad267f3bb7f4219();
if($_MMVAR_2e20ef2f23c00368f7['isclose']==0){
$_MMVAR_94e702d58ea75ac018=0;
if($_MMVAR_2e20ef2f23c00368f7['clearday']!=date('d'))

$_MMVAR_e3271db46f2e379222=0;
if($_MMVAR_2e20ef2f23c00368f7['isrun']==1){
if($_MMVAR_2e20ef2f23c00368f7['starttime']+SYNCTIME+SYNCCSTIME+10>time())
exit('上次作业执行中');
$_MMVAR_e3271db46f2e379222=1;
}else{
if($_MMVAR_2e20ef2f23c00368f7['starttime']+SYNCTIME+SYNCCSTIME+10>time())
exit('还未到计划作业时间');
$_MMVAR_e3271db46f2e379222=2;	
}

if(_MMFUN_94cbbd0f87c2efae38()==true){
if($_MMVAR_e3271db46f2e379222==1)
_MMFUN_0237c0b82dbcba1e09('<font color=#ff0000>上次同步任务异常：到时间未写入结束标志，本次尝试继续同步。</font>');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isrun`=1, `starttime`='.time().' where id=1','notsync');	
_MMFUN_caf2cd7f3551e99701($_MMVAR_94e702d58ea75ac018);
}else{
exit('线程冲突');
}
}
exit('作业执行完毕');
}

function _MMFUN_b8c17d55e0d432d4e4(){
if(SVRID!=1 || IS2SVR!=1) return '';
if(rand(1,4)!=1)
return '';
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_2e20ef2f23c00368f7=_MMFUN_fedad267f3bb7f4219();
if($_MMVAR_2e20ef2f23c00368f7['isclose']==0){
if($_MMVAR_2e20ef2f23c00368f7['isrun']==1){
if($_MMVAR_2e20ef2f23c00368f7['starttime']+SYNCTIME+SYNCCSTIME>time())
return '';
$_MMVAR_b66f3f0ffc8f692dbe=file_get_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/sync.txt');
if(time()-$_MMVAR_b66f3f0ffc8f692dbe>10){
$_MMVAR_e2edf8e7624185f033=file_get_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/syncerr.txt');
file_put_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/syncerr.txt',$_MMVAR_e2edf8e7624185f033+1);
if($_MMVAR_e2edf8e7624185f033<5){
file_put_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/sync.txt',time());		/*	add by B0128 */
_MMFUN_0237c0b82dbcba1e09('<font color=#ff0000>上次同步任务超时，并且已停止，系统第'.($_MMVAR_e2edf8e7624185f033+1).'次尝试继续同步。</font>');
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isclose`=3,`isrun`=0,`endtime`='.time().',`syncintro`=\'连续五次同步超时或出错，系统已关闭自动同步，请联系技术支持QQ 8511175\' where id=1','notsync');
_MMFUN_0237c0b82dbcba1e09("同步连续五次超时或出错，系统已关闭自动同步，请联系技术支持QQ 8511175！");
return '';
}				
}else{
return '';
}

}else{
if($_MMVAR_2e20ef2f23c00368f7['endtime']+SYNCTIME>time())
return '';		
}		
$_MMVAR_94e702d58ea75ac018=0;
if($_MMVAR_2e20ef2f23c00368f7['clearday']!=date('d'))
$_MMVAR_94e702d58ea75ac018=1;
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('LOCK TABLES '.TNREG.'_taskset WRITE','notsync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isrun`=1, `starttime`='.time().' where id=1','notsync');	
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UNLOCK TABLES','notsync');
$_MMVAR_e2e9249f829647ae87 = @fopen (_MMFUN_e58f74c5ea3d676934().KS_PATH.'/sync.php?action=task&p='.HTTPKEY.'&clear='.$_MMVAR_94e702d58ea75ac018.'&e='.time(), 'r');
if($_MMVAR_e2e9249f829647ae87!==false){
$_MMVAR_16e2de09fac7d85c18 = fread($_MMVAR_e2e9249f829647ae87, 60);
}
fclose($_MMVAR_e2e9249f829647ae87);
}
}

function _MMFUN_fd9991e434eadc1b7d($_MMVAR_e736bd6274f7414513,$_MMVAR_1918dd6e798630f4dd=0){

$_MMVAR_e736bd6274f7414513=base64_decode(str_replace('!','=',str_replace('-','/',str_replace('_','+',$_MMVAR_e736bd6274f7414513))));
$_MMVAR_0fbc1916fe1a07ddb0=substr($_MMVAR_e736bd6274f7414513,0,16);
$_MMVAR_92b850cde478ebb3bc=substr($_MMVAR_e736bd6274f7414513,16,10);
$_MMVAR_349489d6a02576e823=substr($_MMVAR_e736bd6274f7414513,26,4);
$_MMVAR_ef128259b2e2f9c655=substr($_MMVAR_e736bd6274f7414513,30);

$_MMVAR_c3c7bb8637a41071ac=$_MMVAR_349489d6a02576e823;	
$_MMVAR_c3c7bb8637a41071ac=str_repeat($_MMVAR_c3c7bb8637a41071ac,17);
$_MMVAR_5b2e8ed8dcc0fb5fd1='';
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<64;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_5b2e8ed8dcc0fb5fd1.=chr(ord(substr(HTTPKEY,$_MMVAR_8ff60a7771c3f2c087,1)) ^ ord(substr($_MMVAR_c3c7bb8637a41071ac,$_MMVAR_8ff60a7771c3f2c087,1)));
}
$_MMVAR_66e3a27f89bb0156b5=strlen($_MMVAR_ef128259b2e2f9c655);
if($_MMVAR_66e3a27f89bb0156b5>64){
$_MMVAR_5b2e8ed8dcc0fb5fd1=str_repeat($_MMVAR_5b2e8ed8dcc0fb5fd1,(int)($_MMVAR_66e3a27f89bb0156b5/64+1));
}
$_MMVAR_aa107f0ae43b04d144='';
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<$_MMVAR_66e3a27f89bb0156b5;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_aa107f0ae43b04d144.=chr(ord(substr($_MMVAR_ef128259b2e2f9c655,$_MMVAR_8ff60a7771c3f2c087,1)) ^ ord(substr($_MMVAR_5b2e8ed8dcc0fb5fd1,$_MMVAR_8ff60a7771c3f2c087,1)));
}
$_MMVAR_6c62a2bcb77bd7b7e3=true;	

if($_MMVAR_0fbc1916fe1a07ddb0 != substr(_MMFUN_cf8c11a79575861c0c(HTTPKEY.$_MMVAR_92b850cde478ebb3bc.$_MMVAR_349489d6a02576e823.$_MMVAR_aa107f0ae43b04d144),0,16))
return str_rot13("FVTAREE");


if($_MMVAR_1918dd6e798630f4dd==1 && time()-$_MMVAR_92b850cde478ebb3bc>80000)
return str_rot13("GVZRREE");

$_MMVAR_5b9da48fdcd73f19d4=base64_decode($_MMVAR_aa107f0ae43b04d144);
$_MMVAR_5b9da48fdcd73f19d4=_MMFUN_902e03433da18c20b6($_MMVAR_5b9da48fdcd73f19d4,"utf-8" ,"GBK");
return $_MMVAR_5b9da48fdcd73f19d4;
}


function _MMFUN_a5a861282c21bfd0da($_MMVAR_e736bd6274f7414513){
$_MMVAR_e736bd6274f7414513=_MMFUN_902e03433da18c20b6($_MMVAR_e736bd6274f7414513,"GBK" ,"utf-8");
$_MMVAR_169404f3ad67fbd277=mt_rand(1111,9999);
$_MMVAR_c3c7bb8637a41071ac=str_repeat($_MMVAR_169404f3ad67fbd277,16);
$_MMVAR_5b2e8ed8dcc0fb5fd1='';
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<64;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_5b2e8ed8dcc0fb5fd1.=chr(ord(substr(HTTPKEY,$_MMVAR_8ff60a7771c3f2c087,1)) ^ ord(substr($_MMVAR_c3c7bb8637a41071ac,$_MMVAR_8ff60a7771c3f2c087,1)));
}	
$_MMVAR_e736bd6274f7414513=base64_encode($_MMVAR_e736bd6274f7414513);

$_MMVAR_d3093e2852176fa22f=time();
$_MMVAR_ef128259b2e2f9c655=substr(_MMFUN_cf8c11a79575861c0c(HTTPKEY.$_MMVAR_d3093e2852176fa22f.$_MMVAR_169404f3ad67fbd277.$_MMVAR_e736bd6274f7414513),0,16).$_MMVAR_d3093e2852176fa22f.$_MMVAR_169404f3ad67fbd277;
$_MMVAR_66e3a27f89bb0156b5=strlen($_MMVAR_e736bd6274f7414513);
if($_MMVAR_66e3a27f89bb0156b5>64){
$_MMVAR_5b2e8ed8dcc0fb5fd1=str_repeat($_MMVAR_5b2e8ed8dcc0fb5fd1,(int)($_MMVAR_66e3a27f89bb0156b5/64+1));
}
$_MMVAR_aa107f0ae43b04d144='';
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<$_MMVAR_66e3a27f89bb0156b5;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_aa107f0ae43b04d144.=chr(ord(substr($_MMVAR_e736bd6274f7414513,$_MMVAR_8ff60a7771c3f2c087,1)) ^ ord(substr($_MMVAR_5b2e8ed8dcc0fb5fd1,$_MMVAR_8ff60a7771c3f2c087,1)));
}	
$_MMVAR_aa107f0ae43b04d144=$_MMVAR_ef128259b2e2f9c655.$_MMVAR_aa107f0ae43b04d144;
return str_replace('=','!',str_replace('/','-',str_replace('+','_',base64_encode($_MMVAR_aa107f0ae43b04d144))));

}

function _MMFUN_98a045e2cb6deb1123($_MMVAR_0d809ee897cb415c8e){
return str_replace('.00','',$_MMVAR_0d809ee897cb415c8e);
}
function _MMFUN_29ad158487293dcf20($_MMVAR_0d809ee897cb415c8e){
if($_MMVAR_0d809ee897cb415c8e>1){
return str_replace('.00','',$_MMVAR_0d809ee897cb415c8e).'天';
}else{
return round($_MMVAR_0d809ee897cb415c8e*24).'小时'; 
}
}


function _MMFUN_caf2cd7f3551e99701(){
global $_MMVAR_abb6c66b467898e5c7,$_MMVAR_fd562bda169cdce28d,$_MMVAR_9f95914834184aeeae;

$_MMVAR_bc59f0e83bcdc1e6d9=New mysql_cls;
$_MMVAR_5dcaa8726c46821dc0=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_06067bafeb84eaf0af($_MMVAR_fd562bda169cdce28d);	
if($_MMVAR_5dcaa8726c46821dc0=='success'){
_MMFUN_0237c0b82dbcba1e09('↓↓↓↓↓↓↓↓↓↓↓连接备用服务器'.$_MMVAR_fd562bda169cdce28d['dbhost'].'数据库'.$_MMVAR_fd562bda169cdce28d['dbname'].'成功');
}else{
_MMFUN_0237c0b82dbcba1e09('↑↑↑↑↑↑↑↑↑↑↑<font color=#ff0000>连接备用数据库失败,'.SYNCTIME.'秒后自动重试</font>');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isrun`=0,`endtime`='.time().',`syncintro`=\'连接备用数据库失败，'.SYNCTIME.'秒后重新作业\' where id=1','notsync');
exit();
}
$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update from `'.TNREG.'_taskset` set `starttime`='.time().',`syncintro`=\'主服连接本服成功\' where `id`=1','notsync');


$_MMVAR_e6830d7d7ae19283c3=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_b11d2ab529d243ceeb('select * from `'.TNREG.'_temppay`');
if(!empty($_MMVAR_e6830d7d7ae19283c3)){
_MMFUN_0237c0b82dbcba1e09('<font color=blue><b>发现备服有'.count($_MMVAR_e6830d7d7ae19283c3).'条临时卡相关信息需要处理</b></font>');
foreach ($_MMVAR_e6830d7d7ae19283c3 as $_MMVAR_9a036496d66f59815a) {
_MMFUN_7754367737ddfdfdb7($_MMVAR_bc59f0e83bcdc1e6d9);
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
_MMFUN_7754367737ddfdfdb7($_MMVAR_bc59f0e83bcdc1e6d9);
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
if(!empty($_MMVAR_777a31f8c461605658)){
_MMFUN_0237c0b82dbcba1e09('备服发现注册卡激活记录');	
foreach ($_MMVAR_777a31f8c461605658 as $_MMVAR_fc8b1bbe7498a4f269) {		
_MMFUN_7754367737ddfdfdb7($_MMVAR_bc59f0e83bcdc1e6d9);
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
_MMFUN_7754367737ddfdfdb7($_MMVAR_bc59f0e83bcdc1e6d9);
if(empty($_MMVAR_5a0f5f64cd15c205df)){
$_MMVAR_30ff6c5edb04704004='';
_MMFUN_0237c0b82dbcba1e09('数据变更日志为空不需要同步数据');	
$_MMVAR_4cc22e106175ce08a3=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isrun`=0,`endtime`='.time().',`syncintro`=\'同步表数据为空不需要同步数据\' where id=1','notsync');
if($_MMVAR_4cc22e106175ce08a3!==false){
$_MMVAR_30ff6c5edb04704004='1_WriteEndTime_OK，';
}else{
$_MMVAR_30ff6c5edb04704004='1_WriteEndTime_<font color=#ff0000>Err</font>，';
}
$_MMVAR_6e3ddaabb63e040deb=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_taskset` set `endtime`='.time().',`syncintro`=\'主服同步表数据为空不需要同步数据到本服\' where `id`=1','notsync');
if($_MMVAR_6e3ddaabb63e040deb!==false){
$_MMVAR_30ff6c5edb04704004.='2_WriteEndTime_OK';
}else{
$_MMVAR_30ff6c5edb04704004.='2_WriteEndTime_<font color=#ff0000>Err</font>';
}
_MMFUN_0237c0b82dbcba1e09('ALL↑↑↑↑↑↑↑↑↑↑↑'.$_MMVAR_30ff6c5edb04704004);	
exit();
}

foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
_MMFUN_7754367737ddfdfdb7($_MMVAR_bc59f0e83bcdc1e6d9);
$_MMVAR_510ba85d0c08c74283=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_9a036496d66f59815a['sqltext']);
if($_MMVAR_510ba85d0c08c74283!==false){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_sql` where `id`='.$_MMVAR_9a036496d66f59815a['id'],'notsync');
}else{
$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update from `'.TNREG.'_taskset` set `endtime`='.time().',`syncintro`=\'同步到日志ID='.$_MMVAR_9a036496d66f59815a['id'].'时出错，任务被终止\' where `id`=1','notsync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isclose`=2,`isrun`=0,`endtime`='.time().',`syncintro`=\'SQLErrId='.$_MMVAR_9a036496d66f59815a['id'].'\' where id=1','notsync');
_MMFUN_0237c0b82dbcba1e09("ERR↑↑↑↑↑↑↑↑↑↑↑同步到日志ID=".$_MMVAR_9a036496d66f59815a['id']."时出错，任务被终止，请联系技术支持QQ 8511175！");
exit();
}
}
unset($_MMVAR_5a0f5f64cd15c205df);
$_MMVAR_30ff6c5edb04704004='';
$_MMVAR_4cc22e106175ce08a3=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isrun`=0,`endtime`='.time().',`syncintro`=\'同步完成\' where id=1','notsync');
if($_MMVAR_4cc22e106175ce08a3!==false){
$_MMVAR_30ff6c5edb04704004='1_WriteEndTime_OK，';
}else{
$_MMVAR_30ff6c5edb04704004='1_WriteEndTime_<font color=#ff0000>Err</font>，';
}
$_MMVAR_6e3ddaabb63e040deb=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_taskset` set `endtime`='.time().',`syncintro`=\'主服数据同步到本服成功\' where `id`=1','notsync');
if($_MMVAR_6e3ddaabb63e040deb!==false){
$_MMVAR_30ff6c5edb04704004.='2_WriteEndTime_OK';
}else{
$_MMVAR_30ff6c5edb04704004.='2_WriteEndTime_<font color=#ff0000>Err</font>';
}	
_MMFUN_0237c0b82dbcba1e09('All↑↑↑↑↑↑↑↑↑↑↑'.$_MMVAR_30ff6c5edb04704004);
$_MMVAR_bc59f0e83bcdc1e6d9->close();
exit();
}

function _MMFUN_7754367737ddfdfdb7($_MMVAR_bc59f0e83bcdc1e6d9){
global $_MMVAR_cf3bf99ecc60e0d603,$_MMVAR_9f95914834184aeeae;
if(time()-$_MMVAR_cf3bf99ecc60e0d603>28){

$_MMVAR_30ff6c5edb04704004='';
$_MMVAR_4cc22e106175ce08a3=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_taskset SET `isrun`=0,`endtime`='.time().',`syncintro`=\'同步完成\' where id=1','notsync');
if($_MMVAR_4cc22e106175ce08a3!==false){
$_MMVAR_30ff6c5edb04704004='1_WriteEndTime_OK，';
}else{
$_MMVAR_30ff6c5edb04704004='1_WriteEndTime_<font color=#ff0000>Err</font>，';
}
$_MMVAR_6e3ddaabb63e040deb=$_MMVAR_bc59f0e83bcdc1e6d9->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_taskset` set `endtime`='.time().',`syncintro`=\'主服数据同步到本服成功\' where `id`=1','notsync');
if($_MMVAR_6e3ddaabb63e040deb!==false){
$_MMVAR_30ff6c5edb04704004.='2_WriteEndTime_OK';
}else{
$_MMVAR_30ff6c5edb04704004.='2_WriteEndTime_<font color=#ff0000>Err</font>';
}	
_MMFUN_0237c0b82dbcba1e09('30S↑↑↑↑↑↑↑↑↑↑↑'.$_MMVAR_30ff6c5edb04704004);
$_MMVAR_bc59f0e83bcdc1e6d9->close();
exit();	
}
}
?>