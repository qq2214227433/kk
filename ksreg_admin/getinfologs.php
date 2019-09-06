<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!",'report');
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

switch ($_MMVAR_7b6896960481a4d007){
Case "delcord":
_MMFUN_2888c7949cb53f183c();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}

function _MMFUN_2888c7949cb53f183c(){	
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_fc5b780300ba64494e=_MMFUN_cc3cf510bffd973b95('infotype','','sql','');
if($_MMVAR_fc5b780300ba64494e=='')
_MMFUN_6da5ed7d3a356dcac7("你输入的记录类型为空!"); 
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from `'.TNREG.'_getinfo` where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and xjlid='.$_MMVAR_135a723a975f2e33a2.' and infotype=\''.$_MMVAR_fc5b780300ba64494e.'\'','notsync'); 
_MMFUN_6da5ed7d3a356dcac7("删除记录类型为".$_MMVAR_fc5b780300ba64494e."的所有日志成功!",$_SERVER['HTTP_REFERER']);
}


function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;		
$_MMVAR_90502be476664717ad=20;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
$_MMVAR_0ecbe44a2d4417e190=array();
$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);
$_MMVAR_eea934454d241a2c72=_MMFUN_cc3cf510bffd973b95('sqmode','','int',0);
$_MMVAR_be0ff7fbb4af7d07f5=_MMFUN_cc3cf510bffd973b95('key','','sql','');
$_MMVAR_fc5b780300ba64494e=_MMFUN_cc3cf510bffd973b95('infotype','','sql','');
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if($_MMVAR_135a723a975f2e33a2==0){					
$_MMVAR_135a723a975f2e33a2=$_MMVAR_e9ffef5bdc7675ff63[0]['id'];
}
$_MMVAR_0ecbe44a2d4417e190['sqmode']=$_MMVAR_eea934454d241a2c72;	
if($_MMVAR_2dc0051b4a3fa32b83>100){
if($_MMVAR_eea934454d241a2c72==0){
$_MMVAR_eea934454d241a2c72=1;
$_MMVAR_0ecbe44a2d4417e190['sqmode']=$_MMVAR_eea934454d241a2c72;
}
}

$_MMVAR_6acb770a66d220e25e='select * from `'.TNREG.'_getinfo` where ';

if(!empty($_MMVAR_be0ff7fbb4af7d07f5)){
$_MMVAR_6acb770a66d220e25e.=' `nameorkey` like \''._MMFUN_c3428c7e6251d22b7d($_MMVAR_be0ff7fbb4af7d07f5,1).'%\' and ';
$_MMVAR_0ecbe44a2d4417e190['key']=$_MMVAR_be0ff7fbb4af7d07f5;
}
if($_MMVAR_fc5b780300ba64494e!=''){
$_MMVAR_6acb770a66d220e25e.=' `inftotype`=\''.$_MMVAR_fc5b780300ba64494e.'\' and ';
$_MMVAR_0ecbe44a2d4417e190['inftotype']=$_MMVAR_1ded048644559531d6;

}
$_MMVAR_6acb770a66d220e25e.=' userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and xjlid='.$_MMVAR_135a723a975f2e33a2;	

include_once KS_DIR.'/inc/runtime.php';
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
}
$_MMVAR_4a134686cf4c02ac8d=$_MMVAR_4fa302d033574933a4;
$_MMVAR_4fa302d033574933a4=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
$_MMVAR_6acb770a66d220e25e.=' LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
$_MMVAR_77e413c0c731500d10->_MMFUN_2ff52b47fa1890bb43();
?>
<form action="?action=main" method="post" target="_self" id="f1" name="f1">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td><input name="sqmode" type="checkbox" title="快速模式不显示记录总数" value="1" <?php if($_MMVAR_eea934454d241a2c72==1)echo 'checked'?>/><label help=pub>快速模式</label>，<?php
echo '<select name=\'sxjlid\' id=\'xjlid\' style=\'width:120px;height:22px\'>';
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2){
echo ' selected';
$_MMVAR_e4019df8eca2c2ac2c=$_MMVAR_9a036496d66f59815a['xjlname'];
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;
}
echo '>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
?>
</select>，
记录类型<input name="infotype" type="text" value="<?php echo $_MMVAR_fc5b780300ba64494e?>" class="inputText2" />，卡号或用户名<input name="key" type="text" value="" class="inputText2" />
<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" />    </td>
</tr>
</table>
</form>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="6"><?php echo $_MMVAR_e4019df8eca2c2ac2c?> → 收集的用户信息日志<?php
if ($_MMVAR_eea934454d241a2c72==1){
echo '快速模式不统计总计录数。';
}else{
echo '共查询到'.$_MMVAR_4a134686cf4c02ac8d.'条记录。';
}?>[查询用时: <?php echo $_MMVAR_77e413c0c731500d10->_MMFUN_2bc50f97e2e07d84c2()?> 毫秒]</td>
</tr>
<tr class="tb_header">
<td>id</td>
<td>时间</td>
<td>卡号或用户名</td>
<td>记录类型</td>
<td>参数一</td>
<!--td>参数二</td>
<td>参数三</td-->
<td>备注</td>
</tr>
<?php		
$_MMVAR_8ff60a7771c3f2c087=0;
if(!empty($_MMVAR_5a0f5f64cd15c205df)){
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;
?><tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td><?php echo  $_MMVAR_9a036496d66f59815a['id']?></td>
<td><?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['addtime'],1)?></td>
<td><?php echo _MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_9a036496d66f59815a['nameorkey'])?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['infotype']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['ext1']?></td>
<!--td><?php echo $_MMVAR_9a036496d66f59815a['ext2']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['ext3']?></td-->
<td><?php echo $_MMVAR_9a036496d66f59815a['intro']?></td>
</tr>
<?php }} ?>
<tr class="tb_header">
<td colspan="3"><form action="?action=delcord" method="post" target="_self" id="f23" name="f23"><?php
echo '<select name=\'sxjlid\' id=\'xjlid\' style=\'width:120px;height:22px\'>';
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2){
echo ' selected';
$_MMVAR_e4019df8eca2c2ac2c=$_MMVAR_9a036496d66f59815a['xjlname'];
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;
}
echo '>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
?></select>,记录类型<input name="infotype" type="text" value="<?php echo $_MMVAR_fc5b780300ba64494e?>" class="inputText2" /> <input type=submit value="删除"></form></td><td colspan="3"><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</table>

<script>
$(document).ready(function(){
$(".tb_tr1,.tb_tr2").hover(function (){$("#op").css('visibility','hidden');$(this).children(":first-child").children("span").children("div").show();},function (){$("#op").css('visibility','visible');$(this).children(":first-child").children("span").children("div").hide();});
});
</script>	
<?php
}

echo COPYRIGHT;
?>
</body>
</html>