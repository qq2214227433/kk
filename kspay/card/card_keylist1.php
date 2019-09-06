<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_53d17c3545aae95b9e,$_MMVAR_7b6896960481a4d007;
$_MMVAR_0ecbe44a2d4417e190=array('action'=>$_MMVAR_7b6896960481a4d007,'userid'=>$_MMVAR_d6858a6d9e9ee80bab);

$_MMVAR_90502be476664717ad=50;

$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);


$_MMVAR_0de40956a86e39c058=_MMFUN_cc3cf510bffd973b95('ckday','','int',0);
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_eea934454d241a2c72=_MMFUN_cc3cf510bffd973b95('sqmode','','int',0);
$_MMVAR_6356c35a3d01d5ca1d=_MMFUN_cc3cf510bffd973b95('sagentid','','int',0);
$_MMVAR_0b9ba8763f86bc549d=_MMFUN_cc3cf510bffd973b95('stype','','int',1);
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
$_MMVAR_6acb770a66d220e25e.=' `cusername` LIKE \''._MMFUN_c3428c7e6251d22b7d($_MMVAR_df03ade3870b1399b8).'%\' and ';
}elseif($_MMVAR_0b9ba8763f86bc549d==2){
$_MMVAR_6acb770a66d220e25e.=' `ext1` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' and ';
}else{
$_MMVAR_6acb770a66d220e25e.=' `intro` LIKE \''.$_MMVAR_df03ade3870b1399b8.'%\' and ';
}
$_MMVAR_0ecbe44a2d4417e190['skeywords']=$_MMVAR_df03ade3870b1399b8;
$_MMVAR_0ecbe44a2d4417e190['stype']=$_MMVAR_0b9ba8763f86bc549d;			
}

$_MMVAR_6acb770a66d220e25e.=' `isused`=2 and agentid='.$_MMVAR_53d17c3545aae95b9e[0];


if($_MMVAR_4662571575bbb96510!=0){
$_MMVAR_6acb770a66d220e25e.=' and lastonlinetime>'.(time()-1500);	
$_MMVAR_0ecbe44a2d4417e190['sonline']=$_MMVAR_4662571575bbb96510;
}


