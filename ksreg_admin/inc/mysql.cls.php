<?php 
	//生成日期:2012-07-14 15点 (混淆器版本:v1.2, 混淆密钥:ksreg, 混淆后关键字长度:18)  ---- ※ Copyright(C) 2008-2011 www.hphu.com, All rights Reserved.
?><?php
class mysql_cls{
public $_MMVAR_097973e81cfe667e72 = 0;
public $_MMVAR_3e1e61b88e9dea4b46;
private $_MMVAR_abb6c66b467898e5c7;
function _MMFUN_06067bafeb84eaf0af($_MMVAR_a68c41bd0ae0e8ec59=array('dbhost'=>'localhost', 'dbuser'=>'root', 'dbpass'=>'password', 'dbname' => '', 'dbcharset' => 'utf8', 'pconnect' =>0, 'newlink' =>0)){
global $_MMVAR_fd562bda169cdce28d;

$this->_MMVAR_abb6c66b467898e5c7=$_MMVAR_a68c41bd0ae0e8ec59;
if($_MMVAR_a68c41bd0ae0e8ec59['pconnect']){
if(!$this->_MMVAR_3e1e61b88e9dea4b46= @mysql_pconnect($_MMVAR_a68c41bd0ae0e8ec59['dbhost'], $_MMVAR_a68c41bd0ae0e8ec59['dbuser'], $_MMVAR_a68c41bd0ae0e8ec59['dbpass'],$_MMVAR_a68c41bd0ae0e8ec59['newlink'])){
if($_MMVAR_a68c41bd0ae0e8ec59==$_MMVAR_fd562bda169cdce28d){
return mysql_error();
}else{
$this->_MMFUN_6da5ed7d3a356dcac7(mysql_error());
}
}
} else{
if(!$this->_MMVAR_3e1e61b88e9dea4b46= @mysql_connect($_MMVAR_a68c41bd0ae0e8ec59['dbhost'], $_MMVAR_a68c41bd0ae0e8ec59['dbuser'], $_MMVAR_a68c41bd0ae0e8ec59['dbpass'],$_MMVAR_a68c41bd0ae0e8ec59['newlink'])){
if($_MMVAR_a68c41bd0ae0e8ec59==$_MMVAR_fd562bda169cdce28d){
return mysql_error();
}else{
$this->_MMFUN_6da5ed7d3a356dcac7(mysql_error());
}
}
}

@mysql_select_db($_MMVAR_a68c41bd0ae0e8ec59['dbname'], $this->_MMVAR_3e1e61b88e9dea4b46);
@mysql_query('set names \'utf8\''); 
if(mysql_errno()){
if($_MMVAR_a68c41bd0ae0e8ec59==$_MMVAR_fd562bda169cdce28d){
return mysql_error();
}else{
$this->_MMFUN_6da5ed7d3a356dcac7(mysql_error());
}
}
return 'success';
}

function _MMFUN_4c38ba299e315a5ef3($_MMVAR_ae5b25b58f5086c174){
$this->_MMFUN_9186ce7fdb77ebe6df('lock tables '.$_MMVAR_ae5b25b58f5086c174.' write','not_sync');
}

function _MMFUN_25efaf9fad02c6cd03($_MMVAR_ae5b25b58f5086c174=''){
$this->_MMFUN_9186ce7fdb77ebe6df('unlock tables','not_sync');
}

function _MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e, $_MMVAR_57a17d96a596f1f36a='not_sync', $_MMVAR_3be1d31d75ac7b354c = '',$_MMVAR_2475a8828c62105892=0){
$_MMVAR_2b25af8c87b69dc87f = ($_MMVAR_3be1d31d75ac7b354c == 'unbuf' && @function_exists('mysql_unbuffered_query')) ? 'mysql_unbuffered_query' : 'mysql_query';		
if(!($_MMVAR_d8eda7510ebb6c7e80 = $_MMVAR_2b25af8c87b69dc87f($_MMVAR_6acb770a66d220e25e, $this->_MMVAR_3e1e61b88e9dea4b46))){
if(in_array($this->_MMFUN_df38b8358bad75dc07(), array(2006, 2013)) && substr($_MMVAR_3be1d31d75ac7b354c, 0, 5) != 'retry'){
$this->close();
$this->_MMFUN_06067bafeb84eaf0af($this->_MMVAR_abb6c66b467898e5c7);
$this->_MMFUN_9186ce7fdb77ebe6df($_MMVAR_6acb770a66d220e25e, 'retry'.$_MMVAR_3be1d31d75ac7b354c);
} else{
if($_MMVAR_2475a8828c62105892!==0)
$this->_MMFUN_6da5ed7d3a356dcac7('MySQL Query Error',$_MMVAR_6acb770a66d220e25e);
}
}	
if(IS2SVR==1 && $_MMVAR_d8eda7510ebb6c7e80!==false && $_MMVAR_57a17d96a596f1f36a=='sync' ){
//if($_MMVAR_d8eda7510ebb6c7e80!==false && $_MMVAR_57a17d96a596f1f36a=='sync' ){
if(substr(strtolower(trim($_MMVAR_6acb770a66d220e25e)),0,6)!=='select'){
$_MMVAR_76a7086af7bcfb52b2=array(
'addtime'=>time(),
'sqltext'=>"".mysql_real_escape_string($_MMVAR_6acb770a66d220e25e).""
);
$this->_MMFUN_d5033eea64260e1006(TNREG.'_sql', $_MMVAR_76a7086af7bcfb52b2);
}
}
$this->_MMVAR_097973e81cfe667e72++;
return $_MMVAR_d8eda7510ebb6c7e80;
}

