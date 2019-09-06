<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php

global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_53d17c3545aae95b9e,$_MMVAR_7b6896960481a4d007;
$_MMVAR_0ecbe44a2d4417e190=array('action'=>$_MMVAR_7b6896960481a4d007,'userid'=>$_MMVAR_d6858a6d9e9ee80bab);
$_MMVAR_90502be476664717ad=20;
$_MMVAR_dc0540d958b7dad2db=array(
0=>'<font color=red>等待买家付款</font>',
1=>'买家付款成功，等待卖家发货',
2=>'卖家已经发货，等待买家确认',
3=>'<font color=red>买家付款完成，作者帐户里的卡币不足，未发卡，请联系作者</font>',
4=>'<font color=red>买家付款完成，作者卡库已满，未发卡，请联系作者</font>',
5=>'<font color=blue>订单自动完成<br></font>',
6=>'<font color=blue>订单手动完成<br></font>'
);
$_MMVAR_638c4a955564b3a963=array('线下支付','线上支付','余额支付');
$_MMVAR_3baee5e4bc5c4c4d09=array(0=>'试用卡',1=>'天卡',7=>'周卡',30=>'月卡',90=>'季卡',365=>'年卡');

$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_order where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and agentid='.$_MMVAR_53d17c3545aae95b9e[0];		
$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
$_MMVAR_4fa302d033574933a4=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
$_MMVAR_6acb770a66d220e25e.=' order by id desc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
?>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="11">订单列表</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>日期</td>
<td>订单查询码</td>
<td>订单金额</td>
<td>软件名</td>
<td>卡类</td>
<td>用户名</td>
<td>QQ</td>
<td>支付方式</td>
<td>订单状态</td>
<td>操作</td>
</tr>
<?php		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
?><tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td class='t01'><input type="checkbox" name="id[]" value="<?php echo $_MMVAR_9a036496d66f59815a['id'];?>" /></td>	
<td><?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['addtime'],1)?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['ordernum'].'-'.$_MMVAR_9a036496d66f59815a['orderpassword'] ?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['orderamount']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['xjlname'] ?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['linknum'].'开'.$_MMVAR_9a036496d66f59815a['keytype'].'天卡' ?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['payname']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['payqq']?></td>
<td><?php echo $_MMVAR_638c4a955564b3a963[$_MMVAR_9a036496d66f59815a['paytype']]?></td>
<td><?php echo $_MMVAR_dc0540d958b7dad2db[$_MMVAR_9a036496d66f59815a['orderstatus']]?></td>
<td><?php
echo ' <a href=card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=sorder&ordercode='.$_MMVAR_9a036496d66f59815a['ordernum'].'-'.$_MMVAR_9a036496d66f59815a['orderpassword'].'>查看详情</a>';
?> </td>
</tr>
<?php } ?><tr class="tb_header">
<td colspan="11" align=right><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</table>
<script language="javascript" src="<?php echo _MMFUN_dfbc78476298e0e159() ?>/js/keylist.js"></script>	
<script>
$(document).ready(function(){
$(".tb_tr1,.tb_tr2").hover(function (){$("#op").hide();$(this).children(":first-child").children("span").children("div").show();},function (){$("#op").show();$(this).children(":first-child").children("span").children("div").hide();});
$("#totalrmb").bind("click",function(){var ost=$("#st").val();var oet=$("#et").val();$.getScript("?action=totalrmb&st="+ost+"&et="+oet+"&rand="+sTime2()); });
});
function sTime2(){
var d,s;
d = new Date();
s=d.getSeconds();
return(s)
}
</script>	