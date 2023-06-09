<?php 

  include("includes/header.php");
 if(isset($_POST['SUBMIT']))
 {
 	$username=$_POST['uname'];
 	$email=$_POST['mail'];
 	$password=$_POST['pass'];
 	$r_password=$_POST['rpass'];
 }



?>

<html>
<head>
<title> Sell Your Gear </title>   
    <style type="text/css">
    	body
{
    margin: 0;
    padding: 0;
    background: #efefef;
    font-size: 16px;
    color: #777;
    font-family: sans-serif;
    font-weight: 300;
}

#login-box
{
    position: relative;
    margin: 5% auto;
    height: 400px;
    width: 600px;
    background: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
}

.left-box
{
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;    
}

h1
{
    margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 28px;
}

input[type="text"],
input[type="password"]
{
    display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 32px;
    border: none;
    outline: none;
    border-bottom: 1px solid #aaa;
    font-family: sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
}

input[type="submit"]
{
    margin-bottom: 28px;
    width: 120px;
    height: 32px;
    background: #f44336;
    border: none;
    border-radius: 2px;
    color: #fff;
    font-family: sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.2s ease;
    cursor: pointer;
    
}

input[type="submit"]:hover,
input[type="submit"]:focus
{
    background: #ff5722;
    transition: 0.2s ease;
}

.right-box
{
    position: absolute;
    top: 0;
    right: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;
    background-image: url(image1.jpg);
    background-size: cover;
    background-position: center;
}

.or
{
    position: absolute;
    top: 180px;
    left: 280px;
    width: 40px;
    height: 40px;
    background: #efefef;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    line-height: 40px;
    text-align: center;
}

.right-box .signinwith
{
    display: block;
    margin-bottom: 40px;
    font-size: 28px;
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
}


button.social
{
    margin-bottom: 20px;
    width: 220px;
    height: 36px;
    border: none;
    border-radius: 2px;
    color: #fff;
    font-family: sans-serif;
    font-weight: 500;
    transition: 0.2s ease;
    cursor: pointer;
}

.facebook
{
    background: #32508e;
}
.twitter
{
    background: #55acee;
}
.google
{
    background: #dd4b39;
}

    </style>
</head>
<body>

    <div id="login-box">
      <div class="left-box">
        <h1> Sign Up</h1>
          
          <input type="text" name="username" placeholder="Username"/>
          <input type="text" name="email" placeholder="Email"/>
          <input type="password" name="password" placeholder="Password"/>
        
          <input type="password" name="password2" placeholder="Retype password"/>
        
          <input type="submit" name="submit-button" value="Submit"/>
        
        </div>
        <div class="right-box">
          <span class="signinwith">Sign in with<br/>Social Network     </span>
        
        <button class="social facebook">Log in with Facebook</button>    
        <button class="social twitter">Log in with Twitter</button> 
        <button class="social google">Log in with Google+</button> 
            
        
        </div>
        <div class="or">OR</div>
    </div>
    
</body>    
</html>



