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

if(!empty($_MMVAR_df03ade3870b1399b8)){
if($_MMVAR_0b9ba8763f86bc549d==0){
$_MMVAR_6acb770a66d220e25e.=' `keys` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' and ';
}elseif($_MMVAR_0b9ba8763f86bc549d==1){
$_MMVAR_6acb770a66d220e25e.=' `cusername` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' and ';
}elseif($_MMVAR_0b9ba8763f86bc549d==2){
$_MMVAR_6acb770a66d220e25e.=' `ext1` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' and ';
}else{
$_MMVAR_6acb770a66d220e25e.=' `intro` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' and ';
}
$_MMVAR_0ecbe44a2d4417e190['skeywords']=$_MMVAR_df03ade3870b1399b8;
$_MMVAR_0ecbe44a2d4417e190['stype']=$_MMVAR_0b9ba8763f86bc549d;			
}

$_MMVAR_6acb770a66d220e25e.=' `isused`=0 and agentid='.$_MMVAR_53d17c3545aae95b9e[0];

if($_MMVAR_8d2688f28029ea9f44!=-1){
$_MMVAR_6acb770a66d220e25e.=' and cday='.$_MMVAR_8d2688f28029ea9f44;		
$_MMVAR_0ecbe44a2d4417e190['scday']=$_MMVAR_8d2688f28029ea9f44;
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

?>
<style>.jsbtn{border:1px solid #336699;background:#487FA6;color:#B9E6F5}
.jsbtn2{border:1px solid #336699;background:#487FA6;color:#B9E6F5}
.saveintro{border:1px solid #336699;background:#487FA6;color:#B9E6F5}</style>
<form action="?action=keylist2&userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>" method="post" target="_self" id="f1" name="f1">
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
?></select>，
<select name="scday" id="scday" style="width:100px;height:22px">
<option value=-1 <?php if($_MMVAR_8d2688f28029ea9f44==-1)echo ' selected';?>>所有</option>
<option value=1 <?php if($_MMVAR_8d2688f28029ea9f44==1)echo ' selected';?>>天卡</option>
<option value=7 <?php if($_MMVAR_8d2688f28029ea9f44==7)echo ' selected';?>>周卡</option>
<option value=30 <?php if($_MMVAR_8d2688f28029ea9f44==30)echo ' selected';?>>月卡</option>
<option value=90 <?php if($_MMVAR_8d2688f28029ea9f44==90)echo ' selected';?>>季卡</option>
<option value=365 <?php if($_MMVAR_8d2688f28029ea9f44==365)echo ' selected';?>>年卡</option>
</select>，
<select name="stype" id="stype" style="width:80px;height:22px">
<option value=0 <?php if($_MMVAR_0b9ba8763f86bc549d==0)echo ' selected';?>>卡号</option>
<option value=2 <?php if($_MMVAR_0b9ba8763f86bc549d==2)echo ' selected';?>>标签</option>
</select>-><input name="skeywords" type="text" value="" class="inputText2" />
<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="..<?php echo KS_PATH_PUBLIC?>/images/submit_out.gif" align="absmiddle" /></td>
</tr>
</table>
</form>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="8"><?php echo $_MMVAR_e4019df8eca2c2ac2c?> → 未使用的充值卡列表,<?php
if ($_MMVAR_eea934454d241a2c72==1 && $_MMVAR_7e1bc99639894955e5==0){
echo '快速模式不统计总计录数';
}else{
echo '共查询到'.$_MMVAR_4a134686cf4c02ac8d.'条记录。';
}?>[查询用时: <?php echo $_MMVAR_77e413c0c731500d10->_MMFUN_2bc50f97e2e07d84c2()?> 毫秒]</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>添加日期</td>
<td>标签</td>
<td>点数</td>
<td>卡号</td>
<td width=30>天数</td>
<td width=30>付款</td>
<td width=170>管理操作</td>
</tr>
<?php		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;
if($_MMVAR_9a036496d66f59815a['isdel']==1){
$_MMVAR_984a0b85cb6498ca43='><td colspan=7>该行数据已被删除</td></tr><tr style=\'display:none;\'';
}else{
$_MMVAR_984a0b85cb6498ca43="";			
}

?><tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>" <?php echo $_MMVAR_984a0b85cb6498ca43 ?>>
<td class='t01'><?php echo $_MMVAR_9a036496d66f59815a['id'] ?></td>		
<td class='t01'><?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['addtime'],1)?></td>		
<td id="tdext1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['ext1']?></td>		
<td id="tddayactivetimes<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['dayactivetimes']?></td>	
<td class="regkey"><?php
if($_MMVAR_9a036496d66f59815a['isdel']==1){
echo '<s><span style=\'color:#aaa\'>'.$_MMVAR_9a036496d66f59815a['keys'].'</span></s>';
}else{
echo $_MMVAR_9a036496d66f59815a['keys'];				
}				 
?></td>
<td id="jsday<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['cday']?></td>
<td><?php
if(intval($_MMVAR_9a036496d66f59815a['ispay'])==1){
echo '<span class=\'x2\' title=\'已付款\'>■</span>';
}else{
echo '<span class=\'x3\' title=\'未付款\'>■</span>';
}
?></td>
<td><a ac='djd' href="###" ohref1="?action=batch&op=dj&userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&id=<?php echo $_MMVAR_9a036496d66f59815a['keys']?>" ohref2="?action=batch&op=jd&userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&id=<?php echo $_MMVAR_9a036496d66f59815a['keys']?>"><?php echo $_MMVAR_9a036496d66f59815a['normal']!=='1'?'<span style=\'color:#f00\'>解冻</span>':'冻结' ?></a></td>
</tr>
<?php } ?><tr class="tb_header">
<td colspan="8" align=right><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</table>

<script language="javascript" src="<?php echo _MMFUN_dfbc78476298e0e159() ?>/js/keylist.js"></script>
<script>var guserid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>;var gkeyt_ext="<?php echo $_MMVAR_7ca6661cda24ab3ecb?>";</script>
<script language="javascript" src="./card/keylist0.js"></script>
<script>
$(document).ready(function(){
$(".regkey").bind("mousedown",function(){if(window.clipboardData.setData("text",this.innerText)){alert("注册卡号" + this.innerText + "已复制到剪贴板！")}});
});
</script>
<div style="margin:0 400px;width:20px;height:10px;overflow:hidden;">■  EXPLAIN <?php echo $_MMVAR_0e78720a9e0afc0f3d.$_MMVAR_3fac05200815e9252b;?></div>