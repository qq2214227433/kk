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
Case "save":
_MMFUN_da1a125ba68654f531();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}

function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','','int',0);
$_MMVAR_f85efb2640d22b164c=array(1=>'试用帐号',2=>'计币帐号',3=>'计时帐号');
$_MMVAR_99ffe781e5f217cc40 = $_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_a68c41bd0ae0e8ec59[1]);

if(empty($_MMVAR_99ffe781e5f217cc40))
_MMFUN_6da5ed7d3a356dcac7("用户未找到");
?>	
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td><?php
echo '卡总数：'.$_MMVAR_99ffe781e5f217cc40['ext1'];
echo '张　　　　用户：'.$_MMVAR_99ffe781e5f217cc40['ext2'];
echo '个　　　　试用卡：'.$_MMVAR_99ffe781e5f217cc40['ext3'];
echo '张　　　　天卡：'.$_MMVAR_99ffe781e5f217cc40['ext4'];
echo '张　　　　回收站：'.$_MMVAR_99ffe781e5f217cc40['ext5'];
?></td>
</tr>
</table>
<form action ="?action=save" method=post id=f2 name=f2>
<table width="980" border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="2">编辑用户资料　　<span style='color:#fff'>插件示例在下载包里</span></td>
</tr>
<tr class="tb_tr1">
<td width=200>用户名</td>
<td width=796><?php echo $_MMVAR_99ffe781e5f217cc40['username'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>不带?号的售卡系统链接  <?php
if(SVRID==1 && !is_file(KS_DIRP.KS_PATH_PAY.'/card/u'.$_MMVAR_99ffe781e5f217cc40['id'].'.php'))
copy(KS_DIRP.KS_PATH_PAY.'/card/u_____.php',KS_DIRP.KS_PATH_PAY.'/card/u'.$_MMVAR_99ffe781e5f217cc40['id'].'.php');
echo HOSTA.KS_PATH_PAY.'/card/u'.$_MMVAR_99ffe781e5f217cc40['id'].'.php'?></b></td>
</tr>
<tr class="tb_tr2">
<td>用户密码</td>
<td><input type="password" name="password" id="password" maxlength="20" value=""  class="inputText">*修改资料必须验证密码</td>
</tr>
<tr class="tb_tr1">
<td>新的密码</td>
<td><input type="password" name="password1" id="password1" maxlength="20" value=""  class="inputText">不改密码请留空</td>
</tr>
<tr class="tb_tr2">
<td>新的密码</td>
<td><input type="password" name="password2" id="password2" maxlength="20" value=""  class="inputText">不改密码请留空</td>
</tr>
<tr class="tb_tr1">
<td>用户QQ</td>
<td><input type="text" name="regqq" id="regqq" maxlength="11" value="<?php echo $_MMVAR_99ffe781e5f217cc40['regqq'] ?>"  class="inputText" readonly onclick="$.msgbox({width:500,height:120,title:'友情提示',content:{type:'alert', content:'只能通过超级管理的用户编辑修改QQ号！'}});"></td>
</tr>
<tr class="tb_tr2">
<td>有效期</td>
<td><?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_99ffe781e5f217cc40['endtime']) ?>，<span style="color:#f00">过期帐号可以登陆本系统，但不能使用验证服务，过期时间超出30天系统会自动删除您的帐号</span></td>
</tr>
<tr class="tb_tr1">
<td>advapi接口可用次数</td>
<td>付费：<?php echo $_MMVAR_99ffe781e5f217cc40['phpcoderuntimes'] ?>次，免费：<?php echo empty($_MMVAR_99ffe781e5f217cc40['phpmftimes'])?'0':$_MMVAR_99ffe781e5f217cc40['phpmftimes'] ?>次   免费次数系统每天0点后初始为20000</td>
</tr>
<tr class="tb_tr1">
<td>卡币</td>
<td><?php echo $_MMVAR_99ffe781e5f217cc40['rmb'] ?></td>
</tr>
<tr class="tb_tr2">
<td>用户类型</td>
<td><?php echo $_MMVAR_f85efb2640d22b164c[$_MMVAR_99ffe781e5f217cc40['membertype']] ?></td>
</tr>
<tr class="tb_tr1">
<td><label help=myinfo>可管理用户</label></td>
<td><?php echo $_MMVAR_99ffe781e5f217cc40['vipkeynums'] ?>个  现有<?php echo $_MMVAR_99ffe781e5f217cc40['key1num']?></td>
</tr>
<tr class="tb_tr1">
<td><label help=myinfo>支付宝接口类型</label></td>
<td>
<select name="alitype" id="alitype" style="width:207px;height:22px">
<option value="create_direct_pay_by_user" <?php echo $_MMVAR_99ffe781e5f217cc40['alitype']=='create_direct_pay_by_user'?'selected':''?>>即时到帐接口（推荐）</option>
<option value="trade_create_by_buyer" <?php echo $_MMVAR_99ffe781e5f217cc40['alitype']=='trade_create_by_buyer'?'selected':''?>>标准双接口</option>
<option value="create_partner_trade_by_buyer" <?php echo $_MMVAR_99ffe781e5f217cc40['alitype']=='create_partner_trade_by_buyer'?'selected':''?>>纯担保交易接口</option>
</select>  <a href=<?php echo HOSTA.KS_PATH_PAY.'/card/u'.$_MMVAR_99ffe781e5f217cc40['id'].'.php' ?> target=_blank>点击查看我的在线售卡页面</a>　<a href="http://www.hphu.com/url/?id=regalipay" style='color:#00f' target="_blank">点击此处申请支付宝即时到帐接口</a></td>
</tr>
<tr class="tb_tr2">
<td><label help=myinfo>支付宝帐户</label></td>
<td><input type="text" name="alimail" id="alimail" maxlength="50" value="<?php echo $_MMVAR_99ffe781e5f217cc40['alimail'] ?>"  class="inputText"></td>
</tr>
<tr class="tb_tr1">
<td><label help=myinfo>支付宝合作者身份</label>（partnerID)</td>
<td><input type="text" name="aliid" id="aliid" maxlength="20" value="<?php echo $_MMVAR_99ffe781e5f217cc40['aliid'] ?>"  class="inputText"></td>
</tr>
<tr class="tb_tr2">
<td><label help=myinfo>支付宝交易安全校验码</label>(key)</td>
<td><input type="text" name="alikey" id="alikey" maxlength="50" value="<?php echo strlen($_MMVAR_99ffe781e5f217cc40['alikey'])<20?'请填写安全校验码':''?>"  class="inputText">*第一次设定一定要填写，不修改请留空（安全起见不显示）</td>
</tr>
<tr class="tb_tr1">
<td><label help=myinfo>我的银行帐号</label></td>
<td><textarea align=left style="width:400px;height:80px" name="orderpayinfo" cols="60"><?php echo htmlspecialchars($_MMVAR_99ffe781e5f217cc40['orderpayinfo'])?></textarea></td>
</tr>
<tr class="tb_tr1">
<td></td>
<td><input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0'><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif"> <img type="return" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/nosubmit_out.gif"> </td>
</tr>
</table>
</form>
<?php
}

