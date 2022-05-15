<?php
	require './common.php';
	// check  if logged in
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Change Password</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
        <style>
            .panel-title{
                font-size: 20px
            }
        </style>
	<body>
		<?php
			require './header.php';
		?>
		<div class="container panel-margin">
                    <div class="row row_style">
                        <div class="col-sm-4"></div>
                      <div class="col-sm-4 centered">
			<div class="panel">
				<div class="panel-heading">
                                    <center><h2 class="panel-title">Change Password</h2></center>
                                    <hr style="border: 1px solid #f1f1f1;margin: 15px -15px -15px -15px;">
				</div>
				<div class="panel-body">
					<form actiom="change_passowrd.php" method="post">
						<div class="form-group">
                                                    <label>Old Password</label>
							<input type="password" class="form-control" name="old_pass" placeholder="Old Password" required>
						</div>
						<div class="form-group">
                                                    <label>New Password</label>
							<input type="password" class="form-control" name="new_pass" placeholder="New Password (Min. 6 characters)" required>
						</div>
						<div class="form-group">
                                                    <label>Retype New Password</label>
							<input type="password" class="form-control" name="retype_new_pass" placeholder="Re-type New Password" required>
						</div>
						<button type="submit" class="btn btn-block">Change</button>
					</form>
				</div>
			</div>
                      </div>
                        <div class="col-sm-4"></div>
                    </div>
		</div>
		<?php
			require './footer.php';
		?>
	</body>
</html>