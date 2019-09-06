<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');

$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');
if($_MMVAR_7b6896960481a4d007=='syncphp')
_MMFUN_ec6ca3266923b4d8e5();

if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");

if(SOFTSET==1){
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("需要超级管理员身份。");
}
switch ($_MMVAR_7b6896960481a4d007){
Case "add":
_MMFUN_37cedbaace7eeb28ab();
break;
Case "save":
_MMFUN_da1a125ba68654f531();
break;
Case "delsoft":
_MMFUN_407c568f00fd18589a();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}

function _MMFUN_407c568f00fd18589a(){
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("删除软件需要超级管理员身份。");	
$_MMVAR_1ae5c625f8a2656a60=_MMFUN_cc3cf510bffd973b95('xjlid','','int',0);	
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
include(KS_DIR.'/inc/add_table_mfkey.php');
$_MMVAR_ee3217bcfa5dd99d39=_MMFUN_6eafe6603fc17ec926($_MMVAR_a68c41bd0ae0e8ec59[1],$_MMVAR_1ae5c625f8a2656a60);
if($_MMVAR_ee3217bcfa5dd99d39!==1){
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_ee3217bcfa5dd99d39);
}else{
_MMFUN_6da5ed7d3a356dcac7("删除软件完成",'prolist.php?action=main&rand='.time());
}	
}

function _MMFUN_ec6ca3266923b4d8e5(){
ob_clean();
$_MMVAR_f7a93fb11373a2d3ae=_MMFUN_cc3cf510bffd973b95('ppass','get','no','');
if(md5($_MMVAR_f7a93fb11373a2d3ae)!=SUPERPASSWORD)
exit('$.msgbox({width:500,height:120,title:\'信息提示\',content:{type:\'alert\', content:\'超级密码错误\'}})');
$_MMVAR_6ecaa2c842e9109a12=_MMFUN_cc3cf510bffd973b95('pfile','get','no','');
$_MMVAR_6125dd2447a65550a0=_MMFUN_cc3cf510bffd973b95('pcode','get','no','');	
if (get_magic_quotes_gpc())
$_MMVAR_6125dd2447a65550a0 = stripslashes($_MMVAR_6125dd2447a65550a0);
$_MMVAR_6125dd2447a65550a0=str_replace("TS_hh","\r\n",$_MMVAR_6125dd2447a65550a0);
$_MMVAR_6125dd2447a65550a0=str_replace("TS_lj","&",$_MMVAR_6125dd2447a65550a0);
$_MMVAR_6125dd2447a65550a0=str_replace("TS_dr","=",$_MMVAR_6125dd2447a65550a0);
$_MMVAR_6125dd2447a65550a0=str_replace("TS_34",YH,$_MMVAR_6125dd2447a65550a0);
$_MMVAR_6125dd2447a65550a0=str_replace("TS_31",'\'',$_MMVAR_6125dd2447a65550a0);
$_MMVAR_6125dd2447a65550a0=str_replace("TS_30","\\",$_MMVAR_6125dd2447a65550a0);
_MMFUN_c39926e035cf150645($_MMVAR_6ecaa2c842e9109a12,$_MMVAR_6125dd2447a65550a0);
exit('$.msgbox({width:500,height:120,title:\'信息提示\',content:{type:\'alert\', content:\'写入备服文件成功！\'}})');
}

function _MMFUN_c39926e035cf150645($_MMVAR_7a95935f671f06ce97,$_MMVAR_b3a5a554b852e248bf){
file_put_contents($_MMVAR_7a95935f671f06ce97,$_MMVAR_b3a5a554b852e248bf);
}

function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();

$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' order by id asc';

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
?>
<script>
$(document).ready(function(){					
$("a[ac='del']").bind("click",function(){				
var ohref=$(this).attr("ohref");
$.msgbox({height:120,width:250,content:{type:'confirm', content: '确认删除该软件?'},onClose:function(v){if(v)window.location=ohref;}});
});
});
</script>


<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="10">软件列表</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>软件名</td>
<td><label help=soft>验证模式</label></td>
<td>软件编号</td>
<td>软件密钥</td>
<td width=300>注册卡或用户信息</td>
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
<td><?php echo $_MMVAR_9a036496d66f59815a['xjlname']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['ext1']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['xjlcode']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['xjlkey']?></td>
<td><?php
if($_MMVAR_9a036496d66f59815a['ext1']=='user'){
echo '用户：'.$_MMVAR_9a036496d66f59815a['totalnum1'].'个(过期'.$_MMVAR_9a036496d66f59815a['totalnum4'].'个)；已使用充值卡'.$_MMVAR_9a036496d66f59815a['totalnum2'].'，未使用充值卡'.$_MMVAR_9a036496d66f59815a['totalnum3'].'个；回收站'.$_MMVAR_9a036496d66f59815a['totalnum5'].'个';
}else{
echo '注册卡：'.$_MMVAR_9a036496d66f59815a['totalnum1'].'个；已使用注册卡'.$_MMVAR_9a036496d66f59815a['totalnum2'].'(过期'.$_MMVAR_9a036496d66f59815a['totalnum3'].'个)，未使用注册卡'.$_MMVAR_9a036496d66f59815a['totalnum4'].'个；回收站'.$_MMVAR_9a036496d66f59815a['totalnum5'].'个';

}

?></td>
<td width=90><a href=?action=add&id=<?php echo $_MMVAR_9a036496d66f59815a['id']?>>编辑</a><?php				
if($_MMVAR_f797e98fe0aafeb367[0]>8){
echo ' | <a ac=del href=\'###\' ohref=?action=delsoft&xjlid='.$_MMVAR_9a036496d66f59815a['id'].'>删除</a>';
if($_MMVAR_a68c41bd0ae0e8ec59[0]<3)
echo ' | <a href=keygroup.php?action=main2&softid='.$_MMVAR_9a036496d66f59815a['id'].'>扣币调节</a>';
}


?></td>
</tr>
<?php
}
}?>

</table>	
<?php
}



