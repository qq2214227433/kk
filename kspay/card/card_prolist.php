<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_53d17c3545aae95b9e;
$_MMVAR_6acb770a66d220e25e='SELECT * from '.TNREG.'_xjl where userid='.$_MMVAR_d6858a6d9e9ee80bab.' order by id asc';
$_MMVAR_c6e403382e670747e6=explode(',',$_MMVAR_53d17c3545aae95b9e[4]);
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e);

$_MMVAR_006e5e0cd422669e3f=array();
$_MMVAR_017a7aa62bbb0ee377=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT '.TNREG.'_keyprice.*, '.TNREG.'_keyattribute.keyname from '.TNREG.'_keyprice,'.TNREG.'_keyattribute where '.TNREG.'_keyprice.keyattrid='.TNREG.'_keyattribute.id and  '.TNREG.'_keyprice.userid='.$_MMVAR_d6858a6d9e9ee80bab.' order by '.TNREG.'_keyprice.softid asc');	

echo '<table width=\'980\' style=\'border:0\' border=\'0\' cellpadding=\'0\' class=\'list_tb\' align=\'center\'>';
echo '<tr class=\'tb__tr1\'><td>快速定位软件：<select name=\'xjlid\' id=\'xjlid\' style=\'width:207px;height:22px\'>';
foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_19df307162d92f6723=false;
if(!in_array($_MMVAR_9a036496d66f59815a['id'],$_MMVAR_c6e403382e670747e6) && $_MMVAR_53d17c3545aae95b9e[0]>0)
continue ;
foreach ($_MMVAR_017a7aa62bbb0ee377 as $_MMVAR_fc8b1bbe7498a4f269){
if($_MMVAR_53d17c3545aae95b9e[0]==0){
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_fc8b1bbe7498a4f269['softid'] && $_MMVAR_fc8b1bbe7498a4f269['keyprice1']!=0){
$_MMVAR_19df307162d92f6723=true;
$_MMVAR_006e5e0cd422669e3f[]=array('keyprice1',$_MMVAR_9a036496d66f59815a);
break;
}
}else{
if($_MMVAR_9a036496d66f59815a['id']==$_MMVAR_fc8b1bbe7498a4f269['softid']){
if(substr($_MMVAR_53d17c3545aae95b9e[4],0,1)==='A' && $_MMVAR_fc8b1bbe7498a4f269['keyprice2']!=0){
$_MMVAR_19df307162d92f6723=true;
$_MMVAR_006e5e0cd422669e3f[]=array('keyprice2',$_MMVAR_9a036496d66f59815a);
break;
}else{
if($_MMVAR_fc8b1bbe7498a4f269['keyprice3']!=0){
$_MMVAR_19df307162d92f6723=true;
$_MMVAR_006e5e0cd422669e3f[]=array('keyprice3',$_MMVAR_9a036496d66f59815a);
break;							
}
}
}					
}
}
if($_MMVAR_19df307162d92f6723==true){
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'].'>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';

}
}
echo '</select></td></tr></table>';
$_MMVAR_8ff60a7771c3f2c087=0;
foreach ($_MMVAR_006e5e0cd422669e3f as $_MMVAR_9a036496d66f59815a) {
$_MMVAR_8ff60a7771c3f2c087++;

$_MMVAR_927f37d59e0279cd3f=$_MMVAR_9a036496d66f59815a[1]['xjlurl'];
if(strlen($_MMVAR_927f37d59e0279cd3f)<10)
$_MMVAR_927f37d59e0279cd3f='javascript:alert(\'未找到下载地址，请联系作者！\')'
?>
<a name="<?php echo $_MMVAR_9a036496d66f59815a[1]['id']?>">
<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align='center'>
<tr class="tb_tip">
<td colspan=2>软件名：<?php echo $_MMVAR_9a036496d66f59815a[1]['xjlname']?>　　　　<a href="<?php echo $_MMVAR_927f37d59e0279cd3f?>" style='color:#fff'>点击此处下载软件</td>
</tr>
<tr class="tb__tr1">
<td width=680 valign=top>　　<?php echo nl2br(htmlspecialchars($_MMVAR_9a036496d66f59815a[1]['intro']))?></td>
<td width=300>
<table width="100%" style='border:0' border="0" cellpadding='0' cellspacing='0' align="center">
<?php
foreach ($_MMVAR_017a7aa62bbb0ee377 as $_MMVAR_3537e64d044a58bc4b){
if($_MMVAR_9a036496d66f59815a[1]['id']==$_MMVAR_3537e64d044a58bc4b['softid'] && $_MMVAR_3537e64d044a58bc4b[$_MMVAR_9a036496d66f59815a[0]]!=0){
$_MMVAR_f0591045bd10807002='card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&agid='.$_MMVAR_53d17c3545aae95b9e[0].'&action=step1&keytypeid='.$_MMVAR_3537e64d044a58bc4b['keyattrid'].'&priceid='.$_MMVAR_3537e64d044a58bc4b['id'].'&softid='.$_MMVAR_9a036496d66f59815a[1]['id'].'&sign='._MMFUN_cf8c11a79575861c0c($_MMVAR_d6858a6d9e9ee80bab.$_MMVAR_53d17c3545aae95b9e[0].$_MMVAR_3537e64d044a58bc4b['keyattrid'].$_MMVAR_3537e64d044a58bc4b['id'].$_MMVAR_9a036496d66f59815a[1]['id']);
echo '<tr class=\'tb_tr2\'><td>'.$_MMVAR_3537e64d044a58bc4b['linknum'].'开'.$_MMVAR_3537e64d044a58bc4b['keyname'].'</td><td>单价：'.$_MMVAR_3537e64d044a58bc4b[$_MMVAR_9a036496d66f59815a[0]].'元</td><td><a href='.$_MMVAR_f0591045bd10807002.'><img src=..'. KS_PATH_PUBLIC.'/images/buynow5_out.gif></a></td></tr>';
}				
}
?>
</table>
</td>
</tr>
</table>
<?php
}
?>
</table>
<script>$("#xjlid").change( function(){window.location="#"+this.value;}); </script>