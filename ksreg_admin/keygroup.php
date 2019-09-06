<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
/*
S:试用卡
M:免费帐号基卡
L:临时卡

T:天卡
Z:周卡
Y:月卡
J:季卡
R:半年卡
N:N年卡
A:终身卡
D:1小时卡

C:售卡系统自定义卡1
V:售卡系统自定义卡2
B:售卡系统自定义卡3
E:售卡系统其它卡类
X:后台添加的天数小于1的其它卡
Q:后台添加的天数大于1的其它卡

O:其它系统转过来的卡

可供自定义：FG HI KB P UW


*/
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');

$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");



switch ($_MMVAR_7b6896960481a4d007){
Case "save":
_MMFUN_da1a125ba68654f531();
break;
Case "kbsave":
_MMFUN_0796cac6d2a0138340();
break;
Case "kbsave2":
_MMFUN_e36ffb04a8c6e04106();
break;
Case "delkb":
_MMFUN_25f5378900631323f7();
break;
Case "main2":
_MMFUN_d8bbf987953722a36d();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}

function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();

if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("需要超级管理员身份。");

$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_keyattribute where issystem=0 order by id asc';

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
?>
<script>        
function sTime12(){
var d,s;
d = new Date();
s=d.getSeconds();
return(s)
}
$(document).ready(function(){					
$(".saveintro").bind("click",function(){
var kid=$(this).attr("kid");
var opid=$(this).attr("op");
var pdata="";
if(opid=0){
pdata="id="+kid+"&opid=0&keytimes="+$("#keytimes"+kid).val()+"&keysysrmb="+$("#keysysrmb"+kid).val();				
}else{
pdata="id="+kid+"&opid=1&keyname="+$("#keyname"+kid).val()+"&keycday="+$("#keycday"+kid).val()+"&keytimes="+$("#keytimes"+kid).val()+"&keysysrmb="+$("#keysysrmb"+kid).val();
}
$.ajax({type: "POST",url: "?action=save&rand="+sTime12(),data:pdata,
success: function(msg){
if(msg=="ok"){
$.msgbox({width:500,height:120,title:'保存成功',content:{type:'alert', content:'卡类信息保存成功'}});
}else{
$.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:msg}});
} },
error:function(ajaxobj){
$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'AJAX出错信息：'+ajaxobj.status}});
}}); 
});
});
</script>


<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="10">卡类列表</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>卡号前缀</td>
<td>卡类名</td>
<td>时长（天）</td>
<td><label help=pub>点数</label></td>
<td>全局扣卡币</td>
<td>保存</td>
</tr>
<?php
if(!empty($_MMVAR_5a0f5f64cd15c205df)){		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;
if($_MMVAR_9a036496d66f59815a['id']<18)	{	
?>
<tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td><?php echo $_MMVAR_9a036496d66f59815a['id']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['keyfirststr']?></td>
<td><font color=red>[系统内置]</font>  <?php echo $_MMVAR_9a036496d66f59815a['keyname']?> <input value="<?php echo $_MMVAR_9a036496d66f59815a['keyname'] ?>" type=hidden id='keyname<?php echo $_MMVAR_9a036496d66f59815a['id']?>'></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['keycday']?><input value="<?php echo $_MMVAR_9a036496d66f59815a['keycday'] ?>" type=hidden id='keycday<?php echo $_MMVAR_9a036496d66f59815a['id']?>'></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="<?php echo $_MMVAR_9a036496d66f59815a['keytimes'] ?>" name="keytimes" gl="1" id="keytimes<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><input type="text" maxlength="8"  class="sml2inputText"" value="<?php echo $_MMVAR_9a036496d66f59815a['keysysrmb'] ?>" name="keysysrmb" gl="1" id="keysysrmb<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><a kid="<?php echo $_MMVAR_9a036496d66f59815a['id']?>" op="0" class="saveintro" href="###" >保存</a></td>
</tr>
<?php
}else{	
?>
<tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td><?php echo $_MMVAR_9a036496d66f59815a['id']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['keyfirststr']?></td>
<td><input type="text" maxlength="8"  class="inputText" value="<?php echo $_MMVAR_9a036496d66f59815a['keyname'] ?>" name="keyname" gl="1" id="keyname<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><input type="text" maxlength="8"   class="sml2inputText" value="<?php echo $_MMVAR_9a036496d66f59815a['keycday'] ?>" name="keycday" gl="1" id="keycday<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><input type="text" maxlength="8"   class="sml2inputText" value="<?php echo $_MMVAR_9a036496d66f59815a['keytimes'] ?>" name="keytimes" gl="1" id="keytimes<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><input type="text" maxlength="8"   class="sml2inputText" value="<?php echo $_MMVAR_9a036496d66f59815a['keysysrmb'] ?>" name="keysysrmb" gl="1" id="keysysrmb<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><a  kid="<?php echo $_MMVAR_9a036496d66f59815a['id']?>" op="1"  class="saveintro" href="###">保存</a></td>
</tr>
<?php

}
}
}?>