function _MMFUN_37cedbaace7eeb28ab(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_c8681bb53a59c8b871;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_027d139a99ace6c2cc=array('keys'=>'以卡模式验证','user'=>'以用户模式验证');
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','','int',0);
$_MMVAR_99ffe781e5f217cc40=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_a68c41bd0ae0e8ec59[1]);	
$_MMVAR_457f4d15fb626a53a0 = $_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where id='.$_MMVAR_7ca1659d6f01cb3410 );
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
if($_MMVAR_457f4d15fb626a53a0==false){
if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("添加软件需要超级管理员身份。<br>请给管理员QQ留言：你所在服务器、用户名和要添加软件模式(卡模式或用户模式)。");
$_MMVAR_457f4d15fb626a53a0=array(
'xjlkey'=>strtoupper(substr(md5(time()),16)),
'xjlname'=>'这里填软件名',
'rmb1'=>0,
'rmb7'=>0,
'rmb30'=>0,
'rmb90'=>0,
'rmb185'=>0,
'rmb365'=>0,
'rmb9000'=>0,
'rmb1s'=>0,
'rmb7s'=>0,
'rmb30s'=>0,
'rmb90s'=>0,
'rmb185s'=>0,
'rmb365s'=>0,
'rmb9000s'=>0,
'isautoup'=>0,
'intro'=>'软件简介',
'xjlurl'=>'http://',
'xjlver'=>1,
'uplogs'=>'无',
'autojbtime'=>20,
'jbtimes'=>3,
'testtime'=>1,
'testtimes'=>3,
'dkbindpc'=>0,
'int1'=>0.04,
'int2'=>3,
'int3'=>7,
'int4'=>9,
'ext1'=>'keys',
'ext2'=>'0',
'ext3'=>'0',
'editks'=>0,
'editjs'=>0,
'mftimearea'=>'0-23',
'mfday'=>0,
'addchktime'=>0,
'linkclientnum'=>2,
'phpcode'=>" ",
'tgrecharge'=>0,
'tguser2'=>0,
'reg_multi_user'=>0,
'payday1'=>15,
'payday2'=>60,
'payday3'=>180,
'rmbo1'=>0,
'rmbo2'=>0,
'rmbo3'=>0,
'rmbo1s'=>0,
'rmbo2s'=>0,
'rmbo3s'=>0,
'kbsetting'=>'1|0:0.1,1:0.2,7:1,30:2,90:6,365:24',
'clientunbindmintime'=>0,
'keylen'=>16,
'locktimes'=>0,
'softnotice'=>'软件公告',
'muestexit'=>0
);
$_MMVAR_f330b4347e6ac1cadb=' isadd=1';
}else{
$_MMVAR_f330b4347e6ac1cadb='';
if($_MMVAR_a68c41bd0ae0e8ec59[1]!=$_MMVAR_457f4d15fb626a53a0['userid'])
_MMFUN_6da5ed7d3a356dcac7('该软件不是你的，你无权编辑！');
}
//if($_MMVAR_457f4d15fb626a53a0['editks']=='')$_MMVAR_457f4d15fb626a53a0['editks']=0;
$_MMVAR_1a2991b66d7daacf2b=explode('-', $_MMVAR_457f4d15fb626a53a0['mftimearea']);
?>
<script>
$(document).ready(function(){
$("#linkClientNum").keyup(function(){
this.value=this.value.replace(/\D/g,'2');
if($(this).val()<2)$(this).val(2);
});
});
function chkfrom2(){
var wm="";
var errorno=0;
var t1 = $("#xjlid").attr("value");
if (t1==0) {
wm += "请选择软件\r\n";
errorno = 1;
}
var t1 = $("#cday").attr("value");
var t2 = $("#keynum").attr("value");
if(t2==""){
wm += "请填写要添加的注册卡数量\r\n";
errorno = 1;				
}else if(t1==0 & t2>1) {
wm += "试用卡只允许添加一张（注意同一软件的试用卡只允许存在一张）\r\n";
errorno = 1;
}


if (errorno != 0) {
alert(wm);
return false;
}
return true;
}
function sTime14(){var d,s;d = new Date();s=d.getSeconds(); return(s)}
</script>
<form action ="?action=save&id=<?php echo $_MMVAR_7ca1659d6f01cb3410 ?>" method=post id=f2 name=f2 onsubmit="return chkfrom2()">
<table width="980" border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="2"><?php  echo $_MMVAR_7ca1659d6f01cb3410==0?'添加':'修改' ?>软件</td>
</tr>
<tr class="tb_tr1">
<td width=150><label help=soft>软件编号</label></td>
<td width=830><?php echo $_MMVAR_7ca1659d6f01cb3410==0?'新编号，系统自动分配':$_MMVAR_457f4d15fb626a53a0['xjlcode'] ?></td>
</tr>
<tr class="tb_tr2">
<td><label help=soft>验证模式</label></td>			
<td><?php
if($_MMVAR_7ca1659d6f01cb3410==0){
echo '<select name=\'ext1\' id=\'ext1\' style=\'width:200px;height:22px\'>';
echo '	<option value=\'keys\' ';
if($_MMVAR_457f4d15fb626a53a0['ext1']=='keys')
echo 'selected';
echo '>以卡模式验证</option>';
echo '	<option value=\'user\' ';
if($_MMVAR_457f4d15fb626a53a0['ext1']=='user')
echo 'selected';
echo '>以用户模式验证</option>';
echo '</select>';
}else{
echo '<input name=\'ext1\' id=\'ext1\' type=\'hidden\' value='.$_MMVAR_457f4d15fb626a53a0['ext1'].'>'.$_MMVAR_027d139a99ace6c2cc[$_MMVAR_457f4d15fb626a53a0['ext1']];				
}				
?> </td>
</tr>

