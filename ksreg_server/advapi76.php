<?php 
	//生成日期:2012-04-04 10点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php


require('../config_ksreg.php');
require(KS_DIR.'/inc/import.fun.php');
require(KS_DIR.'/inc/mysql.cls.php');
$_MMVAR_a78f3425a9457376a7=_MMFUN_cc3cf510bffd973b95('d', 'get', 'sql', '');
$_MMVAR_a78f3425a9457376a7=md5($_MMVAR_a78f3425a9457376a7);
if(isset($_POST['s'])){
$_MMVAR_e21ee1d236d13da420=$_POST['s'];
}else{
$_MMVAR_e21ee1d236d13da420=$_GET['s'];
}

$_MMVAR_e21ee1d236d13da420=str_replace(' ','',$_MMVAR_e21ee1d236d13da420);
$_MMVAR_e21ee1d236d13da420=str_replace('%','',$_MMVAR_e21ee1d236d13da420);
$_MMVAR_e21ee1d236d13da420=str_replace('\'','',$_MMVAR_e21ee1d236d13da420);
$_MMVAR_e21ee1d236d13da420=str_replace('\\'.YH,'',$_MMVAR_e21ee1d236d13da420);
$_MMVAR_e21ee1d236d13da420=_MMFUN_fd9991e434eadc1b7d($_MMVAR_e21ee1d236d13da420);
$_MMVAR_5469941594cb77a2cc=0;
$_MMVAR_d033b340b90db33987=0;
if($_MMVAR_e21ee1d236d13da420=='SIGNERR')exit(_MMFUN_a5a861282c21bfd0da('ERR向服务器发送的数据错误'));
if($_MMVAR_e21ee1d236d13da420=='TIMEERR' && $_MMVAR_a78f3425a9457376a7 != '46e7b5849c67b7fd9a60cdb012e41ff7')exit(_MMFUN_a5a861282c21bfd0da('ERR向服务器发送的数据过期'));
$_MMVAR_b0b00e6800c176858c=explode(':|:', $_MMVAR_e21ee1d236d13da420);
if($_MMVAR_a78f3425a9457376a7=='46e7b5849c67b7fd9a60cdb012e41ff7'){echo "<pre>";print_r($_MMVAR_b0b00e6800c176858c);echo "</pre>";}

if(count($_MMVAR_b0b00e6800c176858c) != 6)exit(_MMFUN_a5a861282c21bfd0da('ERR向服务器发送的数据参数个数错误'));

list($_MMVAR_e8a3403d69ff92b042,$_MMVAR_4636597e3cdf3261d1,$_MMVAR_9bc3356454a08037c9,$_MMVAR_690ac2799052e80b82,$_MMVAR_efbd0702871961d1f7,$_MMVAR_f08e348f6b101d999f)=$_MMVAR_b0b00e6800c176858c;
$_MMVAR_7a95935f671f06ce97=KS_DIRP.KS_PATH.'/phpcode/'.$_MMVAR_e8a3403d69ff92b042.'_'._MMFUN_cf8c11a79575861c0c($_MMVAR_e8a3403d69ff92b042,8).'.php';
if(is_file($_MMVAR_7a95935f671f06ce97)!==true)exit(_MMFUN_a5a861282c21bfd0da('ERR没有找到用户API的php文件'));

$_MMVAR_9f95914834184aeeae=New mysql_cls;
$_MMVAR_9f95914834184aeeae->_MMFUN_06067bafeb84eaf0af($_MMVAR_abb6c66b467898e5c7);
if(CHKADVAPI==1)_MMFUN_94b26cf2048ac72ae3($_MMVAR_e8a3403d69ff92b042,$_MMVAR_9bc3356454a08037c9,$_MMVAR_efbd0702871961d1f7,$_MMVAR_f08e348f6b101d999f);
include($_MMVAR_7a95935f671f06ce97);
$_MMVAR_633a5e390b3be6a833=_MMFUN_a5a861282c21bfd0da(_MMFUN_4514aec9187ac52bf0($_MMVAR_690ac2799052e80b82));
if(MEMEXT==1){
_MMFUN_cdbf323b80fd806270($_MMVAR_e8a3403d69ff92b042);	
}elseif(MEMEXT==2){
_MMFUN_127bd603349c0fbdd2($_MMVAR_e8a3403d69ff92b042);
}
exit($_MMVAR_633a5e390b3be6a833);


