<?php 
session_start();


function compress_image($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}





if(isset($_SESSION['username'])){
    ?>
    <?php
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
        $user=$_SESSION['username'];
        $query="select * from user_details where username='$user'";
        $result=mysqli_query($conn,$query);
        if($r=mysqli_fetch_array($result)){
            //print_r($r);
        }
        //echo $_SESSION['username'];
    ?>
:<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
    
    <style>
        body{
            background-color:#e3e3e3;
            font-family:gotham;
        }
        div.mid{
            width:500px;
            margin:auto;
            margin-top:100px;
            background-color:#202020;
            color:#e3e3e3;
            padding:10px;
            border-radius:10px;
        }

        
.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #e3e3e3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
}

button{
    padding:10px;
}
    </style>
</head>
<body ng-app="">
    
        <div class="mid">
        <h2>Upload files to your account</h2>
        <form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="upload" id="upload"><br>
    Choose compression method: <select name="compr" id="compr">
        
        <option value="zip">Zip</option>
        <option value="wb9">GZ WB Level 9</option>
        <option value="wb6">GZ WB Level 6</option>
        <option value="wb1">GZ WB Level 1</option>
        <option value="image">Image Compression</option>
        
    </select><br><br>
    <span id="ranger">
    <input type="range" min="1" max="100" value="50" name="slider" class="slider" id="myRange"ng-model="amount">Amount : {{amount}}
    </span><br><br>
    <input type="submit" value="Upload">
    </form>

    <a href="profile.php">Go to profile</a>
        </div>
    
    <?php

if(isset($_FILES['upload'])){
    if($_REQUEST['compr']=='image'){
        $target_file ="upl/". basename($_FILES["upload"]["name"]);
        $name=$_FILES["upload"]["name"];
        echo "Inside image compression";
         $quality=$_REQUEST['slider'];
        $filename = compress_image($_FILES["upload"]["tmp_name"], $target_file, $quality);
        $nm=$_FILES["upload"]["name"];
    }
    else if($_REQUEST['compr']=='zip'){
        $name=$_FILES["upload"]["name"];
        echo "Inside else compression";
        $zip = new ZipArchive;
if ($zip->open('upl/'.$name.'.zip', ZipArchive::CREATE) === TRUE)
{
    // Add files to the zip file
    // $zip->addFile($name);
    $target_file ="upl/". basename($_FILES["upload"]["name"]);
    $name=$_FILES["upload"]["name"];
    move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);    
    $zip->addFile('upl/'.$name); 
   
    $zip->close();
    $nm=$_FILES["upload"]["name"].'.zip';
}
else{
    echo "error";
}
    }

    else if($_REQUEST['compr']=='wb9'){
        echo "inside gzzz";
    $name=$_FILES["upload"]["name"];
    $target_file ="upl/". basename($_FILES["upload"]["name"]);
    $name=$_FILES["upload"]["name"];
    move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);  

      // Name of the file we're compressing
    $file = "upl/".$name;

    // Name of the gz file we're creating
    $gzfile = "upl/".$name.".gz";

    // Open the gz file (w9 is the highest compression)
    $fp = gzopen ($gzfile, 'wb9');

    // Compress the file
    gzwrite ($fp, file_get_contents($file));

    // Close the gz file and we're done
    gzclose($fp);
    $nm=$_FILES["upload"]["name"].'.zip';
    
    }

    else if($_REQUEST['compr']=='wb6'){
        echo "inside gzzz";
    $name=$_FILES["upload"]["name"];
    $target_file ="upl/". basename($_FILES["upload"]["name"]);
    $name=$_FILES["upload"]["name"];
    move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);  

      // Name of the file we're compressing
    $file = "upl/".$name;

    // Name of the gz file we're creating
    $gzfile = "upl/".$name.".gz";

    // Open the gz file (w9 is the highest compression)
    $fp = gzopen ($gzfile, 'wb6');

    // Compress the file
    gzwrite ($fp, file_get_contents($file));

    // Close the gz file and we're done
    gzclose($fp);
    $nm=$_FILES["upload"]["name"].'.zip';
    
    }
    else if($_REQUEST['compr']=='wb1'){
        echo "inside gzzz";
    $name=$_FILES["upload"]["name"];
    $target_file ="upl/". basename($_FILES["upload"]["name"]);
    $name=$_FILES["upload"]["name"];
    move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);  

      // Name of the file we're compressing
    $file = "upl/".$name;

    // Name of the gz file we're creating
    $gzfile = "upl/".$name.".gz";

    // Open the gz file (w9 is the highest compression)
    $fp = gzopen ($gzfile, 'wb1');

    // Compress the file
    gzwrite ($fp, file_get_contents($file));

    // Close the gz file and we're done
    gzclose($fp);
    $nm=$_FILES["upload"]["name"].'.zip';
    
    }

    
   



    // move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);
    //echo "success";
    
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

    $query="insert into files values('".$_SESSION['username']."','".$nm."','".$_FILES['upload']['type']."','".$_FILES['upload']['size']."')";
    $result=mysqli_query($conn,$query);
    if($result){
        echo "success";
    }
    else{
        echo "failed";
    }
}
?>

<script>
    $(document).ready(function(){

        $('#ranger').hide(300);
        $('#compr').change(function(){
            if($(this).val()=='image'){
                $('#ranger').show(100);
            }
            else{
        $('#ranger').hide(300);
                
            }
        });
    });
</script>
</body>
</html>
<?php
}
?>