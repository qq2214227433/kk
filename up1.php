<?php
/*
升级到最新版本，支持D09及以后的所有版本
*/

if(!is_file('config_ksreg_mb.php'))
	exit('Didn'.chr(39).'t find the configuration file template!');
if(!is_file('config_ksreg.php'))
	exit('Didn'.chr(39).'t find the configuration file!');
include('config_ksreg.php');
	
require(KS_DIR.'/inc/inc.php');

$dver=substr(SVERION,1,2);


if($dver<11){
    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `'.TNREG.'_xjl` ADD `kbsetting` VARCHAR( 1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL', 'notsync');	
    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `'.TNREG.'_xjl` SET `kbsetting` = \'1|0:0.1,1:0.2,7:1,30:2,90:6,185:12,365:24,9000:200\'', 'notsync');
}
if($dver<12){
    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `'.TNREG.'_xjl` CHANGE `rmb90` `rmb90` DECIMAL( 6, 2 ) UNSIGNED NOT NULL ,CHANGE `rmb365` `rmb365` DECIMAL( 6, 2 ) UNSIGNED NOT NULL ,CHANGE `rmb90s` `rmb90s` DECIMAL( 6, 2 ) UNSIGNED NULL DEFAULT \'0.00\',CHANGE `rmb365s` `rmb365s` DECIMAL( 6, 2 ) UNSIGNED NULL DEFAULT \'0.00\'', 'notsync');	
    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `'.TNREG.'_xjl` ADD `rmb185` DECIMAL( 6, 2 ) UNSIGNED NULL DEFAULT \'0\',ADD `rmb9000` DECIMAL( 7, 2 ) UNSIGNED NULL DEFAULT \'0\',ADD `rmb185s` DECIMAL( 6, 2 ) UNSIGNED NULL DEFAULT \'0\',ADD `rmb9000s` DECIMAL( 7, 2 ) UNSIGNED NULL DEFAULT \'0\'', 'notsync');
}
if($dver<13){
    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('CREATE TABLE IF NOT EXISTS `'.TNREG.'_passwordprotect` (  `id` int(10) unsigned NOT NULL auto_increment,  `userid` int(10) unsigned NOT NULL,  `sckey` varchar(2) character set ascii NOT NULL,  `scvalue` varchar(32) character set ascii NOT NULL,  PRIMARY KEY  (`id`),  KEY `userid` (`userid`,`sckey`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1', 'notsync');
}

$ssoft=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('SELECT `id`,`userid` from '.TNREG.'_xjl');
if($dver<14){	
    if(!empty($ssoft)){
      foreach ($ssoft as $rs) {
          $sql='ALTER TABLE `'.TNREG.'_keys_'.$rs['userid'].'_'.$rs['id'].'` ';
          $sql.=' ADD `daychklock` tinyint(2) unsigned default \'0\',';
          $sql.=' ADD `dayactivetimes` int(10) unsigned default \'0\',';
          $sql.=' ADD `d13int1` int(10) unsigned default \'0\',';
          $sql.=' ADD `d13int2` int(10) unsigned default \'0\',';
          $sql.=' ADD `d13int3` int(10) unsigned default \'0\',';
          $sql.=' ADD `d13int4` int(10) unsigned default \'0\',';
          $sql.=' ADD `d13int5` int(10) unsigned default \'0\'';
          $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($sql, 'notsync');
      }
    }
}
if($dver<15){	
    if(!empty($ssoft)){
      foreach ($ssoft as $rs) {
          $sql='ALTER TABLE `'.TNREG.'_keys_'.$rs['userid'].'_'.$rs['id'].'` CHANGE `keys` `keys` VARCHAR( 24 ) CHARACTER SET ascii COLLATE ascii_bin NOT NULL';
          //echo $sql."\r\n";
          $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($sql, 'notsync');
          $sql='ALTER TABLE `'.TNREG.'_logs_'.$rs['userid'].'_'.$rs['id'].'` CHANGE `keys` `keys` VARCHAR( 24 ) CHARACTER SET ascii COLLATE ascii_bin NOT NULL';
          //echo $sql."\r\n";
          $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($sql, 'notsync');
      }
    }
    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `'.TNREG.'_bdlogs` CHANGE `keys` `keys` VARCHAR( 24 ) CHARACTER SET ascii COLLATE ascii_bin NOT NULL', 'notsync');
    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `'.TNREG.'_link` CHANGE `keys` `keys` VARCHAR( 24 ) CHARACTER SET ascii COLLATE ascii_bin NOT NULL', 'notsync');

    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `'.TNREG.'_temppay` CHANGE `basekey` `basekey` VARCHAR( 24 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL', 'notsync');

    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `'.TNREG.'_xjl` ADD `clientunbindmintime` DECIMAL( 5, 2 ) UNSIGNED NULL DEFAULT \'0\',ADD `keylen` TINYINT( 2 ) UNSIGNED NULL DEFAULT \'16\'', 'notsync');  

    
    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('CREATE TABLE IF NOT EXISTS `reg_client_errlog` (  `id` int(10) unsigned NOT NULL auto_increment,  `softcode` int(7) unsigned NOT NULL,  `errtime` int(11) NOT NULL,  `pccode` varchar(16) character set ascii NOT NULL,  `pcip` varchar(20) character set ascii NOT NULL,  `keytext` varchar(100) default NULL,  PRIMARY KEY  (`id`),  KEY `softcode` (`softcode`,`errtime`,`pccode`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1', 'notsync');

    
    
}