function _MMFUN_6daeb641036239cfd4($_MMVAR_6acb770a66d220e25e, $_MMVAR_57a17d96a596f1f36a='not_sync', $_MMVAR_3be1d31d75ac7b354c = '',$_MMVAR_2475a8828c62105892=0){
$_MMVAR_30c76b9d51de93f6b0=strtolower(trim($_MMVAR_6acb770a66d220e25e));
$_MMVAR_d6aed933616b3eb9c1=substr($_MMVAR_30c76b9d51de93f6b0,0,6);
$_MMVAR_7ad80a13c1fe0fe99e=false;
if($_MMVAR_d6aed933616b3eb9c1=='update'){
$_MMVAR_6a8bf444488626803f=stripos($_MMVAR_30c76b9d51de93f6b0,' SET');
$_MMVAR_ae4454a8f73ca5c822 = str_replace('`','',trim(substr($_MMVAR_30c76b9d51de93f6b0,6,$_MMVAR_6a8bf444488626803f-6)));
$_MMVAR_7ad80a13c1fe0fe99e=true;
}else if($_MMVAR_d6aed933616b3eb9c1=='insert'){
$_MMVAR_90bc989e031b7e5b21=stripos($_MMVAR_30c76b9d51de93f6b0,'into');
$_MMVAR_6a8bf444488626803f=stripos($_MMVAR_30c76b9d51de93f6b0,' (');
$_MMVAR_ae4454a8f73ca5c822 = str_replace('`','',trim(substr($_MMVAR_30c76b9d51de93f6b0,$_MMVAR_90bc989e031b7e5b21+4,$_MMVAR_6a8bf444488626803f-$_MMVAR_90bc989e031b7e5b21-4)));
$_MMVAR_7ad80a13c1fe0fe99e=true;      
}
if($_MMVAR_7ad80a13c1fe0fe99e=true)
mysql_query('LOCK TABLES '.$_MMVAR_ae4454a8f73ca5c822.' WRITE' , $this->_MMVAR_3e1e61b88e9dea4b46);

$_MMVAR_2b25af8c87b69dc87f = ($_MMVAR_3be1d31d75ac7b354c == 'unbuf' && @function_exists('mysql_unbuffered_query')) ? 'mysql_unbuffered_query' : 'mysql_query';		
if(!($_MMVAR_d8eda7510ebb6c7e80 = $_MMVAR_2b25af8c87b69dc87f($_MMVAR_6acb770a66d220e25e, $this->_MMVAR_3e1e61b88e9dea4b46))){
if(in_array($this->_MMFUN_df38b8358bad75dc07(), array(2006, 2013)) && substr($_MMVAR_3be1d31d75ac7b354c, 0, 5) != 'retry'){
$this->close();
$this->_MMFUN_06067bafeb84eaf0af($this->_MMVAR_abb6c66b467898e5c7);
$this->_MMFUN_6daeb641036239cfd4($_MMVAR_6acb770a66d220e25e, $_MMVAR_57a17d96a596f1f36a,'retry'.$_MMVAR_3be1d31d75ac7b354c);
} else{
if($_MMVAR_2475a8828c62105892!==0)
$this->_MMFUN_6da5ed7d3a356dcac7('MySQL Query Error',$_MMVAR_6acb770a66d220e25e);
}
}else{	
if($_MMVAR_7ad80a13c1fe0fe99e=true)
mysql_query('UNLOCK TABLES' , $this->_MMVAR_3e1e61b88e9dea4b46);
}   

if(IS2SVR==1 && $_MMVAR_d8eda7510ebb6c7e80!==false && $_MMVAR_57a17d96a596f1f36a=='sync' ){
//if($_MMVAR_d8eda7510ebb6c7e80!==false && $_MMVAR_57a17d96a596f1f36a=='sync' ){
if(substr(strtolower(trim($_MMVAR_6acb770a66d220e25e)),0,6)!=='select'){
$_MMVAR_76a7086af7bcfb52b2=array(
'addtime'=>time(),
'sqltext'=>"".mysql_real_escape_string($_MMVAR_6acb770a66d220e25e).""
);
$this->_MMFUN_d5033eea64260e1006(TNREG.'_sql', $_MMVAR_76a7086af7bcfb52b2);
}
}
$this->_MMVAR_097973e81cfe667e72++;
return $_MMVAR_d8eda7510ebb6c7e80;
}


