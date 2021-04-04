<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>PAWSOME</title>
    
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
       <li id="page_about">
    <div class="title-wrapper">
        <center>
        <h2 style="color: black;">About Us</h2>
    </div>
    <h4></h4>
    <p style="text-align:justify;">
                    ThePetshop.ph operates an online pet shop store selling animal food, vitamins, accessories 
        and grooming products. The company started 2003 as a small pet shop to sell quality freshwater fish to the Filipino hobbyist. The product line had expanded to include a number of products used in wholesale and retail such as dogs and cats feeds and accessories. Today, the company is one of the biggest whosale and retail stores of animal products carrying quality brands. Its online business sites launched in the 3rd quarter of 2016 to accommodate the growing population of loyal and new customers who prefer to purchase via online. 
    </p>
    
    <div class="v_space"></div>
    <center>
     <h4 style="color: black;">Customers First </h4>
     <p style="text-align:justify;">
        Building loyalty and good relationship with our customer is our priority. 
        The company exist to give the best price without compromising the quality and to
         make each transaction experience easy,safe and 
        accessible to online buyers.

 
    </p>
    
    <div class="v_space"></div>
    
    <div class="title-wrapper">
      
    </div><center>
    <div class="two_third" style="width:48%;">
        <h2  style="color: black;">Mission</h2>
            <p style="text-align:justify;">
            Our goal is to give our customers the best online shopping experience by giving them the best price and making each transaction  easy,  fast and secured.</p>
    </div>
    <div class="one_third_last" style="width:48%;">
        <h2  style="color: black;">Vision</h2>
         <p style="text-align:justify;">
            To be the top of the mind trusted online pet shop nationwide.
        </p>
    </div>
    </div>
    <br>
     <br>
      <br>
    <iframe height="400" frameborder="0" style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3955905.7950550695!2d75.4653121!3d14.4738196!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf72667accf705%3A0xb237e2867b610b85!2z4LKO4LKf4LK_4LKO4LKC4LKHIOCyh-CyguCynOCyv-CyqOCyv-Cyr-CysOCyv-CyguCyl-CzjSDgspXgsr7gsrLgs4fgspzgs4E!5e0!3m2!1skn!2sin!4v1609913121782!5m2!1skn!2sin"> </iframe>

    <div class="clear"></div>
</li>
        
<!--*************************************************** FOOTERS **********************************************-->
  
    <?php include('includes/footer.php');?>

<?php include('loginModal.php');?>
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