if($dver<16){	   
    $_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('CREATE TABLE IF NOT EXISTS `reg_unbindlog` (  `id` int(10) unsigned NOT NULL,  `userid` int(10) unsigned NOT NULL,  `xjlid` int(10) unsigned NOT NULL,  `addtime` int(10) unsigned NOT NULL,  `basekey` varchar(24) NOT NULL,  `oldcday` decimal(8,2) NOT NULL,  `newcday` decimal(8,2) NOT NULL,  `edittype` varchar(20) default NULL,  KEY `userid` (`userid`,`xjlid`,`basekey`)) ENGINE=MyISAM DEFAULT CHARSET=utf8', 'notsync');   
    
}

if($dver<17){
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('CREATE TABLE `reg_keyattribute` (  `id` int(10) unsigned NOT NULL auto_increment,  `keyname` varchar(50) NOT NULL,  `keycday` decimal(7,2) unsigned NOT NULL,  `keytimes` int(10) unsigned NOT NULL default \'0\',  `keysysrmb` decimal(7,2) unsigned NOT NULL,  `keyfirststr` varchar(1) character set ascii NOT NULL,  `issystem` int(1) unsigned NOT NULL default \'0\',  PRIMARY KEY  (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1', 'notsync');
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `reg_keyattribute` (`id`, `keyname`, `keycday`, `keytimes`, `keysysrmb`, `keyfirststr`, `issystem`) VALUES(1, \'临时卡\', 10.00, 0, 0.00, \'L\', 0),(2, \'试用卡\', 0.00, 0, 0.00, \'S\', 0),(3, \'免费帐号基卡\', 0.00, 0, 0.00, \'M\', 0),(4, \'转存\', 0.00, 0, 0.00, \'O\', 0),(10, \'天卡\', 1.00, 0, 0.10, \'T\', 0),(11, \'周卡\', 7.00, 0, 1.00, \'Z\', 0),(12, \'月卡\', 30.00, 0, 2.00, \'Y\', 0),(13, \'季卡\', 90.00, 0, 6.00, \'J\', 0),(14, \'半年卡\', 185.00, 0, 12.00, \'R\', 0),(15, \'年卡\', 365.00, 0, 24.00, \'N\', 0),(16, \'终身卡\', 9000.00, 0, 50.00, \'A\', 0),(17, \'小时卡\', 0.04, 0, 0.05, \'D\', 0),(18, \'扩展卡类1\', 0.00, 0, 2.00, \'F\', 0),(19, \'扩展卡类2\', 0.00, 0, 2.00, \'G\', 0),(20, \'扩展卡类3\', 0.00, 0, 2.00, \'H\', 0),(21, \'扩展卡类4\', 0.00, 0, 2.00, \'I\', 0),(22, \'扩展卡类5\', 0.00, 0, 2.00, \'K\', 0),(23, \'扩展卡类6\', 0.00, 0, 2.00, \'B\', 0),(24, \'扩展卡类7\', 0.00, 0, 2.00, \'P\', 0),(25, \'扩展卡类8\', 0.00, 0, 2.00, \'U\', 0),(26, \'扩展卡类9\', 0.00, 0, 2.00, \'W\', 0)', 'notsync');
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('CREATE TABLE `reg_keyextkb` (  `id` int(10) unsigned NOT NULL auto_increment,  `softid` int(10) unsigned NOT NULL,  `keytypeid` int(10) unsigned NOT NULL,  `linknum` int(11) unsigned NOT NULL default \'1\',  `rmb` decimal(7,2) NOT NULL default \'1.00\',  PRIMARY KEY  (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1', 'notsync');
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('CREATE TABLE `reg_keyprice` (  `id` int(11) NOT NULL auto_increment,  `userid` int(10) unsigned NOT NULL,  `softid` int(11) NOT NULL,  `keyattrid` int(11) NOT NULL,  `linknum` int(11) NOT NULL default \'1\',  `keyprice1` decimal(8,2) unsigned NOT NULL default \'0.00\',  `keyprice2` decimal(8,2) unsigned NOT NULL default \'0.00\',  `keyprice3` decimal(8,2) unsigned NOT NULL default \'0.00\',  PRIMARY KEY  (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1', 'notsync');	
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('DROP TABLE IF EXISTS `reg_config`', 'notsync');
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('CREATE TABLE `reg_config` (  `setname` varchar(50) NOT NULL,  `setvalue` varchar(250) NOT NULL,  `setintro` varchar(250) NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8', 'notsync');
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `reg_config` (`setname`, `setvalue`, `setintro`) VALUES(\'ks_version\', \'D17-260\', \'系统版本\')', 'notsync');

}

