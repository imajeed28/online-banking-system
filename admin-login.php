<?php include './Includes/UserDashboard-inc/user-login.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE">
        <link rel="stylesheet" href="./Assets/Modules/Styles/icons.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./Assets/Modules/Styles/main.css">
        <script  defer src="./Assets/Modules/Scripts/app.js"></script>
        <link rel="icon" href="./Assets/Images/Bank_Logo/Title_icon.png" type="png">
        <title>User Login | Urban Bank</title>
    </head>
<body>
    <!-- Navigation Bar  of Website-->  
    <nav>
        <!-- Logo Image of the navbar-->
        <div class="logo">
            <a href="./index.php"><img src="./Assets/Images/Bank_Logo/urban_bank_logo.png" title="Urban Bank" alt="Bank Logo"></a>
        </div>
       <!-- Online Register Button-->
       <ul class="admin-login-button">
            <li>
                <a href="./login.php" >
                    <button>USER LOGIN</button>
                </a>
            </li>
        </ul>
    </nav>   
    <!-- End of the Navigation Bar-->

    <!--Login Form-->
        <div class="admin-login-form-container">

            <div class="logo-urban-bank-form">
                <img src="./Assets/Images/Login-Register/logo_urban_bank_login.png" alt="urban-bank" class="logo-urban-bank-form-img">
            </div>

            <div class="log-in-title">
                <h2 class="log-in-title">Admin Login</h2>
            </div>
                        
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                
                <div class="admin-login-credentials">
                    <div>    
                        <label for="admin_mail">
                            <i class="far fa-envelope" style="color: rgb(26, 64, 99);"></i>
                            Email-ID 
                            <span class="error-messages"> <?php echo $usernameErr; ?> </span>
                        </label>
                        <input id="admin_mail" name="admin_mail"  type="text" value="<?php $username; ?>" placeholder="Enter your email-id..." >
                    </div>

                    <div>
                        <label for="admin_login_pwd">
                            <i class="fas fa-key" style="color: rgb(26, 64, 99);"></i>
                            Password <span class="error-messages"> <?php echo $user_login_pwdErr; ?> </span>
                        </label>
                        <input id="user_login_pwd" name="user_login_pwd" value="<?php $user_login_pwd; ?>" type="password" placeholder="Enter your password..." >
                    </div>
                </div>

                 <div class="login-submit-button"> 
                    <button type="Submit">
                    <i class="fas fa-unlock-alt" style="color: whitesmoke;"></i>
                        Log In
                     </button>
                </div>

                <div class="forgot-password">
                     Forgot 
                     <a href="./forgot-password.php">
                        <span>Password?</span>
                    </a>
                </div>  
            </form>
            
        </div>

    
</body>
</html>