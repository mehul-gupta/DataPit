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
        body{
            background-color:#e3e3e3; 
        }
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
            margin-bottom:50px;
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
            margin:0px;
            margin:5px;
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
      <li ><a href="index.html">Home</a></li>
      <li><a href="register.html">Register</a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>
   
    </div>
    
        <div style="font-size:20px;height:400px; padding:20px; width:100%;  color:#263238; border:0px solid #e3e3e3;border-radius:0px;">
        <form action="register_redirect.php">
            
            <span style="font-size:35px;"><b>Upload a file</b></span><br><br>
            <input type="file" name="file">
            <select>
                <option>Choose method of compression</option>
                <option>Method 1</option>
                <option>Method 2</option>
                <option>Method 3</option>
            </select><br>
            <button type="submit" style="padding:5px; font-size:25px; margin-top:10px;background:transparent;color:#263238; border:1px solid #263238;border-radius:15px;"><b>Upload</b></button>
      
        </form></div>
    
    
    
    
    </body></html>