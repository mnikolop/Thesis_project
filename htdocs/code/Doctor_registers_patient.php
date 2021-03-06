<!DOCTYPE html>
<html lang="en">
<head>
	<title> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- defining responsivnes in mobile devices -->
	<meta name="author" content="Markella Nikolopoulou-Themeli"><!-- defining the author of the docoument -->
	<meta charset="utf-8"><!-- defining the character set for encoding -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet"> <!-- styling link -->
</head>  
<body >
	<div class="container-fluid">

			<form action="#" method="GET">
				<div class="input-group">
					<span class="input-group-addon">Username</span>
					<input type="text" class="form-control" name="username" id="username" placeholder="Username">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Password</span>
					<input type="text" class="form-control" name="password" id="password" placeholder="Password">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Firstname</span></span>
					<input type="text" class="form-control" name="FirstName" maxlength="30" id="FirstName" placeholder="Firstname">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Lastname</span>
					<input type="text" class="form-control" name="LastName" maxlength="30" id="LastName" placeholder="Lastname">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">e-mail</span>
					<input type="email" class="form-control" name="email" maxlength="30" id="email" placeholder="e-mail">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Age</span>
					<input type="number" class="form-control" name="age" maxlength="30" id="age" placeholder="Age">
				</div>
				<br>
				<h5>Address</h5>
				<div class="input-group">
					<span class="input-group-addon">Street</span>
					<input type="text" class="form-control" name="street" maxlength="30" id="street" placeholder="Street">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Number</span>
					<input type="number" class="form-control" name="number" maxlength="30" id="number" placeholder="Number">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">City</span>
					<input type="text" class="form-control" name="city" maxlength="30" id="city" placeholder="City">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Telepfone</span>
					<input type="tel" class="form-control" name="tel" maxlength="30" id="tel" placeholder="Telephone">
				</div>
				<br>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Profession</span>
					<input type="text" class="form-control" name="spesialty" maxlength="30" id="spesialty" placeholder="Profession">
				</div>
				<br>
				<input type="submit" class="btn btn-info" value="Submit">
			</form>	
		</div>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap-dropdown.js"></script>
	</body>
	</html>