 <?php
// --------------------------- SQL Connect Info --------------------------- //
$sql_host = "YOU";
$sql_user = "DON'T";
$sql_pass = "NEED";
$sql_database = "THIS";
// ---------------------------  connect script  --------------------------- //
 
$db = mysql_connect($sql_host, $sql_user, $sql_pass) or die("Could not connect.");
if(!$db) 
 die("no db");
if(!mysql_select_db($sql_database,$db))
  die("No database selected.");
 ?> 