<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
@header("content-type:text/html;charset=utf-8");
define('YH',chr(34));
$_MMVAR_25bb91256a5035fc4c=$_GET['pagename'];
$_MMVAR_4b198e1747829d33ed=$_GET['keywords'];
$_MMVAR_4b198e1747829d33ed=str_replace(' ','+',$_MMVAR_4b198e1747829d33ed);
$_MMVAR_4b198e1747829d33ed=_MMFUN_1398857305d2321ef4($_MMVAR_4b198e1747829d33ed);
//exit($_MMVAR_25bb91256a5035fc4c.$_MMVAR_4b198e1747829d33ed);
$_MMVAR_ee7862b5bcf50cb137=array(
'activetimes'=>array(
'检查'=>'选中此项时，点击确定就会按连接次数从大到小来排序，可以检查一些用户的验证频率'
),
'pub'=>array(
'快速模式'		=>'快速模式不统计查询的总记录数(因为在数据量大的情况下，统计总记录数会花费相当长的时间)，快速模式下翻页功能目前最大支持25万页即500万条记录。',
'检查'		=>'按验证次数从高到低顺序排列，以便检查非法用户。',
'标签'			=>'标签是在自动售卡时候用户留下的姓名。当然，为了方便，你也可以自行修改标签。只需要将鼠标移动到卡号上面，便会弹出悬浮框，可进行修改卡号和备注以及对该卡加减时间的操作。小贴士，修改后要点保存哦。',
'次数'			=>'为该注册卡登录验证服务器的总次数。您可以通过查看该次数从而掌握玩家的登录频率。当然，一般情况下并没有太大的用处。',
'天数'			=>'顾名思义。该注册卡的有效天数。请注意，该有效时间是从注册卡号被激活的时间开始计算的哦。只需要将鼠标移动到卡号上面，便会弹出悬浮框，您可以对改卡的有效时间进行加减操作。注意，要减时间需要输入-号。',
'连接'			=>'连接数，这就是通常意义上的单开/多开卡。如果连接数为1，则为单开卡。如果大于1，则是多开卡。举例：连接数为4，则为4开注册卡卡。',
'解绑'			=>'注册卡或用户当日解除绑定的次数。从该处可观察到用户的换机解绑的频率。',
'代理'			=>'该卡或用户所属代理的ID号，鼠标移动到ID号上会自动显示为代理的名字。',
'激活日期'		=>'该注册卡或用户第一次被使用的时间。',
'到期日期'		=>'该注册卡或用户使用时间到期的日期。提示:即使注册卡被冻结，时间依然会减少。',
'冻结与解冻'	=>'冻结的卡或用户仍然会计时，不会因为冻结而暂停计时。',
'分区'			=>'注册卡当前绑定的分区信息(默认为0，即未绑分区)，分区信息是在注册卡首次激活时绑定的，可以通过浮动框来修改分区绑定信息DLL的setDLL_和易模块的可可_验证初始化最后一个参数即为分区信息，你可以从游戏中获取（如果你需要绑定分区的话，不需要请直接设置为0）,详细说明请看帮助文档。',
'点数'			=>'适用于扣点模式验证，表示用户帐号、注册卡、充值卡中的点数。',
'绑区'			=>'注册卡当前绑定的分区信息(默认为0，即未绑分区)，分区信息是在注册卡首次激活时绑定的，可以通过浮动框来修改分区绑定信息DLL的setDLL_和易模块的可可_验证初始化最后一个参数即为分区信息，你可以从游戏中获取（如果你需要绑定分区的话，不需要请直接设置为0）,详细说明请看帮助文档。'

),
'k0'=>array(
'卡号'			=>'注册卡号<br>可通过菜单[注册卡模式 -> 添加注册卡]来生成新的卡号<br>单击列表里的卡号可以复制到剪贴板！',
'连接'			=>'连接数，这就是通常意义上的单开/多开卡。如果连接数为1，则为单开卡。如果大于1，则是多开卡。举例：连接数为4，则为4开注册卡卡。',
'状态'			=>'第一个方块表示该卡是否在线。浅红色表示在线(20分钟内曾连接服务器验证过)，深红色表示登录标识为在线，灰色则表示不在线，第二个方块表示该卡是否已付款。绿色为已经支付，红色为未支付。',
'管理操作'		=>'此为对卡号进行系统操作栏。可以对该注册卡号进行解除绑定，冻结，查看日志，删除等操作。<br>解绑：手动为换机前忘记解除绑定或者解绑次数上限的用户解除绑定。<br>冻结：暂时冻结注册卡，该卡号用户将无法使用注册卡。<br>日志：查看该注册用户的登录以及使用日志。<br>删除：删注册卡(只是标记删除，并未从数据库里删除，可由超级管理员进行恢复操作，被标记为删除的卡超出一星期会被系统自动从数据库中删除)。'
),
'k1'=>array(
'基卡'			=>'本网络验证系统卡号和用户名存放在一个表的，一个用户其实就是一张充值卡，用户注册时使用的第一张充值卡号保存用户帐号密码信息，如果是无卡注册的用户，系统会自动生成一张以M开头的卡号保存用户帐号密码信息，我们把这个注册时使用的第一张卡叫基卡',
'当前在线'			=>'20分钟内曾连接服务器验证过的用户',
'用户名'		=>'用户注册时使用的用户名，注意用户名只支持A-Z,a-z,0-9这36个字符<br>如果游戏帐号是中文名请先编码用户名（如果你还想还原用户名的话就用rc4算法，否则直接用16位的md5编码用户名），编码后才传递给验证系统相关接口。',
'状态'			=>'方块表示该卡是否在线。浅红色表示在线(20分钟内曾连接服务器验证过)，深红色表示登录标识为在线，灰色则表示不在线。',
'管理操作'			=>'此为对用户进行系统操作栏。可以对该用户进行解除绑定，冻结，查看日志，删除等操作。<br>解绑：手动为换机前忘记解除绑定或者解绑次数上限的用户解除绑定。<br>冻结：暂时冻结注册卡，该卡号用户将无法使用注册卡。<br>日志：查看该注册用户的登录以及使用日志。<br>删除：删注册卡(只是标记删除，并未从数据库里删除，可由超级管理员进行恢复操作，被标记为删除的卡超出一星期会被系统自动从数据库中删除)。'
),
'addkey'=>array(
'允许连接数'			=>'允许多少个客户端同时连接服务器验证，普通卡一般为1，大于1的是多连接卡，即一张卡可同时在多台机子上或一台机子上多开软件。',
'授权天数'		=>'系统默认已经有天、周、月、季、年卡，如若要添加其它天数的卡，需选择自定义卡，然后在后边填上天数即可。',
'所属软件'			=>'添加注册卡前必须先确认是给软件添加的，因为不同软件的卡是不能混用的，所以这里一定要选择正确',
'标签'			=>'要添加注册卡的标签，显示在注册卡列表里，方便管理，添加后可在注册卡列表里修改',
'数量'			=>'当次你要添加的卡的数量，同一批添加的卡的前六位卡号是相同的。',
'用户备注'			=>'要添加注册卡的备注，可以填写更多的备注信息，添加后可在注册卡列表里修改'
),
'myinfo'=>array(
'可管理用户'			=>'指可管理的已激活的卡模式软件的有效卡数量加上用户模式的用户总数，此项对计时型帐号生效，为0时不限制。',
'支付宝接口类型'		=>'建议申请和使用即时到帐接口',
'支付宝帐户'			=>'就是你的支付宝帐号了，一般是邮箱或手机号',
'支付宝合作者身份'			=>'支付宝商家帐号的合作者身份（partnerID），可从支付宝商家服务后台获取',
'支付宝交易安全校验码'			=>'支付宝商家帐号的交易安全校验码（key），可从支付宝商家服务后台获取',
'我的银行帐号'			=>'此项内容将会显示到售卡系统的订单确认后直付前的页面里边，以备给没有网页的用户线转帐汇款之用，你也可以填写一些别的信息。',
'用户类型'			=>'分记币型和记时型：<br>计币型用户不限卡量只要有卡币就可以添加卡；<br>计时型用户不计卡币只要 卡量 <（可管理用户*3）就可以加卡，当用户数量大于可管理用户时，你的客户将不能激活注册卡或注册新用户。'
),
'soft'=>array(
'扣卡币设置'			=>'提供给特殊要求的用户使用，非源码多授权用户可以不用管此参数。格式说明：<br>连接数|多少天卡:多少卡币,多少天卡:多少卡币 (小于1天的卡的价格设置是 0:价格)<br>样例:<br>1|0:0.1,1:0.2,7:1,30:2,90:6,365:24;<br>
2|0:0.15,1:0.3,7:1.5,30:3,90:9,365:36;<br>
3|0:0.2,1:0.4,7:2,30:4,90:12,365:48',
'验证模式'			=>'软件的验证模式，验证模式在添加软件时一经确定不可修改，keys为卡模式验证，user为用户模式验证。',
'软件编号'			=>'在集成时需要配置进客户端，该编号是在添加软件时系统自动分配的一个七位数，不可修改。',
'软件名称'			=>'软件的名称，会显示到售卡系统里',
'软件密钥'			=>'在集成时需要配置进客户端，软件密钥参与通讯和加密运算，如果改了密钥原先用旧密钥生成的软件客户端将都不可用',
'返回给客户端的信息A'			=>'安全功能需要的信息，验证通过后GetNetInfo_() 或 可可_取网络数据 ()获取的就是此处的信息。',
'返回给客户端的信息B'			=>'安全功能需要的信息，二次验证(二次验证的时候是同验证频率来决定的)通过后GetNetInfo_(1) 或 可可_取网络数据 (1)获取的就是此处的信息。',
'验证频率'			=>'客户端DLL或易模块默认是15分钟左右连接服务器验证一次，你可以根据你的软件需要适当的调节。',
'推广赠送'			=>'添加或编辑用户模式软件时才有此设置。<br>新用户注册了帐号A时，填写了推广帐号B，B将获取A注册时充值的天数 * 该值 最终单位是小时，比如这里填1的话，A注册时填了张月卡，B就可以获取 30*1 小时的时间，默认不赠送',
'转移帐号时间'			=>'添加或编辑用户模式软件时才有此设置。<br>每次客户转帐所扣的用户时间，此功能可以应用到绑定帐号功能，即注册系统帐号必须和游戏帐号一样，如若用户的游戏帐号改了，又可以注册一个新的帐号把旧的帐号时间转过来，扣时是一种限制，要转帐就必须让用户在使用时间上边做出点牺牲，以防止用户不在两个用户名之间不停的转帐。',
'注册或充值'			=>'注册或充值时的优惠模式，可以设定用户一次性填X张Y卡，赠Z天的功能。例如一次性充3张周卡，赠送9天，就相当于一次性冲三张周卡等于一张月卡。',
'无卡用户注册'			=>'第一个参数就不用解释了，看第二个参数：不赠送即不允许无卡注册帐号。选择相应赠送时间即是指注册一个新帐号时不用填充值卡号即可获得相应的使用时间，这种注册成功的帐号叫免费帐号（注意同试用帐号区分开来）<br>如果注册系统帐号没有绑定游戏帐号，请一定要选择不赠送，因为没有限制电脑可注册的免费帐号数量，同一个电脑每天可以注册很多个免费帐号，如果注册系统帐号同游戏帐号绑定了的话，用户注册还多的帐号也没用的，因为只有和游戏帐号相同的注册系统帐号才可以用，但是没绑定的话麻烦就大了，客户只用花少许时间注册多点帐号就可以不停的换注册帐号试用。',
'可使用软件的时段'			=>'指试用卡、试用帐号、免费帐号可以在哪个时间段使用软件，默认是0点-23点即不限制。',
'每日可试用次数'			=>'指的是试用卡和试用帐号<font color=red>每天每台电脑</font>可试用的次数，非免费帐号',
'每次可试用时间'			=>'指的是试用卡和试用帐号每次可试用时间，算法是这里填的值*验证频率，单位分钟',
'登陆标识'			=>'如果选判断，用户登陆后会显示在线，当用户在线状态时，新的客户端是无法登录的。<br>如果原登陆电脑未正常退出，必须在原电脑上重新打开一次软件，在开启软件时注册系统会自动检测上次本机未正常下线的客户端并下线。<br>使用该功能必须在登录器窗体载入事件中调用ks_setExtVal并且第六个参数要是字符串1',
'解绑（换机）策略'			=>'解绑功能完全实现由服务端来控制了，有以下四种模式。<br>不允许解绑（换机）：解绑次数设置将无效，设置成这就是绑机功能，让用户只能在首次使用的电脑上使用<br>宽松型：离最后一次验证时间1分钟以上才可以在新机上登陆<br>标准型：离最后一次验证时间17分钟以上才可以在新机上登陆<br>严谨型：离最后一次验证时间60分钟以上才可以在新机上登陆',
'每天可解绑次数'			=>'简单点说就是每天可以换机子的次数，设为0即不允许换机，上边的解绑策略也将失效',
'多开卡绑定设置'			=>'只有卡模式软件才有同一注册卡多开功能，这里主要是用来控制同一注册卡多开时是否只能在同一台机子上多开。',
'软件售价'			=>'添加或编辑用户模式软件时仅有单开卡，添加或编辑卡模式软件时才有N开卡售价设置，只有价格不等0的才会显示到售卡系统里边。',
'售卖卡的连接数'			=>'添加或编辑用户模式软件时仅有单开卡，添加或编辑卡模式软件时才有N开设置',
'软件简介'			=>'将会显示到售卡系统的软件说明里，只支持文本，不支持html',
'强制升级'			=>'发布新版本时，是否强制用户升级。当服务端的软件版本号大于客户端设置的软件版本号的前提下，如果选是，不管用户在客户端有没有勾选检查更新都会下载最新版软件，不更新将不能使用；选否的话，只有用户在客户端勾选了检查更新才会去下载最新版本软件。<br>使用自动更新功能，需把update.exe放到你的程序根目录',
'软件版本'			=>'最新版本里设定的软件版本号，判断用户所使用的软件是否需要更新主要就是依据此参数，当用户使用的软件版本小于本参数时，系统就认为用户的软件要升级了。',
'下载包地址'			=>'最新版本软件的下载地址，会显示到售卡系统里，自动更新时的下载地址就是这个。必须是exe文件，如不是请用winrar制作成自解压exe格式(URL中不能有中文)',
'升级日志'			=>'会显到在自动更新程序update.exe界面里，不支持html。',
'单开卡↓售价'			=>'卡模式软件的单连接卡的相关售价',
'开卡↓售价'			=>'卡模式软件的多连接卡的相关售价',
'软件公告'			=>'可用于在客户打开客户端打开软件时发送公告信息，可从ks_getdata(软件编号)中提取',
'扣点设置'			=>'启用扣点时，充值时会按卡的点数来给用户充值点数，扣点数需要调用 ks_advapi接口，并在服务端的advapi里调用 api_ds(要扣的点数)<br>例如，客户端调用<br> ks_advapi('.YH.'v_myds,2,随机数'.YH.')  后边要带一个随机数是为了让每次调用的扣点API参数不同，以保证实时连接服务器进生扣点<br> 服务端advapi代码可写<br>&lt;?php<br>function v_myds($a){<br>&nbsp;&nbsp;&nbsp;&nbsp;return api_ds($a[1]);  //扣点成功返回 ok 失败返回no<br>}<br>?&gt;',		
'服务端处理数据程序'			=>'高级动态数据交互，可以实现客户端软件部份运算代码交给服务器来执行并返回数据，很有效的防止破解，使用此功能需熟悉PHP编程技术。<br>具体说明请查看<a href=viewtemplate.php target=_blank style=\'color:#f00\'>模板文件</a>'
),
'agent'=>array(
'代理商名'			=>'就是代理登陆售卡系统时的用户名',
'折扣'			=>'代理购买经过授权的软件所享受的购卡拆扣',
'享受折扣'			=>'代理购买经过授权的软件所享受的购卡拆扣',
'最小消费'			=>'代理购买经过授权的软件时，每次下单的最小金额。',
'最低消费'			=>'代理购买经过授权的软件时，每次下单的最小金额。',
'取卡保护(次)'			=>'当该值为0时代理不允许未付款就取卡，当代理连续未付款先取卡的次数大于本值时不可实时取卡，当作者后台发卡或代理在线支付成功后，连续未付款取卡次数会清0。',
'超时保护(小时)'			=>'代理未付款的情况下取得的卡，在超去该值还未完成付款的话会被系统自动冻结',
'取卡保护'			=>'当该值为0时代理不允许未付款就取卡，当代理连续未付款先取卡的次数大于本值时不可实时取卡，当作者后台发卡或代理在线支付成功后，连续未付款取卡次数会清0。',
'超时保护'			=>'代理未付款的情况下取得的卡，在超去该值还未完成付款的话会被系统自动冻结',
'积分'			=>'每次代理购卡并付款完成后，所得的积分总和，1元相当于1积分，从这里可以看出代理的消费总额',
'状态'			=>'正常时可登陆，锁定时不可登陆',
'相关软件'			=>'你要授权代理哪些软件就勾选它们，只有勾选了的，代理才可以已拆扣价购买',
'代理备注'			=>'这个是留给你自己看的，方便你管理代理商'
)
);
if(isset($_MMVAR_ee7862b5bcf50cb137[$_MMVAR_25bb91256a5035fc4c][$_MMVAR_4b198e1747829d33ed]))
exit('<div align=left>'.$_MMVAR_ee7862b5bcf50cb137[$_MMVAR_25bb91256a5035fc4c][$_MMVAR_4b198e1747829d33ed].'</div>');	
exit('未找到相应的说明!('.$_MMVAR_25bb91256a5035fc4c.'-'.$_MMVAR_4b198e1747829d33ed.')');
function _MMFUN_1398857305d2321ef4($_MMVAR_a187c965f81c061c72){
$_MMVAR_4b198e1747829d33ed=str_replace('K0003','/',$_MMVAR_a187c965f81c061c72);
$_MMVAR_4b198e1747829d33ed=str_replace('K0002','+',$_MMVAR_4b198e1747829d33ed);
$_MMVAR_4b198e1747829d33ed=str_replace('K0001','=',$_MMVAR_4b198e1747829d33ed);
$_MMVAR_4b198e1747829d33ed=base64_decode($_MMVAR_4b198e1747829d33ed);
return $_MMVAR_4b198e1747829d33ed;
}
?>