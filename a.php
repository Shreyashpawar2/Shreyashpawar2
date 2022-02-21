<?php

 $a=$_POST['name'];
 $b=$_POST['age'];

 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'test');
 $q="insert into test(id,name) values($a,'$b')";
 mysqli_query($con,$q);
     mysqli_close($con);
 

?>