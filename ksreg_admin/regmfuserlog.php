<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
_MMFUN_d68ee68ae41a1d89f0();
if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

switch ($_MMVAR_7b6896960481a4d007){
Case "del":
_MMFUN_d66f119ad4ffa669b3();
break;
Case "delall":
_MMFUN_e37a4df15fbbb71542();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}
function _MMFUN_e37a4df15fbbb71542(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_8ba3d4eca95ad63bc6;
if($_MMVAR_8ba3d4eca95ad63bc6==false)ob_clean();
$_MMVAR_e5ee3d0000f04536c4=_MMFUN_cc3cf510bffd973b95('xjlid','','int',0);
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from '.TNREG.'_havereg where `userid`='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and `xjlid`='.$_MMVAR_e5ee3d0000f04536c4,'nosync');       
exit('ok');
}

function _MMFUN_d66f119ad4ffa669b3(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_8ba3d4eca95ad63bc6;
if($_MMVAR_8ba3d4eca95ad63bc6==false)ob_clean();
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','','int',0);
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from '.TNREG.'_havereg where `id`='.$_MMVAR_7ca1659d6f01cb3410.' and `userid`='.$_MMVAR_a68c41bd0ae0e8ec59[1],'nosync');       
exit('ok');
}
function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;

$_MMVAR_90502be476664717ad=45;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
$_MMVAR_0ecbe44a2d4417e190=array();
$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);
$_MMVAR_0b9ba8763f86bc549d=_MMFUN_cc3cf510bffd973b95('stype','','int',0);
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_df03ade3870b1399b8=_MMFUN_cc3cf510bffd973b95('skeywords','','sql',"");
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where ext1=\'user\' and userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if($_MMVAR_135a723a975f2e33a2==0){					
$_MMVAR_135a723a975f2e33a2=$_MMVAR_e9ffef5bdc7675ff63[0]['id'];
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;
}

$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_havereg where ';

if(!empty($_MMVAR_df03ade3870b1399b8)){
$_MMVAR_6acb770a66d220e25e.=' cusername LIKE \''._MMFUN_c3428c7e6251d22b7d($_MMVAR_df03ade3870b1399b8,1).'%\' and ';
$_MMVAR_0ecbe44a2d4417e190['skeywords']=$_MMVAR_df03ade3870b1399b8;
}
$_MMVAR_6acb770a66d220e25e.=' userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and xjlid='.$_MMVAR_135a723a975f2e33a2;	

$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
$_MMVAR_4a134686cf4c02ac8d=$_MMVAR_4fa302d033574933a4;
$_MMVAR_4fa302d033574933a4=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
$_MMVAR_6acb770a66d220e25e.=' LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;
include KS_DIR.'/inc/runtime.php';
$_MMVAR_77e413c0c731500d10= new runtime;
$_MMVAR_77e413c0c731500d10->_MMFUN_75ca9dc8ef905464ef(); 
$_MMVAR_3fac05200815e9252b=$_MMVAR_6acb770a66d220e25e;
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
$_MMVAR_77e413c0c731500d10->_MMFUN_2ff52b47fa1890bb43();
?>

<form action="?action=main" method="post" target="_self" id="f1" name="f1">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td><?php
echo '<select name=\'sxjlid\' id=\'xjlid\' style=\'width:150px;height:22px\'>';
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2)echo ' selected';
echo '>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
?>
</select>，用户名<input name="skeywords" type="text" value="" class="inputText2" />
<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" />
<input type="button" style="border:1px solid #ccc;padding:3px 8px" value="删除所有免费用户的注册记录" id="delall"></td>
</tr>
</table>
</form>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<form action="?action=batch" method="post" id="f2" name="f2" onsubmit="return chkfromlist()">
<tr class="tb_tip">
<td colspan="9"><?php	
//print_r($_MMVAR_e9ffef5bdc7675ff63);		
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2)
echo $_MMVAR_9a036496d66f59815a['xjlname'];
}
?> → 已注册过的免费帐号,共查询到<?php echo $_MMVAR_4a134686cf4c02ac8d?>条记录。[查询用时: <?php echo $_MMVAR_77e413c0c731500d10->_MMFUN_2bc50f97e2e07d84c2()?> 毫秒]</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>用户名</td>
<td>注册时间</td>
<td>ID</td>
<td>用户名</td>
<td>注册时间</td>
<td>ID</td>
<td>用户名</td>
<td>注册时间</td>
</tr>
<?php		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087=$_MMVAR_8ff60a7771c3f2c087+1;
if($_MMVAR_8ff60a7771c3f2c087 % 3==1)
echo '<tr class=\'tb_header\'>';			
echo '<td style=\'background:#F0F0F0\' lid=id'.$_MMVAR_9a036496d66f59815a['id'].'>'.$_MMVAR_9a036496d66f59815a['id'].'</td><td lid=id'.$_MMVAR_9a036496d66f59815a['id'].'><a href=\'###\' ac=del  lid='.$_MMVAR_9a036496d66f59815a['id'].'>'._MMFUN_4ea6f8ac8f03aa7c6f($_MMVAR_9a036496d66f59815a['cusername']).'</a></td><td lid=id'.$_MMVAR_9a036496d66f59815a['id'].'>'._MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['addtime'],1).'</td>';
if($_MMVAR_8ff60a7771c3f2c087 % 3==0)
echo '</tr>';
}
if($_MMVAR_8ff60a7771c3f2c087 % 3>0){
echo '<td style=\'background:#F0F0F0\'>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
if($_MMVAR_8ff60a7771c3f2c087 % 3==1)
echo '<td style=\'background:#F0F0F0\'>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>';
echo '</tr>';
}
?><tr class="tb_header">
<td colspan="9" align=right><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</table>
<script>
$(document).ready(function(){

$("#delall").bind("click",function(){
$.msgbox({
height:120,
width:350,
content:{type:'confirm', content: '该操作会删除该软件所有免费注册的日志，确认删除？'},
onClose:function(v){
if(v){
$.ajax({type: "GET",url: "?action=delall&xjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>",
success: function(msg){
if(msg=="ok"){
$.msgbox({width:300,height:120,content:{type:'alert', content:'软件所有免费注册的日志删除成功'}});
}else{
$.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:msg}});
}
},error:function(ajaxobj){
$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'AJAX出错信息：'+ajaxobj.status}});
}
});

}else{
}
}
});
});

$("a[ac='del']").bind("click",function(){

var lid=$(this).attr("lid");
$.msgbox({
height:120,
width:350,
animation:0,
content:{type:'confirm', content: '删除日志就可以用该用户名再次免费注册了，确认删除？'},
onClose:function(v){
if(v){
$.ajax({type: "GET",url: "?action=del&id="+lid,
success: function(msg){
if(msg=="ok"){
//alert("删除成功");
$('td[lid="id'+lid+'"]').text("-") ;
//$.msgbox({width:300,height:120,content:{type:'alert', content:'删除成功'}});
}else{
$.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:msg}});
}
},error:function(ajaxobj){
$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'AJAX出错信息：'+ajaxobj.status}});
}
});

}else{
}
}
});
});
$("td[lid^='id']").hover(
function (){
var mlid=$(this).attr('lid');
$("td[lid='"+mlid+"']").css("background","#cfc");

},
function (){
var mlid=$(this).attr('lid');
$("td[lid='"+mlid+"']").css("background","#f6f6f6");

}
);
});</script>	
<div style="margin:0 400px;width:20px;height:10px;overflow:hidden;">■  EXPLAIN <?php echo $_MMVAR_3fac05200815e9252b;?></div>
<?php
}


echo COPYRIGHT;
?>
</body>

</html>