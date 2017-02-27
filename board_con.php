<?php
$connect=mysql_connect("localhost","id","password");
if(!$connect){
  die('Could not connect_O: '.mysql_error());
}
mysql_select_db("DBname",$connect);

?>
