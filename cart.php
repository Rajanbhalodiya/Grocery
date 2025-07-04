<?php
   session_start();

    if(!isset($_SESSION["alogin"]) || $_SESSION["alogin"] != true)
    {
      header("location: loginform/login.html");
      exit;
    }
    if(isset($_SESSION["userid1"]) && $_SESSION["userid1"]==true)
    {
        header("location:cart.php");
        exit;
    }
?>

<?php  
    include "conn.php";

    if(isset($_POST['updet'])) {
        $id = $_POST['c_id']; // Assuming you have an input with name c_id in your form
        $num = $_POST['number'];
        $c_quan = 1; // Set the default quantity

        $ins = "UPDATE `cart` SET `c_quan`='$num' WHERE `c_id`='$id'";
        $que = mysqli_query($con, $ins);

        // Redirect to prevent form resubmission
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
?>


<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />


      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

      <style>
        body{
            padding-top: 70px;
        }
         .total
         {
            margin-left: 90px;
            margin-top: 0px;
            /* border: 1px solid black; */
            margin-right: 80px;
         }
         .price
         {
            padding-left: 71%;
         }


         /* css page  */

.inner_page_head {
    background: #f7444e;
    text-align: center;
    color: #fff;
    padding-top: 48px;
    padding-bottom: 40px;
}

.inner_page_head h3 {
    font-size: 42px;
    font-weight: 800;
}
Footer

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


.container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .button:hover {
            background-color: #007bff;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        select, input[type="submit"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            margin-bottom: 10px;
        }



      </style>


   </head>
   <body class="sub_page">
      <div class="hero_area">
        
      <!-- header section strats -->

      <?php include 'nav-bar.php'; ?>

      <!-- end header section -->

      </div>
      
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Cart Products</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- client section -->
      <section class="client_section layout_padding">
         <div class="container">
            
         <table class="table">
         <thead>
              <tr>
               <th scope="col">id</th>
               <th scope="col">name</th>
               <th scope="col">des</th>
               <th scope="col">quan</th>
               <th scope="col">prise</th>
               <th scope="col">imag</th>
               <th scope="col">Total</th>
               <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
            <?php 

                include "conn.php";

                
               //  $enroll=$_SESSION["enroll"];
                $selc="SELECT * FROM `cart` ";
                $resc=mysqli_query($con,$selc);

                $num=1;
                $grand_total = 0;

                while($row=mysqli_fetch_array($resc))
                {
                  
            ?>
            <tr>
               <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <td><?php echo $row['c_id']; ?></td>
                  <td><?php echo $row['c_name']; ?></td>
                  <td><?php echo $row['c_des']; ?></td>
                  <td>
                     <input type="number" name="number" value="<?php echo $row['c_quan']; ?>" min="1">
                     <input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>"> <!-- Hidden input for item ID -->
                     <button type="submit" name="updet">Update</button> <!-- Use type="submit" to submit the form -->
                  </td>
                  <td>₹<?php echo $row['c_prise']; ?></td>
                  <td><img src="admin_login/uploaded/img/<?php echo $row['c_imag']; ?>" alt="" height="50px"; margin-top="-20px";/></td>
                  <td>₹<?php echo $subtotal = number_format((float)$row['c_prise'] * (float)$row['c_quan']); ?>/-</td>
                  <td>
                     <button class="remove" name="remove"><a href="delet-cart.php?c_id=<?php echo $row['c_id']; ?>">Remove</a></button>
                  </td>
               </form>

            </tr>

            
            <?php
             $grand_total = $grand_total+($row['c_prise']*$row['c_quan']); 
            $num++;
                }
            ?>            
            </tbody>
         </table>
            
         </div>
      </section>
      <hr>

      <section>
      <h4 class="total table">Grand Total <span class="price">₹<?php echo $grand_total ?></span></h4>

      <hr>
      <div class="container">
        <a href="Product.php" class="button">Continue Shopping</a>
        <!-- <form method="post" >
            <label for="payment_option">Select Payment Option:</label>
            <select id="payment_option" name="payment_option">
                <option value="credit_card">Cod</option>
                <option value="Online">Online</option>
            </select>
            <input type="submit" name="submit" value="Proceed to Payment" class="button">
        </form> -->
        <a href="javascript:void(0)" data-productid="<?php echo $data['c_id'];?>" data-productname="<?php echo $data['c_name'];?>" data-amount="<?php echo $data['c_prise'];?>" class="btn btn-primary buynow" >Buy Now</a>
    </div>

    
      </section>
      <!-- end client section -->
     
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

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

$(".buynow").click(function()
{

var amount=$(this).attr('data-amount');	
var productid=$(this).attr('data-productid');	
var productname=$(this).attr('data-productname');	
	
var options = {
    "key": "rzp_test_zHhNFsppG7bIjH", // Enter the Key ID generated from the Dashboard
    "amount": <?php echo $grand_total ?>*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "name": "grocery stor",
    "description": productname,
    "image": "./download.png",
    "handler": function (response){
        var paymentid=response.razorpay_payment_id;
		
		$.ajax({
			url:"payment-process.php",
			type:"POST",
			data:{product_id:productid,payment_id:paymentid},
			success:function(finalresponse)
			{
				if(finalresponse=='done')
				{
					window.location.href="http://localhost/php-practical-work/payment-gateway/razorpay/success.php";
				}
				else 
				{
					alert('Please check console.log to find error');
					console.log(finalresponse);
				}
			}
		})
        
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
 e.preventDefault();
});
</script>

    
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>


       <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    
    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
   </body>
</html>