function _MMFUN_da1a125ba68654f531(){
_MMFUN_d68ee68ae41a1d89f0();
global $_MMVAR_9f95914834184aeeae;	
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_e7e589ad638b9861d3=_MMFUN_cc3cf510bffd973b95('password','post','sql','');
$_MMVAR_21defd428ea8e766cf=_MMFUN_cc3cf510bffd973b95('password1','post','sql','');
$_MMVAR_ac3c316f8a9b9798b7=_MMFUN_cc3cf510bffd973b95('password2','post','sql','');
$_MMVAR_7fa63148f442396b5e=_MMFUN_cc3cf510bffd973b95('regqq','post','int',10000);
$_MMVAR_122e03478cea33d96a=_MMFUN_cc3cf510bffd973b95('aliid','post','sql','');
$_MMVAR_b881b29741220ae7bf=_MMFUN_cc3cf510bffd973b95('alikey','post','sql','');
$_MMVAR_8582413e19e5a55461=_MMFUN_cc3cf510bffd973b95('alimail','post','sql','');
$_MMVAR_b9544b9b6ce072d762=_MMFUN_cc3cf510bffd973b95('alitype','post','sql','');
$_MMVAR_4e1d6825d6edc0df8b=_MMFUN_cc3cf510bffd973b95('orderpayinfo','post','sql','');
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
if($_MMVAR_21defd428ea8e766cf!==$_MMVAR_ac3c316f8a9b9798b7)
_MMFUN_6da5ed7d3a356dcac7('新密码两次输入的不一样！');

$_MMVAR_99ffe781e5f217cc40=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and password=\''._MMFUN_cf8c11a79575861c0c($_MMVAR_e7e589ad638b9861d3).'\'');
if(empty($_MMVAR_99ffe781e5f217cc40))
_MMFUN_6da5ed7d3a356dcac7('原始密码错误！');


$_MMVAR_273aa5d2794e847523=array();		
//$_MMVAR_273aa5d2794e847523['regqq']	=$_MMVAR_7fa63148f442396b5e;		
$_MMVAR_273aa5d2794e847523['aliid']	=$_MMVAR_122e03478cea33d96a;		
$_MMVAR_273aa5d2794e847523['alimail']	=$_MMVAR_8582413e19e5a55461;		
$_MMVAR_273aa5d2794e847523['orderpayinfo']	=$_MMVAR_4e1d6825d6edc0df8b;		
$_MMVAR_273aa5d2794e847523['alitype']	=$_MMVAR_b9544b9b6ce072d762;
if(!empty($_MMVAR_21defd428ea8e766cf)){
if($_MMVAR_99ffe781e5f217cc40['username']=='test')
_MMFUN_6da5ed7d3a356dcac7('测试帐号，禁止修改密码!');	
$_MMVAR_273aa5d2794e847523['password']=_MMFUN_cf8c11a79575861c0c($_MMVAR_21defd428ea8e766cf);
}
if(!empty($_MMVAR_b881b29741220ae7bf))		
$_MMVAR_273aa5d2794e847523['alikey']=$_MMVAR_b881b29741220ae7bf;

$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_33341a6081a0c7b669(TNREG.'_user',$_MMVAR_273aa5d2794e847523,'id='.$_MMVAR_a68c41bd0ae0e8ec59[1],'sync');

if($_MMVAR_510ba85d0c08c74283!==false){
_MMFUN_6da5ed7d3a356dcac7('编辑资料成功','myinfo.php');
}else{
_MMFUN_6da5ed7d3a356dcac7('编辑资料失败');
}
}
echo COPYRIGHT;
?>
</body>
</html>