function checkpassword(){
	if(document.getElementById("pw").value != document.getElementById("rpwd").value){
		alert("password mismatched");
		return false;
	}
	
	else{
		alert("success!")
		return true;
	}
}

function enablebutton(){
	if (document.getElementById("policy").checked){
		document.getElementById("sub").disabled=false;
	}
	
	else{
		document.getElementById("sub").disabled=true;
	}
}
	
