<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_53d17c3545aae95b9e,$_MMVAR_7b6896960481a4d007;
$_MMVAR_0ecbe44a2d4417e190=array('action'=>$_MMVAR_7b6896960481a4d007,'userid'=>$_MMVAR_d6858a6d9e9ee80bab);		
$_MMVAR_90502be476664717ad=50;

$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);


$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_eea934454d241a2c72=_MMFUN_cc3cf510bffd973b95('sqmode','','int',0);
$_MMVAR_0b9ba8763f86bc549d=_MMFUN_cc3cf510bffd973b95('stype','','int',0);
$_MMVAR_df03ade3870b1399b8=_MMFUN_cc3cf510bffd973b95('skeywords','','sql',"");
$_MMVAR_4662571575bbb96510=_MMFUN_cc3cf510bffd973b95('sonline','','int',0);
$_MMVAR_df1a938ad7ab2665c2=_MMFUN_cc3cf510bffd973b95('sendtime','','int',0);
$_MMVAR_8d2688f28029ea9f44=_MMFUN_cc3cf510bffd973b95('scday','','int',-1);
$_MMVAR_df8684b5cfa8b119cd=_MMFUN_cc3cf510bffd973b95('sk1str','','sql','0');

if(strlen($_MMVAR_df8684b5cfa8b119cd)>1)$_MMVAR_df8684b5cfa8b119cd="0";
$_MMVAR_45d81c1e1074570bdb=_MMFUN_cc3cf510bffd973b95('cztime1','','sql','');
$_MMVAR_3e684e72f56b1f9897=_MMFUN_cc3cf510bffd973b95('cztime2','','sql','');
$_MMVAR_7f7531926d30e88485=0;
if($_MMVAR_45d81c1e1074570bdb != "" && $_MMVAR_3e684e72f56b1f9897 != ""){
if(!is_numeric($_MMVAR_45d81c1e1074570bdb))
$_MMVAR_45d81c1e1074570bdb=strtotime($_MMVAR_45d81c1e1074570bdb);
if(!is_numeric($_MMVAR_3e684e72f56b1f9897))
$_MMVAR_3e684e72f56b1f9897=strtotime($_MMVAR_3e684e72f56b1f9897);
if($_MMVAR_45d81c1e1074570bdb>$_MMVAR_3e684e72f56b1f9897){
$_MMVAR_8b928b7b6646920f8d=$_MMVAR_45d81c1e1074570bdb;
$_MMVAR_45d81c1e1074570bdb=$_MMVAR_3e684e72f56b1f9897;
$_MMVAR_3e684e72f56b1f9897=$_MMVAR_8b928b7b6646920f8d;
}
$_MMVAR_0ecbe44a2d4417e190['cztime1']=$_MMVAR_45d81c1e1074570bdb;
$_MMVAR_0ecbe44a2d4417e190['cztime2']=$_MMVAR_3e684e72f56b1f9897;
$_MMVAR_7f7531926d30e88485=1;	
}

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and  ext1=\'user\'');	



$_MMVAR_c67e83e80518b9ba65=array();	
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_c67e83e80518b9ba65[]=$_MMVAR_9a036496d66f59815a['id'];
}
$_MMVAR_35fca76b1c829d0c88=explode(',',$_MMVAR_53d17c3545aae95b9e[4]);
$_MMVAR_4b6e749d3c35abcb3a=array_intersect($_MMVAR_c67e83e80518b9ba65,$_MMVAR_35fca76b1c829d0c88);	
if($_MMVAR_135a723a975f2e33a2==0){					
$_MMVAR_135a723a975f2e33a2=$_MMVAR_4b6e749d3c35abcb3a[0];
}
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;
$_MMVAR_7ca6661cda24ab3ecb='_keys_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_135a723a975f2e33a2;

if($_MMVAR_2dc0051b4a3fa32b83>100)
$_MMVAR_eea934454d241a2c72=1;

$_MMVAR_6acb770a66d220e25e='SELECT * from `'.TNREG.$_MMVAR_7ca6661cda24ab3ecb.'` where ';

$_MMVAR_5d609e725690d8183e=1;
if(!empty($_MMVAR_df03ade3870b1399b8)){
if($_MMVAR_0b9ba8763f86bc549d==0){
$_MMVAR_5d609e725690d8183e=1;
$_MMVAR_6acb770a66d220e25e.=' `keys` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' and ';
}elseif($_MMVAR_0b9ba8763f86bc549d==1){
$_MMVAR_6acb770a66d220e25e.=' `intro` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' and ';
}else{
$_MMVAR_6acb770a66d220e25e.=' `ext1` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' and ';
}
$_MMVAR_0ecbe44a2d4417e190['skeywords']=$_MMVAR_df03ade3870b1399b8;
$_MMVAR_0ecbe44a2d4417e190['stype']=$_MMVAR_0b9ba8763f86bc549d;			
}
if($_MMVAR_5d609e725690d8183e==1){
$_MMVAR_6acb770a66d220e25e.=' `isused`>0 and agentid='.$_MMVAR_53d17c3545aae95b9e[0];
}else{
$_MMVAR_6acb770a66d220e25e.=' `isused`=1 and agentid='.$_MMVAR_53d17c3545aae95b9e[0];	
}