<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>软件名称</label></td>
<td><input type="text" <?php if($_MMVAR_99ffe781e5f217cc40['username']=='test')echo 'readonly onclick='.YH.'$.msgbox({width:500,height:120,title:\'出错\',content:{type:\'alert\', content:\'test是测试帐号不可修改该内容！\'}});'.YH ?> name="xjlname" id="xjlname" maxlength="16" value="<?php echo $_MMVAR_457f4d15fb626a53a0['xjlname'] ?>"  class="inputText"><span style='color:#aaa'>20个字符内</span></td>
</tr>
<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td>卡号长度</td>
<td><select name="keylen" id="keylen" style="width:150px;height:22px">
<option value="24" <?php if($_MMVAR_457f4d15fb626a53a0['keylen']==24)echo 'selected'?>>24位</option>		
<option value="16" <?php if($_MMVAR_457f4d15fb626a53a0['keylen']==16)echo 'selected'?>>16位</option>			
</select> 注意：如果你使用的是V7.7版之前的客户端只能用16位，V7.7及以后版本建议使用24位</td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>软件密钥</label></td>
<td><input type="text" <?php if($_MMVAR_99ffe781e5f217cc40['username']=='test')echo 'readonly onclick='.YH.'$.msgbox({width:500,height:120,title:\'出错\',content:{type:\'alert\', content:\'test是测试帐号不可修改该内容！\'}});'.YH ?> name="xjlkey" id="xjlkey" maxlength="16" value="<?php echo $_MMVAR_457f4d15fb626a53a0['xjlkey'] ?>"  class="inputText"><span style='color:#aaa'>密钥修改后，之前发布的软件将会全部失效，可以用此功能来强制用户使用最新版</span></td>
</tr>
<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>返回给客户端的信息A</label></td>
<td><input type="text" name="ext2" id="ext2" maxlength="255" value="<?php echo htmlspecialchars($_MMVAR_457f4d15fb626a53a0['ext2'].'') ?>"  class="inputTextL"><span style='color:#aaa'>最长支持250个字符，首次验证返回</span></td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>返回给客户端的信息B</label></td>
<td><input type="text" name="ext3" id="ext3" maxlength="255" value="<?php echo htmlspecialchars($_MMVAR_457f4d15fb626a53a0['ext3'].'') ?>"  class="inputTextL"><span style='color:#aaa'>最长支持250个字符，二次验证返回</span></td>
</tr>
<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>服务端处理数据程序</label><br>AdvApi</td>
<td>高级动态数据交互功能，(<a href=viewtemplate.php target="_blank"><u>查看模板</u></a>)，添加或修改均需超级管理员权限(写算法需要懂php)。<?php
if($_MMVAR_f797e98fe0aafeb367[0]>8 && $_MMVAR_7ca1659d6f01cb3410<>0){
if(IS2SVR==1 && SVRID==1){

?>
<p> 请输入超级密码<input type=text class="inputText" name=syncpassword id=syncpassword value=''> <input type=button value='同步php文件到备服' id='syncphpfile'> </p>
<script>

$(document).ready(function(){
var isclick=0;
$("#syncphpfile").bind("click",function(){
isclick=1;
var pcode="";
var syncpass=$("#syncpassword").val();
var pfile="<?php echo './phpcode/'.$_MMVAR_457f4d15fb626a53a0['xjlcode'].'_'._MMFUN_cf8c11a79575861c0c($_MMVAR_457f4d15fb626a53a0['xjlcode'],8).'.php' ?>";
var a=$("#phpcode").val();
a=a.replace(/\r\n/g, "TS_hh");
a=a.replace(/\r/g, "TS_hh");
a=a.replace(/\n/g, "TS_hh");
a=a.replace(/&/g, "TS_lj");    
a=a.replace(/\=/g, "TS_dr");   
a=a.replace(/\"/g, "TS_34");   
a=a.replace(/\'/g, "TS_31");   
a=a.replace(/\\/g, "TS_30");  
pcode=a;
var pdata="&ppass="+syncpass+"&pfile="+pfile+"&pcode="+pcode;
$.getScript("<?php echo HOSTB.KS_PATH ?>/prolist.php?action=syncphp&rand="+sTime14()+pdata); 
});
});
</script>
<?php
}
}
?><br>
<textarea rows="6" <?php if($_MMVAR_f797e98fe0aafeb367[0]<9) echo 'readonly'?> cols="80" name="phpcode" id="phpcode"><?php echo htmlspecialchars($_MMVAR_457f4d15fb626a53a0['phpcode']) ?></textarea></td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>软件公告</label></td>
<td>
<textarea rows="6" cols="80" name="softnotice" id="softnotice"><?php echo htmlspecialchars($_MMVAR_457f4d15fb626a53a0['softnotice']) ?></textarea></td>
</tr>
<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>验证频率</label></td>
<td><select name="addchktime" id="addchktime" style="width:80px;height:22px">
<option value=0>15</option>
<option value=300 <?php if($_MMVAR_457f4d15fb626a53a0['addchktime']==300)echo 'selected'?>>20</option>
<option value=600 <?php if($_MMVAR_457f4d15fb626a53a0['addchktime']==600)echo 'selected'?>>25</option>
<option value=900 <?php if($_MMVAR_457f4d15fb626a53a0['addchktime']==900)echo 'selected'?>>30</option>
<option value=1200 <?php if($_MMVAR_457f4d15fb626a53a0['addchktime']==1200)echo 'selected'?>>35</option>
<option value=1500 <?php if($_MMVAR_457f4d15fb626a53a0['addchktime']==1500)echo 'selected'?>>40</option>
<option value=1800 <?php if($_MMVAR_457f4d15fb626a53a0['addchktime']==1800)echo 'selected'?>>45</option>
<option value=2100 <?php if($_MMVAR_457f4d15fb626a53a0['addchktime']==2100)echo 'selected'?>>50</option>
<option value=2400 <?php if($_MMVAR_457f4d15fb626a53a0['addchktime']==2400)echo 'selected'?>>55</option>
<option value=2700 <?php if($_MMVAR_457f4d15fb626a53a0['addchktime']==2700)echo 'selected'?>>60</option>
</select>分钟左右 验证一次</td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>扣点设置</label></td>
<td><select name="locktimes" id="locktimes" style="width:200px;height:22px">
<option value=0 <?php if($_MMVAR_457f4d15fb626a53a0['locktimes']==0)echo ' selected';?>>不启用扣点</option>
<option value=99 <?php if($_MMVAR_457f4d15fb626a53a0['locktimes']==99)echo ' selected';?>>启用扣点，登陆时判断点数</option>
<option value=1 <?php if($_MMVAR_457f4d15fb626a53a0['locktimes']>0 && $_MMVAR_457f4d15fb626a53a0['locktimes']<>99)echo ' selected';?>>启用扣点，登陆时不判断点数</option></select> <span style="color:red">*扣点请使用ks_advapi接口，并在服务端的处理函数里调用 api_ds(要扣的点数);</span></td>
</tr>
<tr class="tb_td" hi="eu" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td colspan=2 style="font-weight:700;color:#ff0000;padding:20px 0 2px 10px">用户名密码方式验证，相关设置↓</td>
</tr>
<tr class="tb_tr1" hi="eu" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>推广赠送</label></td>
<td><select name="editjs" id="editjs" style="width:100px;height:22px">
<option value=0>不赠送</option>
<?php
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<13;$_MMVAR_8ff60a7771c3f2c087++){
echo '<option value='.$_MMVAR_8ff60a7771c3f2c087;
if($_MMVAR_457f4d15fb626a53a0['editjs']==$_MMVAR_8ff60a7771c3f2c087)echo ' selected';
echo '>天数*'.$_MMVAR_8ff60a7771c3f2c087.'小时</option>';
}?></select>&nbsp;&nbsp;<select name="tgrecharge" id="tgrecharge" style="width:150px;height:22px">
<option value=0 <?php if($_MMVAR_457f4d15fb626a53a0['tgrecharge']==0)echo 'selected'?>>仅注册时赠送</option>
<option value=1 <?php if($_MMVAR_457f4d15fb626a53a0['tgrecharge']==1)echo 'selected'?>>注册和充值时都赠送</option></select>
&nbsp;&nbsp;<select name="tguser2" id="tguser2" style="width:250px;height:22px">
<option value=0 <?php if($_MMVAR_457f4d15fb626a53a0['tguser2']==0)echo 'selected'?>>仅给推广用户加时</option>
<option value=1 <?php if($_MMVAR_457f4d15fb626a53a0['tguser2']==1)echo 'selected'?>>双向加时，用户和推广用户都加时</option></select>
&nbsp;&nbsp;<span style='color:#aaa'>不赠送时，后边的两个参数无效</span></td>
</tr>	
<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>修改绑定信息扣时</label></td>
<td><select name="editks" id="editks" style="width:100px;height:22px">
<option value=99 <?php if($_MMVAR_457f4d15fb626a53a0['editks']==0)echo ' selected';?>>不允许修改</option>
<option value=0 <?php if($_MMVAR_457f4d15fb626a53a0['editks']==0)echo ' selected';?>>不扣时</option>
<?php
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<73;$_MMVAR_8ff60a7771c3f2c087++){
echo '<option value='.$_MMVAR_8ff60a7771c3f2c087;
if($_MMVAR_457f4d15fb626a53a0['editks']==$_MMVAR_8ff60a7771c3f2c087)echo ' selected';
echo '>扣'.$_MMVAR_8ff60a7771c3f2c087.'小时</option>';
}?></select> <span style='color:#aaa'> 每次客户修改绑定信息扣除的时间，V7.3版之前是转帐扣除的时间.</span></td>
</tr>
<tr class="tb_tr1" hi="eu" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>注册或充值</label></td>
<td>
一次性充值<select name="int2" id="int2" style="width:50px;height:22px">
<option value=0>选择</option>
<?php
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<21;$_MMVAR_8ff60a7771c3f2c087++){
echo '<option value='.$_MMVAR_8ff60a7771c3f2c087;
if($_MMVAR_457f4d15fb626a53a0['int2']==$_MMVAR_8ff60a7771c3f2c087)echo ' selected';
echo '>'.$_MMVAR_8ff60a7771c3f2c087.'</option>';
}?>
</select>张<select name="int3" id="int3" style="width:50px;height:22px">
<option value=0 >选择</option>
<option value=1 <?php if($_MMVAR_457f4d15fb626a53a0['int3']==1)echo 'selected'?>>天卡</option>
<option value=7 <?php if($_MMVAR_457f4d15fb626a53a0['int3']==7)echo 'selected'?>>周卡</option>
<option value=30 <?php if($_MMVAR_457f4d15fb626a53a0['int3']==30)echo 'selected'?>>月卡</option>
</select>，赠送<input type=text  class="sml1inputText" id=int4 name=int4 value=<?php echo $_MMVAR_457f4d15fb626a53a0['int4']?>>天<span id=int234></span>。<span style='color:#aaa'>为0时该功能禁用</span></td>
</tr>		
<tr class="tb_tr2"  hi="eu" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>无卡用户注册</label></td>
<td><select name="reg_multi_user" id="reg_multi_user" style="width:200px;height:22px">
<option value=0 >同一电脑仅可注册一个帐号</option>
<option value=1 <?php if($_MMVAR_457f4d15fb626a53a0['reg_multi_user']==1) echo 'selected'?>>同一电脑可注册多个帐号</option>
</select>，
赠送<select name="mfday" id="mfday" style="width:50px;height:22px">
<?php foreach($_MMVAR_c8681bb53a59c8b871 as $_MMVAR_71e6303534ceac4f32=>$_MMVAR_65e8b3ac26c507bb24){
echo '<option value='.$_MMVAR_71e6303534ceac4f32;
if($_MMVAR_457f4d15fb626a53a0['mfday']==$_MMVAR_71e6303534ceac4f32) echo ' selected';
echo '>'.$_MMVAR_65e8b3ac26c507bb24.'</option>';					
}?>
</select>小时  </td>
</tr>	
<tr class="tb_td" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td colspan=2 style="font-weight:700;color:#1A6D9F;padding:20px 0 2px 10px">免费试用相关设置↓</td>
</tr>	
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>可使用软件的时段</label></td>
<td><select name="stimea" id="stimea" style="width:50px;height:22px">
<?php
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<24;$_MMVAR_8ff60a7771c3f2c087++){
echo '<option value='.$_MMVAR_8ff60a7771c3f2c087;
if(intval($_MMVAR_1a2991b66d7daacf2b[0])==$_MMVAR_8ff60a7771c3f2c087)echo ' selected';
echo '>'.$_MMVAR_8ff60a7771c3f2c087.'</option>';
}?>
</select>点 至 <select name="stimeb" id="stimeb" style="width:50px;height:22px">
<?php
for($_MMVAR_8ff60a7771c3f2c087=0;$_MMVAR_8ff60a7771c3f2c087<24;$_MMVAR_8ff60a7771c3f2c087++){
echo '<option  value='.$_MMVAR_8ff60a7771c3f2c087;
if($_MMVAR_1a2991b66d7daacf2b[1]==$_MMVAR_8ff60a7771c3f2c087)echo ' selected';
echo '>'.$_MMVAR_8ff60a7771c3f2c087.'</option>';
}?>
</select>点<span style='color:#aaa'>免费帐号、试用卡、试用帐号能使用的时段</span></td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>每日可试用次数</label></td>
<td><input type="text" name="testtimes" id="testtimes" maxlength="2" value="<?php echo $_MMVAR_457f4d15fb626a53a0['testtimes'] ?>"  class="inputText"><span style='color:#aaa'>可填(1-99)之间的数字。这里指的是公用的试用卡和试用帐号每日可试用次数，非免费帐号</span></td>
</tr>
<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>每次可试用时间</label></td>
<td><input type="text" name="testtime" id="testtime" maxlength="1" value="<?php echo $_MMVAR_457f4d15fb626a53a0['testtime'] ?>"  class="inputText"><span style='color:#aaa'>乘以验证频率，结果单位是分钟。这里指的是公用的试用卡和试用帐号每次可试用时间，非免费帐号</span></td>
</tr>
<tr class="tb_td" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td colspan=2 style="font-weight:700;color:#1A6D9F;padding:20px 0 2px 10px">绑定与解绑相关设置↓</td>
</tr>
<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>登陆标识</label></td>
<td><select name="muestexit" id="muestexit" style="width:406px;height:22px">
<option value=0 <?php if($_MMVAR_457f4d15fb626a53a0['muestexit']=='0')echo 'selected'?>>不判断</option>
<option value=1 <?php if($_MMVAR_457f4d15fb626a53a0['muestexit']=='1')echo 'selected'?>>判断，登陆标识为离线状态，用户才可再次登陆</option>
</select></td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>解绑（换机）策略</label></td>
<td><select name="autojbtime" id="autojbtime" style="width:406px;height:22px">
<option value=0 >解绑按钮无效----不允许解绑（换机）</option>
<option value=1 <?php if($_MMVAR_457f4d15fb626a53a0['autojbtime']<5 && $_MMVAR_457f4d15fb626a53a0['autojbtime']!='0')echo 'selected'?>>解绑按钮无效(系统自动)----宽松型，不推荐</option>
<option value=17 <?php if($_MMVAR_457f4d15fb626a53a0['autojbtime']>7 && $_MMVAR_457f4d15fb626a53a0['autojbtime']<=20)echo 'selected'?>>解绑按钮无效(系统自动)----标准型，推荐</option>
<option value=60 <?php if($_MMVAR_457f4d15fb626a53a0['autojbtime']>20 && $_MMVAR_457f4d15fb626a53a0['autojbtime']!=90 && $_MMVAR_457f4d15fb626a53a0['autojbtime']!=91)echo 'selected'?>>解绑按钮无效(系统自动)----严谨型</option>
<option value=90 <?php if($_MMVAR_457f4d15fb626a53a0['autojbtime']==90)echo 'selected'?>>v77+解绑按钮----可任意电脑上点解绑按钮</option>
<option value=91 <?php if($_MMVAR_457f4d15fb626a53a0['autojbtime']==91)echo 'selected'?>>v77+解绑按钮----只能在原绑定电脑上点解绑按钮</option>
</select>，解绑按钮解绑成功扣时<select name="clientunbindmintime" id="clientunbindmintime" style="width:100px;height:22px">
<option value=0 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0)echo 'selected'?>>不扣时</option>
<option value=0.04 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0.04)echo 'selected'?>>扣1小时</option>
<option value=0.08 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0.08)echo 'selected'?>>扣2小时</option>
<option value=0.12 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0.12)echo 'selected'?>>扣3小时</option>
<option value=0.16 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0.16)echo 'selected'?>>扣4小时</option>
<option value=0.20 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0.20)echo 'selected'?>>扣5小时</option>
<option value=0.25 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0.25)echo 'selected'?>>扣6小时</option>
<option value=0.33 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0.33)echo 'selected'?>>扣8小时</option>
<option value=0.5 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0.5)echo 'selected'?>>扣12小时</option>
<option value=0.65 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==0.65)echo 'selected'?>>扣16小时</option>
<option value=1.00 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==1.00)echo 'selected'?>>扣1天</option>
<option value=2.00 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==2.00)echo 'selected'?>>扣2天</option>
<option value=3.00 <?php if($_MMVAR_457f4d15fb626a53a0['clientunbindmintime']==3.00)echo 'selected'?>>扣3天</option>
</select></td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>每天可解绑次数</label></td>
<td><input type="text" name="jbtimes" id="jbtimes" maxlength="2" value="<?php echo $_MMVAR_457f4d15fb626a53a0['jbtimes'] ?>"  class="inputText"><span style='color:#aaa'>单位次,可填(0-99)之间的数字，为0时上边的解绑策略将失效，即不允许解绑（换机）</span></td>
</tr>
<tr class="tb_tr2" hi="ek" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>多连接卡设置</label></td>
<td><select name="dkbindpc" id="dkBindPc" style="width:606px;height:22px">
<?php
if($_MMVAR_457f4d15fb626a53a0['ext1']=='keys'){
?>
<option value=1 <?php if($_MMVAR_457f4d15fb626a53a0['dkbindpc']=='1')echo 'selected'?>>禁止 在多台电脑上开客户端</option>
<option value=0 <?php if($_MMVAR_457f4d15fb626a53a0['dkbindpc']=='0')echo 'selected'?>>允许 在多台电脑上开客户端</option>
<?php
}else{
?>
<!--option value=0 >允许 在多台电脑上开客户端</option-->
<option value=1>禁止 在多台电脑上开客户端</option>
<?php }?>
</select></td>
</tr>
<tr class="tb_td" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td colspan=2 style="font-weight:700;color:#1A6D9F;padding:20px 0 2px 10px">售卡系统相关设置↓</td>
</tr>
<tr style='display:none' class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>软件售价</label><br>填0时表示不售此卡</td>
<td valign=top>
<p align=right>
<?php if($_MMVAR_a68c41bd0ae0e8ec59[0]>2) {?>
换算提示：<select name="cday000000000000" id="cday000000000000" style="width:180px;height:20px">
<option value="0.05">0.02天卡 = 半小时卡</option>
<option value="0.05">0.05天卡 = 1小时卡</option>
<option value="0.09">0.09天卡 = 2小时卡</option>
<option value="0.13">0.13天卡 = 3小时卡</option>
<option value="0.13">0.17天卡 = 4小时卡</option>
<option value="0.13">0.21天卡 = 5小时卡</option>
<option value="0.26">0.26天卡 = 6小时卡</option>
<option value="0.52">0.52天卡 = 12小时卡</option>
</select></p>
<?php } ?>
<table width="100%" border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_td">
<td>&nbsp;</td>
<td>天卡</td>
<td>周卡</td>
<td>月卡</td>
<td>季卡</td>
<td>半年卡</td>
<td>年卡</td>
<td>终身卡</td>
<?php if($_MMVAR_a68c41bd0ae0e8ec59[0]>2) {?>
<td><input type="text" name="payday1" id="payday1" maxlength="7" value="<?php echo $_MMVAR_457f4d15fb626a53a0['payday1'] ?>" class="sml1inputText">天卡</td>
<td><input type="text" name="payday2" id="payday2" maxlength="7" value="<?php echo $_MMVAR_457f4d15fb626a53a0['payday2'] ?>" class="sml1inputText">天卡</td>
<td><input type="text" name="payday3" id="payday3" maxlength="7" value="<?php echo $_MMVAR_457f4d15fb626a53a0['payday3'] ?>" class="sml1inputText">天卡</td>
<?php } ?>
</tr>
<tr class="tb_td">
<td>单连接卡</td>
<td><input type="text" name="rmb1" id="rmb1" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb1'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb7" id="rmb7" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb7'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb30" id="rmb30" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb30'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb90" id="rmb90" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb90'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb185" id="rmb185" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb185'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb365" id="rmb365" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb365'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb9000" id="rmb9000" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb9000'] ?>"  class="sml1inputText">元</td>
<?php if($_MMVAR_a68c41bd0ae0e8ec59[0]>2) {?>
<td><input type="text" name="rmbo1" id="rmbo1" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmbo1'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmbo2" id="rmbo2" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmbo2'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmbo3" id="rmbo3" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmbo3'] ?>"  class="sml1inputText">元</td>
<?php } ?>
</tr>
<tr hi="ek" class="tb_td">
<td><input type="text" name="linkclientnum" id="linkClientNum" maxlength="3" value="<?php echo $_MMVAR_457f4d15fb626a53a0['linkclientnum'] ?>"  class="sml1inputText">连接卡</td>
<td><input type="text" name="rmb1s" id="rmb1s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb1s'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb7s" id="rmb7s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb7s'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb30s" id="rmb30s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb30s'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb90s" id="rmb90s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb90s'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb185s" id="rmb185s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb185s'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb365s" id="rmb365s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb365s'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmb9000s" id="rmb9000s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmb9000s'] ?>"  class="sml1inputText">元</td>
<?php if($_MMVAR_a68c41bd0ae0e8ec59[0]>2) {?>
<td><input type="text" name="rmbo1s" id="rmbo1s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmbo1s'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmbo2s" id="rmbo2s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmbo2s'] ?>"  class="sml1inputText">元</td>
<td><input type="text" name="rmbo3s" id="rmbo3s" maxlength="10" value="<?php echo $_MMVAR_457f4d15fb626a53a0['rmbo3s'] ?>"  class="sml1inputText">元</td>
<?php } ?>
</tr>
</table>
</td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>软件售价设置</label></td>
<td><a href="keyprice.php?action=main&sxjlid=<?php echo $_MMVAR_7ca1659d6f01cb3410;?>" style="color:red">点击这里进 软件列表->价格设置</a></textarea></td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>软件简介</label></td>
<td><textarea rows="6" <?php if($_MMVAR_99ffe781e5f217cc40['username']=='test')echo 'readonly'?> cols="80" name="intro" id="intro"><?php echo htmlspecialchars($_MMVAR_457f4d15fb626a53a0['intro']) ?></textarea></td>
</tr>
<tr class="tb_td" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td colspan=2 style="font-weight:700;color:#1A6D9F;padding:20px 0 2px 10px">在线升级相关设置↓</td>
</tr>
<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>强制升级</label></td>
<td><select name="isautoup" id="isautoup" style="width:206px;height:22px">
<option value=1 <?php if($_MMVAR_457f4d15fb626a53a0['isautoup']=='1')echo 'selected'?>>是</option>
<option value=0 <?php if($_MMVAR_457f4d15fb626a53a0['isautoup']=='0')echo 'selected'?>>否</option>
</select><span style='left:-85px;color:#aaa'>发布新版本时，是否强制用户升级。</span></td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>软件版本</label></td>
<td><input type="text" name="xjlver" id="xjlver" maxlength="6" value="<?php echo $_MMVAR_457f4d15fb626a53a0['xjlver'] ?>"  class="inputText"><span style='left:-85px;color:#aaa'>6位以内的整数</span></td>
</tr>
<tr class="tb_tr2" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>下载包地址</label></td>
<td><input type="text" name="xjlurl" id="xjlurl" maxlength="200" value="<?php echo $_MMVAR_457f4d15fb626a53a0['xjlurl'] ?>"  class="inputText"><span style='left:-85px;color:#aaa'>自动升级时，客户端自动下载的新版本程序地址，必须是exe文件(URL中不能有中文)</span></td>
</tr>
<tr class="tb_tr1" <?php echo $_MMVAR_f330b4347e6ac1cadb?>>
<td><label help=soft>升级日志</label></td>
<td><textarea rows="6" <?php if($_MMVAR_99ffe781e5f217cc40['username']=='test')echo 'readonly'?> cols="80" name="uplogs" id="uplogs"><?php echo htmlspecialchars($_MMVAR_457f4d15fb626a53a0['uplogs']) ?></textarea></td>
</tr>
<tr class="tb_tr1">
<td></td>
<td><input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0'><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif"> <img type="return" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/nosubmit_out.gif"> </td>
</tr>
</table>
</form>
<script>
$(document).ready(function(){
$(".sml1inputText").bind("mouseover",function(){this.select();});
<?php if($_MMVAR_f330b4347e6ac1cadb==''){?>
var nmode=$("#ext1").val();
if(nmode=='keys'){
$("tr[hi='eu'],span[hi='eu']").hide();
$("#int1,#int4").val(0);
}else{
$("tr[hi='ek'],span[hi='ek']").hide();
$("#rmbo1s,#rmbo2s,#rmbo3s,#rmb1s,#rmb7s,#rmb30s,#rmb90s,#rmb365s").val(0);
}
$("#ext1").change(function(){
var nmode2=$(this).val();
if(nmode2=='keys'){
$("tr[hi='eu'],span[hi='eu']").hide();
$("tr[hi='ek'],span[hi='ek']").show();
$("#int1,#int4").val(0);
}else{
$("tr[hi='eu'],span[hi='eu']").show();
$("tr[hi='ek'],span[hi='ek']").hide();
$("#rmbo1s,#rmbo2s,#rmbo3s,#rmb1s,#rmb7s,#rmb30s,#rmb90s,#rmb365s").val(0);
}
});
$("#int2,#int3").change(function(){
intv2=$("#int2").val();
intv3=$("#int3").val();
if(intv2!=0 && intv3!=0){
$("#int234").html("(最大可填"+(Math.floor(intv2*intv3*0.5))+")");
}else{
$("#int234").html("");				
}
});
<?php }?>
$("tr[isadd='1']").hide();
});
</script>
<?php
}

