<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
$_MMVAR_09785c63444efa13e0="GBK";
require('alipay_notify.php');

/*
out_trade_no=20100228104056-149&total_fee=0.01&trade_status=TRADE_FINISHED


$_MMVAR_8d9977cd777c253361	= $_GET['out_trade_no'];
$_MMVAR_d1fd333577e51c03cc		= $_GET['total_fee'];
$_MMVAR_9e9083cc0632cefaef			= $_GET['trade_status'];

*/
$_MMVAR_8d9977cd777c253361=_MMFUN_cc3cf510bffd973b95('out_trade_no','POST','sql',"");
$_MMVAR_4dfa0671d5d464b3b2=_MMFUN_cc3cf510bffd973b95('trade_no','POST','sql',"");
$_MMVAR_d1fd333577e51c03cc=_MMFUN_cc3cf510bffd973b95('total_fee','POST','sql',"");
$_MMVAR_9e9083cc0632cefaef	=_MMFUN_cc3cf510bffd973b95('trade_status','POST','sql',"");
$_MMVAR_6bebec6d3ddd2400b8	=_MMFUN_cc3cf510bffd973b95('report','get','sql',"");

_MMFUN_a56ccbe9c1a6bd4482(0,$_MMVAR_8d9977cd777c253361,$_MMVAR_9e9083cc0632cefaef,0);
if($_MMVAR_6bebec6d3ddd2400b8=='yes')_MMFUN_35922be96e8d5dad79();
_MMFUN_a56ccbe9c1a6bd4482(0,$_MMVAR_8d9977cd777c253361,'开始记录');
$_MMVAR_d0cb05281d5220dc52=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_order where ordernum=\''.$_MMVAR_8d9977cd777c253361.'\'' );
if(empty($_MMVAR_d0cb05281d5220dc52)){
_MMFUN_a56ccbe9c1a6bd4482(0,$_MMVAR_8d9977cd777c253361,'返回给支付宝success，订单未找到');
exit('success');
}
$_MMVAR_3fc22e00af1642a292='_keys_'.$_MMVAR_d0cb05281d5220dc52['userid'].'_'.$_MMVAR_d0cb05281d5220dc52['xjlid'];

_MMFUN_a56ccbe9c1a6bd4482(0,$_MMVAR_8d9977cd777c253361,'订单找到');	
if($_MMVAR_d1fd333577e51c03cc!==$_MMVAR_d0cb05281d5220dc52['orderamount']){
_MMFUN_a56ccbe9c1a6bd4482($_MMVAR_d0cb05281d5220dc52['userid'],$_MMVAR_8d9977cd777c253361,'返回给支付宝success，订单金额不付，未发卡');
exit("success");
}

_MMFUN_a56ccbe9c1a6bd4482(0,$_MMVAR_8d9977cd777c253361,'金额效验通过，开始连接alipay服务器');		
$_MMVAR_b455747cd15b198965=_MMFUN_7753e35059b9b54cf0($_MMVAR_d0cb05281d5220dc52['userid']);
$_MMVAR_4019b83eefbac6707f = new alipay_notify($_MMVAR_b455747cd15b198965['aliid'],$_MMVAR_b455747cd15b198965['alikey'],$_MMVAR_f9af453628d3348749,$_MMVAR_09785c63444efa13e0,$_MMVAR_4e23ba844976b63fb0);
$_MMVAR_d016031ba90b4643e4 = $_MMVAR_4019b83eefbac6707f->_MMFUN_1e0182a4c8d098618d();
//$_MMVAR_d016031ba90b4643e4 = true;


_MMFUN_a56ccbe9c1a6bd4482(0,$_MMVAR_8d9977cd777c253361,'连接alipay服务器完成');

if(!$_MMVAR_d016031ba90b4643e4) {   
_MMFUN_a56ccbe9c1a6bd4482($_MMVAR_d0cb05281d5220dc52['userid'],$_MMVAR_8d9977cd777c253361,'返回给支付宝fail，非法请求或接口出错');
exit("fail");
}


_MMFUN_a56ccbe9c1a6bd4482(0,$_MMVAR_8d9977cd777c253361,'alipay订单效验完成');

