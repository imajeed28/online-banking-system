<?php include './Includes/AdminDashBoard-inc/admin-forgot-password-inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE">
            <link rel="stylesheet" href="./Assets/Modules/Styles/icons.css">
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="./Assets/Modules/Styles/main.css">
            <link rel="icon" href="./Assets/Images/Bank_Logo/Title_icon.png" type="png">
            <title>Admin Reset Password | Urban Bank</title>
        </head>
    <body>
        <!-- Navigation Bar  of Website-->  
        <nav>
            <!-- Logo Image of the navbar-->
            <div class="logo">
                <a href=""><img src="./Assets/Images/Bank_Logo/urban_bank_logo.png" title="Urban Bank" alt="Bank Logo"></a>
            </div>
            <!-- Login and Register Button-->
            <ul class="admin-login-button">
            <li>
                <a href="./admin-login.php" >
                    <button>BACK TO LOGIN</button>
                </a>
            </li>
        </ul> 
        </nav>   
        <!-- End of the Navigation Bar-->
    
        <!--Forgot Password Form-->
            <div class="admin-forgot-password-container">
    
                <div class="logo-urban-bank-form">
                    <img src="./Assets/Images/Login-Register/logo_urban_bank_login.png" alt="urban-bank" class="logo-urban-bank-form-img">
                </div>
    
                <div class="admin-forgot-password-title">
                    <h2 class="admin-forgot-password-title">Reset Password</h2>
                </div>
    
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="admin-forgot-password-credentials">
    
                            
    
                        <div>
                            <label for="admin_mail">
                                <i class="far fa-envelope" style="color: rgb(26, 64, 99);"></i>
                                Email-ID
                                <span class="error-messages"> <br> <?php echo $admin_mailErr; ?> </span>
                            </label>
                            <input id="admin_mail" name="admin_mail"  type="text" placeholder="Enter your email id...">
                        </div>
                    </div>
    
                     <div class="admin-forgot-password-send-button"> 
                        <button type="Submit">
                        <i class="far fa-paper-plane" style="color: whitesmoke;"></i>
                            Send to mail
                         </button>
                    </div>
                 </form>
                
            </div>
        </div>
    
    
    
    
        <script  src="./Assets/Modules/Scripts/app.js"></script>
    
</body>
</html>