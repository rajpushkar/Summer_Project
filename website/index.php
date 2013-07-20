
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

	

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="themes/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="themes/css/main.css">
	<link rel="stylesheet" href="themes/css/prettyPhoto.css">
	<link rel="stylesheet" href="themes/css/style.css">
	<link rel="stylesheet" href="themes/css/custom-responsive.css">
		
    </head>
  <body data-spy="scroll" data-target=".navbar">
  
        <header>
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                           <a class="brand" href="#home"><i class="icon-ourwater"></i> &nbsp; Connecting Health Indicators & Water Quality </a>
                            <div class="nav-collapse pull-right in collapse" style="height: auto;">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="#home">Home</a>
                                    </li>                                    
                                    <li class="">
                                        <a href="#about">About Us</a>
                                    </li>
                                    <li class="">
                                        <a href="#feedback">Feedback</a>
                                    </li>
                                    <li class="">
                                        <a href="#gallery">Gallery</a>
                                    </li>
                                    <li class="">
                                        <a href="#follow">Follow Us</a>
				    </li>
                    </div>
                </div>
            </div>
        </header>

        
    <section id="home" class="fill">
	<div class="container">
	    <div class="wrapper">
		<h1 class="the-head">Explore</h1>
		<h4>Select your State and District to know the Water-Contamination around you!!</h4>
		<div class="row-fluid">
		    <?php
		    try {
			$objDb = new PDO('mysql:host=localhost;dbname=AnAnt', 'AnAnt', 'AnAnt');
			$objDb->exec('SET CHARACTER SET utf8');
			$sql = "SELECT DISTINCT State FROM `DATA12` ORDER BY State";
			$statement = $objDb->query($sql);
			$list = $statement->fetchAll(PDO::FETCH_ASSOC);
			} catch(PDOException $e) {
			    echo 'There was a problem';
			    }
		    ?>
        <script src="min.js" type="text/javascript"></script>    
       <script>
	   $(document).ready(function(e) {
	   	$('#result').hide();
		   $('#done').click(function(e) {
			
            var state=$('#state').val();
			var district=$('#district').val();
			if(state!="" && district!="")
			{
				
			var cl=state+':'+district;
			$('#result').show();
		$.get("result.php?cl="+cl, function(data){
      $('#display').html(data);
      
    });
    	$(document).scrollTo('#result', {duration:1000});
			}
        });

    });
	   </script>
		   
		        <div class="span2" align="left">
			        <select name="state" id="state" class="update">
		  		    <option value="">Select State</option>
				        <?php if (!empty($list)) { ?>
				        <?php foreach($list as $row) { ?>
				        <option value="<?php echo $row['State']; ?>">
				        <?php echo $row['State']; ?>
				        </option>
				        <?php } ?>
				        <?php } ?>
			        </select>
			        <select name="district" id="district" class="update">
				<option value="">Select District</option>
			        </select>
			        <input type="submit" id="done" value="Submit">
			    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
			    <script src="ajax.js" type="text/javascript"></script>
		     </div>

		
		
	    <iframe src="map.php" height="500" width="700" ></iframe>
		</div>
		</div>
	    </div>
	</section>	
	<section id="result" claass="fill">
			<div class="container">
	    		<div class="wrapper">
	    			<h1 class="the-head">Result</h1>
					<div class="row-fluid">
						<div id="display"></div>
					</div>
				</div>
			</div>	
    </section>
    <section id="about" class="fill">
	<div class="container">
	    <div class="wrapper">
		<h1 class="the-head">About US</h1>
		<h2 align="center">BE AWARE!</h2>
		<h2 align="center">Know the Water around you</h2>
		<h2 align="center">BE HEALTHY!</h2>
		<div class="row-fluid">
		    
                    <p>Welcome to the whole new world of awareness. For the first time health and water quality are mapped together.
			The health department is not much aware about symptoms related to chemical contamination which means that there are high 				incidents of misdiagnosis for water borne diseases.
			For instance in areas like West Bengal where arsenic contamination are high. The health department does not know.
			So when people come to the doctor with arsenic symptoms like skin lesions, they are not diagnosed properly and are then 			treated for skin problems not the water contamination and the true cause is never understood.
			So, we have pulled out specific symptoms and mapped water quality around those symptoms to make you aware about major health 				issues related to water.</p>
                </div>
	    </div>
        </div>
    </section>
        

        <section id="feedback" class="fill">
            <div class="container">
                <div class="wrapper">
                    <h1 class="the-head">Feedback</h1>
						<div class="row-fluid">
                        <div class="span4 offset4">
                        <h3>Enter Your Feedback</h3>
                            <form class="contact-form" action="feedback.php">

                                <fieldset>
                                    <div class="control-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="input-xlarge" name="name" id="name" required>
                                    </div>
                                    
                                    <div class="control-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="input-xlarge" name="email" id="email" required>
                                    </div>
                                    <div class="control-group">
                                            <label for="message">Your Message</label>
                                            <textarea class="input-xlarge" name="message" id="message" rows="3" required></textarea>
                                    </div>
                                    <div class="control-group">
                                        <button type="submit" class="btn btn-large btn-chunkfive">Send Message</button>
                                    </div>
                                </fieldset>
                            </form>
						</div>
						
					<!--	<div class="offset7">
						<h3>Track Your Feedback</h3>
                            <form class="contact-form" action="track.php">

                                <fieldset>
                                		<div class="control-group">
                                            <label for="feedback">Feedback ID</label>
                                            <input type="text" class="input-xlarge" name="feedback" id="id" required="true">
                                    </div>
                                    <div class="control-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="input-xlarge" name="name" id="name" required="true">
                                    </div>
                                    
                                    <div class="control-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="input-xlarge" name="email" id="email" required="true">
                                    </div>
                                    
                                    <div class="control-group">
                                        <button type="submit" class="btn btn-large btn-chunkfive">Track</button>
                                    </div>
                                </fieldset>
                            </form>
						</div>	-->					
						
						
						</div>

            


                </div>
            </div>
        </section>
        

        <section id="gallery" class="fill">
            <div class="container">
                <div class="wrapper">
                    <h1 class="the-head">GALLERY</h1>
                    
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
        
        <script src="themes/js/bootstrap.min.js"></script>
        <script src="themes/js/bootstrap-scrollspy.js"></script>
        <script src="themes/js/jquery.easing-1.3.min.js"></script>
        <script src="themes/js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script src="themes/js/jquery.vegas.js"></script>
        <script src="themes/js/sly.min.js"></script>
        <script src="themes/js/jquery.prettyPhoto.js"></script>
		  
        <script src="themes/js/main.js"></script>
        
    

</body></html>
