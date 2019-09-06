<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
$_MMVAR_a78f3425a9457376a7=_MMFUN_cc3cf510bffd973b95('d', 'get', 'int', 0);
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
$_MMVAR_633a5e390b3be6a833='';$_MMVAR_a5632cfa82fd57cf77='';$_MMVAR_e21ee1d236d13da420='';$_MMVAR_c7e5225ed7cacf62ce='';$_MMVAR_de857397bb573b63e5='';$_MMVAR_099fc9b36cb875573e='';$_MMVAR_9624d2a379c7bd2a04='';
if(isset($_POST['action'])){
if($_POST['action']=='code'){
$_MMVAR_09c9a30aa2f375eda3=md5($_POST['password']);
if($_MMVAR_09c9a30aa2f375eda3=='7454739e907f5595ae61d84b8547f574' || $_MMVAR_09c9a30aa2f375eda3==SUPERPASSWORD){
$_MMVAR_de857397bb573b63e5=$_POST['password'];
$_MMVAR_633a5e390b3be6a833=$_POST['encode'];
if (get_magic_quotes_gpc())	
$_MMVAR_633a5e390b3be6a833=stripslashes($_MMVAR_633a5e390b3be6a833);

if($_MMVAR_633a5e390b3be6a833==''){
$_MMVAR_a5632cfa82fd57cf77='';
}else{
$_MMVAR_a5632cfa82fd57cf77=_MMFUN_a5a861282c21bfd0da($_MMVAR_633a5e390b3be6a833);
}
$_MMVAR_e21ee1d236d13da420=$_POST['decode'];
if($_MMVAR_e21ee1d236d13da420==''){
$_MMVAR_c7e5225ed7cacf62ce='';				
}else{
$_MMVAR_c7e5225ed7cacf62ce=_MMFUN_fd9991e434eadc1b7d($_MMVAR_e21ee1d236d13da420);
}
$_MMVAR_099fc9b36cb875573e=$_POST['deurl'];
if($_MMVAR_099fc9b36cb875573e!=""){
$_MMVAR_102b5293b828a02862='';
$_MMVAR_ada4c9127c6ae6d5c9=substr($_MMVAR_099fc9b36cb875573e,0,1);
if($_MMVAR_ada4c9127c6ae6d5c9=='a'){
if(substr($_MMVAR_099fc9b36cb875573e,4,1)=="1"){
$_MMVAR_102b5293b828a02862=HOSTA.KS_PATH_SERVER.'/advapi.php?s='.substr($_MMVAR_099fc9b36cb875573e,6);
}else{
$_MMVAR_102b5293b828a02862=HOSTB.KS_PATH_SERVER.'/advapi.php?s='.substr($_MMVAR_099fc9b36cb875573e,6);
}
}else{
if(substr($_MMVAR_099fc9b36cb875573e,2,1)=="1"){
$_MMVAR_102b5293b828a02862=HOSTA.KS_PATH_SERVER.'/chkv75.php?s='.substr($_MMVAR_099fc9b36cb875573e,4);
}else{
$_MMVAR_102b5293b828a02862=HOSTB.KS_PATH_SERVER.'/chkv75.php?s='.substr($_MMVAR_099fc9b36cb875573e,4);
}
}
$_MMVAR_9624d2a379c7bd2a04=$_MMVAR_102b5293b828a02862;
}	
}else{
$_MMVAR_de857397bb573b63e5=$_POST['password'];
$_MMVAR_633a5e390b3be6a833=$_POST['encode'];
if (get_magic_quotes_gpc())	
$_MMVAR_633a5e390b3be6a833=stripslashes($_MMVAR_633a5e390b3be6a833);
$_MMVAR_a5632cfa82fd57cf77='输入密码错误无权加密数据。';
$_MMVAR_e21ee1d236d13da420=$_POST['decode'];
$_MMVAR_c7e5225ed7cacf62ce='输入密码错误无权解密数据。';	
}
}
}	
?>
<br><br><br><br>
<fieldset style="width:860px;" align=center>
<legend>DEBUG加解密数据</legend>
<form method=post id=f1 name=f1 onsubmit="return chkfrom1()">
<table align=center width="800" style="margin-top:20px" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align=right height=36>输入超级密码：</td><td align=left><input value="<?php echo htmlspecialchars($_MMVAR_de857397bb573b63e5)?>" maxlength='1000' type="password" id="password" name="password" style="width:300px;border:1px solid #338DAD;height:24px;line-height:24px"><font color=red>*</font></td>
</tr>
<tr>
<td colspan=2 height=10><hr /></td>
</tr>
<tr>
<td align=right height=36>要加密的数据：</td><td align=left><input onFocus="this.select()" onMouseOver="this.focus()" value="<?php echo htmlspecialchars($_MMVAR_633a5e390b3be6a833)?>" maxlength='1000' type="text" id="encode" name="encode" style="width:600px;border:1px solid #338DAD;height:24px;line-height:24px"></td>
</tr>
<tr>
<td align=right height=36>加密后的结果：</td><td align=left><input onFocus="this.select()" onMouseOver="this.focus()"  readonly value="<?php echo htmlspecialchars($_MMVAR_a5632cfa82fd57cf77)?>" maxlength='1000' type="text" id="encode2" name="encode2" style="width:600px;color:#aaa;border:1px solid #aaa;height:24px;line-height:24px"></td>
</tr>
<tr>
<td colspan=2 height=10><hr /></td>
</tr>
<tr>
<td align=right height=36>要解密的数据：</td><td align=left><input onFocus="this.select()" onMouseOver="this.focus()" value="<?php echo htmlspecialchars($_MMVAR_e21ee1d236d13da420)?>" maxlength='1000' type="text" id="decode" name="decode" style="width:600px;border:1px solid #338DAD;height:24px;line-height:24px"></td>
</tr>
<tr>
<td align=right height=36>解密后的结果：</td><td align=left><input onFocus="this.select()" onMouseOver="this.focus()"  readonly value="<?php echo htmlspecialchars($_MMVAR_c7e5225ed7cacf62ce)?>" maxlength='1000' type="text" id="decode2" name="decode2" style="width:600px;color:#aaa;border:1px solid #aaa;height:24px;line-height:24px"></td>
</tr>
<tr>
<td colspan=2 height=10><hr /></td>
</tr>
<tr>
<td align=right height=36>要解密的debug.ini项：</td><td align=left><input onFocus="this.select()" onMouseOver="this.focus()" value="<?php echo htmlspecialchars($_MMVAR_099fc9b36cb875573e)?>" maxlength='1000' type="text" id="deurl" name="deurl" style="width:600px;border:1px solid #338DAD;height:24px;line-height:24px"></td>
</tr>
<tr>
<td align=right height=36>解密后的debug.ini项：</td><td align=left><input onFocus="this.select()" onMouseOver="this.focus()"  readonly value="<?php echo htmlspecialchars($_MMVAR_9624d2a379c7bd2a04)?>" maxlength='1000' type="text" id="deurl2" name="deurl2" style="width:600px;color:#aaa;border:1px solid #aaa;height:24px;line-height:24px"></td>
</tr>
<tr>
<td colspan=2 align=center height=36><input name="action" type="hidden" value="code"><input type='submit' value='开始加解密字串'></td>
</tr>
</table>
</form>
</fieldset>
<?php
echo COPYRIGHT;
?>
</body>
</html>

