<?php

  require 'db_connection.php';

  $review = "SELECT feedback from rating";

  $sql5 = "SELECT * from rating where rate=5";
  $sql4 = "SELECT * from rating where rate=4";
  $sql3 = "SELECT * from rating where rate=3";
  $sql2 = "SELECT * from rating where rate=2";
  $sql1 = "SELECT * from rating where rate=1";

  $sql = "SELECT * from rating";

  $rev_res = mysqli_query($conn, $review);
  $result5 = mysqli_query($conn, $sql5);
  $result4 = mysqli_query($conn, $sql4);
  $result3 = mysqli_query($conn, $sql3);
  $result2 = mysqli_query($conn, $sql2);
  $result1 = mysqli_query($conn, $sql1);

  $result = mysqli_query($conn, $sql);

  $rev_count=mysqli_num_rows($rev_res);
  $val_5=mysqli_num_rows($result5);
  $val_4=mysqli_num_rows($result4);
  $val_3=mysqli_num_rows($result3);
  $val_2=mysqli_num_rows($result2);
  $val_1=mysqli_num_rows($result1);

  $val=mysqli_num_rows($result);
  if($val>0){
  $avg = round(((5*$val_5)+(4*$val_4)+(3*$val_3)+(2*$val_2)+(3*$val_1))/$val);

$val5=(($val_5/$val)*100);
$val4=(($val_4/$val)*100);
$val3=(($val_3/$val)*100);
$val2=(($val_2/$val)*100);
$val1=(($val_1/$val)*100);}
else{
   $avg = 0;
   $val5=0;
   $val4=0;
   $val3=0;
   $val2=0;
   $val1=0;
}

 {
?>

<!DOCTYPE html>
<html>
<head>

<style>
* {
  box-sizing: border-box;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
  margin-left: 50px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 50%;
  margin-left: 10px;
}

/* Place text to the right */
.right {
  text-align: right;
  margin-right: 50px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
  margin-left: 50px;
  margin-right: 50px;
}

.box{
  background: #DBD7D3;
  border-bottom: 1px solid #e4e0cc;
  border-top: 1px solid #eae7d6;
  border-radius: 20px;
  padding: 20px;
  margin-left: 50px;
  margin-right: 50px;
}

/* Individual bars */
<?php
  {
    ?>
.bar-5 {width: <?= $val5?><?php } ?>%; height: 18px; background-color: #ff9800;}

<?php
  {
    ?>
.bar-4 {width: <?= $val4?><?php } ?>%; height: 18px; background-color: #ff9800;}

<?php
  {
    ?>
.bar-3 {width: <?= $val3?><?php } ?>%; height: 18px; background-color: #ff9800;}

<?php
  {
    ?>
.bar-2 {width: <?= $val2?><?php } ?>%; height: 18px; background-color: #ff9800;}

<?php
  {
    ?>
.bar-1 {width: <?= $val1?><?php } ?>%; height: 18px; background-color: #ff9800;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}

/*start rating*/

.txt-center {
  text-align: center;
}
.hide {
  display: none;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.clear {
  float: none;
  clear: both;
}

.rating {
    width: 90px;
    unicode-bidi: bidi-override;
    direction: rtl;
    text-align: center;
    position: relative;
}

.rating > label {
    float: right;
    display: inline;
    padding: 0;
    margin: 0;
    position: relative;
    width: 1.1em;
    cursor: pointer;
    color: #000;
}

.rating > label:hover,
.rating > label:hover ~ label,
.rating > input.radio-btn:checked ~ label {
    color: transparent;
}

.rating > label:hover:before,
.rating > label:hover ~ label:before,
.rating > input.radio-btn:checked ~ label:before,
.rating > input.radio-btn:checked ~ label:before {
    content: "\2605";
    position: absolute;
    left: 0;
    color: #FFD700;
}
</style>

<title>Youth Fashion | Preview </title>
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
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single</li>
			</ol>
		</div>
	</div>
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="images/si.jpg">
			        <div class="thumb-image"> <img src="images/si.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/si1.jpg">
			         <div class="thumb-image"> <img src="images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/si2.jpg">
			       <div class="thumb-image"> <img src="images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
							<div class="star-on">
							<?php
                                $count = $avg;
                                for($i=0; $i<5; $i++){
                                  if($count!=0){
                                     echo "<span class='glyphicon glyphicon-star checked'></span>";
                                      $count--;
                                  }
                                  else{
                                      echo "<span class='fa fa-star'></span>";}
                                  }
                                
                            ?>
							<div class="review">
							    <p><?= $avg ?> average based on <?= $val ?> reviews.</p>
							</div>
							<div class="clearfix"> </div>
							</div>
							
								<label  class="add-to item_price">$70.5</label>
							
							<div class="available">
								<h6>Available Options :</h6>
								<ul>
									
								<li>Size:<select>
								    <option>X-Small</option>
									<option>Small</option>
									<option>Medium</option>
									<option>Large</option>
									<option>X-Large</option>
									<option>XX-Large</option>
								</select></li>
								<li>Cost:
										<select>
										<option>Indian Rupees</option>
										<option>U.S Dollar</option>
									</select></li>
							</ul>
						</div>
								<a href="#" class="cart item_add">More details</a>
						</div>
					</div>
			<div class="clearfix"> </div>
			<div class="content-top1">
				<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.php">
							<img class="img-responsive" src="images/pi6.png" alt="" />
						</a>
						<h3><a href="single.php">Trouser</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.php">
							<img class="img-responsive" src="images/pi7.png" alt="" />
						</a>
						<h3><a href="single.php">Jeans</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.php">
							<img class="img-responsive" src="images/pi.png" alt="" />
						</a>
						<h3><a href="single.php">Palazzo</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			
			<div class="clearfix"> </div>
			</div>		
</div>
<!----->
<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<h3 class="cate">Categories</h3>
							 <ul class="menu-drop">
							<li class="item1"><a href="#">Men </a>
								<ul class="cute">
									<li class="subitem1"><a href="single.php">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.php">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.php">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Women </a>
								<ul class="cute">
									<li class="subitem1"><a href="single.php">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.php">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.php">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item3"><a href="#">Kids</a>
								<ul class="cute">
									<li class="subitem1"><a href="single.php">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.php">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.php">Automatic Fails</a></li>
								</ul>
							</li>
							<li class="item4"><a href="#">Accesories</a>
								<ul class="cute">
									<li class="subitem1"><a href="single.php">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.php">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.php">Automatic Fails</a></li>
								</ul>
							</li>
									
							<li class="item4"><a href="#">Shoes</a>
								<ul class="cute">
									<li class="subitem1"><a href="single.php">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.php">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.php">Automatic Fails </a></li>
								</ul>
							</li>
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->
				<div class="product-bottom">
						<h3 class="cate">Best Sellers</h3>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.php"><img class="img-responsive " src="images/pr.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.php" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.php"><img class="img-responsive " src="images/pr1.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.php" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.php"><img class="img-responsive " src="images/pr2.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.php" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>	
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.php"><img class="img-responsive " src="images/pr3.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.php" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>		
				</div>

<!--//seller-->
<!--tag-->
				<div class="tag">	
						<h3 class="cate">Tags</h3>
					<div class="tags">
						<ul>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
						<div class="clearfix"> </div>
						</ul>
				</div>					
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>

	<hr style="border:3px solid #f1f1f1"><hr style="border:3px solid #f1f1f1">
	<div class="clearfix" style="margin-right: 50px; margin-left:50px;"> 
    <span class="heading">User Rating</span>
	<hr style="border:3px solid #f1f1f1">

    <div class="row">
      <div class="side">
        <div>5 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-5"></div>
        </div>
      </div>
      <div class="side right">
        <div><?= $val_5 ?></div>
      </div>
      <div class="side">
        <div>4 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-4"></div>
        </div>
      </div>
      <div class="side right">
        <div><?= $val_4 ?></div>
      </div>
      <div class="side">
        <div>3 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-3"></div>
        </div>
      </div>
      <div class="side right">
        <div><?= $val_3 ?></div>
      </div>
      <div class="side">
        <div>2 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-2"></div>
        </div>
      </div>
      <div class="side right">
        <div><?= $val_2 ?></div>
      </div>
      <div class="side">
        <div>1 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-1"></div>
        </div>
      </div>
      <div class="side right">
        <div><?= $val_1 ?></div>
      </div>
    </div>
  <br><br>
    <hr>
    <div class="box">
      How was your experience?:<br>
      <div class="txt-center">
        <form method="POST" action="style.php">
                <div class="rateyo" id="rating"
                    data-rateyo-rating="4"
                    data-rateyo-num-stars="5"
                    data-rateyo-score="3">
                </div> <br>
    
                <span class='result'><?= $val ?></span>
                <input type="hidden" name="rating"><br>
        
                Review: <br><textarea name="review" placeholder="Tell others what you think about the product" rows="4" cols="95"></textarea><br>
                <input type="submit" name="submit" class="btn" value="Send">
				<hr>
        </form>
       </div>
	   Reviews:<br>
    <?php
        if($rev_count>0){
            while($row = mysqli_fetch_assoc($rev_res)){
                echo $row["feedback"]."<br>";
                echo '<hr>';
            }
        }
        else
            echo "0 Feedback";
    ?>
    </div><br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>
	$(function () {
		$(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
	});
		      

</script>
<?php
  }
  ?>

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
				<p class="footer-class"> © 2022 Youth Fashion . All Rights Reserved | Maintained by <a href="#" target="_blank">PAYS</a> </p>
			</div>
	</div>
</div>
<!--footer-->
<!-- slide -->
<script src="js/jquery.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- start menu -->
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
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
</body>
</html>