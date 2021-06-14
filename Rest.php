<!-- to display user record in table format -->
<form action="" method="POST">
<label>Select Id:</label><br />
<?php
$conn=mysqli_connect("LocalHost","root","","grootex"); 
$result = $conn->query("SELECT * FROM groot order by Name asc");
echo '<select name="Id"><option>Select</option>';
while ($row = $result->fetch_array()) {
	echo '<option value='.$row[0].'>'.$row[0].'</option>';
}
echo '</select>';
?>
<br /><br />
<button type="submit" name="submit">Submit</button>
</form>
<?php
if (isset($_POST['Id']) && $_POST['Id']!="") {
	$Id = $_POST['Id'];
	$url = "http://localhost/groot/ReadAPI/".$Id;
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	$result = json_decode($response,true);
	if(isset($result['data']))
	{
		if(count($result['data']) > 0)
		{
			echo "<table><tr><th>Name</th><th>Fathers_Name</th><th>Date</th><th>Email</th><th>Contact</th><th>Parents_Contact</th><th>Address</th><th>Course</th><th>Blood_Group</th><th>School_Name</th><th>College_Name</th><th>Quota</th></tr>";
			$index = 0;
			while($index < count($result['data']))
			{
				echo "<tr><td>".$result['data'][$index]['Name']."</td><td>"
				.$result['data'][$index]['Fathers_Name']."</td><td>"
				.$result['data'][$index]['Date']."</td><td>"
				.$result['data'][$index]['Email']."</td><td>"
				.$result['data'][$index]['Contact']."</td><td>"
                .$result['data'][$index]['Parent_Number']."</td><td>"
                .$result['data'][$index]['Address']."</td><td>"
                .$result['data'][$index]['Course']."</td><td>"
                .$result['data'][$index]['Blood_Group']."</td><td>"
                .$result['data'][$index]['School_Name']."</td><td>"
                .$result['data'][$index]['College_Name']."</td><td>"
                .$result['data'][$index]['Quota']."</td><td></tr>";
				$index++;
			}
			echo "</table>";
		}
	}
	else
	{
		echo "No record found";
	}
}
?>