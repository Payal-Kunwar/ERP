<?php
  $message="";
  if(isset($_POST['email'])){
    $host = "localhost";
    $user = "root";
    $password = 'root';
    $db_name = "erp_proj";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password1'];

        //to prevent from mysqli injection


       $sql = "SELECT * from signup where email='$email'";
       $result = mysqli_query($con, $sql);

      $res_count=mysqli_num_rows($result);
       if($res_count>0){
          $sql2 = "UPDATE signup SET username='$username', password='$password' where email='$email'";
         //echo "successful";
          if($con->query($sql2) == true){
            header('Location: account.php');
            echo("<script>alert('Password has been reset successfully')</script>");
          }
          else
            $message="Username already exists";
    }
    else
        $message="Email ID not registered <a href='register.php'>Register here</a>";

}

 {
  ?>

<!DOCTYPE html>
<html>
<head>
<title>Youth Fashion | Register</title>
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
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
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
<div class="container">
	<div class="register">
		<h2>Reset Password</h2>
		  	  <form method="post">
				<div class="col-md-6  register-top-grid form">
					
					<div class="mation form">
                        <span>Email Address</span>
						<input type="text" name="email" id="email" placeholder="xyz@gmail.com" required>

						<span>Username</span>
						<input type="text" name="username" id="username" placeholder="username" required> 
					</div>
                </div>
				<div class=" col-md-6 register-bottom-grid">
							<div class="mation">
								<span>Password</span>
								<input type="password" name="password1" id="password1" placeholder="****" maxlength="15" minlength="8" onkeyup="check()" required>
								<div class="input_field">
                                   <span id="strength"> </span>
                                </div>
                                <div class="input_field">
                                 <p id="p1" style="font-size:11px;"></p>
                                </div>
								<span>Confirm Password</span>
								<input type="password" name="password2" id="password2" placeholder="****" required>
                                <center><p id="message"><?= $message ?></p></center>
					        </div>
                    </div>
					 <div class="clearfix"> </div>
					 <div class="register-but">
                        <input type="submit" name="submit" value="UPDATE" onclick="submitpage()"><br><br>
					    <center><a style="color:#fa03bb;" href="account.php">Login</a> if you have already registered</center>
					    <div class="clearfix"> </div>
					 </div>
				</form>
				
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
						<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
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

<script>
    function submitpage(){
        var password1=document.getElementById('password1').value;
        var password2=document.getElementById('password2').value;
        if(password1!=password2)
        {alert("Password didn't match");
        return false;
        }
    }

    function check(){
        var pp=document.getElementById("p1").value
        var a=document.getElementById("password1").value;
        var st = document.getElementById('strength');
        num=/[0-9]/; uplet=/[A-Z]/; lowlet=/[a-z]/; spch=/[!@#$%^&*]/;
        if(!uplet.test(a) || !num.test(a) || !lowlet.test(a) || !spch.test(a) || a.length<8)
        {      p1.innerHTML="Password must contain atleast one uppercase letter, one lowercase letter, one special charachter and one numeric value"
        
                st.innerHTML = '<span style="color:red">Weak</span>';
            }
        else
        {
            st.innerHTML = '<span style="color:green">Strong!</span>';
            p1.innerHTML="Accepted"
        }
    }</script>
  </body>
    <?php
  }
  ?>
</html>