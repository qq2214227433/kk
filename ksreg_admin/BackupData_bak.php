<?php 
	//生成日期:2011-11-11 16点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
set_time_limit(0);
$_MMVAR_3c1f0f2400c1de9f65=_MMFUN_cc3cf510bffd973b95('sps','get','no','main');
if(SUPERPASSWORD!=md5($_MMVAR_3c1f0f2400c1de9f65)){
if(_MMFUN_44c1eaa638cc1b7de2(9))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!");
}

$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');
if($_MMVAR_7b6896960481a4d007=="main"){
include(KS_DIR.'/inc/head.php');
?>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class='tb_tr2'>
<td><a href="?action=down" target="_blank" id="downmysql"><u>备份数据库（右键，目标另存为）</u></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=./inc/backupdata.rar target=_blank><u>远程每天自动备份数据库工具下载</u></a></td>
</tr>		
<tr class='tb_tr1'>
<td>你的远程备份API接口为： <u><?php echo _MMFUN_e58f74c5ea3d676934().KS_PATH.'/BackupData.php?action=down&sps=你的超级密码'?></u></td>
</tr>

</table>
<script>
$("#downmysql").mousedown(function(e){
if(e.which == 1){
$.msgbox({height:100,width:400,content:{type:'text',title:'数据库下载提示',content: '<br>请在该链接上单击右键，在弹出菜单中选择 目标另存为(A)...'}});
event.cancelBubble = true;
}
})

</script>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td>如何使用备份的数据恢复数据库？</td>
</tr>
<tr class='tb_tr1'>
<td>本系统不提供数据还原工具，请使用主流的管理mysql的网页程序phpmyadmin来操作<br>通常情况下主机服务商都有提供phpmyadmin管理链接的</td>
</tr>
<tr class='tb_tr2'>
<td>如果你实在找不到phpmyadmin的管理工具在哪，可以下载一个，<a href=http://www.baidu.com/baidu?word=phpmyadmin+%E5%A4%9A%E8%AF%AD%E8%A8%80%E7%89%88 target=_blank>点击这里搜索并下载</a><br>
下载完后，解压，把phpmyadmin文件夹传到你网站即可，http://域名/phpmyadmin/ 然后输入数据库用户名和密码，点击登陆即可</td>
</tr>
<tr class='tb_tr1'>
<td>在你的电脑上解压备份的zip文件，会找到一个sql备份文件</td>
</tr>
<tr class='tb_tr2'>
<td>登陆phpmyadmin后，左边有一个数据库列表<br>
在左边列表点击或选择你想还原的数据库，稍等一会，右边会出现新的内容和横向菜单<br>
在横向菜单中找到按 “导入”或“Import”按钮，单击它<br>
此时出现的新界面中会有一个让你选择文件的按钮，单击它选择你电脑里的sql备份文件，下边的文件字符集选择utf8<br>
在该页最右下角应该有一个执行按钮，单击它，现在你要做的就是等待，此时phpmyadmin正在帮你还原数据库。</td>
</tr>

</table>
<?php
echo COPYRIGHT.'</body></html>';
}else if($_MMVAR_7b6896960481a4d007=="down"){
$_MMVAR_51a73cdb6a136a1e1b ="";
$_MMVAR_a31a54e0d71645e9d7=date('Y-m-d_H-i-s')._MMFUN_cf8c11a79575861c0c(rand(10000,99999).time());

$_MMVAR_bd06c4806eda5f5a83="-- KSREG网络验证备份系统\r\n";
$_MMVAR_bd06c4806eda5f5a83.="-- \r\n";
$_MMVAR_bd06c4806eda5f5a83.="-- 备份日期: ".date('Y年 m月 d日 H:i')."\r\n";
$_MMVAR_bd06c4806eda5f5a83.="-- 主机: ".$_MMVAR_abb6c66b467898e5c7['dbhost']."  [".str_replace("http://","",_MMFUN_e58f74c5ea3d676934())."]\r\n";
$_MMVAR_bd06c4806eda5f5a83.="-- 数据库: ".$_MMVAR_abb6c66b467898e5c7['dbname']."\r\n";
$_MMVAR_bd06c4806eda5f5a83.="-- --------------------------------------------------------\r\n\r\n";
file_put_contents($_MMVAR_abb6c66b467898e5c7['dbname'].'.sql',$_MMVAR_bd06c4806eda5f5a83);
$_MMVAR_6e1cd8ad95d18aaaad=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SHOW TABLE STATUS ');
foreach ($_MMVAR_6e1cd8ad95d18aaaad as $_MMVAR_9a036496d66f59815a) {
if(TNREG.'_'==substr($_MMVAR_9a036496d66f59815a['Name'],0,strlen(TNREG.'_')))
_MMFUN_ddcca0842bd9672f6d($_MMVAR_9a036496d66f59815a['Name']);
}

include_once('./inc/pclzip.lib.php');
$_MMVAR_2c27cbe01a3a85199c = new PclZip($_MMVAR_a31a54e0d71645e9d7.'.zip');
$_MMVAR_73198f32bcf7fc56e3 = $_MMVAR_2c27cbe01a3a85199c->create($_MMVAR_abb6c66b467898e5c7['dbname'].'.sql');
if ($_MMVAR_73198f32bcf7fc56e3 == 0) {
die("Error : ".$_MMVAR_2c27cbe01a3a85199c->errorInfo(true));
}


unlink($_MMVAR_abb6c66b467898e5c7['dbname'].'.sql');
ob_end_clean();
$_MMVAR_a4ee65ad28fc872c90=file_get_contents($_MMVAR_a31a54e0d71645e9d7.'.zip');	
unlink($_MMVAR_a31a54e0d71645e9d7.'.zip');

header('Content-Type: application/zip');
header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Content-Disposition: attachment; filename='.YH.$_MMVAR_abb6c66b467898e5c7['dbname'].'.zip'.YH);
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
echo $_MMVAR_a4ee65ad28fc872c90;
exit();
}


