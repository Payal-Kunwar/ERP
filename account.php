<?php
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Youth Fashion | Account</title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo">
					<h1><a href="index.php">Youth <span>Fashion</span></a></h1>	
				</div>
			<div class="col-sm-4 world">
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
			</div>
			<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
					<p>Call us</p>
				</div>
			<div class="col-sm-2 search">		
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				
				 <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 
				   <!-- Collect the nav links, forms, and other content for toggling -->
				   <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li><a href="index.php">Home</a></li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<span class="caret"></span></a>				
											<ul class="dropdown-menu list-inline">
												<li><a class="dropdown-item" href="women.php">New Arrivals</a></li>
												<li><a href="women.php">Shirts, Tops and Tees</a></li>
												<li><a href="women.php">Jeans and jeggings</a></li>
												<li><a href="women.php">Kurtis</a></li>
												<li><a href="women.php">Sarees</a></li>
												<li><a href="women.php">Dresses</a></li>
											</ul>	
									<!-- Nav tabs -->					
							</li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>				
											<ul class="dropdown-menu list-inline">
											    <li><a class="dropdown-item" href="men.php">New Arrivals</a></li>
												<li><a href="men.php">T-Shirts and Polos</a></li>
												<li><a href="men.php">Jeans and Trousers</a></li>
												<li><a href="men.php">Ethnic wear</a></li>
												<li><a href="men.php">Suits and Blazers</a></li>
												<li><a href="men.php">Jackets and coats</a></li>
											</ul>	
							</li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kids<span class="caret"></span></a>				
											<ul class="dropdown-menu list-inline">
											    <li><a class="dropdown-item" href="kids.php">New Arrivals</a></li>
												<li><a href="kids.php">Tops and Tees</a></li>
												<li><a href="kids.php">Dresses</a></li>
												<li><a href="kids.php">Jeans and pants</a></li>
												<li><a href="kids.php">Clothing sets</a></li>
												<li><a href="kids.php">Ethnic wear</a></li>
											</ul>	
							</li>
							<li><a href="products.php">Products</a></li>
							<li class="last"><a href="contact.php">Contact</a></li>
							<li class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                <img id="signup" style="width:30px;height:30px;" src="https://upload.wikimedia.org/wikipedia/commons/1/12/User_icon_2.svg">
                                </a>
                                <ul class="dropdown-menu list-inline" aria-labelledby="navbarDropdown">
                                   <li><a class="dropdown-item" href="#">My account</a></li>
								   <li><a class="dropdown-item" href="account.php">Sign In</a></li>
                                   <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                            </li>
							<li>
							    <div id="google_translate_element"></div>
                                <script type="text/javascript">
                                  function googleTranslateElementInit() {
                                    new google.translate.TranslateElement(
                                      {pageLanguage: 'en'},
                                      'google_translate_element'
                                    );
                                  }
                                </script>
                                <script type="text/javascript" src= "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>&nbsp;&nbsp;
							</li>
						</ul>
					 </div><!-- /.navbar-collapse -->
				  
				</nav>
			</div>
			
			<?php
                if( isset($_SESSION["error"])){
                  echo('<center><p style="color:red; size:14px;">'.$_SESSION["error"]."</p></center><br>");
                  unset($_SESSION["error"]);
                }
                if( isset($_SESSION["success"])){
                  echo('<center><p style="color:green; size:14px;">'.$_SESSION["success"]."</p></center><br>");
                  unset($_SESSION["success"]);
                }
            ?>		
		<div class="clearfix"> </div>
			<!---pop-up-box---->   
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<!--//header-->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Account</li>
			</ol>
		</div>
	</div>
<div class="account">
	<div class="container">
		<h2>Account</h2>
		<div class="account_grid">
			   <div class="col-md-6 login-right">
				<form action="#" method="post">

					<span>Username</span>
					<input type="text" name="username" required> 
				
					<span>Password</span>
					<input type="password" name="password" required> 
					<div class="word-in">
				  		<a class="forgot" href="forgot_pass.php">Forgot Your Password?</a>
				 		 <input type="submit" value="Login">
				  	</div>
			    </form>
			   </div>	
			    <div class="col-md-6 login-left">
			  	 <h4>NEW CUSTOMERS</h4>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
	</div>
</div>

<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer">
				<h3>Follow Us On</h3>
				<div class="social-icons">
					<ul class="social">
						<li><a href="#"><i></i></a> </li>
						<li><a href="#"><i class="facebook"></i></a></li>	
						<li><a href="#"><i class="google"></i> </a></li>
						<li><a href="#"><i class="linked"></i> </a></li>						
					</ul>
						<div class="clearfix"></div>
				 </div>
			</div>
			<div class="col-md-6 top-footer1">
				<h3>Newsletter</h3>
					<form action="#" method="post">
						<input type="text" name="search" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
			</div>
			<div class="clearfix"> </div>	
		</div>	
	</div>
	<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate">
				<h6>Categories</h6>
					<ul>
						<li><a href="products.php">Curabitur sapien</a></li>
						<li><a href="single.php">Dignissim purus</a></li>
						<li><a href="men.php">Tempus pretium</a></li>
						<li><a href="products.php">Dignissim neque</a></li>
						<li><a href="single.php">Ornared id aliquet</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
					<h6>Feature Projects</h6>
					<ul>
						<li><a href="products.php">Dignissim purus</a></li>
						<li><a href="men.php">Curabitur sapien</a></li>
						<li><a href="single.php">Tempus pretium</a></li>
						<li><a href="men.php">Dignissim neque</a></li>
						<li><a href="products.php">Ornared id aliquet</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate animated wow fadeInRight" data-wow-delay=".5s">
					<h6>Top Brands</h6>
					<ul>
						<li><a href="products.php">Tempus pretium</a></li>
						<li><a href="single.php">Curabitur sapien</a></li>
						<li><a href="men.php">Dignissim purus</a></li>
						<li><a href="single.php">Dignissim neque</a></li>
						<li><a href="men.php">Ornared id aliquet</a></li>
						
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 12th Avenue, 5th block, <span>Sydney.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"> ?? 2022 Youth Fashion . All Rights Reserved | Maintained by <a href="#" target="_blank">PAYS</a> </p>
			</div>
	</div>
</div>
<!--footer-->

    <?php
      require_once "pdo.php";
        if(isset($_POST['username']) && isset($_POST['password'])){

          $sql = "SELECT firstname FROM signup where username= :us and password= :pw";
          //preventing SQL injection
          $stmt = $pdo->prepare($sql);
          $stmt->execute(array(
            ':us' => $_POST['username'],
            ':pw' => $_POST['password'],
          ));
          //fetch the value

          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          //var_dump($row);
          //$row is false if no such name exists
          if($row === FALSE ){
             $_SESSION["error"] = "Invalid credentials! Please try again";
             header('Location: account.php');
             return;
          }
          else{
             $_SESSION["username"] = $_POST["username"];
             $_SESSION["success"] = "Logged in successfully.";
             header("Location: index.php");
             return;
          }
        }
     ?>

</body>
</html>