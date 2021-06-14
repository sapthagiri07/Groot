<?php

$conn=mysqli_connect("LocalHost","root","","grootex"); 
$Id=$_POST['Id'];
$Name =$_POST['Name'];
$Fathers_Name=$_POST['Fathers_Name'];
$Date=$_POST['Date'];
$Email=$_POST['Email'];
$Contact=$_POST['Contact'];
$Parent_Number=$_POST['Parent_Number'];
$Address=$_POST['Address'];
$Course=$_POST['Course'];
$Blood_Group=$_POST['Blood_Group'];
$School_Name=$_POST['School_Name'];
$College_Name=$_POST['College_Name'];
$Quota=$_POST['Quota'];

$result = mysqli_query($conn, "INSERT INTO groot(Id,Name,Fathers_Name,Date,Email,Contact,Parent_Number,Address,Course,Blood_Group,School_Name,College_Name,Quota) VALUES('$Id','$Name','$Fathers_Name','$Date','$Email','$Contact','$Parent_Number','$Address','$Course','$Blood_Group','$School_Name','$College_Name','$Quota')");
if($result)
    echo "SUCCESSFULL";
else
    echo "Failed";

?>