if($_MMVAR_df8684b5cfa8b119cd!="0"){
$_MMVAR_6acb770a66d220e25e.=' and `keys` LIKE \''.$_MMVAR_df8684b5cfa8b119cd.'%\'';	
$_MMVAR_0ecbe44a2d4417e190['sk1str']=$_MMVAR_df8684b5cfa8b119cd;
}

if($_MMVAR_7f7531926d30e88485==1){
$_MMVAR_6acb770a66d220e25e.=' and deltime>'.$_MMVAR_45d81c1e1074570bdb.' and deltime<='.$_MMVAR_3e684e72f56b1f9897;
}

$_MMVAR_0e78720a9e0afc0f3d="";
$_MMVAR_7e1bc99639894955e5=0;

include KS_DIR.'/inc/runtime.php';
$_MMVAR_77e413c0c731500d10= new runtime;
$_MMVAR_77e413c0c731500d10->_MMFUN_75ca9dc8ef905464ef(); 
if($_MMVAR_eea934454d241a2c72==1){
$_MMVAR_4fa302d033574933a4=5000000;
if($_MMVAR_2dc0051b4a3fa32b83==250000){
$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
$_MMVAR_2dc0051b4a3fa32b83=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
}
}else{	
$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
if($_MMVAR_4fa302d033574933a4>2000){		
$_MMVAR_eea934454d241a2c72=1;
$_MMVAR_0e78720a9e0afc0f3d='<script>$.msgbox({width:500,height:120,content:{type:\'text\', content:\'友情提示：总记录数超出100页，系统已经自动调整为快速模式。\'},autoClose:9});</script>';		

$_MMVAR_7e1bc99639894955e5=1;
}
}
$_MMVAR_4a134686cf4c02ac8d=$_MMVAR_4fa302d033574933a4;
$_MMVAR_4fa302d033574933a4=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));

