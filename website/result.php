<?php

$host = mysqli_connect("localhost","root","12345","health");
if(mysqli_connect_errno($host)){
    echo "not connected to database";
}

else{
    echo "Connected to database";
} 

$val1 = $_POST['state'];
$val2 = $_POST['district'];
echo "<br>";
echo "The Selected State is " . $val1;
echo "<br>";
echo "The Selected District is " . $val2;
echo "<br>";
echo "The Contamination in the different Villages of the district " . $val2 . " of state " . $val1 . " is shown below.";

$result = mysqli_query($host, "SELECT * FROM `DATA12` where District = '$val2'");
echo "<table border='1'>
	<tr>
	    <th>Village</th>
	    <th>Contamination</th>
	</tr>";
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row[Village] . "</td>";
    echo "<td>" . $row[Contamination] . "</td>";
    echo "</tr>";
}

echo "</table>";



?>
