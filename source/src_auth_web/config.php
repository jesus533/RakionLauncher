<?php
if(@S_include != "freeclient") exit;

#MYSQL CONFIG
define('MYSQL_HOST', "127.0.0.1");
define('MYSQL_USER', "root");
define('MYSQL_PASS', "123456");
define('MYSQL_NAME', "rakion");

#AUTH CLIENT
define('CLIENT_AUTH', "freeclient");

#ADD GOLD X DAY
$USER_GOLDL = '25000';
define('USER_GCVAR', false);

#ADD CASH X DAY
$USER_CASHL = '25000';
define('USER_CCVAR', false);

#AUTH DISABLE OR ENABLE
define('SERVER_ON', true);
define('SERVER_MSJ_M', "Server Offline");

if (@mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS))
{
	@mysql_select_db(MYSQL_NAME) or die("[Error]: 3");
}
else 
{
	echo "[Error]: Auth OFF";
	exit;
}
?>
