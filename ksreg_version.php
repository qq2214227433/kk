<?php
define('SVERION','D16-B0249');			/* 程序版本号，请勿修改 */
/*
██████  备注：
██████    邮件备份和通知功能，未完善
██████    

//V77*********************************************
D16-B0249 (17:52 2011-11-4):
  修正卡模式禁止修改绑定信息时，不能设置初时绑定信息的BUG
  ksreg_server/chkapi77.php
  
  旧的多开判断模式：
    1、多连接卡，需输入客户端ID，只可在同一电脑多开
    2、多连接卡，需输入客户端ID，可在不同电脑多开
    
  新的多开判断模式：
    1、多连接卡，需输入客户端ID，只可在同一电脑多开（不限多开数）
    2、多连接卡，需输入客户端ID，可在不同电脑多开（不限多开数）
    
    4、多连接卡，不检查客户端ID，只可在同一电脑多开（不检查，也要传客户端ID给DLL的，可改成随机生成一个10位的数字，以防重复）
    5、多连接卡，不检查客户端ID，可在不同电脑多开（不检查，也要传客户端ID给DLL的，可改成随机生成一个10位的数字，以防重复）
    6、用户模式可在同一电脑可多开（不限多开数）
  ksreg_server/chkv77.php
  
  
D16-B0248 (17:52 2011-11-1):
  修正单连接卡客户端ID过滤
  ksreg_server/chkv77.php
  
  注册卡列表，增显绑定信息
  ksreg_admin/key/keymain0.php
  ksreg_public/js/keylist0.js
  
D16-B0247 (12:11 2011-11-1):  
  用户列表增加批量修改绑定信息功能
    ksreg_admin/key/keymain1.php
    ksreg_admin/key/keybatch.php
     
  增加代理可修改注册卡绑定分区功能
    kspay/card.php
    kspay/card/card_keylist0.php
    kspay/card/keylist0.js
  
D16-B0246 (20:16 2011-10-28):  
  开通解绑功能，新增解绑日志表
  新增修改注册卡绑定信息接口
  新增日志表，记录解绑按钮解绑和修改注册卡绑定信息的扣时记录
  修正搜索中文标签某些浏览器不能正常翻页的BUG

  
D15-B0245 (10:46 2011-10-23):
  修正77版不能充值多张卡的BUG
  
D15-B0244 (17:09 2011-10-19):
  修正日志显示不正确
  
D15-B0243 (18:27 2011-10-14):
  修改几处短标记<?为<?php
  
D15-B0242 (16:38 2011-10-14):
  修正备服客户接口解析出错问题 
  ksreg_server/chkv77.php
  
D15-B0241 (23:00 2011-10-7):
  修正不能删除24位卡的BUG
  ksreg_admin/key/keybatch.php
  
D15-B0240 (21:51 2011-9-28):
  注册卡24位支持
  ksreg_server/chkv77.php
  ksreg_server/chkapi76.php
  ksreg_server/chkv76.php
  ksreg_server/chkv75.php
  ksreg_server/chkv7.php
  ksreg_server/api75.php
  ksreg_server/api70.php
  ksreg_admin/inc/add_table_mfkey.php
  ksreg_admin/key/keysave.php
  ksreg_admin/key/keysavetemp.php
  kspay/card/card_step2.php
  软件设置接口添加
  ksreg_admin/prolist.php
  ksreg_admin/keylist_.php
  
  数据库升级备注
    注册卡号24位支持
      ALTER TABLE `reg_keys_***_*` CHANGE `keys` `keys` CHAR( 24 ) CHARACTER SET ascii COLLATE ascii_bin NOT NULL;
      ALTER TABLE `reg_logs_***_*` CHANGE `keys` `keys` CHAR( 24 ) CHARACTER SET ascii COLLATE ascii_bin NOT NULL;
      ALTER TABLE `reg_bdlogs` CHANGE `keys` `keys` CHAR( 24 ) CHARACTER SET ascii COLLATE ascii_bin NOT NULL ;
      ALTER TABLE `reg_link` CHANGE `keys` `keys` CHAR( 24 ) CHARACTER SET ascii COLLATE ascii_bin NOT NULL ;
      ALTER TABLE `reg_temppay` CHANGE `basekey` `basekey` CHAR( 24 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;

    加入防非法查卡记录表：
      CREATE TABLE IF NOT EXISTS `reg_client_errlog` (
        `id` int(10) unsigned NOT NULL auto_increment,
        `softcode` int(7) unsigned NOT NULL,
        `errtime` int(11) NOT NULL,
        `pccode` varchar(16) character set ascii NOT NULL,
        `pcip` varchar(20) character set ascii NOT NULL,
        `keytext` varchar(100) default NULL,
        PRIMARY KEY  (`id`),
        KEY `softcode` (`softcode`,`errtime`,`pccode`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

    客户端解绑扣时参数
      ALTER TABLE `reg_xjl` ADD `clientunbindmintime` DECIMAL( 5, 2 ) UNSIGNED NULL DEFAULT '0',ADD `keylen` TINYINT( 2 ) UNSIGNED NULL DEFAULT '16';
  
  
D14-B0232 (21:36 2011-9-26):
  修正文件，验证前对取版本号和下载地址的支持
    ksreg_server/uplogs.php
    
D14-B0231 (20:58 2011-9-25):
  新增7.7版服务端支持文件
    ksreg_server/chkv77.php
    
//V76*********************************************    
D14-B0230 (13:32 2011-9-6):
  新增特殊代理可直接下单提卡，不用实时付款，订单自动完成状态（该功能只能对你特别信任的代理）
    ksreg_pay/card/card_step1.php
    ksreg_pay/card/card_step2.php
    kspay/notify_url.php
    kspay/return_url.php
    ksreg_admin/patch/d14b0230.php
    ksreg_admin/patch/patch_index.php
    
D14-B0228 (8:28 2011-8-19):
  新增批量查询卡号功能，可简单实现退卡操作
    ksreg_admin/index.php
    ksreg_admin/exitkey.php
  优化批处理页面
    ksreg_admin/query.php
    
D14-B0227 (16:03 2011-8-16):
  整理系统添加自动清理过期的免费帐号
    ksreg_admin/inc/add_table_mfkey.php
    
D14-B0226 (12:03 2011-8-16):
  修复高级管理，查看报表统计数字全为0的BUG
    ksreg_admin/report.php
  修复超级管理，全局参数设置里的设置项“充值过的卡和过期的用户只保留”60以下的数据不能设置的BUG 
    ksreg_admin/sysset.php
  
D14-B0225 (13:49 2011-8-10):
  新增单服用户在登陆时自动判断是否需要整理系统（旧版本有双服时才会自动整理系统，单服需手动点击整理系统）。
    ksreg_admin/chklogin.php
  新增用户模式关闭软件注册新用户的功能，使用该功能时需修改配置文件ksreg_admin/patch/d14b0226.php
  ksreg_admin/patch/patch_index.php
  ksreg_admin/patch/d14b0226.php
  ksreg_server/chkapi76.php
  ksreg_server/api75.php
  
    
D14-B0225 (23:30 2011-7-31):
  添加临时卡时的BUG修复。
    ksreg_public/chkhosta.php
    ksreg_admin/key/keysavetemp.php
    
D14-B0223 (19:44 2011-7-22):
  后台添加注册卡时可指定代理身份。
    ksreg_admin/key/keyadd.php
    ksreg_admin/key/keysave.php
    
D14-B0222 (16:56 2011-7-11):
  日志顺序混乱修正。
    ksreg_admin/logs.php
    
D14-B0221 (14:15 2011-7-5):
  只能在同一台机子上多开的卡的可解绑次数生效。
    ksreg_server/chkv76.php
    
D14-B0220 (13:44 2011-7-2):
  备份数据库增加对服务器配置参数不是很好的主机支持，sql文本备份。
    ksreg_admin/BackupData.php
    ksreg_admin/patch/d13b0220.php
    ksreg_admin/patch/patch_index.php
    
D13-B0219 (17:28 2011-7-1):
  购卡时一处变量名错误修正
    kspay/card/card_step2.php

D13-B0218 (9:20 2011-6-29):
  双服验证从服务器获取的数据错误的潜在BUG修复
	修改了ksreg_config.php  里的 function _KSFUN_O58f74c5ea3d676934(){}函数
  优化试用卡有效期返回数据
    ksreg_server/chkv76.php
    
D13-B0217 (23:31 2011-6-26):
  修正同时修改用户名和登陆密码时，无法保存信息的BUG
    ksreg_server/chkapi76.php
    
D13-B0216 (21:18 2011-6-23):
  修正已冻结的卡还可以充值的BUG
  修改文件
    ksreg_server/chkapi76.php
    ksreg_server/api75.php
    
D13-B0215 (22:28 2011-6-8):
  修正B0208版本后不能正常修改用户信息的BUG
  修改文件
    ksreg_server/chkapi76.php
    ksreg_server/api75.php
    
D13-B0213 (22:28 2011-6-8):
  reg_keys_***_***表新增字段 daychklock dayactivetimes d13int1 d13int2 d13int3 d13int4 d13int5 供以后扩展调用
  修改文件
    admin/inc/add_table_mfkey.php

    
    
D12-B0212 (14:00 2011-6-3):
  配置文件可修改售卡系统右上角KSREG和其链接
  配置文件可修改售卡系统页脚版权信息
  去掉售卡系统的KSREG提示
    admin/patch/patch_index.php
    admin/patch/d12b0212.php
    admin/inc/import.fun.php
    pay/card/head.php
    pay/card.php
    
D12-B0211 (0:43 2011-6-1):
  修复卡模式或用户模式软件达到五的倍数时，在列表里出现多余字符的BUG
    ksreg_public/index.css
    admin/inc/softlist.php
    pay/agentsoftlist.php
    
D12-B0210 (22:07 2011-5-31):
  修复试用卡、试用帐号不能正常使用advapi的BUG
    ksreg_server/advapi76.php 
     
D12-B0209 (11:08 2011-5-31):
  修复免费帐号日志，和充值转绑日志不能翻页的BUG
  修改文件
    admin/regmfuserlog.php
    admin/timelog.php
  
  修复备服注册帐号时一处变量名笔误引发的BUG 
    ksreg_server/api75.php
    ksreg_server/chkapi76.php    
    
D12-B0208 (13:05 2011-5-30):
  后台禁止用户修改绑定信息时，用户还可修改的BUG修复
  修改文件
    admin/prolist.php   第377 378行修改 ,更新后服务端软件数据重新编辑保存一下 
    
    ksreg_server/api70.php  新增338 339两行 
    ksreg_server/api75.php   新增480 481两行 
    ksreg_server/chkapi76.php  新增443 444两行 
  
D12-B0207 (14:33 2011-5-29):
  登陆时新增密保卡选项，超级管理->全局参数设置->后台登陆验证
  修改文件
    admin/index.php   
      原72行-75行 -> 新72行-89行  
      105行修改
    admin/chklogin.php   新增49行-50行
    admin/sysset.php
  
    admin/patch/patch_index.php
  新增文件
    admin/patch/PasswordProtect.php
    admin/makecard.php  该文件是向数据库里写密保卡的，建议用的时候才上传，用完后删除。
  新增数据库表
  CREATE TABLE IF NOT EXISTS `reg_passwordprotect` (  `id` int(10) unsigned NOT NULL auto_increment,  `userid` int(10) unsigned NOT NULL,  `sckey` varchar(2) character set ascii NOT NULL,  `scvalue` varchar(32) character set ascii NOT NULL,  PRIMARY KEY  (`id`),  KEY `userid` (`userid`,`sckey`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1

D11-B0206 (21:23 2011-5-27):
  在线支付后获取alipay服务器订单状态兼容处理
  
D11-B0205 (19:52 2011-5-26):
  新增报表功能可方便与代理结算  菜单->高级管理->查看报表  
    admin/index.php  添加第222行  <li><a href='report.php?action=main' box="3">查看报表</a></li>
    admin/report.php 新增报表文件
	
D11-B0204 (22:39 2011-5-20):
	admin/inc/QQWry.Dat包在安装包里已移除
	
D11-B0203 (22:39 2011-5-19):
	修正多开卡不能正常使用advapi的BUG     ksreg_server/advap76.php
	
D11-B0202 (18:39 2011-5-19):
	修正不能正常修改半年卡和终身卡的价格     admin/prolist.php
	修正售卡系统点击购买半年卡和终身卡提示出错     pay/card/card_step1.php
	
D11-B0201 (10:37 2011-5-19):
	首次验证始终会发送软件下载地址给客户端 客户端在验证通过后可以用ks_GetData(6) 获取软件下载地址  ksreg_server/chkv76.php

D11-B0200 (15:25 2011-5-17):
	新增对动态链接库版本客户端的php接口文件 chkv76.php  chkapi76.php  advapi76.php




//V75**********************************************
D11-B0155 (23:15 2011-5-16):
	修复代理卡模式注册卡不能解绑和冻结操作无效的BUG
	卡模式后台可修改卡的连接数(计币管理帐号修改无效)

D11-B0153 (17:35 2011-5-16):
	修复备服注册用户时检查主服状态BUG

D11-B0152 (11:59 2011-5-15):
	修复代理不能搜索中文用户名的BUG

D11-B0151 (11:32 2011-5-13):
	修正代理购卡不正常的BUG card_step2.php[116] ErrID:8, Undefined variable: _MMVAR_6ab292966e12f515b0


D11-B0150 (9:17 2011-5-12):
	修正上一次版本修正时添加软件和卡的时候出现异常BUG

D11-B0149 (15:19 2011-5-11):
	代理界面显示的用户名未解码的问题修复
	卡号第一位字母解释 新增 R A
		S:试用卡
		M:免费帐号基卡
		T:天卡
		Z:周卡
		Y:月卡
		J:季卡
		R:半年卡
		N:年卡
		A:终身卡
		C:售卡系统自定义卡1
		V:售卡系统自定义卡2
		B:售卡系统自定义卡3
		E:售卡系统其它卡类
		X:后台添加的天数小于1的其它卡
		Q:后台添加的天数大于1的其它卡

D11-B0148 (7:54 2011-5-7):
	修正备份数据库时一条语句保存的数据太多的问题
	admin/BackupData.php

D11-B0147 (10:38 2011-5-1):
	优化更新软件表数据功能，并增加售卡系统对半年卡和终身卡的支持
	admin/prolist.php

	增加 充值过的卡和过期的用户只保留的天数微调项 7 30
	admin/sysset.php

	修正同步日志里临时卡同步记录显示文字
	修正数据变更记录无法查看advapi数据的小BUG
	admin/sync.php

D11-B0143 (23:20 2011-4-29):
	安装系统时，数据库地址只能填20个字符的限制移除
	install/index.php

D11-B0142 (15:08 2011-4-27):
	设定一台机只能注册一个帐号，但可能会无效的BUG修复
	ksreg_server/api75.php

D11-B0141 (13:09 2011-4-24):
	批量处理数据删除选项中的，增加安全保护，以防误操作（误操作真是杯具啊）
	admin/query.php

	session路径设置潜在的BUG修复 sync.php[244] ErrID:2, Invalid argument supplied for foreach()
	admin/sync.php

D11-B0139 (11:25 2011-4-23):
	用户列表增加一种按连接次数排序的方式
	admin/key/keymain1.php

	修改备案号时只能填写一个字符的BUG
	admin/inc/sysset.php

D11-B0138 (20:52 2011-4-18):
	修正一个可能会产生错误数据的BUG
	admin/inc/import.fun.php

	修改备案号时只能填写一个字符的BUG
	admin/inc/sysset.php


D11-B0136 (10:06 2011-4-12):
	增加半年卡和终身卡

D10-B0135 (10:06 2011-4-9):
	改动计时作者帐号扣币机制	
	admin/patch/verion.php
	admin/patch/patch_index.php 
	admin/patch/d10b0135.php

	admin/prolist.php
	admin/inc/add_table_mfkey.php
	admin/key/keyadd.php
	admin/key/keysave.php
	pay/card/card_step2.php

D09-B0134 (12:31 2011-4-5):
	新增邮件备份和通知功能，未完善
	admin/BackupData.php
	admin/class.phpmailer.php
	admin/class.smtp.php

	config_ksreg.php变更
		删除了 define('SVERION','******');  所在行
		在行 define('KS_SESSIONDIR',KS_DIRP.'/ksreg_session'); 下边添加了一行代码
		include(KS_DIR.'/patch/patch_index.php');

	在admin文件夹下添加了文件夹patch和里边的文件d09b0134.php patch_index.php verion.php index.html
	
	

D09-B0133 (22:01 2011-3-17):
	修正不能查询订单的BUG  pay/card/card_sorder.php
	修正代理不能增加积分的BUG  admin/myorder.php  pay/notify_url.php
	修正从服务端接收数据错误的BUG ksreg_server/chkv75.php

D09-B0132 (12:46 2011-3-16):
	修正按键精灵变种签名错误 admin/getsign.php

D09-B0131 (20:06 2011-3-13):
	修正售卡系统不能正常发卡的BUG
	修正一处js错误(移动到代理ID为0的单元格时提示脚本出错)

D09-B0130 (15:58 2011-3-7):
	添加备份数据库功能(本系统专用的备份系统，仅备份本系统用到的表，reg_logs_**_**、reg_testkey、reg_sql只备份结构不备份数据，以保证最小的备份体积)
		修改菜单admin/index.php文件
		添加文件admin/BackupData.php admin/inc/pclzip.lib.php
	优化系统任务触发条件，节省mysql开销 admin/inc/import.fun.php

D09-B0129 (20:33 2011-3-5):
	chkv75.php 试用卡记录在线时间语句错误修正

D09-B0128 (13:52 2011-2-27):
	advapi新增是否检查用户合法性，并增设开关检查连接advapi接口的用户合法性
		修改文件：接口文件夹/advapi.php,admin/sysset.php，config_ksreg.php增加了一行define('CHKADVAPI',1);
	修正签名文本：主要是按键的签名（按键的变量太让人头痛了）admin/getsign.php

D09-B0127 (17:53 2011-2-23):
	标准签名数据单引号改成了双引号(admin/getsign.php)
	修正import.fun.php函数一处变量名错误
	修正同步高级api文件时出现的垮域错误

D09-B0126 (17:53 2011-1-31):
	可以搜索在某一时间段内充值的卡
	优化时间输入方式


D09-B0125 (17:00 2011-1-27):
	优化同步功能，并修正执行关闭同步操作命令时可能遇到的BUG
	添加同步指示灯


D09-B0123 (10:48 2011-1-16):
	修正安装文件的一处笔误 
	修正备服添加不了临时卡的BUG
	修正同步时不能正确添加备服结束标志


D09-B0122 (20:06 2011-1-9):
	修正v75服务端API接口注册帐号功能BUG
	修正v75服务端API接口验证用户绑定信息方式接口


D09-B0121 (15:41 2011-1-9):
	修正添加卡成功后，点击确定按钮有可能出现传递错误页面的BUG


D09-B0120 (1:15 2011-1-9):
	增加session保存到程序目录功能
	修正不能修改用户绑定信息的BUG
	修正上次修改优化数据库操作时的BUG
	优化安装程序


D09-B0118(v75)
	1、售卡系统除系统默认天数卡外，新增三种自定义天数卡出售
	2、后台添加注册卡支持小时卡
	3、注册充值推广功能优化：自由设定推广增送时间方式，灵活多变
	4、用户免费注册帐号判断：可设定同一电脑是否只允许注册多个免费用户（可实现同一电脑只能免费注册一次帐号的功能）
	5、优化批量加时功能，可指定到软件
	6、新增数据批处理功能：高级管理-批处理数据，可批量按条件导出、解绑、冻结、解冻、删除卡或用户
	7、系统配置接口开放：超级管理-全局参数配置，以满足不同用户的不同需求
	8、可执行简单的MySQL语句：超级管理-执行SQL命令，以适用特殊用户对数据库的维护需求，如果有备服，此处的执行操作会同步到备服，无需再在备服数据库上执行相同的操作。
	9、服务端与客户端通讯数据处理算法重写，所有数据均动态密文传送。
	10、新增绑定用户信息机制，效验绑定用户信息有两种方式
		10.1、验证前提交用户绑定信息到服务器效验，让服务端效验。
		10.2、验证前提交空白的用户绑定信息到服务器，验证通过后从服务器上获取用户绑定信息，客户端来效验。
	11、v75版新增，高级安全功能，在软件编辑里可写数据处理算法来处理通过advapi发送过来的数据并返回处理后的数据。

*/
?>