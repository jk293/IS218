<!DOCTYPE html>
<html>
<style>

form {
	border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
	width:100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

button {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: none;
	width: 100%;
}

button:hover {
	opacity: 0.8;
}

.cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}

.imgcontainer {
	text-align: center;
	margin: 24px 0 12px 0;
}

img.avatar {
	width: 40%;
	border-radius: 50%;
}

.container {
	padding: 16px;
}

span.psw {
	float: right;
	padding-top: 16px;
}


}

</style>
<body>

<h2> Sign Up Here </h2>

<form action="/action_page.php">
	

	<div class="container">
		
		<label><b>First Name</b></label>
		<input type="text" placeholder="Enter First Name" name="First Name" required>

		<label><b>Last Name</b></label>
		<input type="text" placeholder="Enter Last Name" name="Last Name" required>

		<label><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="Email" required>

		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<label><b>Phone Number</b></label>
		<input type="text" placeholder="Enter Phone Number" name="Phone Number" required>

		<label><b>Date of Birth</b></label>
		<input type="text" placeholder="Enter Date of Birth" name="Date of Birth" required>

		<label><b>Gender</b></label>
		<input type="checkbox" checked="checked"> Male
		<input type="checkbox" checked="checked"> Female

		<button type='submit'>Sign Up</button>
		<input type="checkbox" checked="checked"> Remember Me
	</div>

	<div class="container" style="background-color:#f1f1f1">
		<button type="button" class="cancelbtn">Cancel</button>
		<button type="button" class="haveaccount">Have an Account?</button>
	</div>
</form>



</body>
</html>