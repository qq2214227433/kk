<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_53d17c3545aae95b9e,$_MMVAR_c8681bb53a59c8b871,$_MMVAR_3dbbdfa5c2332dd525,$_MMVAR_28c43284b891818123;
$_MMVAR_be4fc7809bc7888fd4=_MMFUN_cc3cf510bffd973b95('agid','get','int',0); 
$_MMVAR_533bf25b4dcb8c8cfe=_MMFUN_cc3cf510bffd973b95('priceid','get','int',0); 
$_MMVAR_e8e4e6a4fe4c45c275=_MMFUN_cc3cf510bffd973b95('keytypeid','get','int',0);

$_MMVAR_61a3ad9505d0bea3fa=_MMFUN_cc3cf510bffd973b95('softid','get','int',0);

$_MMVAR_ca0023a3645322d945=_MMFUN_cc3cf510bffd973b95('sign','get','sql','');


if(_MMFUN_cf8c11a79575861c0c($_MMVAR_d6858a6d9e9ee80bab.$_MMVAR_be4fc7809bc7888fd4.$_MMVAR_e8e4e6a4fe4c45c275.$_MMVAR_533bf25b4dcb8c8cfe.$_MMVAR_61a3ad9505d0bea3fa)!=$_MMVAR_ca0023a3645322d945)
_MMFUN_6da5ed7d3a356dcac7("非法URL链接");

$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and id=' . $_MMVAR_61a3ad9505d0bea3fa );
if(empty($_MMVAR_9a036496d66f59815a))
_MMFUN_6da5ed7d3a356dcac7("未找到软件");

$_MMVAR_c6e403382e670747e6=explode(',',$_MMVAR_53d17c3545aae95b9e[4]);	


$_MMVAR_6ab292966e12f515b0=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_d6858a6d9e9ee80bab);
if(empty($_MMVAR_6ab292966e12f515b0))
_MMFUN_6da5ed7d3a356dcac7("作者不存在。");

$_MMVAR_0a1facbfa99a9d2d39=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_keyprice where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and id=' . $_MMVAR_533bf25b4dcb8c8cfe);
if(empty($_MMVAR_0a1facbfa99a9d2d39))
_MMFUN_6da5ed7d3a356dcac7("价格表中未找到该数据");

$_MMVAR_aabe78cfc64175e5bc=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_keyattribute where  id=' . $_MMVAR_e8e4e6a4fe4c45c275);
if(empty($_MMVAR_aabe78cfc64175e5bc))
_MMFUN_6da5ed7d3a356dcac7('未找到该卡类型');

$_MMVAR_af27f0938c2e28a274=_MMFUN_be508a66d5e356ab9c($_MMVAR_6ab292966e12f515b0['membertype'],$_MMVAR_61a3ad9505d0bea3fa,$_MMVAR_e8e4e6a4fe4c45c275,$_MMVAR_0a1facbfa99a9d2d39['linknum']);
if($_MMVAR_af27f0938c2e28a274==-1)
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_0a1facbfa99a9d2d39['linknum'].'开'.$_MMVAR_aabe78cfc64175e5bc['keyname'].'扣币规则未设置，请联系作者到[软件管理->扩展扣币规则]里设置');		

$_MMVAR_df364819de9c720683=$_MMVAR_0a1facbfa99a9d2d39['linknum'];

