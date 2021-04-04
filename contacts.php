<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Pawsome</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<?php  include('includes/header.php');?>
<!--*********************************************START OF CONTACT INFO****************************************-->
<body>
<br><br>
<div class="container">
        <section id="contact-info">
                <center><span style="font-size:35px; font-weight:bold; font-family:verdana; color:#b7832f;">How to Reach Us?</span></center>

            <div class="left wow fadeInDown">
                
               <div class="col-md-6">
                <img src="images/contact1.png" class="img-responsive pull-right" />
               </div> 
               <div class="col-md-6">
                <p class="lead">
                    <br>
                    <p><span style="font-size:20px; font-weight:bold; font-family:verdana; color:red;">Pavan hegde</span>
                    <br><b>Address:</b> Mysore<b><br>Tel/Phone:</b> +639074985072 / 09655323255<b><br>Email Address:</b> pet3@gmail.com</p>
                    <hr>
                     <p><span style="font-size:20px; font-weight:bold; font-family:verdana; color:red;">Abhinav sh</span>
                    <br><b>Address:</b> Mysore<b><br>Tel/Phone:</b> +639074985072 / 09655323255<b><br>Email Address:</b> pet3@gmail.com</p>
                     <hr>
                    <span style="font-size:20px; font-weight:bold; font-family:verdana; color:Violet;">We are open</span>
                    <p><b>MONDAY TO FRIDAY -- 8:00AM - 5:00PM</b></p>
                </p>
                <hr>
                <table style="width:80px;">
                    <tr>
                        <td><a href="http://www.facebook.com"><img data-toggle="tooltip" src="images/do.jpg" height="20ps" width="20ps" class="img-responsive" /></a></td>
                        <td><a href="http://www.instagram.com"><img src="images/inst.jpg" height="20ps" width="20ps" class="img-responsive" /></a></td>
                        <td><a href="http://www.twitter.com"><img  src="images/twit.png" height="20ps" width="20ps" class="img-responsive" /></a></td>
                        <td><a href="http://www.youtube.com"><img  src="images/you.png" height="20ps" width="20ps" class="img-responsive" /></a></td>
                    </tr>
                </table>

                </div>
            </div>
        
        </section>
</div>
<br><br>
<!--*************************************************** FOOTERS **********************************************-->

<?php include('includes/footer.php');?><!--/#footer-->
    <?php include('loginModal.php')?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>