</table>	
<?php
}


function _MMFUN_d8bbf987953722a36d(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();

if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("需要超级管理员身份。");

$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_6ca1d48a32ba884582=_MMFUN_cc3cf510bffd973b95('softid','','int',0);
if($_MMVAR_6ca1d48a32ba884582==-1)
$_MMVAR_6ca1d48a32ba884582=_MMFUN_cc3cf510bffd973b95('softid2','','int',0);

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_keyextkb where softid='.$_MMVAR_6ca1d48a32ba884582.' order by softid asc');

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_xjl order by id asc');
?>


<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<form action="?action=main2" method="post" target="_self" id="ef1" name="ef1">
<tr class="tb_tr2">
<td>选择软件 <?php
$_MMVAR_e4019df8eca2c2ac2c='还未选择软件';
echo '<select name=\'softid\' id=\'softid\' style=\'width:250px;height:22px\'>';
echo '<option value=-1>手动输入软件ID</option>';
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_6ca1d48a32ba884582){
echo ' selected';
$_MMVAR_e4019df8eca2c2ac2c=$_MMVAR_9a036496d66f59815a['xjlname'];
$_MMVAR_efd39bc40a5ade416c=$_MMVAR_9a036496d66f59815a['ext1'];
}
echo '>软件ID:'.$_MMVAR_9a036496d66f59815a['id'].'  软件名:'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
?>
</select> <input name="softid2" id="softid2" type="text" value="0" class="inputText2" />  <input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" /></td>
</tr>
</form>
</table>


<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="6"> [<?php echo $_MMVAR_e4019df8eca2c2ac2c?>] 扣币设置列表</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>软件</td>
<td>卡类</td>
<td>连接数（多开数）</td>
<td>计币帐号扣卡币</td>
<td>保存</td>
</tr>
<?php
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_keyattribute where id>9 and keycday<>\'0\' and issystem=0 order by id asc';
$_MMVAR_017a7aa62bbb0ee377=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
if(!empty($_MMVAR_5a0f5f64cd15c205df)){		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {	
?>
<tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td><?php echo $_MMVAR_9a036496d66f59815a['id']?></td>
<td><?php echo $_MMVAR_6ca1d48a32ba884582.' - '.$_MMVAR_e4019df8eca2c2ac2c?></td>
<td><?php echo '卡类ID：'.$_MMVAR_9a036496d66f59815a['keytypeid'];
foreach ($_MMVAR_017a7aa62bbb0ee377 as $_MMVAR_fc8b1bbe7498a4f269) {
if($_MMVAR_9a036496d66f59815a['keytypeid']==$_MMVAR_fc8b1bbe7498a4f269['id'])
echo '['.$_MMVAR_fc8b1bbe7498a4f269['keyname'].'--'.$_MMVAR_fc8b1bbe7498a4f269['keycday'].'天--'.$_MMVAR_fc8b1bbe7498a4f269['keytimes'].'次]';
}

?> </td>
<td><?php echo $_MMVAR_9a036496d66f59815a['linknum']?></td>
<td><input type="text" maxlength="8"  class="sml2inputText"" value="<?php echo $_MMVAR_9a036496d66f59815a['rmb'] ?>" name="rmb" gl="1" id="rmb<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><a kid="<?php echo $_MMVAR_9a036496d66f59815a['id']?>" op="0" class="saveintro" href="###" >保存</a>  |  <a href="?action=delkb&softid=<?php echo $_MMVAR_6ca1d48a32ba884582?>&id=<?php echo $_MMVAR_9a036496d66f59815a['id']?>" >删除</a></td>
</tr>
<?php				
}

}
if($_MMVAR_6ca1d48a32ba884582>0){


?>

<tr class="tb_tr1">
<td colspan="6"><font color=green>━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</font></td>
</tr>
<form action="?action=kbsave&softid=<?php echo $_MMVAR_6ca1d48a32ba884582?>" method=post id=f3add2 name=f3add2>
<tr class="tb_tr2">
<td>添加</td>
<td><?php echo $_MMVAR_6ca1d48a32ba884582.' - '.$_MMVAR_e4019df8eca2c2ac2c?></td>
<td><select name="keytypeid" id="keytypeid" style="width:300px;height:22px">

<?php					
foreach ($_MMVAR_017a7aa62bbb0ee377 as $_MMVAR_fc8b1bbe7498a4f269) {
echo '<option value='.$_MMVAR_fc8b1bbe7498a4f269['id'].'>'.$_MMVAR_fc8b1bbe7498a4f269['keyname'].'--'.$_MMVAR_fc8b1bbe7498a4f269['keycday'].'天--'.$_MMVAR_fc8b1bbe7498a4f269['keytimes'].'次</option>';
}

?></select></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="1" name="linknum" id="linknum" <?php if($_MMVAR_efd39bc40a5ade416c=='user')echo ' disabled'?>></td>						
<td><input type="text" maxlength="8"  class="sml2inputText" value="0.00" name="rmb" id="rmb"></td>
<td><input type='submit' name='submit3' id="submit3" value='submit' style='display:none;width:0;height:0'><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif"></td>
</tr>
</form>
<?php
}
echo '</table>';
?>

