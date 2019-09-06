<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php

require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');

if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");

_MMFUN_d68ee68ae41a1d89f0();
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

switch ($_MMVAR_7b6896960481a4d007){
Case "batch":
_MMFUN_c28ed738ed2a89f6e9();
break;
Case "save":
_MMFUN_da1a125ba68654f531();
break;
Case "totalrmb":
_MMFUN_6a53afdfc8d86d6ab5();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}
function _MMFUN_6a53afdfc8d86d6ab5(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_8ba3d4eca95ad63bc6;	
if($_MMVAR_8ba3d4eca95ad63bc6==false)ob_clean();
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_88c50d1878da6ca2ed=_MMFUN_cc3cf510bffd973b95('st','get','sql','2000-1-1');
$_MMVAR_0bac6ec123547e77ea=_MMFUN_cc3cf510bffd973b95('et','get','sql','2037-1-1');	
$_MMVAR_e2e1a7d73b4ad9880d=$_MMVAR_88c50d1878da6ca2ed.'到'.$_MMVAR_0bac6ec123547e77ea;
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_88c50d1878da6ca2ed=strtotime($_MMVAR_88c50d1878da6ca2ed.' 00:00:00');
$_MMVAR_0bac6ec123547e77ea=strtotime($_MMVAR_0bac6ec123547e77ea.' 23:59:59');

$_MMVAR_6acb770a66d220e25e='select SUM(`orderamount` )  as tnum from `'.TNREG.'_order` where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and `addtime`>'.$_MMVAR_88c50d1878da6ca2ed.' and `addtime`<'.$_MMVAR_0bac6ec123547e77ea.' and `orderstatus`>4';
$_MMVAR_ea4fb094a8c717abcf=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_6acb770a66d220e25e);
if(!empty($_MMVAR_ea4fb094a8c717abcf)){
$_MMVAR_52e1eafb3e9f1ecce9=$_MMVAR_ea4fb094a8c717abcf['tnum'];
}else{
$_MMVAR_52e1eafb3e9f1ecce9=0;
}
exit('$.msgbox({width:500,height:120,title:\'统计结果\',content:{type:\'alert\', content:\'从'.$_MMVAR_e2e1a7d73b4ad9880d.'成交的订单金额总数为：'.$_MMVAR_52e1eafb3e9f1ecce9.'元。\'}});');
}
function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_90502be476664717ad=20;
$_MMVAR_dc0540d958b7dad2db=array(
0=>'等待买家付款',
1=>'买家付款成功，等待卖家发货',
2=>'卖家已经发货，等待买家确认',
3=>'买家付款完成，作者帐户里的卡币不足，未发卡，请联系作者',
4=>'买家付款完成，作者卡库已满，未发卡，请联系作者',
5=>'订单自动完成。<br>',
6=>'订单手动完成。<br>'
);
$_MMVAR_638c4a955564b3a963=array('线下支付','线上支付','余额支付');
$_MMVAR_3baee5e4bc5c4c4d09=array(0=>'试用卡',1=>'天卡',7=>'周卡',30=>'月卡',90=>'季卡',365=>'年卡');
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
$_MMVAR_0ecbe44a2d4417e190=array();
$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);
$_MMVAR_857106807c4a0c833a=_MMFUN_cc3cf510bffd973b95('ordernum','','sql','');
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_order where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1];
if($_MMVAR_857106807c4a0c833a!=='')
$_MMVAR_6acb770a66d220e25e.=' and ordernum=\''.$_MMVAR_857106807c4a0c833a.'\'';

