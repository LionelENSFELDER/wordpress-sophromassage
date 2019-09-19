window.onscroll = () => {
    let navbar = document.getElementById("masthead");

    if(window.scrollY <= 80){
        navbar.classList.remove("navbar-scroll");
    }else if(window.scrollY > 80){
		navbar.classList.add("navbar-scroll");
    }
};    