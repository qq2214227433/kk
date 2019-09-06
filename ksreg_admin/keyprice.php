<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');

$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!",'report');

if(PRICESET==1){
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
if($_MMVAR_f797e98fe0aafeb367[0]<9)
_MMFUN_6da5ed7d3a356dcac7("需要超级管理员身份。");
}	

switch ($_MMVAR_7b6896960481a4d007){
Case "addsave":
_MMFUN_e171b0d7550aeea85e();
break;
Case "save":
_MMFUN_4321b004899d1283fa();
break;
Case "del":
_MMFUN_cf35fdc0f8f9f66461();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}
function _MMFUN_cf35fdc0f8f9f66461(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','','int',0);
if($_MMVAR_135a723a975f2e33a2==0)
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误1!");

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误2!");
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from '.TNREG.'_keyprice where id='.$_MMVAR_7ca1659d6f01cb3410,'sync');
_MMFUN_6da5ed7d3a356dcac7("删除成功!",'keyprice.php?action=main&sxjlid='.$_MMVAR_135a723a975f2e33a2.'&rand='.time());
}

function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();

$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
if($_MMVAR_135a723a975f2e33a2==0)
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误1!");

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误2!");

$_MMVAR_6acb770a66d220e25e='SELECT '.TNREG.'_keyprice.*, '.TNREG.'_keyattribute.keyname,'.TNREG.'_keyattribute.keycday, '.TNREG.'_keyattribute.keytimes from '.TNREG.'_keyprice,'.TNREG.'_keyattribute where '.TNREG.'_keyprice.keyattrid='.TNREG.'_keyattribute.id and '.TNREG.'_keyprice.userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and '.TNREG.'_keyprice.softid='.$_MMVAR_135a723a975f2e33a2.' order by '.TNREG.'_keyprice.id asc';

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
var pdata="sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2;?>&id="+kid+"&opid=1&linknum="+$("#linknum"+kid).val()+"&keyprice1="+$("#keyprice1"+kid).val()+"&keyprice2="+$("#keyprice2"+kid).val()+"&keyprice3="+$("#keyprice3"+kid).val();

$.ajax({type: "POST",url: "?action=save&rand="+sTime12(),data:pdata,
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


<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="9"><?php echo $_MMVAR_e9ffef5bdc7675ff63['xjlname']?> 售价列表</td>
</tr>
<tr class="tb_header">
<td>ID</td>
<td>卡类名</td>
<td>天数</td>
<td>次数</td>			
<td>连接数</td>
<td>零售价</td>
<td>代理价A</td>
<td>代理价B</td>
<td>保存</td>
</tr>
<?php
if(!empty($_MMVAR_5a0f5f64cd15c205df)){		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;
?>
<tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td><?php echo $_MMVAR_9a036496d66f59815a['id']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['keyname']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['keycday']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['keytimes']?></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="<?php echo $_MMVAR_9a036496d66f59815a['linknum'] ?>" name="linknum" id="linknum<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>" <?php if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user')echo ' disabled'?>></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="<?php echo $_MMVAR_9a036496d66f59815a['keyprice1'] ?>" name="keyprice1" id="keyprice1<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="<?php echo $_MMVAR_9a036496d66f59815a['keyprice2'] ?>" name="keyprice2" id="keyprice2<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="<?php echo $_MMVAR_9a036496d66f59815a['keyprice3'] ?>" name="keyprice3" id="keyprice3<?php echo $_MMVAR_9a036496d66f59815a['id'] ?>"></td>
<td><a kid="<?php echo $_MMVAR_9a036496d66f59815a['id']?>" op="0" class="saveintro" href="###" >保存</a>  |  <a href="?action=del&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&id=<?php echo $_MMVAR_9a036496d66f59815a['id']?>" >删除</a></td>
</tr>
<?php
}
}

$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_keyattribute where id>9 and keycday<>\'0\' and issystem=0 order by id asc';

$_MMVAR_017a7aa62bbb0ee377=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);

?>
<tr class="tb_tr1">
<td colspan="9"><font color=green>━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</font></td>
</tr>
<form action="?action=addsave&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>" method=post id=fadd2 name=fadd2>
<tr class="tb_tr2">
<td>添加</td>
<td colspan=3><select name="keyattrid" id="keyattrid" style="width:300px;height:22px">

<?php					
foreach ($_MMVAR_017a7aa62bbb0ee377 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'].'>'.$_MMVAR_9a036496d66f59815a['keyname'].'--'.$_MMVAR_9a036496d66f59815a['keycday'].'天--'.$_MMVAR_9a036496d66f59815a['keytimes'].'次</option>';
}