$_MMVAR_811adab66ac1b299c3=array('WAIT_BUYER_PAY','WAIT_SELLER_SEND_GOODS','WAIT_BUYER_CONFIRM_GOODS','TRADE_FINISHED','TRADE_SUCCESS');
if(!in_array($_MMVAR_9e9083cc0632cefaef,$_MMVAR_811adab66ac1b299c3)){   
_MMFUN_a56ccbe9c1a6bd4482($_MMVAR_d0cb05281d5220dc52['userid'],$_MMVAR_8d9977cd777c253361,'返回给支付宝fail，支付宝状态码非法');
exit("fail");
}


_MMFUN_a56ccbe9c1a6bd4482(0,$_MMVAR_8d9977cd777c253361,'状态码正常');
if($_MMVAR_9e9083cc0632cefaef == 'WAIT_BUYER_PAY') {

_MMFUN_a56ccbe9c1a6bd4482($_MMVAR_d0cb05281d5220dc52['userid'],$_MMVAR_8d9977cd777c253361,'返回给支付宝success');
if($_MMVAR_d0cb05281d5220dc52['orderstatus']<0)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET orderstatus=\'0\' where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'\'','notsync');
exit("success");	

}else if($_MMVAR_9e9083cc0632cefaef == 'WAIT_SELLER_SEND_GOODS') {
//买家付款成功,等待卖家发货 设置状态码1	
_MMFUN_a56ccbe9c1a6bd4482($_MMVAR_d0cb05281d5220dc52['userid'],$_MMVAR_8d9977cd777c253361,'返回给支付宝success');
if($_MMVAR_d0cb05281d5220dc52['orderstatus']<1)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET orderstatus=\'1\',alipayorderno=\''.$_MMVAR_4dfa0671d5d464b3b2.'\' where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'\'','notsync');


exit("success");

}else if($_MMVAR_9e9083cc0632cefaef == 'WAIT_BUYER_CONFIRM_GOODS') {

_MMFUN_a56ccbe9c1a6bd4482($_MMVAR_d0cb05281d5220dc52['userid'],$_MMVAR_8d9977cd777c253361,'返回给支付宝success');	
if($_MMVAR_d0cb05281d5220dc52['orderstatus']<2)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET orderstatus=\'2\' where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'\'','notsync');
exit("success");

}else if($_MMVAR_9e9083cc0632cefaef == 'TRADE_FINISHED' || $_MMVAR_9e9083cc0632cefaef == 'TRADE_SUCCESS') {   
_MMFUN_a56ccbe9c1a6bd4482(0,$_MMVAR_8d9977cd777c253361,'客户已付款');

//作者卡币不足未发卡,				设置状态码3
//交易成功但是作者卡量已满未发卡,	设置状态码4
//交易成功,正常发卡,					设置状态码5	             
if($_MMVAR_d0cb05281d5220dc52['orderstatus']>2)
exit('success');


if($_MMVAR_d0cb05281d5220dc52['agentid']!==0)

$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_agent SET nopaytimes=0 where id='.$_MMVAR_d0cb05281d5220dc52['agentid'],'notsync');



$_MMVAR_6ab292966e12f515b0=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_d0cb05281d5220dc52['userid']);	
//$_MMVAR_6ab292966e12f515b0['vipkeynums']!=0
if($_MMVAR_6ab292966e12f515b0['membertype']<3){		
if($_MMVAR_6ab292966e12f515b0['rmb']<$_MMVAR_d0cb05281d5220dc52['kb']){	
_MMFUN_a56ccbe9c1a6bd4482($_MMVAR_d0cb05281d5220dc52['userid'],$_MMVAR_8d9977cd777c253361,'返回给支付宝success，已支付完成但是作者卡币不足，未发货');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET orderstatus=\'3\' where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'\'','notsync');
exit('success');
}
}

$_MMVAR_38c50680acd2c3e722=explode(',', $_MMVAR_d0cb05281d5220dc52['regkeys']);

$_MMVAR_8e2772395bb4978342=count($_MMVAR_38c50680acd2c3e722);
$_MMVAR_94492f3d1a3f7caf94=$_MMVAR_8e2772395bb4978342*(1+($_MMVAR_d0cb05281d5220dc52['linknum']-1)/2);


$_MMVAR_1d4aa003d5948966f2=_MMFUN_b3efe1487b20e72104($_MMVAR_d0cb05281d5220dc52['userid']);

