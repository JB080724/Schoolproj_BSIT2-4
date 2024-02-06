<?php 
include("../PHP/connection.php");

$ID = $_GET['ID'];

$query = "DELETE FROM form WHERE ID = '$ID' ";
$data = mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Record Deleted')</script>";
    ?> 

    <meta http-equiv = "refresh" content = "0; url = http://localhost/PERT_WEB/Asset/PHP/display.php" />
    <?php 
}
else
{
    echo "<script>alert('Failed To Delete')</script>";
}    
    ?> 