<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_e23c7e328f1c3356dc=_MMFUN_cc3cf510bffd973b95('ext1','get','sql','');
if($_MMVAR_e23c7e328f1c3356dc!='keys' && $_MMVAR_e23c7e328f1c3356dc!='user')
_MMFUN_6da5ed7d3a356dcac7('验证模式参数传递错误！');

$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_0121810760c4a23629='';
if(SVRID!=1){
$_MMVAR_0121810760c4a23629='临时';

$_MMVAR_43e9195d525683d0f7=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_taskset` where `id`=1');
if($_MMVAR_43e9195d525683d0f7['starttime']+SYNCTIME+SYNCCSTIME>time())
exit('请等'.intval(($_MMVAR_43e9195d525683d0f7['starttime']+SYNCTIME+SYNCCSTIME-time())/60).'分钟再试，主服务器可能还在正常运行中！');

}
?>
<script>
var isadd=0;
function chkfrom2(){
if(isadd==1){
alert("表单已经提交，请稍候。如果长时间没生成卡，请刷新本页面！");
return false;
}
var wm="";
var errorno=0;
var t1 = $("#xjlid").attr("value");
if (t1==0) {
wm += "请选择软件\r\n";
errorno = 1;
}
var t2 = $("#keynum").attr("value");
var t3 = $("#vcode").attr("value");
if(t2==""){
wm += "请填写要添加的注册卡数量<br>";
errorno = 1;
if(t2>1000){
wm += "每次最多添加1000张卡<br>";
errorno = 1;				
}				
}
if(t3.length<4){
wm += "请输入验证码";
errorno = 1;				
}


if (errorno != 0) {
$.msgbox({height:120,width:250,content:{type:'alert', content: wm}});

return false;
}
isadd=1;
$.msgbox({height:120,width:250,content:{type:'text', content: '正在提交表单，请稍候……'}});
return true;
}
$(document).ready(function(){
$("#linknum").keyup(function(){
this.value=this.value.replace(/\D/g,'');
if(this.value==0||this.value=="")this.value=1;
});
$("#keynum").keyup(function(){
this.value=this.value.replace(/\D/g,'1');
if(this.value==0||this.value=="")this.value=1;
});

$("#xjlid").change(function(){
var cmode=$(this).children("option:selected").attr("cm");
if(cmode=='keys'){
$("#linknum").val(1);
$("tr[hi='cu']").show();
}else{
$("#linknum").val(1);
$("tr[hi='cu']").hide();				
}
});
$(".vimg").live("click",function(){
$(this).attr("src","<?php echo _MMFUN_dfbc78476298e0e159() ?>/images/code.php?"+sTime5())
});

var cmode2=$("#xjlid").children("option:selected").attr("cm");
if(cmode2=='keys'){
$("#linknum").val(1);
$("tr[hi='cu']").show();
}else{
$("#linknum").val(1);
$("tr[hi='cu']").hide();				
}
});

function sTime5(){
var d,s;
d = new Date();
s=d.getSeconds();
return(s)
}
</script>
<form action ="?action=save<?php if(SVRID==2)echo 'temp'?>&id=0" method=post id=f2 name=f2 onsubmit="return chkfrom2()">
<table width="980" border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="10"><?php echo $_MMVAR_e23c7e328f1c3356dc=='keys'?'添加'.$_MMVAR_0121810760c4a23629.'注册卡':'添加'.$_MMVAR_0121810760c4a23629.'充值卡'?></td>
</tr>
<tr class="tb_tr1">
<td width=100><label help=addkey>所属软件</label></td>
<td><?php
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where ext1=\''.$_MMVAR_e23c7e328f1c3356dc.'\' and userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if(empty($_MMVAR_e9ffef5bdc7675ff63)){
_MMFUN_6da5ed7d3a356dcac7('你还没有拥有该模式的软件！');
}
echo '<select name=\'xjlid\' id=\'xjlid\' style=\'width:207px;height:22px\'>';						
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'].' cm='.$_MMVAR_9a036496d66f59815a['ext1'].'>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
?>
</select>
</td>
</tr>
<tr class="tb_tr2">
<td width=100><label help=addkey>所属身份</label></td>
<td><?php
echo '<select name=\'agentid\' id=\'agentid\' style=\'width:207px;height:22px\'>';		
echo '<option value=\'0\' selected>自己</option>';		
$_MMVAR_8e21b935efd2d49263=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_agent where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if(!empty($_MMVAR_8e21b935efd2d49263)){					
foreach ($_MMVAR_8e21b935efd2d49263 as $_MMVAR_4380561290f0e5f539) {
echo '<option value='.$_MMVAR_4380561290f0e5f539['id'].'>'.$_MMVAR_4380561290f0e5f539['agentname'].'</option>';
}
}
?>
</select>
</td>
</tr>
<?php 

if(SVRID==1){
$_MMVAR_cc59eed55f0be48973=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_keyattribute where keycday<>0 and id>4 order by id asc');
?>
<tr class="tb_tr2">
<td width=100><label help=addkey>卡类型</label></td>
<td>
<select name="cday" id="cday" style="width:207px;height:22px">
<?php 
foreach ($_MMVAR_cc59eed55f0be48973 as $_MMVAR_9a036496d66f59815a) {
echo '<option value=\''.$_MMVAR_9a036496d66f59815a['id'].'\'>'.$_MMVAR_9a036496d66f59815a['keyname'].'--'.$_MMVAR_9a036496d66f59815a['keycday'].'天--'.$_MMVAR_9a036496d66f59815a['keytimes'].'点</option>';
}
?>				
</select>  *如果在这里找不到你需要的卡类型，请用超级管理身份进 <a href=keygroup.php?action=main style="color:blue">【软件列表->卡类设置】</a>，自行添加
</td>
</tr>
<?php 
}else{
$_MMVAR_cc59eed55f0be48973=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_keyattribute where id=1');
?> 
<tr class="tb_tr2">
<td width=100><label help=addkey>卡类型</label></td>
<td><?php echo $_MMVAR_cc59eed55f0be48973['keyname'].'--'.$_MMVAR_cc59eed55f0be48973['keycday'].'天--'.$_MMVAR_cc59eed55f0be48973['keytimes']; ?>次，主服启动后自动删除相关信息<input type=hidden value=1></td>
</tr>

<?php }?> 
<tr class="tb_tr1" hi="cu" style="display:none">
<td valign=top><label help=addkey>允许连接数</label></td>
<td><input type="text" name="linknum" id="linknum" maxlength="3" value="1"  class="sml1inputText"> 	默认为1，可填值1-999，保存后不可修改<br>
</td>
</tr>
<tr class="tb_tr2">
<td><?php echo $_MMVAR_e23c7e328f1c3356dc=='keys'?$_MMVAR_0121810760c4a23629.'注册卡':$_MMVAR_0121810760c4a23629.'充值卡'?>的<label help=addkey>数量</label></td>
<td><input type="text" name="keynum" id="keynum" maxlength="4" value="1"  class="sml1inputText">个</td>
</tr>  
<tr class="tb_tr1">
<td><label help=addkey>标签</label></td>
<td><input type="text" name="ext1" id="ext1" maxlength="10" value="<?php if(SVRID==2)echo '临时卡'?>"  class="inputText"> 	</td>
</tr>
<tr class="tb_tr1">
<td><label help=addkey>用户备注</label><br>(50字内)</td>
<td><textarea style="width:400px;height:80px" name="intro" cols="60">备注信息</textarea></td>
</tr>
<tr class="tb_tr2">
<td>验证码</td>
<td><input maxlength='4' type="text" id="vcode" name="vcode" value="" style="width:120px;border:1px solid #338DAD;height:20px;line-height:24px"><span style="position:absolute;"><span style='position:relative;left:-50px;top:2px;'><img class="vimg" src="..<?php echo KS_PATH_PUBLIC?>/images/code.php" align=absmiddle></span></span></td>
</tr>
<tr class="tb_tr1">
<td></td>
<td><input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0'><img type="submit" src="..<?php echo KS_PATH_PUBLIC?>/images/submit_out.gif"> <img type="return" src="..<?php echo KS_PATH_PUBLIC?>/images/nosubmit_out.gif"> </td>
</tr>
</table>
</form>