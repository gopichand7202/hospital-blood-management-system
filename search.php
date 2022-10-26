<?php
$servername='localhost';
$username="root";
$password="";
$databasename="booddonation";
$conn=new mysqli($servername,$username,$password,$databasename);
$x1=$_POST['bgrp'];
$sql="SELECT * from donor where bloodgrp='$x1' order by ldate desc";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<table border=2px align='center'>
        <tr><th>Roll no</th><th>Name</th><th>Phone no</th><th>College name</th><th>last donated</th></tr>";
        while($row=$result->fetch_assoc()){
            echo "<tr><td>" . $row['rollno'] . "</td><td>" . $row['name'] . "</td><td>" . $row['phnno'] . "</td><td>" . $row['clgname'] . "</td><td>" . $row['ldate'] . "</td></tr>";
        }
    echo "</table>";echo "<h3 align='center'>To go to home page <a href='first.html'>Click here</a></h3>";
}

?>