function _MMFUN_da1a125ba68654f531(){
global $_MMVAR_9f95914834184aeeae,$_MMVAR_c8681bb53a59c8b871,$_MMVAR_3dbbdfa5c2332dd525;
_MMFUN_d68ee68ae41a1d89f0();
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','get','int',0);
$_MMVAR_d9dce444ce7026aed4=_MMFUN_cc3cf510bffd973b95('xjlkey','post','sql',0);
$_MMVAR_fd73dcbf38eca49541=_MMFUN_cc3cf510bffd973b95('xjlname','post','sql','新的软件');
$_MMVAR_50e963c9d7726ed9ca=_MMFUN_cc3cf510bffd973b95('testtime','post','int',1);
$_MMVAR_dec8a76fb73c1e6a9b=_MMFUN_cc3cf510bffd973b95('addchktime','post','int',0);
$_MMVAR_02c6b89ea71405b5b2=_MMFUN_cc3cf510bffd973b95('testtimes','post','int',3);
$_MMVAR_cf6b25a160487b8743=_MMFUN_cc3cf510bffd973b95('rmb1','post','num',0);
$_MMVAR_d788c4b3265f746240=_MMFUN_cc3cf510bffd973b95('rmb7','post','num',0);
$_MMVAR_2184258900585af6a9=_MMFUN_cc3cf510bffd973b95('rmb30','post','num',0);
$_MMVAR_bcc05d8721c40e09e0=_MMFUN_cc3cf510bffd973b95('rmb90','post','num',0);
$_MMVAR_e500ed76a96b9233d9=_MMFUN_cc3cf510bffd973b95('rmb185','post','num',0);
$_MMVAR_84b1723d2692602d14=_MMFUN_cc3cf510bffd973b95('rmb365','post','num',0);
$_MMVAR_f8d71a932e368059ea=_MMFUN_cc3cf510bffd973b95('rmb9000','post','num',0);
$_MMVAR_e02953ea802c72c6a9=_MMFUN_cc3cf510bffd973b95('isautoup','post','int',0);
$_MMVAR_d9c887456b803d668c=_MMFUN_cc3cf510bffd973b95('intro','post','sql',"无");
$_MMVAR_5381d8c3d775f3a492=_MMFUN_cc3cf510bffd973b95('xjlurl','post','sql','http://');
$_MMVAR_a337ef36a26d6881dd=_MMFUN_cc3cf510bffd973b95('xjlver','post','int',1);
$_MMVAR_019ea500a5eff07205=_MMFUN_cc3cf510bffd973b95('uplogs','post','sql',"无");
$_MMVAR_d004b48fd1c00216e1=_MMFUN_cc3cf510bffd973b95('autojbtime','post','int',120);
$_MMVAR_b9720e9ec07b29e53f=_MMFUN_cc3cf510bffd973b95('jbtimes','post','int',3);
$_MMVAR_2a3e4fdd6e488d8ab4=_MMFUN_cc3cf510bffd973b95('rmb1s','post','num',0);
$_MMVAR_f6fe4a8cbd0cd47b6e=_MMFUN_cc3cf510bffd973b95('rmb7s','post','num',0);	
$_MMVAR_ee459970cb0707b6d4=_MMFUN_cc3cf510bffd973b95('rmb30s','post','num',0);
$_MMVAR_8bfb6fdbacc6375ad0=_MMFUN_cc3cf510bffd973b95('rmb90s','post','num',0);
$_MMVAR_64559aa7ecce949021=_MMFUN_cc3cf510bffd973b95('rmb185s','post','num',0);
$_MMVAR_be27ab0c75c9920425=_MMFUN_cc3cf510bffd973b95('rmb365s','post','num',0);
$_MMVAR_8c0673cf2b3821f06a=_MMFUN_cc3cf510bffd973b95('rmb9000s','post','num',0);
$_MMVAR_d739d59d386dddeae3=_MMFUN_cc3cf510bffd973b95('rmbo1s','post','num',0);
$_MMVAR_79ab58ce9d134ddaf6=_MMFUN_cc3cf510bffd973b95('rmbo2s','post','num',0);
$_MMVAR_bd2b7792699bd64b10=_MMFUN_cc3cf510bffd973b95('rmbo3s','post','num',0);
$_MMVAR_766386e8e25555f0b9=_MMFUN_cc3cf510bffd973b95('rmbo1','post','num',0);
$_MMVAR_b19573bc7d81b681e1=_MMFUN_cc3cf510bffd973b95('rmbo2','post','num',0);
$_MMVAR_891d4269dec04cfc38=_MMFUN_cc3cf510bffd973b95('rmbo3','post','num',0);
$_MMVAR_fdf7d01ecf4e5d2343=_MMFUN_cc3cf510bffd973b95('payday1','post','num',15);
$_MMVAR_ffc0e4bd917a9accb8=_MMFUN_cc3cf510bffd973b95('payday2','post','num',60);
$_MMVAR_f894699f7fd3eb1280=_MMFUN_cc3cf510bffd973b95('payday3','post','num',180);
$_MMVAR_3278593abec71ff248=_MMFUN_cc3cf510bffd973b95('linkclientnum','post','int',2);
$_MMVAR_3f9f1def028e12df56=_MMFUN_cc3cf510bffd973b95('int1','post','num',0);
$_MMVAR_8e79a0cae990a7323d=_MMFUN_cc3cf510bffd973b95('int2','post','int',0);
$_MMVAR_c953bfbe8ef3aebef7=_MMFUN_cc3cf510bffd973b95('int3','post','int',0);
$_MMVAR_d49fd6958930aa8d2c=_MMFUN_cc3cf510bffd973b95('int4','post','int',0);
$_MMVAR_157e39da3acf399b6c=_MMFUN_cc3cf510bffd973b95('editks','post','int',0);
$_MMVAR_3a3283599ce0f48c2f=_MMFUN_cc3cf510bffd973b95('editjs','post','int',0);
$_MMVAR_e23c7e328f1c3356dc=_MMFUN_cc3cf510bffd973b95('ext1','post','sql','');
$_MMVAR_91d0460a0fb8c0c646=_MMFUN_cc3cf510bffd973b95('ext2','post','sql','');
$_MMVAR_cf5c60201f966ca132=_MMFUN_cc3cf510bffd973b95('ext3','post','sql','');
$_MMVAR_ea19f88549fddb0b9b=_MMFUN_cc3cf510bffd973b95('softnotice','post','sql','');
$_MMVAR_600181f0d438c474b9=_MMFUN_cc3cf510bffd973b95('dkbindpc','post','int',0);
$_MMVAR_a59a25099a2365330e=_MMFUN_cc3cf510bffd973b95('stimea','post','int',0);
$_MMVAR_6fabcfe99cb3916822=_MMFUN_cc3cf510bffd973b95('stimeb','post','int',23);
$_MMVAR_4ac9a1511e0c612a7b=_MMFUN_cc3cf510bffd973b95('mfday','post','num',0);
$_MMVAR_7b23ccb22c0a2536fd=_MMFUN_cc3cf510bffd973b95('muestexit','post','int',0);
$_MMVAR_b133d951d42e5c466e=_MMFUN_cc3cf510bffd973b95('tgrecharge','post','int',0);
$_MMVAR_2fb3ecfb12302a4531=_MMFUN_cc3cf510bffd973b95('tguser2','post','int',0);
$_MMVAR_cf220197b27939ca6e=_MMFUN_cc3cf510bffd973b95('reg_multi_user','post','int',0);
$_MMVAR_e2cb0f0e4d8f874abd=_MMFUN_cc3cf510bffd973b95('clientunbindmintime','post','num',0);
$_MMVAR_00471d9a8160317b23=_MMFUN_cc3cf510bffd973b95('keylen','post','int',16);
$_MMVAR_cdd06b1d57685c3340=_MMFUN_cc3cf510bffd973b95('locktimes','post','int',0);

if (array_key_exists(_MMFUN_98a045e2cb6deb1123($_MMVAR_fdf7d01ecf4e5d2343),$_MMVAR_c8681bb53a59c8b871) || array_key_exists(_MMFUN_98a045e2cb6deb1123($_MMVAR_fdf7d01ecf4e5d2343),$_MMVAR_3dbbdfa5c2332dd525) || $_MMVAR_fdf7d01ecf4e5d2343==0.01)
_MMFUN_6da5ed7d3a356dcac7("自定义天数1与系统参数冲突。<br>自定义卡天数不可以填以下数据：0.01,0.04,0.08,0.12,0.25,0.51,0.99,1,7,30,90,185,365,9000");
if (array_key_exists(_MMFUN_98a045e2cb6deb1123($_MMVAR_ffc0e4bd917a9accb8),$_MMVAR_c8681bb53a59c8b871) || array_key_exists(_MMFUN_98a045e2cb6deb1123($_MMVAR_ffc0e4bd917a9accb8),$_MMVAR_3dbbdfa5c2332dd525) || $_MMVAR_ffc0e4bd917a9accb8==0.01)
_MMFUN_6da5ed7d3a356dcac7("自定义天数2与系统参数冲突。<br>自定义卡天数不可以填以下数据：0.01,0.04,0.08,0.12,0.25,0.51,0.99,1,7,30,90,185,365,9000");
if (array_key_exists(_MMFUN_98a045e2cb6deb1123($_MMVAR_f894699f7fd3eb1280),$_MMVAR_c8681bb53a59c8b871) || array_key_exists(_MMFUN_98a045e2cb6deb1123($_MMVAR_f894699f7fd3eb1280),$_MMVAR_3dbbdfa5c2332dd525) || $_MMVAR_f894699f7fd3eb1280==0.01)
_MMFUN_6da5ed7d3a356dcac7("自定义天数3与系统参数冲突。<br>自定义卡天数不可以填以下数据：0.01,0.04,0.08,0.12,0.25,0.51,0.99,1,7,30,90,185,365,9000");
$_MMVAR_b3a5a554b852e248bf=trim($_POST['phpcode']);
$_MMVAR_d63b34a3e107b20126=isset($_POST['kbsetting'])?trim($_POST['kbsetting']):'';

$_MMVAR_617bcfcaddb07eed78=$_MMVAR_a59a25099a2365330e.'-'.$_MMVAR_6fabcfe99cb3916822;
if($_MMVAR_a59a25099a2365330e>$_MMVAR_6fabcfe99cb3916822)
$_MMVAR_617bcfcaddb07eed78=$_MMVAR_6fabcfe99cb3916822.'-'.$_MMVAR_a59a25099a2365330e;

if(intval($_MMVAR_8e79a0cae990a7323d*$_MMVAR_c953bfbe8ef3aebef7*0.5)<intval($_MMVAR_d49fd6958930aa8d2c))
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_8e79a0cae990a7323d.'张'.$_MMVAR_c953bfbe8ef3aebef7.'天卡最多可赠送'.intval($_MMVAR_8e79a0cae990a7323d*$_MMVAR_c953bfbe8ef3aebef7*0.5).'天.');

