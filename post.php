<?php session_start();?>
<?php
include("include/db.php");
$q = "select Max(id) as id from tb_post";
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

    <!--==========================
      About Section
    ============================-->
     <!-- #about -->

    <!--==========================
      Services Section
    ============================-->
     <!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
     <!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
     <!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
     <!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
     <!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
     <!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
		<center>
         <form action="postdata.php" method="post">
	<center>
	<table  style="border:#3399FF; border:solid 0px; width:500px;  border-radius:15px" height="400px">
	<tr>
	<td colspan="2" align="left" ><h2>POST QUERY</h2></td>
	</tr>
	<tr>
	<td><span class="style3">Mechanic Name</span></td>
	<tD>     <input name="id" type="hidden" value="<?php echo $id1;?>">  
	
	<select name="mname" id="mname">
             <option>None</option>
            <?php
		    include("db.php");
		  $q5=mysql_query("select * from tb_employee");
					while($r=mysql_fetch_assoc($q5))
							{
echo "<option>".$r['ename']."</option>";
								}
								 
								
								  ?>
              </select>
	
	<td></td>
	</tr>
	
	<tr>
	<td><span class="style3">Alternate Vehicle</span></td>
	<td>
	
	 <select name="mname1" id="mname1">
            <option>None</option>
            <?php
		    include("db.php");
		  $q5=mysql_query("select * from tb_vehicle");
					while($r=mysql_fetch_assoc($q5))
							{
echo "<option>".$r['veg']."</option>";
								}
								 
								
								  ?>
              </select>
	 </td>
	</tr>
	<tr>
	<td><span class="style3">Customer Name</span></td>
	<td><input name="uname" type="text" value="<?php echo $_SESSION["uname"];?>">
	<td></td>
	</tr>
	<tr>
	<td><span class="style3">Phone</span></td>
	<tD><input name="phone" type="text" id="phone">
	<td></td>
	</tr>
	
	 <tr>
	<td><span class="style3">Query</span></td>
	<tD>
	
	<textarea name="query"></textarea><br>
	</td> 
	</tr>
	 
	<tr>
	<td colspan="2" align="center"><input name="submit" type="submit" value="SUBMIT">&nbsp;&nbsp;<input name="" type="reset" value="CLEAR"></td>
	</tr>
	<tr>
	<tD colspan="2" style="color:#FF0000">(With in this cities circle only Alternative vehicle are allowed)
	</tD>
	</tr>
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
