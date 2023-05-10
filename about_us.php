<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sell Your Gear</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">

    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">
    
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
   background-image: url('img/back.jpg');
   background-size: cover;
   background-repeat: no-repeat;
   background-color: rgba(0,0,0,0.3);
   color: #fff;
  font-family: 'Josefin Sans', sans-serif;
}

.wrapper{
  margin-top: 10%;
}

.wrapper h1{
  font-family: 'Allura', cursive;
  font-size: 52px;
  margin-bottom: 60px;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: black;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #ccc;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 0px;
}

  </style>
</head>
<body>
 
  <?php include('includes/header.php'); ?>
    
    <div class="wrapper">
  <h1>About   Us</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="./img/o.jpg" alt="Team_image">
      </div>
      <h3>Rakibul Kabir</h3>
      <p class="role"></p>
      

      <p>Check out our collection of guitars to fulfill your desire & grab your favorite guitar online from us.
      </p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="./img/z.jpg" alt="Team_image">
      </div>
      <h3>Zubaer Ahmed</h3>
      <p class="role"></p>
      <p>If you are looking for the most attractive deals on guitar price in Bangladesh then we offers you the best solution in Bangladesh. we have the widest collection of used guitar. You will find a lot of guitars to choose from.</p></div>
    <div class="team_member">
      <div class="team_img">
        <img src="./img/s.jpg" alt="Team_image">
      </div>
      <h3>Sourav Sutradhar</h3>
      <p class="role"></p>
      <p>Happy shopping with us \m/</p>
    </div>
  </div>
</div>  

 <footer class="footer-area">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="./img/bob.png" alt="logo"></a>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">Follow US</h5>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        
                        <a href="#"><span style="color: var(--primary-color);"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>
</body>
</html>