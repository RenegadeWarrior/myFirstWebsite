function func(){
	var username=document.querySelector("#username");
	var email=document.querySelector("#email");
	var password=document.querySelector("#password");
	var conpassword=document.querySelector("#conpassword");
	if(password.value===conpassword.value){
		return true;
	}
	else{
		alert("Passwords do not match");
		return false;
	}
	return false;
}