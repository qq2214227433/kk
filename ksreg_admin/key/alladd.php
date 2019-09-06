<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
require('../../config_ksreg.php');

require(KS_DIR.'/inc/inc.php');
$_MMVAR_a68c41bd0ae0e8ec59=_MMFUN_6287f702166510a45d();
if($_MMVAR_a68c41bd0ae0e8ec59[0]<3)
exit('非计币用户才可以进行批量加时操作!');

$_MMVAR_e9ffef5bdc7675ff63=$_MMVAR_9f95914834184aeeae->_MMFUN_b11d2ab529d243ceeb('select * from '.TNREG.'_xjl where userid='.$_MMVAR_a68c41bd0ae0e8ec59[1]);
echo '<form id=jsfrom name=jsfrom action=keylist_.php?action=batchaddtimesave method=post target=\'rwin\' id=f1 name=f1>';
echo '<span style=\'color:#000\'>给软件<select name=xjlidd id=xjlidd style=width:100px;height:22px>';
echo '<option value=0>所有软件</option>';
foreach ($_MMVAR_e9ffef5bdc7675ff63 as $_MMVAR_9a036496d66f59815a) {
echo '<option value='.$_MMVAR_9a036496d66f59815a['id'].'>'.$_MMVAR_9a036496d66f59815a['xjlname'].'</option>';
}
echo '</select>';
?>里天数大于1，且已激活的注册卡和用户加使用时间</span><select name=maddtime id=maddtime style=width:60px;height:22px><option value=0.04>1小时</option><option value=0.08>2小时</option><option value=0.13>3小时</option><option value=0.17>4小时</option><option value=0.21>5小时</option><option value=0.25>6小时</option><option value=0.29>7小时</option><option value=0.33>8小时</option><option value=0.38>9小时</option><option value=0.42>10小时</option><option value=0.46>11小时</option><option value=0.5>12小时</option><option value=0.54>13小时</option><option value=0.58>14小时</option><option value=0.63>15小时</option><option value=0.67>16小时</option><option value=0.71>17小时</option><option value=0.75>18小时</option><option value=0.79>19小时</option><option value=0.83>20小时</option><option value=0.88>21小时</option><option value=0.92>22小时</option><option value=0.96>23小时</option><option value=1>24小时</option><option value=1.04>25小时</option><option value=1.08>26小时</option><option value=1.13>27小时</option><option value=1.17>28小时</option><option value=1.21>29小时</option><option value=1.25>30小时</option><option value=1.29>31小时</option><option value=1.33>32小时</option><option value=1.38>33小时</option><option value=1.42>34小时</option><option value=1.46>35小时</option><option value=1.5>36小时</option><option value=1.54>37小时</option><option value=1.58>38小时</option><option value=1.63>39小时</option><option value=1.67>40小时</option><option value=1.71>41小时</option><option value=1.75>42小时</option><option value=1.79>43小时</option><option value=1.83>44小时</option><option value=1.88>45小时</option><option value=1.92>46小时</option><option value=1.96>47小时</option><option value=2>48小时</option></select>&nbsp;&nbsp;<p><br><input type=submit style='border:1px solid #ccc' name=submit2 id=submit2 value=' 确 认 '></p></form>