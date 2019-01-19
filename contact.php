<?php


if ($_POST['submit']) {
	
	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$results='<div class="alert alert-danger" role="alert"><strong>Sorry, there is an error.</strong> Please correct the following: '.$error.' </div';
	} else {
		mail("mike@dominicansoul.com", "Contact message", "Name: ".$_POST['name'].
			"Email: ".$_POST['email'].
			"Message: ".$_POST['message']);
		{
		$results='<div class="alert alert-success" role="alert"><stron>Thank you! We will get back in touch with you shortly.</div>';	
		}
	}
}
		   

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122672118-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122672118-1');
    </script>
    <!-- End Google Analytics -->
    
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Welcome to Dominican Soul</title>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
	
</head>

<body>
    
	<nav class="navbar navbar-inverse navbar-fixed-top">
		
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><img src="img/dsoul_logo.png" alt=""/></a>
      		</div>
			
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				
				<ul class="nav navbar-nav">
					<li class="dropdown menu">
          		    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOGS<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="beach2.html">Life's A Beach</a></li>
          			</ul>
        			</li>
                    <li class="dropdown menu">
          		    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DINING<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Fine Dining</a></li>
                        <li><a href="#">Casual Dining</a></li>
                        <li><a href="bakeries.html">Bakeries</a></li>
                        <li><a href="icecream.html">Ice Cream Parlors</a></li>
          			</ul>
        			</li>
                    <li class="dropdown menu">
          		    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RESORTS<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Hotels</a></li>
                        <li><a href="#">Resorts</a></li>
          			</ul>
        			</li>
                      <li class="dropdown menu">
          		    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SHOPPING<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Clothing / Accessories</a></li>
                        <li><a href="groceries.html">Super Markets</a></li>
                        <li><a href="#">Pharmacys</a></li>
                        <li><a href="#">Souvenirs</a></li>
          			</ul>
        			</li>
                    <li class="dropdown menu">
          		    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ATTRACTIONS<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="fun.html">Family Fun</a></li>
                        <li><a href="golf.html">Golf Courses</a></li>
                        <li><a href="landmarks.html">Landmarks</a></li>
                        <li><a href="museums.html">Museums</a></li>
                        <li><a href="#">Night Clubs</a></li>
                        <li><a href="#">Tours</a></li>
          			</ul>
        			</li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
        			<li><a href="contact.php"><i class="fa fa-envelope envelope" aria-hidden="true"></i></a></li>
        		</ul>
                
                <form class="navbar-form navbar-right">
        		<div  class="form-group">
            			<input type="text" class="form-control" placeholder="Search" name="search">
         		</div>
				<button type="text" class="btn btn-normal">
					<i class="glyphicon glyphicon-search"></i>
                </button> 
			    </form>
					
			</div>
			
		</div>
		
	</nav>
    
    <a class="weatherwidget-io" href="https://forecast7.com/en/19d78n70d69/puerto-plata/?unit=us" data-label_1="PUERTO PLATA" data-label_2="WEATHER" data-days="5" data-theme="original" data-basecolor="#3109b7" data-highcolor="#f9b96b" >PUERTO PLATA WEATHER</a>
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
    
		
	<section id="contact">
		<div class="container">
		
			<div class="row">
				
				<h1 class="welcome">Contact Form</h1>
				
				<div class="col-md-6 col-md-offset-3">
					
					<?php echo $results;?>
					
					<center>
						<p><strong>Questions and comments are welcome. mike@dominicansoul.com</strong></p>
					</center><br>
					
					<form method="post" role="form">
						
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>">
						</div>
						
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
						</div>
						
						<div class="form-group">
							<textarea name="message" rows="8" class="form-control" placeholder="Message..."><?php echo $_POST['message']; ?></textarea>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox" name="check"> I am human
							</label>
						</div>
						
						<div align="center">
							<input type="submit" name="submit" class="btn btn-default" value="send message"/>
						</div>
						
					</form>
						  
				</div>
			</div>
		
		
		</div>
	</section>
	
	
	<div class="container">
        <h4 class="social">
            <a href="#"><img src="img/facebook.png" class="hvr-grow social" width="4%" height="4%" alt=""/></a>
		    <a href="#"><img src="img/twitter.png" class="hvr-grow social" width="4%" height="4%" alt=""/></a>
            <a href="#"><img src="img/instagram.png" class="hvr-grow social" width="4%" height="4%" alt=""/></a>
            <a href="https://www.youtube.com/channel/UCZV-adYfxKkXK18bYgdEujw"><img src="img/youtube.png" class="hvr-grow social" width="4%" height="4%" alt=""/></a>
        </h4>
    </div><br><br>
    
    <div class="container footer">
		<h4 logo>
            <a href="index.html"><img src="img/dsoul_logo.png" class="logo" width="21%" max-width: 400px; height="auto" alt=""/></a>
        </h4><br>
        
        <div class="row row2">
            <div class="col-md-2 col-sm-4">
                <h4 class="head">DINING</h4>
                <p><a href="#">Fine Dining</a></p>
                <p><a href="#">Casual Dining</a></p>
                <p><a href="bakeries.html" class="bake2">Bakeries</a></p>
                <p><a href="icecream.html" class="bake2">Ice Cream Parlors</a></p>
            </div>
            
            <div class="col-md-2 col-sm-4">
                <h4 class="head">HOTELS AND RESORTS</h4>
                <p><a href="#">Hotels</a></p>
                <p><a href="#">Resorts</a></p>
            </div>
            
            <div class="col-md-2 col-sm-4">
                <h4 class="head">SHOPPING</h4>
                <p><a href="#">Clothing / Accessories</a></p>
                <p><a href="groceries.html" class="bake2">Super Markets</a></p>
                <p><a href="#">Pharmacys</a></p>
                <p><a href="#">Souvenirs</a></p>
            </div>
            
            <div class="col-md-2 col-sm-4">
                <h4 class="head">ATTRACTIONS</h4>
                <p><a href="fun.html" class="bake2">Family Fun</a></p>
                <p><a href="golf.html" class="bake2">Golf Courses</a></p>
                <p><a href="landmarks.html" class="bake2">Landmarks</a></p>
                <p><a href="museums.html" class="bake2">Museums</a></p>
                <p><a href="#">Night Clubs</a></p>
                <p><a href="#">Tours</a></p>
            </div>
            
            <div class="col-md-2 col-sm-4">
                <h4 class="head">SERVICES</h4>
                <p><a href="spa.html" class="bake2">Day Spas</a></p>
                <p><a href="#">Tour Guides</a></p>
                <p><a href="#">Transportation</a></p>
            </div>
            
            <div class="col-md-2 col-sm-4">
                <h4><a href="contact.php" class="head">CONTACT US</a></h4>
            </div>
        </div><br>
	
	    <h5>© Copyright 2019, Dominican Soul. All Rights Reserved.</h5>
	</div>
    
<script   src="https://code.jquery.com/jquery-3.3.1.js"   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="   crossorigin="anonymous"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
<script src="landmark.js"></script>
	
	
</body>
</html>


