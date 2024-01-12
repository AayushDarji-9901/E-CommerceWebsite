<?php
include('../includes/connect.php');
include('../functions/common_function.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- Font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Css file -->
     <link rel="stylesheet" href="../style.css">
     <style>
        body{
            overflow-x: hidden;
        }
        .admin_image{
            width: 100px;
            object-fit: contain;
        }
        .footer{
            position: absolute;
            bottom: 0;
        }
     </style>
</head>
<body>
     <div class="container-fluid p-0">
        <!-- First child -->
        <nav class="navbar navbar-expand navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/cart.jpg" alt="logo" class="logo" height="250px">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
              </nav>
            </div>
        </nav>
        <!-- Second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>

        <!-- Third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center tc">
                <div class="p-3">
                    <a href="#"><img src="../image/person.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center b">
                    <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>
        <!-- fourth child -->
        <div class="container my-3">
          <?php
          if(isset($_GET['insert_category'])){
            include('insert_categories.php');
          }
          if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
          }
          if(isset($_GET['view_products'])){
            include('view_products.php');
          }
          if(isset($_GET['edit_products'])){
            include('edit_products.php');
          }
          if(isset($_GET['delete_products'])){
            include('delete_products.php');
          }
          if(isset($_GET['view_categories'])){
            include('view_categories.php');
          }
          if(isset($_GET['view_brands'])){
            include('view_brands.php');
          }
          if(isset($_GET['edit_category'])){
            include('edit_category.php');
          }
          if(isset($_GET['edit_brands'])){
            include('edit_brands.php');
          }
          if(isset($_GET['delete_category'])){
            include('delete_category.php');
          }


          ?>
        </div>

        <!-- last child -->
        <!-- <div class="bg-info p-3 text-center footer">
      <p>All rights reserved @-Designed by Aayush-2023</p>
</div> -->

<?php  include("../includes/footer.php") ?>
    


     </div>

    <!-- Bootstrap js link -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>