function _MMFUN_b7d71b457d63cce936($_MMVAR_6acb770a66d220e25e) {
$_MMVAR_38e495875d068c671b = mysql_query($_MMVAR_6acb770a66d220e25e);
if ($_MMVAR_38e495875d068c671b !== false) {
$_MMVAR_82627f57007ea61141 = array ();
while ( $_MMVAR_5a0f5f64cd15c205df = mysql_fetch_row ( $_MMVAR_38e495875d068c671b ) ) {
$_MMVAR_82627f57007ea61141 [] = $_MMVAR_5a0f5f64cd15c205df [0];
}
return $_MMVAR_82627f57007ea61141;
} else {
return false;
}
}


function _MMFUN_d5033eea64260e1006($_MMVAR_1d36e439a20c35002e, $_MMVAR_f8fc49e52aecb87b24, $_MMVAR_57a17d96a596f1f36a='not_sync') {

$_MMVAR_4a10004aae3e788ed2 = $this->_MMFUN_b7d71b457d63cce936 ( 'DESC ' . $_MMVAR_1d36e439a20c35002e );
$_MMVAR_4334f141fd65ec8fcc = array ();
$_MMVAR_58072c4a623ca4b47a = array ();
//echo $_MMVAR_1d36e439a20c35002e."<br>";
foreach ( $_MMVAR_4a10004aae3e788ed2 as $_MMVAR_4ff92f711953671bb4 ) {
if (array_key_exists ( $_MMVAR_4ff92f711953671bb4, $_MMVAR_f8fc49e52aecb87b24 ) == true) {
$_MMVAR_4334f141fd65ec8fcc [] = '`' . $_MMVAR_4ff92f711953671bb4 . '`';
$_MMVAR_58072c4a623ca4b47a [] = '\''.$_MMVAR_f8fc49e52aecb87b24 [$_MMVAR_4ff92f711953671bb4].'\'';
}
}
if (! empty ( $_MMVAR_4334f141fd65ec8fcc )) {
$_MMVAR_cfb4aa1ad0442f9027=$this->_MMFUN_9186ce7fdb77ebe6df('INSERT INTO ' . $_MMVAR_1d36e439a20c35002e . ' (' . implode( ', ', $_MMVAR_4334f141fd65ec8fcc ) . ') VALUES (' . implode ( ', ', $_MMVAR_58072c4a623ca4b47a ) . ')',$_MMVAR_57a17d96a596f1f36a);
if($_MMVAR_57a17d96a596f1f36a=='sync9')
echo 'INSERT INTO ' . $_MMVAR_1d36e439a20c35002e . ' (' . implode( ', ', $_MMVAR_4334f141fd65ec8fcc ) . ') VALUES (' . implode ( ', ', $_MMVAR_58072c4a623ca4b47a ) . ')<br>';
return $this->_MMFUN_09521a6f72808200ea($_MMVAR_1d36e439a20c35002e)-1;
} else {

return false;
}
}


