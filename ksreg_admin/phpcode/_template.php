<?php
/**
 * 更新时间：23:00 2010-12-13
 =======================================================================================
客户端发送的数据格式必须是： advapi("v_函数名,参数1,参数2,参数3, ... ,参数N")   注意这只是一个字符串
函数名必须以v_开头且只能包函字母和数字。

你自己的每一个算法函数仅能有(必须有)一个参数$marray，该参数是数组
	$marray[0]="函数名"
	$marray[1]="参数1"
	$marray[2]="参数2"
	$marray[3]="参数3"
	...

	$marray[N]="参数N"

举例：
例如你向服务器发送一个字串 advapi("v_eg1,12,332")
服务端php程序首先会找一个你写的函数v_eg1
	如果没找到函数v_eg1就会返回出错信息
	找到了的话会把字串"v_eg1,12,332,321"用逗号分割成数组，传递给v_eg1函数处理，并将返回值加密后再返回给客户端。
	
总之你可以发挥你的想像力，把客户端的一些关键算法都保存到服务端让php来运算，最关键的是你必须会用php写一些算法、函数等等。
 =======================================================================================
 */


//你自己定义的算法函数
function v_eg1($marray){
	$tmpvalue=($marray[1]+12).",".($marray[2]+12);		//对传递过来的数据进行你自已的算法进行处理
	return $tmpvalue;		//返回运算后的值给调用处

}

//你自己定义的算法函数
function v_eg2($marray){
	$tmpvalue=($marray[1]+42).",".($marray[2]+52);		//对传递过来的数据进行你自已的算法进行处理
	return $tmpvalue;		//返回运算后的值给调用处

}

//你自己定义的算法函数
function v_eg3($marray){
	$tmpvalue=($marray[1]+122).",".($marray[2]-100);		//对传递过来的数据进行你自已的算法进行处理
	return $tmpvalue;		//返回运算后的值给调用处

}

?>