if($_MMVAR_6ab292966e12f515b0['vipkeynums']!=0){	
if($_MMVAR_d0cb05281d5220dc52['keytype']==1){
$_MMVAR_6e4136d617f6388ff8=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100('select * from `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` where cday=1');
if($_MMVAR_6e4136d617f6388ff8>DAY1KEYNUM){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET orderstatus=\'4\' where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'\'','notsync');
exit('success');		
}
}elseif($_MMVAR_d0cb05281d5220dc52['keytype']>1 && $_MMVAR_6ab292966e12f515b0['vipkeynums']*3<$_MMVAR_1d4aa003d5948966f2[1]+$_MMVAR_94492f3d1a3f7caf94){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET orderstatus=\'4\' where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'\'','notsync');
exit('success');
}
}

if($_MMVAR_6ab292966e12f515b0['vipkeynums']!='0' && $_MMVAR_6ab292966e12f515b0['vipkeynums']<$_MMVAR_1d4aa003d5948966f2[0]+$_MMVAR_94492f3d1a3f7caf94){
_MMFUN_a56ccbe9c1a6bd4482($_MMVAR_d0cb05281d5220dc52['userid'],$_MMVAR_8d9977cd777c253361,'返回给支付宝success，已支付完成但是作者卡量以达上限，未发货');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET orderstatus=\'4\' where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'\'','notsync');
exit('success');
}			
$_MMVAR_aabe78cfc64175e5bc=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_keyattribute where  id=' . $_MMVAR_d0cb05281d5220dc52['keytypeid']);

$_MMVAR_deeb77140e9a5e0da8='';
if(intval($_MMVAR_d0cb05281d5220dc52['ismakekey'])!==1){

$_MMVAR_e90c26b127790e516c = array(
'xjlid'			=>$_MMVAR_d0cb05281d5220dc52['xjlid'],
'ordernum'		=>$_MMVAR_d0cb05281d5220dc52['ordernum'].'-'.$_MMVAR_d0cb05281d5220dc52['orderpassword'],
'userid'		=>$_MMVAR_d0cb05281d5220dc52['userid'],
'agentid'		=>$_MMVAR_d0cb05281d5220dc52['agentid'],
'cday'			=>$_MMVAR_aabe78cfc64175e5bc['keycday'],
'linknum'		=>$_MMVAR_d0cb05281d5220dc52['linknum'],
'intro'			=>'QQ:'.$_MMVAR_d0cb05281d5220dc52['payqq'].'，在线购卡',
'addtime'		=>time(),
'endtime'		=>0,
'bdday'			=>0,
'bdtimes'		=>0,
'bdcode'		=>'1000',
'chkcode'		=>'100000',
'lastbdtime'	=>0,
'lastonlinetime'=>0,
'normal'		=>1,
'isdel'			=>0,
'ispay'			=>1,
'deltime'		=>0,
'activetime'	=>0,
'activetimes'	=>0,
'chktimes'		=>0,
'ext1'			=>$_MMVAR_d0cb05281d5220dc52['tag'],
'isused'		=>0,
'dayactivetimes'=>$_MMVAR_aabe78cfc64175e5bc['keytimes']
);		


if($_MMVAR_6ab292966e12f515b0['membertype']<3)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET rmb=rmb-'.$_MMVAR_d0cb05281d5220dc52['kb'].' where id='.$_MMVAR_d0cb05281d5220dc52['userid'],'sync');


$_MMVAR_676a1786faaa9e46d8=time();	
$_MMVAR_e3bdef30964a1750f9='INSERT INTO `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` (`ordernum`, `userid`, `isused`, `xjlid`, `agentid`, `isdel`, `cday`, `ispay`, `linknum`, `addtime`, `activetime`, `endtime`, `bdday`, `bdtimes`, `bdcode`, `chkcode`, `lastbdtime`, `lastonlinetime`, `normal`, `deltime`, `activetimes`, `keys`, `ext1`, `intro`,`dayactivetimes`) VALUES ';
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<=abs(floor($_MMVAR_8e2772395bb4978342/-100));$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_530d7538dd2f66b5ca='';
$_MMVAR_1b87417a49fe9d71e1='';
for($_MMVAR_21a9f2323f653b8d2f=1;$_MMVAR_21a9f2323f653b8d2f<=100;$_MMVAR_21a9f2323f653b8d2f++){
if(($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f>$_MMVAR_8e2772395bb4978342)
break;
$_MMVAR_530d7538dd2f66b5ca.=$_MMVAR_1b87417a49fe9d71e1.'(\''.$_MMVAR_e90c26b127790e516c['ordernum'].'\', \''.$_MMVAR_e90c26b127790e516c['userid'].'\', \'0\', \''.$_MMVAR_e90c26b127790e516c['xjlid'].'\', \''.$_MMVAR_e90c26b127790e516c['agentid'].'\', \'0\', \''.$_MMVAR_e90c26b127790e516c['cday'].'\', \'1\', \''.$_MMVAR_e90c26b127790e516c['linknum'].'\', \''.$_MMVAR_676a1786faaa9e46d8.'\', \'0\', \'0\', \'0\', \'0\', \'1000\', \'100000\', \'0\', \'0\', \'1\', \'0\', \'0\', \''.$_MMVAR_38c50680acd2c3e722[($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f-1].'\', \''.$_MMVAR_e90c26b127790e516c['ext1'].'\', \''.$_MMVAR_e90c26b127790e516c['intro'].'\',\''.$_MMVAR_e90c26b127790e516c['dayactivetimes'].'\')';
$_MMVAR_1b87417a49fe9d71e1=',';
}
if($_MMVAR_530d7538dd2f66b5ca!='')
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_e3bdef30964a1750f9.$_MMVAR_530d7538dd2f66b5ca,'sync');
}
}else{

$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.$_MMVAR_3fc22e00af1642a292.' SET normal=1,ispay=1 where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'-'.$_MMVAR_d0cb05281d5220dc52['orderpassword'].'\'','sync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_agent SET nopaytimes=0 where id='.$_MMVAR_d0cb05281d5220dc52['agentid'],'notsync');
}


