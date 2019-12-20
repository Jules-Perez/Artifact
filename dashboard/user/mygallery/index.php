<!DOCTYPE html>
<html>
<head>
	<title>gallery</title>
	<?php require '../../dashboardlinks.php'; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	<style type="text/css">

	.big-container{
		width: 73%!important;
	}

	@media (max-width: 1351px){
		.big-container.res{
			width: 98%!important;
		}

		.sidebr{
			display: none!important;
		}

		.modal.med{
			top: 0;
			width: 75%;
			margin-top: 5px;
			max-height: 94vh;
		}

	}

	@media (max-width: 681px){
		.img_col{
			width: 100%;
			display: block;
		}

		.modal.med{
			top: 0!important;
			margin-top: 5px;
			width: 90%;
			max-height: 94vh;
		}
		.inner_container.res{
			padding: 5px;
		}
	}

	.settings_btn{
		padding: 5px 10px;
		margin: 5px;
		display: inline-block;
		font-size: 16px;
	}

	.settings_btn:hover{
		cursor: pointer;
		color: var(--lightblue);
	}

	.settings_btn.right i{
		transform: scaleX(-1);
	}
		
	#upload_img{
		transform: rotate();
	}
	</style>
	


<body>
	<div class="modal_mask"></div>

	<div id="add_img" class="modal-container center">
		<div class="modal med">
			<div class="input">
				<label>Art Name </label>
				<input class="basic_input" type="" name="" placeholder="Art Name ...">
			</div>
			<div class="input">
				<label>Image File </label>
				<input class="basic_input" type="file" id="upload_input" onchange="upload_img()" name="file" placeholder="Image Name ...">
			</div>
			<div class="basic_input" style="display: none; padding: 0; width: 100%;" id="view_uimg" >
				<img id="uploaded_img" src="">
				<div style="border: 1px solid lightgrey;padding: 5px 10px;">
					<div class="settings_btn left" onclick='rotate_img("left")'>Rotate <i class="fas fa-undo"></i></div> <div class="settings_btn right" onclick='rotate_img("right")'>Rotate <i class="fas fa-undo"></i></div>
					<div class="settings_btn" onclick='flip_img("horizontal")'>Flip Horizontal <i class="fas fa-arrows-alt-h"></i></div><div class="settings_btn" onclick='flip_img("vertical")'>Flip Vertical <i class="fas fa-arrows-alt-v"></i></div>
				</div>
			</div>
			<div class="modal_footer" style="background-color: transparent;">
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
				<a href="../mygallery" class="active"><i class="fas fa-palette"></i> <span class="side_txt">My Gallery</span></a>
				<a href="../favorites"><i class="fas fa-star"></i> <span class="side_txt">Favorites</span></a>
			</div>
			<div class="title">
				Settings
			</div>
			<div class="container">
				<a href="../account"><i class="fas fa-user-alt"></i> <span class="side_txt">Account</span></a>
				<a href="../../log_out.php"><i class="fas fa-sign-out-alt"></i> <span class="side_txt">Log-out</span></a>
			</div>
			
		</div>
		<button onclick="toggle_navbar(),hide_search()" class="minimize_nav"><i class="fas fa-angle-left"></i> <span class="side_txt">Compress</span></button>
	</div>

	<main>
		<div class="big-container res">
			<div class="inner_container res" id="search">
				<div class="input">
					<label>SEARCH</label>
					<input class="basic_input" type="text" id="upload_input"   placeholder="Art Name, etc">
				</div>
			</div>
			<div class="inner_container box" id="category">
				<div class="header">
					My Gallery
				</div>
				<div class="body">
					<a onclick="Modal('show','add_img')"><i class="far fa-calendar-plus" ></i> Add Art</a>
					<a href="#"><i class="fas fa-eye"></i> View Gallery Page</a>
				</div>

				<div class="header">
					Categories
				</div>
				<div class="body">
					<div class="category_container">
						<div class="category">renaissance <span>(15)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> oil <span>(5)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> canvas <span>(10)</span></div>
					</div>
					<div class="category_container">
						<div class="category">digital <span>(12)</span></div>
<!-- 						<div class="sub-cat"><i class="fas fa-caret-right"></i> oil <span>(5)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> canvas <span>(10)</span></div> -->
					</div>
					<div class="category_container">
						<div class="category">painting <span>(9)</span></div>
