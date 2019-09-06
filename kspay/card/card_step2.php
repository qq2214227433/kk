<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
global $_MMVAR_9f95914834184aeeae,$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_53d17c3545aae95b9e,$_MMVAR_c8681bb53a59c8b871,$_MMVAR_3dbbdfa5c2332dd525,$_MMVAR_28c43284b891818123,$_MMVAR_050d4884b0828b4e6c;
global $_MMVAR_09785c63444efa13e0,$_MMVAR_f9af453628d3348749,$_MMVAR_4e23ba844976b63fb0,$_MMVAR_16c425f366caa676c0,$_MMVAR_a37dc03aac8db00e9c,$_MMVAR_a165e76d7ce4c4b348;

$_MMVAR_be4fc7809bc7888fd4=_MMFUN_cc3cf510bffd973b95('agid','post','int',0); 
$_MMVAR_533bf25b4dcb8c8cfe=_MMFUN_cc3cf510bffd973b95('priceid','post','int',0); 
$_MMVAR_0a2142beae67222d3e=_MMFUN_cc3cf510bffd973b95('keytypeid','post','int',0);

$_MMVAR_1ae5c625f8a2656a60=_MMFUN_cc3cf510bffd973b95('softid','post','int',0);

$_MMVAR_ca0023a3645322d945=_MMFUN_cc3cf510bffd973b95('sign','post','sql','');

$_MMVAR_fe81f27197b7e31ee3=array('其它支付方式','支付宝或网银在线支付','余额支付');		
if(_MMFUN_cf8c11a79575861c0c($_MMVAR_d6858a6d9e9ee80bab.$_MMVAR_be4fc7809bc7888fd4.$_MMVAR_0a2142beae67222d3e.$_MMVAR_533bf25b4dcb8c8cfe.$_MMVAR_1ae5c625f8a2656a60)!=$_MMVAR_ca0023a3645322d945)
_MMFUN_6da5ed7d3a356dcac7("非法URL链接".$_MMVAR_d6858a6d9e9ee80bab.$_MMVAR_be4fc7809bc7888fd4.$_MMVAR_0a2142beae67222d3e.$_MMVAR_533bf25b4dcb8c8cfe.$_MMVAR_1ae5c625f8a2656a60);

$_MMVAR_857106807c4a0c833a=(time()-1200000000).''.rand(100, 999);
$_MMVAR_31a0a0e03f320411b8=substr(str_shuffle('012345678901234567890123456789'),0,5);

$_MMVAR_fd73dcbf38eca49541=_MMFUN_cc3cf510bffd973b95('xjlname','post','sql','');
$_MMVAR_13c0100861f3f16a0f=_MMFUN_cc3cf510bffd973b95('keyNum','post','int',1);	

$_MMVAR_aa90ed544ca8afd94a=_MMFUN_cc3cf510bffd973b95('paytype','post','int',1);
$_MMVAR_92ef1af1310471b3e8=_MMFUN_cc3cf510bffd973b95('payname','post','sql','');
$_MMVAR_7d6f014ab1cad425bd=_MMFUN_cc3cf510bffd973b95('tag','post','sql','无');
$_MMVAR_1f92f7c7bbdc5432c9=_MMFUN_cc3cf510bffd973b95('payqq','post','num',0);
$_MMVAR_047ed205448717d147=_MMFUN_cc3cf510bffd973b95('paytel','post','sql','');
$_MMVAR_d9c887456b803d668c=_MMFUN_cc3cf510bffd973b95('intro','post','sql','');
$_MMVAR_b7fbfb6479a5a298b0=_MMFUN_cc3cf510bffd973b95('intro','post','no','');

$_MMVAR_c6e403382e670747e6=explode(',',$_MMVAR_53d17c3545aae95b9e[4]);
$_MMVAR_1bb3b551860658ae3b=_MMFUN_cc3cf510bffd973b95('vcode','post','int');
$_MMVAR_73c8cc68d04a215fe2=0;
$_MMVAR_1921c9ab48416d4fe2="";
if(isset($_SESSION['vcode'])){
if($_MMVAR_1bb3b551860658ae3b!=$_SESSION['vcode']){
$_MMVAR_73c8cc68d04a215fe2=1;
$_MMVAR_1921c9ab48416d4fe2.="验证码错误<br>";
}
}else{
$_MMVAR_73c8cc68d04a215fe2=1;
$_MMVAR_1921c9ab48416d4fe2.="验证码错误<br>";
}
$_SESSION['vcode']="";