?></select></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="1" name="linknum" id="linknum" <?php if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user')echo ' disabled'?>></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="0.00" name="keyprice1" id="keyprice1"></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="0.00" name="keyprice2" id="keyprice2"></td>
<td><input type="text" maxlength="8"  class="sml2inputText" value="0.00" name="keyprice3" id="keyprice3"></td>
<td><input type='submit' name='submit2' id="submit2" value='submit' style='display:none;width:0;height:0'><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif"></td>
</tr>
</form>

</table>	
<?php
}

function _MMFUN_e171b0d7550aeea85e(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();

$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
if($_MMVAR_135a723a975f2e33a2==0)
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误1!");

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误2!");


$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','post','int',0);
$_MMVAR_83753aab6fe3538a25=_MMFUN_cc3cf510bffd973b95('keyattrid','post','int',0);
$_MMVAR_b3cf8fb9a20804256b=_MMFUN_cc3cf510bffd973b95('linknum','post','int',1);
$_MMVAR_a8d39e6eed1312ab86=_MMFUN_cc3cf510bffd973b95('keyprice1','post','num',0.00);
$_MMVAR_148702482897de83b2=_MMFUN_cc3cf510bffd973b95('keyprice2','post','num',0.00);
$_MMVAR_83cb54d003765a47f0=_MMFUN_cc3cf510bffd973b95('keyprice3','post','num',0.00);


$_MMVAR_017a7aa62bbb0ee377=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_keyprice where softid='.$_MMVAR_135a723a975f2e33a2.' and keyattrid='.$_MMVAR_83753aab6fe3538a25.' and linknum='.$_MMVAR_b3cf8fb9a20804256b);
if(!empty($_MMVAR_017a7aa62bbb0ee377))
_MMFUN_6da5ed7d3a356dcac7("添加失败，要添加的售卡类在列表中已经存在!");

$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_keyprice` (`userid`,`softid`, `keyattrid`,`linknum`,`keyprice1`,`keyprice2`,`keyprice3`) VALUES ('.$_MMVAR_a68c41bd0ae0e8ec59[1].','.$_MMVAR_135a723a975f2e33a2.','.$_MMVAR_83753aab6fe3538a25.','.$_MMVAR_b3cf8fb9a20804256b.','.$_MMVAR_a8d39e6eed1312ab86.','.$_MMVAR_148702482897de83b2.','.$_MMVAR_83cb54d003765a47f0.')','sync');


_MMFUN_6da5ed7d3a356dcac7("添加成功!",'keyprice.php?action=main&sxjlid='.$_MMVAR_135a723a975f2e33a2.'&rand='.time());


}

function _MMFUN_4321b004899d1283fa(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();

$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
if($_MMVAR_135a723a975f2e33a2==0)
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误1!");

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1].' and id='.$_MMVAR_135a723a975f2e33a2);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7("软件ID参数错误2!");

if(empty($_MMVAR_8ba3d4eca95ad63bc6))ob_clean();	
$_MMVAR_7ca1659d6f01cb3410=_MMFUN_cc3cf510bffd973b95('id','post','int',0);
$_MMVAR_b3cf8fb9a20804256b=_MMFUN_cc3cf510bffd973b95('linknum','post','int',1);
$_MMVAR_a8d39e6eed1312ab86=_MMFUN_cc3cf510bffd973b95('keyprice1','post','num',0.00);
$_MMVAR_148702482897de83b2=_MMFUN_cc3cf510bffd973b95('keyprice2','post','num',0.00);
$_MMVAR_83cb54d003765a47f0=_MMFUN_cc3cf510bffd973b95('keyprice3','post','num',0.00);
$_MMVAR_bc1f2ff23c51e33bc7=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT keyattrid from '.TNREG.'_keyprice where id='.$_MMVAR_7ca1659d6f01cb3410);

$_MMVAR_017a7aa62bbb0ee377=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_keyprice where softid='.$_MMVAR_135a723a975f2e33a2.' and keyattrid='.$_MMVAR_bc1f2ff23c51e33bc7['keyattrid'].' and linknum='.$_MMVAR_b3cf8fb9a20804256b.' and id<>'.$_MMVAR_7ca1659d6f01cb3410);

if(!empty($_MMVAR_017a7aa62bbb0ee377))
exit("修改失败，目标售卡类在列表中已经存在!");

$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_keyprice` set `linknum`='.$_MMVAR_b3cf8fb9a20804256b.',`keyprice1`='.$_MMVAR_a8d39e6eed1312ab86.',`keyprice2`='.$_MMVAR_148702482897de83b2.',`keyprice3`='.$_MMVAR_83cb54d003765a47f0.' where softid='.$_MMVAR_135a723a975f2e33a2.' and `id`='.$_MMVAR_7ca1659d6f01cb3410,'sync');
exit('ok');


}

echo COPYRIGHT;

?>
</body>
</html>