if($dver<18)
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `reg_order` ADD `alipayorderno` VARCHAR( 32 ) NULL', 'notsync');


if($dver<19){
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `reg_link` ADD `online` INT( 1 ) NULL DEFAULT \'0\',ADD `v7ext2` VARCHAR( 32 ) NULL DEFAULT \'\'', 'notsync');
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `reg_xjl` ADD `muestexit` INT( 1 ) NULL DEFAULT \'0\'', 'notsync'); 
}	


if($dver<20){
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `reg_agent` ADD `rmb` DECIMAL( 9, 2 ) NOT NULL DEFAULT \'0\',ADD `powerlist` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT \'\',ADD `parentid` INT NULL DEFAULT \'0\',ADD `extstr1` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT \'\',ADD `extstr2` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT \'\',ADD `extstr3` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT \'\',ADD `extin1` INT NOT NULL DEFAULT \'0\',ADD `extin2` INT NOT NULL DEFAULT \'0\',ADD `extin3` INT NOT NULL DEFAULT \'0\'', 'notsync');
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `reg_xjl` ADD `locktimes` INT( 10 ) NULL DEFAULT \'0\'', 'notsync');
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `reg_xjl` ADD `softnotice` VARCHAR( 5000 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,ADD `extint1` INT UNSIGNED NULL DEFAULT \'0\',ADD `extint2` INT UNSIGNED NULL DEFAULT \'0\',ADD `extint3` INT UNSIGNED NULL DEFAULT \'0\',ADD `extstr1` VARCHAR(5000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT \'\'', 'notsync');
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('CREATE TABLE `reg_agentrmblog` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,`addtime` INT UNSIGNED NOT NULL ,`rmb1` DECIMAL( 9, 2 ) NOT NULL ,`rmb2` DECIMAL( 9, 2 ) NOT NULL ,`rmb3` DECIMAL( 9, 2 ) NOT NULL ,`info` VARCHAR( 100 ) NOT NULL ,`userid` INT UNSIGNED NOT NULL ,`agentid` INT UNSIGNED NOT NULL ,PRIMARY KEY ( `id` ))', 'notsync');
}
	
if($dver<21){
	$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('ALTER TABLE `reg_order` ADD `keytypeid` INT UNSIGNED NOT NULL DEFAULT \'0\'', 'notsync');
}	

$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE `reg_config` SET `setvalue` = \'D21-280\' WHERE `setname` = \'ks_version\' LIMIT 1', 'notsync');


echo '数据库升级完成<br><br><a href=up2.php target=_blank>点击这里访问up2.php更新配置文件，如若更新失败，请不要再做任何操作，第一时间联系可可，不在线请CALL手机15927664276</a>';
		
	if(@!unlink('up1.php'))
		echo '删除up1.php失败，up1.php删除失败up2.php将不能访问，需手动进FTP或服务器删除';
		

	

function mco($c,$n,$v){		//字符串
	return preg_replace('/define\(\''.$n.'\',\'[^\']*\'\)/i','define(\''.$n.'\',\''.$v.'\')', $c); 
} 
function mco2($c,$n,$v){		//数字
	return preg_replace('/define\(\''.$n.'\',[^\)]*\)/i','define(\''.$n.'\','.$v.')', $c); 
} 
?>