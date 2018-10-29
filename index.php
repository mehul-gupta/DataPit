<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
        .navbar {
    border-radius: 0px;
    background-color:#263238;
    margin-bottom: 0px;
    opacity: 0.7;
    border-bottom:0px;
    
    }
        #navv li a{
            color:#fff;
        }
        
        #top{
            width:100%;
            height:500px;
            background-color:#e3e3e3; 
            background-image:url('bg.jpg');
            padding:0px;
            color:#fff;
        }
        table#login{
            margin-top: 50px;
        }
        
        table#login tr td{
            font-size:20px;
            padding:10px;
        }
        input{
            border:3px solid #e3e3e3;
            padding:10px;
            margin:5px;
        }
        .footer{
            width:100%;
            margin-top:100px;
            height:50px;
            background-color:#202020;
        }
    </style>
</head>
<body>

  
<div class="container-fluid" id="top">
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#fff;">DATAPIT</a>
    </div>
    <ul class="nav navbar-nav" id="navv">
      <li ><a href="#">Home</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>
    <div class="row">
        <div  style="margin-top:50px;padding-left:30px; text-align:left;">
  <h3 style="font-size:100px;"><b>Data Pit</b></h3>
            <p style="font-size:30px;">Store data intelligently.</p>
        </div>
       
    </div>
    
    
</div>
    
    <div class="container" style="padding-top:40px;">
        <div class="row">
            <div class="col-sm-6" style="font-size:20px; ">
                Features include
                <br>
                <ul>
                    <li>Cloud data storage</li>
                    <li>File compression</li>
                    <li>File sharing</li>
                </ul>
            </div>
            <div class="col-sm-6" style="font-size:20px; background-color:#e3e3e3; padding:10px; text-align:center;">
                <form action="redirect.php">
                    <b>Login</b><br>
                    <input type="text" name="user_id" placeholder="User ID"><br>
                    <input type="password" name="pass" placeholder="Password"><br>
                    <input type="submit">
                </form>
            </div>
            
        </div>
    </div>
    
    <div class="footer" style="text-align:center; color:#fff; padding-top:10px; font-size:18px;">
      &copy;   Data Pit
    </div>
</body>
</html>
