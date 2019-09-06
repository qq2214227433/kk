<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
$_MMVAR_d33d99728057abfbee=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_ccip` where `ip`='.$_MMVAR_6cd2e572bb6c2102d1);
if(!empty($_MMVAR_d33d99728057abfbee)){
if(time()-$_MMVAR_d33d99728057abfbee['lasttime']<CCTIME){
if($_MMVAR_d33d99728057abfbee['times']-CCTIMES>0){
file_put_contents(KS_DIRP.KS_PATH_PUBLIC.'/logs/lockip.txt',$_MMVAR_c41d05a435b3047505.$_MMVAR_6cd2e572bb6c2102d1.',');
exit('ip locked!');
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_ccip SET `times`=times+1, `lasttime`='.time().' where `id`='.$_MMVAR_d33d99728057abfbee['id'], 'notsync');		
}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('delete from '.TNREG.'_ccip where where `id`='.$_MMVAR_d33d99728057abfbee['id'], 'notsync');	      
}
}else{
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO '.TNREG.'_ccip (`ip`,`lasttime`,`times` ) VALUES ('.$_MMVAR_6cd2e572bb6c2102d1.', '.time().', 1)', 'notsync');
}
?>