if($_MMVAR_1ae5c625f8a2656a60==0){
$_MMVAR_73c8cc68d04a215fe2=1;
$_MMVAR_1921c9ab48416d4fe2.="软件信息错误<br>";
}		
if(strlen($_MMVAR_92ef1af1310471b3e8)<2||strlen($_MMVAR_92ef1af1310471b3e8)>10){
$_MMVAR_73c8cc68d04a215fe2=1;
$_MMVAR_1921c9ab48416d4fe2.="姓名最少填2个字符，最多10个字符<br>";	
}

if($_MMVAR_1f92f7c7bbdc5432c9<10000){
$_MMVAR_73c8cc68d04a215fe2=1;
$_MMVAR_1921c9ab48416d4fe2.="QQ格式错误<br>";
}

if($_MMVAR_aa90ed544ca8afd94a==0){
if(strlen(Trim($_MMVAR_d9c887456b803d668c))<3){
$_MMVAR_73c8cc68d04a215fe2=1;
$_MMVAR_1921c9ab48416d4fe2.="非在线支付，请在备注里面注册付款的具体方式";
}
}
if($_MMVAR_73c8cc68d04a215fe2==1)
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_1921c9ab48416d4fe2);

$_MMVAR_9a036496d66f59815a=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_xjl where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and id=' . $_MMVAR_1ae5c625f8a2656a60 );
if(empty($_MMVAR_9a036496d66f59815a))
_MMFUN_6da5ed7d3a356dcac7("程序参数错误。");

$_MMVAR_0a1facbfa99a9d2d39=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_keyprice where userid='.$_MMVAR_d6858a6d9e9ee80bab.' and id=' . $_MMVAR_533bf25b4dcb8c8cfe);
if(empty($_MMVAR_0a1facbfa99a9d2d39))
_MMFUN_6da5ed7d3a356dcac7("价格表中未找到该数据");

$_MMVAR_aabe78cfc64175e5bc=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_keyattribute where  id=' . $_MMVAR_0a2142beae67222d3e);
if(empty($_MMVAR_aabe78cfc64175e5bc))
_MMFUN_6da5ed7d3a356dcac7('未找到该卡类型');


$_MMVAR_3fc22e00af1642a292='_keys_'.$_MMVAR_d6858a6d9e9ee80bab.'_'.$_MMVAR_1ae5c625f8a2656a60;


if($_MMVAR_53d17c3545aae95b9e[0]==0){
if($_MMVAR_0a1facbfa99a9d2d39['keyprice1']==0)
_MMFUN_6da5ed7d3a356dcac7("该卡类型零售价格为0，不可购买！");
$_MMVAR_0528fcd7270312fb31=$_MMVAR_0a1facbfa99a9d2d39['keyprice1'];
$_MMVAR_f2606c6e00d379057f=$_MMVAR_0528fcd7270312fb31;
}else{
if(substr($_MMVAR_53d17c3545aae95b9e[4],0,1)==='A'){
if($_MMVAR_0a1facbfa99a9d2d39['keyprice2']==0)
_MMFUN_6da5ed7d3a356dcac7("该卡类型代理价A为0，不可购买！");
$_MMVAR_0528fcd7270312fb31=$_MMVAR_0a1facbfa99a9d2d39['keyprice2'];
$_MMVAR_f2606c6e00d379057f=$_MMVAR_0528fcd7270312fb31*$_MMVAR_53d17c3545aae95b9e[3]/100;	
}else{
if($_MMVAR_0a1facbfa99a9d2d39['keyprice3']==0)
_MMFUN_6da5ed7d3a356dcac7("该卡类型代理价B为0，不可购买！");
$_MMVAR_0528fcd7270312fb31=$_MMVAR_0a1facbfa99a9d2d39['keyprice3'];
$_MMVAR_f2606c6e00d379057f=$_MMVAR_0528fcd7270312fb31*$_MMVAR_53d17c3545aae95b9e[3]/100;	
}
}

$_MMVAR_febe3bf74cab09e86b=$_MMVAR_f2606c6e00d379057f*$_MMVAR_13c0100861f3f16a0f;

