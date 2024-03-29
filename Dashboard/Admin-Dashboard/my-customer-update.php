<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../../admin-login.php");
}
include '../../Includes/Database-Connection/db-connection-inc.php';

if (isset($_GET['customer_id'])) {
    $_SESSION['customer_id'] = $_GET['customer_id'];
}

$sql = "SELECT * FROM customer_details WHERE customer_id=".$_SESSION['customer_id'];
$result = mysqli_query($conn, $sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
            $cust_fname = $row["cust_fname"];
            $cust_lname = $row["cust_lname"];
            $dob = $row["dob"];
            $pan_no = $row["pan_no"];
            $cust_email_id = $row["cust_email_id"];
            $cust_phone_no = $row["cust_phone_no"];
            $cust_address = $row["cust_address"];
    }
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Assets/Modules/Styles/icons.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href="../../Assets/Images/Bank_Logo/Title_icon.png" type="png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="../../Assets/Modules/Styles/dashboard-main.css">
        <script defer src="../../Assets/Modules/Scripts/admin-dashboard-app.js"></script>
        <title>Add Customer | Dashboard</title>
    </head>
    <body id="admin-body-pd" >
        <header class="admin-header" id="admin-header">
            <div class="admin-header__toggle">
                <i class='bx bx-menu' id="admin-header-toggle"></i>
            </div>
            <div class="admin-logout">
            <a href="../../admin-logout.php""> <button type="submit"><i class='bx bx-log-out admin-header__icon' ></i>LOGOUT</button> </a>
            </div>
        </header>

        <div class="admin-l-navbar" id="admin-nav-bar">
            <nav class="admin-nav">
                <div class="admin-logo-component">
                    <a href="./home.php" class="admin-nav__logo"  title="Admin Dashboard">
                        <i class='bx bx-user-circle admin-nav__logo-icon' ></i>
                        <span class="admin-nav__logo-name">ADMIN</span>
                    </a>

                    <div class="admin-sidebar-component">
                        <a href="./home.php" class="admin-nav__link"  title="Home">
                        <i class='bx bx-home admin-nav__icon' ></i>
                            <span class="admin-nav__name">HOME</span>
                        </a>
                        
                        <a href="./add-customer.php" class="admin-nav__link "  title="Add Customers">
                            <i class='bx bxs-user-plus admin-nav__icon' ></i>
                            <span class="admin-nav__name">ADD CUSTOMERS</span>
                        </a>

                        <a href="./my-customer.php" class="admin-nav__link active"  title="My Customers">
                            <i class='bx bxs-user-rectangle admin-nav__icon' ></i>
                            <span class="admin-nav__name">MY CUSTOMERS</span>
                        </a>
                        
                        
                        <a href="./verified-account.php" class="admin-nav__link" title="Verified Account">
                        <i class='bx bx-check-double admin-nav__icon' ></i>
                            <span class="admin-nav__name">VERIFIED ACCOUNTS</span>
                        </a>
                        
                        <a href="./online-approval.php" class="admin-nav__link" title="Online Approval">
                            <i class='bx bxs-user-check admin-nav__icon' ></i>
                            <span class="admin-nav__name">ONLINE APPROVAL</span>
                        </a>

                        <a href="./add-notice.php" class="admin-nav__link"  title="Add Notice">
                            <i class='bx bxs-note admin-nav__icon' ></i>
                            <span class="admin-nav__name">ADD NOTICE</span>
                        </a>

                        <a href="./post-blog.php" class="admin-nav__link"  title="Post Blog">
                            <i class='bx bxl-blogger admin-nav__icon' ></i>
                            <span class="admin-nav__name">POST BLOG</span>
                        </a>

                        <a href="./newsletter.php" class="admin-nav__link"  title="Newsletter">
                            <i class='bx bxs-news admin-nav__icon' ></i>
                            <span class="admin-nav__name">NEWSLETTER</span>
                        </a>

                        <a href="./admin-interest-rate.php" class="admin-nav__link"  title="Interest Rate">
                            <i class='bx bx-line-chart admin-nav__icon'></i>
                            <span class="admin-nav__name">INTEREST RATE</span>
                        </a>
                    </div>
                </div>

                <a href="./home.php" class="admin-nav__logo"  title="Urban Bank">
                    <i class='bx bxs-bank admin-nav__logo-icon' ></i>
                    <span class="admin-nav__logo-name">&copy; URBAN BANK </span>
                </a>
            </nav>
        </div>



        <div class="heading-title">
                <h2>Update Customer</h2>
        </div>
        
        <form class="add_customer_form" action="./my-customer-update-action.php" method="post">
            
            <div class="flex-container">
                <div class=container>
                    <label>First Name :</label><br>
                    <input name="cust_fname" size="30" value="<?php echo $cust_fname;?>" type="text" required />
                </div>
                <div  class=container>
                    <label>Last Name :</b></label><br>
                    <input name="cust_lname" size="30" value="<?php echo $cust_lname;?>"  type="text" required />
                </div>
            </div>
        <div class="flex-container">
            <div class=container>
                    <label>Date of Birth :</label><br>
                    <input name="dob" size="30" type="text" value="<?php echo $dob;?>"  placeholder="yyyy-mm-dd" required />
            </div>
        
            <div class=container>
                <label>PAN No. :</label><br>
                <input name="pan_no" size="30" value="<?php echo $pan_no;?>" type="text" required />
            </div>
            </div>

            <div class="flex-container">
                <div class=container>
                    <label>Email-ID :</label><br>
                    <input name="cust_email_id" size="30"  value="<?php echo $cust_email_id;?>" type="text" required />
                </div>
                <div  class=container>
                    <label>Phone No. :</b></label><br>
                    <input name="cust_phone_no" size="30" value="<?php echo $cust_phone_no;?>" type="text" required />
                </div>
            </div>

            <div class="flex-container">
                <div class=container>
                    <label>Address :</label><br>
                    <textarea name="cust_address"  required /><?php echo $cust_address;?></textarea>
                </div>
            </div>


            <div class="flex-container">
                <div class="container">
                    <button type="submit">Submit</button>
                </div>

                <div class="container">
                    <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
                </div>
                
            </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

    </body>
</html> 