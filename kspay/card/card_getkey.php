<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_53d17c3545aae95b9e,$_MMVAR_7b6896960481a4d007,$_MMVAR_62e617adcaf224a0ce;
$_MMVAR_0ecbe44a2d4417e190=array('action'=>$_MMVAR_7b6896960481a4d007,'userid'=>$_MMVAR_d6858a6d9e9ee80bab);

$_MMVAR_90502be476664717ad=20;

$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);


$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and `id`='.$_MMVAR_135a723a975f2e33a2);	

if(empty($_MMVAR_e9ffef5bdc7675ff63))
_MMFUN_6da5ed7d3a356dcac7('软件未找到select * from '.TNREG.'_xjl where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and `id`='.$_MMVAR_135a723a975f2e33a2);
$_MMVAR_7ca6661cda24ab3ecb='_keys_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_135a723a975f2e33a2;
$_MMVAR_dd3cea76fbef7c1181=strlen($_MMVAR_62e617adcaf224a0ce['agentcode'])/4;
if($_MMVAR_e9ffef5bdc7675ff63['ext1']=='user'){
$_MMVAR_828bd05214aae854fa='SELECT * from `'.TNREG.$_MMVAR_7ca6661cda24ab3ecb.'` where `agentcode`=\''.$_MMVAR_62e617adcaf224a0ce['agentcode'].'\' and `d13int1`<'.$_MMVAR_dd3cea76fbef7c1181.' and `isused`=0 and `keys` like \'Y%\'';
$_MMVAR_0858642e7d9e617905='SELECT * from `'.TNREG.$_MMVAR_7ca6661cda24ab3ecb.'` where `agentcode`=\''.$_MMVAR_62e617adcaf224a0ce['agentcode'].'\' and `d13int1`<'.$_MMVAR_dd3cea76fbef7c1181.' and `isused`=0 and `keys` like \'Y%\'';
}else{
_MMFUN_6da5ed7d3a356dcac7('目前版本多级代理只支持用户模式软件');
$_MMVAR_828bd05214aae854fa='SELECT * from `'.TNREG.$_MMVAR_7ca6661cda24ab3ecb.'` where `agentcode`=\''.$_MMVAR_62e617adcaf224a0ce['agentcode'].'\' and `d13int1`<'.$_MMVAR_dd3cea76fbef7c1181.' and `activetime`=0 and `keys` like \'Y%\'';
$_MMVAR_0858642e7d9e617905='SELECT * from `'.TNREG.$_MMVAR_7ca6661cda24ab3ecb.'` where `agentcode`=\''.$_MMVAR_62e617adcaf224a0ce['agentcode'].'\' and `d13int1`<'.$_MMVAR_dd3cea76fbef7c1181.' and `activetime`=0 and `keys` like \'Z%\'';
}
$_MMVAR_ccbf30ce4ed223fb64=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_828bd05214aae854fa);
$_MMVAR_fb3b43e96ff7907f00=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_0858642e7d9e617905);



?>

<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<form action ="card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&action=getkeysave" method=post name=form1 id=form1 target="_self"  onsubmit="return chkorder()">
<tr class="tb_tip">
<td colspan=2>提卡给自己直销 或 分配卡给下级代理销售</td>
</tr>
<tr class=tb_tr1>
<td>所属软件名</td>
<td><?php echo $_MMVAR_e9ffef5bdc7675ff63['xjlname']?>
<input type="hidden" name="xjlid" value="<?php echo $_MMVAR_e9ffef5bdc7675ff63['id'] ?>">
<input type="hidden" name="xjlname" value="<?php echo $_MMVAR_e9ffef5bdc7675ff63['xjlname'] ?>">					
</td>					
</tr>
<tr class=tb_tr2>
<td>出卡分配给</td>
<td><?php
$_MMVAR_a494fb0cad5a34190d=array(4=>'[S代] ',8=>'[A代] ',12=>'[B代] ',16=>'[C代] ');
echo '<select name=\'sagentid\' id=\'spagentid\' style=\'width:207px;height:22px\'>';		
echo '<option value=\''.$_MMVAR_62e617adcaf224a0ce['id'].'\' selected>自已直销</option>';		
$_MMVAR_8e21b935efd2d49263=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_agent where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and `agentcode` like \''.$_MMVAR_62e617adcaf224a0ce['agentcode'].'____\' order by agentcode asc');
if(!empty($_MMVAR_8e21b935efd2d49263)){					
foreach ($_MMVAR_8e21b935efd2d49263 as $_MMVAR_4380561290f0e5f539) {
echo '<option value='.$_MMVAR_4380561290f0e5f539['id'].'>├'.$_MMVAR_a494fb0cad5a34190d[strlen($_MMVAR_4380561290f0e5f539['agentcode'])].str_repeat('─',strlen($_MMVAR_4380561290f0e5f539['agentcode'])/2-2).$_MMVAR_4380561290f0e5f539['agentname'].'</option>';
}
}
?>
</select> 只有分配后的卡才可以充值</td>
</tr>
<tr class=tb_tr2>
<td>出卡类型与张数</td>
<td>类型<select name='keystr1' id='keystr1' style='width:100px;height:22px'>
<option value="T">天卡</option>
<option value="Z">周卡</option>
<option value="Y">月卡</option>
<option value="J">季卡</option>
<option value="N">年卡</option>
<option value="A">终身卡</option>
</select> 分配卡张数<input type="text" onkeyup="this.value=this.value.replace(/\D/g,'1')" name="keyNum" maxlength="<?php echo $_MMVAR_53d17c3545aae95b9e[0]!==0?'3':'2'?>" value="1"  class="sml1inputText">  <input type=button onclick="" value="查询该卡可分配总数"></td>
</tr>
<tr class=tb_tr1>
<td>标记</td>
<td><input type="text" name="taglv" maxlength="18" value=""  class="inputText"> <b>这个很重要，必填方便查询，建议只用英文加数字</b></td>
</tr>
<tr class=tb_tr2>
<td width=100>备注</td>
<td><textarea style="width:400px;height:80px" name="intro" cols="60"></textarea></td>
</tr>
<tr class=tb_tr2>
<td></td>
<td><input type='submit' name='submit1' id="submit1" value='submit' style='width:0;height:0'><img type="submit" src="..<?php echo KS_PATH_PUBLIC?>/images/submit_out.gif"> <img type="return" src="..<?php echo KS_PATH_PUBLIC?>/images/nosubmit_out.gif"><br></td>
</tr>
</form>
</table>