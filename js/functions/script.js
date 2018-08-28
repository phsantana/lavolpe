var a = document.getElementsByTagName("a");

function print(){
	for(let i = 0; i < a.length; i++)
		alert(a[i].href);
}

window.onload = print();