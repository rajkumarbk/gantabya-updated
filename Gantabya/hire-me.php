
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>Ticket Booking</title>
    <link rel="shortcut icon" href="img/logo1.png"  />
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
                    <li class="nav-item dropdown" style="width: 129px;"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="font-family: Abel, sans-serif;">VEHICLE HIRE</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="projects-grid-cards-1.html">Bus</a><a class="dropdown-item" role="presentation" href="projects-grid-cards">Micro</a></div>
                    </li>
                </ul>
        
    </nav>
    <br><br><br><br>
    
    <form action="insert.php" method="post">
   <div style="color: green; text-align: center; font-family: sans-serif;"> 
<h1>Book Your Ticket Here</h1><hr>
<h4>From</h4>
<select name="origin" required>
  <option>Select Origin</option>
  <option value="Kathmandu">Kathmandu</option>
  <option value="Lamjung">Lamjung</option>
  <option value="Chitwan">Chitwan</option>
</select>
<br>
<h4>To</h4>
<select name="destination" required>
    <option>Select Destination</option>
  <option value="Kathmandu">Kathmandu</option>
  <option value="Lamjung">Lamjung</option>
  <option value="Chitwan">Chitwan</option>
</select>
<br>
<h4>Depature Date</h4>
<input type="date" name="date" required>
<br> <br><input type="submit" value="Search Vehicle" style="border-radius:50px; background-color:#4FB443;">
</div>
</form>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="js/theme.js"></script>
    
</body>
</html>
