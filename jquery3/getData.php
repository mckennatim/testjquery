<?php 
session_start();
include_once('tm/dbinfo.php');
require_once('tm/FirePHP.class.php');
require_once('tm/fb.php');
ob_start(); //gotta have this
fb('how are you today');

$oid =145;

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}	

$qry = "SELECT *
FROM roles  
WHERE oid='$oid'";
fb($qry);
$roler = $db->query($qry) or die("Dead finding units uid");

$rows = array();
while ($row = $roler->fetch_array()) {
$rows[] = $row;	
}
$output['aaData'][] = $rows;
print json_encode($output);
?>