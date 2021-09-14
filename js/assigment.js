function myfunction(){
	var showPass = document.getElementById('showPass');
	if(showPass.type == 'password'){
		showPass.type = 'text';
	}
	else{
		showPass.type = 'password';
	}
}

function dComment(comm){
	if(comm == 5){
		document.getElementById('para').innerHTML = "I realy love this service. ";
	}
	if(comm == 4){
		document.getElementById('para').innerHTML = "This system give me a good service. ";
	}
	if(comm == 3){
		document.getElementById('para').innerHTML = "there is nothing wrong about this service. ";
	}
	if(comm == 2){
		document.getElementById('para').innerHTML = "I don't like this service. ";
	}
	if(comm == 1){
		document.getElementById('para').innerHTML = "I absolutely dislike this service. ";
	}
}
