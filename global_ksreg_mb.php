<?php
/*请一定要用NotePad2来修改本文件(不要用Windows自带的记事本，NotePad2不是记事本)*/

// 是否是双服验证，是的话填1，如果你只有一个服务器，请填0 
define('IS2SVR',0);			

// 当前服务器ID，是主服的话填1，备服请填2
define('SVRID',1);	

// 屏幕输出出错信息，1为是，0为否
define('PRINTERROR',1);						

// session保存在web目录，由系统控制的设为 0 
define('KS_SESSIONSAVEWEBDIR',1);				

// 关闭软件ID为1的软件注册新用户 就填 _1_ 关闭软件ID为1和2的软件注册新用户就填 _1_2_ 
define('b226_softid','_SoftId1_SoftId2_..._SoftIdN_');

// 1为登陆时启用密保卡，0为只使用标准验证码 
define('PasswordProtect',0);			

// 超级密码，标准MD5算法加密保存的，如果忘记了超级密码，请改成 670b14728ad9902aecba32e22fa4f6bd 此密码是六个零 */
define('SUPERPASSWORD','e10adc3949ba59abbe56e057f20f883e');		

// 加解密模式 当前运行环境是VPS或独立服务器，你可以设置成com，并在服务器上安装加解密com组件，客户端调用需要做相关调整  */
define('CryptMode','php'); 			

// 检查连接advapi用户的合法性，1为检查(提高安全性)，0为不检查 
define('CHKADVAPI',1);				

// 为免出错，请不要修改本数据
define('MEMEXT',0);
						
// 该常量不用设置
define('MEMCHACEDNAME','cache_ksreg');	
	
// 网站ICP备案号
define('ICPNUM','*ICP备*******号');		

// 每个用户最多天卡数，默认2000
define('DAY1KEYNUM',2000);		

// 每个用户最多允许添加多少代理用户
define('MAXAGENT',80);			

// 打开首页跳转到管理后台登陆页，0为跳到用户id为10000的售卡系统
define('LOGINADMIN',1);		

// 自动清理多少天前的安全日志，建议只保留两天的
define('SAVELOGTIME',2);		

// 自动删除多少天前被标记为删除的卡
define('DELKEYTIME',7);		

// 自动删除多少天前过期的卡
define('AUTODELKEYTIME',60);
	
// 自动删除多少天前充值的卡
define('CLEAR_HasPrepaidCard',60);	

// 自动删除多少天前的充值日志
define('RECHARGELOGTIME',120);	

// 自动清理过期的免费帐号
define('CLEAR_ExpiredFreeAccount',2);
	
// 免费注册过的帐号在记录日志里保存天数
define('CLEAR_FreeSaveDay',30);
	
// 清理多少天前的无效订单
define('CLEAR_OrderA',7);

// 清理多少天前的所有订单
define('CLEAR_OrderB',365);
	
// 900秒同步一次数据
define('SYNCTIME',900);		

// 每次同步最长时间为300秒，超出算超时
define('SYNCCSTIME',300);		

// 如若售卡系统客户在线支付不能取卡，请将此参数改为0
define('ALIPAYSAFE',1);

// 是否记录验证总次数0不记录 1记录，记录总次数会占用一定的CPU
define('RECORDTIMES',0);							

// 管理目录路径，建议修改，以/开头，不要以/结尾
define('KS_PATH','/ksreg_admin');	

// 售卡系统目录路径，以/开头，不要以/结尾
define('KS_PATH_PAY','/kspay');							

// 系统公用的目录路径，以/开头，不要以/结尾
define('KS_PATH_PUBLIC','/ksreg_public');				

define('CCMODE',0);					/* 为1开启防刷新，封IP。 */
	define('CCTIME',70);				/* CCMODE为了时才有效，同一IP两次访问少于该值累加一次，大于该值该IP累加次数清0。 */
	define('CCTIMES',8);				/* CCMODE为了时才有效，累计次数超出该值，封IP。 */
	
//需要超级管理身份才可以设置价格 1是 0否
define('PRICESET',0);

//需要超级管理身份才可以管理软件 1是 0否
define('SOFTSET',0);
	
//数据库备份格式 0为zip  1为sql  不能备份zip的情况下才用sql
define('b220_mysqlbaktype',0);	

//未开放，QQ邮箱备份数据库功能开关，为免出错，请不要修改本数据
define('ksreg_mail_bakdb',0);

//未开放，QQ邮箱名，方便操作只集成了QQ邮箱，请注意如果你关闭了QQ邮箱的数字帐户，一定要在联系人里添加上自己的数字邮箱帐户，不然将会收不到备份邮件
define('ksreg_mail_name','8511175@qq.com');

//未开放，QQ邮箱密码，安全起见，请先设置QQ邮箱的独立密码，不要用登陆QQ的密码		
define('ksreg_mail_password','********');

//后台右上角官方网站链接，你可修改网址和网站名，格式不要改
define('b212_website','<a href=\'http://www.hphu.com\' hidefocus=true>官方网站</a>');

define('COPYRIGHT1','<div style=\'font-family: Verdana, sans-serif;text-align:center;margin-top:50px\'>');

define('COPYRIGHT2','&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />');

//后台页脚版权信息
define('COPYRIGHT3','Copyright © 2008-2012 KS, All rights Reserved.  &nbsp;&nbsp;&nbsp;&nbsp;SVersion: '.SVERION.'<br><br><br> </div> ');

//售卡系统页脚版权信息
define('PAY_COPYRIGHT','Copyright © 2008-2012 KS, All rights Reserved.  &nbsp;&nbsp;&nbsp;&nbsp;SVersion: '.SVERION.'<br><br><br> </div> ');

define('COPYRIGHT',COPYRIGHT1.COPYRIGHT2.COPYRIGHT3);
?>