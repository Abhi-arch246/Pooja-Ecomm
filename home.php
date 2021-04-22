<?php 
session_start(); 
include 'required/conn.php';
if (!isset($_SESSION['email'])) {
  header('location:index.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pooja Store | Home area</title>
  <?php include 'required/scripts.php' ?>
  <style type="text/css">
    header {
      width: 100%;
      height: 90vh;
      background:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.3)),url("https://images.pexels.com/photos/5729118/pexels-photo-5729118.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940") no-repeat;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: scroll;
}

  </style>

  
</head>
<body>
  <header>
      <nav>
        <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>
        <a href="home.php" class="logo">Pooja Store</a>
        <div class="menu">
          <ul>
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="shopping.php">Shopping</a></li>
            <li><a href="mycart.php">My Cart</a></li>
            <li><a href="myorders.php">My Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
      <h1 class="overlay-text ml-1 text-center animated zoomIn">Welcome</h1>
      <?php 
      $email=$_SESSION['email'];
      $sql="SELECT * from users WHERE email='$email'";
      $query=mysqli_query($conn,$sql);
      $fetch_name=mysqli_fetch_assoc($query);	
      if($fetch_name['type']== 0){
        ?>
        <h1 class="overlay-text ml-1 text-center animated zoomIn"><?php echo $fetch_name['name'] ?></h1>
        <?php
      }else{
        ?>
        <h1 class="overlay-text ml-1 text-center animated zoomIn"><?php echo $fetch_name['name'] ?> ℗</h1>
        <?php
      }
      ?>
      
      <div class="text-center">
      <a href="#first" class="primary-btn">See More</a>
      </div>
    </header>
    <!-- Latest products -->
    <section id="first" class="products">
     <div class="content">
      <div class="container-fluid">
        <h1 class="latest text-center">Latest Products</h1>
        <div class="row mt-4" data-aos="fade-up">
          
        <?php 
        $sql="SELECT * FROM latestproducts";
        $query=mysqli_query($conn,$sql);
        while ($result=mysqli_fetch_array($query)) {
          ?>
          <a href="itemdes1.php?id=<?php echo $result['pid'] ?>" class="custom-card">
            <div class="col-lg-3 col-sm-6 mb-2">
              <div class="card-deck mb-3">
              <div class="card shadow-lg">
                <img class="card-img-top img-fluid mt-1" src="<?php echo $result['image'];?>">
                <div class="card-body text-center">
                  <h4 class="card-title"><?php echo $result['title'];?></h4>
                  <h6 class="card-subtitle"><?php echo $result['subtitle'];?></h6>
                  <h5 class="mt-2">
                    <small><s class="text-secondary">Rs.<?php echo $result['arate'];?></s></small>
                    <span class="price">Rs.<?php echo $result['brate'];?></span>
                  </h5>
                </div>
                  <div class="card-footer">
                  <a href="#" class="btn btn-primary btn-block">Buy Now</a>
                  </div>
              </div>
            </div>
          </div>
        </a>

       <?php
        }
         ?>
        </div>
      </div>
    </div>
    </section>
       <!-- Offer time section -->
        <section class="bg-danger p-4">
          <div class="container-fluid" data-aos="flip-left">
            <div class="row align-items-center ">
                <div class="col-lg-6 col-md-6">
                    <div class="text-center">
                        <img class="img-fluid" src="https://i.ya-webdesign.com/images/playstation-4-png-8.png">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="text-center mt-4">
                    <div class="text-light font-weight-bolder">
                        <h2>Weekend Sale on</h2>
                        <h2>60% Off All PlayStation Products</h2>
                    </div>
                        <div class="d-flex p-5">
                            <h3 class="pr-2">14 Days :</h3>
                            <h3 class="pr-2"> 38 Hours :</h3>
                            <h3 class="pr-2"> 22 Minutes :</h3>
                            <h3 class="pr-2"> 50 Seconds</h3>
                            </div>
                          </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Email Address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="text-decoration-none input-group-text btn_2" id="basic-addon2">Book now</a>
                            </div>
                        </div>
                      </div>
                   </div>
               </div>
           </div>
      </section>
         <!-- Features Section -->
    <section>
        <div class="mt-5 mb-5">
            <div class="container-fluid">
                <div class="row card-columns" data-aos="fade-right">
                    <div class="col-lg-4">
                        <div class="card shadow-lg text-center">
                            <img class="mx-auto" src="images/icons/shipped.png" width="150">
                            <h4 class="mt-1">Free shipping</h4>
                            <p class="m-2">As our member enjoy fast, FREE delivery on over 100 million items. Also, gain early access to deals and exclusive brands.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-lg text-center">
                            <img class="mx-auto" src="images/icons/money.png" width="150">
                            <h4 class="mt-1">100% Money back </h4>
                            <p class="m-2">A satisfaction gesture, is essentially if a buyer is not satisfied with a product or service, a refund will be made.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-lg text-center">
                            <img class="mx-auto" src="images/icons/conversation.png" width="150">
                            <h4 class="mt-1">Online support 24/7</h4>
                            <p class="m-2">Our 24x7 online support is one of the best in the leading generation.We Provide quality services at anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
  <!-- Footer Section Begin -->
  <?php include 'required/footer.php' ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    $(document).ready(function () {
      $(".menu-icon").on("click", function () {
            $("nav ul").toggleClass("showing");
      });
    });
  AOS.init({
    duration:1200
  });
  </script>
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="htpps://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="main.js"></script>
</body>
</html>
