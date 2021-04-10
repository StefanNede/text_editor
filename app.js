$(document).ready(function(){
	let color_theme = "light";
	$(".change_theme").click(function(){
		$(".change").toggleClass("toDark");
		if ($(".change").hasClass("toDark")){
			$("body").css("background-color", "gray");
			$("textarea").css("background-color", "lightgray");
		}
		else {
			$("body").css("background-color", "white");	
			$("textarea").css("background-color", "white");
		}
	})
})
