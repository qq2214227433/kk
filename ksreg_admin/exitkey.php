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
Case "main":
_MMFUN_f845b4be82a2064ad0();
break;
Case "viewlist":
_MMFUN_79cbf82de63c2f041e();
break;
Case "delkey":
_MMFUN_7175623b52be56746c();
break;
default:
_MMFUN_6da5ed7d3a356dcac7("参数错误1!");
}

function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);


$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `reg_keys_10000_1` where `keys`=\'Y287DVCRC1AG7HVR\'','sync');
print_r($_MMVAR_5a0f5f64cd15c205df);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' LIMIT 0,1');
if($_MMVAR_135a723a975f2e33a2==0){					
$_MMVAR_135a723a975f2e33a2=$_MMVAR_e9ffef5bdc7675ff63['id'];
}

?>
<form action="?action=viewlist&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>" method="post" target="_self" id="f37" name="f37">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td>所属软件：</td><td><?php echo $_MMVAR_e9ffef5bdc7675ff63['xjlname'];?><input value=<?php echo $_MMVAR_135a723a975f2e33a2;?> type="hidden" name="sxjlid" id="sxjlid" ></td>
</tr>
<tr class="tb_tr2">
<td>所属身份：</td><td><select name="sagentid" id="agentid" style="width:120px;height:22px"><?php
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
<tr class="tb_tr1">
<td>卡号列表：</td><td><textarea style="width:400px;height:280px" name="keylist" cols="60">每行一张卡号</textarea></td>
</tr>
<tr class="tb_tr2" >
<td colspan=2 align=center>	<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" />     </td>
</tr>
</table>
</form>

<?php
}

