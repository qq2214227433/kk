<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!",'report');

$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_6356c35a3d01d5ca1d=_MMFUN_cc3cf510bffd973b95('sagentid','','int',-2);

$_MMVAR_e93441182723b4d297=_MMFUN_cc3cf510bffd973b95('activetime1','','sql','');
$_MMVAR_c61b891314dc1b25ee=_MMFUN_cc3cf510bffd973b95('activetime2','','sql','');
$_MMVAR_19c33bc80c4d0d9851=0;
if($_MMVAR_e93441182723b4d297!='' && $_MMVAR_c61b891314dc1b25ee !=''){
$_MMVAR_2f1c492c9b8d4accd3=strtotime($_MMVAR_e93441182723b4d297);
$_MMVAR_935eca373bef8b79c8=strtotime($_MMVAR_c61b891314dc1b25ee);
if($_MMVAR_2f1c492c9b8d4accd3==$_MMVAR_935eca373bef8b79c8){
_MMFUN_6da5ed7d3a356dcac7("选择的时间相同，请重新选择！"); 
}else{
if($_MMVAR_2f1c492c9b8d4accd3>$_MMVAR_935eca373bef8b79c8){
$_MMVAR_86ef93892cc44d76dc=$_MMVAR_2f1c492c9b8d4accd3;
$_MMVAR_2f1c492c9b8d4accd3=$_MMVAR_935eca373bef8b79c8;
$_MMVAR_935eca373bef8b79c8=$_MMVAR_86ef93892cc44d76dc;
}
$_MMVAR_19c33bc80c4d0d9851=1;
}        
}	
if($_MMVAR_135a723a975f2e33a2==0)
_MMFUN_6da5ed7d3a356dcac7("未传递软件ID!"); 
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件未找到!"); 

?>
<link rel="stylesheet" href="..<?php echo KS_PATH_PUBLIC?>/date_input.css" type="text/css">
<script type="text/javascript" src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.date_input.js"></script>

<script>
$(function() {
$(".my_date_input").date_input({addhss:"00:00"});
});
</script>
<form action="?action=list&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2 ?>" method="post" target="_self" id="f38" name="f38" onsubmit="return chkfrom37()">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td>软件名：<?php echo $_MMVAR_e9ffef5bdc7675ff63['xjlname'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	所属身份：<select name="sagentid" id="agentid" style="width:120px;height:22px"><?php
$_MMVAR_f87ca4bad6ff9068f9=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_agent where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
echo '<option value=\'-2\'';
if($_MMVAR_6356c35a3d01d5ca1d==-2)echo ' selected';
echo '>所有</option>';					
echo '<option value=\'0\'';
if($_MMVAR_6356c35a3d01d5ca1d==0)echo ' selected';
echo '>仅自己的卡</option>';							
echo '<option value=\'-1\'';
if($_MMVAR_6356c35a3d01d5ca1d==-1)echo ' selected';
echo '>所有代理的卡</option>';					
foreach ($_MMVAR_f87ca4bad6ff9068f9 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_6356c35a3d01d5ca1d==$_MMVAR_9a036496d66f59815a['id'])echo ' selected';
echo '>'.$_MMVAR_9a036496d66f59815a['agentname'].'</option>';
}
?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;
<?php
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
?>
充值日期：<input name="activetime1" type="text" value="<?php echo $_MMVAR_e93441182723b4d297 ?>" class="inputText2 my_date_input" /> - <input name="activetime2" type="text" value="<?php echo $_MMVAR_c61b891314dc1b25ee ?>" class="inputText2 my_date_input" />之间
<?php
}else{
?>
激活日期：<input name="activetime1" type="text" value="<?php echo $_MMVAR_e93441182723b4d297 ?>" class="inputText2 my_date_input" /> - <input name="activetime2" type="text" value="<?php echo $_MMVAR_c61b891314dc1b25ee ?>" class="inputText2 my_date_input" />之间
<?php
}
?>

&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" />     </td>
</tr>
</table>
</form>

<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="3"><?php	echo $_MMVAR_e9ffef5bdc7675ff63['xjlname'];?>的报表</td>
</tr>
<tr class="tb_header">
<td width=50%>卡类</td>
<?php
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
?><td width=25%>已充值</td>
<td width=25%>未充值(未付款)</td>
<?php
}else{
?><td width=25%>已激活(未付款)</td>
<td width=25%>未激活(未付款)</td>
<?php
}
?>
</tr>
<tr>
<?php

