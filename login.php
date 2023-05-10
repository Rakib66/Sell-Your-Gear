<!DOCTYPE html>
<html>
<head>
      <title>Sell Your Gear</title>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
       <style type="text/css">
            body{
                  background: linear-gradient(rgba(0, 0, 50, 0.5),rgba(0, 0, 50, 0.5)),url(t.jpg);
                  background-size: cover;
                  background-position: center;

            }
            .login-box{
                  max-width: 700px;
                  float: none;
                  margin: 150px auto;
            }
            .login-left{
                  background: rgba(211, 211, 211, 0.5);
                  padding: 30px;
            }
            .login-right{
                  background: #fff;
                  padding: 30px;
            }
            .form-control{
                  background-color: transparent !important;
            }
            a{
                  color: #fff !important;
            }
            h1{
                  color: #fff !important;
                  margin-top: 200px !importnat;
                  text-align: center;
                  text-transform: uppercase; 
            }

       </style>   

      
</head>
<body>
      <div class="container">
       <div class="login-box">      
      <div class="row">
      <div class="col-md-6 login-left">
            <h2>Login Here</h2>
            <form action="validation.php" method="post">
                  <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                  </div>
                  <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary"> Login </button>
            </form>
      </div>

             <div class="col-md-6 login-right">
            <h2>Registration Here</h2>
            <form action="registration.php" method="post">
                  <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                  </div>
                  <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary"> <a class="nav-link" href="login.php"> Register</a></button>
            </form>
      </div>      
      </div>            
    </div>
   
      </div>

</body>
</html>