<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');
if(_MMFUN_44c1eaa638cc1b7de2(1))
_MMFUN_6da5ed7d3a356dcac7("无权限访问该内容!",'report');
$_MMVAR_7b6896960481a4d007=_MMFUN_cc3cf510bffd973b95('action','get','no','main');

switch ($_MMVAR_7b6896960481a4d007){
Case "getip":
_MMFUN_2eb9ad1d416d1fcfb2();
break;
Case "totallog":
_MMFUN_11fcd5769e459dea80();
break;
default:
_MMFUN_f845b4be82a2064ad0();
}
function _MMFUN_2eb9ad1d416d1fcfb2(){
$_MMVAR_9ad68792a8b0462ea7=_MMFUN_cc3cf510bffd973b95('ip','get','no','main');
ob_clean();	
exit('$.msgbox({width:500,height:120,title:\''.$_MMVAR_9ad68792a8b0462ea7.'的物理地址\',content:{type:\'alert\', content:\''._MMFUN_7aa57df398097c635a($_MMVAR_9ad68792a8b0462ea7).'\'}});');
}
function _MMFUN_11fcd5769e459dea80(){	
global $_MMVAR_9f95914834184aeeae,$_MMVAR_8ba3d4eca95ad63bc6;	
if($_MMVAR_8ba3d4eca95ad63bc6==false)ob_clean();
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);
$_MMVAR_050fdb56422d02ffca=strtotime(date("Y-m-d").' 00:00:00');

$_MMVAR_6acb770a66d220e25e='select COUNT( DISTINCT `mac` )  as tnum from `'.TNREG.'_logs_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.'` where `addtime`>'.$_MMVAR_050fdb56422d02ffca;
$_MMVAR_ea4fb094a8c717abcf=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_6acb770a66d220e25e);
if(!empty($_MMVAR_ea4fb094a8c717abcf)){
$_MMVAR_5a86cdf986a8f25ca5=$_MMVAR_ea4fb094a8c717abcf['tnum'];
}else{
$_MMVAR_5a86cdf986a8f25ca5=0;
}
$_MMVAR_6acb770a66d220e25e='select COUNT( DISTINCT `ip` )  as tnum from `'.TNREG.'_logs_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.'` where `addtime`>'.$_MMVAR_050fdb56422d02ffca;
$_MMVAR_6a1430ace8989c63f8=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4($_MMVAR_6acb770a66d220e25e);
if(!empty($_MMVAR_ea4fb094a8c717abcf)){
$_MMVAR_9ad68792a8b0462ea7=$_MMVAR_6a1430ace8989c63f8['tnum'];
}else{
$_MMVAR_9ad68792a8b0462ea7=0;
}
exit('$.msgbox({width:500,height:120,title:\'统计结果\',content:{type:\'alert\', content:\'今天总共有'.$_MMVAR_5a86cdf986a8f25ca5.'张网卡和'.$_MMVAR_9ad68792a8b0462ea7.'个IP的日志\'}});');
}


