<?php
	if(isset($_SESSION["email"])){
		header("location: home.php");
	}
	require "./common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Signup Page</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                <style>

body{
    background-color: #f5f5f5;
}
.row{
    margin-left: 350px;
    margin-right: -350px;
}
.panel-heading{
    font-size: 25px;
}
                </style>
	</head>
	<body>
		<?php
			require "./header.php";
		?>
		<div class="container panel-margin">
                    <div class="row">
                      <div class="col-sm-6 col-sm-4">
			<div class="panel">
                            <div class="panel-heading"
                                 <h2 class="panel-title"><center>Sign Up</center></h2>
                            <hr style="border: 1px solid #f1f1f1;margin: 15px -15px -15px -15px;">
                            </div>
				<div class="panel-body">
					<form method="post" action="signup_script.php">
						<div class="form-group">
                                                    <label>Name:</label>
							<input type="text" class="form-control" name="name" placeholder="Name" required>
						</div>
						<div class="form-group">
                                                    <label>E-mail:</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Enter Valid Email" required>
						</div>
						<div class="form-group">
                                                    <label>Password:</label>
							<input type="password" class="form-control" name="password" placeholder="Passowrd (Min. 6 character)" minlength="6" maxlength="10" required>
						</div>
						<div class="form-group">
                                                    <label>Phone Number:</label>
                                                    <input type="tel" class="form-control" name="phone_number" placeholder="Enter Valid Phone Number (Ex. 8448444853)" minlength="10" required>
						</div>
						<button type="submit" class="btn btn-block">Sign Up</button>
					</form>
				</div>
				
                                        </div>
                                    </div>
			</div>
		</div>
		<?php
			require "./footer.php";
		?>
	</body>
</html>