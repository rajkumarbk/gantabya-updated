
			function validate() {


			var user = document.getElementById('user').value;
			var emails = document.getElementById('emails').value;
			var pass = document.getElementById('pass').value;
			var a = document.getElementById('mobilenumber').value;


			if(user == ""){
				document.getElementById('username').innerHTML =" *required field";
				return false;
			}
			if((user.length <= 5) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" *Username lenght must be between 5 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" *Only characters are allowed";
				return false;
			}

			if(emails == ""){
				document.getElementById('emailids').innerHTML =" *required field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" *Invalid email";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" *Invalid email";
				return false;
			}


			if(pass == ""){
				document.getElementById('passwords').innerHTML =" *password can not be empty";
				return false;
			}
			if((pass.length <= 8) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" *Use 8 characters or more for your password";
				return false;	
			}

if(a==""){
	document.getElementById('message').innerHTML="*This field can't be empty";
	return false;
}
if(isNaN(a)){
	document.getElementById('message').innerHTML="*Enter Numeric value only";
	return false;
}
if(a.length<10){
	document.getElementById('message').innerHTML="*Mobile Number should be of 10 digit";
	return false;
}	
if(a.length>10){
	document.getElementById('message').innerHTML="*Mobile Number should be of 10 digit";
	return false;
}
if((a.charAt(0)!=9) && (a.charAt(1)!=8)){
document.getElementById('message').innerHTML="*Mobile Number must start with 98";
	return false;
}
}
	

