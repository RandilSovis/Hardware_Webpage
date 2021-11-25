<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welikanna Hardware</title>
        <link rel="stylesheet" type="text/css" href="css/interface.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
        <script src="css/thumbnail-slider.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeadercollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeadercollapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="login.php">Sign In</a></li> 

                    </ul>



                </div>
            </div>
        </div>
        <div class="navbar navbar-static-top">
            <div class="container">
                <a href="index.php" class="navbar-brand"><img src="images/logo.jpg" alt="" /></a>
                <h1>Welikanna Hardware</h1>
                <br/><br/>
                <div class="collapse navbar-collapse navHeadercollapse">
                    <div class="header-bottom">
                        <ul class="nav navbar-nav navbar-left">

                            <li><a href="index.php">HOME</a></li>  				
                            <li><a class="active"  href="products.php">PRODUCTS</a></li>
                            <li><a href="opening.php">OPENING</a></li>
                            <li><a href="transportation.php">TRANSPORTATION</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">


                            <li><input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Search';
                                    }"/></li>
                            <li><input type="submit" value="Subscribe" id="submit" name="submit"/></li>





                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <br/>


        <hr class="divider" />
        <!-- Content -->
        
        <?php
        
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "hardware";
        $port = "3306";
        
        $con = new mysqli($host, $username, $password, $database, $port);
        echo mysqli_error($con);
        
        $quary = "SELECT * FROM product";
        $result = $con->query($quary);
        ?>
        
        
        <div class="container">    	
            <div class="row">
                <div class="col-md12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">OUR PRODUCTS</h3>
                        </div>
                        <div class="panel-body">
                            <hr class="divider" />
                            <div class="row">
                                
                                
                                <?php
        
        
        while ($row = mysqli_fetch_assoc($result)){
            ?>
                                
                                
                     <div class="col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <h3><?php echo $row ["name"]  ?></h3>
                                        <img src="<?php echo $row ["image"]  ?>" alt="a">
                                        <div class="caption">


                                            <div class="row">
                                                <div class="col-md-6 col-xs-6">
                                                    <div class="form-group">
                                                        <h4>Rs.<?php echo $row ["price"]  ?></h4>
                                                    </div> 
                                                </div>
                                                <div class="col-md-6 col-xs-6">  
                                                    <div class="form-group">

                                                    </div>
                                                </div>

                                            </div>
                                            <h5 class="small"><a>More details </a></h5>

                                        </div>
                                    </div>
                                </div>           
                                
                                
                                
                                
                                
                                
           
            <?php
        }
        
        ?>
           
                                
                                


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <hr class="divider" />
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-4">               
                        <div class="caption">
                            <h2 style="font-weight:bold">Our Mission</h2>
                            <p style="font-weight:bold">The mission of Wellikanna Hardware is to offer quality hardware products in a customer-friendly shopping environment. Our customers will get assistance quickly and will leave the store prepared to get the job done right the first time.</p>
                            <p style="font-weight:bold"> Wellikanna Hardware will also focus on anticipating the seasonal needs of its customers and providing the best products at competitive prices.</p>
                            <h2 style="font-weight:bold">Our Vision</h2>
                            <p style="font-weight:bold" >Our Vision is to provide the best quality, durable and modern hardware products to our valuable customers.</p>
                        </div>             	
                    </div>

                    <div class="col-sm-6 col-md-4">               
                        <div class="caption">
                            <h2 style="font-weight:bold">Our Speciality</h2>
                            <p style="font-weight:bold">You dont have to worry about transporting your purchased goods from our store and also we undertake all the concrete products.</p>


                            <h3>Social Media</h3>
                            <div class="social-media">
                                <a href="#fb"><img src="images/fb.png" /></a>
                                <a href="#twitter"><img src="images/twt.png"  /></a>
                                <a href="#youtube"><img src="images/1477690703_youtube.png"  /></a>
                                <a href="#instagram"><img src="images/ins.png"  /></a>
                            </div>

                        </div>             	
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">

                <p class="pull-right"><a href="#">Back to Top</a></p>
                <p>Welikanna Hardware © 2017 <a href="#">Privacy Policy</a></p>

            </div>
        </div>
    </body>
</html>
