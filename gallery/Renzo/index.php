<!DOCTYPE html>
<html>
<head>
	<title>Artifact</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<script type="text/javascript" src="../../jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin|Courgette|Ubuntu+Condensed&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<style type="text/css">
	body{
		margin: 0;
		background-color: #F7F7F7;
		font-family: 'Ubuntu Condensed', sans-serif !important;
	}



	/* Gallery */

	.header_img{
		background-image: url(../../imgs/19.jpg);
		background-size: cover;
		background-position: center;
		height: 500px;
		filter: brightness(1);
		z-index: -25;
	}

	.user_header{
		padding: 10px 150px;
		z-index: 10;
		position: relative;
		background-color: white;
		box-shadow: 0px 2px 5px lightgrey;
		height: 115px;
	}

	.user_header .user_details{
		margin-left: 235px;	
	}

	.user_header .user_details .bio{
		margin-top: 15px;
		font-size: 14px;
		color: grey;
		max-width: 500px;
	}


	.user_header .user_details .user_name{
		font-size: 22px;
		color: grey;
	}

	.user_header .user_img {
		position: absolute;
		top: -120px;
	}

	.user_header .user_img img{
		width: 200px;
		height: 200px;
		
		border-radius: 125px;
		border: 12px solid rgba(226, 226, 226, .5);
	}



	.search_filters{
		padding: 15px 1.75%;
	}

	.search_filters button{
		width: 100%;
		padding: 5px 10px;
	}

	.hamburger{
		display: none;
		text-align: center;
		font-size: 20px;

	}

	


</style>
<body>
	<nav>
			<div class="brand">
				<span>Art</span>ifact
			</div>
			<div class="hamburger_content">
				<div class="navigation"><a href="../../">Home</a><a href="#">Browse Gallery</a> <a href="#">About us</a> <a href="#">Contact us</a></div>
				<button onclick="show_dashboard()">sign-up</button>
			</div>
			<div class="hamburger" onclick="nav_toggle()"><i class="fas fa-bars"></i></div>
			
	</nav>
	<div class="header_img">

	</div>
	<div class="user_header">
		<div class="user_details">
			<div class="user_name">Renzo Alfonso</div>
			<div class="bio">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>
		</div>
		
		<div class="user_img">
			<img src="../../imgs/sample1.jpg">
		</div>
		

	</div>
	<div class="gallery">
		
		<div style="margin-bottom: 25px;">
			<h1 style="">RENZO'S GALLERY</h1>
			<div class="searchbar"><input type="text" name="" placeholder="Search here..."><button><i class="fas fa-search"></i></button></div>
			<div class="search_filters">
				<button onclick="toggle_description()">Show Art Descriptions</button>
			</div>
		</div>
		<div class="photos">
			<div class="col">
				<div class="img_container">
					<img class="img" width="100%" src="../../imgs/sample1.jpg" >
					<div class="description">
						<div class="title">Color Blast</div><div class="author">by: <a href="#">Renzo Alfonso</a></div>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<div class="foot">
							<i class="far fa-heart"></i>
							<button><i class="fas fa-shopping-cart"></i> Buy <span>$250.00</span></button>
						</div>
						
					</div>
				</div>
					
				<div class="img_container">
					<img class="img" width="100%" src="../../imgs/sample2.jpg">
					<div class="description">
						<div class="title">Color Blast</div><div class="author">by: <a href="#">Renzo Alfonso</a></div>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<div class="foot">
							<i class="far fa-heart"></i>
							<button><i class="fas fa-shopping-cart"></i> Buy <span>$250.00</span></button>
						</div>
						
					</div>
				</div>
				
				<div class="img_container">
					<img class="img" width="100%" src="../../imgs/sample3.jpg">
					<div class="description">
						<div class="title">Color Blast</div><div class="author">by: <a href="#">Renzo Alfonso</a></div>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<div class="foot">
							<i class="far fa-heart"></i>
							<button><i class="fas fa-shopping-cart"></i> Buy <span>$250.00</span></button>
						</div>
						
					</div>
				</div>

			</div>
			<div class="col">
					<div class="img_container">
					<img class="img" width="100%" src="../../imgs/sample2.jpg">
					<div class="description">
						<div class="title">Color Blast</div><div class="author">by: <a href="#">Renzo Alfonso</a></div>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<div class="foot">
							<i class="far fa-heart"></i>
							<button><i class="fas fa-shopping-cart"></i> Buy <span>$250.00</span></button>
						</div>
						
					</div>
				</div>
					
				<div class="img_container">
					<img class="img" width="100%" src="../../imgs/sample3.jpg">
					<div class="description">
						<div class="title">Color Blast</div><div class="author">by: <a href="#">Renzo Alfonso</a></div>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<div class="foot">
							<i class="far fa-heart"></i>
							<button><i class="fas fa-shopping-cart"></i> Buy <span>$250.00</span></button>
						</div>
						
					</div>
				</div>
				
				<div class="img_container">
					<img class="img" width="100%" src="../../imgs/sample1.jpg">
					<div class="description">
						<div class="title">Color Blast</div><div class="author">by: <a href="#">Renzo Alfonso</a></div>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<div class="foot">
							<i class="far fa-heart"></i>
							<button><i class="fas fa-shopping-cart"></i> Buy <span>$250.00</span></button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col">
					<div class="img_container">
					<img class="img" width="100%" src="../../imgs/sample3.jpg">
					<div class="description">
						<div class="title">Color Blast</div><div class="author">by: <a href="#">Renzo Alfonso</a></div>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<div class="foot">
							<i class="far fa-heart"></i>
							<button><i class="fas fa-shopping-cart"></i> Buy <span>$250.00</span></button>
						</div>
						
					</div>
				</div>
					
				<div class="img_container">
					<img class="img" width="100%" src="../../imgs/sample1.jpg">
					<div class="description">
						<div class="title">Color Blast</div><div class="author">by: <a href="#">Renzo Alfonso</a></div>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<div class="foot">
							<i class="far fa-heart"></i>
							<button><i class="fas fa-shopping-cart"></i> Buy <span>$250.00</span></button>
						</div>
						
					</div>
				</div>
				
				<div class="img_container">
					<img class="img" width="100%" src="../../imgs/sample2.jpg">
					<div class="description">
						<div class="title">Color Blast</div><div class="author">by: <a href="#">Renzo Alfonso</a></div>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<div class="foot">
							<i class="far fa-heart"></i>
							<button><i class="fas fa-shopping-cart"></i> Buy <span>$250.00</span></button>
						</div>
						
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="footer">
		© <?php echo date("Y"); ?> Copyright:
      	<a href="https://startupproject.ph/" target="_blank"> Startup Project Ventures </a>
	</div>
</body>
</html>

<script type="text/javascript">

	function nav_toggle(){
		$(".hamburger_content").slideToggle(400);
	}

	function show_nav(x) {
	  if (x.matches) { // If media query matches'
	  	$(".hamburger_content").hide();
	  } else {
	  	$(".hamburger_content").show();
	  }
	}

	function toggle_description(){
		$(".description").slideToggle(300);
	}

		function show_dashboard(){
		window.location.href = "../../dashboard/user/home/";
	}

</script>