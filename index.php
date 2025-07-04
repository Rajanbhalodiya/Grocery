<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Grocery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* index css */


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

section{
    width: 100%;
    height: 100vh;
    /* background-image: url(image/bg1.png); */
    background-size: cover;
    background-position: center;
}

section nav{
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 0 8px rgba(0,0,0,0.6);
    background: white;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
}

section nav .logo{
    font-size: 35px;
    color: #c72092;
    margin: 5px 0;
    cursor: pointer;
    position: relative;
    left: -4%;
}

section nav .logo span{
    color: #6c14d0;
    text-decoration: underline;
}

section nav ul{
    list-style: none;
}

section nav ul li{
    display: inline-block;
    margin: 5px 15px;
}

section nav ul li a{
    text-decoration: none;
    color: black;
    transition: 0.2s;
}

section nav ul li a:hover{
    color: #c72092;
}

section nav .icons i{
    margin: 0 4px;
    cursor: pointer;
    font-size: 18px;
    transition: 0.3s;
}

section nav .icons i:hover{
    color: #c72092;
}

section .main .main_content{
    display: flex;
    align-items: center;
    justify-content: space-around;
}

section .main .main_content .main_text h1{
    font-size: 90px;
    line-height: 70px;
    font-family: pyxidium quick;
    background: linear-gradient(to right, #c72092,#6c14d0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    position: relative;
    top: 45px;
    left: 5%;
}

section .main .main_content .main_text h1 span{
    font-size: 70px;
    background: linear-gradient(to right, #c72092,#6c14d0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

section .main .main_content .main_text p{
    width: 600px;
    text-align: justify;
    line-height: 21px;
    position: relative;
    top: 85px;
    left: 5%;
}

section .main .main_content .main_image img{
    width: 730px;
    height: 600px;
    position: relative;
    left: -20px;
    top: 75px;
}

section .main .social_icon{
    position: absolute;
    top: 50%;
    left: 98%;
    transform: translate(-50%,-50%);
    font-size: 19px;
}

section .main .social_icon i{
    margin: 8px 0;
    cursor: pointer;
    transition: 0.3s;
}

section .main .social_icon i:hover{
    color: #c72092;
}

section .main .button{
    position: absolute;
    left: 6%;
    padding: 10px 20px;
    border-radius: 30px;
    background: linear-gradient(to right,#c72092 , #6c14d0);
}

section .main .button a{
    color: white;
    text-decoration: none;
}

section .main .button i{
    color: white;
    margin-left: 5px;
    transition: 0.3s;
}

section .main .button:hover i{
    transform: translateX(6px);
}
sup{
            font-size: 18px;
        }



/*Products*/

.products{
    width: 100%;
    height: 75vh;
    padding: 25px 0;
}

.products h1{
    margin: 35px 0;
    font-size: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    background: linear-gradient(to right, #c72092,#6c14d0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;    
}

.products .box{
    width: 90%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 25px 0;
}

.products .box .card{
    width: 290px;
    height: 440px;
    box-shadow: 0 0 8px #6c14d0;
    border-radius: 5px;
    text-align: center;
    padding: 10px 20px;
    background: #f6f6f6;
}

.products .box .card .small_card{
    display: flex;
    flex-flow: column;
    position: absolute;
    margin: 10px 0;
    transform: translateX(-20px);
    transition: 0.3s;
    opacity: 0;
}

.products .box .card:hover .small_card{
    transform: translateX(2px);
    cursor: pointer;
    opacity: 1;
}

.products .box .card .image{
    display: flex;
    align-items: center;
    justify-content: center;
}

.products .box .card .image img{
    width: 150px;
    margin: 15px 0;
    transition: 0.3s;
}

.products .box .card:hover .image img{
    transform: scale(1.1);
}

.products .box .card .small_card i{
    width: 45px;
    height: 45px;
    border-radius: 5px;
    font-size: 18px;
    margin: 2px -13;
    line-height: 40px;
    border: 2px solid #999999;
    transition: 0.2s;
}

.products .box .card .small_card i:hover{
    color: #c72092;
}

.products .box .card .products_text h2{
    font-size: 30px;
    margin-top: 15px;
}

.products .box .card .products_text p{
    color: #91919191;
    line-height: 21px;
    margin: 8px 0;
}

.products .box .card .products_text h3{
    margin: 7px 0;
}

.products .box .card .products_text .products_star{
    color: orange;
    margin-bottom: 19px;
    cursor: pointer;
}

.products .box .card .products_text .btn{
    text-decoration: none;
    padding: 10px 20px;
    background: linear-gradient(to right, #c72092 , #6c14d0);
    color: white;
}




/*Services*/

.services{
    width: 73%;
    margin: 90px auto;
    text-align: center;
    padding: 80px 0 10px 0;
}

.services h1{
    font-size: 60px;
    text-transform: uppercase;
}

.services h1 span{
    margin-left: 15px;
    background: linear-gradient(to left, #c72092 , #6c14d0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;    
}

.services .services_cards{
    width: 80%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    top: 50px;
}

.services .services_box i{
    font-size: 60px;
    color: orange;
    margin: 20px 0;
    cursor: pointer;
}

.services .services_box h3{
    margin-bottom: 12px;
    font-size: 19px;
}

.services .services_box p{
    text-align: center;
    color: #919191;
    margin-bottom: 60px;
}



/*Footer*/

footer{
    width: 100%;
    
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

    <section>
        <nav>
            <div class="logo">
                <h1>Grocer<span>y</span></h1>
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                
            </ul>
            
            <div class="icons">
                <a href="cart.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <?php
                        include 'conn.php';
                        $sql = "SELECT count(*) FROM `cart` ";
                        $que = mysqli_query($con,$sql);

                        // print_r($que);
                        while ($row = $que->fetch_assoc()){
                            echo "<sup>" .$row['count(*)']."</sup>";

                        }

                    ?>
                </a>

                <a href="loginform/login.html"><i class="fa-solid fa-user"></i></a>
            </div>

            <form action="search.php" method="GET" class="search_bar">
                 <input type="text" name="query" placeholder="Search products...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>

        </nav>

        <div class="main" id="Home">
            <div class="main_content">
                <div class="main_text">
                    <h1>Grocery<br><span>Shopping</span></h1>
                    <p>
                        A convenience shop is a small store that stocks a range of everyday items such as groceries, snack foods, candy, toiletries, soft drinks. They differ from general stores and village shops in that they are not in a rural location and are used as a convenient supplement to larger shops.
                    </p>
                </div>
                <div class="main_image">
                    <img src="./all-img/uhome.png">
                </div>
            </div>
            <div class="social_icon">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div class="button">
                <a href="Product.php">SHOP NOW</a>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>

    </section>


    <!--Products-->

    <div class="products" id="Products">
        <h1>Products</h1>

        <div class="box">
            <div class="card">

                <!-- <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div> -->

                <div class="image">
                    <img src="./all-img/Dry_fruits_and_nuts.webp">
                </div>

                <div class="products_text">
                    <h2>Dry , fruits and nuts</h2>
                    <!-- <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <h3>$100.99</h3> -->
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="Product.php" class="btn">products</a>
                </div>

            </div>

            <div class="card">

                <!-- <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div> -->

                <div class="image">
                    <img src="./all-img/Food&Beverages.jpg">
                </div>

                <div class="products_text">
                    <h2>Food & Beverages</h2>
                    <!-- <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <h3>$200.99</h3> -->
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="Product.php" class="btn">products </a>
                </div>

            </div>

            <div class="card">

                <!-- <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div> -->

                <div class="image">
                    <img src="./all-img/Oil_and_Masala.webp">
                </div>

                <div class="products_text">
                    <h2>Oil and Masala</h2>
                    <!-- <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                    <h3>$175.99</h3> -->
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="Product.php" class="btn">products</a>
                </div>

            </div>

            <div class="card">


                <div class="image">
                    <img src="./all-img/Atta__Dals_and_Rice.webp">
                </div>

                <div class="products_text">
                    <h2> Atta , Dals and Rice </h2>
                    <!-- <p>
                       Atta , Dals and Rice .
                    </p> -->
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="Product.php" class="btn">products</a>
                </div>

            </div>


        </div>
    </div>



    <!--Services-->

    <div class="services" id="Servises">
        <h1>our<span>services</span></h1>

        <div class="services_cards">
            <div class="services_box">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Fast Delivery</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="services_box">
                <i class="fa-solid fa-rotate-left"></i>
                <h3>10 Days Replacement</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="services_box">
                <i class="fa-solid fa-headset"></i>
                <h3>24 x 7 Support</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </div>
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
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>                    
                </div>
            </div>


        </div>
    </footer>

    
</body>
</html>