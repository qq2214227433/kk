<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

switch ($_MMVAR_7b6896960481a4d007){
Case "add":
_MMFUN_37cedbaace7eeb28ab();
break;
Case "save":
_MMFUN_da1a125ba68654f531();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}

function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_3baee5e4bc5c4c4d09=array(0=>'试用卡',1=>'天卡',7=>'周卡',30=>'月卡',90=>'季卡',365=>'年卡');
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_agent where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' order by id asc';

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
?>
<form action ="?action=batch" method=post id=f2 name=f2>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="10">代理商列表</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td><label help=agent>代理商名</label></td>
<td><label help=agent>折扣</label></td>
<td><label help=agent>最小消费</label></td>
<td><label help=agent>取卡保护(次)</label></td>
<td><label help=agent>超时保护(小时)</label></td>
<td><label help=agent>积分</label></td>
<td><label help=agent>余额</label></td>
<td><label help=agent>状态</label></td>
<td>编辑</td>
</tr>
<?php	
if(!empty($_MMVAR_5a0f5f64cd15c205df)){
$_MMVAR_8ff60a7771c3f2c087=0;

foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;			
?>
<tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td><?php echo $_MMVAR_9a036496d66f59815a['id'] ?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['agentname']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['b100']/100 ?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['minrmb']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['maxtimes']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['djtime']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['jifeng']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['rmb']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['islock']==1?'锁定':'正常' ?></td>
<td width=40><a href=?action=add&id=<?php echo $_MMVAR_9a036496d66f59815a['id']?>>编辑</a></td>
</tr>
<?php
}
}
?>

</table>	
<?php
}

