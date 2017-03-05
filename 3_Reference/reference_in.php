<?php
//Input the Data of bookmark

$ka=$_POST['ka'];
$name=$_POST['name'];
$url=$_POST['url'];
$des=$_POST['des'];
$psw=$_POST['psw'];
//html values
function alert() {
	echo "<script type='text/javascript'>;
	      alert('Wrong Password');  document.location.href=\"Reference.html\";
		</script>\n";
	return 0;
}
if($psw!='site pwd'){
  alert();
}
else{
	$connect=mysql_connect("localhost","id","password");
	if(!$connect){
  	die('Could not connect_I: '.mysql_error());
	}
	mysql_select_db("DBname",$connect);
	mysql_query("INSERT INTO reference (ca, name, url, des)
	VALUES ('$ka','$name','$url','$des')");

	mysql_close($connect);
	header('Location:./Reference.html');
	}
?>
