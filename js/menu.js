var bMenu = false;

document.addEventListener('DOMContentLoaded', function(){ 
	console.log("GO");
	let menu_content = document.getElementById("menu_content");
	let menu_icon = document.getElementById("menu_icon");

	let footer = document.querySelector("body footer");
	let body = document.querySelector("body");

	// No mostrar el menú si está en modo escritorio
	if (document.getElementById("menu_content") == null){
		document.getElementById("menu_icon").style.display="none";
	}

	// Mostrar el menú cuando se pincha en el icono
	menu_icon.addEventListener("click", function (){
		bMenu = !bMenu;
		if (bMenu) {
			menu_content.style.display="block";
		} else {
			menu_content.style.display="none";
		}
	});
	// Hide the menu
	document.getElementById("menu_content").addEventListener("click", function (){
		if (bMenu){	// Si es un menú desplegable y se ha hecho visible
			bMenu = false;
			if (menu_icon.style.display != "none") {
				menu_content.style.display="none";
			}
		}
	});
}, false);


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