function _MMFUN_f845b4be82a2064ad0(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_499c21f64bdc00142b=array(
'1'=>'超出试用时间',
'2'=>'超出试用次数',
'3'=>'试用首次启动',
'4'=>'试用二次启动',
'5'=>'试用首次激活',
'6'=>'代理未付款卡被冻结',
'7'=>'客户端ID超出允许的范围',
'8'=>'多开绑机卡 启动，激活绑定',
'9'=>'多开不绑机卡 启动，激活',
'10'=>'多开绑机卡 换服，绑定',
'11'=>'禁止自动解绑',
'12'=>'其它机器在线，禁止自动解绑',
'13'=>'机器码不符连接中断',
'14'=>'其它电脑上有客户端标识一样的用户正在运行软件',
'15'=>'本机上已经客户端标识一样的程序在运行',
'16'=>'多开不绑机卡启动',
'17'=>'多开绑机卡启动',
'18'=>'开绑机卡启动，二次绑定',
'19'=>'Y二次没在线记录？',
'20'=>'N二次没在线记录？',
'21'=>'在线码错误连接中断',
'22'=>'机器码不符',
'23'=>'不允许客户端解绑',
'24'=>'在线码错误连接中断',
'25'=>'启动，激活绑定',
'26'=>'启动，绑定',
'27'=>'启动软件',
'28'=>'启动软件，自动解并绑',
'29'=>'自动换服'
);		
$_MMVAR_90502be476664717ad=20;
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
$_MMVAR_f797e98fe0aafeb367=_MMFUN_7895b9f74cd3efed19();
$_MMVAR_0ecbe44a2d4417e190=array();
$_MMVAR_2dc0051b4a3fa32b83=_MMFUN_cc3cf510bffd973b95('page','','int',1);
$_MMVAR_eea934454d241a2c72=_MMFUN_cc3cf510bffd973b95('sqmode','','int',0);
$_MMVAR_be0ff7fbb4af7d07f5=_MMFUN_cc3cf510bffd973b95('key','','sql','');
$_MMVAR_135a723a975f2e33a2=_MMFUN_cc3cf510bffd973b95('sxjlid','','int',0);

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
if($_MMVAR_135a723a975f2e33a2==0){					
$_MMVAR_135a723a975f2e33a2=$_MMVAR_e9ffef5bdc7675ff63[0]['id'];
}
$_MMVAR_0ecbe44a2d4417e190['sqmode']=$_MMVAR_eea934454d241a2c72;	
if($_MMVAR_2dc0051b4a3fa32b83>5000){
if($_MMVAR_eea934454d241a2c72==0){
$_MMVAR_eea934454d241a2c72=1;
$_MMVAR_0ecbe44a2d4417e190['sqmode']=$_MMVAR_eea934454d241a2c72;
}
}

$_MMVAR_6acb770a66d220e25e='select * from `'.TNREG.'_logs_'.$_MMVAR_a68c41bd0ae0e8ec59[1].'_'.$_MMVAR_135a723a975f2e33a2.'`';

if(!empty($_MMVAR_be0ff7fbb4af7d07f5)){
$_MMVAR_6acb770a66d220e25e.=' where `keys` like \''.$_MMVAR_be0ff7fbb4af7d07f5.'%\' ';
$_MMVAR_0ecbe44a2d4417e190['key']=$_MMVAR_be0ff7fbb4af7d07f5;
}

include_once KS_DIR.'/inc/runtime.php';
$_MMVAR_77e413c0c731500d10= new runtime;
$_MMVAR_77e413c0c731500d10->_MMFUN_75ca9dc8ef905464ef(); 
if($_MMVAR_eea934454d241a2c72==1){
$_MMVAR_4fa302d033574933a4=5000000;
if($_MMVAR_2dc0051b4a3fa32b83==250000){
$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
$_MMVAR_2dc0051b4a3fa32b83=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
}
}else{	
$_MMVAR_4fa302d033574933a4=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e);
}
$_MMVAR_4a134686cf4c02ac8d=$_MMVAR_4fa302d033574933a4;
$_MMVAR_4fa302d033574933a4=Abs(floor($_MMVAR_4fa302d033574933a4/$_MMVAR_90502be476664717ad*(-1)));
$_MMVAR_6acb770a66d220e25e.=' order by id desc LIMIT '.($_MMVAR_2dc0051b4a3fa32b83-1)*$_MMVAR_90502be476664717ad.','.$_MMVAR_90502be476664717ad;

