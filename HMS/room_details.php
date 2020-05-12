<!doctype html>
<head>
    <title>Hotel Sunrise</title>
    <link rel="icon" href="images/icon.jpg"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script>    
</head>
<body  class="container" style="font-family: 'Merriweather', serif;">        

<?php
session_start();
    if(!isset($_SESSION['email']))
        header("location:http://localhost/hms/index.php");

$email=$_SESSION['email'];

$id= filter_input(INPUT_GET, 'room_id');
//echo $id;

  if($id==1){
      standard();
  }else if($id==2){
      deluxe();
  }else{
      executive();
  }  
  
  function standard() {
      echo "<h1>Details of Standard Room</h1>";      
      $con= mysqli_connect('localhost', 'root', 'root') or die("connection failed");
      mysqli_select_db($con, 'HMS');
      ?>
    <div class="container">
        <div class="row">
            <div>
                <label class="control-label">Check-In</label>
                <input id="check_in" type="date"/>
                
                <label class="control-label">Check-Out</label>
                <input id="check_out" type="date"/>
                
                <button id="check1" class="btn btn-primary" value="1">Check Availability</button>
                <div id="result"></div>
            </div>
        </div>
    </div><hr>
    <div class="container">
        <div class="row">
            <img src="images/a1.jpg" style="margin-top: 7px;" class="col-lg-4" width="100" height="200">
            <div class="col-lg-8" style="font-size: 26px">
                <strong>Facilities</strong>
                <ul>
                    <li>Breakfast</li>
                    <li>High Speed Wifi</li>
                    <li>Free Parking</li>
                    <li>Free Pick & Drop</li>
                    <li>Modern Room with amenities like Hair Dryer, Shaving Mirror, 32inch LED TV,etc. </li>                    
                </ul>
            </div>                        
        </div>
    </div>    
<?php
  }
  
  function deluxe() {
      echo "<h1>Details of Deluxe Room</h1>";      
      $con= mysqli_connect('localhost', 'root', 'root') or die("connection failed");
      mysqli_select_db($con, 'HMS');
      ?>
    <div class="container">
        <div class="row">
            <div>
                <label class="control-label">Check-In</label>
                <input id="check_in" type="date"/>
                
                <label class="control-label">Check-Out</label>
                <input id="check_out" type="date"/>
                
                <button id="check1" class="btn btn-primary" value="2">Check Availability</button>
                <div id="result"></div>                
            </div>
        </div>
    </div><hr>
    
        <div class="container">
        <div class="row">
            <img src="images/a2.jpg" style="margin-top: 7px;" class="col-lg-4" width="100" height="200">
            <div class="col-lg-8" style="font-size: 26px">
                <strong>Facilities</strong>
                <ul>
                    <li>Breakfast with buffets</li>
                    <li>Dinner</li>
                    <li>High Speed Wifi</li>
                    <li>Free Parking</li>
                    <li>Free Pick & Drop</li>
                    <li>Modern Room with amenities like Hair Dryer, Shaving Mirror, 32inch LED TV,etc. </li>
                    <li>Fitness Club</li>
                </ul>
            </div>                        
        </div>
    </div>

<?php
  }  
    
  function executive() {
      echo "<h1>Details of Executive Room</h1>";      
      $con= mysqli_connect('localhost', 'root', 'root') or die("connection failed");
      mysqli_select_db($con, 'HMS');
      ?>
    <div class="container">
        <div class="row">
            <div>
                <label class="control-label">Check-In</label>
                <input id="check_in" type="date"/>
                
                <label class="control-label">Check-Out</label>
                <input id="check_out" type="date"/>
                
                <button id="check1" class="btn btn-primary" value="3">Check Availability</button>
                <div id="result"></div>
            </div>
        </div>
    </div><hr>

    <div class="container">
        <div class="row">
            <img src="images/a3.jpg" style="margin-top: 7px;" class="col-lg-4" width="100" height="200">
            <div class="col-lg-8" style="font-size: 26px">
                <strong>Facilities</strong>
                <ul>
                    <li>Breakfast with buffets</li>
                    <li>Lunch</li>
                    <li>Dinner</li>
                    <li>High Speed Wifi</li>
                    <li>Free Parking</li>
                    <li>Free Pick & Drop</li>
                    <li>Modern Room with amenities like Hair Dryer, Shaving Mirror, 32inch LED TV,etc. </li>
                    <li>Fitness Club</li>
                    <li>Swimming Pool</li>
                </ul>
            </div>                        
        </div>
    </div>
        
<?php
  }  
?>
    

    
    <script>
        $(document).ready(function(){
            
            $("#check1").click(function(){
                 
            var check_in=new Date($('#check_in').val());
            var check_out=new Date($('#check_out').val());
            var today=new Date();
            //var today=new Date().getFullYear()+'-'+(new Date().getMonth()+1)+'-'+new Date().getDate();
            
            if(check_in>today && check_in<check_out){
                var check_in=document.getElementById('check_in').value;
                var check_out=document.getElementById('check_out').value;
                var id=document.getElementById('check1').value;
                var email="<?php echo $email; ?>";

                //alert("Check_In="+check_in+"  out="+check_out+"email="+email);
                    $.post("http://localhost/HMS/check_rooms.php",{email:email,check_in:check_in,check_out:check_out,id:id},
                       function (data){
                                    $('#result').html(data);
                            }	
                    );                                               
            }
            else
                bootbox.alert("Please select the dates within valid range!");
                
            });
        });
    
    
    </script>
</body>
    