function _MMFUN_ddcca0842bd9672f6d($_MMVAR_1d36e439a20c35002e)   {
global $_MMVAR_9f95914834184aeeae,$_MMVAR_abb6c66b467898e5c7;
$_MMVAR_443c08446faec1a81f="";
$_MMVAR_e3aa8279a11c6fe03f = $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df("SHOW CREATE TABLE `".$_MMVAR_1d36e439a20c35002e."`");
$_MMVAR_05565efbac4607dda2 = $_MMVAR_9f95914834184aeeae->_MMFUN_317b4de25892e8590f($_MMVAR_e3aa8279a11c6fe03f);
$_MMVAR_443c08446faec1a81f .= "DROP TABLE IF EXISTS `".$_MMVAR_1d36e439a20c35002e."`;\r\n";
$_MMVAR_53f330b6c52e29ea0a=str_replace("\r","",$_MMVAR_05565efbac4607dda2[1]);
$_MMVAR_53f330b6c52e29ea0a=str_replace("\n","\r\n",$_MMVAR_53f330b6c52e29ea0a);
$_MMVAR_443c08446faec1a81f .= $_MMVAR_53f330b6c52e29ea0a.";\r\n";
$_MMVAR_14b6f8860fc22a7eda=fopen($_MMVAR_abb6c66b467898e5c7['dbname'].'.sql',"a");
if($_MMVAR_14b6f8860fc22a7eda){
if(!fwrite($_MMVAR_14b6f8860fc22a7eda,$_MMVAR_443c08446faec1a81f))
exit($_MMVAR_abb6c66b467898e5c7['dbname'].'.sql文件不可写');
}else{
exit("打开文件".$_MMVAR_abb6c66b467898e5c7['dbname'].'.sql失败');
}
fclose($_MMVAR_14b6f8860fc22a7eda);
unset($_MMVAR_e3aa8279a11c6fe03f,$_MMVAR_05565efbac4607dda2);
if(TNREG.'_ip'!=substr($_MMVAR_1d36e439a20c35002e,0,strlen(TNREG.'_ip')) && TNREG.'_testkey'!=substr($_MMVAR_1d36e439a20c35002e,0,strlen(TNREG.'_testkey')) && TNREG.'_sql'!=substr($_MMVAR_1d36e439a20c35002e,0,strlen(TNREG.'_sql')) && TNREG.'_logs'!=substr($_MMVAR_1d36e439a20c35002e,0,strlen(TNREG.'_sqls'))) {
$_MMVAR_cd56d5798f964c7d2b='INSERT INTO `'.$_MMVAR_1d36e439a20c35002e.'` (';
$_MMVAR_ffc655af1cb8f0f6c1='';
$_MMVAR_8d95eb4203d47ae5fa = $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df("SHOW COLUMNS FROM `".$_MMVAR_1d36e439a20c35002e."`");
while($_MMVAR_5a0f5f64cd15c205df=mysql_fetch_array($_MMVAR_8d95eb4203d47ae5fa,MYSQL_ASSOC))   { 
$_MMVAR_cd56d5798f964c7d2b.= $_MMVAR_ffc655af1cb8f0f6c1.'`'.$_MMVAR_5a0f5f64cd15c205df['Field'].'`';
$_MMVAR_ffc655af1cb8f0f6c1=',';
} 
$_MMVAR_cd56d5798f964c7d2b.=") VALUES \r\n";
$_MMVAR_35e633c7b2188d54c0=0;
$_MMVAR_bad0617793fee773d6=false;
while($_MMVAR_bad0617793fee773d6==false){
$_MMVAR_1bfdc6fc6973c2ef64="";		
$_MMVAR_85920951bceca5bb7a=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from `'.$_MMVAR_1d36e439a20c35002e.'` order by id asc LIMIT '.$_MMVAR_35e633c7b2188d54c0.','.($_MMVAR_35e633c7b2188d54c0+300),2);
if(!empty($_MMVAR_85920951bceca5bb7a)){
$_MMVAR_d617bb45d3bfec5ea4=count($_MMVAR_85920951bceca5bb7a);
$_MMVAR_8428b84a291216587c=",\r\n";
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_85920951bceca5bb7a as $_MMVAR_9a036496d66f59815a) {
if($_MMVAR_8ff60a7771c3f2c087==$_MMVAR_d617bb45d3bfec5ea4-1)
$_MMVAR_8428b84a291216587c=";\r\n";
$_MMVAR_1bfdc6fc6973c2ef64.="(";
$_MMVAR_35aad221a419656480=count($_MMVAR_9a036496d66f59815a);
$_MMVAR_730f7a817f9eb2c56b='';
$_MMVAR_8ff60a7771c3f2c087=$_MMVAR_8ff60a7771c3f2c087+1;
for($_MMVAR_21a9f2323f653b8d2f=0;$_MMVAR_21a9f2323f653b8d2f<$_MMVAR_35aad221a419656480;$_MMVAR_21a9f2323f653b8d2f++){
if($_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f]===NULL){
$_MMVAR_1bfdc6fc6973c2ef64.=$_MMVAR_730f7a817f9eb2c56b.'NULL';
}else{
$_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f]=str_replace('\\','\\\\',$_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f]);
$_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f]=str_replace('\'','\\\'',$_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f]);
$_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f]=str_replace("\r",'\\r',$_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f]);
$_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f]=str_replace("\n",'\\n',$_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f]);
$_MMVAR_1bfdc6fc6973c2ef64.=$_MMVAR_730f7a817f9eb2c56b.'\''.$_MMVAR_9a036496d66f59815a[$_MMVAR_21a9f2323f653b8d2f].'\'';
}
$_MMVAR_730f7a817f9eb2c56b=",";
}
$_MMVAR_1bfdc6fc6973c2ef64.=")".$_MMVAR_8428b84a291216587c;
}
unset($_MMVAR_85920951bceca5bb7a);
$_MMVAR_1bfdc6fc6973c2ef64=$_MMVAR_cd56d5798f964c7d2b.$_MMVAR_1bfdc6fc6973c2ef64;
if($_MMVAR_d617bb45d3bfec5ea4<300){
$_MMVAR_bad0617793fee773d6=true;
}else{
$_MMVAR_35e633c7b2188d54c0=$_MMVAR_35e633c7b2188d54c0+$_MMVAR_d617bb45d3bfec5ea4;
}
}else{
$_MMVAR_bad0617793fee773d6=true;
}
if(!empty($_MMVAR_1bfdc6fc6973c2ef64)){
$_MMVAR_14b6f8860fc22a7eda=fopen($_MMVAR_abb6c66b467898e5c7['dbname'].'.sql',"a");
if($_MMVAR_14b6f8860fc22a7eda){
if(!fwrite($_MMVAR_14b6f8860fc22a7eda,$_MMVAR_1bfdc6fc6973c2ef64))
exit($_MMVAR_abb6c66b467898e5c7['dbname'].'.sql文件不可写');
}else{
exit('打开文件'.$_MMVAR_abb6c66b467898e5c7['dbname'].'.sql失败');
}
fclose($_MMVAR_14b6f8860fc22a7eda);	
unset($_MMVAR_1bfdc6fc6973c2ef64);
}		
}
}	
return "";
}
?>