function _MMFUN_37cedbaace7eeb28ab(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','','int',0);	
$_MMVAR_457f4d15fb626a53a0 = $_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_agent where id='.$_MMVAR_7ca1659d6f01cb3410 );
if($_MMVAR_457f4d15fb626a53a0==false){		
$_MMVAR_457f4d15fb626a53a0=array(
'agentname'=>'',
'xjlcodes'=>'',
'b100'=>90,
'islock'=>0,
'intro'=>'无',
'minrmb'=>100,
'nopaytimes'=>0,
'maxtimes'=>2,
'qq'=>10000,
'tel'=>'13800138000',
'rmb'=>0,
'djtime'=>24
);
}
$_MMVAR_616912649ce5bf6e87=str_replace(' ','',$_MMVAR_457f4d15fb626a53a0["xjlcodes"]);
if(empty($_MMVAR_616912649ce5bf6e87)){
$_MMVAR_c6e403382e670747e6=array();
}else{
$_MMVAR_c6e403382e670747e6=explode(',', $_MMVAR_616912649ce5bf6e87);
}
?>
<script>
function chkid(){var nid="";$("input[name='sxjlid']:checked").each(function(i){if(i==0){nid=$(this).attr("value");}else{nid=nid+","+$(this).attr("value");}});$("#keyids").attr("value",nid);return nid;	}
function chkfrom2(){
var wm="";
var errorno=0;
$("#xjlid").attr("value",chkid());
var t1 = $("#agentname").attr("value");
if(t1.length<1||t1.length>10){
wm += "代理名错误\r\n";
errorno = 1;				
}
var t1 = $("#b100").attr("value");
if(t1>100||t1<10){
wm += "折扣填写错误\r\n";
errorno = 1;				
}

if (errorno != 0) {
alert(wm);
return false;
}
return true;
}
</script>
<form action ="?action=save&id=<?php echo $_MMVAR_7ca1659d6f01cb3410 ?>" method=post id=f2 name=f2 onsubmit="return chkfrom2()">
<table width="996" border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="2"><?php  echo $_MMVAR_7ca1659d6f01cb3410==0?'添加':'修改' ?>代理商</td>
</tr>
<tr class="tb_tr1">
<td width=150><label help=agent>代理商名</label></td>
<td width=846><input type="text" name="agentname" id="agentname" maxlength="15" value="<?php echo $_MMVAR_457f4d15fb626a53a0['agentname'] ?>"  class="inputText"><span style='color:#aaa'>15个字符内</span></td>
</tr>
<tr class="tb_tr2">
<td>代理商密码</td>
<td><input type="text" name="password" id="password" maxlength="16" value=""  class="inputText"><span style='color:#aaa'>16个字符内</span></td>
</tr>
<tr class="tb_tr1">
<td width=150>QQ</td>
<td width=846><input type="text" name="qq" id="qq" maxlength="11" value="<?php echo $_MMVAR_457f4d15fb626a53a0['qq'] ?>"  class="inputText"><span style='color:#aaa'>11个字符内</span></td>
</tr>
<tr class="tb_tr2">
<td width=150>电话</td>
<td width=846><input type="text" name="tel" id="tel" maxlength="30" value="<?php echo $_MMVAR_457f4d15fb626a53a0['tel'] ?>"  class="inputText"><span style='color:#aaa'>30个字符内</span></td>
</tr>
<tr class="tb_tr1">
<td><label help=agent>最低消费</label></td>
<td><input type="text" name="minrmb" id="minrmb" maxlength="4" value="<?php echo $_MMVAR_457f4d15fb626a53a0['minrmb'] ?>"  class="inputText"><span style='color:#aaa'>每次提卡的最低消费</span></td>
</tr>
<tr class="tb_tr1">
<td width=150>余额</td>
<td width=846><input type="text" name="rmb" id="rmb" maxlength="9" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb'] ?>"  class="inputText" <?php if($_MMVAR_7ca1659d6f01cb3410==0)echo 'readonly onclick='.YH.'alert(\'该参数只能在编辑时修改，添加代理成功后，到代理商列表找到该代理编辑！\');'.YH ?>><input type="hidden" name="oldrmb" id="oldrmb" maxlength="9" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb'] ?>"  class="inputText"><span style='color:#aaa'>元，代理可用此余额提卡</span></td>
</tr>
<tr class="tb_tr2">
<td><label help=agent>价格组</label></td>
<td><select name="pricegroup" id="pricegroup" style="width:100px;height:22px">
<option value='A' <?php if(in_array('A', $_MMVAR_c6e403382e670747e6))echo ' selected';?>>代理价A</option>
<option value='B' <?php if(in_array('B', $_MMVAR_c6e403382e670747e6))echo ' selected';?>>代理价B</option>
</select></td>
</tr>
<tr class="tb_tr2">
<td><label help=agent>享受折扣</label></td>
<td><input type="text" name="b100" id="b100" maxlength="3" value="<?php echo $_MMVAR_457f4d15fb626a53a0['b100'] ?>"  class="sml1inputText">% <span style='color:#aaa'>1到100  注意是在相应价格组上享受的折扣</span></td>
</tr>
<tr class="tb_tr1">
<td><label help=agent>状态</label></td>
<td><input type="text" name="islock" id="islock" maxlength="1" value="<?php echo $_MMVAR_457f4d15fb626a53a0['islock'] ?>"  class="sml1inputText"> <span style='color:#aaa'>0为正常,1为锁定</span></td>
</tr>
<tr class="tb_tr2">
<td><label help=agent>取卡保护</label></td>
<td><input type="text" name="maxtimes" id="maxtimes" maxlength="2" value="<?php echo $_MMVAR_457f4d15fb626a53a0['maxtimes'] ?>"  class="sml1inputText"> <span style='color:#aaa'>当代理的连续未支付次数<?php echo $_MMVAR_457f4d15fb626a53a0['nopaytimes'] ?>≥本设置时，禁止代理在非在线支付情况下实时取卡(立即扣除作者卡币)</span></td>
</tr>
<tr class="tb_tr1">
<td><label help=agent>超时保护</label></td>
<td><input type="text" name="djtime" id="djtime" maxlength="2" value="<?php echo $_MMVAR_457f4d15fb626a53a0['djtime'] ?>"  class="sml1inputText">小时 <span style='color:#aaa'>实时取卡后，多少小时未支付，就冻结卡，如果是充值卡未付款不允许充值。</span></td>
</tr>
<tr class="tb_tr2">
<td><label help=agent>相关软件</label></td>
<td><input type=hidden name=xjlid id=xjlid value=""><?php
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_f34f07e4cda7137656=in_array($_MMVAR_9a036496d66f59815a['id'], $_MMVAR_c6e403382e670747e6)?"checked":"";
echo '<input '.$_MMVAR_f34f07e4cda7137656.' type=\'checkbox\' name=\'sxjlid\' value='.$_MMVAR_9a036496d66f59815a['id'].' />'.$_MMVAR_9a036496d66f59815a['xjlname'].'<br>';
}
?></td>
</tr>
<tr class="tb_tr1">
<td><label help=agent>代理备注</label></td>
<td><textarea rows="6" cols="80" name="intro" id="intro"><?php echo $_MMVAR_457f4d15fb626a53a0['intro'] ?></textarea></td>
</tr>
<tr class="tb_tr2">
<td></td>
<td><input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0'><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif"> <img type="return" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/nosubmit_out.gif"> </td>
</tr>
</table>
</form>
<?php
}

