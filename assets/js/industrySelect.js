window.onload = function(){
	if(sessionStorage.getItem("industry-div-id") != null){
		document.getElementById(sessionStorage.getItem('industry-icon-id')).classList.add("fas");
		document.getElementById(sessionStorage.getItem('industry-icon-id')).classList.remove("far");
		
		document.getElementById(sessionStorage.getItem("industry-div-id")).classList.add("radio-btn-color");
		document.getElementById(sessionStorage.getItem("industry-div-id")).classList.add("industry-select-div-onclick");
		
		var a = document.getElementById('industry-select-anchor');
		a.href = "calculation-page2.php";
		
	}
}
function industryDivClick(e){
	
	var x = e.currentTarget.getAttribute('id');
	
	var y = e.currentTarget.children[0].getAttribute('id');
	
	var a = e.currentTarget.getAttribute('id');
	var industry = document.getElementById(a).childNodes[2].nodeValue;
	
	sessionStorage.setItem("industry-div-id", x);
	sessionStorage.setItem("industry-icon-id", y);
	sessionStorage.setItem("industry", industry);
	
	
	for(var i=0; i<14; i++){
		document.getElementById("industry-div-" + i).classList.remove("industry-select-div-onclick");
		document.getElementById("industry-icon-" + i).classList.remove("fas");
		document.getElementById("industry-div-" + i).classList.remove("radio-btn-color");
		document.getElementById("industry-icon-" + i).classList.add("far");
	}
	
		document.getElementById(y).classList.add("fas");
		document.getElementById(y).classList.remove("far");
		
		document.getElementById(x).classList.add("radio-btn-color");
		document.getElementById(x).classList.add("industry-select-div-onclick");
		
		var a = document.getElementById('industry-select-anchor');
		a.href = "calculation-page2.php";
		
		
		
}


for(var i=0; i<14; i++){
	document.getElementById("industry-div-" + i).addEventListener('click',industryDivClick);
}

