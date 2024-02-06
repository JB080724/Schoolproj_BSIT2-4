
<html>
    <head>
        <title>Display</title>
        <style>
            body
            {
                background: #656167;
            }
            table{
                background-color: white;
            }
            .update, .delete{
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 23px;
                width: 80px;
                font-weight: bold;
                cursor: pointer;
            }
            .delete{
                background-color: red;
            }
            .AaA{
                text-decoration:none;
                color:#000;
                padding: 10px;
                background-color:skyblue;
                border-radius:30px;
                cursor: pointer;
                transition: 0.3s;
            }
            .AaA:hover{
                background-color:red;
            }
            </style>
</head>
</html>

<?php

include("../PHP/connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);



// echo $total;

if($total != 0){
    
    ?>

        <h2 align="center"><mark style="background-color: white;">List of All Records</mark></h2>
    <center>

        <table border="1" cellspacing="7" width="100%">
        <tr>
        <th width="1%">ID</th>
        <th width="10%">Full Name</th>
        <!-- <th>Middle Name</th>
        <th>Last Name</th> -->
        <th width="7%">Student Number</th>
        <th width="3%">Gender</th>
        <th width="5%">Year Level</th>
        <th width="21%">Degree Program</th>
        <th width="18%">Email Address</th>
        <th width="6%">Phone Number</th>
        <th width="5%">Birth Date</th>
        <th width="14%">Present Address</th>
        <th width="10%">Operations</th>
        </tr>
<?php
    while ($result = mysqli_fetch_assoc($data)){

        echo "<tr>
                <td>".$result['ID']."</td>
                <td>".$result['fname']."</td>  
                <td>".$result['snumber']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['ylevel']."</td>
                <td>".$result['dprogram']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['bdate']."</td>
                <td>".$result['address']."</td>


                
                <td><a href='update_design.php?ID=$result[ID]'><input
                type='submit' value='Update' class='update'></a>

                <a href='delete.php?ID=$result[ID]'><input
                type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
            </tr>
            ";
    }
    // echo "The table is filled with data.";
}
else{
    
    echo "<script>alert('No information present.')</script>";}
?>
</table>
<br><br>
<a href="../PHP/adminhome.php" class="AaA">Back to Admin page</a>
</center>

<script>
    function checkdelete() {
        return confirm('Are you sure you want to delete this record?');
    }
</script>




