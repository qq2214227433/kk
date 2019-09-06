<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
/*
*功能：付款过程中服务器通知类
*版本：2.0
*日期：2008-08-01
*作者：支付宝公司销售部技术支持团队
*联系：0571-26888888
*版权：支付宝公司

*修改：可可--
*日期：2010-12-30
*/

class alipay_notify {
public $_MMVAR_1617bdda8712864b24;
public $_MMVAR_5cf25cd060e655df78;
public $_MMVAR_3f525a28ec0ddeb501;
public $_MMVAR_f9af453628d3348749;
public $_MMVAR_87e72f5be4459dba74;
public $_MMVAR_09785c63444efa13e0;
public $_MMVAR_4e23ba844976b63fb0;
function alipay_notify($_MMVAR_3f525a28ec0ddeb501,$_MMVAR_5cf25cd060e655df78,$_MMVAR_f9af453628d3348749 = "MD5",$_MMVAR_09785c63444efa13e0 = "GBK",$_MMVAR_4e23ba844976b63fb0= "https") {
$this->_MMVAR_3f525a28ec0ddeb501= $_MMVAR_3f525a28ec0ddeb501;
$this->_MMVAR_5cf25cd060e655df78= $_MMVAR_5cf25cd060e655df78;
$this->_MMVAR_f9af453628d3348749= $_MMVAR_f9af453628d3348749;
$this->_MMVAR_87e72f5be4459dba74= "";
$this->_MMVAR_09785c63444efa13e0= $_MMVAR_09785c63444efa13e0 ;
$this->_MMVAR_4e23ba844976b63fb0= $_MMVAR_4e23ba844976b63fb0;
if($this->_MMVAR_4e23ba844976b63fb0== "https") {
$this->_MMVAR_1617bdda8712864b24= "https://www.alipay.com/cooperate/gateway.do?";
} else $this->_MMVAR_1617bdda8712864b24= "http://notify.alipay.com/trade/notify_query.do?";

}
/****************************************对notify_url的认证*********************************/
function _MMFUN_1e0182a4c8d098618d() {
if($this->_MMVAR_4e23ba844976b63fb0== "https") {
$_MMVAR_0de36786a94c2296e1 = $this->_MMVAR_1617bdda8712864b24. "service=notify_verify" ."&partner=" .$this->_MMVAR_3f525a28ec0ddeb501. "&notify_id=".$_POST["notify_id"];
} else {
$_MMVAR_0de36786a94c2296e1 = $this->_MMVAR_1617bdda8712864b24. "partner=".$this->_MMVAR_3f525a28ec0ddeb501."&notify_id=".$_POST["notify_id"];
}

if(ALIPAYSAFE==1){
$_MMVAR_cc33b5f9472242e734  = $this->_MMFUN_f84aa710c2d6d754ce($_MMVAR_0de36786a94c2296e1);
}else{
$_MMVAR_cc33b5f9472242e734  = 'true';
}
$_MMVAR_f9bde8b5103f4c797d           = $this->_MMFUN_659d214a1feaf77f50($_POST);
$_MMVAR_97a93b62f80f68150f      = $this->_MMFUN_ca1659cf7d4b2263e4($_MMVAR_f9bde8b5103f4c797d);
$_MMVAR_407469cd68181483c3='';
while (list ($_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_32ffb19989f323302e) = each ($_MMVAR_97a93b62f80f68150f)) {
$_MMVAR_407469cd68181483c3.=$_MMVAR_be0ff7fbb4af7d07f5."=".$_MMVAR_32ffb19989f323302e."&";
}
$_MMVAR_203bdf2cb091abfba3 = substr($_MMVAR_407469cd68181483c3,0,count($_MMVAR_407469cd68181483c3)-2);
$this->_MMVAR_87e72f5be4459dba74= $this->_MMFUN_2a69b085e53a945e12($_MMVAR_203bdf2cb091abfba3.$this->_MMVAR_5cf25cd060e655df78);
if (eregi("true$",$_MMVAR_cc33b5f9472242e734) && $this->_MMVAR_87e72f5be4459dba74== $_POST["sign"])  {
return true;
} else return false;
}
/*******************************************************************************************/

/**********************************对return_url的认证***************************************/
function _MMFUN_7f0b412a95d107f6df() {
$_MMVAR_4704a187e7ebc0d9c4= $this->_MMFUN_ca1659cf7d4b2263e4($_GET);
$_MMVAR_407469cd68181483c3='';
while (list ($_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_32ffb19989f323302e) = each ($_MMVAR_4704a187e7ebc0d9c4)) {
if($_MMVAR_be0ff7fbb4af7d07f5 != "sign" && $_MMVAR_be0ff7fbb4af7d07f5 != "sign_type")
$_MMVAR_407469cd68181483c3.=$_MMVAR_be0ff7fbb4af7d07f5."=".$_MMVAR_32ffb19989f323302e."&";
}
$_MMVAR_203bdf2cb091abfba3 = substr($_MMVAR_407469cd68181483c3,0,count($_MMVAR_407469cd68181483c3)-2);
$this->_MMVAR_87e72f5be4459dba74= $this->_MMFUN_2a69b085e53a945e12($_MMVAR_203bdf2cb091abfba3.$this->_MMVAR_5cf25cd060e655df78);
if ($this->_MMVAR_87e72f5be4459dba74== $_GET["sign"])  return true;
else return false;
}
/*******************************************************************************************/

function _MMFUN_f84aa710c2d6d754ce($_MMVAR_927f37d59e0279cd3f,$_MMVAR_2a578e20358459df3c = "60") {
$_MMVAR_67d29a4d9a85e9e790     = parse_url($_MMVAR_927f37d59e0279cd3f);
$_MMVAR_7c033e8683336007a1      = "";
$_MMVAR_11d996825e9794b5b2     = "";
$_MMVAR_edcc3b31921a1e494d = "";
if($_MMVAR_67d29a4d9a85e9e790["scheme"] == "https") {
$_MMVAR_edcc3b31921a1e494d = "ssl://";
$_MMVAR_67d29a4d9a85e9e790["port"] = "443";
} else {
$_MMVAR_edcc3b31921a1e494d = "tcp://";
$_MMVAR_67d29a4d9a85e9e790["port"] = "80";
}
$_MMVAR_8508d1c2251c7e0734=@fsockopen($_MMVAR_edcc3b31921a1e494d . $_MMVAR_67d29a4d9a85e9e790['host'],$_MMVAR_67d29a4d9a85e9e790['port'],$_MMVAR_7c033e8683336007a1,$_MMVAR_11d996825e9794b5b2,$_MMVAR_2a578e20358459df3c);
if(!$_MMVAR_8508d1c2251c7e0734) {
return true;
} else {
fputs($_MMVAR_8508d1c2251c7e0734, "POST ".$_MMVAR_67d29a4d9a85e9e790["path"]." HTTP/1.1\r\n");
fputs($_MMVAR_8508d1c2251c7e0734, "Host: ".$_MMVAR_67d29a4d9a85e9e790["host"]."\r\n");
fputs($_MMVAR_8508d1c2251c7e0734, "Content-type: application/x-www-form-urlencoded\r\n");
fputs($_MMVAR_8508d1c2251c7e0734, "Content-length: ".strlen($_MMVAR_67d29a4d9a85e9e790["query"])."\r\n");
fputs($_MMVAR_8508d1c2251c7e0734, "Connection: close\r\n\r\n");
fputs($_MMVAR_8508d1c2251c7e0734, $_MMVAR_67d29a4d9a85e9e790["query"] . "\r\n\r\n");
while(!feof($_MMVAR_8508d1c2251c7e0734)) {
$_MMVAR_23d7b4f65617dfaf6b[]=@fgets($_MMVAR_8508d1c2251c7e0734, 1024);
}

fclose($_MMVAR_8508d1c2251c7e0734);
$_MMVAR_23d7b4f65617dfaf6b = implode(",",$_MMVAR_23d7b4f65617dfaf6b);
$_MMVAR_407469cd68181483c3='';
while (list ($_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_32ffb19989f323302e) = each ($_POST)) {
$_MMVAR_407469cd68181483c3.=$_MMVAR_be0ff7fbb4af7d07f5."=".$_MMVAR_32ffb19989f323302e."&";
}

return $_MMVAR_23d7b4f65617dfaf6b;
}

}

function _MMFUN_ca1659cf7d4b2263e4($_MMVAR_b1e6dd5354388c88a3) {
ksort($_MMVAR_b1e6dd5354388c88a3);
reset($_MMVAR_b1e6dd5354388c88a3);
return $_MMVAR_b1e6dd5354388c88a3;

}

function _MMFUN_2a69b085e53a945e12($_MMVAR_203bdf2cb091abfba3) {
$_MMVAR_ca0023a3645322d945='';
if($this->_MMVAR_f9af453628d3348749== 'MD5') {
$_MMVAR_ca0023a3645322d945 = md5($_MMVAR_203bdf2cb091abfba3);
}elseif($this->_MMVAR_f9af453628d3348749=='DSA') {

die("DSA 签名方法待后续开发，请先使用MD5签名方式");
}else {
die("支付宝暂不支持".$this->_MMVAR_f9af453628d3348749."类型的签名方式");
}
return $_MMVAR_ca0023a3645322d945;
}
/***********************除去数组中的空值和签名模式*****************************/
function _MMFUN_659d214a1feaf77f50($_MMVAR_26ab341f9e0d35e3bf) {
$_MMVAR_954ef29ccb028f83dc = array();
while (list ($_MMVAR_be0ff7fbb4af7d07f5, $_MMVAR_32ffb19989f323302e) = each ($_MMVAR_26ab341f9e0d35e3bf)) {
if($_MMVAR_be0ff7fbb4af7d07f5 == "sign" || $_MMVAR_be0ff7fbb4af7d07f5 == "sign_type" || $_MMVAR_32ffb19989f323302e == "")continue;
else	$_MMVAR_954ef29ccb028f83dc[$_MMVAR_be0ff7fbb4af7d07f5] = $_MMVAR_26ab341f9e0d35e3bf[$_MMVAR_be0ff7fbb4af7d07f5];

}
return $_MMVAR_954ef29ccb028f83dc;
}
/********************************************************************************/

/******************************实现多种字符编码方式*****************************/
function _MMFUN_41a7f98943f1ef6220($_MMVAR_23b59cee1d0230a542,$_MMVAR_1264b92e117c28b977 ,$_MMVAR_09785c63444efa13e0 ="GBK" ) {
$_MMVAR_ca42f03dc8040f35bb = "";
if(!isset($_MMVAR_1264b92e117c28b977) )$_MMVAR_1264b92e117c28b977  = $this->_MMVAR_26ab341f9e0d35e3bf['_input_charset '];
if($_MMVAR_09785c63444efa13e0 == $_MMVAR_1264b92e117c28b977 || $_MMVAR_23b59cee1d0230a542 ==null ) {
$_MMVAR_ca42f03dc8040f35bb = $_MMVAR_23b59cee1d0230a542;
} elseif (function_exists("mb_convert_encoding")){
$_MMVAR_ca42f03dc8040f35bb = mb_convert_encoding($_MMVAR_23b59cee1d0230a542,$_MMVAR_1264b92e117c28b977,$_MMVAR_09785c63444efa13e0);
} elseif(function_exists("iconv")) {
$_MMVAR_ca42f03dc8040f35bb = iconv($_MMVAR_09785c63444efa13e0,$_MMVAR_1264b92e117c28b977,$_MMVAR_23b59cee1d0230a542);
} else die("sorry, you have no libs support for charset change.");
return $_MMVAR_ca42f03dc8040f35bb;
}
/********************************************************************************/

}
?>
