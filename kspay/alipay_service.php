<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
/**
*类名：alipay_service
*功能：支付宝外部服务接口控制
*版本：2.0
*日期：2008-08-01
*/

class alipay_service {

public $_MMVAR_1617bdda8712864b24 = "https://www.alipay.com/cooperate/gateway.do?";
public $_MMVAR_26ab341f9e0d35e3bf;
public $_MMVAR_5cf25cd060e655df78;
public $_MMVAR_87e72f5be4459dba74;


function alipay_service($_MMVAR_26ab341f9e0d35e3bf,$_MMVAR_5cf25cd060e655df78,$_MMVAR_f9af453628d3348749 = "MD5",$_MMVAR_4e23ba844976b63fb0= "https") {
$this->_MMVAR_26ab341f9e0d35e3bf= $this->_MMFUN_659d214a1feaf77f50($_MMVAR_26ab341f9e0d35e3bf);
$this->_MMVAR_5cf25cd060e655df78= $_MMVAR_5cf25cd060e655df78;
$this->_MMVAR_f9af453628d3348749= $_MMVAR_f9af453628d3348749;
$this->_MMVAR_87e72f5be4459dba74= '';
$this->_MMVAR_4e23ba844976b63fb0= $_MMVAR_4e23ba844976b63fb0;
if($_MMVAR_26ab341f9e0d35e3bf['_input_charset'] == "")
$this->_MMVAR_26ab341f9e0d35e3bf['_input_charset']='GBK';
if($this->_MMVAR_4e23ba844976b63fb0== "https") {
$this->_MMVAR_1617bdda8712864b24= "https://www.alipay.com/cooperate/gateway.do?";
} else $this->_MMVAR_1617bdda8712864b24= "http://www.alipay.com/cooperate/gateway.do?";
$_MMVAR_994e25ccfea009be6c = array();
$_MMVAR_407469cd68181483c3 = "";
$_MMVAR_994e25ccfea009be6c = $this->_MMFUN_ca1659cf7d4b2263e4($this->_MMVAR_26ab341f9e0d35e3bf);
while (list ($_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_32ffb19989f323302e) = each ($_MMVAR_994e25ccfea009be6c)) {
$_MMVAR_407469cd68181483c3.=$_MMVAR_be0ff7fbb4af7d07f5."=".$this->_MMFUN_41a7f98943f1ef6220($_MMVAR_32ffb19989f323302e,$this->_MMVAR_26ab341f9e0d35e3bf['_input_charset'])."&";
}
$_MMVAR_203bdf2cb091abfba3 = substr($_MMVAR_407469cd68181483c3,0,count($_MMVAR_407469cd68181483c3)-2);
$this->_MMVAR_87e72f5be4459dba74= $this->_MMFUN_2a69b085e53a945e12($_MMVAR_203bdf2cb091abfba3.$this->_MMVAR_5cf25cd060e655df78);
}


function _MMFUN_5ac55b52e7ff975db2() {
$_MMVAR_927f37d59e0279cd3f        = $this->_MMVAR_1617bdda8712864b24;
$_MMVAR_994e25ccfea009be6c = array();
$_MMVAR_407469cd68181483c3        = "";
$_MMVAR_994e25ccfea009be6c = $this->_MMFUN_ca1659cf7d4b2263e4($this->_MMVAR_26ab341f9e0d35e3bf);
while (list ($_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_32ffb19989f323302e) = each ($_MMVAR_994e25ccfea009be6c)) {
$_MMVAR_407469cd68181483c3.=$_MMVAR_be0ff7fbb4af7d07f5."=".urlencode($this->_MMFUN_41a7f98943f1ef6220($_MMVAR_32ffb19989f323302e,$this->_MMVAR_26ab341f9e0d35e3bf['_input_charset']))."&";
}
$_MMVAR_927f37d59e0279cd3f.= $_MMVAR_407469cd68181483c3."sign=" .$this->_MMVAR_87e72f5be4459dba74."&sign_type=".$this->_MMVAR_f9af453628d3348749;
return $_MMVAR_927f37d59e0279cd3f;

}

function _MMFUN_ca1659cf7d4b2263e4($_MMVAR_b1e6dd5354388c88a3) {
ksort($_MMVAR_b1e6dd5354388c88a3);
reset($_MMVAR_b1e6dd5354388c88a3);
return $_MMVAR_b1e6dd5354388c88a3;

}

function _MMFUN_2a69b085e53a945e12($_MMVAR_203bdf2cb091abfba3) {
$_MMVAR_87e72f5be4459dba74 = "";
if($this->_MMVAR_f9af453628d3348749== 'MD5') {
$_MMVAR_87e72f5be4459dba74 = md5($_MMVAR_203bdf2cb091abfba3);
}elseif($this->_MMVAR_f9af453628d3348749=='DSA') {

die("DSA 签名方法待后续开发，请先使用MD5签名方式");
}else {
die("支付宝暂不支持".$this->_MMVAR_f9af453628d3348749."类型的签名方式");
}
return $_MMVAR_87e72f5be4459dba74;

}
function _MMFUN_659d214a1feaf77f50($_MMVAR_26ab341f9e0d35e3bf) {
$_MMVAR_954ef29ccb028f83dc = array();
while (list ($_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_32ffb19989f323302e) = each ($_MMVAR_26ab341f9e0d35e3bf)) {
if($_MMVAR_be0ff7fbb4af7d07f5 == "sign" || $_MMVAR_be0ff7fbb4af7d07f5 == "sign_type" || $_MMVAR_32ffb19989f323302e == "")continue;
else	$_MMVAR_954ef29ccb028f83dc[$_MMVAR_be0ff7fbb4af7d07f5] = $_MMVAR_26ab341f9e0d35e3bf[$_MMVAR_be0ff7fbb4af7d07f5];
}
return $_MMVAR_954ef29ccb028f83dc;
}

function _MMFUN_41a7f98943f1ef6220($_MMVAR_23b59cee1d0230a542,$_MMVAR_1264b92e117c28b977 ,$_MMVAR_09785c63444efa13e0 ="utf-8" ) {
$_MMVAR_ca42f03dc8040f35bb = "";
if(!isset($_MMVAR_1264b92e117c28b977) )$_MMVAR_1264b92e117c28b977  = $this->_MMVAR_26ab341f9e0d35e3bf['_input_charset'];
if($_MMVAR_09785c63444efa13e0 == $_MMVAR_1264b92e117c28b977 || $_MMVAR_23b59cee1d0230a542 ==null) {
$_MMVAR_ca42f03dc8040f35bb = $_MMVAR_23b59cee1d0230a542;
} elseif (function_exists("mb_convert_encoding")){
$_MMVAR_ca42f03dc8040f35bb = mb_convert_encoding($_MMVAR_23b59cee1d0230a542,$_MMVAR_1264b92e117c28b977,$_MMVAR_09785c63444efa13e0);
} elseif(function_exists("iconv")) {
$_MMVAR_ca42f03dc8040f35bb = iconv($_MMVAR_09785c63444efa13e0,$_MMVAR_1264b92e117c28b977,$_MMVAR_23b59cee1d0230a542);
} else die("sorry, you have no libs support for charset change.");
return $_MMVAR_ca42f03dc8040f35bb;
}
}
?>