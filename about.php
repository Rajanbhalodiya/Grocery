<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }



        /*About*/

        .about{
            width: 100%;
            height: 100vh;
            padding: 35px 0;
        }

        .about h1{
            font-size: 60px;
            margin-top: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: black;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
        }

        .about h1 span{
            background: linear-gradient(to right, #c72092 , #6c14d0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-left: 15px;
        }

        .about .about_main{
            position: relative;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .about .about_main .about_image{
            display: flex;
            margin-top: 50px;
        }

        .about .about_main .about_image .about_small_image{
            display: flex;
            flex-direction: column;
            position: relative;
            top: 15px;
        }

        .about .about_main .about_image .about_small_image img{
            height: 124px;
            width: 20vh;
            margin: 5px 0;
            cursor: pointer;
            background: linear-gradient(to right, #6c14d0 , #c72092);
            display: block;
            border-radius: 6px;
            padding: 5px 5px;
            box-shadow: 0 0 6px rgba(0,0,0,0.6);
            opacity: 0.8;
            transition: 0.3s;
        }

        .about .about_main .about_image .about_small_image img:hover{
            opacity: 1;
        }

        .about .about_main .image_contaner{
            padding: 10px;
            display: flex;
        }

        .about .about_main .image_contaner img{
            border: 3px solid #6c14d0;
            border-radius: 20px;
            height: 430px;
            padding: 30px;
            box-shadow: 0 0 8px #6c14d0;
        }

        .about .about_main .about_text{
            margin-top: 45px;
        }

        .about .about_main .about_text p{
            background: linear-gradient(to left, #c72092 , #6c14d0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 22px;
            width: 600px;
            text-align: justify;
            padding: 25px 30px;
            border: 2px solid #c72092;
            border-radius: 20px;
            box-shadow: 0 0 8px #c72092;
        }

        .about .about_btn{
            color: black;
            background: none;
            position: relative;
            top: 10%;
            left: 50%;
            transform: translate(-50% , -50%);
            padding: 10px 25px;
            border: 2px solid #c72092;
            text-decoration: none;
            box-shadow: 0 0 8px #c72092;
            transition: 0.5s;
        }

        .about .about_btn:hover{
            border: 2px solid transparent;
            background: #c72092;
            color: white;
        }


        /*Footer*/

        footer{
            width: 100%;
            padding-top: 20vh;
            
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

     <!--About-->



     
     <div class="about" id="About">
        
        <h1>Web<span>About</span></h1>

        <div class="about_main">
            <div class="about_image">
                <div class="about_small_image">
                    <img src="./all-img/Dry_fruits_and_nuts.webp" >
                    <img src="./all-img/Food&Beverages.jpg" >
                    <img src="./all-img/Oil_and_Masala.webp">
                    <img src="./all-img/Atta__Dals_and_Rice.webp">
                </div>

                <div class="image_contaner">
                    <img src="./all-img/uhome.png">
                </div>

            </div>

            <div class="about_text">
                <p>
                    Shopping for specialty groceries. Here you’ll find a selection of small to medium brands taking the opportunity to present their products on a national stage. We put brands on the map and give customers and independent grocers opportunities to explore, sample or purchase products that have limited distribution. Our selection is innovative, growing, affordable, and ready for you to browse.
                </p>
            </div>

        </div>

        <a href="Product.php" class="about_btn">Shop Now</a>

        
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
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>                    
                </div>
            </div>


        </div>
    </footer>


</body>
</html>