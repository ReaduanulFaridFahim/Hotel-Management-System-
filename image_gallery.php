<!DOCTYPE>
<html>
	<head>
		<title>Image Gallery</title>
	</head>
	<link href='https://fonts.googleapis.com/css?family=Redressed' rel='stylesheet'>

	</head>
	<style>
		body {
			margin: 0px;
		}
		
		.border {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 5px;
			padding: 4px;
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
			background-color: #129e89;
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
			background-color: #324951;
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			padding: 10px,0;
		}
		.foot-text {
			color: #D6FEFF;
			text-align: left;
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
			background-color: #035956;
			color: white;
			border: 10px;
			margin-left: -10px;
			margin-right: -10px;
			margin-top: -10px;
			padding: 15px;
			font-size: 60px;
			text-align: center;
			font-family: 'Redressed';
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
			color: #035956;
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
			  font-family:lato;
			color:  #035956;
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: #035956;
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
		.touch{
    background-color: #eee;
    padding-top: 10px;
}
.break{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    padding: 0 80px;
    text-align: center; 
}
		.touch .footer{
    background-color: #129e89;
    text-align: center;
    padding: 1px 0px;
    color: white;
}

	</style>
	<body>
	<h1>HOTEL <p style="color: #e6b800; display: inline;">WALDORF</p> ASTORIA</h1>
		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="#rooms_and_rates">ROOM GALLERY</a></li>
			<li><a href="image_gallery.php">IMAGE GALLERY</a>
			<li style="float: right;"><a href="#contact">Contact Details</a></li>
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
    			<img src="images/3.jpg" alt="Mountains" style="width:100%">
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
		
		<div class="touch" id="contact">
        <h2>Get In Touch</h2>
        <div class="break">
            <div class="address">
                <h4>Address</h4>
                <p>Bashundhara R/A, Dhaka</p>
            </div>
            <div class="sales">
              <h4>Sales</h4>
              <h6 style="font-size: 15px;">Sales Enquiries</h6>
              <p>Tel: +93553353353</p>
              <p>HOTELWALDORFASTORIA@gmail.com</p>
            </div>
            <div class="about">
                <h4>About Us</h4>
                <p>We have 72 hours Comfortably equiped room, including two suits. The Presedent suit and the Ambassador.</p>
            </div>
        </div>
        <div class="footer">
            <h4>HOTEL WALDORF ASTORIA @2022</h4>
        </div>
    
		</div>
	</body>
</html>