$_MMVAR_6acb770a66d220e25e.=' order by id desc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;
$_MMVAR_3fac05200815e9252b=$_MMVAR_6acb770a66d220e25e;
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
$_MMVAR_77e413c0c731500d10->_MMFUN_2ff52b47fa1890bb43();
if($_MMVAR_eea934454d241a2c72==1) $_MMVAR_0ecbe44a2d4417e190['sqmode']=$_MMVAR_eea934454d241a2c72;
$_MMVAR_b3f276f8776bf5bfa0="";$_MMVAR_81bc29b593835e2dc6="";
if($_MMVAR_45d81c1e1074570bdb != "" && $_MMVAR_3e684e72f56b1f9897 != ""){
$_MMVAR_b3f276f8776bf5bfa0=date('Y-m-d H:i',$_MMVAR_45d81c1e1074570bdb);
$_MMVAR_81bc29b593835e2dc6=date('Y-m-d H:i',$_MMVAR_3e684e72f56b1f9897);
}
?>
<style>.jsbtn{border:1px solid #336699;background:#487FA6;color:#B9E6F5}
.jsbtn2{border:1px solid #336699;background:#487FA6;color:#B9E6F5}
.saveintro{border:1px solid #336699;background:#487FA6;color:#B9E6F5}</style>
<link rel="stylesheet" href="..<?php echo KS_PATH_PUBLIC?>/date_input.css" type="text/css">
<script type="text/javascript" src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.date_input.js"></script>	
<script>$(function(){$("#cztime1").date_input({addhss: "00:00"});$("#cztime2").date_input({addhss: "00:00"});});</script>
<form action="?action=keylist3&userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>" method="post" target="_self" id="f1" name="f1">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td><input id="sqmode" name="sqmode" type="checkbox" value="1" <?php if($_MMVAR_eea934454d241a2c72==1)echo 'checked'?>/><label for="sqmode">快速模式</label>，<?php
echo '<select name=\'sxjlid\' id=\'xjlid\' style=\'width:150px;height:22px\'>';
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
if (in_array($_MMVAR_9a036496d66f59815a['id'],$_MMVAR_4b6e749d3c35abcb3a)){

echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2){
echo ' selected';
$_MMVAR_e4019df8eca2c2ac2c=$_MMVAR_9a036496d66f59815a['xjlname'];
}
echo '>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
}
?>
</select>，<select name="sk1str" id="sk1str" style="width:100px;height:22px">
<option value='0' <?php if($_MMVAR_df8684b5cfa8b119cd==-1)echo ' selected';?>>所有</option>
<?php

$_MMVAR_cc59eed55f0be48973=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_keyattribute where keycday<>0 and id>9 order by id asc');
foreach ($_MMVAR_cc59eed55f0be48973 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['keyfirststr'];
if($_MMVAR_df8684b5cfa8b119cd==$_MMVAR_9a036496d66f59815a['keyfirststr'])
echo ' selected';
echo '>'.$_MMVAR_9a036496d66f59815a['keyname'].'['.$_MMVAR_9a036496d66f59815a['keyfirststr'].']</option>';
}
?>
</select>，
<select name="stype" id="stype" style="width:80px;height:22px">
<option value=0>卡号</option>
<option value=1>用户名</option>
<option value=2>标签</option>
</select>-><input name="skeywords" type="text" value="" class="inputText2" /><br>
充值日期：<input name="cztime1" type="text" value="<?php echo $_MMVAR_b3f276f8776bf5bfa0?>" id="cztime1" class="inputText2 my_date_input" />-&gt;<input name="cztime2" id="cztime2"  type="text" value="<?php echo $_MMVAR_81bc29b593835e2dc6?>" class="inputText2 my_date_input" /><span style="width:400px"><?php echo '当前服务器时间'.date('Y-m-d H:i ',time()-60);?>
<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="..<?php echo KS_PATH_PUBLIC?>/images/submit_out.gif" align="absmiddle" /></td>
</tr>
</table>
</form>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="7"><?php echo $_MMVAR_e4019df8eca2c2ac2c?> → 已经使用过的充值卡,<?php
if ($_MMVAR_eea934454d241a2c72==1 && $_MMVAR_7e1bc99639894955e5==0){
echo '快速模式不统计总计录数';
}else{
echo '共查询到'.$_MMVAR_4a134686cf4c02ac8d.'条记录。';
}?>[查询用时: <?php echo $_MMVAR_77e413c0c731500d10->_MMFUN_2bc50f97e2e07d84c2()?> 毫秒]  基卡不显示在该列表</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>标签</td>
<td>卡号</td>
<td>用户名</td>
<td width=30>天数</td>
<td width=30>点数</td>
<td width=100>充值日期</td>
</tr>
<?php		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;
if($_MMVAR_9a036496d66f59815a['bdcode']==1000){
$_MMVAR_bac4c643bf8a5895c9='未绑定';
}elseif($_MMVAR_9a036496d66f59815a['bdcode']==1001){
$_MMVAR_bac4c643bf8a5895c9='已解绑';
}else{			
$_MMVAR_bac4c643bf8a5895c9=$_MMVAR_9a036496d66f59815a['bdcode'];
}
if($_MMVAR_9a036496d66f59815a['cday']=='0'){
$_MMVAR_bb23f4d6ba44c0a3db='style=\'background:#C8F3A9\'';			
}elseif($_MMVAR_9a036496d66f59815a['activetime']!="0" && $_MMVAR_9a036496d66f59815a['activetime']+86400*$_MMVAR_9a036496d66f59815a['cday']<time()){
$_MMVAR_bb23f4d6ba44c0a3db='style=\'background:#F5A2AE\'';
}else{
$_MMVAR_bb23f4d6ba44c0a3db="";			
}
?><tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td class='t01'><input type="checkbox" name="id[]" value="<?php echo $_MMVAR_9a036496d66f59815a['keys'];?>" <?php
if($_MMVAR_9a036496d66f59815a['cday']==0 or $_MMVAR_9a036496d66f59815a['isused']==2)  echo 'disabled';
?> /><?php echo $_MMVAR_9a036496d66f59815a['id'];?></td>		
<td id="tdext1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['ext1']?></td>	
<td class="regkey" <?php echo $_MMVAR_bb23f4d6ba44c0a3db?>><?php
if($_MMVAR_9a036496d66f59815a['isdel']==1){
echo '<s><span style=\'color:#aaa\'>'.$_MMVAR_9a036496d66f59815a['keys'].'</span></s>';
}else{
echo $_MMVAR_9a036496d66f59815a['keys'];				
}
echo $_MMVAR_9a036496d66f59815a['isused']==2?' [基卡]':'';				 
?></td>	
<td id="tduser1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['isused']==2?'<u>'._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_9a036496d66f59815a['cusername']).'</u>':$_MMVAR_9a036496d66f59815a['intro']?></td>
<td id="jsday<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['cday']?></td>		
<td id="tddayactivetimes<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['dayactivetimes']?></td>	
<td><?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['deltime'],1) ?></td>
</tr>
<?php } ?><tr class="tb_header">
<td colspan="7" align=right><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</table>

<script language="javascript" src="<?php echo _MMFUN_dfbc78476298e0e159() ?>/js/keylist.js"></script>
<script>
$(document).ready(function(){
$(".regkey").bind("mousedown",function(){if(window.clipboardData.setData("text",this.innerText)){alert("注册卡号" + this.innerText + "已复制到剪贴板！")}});
});
</script>
<div style="margin:0 400px;width:20px;height:10px;overflow:hidden;">■  EXPLAIN </div>