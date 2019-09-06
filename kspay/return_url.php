<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
$_MMVAR_09785c63444efa13e0="GBK";
require('alipay_notify.php');

$_MMVAR_dc0540d958b7dad2db=array(
0=>'等待买家付款',
1=>'买家付款成功，等待卖家发货',
2=>'卖家已经发货，等待买家确认',
3=>'买家付款完成，作者帐户里的卡币不足，未发卡，请联系作者',
4=>'买家付款完成，作者卡库已满，未发卡，请联系作者',
5=>'订单完成，注册卡号：<br>'
);



//$_MMVAR_8d9977cd777c253361=''.$_GET['out_trade_no'].'';
//$_MMVAR_d1fd333577e51c03cc  =$_GET['total_fee'];

$_MMVAR_8d9977cd777c253361=_MMFUN_cc3cf510bffd973b95('out_trade_no','get','sql',"");
$_MMVAR_d1fd333577e51c03cc=_MMFUN_cc3cf510bffd973b95('total_fee','get','sql',"");


$_MMVAR_d0cb05281d5220dc52=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_order where ordernum=\''.$_MMVAR_8d9977cd777c253361.'\'' );
if(empty($_MMVAR_d0cb05281d5220dc52))
_MMFUN_6da5ed7d3a356dcac7("非法的请求：订单号错误！",'close');

$_MMVAR_b455747cd15b198965=_MMFUN_7753e35059b9b54cf0($_MMVAR_d0cb05281d5220dc52['userid']);
$_MMVAR_4019b83eefbac6707f = new alipay_notify($_MMVAR_b455747cd15b198965['aliid'],$_MMVAR_b455747cd15b198965['alikey'],$_MMVAR_f9af453628d3348749,$_MMVAR_09785c63444efa13e0,$_MMVAR_4e23ba844976b63fb0);
$_MMVAR_d016031ba90b4643e4 = $_MMVAR_4019b83eefbac6707f->_MMFUN_7f0b412a95d107f6df();

if(!$_MMVAR_d016031ba90b4643e4)
_MMFUN_6da5ed7d3a356dcac7("非法的请求：数据签名错误！",'close');



$_MMVAR_c3775c0105df2fed4c=$_MMVAR_d0cb05281d5220dc52['orderamount'];

if($_MMVAR_d1fd333577e51c03cc!=$_MMVAR_c3775c0105df2fed4c)
_MMFUN_6da5ed7d3a356dcac7("支付金额有误，未发卡！",'close');

if($_MMVAR_d0cb05281d5220dc52['orderstatus']==5){
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_dc0540d958b7dad2db[$_MMVAR_d0cb05281d5220dc52['orderstatus']].str_replace(',','<br>',$_MMVAR_d0cb05281d5220dc52['regkeys']),'close');
}else{
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_dc0540d958b7dad2db[$_MMVAR_d0cb05281d5220dc52['orderstatus']].'<br>','close');
}	

?>