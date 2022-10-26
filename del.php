<?php
$servername='localhost';
$username="root";
$password="";
$databasename="booddonation";
$conn=new mysqli($servername,$username,$password,$databasename);
$x1=$_POST['yoj'];
$x2=$_POST['clgname'];
echo $x1 . '  ' . $x2;
$sql="delete from donor where yoj=$x1 and clgname='$x2'";
if($conn->query($sql)==TRUE){
    echo "<h3>Deletion completed successfully</h3>";
    echo "<h3>To delete more donors <a href='deletion.html'>Click here</a></h3>";
    echo "<h3>To go to home page <a href='first.html'>Click here</a></h3>";
    echo "<h3>Otherwise <a href='admin.html'>Click here</a></h3>";
}
else{
    echo "<h3>Unable to process the request</h3>";
    echo "<button onclick='admin.html'>OK</button>";
}
?>