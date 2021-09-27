<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	<title>Sign up Form || Gantabya</title>
    <link rel="shortcut icon" href="img/logo1.png">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
  </head>
  <body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient" data-aos="fade-down">
  <div class="container"><a class="navbar-brand text-left logo" href="index.html" style="font-family: Abel, sans-serif;filter: grayscale(0%) hue-rotate(0deg) invert(0%);">GANTABYA</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div
          class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav ml-auto">
              <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" style="font-family: Abel, sans-serif;">HOME</a></li>
              <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="font-family: Abel, sans-serif;">VEHICLE HIRE</a>
                  <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="projects-grid-cards-1.html">Bus</a><a class="dropdown-item" role="presentation" href="projects-grid-cards.html">Micro</a></div>
              </li>
          </ul></div>
  </div>
</nav>
   
<div class="center">
 	<div class="login-box">
			<form action="registration.php" method="post" onsubmit="return validate()">
			<h2 style="color: black;">Create an account</h2>
				<div class="txt_field">
          <input type="text" name="fname" id='user'>
		  <span id="username" style="color:red;"></span>
          <label>Full Name</label>
        </div>
				
				<div class="txt_field">
          <input type="text" name="email" id='emails'>
          <span id="emailids" style="color:red;"></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" id='pass'>
		  <span id="passwords" style="color:red;"></span>
          <label>Password</label>
        </div>
			
				<div class="txt_field">
				<input type="text" id="mobilenumber" name="pnum" >
				<span id="message" style="color:red;"></span>
				<label>Contact Number</label>
				</div>
			<input type="submit" value="Sign Up">
			</div>
			</form>
			<script src="js/validate.js"></script>
	</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="js/theme.js"></script>
  </body>
</html>