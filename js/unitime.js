var svg;

function unix_epoch(){
	const now = new Date();
	const seconds = Math.round(now.getTime()/1000);
	const DAY = 24*3600;
	var t = (Math.round(((seconds%DAY)/DAY)*10000)/100).toString();
	var arrTime = t.split('.');
	var parteEntera, parteDecimal;
	switch(arrTime[0].length){
		case 1:
			parteEntera = arrTime[0];
			break;
		case 2:
			parteEntera = arrTime[0];
			break;
	}
	switch(arrTime[1].length){
		case 1:
			parteDecimal = arrTime[1]+"0";
			break;
		case 2:
			parteDecimal = arrTime[1];
			break;
		case 0:
		default:	// undefined
			parteDecimal = "00";
	}
	//console.log(parteEntera+" "+parteDecimal);
	var fTime = parseFloat(parteEntera+"."+parteDecimal);
	const rad = 2*Math.PI*(fTime/100);
	const x = 40*Math.cos(rad)+50;
	const y = -(40*Math.sin(rad))+50;
	document.getElementById("pointer").setAttribute("cx", x);
	document.getElementById("pointer").setAttribute("cy", y);
	document.getElementById("clock").innerHTML = parteEntera+"."+parteDecimal;
}

// Add SVG element
function addSvgCanvas(w, h){
	svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
	svg.setAttribute("id", "svgCanvas");
	svg.setAttribute("width", w);
	svg.setAttribute("height", h);
	svg.setAttribute("version", "1.1");
	//canvas.appendChild(svg);	// @TODO
}

function addSvgCircle(id, x, y, r, fill){
	var el = document.createElementNS("http://www.w3.org/2000/svg", "circle");
	el.setAttribute("id",id);
	el.setAttribute("cx",x);
	el.setAttribute("cy",y);
	el.setAttribute("r",r);
	el.setAttribute("fill",fill);
	svg.appendChild(el);
}

document.addEventListener("DOMContentLoaded", function (){
	addSvgCanvas(100, 100);
	unix_epoch();
	setInterval(function () {unix_epoch();}, 2000);
});
