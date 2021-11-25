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
$itemname=$_POST["itemname"];
$name=$_POST["pn"];
$description=$_POST["description"];
$price=$_POST["price"];

$con=new mysqli("localhost", "root","", "hardware", "3306");

$query="UPDATE  product set name='".$name."',price='".$price."',description='".$description."' where name='".$itemname."'";
  $con->query($query); 
  
  echo "done";

?>
    </body>
</html>
