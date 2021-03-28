var vToc = false;	// Is toc visible
var toc;			// toc DOM object

document.addEventListener("DOMContentLoaded", function(event) {
	toc = document.getElementById("toc");
	var links = document.querySelectorAll("#toc a");
	links.forEach(function(link){
		link.addEventListener("click", toggle_toc);
	});
});

function toggle_toc(){
	vToc = !vToc;
	toc.style.display = (vToc?"inline":"none");
	document.getElementById("nav-toggle").innerHTML = vToc?"X":"&#9776;";

}