<script>        
function sTime12(){
var d,s;
d = new Date();
s=d.getSeconds();
return(s)
}
$(document).ready(function(){
var ext1s=$("#softid").children("option:selected").attr('value');
if(ext1s!='-1'){$("#softid2").hide();}else{$("#softid2").show();}
$("#softid").change(function(){
var ext1=$(this).children("option:selected").attr('value');
if(ext1!='-1'){$("#softid2").hide();}else{$("#softid2").show();}
});						
$(".saveintro").bind("click",function(){
var kid=$(this).attr("kid");
var pdata="softid=<?php echo $_MMVAR_6ca1d48a32ba884582;?>&id="+kid+"&rmb="+$("#rmb"+kid).val();

$.ajax({type: "POST",url: "?action=kbsave2&rand="+sTime12(),data:pdata,
success: function(msg){
if(msg=="ok"){
$.msgbox({width:500,height:120,title:'保存成功',content:{type:'alert', content:'价格设置保存成功'}});
}else{
$.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:msg}});
} },
error:function(ajaxobj){
$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'AJAX出错信息：'+ajaxobj.status}});
}}); 
});
});
</script>
<?php
}

function _MMFUN_0796cac6d2a0138340(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();

if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("需要超级管理员身份。");
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();

$_MMVAR_6ca1d48a32ba884582=_MMFUN_cc3cf510bffd973b95('softid','','int',0);
if($_MMVAR_6ca1d48a32ba884582==0)
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误1!");

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where id='.$_MMVAR_6ca1d48a32ba884582);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误2!");


$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','post','int',0);
$_MMVAR_0a2142beae67222d3e=_MMFUN_cc3cf510bffd973b95('keytypeid','post','int',0);
$_MMVAR_b3cf8fb9a20804256b=_MMFUN_cc3cf510bffd973b95('linknum','post','int',1);
$_MMVAR_088e54769f3397c46b=_MMFUN_cc3cf510bffd973b95('rmb','post','num',0.00);

if($_MMVAR_088e54769f3397c46b<=0)
_MMFUN_6da5ed7d3a356dcac7("价格不能等于或小于0!");
$_MMVAR_017a7aa62bbb0ee377=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_keyextkb where softid='.$_MMVAR_6ca1d48a32ba884582.' and keytypeid='.$_MMVAR_0a2142beae67222d3e.' and linknum='.$_MMVAR_b3cf8fb9a20804256b);
if(!empty($_MMVAR_017a7aa62bbb0ee377))
_MMFUN_6da5ed7d3a356dcac7("添加失败，要添加的卡类多开数组合在列表中已经存在!");

$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_keyextkb` (`softid`, `keytypeid`,`linknum`,`rmb`) VALUES ('.$_MMVAR_6ca1d48a32ba884582.','.$_MMVAR_0a2142beae67222d3e.','.$_MMVAR_b3cf8fb9a20804256b.','.$_MMVAR_088e54769f3397c46b.')','sync');


_MMFUN_6da5ed7d3a356dcac7("添加成功!",'keygroup.php?action=main2&softid='.$_MMVAR_6ca1d48a32ba884582.'&rand='.time());


}

function _MMFUN_e36ffb04a8c6e04106(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();

if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("需要超级管理员身份。");

$_MMVAR_6ca1d48a32ba884582=_MMFUN_cc3cf510bffd973b95('softid','','int',0);
if($_MMVAR_6ca1d48a32ba884582==0)
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误1!");

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where id='.$_MMVAR_6ca1d48a32ba884582);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误2!");

if(empty($_MMVAR_8ba3d4eca95ad63bc6))ob_clean();	
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','post','int',0);
$_MMVAR_088e54769f3397c46b=_MMFUN_cc3cf510bffd973b95('rmb','post','num',0);
if($_MMVAR_088e54769f3397c46b<=0)
_MMFUN_6da5ed7d3a356dcac7("价格不能等于或小于0!");	
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_keyextkb` set `rmb`='.$_MMVAR_088e54769f3397c46b.' where softid='.$_MMVAR_6ca1d48a32ba884582.' and `id`='.$_MMVAR_7ca1659d6f01cb3410,'sync');
exit('ok');


}