$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
$_MMVAR_4fa302d033574933a4=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
$_MMVAR_6acb770a66d220e25e.=' order by id desc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
?><link rel="stylesheet" href="..<?php echo KS_PATH_PUBLIC?>/date_input.css" type="text/css">
<script type="text/javascript" src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.date_input.js"></script>	
<script>$(function(){$(".my_date_input").date_input();});</script>
<form action="myorder.php" method="get" id="f1" name="f1">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td>订单号<input name="ordernum" type="text" value="<?php echo $_MMVAR_857106807c4a0c833a?>" class="inputText2" />
<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/orders_out.gif" align="absmiddle" />&nbsp;&nbsp;&nbsp;&nbsp;统计成交金额：<input name=st id=st value=""  class="inputText2 my_date_input"> - <input name=et id=et value=""  class="inputText2 my_date_input"><input type="button" style="border:1px solid #ccc;padding:3px 8px" value="统计" id="totalrmb"> </td>
</tr>
</table>
</form>
<form action="?action=batch" method="post" id="f2" name="f2" onsubmit="return chkfromlist()">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="10">订单列表</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>订单号-密码</td>
<td>订单金额</td>
<td>软件名</td>
<td>卡类</td>
<td>用户名</td>
<td>QQ</td>
<td>支付方式</td>
<td>订单状态</td>
<td>管理操作</td>
</tr>
<?php		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
?><tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td class='t01'><span class='t0'>&nbsp;<div class='t1'>ID：<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>    下单时间：<?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['addtime'],5) ?><br>
注册码：<br><?php echo str_replace(',','<br>',$_MMVAR_9a036496d66f59815a['regkeys']) ?><br>
备注：<?php 
if($_MMVAR_9a036496d66f59815a['ismakekey']==1)
echo '代理已取卡<br>';
echo nl2br(htmlspecialchars($_MMVAR_9a036496d66f59815a['intro'])) ?></div></span><input type="checkbox" name="id[]" value="<?php echo $_MMVAR_9a036496d66f59815a['id'];?>" /></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['ordernum'].'-'.$_MMVAR_9a036496d66f59815a['orderpassword'] ?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['orderamount']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['xjlname'] ?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['linknum'].'开'.$_MMVAR_9a036496d66f59815a['keytype'].'天卡' ?></td>
<td title="<?php echo $_MMVAR_9a036496d66f59815a['tag']?>"><?php echo $_MMVAR_9a036496d66f59815a['payname']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['payqq']?></td>
<td><?php echo $_MMVAR_638c4a955564b3a963[$_MMVAR_9a036496d66f59815a['paytype']]?></td>
<td><?php echo $_MMVAR_dc0540d958b7dad2db[$_MMVAR_9a036496d66f59815a['orderstatus']]?></td>
<td><?php
echo ' <a href=?action=batch&op=del&id='.$_MMVAR_9a036496d66f59815a['id'].' class=\'dela\'>删除</a>';
echo $_MMVAR_9a036496d66f59815a['orderstatus']<5?' <a href=?action=save&id='.$_MMVAR_9a036496d66f59815a['id'].'>发卡</a>':'';	
?> </td>
</tr>
<?php } ?><tr class="tb_header">
<td colspan="4"><input name="chkall" type="checkbox" value="on" onclick=CheckAll(this.form)>			
<select name="op" id="op" style="width:90px;height:20px">
<option value="del">批量删除</option>
</select>&nbsp;&nbsp;<input type="image" align=absmiddle src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/batch.gif"></td>
<td colspan="6" align=right><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</table>
</form>
<form style="display:none" action="keylist.php?action=saveintro" method=post id="fintro" name="fintro"><input name="id" id="newid" type="text" value="" /><textarea name="intro" id="newintro"></textarea></form>
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
<?php
}


function _MMFUN_da1a125ba68654f531(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','get','int',0);

_MMFUN_d68ee68ae41a1d89f0();
$_MMVAR_d0cb05281d5220dc52=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_order where id='.$_MMVAR_7ca1659d6f01cb3410.' and userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if(empty($_MMVAR_d0cb05281d5220dc52))
_MMFUN_6da5ed7d3a356dcac7('订单不存在');

if($_MMVAR_d0cb05281d5220dc52['orderstatus']>4)
_MMFUN_6da5ed7d3a356dcac7('订单是完成状态，无需发卡操作');
$_MMVAR_3fc22e00af1642a292='_keys_'.$_MMVAR_d0cb05281d5220dc52['userid'].'_'.$_MMVAR_d0cb05281d5220dc52['xjlid'];	

$_MMVAR_6ab292966e12f515b0=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_d0cb05281d5220dc52['userid']);	

if($_MMVAR_6ab292966e12f515b0['vipkeynums']!=0){			
if($_MMVAR_6ab292966e12f515b0['rmb']<$_MMVAR_d0cb05281d5220dc52['kb'])	
_MMFUN_6da5ed7d3a356dcac7('卡币不足，无法发卡');
}


$_MMVAR_38c50680acd2c3e722=explode(',', $_MMVAR_d0cb05281d5220dc52['regkeys']);

$_MMVAR_8e2772395bb4978342=count($_MMVAR_38c50680acd2c3e722);
$_MMVAR_94492f3d1a3f7caf94=$_MMVAR_8e2772395bb4978342*(1+($_MMVAR_d0cb05281d5220dc52['linknum']-1)/2);


