<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        $fname = $_POST["fn"];
        $lname = $_POST["ln"];
        $email = $_POST["email"];
        $mobile = $_POST["mob"];
        $user = $_POST["un"];
        $password = $_POST["pw"];

        
        

        $server = "localhost";
        $username = "root";
        $pass = "";
        $database = "hardware";
        $port = "3306";
        
        $con = new mysqli($server, $username, $pass, $database,$port);
        echo mysqli_error($con);
        
        
        $quary = "INSERT INTO user (fname,lname,email,mobile,username,password,type_id,status_id)"
                . " VALUES('".$fname."','".$lname."','".$email."','".$mobile."','".$user."','".$password."','2','1')";
        
 
        $con->query($quary);
        
        
          
          header("location:login.php");
        
        ?>
    

    </body>
</html>