$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);
$_MMVAR_77e413c0c731500d10->_MMFUN_2ff52b47fa1890bb43();
?>
<form action="?action=main" method="post" target="_self" id="f1" name="f1">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tr2">
<td><input name="sqmode" type="checkbox" title="快速模式不显示记录总数" value="1" <?php if($_MMVAR_eea934454d241a2c72==1)echo 'checked'?>/><label help=pub>快速模式</label>，<?php
echo '<select name=\'sxjlid\' id=\'xjlid\' style=\'width:120px;height:22px\'>';
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'];
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_135a723a975f2e33a2){
echo ' selected';
$_MMVAR_e4019df8eca2c2ac2c=$_MMVAR_9a036496d66f59815a['xjlname'];
$_MMVAR_0ecbe44a2d4417e190['sxjlid']=$_MMVAR_135a723a975f2e33a2;
}
echo '>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
?>
</select>，
卡号<input name="key" type="text" value="" class="inputText2" />
<input type='submit' name='submit2' id="submit2" value='submit' style='width:0;height:0' /><img type="submit" src="<?php echo _MMFUN_dfbc78476298e0e159()?>/images/submit_out.gif" align="absmiddle" />    <input type="button" style="border:1px solid #ccc;padding:3px 8px" value="当日网卡和IP统计" id="totalmac"> <font color=red>点击IP可查看IP信息</font></td>
</tr>
</table>
</form>
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan="8"><?php echo $_MMVAR_e4019df8eca2c2ac2c?> → 终端用户连接安全日志<?php
if ($_MMVAR_eea934454d241a2c72==1){
echo '快速模式不统计总计录数。';
}else{
echo '共查询到'.$_MMVAR_4a134686cf4c02ac8d.'条记录。';
}?>[查询用时: <?php echo $_MMVAR_77e413c0c731500d10->_MMFUN_2bc50f97e2e07d84c2()?> 毫秒]</td>
</tr>
<tr class="tb_header">
<td>id</td>
<td>时间</td>
<td>卡号</td>
<td>Ip</td>
<td>网卡</td>
<td>机器码-在线码</td>
<td>客户端ID</td>
<td width=200>简单备注</td>
</tr>
<?php
if(!empty($_MMVAR_5a0f5f64cd15c205df)){		
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;
?><tr class="tb_tr<?php echo $_MMVAR_8ff60a7771c3f2c087 % 2==1?1:2 ?>">
<td><?php echo  $_MMVAR_9a036496d66f59815a['id']?></td>
<td><?php echo _MMFUN_59e7c3854a78f9e590($_MMVAR_9a036496d66f59815a['addtime'],1)?></td>
<td><?php echo  $_MMVAR_9a036496d66f59815a['keys']?></td>
<td class=isip><?php echo $_MMVAR_9a036496d66f59815a['ip']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['mac']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['pccode']?></td>
<td><?php echo $_MMVAR_9a036496d66f59815a['clientid'] ?></td>
<td><?php echo $_MMVAR_499c21f64bdc00142b[$_MMVAR_9a036496d66f59815a['optype']] ?></td>
</tr>
<?php 
}
} ?>
<tr class="tb_header">
<td colspan="8"><?php echo $_MMVAR_9f95914834184aeeae->_MMFUN_70545ed222a52acaa2($_MMVAR_2dc0051b4a3fa32b83,$_MMVAR_4fa302d033574933a4,$_MMVAR_0ecbe44a2d4417e190)?></td>
</tr>
</table>

