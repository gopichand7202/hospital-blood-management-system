<?php
$servername='localhost';
$username="root";
$password="";
$databasename="booddonation";
$conn=new mysqli($servername,$username,$password,$databasename);
$x1=$_POST['rollno'];
$x2=$_POST['ld'];
$date=date_create($x2);
$x2=date_format($date,"Y-m-d");
$x3=$_POST['clgname'];
echo $x2;
$sql="update donor set ldate='$x2' where rollno='$x1' and clgname='$x3'";
if($conn->query($sql)==TRUE){
    echo "<h3>Updated successfully</h3>";
    echo "<h3>To update more records <a href='update.html'>Click here</a></h3>";
    echo "<h3>To go to home page <a href='first.html'>Click here</a></h3>";
    echo "<h3>Otherwise <a href='admin.html'>Click here</a></h3>";
}
else{
    echo "<h3>Unable to process the request</h3>";
    echo "<button onclick='admin.html'>OK</button>";
}
