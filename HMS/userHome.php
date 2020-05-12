<!doctype html>
<head>
    <title>Hotel Sunrise</title>
    <link rel="icon" href="images/icon.jpg"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
session_start();
    if(!isset($_SESSION['email']))
        header("location:http://localhost/hms/index.php");
    
global $email;
    $email=$_SESSION['email'];

$con= mysqli_connect('localhost:3307', 'root', '') or die("connection failed");
mysqli_select_db($con, 'hms');

$q1="select * from customer where email='$email'";
$cust= mysqli_query($con, $q1);
$customer= mysqli_fetch_array($cust);

$q2=" select count(*) as count from room where room_type='Standard' and available='yes';";
$std= mysqli_query($con, $q2);
$stdrooms= mysqli_fetch_array($std);

$q3="select count(*) as count from room where room_type='Deluxe' and available='yes'";
$delx= mysqli_query($con, $q3);
$dlxrooms= mysqli_fetch_array($delx);

$q4="select count(* )as count from room where room_type='Executive' and available='yes'";
$exec= mysqli_query($con, $q4);
$execrooms= mysqli_fetch_array($exec);
?>

<body class="container-fluid" style="font-family: 'Merriweather', serif;">
    <div class="container">
        <div class="customer">
            <h1 class="col-sm-11">Hey <?php echo $customer['Name'];?>,</h1><br>
            <a class="btn btn-danger col-sm-1" href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
            <h1 class="col-sm-offset-2 col-sm-8 col-sm-offset-2">Welcome back to HOTEL SUNRISE!</h1>
            <h1 class="col-sm-offset-1 col-sm-11">Have a look at the Best Offers especially for you</h1>
    </div>
    
    
<div class="bg-1">
  <div class="container">
     <div class="customer text-center">
      <div class="col-lg-4">
        <div class="thumbnail">
            <a href="http://localhost/HMS/room_details.php?room_id=1"><img src="images/a1.jpg" alt="Paris" width="800" height="1200"/></a>
          <p><strong>Standard Room</strong></p>
          <p class="text-info"><?php echo $stdrooms['count']?> Available</p>
          <p><strong style="font-size: 25px">&dollar;900</strong> <span style="text-decoration: line-through">&dollar;1000</span></p>
          <form action="room_details.php" method="get">
              <input type="hidden" name="room_id" value="1"/>
              <button class="btn btn-success" type="submit">Book Now</button>
          </form>
        </div>
          <div class="contents">
          <h4 class="text-left">Features:</h4>
          <p class="text-left">
                            Our cozy Standard Rooms provide you with all the necessary features like
                            high speed internet,HD Pay TV,telephones,
                            individually controlled air conditioning, magnetic key system,Coffee tea making facilities with complimentary coffe/tea,
                            Hot/Cold water supply for shower,Double or Twin beds,occupancy upto 3 adults.
          </p>          
          </div>
      </div>
         
         
      <div class="col-lg-4">
        <div class="thumbnail">
            <a href="http://localhost/HMS/room_details.php?room_id=2"><img src="images/a2.jpg" alt="New York" width="800" height="1200"/></a>
          <p><strong>Deluxe Room</strong></p>
          <p class="text-info"><?php echo $dlxrooms['count']?> Available</p>
          <p><strong style="font-size: 25px">&dollar;1000</strong> <span style="text-decoration: line-through">&dollar;1200</span></p>       
          <form action="room_details.php" method="get">
              <input type="hidden" name="room_id" value="2"/>
              <button class="btn btn-success" type="submit">Book Now</button>
          </form>         
        </div>
          <div class="contents">
          <h4 class="text-left">Features:</h4>
          <p class="text-left">
                Escape the cold with your own fireplace,which is provided in Deluxe rooms at the paradise Hotel.
                Our smoke free rooms come equipped with HDTV,microwave,free wi-fi,and much
                more to help you relax,work,and stay connected during your stay in Paradise.
          </p>
          </div>
      </div>
         
         
      <div class="col-lg-4">
        <div class="thumbnail">
            <a href="http://localhost/HMS/room_details.php?room_id=3"><img src="images/a3.jpg" alt="San Francisco" width="800" height="1200"/></a>
          <p><strong>Executive Suite</strong></p>
          <p class="text-info"><?php echo $execrooms['count']?> Available</p>
          <p><strong style="font-size: 25px">&dollar;1500</strong> <span style="text-decoration: line-through">&dollar;1800</span></p>
          <form action="room_details.php" method="get">
              <input type="hidden" name="room_id" value="3"/>
              <button class="btn btn-success" type="submit">Book Now</button>
          </form>          
        </div>
          <div class="contents">
          <h4 class="text-left">Features:</h4>
          <p class="text-left">
                          Feel like royality in our Executive Suites,where you enjoy a luxurious King bed with pillowtop mattress 
                          and premium bedding.Our Executive Siutes hold a elegant living area with kitchenette.
          </p>    
          </div>
      </div>
     </div>
   </div>
    
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Hotel Paradise</h3>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="validateUser.php" method="post">
                <div></div>
            </form>
        </div>
        <!-- Modal footer 
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>-->   
      </div>
    </div>
  </div>   
    
</div>
</body>