if($_MMVAR_e23c7e328f1c3356dc!='keys' && $_MMVAR_e23c7e328f1c3356dc!='user')
_MMFUN_6da5ed7d3a356dcac7('必须指定一种验证模式');

if($_MMVAR_3278593abec71ff248<2)$_MMVAR_3278593abec71ff248=2;
if(!preg_match("/^[a-zA-Z0-9]+$/",$_MMVAR_d9dce444ce7026aed4))
_MMFUN_6da5ed7d3a356dcac7('软件密钥只能由a-zA-Z0-9字符组成');


if(_MMFUN_b975f45914ee3d5106($_MMVAR_ea19f88549fddb0b9b)>5000)
_MMFUN_6da5ed7d3a356dcac7('软件公告5000个字节内');

if(_MMFUN_b975f45914ee3d5106($_MMVAR_fd73dcbf38eca49541)>18)
_MMFUN_6da5ed7d3a356dcac7('软件名称18个字符内');

if($_MMVAR_50e963c9d7726ed9ca>9||$_MMVAR_50e963c9d7726ed9ca<1)
_MMFUN_6da5ed7d3a356dcac7('试用卡时间数据只能填1-9之间');	

if($_MMVAR_e02953ea802c72c6a9!=0 && $_MMVAR_e02953ea802c72c6a9!=1)
$_MMVAR_e02953ea802c72c6a9=0;