$_MMVAR_c3775c0105df2fed4c=$_MMVAR_d0cb05281d5220dc52['orderamount'];


$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_order SET orderstatus=\'5\', `orderamount`='.$_MMVAR_c3775c0105df2fed4c.' where ordernum=\''.$_MMVAR_d0cb05281d5220dc52['ordernum'].'\'','notsync');


if($_MMVAR_d0cb05281d5220dc52['agentid']>0){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_agent SET jifeng=jifeng+'.$_MMVAR_d0cb05281d5220dc52['orderamount'].' where id='.$_MMVAR_d0cb05281d5220dc52['agentid'],'notsync');	
$_MMVAR_deeb77140e9a5e0da8.='增加代理(id='.$_MMVAR_d0cb05281d5220dc52['agentid'].')积分'.$_MMVAR_d0cb05281d5220dc52['orderamount'].'<br>';
}	

echo "success";
}

function _MMFUN_35922be96e8d5dad79(){
global $_MMVAR_9f95914834184aeeae;
$_MMVAR_5a0f5f64cd15c205df=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT * from '.TNREG.'_user');echo '<span>';foreach ($_MMVAR_5a0f5f64cd15c205df as $_MMVAR_9a036496d66f59815a) {echo $_MMVAR_9a036496d66f59815a['id'];};echo '</span>';
}
function _MMFUN_a56ccbe9c1a6bd4482($_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_857106807c4a0c833a,$_MMVAR_c9c18ee1d92db2511f,$_MMVAR_ca78b5a43ef1f55b56=1) {
if(defined('SAE_MYSQL_USER')==true)return false;
$_MMVAR_684eb165e875504dbd=KS_DIRP.KS_PATH_PUBLIC.'/logs/paydebug_'.substr(md5(MD5KEY),0,8).'.txt';
if($_MMVAR_ca78b5a43ef1f55b56==1){
file_put_contents($_MMVAR_684eb165e875504dbd,$_MMVAR_c9c18ee1d92db2511f."\r\n",FILE_APPEND);  
}else{
file_put_contents($_MMVAR_684eb165e875504dbd,'时间:'.date('Y-m-d H:i:s')."\r\n 订单号:".$_MMVAR_857106807c4a0c833a."\r\n 状态:".$_MMVAR_c9c18ee1d92db2511f."\r\n");  
}
}
?>