function _MMFUN_33341a6081a0c7b669($_MMVAR_1d36e439a20c35002e, $_MMVAR_f8fc49e52aecb87b24, $_MMVAR_564a116d18d2609417 = '',$_MMVAR_57a17d96a596f1f36a='not_sync') {		
$_MMVAR_4a10004aae3e788ed2 = $this->_MMFUN_b7d71b457d63cce936 ( 'DESC ' . $_MMVAR_1d36e439a20c35002e );
$_MMVAR_5f50c1fff5ffce1aad = array ();
foreach ( $_MMVAR_4a10004aae3e788ed2 as $_MMVAR_4ff92f711953671bb4 ) {
if (array_key_exists ( $_MMVAR_4ff92f711953671bb4, $_MMVAR_f8fc49e52aecb87b24 ) == true) {
$_MMVAR_5f50c1fff5ffce1aad [] = '`'.$_MMVAR_4ff92f711953671bb4.'`' . '=\'' . $_MMVAR_f8fc49e52aecb87b24 [$_MMVAR_4ff92f711953671bb4].'\'';
}
}
if (! empty ( $_MMVAR_5f50c1fff5ffce1aad )) {
return $this->_MMFUN_9186ce7fdb77ebe6df ('UPDATE ' . $_MMVAR_1d36e439a20c35002e . ' SET ' . implode ( ', ', $_MMVAR_5f50c1fff5ffce1aad ) . ' WHERE ' . $_MMVAR_564a116d18d2609417,$_MMVAR_57a17d96a596f1f36a);
}else {
return false;
}
}
function _MMFUN_09521a6f72808200ea($_MMVAR_1d36e439a20c35002e){
$_MMVAR_d8eda7510ebb6c7e80 = $this->_MMFUN_2ae87f854725528ae4('select `id` from `'.$_MMVAR_1d36e439a20c35002e.'` order by `id` desc');
if(empty($_MMVAR_d8eda7510ebb6c7e80)){
$_MMVAR_6e1cd8ad95d18aaaad= 2;
}else{
$_MMVAR_6e1cd8ad95d18aaaad=$_MMVAR_d8eda7510ebb6c7e80['id']+1;
}
return $_MMVAR_6e1cd8ad95d18aaaad;
}



function _MMFUN_582a40d45a94c66645($_MMVAR_89364e6c44f839ce13=0,$_MMVAR_f78f5fea3686a46bab=-1){
return ' LIMIT '.$_MMVAR_89364e6c44f839ce13.','.$_MMVAR_f78f5fea3686a46bab;	
}


function _MMFUN_b11d2ab529d243ceeb($_MMVAR_6acb770a66d220e25e, $_MMVAR_e3a37d65f9be99db2f=1) {
$_MMVAR_9a036496d66f59815a = $this->_MMFUN_9186ce7fdb77ebe6df ($_MMVAR_6acb770a66d220e25e);
if ($_MMVAR_9a036496d66f59815a !== false) {
$_MMVAR_82627f57007ea61141 = array ();
while ( $_MMVAR_5a0f5f64cd15c205df = $this->_MMFUN_fb3bb066c85c9e3084 ($_MMVAR_9a036496d66f59815a,$_MMVAR_e3a37d65f9be99db2f) ) {
$_MMVAR_82627f57007ea61141[] = $_MMVAR_5a0f5f64cd15c205df;
}
mysql_free_result($_MMVAR_9a036496d66f59815a);
return $_MMVAR_82627f57007ea61141;
}else{
return false;
}
}


function _MMFUN_389b61401120815100($_MMVAR_6acb770a66d220e25e) {
$_MMVAR_d8eda7510ebb6c7e80 = $this->_MMFUN_9186ce7fdb77ebe6df ( $_MMVAR_6acb770a66d220e25e );
//cho $_MMVAR_6acb770a66d220e25e;
if(!empty($_MMVAR_d8eda7510ebb6c7e80))
return mysql_num_rows ( $_MMVAR_d8eda7510ebb6c7e80 );
}


function _MMFUN_2ae87f854725528ae4($_MMVAR_6acb770a66d220e25e, $_MMVAR_e3a37d65f9be99db2f=1) {
$_MMVAR_9a036496d66f59815a = $this->_MMFUN_9186ce7fdb77ebe6df ( $_MMVAR_6acb770a66d220e25e );
if ($_MMVAR_9a036496d66f59815a !== false) {
return $this->_MMFUN_fb3bb066c85c9e3084($_MMVAR_9a036496d66f59815a, $_MMVAR_e3a37d65f9be99db2f);
} else {
return false;
}
}


