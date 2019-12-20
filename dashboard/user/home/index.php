<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Home</title>
	<?php require '../../dashboardlinks.php'; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	<style type="text/css">
		body{
			margin: 0;
			background-color: #FAFAFA;
			font-family: 'Ubuntu Condensed', sans-serif !important;
		}

		@media (max-width: 1351px){
		.big-container.res{
			width: 98%!important;
		}

		.sidebr{
			display: none!important;
		}

		@media (max-width: 580px){
			.inner_container.box{
				margin: 0 5px!important;
				padding: 5px 15px!important;
			}

			.inner_container{
				padding: 0 5px!important;
			}
		}
	}

	</style>

<body>

	<div class="side-bar">
		<div class="header" onclick="view_profile()">
			<img id="user_img" src="../../../imgs/sample1.jpg">
			<div class="user_name">
				(User Name)
			</div>
		</div>

		<div class="options">
			<div class="title">
				Main
			</div>
			<div class="container">
				<a href="../home" class="active"><i class="fas fa-home"></i> <span class="side_txt">Home</span></a>
				<a href="../statistics"><i class="fas fa-chart-area"></i> <span class="side_txt">Statistics</span></a>
			</div>
			<div class="title">
				My Gallery
			</div>
			<div class="container">
				<a href="../mygallery"><i class="fas fa-palette"></i> <span class="side_txt">My Gallery</span></a>
				<a href="../favorites"><i class="fas fa-star"></i> <span class="side_txt">Favorites</span></a>
			</div>
			<div class="title">
				Settings
			</div>
			<div class="container">
				<a href="../account" ><i class="fas fa-user-alt"></i> <span class="side_txt">Account</span></a>
				<a href="../../log_out.php"><i class="fas fa-sign-out-alt"></i> <span class="side_txt">Log-out</span></a>
			</div>
			
		</div>
		<button onclick="toggle_navbar()" class="minimize_nav"><i class="fas fa-angle-left"></i> <span class="side_txt">Compress</span></button>
	</div>

		<main>
			<div class="sidebr small-container fixed" >
				<div class="inner_container box">
					<div class="header">
						My Profile
					</div>
					<div class="body">
						<div class="user_container"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name top">(User Name)<br><a href="../../../gallery/Renzo/">view profile</a></div></div>
						<br>
						<div>Followers - <span class="stat_count">26</span></div>
						<div>Profile Views - <span class="stat_count">62</span></div>
					</div>
					<div class="line_break"></div>
					<div class="header">
						New Artist
					</div>
					<div class="body">
						<div class="user_container"><img class="user_img" src="../../../imgs/sample2.jpg"><div class="user_name top">Jules</div><button class="follow_btn right">follow</button></div>
						<div class="user_container"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name top">Renzo</div><button class="follow_btn right">follow</button></div>
						<div class="user_container"><img class="user_img" src="../../../imgs/sample3.jpg"><div class="user_name top">Jaypee</div><button class="follow_btn right">follow</button></div>
					</div>
					<div class="line_break"></div>
					<div class="header">
						<div class="brand">
							<span>Art</span>ifact
						</div>
					</div>
					<div class="body">
						<div class="links">
							<a href="../../index.php">Home</a> <i class="fas fa-circle"></i> <a href="../../index.php">Gallery</a> <i class="fas fa-circle"></i> <a href="../../index.php">About <div class="brand" style="font-size: 14px; margin-left: 5px;">
							<span>Art</span>ifact
						</div></a> <i class="fas fa-circle"></i> <a href="../../index.php">Contact us</a>
						</div>
					</div>
				</div>
			</div>

			<div class="big-container res">
				<div class="inner_container box" style="margin: 0px 25px; margin-bottom: 15px">
					<div class="header">
						My Profile
					</div>
					<div class="body">
						<div class="user_container"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name top">(User Name)<br><a href="../../../gallery/Renzo/">view profile</a></div></div>
						<br>
						<div>Followers - <span class="stat_count">26</span></div>
						<div>Profile Views - <span class="stat_count">62</span></div>
					</div>
					<div class="line_break"></div>
					<div class="header">
						New Artist
					</div>
					<div class="body">
						<div class="user_container"><img class="user_img" src="../../../imgs/sample2.jpg"><div class="user_name top">Jules</div><button class="follow_btn right">follow</button></div>
						<div class="user_container"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name top">Renzo</div><button class="follow_btn right">follow</button></div>
						<div class="user_container"><img class="user_img" src="../../../imgs/sample3.jpg"><div class="user_name top">Jaypee</div><button class="follow_btn right">follow</button></div>
					</div>
				</div>
				<div class="inner_container" style="margin-bottom: -15px;">

					<div class="header box">Artist Feed</div>
					<div class="body">

						<div class="content_image">
							<div class="img"><img src="../../../imgs/sample1.jpg"></div>
							<div class="foot"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name">Renzo</div><div class="right"><i class="far fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
						</div>
						<div class="content_image">
							<div class="img"><img src="../../../imgs/sample2.jpg"></div>
							<div class="foot"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name">Renzo</div><div class="right"><i class="far fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
						</div>
						<div class="content_image">
							<div class="img"><img src="../../../imgs/sample3.jpg"></div>
							<div class="foot"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name">Renzo</div><div class="right"><i class="far fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
						</div>
					</div>

					
				</div>
				<div class="inner_container box" style="margin: 0px 25px; margin-bottom: 15px; height: auto; padding-bottom: 0;">
					<div class="header" style="text-align: center;">
						<div class="brand">
							<span>Art</span>ifact
						</div>
					</div>
					<div class="body">
						<div class="links">
							<a href="../../index.php">Home</a> <i class="fas fa-circle"></i> <a href="../../index.php">Gallery</a> <i class="fas fa-circle"></i> <a href="../../index.php">About <div class="brand" style="font-size: 14px; margin-left: 5px;">
							<span>Art</span>ifact
						</div></a> <i class="fas fa-circle"></i> <a href="../../index.php">Contact us</a>
						</div>
					</div>
				</div>

			</div>

		</main>

</body>
</html>

<script type="text/javascript">
	function side_bar_listener(x) {
	  if (x.matches) { // If media query matches'
	  	responsive = true;
	  	minimized = true;
	    toggle_navbar();
	  } else {
	  	responsive = false;
	  	minimized = false;
	    toggle_navbar();
	  }
	}

	var x = window.matchMedia("(max-width: 651px)")
	side_bar_listener(x)
	x.addListener(side_bar_listener)

</script>