function _MMFUN_da1a125ba68654f531(){
global $_MMVAR_9f95914834184aeeae;
_MMFUN_d68ee68ae41a1d89f0();		
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','get','int',0);
$_MMVAR_8f7a02709f036f62e8=_MMFUN_cc3cf510bffd973b95('agentname','post','sql','');
$_MMVAR_e7e589ad638b9861d3=_MMFUN_cc3cf510bffd973b95('password','post','sql','');
$_MMVAR_01a2fddf52dbaa2b92=_MMFUN_cc3cf510bffd973b95('xjlid','post','sql','');
$_MMVAR_40438043ac20055875=_MMFUN_cc3cf510bffd973b95('b100','post','int',100);
$_MMVAR_7ad80a13c1fe0fe99e=_MMFUN_cc3cf510bffd973b95('islock','post','int',0);
$_MMVAR_d9c887456b803d668c=_MMFUN_cc3cf510bffd973b95('intro','post','sql','');
$_MMVAR_1ab25dafeaf4abedda=_MMFUN_cc3cf510bffd973b95('qq','post','int',0);
$_MMVAR_088e54769f3397c46b=_MMFUN_cc3cf510bffd973b95('rmb','post','num',0);
$_MMVAR_28407f86996650af32=_MMFUN_cc3cf510bffd973b95('oldrmb','post','num',0);
$_MMVAR_3ed102fc3cae8b3dde=_MMFUN_cc3cf510bffd973b95('tel','post','sql','');
$_MMVAR_ff2bf09dc039456e03=_MMFUN_cc3cf510bffd973b95('minrmb','post','int',0);
$_MMVAR_dbde668f914fce4970=_MMFUN_cc3cf510bffd973b95('maxtimes','post','int',1);
$_MMVAR_30b3c2f8b8c42b5074=_MMFUN_cc3cf510bffd973b95('djtime','post','int',24);
$_MMVAR_097f0a2df26957ce10=_MMFUN_cc3cf510bffd973b95('pricegroup','post','sql','A');
if($_MMVAR_01a2fddf52dbaa2b92==''){
$_MMVAR_01a2fddf52dbaa2b92=$_MMVAR_097f0a2df26957ce10;
}else{
$_MMVAR_01a2fddf52dbaa2b92=$_MMVAR_097f0a2df26957ce10.','.$_MMVAR_01a2fddf52dbaa2b92;
}

if(!preg_match("/^[a-zA-Z0-9]+$/",$_MMVAR_8f7a02709f036f62e8))
_MMFUN_6da5ed7d3a356dcac7('代理名只能由a-zA-Z0-9字符组成');

if($_MMVAR_7ad80a13c1fe0fe99e!=0 && $_MMVAR_7ad80a13c1fe0fe99e!=1)
$_MMVAR_7ad80a13c1fe0fe99e=0;

$_MMVAR_273aa5d2794e847523 = array(
'userid'		=>$_MMVAR_a68c41bd0ae0e8ec59[1],
'agentname'		=>$_MMVAR_8f7a02709f036f62e8,
'xjlcodes'		=>$_MMVAR_01a2fddf52dbaa2b92,
'b100'			=>$_MMVAR_40438043ac20055875,
'islock'		=>$_MMVAR_7ad80a13c1fe0fe99e,
'intro'			=>$_MMVAR_d9c887456b803d668c,
'minrmb'		=>$_MMVAR_ff2bf09dc039456e03,
'maxtimes'		=>$_MMVAR_dbde668f914fce4970,
'qq'		=>$_MMVAR_1ab25dafeaf4abedda,
'tel'		=>$_MMVAR_3ed102fc3cae8b3dde,
'rmb'		=>$_MMVAR_088e54769f3397c46b,
'djtime'		=>$_MMVAR_30b3c2f8b8c42b5074
);
if($_MMVAR_7ca1659d6f01cb3410==0){
_MMFUN_d68ee68ae41a1d89f0();
if(strlen($_MMVAR_e7e589ad638b9861d3)>12||strlen($_MMVAR_e7e589ad638b9861d3)<6)
_MMFUN_6da5ed7d3a356dcac7('密码6-12位数据');

$_MMVAR_99ffe781e5f217cc40=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if($_MMVAR_99ffe781e5f217cc40==false)
_MMFUN_6da5ed7d3a356dcac7("用户信息出错");

if($_MMVAR_99ffe781e5f217cc40['username']=='test')
_MMFUN_6da5ed7d3a356dcac7('测试帐号，禁止添加代理!');

$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100('select * from '.TNREG.'_agent where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if($_MMVAR_4fa302d033574933a4>MAXAGENT)
_MMFUN_6da5ed7d3a356dcac7("最多只允许有".(MAXAGENT+1)."个代理帐号");			

if($_MMVAR_a68c41bd0ae0e8ec59[0]<3 && $_MMVAR_99ffe781e5f217cc40['rmb']<5)
_MMFUN_6da5ed7d3a356dcac7('帐户内卡币不足，无法添加新的代理');

$_MMVAR_29e6f464de0211e625=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_agent where agentname=\''.$_MMVAR_8f7a02709f036f62e8.'\'');
if($_MMVAR_29e6f464de0211e625!==false)
_MMFUN_6da5ed7d3a356dcac7("代理名已存在，请换一个");

$_MMVAR_273aa5d2794e847523['addtime']=time();			
$_MMVAR_273aa5d2794e847523['password']=_MMFUN_cf8c11a79575861c0c($_MMVAR_e7e589ad638b9861d3);			
$_MMVAR_273aa5d2794e847523['nopaytimes']=0;				
$_MMVAR_273aa5d2794e847523['jifeng']=0;				
$_MMVAR_273aa5d2794e847523['rmb']=$_MMVAR_088e54769f3397c46b;

$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(TNREG.'_agent',$_MMVAR_273aa5d2794e847523,'sync');
if($_MMVAR_510ba85d0c08c74283!==false){
$_MMVAR_d5c1ff0ae85ae3bdf3='';
if($_MMVAR_a68c41bd0ae0e8ec59[0]<3){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET rmb=rmb-5 where id='.$_MMVAR_a68c41bd0ae0e8ec59[1],'sync');
$_MMVAR_d5c1ff0ae85ae3bdf3='<script>var c=window.parent.document.getElementById(\'drmb\').innerHTML;window.parent.document.getElementById(\'drmb\').innerHTML=(c*10-50)/10;</script>';
}
_MMFUN_6da5ed7d3a356dcac7('添加新的代理成功'.$_MMVAR_d5c1ff0ae85ae3bdf3,'agentlist.php?rand='.time());
}else{
_MMFUN_6da5ed7d3a356dcac7('添加代理失败');
}
}else{
if(strlen($_MMVAR_e7e589ad638b9861d3)>12||(strlen($_MMVAR_e7e589ad638b9861d3)<6&&!empty($_MMVAR_e7e589ad638b9861d3)))
_MMFUN_6da5ed7d3a356dcac7('密码6-12位数据');

if(!empty($_MMVAR_e7e589ad638b9861d3))			
$_MMVAR_273aa5d2794e847523['password']=_MMFUN_cf8c11a79575861c0c($_MMVAR_e7e589ad638b9861d3);	

$_MMVAR_29e6f464de0211e625=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_agent where id<>'.$_MMVAR_7ca1659d6f01cb3410.' and agentname=\''.$_MMVAR_8f7a02709f036f62e8.'\'');
if($_MMVAR_29e6f464de0211e625!==false)
_MMFUN_6da5ed7d3a356dcac7("代理名已存在，请换一个");

$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_33341a6081a0c7b669(TNREG.'_agent',$_MMVAR_273aa5d2794e847523,'id='.$_MMVAR_7ca1659d6f01cb3410,'sync');
if($_MMVAR_510ba85d0c08c74283!==false){
if($_MMVAR_088e54769f3397c46b!=$_MMVAR_28407f86996650af32){			
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_agentrmblog` (`addtime`, `rmb1`, `rmb2`, `rmb3`, `info`, `userid`, `agentid`) VALUES ('.time().','.$_MMVAR_28407f86996650af32.','.$_MMVAR_088e54769f3397c46b.','.($_MMVAR_088e54769f3397c46b-$_MMVAR_28407f86996650af32).',\'后台操作\','.$_MMVAR_a68c41bd0ae0e8ec59[1].','.$_MMVAR_7ca1659d6f01cb3410.')','notsync');
}
_MMFUN_6da5ed7d3a356dcac7('编辑代理成功','agentlist.php?rand='.time());
}else{
_MMFUN_6da5ed7d3a356dcac7('编辑代理失败');
}
}
}
echo COPYRIGHT;
?>
</body>
</html>