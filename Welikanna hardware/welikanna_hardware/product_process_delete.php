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

        $product = $_POST["pn"];
        $price = $_POST["price"];
        $propic= $_FILES["file"] ["tmp_name"];
        $description = $_POST["description"];
        $path= "products/".$product.".jpg";

        
        

        $server = "localhost";
        $username = "root";
        $pass = "";
        $database = "hardware";
        $port = "3306";
        
        $con = new mysqli($server, $username, $pass, $database,$port);
        echo mysqli_error($con);
        
        
        $quary = "DELETE FROM product where name= '".$product."' ";
        

        
       
        $con->query($quary);
        
        $user_id = $con->insert_id;
        
        mysqli_connect_errno($con);
        
        
          
          header("location:adminhome.php");
        
        ?>
    

    </body>
</html>