$_MMVAR_34e4d60e03aadee1be=0;
if($_MMVAR_aa90ed544ca8afd94a==2){
if($_MMVAR_febe3bf74cab09e86b>$_MMVAR_53d17c3545aae95b9e[7])
_MMFUN_6da5ed7d3a356dcac7("帐号余额不足。");
$_MMVAR_34e4d60e03aadee1be=2;
}


$_MMVAR_6ab292966e12f515b0=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('select * from '.TNREG.'_user where id='.$_MMVAR_d6858a6d9e9ee80bab);
if(empty($_MMVAR_6ab292966e12f515b0))
_MMFUN_6da5ed7d3a356dcac7("作者不存在。");

$_MMVAR_af27f0938c2e28a274=_MMFUN_be508a66d5e356ab9c($_MMVAR_6ab292966e12f515b0['membertype'],$_MMVAR_1ae5c625f8a2656a60,$_MMVAR_0a2142beae67222d3e,$_MMVAR_0a1facbfa99a9d2d39['linknum']);
if($_MMVAR_af27f0938c2e28a274==-1)
_MMFUN_6da5ed7d3a356dcac7($_MMVAR_0a1facbfa99a9d2d39['linknum'].'开'.$_MMVAR_aabe78cfc64175e5bc['keyname'].'扣币规则未设置，请联系作者到[软件管理->扩展扣币规则]里设置');
$_MMVAR_af27f0938c2e28a274=$_MMVAR_af27f0938c2e28a274*$_MMVAR_13c0100861f3f16a0f;


$_MMVAR_e8e4e6a4fe4c45c275=$_MMVAR_aabe78cfc64175e5bc['keycday'];
if($_MMVAR_e8e4e6a4fe4c45c275==9000){
$_MMVAR_a8da369c10dfdad5bf=intval((mktime(0,0,0,1,1,2038)-mktime(0,0,0,date("m"),date("d"),date("y")))/86400);
if($_MMVAR_a8da369c10dfdad5bf<9000)
$_MMVAR_e8e4e6a4fe4c45c275=$_MMVAR_a8da369c10dfdad5bf;
}




if($_MMVAR_6ab292966e12f515b0['membertype']<3){

if($_MMVAR_6ab292966e12f515b0['rmb']<$_MMVAR_af27f0938c2e28a274)
_MMFUN_6da5ed7d3a356dcac7('作者库存卡不足');
}


if($_MMVAR_6ab292966e12f515b0['vipkeynums']>0){ 			
$_MMVAR_94492f3d1a3f7caf94=$_MMVAR_13c0100861f3f16a0f*(1+($_MMVAR_0a1facbfa99a9d2d39['linknum']-1)/2);		

$_MMVAR_1d4aa003d5948966f2=_MMFUN_b3efe1487b20e72104($_MMVAR_d6858a6d9e9ee80bab);	
if($_MMVAR_e8e4e6a4fe4c45c275=='1'){
$_MMVAR_6e4136d617f6388ff8=$_MMVAR_9f95914834184aeeae->_MMFUN_389b61401120815100('select * from `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` where cday=1');
if($_MMVAR_6e4136d617f6388ff8>DAY1KEYNUM)
_MMFUN_6da5ed7d3a356dcac7("天卡暂停发售，请联系作者（num2".DAY1KEYNUM."）");
}elseif($_MMVAR_e8e4e6a4fe4c45c275>1 && $_MMVAR_6ab292966e12f515b0['vipkeynums']*3<$_MMVAR_1d4aa003d5948966f2[1]+$_MMVAR_94492f3d1a3f7caf94){
_MMFUN_6da5ed7d3a356dcac7('作者可管理注册卡数量已达上限，无法再下单购买！');
}
}

$_MMVAR_beeb3fb957c292591b=0;


if($_MMVAR_53d17c3545aae95b9e[1]!==0){

if($_MMVAR_febe3bf74cab09e86b<$_MMVAR_53d17c3545aae95b9e[1])
_MMFUN_6da5ed7d3a356dcac7('你是代理商身份，本次消费'.$_MMVAR_febe3bf74cab09e86b.'元不足最低消费'.$_MMVAR_53d17c3545aae95b9e[1].'元,不能提交订单。');

if($_MMVAR_53d17c3545aae95b9e[5]<$_MMVAR_53d17c3545aae95b9e[2])
$_MMVAR_beeb3fb957c292591b=1;
}


