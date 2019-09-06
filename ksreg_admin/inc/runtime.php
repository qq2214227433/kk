<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
class runtime{ 
public $_MMVAR_4c68d2cef8a8bb93b1 = 0; 
public $_MMVAR_0e8df0535b2b794dc0 = 0;  
function _MMFUN_5523e736a8dc384866(){list($_MMVAR_42ce552fa54dfc0468, $_MMVAR_ef9fdf796e7ab84fee) = explode(' ', microtime());return ((float)$_MMVAR_42ce552fa54dfc0468 + (float)$_MMVAR_ef9fdf796e7ab84fee);} 
function _MMFUN_75ca9dc8ef905464ef(){$this->_MMVAR_4c68d2cef8a8bb93b1= $this->_MMFUN_5523e736a8dc384866();}  
function _MMFUN_2ff52b47fa1890bb43(){$this->_MMVAR_0e8df0535b2b794dc0= $this->_MMFUN_5523e736a8dc384866();}  
function _MMFUN_2bc50f97e2e07d84c2(){return round(($this->_MMVAR_0e8df0535b2b794dc0- $this->_MMVAR_4c68d2cef8a8bb93b1) * 1000, 1);}
}?>