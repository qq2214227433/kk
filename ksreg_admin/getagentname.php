<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');

if(_MMFUN_44c1eaa638cc1b7de2(1))
exit();
$_MMVAR_2a84e670cab8778002=_MMFUN_cc3cf510bffd973b95('agentid','get','int',0);
if($_MMVAR_2a84e670cab8778002==0)
exit('$('.YH.'td[agentid=\''.$_MMVAR_2a84e670cab8778002.'\']'.YH.').attr(\'get\',1).text(\'无\');');

$_MMVAR_a8b8130bfa7438502c=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_agent where id='.$_MMVAR_2a84e670cab8778002);
if(!empty($_MMVAR_a8b8130bfa7438502c))
exit('$('.YH.'td[agentid=\''.$_MMVAR_2a84e670cab8778002.'\']'.YH.').attr(\'get\',1).text(\''.$_MMVAR_a8b8130bfa7438502c['agentname'].'\');');

?>