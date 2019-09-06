<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
_MMFUN_d68ee68ae41a1d89f0();
if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

_MMFUN_f845b4be82a2064ad0();

function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;

$_MMVAR_90502be476664717ad=20;
$_MMVAR_99020ed995977fa008=array(0=>'用户充值',1=>'用户转帐',2=>'作者后台操作',3=>'推广赠送',4=>'转帐失败',5=>'修改绑定');
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
$_MMVAR_0ecbe44a2d4417e190=array();
$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);
$_MMVAR_0b9ba8763f86bc549d=_MMFUN_cc3cf510bffd973b95('stype','','int',0);
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_df03ade3870b1399b8=_MMFUN_cc3cf510bffd973b95('skeywords','','sql',"");	
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where ext1=\'user\' and userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if($_MMVAR_135a723a975f2e33a2==0){					
$_MMVAR_135a723a975f2e33a2=$_MMVAR_e9ffef5bdc7675ff63[0]['id'];
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;
}

$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_timelog  where ';

if(!empty($_MMVAR_df03ade3870b1399b8)){
if($_MMVAR_0b9ba8763f86bc549d==1){
$_MMVAR_6acb770a66d220e25e.=' username1 LIKE \''._MMFUN_c3428c7e6251d22b7d($_MMVAR_df03ade3870b1399b8,1).'%\' and ';
$_MMVAR_0ecbe44a2d4417e190['skeywords']=$_MMVAR_df03ade3870b1399b8;
$_MMVAR_0ecbe44a2d4417e190['stype']=$_MMVAR_0b9ba8763f86bc549d;	
}elseif($_MMVAR_0b9ba8763f86bc549d==2){
$_MMVAR_6acb770a66d220e25e.=' username2 LIKE \''._MMFUN_c3428c7e6251d22b7d($_MMVAR_df03ade3870b1399b8,1).'%\' and ';
$_MMVAR_0ecbe44a2d4417e190['skeywords']=$_MMVAR_df03ade3870b1399b8;
$_MMVAR_0ecbe44a2d4417e190['stype']=$_MMVAR_0b9ba8763f86bc549d;	
}		
}
$_MMVAR_6acb770a66d220e25e.=' userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and xjlid='.$_MMVAR_135a723a975f2e33a2;	

$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
$_MMVAR_4a134686cf4c02ac8d=$_MMVAR_4fa302d033574933a4;
$_MMVAR_4fa302d033574933a4=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
$_MMVAR_6acb770a66d220e25e.=' order by id desc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;
include KS_DIR.'/inc/runtime.php';
$_MMVAR_77e413c0c731500d10= new runtime;
$_MMVAR_77e413c0c731500d10->_MMFUN_75ca9dc8ef905464ef(); 
$_MMVAR_3fac05200815e9252b=$_MMVAR_6acb770a66d220e25e;
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
$_MMVAR_77e413c0c731500d10->_MMFUN_2ff52b47fa1890bb43();
?>

<form action="?action=main" method="post" target="_self" id="f1" name="f1">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td><?php
$_MMVAR_5e52f519cf2fa3162f='';
echo '<select name=\'sxjlid\' id=\'xjlid\' style=\'width:150px;height:22px\'>';
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2){
echo ' selected';
$_MMVAR_5e52f519cf2fa3162f=$_MMVAR_9a036496d66f59815a['xjlname'];
}
echo '>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
?>
</select>，<select name="stype" id="stype" style="width:140px;height:22px">
<option value=1 <?php if($_MMVAR_0b9ba8763f86bc549d==1)echo ' selected';?>>转出或充值用户名</option>
<option value=2 <?php if($_MMVAR_0b9ba8763f86bc549d==2)echo ' selected';?>>转入用户名</option>
</select>-><input name="skeywords" type="text" value="" class="inputText2" />
<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" /></td>
</tr>
</table>
</form>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="9"><?php	
//print_r($_MMVAR_e9ffef5bdc7675ff63);		
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2)
echo $_MMVAR_9a036496d66f59815a['xjlname'];
}
?> → 充值和转帐日志列表,共查询到<?php echo $_MMVAR_4a134686cf4c02ac8d?>条记录。[查询用时: <?php echo $_MMVAR_77e413c0c731500d10->_MMFUN_2bc50f97e2e07d84c2()?> 毫秒]</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>时间</td>
<td>用户</td>
<td>操作前天数</td>
<td>操作后天数</td>
<td>变动天数</td>
<td>损耗天数</td>
<td>操作类型</td>
<td>备注</td>
</tr>
<?php	
if(!empty($_MMVAR_5a0f5f64cd15c205df)){		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;
?><tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">

<td><?php echo $_MMVAR_9a036496d66f59815a['id']?></td>
<td><?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['addtime'],1)?></td>
<td><?php echo _MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_9a036496d66f59815a['username1'])?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['u1d1']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['u1d2']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['addday']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['sysdelday']?></td>
<td <?php if($_MMVAR_9a036496d66f59815a['logtype']==4)echo 'style=\'color:red\''?>><?php echo $_MMVAR_99020ed995977fa008[$_MMVAR_9a036496d66f59815a['logtype']]?></td>
<td><?php 
if($_MMVAR_9a036496d66f59815a['logtype']==0 || $_MMVAR_9a036496d66f59815a['logtype']==5){
echo _MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_9a036496d66f59815a['intro']);
}elseif($_MMVAR_9a036496d66f59815a['logtype']==1){
echo '转'.abs($_MMVAR_9a036496d66f59815a['addday']).'天时间到用户<span style=\'color:#ff0000\'>'._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_9a036496d66f59815a['username2']).'</span>('.$_MMVAR_9a036496d66f59815a['u2d1'].'天→'.$_MMVAR_9a036496d66f59815a['u2d2'].'天)';
}elseif($_MMVAR_9a036496d66f59815a['logtype']==3){
echo _MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_9a036496d66f59815a['username2']),'注册或充值时赠送';
}elseif($_MMVAR_9a036496d66f59815a['logtype']==4){
echo '转',abs($_MMVAR_9a036496d66f59815a['addday']),'天时间给用户',_MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_9a036496d66f59815a['username2']),'失败，但时间被扣(',$_MMVAR_9a036496d66f59815a['u1d1'],'天→',$_MMVAR_9a036496d66f59815a['u1d2'],'天)';}
?></td>
</tr>
<?php 
}
} ?><tr class="tb_header">
<td colspan="9" align=right><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</table>	
<div style="margin:0 400px;width:20px;height:10px;overflow:hidden;">■  EXPLAIN <?php echo $_MMVAR_3fac05200815e9252b;?></div>
<?php
}


echo COPYRIGHT;
?>
</body>
</html>