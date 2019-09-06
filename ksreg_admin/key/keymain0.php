<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae,$_MMVAR_7b6896960481a4d007;
$_MMVAR_0ecbe44a2d4417e190=array('action'=>$_MMVAR_7b6896960481a4d007);

$_MMVAR_90502be476664717ad=50;
$_MMVAR_3baee5e4bc5c4c4d09=array(0=>'试用',1=>'天卡',7=>'周卡',30=>'月卡',90=>'季卡',365=>'年卡');
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();

$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_077368e81441844449=_MMFUN_cc3cf510bffd973b95('byiid','','int',0);
$_MMVAR_eea934454d241a2c72=_MMFUN_cc3cf510bffd973b95('sqmode','','int',0);
$_MMVAR_e9fa6198fc43bff853=_MMFUN_cc3cf510bffd973b95('sact','','int',0);
$_MMVAR_6356c35a3d01d5ca1d=_MMFUN_cc3cf510bffd973b95('sagentid','','int',0);
$_MMVAR_0b9ba8763f86bc549d=_MMFUN_cc3cf510bffd973b95('stype','','int',0);
$_MMVAR_df03ade3870b1399b8=_MMFUN_cc3cf510bffd973b95('skeywords','','sql',"");
$_MMVAR_4662571575bbb96510=_MMFUN_cc3cf510bffd973b95('sonline','','int',0);
$_MMVAR_df1a938ad7ab2665c2=_MMFUN_cc3cf510bffd973b95('sendtime','','int',0);
$_MMVAR_df8684b5cfa8b119cd=_MMFUN_cc3cf510bffd973b95('sk1str','','sql','0');

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where ext1=\'keys\' and userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7('参数传递错误！');
if($_MMVAR_135a723a975f2e33a2==0){					
$_MMVAR_135a723a975f2e33a2=$_MMVAR_e9ffef5bdc7675ff63[0]['id'];
}
$_MMVAR_7ca6661cda24ab3ecb='_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2;
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;

if($_MMVAR_2dc0051b4a3fa32b83>100){
if($_MMVAR_eea934454d241a2c72==0){
$_MMVAR_eea934454d241a2c72=1;
}
}
$_MMVAR_0ecbe44a2d4417e190['byiid']=$_MMVAR_077368e81441844449;


$_MMVAR_6acb770a66d220e25e='SELECT * from `'.TNREG.$_MMVAR_7ca6661cda24ab3ecb.'` ';
$_MMVAR_f418aa84076e2a097e='';
$_MMVAR_336416a90e316dc3e0='';
$_MMVAR_9d93563ab77c6f2ef4=0;
if(!empty($_MMVAR_df03ade3870b1399b8)){
if($_MMVAR_0b9ba8763f86bc549d==0){
if($_MMVAR_9d93563ab77c6f2ef4==0){
$_MMVAR_336416a90e316dc3e0=' where ';
$_MMVAR_9d93563ab77c6f2ef4=1;
}
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.' `keys` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\'';
$_MMVAR_336416a90e316dc3e0='';
$_MMVAR_f418aa84076e2a097e=' and ';
}elseif($_MMVAR_0b9ba8763f86bc549d==2){
if($_MMVAR_9d93563ab77c6f2ef4==0){
$_MMVAR_336416a90e316dc3e0=' where ';
$_MMVAR_9d93563ab77c6f2ef4=1;
}
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.' `ext1` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' ';
$_MMVAR_336416a90e316dc3e0='';
$_MMVAR_f418aa84076e2a097e=' and ';
}elseif($_MMVAR_0b9ba8763f86bc549d==4){
if($_MMVAR_9d93563ab77c6f2ef4==0){
$_MMVAR_336416a90e316dc3e0=' where ';
$_MMVAR_9d93563ab77c6f2ef4=1;
}
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.' `v7ext1` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' ';
$_MMVAR_336416a90e316dc3e0='';
$_MMVAR_f418aa84076e2a097e=' and ';
}elseif($_MMVAR_0b9ba8763f86bc549d==3){
if($_MMVAR_9d93563ab77c6f2ef4==0){
$_MMVAR_336416a90e316dc3e0=' where ';
$_MMVAR_9d93563ab77c6f2ef4=1;
}
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.' `intro` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\'';
$_MMVAR_f418aa84076e2a097e=' and ';
$_MMVAR_336416a90e316dc3e0='';
}
$_MMVAR_0ecbe44a2d4417e190['skeywords']=$_MMVAR_df03ade3870b1399b8;
$_MMVAR_0ecbe44a2d4417e190['stype']=$_MMVAR_0b9ba8763f86bc549d;			
}

