<?php 

include("../PHP/connection.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/admissions.css">

    <title>Admision From</title>
</head>
<body>
<nav>
        <label class="logo">P.E.R.T - UNIVERSITY</label>

        <ul>
            <li><a href="../PHP/index.php">Home</a></li>
            <li><a href="../PHP/Admission.php">Admission</a></li>
        </ul>
    </nav>
   

    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Admission Form
        </div>


        <div class="form">
            <div class="input_field">
                <label>Full Name</label>
                <input type="text" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label>Student Number</label>
                <input type="text" class="input" name="snumber" required>
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                <select name="gender" required>
                    <option value="Not Selected">Please Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
            </div>

            <div class="input_field">
                <label>Year Level</label>
                <div class="custom_select">
                <select class="selectbox" name="ylevel" required>
                    <option value="Not Selected">Please Select</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>
            </div>


            <div class="input_field">
                <label>Degree Program</label>
                <div class="custom_select">
                <select class="selectbox" name="dprogram" required>
                    <option value="Not Selected">Please Select</option>
                    <option value="BS Information Teconology">BS Information Teconology</option>
                    <option value="BS Computer Science">BS Computer Science</option>
                    <option value="BS Business Management">BS Business Management</option>
                    <option value="BS Criminology">BS Criminology</option>
                    <option value="BS Psycology">BS Psycology</option>
                    <option value="BS Tourism Management">BS Tourism Management</option>
                    <option value="BS Hospitality Management Hotel">BS Hospitality Management Hotel</option>
                    <option value="BS Hospitality Management Restaurant">BS Hospitality Management Restaurant</option>
                    <option value="Bachelor of Secondary Education English">Bachelor of Secondary Education English</option>
                    <option value="Bachelor of Secondary Education Mathematics">Bachelor of Secondary Education Mathematics</option>
                    <option value="Bachelor of Secondary Education Science">Bachelor of Secondary Education Science</option>
                </select>
            </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone" required>
            </div>

            <div class="input_field">
                <label>Birth Date</label>
                <input type="date" class="input" name="bdate" pattern="\d{2}-\d{2}-\d{4}" placeholder="DD-MM-YYYY" required>
            </div>

            <div class="input_field">
                <label>Present Address</label>
                <textarea class="textarea" name="address" required></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </div>
        </form>
    </div>
</body>
</html>


<?php
    if($_POST['register']){
        
        $fname    = $_POST['fname'];
        $snumber  = $_POST['snumber'];
        $gender   = $_POST['gender'];
        $ylevel   = $_POST['ylevel'];
        $dprogram = $_POST['dprogram'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $bdate    = $_POST['bdate'];
        $address  = $_POST['address'];




        


        $query = "INSERT INTO FORM (fname,snumber,gender,ylevel,dprogram,email,phone,bdate,address) 
        VALUES(
        '$fname',
        '$snumber',
        '$gender',
        '$ylevel',
        '$dprogram',
        '$email',
        '$phone',
        '$bdate',
        '$address')";



        $data = mysqli_query($conn,$query);

        if($data){
            echo "<script>alert('You have successfully registered!!')</script>";
        }
        else {
            echo "Failed";
        }
    
    }
?>