function _MMFUN_4514aec9187ac52bf0($_MMVAR_690ac2799052e80b82){ 
$_MMVAR_ea8a834b6a94523fe3=explode(',', $_MMVAR_690ac2799052e80b82);
$_MMVAR_570fecca21fcc45976=$_MMVAR_ea8a834b6a94523fe3[0];
if(substr($_MMVAR_570fecca21fcc45976,0,2)!='v_')
return 'ERR接口函数名必须以v_开头';
if (function_exists($_MMVAR_570fecca21fcc45976)){
return $_MMVAR_570fecca21fcc45976($_MMVAR_ea8a834b6a94523fe3);
}else{
return 'ERR接口函数找到';
}
} 

function _MMFUN_94b26cf2048ac72ae3($_MMVAR_e8a3403d69ff92b042,$_MMVAR_9bc3356454a08037c9,$_MMVAR_efbd0702871961d1f7,$_MMVAR_f08e348f6b101d999f){
global $_MMVAR_abb6c66b467898e5c7,$_MMVAR_5469941594cb77a2cc,$_MMVAR_d033b340b90db33987,$_MMVAR_9f95914834184aeeae;
$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_xjl` where `xjlcode`='.$_MMVAR_e8a3403d69ff92b042);
if(empty($_MMVAR_e9ffef5bdc7675ff63))
exit(_MMFUN_a5a861282c21bfd0da('ERR没有找到软件'));
$_MMVAR_5469941594cb77a2cc=$_MMVAR_e9ffef5bdc7675ff63['id'];
$_MMVAR_d033b340b90db33987=$_MMVAR_e9ffef5bdc7675ff63['userid'];
$_MMVAR_3fc22e00af1642a292=TNREG.'_keys_'.$_MMVAR_e9ffef5bdc7675ff63['userid'].'_'.$_MMVAR_e9ffef5bdc7675ff63['id'];

$_MMVAR_be0ff7fbb4af7d07f5=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.$_MMVAR_3fc22e00af1642a292.'` where `keys`=\''.$_MMVAR_9bc3356454a08037c9.'\'');
if(empty($_MMVAR_be0ff7fbb4af7d07f5))
exit(_MMFUN_a5a861282c21bfd0da('ERR635'));

if($_MMVAR_be0ff7fbb4af7d07f5['isdel']==1)
exit(_MMFUN_a5a861282c21bfd0da('ERR635'));

if(intval($_MMVAR_be0ff7fbb4af7d07f5['normal']) !== 1)
exit(_MMFUN_a5a861282c21bfd0da('ERR638'));

if(($_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys' && $_MMVAR_be0ff7fbb4af7d07f5['linknum']<2) || (intval($_MMVAR_e9ffef5bdc7675ff63['dkbindpc']) < 2 && $_MMVAR_e9ffef5bdc7675ff63['ext1']=='user')){
if($_MMVAR_be0ff7fbb4af7d07f5['cday']!=0 && $_MMVAR_be0ff7fbb4af7d07f5['chkcode'] != $_MMVAR_f08e348f6b101d999f)
exit(_MMFUN_a5a861282c21bfd0da('ERR655'));
}else{
if(intval($_MMVAR_e9ffef5bdc7675ff63['dkbindpc']) < 2 && $_MMVAR_e9ffef5bdc7675ff63['ext1']=='keys'){
$_MMVAR_5d8476ca936eea9a12=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from `'.TNREG.'_link` where `keys`=\''.$_MMVAR_9bc3356454a08037c9.'\' and `xjlid`='.$_MMVAR_be0ff7fbb4af7d07f5['xjlid'].' and `clientid`='.$_MMVAR_efbd0702871961d1f7);
if(empty($_MMVAR_5d8476ca936eea9a12))
exit(_MMFUN_a5a861282c21bfd0da('ERR660'));
if($_MMVAR_5d8476ca936eea9a12['linecode']!=$_MMVAR_f08e348f6b101d999f)
exit(_MMFUN_a5a861282c21bfd0da('ERR659'));
}  
}
}


