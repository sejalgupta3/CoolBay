<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CoolBay</title>
		<meta name="description" content="CoolBay, Marketplace" />
		<meta name="keywords" content="Marketplace" />
		<meta name="author" content="Cool Bay" />
		<!-- Setting up meta data for the facebook Share button API  -->
		<meta property="og:url"           content="http://www.sejalgupta.com/marketplace" />
	    <meta property="og:type"          content="website" />
	    <meta property="og:title"         content="CoolBay MarketPlace" />
	    <meta property="og:description"   content="You can find here most of the stuff that you are looking for." />
	    <meta property="og:image"         content="http://www.sejalgupta.com/marketplace/img/logo-blue@2x.png"/>
	    
		<script src="js/modernizr.custom.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/flickity.css" rel="stylesheet" >
		<link href="css/animate.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/queries.css" rel="stylesheet">
	</head>
	<body>
		<div id="fb-root"></div>
		<!-- Script for using Facebook API -->
		<script>
		(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
			  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		<header>
			<section class="hero">
				<div class="texture-overlay"></div>
                <div class="nav-wrapper">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a href="#"><img src="img/logo-white.png" alt="CoolBay Logo"></a> 
						</div>
						<div class="col-md-2 col-sm-6 col-xs-6 "> 
						  <!-- DisplayING Welcome message only when user session exist-->
							<?php 
								extract($_GET);
								if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
									echo "Welcome ".$_SESSION['login_user_name'];
								}else if(isset($LoginStatus)){
								 	echo $LoginStatus;
								}
								if(isset($RegisterStatus)){
									echo $RegisterStatus;
								}
							?>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-right navicon">
							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 navicon">
							<?php
								if(!isset($_SESSION['login_user']) && !isset($_SESSION['login_user_name'])){
							?>
							<div class="col-md-3 col-sm-6 col-xs-6 text-right navicon">
								<p data-toggle = "modal" data-target = "#LoginModal">Login</p>
								<div class = "modal fade" id = "LoginModal" tabindex = "-1" role = "dialog" aria-labelledby = "LoginModalLabel" aria-hidden = "true" style="color:black">
								   <div class = "modal-dialog">
								      <div class = "modal-content">
								         <div class = "modal-header">
								            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
								               x
								            </button>
								            <h4 class = "modal-title" id = "LoginModalLabel">
								               Login
								            </h4>
								         </div>
								         <div class = "modal-body">
								            <?php include('views/login.php');?>
								         </div>
								      </div>
								   </div>				   
							</div>
							<script>
							   $(function () { $('#LoginModal').modal('hide')})});
							</script>
						</div>
							<?php }?>
						<div class="col-md-3 col-sm-6 col-xs-6 navicon">
							<p data-toggle = "modal" data-target = "#RegisterModal">Register</p>
							<div class = "modal fade" id = "RegisterModal" tabindex = "-1" role = "dialog" aria-labelledby = "RegisterModalLabel" aria-hidden = "true" style="color:black">
							   <div class = "modal-dialog">
							      <div class = "modal-content">
							         <div class = "modal-header">
							            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
							               x
							            </button>
							            <h4 class = "modal-title" id = "RegisterModalLabel">
							               Register
							            </h4>
							         </div>
							         <div class = "modal-body">
							            <?php include('views/register.php');?>
							         </div>
							      </div><!-- /.modal-content -->
							   </div><!-- /.modal-dialog -->				   
							</div><!-- /.modal -->
							<script>
							   $(function () { $('#RegisterModal').modal('hide')})});
							</script>
						</div>
						<?php 
							if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
						?>	
						<div class="col-md-3 navicon">
							<p data-toggle = "modal" data-target = "#HistoryModal">History</p>
							<div class = "modal fade" id = "HistoryModal" tabindex = "-1" role = "dialog" aria-labelledby = "HistoryModalLabel" aria-hidden = "true" style="color:black">
							   <div class = "modal-dialog">
							      <div class = "modal-content">
							         <div class = "modal-header">
							            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
							               x
							            </button>
							            <h4 class = "modal-title" id = "HistoryModalLabel">
							               History
							            </h4>
							         </div>
							         <div class = "modal-body">
							            <?php include('views/viewHistory.php');?>
							         </div>
							      </div><!-- /.modal-content -->
							   </div><!-- /.modal-dialog -->				   
							</div><!-- /.modal -->
							<script>
							   $(function () { $('#RegisterModal').modal('hide')})});
							</script>
						</div>
						<?php 
                         	}
						?>
						
						<!-- Display logout option only when login session variables exist -->
						<?php
							if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
						?>
						<div class="col-md-3 text-right navicon">
							<p><a href="views/logout.php">Logout</a></p>
						</div>
						<?php }?>
						</div>
					</div>
				<div class="container">
					<div class="row hero-content">
						<div class="col-md-12">
							<h1 class="animated fadeInDown">An Exclusive Market Place, where you get a lot of stuff you are looking for.</h1>
							<a href="#about" class="learn-btn animated fadeInUp">Learn more <i class="fa fa-arrow-down"></i></a>
						</div>
					</div>
				</div>
			</section>
		</header>
		<section class="features-list" id="features" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
					<?php include('views/AboutUs.php');?>
					</div>
				</div>
			</div>
		</section>
		<section class="features-intro" id="mostViewed">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5 nopadding features-intro-img">
						<div class="features-bg">
							<div class="texture-overlay"></div>
							</div>
					</div>
					<div class="col-md-7 nopadding">
						<div class="features-slider">
							<?php include('views/mostVisited.php');?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="video" id="about">
			<div class="container">
				<h1>Our Vendors</h1>
				<h2>We build relations that lasts forever.</h2>
			</div>
		</section>
		<section class="screenshots" id="screenshots">
			<div class="container-fluid">
				<?php include('views/vendors.php');?>
			</div>
		</section>
		<section class="download" id="download">
			<div class="container">
				<h1 style="color:#006699">Let us know what you think about us ...!!!</h1><br/>
				<div class="row">
					<div class="col-md-12 text-center wp4">
						<!-- Using Facebook comments API -->
						<div class="fb-comments" data-href="http://localhost/projects/MarketPlace/#" data-width="100%"></div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h1 class="footer-logo">
						<img src="img/logo-blue.png" alt="Footer Logo Blue">
						</h1>
						<p>© CoolBay 2015</p>
					</div>
					<div class="col-md-7">
						<ul class="footer-nav">
							<li><a href="#features">About</a></li>
							<li><a href="#mostViewed">Most Viewed</a></li>
							<li><a href="#screenshots">Our Vendors</a></li>
							<li><a href="#download">Social Media</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- Using Facebook like button API -->
						<div class="fb-like" data-href="http://www.sejalgupta.com/marketplace" data-width="100%" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
					</div>
				</div>
			</div>
		</footer>
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="#features"><i class="fa fa-home"></i>About</a></li>
					<li><a href="#mostViewed"><i class="fa fa-eye"></i>Most Viewed</a></li>
				</ul>
				<ul>
					<li><a href="#screenshots"><i class="fa fa-group"></i>Our Vendors</a></li>
					<li><a href="#download"><i class="fa fa-comment"></i>Social Media</a></li>
				</ul>
			</nav>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/min/toucheffects-min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/min/scripts-min.js"></script>
	</body>
</html>