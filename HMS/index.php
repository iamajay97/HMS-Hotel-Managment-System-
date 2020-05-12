<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel Sunrise</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icon.jpg"/>
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
      body{
          font-family: 'Merriweather', serif;
      }  
      .carousel .item{
          height: 460px;
      }   
  .modal-body{
        max-width: 540px;
    }
      
  .container {
      padding: 80px 120px;
  }
  
  .carousel-inner img {
     /* -webkit-filter: grayscale(90%);
    /*  filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }  

   .bg-1 {
      background: black;
      color: black;
  }
  .bg-2 {
      background: darkcyan;
      color: black;
  }
  .bg-2 p {color:white;}
  .bg-1 p {color: black;}
  
  /* Black buttons with extra padding and without rounded borders */
.btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
}

/* On hover, the color of .btn will transition to white with black text */
.btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
}

  .thumbnail  {
      padding: 0 0 15px 0;
     border: none;
     border-radius: 0;
  }
  .thumbnail p{
      padding: 0 0 0 0;
     
     
  }
  /* Add a dark background color to the footer */
footer {
    background-color: darkslateblue;
    color: #f5f5f5;
    padding: 32px;
    opacity: 100%;
}

.team > p{
 background-image: url(images/bk.jpg);
 font-size: 20px;
 padding: 20px;
}

footer a:hover {
    color: #777;
    text-decoration: none;
}
/* Add a dark background color with a little bit see-through */ 
.navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 15px !important;
    letter-spacing: 4px;
    
    .form{
        opacity: 0.70;
    }
    
}

.modal {
     background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-header {
    padding: 2px 16px;
    background-color: darkorchid;
    color: white;
}
  </style><!--STYLE-->
</head>
<body>
    <!-- NAVBAR STARTED-->
    <nav class="navbar navbar-inverse" id="top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">HOTEL SUNRISE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#" ><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-book"></span> Reservation</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-phone"></span> Contact </a></li>
          <li><a href="#"><span class="glyphicon glyphicon-info-sign"> </span> About </a></li>
      </ul>
    </div>
  </div>
</nav>
    
    
    
    <!--NAVBAR ENDS-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <img src="images/p1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
          <img src="images/p2.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
          <img src="images/p3.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
         
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
    <!--carousel ends-->


    <div class="bg-2">
  <div class="container text-center">
      
    <h1>Welcome to HOTEL SUNRISE</h1>
    
    <p>Accommodation are catchphrases that highlight the experience when you are on a business remain here.
            Hotel paradise is the same as your second home. </p>
  </div>
</div>

<!-- thumbnails for room images-->

    <!-- Container (TOUR Section) -->
<div class="bg-1">
  <div class="container">
     <div class="row text-center">
      <div class="col-lg-4">
        <div class="thumbnail">
            <img src="images/a1.jpg" alt="Paris" width="800" height="1200"><br>
          <p><strong>Standard Room</strong></p>
          <br>
          <button class="btn" data-toggle="modal" data-target="#myModal">Book Now</button>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="thumbnail">
            <img src="images/a2.jpg" alt="New York" width="800" height="1200"><br>
          <p><strong>Deluxe Room</strong></p>
          <br>
          <button class="btn" data-toggle="modal" data-target="#myModal" >Book Now</button>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="thumbnail">
            <img src="images/a3.jpg" alt="San Francisco" width="800" height="1200"><br>
          <p><strong>Executive Suite</strong></p>
          <br>
          <button class="btn" data-toggle="modal" data-target="#myModal">Book Now</button>
        </div>
      </div>
     </div>
</div>
</div>

    

<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <a  class="close" href="index.php">&times;</a>
          <h3 class="modal-title">Hotel Sunrise</h3>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="validateUser.php" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control"  placeholder="Enter Email ID" required/><br>
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required/><br>
                <input type="submit" class="btn btn-primary" value="Sign in"/>
                <label>New to Hotel Sunrise? <a href="signup.php">Register here</a></label>                
            </div>
            </form>
        </div>
        <!-- Modal footer 
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>-->   
      </div>
    </div>
  </div>
    
<footer class="text-center">
  <a class="up-arrow" onclick="document.getElementById('top').scrollIntoView({behavior: 'smooth', block: 'end', inline: 'end'})">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <div class="team">
        <p>Bootstrap Theme Made By TEAM : HAPPY CLUB </p> 
          <p>	Ajay Patil 	</p>
          <p>	Mayur Thakane	</p>
          <p>  Abhishek Supsande </p>
   </div>       
</footer>
    <p> &copy;2018 HOTEL SUNRISE. ALL RIGHTS RESERVED</p>
</body>
</html>
