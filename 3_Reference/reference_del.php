<?php
$data=$_POST['del'];
$psw=$_POST['psw'];

function alert() {
	echo "<script type='text/javascript'>;
	      alert('Wrong Password');
  		  document.location.href=\"Reference.html\";
				</script>\n";
	return 0;
}
if($psw!='site pwd'){
  alert();
}
else{
$connect=mysql_connect("localhost","id","password");
if(!$connect){
  die('Could not connect_ds: '.mysql_error());
}
mysql_select_db("DBname",$connect);
mysql_query("DELETE FROM reference WHERE name=\"$data\"");
mysql_close($connect);
header('Location:./Reference.html');
}
 ?>
