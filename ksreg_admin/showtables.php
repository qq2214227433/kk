<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','','no','main');
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");

switch ($_MMVAR_7b6896960481a4d007){
Case "optimize":
_MMFUN_b028106b9076e513e3();
break;
Case "repair":
_MMFUN_155f55c0f4a69758fa();
break;
Case "clearlog":
_MMFUN_a6441aba49430a1069();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}


function _MMFUN_b028106b9076e513e3(){
global $_MMVAR_9f95914834184aeeae;

$_MMVAR_b4c9498bad8dcc5ec5=_MMFUN_cc3cf510bffd973b95('tablename','post','no','');
if(empty($_MMVAR_b4c9498bad8dcc5ec5))
_MMFUN_6da5ed7d3a356dcac7('请勾选你要优化的表！');
$_MMVAR_4c79616f6834a6ac5c=implode(",", $_MMVAR_b4c9498bad8dcc5ec5);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('OPTIMIZE TABLE '.$_MMVAR_4c79616f6834a6ac5c);
_MMFUN_6da5ed7d3a356dcac7('以下数据表Optimize优化完成：<br>['.str_replace(',',']<br>[',$_MMVAR_4c79616f6834a6ac5c).']');
}
function _MMFUN_155f55c0f4a69758fa(){
global $_MMVAR_9f95914834184aeeae;

$_MMVAR_b4c9498bad8dcc5ec5=_MMFUN_cc3cf510bffd973b95('tablename','post','no','');
if(empty($_MMVAR_b4c9498bad8dcc5ec5))
_MMFUN_6da5ed7d3a356dcac7('请勾选你要修复的表！');
$_MMVAR_4c79616f6834a6ac5c=implode(",", $_MMVAR_b4c9498bad8dcc5ec5);
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('REPAIR TABLE '.$_MMVAR_4c79616f6834a6ac5c);
_MMFUN_6da5ed7d3a356dcac7('以下数据表Repair修复完成：<br>['.str_replace(',',']<br>[',$_MMVAR_4c79616f6834a6ac5c).']');
}

function _MMFUN_a6441aba49430a1069(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_6e1cd8ad95d18aaaad=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SHOW TABLE STATUS ');
foreach ($_MMVAR_6e1cd8ad95d18aaaad as $_MMVAR_9a036496d66f59815a) {
if(stripos($_MMVAR_9a036496d66f59815a['Name'],TNREG.'_logs_')===0)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('TRUNCATE TABLE `'.$_MMVAR_9a036496d66f59815a['Name'].'`', 'notsync');
}
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('TRUNCATE TABLE `'.TNREG.'_sql`', 'notsync');
_MMFUN_6da5ed7d3a356dcac7(TNREG.'_logs_***_***已清空，'.TNREG.'_sql表已清空！');
}

function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;
?>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<form action="?rnd=1" method="post" id="f2" name="f2">
<tr class="tb_tip">
<td colspan="8">数据库优化，按实际情况(15至30天)优化一次</td>

