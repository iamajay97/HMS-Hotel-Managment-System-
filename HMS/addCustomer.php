<!doctype html>
<head>
    <title>Hotel Sunrise</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        
        .body-modal{
            background-image: url(images\reg-hero.png)
        }
        </style>
</head>
<?php
$name= filter_input(INPUT_POST, 'name');
$email= filter_input(INPUT_POST, 'email');
$contact= filter_input(INPUT_POST, 'contact');
$password= filter_input(INPUT_POST,'password');
$state= filter_input(INPUT_POST, 'state');
$city= filter_input(INPUT_POST, 'city');

/*echo $name.'<br/>';
echo $contact.'<br/>';
echo $email.'<br/>';
echo $password.'<br/>';
echo $state.'<br/>';
echo $city.'<br/>';*/


$con= mysqli_connect('localhost:3307', 'root', '') or die("connection failed");
mysqli_select_db($con, 'hms');
$q1="insert into customer values ('$name','$email','$contact','$state','$city');";
$status=mysqli_query($con, $q1) or die("Bad Query 1");

$q2="insert into login values ('$email','$password');"; 
$status2= mysqli_query($con, $q2) or die("Bad Query 2");
//echo '<br/>query status='.$status;
//echo '<br/>query status='.$status2;
?>
    <script>
        var status="<?php echo $status?>";
        console.log("Status="+status);
        $(document).ready(function(){
            if(status==='1'){
               console.log("Status="+status);
               $('#myModal1').modal();    
           }
        });

    </script>

<div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Hotel Sunrise</h3>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <h3>Your Account has been created Successfully.<hr>Thank You for your interest in HOTEL SUNRISE!</h3>
            <label>You can now <a href="#" data-toggle="modal" data-target="#myModal2">Sign In</a> to your account.</label>
        </div>
        <!-- Modal footer 
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>-->   
      </div>
    </div>
  </div>



<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
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