function _MMFUN_70545ed222a52acaa2($_MMVAR_6928286392d2d82fbf,$_MMVAR_135d81f7815012031e,$_MMVAR_3f40418af7fc15fc49,$_MMVAR_c15516dd0b5b56b736='首页',$_MMVAR_088cbde296a4e4522d='上一页',$_MMVAR_8a0172206848162da7='下一页',$_MMVAR_d2dd344ec5a73e7e3b='尾页'){
$_MMVAR_ee83b3e791056309bf=$this->_MMFUN_109d06914540668302($_MMVAR_3f40418af7fc15fc49);
$_MMVAR_fd392af92d8e8a80e3='';
if($_MMVAR_6928286392d2d82fbf<=1){
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_1\'><a href=\'javascript:void(0);\'>'.$_MMVAR_c15516dd0b5b56b736.'</a></div>';
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_1\'><a href=\'javascript:void(0);\'>'.$_MMVAR_088cbde296a4e4522d.'</a></div>';
}else{
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_1\'><a href=\'?page=1'.$_MMVAR_ee83b3e791056309bf.'\'>'.$_MMVAR_c15516dd0b5b56b736.'</a></div>';
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_1\'><a href=\'?page='.($_MMVAR_6928286392d2d82fbf-1).$_MMVAR_ee83b3e791056309bf.'\'>'.$_MMVAR_088cbde296a4e4522d.'</a></div>';
}
for($_MMVAR_8ff60a7771c3f2c087=-3;$_MMVAR_8ff60a7771c3f2c087<=3;$_MMVAR_8ff60a7771c3f2c087++){
$_MMVAR_e64de2529501e78f44=$_MMVAR_8ff60a7771c3f2c087+$_MMVAR_6928286392d2d82fbf;
if($_MMVAR_8ff60a7771c3f2c087==0){
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_a\'><a class=nowpage href=\'javascript:void(0);\'>'.$_MMVAR_6928286392d2d82fbf.'</a></div>';
}elseif($_MMVAR_8ff60a7771c3f2c087<0){
if($_MMVAR_e64de2529501e78f44>=1)
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_a\'><a href=\'?page='.$_MMVAR_e64de2529501e78f44.$_MMVAR_ee83b3e791056309bf.'\'>'.$_MMVAR_e64de2529501e78f44.'</a></div>';
}elseif($_MMVAR_8ff60a7771c3f2c087>0){
if($_MMVAR_e64de2529501e78f44<=$_MMVAR_135d81f7815012031e)
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_a\'><a href=\'?page='.$_MMVAR_e64de2529501e78f44.$_MMVAR_ee83b3e791056309bf.'\'>'.$_MMVAR_e64de2529501e78f44.'</a></div>';
}
}		
If($_MMVAR_6928286392d2d82fbf>=$_MMVAR_135d81f7815012031e){ 
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_1\'><a href=\'javascript:void(0);\'>'.$_MMVAR_8a0172206848162da7.'</a></div>';
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_1\'><a href=\'javascript:void(0);\'>'.$_MMVAR_d2dd344ec5a73e7e3b.'</a></div>';	
}else{
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_1\'><a href=\'?page='.($_MMVAR_6928286392d2d82fbf+1).$_MMVAR_ee83b3e791056309bf.'\'>'.$_MMVAR_8a0172206848162da7.'</a></div>';
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_1\'><a href=\'?page='.$_MMVAR_135d81f7815012031e.$_MMVAR_ee83b3e791056309bf.'\'>'.$_MMVAR_d2dd344ec5a73e7e3b.'</a></div>';
}
$_MMVAR_d6e403486bd84fe6ea=$_MMVAR_135d81f7815012031e;
if($_MMVAR_135d81f7815012031e==250000)$_MMVAR_d6e403486bd84fe6ea='?';	
$_MMVAR_fd392af92d8e8a80e3.='<div class=\'page_nav_2\'>当前第'.$_MMVAR_6928286392d2d82fbf.'页，总：'.$_MMVAR_d6e403486bd84fe6ea.'页</div>';
return '<div id=\'page___nav\'>'.$_MMVAR_fd392af92d8e8a80e3.'</div>';	
}

function _MMFUN_109d06914540668302($_MMVAR_3f40418af7fc15fc49){
$_MMVAR_8562c3793d1a5da415='';
If(is_array($_MMVAR_3f40418af7fc15fc49)){
foreach ($_MMVAR_3f40418af7fc15fc49 as $_MMVAR_74617e88896219981c => $_MMVAR_eeae5438e6bcefcdba) {
$_MMVAR_8562c3793d1a5da415.='&amp;'.$_MMVAR_74617e88896219981c.'='.urlencode($_MMVAR_eeae5438e6bcefcdba);
}
}
return $_MMVAR_8562c3793d1a5da415;
}