$_MMVAR_9bd53390b4cc3ad4c8=0;
?>
<script>
function chkorder(){
var wm="";
var errorno=0;
var t5 = $("input[name='keyNum']").attr("value");
if (t5<1||t5><?php echo $_MMVAR_53d17c3545aae95b9e[0]!==0?'999':'99'?>||t5=="") {
wm += "购卡数量限制1-<?php echo $_MMVAR_53d17c3545aae95b9e[0]!==0?'999':'99'?>张；\r\n";
errorno = 1;
}

var t6 = $("input[name='payname']").attr("value");
if (t6.length<2) {
wm += "姓名必填；\r\n";
errorno = 1;
}

var t7 = $("input[name='payqq']").attr("value");
if (t7.length<5) {
wm += "QQ必填；\r\n";
errorno = 1;
}

var t1 = $("#vcode").attr("value");
if (t1.length != 4) {
wm += "验证码错误；\r\n";
errorno = 1;
}


<?php
$_MMVAR_78dfcbc09ff4829f82='';
$_MMVAR_8470680fa3b10ad788='';
$_MMVAR_91a88c4b60f4746b71='';

if($_MMVAR_53d17c3545aae95b9e[0]==0){
if($_MMVAR_0a1facbfa99a9d2d39['keyprice1']==0)
_MMFUN_6da5ed7d3a356dcac7("该卡类型零售价格为0，不可购买！");
$_MMVAR_0528fcd7270312fb31=$_MMVAR_0a1facbfa99a9d2d39['keyprice1'];
$_MMVAR_f2606c6e00d379057f=$_MMVAR_0528fcd7270312fb31;
}else{
$_MMVAR_07ce561ea9edbf5af8=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_agent where `id`='.$_MMVAR_53d17c3545aae95b9e[0]);
$_MMVAR_78dfcbc09ff4829f82=$_MMVAR_07ce561ea9edbf5af8['agentname'];					
$_MMVAR_8470680fa3b10ad788=$_MMVAR_07ce561ea9edbf5af8['qq'];					
$_MMVAR_91a88c4b60f4746b71=$_MMVAR_07ce561ea9edbf5af8['tel'];
$_MMVAR_9bd53390b4cc3ad4c8=$_MMVAR_07ce561ea9edbf5af8['rmb'];
if(substr($_MMVAR_53d17c3545aae95b9e[4],0,1)==='A'){
if($_MMVAR_0a1facbfa99a9d2d39['keyprice2']==0)
_MMFUN_6da5ed7d3a356dcac7("该卡类型代理价A为0，不可购买！");
$_MMVAR_0528fcd7270312fb31=$_MMVAR_0a1facbfa99a9d2d39['keyprice2'];
$_MMVAR_f2606c6e00d379057f=$_MMVAR_0528fcd7270312fb31*$_MMVAR_53d17c3545aae95b9e[3]/100;	
}else{
if($_MMVAR_0a1facbfa99a9d2d39['keyprice3']==0)
_MMFUN_6da5ed7d3a356dcac7("该卡类型代理价B为0，不可购买！");
$_MMVAR_0528fcd7270312fb31=$_MMVAR_0a1facbfa99a9d2d39['keyprice3'];
$_MMVAR_f2606c6e00d379057f=$_MMVAR_0528fcd7270312fb31*$_MMVAR_53d17c3545aae95b9e[3]/100;	
}

}			
?>
t9=<?php echo $_MMVAR_f2606c6e00d379057f?>*100*t5/100;
var ab1 = $("#paytype2").attr("checked");
if(ab1==true && t9><?php echo $_MMVAR_9bd53390b4cc3ad4c8;?>){			
wm += "帐号余额不足，不可以使用余额支付！\r\n";
errorno = 1;
}
if (errorno != 0) {
alert(wm);
return false;
}

if(confirm("订单提交后不可修改，请确认信息：\r\n━━━━━━━━━━━━━━━\r\n软件名称：<?php echo $_MMVAR_9a036496d66f59815a['xjlname'] ?>\r\n注册卡类：<?php echo $_MMVAR_0a1facbfa99a9d2d39['linknum'].'开'.$_MMVAR_aabe78cfc64175e5bc['keyname']?>\r\n软件单价：<?php echo $_MMVAR_f2606c6e00d379057f?>元\r\n购买张数："+t5+"张\r\n合计金额："+t9+"元\r\n━━━━━━━━━━━━━━━\r\n您的姓名："+t6+"\r\n您的QQ："+t7)){return true;}else{return false;}
}
</script>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<form action ="card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&action=step2" method=post name=form1 id=form1 target="_self"  onsubmit="return chkorder()">
<tr class="tb_tip">
<td colspan=2>输入订单<input type=hidden name=agentrmb value=<?php echo $_MMVAR_9bd53390b4cc3ad4c8;?>></td>
</tr>
<tr class=tb_tr1>
<td>所属软件名</td>
<td><?php echo $_MMVAR_9a036496d66f59815a['xjlname']?>
<input type="hidden" name="agid" value="<?php echo $_MMVAR_be4fc7809bc7888fd4 ?>">
<input type="hidden" name="softid" value="<?php echo $_MMVAR_61a3ad9505d0bea3fa ?>">
<input type="hidden" name="priceid" value="<?php echo $_MMVAR_533bf25b4dcb8c8cfe ?>">
<input type="hidden" name="keytypeid" value="<?php echo $_MMVAR_e8e4e6a4fe4c45c275 ?>">
<input type="hidden" name="xjlname" value="<?php echo $_MMVAR_9a036496d66f59815a['xjlname'] ?>">
<input type="hidden" name="sign" value="<?php echo $_MMVAR_ca0023a3645322d945 ?>">					
</td>					
</tr>
<tr class=tb_tr2>
<td>卡类型</td>
<td><?php echo $_MMVAR_0a1facbfa99a9d2d39['linknum'].'开'.$_MMVAR_aabe78cfc64175e5bc['keyname']?><input type="hidden" name="keytype" value="<?php echo $_MMVAR_aabe78cfc64175e5bc['id'] ?>">
<input type="hidden" name="sign" value="<?php echo $_MMVAR_ca0023a3645322d945 ?>"></td>
</tr>
<tr class=tb_tr1>
<td>单价</td>
<td><?php echo $_MMVAR_0528fcd7270312fb31?>元/张　　　<?php
if($_MMVAR_53d17c3545aae95b9e[0]!==0){							
if(in_array($_MMVAR_9a036496d66f59815a['id'],$_MMVAR_c6e403382e670747e6))
//echo '打折后:';
echo '<span style=\'color:#f00\'>折后'.$_MMVAR_f2606c6e00d379057f.'元/张</span>';

}
?></td>
</tr>
<tr class=tb_tr2>
<td>购买数量</td>
<td><input type="text" onkeyup="this.value=this.value.replace(/\D/g,'1')" name="keyNum" maxlength="<?php echo $_MMVAR_53d17c3545aae95b9e[0]!==0?'3':'2'?>" value="1"  class="sml1inputText"> *每次最多限够<?php echo $_MMVAR_53d17c3545aae95b9e[0]!==0?'999':'99'?>张
</td>
</tr>
<tr class=tb_tr1>
<td width=100>支付方式</td>
<td>
<?php if($_MMVAR_53d17c3545aae95b9e[0]>0){
echo '<input type=radio name=paytype value=1>支付宝或网银在线支付';
echo '<input type=radio id=paytype2 name=paytype value=2 checked>使用帐号余额支付'; 
}else{
echo '<input type=radio name=paytype value=1 checked>支付宝或网银在线支付';
echo '<input type=radio style=\'display:none\' id=paytype2 name=paytype234 value=0>';
}?> 					
<input type=radio name="paytype" value=0>其它支付方式(请在备注里注明)</td>
</tr>
<tr class=tb_tr2>
<td width=100>你的姓名</td>
<td><input type="text" name="payname" maxlength="10" value="<?php echo $_MMVAR_78dfcbc09ff4829f82?>"  class="inputText">*必填</td>
</tr>
<?php if($_MMVAR_53d17c3545aae95b9e[0]>0) {?>
<tr class=tb_tr2>
<td width=100><label help=pug>标签</label></td>
<td><input type="text" name="tag" maxlength="18" value=""  class="inputText">填写有助于管理您代理的卡</td>
</tr>
<?php }?>
<tr class=tb_tr1>
<td width=100>你的QQ</td>
<td><input type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" name="payqq" maxlength="10" value="<?php echo $_MMVAR_8470680fa3b10ad788?>"  class="inputText">*必填，系统会自动发送订单资料和注册卡号到你的QQ邮箱</td>
</tr>
<tr class=tb_tr2>
<td width=100>你的电话</td>
<td><input type="text" name="paytel" maxlength="20" value="<?php echo $_MMVAR_91a88c4b60f4746b71?>" class="inputText"></td>
</tr>
<tr class=tb_tr2>
<td width=100>备注</td>
<td><textarea style="width:400px;height:80px" name="intro" cols="60"></textarea></td>
</tr>
<tr class=tb_tr1>
<td>验 证 码</td>
<td><input maxlength='4' type="text" class="vinputText" id="vcode" name="vcode" value=""><img class="vimg" src="..<?php echo KS_PATH_PUBLIC?>/images/code.php?<?php echo mt_rand(1000,9999)?>" align=absmiddle></td>
</tr>
<tr class=tb_tr2>
<td></td>
<td><input type='submit' name='submit1' id="submit1" value='submit' style='width:0;height:0'><img type="submit" src="..<?php echo KS_PATH_PUBLIC?>/images/submit_out.gif"> <img type="return" src="..<?php echo KS_PATH_PUBLIC?>/images/nosubmit_out.gif"><br>
<font color=red><b>*请使用IE浏览本售卡系统，否则在线支付成功后得不到取卡页面，那时只有通过订单查询来得到注册码。</b></font></td>
</tr>
</form>
</table>
<?php

?>