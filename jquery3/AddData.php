<?php
session_start();
include_once('tm/dbinfo.php');
require_once('tm/FirePHP.class.php');
require_once('tm/fb.php');
ob_start(); //gotta have this
fb('how are you today');
  
 
  $role = $_REQUEST['role'] ;
  $roledesc = $_REQUEST['roledesc'] ;
  $num = $_REQUEST['num'] ;

$oid =145;

fb($role);
fb($roledesc);
fb($num);

mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) or die("can't connect");
mysql_select_db (DB_DATABASE) or die("db unavailable");
$sql= "INSERT INTO roles (`oid`, `role`, `roledesc`, `num`)
VALUES ('$oid', '$role', '$roledesc', '$num')"; 

mysql_query($sql) or die("Dead inserting");

echo mysql_insert_id();
?>