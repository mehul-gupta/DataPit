<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="css/main.css">

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
/*            background-image:url('bg.jpg');*/
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
       
        .cell100
        {
            text-align: center;
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
      <li><a href="logout.php">Logout</a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>
      </div>
    <div class="container">
    <?php if(isset($_SESSION['username'])){

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

$query="select * from user_details where username='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
$arr=mysqli_fetch_array($result);
    


?>
     <div class="row" style="margin-bottom:30px;">
        <div class="col-sm-4">
        <?php if($arr['profile_image']=='0'){

            ?>
            <img src="profile.png" width="200px">
            
            <?php
        } ?>
        </div>
        <div class="col-sm-8">
            <span style="font-size:50px;"><?php print_r($arr['name']); ?></span><br>
            <span style="font-size:20px;"><?php print_r($arr['type']); ?></span><br><br>
            <span style="font-size:16px;"><i><a href="file_upload.php">Upload new file</a></i></span><br>
           
            <?php
        
            ?>
        </div>
    </div>


   
        <div class="row" style=" margin:auto;">
           <div class="table100 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
                                <?php
                                $query="select * from files where username='".$_SESSION['username']."'";
                                $result=mysqli_query($conn,$query);
                                // echo $query;
                                // print_r($result);
    
                                
                                ?>
									<th class="cell100 column1">File Name</th>
									<th class="cell100 column2">Type</th>
									<th class="cell100 column3">Size</th>
									<th class="cell100 column4">Action</th>
								
								</tr>
							</thead>
						</table>
					</div>
                    <?php

} ?>
					<div class="table100-body">
						<table>
							<tbody>
                            <?php
                                while($row = $result->fetch_assoc()) {
                            ?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $row['file_name']; ?></td>
									<td class="cell100 column2"><?php echo $row['type']; ?></td>
									<td class="cell100 column3"><?php echo $row['size']; ?></td>
									<td class="cell100 column4"><a href="?del=<?php echo $row['file_name']; ?>">Delete</a> | <a href="upl/<?php echo $row['file_name']; ?>">View</a></td>
									
								</tr>
                                    <?php } ?>

                            <?php
                            if(isset($_REQUEST['del'])){
                                $delname=$_REQUEST['del'];
                                
$query="delete from files where username='".$_SESSION['username']."' and file_name='$delname'";
$result=mysqli_query($conn,$query);
// header("Location: profile.php");
                            }
                            ?>

								
								

							</tbody>
						</table>
					</div>
				</div> 
        </div>
    
    
    </div>
     <div class="footer" style="text-align:center; color:#fff; padding-top:10px; font-size:18px;">
      &copy;   Data Pit
    </div>
    
    
    </body>
    
</html>