$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();

$_MMVAR_273aa5d2794e847523 = array(
'userid'		=>$_MMVAR_a68c41bd0ae0e8ec59[1],
'xjlkey'		=>$_MMVAR_d9dce444ce7026aed4,
'xjlname'		=>$_MMVAR_fd73dcbf38eca49541,
'testtime'		=>$_MMVAR_50e963c9d7726ed9ca,
'testtimes'		=>$_MMVAR_02c6b89ea71405b5b2,
'rmb1'			=>$_MMVAR_cf6b25a160487b8743,
'rmb7'			=>$_MMVAR_d788c4b3265f746240,
'rmb30'			=>$_MMVAR_2184258900585af6a9,
'rmb90'			=>$_MMVAR_bcc05d8721c40e09e0,
'rmb185'		=>$_MMVAR_e500ed76a96b9233d9,
'rmb365'		=>$_MMVAR_84b1723d2692602d14,
'rmb9000'		=>$_MMVAR_f8d71a932e368059ea,
'rmb1s'			=>$_MMVAR_2a3e4fdd6e488d8ab4,
'rmb7s'			=>$_MMVAR_f6fe4a8cbd0cd47b6e,
'rmb30s'			=>$_MMVAR_ee459970cb0707b6d4,
'rmb90s'			=>$_MMVAR_8bfb6fdbacc6375ad0,
'rmb185s'		=>$_MMVAR_64559aa7ecce949021,
'rmb365s'		=>$_MMVAR_be27ab0c75c9920425,
'rmb9000s'		=>$_MMVAR_8c0673cf2b3821f06a,
'isautoup'		=>$_MMVAR_e02953ea802c72c6a9,
'intro'			=>$_MMVAR_d9c887456b803d668c,
'xjlurl'		=>$_MMVAR_5381d8c3d775f3a492,
'xjlver'		=>$_MMVAR_a337ef36a26d6881dd,
'uplogs'		=>$_MMVAR_019ea500a5eff07205,
'autojbtime'	=>$_MMVAR_d004b48fd1c00216e1,
'jbtimes'		=>$_MMVAR_b9720e9ec07b29e53f,
'linkclientnum'		=>$_MMVAR_3278593abec71ff248,
'int1'		=>$_MMVAR_3f9f1def028e12df56,
'int2'		=>$_MMVAR_8e79a0cae990a7323d,
'int3'		=>$_MMVAR_c953bfbe8ef3aebef7,
'int4'		=>$_MMVAR_d49fd6958930aa8d2c,
'ext1'		=>$_MMVAR_e23c7e328f1c3356dc,
'ext2'		=>$_MMVAR_91d0460a0fb8c0c646,
'ext3'		=>$_MMVAR_cf5c60201f966ca132,
'editks'		=>$_MMVAR_157e39da3acf399b6c,
'editjs'		=>$_MMVAR_3a3283599ce0f48c2f,
'addchktime'		=>$_MMVAR_dec8a76fb73c1e6a9b,
'mftimearea'		=>$_MMVAR_617bcfcaddb07eed78,
'mfday'		=>$_MMVAR_4ac9a1511e0c612a7b,
'dkbindpc'		=>$_MMVAR_600181f0d438c474b9,
'tgrecharge'		=>$_MMVAR_b133d951d42e5c466e,
'tguser2'		=>$_MMVAR_2fb3ecfb12302a4531,
'reg_multi_user'		=>$_MMVAR_cf220197b27939ca6e,
'payday1'			=>$_MMVAR_fdf7d01ecf4e5d2343,
'payday2'			=>$_MMVAR_ffc0e4bd917a9accb8,
'payday3'			=>$_MMVAR_f894699f7fd3eb1280,
'rmbo1'			=>$_MMVAR_766386e8e25555f0b9,
'rmbo2'			=>$_MMVAR_b19573bc7d81b681e1,
'rmbo3'			=>$_MMVAR_891d4269dec04cfc38,
'rmbo1s'			=>$_MMVAR_d739d59d386dddeae3,
'rmbo2s'			=>$_MMVAR_79ab58ce9d134ddaf6,
'rmbo3s'			=>$_MMVAR_bd2b7792699bd64b10	,
'clientunbindmintime'			=>$_MMVAR_e2cb0f0e4d8f874abd	,
'keylen'			=>$_MMVAR_00471d9a8160317b23,
'locktimes'			=>$_MMVAR_cdd06b1d57685c3340,
'softnotice'			=>$_MMVAR_ea19f88549fddb0b9b,
'muestexit'		=>$_MMVAR_7b23ccb22c0a2536fd	
);

