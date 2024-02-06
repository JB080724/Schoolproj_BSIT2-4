<?php

session_start();

    if (!isset($_SESSION['username']))
    {
        header('location:../PHP/login.php');
    }


    elseif($_SESSION['usertype']=='student')
    {

        header('location:../PHP/login.php');
    }

     $host="localhost";
     $user="root" ;
     $password=" ";
     $db="schoolproject";
    
     $data=mysqli_connect($host,$user,$password,$db);

     if(isset($_POST['addTeacher'])){
         $t_name=$_POST['name'];
         $t_description=$_POsT['description'];
         $file=$_FILES['file']['name'];
         $dst="../Image/".$file;
         $dst_db="image/".$file;

         move_uploaded_file($_FILES['image']['tmp_name'], $dst);



         $sql="INSERT INTO teacher (name, description, image ) 
         VALUES ('$t_name', '$t_description', '$dst_db')";
         $result=mysqli_query($data, $sql);
     }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style type="text/css">
        .div_deg{
            background-color: skyblue;
            padding-top: 65px;
            padding-bottom: 65px;
            width: 500px;
        }

    </style>

    <link rel="stylesheet" type="text/css" href="../CSS/admins.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

    <header class="header">

        <a class="Dash">Admin Dashboard</a>

        <div class="logout">

            <a href="../PHP/logout.php" class="btn btn-primary">Logout</a>

        </div>

    </header>

    <aside>

        <ul>



            <li>
                <a href="../PHP/adminform.php">Add Student</a>
            </li>

            <li>
                <a href="../PHP/displayadmin.php">View Student</a>
            </li>

            <li>
                <a href="../PHP/addTeacher.php">Add Teacher</a>
            </li>

            <li>
                <a href="">View Teacher</a>
            </li>

            <li>
                <a href="">Add Courses</a>
            </li>

            <li>
                <a href="">View Courses</a>
            </li>

        </ul>

    </aside>

    <div class="content">
        <center>
            <h1>Add teacher</h1> 

            <div class="div_deg">
                
                <form action="#" method="POST" enctype="multipart/form-data">

                <div>
                    <label>Teacher name : </label>
                    <input type="text" name="">
                </div>

                <br> 

                <div>
                    <label>Description : </label>
                    <textarea name="description"></textarea>
                </div>

                <br> 

                <div>
                    <label>Image : </label>
                    <input type="file" name="image">
                </div>

                <br> 

                <div>
                    <input type="submit" name="addTeacher" 
                    value="Add Teacher" class="btn btn-primary">
                </div>

                </form>

            </div>
        </center>
    </div>
    

</body>
</html>