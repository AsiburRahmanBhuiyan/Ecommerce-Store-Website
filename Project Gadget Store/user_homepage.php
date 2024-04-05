<?php
	session_start();
	require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="common.css">

</head>
<body>
  
    <!-- NAVIGATION -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
        <div class="container-fluid">
        <img src="image/logo2.jpg" width = "40" height = "40"alt="">
        <!-- NAME -->
        Gadget Store
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
				<li class="nav-item">
                        <a class="nav-link"  href="user_homepage.php" style="color: gray;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="user_iphone.php">Phone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="user_macbook.php">Laptop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="user_ipad.php">Tab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="user_watch.php">Watch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="user_airpods.php">TWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="user_accessories.php">Accessories</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link"  href="user_profile.php">Profile</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link"  href="contactform.php">Contact</a>
                    </li>



                    <li class="nav-item">
						            <li class="nav-item">
                        <form method="post">
                        <div class= "searchBox">
                          <input type="text" class= "searchText" name="search" placeholder = "Type to search...">
                          <a href = "#" class = "searchBtn"><i class="far fa-search"></i></a>
						</form>
							<?php	
							if($_SERVER['REQUEST_METHOD'] == "POST")
								{
									//something was posted
									$device=$_POST['search'];
									$iphone="iphone";
									$macbook="macbook";
									$ipad="ipad";
									$airpods="airpods";
									$watch="watch";
									$accessories="accessories";
									if($device === $iphone){
										header("Location: user_iphone.php");
										die;
									}
									elseif($device === $macbook){
										header("Location: user_macbook.php");
										die;
									}
									elseif($device === $ipad){
										header("Location: user_ipad.php");
										die;
									}
									elseif($device === $airpods){
										header("Location: user_airpods.php");
										die;
									}
									elseif($device === $watch){
										header("Location: user_watch.php");
										die;
									}
									elseif($device === $accessories){
										header("Location: user_accessories.php");
										die;
									}
								}	
							?>
					</div>
                    </li>
					<li class="nav-item">
                        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
                    </li>
            </ul>
          
        </div>
      </nav>

    <section id="home">
      <div class="container">
       <!-- <p style="font-size: 70px">Welcome to Gadget Store</p> -->
      </div>
      <div class="typewriter">
        <!-- <center><img src="image/apple-logo-grey.png" alt="" style="width: 50%; padding-top: 100px;"> <br></center> -->
        <div class="pointer-fluid typewriter-text"><p style="text-align:center;">Asibur|Nisarga|Fahim</p></div>
      </div>

    </section>
    <footer class="mt-5 py-5">
      <div class="row ">
        <div class="footer-one col-lg-12 col-md-6 col-12">
          <p style="text-align: center; color: white; font-size: 30px">Gadget Store Bangladesh</p>
          <p style="text-align: center; color: #d8d8d8; font-size: 15px;">
          Technology has become a part of our daily lives and for a huge portion of our life, we are dependent on tech products daily. There is hardly a home in Bangladesh without a tech product. This is where we come in. Gadget Store Bangladesh Ltd had started as a Tech product shop way back in March 2007. We focused on giving the customers the best service possible. This is why it is one of The most trusted names in the tech industry of Bangladesh today. After a long 15-year journey; Gadget Store Bangladesh Ltd. was certified with the renowned "ISO 9001:2015 certification" because of the best Quality control management system. As an "ISO 9001:2015 certified" organization; Gadget Store Bangladesh Ltd. is now up to the international standard that specifies a quality management system (QMS). This Certification denotes that this organization consistently maintains all sorts of regulatory requirements to provide products and services for meeting all sorts of customer requirements.
          </p>
        </div>
      </div>
      <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-12 col-md-6 col-12">
                <center>
                    <a href="https://www.facebook.com/"><img src="image/facebook.png" alt="" width="100"></a>
                    <a href="https://www.instagram.com/"><img src="image/logo-instagram-png-41284.png" alt="" width="70"></a>
                    <a href="https://www.twitter.com/"><img src="image/twitter-512.png" alt="" width="80"></i></a>
                </center>

                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p style = "text-align: center; color: white;">Bashundhara City Shopping Complex, Panthapath, Dhaka-1205</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p style = "text-align: center; color: white;">Customer Service: 09678-666777</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p style = "text-align: center; color: white;">contact@admin.com.bd</p>
                </div>
            </div>

        </div>
        <div class="copywrite mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-12 col-md-6 col-12 text-nowrap">
                    <p>Prices and offers are subject to change. © 2022. All Rights Reserved.  </p>
                </div>

            </div>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>