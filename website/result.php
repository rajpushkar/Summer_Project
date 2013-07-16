<?php

$host = mysqli_connect("localhost","root","jaimatadi.","health");
if(mysqli_connect_errno($host)){
    echo "not connected to database";
}

else{
    echo "Connected to database";
} 

$val = $_POST['district'];
echo $val;
/*
$result = mysqli_query($host, SELECT Contamination FROM 'DATA09' where District = '$val');

while($row = mysqli_fetch_array($result))
{
    echo $row[Contamination];
    echo "<br>";
}
*/


?>
