function chkPattern() {
    var txt = "";
    if (document.getElementById("mail").validity.patternMismatch) {
        alert("Email is mismatched!!");
		return false;
    } else {
        alert("Email matched!!");
		return true;
    } 
   
}
