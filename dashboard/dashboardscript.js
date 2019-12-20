
	var minimized = true;
	var responsive = false;
	function toggle_navbar(){

		if(minimized){
			$(".side-bar .title").fadeOut(300);
			$(".side-bar .side_txt").fadeOut(300);
			$(".side-bar .user_name").fadeOut(300);

			setTimeout(function(){
				$(".side-bar .header").css({"padding-top":"35px"});
				$("#user_img").css({"width":"25px","height":"25px"});
				
				$(".side-bar").animate({width:"50px"},300);
				$(".minimize_nav").animate({width:"50px"},300);
				$(".minimize_nav i").attr("class","fas fa-angle-right");
				$(".side-bar .options .container a").css({"text-align":"center","padding":"10px 0px"});
				setTimeout(function(){
					$("main").css({"margin-left":"50px"});
				},200);
			},400);


			minimized = false;
		} else {
			
			$(".side-bar .header").css({"padding-top":"25px"});
			$("#user_img").css({"width":"50px","height":"50px"});
			$(".side-bar").animate({width:"275px"},300);
			$(".minimize_nav").animate({width:"275px"},300);
			$(".minimize_nav i").attr("class","fas fa-angle-left");
			$(".side-bar .options .container a").css({"text-align":"left","padding":"10px 35px","padding-right":"0"});
			if(!responsive){
				$("main").css({"margin-left":"275px"});
			}
			setTimeout(function(){
				$(".side-bar .title").fadeIn(300);
				$(".side-bar .side_txt").fadeIn(300);
				$(".side-bar .user_name").fadeIn(300);
				
			},400);
			minimized = true;
		}
		
	}

	// temporary function
	function view_profile(){
		window.location.href = "../../../gallery/Renzo/";
	}