if($_MMVAR_df8684b5cfa8b119cd!="0"){
if($_MMVAR_9d93563ab77c6f2ef4==0){
$_MMVAR_336416a90e316dc3e0=' where ';
$_MMVAR_9d93563ab77c6f2ef4=1;
}
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.$_MMVAR_f418aa84076e2a097e.' `keys` LIKE \''.$_MMVAR_df8684b5cfa8b119cd.'%\'';
$_MMVAR_f418aa84076e2a097e=' and ';
$_MMVAR_336416a90e316dc3e0='';		
$_MMVAR_0ecbe44a2d4417e190['sk1str']=$_MMVAR_df8684b5cfa8b119cd;
}

if($_MMVAR_6356c35a3d01d5ca1d!=0){
if($_MMVAR_9d93563ab77c6f2ef4==0){
$_MMVAR_336416a90e316dc3e0=' where ';
$_MMVAR_9d93563ab77c6f2ef4=1;
}
if($_MMVAR_6356c35a3d01d5ca1d==-1){
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.$_MMVAR_f418aa84076e2a097e.' agentid=0';
}elseif($_MMVAR_6356c35a3d01d5ca1d==-2){
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.$_MMVAR_f418aa84076e2a097e.' agentid<>0';
}else{
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.$_MMVAR_f418aa84076e2a097e.' agentid='.$_MMVAR_6356c35a3d01d5ca1d;
}
$_MMVAR_336416a90e316dc3e0='';
$_MMVAR_f418aa84076e2a097e=' and ';					
$_MMVAR_0ecbe44a2d4417e190['sagentid']=$_MMVAR_6356c35a3d01d5ca1d;
}

if($_MMVAR_e9fa6198fc43bff853!=0){
if($_MMVAR_9d93563ab77c6f2ef4==0){
$_MMVAR_336416a90e316dc3e0=' where ';
$_MMVAR_9d93563ab77c6f2ef4=1;
}
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.$_MMVAR_f418aa84076e2a097e.' activetime>0';
$_MMVAR_f418aa84076e2a097e=' and ';
$_MMVAR_336416a90e316dc3e0='';				
$_MMVAR_0ecbe44a2d4417e190['sact']=$_MMVAR_e9fa6198fc43bff853;
}


if($_MMVAR_df1a938ad7ab2665c2!=0){
if($_MMVAR_9d93563ab77c6f2ef4==0){
$_MMVAR_336416a90e316dc3e0=' where ';
$_MMVAR_9d93563ab77c6f2ef4=1;
}
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.$_MMVAR_f418aa84076e2a097e.' endtime>0 and endtime <'.(time()+86400*$_MMVAR_df1a938ad7ab2665c2);
$_MMVAR_f418aa84076e2a097e=' and ';
$_MMVAR_336416a90e316dc3e0='';		
$_MMVAR_0ecbe44a2d4417e190['sendtime']=$_MMVAR_df1a938ad7ab2665c2;

}

if($_MMVAR_4662571575bbb96510!=0){
if($_MMVAR_9d93563ab77c6f2ef4==0){
$_MMVAR_336416a90e316dc3e0=' where ';
$_MMVAR_9d93563ab77c6f2ef4=1;
}
if($_MMVAR_4662571575bbb96510==1){
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.$_MMVAR_f418aa84076e2a097e.' lastonlinetime>'.(time()-1500);
}else{
$_MMVAR_6acb770a66d220e25e.=$_MMVAR_336416a90e316dc3e0.$_MMVAR_f418aa84076e2a097e.' d13int5=1';		
}
$_MMVAR_f418aa84076e2a097e=' and ';
$_MMVAR_336416a90e316dc3e0='';		
$_MMVAR_0ecbe44a2d4417e190['sonline']=$_MMVAR_4662571575bbb96510;
}

