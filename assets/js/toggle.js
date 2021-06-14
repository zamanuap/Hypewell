function toggle() {
  var x = document.getElementById("div1");
  var y = document.getElementById("div2");
  var z = document.getElementById("toggle-input");
  
  var budget = document.getElementById('toggle-input').value;
  sessionStorage.setItem('budget', budget);
  
  if (x.style.display === "none") {
    x.style.display = "block";
	y.style.display = "none";
	document.getElementById('budget').innerHTML = sessionStorage.getItem('budget'); 
	roas();
	document.getElementById('existingCustomer').innerHTML = Math.round(sessionStorage.getItem('budget') * .6); 
	document.getElementById('newCustomer').innerHTML = Math.round(sessionStorage.getItem('budget') * .4); 
	
	
  } else {
    x.style.display = "none";
	y.style.display = "block";
	z.focus();
	z.innerHTML = sessionStorage.getItem('budget');
  }
    
  	
 
  
  //if(sessionStorage.getItem('adSpend') != null){
		
	//}
	

}