<?php
//資料庫設定
//資料庫位置
$db_server = "192.168.43.163";
//$db_server = "192.168.100.100";
//資料庫名稱
$db_name = "wp_finalproject";
//資料庫管理者帳號
$db_user = "D0342290";
//資料庫管理者密碼
$db_passwd = "XM41L3G6";

//對資料庫連線
if(!@mysqli_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");

$con = mysqli_connect($db_server, $db_user, $db_passwd);

//選資料庫
if(!@mysqli_select_db($con,$db_name))
        die("無法使用資料庫");

$result = mysqli_query($con,"set names utf8");
?>
