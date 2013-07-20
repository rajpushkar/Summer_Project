




    <?php
	$host = mysqli_connect("localhost","AnAnt","AnAnt","AnAnt");
	if(mysqli_connect_errno($host)){
	    echo "Can not connect to the database";
	}
    $cl=explode(':',$_REQUEST['cl']);
	$val1 = $cl[0];
	$val2 = $cl[1];
	echo "<br>";
	echo "<h4>The Water-Contamination in the different Villages of the district " . $val2 . "(" . $val1 . ") is shown below.";
	echo "<br>";
	echo "<br>";
	$result = mysqli_query($host, "SELECT DISTINCT Village , Contamination FROM `DATA12` where State = '$val1' and District = '$val2' ORDER BY Village");
	echo "<table border='1' class='table'>
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
<button onClick='$("#result").hide(1000) &&  $(document).scrollTo("#home", {duration:1000});' type="submit" class="btn btn-large btn-chunkfive offset5">Close</button>

