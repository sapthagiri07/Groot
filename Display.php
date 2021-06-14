<?php
// to display API in JSON Format
    $conn=mysqli_connect("LocalHost","root","","grootex");
    $result=mysqli_query($conn,"SELECT * FROM groot");
    $json_array= array();
    while($row=mysqli_fetch_assoc($result))
    {
        $dataArray[]=array("Name"=>$row['Name'], "Fathers_Name"=>$row['Fathers_Name'],"Date"=>$row['Date'],"Email"=>$row['Email'],"Contact"=>$row['Contact'],"Parent_Number"=>$row['Parent_Number'],"Address"=>$row['Address'],"Course"=>$row['Course'],"Blood_Group"=>$row['Blood_Group'],"School_Name"=>$row['School_Name'],"College_Name"=>$row['College_Name'],"Quota"=>$row['Quota']);
    }
    echo json_encode(array( $dataArray ));
?>