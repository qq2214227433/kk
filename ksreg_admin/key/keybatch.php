<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php

global $_MMVAR_9f95914834184aeeae,$_MMVAR_8ba3d4eca95ad63bc6;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','get','int',1);
$_MMVAR_9082381969d0c0bee9=_MMFUN_cc3cf510bffd973b95('ajax','get','int',0);
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','get','int',0);

if($_MMVAR_9082381969d0c0bee9==1){
if($_MMVAR_8ba3d4eca95ad63bc6==false)ob_clean();
}
if($_MMVAR_135a723a975f2e33a2==0){
if($_MMVAR_9082381969d0c0bee9==1)
exit("参数非法!");
_MMFUN_6da5ed7d3a356dcac7("参数非法!"); 
} 
if(SVRID!=1){
if($_MMVAR_9082381969d0c0bee9==1)
exit("备服数据禁止操作!");
_MMFUN_6da5ed7d3a356dcac7("备服数据禁止操!"); 	
}    
//$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','','sql','');
//$_MMVAR_7ca1659d6f01cb3410=$_POST['id'];
$_MMVAR_ef4db015bdc5ccec8c=0;
if(isset($_POST['id'])){
$_MMVAR_7ca1659d6f01cb3410=$_POST['id'];
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){
if(strlen($_MMVAR_4ff92f711953671bb4)!=16 && strlen($_MMVAR_4ff92f711953671bb4)!=24){
if($_MMVAR_9082381969d0c0bee9==1)
exit("参数非法!");
_MMFUN_6da5ed7d3a356dcac7("参数非法!".$_MMVAR_4ff92f711953671bb4); 
}               
}
$_MMVAR_ef4db015bdc5ccec8c=1;
}else{
if(isset($_GET['id'])){
$_MMVAR_7ca1659d6f01cb3410=$_GET['id']; 
if(strlen($_MMVAR_7ca1659d6f01cb3410)!=16 && strlen($_MMVAR_7ca1659d6f01cb3410)!=24){
if($_MMVAR_9082381969d0c0bee9==1)
exit("参数非法!");
_MMFUN_6da5ed7d3a356dcac7("参数非法!"); 
}          
}else{
if($_MMVAR_9082381969d0c0bee9==1)
exit("参数非法!");
_MMFUN_6da5ed7d3a356dcac7("参数非法!"); 
}
}
$_MMVAR_f6abeba96baacf29ce=TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2;


$_MMVAR_a9ecec9b36cd18d921=_MMFUN_cc3cf510bffd973b95('op','','sql','');
switch ($_MMVAR_a9ecec9b36cd18d921){
Case "del":

if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set isdel=1, deltime='.time().'  where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\' and cday<>0 ','sync');

}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set isdel=1, deltime='.time().'  where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\' and cday<>0 ','sync');
}
if($_MMVAR_9082381969d0c0bee9==1)
exit("ok");
_MMFUN_6da5ed7d3a356dcac7('批量删除成功!',$_SERVER['HTTP_REFERER']);
break;
Case "fc0":

if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set `int1`=\'0\' where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\'','sync');

}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set `int1`=\'0\' where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\'','sync');
}
if($_MMVAR_9082381969d0c0bee9==1)
exit("ok");
_MMFUN_6da5ed7d3a356dcac7('分区批量归零成功!',$_SERVER['HTTP_REFERER']);
break;
Case "bd0":

$_MMVAR_c4283b064e4682449a=_MMFUN_cc3cf510bffd973b95('nbdinfo','post','sql','');
if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set `v7ext1`=\''.$_MMVAR_c4283b064e4682449a.'\' where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\'','sync');

}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set `v7ext1`=\''.$_MMVAR_c4283b064e4682449a.'\' where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\'','sync');
}
if($_MMVAR_9082381969d0c0bee9==1)
exit("ok");
_MMFUN_6da5ed7d3a356dcac7('绑定信息批量修改成功!',$_SERVER['HTTP_REFERER']);
break;
Case "zy":

$_MMVAR_1ecc64888da43ab072=_MMFUN_cc3cf510bffd973b95('zytid','post','int',0);
if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set `agentid`='.$_MMVAR_1ecc64888da43ab072.' where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\'','sync');

}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set `agentid`='.$_MMVAR_1ecc64888da43ab072.' where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\'','sync');
}
if($_MMVAR_9082381969d0c0bee9==1)
exit("ok");
_MMFUN_6da5ed7d3a356dcac7('身份批量转移成功!',$_SERVER['HTTP_REFERER']);
break;
Case "admindel":
if(_MMFUN_44c1eaa638cc1b7de2(9)){
if($_MMVAR_9082381969d0c0bee9==1)
exit("无权限访问该内容!");
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!"); 
} 


if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_f6abeba96baacf29ce.'` where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\' and cday<>0','sync');             
}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_f6abeba96baacf29ce.'` where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\' and cday<>0','sync');    
}
_MMFUN_6da5ed7d3a356dcac7("彻底删除成功!",$_SERVER['HTTP_REFERER']);
break;
Case "adminder":
if(_MMFUN_44c1eaa638cc1b7de2(9)){
if($_MMVAR_9082381969d0c0bee9==1)
exit("无权限访问该内容!");
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!"); 
} 

if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set isdel=0, deltime=0  where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\' and cday<>0 ','sync');             
}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set isdel=0, deltime=0  where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\' and cday<>0 ','sync');
}
_MMFUN_6da5ed7d3a356dcac7("解除删除成功!",$_SERVER['HTTP_REFERER']);
break;
Case "jb":	

if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set bdcode=\'1001\',`v7ext2`=\'\', `d13int5`=0  where  `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\' and bdcode<>\'1000\'','sync');

}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set bdcode=\'1001\',`v7ext2`=\'\', `d13int5`=0  where  `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\' and bdcode<>\'1000\'','sync');
}	
if($_MMVAR_9082381969d0c0bee9==1)
exit("ok");
_MMFUN_6da5ed7d3a356dcac7('解绑成功!',$_SERVER['HTTP_REFERER']);
break;
Case "xx":	

if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set `lastonlinetime `=0, `d13int5`=0  where  `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\' and bdcode<>\'1000\'','sync');

}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set `lastonlinetime `=0, `d13int5`=0 where  `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\' and bdcode<>\'1000\'','sync');
}	
if($_MMVAR_9082381969d0c0bee9==1)
exit("ok");
_MMFUN_6da5ed7d3a356dcac7('下线成功!',$_SERVER['HTTP_REFERER']);
break;
Case "dj":

if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set normal=0  where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\'','sync');             
}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set normal=0  where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\'','sync');
}	
if($_MMVAR_9082381969d0c0bee9==1)
exit("ok");
_MMFUN_6da5ed7d3a356dcac7('冻结成功!',$_SERVER['HTTP_REFERER']);
break;
Case "jd":	

if($_MMVAR_ef4db015bdc5ccec8c==1){
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){					
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set normal=1  where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\'','sync');             
}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set normal=1  where `keys`=\''.$_MMVAR_7ca1659d6f01cb3410.'\'','sync');
}
if($_MMVAR_9082381969d0c0bee9==1)
exit("ok");
_MMFUN_6da5ed7d3a356dcac7('解冻成功!',$_SERVER['HTTP_REFERER']);
break;
default:
echo "none";
}
?>