<!-- to Read data from API -->
<?php
header("Content-Type:application/json");
if (isset($_GET['Id']) && $_GET['Id']!="") {
	$conn=mysqli_connect("LocalHost","root","","grootex");
	$Id = $_GET['Id'];
	$result = $conn->query("SELECT * FROM groot WHERE Id=$Id ");
	if(mysqli_num_rows($result)){
		$stdArr["data"] = array();
		while($row=$result->fetch_assoc()){
			array_push($stdArr["data"], $row);
		}
		echo json_encode($stdArr);
	}
}
?>