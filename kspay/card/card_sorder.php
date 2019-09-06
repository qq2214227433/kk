<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_53d17c3545aae95b9e;

$_MMVAR_dc0540d958b7dad2db=array(
0=>'等待买家付款',
1=>'买家付款成功，等待卖家发货',
2=>'卖家已经发货，等待买家确认',
3=>'买家付款完成，作者帐户里的卡币不足，未发卡，请联系作者',
4=>'买家付款完成，作者卡库已满，未发卡，请联系作者',
5=>'订单自动完成，注册卡号：<br>',
6=>'订单手动完成，注册卡号：<br>'
);	
$_MMVAR_1d25a6b64ff93948a6=array(1=>0.2,7=>1,30=>2,90=>6,365=>24);
$_MMVAR_3baee5e4bc5c4c4d09=array(1=>'天卡',7=>'周卡',30=>'月卡',90=>'季卡',365=>'年卡');
$_MMVAR_fe81f27197b7e31ee3=array('其它支付方式','支付宝或网银在线支付','余额支付');		

$_MMVAR_49b943866af2e69bf0=_MMFUN_cc3cf510bffd973b95('ordercode','','sql','');


$_MMVAR_6ab292966e12f515b0=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_d6858a6d9e9ee80bab);
if(empty($_MMVAR_6ab292966e12f515b0))
_MMFUN_6da5ed7d3a356dcac7("作者不存在。");


if(strlen($_MMVAR_49b943866af2e69bf0)<>17 && strlen($_MMVAR_49b943866af2e69bf0)<>18 && strlen($_MMVAR_49b943866af2e69bf0)<>19)
_MMFUN_6da5ed7d3a356dcac7("查询码错误");
$_MMVAR_a8da369c10dfdad5bf=explode('-',$_MMVAR_49b943866af2e69bf0);
if(count($_MMVAR_a8da369c10dfdad5bf)!==2)
_MMFUN_6da5ed7d3a356dcac7("查询码错误");
$_MMVAR_857106807c4a0c833a=$_MMVAR_a8da369c10dfdad5bf[0];
$_MMVAR_31a0a0e03f320411b8=$_MMVAR_a8da369c10dfdad5bf[1];

$_MMVAR_d0cb05281d5220dc52=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_order where ordernum=\''.$_MMVAR_857106807c4a0c833a.'\' and orderpassword=\''.$_MMVAR_31a0a0e03f320411b8.'\'' );
if(empty($_MMVAR_d0cb05281d5220dc52))
_MMFUN_6da5ed7d3a356dcac7("未找到该订单",'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab);


?>

<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan=2>订单号：<?php echo $_MMVAR_d0cb05281d5220dc52['ordernum']?></td>
</tr>
<tr class=tb_tr1>
<td width=100>所属软件名</td>
<td width=880><?php echo $_MMVAR_d0cb05281d5220dc52['xjlname'] ?></td>					
</tr>
<tr class=tb_tr2>
<td>卡类型</td>
<td><?php echo $_MMVAR_d0cb05281d5220dc52['linknum'].'开'.$_MMVAR_d0cb05281d5220dc52['keytype'].'天卡' ?></td>
</tr>
<tr class=tb_tr2>
<td>卡号</td>
<td><?php
echo $_MMVAR_dc0540d958b7dad2db[$_MMVAR_d0cb05281d5220dc52['orderstatus']];
if($_MMVAR_d0cb05281d5220dc52['orderstatus']>4){
echo str_replace(',','<br>',$_MMVAR_d0cb05281d5220dc52['regkeys']);
}else{
if($_MMVAR_d0cb05281d5220dc52['ismakekey']==1)
echo '<br>代理保护次数内未支付实时取卡<br>'.str_replace(',','<br>',$_MMVAR_d0cb05281d5220dc52['regkeys']);
}						
?></td>
</tr>
<tr class=tb_tr2>
<td>总金额</td>
<td><?php echo $_MMVAR_d0cb05281d5220dc52['orderamount']?>元</td>
</tr>
<tr class=tb_tr1>
<td width=100>支付方式</td>
<td><?php echo $_MMVAR_fe81f27197b7e31ee3[$_MMVAR_d0cb05281d5220dc52['paytype']] ?></td>
</tr>
<tr class=tb_tr2>
<td width=100>购买者姓名</td>
<td><?php echo $_MMVAR_d0cb05281d5220dc52['payname'] ?></td>
</tr>
<tr class=tb_tr1>
<td width=100>你的QQ</td>
<td><?php echo $_MMVAR_d0cb05281d5220dc52['payqq'] ?></td>
</tr>
<tr class=tb_tr2>
<td width=100>你的电话</td>
<td><?php echo $_MMVAR_d0cb05281d5220dc52['paytel'] ?></td>
</tr>
<tr class=tb_tr1>
<td width=100>备注</td>
<td>
<?php
if($_MMVAR_d0cb05281d5220dc52['orderstatus']<3){
echo '<form action =\'card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=sorder2\' method=post name=sorder1 id=sorder1 target=\'_self\'>';
echo '<table border=0><tr><td><input type=\'hidden\' name=\'ordernum\' value=\''.$_MMVAR_857106807c4a0c833a.'\'><input type=\'hidden\' name=\'orderpassword\' value=\''.$_MMVAR_31a0a0e03f320411b8.'\'><textarea align=left style=\'width:400px;height:80px\' name=\'intro\' cols=\'60\'>'.htmlspecialchars($_MMVAR_d0cb05281d5220dc52['intro']).'</textarea></td><td valign=top>注意：非在线支付的话请在备注里填写完整的汇款信息<br>汇款人：***<br>汇入帐号：**********<br>其它说明：*********</td></tr>';	
echo '<tr><td colspan=2><input type=\'submit\' name=\'submit1intro\' id=\'submit1intro\' value=\'submit\' style=\'width:0;height:0\'><img type=\'submit\' src=\'..'.KS_PATH_PUBLIC.'/images/editintro_out.gif\'></td></tr></table></form>';
}else{
echo nl2br(htmlspecialchars($_MMVAR_d0cb05281d5220dc52['intro']));
}					
?>
</td>
</tr>
<tr class=tb_tr1>
<td></td>
<td><?php
if($_MMVAR_d0cb05281d5220dc52['orderstatus']>2){
echo "已完成付款";
}else{
echo '<a href=\''.$_MMVAR_d0cb05281d5220dc52['alipayurl'].'\' target=\'_blank\'><img src=..'.KS_PATH_PUBLIC.'/images/alipay.gif alt=\'用支付宝支付\' /></a>';
}
?></td>
</tr>
</table>