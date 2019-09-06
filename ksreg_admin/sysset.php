<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
if(isset($_POST['action'])){
if($_POST['action']=='save')_MMFUN_ad3dd04c8e723cbd60();
}

function _MMFUN_ad3dd04c8e723cbd60(){

$_MMVAR_45b034dbaf30c1f36c=$_POST['spassword'];	
if(SUPERPASSWORD != md5($_MMVAR_45b034dbaf30c1f36c))
_MMFUN_6da5ed7d3a356dcac7("你输入的超级密码错误!");
$_MMVAR_6586a86c15cb751954=$_POST['SAVELOGTIME'];
$_MMVAR_31dcfb0b6b857b9523=$_POST['DELKEYTIME'];
$_MMVAR_eb5adda3e7cb25c861=$_POST['AUTODELKEYTIME'];
$_MMVAR_81bbe9b75f2989fb85=$_POST['RECHARGELOGTIME'];
$_MMVAR_10e7dff02e15257631=$_POST['RECORDTIMES'];
$_MMVAR_c75b93714138984560=$_POST['ICPNUM'];
$_MMVAR_19a23c56bab9b0452d=$_POST['CCMODE'];
$_MMVAR_177445750ba57a9ecc=$_POST['CCTIME'];
$_MMVAR_c11bf7bef834d88f4b=$_POST['CCTIMES'];
$_MMVAR_48fbcde56eaf6e71de=$_POST['PRINTERROR'];
$_MMVAR_4df2b6c7dd5e1172ce=$_POST['LOGINADMIN'];
$_MMVAR_907a81d6556570a38c=$_POST['CHKADVAPI'];
$_MMVAR_ced55faeb78eb02c0c=$_POST['SUPERPASSWORD'];
$_MMVAR_49e7a85849c0bbd567=$_POST['PasswordProtect'];



$_MMVAR_5be6c8e4ba88db25c3=file_get_contents("../global_ksreg.php");

$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'SAVELOGTIME',$_MMVAR_6586a86c15cb751954);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'DELKEYTIME',$_MMVAR_31dcfb0b6b857b9523);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'AUTODELKEYTIME',$_MMVAR_eb5adda3e7cb25c861);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'RECHARGELOGTIME',$_MMVAR_81bbe9b75f2989fb85);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'RECORDTIMES',$_MMVAR_10e7dff02e15257631);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'CCTIME',$_MMVAR_177445750ba57a9ecc);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'LOGINADMIN',$_MMVAR_4df2b6c7dd5e1172ce);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'CCTIMES',$_MMVAR_c11bf7bef834d88f4b);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'CCMODE',$_MMVAR_19a23c56bab9b0452d);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'PRINTERROR',$_MMVAR_48fbcde56eaf6e71de);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'CHKADVAPI',$_MMVAR_907a81d6556570a38c);
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'ICPNUM',$_MMVAR_c75b93714138984560);
if($_MMVAR_ced55faeb78eb02c0c!="")$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_edb86dbb4323344740($_MMVAR_5be6c8e4ba88db25c3,'SUPERPASSWORD',md5($_MMVAR_ced55faeb78eb02c0c));	
$_MMVAR_5be6c8e4ba88db25c3=_MMFUN_49a8c661f04d31dedb($_MMVAR_5be6c8e4ba88db25c3,'PasswordProtect',$_MMVAR_49e7a85849c0bbd567);
$_MMVAR_5be6c8e4ba88db25c3=file_put_contents("../global_ksreg.php",$_MMVAR_5be6c8e4ba88db25c3);

exit('<script>alert(\'修改配置文件成功！\');window.self.location=\'sysset.php\';</script>');
}

function _MMFUN_edb86dbb4323344740($_MMVAR_050fdb56422d02ffca,$_MMVAR_7be1c2a87120a791f2,$_MMVAR_eeae5438e6bcefcdba){
return preg_replace('/define\(\''.$_MMVAR_7be1c2a87120a791f2.'\',\'[^\']*\'\)/i','define(\''.$_MMVAR_7be1c2a87120a791f2.'\',\''.$_MMVAR_eeae5438e6bcefcdba.'\')', $_MMVAR_050fdb56422d02ffca); 
} 
function _MMFUN_49a8c661f04d31dedb($_MMVAR_050fdb56422d02ffca,$_MMVAR_7be1c2a87120a791f2,$_MMVAR_eeae5438e6bcefcdba){
return preg_replace('/define\(\''.$_MMVAR_7be1c2a87120a791f2.'\',[^\)]*\)/i','define(\''.$_MMVAR_7be1c2a87120a791f2.'\','.$_MMVAR_eeae5438e6bcefcdba.')', $_MMVAR_050fdb56422d02ffca); 
} 
?>
<br><br>
<table width="980" style='border:0' border="0" cellpadding="0"  align="center">
<tr><td>
<fieldset style="width:970px;" align=center>
<legend>修改全局配置</legend>