function _MMFUN_25f5378900631323f7(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();

if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("需要超级管理员身份。");
$_MMVAR_6ca1d48a32ba884582=_MMFUN_cc3cf510bffd973b95('softid','','int',0);
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','','int',0);
if($_MMVAR_6ca1d48a32ba884582==0)
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误1!");

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where id='.$_MMVAR_6ca1d48a32ba884582);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误2!");
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from '.TNREG.'_keyextkb where id='.$_MMVAR_7ca1659d6f01cb3410,'sync');
_MMFUN_6da5ed7d3a356dcac7("删除成功!",'keygroup.php?action=main2&softid='.$_MMVAR_6ca1d48a32ba884582.'&rand='.time());
}

function _MMFUN_da1a125ba68654f531(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("需要超级管理员身份。");
if(empty($_MMVAR_8ba3d4eca95ad63bc6))ob_clean();	
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','post','int',0);
$_MMVAR_ca69e1aab5a1f02b35=_MMFUN_cc3cf510bffd973b95('keyname','post','sql','');
$_MMVAR_3ca9e1a233976f00ea=_MMFUN_cc3cf510bffd973b95('keycday','post','num',0.00);
$_MMVAR_302f67ecf9821c156f=_MMFUN_cc3cf510bffd973b95('keytimes','post','int',0);
$_MMVAR_61683624d7a0ec939c=_MMFUN_cc3cf510bffd973b95('keysysrmb','post','num',2.00);
$_MMVAR_009ea732d52074bc27=_MMFUN_cc3cf510bffd973b95('opid','post','int',1);

if($_MMVAR_7ca1659d6f01cb3410<18){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_keyattribute` set `keytimes`='.$_MMVAR_302f67ecf9821c156f.',`keysysrmb`='.$_MMVAR_61683624d7a0ec939c.' where `id`='.$_MMVAR_7ca1659d6f01cb3410,'sync');	
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_keyattribute` set `keyname`=\''.$_MMVAR_ca69e1aab5a1f02b35.'\',`keycday`='.$_MMVAR_3ca9e1a233976f00ea.',`keytimes`='.$_MMVAR_302f67ecf9821c156f.',`keysysrmb`='.$_MMVAR_61683624d7a0ec939c.' where `id`='.$_MMVAR_7ca1659d6f01cb3410,'sync');	
}
exit('ok');


}

echo COPYRIGHT;

?>
</body>
</html>