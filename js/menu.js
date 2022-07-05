var bMenu = false;

document.addEventListener('DOMContentLoaded', function(){ 
	let menu = document.getElementById("menu");
	let menu_icon = document.getElementById("menu_icon");

	let footer = document.querySelector("body footer");
	let body = document.querySelector("body");

	// Mostrar el menú cuando se pincha en el icono
	menu_icon.addEventListener("click", function (){
		bMenu = !bMenu;
		if (bMenu) {
			menu.style.display="block";
		} else {
			menu.style.display=null;
		}
	}, false);

	// Hide the menu after click a link
	if (menu != null) {
		menu.addEventListener("click", function (){
		if (bMenu){	// Si es un menú desplegable y se ha hecho visible
			bMenu = false;
			if (menu_icon.style.display != null) {
				menu.style.display=null;
			}
		}
		});
	}

	// Hide the menu after click outside the menu
	if (menu != null) {
		document.querySelector("body main").addEventListener("click", function (){
		bMenu = false;
		if (menu_icon.style.display != null) {
			menu.style.display=null;
		}
		});
	}
}, false);