<script>
$(document).ready(function(){
$(".tb_tr1,.tb_tr2").hover(function (){$("#op").css('visibility','hidden');$(this).children(":first-child").children("span").children("div").show();},function (){$("#op").css('visibility','visible');$(this).children(":first-child").children("span").children("div").hide();});
$("#totalmac").bind("click",function(){$.getScript("?action=totallog&sxjlid=<?php echo $_MMVAR_135a723a975f2e33a2?>&rand="+sTime2()); });
$(".isip").bind("click",function(){var tip=$(this).text();$.getScript("?action=getip&ip="+tip); });
});
function sTime2(){
var d,s;
d = new Date();
s=d.getSeconds();
return(s)
}
</script>	
<?php
}
function _MMFUN_7aa57df398097c635a($_MMVAR_9ad68792a8b0462ea7) {
if(!preg_match("/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/", $_MMVAR_9ad68792a8b0462ea7)) {
return '';
}

if(is_file(KS_DIR.'/inc/QQWry.Dat') && $_MMVAR_dd0a8a7a6875db82ac = @fopen(KS_DIR.'/inc/QQWry.Dat', 'rb')) {

$_MMVAR_9ad68792a8b0462ea7 = explode('.', $_MMVAR_9ad68792a8b0462ea7);
$_MMVAR_ffcf7440d0a43140c8 = $_MMVAR_9ad68792a8b0462ea7[0] * 16777216 + $_MMVAR_9ad68792a8b0462ea7[1] * 65536 + $_MMVAR_9ad68792a8b0462ea7[2] * 256 + $_MMVAR_9ad68792a8b0462ea7[3];

$_MMVAR_1a736efe0b0a0f4777 = fread($_MMVAR_dd0a8a7a6875db82ac, 4);
$_MMVAR_dfa4ef61a8e0bf1d76 = fread($_MMVAR_dd0a8a7a6875db82ac, 4);
$_MMVAR_0224cac1644cb410df = implode('', unpack('L', $_MMVAR_1a736efe0b0a0f4777));
if($_MMVAR_0224cac1644cb410df < 0) $_MMVAR_0224cac1644cb410df += pow(2, 32);
$_MMVAR_04e6d3bf452bb734a2 = implode('', unpack('L', $_MMVAR_dfa4ef61a8e0bf1d76));
if($_MMVAR_04e6d3bf452bb734a2 < 0) $_MMVAR_04e6d3bf452bb734a2 += pow(2, 32);
$_MMVAR_3eaba2538fc510a60e = ($_MMVAR_04e6d3bf452bb734a2 - $_MMVAR_0224cac1644cb410df) / 7 + 1;

$_MMVAR_8e429f76f2d9794b22 = 0;
$_MMVAR_902bdd387878e056e5 = $_MMVAR_3eaba2538fc510a60e;
$_MMVAR_2f6d1d5bdb0e03dc22=0;
$_MMVAR_f1576ec0b0fe46a603=0;		
$_MMVAR_8f7e8d81f8d90f4da1='';			
$_MMVAR_c155f91272071db79a='';
while($_MMVAR_2f6d1d5bdb0e03dc22 > $_MMVAR_ffcf7440d0a43140c8 || $_MMVAR_f1576ec0b0fe46a603 < $_MMVAR_ffcf7440d0a43140c8) {
$_MMVAR_69f4610606988ba048= intval(($_MMVAR_902bdd387878e056e5 + $_MMVAR_8e429f76f2d9794b22) / 2);

fseek($_MMVAR_dd0a8a7a6875db82ac, $_MMVAR_0224cac1644cb410df + 7 * $_MMVAR_69f4610606988ba048);
$_MMVAR_8337d27939008e9e5b = fread($_MMVAR_dd0a8a7a6875db82ac, 4);
if(strlen($_MMVAR_8337d27939008e9e5b) < 4) {
fclose($_MMVAR_dd0a8a7a6875db82ac);
return 'System Error';
}
$_MMVAR_2f6d1d5bdb0e03dc22 = implode('', unpack('L', $_MMVAR_8337d27939008e9e5b));
if($_MMVAR_2f6d1d5bdb0e03dc22 < 0) $_MMVAR_2f6d1d5bdb0e03dc22 += pow(2, 32);

if($_MMVAR_2f6d1d5bdb0e03dc22 > $_MMVAR_ffcf7440d0a43140c8) {
$_MMVAR_902bdd387878e056e5 = $_MMVAR_69f4610606988ba048;
continue;
}

$_MMVAR_d5294332e4c25c8ad9 = fread($_MMVAR_dd0a8a7a6875db82ac, 3);
if(strlen($_MMVAR_d5294332e4c25c8ad9) < 3) {
fclose($_MMVAR_dd0a8a7a6875db82ac);
return 'System Error';
}
$_MMVAR_d5294332e4c25c8ad9 = implode('', unpack('L', $_MMVAR_d5294332e4c25c8ad9.chr(0)));
fseek($_MMVAR_dd0a8a7a6875db82ac, $_MMVAR_d5294332e4c25c8ad9);
$_MMVAR_a90f32fa03395bda23 = fread($_MMVAR_dd0a8a7a6875db82ac, 4);
if(strlen($_MMVAR_a90f32fa03395bda23) < 4) {
fclose($_MMVAR_dd0a8a7a6875db82ac);
return 'System Error';
}
$_MMVAR_f1576ec0b0fe46a603 = implode('', unpack('L', $_MMVAR_a90f32fa03395bda23));
if($_MMVAR_f1576ec0b0fe46a603 < 0) $_MMVAR_f1576ec0b0fe46a603 += pow(2, 32);

if($_MMVAR_f1576ec0b0fe46a603 < $_MMVAR_ffcf7440d0a43140c8) {
if($_MMVAR_69f4610606988ba048 == $_MMVAR_8e429f76f2d9794b22) {
fclose($_MMVAR_dd0a8a7a6875db82ac);
return 'Unknown';
}
$_MMVAR_8e429f76f2d9794b22 = $_MMVAR_69f4610606988ba048;
}
}

$_MMVAR_0395e0577f0ccd73e8 = fread($_MMVAR_dd0a8a7a6875db82ac, 1);
if($_MMVAR_0395e0577f0ccd73e8 == chr(1)) {
$_MMVAR_fc42209813c5cc6148 = fread($_MMVAR_dd0a8a7a6875db82ac, 3);
if(strlen($_MMVAR_fc42209813c5cc6148) < 3) {
fclose($_MMVAR_dd0a8a7a6875db82ac);
return 'System Error';
}
$_MMVAR_fc42209813c5cc6148 = implode('', unpack('L', $_MMVAR_fc42209813c5cc6148.chr(0)));
fseek($_MMVAR_dd0a8a7a6875db82ac, $_MMVAR_fc42209813c5cc6148);
$_MMVAR_0395e0577f0ccd73e8 = fread($_MMVAR_dd0a8a7a6875db82ac, 1);
}

if($_MMVAR_0395e0577f0ccd73e8 == chr(2)) {
$_MMVAR_21442930806622a5a5 = fread($_MMVAR_dd0a8a7a6875db82ac, 3);
if(strlen($_MMVAR_21442930806622a5a5) < 3) {
fclose($_MMVAR_dd0a8a7a6875db82ac);
return 'System Error';
}
$_MMVAR_0395e0577f0ccd73e8 = fread($_MMVAR_dd0a8a7a6875db82ac, 1);
if($_MMVAR_0395e0577f0ccd73e8 == chr(2)) {
$_MMVAR_d13ea24734b17b628d = fread($_MMVAR_dd0a8a7a6875db82ac, 3);
if(strlen($_MMVAR_d13ea24734b17b628d) < 3) {
fclose($_MMVAR_dd0a8a7a6875db82ac);
return 'System Error';
}
$_MMVAR_d13ea24734b17b628d = implode('', unpack('L', $_MMVAR_d13ea24734b17b628d.chr(0)));
fseek($_MMVAR_dd0a8a7a6875db82ac, $_MMVAR_d13ea24734b17b628d);
} else {
fseek($_MMVAR_dd0a8a7a6875db82ac, -1, SEEK_CUR);
}
while(($_MMVAR_f5cacf6f6416e8da93 = fread($_MMVAR_dd0a8a7a6875db82ac, 1)) != chr(0))
$_MMVAR_c155f91272071db79a .= $_MMVAR_f5cacf6f6416e8da93;

$_MMVAR_21442930806622a5a5 = implode('', unpack('L', $_MMVAR_21442930806622a5a5.chr(0)));
fseek($_MMVAR_dd0a8a7a6875db82ac, $_MMVAR_21442930806622a5a5);
while(($_MMVAR_f5cacf6f6416e8da93 = fread($_MMVAR_dd0a8a7a6875db82ac, 1)) != chr(0))
$_MMVAR_8f7e8d81f8d90f4da1 .= $_MMVAR_f5cacf6f6416e8da93;
} else {
fseek($_MMVAR_dd0a8a7a6875db82ac, -1, SEEK_CUR);
while(($_MMVAR_f5cacf6f6416e8da93 = fread($_MMVAR_dd0a8a7a6875db82ac, 1)) != chr(0))
$_MMVAR_8f7e8d81f8d90f4da1 .= $_MMVAR_f5cacf6f6416e8da93;

$_MMVAR_0395e0577f0ccd73e8 = fread($_MMVAR_dd0a8a7a6875db82ac, 1);
if($_MMVAR_0395e0577f0ccd73e8 == chr(2)) {
$_MMVAR_d13ea24734b17b628d = fread($_MMVAR_dd0a8a7a6875db82ac, 3);
if(strlen($_MMVAR_d13ea24734b17b628d) < 3) {
fclose($_MMVAR_dd0a8a7a6875db82ac);
return 'System Error';
}
$_MMVAR_d13ea24734b17b628d = implode('', unpack('L', $_MMVAR_d13ea24734b17b628d.chr(0)));
fseek($_MMVAR_dd0a8a7a6875db82ac, $_MMVAR_d13ea24734b17b628d);
} else {
fseek($_MMVAR_dd0a8a7a6875db82ac, -1, SEEK_CUR);
}
while(($_MMVAR_f5cacf6f6416e8da93 = fread($_MMVAR_dd0a8a7a6875db82ac, 1)) != chr(0))
$_MMVAR_c155f91272071db79a .= $_MMVAR_f5cacf6f6416e8da93;
}
fclose($_MMVAR_dd0a8a7a6875db82ac);

if(preg_match('/http/i', $_MMVAR_c155f91272071db79a)) {
$_MMVAR_c155f91272071db79a = '';
}
$_MMVAR_96678eefd12243ce5a = $_MMVAR_8f7e8d81f8d90f4da1.' '.$_MMVAR_c155f91272071db79a;
$_MMVAR_96678eefd12243ce5a = preg_replace('/CZ88\.NET/is', '', $_MMVAR_96678eefd12243ce5a);
$_MMVAR_96678eefd12243ce5a = preg_replace('/^\s*/is', '', $_MMVAR_96678eefd12243ce5a);
$_MMVAR_96678eefd12243ce5a = preg_replace('/\s*$/is', '', $_MMVAR_96678eefd12243ce5a);
if(preg_match('/http/i', $_MMVAR_96678eefd12243ce5a) || $_MMVAR_96678eefd12243ce5a == '') {
$_MMVAR_96678eefd12243ce5a = 'Unknown';
}
return iconv("gbk","utf-8",$_MMVAR_96678eefd12243ce5a);
} else {
return KS_PATH.'/inc文件夹下没找到IP库文件QQWry.Dat！<br>请到网上下载最新版纯真ip库，改名为QQWry.Dat放到'.KS_PATH.'/inc文件夹下！';
}
}

echo COPYRIGHT;
?>
</body>
</html>