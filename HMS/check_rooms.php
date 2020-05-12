<!doctype html>
<head>
    <title>Hotel</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
session_start();
if(filter_input(INPUT_POST,'id')==1){
    standard();
}else if(filter_input(INPUT_POST,'id')==2){
    deluxe();
}else{
    executive ();
}

function standard(){
    $con= mysqli_connect('localhost', 'root', 'root') or die("connection failed");
    mysqli_select_db($con, 'hms');

    $q="select room_no from room where available='yes' and room_type='Standard'
     union
     select room_no from reservation where check_in=NULL;";

    $email=$_SESSION['email'];
    $result= mysqli_query($con, $q) or die("<h1>Bad Query</h1>");
    $num= mysqli_num_rows($result);
    echo "<h1>Dear $email,<br/><br/> $num Standard Rooms available between this duration</h1>";
?>    
    <div>
        <form action="payment.php" method="get">
            <label class="control-label">Enter No. of Standard Rooms to be reserved</label>
            <input type="number" name="count" required/>
            <input type="hidden" name="id" value="1">
            <?php
            $check_in= filter_input(INPUT_POST,'check_in');
            $check_out= filter_input(INPUT_POST,'check_out');

            $date1 = date_create($check_in);
            $date2 = date_create($check_out);
            $diff = date_diff($date1,$date2);
            $days=$diff->format("%a");
            //echo $days;
            echo '<input type="hidden" name="days" value="' . htmlspecialchars($days) . '">';
            echo '<input type="hidden" name="check_in" value="' . htmlspecialchars($check_in) . '">';
            echo '<input type="hidden" name="check_out" value="' . htmlspecialchars($check_out) . '">'; ?>
            <button class="btn btn-primary" type="submit">Proceed</button>            
            <ul>
                <li>By Clicking Proceed  you will be redirected to Secure Page for Payment and your room will be reserved</li>
            </ul>            
        </form>
    </div>
<?php    
}


function deluxe(){
    $con= mysqli_connect('localhost', 'root', 'shiv') or die("connection failed");
    mysqli_select_db($con, 'HMS');

    $q="select room_no from room where available='yes' and room_type='Deluxe'
     union
     select room_no from reservation where check_in=NULL;";

    $email=$_SESSION['email'];
    $result= mysqli_query($con, $q) or die("<h1>Bad Query</h1>");
    $num= mysqli_num_rows($result);
    echo "<h1>Dear $email,<br/><br/> $num Deluxe Rooms are available between this duration</h1>";
?>
    <div>
        <form action="payment.php" method="get">
            <label class="control-label">Enter No. of Deluxe Rooms to be reserved</label>
            <input type="number" name="count" required/>
            <input type="hidden" name="id" value="2">
            <?php
            $check_in= filter_input(INPUT_POST,'check_in');
            $check_out= filter_input(INPUT_POST,'check_out');

            $date1 = date_create($check_in);
            $date2 = date_create($check_out);
            $diff = date_diff($date1,$date2);
            $days=$diff->format("%a");
            //echo $days;
            echo '<input type="hidden" name="days" value="' . htmlspecialchars($days) . '">';
            echo '<input type="hidden" name="check_in" value="' . htmlspecialchars($check_in) . '">';
            echo '<input type="hidden" name="check_out" value="' . htmlspecialchars($check_out) . '">'; ?>
            <button class="btn btn-primary" type="submit">Proceed</button>
            <ul>
                <li>By Clicking Proceed you will be redirected to Secure Page for Payment and  will be reserved</li>
            </ul>
        </form>
    </div>
    
<?php    
}
function executive(){
    $con= mysqli_connect('localhost', 'root', 'root') or die("connection failed");
    mysqli_select_db($con, 'HMS');

    $q="select room_no from room where available='yes' and room_type='Executive'
     union
     select room_no from reservation where check_in=NULL;";

    $email=$_SESSION['email'];
    $result= mysqli_query($con, $q) or die("<h1>Bad Query</h1>");
    $num= mysqli_num_rows($result);
    echo "<h1>Dear $email,<br/><br/> $num Executive Rooms are available between this duration</h1>";?>
    <div>
        <form action="payment.php" method="get">
            <label class="control-label">Enter No. of Executive Rooms to be reserved</label>
            <input type="number" name="count" required/>
            <input type="hidden" name="id" value="3">
            <?php
            $check_in= filter_input(INPUT_POST,'check_in');
            $check_out= filter_input(INPUT_POST,'check_out');

            $date1 = date_create($check_in);
            $date2 = date_create($check_out);
            $diff = date_diff($date1,$date2);
            $days=$diff->format("%a");
            //echo $days;
            echo '<input type="hidden" name="days" value="' . htmlspecialchars($days) . '">';
            echo '<input type="hidden" name="check_in" value="' . htmlspecialchars($check_in) . '">';
            echo '<input type="hidden" name="check_out" value="' . htmlspecialchars($check_out) . '">'; ?>
            <button class="btn btn-primary" type="submit">Proceed</button>            
            <ul>
                <li>By Clicking Proceed you will be redirected to Secure Page for Payment and  will be reserved</li>
            </ul>
        </form>
    </div>
<?php
}?>
</body>
