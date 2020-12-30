<!DOCTYPE html>
<html>
<head>
<title>Rip Tour n Travel</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 </script>
<script src="js/jquery.min.js"></script>

</head>
<body>

<?php include('function.php'); ?>
<?php include('top.php'); ?>
<?php include('slider.php'); ?>

     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4>Our Vision</h4>
			 <p>Menjadi salah satu perusahaan jasa wisata terbaik serta terpercaya dan perusahaan yang
				  mempunyai pelayanan lengkap khususnya bidang paket wisata dalam dan luar negeri, tiket pesawat,
				   pembuatan dokumen perjalanan, penyewaan bus.</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4>Our Mission</h4>
			 <p>1. Menjadi perusahaan penyedia layanan jasa wisata dengan kualitas layanan prima.
			<br>2. Memberikan pelayanan yang maksimal dan memuaskan kepada semua pelanggan
			<br>3. Memberikan kesejahteraan kepada setiap anggota perusahaan.</p>
	 </div>
</div>

<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>		 
		  </div>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/sumba.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/bali.jpg" class="img-responsive"/></a>
                             </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/gunung.jpg" class="img-responsive" alt=""/></a>
							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/bajo.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/bromo.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/borobudur.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/raja4.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/rumah.jpg" class="img-responsive" alt=""/></a>
							 
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  

<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <br>
		  <h4 style="color:#000">Plan Your Trip</h4>
		  <br>
		  <h5 style="color:#000">Our travel experts can help you book now</h5>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F"></h4>
						<p style="color:#000"><br/>
                        </p>
                        <br/>
                      </div>
				  <div class="col-md-8 contact">
                  
                  	<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>
					  <tr><td><input type="submit" value="Send message" name="sbmt"></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	       



<?php include('bottom.php'); ?>
</body>
</html>

