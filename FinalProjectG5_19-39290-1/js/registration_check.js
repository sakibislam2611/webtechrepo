function validation(){
	let username = document.getElementById('inuser').value;
	let password = document.getElementById('inpass').value;
	let cpassword = document.getElementById('incpass').value;
	let name = document.getElementById('inname').value;
	let email = document.getElementById('inemail').value;
	let dob = document.getElementById('indob').checked;
	let male = document.getElementById('male').checked;
 	let female = document.getElementById('female').checked;
 	let other = document.getElementById('other').checked;

			if(username == ""){
			document.getElementById('userN').innerHTML = "**please fill the username field**";
			return false;
			}		
					
			if(password == ""){
			document.getElementById('pass').innerHTML = "**please fill the password field**";
			return false;
			}

			if(password!=cpassword){
				document.getElementById('cpass').innerHTML = "password does not match";
				return false;
			}


			if(cpassword == ""){
				document.getElementById('cpass').innerHTML = "**please fill the confirm password field**";
				return false;
			}
			

			if(name == ""){
				document.getElementById('name').innerHTML = "**please fill the name field**";
				return false;
			}


			if(email == ""){
				document.getElementById('email').innerHTML = "**please fill the email field**";
				return false;
			}


			if((male=="")&&(female=="")&&(other=="")){
				document.getElementById('gender').innerHTML = " *please select*";
				return false;
			}
			
			
}

function usernotnull(){
   

   			let username = document.getElementById('inuser').value;

			if(username != ''){
				document.getElementById('userN').innerHTML = "";
			}

			if((username.length<=2)||(username.length>10))
			{
				document.getElementById('userN').innerHTML = "*username must be between 2 and 10 characters*";
				return false;
			}
			
			

 }

 function passnotnull(){
   

   			let password = document.getElementById('inpass').value;

			if(password!=''){
				document.getElementById('pass').innerHTML = " ";
				return false;
			}

 }

function namenotnull(){
   

   			let name = document.getElementById('inname').value;

			if(name != ''){
				document.getElementById('name').innerHTML = "";
			}else{
				
			}
			return false;

 }

  function emailnotnull(){
   

   			let email = document.getElementById('inemail').value;

			if(email != ''){
				document.getElementById('email').innerHTML = "";
			}else{
				
			}
			return false;

 }

 function gendernotnull(){
   

   			let male = document.getElementById('male').checked;
 	 		let female = document.getElementById('female').checked;
 	 		let other = document.getElementById('other').checked;

			if((male != '')||(female!='')||(other!='')){
				document.getElementById('gender').innerHTML = "";
			}else{
				
			}
			return false;

 }