$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
if($_MMVAR_7ca1659d6f01cb3410==0){	
if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("<a href=index.php?action=logout target=_top>请先退出</a>，在登陆时密码框输入超级密码登陆成功后才可以添加软件。");	

$_MMVAR_457f4d15fb626a53a0=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' order by xjlcode asc');
if(empty($_MMVAR_457f4d15fb626a53a0)){
$_MMVAR_c56e6368aa74b6e299=$_MMVAR_a68c41bd0ae0e8ec59[1].'01';
}else{				
$_MMVAR_8ff60a7771c3f2c087=0;
$_MMVAR_330d05618e2171ce93=0;
foreach ($_MMVAR_457f4d15fb626a53a0 as $_MMVAR_9a036496d66f59815a) {
if($_MMVAR_330d05618e2171ce93==0){
if(substr($_MMVAR_9a036496d66f59815a['xjlcode'],5,2)!='01'){
$_MMVAR_c56e6368aa74b6e299=$_MMVAR_a68c41bd0ae0e8ec59[1].'01';
break;
}
$_MMVAR_330d05618e2171ce93=intval($_MMVAR_9a036496d66f59815a['xjlcode']);
}else{
if($_MMVAR_9a036496d66f59815a['xjlcode']-$_MMVAR_330d05618e2171ce93>1){
$_MMVAR_c56e6368aa74b6e299=$_MMVAR_330d05618e2171ce93+1;
break;
}else{
$_MMVAR_330d05618e2171ce93=intval($_MMVAR_9a036496d66f59815a['xjlcode']);
}
}
$_MMVAR_c56e6368aa74b6e299=$_MMVAR_9a036496d66f59815a['xjlcode']+1;
}
}

if($_MMVAR_f797e98fe0aafeb367[0]>8){
$_MMVAR_7a95935f671f06ce97='./phpcode/'.$_MMVAR_c56e6368aa74b6e299.'_'._MMFUN_cf8c11a79575861c0c($_MMVAR_c56e6368aa74b6e299,8).'.php';
if (get_magic_quotes_gpc())
$_MMVAR_b3a5a554b852e248bf = stripslashes($_MMVAR_b3a5a554b852e248bf);
_MMFUN_c39926e035cf150645($_MMVAR_7a95935f671f06ce97,$_MMVAR_b3a5a554b852e248bf);
$_MMVAR_b3a5a554b852e248bf = mysql_real_escape_string($_MMVAR_b3a5a554b852e248bf);
$_MMVAR_273aa5d2794e847523['phpcode']=$_MMVAR_b3a5a554b852e248bf;
}
include(KS_DIR.'/inc/add_table_mfkey.php');
$_MMVAR_510ba85d0c08c74283=_MMFUN_0ddfd0448eb857b2bd($_MMVAR_a68c41bd0ae0e8ec59[1],$_MMVAR_c56e6368aa74b6e299,$_MMVAR_e23c7e328f1c3356dc);
if($_MMVAR_510ba85d0c08c74283!==false){
_MMFUN_c871af7703ca85749e($_MMVAR_a68c41bd0ae0e8ec59[1],$_MMVAR_510ba85d0c08c74283,$_MMVAR_e23c7e328f1c3356dc);
_MMFUN_cd157ac313b1eb1202($_MMVAR_a68c41bd0ae0e8ec59[1],$_MMVAR_510ba85d0c08c74283,$_MMVAR_e23c7e328f1c3356dc);
if($_MMVAR_a68c41bd0ae0e8ec59[0]<3){		
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET rmb=rmb-5 where id='.$_MMVAR_a68c41bd0ae0e8ec59[1],'sync');
_MMFUN_6da5ed7d3a356dcac7('添加新的软件成功<script>var c=window.parent.document.getElementById(\'drmb\').innerHTML;window.parent.document.getElementById(\'drmb\').innerHTML=(c*10-50)/10;</script>','prolist.php?rand='.time());
}else{
_MMFUN_6da5ed7d3a356dcac7('添加新的软件成功');
}
}else{
_MMFUN_6da5ed7d3a356dcac7('添加软件失败');
}
}else{
//exit('debug');
$_MMVAR_d78d568cd8be19f845=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_7ca1659d6f01cb3410);
if(empty($_MMVAR_d78d568cd8be19f845))
_MMFUN_6da5ed7d3a356dcac7("软件不存在");					