<form  method=post id=f1 name=f1 >
<table align=center width="600" style="margin-top:20px" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align=right height=36>必须输入超级密码才可以修改：</td><td align=left colspan=3><input value="" maxlength='30' type="password" id="spassword" name="spassword" class="inputText"></td>
</tr>
<tr>
<td align=right height=36>新的超级密码：</td><td align=left colspan=3><input value="" maxlength='30' type="text" id="spassword2" name="SUPERPASSWORD" class="inputText"></td>
</tr>
<tr>
<td align=right height=36>网站备案号：</td><td align=left colspan=3><input value="<?php echo ICPNUM?>" maxlength='20' type="text" id="ICPNUM" name="ICPNUM" class="inputText"></td>
</tr>
<tr>
<td align=right height=36>后台登陆验证：</td><td align=left colspan=3>
<select name="PasswordProtect" id="PasswordProtect" style="width:207px;height:22px">						
<option value='0' <?php if(PasswordProtect==0)echo ' selected'?>>使用普通验证码</option>					
<option value='1' <?php if(PasswordProtect==1)echo ' selected'?>>使用密保卡(推荐)</option>	
</select></td>
</tr>
<tr>
<td align=right height=36>记录总验证次数：</td><td align=left colspan=3>
<select name="RECORDTIMES" id="RECORDTIMES" style="width:207px;height:22px">						
<option value='0' <?php if(RECORDTIMES==0)echo ' selected'?>>不记录(推荐)</option>						
<option value='1' <?php if(RECORDTIMES==1)echo ' selected'?>>记录(占资源)</option>
</select></td>
</tr>
<tr>
<td align=right height=36 valign=top>防刷新机制：</td><td align=left colspan=3>
<select name="CCMODE" id="CCMODE" style="width:50px;height:22px">						
<option value='0' <?php if(CCMODE==0)echo ' selected'?>>关闭</option>						
<option value='1' <?php if(CCMODE==1)echo ' selected'?>>开启</option>	
</select><br>同一IP两次访问的时间间隔少于
<select name="CCTIME" id="CCTIME" style="width:50px;height:22px">						
<option value='50' <?php if(CCTIME==50)echo ' selected'?>>50秒</option>						
<option value='60' <?php if(CCTIME==60)echo ' selected'?>>60秒</option>						
<option value='70' <?php if(CCTIME==70)echo ' selected'?>>70秒</option>						
<option value='80' <?php if(CCTIME==80)echo ' selected'?>>80秒</option>	
</select>记录<br>连续被记录
<select name="CCTIMES" id="CCTIMES" style="width:50px;height:22px">						
<option value='10' <?php if(CCTIMES==10)echo ' selected'?>>10次</option>						
<option value='9' <?php if(CCTIMES==9)echo ' selected'?>>9次</option>						
<option value='8' <?php if(CCTIMES==8)echo ' selected'?>>8次</option>						
<option value='7' <?php if(CCTIMES==7)echo ' selected'?>>7次</option>	
</select>封IP</td>
</tr>
<tr>
<td align=right height=36>安全日志保存天数：</td><td align=left colspan=3>
<select name="SAVELOGTIME" id="SAVELOGTIME" style="width:207px;height:22px">						
<option value='1' <?php if(SAVELOGTIME==1)echo ' selected'?>>1天</option>						
<option value='2' <?php if(SAVELOGTIME==2)echo ' selected'?>>2天(推荐)</option>						
<option value='3' <?php if(SAVELOGTIME==3)echo ' selected'?>>3天</option>						
<option value='4' <?php if(SAVELOGTIME==4)echo ' selected'?>>4天</option>						
<option value='5' <?php if(SAVELOGTIME==5)echo ' selected'?>>5天</option>						
<option value='6' <?php if(SAVELOGTIME==6)echo ' selected'?>>6天</option>						
<option value='7' <?php if(SAVELOGTIME==7)echo ' selected'?>>7天</option>
</select></td>
</tr>
<tr>
<td align=right height=36>被标记为删除的卡只保留：</td><td align=left colspan=3>
<select name="DELKEYTIME" id="DELKEYTIME" style="width:207px;height:22px">						
<option value='7' <?php if(DELKEYTIME==7)echo ' selected'?>>7天(推荐)</option>						
<option value='15' <?php if(DELKEYTIME==15)echo ' selected'?>>15天</option>						
<option value='30' <?php if(DELKEYTIME==30)echo ' selected'?>>30天</option>						
<option value='90' <?php if(DELKEYTIME==90)echo ' selected'?>>90天</option>						
<option value='365' <?php if(DELKEYTIME==365)echo ' selected'?>>365天</option>	
</select></td>
</tr>
<tr>
<td align=right height=36>充值过的卡和过期的用户只保留：</td><td align=left colspan=3>
<select name="AUTODELKEYTIME" id="AUTODELKEYTIME" style="width:207px;height:22px">		
<option value='365' <?php if(AUTODELKEYTIME==365)echo ' selected'?>>365天</option>						
<option value='120' <?php if(AUTODELKEYTIME==120)echo ' selected'?>>120天</option>						
<option value='90' <?php if(AUTODELKEYTIME==90)echo ' selected'?>>90天</option>					
<option value='60' <?php if(AUTODELKEYTIME==60)echo ' selected'?>>60天(推荐)</option>					
<option value='30' <?php if(AUTODELKEYTIME==30)echo ' selected'?>>30天</option>			
<option value='15' <?php if(AUTODELKEYTIME==15)echo ' selected'?>>15天</option>				
<option value='7' <?php if(AUTODELKEYTIME==7)echo ' selected'?>>7天</option>					
</select></td>
</tr>
<tr>
<td align=right height=36>充值日志只保留：</td><td align=left colspan=3>
<select name="RECHARGELOGTIME" id="RECHARGELOGTIME" style="width:207px;height:22px">					
<option value='120' <?php if(RECHARGELOGTIME==120)echo ' selected'?>>120天(推荐)</option>					
<option value='180' <?php if(RECHARGELOGTIME==180)echo ' selected'?>>180天</option>				
<option value='365' <?php if(RECHARGELOGTIME==365)echo ' selected'?>>365天</option>
</select></td>
</tr>
<tr>
<td align=right height=36>打开网站根目录：</td><td align=left colspan=3>
<select name="LOGINADMIN" id="LOGINADMIN" style="width:207px;height:22px">						
<option value='0' <?php if(LOGINADMIN==0)echo ' selected'?>>跳转到售卡系统</option>						
<option value='1' <?php if(LOGINADMIN==1)echo ' selected'?>>跳转到管理后台</option>						
<option value='2' <?php if(LOGINADMIN==2)echo ' selected'?>>显示空白页</option>
</select></td>
</tr>
<tr>
<td align=right height=36>访问advapi的用户合法性检查：</td><td align=left colspan=3>
<select name="CHKADVAPI" id="CHKADVAPI" style="width:207px;height:22px">						
<option value='0' <?php if(CHKADVAPI==0)echo ' selected'?>>不检查</option>						
<option value='1' <?php if(CHKADVAPI==1)echo ' selected'?>>检查(推荐)</option>
</select></td>
</tr>
<tr>
<td align=right height=36>出错信息是否输出到浏览器：</td><td align=left colspan=3>
<select name="PRINTERROR" id="PRINTERROR" style="width:207px;height:22px">						
<option value='0' <?php if(PRINTERROR==0)echo ' selected'?>>不输出(推荐)</option>						
<option value='1' <?php if(PRINTERROR==1)echo ' selected'?>>输出</option>
</select></td>
</tr>
<tr>
<td colspan=4 align=center><input type="hidden" name="action" value="save"><input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0'><img type="submit" src="..<?php echo KS_PATH_PUBLIC?>/images/submit_out.gif"></td>
</tr>
</table></from>
</fieldset>
</td></tr></table>
<?php
echo COPYRIGHT;
?>
</body>
</html>