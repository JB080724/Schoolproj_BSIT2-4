<?php 

include("../PHP/connection.php");

$ID = $_GET['ID'];


$query = "SELECT * FROM form where ID= '$ID'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/admissions.css">
    <title>Addmision From</title>
</head>
<body>
    
   
   


    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            UPDATE STUDENT INFORMATION
        </div>


        <div class="form">
            <div class="input_field">
                <label>Full Name</label>
                <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname" required>
            </div>
            <div class="input_field">
                <label>Student Number</label>
                <input type="text" value="<?php echo $result['snumber']; ?>" class="input" name="snumber" required>
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                <select name="gender" required>

                    <option value="Not Selected">Please Select</option>
                    
                    <option value="male"
                        <?php 
                            if($result['gender'] == 'male'){
                                echo "selected";
                            }
                        ?>
                    >Male</option>

                    <option value="female"
                    <?php 
                            if($result['gender'] == 'female'){
                                echo "selected";
                            }
                        ?>>Female</option>
                </select>

                </div>
            </div>

            <div class="input_field">
                <label>Year Level</label>
                <div class="custom_select">

                <select class="selectbox" name="ylevel" required>
                    <option value="Not Selected">Please Select</option>
                    <option value="1st Year"
                    <?php 
                            if($result['ylevel'] == '1st Year'){
                                echo "selected";
                            }
                        ?>
                    >1st Year</option>

                    <option value="2nd Year"
                    <?php 
                            if($result['ylevel'] == '2nd Year'){
                                echo "selected";
                            }
                        ?>
                    >2nd Year</option>

                    <option value="3rd Year"
                    <?php 
                            if($result['ylevel'] == '3rd Year'){
                                echo "selected";
                            }
                        ?>
                    >3rd Year</option>

                    <option value="4th Year"
                    <?php 
                            if($result['ylevel'] == '4th Year'){
                                echo "selected";
                            }
                        ?>
                    >4th Year</option>
                </select>

            </div>
            </div>


            <div class="input_field">
                <label>Degree Program</label>
                <div class="custom_select" >
                <select class="selectbox" name="dprogram" required>
                    <option value="Not Selected">Please Select</option>
                    <option value="BS Information Teconology"
                    <?php 
                            if($result['dprogram'] == 'BS Information Teconology'){
                                echo "selected";
                            }
                        ?>
                    >BS Information Teconology</option>

                    <option value="BS Computer Science"
                    <?php 
                            if($result['dprogram'] == 'BS Computer Science'){
                                echo "selected";
                            }
                        ?>
                    >BS Computer Science</option>

                    <option value="BS Business Management"
                    <?php 
                            if($result['dprogram'] == 'BS Business Management'){
                                echo "selected";
                            }
                        ?>
                    >BS Business Management</option>
                    
                    <option value="BS Criminology"
                    <?php 
                            if($result['dprogram'] == 'BS Criminology'){
                                echo "selected";
                            }
                        ?>
                    >BS Criminology</option>

                    <option value="Psychology"
                    <?php 
                            if($result['dprogram'] == 'BS Psychology'){
                                echo "selected";
                            }
                        ?>
                    >BS Psycology</option>

                    <option value="BS Tourism Management"
                    <?php 
                            if($result['dprogram'] == 'BS Tourism Management'){
                                echo "selected";
                            }
                        ?>
                    >BS Tourism Management</option>

                    <option value="BS Hospitality Management Hotel"
                    <?php 
                            if($result['dprogram'] == 'BS Hospitality Management Hotel'){
                                echo "selected";
                            }
                        ?>
                    >BS Hospitality Management Hotel</option>

                    <option value="BS Hospitality Management Restaurant"
                    <?php 
                            if($result['dprogram'] == 'BS Hospitality Management Restaurant'){
                                echo "selected";
                            }
                        ?>
                    >BS Hospitality Management Restaurant</option>
                    
                    <option value="Bachelor of Secondary Education English"
                    <?php 
                            if($result['dprogram'] == 'Bachelor of Secondary Education English'){
                                echo "selected";
                            }
                        ?>
                    >Bachelor of Secondary Education English</option>

                    <option value="Bachelor of Secondary Education Mathematics"
                    <?php 
                            if($result['dprogram'] == 'Bachelor of Secondary Education Mathematics'){
                                echo "selected";
                            }
                        ?>
                    >Bachelor of Secondary Education Mathematics</option>

                    <option value="Bachelor of Secondary Education Science"
                    <?php 
                            if($result['dprogram'] == 'Bachelor of Secondary Education Science'){
                                echo "selected";
                            }
                        ?>
                    >Bachelor of Secondary Education Science</option>

                </select>
            </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" value="<?php echo $result['email']; ?>" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" value="<?php echo $result['phone']; ?>" class="input" name="phone" required>
            </div>

            <div class="input_field">
                <label>Birth Date</label>
                <input type="date" value="<?php echo $result['bdate']; ?>" class="input" name="bdate" pattern="\d{4}-\d{2}-\d{2}" placeholder="YYYY-MM-DD" required>
            </div>

            <div class="input_field">
                <label>Present Address</label>
                <textarea  class="textarea" name="address" required><?php echo $result['address']; ?></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        </div>
        </form>
    </div>
</body>
</html>


<?php
    if($_POST['update']){

        $fname    = $_POST['fname'];
        $snumber  = $_POST['snumber'];
        $gender   = $_POST['gender'];
        $ylevel   = $_POST['ylevel'];
        $dprogram = $_POST['dprogram'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $bdate    = $_POST['bdate'];
        $address  = $_POST['address'];


        $query = "UPDATE form set fname='$fname',
                                  snumber='$snumber',
                                  gender='$gender',
                                  ylevel='$ylevel',
                                  dprogram='$dprogram',
                                  email='$email',
                                  phone='$phone',
                                  bdate='$bdate',
                                  address='$address' 
                  WHERE ID='$ID'";

        $data = mysqli_query($conn,$query);

        if($data){
            echo "<script>alert('Information Successfully Updated')</script>";
            ?>

            <meta http-equiv = "refresh" content = "0; url = 
            http://localhost/PERT_WEB/Asset/PHP/display.php" />

            <?php
        }
        else {
            echo "Update Operation Failed";
        }
    
    }
?>

