<?php
include 'conn.php';

if(isset($_POST['submit']))
{
    $productimage = $_POST['product_image'];
    
    $productName = $_POST['product_name'];
    $productdes = $_POST['product_discripstion'];
    $productPrice = $_POST['product_price'];

    $ins = "INSERT INTO `cart`(`c_name`, `c_imag`, `c_des`, `c_prise`) 
    VALUES ('$productName','$productimage','$productdes','$productPrice')";
    $que = mysqli_query($con,$ins); 

    if($que)
    {
        echo '<script>alert("your product is add to cart ✅")</script>';
        
    }
    else
    {
        echo '<script>alert("product is not carrt ❎ try angen.. ")</script>';

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* product css */


        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        html{
            scroll-behavior: smooth;
        }

        ::-webkit-scrollbar{
            width: 15px;
        }

        ::-webkit-scrollbar-track{
            border-radius: 5px;
            box-shadow: inset 0 0 10px rgba(0,0,0,0.25);
        }

        ::-webkit-scrollbar-thumb{
            border-radius: 5px;
            background: linear-gradient(to top, #c72092 , #6c14d0);
        }


        


        /*Products*/

        /* Targeting the container and centering the text */
        #Products {
            text-align: center;
            max-width: 1200px; /* Adjust the width as needed */
            margin: 100px auto; /* Center the container */
            /* display: flex; */
        }
        h1{
            margin-bottom: 16px;
        }
        
        /* Styling the product cards */
        .box {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px; /* Adjust the gap between cards */
        
        }
        
        .card {
            width: 250px; /* Set the width of each card */
            border: 1px solid #ccc; /* Add a border */
            padding: 20px;
            text-align: center;
        }
        
        .image img {
            width: 100%; /* Make the images fill their container */
        }
        
        h2, h3 {
            margin: 10px 0; /* Adjust margins */
        }
        
        p {
            color: #666; /* Change the text color */
        }


        .small_card i{
            color: gray;
        }
        .small_card i:hover{
            color: #c72092;
        }
        
        /* Styling the star icons */
        .fa-solid {
            color: gold; /* Change the color to gold for solid stars */
        }
        
        .fa-regular {
            color: #ccc; /* Change the color for regular stars */
        }
        
        /* Styling the Add to Cart button */
        .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }
        
        .btn:hover {
            background-color: #2980b9;
        }
        

        Footer

        footer{
            width: 100%;
            /* padding-top:200px; */

        }

        footer .footer_main{
            width: 100%;
            background: #f3f1f1;
            display: flex;
            justify-content: space-around;
        }

        footer .footer_main .tag{
            margin: 10px 0;
        }

        footer .footer_main .tag .center{
            text-align: center;
        }

        footer .footer_main .tag h1{
            font-size: 25px;
            margin: 25px 0;
            color: #1c0080;
        }

        footer .footer_main .tag a{
            display: block;
            color: black;
            text-decoration: none;
            margin: 9px 0;
        }

        footer .footer_main .tag a i{
            padding: 0 10px;
            transition: 0.3;
        }

        footer .footer_main .tag a i:hover{
            color: #c72092;
        }

        footer .footer_main .tag .social_link{
            display: flex;
        }

        footer .footer_main .tag .social_link a{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            text-align: center;
            text-decoration: none;
            color: black;
            box-shadow: 0 0 20px 10px rgba(0,0,0,0.05);
            position: relative;
            margin: 0 5px;
            z-index: 10;
            overflow: hidden;
        }

        footer .footer_main .tag .social_link a .fa-brands{
            font-size: 15px;
            line-height: 30px;
            z-index: 10;
            position: relative;
            transition: 0.5s;
        }

        footer .footer_main .tag .social_link a:hover i{
            color: white;
        }

        footer .footer_main .tag .social_link a::after{
            content: '';
            width: 100%;
            height: 100%;
            top: 0;
            left: -90px;
            background: linear-gradient(-45deg, #c72092 , #6c14d0);
            position: absolute;
            z-index: -10;
            transition: 0.5s;
        }

        footer .footer_main .tag .social_link a:hover::after{
            left: 0;
        }

        footer .footer_main .tag .search_bar{
            width: 230px;
            height: 30px;
            background: rgb(202, 202, 202);
            border-radius: 25px;
        }

        footer .footer_main .tag .search_bar input{
            width: 200px;
            padding: 2px 0;
            position: relative;
            top: 17%;
            left: 6%;
            border: none;
            background: none;
            outline: none;
            font-size: 13px;
        }

        footer .footer_main .tag .search_bar button{
            padding: 7px 15px;
            background: linear-gradient(to right, #c72092 , #6c14d0);
            border: none;
            margin-top: 15px;
            border-radius: 25px;
            color: white;
            cursor: pointer;
        }

    </style>


</head>
<body>

    <?php
        include 'nav-bar.php'
    ?>


    <!--Products-->

    
    <div class="products" id="Products">
        <h1>Products</h1>

        <div class="box">
        <?php 
        include 'conn.php'; 
        $q = "SELECT * FROM `addproduct` ";
        $result = mysqli_query($con,$q);
		while ($row = $result->fetch_assoc())
        {     
    ?>
            <form action="" method="POST">


                <div class="card">


                <div class="small_card">
                   <a href="wishlist.php"> <i class="fa-solid fa-heart"></i> </a>
                </div>

                <div class="image">
                <img src="admin_login/uploaded/img/<?php echo $row['img']; ?>" height="auto"  > 
                </div>

                <div class="products_text">
                    <h2><?php echo $row['name']; ?></h2>
                    <p>
                        <?php echo $row['discripstion']; ?>
                    </p>
                    <h3> ₹<?php echo $row['prisce']; ?></h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    
                    <!-- <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"> -->
                    <input type="hidden" name="product_image" value="<?php echo $row['img']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="product_discripstion" value="<?php echo $row['discripstion']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $row['prisce']; ?>">

                    
                    <input type="submit" name="submit" value="Add To Cart" class="btn" >
                 
                    


                </div>

                </div>
            </form>
            <!-- while loop end  -->
            <?php
                }
            ?>
        </div> 

    </div>

    
        <!--Footer-->

        <footer>
            <div class="footer_main">
                <div class="tag">
                    <h1>Contact</h1>
                    <a href="#"><i class="fa-solid fa-house"></i>Gandhinagar</a>
                    <a href="#"><i class="fa-solid fa-phone"></i>+91 9510456100</a>
                    <a href="#"><i class="fa-solid fa-envelope"></i>rajanbhalodiya321@gmail.com</a>
                </div>
    
                <div class="tag">
                    <h1>Get Help</h1>
                    <a href="#" class="center">FAQ</a>
                    <a href="#" class="center">Shipping</a>
                    <a href="#" class="center">Returns</a>
                    <a href="#" class="center">Payment Options</a>
                </div>
    
                <div class="tag">
                    <h1>Our Stores</h1>
                    <a href="#" class="center">Morbi</a>
                    <a href="#" class="center">Rajkot</a>
                    <a href="#" class="center">Gandhinagar</a>
                </div>
    
                <div class="tag">
                    <h1>Follw Us</h1>
                    <div class="social_link">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>                    
                    </div>
                </div>
    
    
            </div>
        </footer>
</body> 
</html>   