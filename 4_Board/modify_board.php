<?php

  $su=$_POST['subject'];
  $title=$_POST['title'];
  $writer=$_POST['writer'];
  $con=$_POST['contents'];
  $psw=$_POST['psw'];
  //html values
  
  function alert() {
  	echo "<script type='text/javascript'>;
  	      alert('Wrong Password');
    		  document.location.href=\"write.html\";
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
    $query = "UPDATE board1 SET Text = '$con' WHERE Title='$title'";
    mysql_query($query, $connect);
    header('Location:./w_server.html');
    }

 ?>
