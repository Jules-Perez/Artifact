<!DOCTYPE html>
<html>
<head>
	<title>favorites</title>
	<?php require '../../dashboardlinks.php'; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	<style type="text/css">
		.fas.fa-heart{
			color: #fd4664!important;
		}

		@media (max-width: 951px){
			.img_col{
				width: 98%;
				display: block;

			}

			.inner_container.res{
				padding: 5px;
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
				<a href="../favorites" class="active"><i class="fas fa-star"></i> <span class="side_txt">Favorites</span></a>
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
		<div class="whole-container">
			<div class="inner_container res">
				<div class="input">
					<label>SEARCH</label>
					<input class="basic_input" type="text" id="upload_input"   placeholder="Artist Name, Art Name, etc">
				</div>
			</div>
		</div>
		<div class="whole-container">
		<div class="img_col">
			<div class="content_image">
				<div class="img"><img src="../../../imgs/sample1.jpg"></div>
				<div class="foot"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name">Renzo</div><div class="right"><i class="fas fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
			</div>
			<div class="content_image">
				<div class="img"><img src="../../../imgs/sample3.jpg"></div>
				<div class="foot"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name">Renzo</div><div class="right"><i class="fas fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
			</div>
			<div class="content_image">
				<div class="img"><img src="../../../imgs/sample2.jpg"></div>
				<div class="foot"><img class="user_img" src="../../../imgs/sample1.jpg"><div class="user_name">Renzo</div><div class="right"><i class="fas fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
			</div>
		</div>
		<div class="img_col">
			<div class="content_image">
				<div class="img"><img src="../../../imgs/sample2.jpg"></div>
				<div class="foot"><img class="user_img" src="../../../imgs/sample2.jpg"><div class="user_name">Jaypee</div><div class="right"><i class="fas fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
			</div>
			<div class="content_image">
				<div class="img"><img src="../../../imgs/sample1.jpg"></div>
				<div class="foot"><img class="user_img" src="../../../imgs/sample2.jpg"><div class="user_name">Jaypee</div><div class="right"><i class="fas fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
			</div>
			<div class="content_image">
				<div class="img"><img src="../../../imgs/sample3.jpg"></div>
				<div class="foot"><img class="user_img" src="../../../imgs/sample2.jpg"><div class="user_name">Jaypee</div><div class="right"><i class="fas fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
			</div>

		</div>
		<div class="img_col">
			<div class="content_image">
				<div class="img"><img src="../../../imgs/sample3.jpg"></div>
				<div class="foot"><img class="user_img" src="../../../imgs/sample3.jpg"><div class="user_name">Jules</div><div class="right"><i class="fas fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
			</div>
			<div class="content_image">
				<div class="img"><img src="../../../imgs/sample2.jpg"></div>
				<div class="foot"><img class="user_img" src="../../../imgs/sample3.jpg"><div class="user_name">Jules</div><div class="right"><i class="fas fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
			</div>
			<div class="content_image">
				<div class="img"><img src="../../../imgs/sample1.jpg"></div>
				<div class="foot"><img class="user_img" src="../../../imgs/sample3.jpg"><div class="user_name">Jules</div><div class="right"><i class="fas fa-heart"></i><button class="buy_btn"><i class="fas fa-shopping-cart"></i> Buy</button></div></div>
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

	var x = window.matchMedia("(max-width: 580px)")
	side_bar_listener(x)
	x.addListener(side_bar_listener)

	function Modal(param,id){

		switch(param){
			case "show":
				$(".modal_mask").fadeIn(300);
				setTimeout(function(){
					$("#"+id).fadeIn(300);
				},350);
				break;
			case "hide":
				$("#"+id).fadeOut(300);
				
				setTimeout(function(){
					$(".modal_mask").fadeOut(300);
				},350);
				break;
			default:
				$(".modal_mask").fadeToggle(300);
				break;
		}
		
	}

	function upload_img(){
    var fd = new FormData();
    var files = $('#upload_input')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: 'upload_img.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    $("#uploaded_img").attr("src",response); 
                }else{
                    alert('file not uploaded');
                }
            },
        });
        $("#view_uimg").slideDown(300);
	}
</script>