<!-- 						<div class="sub-cat"><i class="fas fa-caret-right"></i> oil <span>(5)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> canvas <span>(10)</span></div> -->
					</div>
					<div class="category_container">
						<div class="category">abstract <span>(2)</span></div>
<!-- 						<div class="sub-cat"><i class="fas fa-caret-right"></i> oil <span>(5)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> canvas <span>(10)</span></div> -->
					</div>

				</div>
			</div>

			<div class="img_col">
				<img class="img" src="../../../imgs/sample1.jpg">
				<img class="img" src="../../../imgs/sample2.jpg">
				<img class="img" src="../../../imgs/sample3.jpg">
			</div>
			<div class="img_col">
				<img class="img" src="../../../imgs/sample2.jpg">
				<img class="img" src="../../../imgs/sample1.jpg">
				<img class="img" src="../../../imgs/sample3.jpg">
			</div>
			<div class="img_col">
				<img class="img" src="../../../imgs/sample3.jpg">
				<img class="img" src="../../../imgs/sample2.jpg">
				<img class="img" src="../../../imgs/sample1.jpg">
			</div>
		</div>
		<div class="sidebr small-container fixed right">
			<div class="inner_container box">
				<div class="header">
					My Gallery
				</div>
				<div class="body">
					<a onclick="Modal('show','add_img')"><i class="far fa-calendar-plus" ></i> Add Art</a>
					<a href="#"><i class="fas fa-eye"></i> View Gallery Page</a>
				</div>


				<div class="header">
					Categories
				</div>
				<div class="body">
					<div class="category_container">
						<div class="category">renaissance <span>(15)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> oil <span>(5)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> canvas <span>(10)</span></div>
					</div>
					<div class="category_container">
						<div class="category">digital <span>(12)</span></div>
<!-- 						<div class="sub-cat"><i class="fas fa-caret-right"></i> oil <span>(5)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> canvas <span>(10)</span></div> -->
					</div>
					<div class="category_container">
						<div class="category">painting <span>(9)</span></div>
<!-- 						<div class="sub-cat"><i class="fas fa-caret-right"></i> oil <span>(5)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> canvas <span>(10)</span></div> -->
					</div>
					<div class="category_container">
						<div class="category">abstract <span>(2)</span></div>
<!-- 						<div class="sub-cat"><i class="fas fa-caret-right"></i> oil <span>(5)</span></div>
						<div class="sub-cat"><i class="fas fa-caret-right"></i> canvas <span>(10)</span></div> -->
					</div>

				</div>
			</div>
		</div>
	</main>
</body>
</html>

<script type="text/javascript">

	function hide_search(){
		if(minimized){
			$("#search").hide();
			$("#category").hide();
		} else {
			$("#search").show();
			$("#category").show();
		}
		
	}

	function side_bar_listener(x) {
	  if (x.matches) { // If media query matches'
	  	minimized = true;

	    toggle_navbar();
	  } else {
	  	minimized = false;
	    toggle_navbar();
	  }
	}

	var x = window.matchMedia("(max-width: 910px)")
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

	// function rotate_img(rotation) {

	// 	var deg_left = 'rotate(' + 90 + 'deg)';
	// 	var deg_right = 'rotate(' + -90 + 'deg)';
	// 	if(rotation == "left"){
	// 		$("#uploaded_img").css({'-webkit-transform': deg_left,
 //        		'-moz-transform': deg_left,
 //        		'-o-transform': deg_left,
 //        		'-ms-transform': deg_left,
 //        		'transform': deg_left 
 //    		});
	// 	} else {
	// 		$("#uploaded_img").css({'-webkit-transform': deg_right,
 //        		'-moz-transform': deg_right,
 //        		'-o-transform': deg_right,
 //        		'-ms-transform': deg_right,
 //        		'transform': deg_right 
 //    		});
	// 	}
	// }

	// function flip_img(coordinate){
	// 	var x = 1;
	// 	var y = 1;

	// 	var deg_left = 'scaleX()';
	// 	var deg_right = 'scaleY(' + -90 + 'deg)';
	// 	if(coordinate == "horizontal"){
	// 		$("#uploaded_img").css({'-webkit-transform': deg_left,
 //        		'-moz-transform': deg_left,
 //        		'-o-transform': deg_left,
 //        		'-ms-transform': deg_left,
 //        		'transform': deg_left 
 //    		});
	// 	} else{

	// 	}
	// }

</script>