$_MMVAR_1d4aa003d5948966f2=_MMFUN_b3efe1487b20e72104($_MMVAR_d0cb05281d5220dc52['userid']);	
if($_MMVAR_6ab292966e12f515b0['vipkeynums']!=0){	
if($_MMVAR_d0cb05281d5220dc52['keytype']==1){
$_MMVAR_6e4136d617f6388ff8=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100('select * from `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` where cday=1');
if($_MMVAR_6e4136d617f6388ff8>DAY1KEYNUM)
_MMFUN_6da5ed7d3a356dcac7('每个帐号里最多只允许管理'.DAY1KEYNUM.'张天卡，现有'.$_MMVAR_6e4136d617f6388ff8.'张');
}elseif($_MMVAR_d0cb05281d5220dc52['keytype']>1 && $_MMVAR_6ab292966e12f515b0['vipkeynums']*3<$_MMVAR_1d4aa003d5948966f2[1]+$_MMVAR_94492f3d1a3f7caf94){
_MMFUN_6da5ed7d3a356dcac7('你的帐号可管理注册卡数量已达上限，无法添加新的卡！');
}
}

$_MMVAR_aabe78cfc64175e5bc=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_keyattribute where  id=' . $_MMVAR_d0cb05281d5220dc52['keytypeid']);