</tr>
<tr class="tb_header"><td>表名</td><td>类型</td><td>索引大小</td><td>数据大小</td><td><input name="chkall" type="checkbox" value="on" onclick=CheckAll(this.form)>多余</td><td>记录数</td><td>AuTo Id</td><td>更新时间</td></tr>
<?php
$_MMVAR_6e1cd8ad95d18aaaad=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SHOW TABLE STATUS ');
echo '';
$_MMVAR_8ff60a7771c3f2c087=1;
$_MMVAR_a7204273a7fd0dd8aa=0;
$_MMVAR_c67063ff63788c5e2b=0;
$_MMVAR_711d60731a9d8adcbf=0;
$_MMVAR_57948cc2447ef35afd=0;
foreach ($_MMVAR_6e1cd8ad95d18aaaad as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;
$_MMVAR_a7204273a7fd0dd8aa=$_MMVAR_a7204273a7fd0dd8aa+$_MMVAR_9a036496d66f59815a['Data_length'];
$_MMVAR_c67063ff63788c5e2b=$_MMVAR_c67063ff63788c5e2b+$_MMVAR_9a036496d66f59815a['Index_length'];

$_MMVAR_d168c7f05662afafc7=round($_MMVAR_9a036496d66f59815a['Data_free']/1024,2);
$_MMVAR_563703ce476c396aaa='';
if($_MMVAR_d168c7f05662afafc7>50){
$_MMVAR_563703ce476c396aaa='style=\'background:#F5A2AE\'';
}elseif($_MMVAR_d168c7f05662afafc7>1){
$_MMVAR_563703ce476c396aaa='style=\'background:#F5B16E\'';

}
if(stripos($_MMVAR_9a036496d66f59815a['Name'],'_keys_'))
$_MMVAR_711d60731a9d8adcbf=$_MMVAR_711d60731a9d8adcbf+$_MMVAR_9a036496d66f59815a['Rows'];
if(stripos($_MMVAR_9a036496d66f59815a['Name'],'_logs_'))$_MMVAR_57948cc2447ef35afd=$_MMVAR_57948cc2447ef35afd+$_MMVAR_9a036496d66f59815a['Rows'];
echo '<tr  class=tb_tr'.($_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2).'>';
echo '<td>'.$_MMVAR_9a036496d66f59815a['Name'].'</td>';
echo '<td>'.$_MMVAR_9a036496d66f59815a['Engine'].'</td>';
echo '<td>'._MMFUN_518660ac175acec3c6($_MMVAR_9a036496d66f59815a['Index_length']).'</td>';
echo '<td>'._MMFUN_518660ac175acec3c6($_MMVAR_9a036496d66f59815a['Data_length']).'</td>';
echo '<td '.$_MMVAR_563703ce476c396aaa.'><input id='.$_MMVAR_9a036496d66f59815a['Name'].' type=\'checkbox\' '.($_MMVAR_d168c7f05662afafc7>1?'checked':'').' name=\'tablename[]\' value=\'`'.$_MMVAR_9a036496d66f59815a['Name'].'`\'  /><label for='.$_MMVAR_9a036496d66f59815a['Name'].'>'._MMFUN_518660ac175acec3c6($_MMVAR_9a036496d66f59815a['Data_free']).'</label></td>';
echo '<td>'.$_MMVAR_9a036496d66f59815a['Rows'].'</td>';
echo '<td>'.$_MMVAR_9a036496d66f59815a['Auto_increment'].'</td>';
echo '<td>'.$_MMVAR_9a036496d66f59815a['Update_time'].'</td>';
echo '</tr>';
}
echo '<tr class=\'tb_header\'><td colspan=\'8\' align=center>软件：'.(($_MMVAR_8ff60a7771c3f2c087-15)/2).'个，卡：'.$_MMVAR_711d60731a9d8adcbf.'个，日志：'.$_MMVAR_57948cc2447ef35afd.'条，索引：'._MMFUN_518660ac175acec3c6($_MMVAR_c67063ff63788c5e2b).'，数据：'._MMFUN_518660ac175acec3c6($_MMVAR_a7204273a7fd0dd8aa).'，共计：'._MMFUN_518660ac175acec3c6($_MMVAR_c67063ff63788c5e2b+$_MMVAR_a7204273a7fd0dd8aa).'&nbsp;&nbsp;&nbsp;&nbsp;<input name=\'action\' type=\'radio\' value=\'optimize\' checked=\'checked\'/>Optimize优化 <input name=\'action\' type=\'radio\' value=\'repair\' />Repair修复 <input type=\'image\' align=absmiddle src=\''._MMFUN_dfbc78476298e0e159().'/images/batch.gif\'>&nbsp;&nbsp;&nbsp;&nbsp;<a href=showtables.php?action=clearlog>备份前清理日志</a></td></tr></form>';
echo '</table>';

echo '<script language=\'javascript\' src=\''._MMFUN_dfbc78476298e0e159().'/js/keylist.js\'></script>';


}

function _MMFUN_518660ac175acec3c6($_MMVAR_8ff60a7771c3f2c087){
if($_MMVAR_8ff60a7771c3f2c087>=1048576)
return round($_MMVAR_8ff60a7771c3f2c087/1048576,2).'M';
return round($_MMVAR_8ff60a7771c3f2c087/1024,2).'K';

}

echo COPYRIGHT;
?>
</body>
</html>