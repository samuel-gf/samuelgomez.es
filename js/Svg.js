// 1.0	30 marzo 2020
class Svg{

	constructor(svgId, maxx, maxy){
		this.svgId = svgId;
		this.svgCanvas = document.getElementById(svgId);
		this.maxx = maxx;
		this.maxy = maxy;
		this.maxx2 = maxx/2.0;	// La mitad
		this.maxy2 = maxy/2.0;	// La mitad
		this.nBgNodes = 0;	// Number of nodes that belong to the background
	}

	// to Screen
	px(x){
		return x+this.maxx2;
	}

	// to Screen
	py(y){
		return -y+this.maxy2;
	}

	getSvg(svgId){
		return document.getElementById(svgId);
	}

	// Remove all children nodes but the background
	clear(){
		for (var i=this.svgCanvas.childElementCount; i>=this.nBgNodes; i--){
			this.svgCanvas.removeChild(this.svgCanvas.childNodes[i]);
		}
	}

	// Remove all, event the backgrodund
	clearAll(){
		for (var i=this.svgCanvas.childElementCount; i>=0; i--){
			this.svgCanvas.removeChild(this.svgCanvas.childNodes[i]);
		}
		this.nBgNodes = 0;
	}

	add(item, itemId){
		var el = document.createElementNS("http://www.w3.org/2000/svg", item);
		el.setAttributeNS(null, "id", itemId);
		this.svgCanvas.appendChild(el);
		return el;
	}

	addLine(lineId, x0, y0, x1, y1, color, width){
		var line = this.add("line", lineId);
		line.setAttributeNS(null, "x1", this.px(x0));
		line.setAttributeNS(null, "x2", this.px(x1));
		line.setAttributeNS(null, "y1", this.py(y0));
		line.setAttributeNS(null, "y2", this.py(y1));
		line.setAttributeNS(null, "stroke", color);
		line.setAttributeNS(null, "stroke-width", width);
		return line;
	}

	addCircle(circleId, cx, cy, r, fillColor, strokeWidth = 0, strokeColor = null){
		var circle = this.add("circle", circleId);
		circle.setAttributeNS(null, "cx", this.px(cx));
		circle.setAttributeNS(null, "cy", this.py(cy));
		circle.setAttributeNS(null, "r", r);
		circle.setAttributeNS(null, "fill", fillColor);
		if (strokeWidth != 0)
			circle.setAttributeNS(null, "stroke-width", strokeWidth);
		if (strokeColor != null) 
			circle.setAttributeNS(null, "stroke", strokeColor);
		return circle;
	}

	// Vertical and horizontal axis
	drawAxis(svgId){
		s.addLine("axisX", -s.maxx2, 0, s.maxx2, 0, "rgb(0,0,0)", 2);
		s.addLine("axisY", 0, -s.maxy2, 0, s.maxy2, "rgb(0, 0, 0)", 2);
		this.nBgNodes += 2;
	}

	// Grid for the backgrodund
	drawGrid(svgId){
		// Horizontal lines
		for (var i=0; i<=this.maxy; i+=50){
			this.addLine("gridX"+i, -this.maxx2, -this.maxy2+i, this.maxx2, -this.maxy2+i, "rgb(64, 64, 64)", 0.5);
			this.nBgNodes++;
		}
		// Vertical
		for (var i=0; i<=this.maxx; i+=50){
			this.addLine("gridY"+i, -this.maxx2+i, this.maxy2, -this.maxx2+i, -this.maxy2, "rgb(64, 64, 64)", 0.5);
			this.nBgNodes++;
		}
	}
}
