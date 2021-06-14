function clearStorage(){
	sessionStorage.clear();
}

document.getElementById('recalculate-btn').addEventListener('click',clearStorage);