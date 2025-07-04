
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav-bar</title>
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
            color: black;
        }

        section nav .icons i:hover{
            color: #c72092;
        }
        sup{
            font-size: 18px;
        }
            /* seach baar */
        .form-input {
  position: relative;
}

input[type="search"] {
  padding: 8px 20px;
  border: 2px solid #ccc;
  border-radius: 20px;
  outline: none;
}

.search-btn {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  background-color: #ccc;
  border: none;
  padding: 5px;
  border-radius: 50%;
  cursor: pointer;
}

.search-btn:hover {
  background-color: #bbb;
}

.fa-search {
  color: #333;
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

    </section>

</body>
</html>
                