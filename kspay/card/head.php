<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo strlen($_MMVAR_f42ece220c533593f7['webtitle'])>2?$_MMVAR_f42ece220c533593f7['webtitle']:'在线购卡平台---KSREG&#8482;'?></title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name="robots" content="noarchive" />
<script>var ksreg_public_jspath="<?php echo KS_PATH_PUBLIC?>";</script>
<script type='text/javascript' src='..<?php echo KS_PATH_PUBLIC?>/js/jquery.1.3.2.pack.js'></script>
<script type='text/javascript' src='..<?php echo KS_PATH_PUBLIC?>/js/card.js'></script>	
<link rel=stylesheet type=text/css href="..<?php echo KS_PATH_PUBLIC?>/agent.css" />
<script type=text/javascript src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.msgbox.js"></script>
<script type=text/javascript src="..<?php echo KS_PATH_PUBLIC?>/js/jquery.dragndrop.min.js"></script>
<script type=text/javascript src="./card/box.js"></script>	
<script language="javascript" src="..<?php echo KS_PATH_PUBLIC?>/js/help.js"></script>
</head>
<body>
<iframe style="position:absolute;left:-200px;top:48px;width:134px;height:0" src="..<?php echo KS_PATH_PUBLIC?>/images/bg_.htm" frameborder='0' id='fbg' name='fbg' ></iframe>
<table  width='1003' align=center border='0' cellpadding='0' cellspacing='0'>
<tr><td colspan='2' class='td_1'></td></tr>
<tr>
<td class='td_2' width='160'><img width=153 height=43 src='<?php echo strlen($_MMVAR_f42ece220c533593f7['webimg'])>5?$_MMVAR_f42ece220c533593f7['webimg']:'..'. KS_PATH_PUBLIC.'/images/logo.jpg'?>' alt='kscms' /></td>
<td class='td_2'>
<div id='nave'>
<ul id='navmenu'>
<?php
if($_MMVAR_53d17c3545aae95b9e[0]>0){	
?>
<li class='snav1'><a href='card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=logout' hidefocus=true>退出登录</a></li>
<li class='snav1' s='1'><a href='javascript:void(0)' hidefocus=true>我的信息</a>
<ul>
<li><a href='card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=morder' hidefocus=true>我的订单</a></li>
<li><a href='card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=report' hidefocus=true box="3">查看报表</a></li>
<li><a href='card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=editpass' hidefocus=true>修改密码</a></li>
</ul></li>
<li class='snav1'><a href='card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=keylist0' hidefocus=true box="1">注册卡列表</a></li>
<li class='snav1' s='1'><a href='javascript:void(0)' hidefocus=true>用户密码模式</a>
<ul>
<li><a href='card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=keylist1' box="2">用户列表</a></li>
<li><a href='card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=keylist2' box="2">未使用充值卡</a></li>
<li><a href='card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=keylist3' box="2">已使用充值卡</a></li>
</ul></li>
<?php
}else{?>
<li class='snav1'><a href='card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab ?>&action=login' hidefocus=true>代理商登录</a></li>
<?php
}	
?>
<li class='snav1'><a href='<?php echo "card.php?userid=".$_MMVAR_d6858a6d9e9ee80bab;?>' hidefocus=true>我要购卡</a></li>
<li class='s_nav3'></li>
<li class='s_nav'><a href='###' hidefocus=true>KSREG</a></li>
</ul>
</div>
</td>
</tr>
<tr>
<td colspan=2 align='left' class='td_3'>
<table border=0 width=98%><tr><td align=left>
<form action ="card.php?userid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>&action=sorder" method=post id='sorder' name='sorder' onsubmit="return chkfrom1()">
<?php echo $_MMVAR_53d17c3545aae95b9e[6]?>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onclick="this.value='';" name="ordercode" id="ordercode" class="inputText" value="请输入订单查询码"><input type='submit' name='submit1' id="submit1" value='submit' style='width:0;height:0'><img type="submit" style="margin-left:10px" align="absmiddle" src="..<?php echo KS_PATH_PUBLIC?>/images/orders_out.gif">
</form></td><td align=right></td></tr></table></td>
</tr>
</table>
<script>var fuserid=<?php echo $_MMVAR_d6858a6d9e9ee80bab?>;</script>