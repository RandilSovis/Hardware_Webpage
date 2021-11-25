<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $user=$_POST["user"];
        $password=$_POST["pw"];
        
        if (empty($user)) {
            header("location:login.php?msg= Plese Fill The User Name");
            
            
        }  elseif (empty ($password)) {
            header("location:login.php?msg= Plese Fill The password!&em=$user");
            
        }else{
        
         $con = new mysqli("localhost", "root", "", "hardware","3306"); 
         $query="SELECT * FROM user WHERE username ='".$user."'AND password ='".$password."'";
         
         $result=$con->query($query);
         
         if ($row=mysqli_fetch_assoc($result)) {
             
            
                 $fname = $row["fname"];
                 $_SESSION["user_id"] = $row["id"];   // session ekak start karana eka
                 header("location:adminhome.php?name=$fname");
                
             }  else {
             
                 header("location:login.php?msg=Invalid Email Or Password");
             }
             
         
        }
        ?>
    </body>
</html>
