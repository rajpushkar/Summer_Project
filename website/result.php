<!DOCTYPE html>
<html class="no-js">
    <head>
	<title>Connect Health Indicators and Water Quality</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width">

<<<<<<< HEAD
	
=======
$host = mysqli_connect("localhost","root","12345","health");
if(mysqli_connect_errno($host)){
    echo "not connected to database";
}
>>>>>>> eb90e405a88d337921d0a6c40c340b5b598fc4ec

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="themes/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="themes/css/main.css">
	<link rel="stylesheet" href="themes/css/prettyPhoto.css">
	<link rel="stylesheet" href="themes/css/style.css">
	<link rel="stylesheet" href="themes/css/custom-responsive.css">
		
    </head>

<<<<<<< HEAD

<body data-spy="scroll" data-target=".navbar">
=======
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

>>>>>>> eb90e405a88d337921d0a6c40c340b5b598fc4ec

     <header>
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <a class="brand" href="#home"><i class="icon-ourwater"></i> &nbsp; Connecting Health Indicators & Water Quality </a>
                        </div>
		    </div>        
                </div>
            </div>
        </header>



    <section id="" class="fill">
    <div class="container">
	    <div class="wrapper">
		<h1 class="the-head">Explore</h1>
		<div class="row-fluid">





    <?php
	$host = mysqli_connect("localhost","AnAnt","AnAnt","AnAnt");
	if(mysqli_connect_errno($host)){
	    echo "Can not connect to the database";
	}
    
	$val1 = $_POST['state'];
	$val2 = $_POST['district'];
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

</div>
</div>
</div>
</section>


        <section id="ourwater" class="fill">
            <div class="container">
                <div class="wrapper">
                    <h1 class="the-head">OUR WATER OUR CONDITION</h1>
                    
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="scrollbar">
                                <div class="handle">
                                    <div class="mousearea"></div>
                                </div>
                            </div>

                            <div class="frame effects" id="the-portfolio">
                                <ul class="clearfix">
                                    <li><img src="themes/images/food1.png" alt=""></li>
                                    <li><img src="themes/images/food2.png" alt=""></li>
                                    <li><img src="themes/images/food3.png" alt=""></li>
                                    <li><img src="themes/images/food4.png" alt=""></li>
                                    <li><img src="themes/images/food5.png" alt=""></li>
                                    <li><img src="themes/images/food6.png" alt=""></li>
                                    <li><img src="themes/images/food7.png" alt=""></li>
                                    <li><img src="themes/images/food8.png" alt=""></li>
                                </ul>
                            </div>

                            <div class="controls center">
                                <button class="prev"><i class="icon-double-angle-left"></i></button>
                                <button class="next"><i class="icon-double-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="follow" class="fill">
            <div class="container">
               <div class="wrapper">
                    <h1 class="the-head">Follow Us</h1>
                                   
                  
                            
                            <div class="social-links">
                                <ul>
                                    <li><a href="https://www.facebook.com/rajpushkar" target="_blank"><i class="icon-facebook-sign"></i></a></li>
                                    <li><a href="https://www.twitter.com/rajpushkar91" target="_blank"><i class="icon-twitter-sign"></i></a></li>
                                    <li><a href="https://plus.google.com/109330531394685916400" target="_blank"><i class="icon-google-plus-sign"></i></a></li>
                                </ul>
                            </div>
                       
                   
                </div>
            </div>
        </section>




     <a href="#" class="go-top" style="display: none;"><i class="icon-double-angle-up"></i></a>
        
        <script src="themes/js/jquery-1.9.1.min.js"></script>
        <script src="themes/js/bootstrap.min.js"></script>
        <script src="themes/js/bootstrap-scrollspy.js"></script>
        <script src="themes/js/jquery.easing-1.3.min.js"></script>
        <script src="themes/js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script src="themes/js/jquery.vegas.js"></script>
        <script src="themes/js/sly.min.js"></script>
        <script src="themes/js/jquery.prettyPhoto.js"></script>

        <script src="themes/js/main.js"></script>
  




</body>
</html>
