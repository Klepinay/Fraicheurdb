	document.querySelector("#modifier").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#formodif')).display=='block'){
			document.querySelector("#formodif").style.display="none";
		} else {
			document.querySelector("#formodif").style.display="block";
		}
	}