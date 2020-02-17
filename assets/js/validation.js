document.addEventListener("DOMContentLoaded", function(){
	
	let registerForm = document.querySelector(".my-register-form");

	registerForm.addEventListener("submit", function(event){
		// event.preventDefault();
		let name = document.getElementById("fullname");
		let nameError = document.getElementById("name-error");

		let password = document.getElementById("password");
		let passwordError = document.getElementById("password-error");

		let repassword = document.getElementById("repassword");
		let repasswordError = document.getElementById("repassword-error");

		let email = document.getElementById("email"); 
		let emailError = document.getElementById("email-error");

		let phone = document.getElementById("phone");
		let phoneError = document.getElementById("phone-error");

		let error = 0;

		if(name.value.trim() == "") {
			name.style.border = "1px solid #f00";
			nameError.innerText = "Hãy nhập họ và tên";
			nameError.style.display = 'block';
			error += 1;
		}
		else {
			name.style.border = "";
			nameError.style.display = 'none';
		}

		if(email.value.trim() == "") {
			email.style.border = "1px solid #f00";
			emailError.innerText = "Hãy nhập email";
			emailError.style.display = 'block';
			error += 1;
		}
		else {
			email.style.border = "";
			emailError.style.display = 'none';
		}

		if(phone.value.trim() == "") {
			phone.style.border = "1px solid #f00";
			phoneError.innerText = "Số điện thoại phải bao gồm 10 kí tự số";
			phoneError.style.display = 'block';
			error += 1;
		}
		else {
			phone.style.border = "";
			phoneError.style.display = 'none';
		}

		if(password.value.trim() == "") {
			password.style.border = "1px solid #f00";
			passwordError.innerText = "Hãy nhập mật khẩu";
			passwordError.style.display = 'block';
			error += 1;
		}
		else {
			password.style.border = "";
			passwordError.style.display = 'none';
		}

		if(password.value.trim() == "") {
			repassword.style.border = "1px solid #f00";
			repasswordError.innerText = "Hãy nhập lại mật khẩu";
			repasswordError.style.display = 'block';
			error += 1;
		}
		else {
			repassword.style.border = "";
			repasswordError.style.display = 'none';
		}

		console.log(error);

		if(error != 0) {
			event.preventDefault();
		}
	});
});