$_MMVAR_38c50680acd2c3e722=array();


$_MMVAR_25fcab801959161988=$_MMVAR_aabe78cfc64175e5bc['keyfirststr'];

$_MMVAR_bb1d37417398abcdf5=_MMFUN_90732a0da1412e2b45($_MMVAR_25fcab801959161988,$_MMVAR_3fc22e00af1642a292);	
$_MMVAR_2e4079af223d76e6d0 = array('/1/','/2/','/3/','/4/','/5/','/6/','/7/','/8/','/9/','/A/','/B/','/C/','/D/','/E/','/F/');
$_MMVAR_87cf4483165909ec22 = array('G-','H-','I-','J-','K-','L-','M-','N-','P-','Q-','R-','S-','T-','U-','V-');
shuffle($_MMVAR_87cf4483165909ec22);			
$_MMVAR_0f91d794ba87cd9ce8=array($_MMVAR_2e4079af223d76e6d0,$_MMVAR_87cf4483165909ec22);	
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<=$_MMVAR_13c0100861f3f16a0f;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_38c50680acd2c3e722[]=strtoupper($_MMVAR_bb1d37417398abcdf5.substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$_MMVAR_9a036496d66f59815a['keylen']-9)._MMFUN_5b85fb04c723594158($_MMVAR_8ff60a7771c3f2c087,$_MMVAR_0f91d794ba87cd9ce8));
}
$_MMVAR_abaa2b4d949c74af65=implode(',',$_MMVAR_38c50680acd2c3e722);	


require(KS_DIRP.KS_PATH_PAY.'/alipay_service.php');
$_MMVAR_b455747cd15b198965=_MMFUN_7753e35059b9b54cf0($_MMVAR_d6858a6d9e9ee80bab);

$_MMVAR_26ab341f9e0d35e3bf = array(
"service"        => $_MMVAR_b455747cd15b198965['alitype'],
"partner"        => $_MMVAR_b455747cd15b198965['aliid'],
"return_url"     => $_MMVAR_a37dc03aac8db00e9c,
"notify_url"     => $_MMVAR_16c425f366caa676c0,
"_input_charset" => $_MMVAR_09785c63444efa13e0,
"subject"        => $_MMVAR_857106807c4a0c833a.'-'.$_MMVAR_31a0a0e03f320411b8,
"body"           => $_MMVAR_e8e4e6a4fe4c45c275.'天卡，'.$_MMVAR_13c0100861f3f16a0f.'张',
"out_trade_no"   => $_MMVAR_857106807c4a0c833a,
"price"          => $_MMVAR_febe3bf74cab09e86b,
"payment_type"   => "1",
"quantity"       => "1",

"logistics_fee"      =>'0.00',
"logistics_payment"  =>'SELLER_PAY',
"logistics_type"     =>'EXPRESS',

"receive_name"		=> $_MMVAR_1f92f7c7bbdc5432c9,
"receive_address"	=> 'Do_not_need_shipping_address',
"receive_zip"		=> '430000',
"receive_phone"		=> '01012345678',
"receive_mobile"	=> '13800138000',

"show_url"       => _MMFUN_e58f74c5ea3d676934().KS_PATH_PAY.'/card.php?userid='.$_MMVAR_d6858a6d9e9ee80bab.'&action=sorder&ordercode='.$_MMVAR_857106807c4a0c833a.'-'.$_MMVAR_31a0a0e03f320411b8,
"seller_email"   => $_MMVAR_b455747cd15b198965['alimail']
);

$_MMVAR_4019b83eefbac6707f = new alipay_service($_MMVAR_26ab341f9e0d35e3bf,$_MMVAR_b455747cd15b198965['alikey'],$_MMVAR_f9af453628d3348749);
$_MMVAR_ddadf03a1e97dab6b1=$_MMVAR_4019b83eefbac6707f->_MMFUN_5ac55b52e7ff975db2();

if($_MMVAR_7d6f014ab1cad425bd=="无")$_MMVAR_7d6f014ab1cad425bd=$_MMVAR_92ef1af1310471b3e8;