if($_MMVAR_df1a938ad7ab2665c2!=0){
$_MMVAR_6acb770a66d220e25e.=' and endtime>0 and endtime <'.(time()+86400*$_MMVAR_df1a938ad7ab2665c2);	
$_MMVAR_0ecbe44a2d4417e190['sendtime']=$_MMVAR_df1a938ad7ab2665c2;		
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
if($_MMVAR_0de40956a86e39c058==1){				
$_MMVAR_0ecbe44a2d4417e190['ckday']=$_MMVAR_0de40956a86e39c058;
$_MMVAR_6acb770a66d220e25e.=' order by cday desc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;
}else{
$_MMVAR_6acb770a66d220e25e.=' order by id desc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;}
$_MMVAR_3fac05200815e9252b=$_MMVAR_6acb770a66d220e25e;
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
$_MMVAR_77e413c0c731500d10->_MMFUN_2ff52b47fa1890bb43();

if($_MMVAR_eea934454d241a2c72==1) $_MMVAR_0ecbe44a2d4417e190['sqmode']=$_MMVAR_eea934454d241a2c72;

?>
<style>.jsbtn{border:1px solid #336699;background:#487FA6;color:#B9E6F5}
.jsbtn2{border:1px solid #336699;background:#487FA6;color:#B9E6F5}
.saveintro{border:1px solid #336699;background:#487FA6;color:#B9E6F5}</style>
<form action="?action=keylist1&userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>" method="post" target="_self" id="f1" name="f1">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td><input id="sqmode" name="sqmode" type="checkbox" value="1" <?php if($_MMVAR_eea934454d241a2c72==1)echo 'checked'?>/><label help="pub">快速模式</label>，<input id="ckday" name="ckday" type="checkbox" value="1" <?php if($_MMVAR_0de40956a86e39c058==1)echo 'checked'?>/><label for="ckday">按天排序</label>， <?php
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
?></select>，<span style="display:none;">
<label help="k1">当前在线</label><input name="sonline" type="checkbox" value="1" <?php if($_MMVAR_4662571575bbb96510==1)echo 'checked'?>/>，
<input name="sendtime" type="text" value="<?php echo $_MMVAR_df1a938ad7ab2665c2?>" class="sml1inputText"/>天内到期，</span>
<select name="stype" id="stype" style="width:80px;height:22px">
<option value=1 <?php if($_MMVAR_0b9ba8763f86bc549d==1)echo ' selected';?>>用户名</option>
<option value=0 <?php if($_MMVAR_0b9ba8763f86bc549d==0)echo ' selected';?>>基卡</option>
<option value=2 <?php if($_MMVAR_0b9ba8763f86bc549d==2)echo ' selected';?>>标签</option>
<!--option value=3 <?php if($_MMVAR_0b9ba8763f86bc549d==3)echo ' selected';?>>备注</option-->
</select>-><input name="skeywords" type="text" value="" class="inputText2" />
<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="..<?php echo KS_PATH_PUBLIC?>/images/submit_out.gif" align="absmiddle" /></td>
</tr>
</table>
</form>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="11"><?php	echo $_MMVAR_e4019df8eca2c2ac2c ?> → 用户列表,<?php
if ($_MMVAR_eea934454d241a2c72==1 && $_MMVAR_7e1bc99639894955e5==0){
echo '快速模式不统计总计录数';
}else{
echo '共查询到'.$_MMVAR_4a134686cf4c02ac8d.'条记录。';
}?>[查询用时: <?php echo $_MMVAR_77e413c0c731500d10->_MMFUN_2bc50f97e2e07d84c2()?> 毫秒]</td>
</tr>
<tr class="tb_header">
<td><label help="k1">基卡</label></td>
<td><label help="k1">用户名</label></td>
<td><label help="pub">标签</label></td>
<td><label help="pub">点数</label></td>
<td width=50><label help="pub">次数</label></td>
<td width=30><label help="pub">天数</label></td>
<td width=30><label help="pub">解绑</label></td>
<td width=100><label help="pub">激活日期</label></td>
<td width=100><label help="pub">到期日期</label></td>
<td width=30><label help="k1">状态</label></td>
<td width=170><label help="k1">管理操作</label></td>
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
if($_MMVAR_9a036496d66f59815a['isdel']==1){
$_MMVAR_984a0b85cb6498ca43='><td colspan=10>该行数据已被删除</td></tr><tr style=\'display:none;\'';
}else{
$_MMVAR_984a0b85cb6498ca43="";			
}
$_MMVAR_5848377da404ec508f=htmlspecialchars(_MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_9a036496d66f59815a['cusername']));
?><tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>" <?php echo $_MMVAR_984a0b85cb6498ca43 ?>>
<td class='t01' width=80><span class='t0'>&nbsp;<div class='t1'>ID：<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>，添加日期：<?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['addtime'],5).' '.$_MMVAR_9a036496d66f59815a['normal'] ?><br><?php echo $_MMVAR_9a036496d66f59815a['ordernum']=='0'?'':'订单号：'.$_MMVAR_9a036496d66f59815a['ordernum'].'<br>'?>绑定机器码：<?php echo $_MMVAR_bac4c643bf8a5895c9 ?><br>基卡：<?php echo $_MMVAR_9a036496d66f59815a['keys'] ?><hr style="height:1px;overflow:hidden;">
<input type="hidden" name=id2 id="id<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>" value="<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>">
用户名：<?php echo $_MMVAR_5848377da404ec508f ?><br />
密　码：<input type="text" maxlength="20" style="width:130px;height:18px;line-height:18px" value="<?php echo $_MMVAR_9a036496d66f59815a['cpassword'] ?>" name="cpassword" gl="1" id="cpassword<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>">可填字母和数字<br />
超　密：<input type="text" maxlength="20" style="width:130px;height:18px;line-height:18px" value="<?php echo $_MMVAR_9a036496d66f59815a['ext2'] ?>" name="ext2" id="ext2<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>">可填字母和数字<br />
标　签：<input type="text" maxlength="50" style="width:200px;height:18px;line-height:18px" value="<?php echo $_MMVAR_9a036496d66f59815a['ext1'] ?>" name="ext1" id="ext1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><br />
绑定信息：<input type="text" maxlength="50" style="width:200px;height:18px;line-height:18px" value="<?php echo $_MMVAR_9a036496d66f59815a['v7ext1'] ?>" name="v7ext1" id="v7ext1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><br />
<textarea class="keyintro" style="display:none" name="intro" keyid="<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"  id="intro<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo htmlspecialchars($_MMVAR_9a036496d66f59815a['intro']) ?></textarea><br />
<input class="saveintro" kid="<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>" name="nnoo" type="button" value="保存修改">
<span style='color:#f00;padding-left:20px'></span></div></span><span style="font-size:12px;color:#333"><?php echo $_MMVAR_9a036496d66f59815a['keys'];?></span></td>


<td class="regkey" <?php echo $_MMVAR_bb23f4d6ba44c0a3db?>><?php
if($_MMVAR_9a036496d66f59815a['isdel']==1){
echo '<s><span style=\'color:#aaa\'>'.$_MMVAR_5848377da404ec508f.'</span></s><span style=\'font-size:10px\'>['._MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['deltime'],1).']</span>';
}else{
echo $_MMVAR_5848377da404ec508f;				
}				 
?></td>
<td id="tdext1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['ext1']?></td>			
<td id="tddayactivetimes<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['dayactivetimes']?></td>	
<td><?php echo $_MMVAR_9a036496d66f59815a['activetimes']?></td>
<td id="jsday<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['cday']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['bdtimes']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['activetime']==0?'0':_MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['activetime'],1) ?></td>
<td id="jsendtime<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"><?php echo $_MMVAR_9a036496d66f59815a['endtime']==0?'0':_MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['endtime'],1) ?></td>
<td><?php
if($_MMVAR_9a036496d66f59815a['lastonlinetime']>time()-1500){
echo '<span class=\'x3\' title=\'15分钟内在线\'>■</span>';
}else{
echo '<span class=\'x1\' title=\'不在线\'>■</span>';
}
?></td>
<td><a ac='jb' href="###" ohref="?action=batch&op=jb&userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&id=<?php echo $_MMVAR_9a036496d66f59815a['keys']?>">解绑</a>|<a ac='djd' href="###" ohref1="?action=batch&op=dj&userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&id=<?php echo $_MMVAR_9a036496d66f59815a['keys']?>" ohref2="?action=batch&op=jd&userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&id=<?php echo $_MMVAR_9a036496d66f59815a['keys']?>"><?php echo $_MMVAR_9a036496d66f59815a['normal']!=='1'?'<span style=\'color:#f00\'>解冻</span>':'冻结' ?></a></td>
</tr>
<?php } ?><tr class="tb_header">
<td colspan="11" align=right><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</form>
</table>
<script language="javascript" src="<?php echo _MMFUN_dfbc78476298e0e159() ?>/js/keylist.js"></script>
<script>var guserid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>;var gkeyt_ext="<?php echo $_MMVAR_7ca6661cda24ab3ecb?>";</script>
<script language="javascript" src="./card/keylist1.js"></script>
<div style="margin:0 400px;width:20px;height:10px;overflow:hidden;"></div><p><div style="height:100px">&nbsp;</div></p>