$_MMVAR_0858642e7d9e617905='';
if($_MMVAR_6356c35a3d01d5ca1d != -2){
if($_MMVAR_6356c35a3d01d5ca1d==-1){
$_MMVAR_0858642e7d9e617905.=' and agentid>0';
}else{
$_MMVAR_0858642e7d9e617905.=' and agentid='.$_MMVAR_6356c35a3d01d5ca1d;
}
}
if($_MMVAR_19c33bc80c4d0d9851==1){
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
$_MMVAR_0858642e7d9e617905.=' and `deltime`>='.$_MMVAR_2f1c492c9b8d4accd3.' and  `deltime`<'.$_MMVAR_935eca373bef8b79c8.'';
}else{
$_MMVAR_0858642e7d9e617905.=' and `activetime`>='.$_MMVAR_2f1c492c9b8d4accd3.' and  `activetime`<'.$_MMVAR_935eca373bef8b79c8.'';              
}
} 
$_MMVAR_cc59eed55f0be48973=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_keyattribute where keycday<>0 or id<3 order by id asc');
foreach ($_MMVAR_cc59eed55f0be48973 as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9a036496d66f59815a['keyfirststr'];
$_MMVAR_4ff92f711953671bb4=$_MMVAR_9a036496d66f59815a['keyname'];
echo "<tr class=tb_tr1>\r\n";
$_MMVAR_dfcd951c40001f5a11=TNREG.'_keys_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2;
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
$_MMVAR_4754be27bf07d7a88e='select count(`id`) as tnum from `'.$_MMVAR_dfcd951c40001f5a11.'` where `keys` LIKE \''.$_MMVAR_be0ff7fbb4af7d07f5.'%\' and isused>0 '.$_MMVAR_0858642e7d9e617905.'';
$_MMVAR_1c117addeb8e6e9976='select count(`id`) as tnum from `'.$_MMVAR_dfcd951c40001f5a11.'` where `keys` LIKE \''.$_MMVAR_be0ff7fbb4af7d07f5.'%\' and isused=0 '.$_MMVAR_0858642e7d9e617905.'';
$_MMVAR_2fd4f081d5782512a8='select count(`id`) as tnum from `'.$_MMVAR_dfcd951c40001f5a11.'` where `keys` LIKE \''.$_MMVAR_be0ff7fbb4af7d07f5.'%\' and ispay=0 '.$_MMVAR_0858642e7d9e617905.'';
$_MMVAR_7257bf17d3f1135d4a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_4754be27bf07d7a88e);
$_MMVAR_e17a8c94bca4b8fc95=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_1c117addeb8e6e9976);
$_MMVAR_0e198f92847a0977ce=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_2fd4f081d5782512a8);
echo '<td>'.$_MMVAR_be0ff7fbb4af7d07f5.'***************    '.$_MMVAR_4ff92f711953671bb4."</td>\r\n";
echo '<td>'.$_MMVAR_7257bf17d3f1135d4a['tnum']."</td>\r\n";
echo '<td>'.$_MMVAR_e17a8c94bca4b8fc95['tnum'].'('.$_MMVAR_0e198f92847a0977ce['tnum'].")</td>\r\n";
}else{
$_MMVAR_4754be27bf07d7a88e='select count(`id`) as tnum from `'.$_MMVAR_dfcd951c40001f5a11.'` where `keys` LIKE \''.$_MMVAR_be0ff7fbb4af7d07f5.'%\' and activetime>0 '.$_MMVAR_0858642e7d9e617905.'';
$_MMVAR_1c117addeb8e6e9976='select count(`id`) as tnum from `'.$_MMVAR_dfcd951c40001f5a11.'` where `keys` LIKE \''.$_MMVAR_be0ff7fbb4af7d07f5.'%\' and activetime=0 '.$_MMVAR_0858642e7d9e617905.'';
$_MMVAR_2fd4f081d5782512a8='select count(`id`) as tnum from `'.$_MMVAR_dfcd951c40001f5a11.'` where `keys` LIKE \''.$_MMVAR_be0ff7fbb4af7d07f5.'%\' and activetime>0 and ispay=0 '.$_MMVAR_0858642e7d9e617905.'';
$_MMVAR_6b6ed492881cd472a6='select count(`id`) as tnum from `'.$_MMVAR_dfcd951c40001f5a11.'` where `keys` LIKE \''.$_MMVAR_be0ff7fbb4af7d07f5.'%\' and activetime=0 and ispay=0 '.$_MMVAR_0858642e7d9e617905.'';
$_MMVAR_7257bf17d3f1135d4a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_4754be27bf07d7a88e);
$_MMVAR_e17a8c94bca4b8fc95=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_1c117addeb8e6e9976);
$_MMVAR_0e198f92847a0977ce=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_2fd4f081d5782512a8);
$_MMVAR_c7eb85f46ec20b2e20=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_2fd4f081d5782512a8);
echo '<td>'.$_MMVAR_be0ff7fbb4af7d07f5.'***************    '.$_MMVAR_4ff92f711953671bb4."</td>\r\n";
echo '<td>'.$_MMVAR_7257bf17d3f1135d4a['tnum'].'('.$_MMVAR_0e198f92847a0977ce['tnum'].")</td>\r\n";
echo '<td>'.$_MMVAR_e17a8c94bca4b8fc95['tnum'].'('.$_MMVAR_c7eb85f46ec20b2e20['tnum'].")</td>\r\n";
}
echo "</tr>\r\n";
}
echo	'</table>';
echo COPYRIGHT;
?>
</body>
</html>