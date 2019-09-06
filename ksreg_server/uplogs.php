<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../config_ksreg.php');
require(KS_DIR.'/inc/inc.php');
require(KS_DIR.'/inc/head.php');

ob_clean();
$_MMVAR_c90455ba5250dd5068=_MMFUN_cc3cf510bffd973b95('softcode','get','int',0);
$_MMVAR_9c27996007f34aa6ae=_MMFUN_cc3cf510bffd973b95('check','get','int',0);

$_MMVAR_457f4d15fb626a53a0=$_MMVAR_9f95914834184aeeae->_MMFUN_2ae87f854725528ae4('SELECT * from '.TNREG.'_xjl where xjlcode='.$_MMVAR_c90455ba5250dd5068);
if(empty($_MMVAR_457f4d15fb626a53a0)){
if($_MMVAR_9c27996007f34aa6ae==1){
exit('634');
}else{
exit("软件未找到");
}
}


if($_MMVAR_9c27996007f34aa6ae==1)
exit($_MMVAR_457f4d15fb626a53a0['isautoup'].':|:'.$_MMVAR_457f4d15fb626a53a0['xjlver'].':|:'.$_MMVAR_457f4d15fb626a53a0['xjlurl'].':|:'.$_MMVAR_457f4d15fb626a53a0['softnotice']);
?><html>
<head>
<title>软件更新日志</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
*{font-size:12px;}
</style>
</head>
<body>
<div><a href=<?php echo $_MMVAR_457f4d15fb626a53a0['xjlurl'] ?> target="_blank" style="color:#f00;font-weight:700">如若自动更新失败，点击这里手动下载</a><br><br></div>
<pre>
<?php echo $_MMVAR_457f4d15fb626a53a0['uplogs'] ?>
</pre>
</body>
</html>