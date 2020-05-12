<!doctype html>
<head>
    <title>Hotel Sunrise</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body class="container-fluid">
<?php
session_start();
$email= filter_input(INPUT_POST, 'email');
$password= filter_input(INPUT_POST,'password');

$con= mysqli_connect('localhost:3307', 'root', '') or die("connection failed");
mysqli_select_db($con, 'HMS');

$q="select * from login where email='$email' and password='$password'";
$result=mysqli_query($con, $q);
$num= mysqli_num_rows($result);
    
    if($num==1){
        $_SESSION['email']=$email;
        header("location:http://localhost/HMS/userHome.php");
    }else{
        die("<h1>Invalid Credentials</h1>");
        header("location:http://localhost/HMS/index.php");
    }
?>
</body>