if($_MMVAR_f797e98fe0aafeb367[0]>8){
$_MMVAR_7a95935f671f06ce97='./phpcode/'.$_MMVAR_d78d568cd8be19f845['xjlcode'].'_'._MMFUN_cf8c11a79575861c0c($_MMVAR_d78d568cd8be19f845['xjlcode'],8).'.php';
if (get_magic_quotes_gpc())
$_MMVAR_b3a5a554b852e248bf = stripslashes($_MMVAR_b3a5a554b852e248bf);
_MMFUN_c39926e035cf150645($_MMVAR_7a95935f671f06ce97,$_MMVAR_b3a5a554b852e248bf);
$_MMVAR_b3a5a554b852e248bf = mysql_real_escape_string($_MMVAR_b3a5a554b852e248bf);
$_MMVAR_273aa5d2794e847523['phpcode']=$_MMVAR_b3a5a554b852e248bf;
$_MMVAR_273aa5d2794e847523['kbsetting']=$_MMVAR_d63b34a3e107b20126;
}
if($_MMVAR_273aa5d2794e847523['rmbo1']==$_MMVAR_d78d568cd8be19f845['rmbo1'])
$_MMVAR_273aa5d2794e847523['rmbo1']=$_MMVAR_d78d568cd8be19f845['rmbo1'];
if($_MMVAR_273aa5d2794e847523['rmbo2']==$_MMVAR_d78d568cd8be19f845['rmbo2'])
$_MMVAR_273aa5d2794e847523['rmbo2']=$_MMVAR_d78d568cd8be19f845['rmbo2'];
if($_MMVAR_273aa5d2794e847523['rmbo3']==$_MMVAR_d78d568cd8be19f845['rmbo3'])
$_MMVAR_273aa5d2794e847523['rmbo3']=$_MMVAR_d78d568cd8be19f845['rmbo3'];
if($_MMVAR_273aa5d2794e847523['rmbo1s']==$_MMVAR_d78d568cd8be19f845['rmbo1s'])
$_MMVAR_273aa5d2794e847523['rmbo1s']=$_MMVAR_d78d568cd8be19f845['rmbo1s'];
if($_MMVAR_273aa5d2794e847523['rmbo2s']==$_MMVAR_d78d568cd8be19f845['rmbo2s'])
$_MMVAR_273aa5d2794e847523['rmbo2s']=$_MMVAR_d78d568cd8be19f845['rmbo2s'];
if($_MMVAR_273aa5d2794e847523['rmbo3s']==$_MMVAR_d78d568cd8be19f845['rmbo3s'])
$_MMVAR_273aa5d2794e847523['rmbo3s']=$_MMVAR_d78d568cd8be19f845['rmbo3s'];

if($_MMVAR_273aa5d2794e847523['rmb1']==$_MMVAR_d78d568cd8be19f845['rmb1'])
$_MMVAR_273aa5d2794e847523['rmb1']=$_MMVAR_d78d568cd8be19f845['rmb1'];
if($_MMVAR_273aa5d2794e847523['rmb7']==$_MMVAR_d78d568cd8be19f845['rmb7'])
$_MMVAR_273aa5d2794e847523['rmb7']=$_MMVAR_d78d568cd8be19f845['rmb7'];
if($_MMVAR_273aa5d2794e847523['rmb30']==$_MMVAR_d78d568cd8be19f845['rmb30'])
$_MMVAR_273aa5d2794e847523['rmb30']=$_MMVAR_d78d568cd8be19f845['rmb30'];
if($_MMVAR_273aa5d2794e847523['rmb90']==$_MMVAR_d78d568cd8be19f845['rmb90'])
$_MMVAR_273aa5d2794e847523['rmb90']=$_MMVAR_d78d568cd8be19f845['rmb90'];
if($_MMVAR_273aa5d2794e847523['rmb185']==$_MMVAR_d78d568cd8be19f845['rmb185'])
$_MMVAR_273aa5d2794e847523['rmb185']=$_MMVAR_d78d568cd8be19f845['rmb185'];
if($_MMVAR_273aa5d2794e847523['rmb365']==$_MMVAR_d78d568cd8be19f845['rmb365'])
$_MMVAR_273aa5d2794e847523['rmb365']=$_MMVAR_d78d568cd8be19f845['rmb365'];
if($_MMVAR_273aa5d2794e847523['rmb9000']==$_MMVAR_d78d568cd8be19f845['rmb9000'])
$_MMVAR_273aa5d2794e847523['rmb9000']=$_MMVAR_d78d568cd8be19f845['rmb9000'];

if($_MMVAR_273aa5d2794e847523['rmb1s']==$_MMVAR_d78d568cd8be19f845['rmb1s'])
$_MMVAR_273aa5d2794e847523['rmb1s']=$_MMVAR_d78d568cd8be19f845['rmb1s'];
if($_MMVAR_273aa5d2794e847523['rmb7s']==$_MMVAR_d78d568cd8be19f845['rmb7s'])
$_MMVAR_273aa5d2794e847523['rmb7s']=$_MMVAR_d78d568cd8be19f845['rmb7s'];
if($_MMVAR_273aa5d2794e847523['rmb30s']==$_MMVAR_d78d568cd8be19f845['rmb30s'])
$_MMVAR_273aa5d2794e847523['rmb30s']=$_MMVAR_d78d568cd8be19f845['rmb30s'];
if($_MMVAR_273aa5d2794e847523['rmb90s']==$_MMVAR_d78d568cd8be19f845['rmb90s'])
$_MMVAR_273aa5d2794e847523['rmb90s']=$_MMVAR_d78d568cd8be19f845['rmb90s'];
if($_MMVAR_273aa5d2794e847523['rmb185s']==$_MMVAR_d78d568cd8be19f845['rmb185s'])
$_MMVAR_273aa5d2794e847523['rmb185s']=$_MMVAR_d78d568cd8be19f845['rmb185s'];
if($_MMVAR_273aa5d2794e847523['rmb365s']==$_MMVAR_d78d568cd8be19f845['rmb365s'])
$_MMVAR_273aa5d2794e847523['rmb365s']=$_MMVAR_d78d568cd8be19f845['rmb365s'];
if($_MMVAR_273aa5d2794e847523['rmb9000s']==$_MMVAR_d78d568cd8be19f845['rmb9000s'])
$_MMVAR_273aa5d2794e847523['rmb9000s']=$_MMVAR_d78d568cd8be19f845['rmb9000s'];

$_MMVAR_d78d568cd8be19f845['phpcode']=mysql_real_escape_string($_MMVAR_d78d568cd8be19f845['phpcode']);
$_MMVAR_273aa5d2794e847523=array_diff_assoc($_MMVAR_273aa5d2794e847523,$_MMVAR_d78d568cd8be19f845);
if(!empty($_MMVAR_273aa5d2794e847523)){
$_MMVAR_510ba85d0c08c74283=$_MMVAR_9f95914834184aeeae->_MMFUN_33341a6081a0c7b669(TNREG.'_xjl',$_MMVAR_273aa5d2794e847523,'id='.$_MMVAR_7ca1659d6f01cb3410,'sync');
if($_MMVAR_510ba85d0c08c74283!==false){
_MMFUN_6da5ed7d3a356dcac7('编辑软件成功','prolist.php?rand='.time());
}else{
_MMFUN_6da5ed7d3a356dcac7('编辑软件失败');
}
}else{
_MMFUN_6da5ed7d3a356dcac7('您未改变任何数据','prolist.php?rand='.time());    
}
}
}
echo COPYRIGHT;

?>
</body>
</html>