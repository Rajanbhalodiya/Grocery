

  <!DOCTYPE html>
<html lang="en">

<?php 
include 'conn.php'; 
 $q = "SELECT * FROM `addproduct` ";

 $result = mysqli_query($con,$q);
//  $result = $con->query($sql);
?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>display</title>

    <!-- Font Awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />





    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>


      <!-- fa fa icon  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <!--css file-->
    <link rel="stylesheet" href="display.css" />
  </head>
  <body>
    <section class="sidebar">
      <a href="#" class="logo">
        <i class="fa fa-slack" aria-hidden="true"></i>
        <span class="text">Admin Panel</span>
      </a>

      <ul class="side-menu top">
        <li class="active">
          <a href="#" class="nav-link">
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
      <nav>
        <a href="#" class="nav-link">Categories</a>
        <form method="#">
          <div class="form-input">
          <input type="search" id="searchInput" name="" placeholder="search..." />
            <button class="search-btn" name="" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </form>

        <a href="#" class="notification">
          <i class="fa fa-bell"></i>
          <span class="num">28</span>
        </a>

        <a href="#" class="profile">
          <img src="./admin.jpg" alt="img" />
        </a>
      </nav>

      <main>
        <div class="head-title">
          <div class="left">
            <h1>Product</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Product</a>
              </li>
              <i class="fa fa-chevron-right"></i>
              <li>
                <a href="#" class="active">Home</a>
              </li>
            </ul>
          </div>


        </div>

        
        <div class="table-data">
          <div class="order">

            <main class="app-content">
              <div class="row">
                <div class="col-md-12">
                  <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>name</th>
                              <th>img</th>
                              <th>prisce</th>
                              <th>discripstion</th>
                              <th>quantity</th>
                              <th>weight</th>
                              <th>Update</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>
          
                            <?php
        
                              if ($result->num_rows > 0) 
                              {
                                //output data of each row
                                  while ($row = $result->fetch_assoc())
                                    {
                              ?>
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td> 
                                <img src="<?php echo "uploaded/img/".$row['img']; ?>" alt="Product Image " > 
                              </td>
                              <td><?php echo $row['prisce']; ?></td>
                              <td><?php echo $row['discripstion']; ?></td>
                              <td><?php echo $row['quanity']; ?></td>
                              <td><?php echo $row['weight'];  ?></td>
                              <td><a href="updet-product.php?id=<?php echo $row['id']; ?>" > Update </a></td>
                              <td><a href="delet-product.php?id=<?php echo $row['id']; ?>"> Delete </a></td>
            
                            </tr>	
            
                            <?php		}
                              }
                            ?>

                          </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </main>
          

          </div>
        </div>
      </main>
    </section>

    <script type="text/javascript">
    $('#sampleTable').DataTable( 
	{
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
     </script>
        <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
</html>
