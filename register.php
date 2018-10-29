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
    opacity: 1;
    border-bottom:0px;
    
}
        #navv li a{
            color:#fff;
        }
        
        #top{
            width:100%;
            height:500px;
             
            
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
        
    </style>
    
    <script>
    
    function validate() {
    var x = document.forms["register"]["name"].value;
    var y = document.forms["register"]["email"].value;
    var z = document.forms["register"]["password"].value;
    var p = document.forms["register"]["re-password"].value;
    
    if (x == "") {
        alert("Form must be filled out");
        return false;
    }
    if (y == "") {
        alert("Form must be filled out");
        return false;
    }
    if (z == "") {
        alert("Form must be filled out");
        return false;
    }
    if (p == "") {
        alert("Form must be filled out");
        return false;
    }
    if(z!=p){
         alert("Passwords don't match");
        return false;
    }
    
}
    </script>
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
  
    
     <div style="font-size:20px;height:400px; padding:20px; width:100%; text-align:center; color:#263238; border:0px solid #e3e3e3;border-radius:0px;">
        <form name="register" action="" onsubmit="return validate()">
            
            <span style="font-size:35px;"><b>Register</b></span><br><br>
            <input type="text" placeholder="Name" name="name"><br>
            <input type="text" placeholder="Username" name="username"><br>
            
            <input type="email" placeholder="E-Mail" name="email"><br>
            <input type="password" placeholder="Password" name="password"><br>
            <input type="password" placeholder="Re-Password" name="re-password"><br>
            <a href="index.php">Login?</a><br>
            <input type="submit"  style="padding:5px; font-size:25px; margin-top:10px;background:transparent;color:#263238; border:1px solid #263238;border-radius:15px;">
      
        </form></div>
</div>
    <?php 
        if(isset($_REQUEST['email'])){




            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "datapit";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            else{

            }

            $query="select * from user where email='".$_REQUEST['email']."'";
            $result=mysqli_query($conn,$query);
            $ct=mysqli_num_rows($result);
            $user=$_REQUEST['username'];
            $pass=$_REQUEST['password'];
            $email=$_REQUEST['email'];
            $name=$_REQUEST['name'];
            $type="Premium";
                        
            if($ct>0){
                echo "User exists!";
            }
            else{
                $query="insert into user values('$user','$pass','$email')";
            $result=mysqli_query($conn,$query);
            $query="insert into user_details values('$user','$name','$type')";
            $result=mysqli_query($conn,$query);
            echo "User Successfuly created!<br>Now login";
            }
    //         $result=mysqli_query($conn,$query);
    //         $arr=mysqli_fetch_array($result);
    // if($arr){echo "<br>Login Successfull";
    //          $_SESSION['lsucc']=1;
    //          $_SESSION['username']=$_REQUEST['user_id'];
    //         $_SESSION['password']=$_REQUEST['pass'];
    //         header("refresh:0;url=profile.php");
    //         die();
            
    //         }
    //         else{echo "Login Unsuccesfull";}
    //         }






        }


?>
    
    
    </body>
</html>