if($_MMVAR_2dc0051b4a3fa32b83>100){
if($_MMVAR_077368e81441844449==0 && stristr($_MMVAR_6acb770a66d220e25e,'where')==False){
$_MMVAR_077368e81441844449=1;
echo '<script>$.msgbox({width:500,height:150,content:{type:\'text\', content:\'友情提示：页码已经超出100页！<br>为了加快查询速度，系统已经自动调整排序方式。<br>原来的首页是现在的尾页，原来的尾页是现在首页。\'},autoClose:9});</script>';		
}
}
$_MMVAR_0ecbe44a2d4417e190['byiid']=$_MMVAR_077368e81441844449;
$_MMVAR_7e1bc99639894955e5=0;
$_MMVAR_0e78720a9e0afc0f3d="";
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
if($_MMVAR_077368e81441844449==0 || stristr($_MMVAR_6acb770a66d220e25e,'where')){
$_MMVAR_6acb770a66d220e25e.=' order by id desc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;
}else{
$_MMVAR_6acb770a66d220e25e.=' LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;
}


$_MMVAR_3fac05200815e9252b=$_MMVAR_6acb770a66d220e25e;
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
$_MMVAR_77e413c0c731500d10->_MMFUN_2ff52b47fa1890bb43();
if($_MMVAR_eea934454d241a2c72==1) $_MMVAR_0ecbe44a2d4417e190['sqmode']=$_MMVAR_eea934454d241a2c72;
if(_MMFUN_44c1eaa638cc1b7de2(9)){
$_MMVAR_f1a5c5710b3a6a6b86=0;
}else{
$_MMVAR_f1a5c5710b3a6a6b86=1;
}