function _MMFUN_79cbf82de63c2f041e(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_6356c35a3d01d5ca1d=_MMFUN_cc3cf510bffd973b95('sagentid','','int',0);
$_MMVAR_e35d9b8ff5c6a49600=_MMFUN_cc3cf510bffd973b95('keylist','','sql',0);
$_MMVAR_e94e5fbed4632772b9='';
switch ($_MMVAR_6356c35a3d01d5ca1d){
Case -2:
break;
Case -1:
$_MMVAR_e94e5fbed4632772b9=' and `agentid` >0 ';
break;
default:
$_MMVAR_e94e5fbed4632772b9=' and `agentid`='.$_MMVAR_6356c35a3d01d5ca1d.' ';
}
$_MMVAR_e35d9b8ff5c6a49600=str_replace(" ","",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_e35d9b8ff5c6a49600=str_replace("	","",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_e35d9b8ff5c6a49600=str_replace("\r","",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_e35d9b8ff5c6a49600=str_replace("\n","|",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_e35d9b8ff5c6a49600=$_MMVAR_e35d9b8ff5c6a49600.'-OVER';
$_MMVAR_e35d9b8ff5c6a49600=str_replace("|-OVER","",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_e35d9b8ff5c6a49600=str_replace("-OVER","",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_e35d9b8ff5c6a49600=str_replace("||","|",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_e35d9b8ff5c6a49600=str_replace("||","|",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_e35d9b8ff5c6a49600=str_replace("||","|",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_e35d9b8ff5c6a49600=str_replace("||","|",$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_af25d0be87fa11dc19=explode('|',$_MMVAR_e35d9b8ff5c6a49600);
$_MMVAR_dc69844cca71f5f51a=array_unique($_MMVAR_af25d0be87fa11dc19);
$_MMVAR_15ff22f8fca6ea8503=implode('|',$_MMVAR_dc69844cca71f5f51a);
$_MMVAR_e8b98d7a354020e0fc=explode('|',$_MMVAR_15ff22f8fca6ea8503);
$_MMVAR_84fb4f75a7f9a99f30=0;
$_MMVAR_83683f07af92656959=0;
$_MMVAR_1e0bda44d5ca1eeaa5=0;
$_MMVAR_a0e06826a6f623ae4f='，重复卡'.(count($_MMVAR_af25d0be87fa11dc19)-count($_MMVAR_e8b98d7a354020e0fc)).'张';
$_MMVAR_4987f76540a7b28a77='';
$_MMVAR_351dfeb3aab6634d09='';
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件未找到!",'report');
?>
<script>
function CheckAll(form) {for (var i=0;i<form.elements.length;i++) {var e = form.elements[i];if (e.name != 'chkall' & !e.disabled & e.name != 'admindel') e.checked = form.chkall.checked;}}	
function chkfrom37(){
if(confirm("确认要执行退卡操作吗，该操作将会删除被退的卡，请慎重考虑！")){return true;}else{return false;}
}
</script>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<form action="?action=delkey&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>" method="post" id="f2" name="f2" onsubmit="return chkfrom37()">
<tr class="tb_tip">
<td colspan="7"><?php echo $_MMVAR_e9ffef5bdc7675ff63['xjlname']?> → 分析列表 </td>
</tr>
<tr class="tb_header">
<?php
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
?>
<td>ID</td>
<td>卡号</td>
<td>被标记删除</td>
<td>标签</td>
<td>用户名</td>
<td>充值日期</td>
<td>代理ID</td>
<?php
}else{
?>
<td>ID</td>
<td>卡号</td>
<td>被标记删除</td>
<td>标签</td>
<td>激活日期</td>
<td>到期日期</td>
<td>代理ID</td>			
<?php
}
?>
</tr>
<?php
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<count($_MMVAR_e8b98d7a354020e0fc);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.' where `keys`=\''.$_MMVAR_e8b98d7a354020e0fc[$_MMVAR_8ff60a7771c3f2c087].'\''.$_MMVAR_e94e5fbed4632772b9.' order by id desc limit 0,1');
if(empty($_MMVAR_9a036496d66f59815a)){
echo '<tr class=tb_tr1><td>***</td><td>'.$_MMVAR_e8b98d7a354020e0fc[$_MMVAR_8ff60a7771c3f2c087].'</td><td>未找到这张卡</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';			
}else{
?>
<tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td><input type="checkbox" name="id[]" value="<?php echo $_MMVAR_9a036496d66f59815a['keys'];?>" <?php if($_MMVAR_9a036496d66f59815a['cday']==0) echo 'disabled';?> /><?php echo $_MMVAR_9a036496d66f59815a['id'];?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['keys'];?></td>
<td><?php if($_MMVAR_9a036496d66f59815a['isdel']==1){
echo '是';
$_MMVAR_84fb4f75a7f9a99f30=$_MMVAR_84fb4f75a7f9a99f30+1;
}else{
echo '否';
}?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['ext1'];?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['cusername'].'&nbsp;';?></td>
<td><?php if(strlen($_MMVAR_9a036496d66f59815a['deltime'])>5){
echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['deltime'],1);
$_MMVAR_83683f07af92656959=$_MMVAR_83683f07af92656959+1;
if($_MMVAR_9a036496d66f59815a['isdel']==1)echo '册';
}else{
echo '未充值';
}?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['agentid'];?></td>
<?php
}
}
$_MMVAR_4987f76540a7b28a77='，已充值卡'.$_MMVAR_84fb4f75a7f9a99f30.'张';
}else{
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<count($_MMVAR_e8b98d7a354020e0fc);$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.' where `keys`=\''.$_MMVAR_e8b98d7a354020e0fc[$_MMVAR_8ff60a7771c3f2c087].'\''.$_MMVAR_e94e5fbed4632772b9.' order by id desc limit 0,1');
if(empty($_MMVAR_9a036496d66f59815a)){
echo '<tr class=tb_tr1><td>***</td><td>'.$_MMVAR_e8b98d7a354020e0fc[$_MMVAR_8ff60a7771c3f2c087].'</td><td>未找到这张卡</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';			
}else{
?>
<tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td><input type="checkbox" name="id[]" value="<?php echo $_MMVAR_9a036496d66f59815a['keys'];?>" <?php if($_MMVAR_9a036496d66f59815a['cday']==0) echo 'disabled';?> /><?php echo $_MMVAR_9a036496d66f59815a['id'];?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['keys'];?></td>
<td><?php if($_MMVAR_9a036496d66f59815a['isdel']==1){
echo '是';
$_MMVAR_84fb4f75a7f9a99f30=$_MMVAR_84fb4f75a7f9a99f30+1;
}else{
echo '否';
}?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['ext1'];?></td>
<td><?php if(strlen($_MMVAR_9a036496d66f59815a['activetime'])>5){
echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['activetime'],1);
$_MMVAR_1e0bda44d5ca1eeaa5=$_MMVAR_1e0bda44d5ca1eeaa5+1;
}else{
echo '未激活';
}?></td>
<td><?php if(strlen($_MMVAR_9a036496d66f59815a['endtime'])>5){
echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['endtime'],1);
}else{
echo '0';
}?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['agentid'];?></td>
</tr>
<?php
}
}		
$_MMVAR_351dfeb3aab6634d09='，已使用卡'.$_MMVAR_1e0bda44d5ca1eeaa5.'张';
}
?>
<tr class="tb_header">
<td colspan="7"><input name="chkall" type="checkbox" value="on" onclick=CheckAll(this.form)>全选
<?php 
if(_MMFUN_44c1eaa638cc1b7de2(9)){
?>
<input type="hidden" name="admindel" id="admindel" value="no">
<?php			
}else{?><input type="checkbox" name="admindel" id="admindel" value="yes">彻底删除
<?php
}
?>	
<input type="submit" value=" 批量删除 " name="button"></td>
</tr>
</form>
</table>	
<?php
echo '<p align=center color=red>提示'.$_MMVAR_a0e06826a6f623ae4f.$_MMVAR_4987f76540a7b28a77.$_MMVAR_351dfeb3aab6634d09.'</p>';
}

function _MMFUN_7175623b52be56746c(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','get','int',0);
$_MMVAR_7d5ca95e0a04dcc323=_MMFUN_cc3cf510bffd973b95('admindel','get','sql','no');

$_MMVAR_f6abeba96baacf29ce=TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2;
if(_MMFUN_44c1eaa638cc1b7de2(9))
$_MMVAR_7d5ca95e0a04dcc323='no';

if(isset($_POST['id'])){
$_MMVAR_7ca1659d6f01cb3410=$_POST['id'];
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){
if($_MMVAR_7d5ca95e0a04dcc323=='yes'){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.$_MMVAR_f6abeba96baacf29ce.'` where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\' and cday<>0','sync'); 
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.$_MMVAR_f6abeba96baacf29ce.'` set isdel=1, deltime='.time().'  where `keys`=\''.$_MMVAR_4ff92f711953671bb4.'\' and cday<>0 ','sync');			
}         
}

}else{
_MMFUN_6da5ed7d3a356dcac7("参数错误!"); 
}

if($_MMVAR_7d5ca95e0a04dcc323=='yes'){		
_MMFUN_6da5ed7d3a356dcac7("彻底删除成功!",$_SERVER['HTTP_REFERER']);
}else{		
_MMFUN_6da5ed7d3a356dcac7("标记为删除状态成功!",$_SERVER['HTTP_REFERER']);
}
break;
}


echo COPYRIGHT;
?>
</body>
</html>