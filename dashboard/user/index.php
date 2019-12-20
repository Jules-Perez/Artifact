<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Home</title>
	<link rel="stylesheet" type="text/css" href="../../../style.css">
	<link rel="stylesheet" type="text/css" href="../../../fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin|Courgette|Ubuntu+Condensed&display=swap" rel="stylesheet">
</head>

	<style type="text/css">
		body{
			margin: 0;
			font-family: 'Ubuntu Condensed', sans-serif !important;
		}
		.side-bar{
			position: fixed;
			height: 100vh;
			width: 275px;
			left: 0;
			background-color: var(--black);
		}

		.side-bar .header{
			text-align: center;
			padding-top: 25px;
			padding-bottom: 35px;
			border-bottom: 5px solid black;
		}

		.side-bar .header img{
			width: 50px;
			height: 50px;
			border-radius: 25px;
			border: 2px solid white;
		}

		.side-bar .header .user_name{
			color: white;
		}

		.side-bar .header button{
			background-color: transparent;
			border: 1px solid var(--lightblue);
			color: white;
			padding: 3px;
		}

		.side-bar .options {
			padding: 15px 0;
		}

		.side-bar .options .title{
			padding-left: 25px;
			color: grey;
			font-size: 14px;
		}

		.side-bar .options .container{
			margin-bottom: 25px;
			margin-top: 15px;
		}

		.side-bar .options .container a{
			display: block;
			font-size: 16px;
			color: white;
			padding: 10px 35px;
			padding-right: 0;
			text-decoration: none;
		}

		.side-bar .options .container a:hover{
			background-color: black;
			transition: 0.3s;
			padding-left: 45px;
		}

		.side-bar .options .container a i{
			margin-right: 3px;
		}

	</style>

<body>

	<div class="side-bar">
		<div class="header">
			<img src="../../../imgs/sample1.jpg">
			<div class="user_name">
				(User Name)
			</div>
		</div>

		<div class="options">
			<div class="title">
				Main
			</div>
			<div class="container">
				<a href="#"><i class="fas fa-home"></i> Home</a>
				<a href="#"><i class="fas fa-chart-area"></i> Statistics</a>
			</div>
			<div class="title">
				My Gallery
			</div>
			<div class="container">
				<a href="#"><i class="far fa-plus-square"></i> Add Art</a>
				<a href="#"><i class="fas fa-palette"></i> View Gallery</a>
				<a href="#"><i class="fas fa-star"></i> Favorites</a>
			</div>
			<div class="title">
				Settings
			</div>
			<div class="container">
				<a href="#"><i class="fas fa-user-alt"></i> Account</a>
				<a href="#"><i class="fas fa-sign-out-alt"></i> Log-out</a>
			</div>
		</div>
	</div>

</body>
</html>