$_MMVAR_273aa5d2794e847523 = array(
'ordernum'		=>$_MMVAR_857106807c4a0c833a,
'orderpassword'	=>$_MMVAR_31a0a0e03f320411b8,
'addtime'		=>time(),
'payname'		=>$_MMVAR_92ef1af1310471b3e8,
'tag'			=>$_MMVAR_7d6f014ab1cad425bd,
'paytel'		=>$_MMVAR_047ed205448717d147,
'payqq'			=>$_MMVAR_1f92f7c7bbdc5432c9,
'userid'		=>$_MMVAR_d6858a6d9e9ee80bab,
'agentid'		=>$_MMVAR_53d17c3545aae95b9e[0],
'xjlid'			=>$_MMVAR_1ae5c625f8a2656a60,
'xjlname'		=>$_MMVAR_fd73dcbf38eca49541,
'regkeys'		=>$_MMVAR_abaa2b4d949c74af65,
'keytype'		=>$_MMVAR_aabe78cfc64175e5bc['keycday'],
'keytypeid'		=>$_MMVAR_0a2142beae67222d3e,
'paytype'		=>$_MMVAR_aa90ed544ca8afd94a,
'orderamount'	=>$_MMVAR_febe3bf74cab09e86b,
'kb'	=>$_MMVAR_af27f0938c2e28a274,
'intro'			=>$_MMVAR_d9c887456b803d668c,
'orderstatus'	=>0,
'ismakekey'		=>$_MMVAR_beeb3fb957c292591b,
'alipayurl'		=>$_MMVAR_ddadf03a1e97dab6b1,
'linknum'		=>$_MMVAR_0a1facbfa99a9d2d39['linknum']
);
if($_MMVAR_34e4d60e03aadee1be==2)$_MMVAR_273aa5d2794e847523['orderstatus']=5;		
if($_MMVAR_be4fc7809bc7888fd4!=0)$_MMVAR_273aa5d2794e847523['agentid']=$_MMVAR_be4fc7809bc7888fd4;
$_MMVAR_9f95914834184aeeae->_MMFUN_d5033eea64260e1006(''.TNREG.'_order',$_MMVAR_273aa5d2794e847523,'notsync9');