$_MMVAR_deeb77140e9a5e0da8='';
$_MMVAR_e66e78efaabbfe3819=$_MMVAR_d0cb05281d5220dc52['payname'];
if($_MMVAR_d0cb05281d5220dc52['agentid']>0)$_MMVAR_e66e78efaabbfe3819=$_MMVAR_d0cb05281d5220dc52['tag'];
$_MMVAR_201a9c4994392d190e=substr($_MMVAR_d0cb05281d5220dc52['ordernum'].'-'.$_MMVAR_d0cb05281d5220dc52['orderpassword'],0,18);
if(intval($_MMVAR_d0cb05281d5220dc52['ismakekey'])!==1){

$_MMVAR_e90c26b127790e516c = array(
'xjlid'			=>$_MMVAR_d0cb05281d5220dc52['xjlid'],
'ordernum'		=>$_MMVAR_201a9c4994392d190e,
'userid'		=>$_MMVAR_d0cb05281d5220dc52['userid'],
'agentid'		=>$_MMVAR_d0cb05281d5220dc52['agentid'],
'cday'			=>$_MMVAR_d0cb05281d5220dc52['keytype'],
'linknum'		=>$_MMVAR_d0cb05281d5220dc52['linknum'],
'intro'			=>'QQ:'.$_MMVAR_d0cb05281d5220dc52['payqq'].'，在线购卡',
'addtime'		=>time(),
'endtime'		=>0,
'bdday'			=>0,
'bdtimes'		=>0,
'bdcode'		=>'1000',
'chkcode'		=>'100000',
'lastbdtime'	=>0,
'lastonlinetime'=>0,
'normal'		=>1,
'isdel'			=>0,
'ispay'			=>1,
'deltime'		=>0,
'activetimes'	=>0,
'chktimes'		=>0,
'ext1'		=>$_MMVAR_e66e78efaabbfe3819,
'isused'		=>0,
'dayactivetimes'=>$_MMVAR_aabe78cfc64175e5bc['keytimes']
);



if($_MMVAR_6ab292966e12f515b0['membertype']<3){	
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET rmb=rmb-'.$_MMVAR_d0cb05281d5220dc52['kb'].' where id='.$_MMVAR_d0cb05281d5220dc52['userid'],'sync');
$_MMVAR_deeb77140e9a5e0da8.='扣除作者卡币'.$_MMVAR_d0cb05281d5220dc52['kb'].'<br>';	
$_MMVAR_deeb77140e9a5e0da8.='<script>var c=window.parent.document.getElementById(\'drmb\').innerHTML;window.parent.document.getElementById(\'drmb\').innerHTML=(c*10-'.$_MMVAR_d0cb05281d5220dc52['kb'].'*10)/10;</script>';
}	


$_MMVAR_676a1786faaa9e46d8=time();	
$_MMVAR_e3bdef30964a1750f9='INSERT INTO `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` (`ordernum`, `userid`, `isused`, `xjlid`, `agentid`, `isdel`, `cday`, `ispay`, `linknum`, `addtime`, `activetime`, `endtime`, `bdday`, `bdtimes`, `bdcode`, `chkcode`, `lastbdtime`, `lastonlinetime`, `normal`, `deltime`, `activetimes`, `keys`, `ext1`, `intro`,`dayactivetimes`) VALUES ';
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<=abs(floor($_MMVAR_8e2772395bb4978342/-100));$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_1b87417a49fe9d71e1='';
$_MMVAR_530d7538dd2f66b5ca='';
for($_MMVAR_21a9f2323f653b8d2f=1;$_MMVAR_21a9f2323f653b8d2f<=100;$_MMVAR_21a9f2323f653b8d2f++){
if(($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f>$_MMVAR_8e2772395bb4978342)
break;

$_MMVAR_530d7538dd2f66b5ca.=$_MMVAR_1b87417a49fe9d71e1.'(\''.$_MMVAR_e90c26b127790e516c['ordernum'].'\', \''.$_MMVAR_e90c26b127790e516c['userid'].'\', \'0\', \''.$_MMVAR_e90c26b127790e516c['xjlid'].'\', \''.$_MMVAR_e90c26b127790e516c['agentid'].'\', \'0\', \''.$_MMVAR_e90c26b127790e516c['cday'].'\', \'1\', \''.$_MMVAR_e90c26b127790e516c['linknum'].'\', \''.$_MMVAR_676a1786faaa9e46d8.'\', \'0\', \'0\', \'0\', \'0\', \'1000\', \'100000\', \'0\', \'0\', \'1\', \'0\', \'0\', \''.$_MMVAR_38c50680acd2c3e722[($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f-1].'\', \''.$_MMVAR_e90c26b127790e516c['ext1'].'\', \''.$_MMVAR_e90c26b127790e516c['intro'].'\', \''.$_MMVAR_aabe78cfc64175e5bc['keytimes'].'\')';
$_MMVAR_1b87417a49fe9d71e1=',';			
}
if($_MMVAR_530d7538dd2f66b5ca!='')
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_e3bdef30964a1750f9.$_MMVAR_530d7538dd2f66b5ca,'sync');
}
}else{

if($_MMVAR_6ab292966e12f515b0['membertype']<3){	
$_MMVAR_deeb77140e9a5e0da8.='代理商已在提交订单时取卡，并扣除了你的卡币'.$_MMVAR_d0cb05281d5220dc52['kb'].'<br>';	
}else{
$_MMVAR_deeb77140e9a5e0da8.='代理商已在提交订单时取卡<br>';
}
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` SET normal=1,ispay=1 where ordernum=\''.$_MMVAR_201a9c4994392d190e.'\'','sync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_agent SET nopaytimes=0 where id='.$_MMVAR_d0cb05281d5220dc52['agentid'],'notsync');

}


$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET orderstatus=\'6\' where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'\'','notsync');


if($_MMVAR_d0cb05281d5220dc52['agentid']>0){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_agent SET jifeng=jifeng+'.$_MMVAR_d0cb05281d5220dc52['orderamount'].' where id='.$_MMVAR_d0cb05281d5220dc52['agentid'],'notsync');	
$_MMVAR_deeb77140e9a5e0da8.='增加代理(id='.$_MMVAR_d0cb05281d5220dc52['agentid'].')积分'.$_MMVAR_d0cb05281d5220dc52['orderamount'].'<br>';
}
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_deeb77140e9a5e0da8.'发卡操作完成！');

}


function _MMFUN_c28ed738ed2a89f6e9(){
global $_MMVAR_9f95914834184aeeae;

if(isset($_POST['id'])){
$_MMVAR_7ca1659d6f01cb3410=$_POST['id'];
foreach($_MMVAR_7ca1659d6f01cb3410 as $_MMVAR_be0ff7fbb4af7d07f5=>$_MMVAR_4ff92f711953671bb4 ){
if(!is_numeric($_MMVAR_4ff92f711953671bb4))
_MMFUN_6da5ed7d3a356dcac7("参数非法!");                
}
$_MMVAR_7ca1659d6f01cb3410=implode(",", $_MMVAR_7ca1659d6f01cb3410);
}else{
if(isset($_GET['id'])){
$_MMVAR_7ca1659d6f01cb3410=$_GET['id']; 
if(!is_numeric($_MMVAR_7ca1659d6f01cb3410))
_MMFUN_6da5ed7d3a356dcac7("参数非法!");           
}else{
_MMFUN_6da5ed7d3a356dcac7("参数错误!");
}
}

$_MMVAR_a9ecec9b36cd18d921=_MMFUN_cc3cf510bffd973b95('op','','sql','');
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();

switch ($_MMVAR_a9ecec9b36cd18d921){
Case "del":
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from '.TNREG.'_order where id in('.$_MMVAR_7ca1659d6f01cb3410.') and userid='.$_MMVAR_a68c41bd0ae0e8ec59[1],'nosync');
_MMFUN_6da5ed7d3a356dcac7("删除订单成功!",$_SERVER['HTTP_REFERER']);
break;
default:
echo "none";
}
}
echo COPYRIGHT;
?>
</body>
</html>