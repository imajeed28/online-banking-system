
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE">
    <link rel="stylesheet" href="./Assets/Modules/Styles/icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./Assets/Modules/Styles/main.css">
    <script  defer src="./Assets/Modules/Scripts/app.js"></script>
    <link rel="icon" href="./Assets/Images/Bank_Logo/Title_icon.png" type="png">
    <title>Online Register | Urban Bank </title>
</head>

<body>
<div id="form-container">
    <div id="form-main">    
    <!-- Navigation Bar  of Website-->  
    <nav>
        <!-- Logo Image of the navbar-->
        <div class="logo">
            <a href="./index.php"><img src="./Assets/Images/Bank_Logo/urban_bank_logo.png" title="Urban Bank" alt="Bank Logo"></a>
        </div>
       <!-- Online Register Button-->
       <ul class="user-login-button">
            <li>
                <a href="./user-login.php" >
                    <button>Back to Login</button>
                </a>
            </li>
        </ul>
    </nav>   
    <!-- End of the Navigation Bar-->

    <!--Login Form-->
        <div class="user-ol-register-form-container">

            <div class="logo-urban-bank-form">
                <img src="./Assets/Images/Login-Register/logo_urban_bank_login.png" alt="urban-bank" class="logo-urban-bank-form-img">
            </div>

            <div class="ol-register-title">
                <h2 class="ol-register-title">Online Registration</h2>
            </div>
                        
            <form action="" method="POST" enctype="multipart/form-data">
                
                <div class="ol-register-credentials">
                    <div>
                        <label for="aaddhar_no">
                            <i class="far fa-id-card style="color: rgb(26, 64, 99);"></i>
                            Aaddhar Number 
                        </label>
                        <input id="aaddhar_no" name="aaddhar_no"  type="number" title="Please use a 10 digit telephone number with no dashes or dots"  placeholder="Enter your aadhaar number..." required>
                    </div>
                    <div>
                        <label for="aaddhar_card">
                            <i class="far fa-file-image" style="color: rgb(26, 64, 99);"></i>
                            Aaddhar Card 
                        </label>
                        <input class="input-file" id="aaddhar_card" name="aaddhar_card"  type="file" required />
                        <p>*Note: file size should be less than 40 MB </p>
                    </div>
                </div>

                 <div class="ol-register-button"> 
                    <button type="submit" name="submit">
                    <i class="fas fa-user-plus" style="color: whitesmoke;"></i>
                        Register
                     </button>
                </div> 

                <div class="ol-register-checkbox">
                    
                    <label for="tnc"> <a href="#">Terms</a> and <a href="">Condition</a> Applied</label>
                   
                </div> 

                <div class="register-process-link">
                Want be a member?<a href="./reg.php">Registration Process.</a>
                </div>
            </form>
            <?php
                
                include "./Includes/Database-Connection/db-connection-inc.php";


                if(isset($_POST['submit'])){
                    $aaddhar_no = $_POST['aaddhar_no'];
                    $aaddhar_card = addslashes(file_get_contents($_FILES["aaddhar_card"]["tmp_name"]));
                    $sql = "INSERT into ol_registration(aaddhar_no,aaddhar_card) values ('$aaddhar_no', '$aaddhar_card')";
                    $result = mysqli_query($conn,$sql);

                    if($result){
                        echo '<div class="alert alert-success" role="alert">
                            Form Submitted Successfully please wait for the sign-in link
                        </div>';
                    }
                    else{
                        echo "Submission was unsuccessful";
                    }
        
                }
          
          
            ?>
        </div>
    </div>
</div>
<?php

include './footer.php';

?>  
</body>
</html>