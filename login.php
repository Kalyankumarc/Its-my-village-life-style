<!doctype html>
<html>
<head>
<title>village style</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />
<style>
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
}

</style>

</head>
<body>
	<div class="content">
		<div class="header_bg">
			<div class ="header">
				<br/><span style="font-size:30px;padding-left:450px;">It's My Village Life Style</span><br/>
				<span style="font-size:18px;padding-left:750px;color:red;">Friends &Family Members</span><br/><br/>
				<span style="font-size:25px;padding:10px 0px 10px 90px;">KKV VILLAGE</span><span style="font-size:20px;padding:10px 0px 10px 200px;"><a href="#"style="color:yellow;">LOGIN</a></span>
			</div>
		</div>
		<div class="marquee">
			<marquee><b><font color="red">Thank you for visiting www.kkvvillage.html  :: <font color="white"> Please give the feedback on our website  :: <font color="green">Also if you have any pictures or information please forward to admin@kkvvillage.com Thank You, Have a Great Day :)</b> </marquee>
		</div>
		<div class="body_bg" style="width: 1200px;">
			<div id="nav"style="float:left; width: 22%">
				<ul> 
					<li><a href="home.html">Home</a></li>
					<li><a href="Agriculture.html">Agriculture</a></li>
					<li><a href="devotional.html">Devotional</a></li>
					<li><a href="photos.html">Photos</a></li>
					<li><a href="panchayat.html">Panchayat Info</a></li>
					<li><a href="outers.html">Outers</a></li>
					<li><a href="temple.html">Temple Video's</a></li>
					<li><a href="Invitations.html">Invitations</a></li>
					<li><a href="contactus.html">Contact Us</a></li>
				</ul>
			</div>
			<div id="information" style="float:right;">
				<div id="details" style="float:left; width:60%">
						<img class="mySlides" src="images\village images\1.jpg" style="width:600px; height:350px"> 
						<img class="mySlides" src="images\village images\3.jpg" style="width:600px;height:350px"> 
						<img class="mySlides" src="images\village images\4.jpg" style="width:600px;height:350px"> 
						<img class="mySlides" src="images\village images\5.jpg" style="width:600px;height:350px"> 
						<img class="mySlides" src="images\village images\6.jpg" style="width:600px;height:350px"> 
						 <img class="mySlides" src="images\village images\7.jpg" style="width:600px;height:350px"> 
						 <img class="mySlides" src="images\village images\8.jpg" style="width:600px;height:350px">  
						 <img class="mySlides" src="images\village images\9.jpg" style="width:600px;height:350px">  
						<img class="mySlides" src="images\village images\10.jpg" style="width:600px;height:350px">  
						<img class="mySlides" src="images\village images\11.jpg" style="width:600px;height:350px">  
						<img class="mySlides" src="images\village images\12.jpg" style="width:600px;height:350px">  
						<img class="mySlides" src="images\village images\13.jpg" style="width:600px;height:350px">  
						<img class="mySlides" src="images\village images\14.jpg" style="width:600px;height:350px"> 
						<img class="mySlides" src="images\village images\15.jpg" style="width:600px;height:350px">  						
						
					
					

				<script>
					var myIndex = 0;
					carousel();

					function carousel() {
						var i;
						var x = document.getElementsByClassName("mySlides");
						for (i = 0; i < x.length; i++) {
								x[i].style.display = "none";
							}
					 myIndex++;
					 if (myIndex > x.length) {myIndex = 1}	
								 x[myIndex-1].style.display = "block";
						setTimeout(carousel, 3000); // Change image every 2 seconds
					}
				</script>
		</section>

				</div>
				<div id="img" style="float:right">
		<div id=""><center>
							<h2>Login Page</h2>
						</center>
			<form class="myform"action="process.php" method="POST">
			<p><label>Username:</label>
			<input type="text" id="user" name="user"/>
			</p>
			<p><label>Password:</label>
				<input type="password" id="pass" name="pass"/>
			</p>
				<input type="submit" id="btn" value="Login"/>
			</p>
			</form>
		</div>
</div>
			</div>
			<div style="clear:both"></div>
			</div>
		
		<div class="footer"><div class="copy">&copy; Copyright 2016, KKV Learning Solutions Inc.</div> 
	</div>
	</div>	
</body>

</html>