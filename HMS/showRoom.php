<?php
$type=$_GET['type'];
//echo $type;

$con= mysqli_connect("localhost:","root","root","hms") or die("Connection Failed");

$q="select * from room where room_type='$type'";

$result= mysqli_query($con, $q);


?>
<table border="1" align="center" cellspacing="1">
    <tr><th>Roll No</th><th>Name</th><th>Branch</th><th>Marks</th></tr>

<?php    while($row= mysqli_fetch_array($result)){
        ?>    
    <tr>
        <td><?php echo $row['room_no'];?></td>
        <td><?php echo $row['room_type'];?></td>
        <td><?php echo $row['available'];?></td>
        <td><?php echo $row['price'];?></td>
    </tr>


        
<?php    }
?>
</table>