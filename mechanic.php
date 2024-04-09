<?php session_start();?>
<?php
include("include/db.php");
$q = "select Max(id) as id from tb_employee";
$res = mysql_query($q);
$row = mysql_fetch_array($res);
$id1 = $row["id"] +1;
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GLOBAL VEHICLE CARE</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style type="text/css">
        
      
        
        .style1
        {
            height: 30px;
        }
                
        .style3
        {
        }
        .style4
        {
            width: 170px;
            color: #333333;
            font-weight: bold;
        }
        .style5
        {
             
            color: #333333;
            height: 25px;
            font-weight: bold;
        }
        .style6
        {
            height: 25px;
        }
                
    </style>
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">mechanical@example.com</a>
        <i class="fa fa-phone"></i> +91-999584848
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">MECHANICAL</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
           <li class="menu-active"><a href="mechanic.php">View Mechanic</a></li>
          <li><a href="post.php">Post Query</a></li>
          <li><a href="status.php">Status</a></li>
          <li><a href="feedback.php">Feedback</a></li>
           
          <li><a href="login.html">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>GLOBAL VEHICLE CARE</h2>
      <div>
       
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

     
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
		<center>
      
	<center>
	<table  style="border:#3399FF; border:solid 0px; width:1000px;  border-radius:15px" height="400px">
	<tr>
	<td colspan="2" align="left" ><h2>VIEW MECHANICAL</h2></td>
	</tr>
	 
	 <TR>
	 <Td colspan="2">
	   <table width="100%" cellspacing="0" border="1">
		<tr bgcolor="#FFFFCC"> 
		<th height="38" bgcolor="#FFFFCC"><span class="style2">Mechanic ID </span></th>
		<th><span class="style2"> Name </span></th>
		<th><span class="style2"> Gender </span></th>
		<th><span class="style2"> Address</span></th>
		 
		 <th><span class="style2"> Mail ID</span></th>
		<th><span class="style2">Phone </span></th>
		
		<th><span class="style2">Land-Line</span></th>
		<th><span class="style2">Photo</span></th>
		 
		</tr>
		<?php
		include("include/db.php");
		$q ="select * from tb_employee " ;
		$res = mysql_query($q);
		while ($row =mysql_fetch_array($res))
		{
		$im=$row[im];
		?>
		<tr bgcolor="#FFFFFF">
		<td height="38"><div align="center"><?php echo $row["id"];?> </div></td>
		<td> <div align="center"><?php echo $row["ename"];?></div></td>
		<td> <div align="center"><?php echo $row["gender"];?></div></td>
		<td> <div align="center"><?php echo $row["address"];?></div></td>
		 <td> <div align="center"><?php echo $row["email"];?></div></td>
		 
		<td> <div align="center"><?php echo $row["phone"];?></div></td>
		
		<td> <div align="center"><?php echo $row["mobile"];?></div></td>
		 <td><?php echo "<a href=home/$im><img src=home/$im width=100 height=80></img></a>";?></td>
		  
		 
		</tr>
		<?php
		}
		?>
		</table>
								   
	 </Td>
	 </TR>
 
	</table>
	    
								   
	</form>
        </div>

         
      </div>

       

       
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Mechanical</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
