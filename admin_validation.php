<?php
$x=$_POST['un'];
$y=$_POST['pwd'];
$servername='localhost';
$username="root";
$password="";
$databasename="booddonation";
$conn=new mysqli($servername,$username,$password,$databasename);
$sql="select * from admin";
$result=$conn->query($sql);
$k=0;
while($row=$result->fetch_assoc()){
    if($row['username']==$x && $row['pwd']==$y){
        $k=1;
        break;
    }
}
if($k==1){
    header("location:admin.html");
}
else{
    echo "<h2>Enter valid details<h2>";
    echo "<a href='validation.html'>Click here</a>";
}
?>