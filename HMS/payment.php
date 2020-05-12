<!doctype html>
<head>
    <title>Hotel Sunrise</title>
    <link rel="icon" href="images/icon.jpg"/>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script>
</head>
<body class="container">
<?php
session_start();
    if(!isset($_SESSION['email']))
        header("location:http://localhost/hms/index.php");

$id= filter_input(INPUT_GET, 'id');

if($id==1){
    standard();
}elseif ($id==2) {
    deluxe();
}else{
    executive();
}

function standard(){

$con= mysqli_connect('localhost', 'root', 'root') or die("connection failed");
mysqli_select_db($con, 'HMS');

$q="select * from room where room_type='Standard' and available='yes'";
$result= mysqli_query($con, $q);
$row1= mysqli_fetch_array($result);

$count= filter_input(INPUT_GET,'count');
$days= filter_input(INPUT_GET, 'days');
$check_in= filter_input(INPUT_GET,'check_in');
$check_out= filter_input(INPUT_GET,'check_out');
echo "<h1>No. of Standard Rooms to be reserved :".$count."</h1>";
echo "<h1>Cost per Standard Room:$".$row1['price']."/day</h1>";
$days=$days+1;
echo "<h1>No. of days to be reserved :".$days."</h1>";
echo "<h1>Net Payable Amount:$".($row1['price']*$count*$days)."</h1>";
echo "<h1>Check In:".$check_in."  Check Out:".$check_out."</h1>";
$email=$_SESSION['email'];
$q2="insert into reservation(email,room_no,check_in,check_out)
    select '$email',room_no,'$check_in','$check_out' from room where available='yes' and room_type='Standard' limit $count;";

mysqli_query($con, $q2) or die("Bad Query 2");
$q3="update room set available='no' where room_type='Standard' and available='yes' limit $count";
mysqli_query($con, $q3) or die("Bad Query 3");
}


function deluxe(){

$con= mysqli_connect('localhost', 'root', 'root') or die("connection failed");
mysqli_select_db($con, 'HMS');

$q="select * from room where room_type='Deluxe' and available='yes'";
$result= mysqli_query($con, $q);
$row1= mysqli_fetch_array($result);

$count= filter_input(INPUT_GET,'count');
$days= filter_input(INPUT_GET, 'days');
$check_in= filter_input(INPUT_GET,'check_in');
$check_out= filter_input(INPUT_GET,'check_out');
echo "<h1>No. of Standard Rooms to be reserved :".$count."</h1>";
echo "<h1>Cost per Standard Room:$".$row1['price']."/day</h1>";
$days=$days+1;
echo "<h1>No. of days to be reserved :".$days."</h1>";
echo "<h1>Net Payable Amount:$".($row1['price']*$count*$days)."</h1>";
echo "<h1>Check In:".$check_in."  Check Out:".$check_out."</h1>";
$email=$_SESSION['email'];
$q2="insert into reservation(email,room_no,check_in,check_out)
    select '$email',room_no,'$check_in','$check_out' from room where room_type='Deluxe' and available='yes' limit $count;";

mysqli_query($con, $q2) or die("Bad Query 2");
$q3="update room set available='no' where room_type='Deluxe' and available='yes' limit $count";
mysqli_query($con, $q3) or die("Bad Query 3");
}


function executive(){

$con= mysqli_connect('localhost', 'root', 'root') or die("connection failed");
mysqli_select_db($con, 'HMS');

$q="select * from room where room_type='Executive' and available='yes'";
$result= mysqli_query($con, $q);
$row1= mysqli_fetch_array($result);

$count= filter_input(INPUT_GET,'count');
$days= filter_input(INPUT_GET, 'days');
$check_in= filter_input(INPUT_GET,'check_in');
$check_out= filter_input(INPUT_GET,'check_out');
echo "<h1>No. of Standard Rooms to be reserved :".$count."</h1>";
echo "<h1>Cost per Standard Room:$".$row1['price']."/day</h1>";
$days=$days+1;
echo "<h1>No. of days to be reserved :".$days."</h1>";
echo "<h1>Net Payable Amount:$".($row1['price']*$count*$days)."</h1>";
echo "<h1>Check In:".$check_in."  Check Out:".$check_out."</h1>";
$email=$_SESSION['email'];
$q2="insert into reservation(email,room_no,check_in,check_out)
    select '$email',room_no,'$check_in','$check_out' from room where room_type='Executive' and available='yes' limit $count;";

mysqli_query($con, $q2) or die("Bad Query 2");
$q3="update room set available='no' where room_type='Executive' and available='yes' limit $count";
mysqli_query($con, $q3) or die("Bad Query 3");
}

?>
    <div class="container">
        <div class="row">
            <a href="#" class="btn btn-primary col-sm-offset-2" data-toggle="modal" data-target="#myModal">Make Payment</a>
        </div>
        <div class="row">
            <h3>By Clicking Make Payment you agree to our <a href="#">cancellation</a> and <a href="#">refund policy</a></h3>    
        </div>  
    </div>
        
    <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
            <a href="userHome.php" class="close">&times;</a>
          <h3 class="modal-title">Hotel Sunrise</h3>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <h2>Booking Successful!</h2>
            <h3>Thank You for choosing HOTEL SUNRISE!</h3>
        </div>
        <!-- Modal footer
        <div class="modal-footer">
            <a href="userHome.php" class="btn btn-primary">Home</a>
        </div>  -->  
      </div>
    </div>
  </div>
        
</body>