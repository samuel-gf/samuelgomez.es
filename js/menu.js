var bMenu = false;

document.addEventListener('DOMContentLoaded', function(){ 
	if (document.getElementById("menu_content") == null){
		document.getElementById("menu_icon").style.display="none";
	}
	document.getElementById("menu_icon").addEventListener("click", function (){
		bMenu = !bMenu;
		let menu = document.getElementById("menu_content");
		if (bMenu) {
			menu.style.display="block";
		} else {
			menu.style.display="none";
		}

	});
}, false);


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
