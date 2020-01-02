
function menuColor(){
	let screenWidth = window.screen.width;
	let navbar = document.getElementById("masthead");

	if(screenWidth <= 1199){

		navbar.classList.add("navbar-scroll");
		console.log("navbar <= 1199");

	}else if (screenWidth >= 1200){

		window.addEventListener('scroll', function() {

			let screenWidth = window.screen.width;
			let navbar = document.getElementById("masthead");
			
			if (screenWidth > 1199 && window.scrollY <= 80){

				navbar.classList.remove("navbar-scroll");
				console.log("window.scrollY <= 80");

			}else if (screenWidth > 1199 && window.scrollY > 80){

				navbar.classList.add("navbar-scroll");
				console.log("window.scrollY > 80");

			}
		})
	}
}


document.onreadystatechange = function () {
	if(document.readyState === "complete"){
		menuColor();
	}
};
window.onresize = menuColor;