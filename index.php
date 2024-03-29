<?php
    include "./Includes/Database-Connection/db-connection-inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE">
    <link rel="stylesheet" href="./Assets/Modules/Styles/icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/Modules/Styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script defer src="./Assets/Modules/Scripts/app.js"></script>
    <link rel="icon" href="./Assets/Images/Bank_Logo/Title_icon.png" type="png">
    <title>Urban Bank | Official Website</title>
</head>

<body>
<div id="homepage-container">
    <div id="homepage-main">
    <!-- Navigation Bar  of Website-->  
    <nav>
        <!-- Logo Image of the navbar-->
        <div class="logo">
            <a href="./index.php"><img src="./Assets/Images/Bank_Logo/urban_bank_logo.png" title="Urban Bank" alt="Bank Logo"></a>
        </div>
        <!-- NavLinks-->
        <ul class="nav-links">
            <li>
                <a class="current" href="./index.php" >Home</a>
            </li>
            <li>
                <a  href="./services.php">Services</a>
            </li>
            <li>
                <a href="./about-us.php">About Us</a>
            </li>
            <li>
                <a href="./blogs.php">Blogs</a>
            </li>    
        </ul>
        <!-- Login and Register Button-->
            <ul class="login-register-button">
            <li>
                <a href="./user-login.php" >
                    <button>LOGIN/REGISTER</button>
                </a>
            </li>
        </ul> 
        <!--Burger Menu for navbar-->
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>   
    <!-- End of the Navigation Bar-->
    
    <!--Home Page Image Slider-->
    <section class="img-slider">
     <div class="slider">
        <div class="slide active" style="background-image: url('./Assets/Images/Home-page/img_slider_1.png')">
            <div class="container">
                <div class="caption">
                    <h1 class="slide1">Urban Bank App</h1>
                    <p class="slide1">Download the App now for instant banking</p>
                    <a href="">For Android</a>
                    <a href="">For IOS</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('./Assets/Images/Home-page/img_slider_2.png')">
            <div class="container">
                <div class="caption">
                    <h1>Urban Bank Loans</h1>
                    <p>View interest rate and eligibility for applying loans</p>
                    <a href="">Check Now!</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('./Assets/Images/Home-page/img_slider_3.png')">
            <div class="container">
                <div class="caption">
                    <h1>Avail Offers</h1>
                    <p>Get upto 10-50% off on shoping through credit card </p>
                    <a href="">View All!</a>
                </div>
            </div>
        </div>
     </div>
   
    <!-- controls  -->
    <div class="controls">
        <div class="prev"><i class="fas fa-arrow-left"></i></div>
        <div class="next"><i class="fas fa-arrow-right"></i></div>
    </div>

    <!-- indicators -->
    <div class="indicator">
    </div>

  </section>



    <div class="interest-rate-container">
        <div class="heading-interest-rate">
            <h2>
                Interest Rate
            </h2>
        </div>
        <div class="interest-rate-loan-wrapper">

            <div class="loan" id="personal-loan-card">
                <div class="loan-title" id="loan-title">
                    <i class="fas fa-wallet loan-icon" style="color: rgb(122, 92, 63); , hover"></i>
                    
                    Personal Loan
                </div>
                <div class="interest-rate-percentage">
                <?php
                    $sql = "select * from interest_rate where ir_id=1;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['interest_rate'];
                        }
                    }
                    
                    ?>
                 p.a.
                </div>
                <div class="interest-rate-date">
                    w.e.f. <?php
                    $sql = "select * from interest_rate where ir_id=1;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo date("d.m.Y", strtotime($row['create_at']));
                        }
                    }
                    
                    ?> 
                </div>
                <div class="interest-rate-tc">
                   <a href="#">
                   *T&C Apply
                   </a> 
                </div>
            </div>

            <div class="loan" id="home-loan-card">
                <div class="loan-title" id="loan-title">
                    <i class="fas fa-home" style="color: rgb(48, 122, 60);"></i>
                    Home Loan
                </div>
                <div class="interest-rate-percentage">
                <?php
                    $sql = "select * from interest_rate where ir_id=2;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['interest_rate'];
                        }
                    }
                    
                    ?> p.a.
                </div>
                <div class="interest-rate-date">
                    w.e.f.  <?php
                    $sql = "select * from interest_rate where ir_id=2;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo date("d.m.Y", strtotime($row['create_at']));
                        }
                    }
                    
                    ?> 
                </div>
                <div class="interest-rate-tc">
                   <a href="#">
                   *T&C Apply
                   </a> 
                </div>
            </div>

            <div class="loan" id="car-loan-card">
                <div class="loan-title" id="loan-title">
                    <i class="fas fa-car" style="color: rgba(184, 41, 5, 0.938);"></i>
                    Car Loan
                </div>
                <div class="interest-rate-percentage">
                <?php
                    $sql = "select * from interest_rate where ir_id=3;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['interest_rate'];
                        }
                    }
                    
                    ?> p.a.
                </div>
                <div class="interest-rate-date">
                    w.e.f. <?php
                    $sql = "select * from interest_rate where ir_id=3;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo date("d.m.Y", strtotime($row['create_at']));
                        }
                    }
                    
                    ?> 
                </div>
                <div class="interest-rate-tc">
                   <a href="#">
                   *T&C Apply
                   </a> 
                </div>
            </div>

            <div class="loan" id="business-loan-card">
                <div class="loan-title" id="loan-title">
                    <i class="fas fa-piggy-bank" style="color: rgb(9, 162, 209);"></i>
                    Saving Accounts
                </div>
                <div class="interest-rate-percentage">
                <?php
                    $sql = "select * from interest_rate where ir_id=4;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['interest_rate'];
                        }
                    }
                    
                    ?> p.a.
                </div>
                <div class="interest-rate-date">
                    w.e.f. <?php
                    $sql = "select * from interest_rate where ir_id=4;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo date("d.m.Y", strtotime($row['create_at']));
                        }
                    }
                    
                    ?> 
                </div>
                <div class="interest-rate-tc">
                   <a href="#">
                   *T&C Apply
                   </a> 
                </div>
            </div>

            <div class="loan" id="gold-loan-card">
                <div class="loan-title" id="loan-title">
                    <i class="fas fa-coins" style="color: rgb(204, 185, 98);"></i>
                    Gold Loan
                </div>
                <div class="interest-rate-percentage">
                <?php
                    $sql = "select * from interest_rate where ir_id=5;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['interest_rate'];
                        }
                    }
                    
                    ?> p.a.
                </div>
                <div class="interest-rate-date">
                    w.e.f. <?php
                    $sql = "select * from interest_rate where ir_id=5;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo date("d.m.Y", strtotime($row['create_at']));
                        }
                    }
                    
                    ?> 
                </div>
                <div class="interest-rate-tc">
                   <a href="#">
                   *T&C Apply
                   </a> 
                </div>
            </div>

            <div class="loan" id="education-loan-card">
                <div class="loan-title" id="loan-title">
                    <i class="fas fa-graduation-cap" style="color: rgb(75, 75, 75);"></i>
                    Education Loan
                </div>
                <div class="interest-rate-percentage">
                <?php
                    $sql = "select * from interest_rate where ir_id=6;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['interest_rate'];
                        }
                    }
                    
                    ?> p.a.
                </div>
                <div class="interest-rate-date">
                    w.e.f. <?php
                    $sql = "select * from interest_rate where ir_id=6;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo date("d.m.Y", strtotime($row['create_at']));
                        }
                    }
                    
                    ?>
                </div>
                <div class="interest-rate-tc">
                   <a href="#">
                   *T&C Apply
                   </a> 
                </div>
            </div>
            
        </div>
        <div class="button-interest-rate">
            
            <a class="btn-interest-rate" href="#" target="_blank">
                <button  class="btn-interest-rate"type="button" >
                    <span>Check Eligibility</span>
                </button>
            </a>
           
        </div>
    </div>


 <!--Handpicked Offer-->

    <div class="handpicked-offer-container">
        <div class="heading-handpicked-offer">
            <h2>
                Handpicked Offer 
            </h2>
        </div>
        
        <div class="handpicked-offer-wrapper">

            <div class="offer" id="first-handpicked-offer-card">
                
                <img src="./Assets/Images/Home-page/amazon-img.jpg" alt="" srcset="">
                
                <div class="handpicked-offer-card-info">
                    <h3>
                        Get Instant 10% Discount at Amazon.in
                    </h3>
                    <h4>
                        Pay using UB Credit Card
                        <br>
                        <a href="#"> T&C Applied</a>
                    </h4>
                    
                    <div class="button-handpicked-offer-card">
                        <a class="btn-handpicked-offer-card" href="#" target="_blank">
                        <button  class="btn-handpicked-offer-card"type="button" >
                            <span>Know More</span>
                        </button>
                        </a>
                    
                    </div>
                    
                </div>

            </div>

            <div class="offer" id="first-handpicked-offer-card">
                
                <img src="./Assets/Images/Home-page/grofers-img.png" alt="" srcset="">
                
                <div class="handpicked-offer-card-info">
                    <h3>
                        Get upto Rs.750 Cashback at Grofers
                    </h3>
                    <h4>
                        Pay using UB Credit Card<br>
                        <a href="#"> T&C Applied</a>
                    </h4>

                    <div class="button-handpicked-offer-card">
                        <a class="btn-handpicked-offer-card" href="#" target="_blank">
                        <button  class="btn-handpicked-offer-card"type="button" >
                            <span>Know More</span>
                        </button>
                        </a>
                    
                    </div>
                    
                </div>
            </div>

            <div class="offer" id="first-handpicked-offer-card">
            
                <img src="./Assets/Images/Home-page/adidas-img.jpg" alt="" srcset="">
            
                <div class="handpicked-offer-card-info">
                    <h3>
                        Get Flat 5% Discount at Adidas Store
                    </h3>
                    <h4>
                        Pay using UB Credit Card
                        <br>
                        <a href="#"> T&C Applied</a>
                    </h4>

                    <div class="button-handpicked-offer-card">
                        <a class="btn-handpicked-offer-card" href="#" target="_blank">
                        <button  class="btn-handpicked-offer-card"type="button" >
                            <span>Know More</span>
                        </button>
                        </a>
                    
                    </div>

                </div>
            </div>
            
            <div class="offer" id="first-handpicked-offer-card">
            
                <img src="./Assets/Images/Home-page/samsung-img.jpg" alt="" srcset="">
                <div class="handpicked-offer-card-info">
                    <h3>
                        Get Instant 15% Discount on Samsung Galaxy
                         
                    </h3>
                    <h4>
                        Pay using UB Credit Card
                        <br>
                        <a href="#"> T&C Applied</a>
                    </h4>
                    
                    <div class="button-handpicked-offer-card">
                        <a class="btn-handpicked-offer-card" href="#" target="_blank">
                        <button  class="btn-handpicked-offer-card"type="button" >
                            <span>Know More</span>
                        </button>
                        </a>
                    
                    </div>
            
            </div> 
        
        </div>
            
            
        </div>
        <div class="button-handpicked-offer">
            
            <a class="btn-handpicked-offer" href="#" target="_blank">
                <button  class="btn-handpicked-offer"type="button" >
                    <span>View All Offers</span>
                </button>
            </a>
           
        </div>
    </div>

    
 </div>   
</div>

<?php

include './footer.php';

?>
     
</body>
</html>