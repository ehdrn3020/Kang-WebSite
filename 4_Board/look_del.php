<?php
function alert() {
	echo "<script type='text/javascript'>;
	      alert('Wrong Password');
  		  document.location.href=history.back();
				</script>\n";
	return 0;
}

$pwd=$_POST['psw'];
if($pwd!='site pwd'){
  alert();
}
else{
$connect=mysql_connect("localhost","id","password");
if(!$connect){
  die('Could not connect_ds: '.mysql_error());
}
$tx=$_GET['tx'];

mysql_select_db("DBname",$connect);
mysql_query("DELETE FROM board1 WHERE Title=\"$tx\"");
mysql_close($connect);
header('Location:./w_server.html');
}
?>
