<!DOCTYPE html>
<html>
<head>
	<title>Artifact</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<script type="text/javascript" src="jquery.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Cabin|Courgette|Ubuntu+Condensed&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<style type="text/css">
	body{
		margin: 0;
		background-color: #FAFAFA;
		font-family: 'Ubuntu Condensed', sans-serif !important;
	}
	nav{
		z-index: 15;
		position: relative;
		background-color: transparent;
		padding: 15px 50px;
		color: white;
		box-shadow: 1px 1px 5px grey;
	}

	.brand{
		display: inline-block;
		color: var(--black);
		font-size: 24px;
		font-family: 'Courgette', cursive;

	}

	.brand span{
		color: var(--lightblue);
	}


	nav  button{
		border: none;
		background-color: transparent;
		float: right;
		color: var(--black);
		font-size: 18px;
		padding: 17px 0;
		padding-bottom: 20px;
		margin-top: -15px;
		font-family: 'Cabin', sans-serif;

	}

	nav .navigation{
		margin-left: 25px;
		display: inline-block;
	}

	nav .navigation a{
		padding: 5px 20px;
		color: grey;
		text-decoration: none;
	}

	nav .navigation a:hover{
		color: black;
		cursor: pointer;
		transition: 0.3s;
	}

	.intro{
		margin-top: 5px;
		text-align: right;
		background-color: white;
		padding: 50px 100px;
	}

	.intro .text{
		margin-top: 70px;
		width: 35%;
		display: inline-block;
		position: relative;
		font-size: 18px;
		bottom:125px;
		left: 35px;
		
	}
	.intro .text h1{
		border-left: 15px solid var(--green);
		padding-left: 10px;
		text-align: left;
	}

	.intro .text p{
		padding: 15px;
		padding-left: 25px;
		background-color: white;
		margin-top: 50px;
		text-align: left;
	}

	.intro .img{
		background-image: url(imgs/intro.jpg);
		width: 60%;
		background-size: cover;
		background-repeat: no-repeat;
		height: 500px;	
		display: inline-block;
	}

	.gallery{
		padding: 50px 25px;
	}

	.gallery h1{
		margin-left: 25px;
		font-size: 65px;
	}

	.gallery .search{
		display: inline-block;
		background-color: white;
	}

	.gallery .photos{
		display: inline-block;
		width: 100%;
		overflow-y: auto;
		vertical-align: top;
		text-align: center;
	}

	.gallery .photos .col{
		display: inline-block;
		width: 32%;
		height: 99%;
	}


	.gallery .photos .img{
		width: 96%;
		margin-bottom: 25px;
		box-shadow: 1px 2px 3px lightgrey;
	}

	.footer{
		background-color: var(--black);
		padding: 15px 50px;
		color: grey;
		font-size: 14px;
	}

	.footer a{
		color: white;
	}

	.searchbar{
		text-align: center;
		margin: auto;
		width: 97%;
		margin-bottom: 15px;
	}

	.searchbar input{
		outline: none;
		width: 73%;
		padding: 8px 1%;
		border: none;
		font-size: 16px;
	}

	.searchbar button{
		color: white;
		background-color: var(--lightblue);
		font-size: 16px;
		vertical-align: top;
		border: none;
		width: 23%;
		padding: 8px 1%;
	}

	@media (max-width: 781px){

		.intro{
			padding: 25px;
		}
		.intro .text h1{
			font-size: 20px;
		}

		.intro .text p{
			font-size: 14px;
		}

		.intro .text{
			width: 50%;
		}

		.intro .img{
			width: 40%!important;
		}

		.gallery .photos .col{
			width: 100%;
			display: block;
		}

		.gallery h1{
			font-size: 35px;
		}
	}

	

</style>
<body>
	<nav>
			<div class="brand">
				<span>Art</span>ifact
			</div>
			<div class="hamburger_content">
				<div class="navigation"><a href="#">Home</a><a href="#home_gallery">Browse Gallery</a> <a href="#">About us</a> <a href="#">Contact us</a></div>
				<button onclick="show_dashboard()">sign-up</button>
				
			</div>
			<div class="hamburger" onclick="nav_toggle()"><i class="fas fa-bars"></i></div>
			
	</nav>
	<div class="intro">
		<div class="text">
			<h1>SELL YOUR ART</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and </p>
		</div>
		<div class="img">
			
		</div>
	</div>
	<div class="gallery" id="home_gallery">
		
		<div style="position: sticky;">
			<h1>GALLERY</h1>
			<div class="searchbar"><input type="text" name="" placeholder="Search here..."><button><i class="fas fa-search"></i></button></div>
		</div>
		<div class="photos">
			<div class="col">

					<img class="img" width="100%" src="imgs/sample1.jpg">
					<img class="img" width="100%" src="imgs/sample2.jpg">
					<img class="img" width="100%" src="imgs/sample3.jpg">
			</div>
			<div class="col">
					<img class="img" width="100%" src="imgs/sample2.jpg">
					<img class="img" width="100%" src="imgs/sample3.jpg">
					<img class="img" width="100%" src="imgs/sample1.jpg">
			</div>
			<div class="col">
					<img class="img" width="100%" src="imgs/sample1.jpg">
					<img class="img" width="100%" src="imgs/sample2.jpg">
					<img class="img" width="100%" src="imgs/sample3.jpg">

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


	function show_dashboard(){
		window.location.href = "dashboard/user/home/";
	}

	var x = window.matchMedia("(max-width: 701px)")
	show_nav(x)
	x.addListener(show_nav)

</script>