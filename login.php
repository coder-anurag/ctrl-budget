<?php
	require "./common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                <style>
                    .panel-title{
                        font-size: 25px;
                    }
                    body{
                        background-color: #f5f5f5;
                    }
                    a:hover{
                        text-decoration: none;
                        color: #009468;
                    }
                </style>
	</head>
	<body>
		<?php
			require "./header.php";
		?>
		<div class="container panel-margin">
                     <div class="row row_style">
                      <div class="col-xs-4 col-xs-offset-4">
			<div class="panel">
				<div class="panel-heading">
                            <h3 class="panel-title"><center>Login</center></h3>
                            <hr style="border: 1px solid #f1f1f1;margin: 15px -15px -15px -15px;">
                                </div>
				<div class="panel-body">
                                    <form action="afterlogin.php" method="post">
						<div class="form-group">
                                                    <label for="email">Email:</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
                                                    <label for="password">Password:</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-block">Login</button>
                                                
					</form>
				</div>
				<div class="panel-footer">
                                    Don't have an account? <a href="signup.php">Click here to Sign Up.</a>
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