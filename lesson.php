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
	body{
	font-family: Arial;
	margin:0;
	padding:20px;
	background-color: #f1f1f1;
}
*{
	box-sizing: border-box;
}
.row:after{
	content: '';
	display: table;
	clear: both;
}
header{
	background-color: #ffffff;
	padding:30px;
}
header h1{
	text-align: center;
	font-size:60px;
	color:#000000;
	margin:1.5 0px;
}

h2{
	color:#000000;
margin:1.5 0px;	
}
.left-column{
float: left;
width: 75%;	
}

.right-column{
 width: 25%;
 float: right;
 padding-left:20px;
}
.card{
	padding: 20px;
	background-color: #ffffff;
 margin-top:20px;
}

.card img{
	width: 100%;
}


.right-column .card img{
	margin-bottom: 10px;
}


footer{
	background-color: #dddddd;
	padding: 20px;
	text-align: center;
	margin-top: 20px;
}

/*responsive */

@media(max-width:800px){
	.left-column,.right-column{
    width: 100%;
    padding: 0px;
	}
}


</style>
<body>

 <header>
 	<h1>LESSON</h1>
 </header>
 <div class="row">
 	<div class="left-column">
 	  <div class="card">
 		<h2>Basic Chords</h2>
 		<h5></h5>
 		<a href="https://www.youtube.com/watch?v=yh6sPqDEZCY">For Beginner</a>
 		
 	  </div>
 	  <div class="card">
 		<h2>Bar Chords</h2>
 		
 		<a href="https://www.youtube.com/watch?v=JFhNwARCZhU">Basic Bar chords</a>
 		
 	  </div>
 	</div>

 	<div class="right-column">
 		<div class="card">
 			 <h2>Power Chords</h2>
 			<a href="https://www.youtube.com/watch?v=ivN-vazm3qE">Basic Power chords</a>
 		</div>
 		<div class="card">
 		   <h2> For All Combinations</h2>
 		   <p>Guitar is just something I can do. So much of it now is muscle memory, just instinct. Any guitar solo should reflect the music that it's soloing over and not just be existing in its own sort of little world. The guitar is the easiest instrument to play and the hardest to play well.</p>
 		</div>
 		<div class="card">
 			<h3>Follow Me</h3>
 			<p>Some Text...</p>
 		</div>
 	</div>
 </div>
 
<footer>
	<h2>Footer</h2>
</footer>

</body>
</head>
