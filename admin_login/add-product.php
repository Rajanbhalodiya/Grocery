
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>display</title>


      <!-- fa fa icon  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
    <!--css file-->
        <link rel="stylesheet" href="./add-roduct.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    width: 100%;
    padding: 0 10px;
}

body::before {
    content: "";
    background-position: center;
    position: absolute;
    /* background: url("./bg-img.jpg") #000; */
    width: 100%;
    height: 100%;
    background-size: cover;
}

.wrapper {
    width: 400px;
    border-radius: 8px;
    padding-left: 10px;
    padding: 30px;
    text-align: center;
    border: 1px solid rgba(0, 0, 0, 0.632);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(9px);
}

form {
    display: flex;
    flex-direction: column;
}

h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #0b0b0b;
}

.input-field {
    position: relative;
    border-bottom: 2px solid #ccc;
    margin: 15px 0;
}

.input-field label {
    position: absolute;
    top: 55%;
    left: 0;
    transform: translateY(-50%);
    color: #000000;
    font-size: 16px;
    pointer-events: none;
    transition: 0.15s ease;
}

.input-field input {
    width: 100%;
    height: 40px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    color: #000000;
}
.weight {
    margin-right: -37vh;

}

.input-field input:focus~label,
.input-field input:valid~label {
    font-size: 0.8rem;
    top: 10px;
    transform: translateY(-170%);
}
.eyes{
    height: 20px;
    margin-left: 30vh;
    cursor: pointer;
}

.forget {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 25px 0 35px 0;
    color: #fff;
}


.forget label {
    display: flex;
    align-items: center;
}

.forget label p {
    margin-left: 8px;
}

.wrapper a {
    color: #151515;
    text-decoration: none;
}

.wrapper a:hover {
    text-decoration: underline;
}

.button {
    background: #000000a2;
    color: #f5efef;
    font-weight: 600;
    border: none;
    padding: 12px 20px;
    cursor: pointer;
    border-radius: 3px;
    font-size: 16px;
    border: 2px solid transparent;
    transition: 0.3s ease;
}

.button:hover {
    color: #fff;
    border-color: #fff;
    background: rgba(50, 43, 43, 0.15);
}

    </style>
  </head>
  <body>
    <section class="sidebar">
      <a href="#" class="logo">
        <i class="fa fa-slack" aria-hidden="true"></i>
        <span class="text">Admin Panel</span>
      </a>

      <ul class="side-menu top">
        <li class="active">
          <a href="display.php" class="nav-link">
            <i class="fa fa-home"></i>
            <span class="text">Product</span>
          </a>
        </li>
        <li>
          <a href="./add-product.php" class="nav-link">
            <i class="fa fa-shopping-cart"></i>
            <span class="text">add Product</span>
          </a>
        </li>
          
       
      </ul>

      <ul class="side-menu">
      <li>
          <a href="user.php">
          <i class="fa-solid fa-user"></i>
            <span class="text">User</span>
          </a>
        </li>
        <li>
          <a href="logout.php" class="logout">
            <i class="fa fa-sign-out"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>
    

    <section class="content">
    <div class="wrapper">

        <form  method="POST" enctype="multipart/form-data">
            <h2>Product Add</h2>
            
            <div class="input-field">
                <input type="text" required name="name" >
                <label>Product name</label>
            </div>
            <div class="input-field">
                <input type="file"   id="lastName" name="img">
                <label>Photos</label>
            </div>
            <div class="input-field">
                <input type="number" required name="prisce" >
                <label>Product prisce</label>
            </div>
            <div class="input-field">
                <input type="text" required name="discripstion" >
                <label>Product discripstion</label>
            </div>
             <div class="input-field">
                <input type="number" required name="quanity" >
                <label>Product quantity</label>
            </div>
             <div class="input-field">
                <select name="kg" class="weight" >
                    <option value="kg" id="1">kg</option>
                    <option value="g" id="2">g</option>
                </select>
                <label>Product weight</label>
            </div>
           
            <input type="submit" name="submit" value="Submit" class="button" />
           
        </form>
        
    </div>


    <!-- php code  -->

    
<?php

include 'conn.php';


if(isset($_POST['submit'])) 
{

    $name=$_POST['name'];
    // $img=$_POST['img'];
        $tmp_img = $_FILES['img']['tmp_name'];
        $file1 = 'uploaded/img/'.$img = $_FILES['img']['name'];
        move_uploaded_file($tmp_img,$file1);

    $prisce=$_POST['prisce'];
    $discripstion=$_POST['discripstion'];
    $quanity= $_POST['quanity'];
    $weight= $_POST['kg'];


    $que = "INSERT INTO `addproduct` ( `name`, `img`, `prisce`, `discripstion`, `quanity`, `weight`) VALUES ( '$name' , '$img' , '$prisce', '$discripstion' , '$quanity' , '$weight')";
    $res = mysqli_query($con,$que);

    
    if($res)
    {
    //     echo 'data inserted';
    //    header("location:display.php");
    echo '<script>alert("data inserted")</script>';
    echo '<script type="text/JavaScript"> window.location = "display.php" </script>';
        
    }
    else
    {
        echo '<script>alert("data not inserted")</script>';

    }

}
?>      

    </section>

  </body>
</html>