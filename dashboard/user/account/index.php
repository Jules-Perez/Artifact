<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<?php require '../../dashboardlinks.php'; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	<style type="text/css">
		.acc_profile_img{
			padding: 25px 0;
			text-align: center;
			margin-top: 25px;
			padding-top: 25px;
		}

		.acc_profile_img img{
			outline: none;
			border: 3px solid grey;
			width: 250px;
			height: 250px;
			border-radius: 150px;
		}
		
		@media (max-width: 1151px){
			.med-container.res{
				width: 98%;
				display: block;
			}
		}
	</style>

<body>
	<div class="modal_mask"></div>

	<div id="add_img" class="modal-container center">
		<div class="modal med">
			<div class="input">
				<label>Image Name </label>
				<input class="basic_input" type="" name="" placeholder="Image Name ...">
			</div>
			<div class="input">
				<label>Image File </label>
				<input class="basic_input" type="file" id="upload_input" onchange="upload_img()" name="file" placeholder="Image Name ...">
			</div>
			<div class="basic_input" style="display: none; padding: 0; width: 100%;" id="view_uimg" >
				<img id="uploaded_img" src="">
			</div>
			<div class="footer">
				<button class="button_1">Add</button> <button class="button_1" onclick="Modal('hide','add_img')" >Cancel</button>
			</div>
		</div>
	</div>

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
				<a href="../home"><i class="fas fa-home"></i> <span class="side_txt">Home</span></a>
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
				<a href="../account" class="active"><i class="fas fa-user-alt"></i> <span class="side_txt">Account</span></a>
				<a href="../../log_out.php"><i class="fas fa-sign-out-alt"></i> <span class="side_txt">Log-out</span></a>
			</div>
			
		</div>
		<button onclick="toggle_navbar()" class="minimize_nav"><i class="fas fa-angle-left"></i> <span class="side_txt">Compress</span></button>
	</div>

	<main>
		<div class="med-container res">
			<div class="inner_container box"  style="min-height: 60vh;">

				<div class="acc_profile_img">
					<img src="../../../imgs/sample1.jpg">
					<div class="input">
					<label>Upload Image</label>
					<input class="basic_input" type="file" name="">
				</div>
				</div>
			</div>
		</div>
		<div class="med-container res">
			<div class="inner_container box" style="min-height: 60vh;">
				<h1>Account Details</h1>
				<div class="input">
					<label>First Name</label>
					<input class="basic_input" type="text" name="" placeholder="User">
				</div>
				<div class="input">
					<label>Last Name</label>
					<input class="basic_input" type="text" name="" placeholder="Name">
				</div>
				<div class="input">
					<label>Email</label>
					<input class="basic_input" type="text" name="" placeholder="User@email.com">
				</div>
				<div class="input">
					<label>Contact	</label>
					<input class="basic_input" type="text" name="" placeholder="09999999999">
				</div>
				<div class="input">
					<label>Password</label>
					<input class="basic_input" type="Password" name="" placeholder="*******">
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
	  	minimized = true;
	  	responsive = true;
	    toggle_navbar();
	  } else {
	  	minimized = false;
	  	responsive = false;
	    toggle_navbar();
	  }
	}

	var x = window.matchMedia("(max-width: 900px)")
	side_bar_listener(x)
	x.addListener(side_bar_listener)

</script>