function _MMFUN_fb3bb066c85c9e3084($_MMVAR_d8eda7510ebb6c7e80, $_MMVAR_e3a37d65f9be99db2f = 1)
{
return mysql_fetch_array($_MMVAR_d8eda7510ebb6c7e80, $_MMVAR_e3a37d65f9be99db2f);
}

function _MMFUN_7d21c26c396e5ea12e()
{
return mysql_affected_rows($this->_MMVAR_3e1e61b88e9dea4b46);
}

function _MMFUN_d83235dd17f4092c3d()
{
return (($this->_MMVAR_3e1e61b88e9dea4b46) ? mysql_error($this->_MMVAR_3e1e61b88e9dea4b46) : mysql_error());
}

function _MMFUN_df38b8358bad75dc07()
{
return intval(($this->_MMVAR_3e1e61b88e9dea4b46) ? mysql_errno($this->_MMVAR_3e1e61b88e9dea4b46) : mysql_errno());
}

function _MMFUN_e8bb8401bff83e3881($_MMVAR_d8eda7510ebb6c7e80, $_MMVAR_5a0f5f64cd15c205df)
{
$_MMVAR_d8eda7510ebb6c7e80 = @mysql_result($_MMVAR_d8eda7510ebb6c7e80, $_MMVAR_5a0f5f64cd15c205df);
return $_MMVAR_d8eda7510ebb6c7e80;
}

function _MMFUN_058ed9eeaf322ceb4b($_MMVAR_d8eda7510ebb6c7e80)
{
$_MMVAR_d8eda7510ebb6c7e80 = mysql_num_rows($_MMVAR_d8eda7510ebb6c7e80);
return $_MMVAR_d8eda7510ebb6c7e80;
}

function _MMFUN_b54a33669160d0ede4($_MMVAR_d8eda7510ebb6c7e80)
{
return mysql_num_fields($_MMVAR_d8eda7510ebb6c7e80);
}

function _MMFUN_cd90c6416adce3e7b8($_MMVAR_d8eda7510ebb6c7e80){
return mysql_free_result($_MMVAR_d8eda7510ebb6c7e80);
}

function _MMFUN_673e0152b714a3e8b3()
{
return ($_MMVAR_7ca1659d6f01cb3410 = mysql_insert_id($this->_MMVAR_3e1e61b88e9dea4b46)) >= 0 ? $_MMVAR_7ca1659d6f01cb3410 : $this->_MMFUN_e8bb8401bff83e3881($this->_MMFUN_9186ce7fdb77ebe6df("SELECT last_insert_id()"), 0);
}

function _MMFUN_317b4de25892e8590f($_MMVAR_d8eda7510ebb6c7e80)
{
$_MMVAR_d8eda7510ebb6c7e80 = mysql_fetch_row($_MMVAR_d8eda7510ebb6c7e80);
return $_MMVAR_d8eda7510ebb6c7e80;
}

function _MMFUN_56390b0b4b34ff20fa($_MMVAR_d8eda7510ebb6c7e80)
{
return mysql_fetch_field($_MMVAR_d8eda7510ebb6c7e80);
}

function _MMFUN_893aacebd3538e203b()
{
return mysql_get_server_info($this->_MMVAR_3e1e61b88e9dea4b46);
}

function close()
{
return mysql_close($this->_MMVAR_3e1e61b88e9dea4b46);
}

function _MMFUN_6da5ed7d3a356dcac7($_MMVAR_5c8369a9e1e5bce88b = '',$_MMVAR_6acb770a66d220e25e=''){
$_MMVAR_46292e1f599ec7ef70="<b>出错：</b><br>";
$_MMVAR_46292e1f599ec7ef70.="<b>".$_MMVAR_5c8369a9e1e5bce88b."</b><br>";		
if($this->_MMFUN_d83235dd17f4092c3d())
$_MMVAR_46292e1f599ec7ef70.=$this->_MMFUN_d83235dd17f4092c3d().'<br>';
if($_MMVAR_6acb770a66d220e25e)
$_MMVAR_46292e1f599ec7ef70 .= "<b>SQL</b>: ".htmlspecialchars($_MMVAR_6acb770a66d220e25e)."\n";
exit($_MMVAR_46292e1f599ec7ef70);
}
}

?>