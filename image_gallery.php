<!DOCTYPE>
<html>
	<head>
		<title>Image Gallery</title>
	</head>
	<style type="text/css">
		body {
			background: #f2f2f2;
			margin: 0px;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		}
		ul
		{
  			list-style-type: none;
			background-color: rgba(09,41,98,0.99);
			margin-bottom: 10px;
			color: white;
			margin-top: -38px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		.footer {
			background-color: rgba(09,41,98,0.99);
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			padding: 10px,0;
		}
		.foot-text {
			color: #D6FEFF;
			text-align: left;
		}
		.about-section {
           padding: 50px;
           text-align: center;
            background-color: #474e5d;
            color: white;
}
		li
		{
			display: inline;
			float: left;
		}
		* {box-sizing: border-box;}

		body {font-family: Verdana, sans-serif;}

		.mySlides {display: none;}

		h1
		{
			background-color: rgba(09,41,98,0.99);
			color: white;
			border: 10px;
			margin-left: -10px;
			margin-right: -10px;
			margin-top: -10px;
			padding: 15px;
			font-size: 60px;
			text-align: center;
			font-family: "Times New Roman";
		}

		h2
		{
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
		}

		a:link, a:visited 
		{
			color: white;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: white;
			color: #094198;
		}

		img {
			vertical-align: middle;
			background-size: cover;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
	</style>
	<body>
		<h1>THE <p style="color: #e6b800; display: inline;">ROYLE</p> HOTEL</h1>
		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="#rooms_and_rates">ROOM GALLERY</a></li>
			<li><a href="image_gallery.php">IMAGE GALLERY</a>
			<li style="float: right;"><a href="#contact">CONTACT</a></li>
		</ul>
		<br>
		<h2 class="r_room">IMAGE GALLERY</h2><br>
		<div class="row">
  			<div class="column">
    			<img src="images/1.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/2.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/6.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/A1.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A2.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A3.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/A4.jpg" alt="Snow" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A5.jpg" alt="Forest" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/A6.jpg" alt="Mountains" style="width:100%">
  			</div>
		</div><br><br><br>
		<h2 id="rooms_and_rates" class="r_room">OUR ROOMS</h2>
		<div class="basic_box">
			<div class="row">
  				<div class="column">
    				<img src="images/1.jpg" alt="Snow" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/2.jpg" alt="Forest" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/6.jpg" alt="Mountains" style="width:100%">
  				</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3>Deluxe Room</h3>
  				</div>
  				<div class="column">
    				<h3>Executive Room</h3>
  				</div>
  				<div class="column">
    				<h3>Standard Room</h3>
  				</div>
			</div>
		</div><br>
		
		<div id="contact" class="footer">		
<div class="about-section">
  <h1>About Us </h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center"><div class="about-section1"><h1>Our Teams</h1></div></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/f.jpg" alt="Jane" style="width:50%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
	<center><img src="images/f1.jpg" alt="Mike" style="width:50%"></center>
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <center><p>Some text that describes me lorem ipsum ipsum lorem.</p></center>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	<center><img src="images/f.jpg" alt="John" style="width:50%"></center>
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>


	</div>	
	</body>