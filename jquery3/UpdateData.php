<?php
session_start();
include_once('tm/dbinfo.php');
require_once('tm/FirePHP.class.php');
require_once('tm/fb.php');
ob_start(); //gotta have this
fb('how are you today');
  
  $id = $_REQUEST['id'] ;
  $value = $_REQUEST['value'] ;
  $column = $_REQUEST['columnName'] ;
  $columnPosition = $_REQUEST['columnPosition'] ;
  $columnId = $_REQUEST['columnId'] ;
  $rowId = $_REQUEST['rowId'] ;

$oid =145;

mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) or die("can't connect");
mysql_select_db (DB_DATABASE) or die("db unavailable");

  /* Update a record using information about id, columnName (property
     of the object or column in the table) and value that should be
     set */ 
  echo $value;

?>