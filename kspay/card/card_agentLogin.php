<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_d6858a6d9e9ee80bab;

?>
<script>
function chkfrom1(){
var wm="";
var errorno=0;
var t1 = $("#agentname").attr("value");
if (t1.length> 10 || t1.length< 3) {
wm += "用户名长度3-10个字符\r\n";
errorno = 1;
}
var p1 = $("#password").attr("value");
if(p1.length<5){
wm += "密码少于五个字符\r\n";
errorno = 1;			
}
var t1 = $("#vcode").attr("value");
if (t1.length != 4) {
wm += "请输入正确的验证码\r\n";
errorno = 1;
}

if (errorno != 0) {
alert(wm);
return false;
}
return true;
}
</script>	
<table width="400px" border="0" cellpadding="0" class="list_tb" align="center">
<form action ="card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&action=chklogin" method=post id=f1 name=f1 onsubmit="return chkfrom1()">
<tr class="tb_tip">
<td colspan="2">　　代理商登陆<span class='x5'>★★★★★</span></td>
</tr>
<tr class="tb_tr1">
<td align=right>代理名称</td>
<td><input maxlength='10' type="text" class="inputText" id="agentname" name="agentname" value=""><span style='position:relative;left:-35px;color:#aaa'>*必填</span></td>
</tr>
<tr class="tb_tr1">
<td align=right>代理密码</td>
<td><input maxlength='10' type="password" class="inputText" id="password" name="password" value=""><span style='position:relative;left:-35px;color:#aaa'>*必填</span></td>
</tr>
<tr class="tb_tr1">
<td align=right>验证码</td>
<td><input maxlength='4' type="text" class="vinputText" id="vcode" name="vcode" value=""><img src="..<?php echo KS_PATH_PUBLIC?>/images/code.php?<?php echo mt_rand(1000,9999)?>" align=absmiddle></td>
</tr>
<tr class="tb_tr1">
<td></td>
<td><input type='submit' name='submit1' id="submit1" value='submit' style='width:0;height:0'><img type="submit" src="..<?php echo KS_PATH_PUBLIC?>/images/submit_out.gif"> <img type="return" src="..<?php echo KS_PATH_PUBLIC?>/images/nosubmit_out.gif"> </td>
</tr>
</from>
</table>