<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="./partials/css/nav.css">
    
</head>
<body>

    <header>
        <nav>
            <ul>
                <!--<li>
                    <a href=""><img src="./images/logo.png" alt=""></a>
                </li>-->
                <li>
                    <i class="fa fa-map-marker" style="color: white;"></i><select name="" id="address">
                        <option value="" onclick="openMap()">Select Address</option>
                    </select>
                </li>
                <li>
                    <select name="" id="">
                        <option value="All">All</option>
                        <option value="Electronics">Electronics</option>
                    </select><input type="text" placeholder="Search Item....... "><button>Search</button>
                </li>
                <li>
                    <a href="" id="return">Return <br> Order</a>
                </li>
                <li>
                <a href="cart.php"><i class="fa fa-shopping-cart" id="cart-icon">
                <?php 
                    $cart_user_email = $_SESSION['email'];
                    $con = mysqli_connect("localhost", "root" , "" , "order");
                    $sql3 = "SELECT * FROM `cart` WHERE `user_email`='$cart_user_email'";
                    $result3 = mysqli_query($con, $sql3);
                    if($row = mysqli_num_rows( $result3 ))
                    {
                        echo "<p class='cart-notification'>$row</p>";
                    }
                    else{
                        
                    }
                    
                   
                ?>

               
                    </i></i></a>
                </li>
                <li>
                    <div class="id">
                        <a href="#" style="font-size: 40px;" ><i class="fa fa-user"></i></a>
                        <div class="id-pop">
                           <div class="user-info">
                           <a href="" id="user-detail"> <i class="fa fa-arrow-left" ></i> User Detail</a>
                            <div class="user-detail">
                                <a href=""><?php echo $_SESSION['email']; ?></a>
                            </div>
                           </div>
                            <a href="logout.php"><i class="fa fa-gear" style="margin-right: 6px;"></i> Setting </a>
                            <a href="logout.php"><i class="fa fa-power-off" style="margin-right: 6px;"></i> Logout </a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>

        <nav class="nav2">
            <ul>
                <li>
                    <a href="">Mobile</a>
                </li>
                <li>
                    <a href="">Television</a>
                </li>
                <li>
                    <a href="">Electronics</a>
                </li>
                <li>
                    <a href="">Toys</a>
                </li>
                <li>
                    <a href="">Men Wears</a>
                </li>
                <li>
                    <a href="">Women Wears</a>
                </li>
                <li>
                    <a href="">Kids Wears</a>
                </li>
                <li>
                    <a href="">Today's Deals</a>
                </li>
            </ul>
        </nav>

    </header>


    
    
</body>
</html>