function _MMFUN_127bd603349c0fbdd2($_MMVAR_e8a3403d69ff92b042){
global $_MMVAR_abb6c66b467898e5c7,$_MMVAR_633a5e390b3be6a833,$_MMVAR_9f95914834184aeeae;
$_MMVAR_d6858a6d9e9ee80bab=substr($_MMVAR_e8a3403d69ff92b042,0,5);
$_MMVAR_21d5b26895994339c1=MEMCHACEDNAME.$_MMVAR_d6858a6d9e9ee80bab;
$_MMVAR_659f64713cd2c4f53f = new Memcache; 
$_MMVAR_659f64713cd2c4f53f->_MMFUN_06067bafeb84eaf0af('127.0.0.1', 11211);
$_MMVAR_32ffb19989f323302e = $_MMVAR_659f64713cd2c4f53f->get($_MMVAR_21d5b26895994339c1);
if($_MMVAR_32ffb19989f323302e==''){
$_MMVAR_659f64713cd2c4f53f->set($_MMVAR_21d5b26895994339c1, 1, 0, 1800);
}elseif((int)$_MMVAR_32ffb19989f323302e<100){
$_MMVAR_659f64713cd2c4f53f->increment($_MMVAR_21d5b26895994339c1, 1); 
}else{
$_MMVAR_3aab117c947ac460d4=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select `phpmftimes`,`phpcoderuntimes` from `'.TNREG.'_user` where `id`='.$_MMVAR_d6858a6d9e9ee80bab);
if(!empty($_MMVAR_3aab117c947ac460d4)){
if((int)$_MMVAR_3aab117c947ac460d4['phpmftimes'] >= $_MMVAR_32ffb19989f323302e){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_user` SET `phpmftimes`=`phpmftimes`-'.$_MMVAR_32ffb19989f323302e.' where `id`='.$_MMVAR_d6858a6d9e9ee80bab, 'notsync');
$_MMVAR_659f64713cd2c4f53f->set($_MMVAR_21d5b26895994339c1, 1, 0, 1800);
}elseif($_MMVAR_3aab117c947ac460d4['phpmftimes']+$_MMVAR_3aab117c947ac460d4['phpmftimes'] >= $_MMVAR_32ffb19989f323302e){
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_user` SET `phpmftimes`=0, `phpcoderuntimes`=`phpcoderuntimes`-'.($_MMVAR_32ffb19989f323302e-$_MMVAR_3aab117c947ac460d4['phpmftimes']).' where `id`='.$_MMVAR_d6858a6d9e9ee80bab, 'notsync');
$_MMVAR_659f64713cd2c4f53f->set($_MMVAR_21d5b26895994339c1, 1, 0, 1800);				
}else{
$_MMVAR_659f64713cd2c4f53f->close();				
exit(_MMFUN_a5a861282c21bfd0da('ERR高级API可用次数不足'));
}
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_user` SET `phpcoderuntimes`=`phpcoderuntimes`-'.$_MMVAR_32ffb19989f323302e.' where `id`='.$_MMVAR_d6858a6d9e9ee80bab, 'notsync');
$_MMVAR_659f64713cd2c4f53f->set($_MMVAR_21d5b26895994339c1, 1, 0, 1800);
}		
}
$_MMVAR_659f64713cd2c4f53f->close();
}



function _MMFUN_cdbf323b80fd806270($_MMVAR_e8a3403d69ff92b042){
global $_MMVAR_abb6c66b467898e5c7,$_MMVAR_633a5e390b3be6a833,$_MMVAR_9f95914834184aeeae;
$_MMVAR_d6858a6d9e9ee80bab=substr($_MMVAR_e8a3403d69ff92b042,0,5);
$_MMVAR_3aab117c947ac460d4=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select phpcoderuntimes from `'.TNREG.'_user` where `id`='.$_MMVAR_d6858a6d9e9ee80bab);
if(!empty($_MMVAR_3aab117c947ac460d4)){
if((int)$_MMVAR_3aab117c947ac460d4['phpcoderuntimes']<100)				
exit(_MMFUN_a5a861282c21bfd0da('ERR高级API可用次数不足'));
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('update `'.TNREG.'_user` SET `phpcoderuntimes`=`phpcoderuntimes`-1 where `id`='.$_MMVAR_d6858a6d9e9ee80bab, 'sync');
}	 
}
?>