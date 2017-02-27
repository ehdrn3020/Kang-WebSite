<?php
function alert() {
	echo "<script type='text/javascript'>;
	      alert('Thank you!');
  		  document.location.href=history.back();
				</script>\n";
	return 0;
}

$message = $_POST['message'];
$connect=mysql_connect("localhost","id","password");
if(!$connect){
  die('Could not connect_ds: '.mysql_error());
}

mysql_select_db("DBname",$connect);
mysql_query("INSERT into message (text) VALUES ('$message')");
mysql_close($connect);

alert();
 ?>
