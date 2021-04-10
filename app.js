$(document).ready(function(){
	if (localStorage.getItem("color") === "dark"){
		$(".change").addClass("toDark");	
		$("body").css("background-color", "gray");
		$("textarea").css("background-color", "lightgray");
	}
	$(".change_theme").click(function(){
		$(".change").toggleClass("toDark");
		if ($(".change").hasClass("toDark")){
			$("body").css("background-color", "gray");
			$("textarea").css("background-color", "lightgray");
			localStorage.setItem("color", "dark");
		}
		else {
			$("body").css("background-color", "white");	
			$("textarea").css("background-color", "white");
			localStorage.setItem("color", "light");
		}
	})
})
