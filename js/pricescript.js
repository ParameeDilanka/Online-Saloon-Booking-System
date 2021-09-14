	function priceForHair() {
		var list = ["Normal hair cut for gents = Rs.350/=", "Normal hair cut for ladies = Rs.400/=", "Layered hair cut = Rs.500/=", "Hair colouring = Rs.3000/=", "Hair Relaxing = Rs.5000/=", "Hair rebonding = Rs.10000/=", "Straight hair = Rs.15000/="];
		var txt = "";
		var length = list.length;
		var i;
		for(i= 0; i<length; i++){
			txt+= list[i] + "<br>";
		}
		document.getElementById("img2").src = "./images/image14.JPG";
		document.getElementById("para").innerHTML = txt;
}

function productForBridal(){
		var list = ["Kandian Bridal = Rs.175000/=", "Western Bridal = Rs.150000/=", "Indian type bridal = Rs.165000/="];
		var txt = "";
		var length = list.length;
		var i;
		for(i= 0; i<length; i++){
			txt+= list[i] + "<br>";
		}
		
		document.getElementById("img2").src = "./images/image6.JPG";
		document.getElementById("para").innerHTML = txt;
}

function priceForOther(){
		var list = ["Eyebrows = Rs.200/=", "Shaving = Rs.500/=", "Makeup = Rs.700/=", "Facial = Rs.1500/=", "massage = Rs.2000/=", "Vaxing = Rs.2500/=", "Pedicures = Rs.2700/=", "Menicures = Rs.4000/=", "Tattoo = Rs.5000/="];
		var txt = "";
		var length = list.length;
		var i;
		for(i= 0; i<length; i++){
			txt+= list[i] + "<br>";
		}
		document.getElementById("img2").src = "./images/image4.JPG";
		document.getElementById("para").innerHTML = txt;
}