//代理实时发卡,扣除作者卡币
$_MMVAR_6d2b137213ed299783='';
$_MMVAR_1b9a8444ab646a930c='';
if($_MMVAR_beeb3fb957c292591b==1 || $_MMVAR_34e4d60e03aadee1be==2){		
$_MMVAR_e90c26b127790e516c = array(
'xjlid'			=>$_MMVAR_1ae5c625f8a2656a60,
'ordernum'		=>$_MMVAR_857106807c4a0c833a.'-'.$_MMVAR_31a0a0e03f320411b8,
'userid'		=>$_MMVAR_d6858a6d9e9ee80bab,
'agentid'		=>$_MMVAR_53d17c3545aae95b9e[0],
'cday'			=>$_MMVAR_aabe78cfc64175e5bc['keycday'],
'linknum'		=>$_MMVAR_0a1facbfa99a9d2d39['linknum'],
'intro'			=>'QQ:'.$_MMVAR_1f92f7c7bbdc5432c9.'，在线购卡',
'addtime'		=>time(),
'endtime'		=>0,
'bdday'			=>0,
'bdtimes'		=>0,
'bdcode'		=>'1000',
'chkcode'		=>'100000',
'lastbdtime'	=>0,
'lastonlinetime'=>0,
'normal'		=>1,
'isdel'			=>0,
'ispay'			=>0,
'deltime'		=>0,
'activetime'	=>0,
'activetimes'	=>0,
'chktimes'		=>0,
'ext1'			=>$_MMVAR_7d6f014ab1cad425bd,
'isused'		=>0,
'dayactivetimes'=>$_MMVAR_aabe78cfc64175e5bc['keytimes']
);
if($_MMVAR_34e4d60e03aadee1be==2)$_MMVAR_e90c26b127790e516c['ispay']=1;	
if($_MMVAR_be4fc7809bc7888fd4!=0)$_MMVAR_e90c26b127790e516c['agentid']=$_MMVAR_be4fc7809bc7888fd4;
switch ($_MMVAR_34e4d60e03aadee1be){
Case 2:
$_MMVAR_1b9a8444ab646a930c='使用余额提卡成功，可以我的信息->我的订单里查询!<br>';
$_MMVAR_6d2b137213ed299783=' style=\'display:none\'';
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_agent SET nopaytimes=0,rmb=rmb-'.$_MMVAR_febe3bf74cab09e86b.',jifeng=jifeng+'.$_MMVAR_febe3bf74cab09e86b.' where id='.$_MMVAR_53d17c3545aae95b9e[0],'notsync');
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO `'.TNREG.'_agentrmblog` (`addtime`, `rmb1`, `rmb2`, `rmb3`, `info`, `userid`, `agentid`) VALUES ('.time().','.$_MMVAR_53d17c3545aae95b9e[7].','.($_MMVAR_53d17c3545aae95b9e[7]-$_MMVAR_febe3bf74cab09e86b).','.(0-$_MMVAR_febe3bf74cab09e86b).',\'订单号'.$_MMVAR_857106807c4a0c833a.'\','.$_MMVAR_d6858a6d9e9ee80bab.','.$_MMVAR_be4fc7809bc7888fd4.')','notsync');
break;
default:
$_MMVAR_1b9a8444ab646a930c='在线购卡成功(请尽快支付，否则该次购买的注册卡会被系统冻结)!<br>';
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_agent SET nopaytimes=nopaytimes+1 where id='.$_MMVAR_53d17c3545aae95b9e[0],'notsync');
}




$_MMVAR_676a1786faaa9e46d8=time();	
$_MMVAR_e3bdef30964a1750f9='INSERT INTO `'.TNREG.$_MMVAR_3fc22e00af1642a292.'` (`ordernum`, `userid`, `isused`, `xjlid`, `agentid`, `isdel`, `cday`, `ispay`, `linknum`, `addtime`, `activetime`, `endtime`, `bdday`, `bdtimes`, `bdcode`, `chkcode`, `lastbdtime`, `lastonlinetime`, `normal`, `deltime`, `activetimes`, `keys`, `ext1`, `intro`,`dayactivetimes`) VALUES ';
for($_MMVAR_8ff60a7771c3f2c087=1;$_MMVAR_8ff60a7771c3f2c087<=abs(floor($_MMVAR_13c0100861f3f16a0f/-100));$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_1b87417a49fe9d71e1='';
$_MMVAR_530d7538dd2f66b5ca='';
for($_MMVAR_21a9f2323f653b8d2f=1;$_MMVAR_21a9f2323f653b8d2f<=100;$_MMVAR_21a9f2323f653b8d2f++){
if(($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f>$_MMVAR_13c0100861f3f16a0f)
break;
$_MMVAR_1f0f8d5cbff25f40ae=strtoupper($_MMVAR_bb1d37417398abcdf5.substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789"),0,$_MMVAR_9a036496d66f59815a['keylen']-9)._MMFUN_5b85fb04c723594158(($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f,$_MMVAR_0f91d794ba87cd9ce8));
$_MMVAR_530d7538dd2f66b5ca.=$_MMVAR_1b87417a49fe9d71e1.'(\''.$_MMVAR_e90c26b127790e516c['ordernum'].'\', \''.$_MMVAR_e90c26b127790e516c['userid'].'\', \'0\', \''.$_MMVAR_e90c26b127790e516c['xjlid'].'\', \''.$_MMVAR_e90c26b127790e516c['agentid'].'\', \'0\', \''.$_MMVAR_e90c26b127790e516c['cday'].'\', \''.$_MMVAR_e90c26b127790e516c['ispay'].'\', \''.$_MMVAR_e90c26b127790e516c['linknum'].'\', \''.$_MMVAR_676a1786faaa9e46d8.'\', \'0\', \'0\', \'0\', \'0\', \'1000\', \'100000\', \'0\', \'0\', \'1\', \'0\', \'0\', \''.$_MMVAR_38c50680acd2c3e722[($_MMVAR_8ff60a7771c3f2c087-1)*100+$_MMVAR_21a9f2323f653b8d2f-1].'\', \''.$_MMVAR_e90c26b127790e516c['ext1'].'\', \''.$_MMVAR_e90c26b127790e516c['intro'].'\',\''.$_MMVAR_e90c26b127790e516c['dayactivetimes'].'\')';
$_MMVAR_1b87417a49fe9d71e1=',';
$_MMVAR_1b9a8444ab646a930c.=$_MMVAR_1f0f8d5cbff25f40ae."<br>\r\n";				
}
if($_MMVAR_530d7538dd2f66b5ca!='')
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_e3bdef30964a1750f9.$_MMVAR_530d7538dd2f66b5ca,'sync');
}
if($_MMVAR_6ab292966e12f515b0['membertype']<3)
$_MMVAR_9f95914834184aeeae->_MMFUN_9186ce7fdb77ebe6df('UPDATE '.TNREG.'_user SET rmb=rmb-'.$_MMVAR_af27f0938c2e28a274.' where id='.$_MMVAR_d6858a6d9e9ee80bab,'sync');

}	
?>

<table width="980" style='border:0' border="0" cellpadding="0" class="list_tb" align="center">
<tr class="tb_tip">
<td colspan=2><?php
if($_MMVAR_34e4d60e03aadee1be==2){
echo '订单已保存，卡号已生成并有效';
}else{
if($_MMVAR_beeb3fb957c292591b==1){
echo '系统已接受您的订单注册卡已生效，请24小时内支付完成订单，否则注册卡会被冻';
}else{
echo '系统已接受您的订单，请确认无误后，在线支付成功即可取卡';
}
}
?></td>
</tr>
<tr class=tb_tr2>
<td width=100>订单查询码</td>
<td width=880><span style='font-weight:700;color:red'><?php echo $_MMVAR_857106807c4a0c833a ?>-<?php echo $_MMVAR_31a0a0e03f320411b8?></span>，如若支付成功但未弹出提卡页面，请用此查询码来提卡</td>					
</tr>
<tr class=tb_tr1>
<td width=100>所属软件名</td>
<td width=880><?php echo $_MMVAR_fd73dcbf38eca49541 ?></td>					
</tr>
<tr class=tb_tr2>
<td>卡类型</td>
<td><?php echo $_MMVAR_0a1facbfa99a9d2d39['linknum'].'开'.$_MMVAR_aabe78cfc64175e5bc['keyname'].','.$_MMVAR_aabe78cfc64175e5bc['keytimes'].'点'?></td>
</tr>
<tr class=tb_tr2>
<td>卡号</td>
<td><?php
echo str_replace(',','<br>',$_MMVAR_abaa2b4d949c74af65).'<br>';
if($_MMVAR_beeb3fb957c292591b!=1)
echo '支付成功后，这些注册卡号才可用。';						
?></td>
</tr>
<tr class=tb_tr1>
<td>单价</td>
<td><?php echo $_MMVAR_0528fcd7270312fb31?>元/张　　　<?php
if($_MMVAR_53d17c3545aae95b9e[0]!==0)
echo '<span style=\'color:#f00\'>折后'.$_MMVAR_f2606c6e00d379057f.'元/张</span>';	

?></td>
</tr>
<tr class=tb_tr2>
<td>数量</td>
<td><?php echo $_MMVAR_13c0100861f3f16a0f ?>张，总计：<?php echo $_MMVAR_febe3bf74cab09e86b?>元</td>
</tr>
<tr class=tb_tr1>
<td width=100>支付方式</td>
<td><?php echo $_MMVAR_fe81f27197b7e31ee3[$_MMVAR_aa90ed544ca8afd94a]; ?></td>
</tr>
<tr class=tb_tr2>
<td width=100>你的姓名</td>
<td><?php echo $_MMVAR_92ef1af1310471b3e8 ?></td>
</tr>
<tr class=tb_tr1>
<td width=100>你的QQ</td>
<td><?php echo $_MMVAR_1f92f7c7bbdc5432c9 ?></td>
</tr>
<tr class=tb_tr2>
<td width=100>你的电话</td>
<td><?php echo $_MMVAR_047ed205448717d147 ?></td>
</tr>
<tr class=tb_tr1>
<td width=100>备注</td>
<td><?php echo nl2br(htmlspecialchars($_MMVAR_b7fbfb6479a5a298b0)) ?></td>
</tr>
<?php
if($_MMVAR_b455747cd15b198965['alitype']!='create_partner_trade_by_buyer'){
?>
<tr class=tb_tr2 <?php echo $_MMVAR_6d2b137213ed299783;?>>
<td>在线支付</td>
<td style='color:#f00;font-weight:700'>在线支付付款后，请点击我已付款自助发货，然后进支付宝交易管理里点击确认收货，订单即可完成注册卡才正式生效。</td>
</tr>
<?php
}else{
?>
<tr class=tb_tr2 <?php echo $_MMVAR_6d2b137213ed299783;?>>
<td>在线支付</td>
<td style='color:#f00;font-weight:700'>担保交易，请按下边的流程操作，否则订单不能完成注册卡就不能使用。</td>
</tr>
<?php				
}
include_once KS_DIRP.KS_PATH_PAY.'/card/sendorder.php';
?>
<tr class=tb_tr2>
<td>邮件通知</td>
<td><?php 
if ('********'==ksreg_mail_password){
echo '系统没有开启订单邮件通知功能';
}else{
echo sendorder(ksreg_mail_name,ksreg_mail_password,$_MMVAR_1f92f7c7bbdc5432c9,$_MMVAR_857106807c4a0c833a.'-'.$_MMVAR_31a0a0e03f320411b8,str_replace(',','<br>',$_MMVAR_abaa2b4d949c74af65),$_MMVAR_d6858a6d9e9ee80bab,$_MMVAR_fd73dcbf38eca49541,$_MMVAR_92ef1af1310471b3e8); 
}?></td>
</tr>
<tr class=tb_tr2 <?php echo $_MMVAR_6d2b137213ed299783;?>>
<td>线下支付</td>
<td><?php echo nl2br(htmlspecialchars($_MMVAR_6ab292966e12f515b0['orderpayinfo'])) ?></td>
</tr>
<?php
if($_MMVAR_b455747cd15b198965['alitype']=='create_partner_trade_by_buyer'){
?>
<tr class=tb_tr2 <?php echo $_MMVAR_6d2b137213ed299783;?>>
<td>交易流程</td>
<td ><p style="color:#f00;font-weight:700;font-size:14px">

1、<span style="color:#666">(支付)支付宝操作：</span>单击到支付宝付款按钮并确认，会跳到支付宝支付页面，完成支付后不要关闭支付宝;<br>
2、<span style="color:#666">(发货)本页面操作：</span>切换到本页面点击自助发货按钮;<br>
3、<span style="color:#666">(收货)支付宝操作：</span>切换到支付宝网站进行确认收货操作;<br>
4、<span style="color:#666">(取卡)支付宝操作：</span>确认收货后稍等几秒钟，直接点击支付宝订单的商品名可获取卡号。<br>
5、<span style="color:#666">(取卡)本页面操作：</span>确认收货后稍等几秒钟，切换到本页面点击获取卡号。<br>
6、<span style="color:#666">不能正常取卡：</span>第4或第5步任选一种均可取卡，如果取不了卡请稍等一两分钟再取卡操作，依旧失败的请联系销售。<br></p>
<input id="alipaylink" type=button value="到支付宝付款"  onclick='alert("在取到卡号之前，请不要关闭本页面！");window.open("<?php echo $_MMVAR_ddadf03a1e97dab6b1?>","_blank","");' style='padding:10px;font-size:16px;font-weight:700'>  -> <input onclick='window.open("delivery.php?orderno=<?php echo $_MMVAR_857106807c4a0c833a ?>","_blank","")' type=button value="点击自助发货" style='padding:10px;font-size:16px;font-weight:700'> -> <input type=button  value="到支付宝确认收货" disabled="disabled" style='padding:10px;font-size:16px;font-weight:700;color:#eee'> -> <input type=button  value="获取卡号" onclick='window.open("card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=sorder&ordercode=<?php echo $_MMVAR_857106807c4a0c833a ?>-<?php echo $_MMVAR_31a0a0e03f320411b8?>","_blank","")' style='padding:10px;font-size:16px;font-weight:700'></td>
</tr>
</table>	
<?php
}else{
?>
<tr class=tb_tr1 <?php echo $_MMVAR_6d2b137213ed299783;?>>
<td></td>
<td><a id="alipaylink" href="<?php echo $_MMVAR_ddadf03a1e97dab6b1?>" target="_blank"><img src=..<?php echo KS_PATH_PUBLIC?>/images/alipay.gif alt="用支付宝支付" /></a></td>
</tr>
</table>
<script>
$(document).ready(function(){
$("#alipaylink").click(function (){
return confirm("在取到卡号之前，请不要关闭本页面！\r\n\r\n\r\n订单查询码的作用：支付成功但自动跳转到取卡页面，可以用此订单查询码来查询购买的卡号！\r\n\r\n请确认是否已经记录订单查询码！\r\n    \r\n已经记录请点确定开始支付，未记录请点击取消并记录查询码后再支付按钮。");
});
});
</script>				
<?php
}
?>