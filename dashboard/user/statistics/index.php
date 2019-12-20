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

		.record_box{
			padding: 15px;
			padding-right: 0px;
			color: grey;
		}

		.record_box .val{
			display: block;
			font-size: 65px;
		}

		.earning_record{
			padding: 12px 0;
			font-size: 20px;
			color: grey;
		}

		.earning_record span{
			color: var(--lightblue);
		}

		.history_data{
			padding: 0 25px; 
			width: 100%;
		}

		.history_data th{
			text-align: left;
			color: white;
			padding: 10px;
			font-size: 18px;
			background-color: var(--lightblue);

		}

		.history_data td{
			padding: 10px;
			color: black;
			font-size: 16px;
			

		}

		.history_data tr:nth-child(even){
			background-color: #F7F7F7;

		}

		@media (max-width: 901px){
			.small-container.res{
				width: 98%;
				display: block;
			}

			.whole-container.res{
				width: 98%!important;
			}

			.small-container.res1{
				width: 31%;
			}

			.record_box{
				padding: 5px;
				font-size: 12px;
				letter-spacing: 1px;
			}

			.record_box .val{
				letter-spacing: 0px;
				font-size: 20px;
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
				<a href="../home" ><i class="fas fa-home"></i> <span class="side_txt">Home</span></a>
				<a href="../statistics" class="active"><i class="fas fa-chart-area"></i> <span class="side_txt">Statistics</span></a>
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

			<div>
			<div class="small-container res1">
				<div class="inner_container box" style="border-left: 5px solid var(--lightblue); padding: 5px;">
					<div class="record_box">
						Today Sale: <div class="val" style="color: var(--lightblue)">$150.00</div>
					</div>
					
				</div>
				<div class="inner_container box" style="border-left: 5px solid var(--lightblue); padding: 5px;">
					<div class="record_box">
						Likes: <div class="val" style="color: var(--lightblue)">1,024,344</div>
					</div>
					
				</div>
			</div>
			<div class="small-container res1">
				<div class="inner_container box" style="border-left: 5px solid var(--lightblue); padding: 5px;">
					<div class="record_box">
						Month Sale: <div class="val" style="color: var(--lightblue)">$1,244.00</div>
					</div>
					
				</div>
				<div class="inner_container box" style="border-left: 5px solid var(--lightblue); padding: 5px;">
					<div class="record_box">
						Followers: <div class="val" style="color: var(--lightblue)">252,265</div>
					</div>
					
				</div>
			</div>
			<div class="small-container res1">
				<div class="inner_container box" style="border-left: 5px solid var(--lightblue); padding: 5px;">
					<div class="record_box">
						Total Sales: <div class="val" style="color: var(--lightblue)">$2,500.00</div>
					</div>

					
				</div>
				<div class="inner_container box" style="border-left: 5px solid var(--lightblue); padding: 5px;">
					<div class="record_box">
						Gallery Views: <div class="val" style="color: var(--lightblue)">921,364</div>
					</div>
					
				</div>
			</div>
			<div class="small-container res">
				<div class="inner_container box" style="padding: 15px 20px;">
					<div class="header">Sales</div>
					<div class="earning_record">
						Earned this month: <br><span>$1,244.00</span>
					</div>
					<div class="earning_record">
						Total Earned: <br><span>$2,500.00</span>
					</div>
				</div>

			</div>
			</div>


			<!--  -->
<!-- 			<div>
				<div class="big-container" style="width: 71.5%">
					<div class="inner_container box" style="height: 250px;">
						
					</div>
				</div>
				<div class="small-container">
					<div class="inner_container box" style="height: 250px;">
						
						
					</div>
				</div>
			</div> -->
			<div class="whole-container res" style="width: 95.75%">
				<div class="inner_container box" style="padding: 25px 0;">
					<table class="history_data">
						<tr>
							<th>Date</th>
							<th>Art Name</th>
							<th>Earned</th>
						</tr>
						<tr>
							<td>12/25/19</td>
							<td>Color Blast</td>
							<td>$350.00</td>
						</tr>
						<tr>
							<td>12/25/19</td>
							<td>Color Blast</td>
							<td>$350.00</td>
						</tr>
						<tr>
							<td>12/25/19</td>
							<td>Color Blast</td>
							<td>$350.00</td>
						</tr>
						<tr>
							<td>12/25/19</td>
							<td>Color Blast</td>
							<td>$350.00</td>
						</tr>
						<tr>
							<td>12/25/19</td>
							<td>Color Blast</td>
							<td>$350.00</td>
						</tr>
					</table>
						
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

	var x = window.matchMedia("(max-width: 601px)")
	side_bar_listener(x)
	x.addListener(side_bar_listener)


</script>