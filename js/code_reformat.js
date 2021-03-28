// Elimina el primer tabulador en de los bloques de código para que
// quede bonito dentro del html
document.addEventListener('DOMContentLoaded', function(){ 
	var arrCodeBlock = document.querySelectorAll("code");
	arrCodeBlock.forEach(function(codeBlock) {
		var lines = codeBlock.innerHTML.split('\n');
		var sResultCodeBlock = '';
		var nTabs = 0;
		for(var i=0; i<lines.length; i++){
			if (nTabs == 0){	// n tabulaciones de la primera línea de código
				nTabs = getNumberOfTabs(lines[i]);
			}
			// Las restantes líneas de código irán alineadas con la primera
			var regexp = new RegExp(`^\t{${nTabs}}`);
			//console.log(lines[i]+" "+regexp);
			sResultCodeBlock += lines[i].replace(regexp, '')+'\n';
		}
		codeBlock.innerHTML = sResultCodeBlock;
	});

}, false);

function getNumberOfTabs(text) {
  var count = 0;
  var index = 0;
  while (text.charAt(index++) === "\t") {
    count++;
  }
  return count;
}
