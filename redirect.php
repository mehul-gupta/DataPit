<?php
    if(isset($_REQUEST['user_id'])){
        session_start();
        $servername = "localhost";
            $username = "root";
            $password = "root1";
            $dbname = "datapit";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            else{

            }

            $query="select email from user where username='".$_REQUEST['user_id']."' and password='".$_REQUEST['pass']."'";
            $result=mysqli_query($conn,$query);
            $arr=mysqli_fetch_array($result);
    if($arr){echo "<br>Login Successful !!";
             $_SESSION['lsucc']=1;
             $_SESSION['username']=$_REQUEST['user_id'];
            $_SESSION['password']=$_REQUEST['pass'];
            header("refresh:0;url=profile.php");
            die();
            
            }
    else{echo "Login Unsuccesfull";}
    }
?>