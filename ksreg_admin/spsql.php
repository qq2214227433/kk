<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

switch ($_MMVAR_7b6896960481a4d007){
Case "exsql":
_MMFUN_59ca9009c2fd5a2662();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}



function _MMFUN_f845b4be82a2064ad0(){
?>
<form action="?action=exsql" method="post" target="_self" id="f37" name="f37" onsubmit="return chkfrom37()">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td>MySQL语句：<br>分隔符;</td><td><textarea name="sqltext" rows="6"  cols="100" /></textarea>     </td>
</tr>
<tr class="tb_tr2">
<td>超级密码：</td><td><input name="sppass" type="password" value="" style="height:19px;width:100px;line-height:19px;border:1px solid #7F9DB9;padding-left:5px;" />&nbsp;<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" /></td>
</tr>
<tr class="tb_tr2">
<td colspan=2>支持update与delete语句对数据进行简单的处理，该处执行的语句会自动同步到备服。</td>
</tr>
</table>
</form>
<?php
}


function _MMFUN_59ca9009c2fd5a2662(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_4b9c4f3aa238c36a28=$_POST['sqltext'];	
$_MMVAR_daacf480cda0ac3124=$_POST['sppass'];	
if (md5($_MMVAR_daacf480cda0ac3124)<>SUPERPASSWORD)
_MMFUN_6da5ed7d3a356dcac7("超级密码错误，执行SQL语句命令必须输入正确的超级密码!");
if (get_magic_quotes_gpc())
$_MMVAR_4b9c4f3aa238c36a28 = stripslashes($_MMVAR_4b9c4f3aa238c36a28);
$_MMVAR_4b9c4f3aa238c36a28=str_replace(';;','┾', $_MMVAR_4b9c4f3aa238c36a28); 
$_MMVAR_4b9c4f3aa238c36a28=str_replace("\r",'', $_MMVAR_4b9c4f3aa238c36a28); 	
$_MMVAR_4b9c4f3aa238c36a28=str_replace("\n",'', $_MMVAR_4b9c4f3aa238c36a28); 	
$_MMVAR_8940f264b14c56a1a1=explode(';', $_MMVAR_4b9c4f3aa238c36a28);
$_MMVAR_b912ff1e6536082fc6='';
foreach ($_MMVAR_8940f264b14c56a1a1 as $_MMVAR_9a036496d66f59815a) {
if(trim($_MMVAR_9a036496d66f59815a)!=''){
$_MMVAR_9a036496d66f59815a=str_replace('┾',';',trim($_MMVAR_9a036496d66f59815a));
$_MMVAR_f222db7cba57db78b7=$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_9a036496d66f59815a,'sync');
if($_MMVAR_f222db7cba57db78b7 != false){
$_MMVAR_b912ff1e6536082fc6=$_MMVAR_b912ff1e6536082fc6.'<font color=blue><b>√</b></font>'.$_MMVAR_9a036496d66f59815a.'<br>';
}else{
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_b912ff1e6536082fc6."<font color=red><b>×</b></font>".$_MMVAR_9a036496d66f59815a);	
}	
}
}
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_b912ff1e6536082fc6);
}

echo COPYRIGHT;
?>
</body>
</html>