$_MMVAR_7b23ccb22c0a2536fd=0;
?>
<style>.jsbtn{border:1px solid #336699;background:#487FA6;color:#B9E6F5}
.jsbtn2{border:1px solid #336699;background:#487FA6;color:#B9E6F5}
.saveintro{border:1px solid #336699;background:#487FA6;color:#B9E6F5}</style>
<form action="?action=main" method="post" target="_self" id="f1" name="f1">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td><input id="sqmode" name="sqmode" type="checkbox" title="快速模式不显示记录总数" value="1" <?php if($_MMVAR_eea934454d241a2c72==1)echo 'checked'?>/><label help=pub>快速模式</label>，<?php

echo '<select name=\'sxjlid\' id=\'xjlid\' style=\'width:120px;height:22px\'>';
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2){
echo ' selected';
$_MMVAR_e4019df8eca2c2ac2c=$_MMVAR_9a036496d66f59815a['xjlname'];					
$_MMVAR_7b23ccb22c0a2536fd=$_MMVAR_9a036496d66f59815a['muestexit'];
}
echo '>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}



?>
</select>，
<select name="sk1str" id="sk1str" style="width:60px;height:22px">
<option value='0' <?php if($_MMVAR_df8684b5cfa8b119cd==-1)echo ' selected';?>>所有</option>
<?php

$_MMVAR_cc59eed55f0be48973=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_keyattribute where keycday<>0 and id>9 order by id asc');
foreach ($_MMVAR_cc59eed55f0be48973 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['keyfirststr'];
if($_MMVAR_df8684b5cfa8b119cd==$_MMVAR_9a036496d66f59815a['keyfirststr'])
echo ' selected';
echo '>'.$_MMVAR_9a036496d66f59815a['keyname'].'</option>';
}
?>
</select>，<?php
$_MMVAR_f87ca4bad6ff9068f9=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_agent where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
echo '<select name=\'sagentid\' id=\'agentid\' style=\'width:120px;height:22px\'>';
echo '<option value=\'0\'';
if($_MMVAR_6356c35a3d01d5ca1d==0)echo ' selected';
echo '>所有</option>';					
echo '<option value=\'-1\'';
if($_MMVAR_6356c35a3d01d5ca1d==-1)echo ' selected';
echo '>仅自己的卡</option>';							
echo '<option value=\'-2\'';
if($_MMVAR_6356c35a3d01d5ca1d==-2)echo ' selected';
echo '>所有代理的卡</option>';					
foreach ($_MMVAR_f87ca4bad6ff9068f9 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_6356c35a3d01d5ca1d==$_MMVAR_9a036496d66f59815a['id'])echo ' selected';
echo '>'.$_MMVAR_9a036496d66f59815a['agentname'].'</option>';
}
?>
</select>，
<input id="sonline" name="sonline" type="checkbox" value="<?php echo $_MMVAR_7b23ccb22c0a2536fd+1;?>" <?php if($_MMVAR_4662571575bbb96510>0)echo 'checked'?>/><label for="sonline">当前在线</label>，
<input id="sact" name="sact" type="checkbox" value="1" <?php if($_MMVAR_e9fa6198fc43bff853==1)echo 'checked'?>/><label for="sact">已激活</label>，
<input name="sendtime" type="text" value="<?php echo $_MMVAR_df1a938ad7ab2665c2?>" class="sml1inputText" />天内到期，
<select name="stype" id="stype" style="width:80px;height:22px">
<option value=0 <?php if($_MMVAR_0b9ba8763f86bc549d==0)echo ' selected';?>>卡号</option>
<option value=2 <?php if($_MMVAR_0b9ba8763f86bc549d==2)echo ' selected';?>>标签</option>
<option value=4 <?php if($_MMVAR_0b9ba8763f86bc549d==4)echo ' selected';?>>绑定信息</option>
<!--option value=3 <?php if($_MMVAR_0b9ba8763f86bc549d==3)echo ' selected';?>>备注</option-->
</select>-><input name="skeywords" type="text" value="<?php echo $_MMVAR_df03ade3870b1399b8?>" class="inputText2" />
<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" /></td>
</tr>
</table>
</form>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<form action="?action=batch&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>" method="post" id="f2" name="f2" onsubmit="return chkfromlist()">
<tr class="tb_tip">
<td colspan="14"><?php	echo $_MMVAR_e4019df8eca2c2ac2c;?> → 注册卡列表,<?php
if ($_MMVAR_eea934454d241a2c72==1 && $_MMVAR_7e1bc99639894955e5==0){
echo '快速模式不统计总计录数。';
}else{
echo '共查询到'.$_MMVAR_4a134686cf4c02ac8d.'条记录。';
}?>[查询用时: <?php echo $_MMVAR_77e413c0c731500d10->_MMFUN_2bc50f97e2e07d84c2()?> 毫秒]</td>
</tr>
<tr class="tb_header">
<td cols=1>ID</td>
<td cols=2><label help=k0>卡号</label></td>
<td cols=3><label help=pub>分区|绑定信息</label></td>
<td cols=3><label help=pub>标签</label></td>
<td cols=4><label help=pub>点数</label></td>
<td cols=5 width=50><label help=pub>次数</label></td>
<td cols=6 width=30><label help=pub>天数</label></td>
<td cols=7 width=30><label help=k0>连接</label></td>
<td cols=8 width=30><label help=pub>解绑</label></td>
<td cols=9 width=30><label help=pub>代理</label></td>
<td cols=10 width=100><label help=pub>激活日期</label></td>
<td cols=11 width=100><label help=pub>到期日期</label></td>
<td cols=12 width=30><label help=k0>状态</label></td>
<td cols=13 width=170><label help=k0>管理操作</label>(<label help=pub>冻结与解冻</label>)</td>
</tr>
<?php		
$_MMVAR_8ff60a7771c3f2c087=0;
if(!empty($_MMVAR_5a0f5f64cd15c205df)){
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
}elseif($_MMVAR_9a036496d66f59815a['int2']==1){
$_MMVAR_bb23f4d6ba44c0a3db='style=\'background:#F7F3B7\'';
}else{
$_MMVAR_bb23f4d6ba44c0a3db="";			
}
if($_MMVAR_9a036496d66f59815a['isdel']==1 && $_MMVAR_f1a5c5710b3a6a6b86==0){
$_MMVAR_984a0b85cb6498ca43='><td colspan=12>该行数据已被删除</td></tr><tr style=\'display:none;\'';
}else{
$_MMVAR_984a0b85cb6498ca43="";			
}
$_MMVAR_a89a940c4ae5e3678b="";
if($_MMVAR_9a036496d66f59815a['linknum']>1 && $_MMVAR_9a036496d66f59815a['ext1']=='1')
$_MMVAR_a89a940c4ae5e3678b='style=\'color:#f00\'';
?><tr hnum=<?php echo $_MMVAR_8ff60a7771c3f2c087?> class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>" <?php echo $_MMVAR_984a0b85cb6498ca43 ?>>
<td colid=1 class='t01'><span class='t0'>&nbsp;<div class='t1'><table border=0><tr><td valign=top colspan=2  style='border-bottom:1px solid #666'>Id[<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>], Time[<?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['addtime'],5) ?>]</span> <?php echo $_MMVAR_9a036496d66f59815a['ordernum']=='0'?'':', 订单号['.$_MMVAR_9a036496d66f59815a['ordernum'].'] '?><br>机器码[<?php echo $_MMVAR_bac4c643bf8a5895c9 ?>],<span  <?php if($_MMVAR_7b23ccb22c0a2536fd=='1') echo 'title=\'spcode:'.$_MMVAR_9a036496d66f59815a['v7ext2'].'\'';?>>加时<input type="text" maxlength="5" class="sml1inputText" value=0 id="js<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>">天    <input class="jsbtn" kid="<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>" type="button" value="执行加时操作"></td></tr><tr><td>
点数:<input type="text" maxlength="5" style="width:30px;height:18px;line-height:18px" value="<?php echo $_MMVAR_9a036496d66f59815a['dayactivetimes'] ?>" name="dayactivetimes" id="dayactivetimes<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>">
连接:<input type="text" maxlength="3" style="width:30px;height:18px;line-height:18px" value="<?php echo $_MMVAR_9a036496d66f59815a['linknum'] ?>" name="linknum" id="linknum<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><br>
分区:<input type="text" maxlength="5" style="width:30px;height:18px;line-height:18px" value="<?php echo $_MMVAR_9a036496d66f59815a['int1'] ?>" name="int1" id="int1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>">
标签:<input type="text" maxlength="18" style="width:80px;height:18px;line-height:18px" value="<?php echo $_MMVAR_9a036496d66f59815a['ext1'] ?>" name="ext1" id="ext1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><br>
绑定信息:<input type="text" maxlength="99" style="width:124px;height:18px;line-height:18px" value="<?php echo $_MMVAR_9a036496d66f59815a['v7ext1'] ?>" name="v7ext1" id="v7ext1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><br>
</td><td>
<textarea class="keyintroa" name="intro" keyid="<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"  id="intro<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo htmlspecialchars($_MMVAR_9a036496d66f59815a['intro']) ?></textarea><br />
<input class="saveintro" kid="<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>" name="nnoo" type="button" value="保存修改">
<span style='color:#f00;padding-left:20px'></span></td></tr></table></div></span><input type="checkbox" name="id[]" value="<?php echo $_MMVAR_9a036496d66f59815a['keys'];?>" <?php if($_MMVAR_9a036496d66f59815a['cday']==0 || ($_MMVAR_9a036496d66f59815a['isdel']==1 && $_MMVAR_f1a5c5710b3a6a6b86==0)) echo 'disabled';?> /></td>	
<td colid=2 class="regkey" <?php echo $_MMVAR_bb23f4d6ba44c0a3db?>><?php
if($_MMVAR_9a036496d66f59815a['isdel']==1){
echo '<s><span style=\'color:#aaa\'>'.$_MMVAR_9a036496d66f59815a['keys'].'</span></s><span style=\'font-size:10px\'>['._MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['deltime'],1).']</span>';
}else{
echo $_MMVAR_9a036496d66f59815a['keys'];				
}				 
?></td>
<td colid=3 id="tdint1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['int1'].'|'.$_MMVAR_9a036496d66f59815a['v7ext1']?></td>	
<td colid=3 id="tdext1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['ext1']?></td>				
<td colid=4 id="tddayactivetimes<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['dayactivetimes']?></td>			
<td colid=4><?php echo $_MMVAR_9a036496d66f59815a['activetimes']?></td>
<td colid=5 id="jsday<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['cday']?></td>
<td colid=6 <?php echo $_MMVAR_a89a940c4ae5e3678b?>  id="tdlinknum<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['linknum']?></td>
<td colid=7><?php echo $_MMVAR_9a036496d66f59815a['bdtimes']?></td>
<td colid=8 <?php echo ' get=0 agentid='.$_MMVAR_9a036496d66f59815a['agentid'].'>'.$_MMVAR_9a036496d66f59815a['agentid'];	 ?></td>
<td colid=9><?php echo $_MMVAR_9a036496d66f59815a['activetime']==0?'0':_MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['activetime'],1) ?></td>
<td colid=10 id="jsendtime<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['endtime']==0?'0':_MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['endtime'],1) ?></td>
<td colid=11><?php
if($_MMVAR_9a036496d66f59815a['d13int5']=='1'){
echo '<span id=\'online'.$_MMVAR_9a036496d66f59815a['id'].'\' kid=\''.$_MMVAR_9a036496d66f59815a['id'].'\' class=\'x5 online\' style=\'CURSOR:hand\' title=\'点击退出登陆状态\'>■</span>';	
}elseif($_MMVAR_9a036496d66f59815a['lastonlinetime']>time()-1500){
echo '<span class=\'x3\' title=\'15分钟内在线\'>■</span>';					
}else{
echo '<span class=\'x1\' title=\'不在线\'>■</span>';					
}
if(intval($_MMVAR_9a036496d66f59815a['ispay'])==1){
echo '<span class=\'x2\' title=\'已付款\'>■</span>';
}else{
echo '<span class=\'x1\' title=\'未付款\'>■</span>';
}?></td>
<td colid=12><a ac='jb' href="###" ohref="?action=batch&op=jb&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&id=<?php echo $_MMVAR_9a036496d66f59815a['keys']?>">解绑</a>|<a ac='djd' href="###" ohref1="?action=batch&op=dj&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&id=<?php echo $_MMVAR_9a036496d66f59815a['keys']?>" ohref2="?action=batch&op=jd&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&id=<?php echo $_MMVAR_9a036496d66f59815a['keys']?>"><?php echo $_MMVAR_9a036496d66f59815a['normal']!=='1'?'<span style=\'color:#f00\'>解冻</span>':'冻结' ?></a>|<a href=logs.php?sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&key=<?php echo $_MMVAR_9a036496d66f59815a['keys']?>>日志</a>|<a <?php
if($_MMVAR_9a036496d66f59815a['cday']==0){
echo 'href=\'###\' onclick='.YH.'$.msgbox({width:300,height:120,content:{type:\'alert\', content:\'试用卡不允许删除\'}});'.YH.'>';
}else{
echo ' ac=\'del\' href=\'###\' ohref=\'?action=batch&op=del&sxjlid='.$_MMVAR_135a723a975f2e33a2.'&id='.$_MMVAR_9a036496d66f59815a['keys'].'\'>';
}?>删除</a></td>
</tr>
<?php }
} ?><tr class="tb_header">
<td colspan="14" align=left>全选<input name="chkall" type="checkbox" value="on" onclick=CheckAll(this.form)>

