<?php
$servername='localhost';
$username="root";
$password="";
$databasename="booddonation";
$conn=new mysqli($servername,$username,$password,$databasename);
print_r($_POST);
$x1=$_POST['name'];
$x2=$_POST['id'];
$x3=$_POST['phn'];
$x4=$_POST['address'];
$x5=$_POST['clgname'];
$x6=$_POST['ld'];
$x7=$_POST['yoj'];
$x8=$_POST['bgrp'];
  $num_len=strlen((string) $x3);
 if($num_len!=10)
  { echo"enter valid details";
  }
  else
 {
   $sql="insert into donor values('$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8')";}
if($conn->query($sql)==TRUE){
    echo "<h3>Inserted records successfully</h3>";
    echo "<h3>To add more donors <a href='adding.html'>Click here</a></h3>";
    echo "<h3>To go to home page <a href='first.html'>Click here</a></h3>";
   echo "<h3>Otherwise <a href='admin.html'>Click here</a></h3>";
}
else{
    header('location:admin.html');
}

?>