<select name="op" id="op" style="width:90px;height:20px">
<option value="del">批量删除</option>
<option value="jb" selected>批量解绑</option>
<?php if($_MMVAR_7b23ccb22c0a2536fd>0){ ?>	
<option value="xx">解除登陆状态</option>
<?php }?>
<option value="fc0">分区批量归零</option>
<option value="dj">批量冻结</option>
<option value="jd">批量解冻</option>
<option value="zy">身份转移</option>
<?php if($_MMVAR_f1a5c5710b3a6a6b86){ ?>
<option value="adminder">解除删除</option>
<option value="admindel">彻底删除</option>
<?php } ?>
</select>&nbsp;<?php
echo '<select style=\'display:none\' name=\'zytid\' id=\'zytid\' style=\'width:100px;height:22px\'>';
echo '<option value=\'0\' >到自己</option>';	
foreach ($_MMVAR_f87ca4bad6ff9068f9 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'].'>到'.$_MMVAR_9a036496d66f59815a['agentname'].'</option>';
}
?></select>&nbsp;<input type="image" align=absmiddle src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/batch.gif"></td></tr>
<tr class="tb_header">
<td colspan="14" align=right><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</form>
</table>
<script>$(document).ready(function(){$("#op").change(function(){var cmode=$(this).children("option:selected").attr("value");if(cmode=='zy'){$("#zytid").show();}else{$("#zytid").hide();}});});</script>
<script language="javascript" src="<?php echo _MMFUN_dfbc78476298e0e159() ?>/js/keylist.js"></script>
<script>var gkeyt_ext="<?php echo $_MMVAR_7ca6661cda24ab3ecb?>";</script>
<script>
$(document).ready(function(){
$(".online").bind("click",function(){
var kid=$(this).attr("kid");
var pdata="kid="+kid+"&sid=<?php echo $_MMVAR_135a723a975f2e33a2?>";
$.ajax({type: "POST",url: "?action=outline&rand="+sTime2(),data:pdata,
success: function(msg){
if(msg=="ok"){
$.msgbox({width:500,height:120,title:'操作成功',content:{type:'alert', content:'让用户登陆标识变为离线成功！'}});
$("#online"+kid).removeClass("x3").addClass("x1");
}else{
$.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:msg}});
} },
error:function(ajaxobj){
$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'AJAX出错信息：'+ajaxobj.status}});
}}); 
})
});</script>
<script language="javascript" src="<?php echo _MMFUN_dfbc78476298e0e159() ?>/js/keylist0.js"></script>
<div id="pf" style="margin:0 400px;width:20px;height:10px;overflow:hidden;">■  EXPLAIN <?php echo $_MMVAR_0e78720a9e0afc0f3d.$_MMVAR_3fac05200815e9252b;?></div>