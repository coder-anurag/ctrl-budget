<?php
	require "./common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Control Budget</title>
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
                    .container2{
                        margin-top: 100px;
                    }
                </style>
	</head>
	<body>
            <div class="container container2">
                <div class="row">
                  <div class="col-sm-6">
                     <h2>Who are we?</h2>
                     We are a group of young technocrats who came up with an idea of solving budget and time issues which we usually face in our daily lives. We are here to provide a budget controller according to your aspects
                     <br>
                     <br>
                     Budget control is the biggest financial issue in the present world. One should look after their budget control to get ride off from their financial crisis
                  </div>
                  <div class="col-sm-6">
                     <h2>Why choose us?</h2>
                     We provide with a predominant way to control and manage your budget estimation with ease of accessing for multiple users.
                  </div>
                </div>
            <div class="row">
                <div class="col-sm-6">
                <h2>Contact Us</h2>
                <b>Email:</b> trainings@internshala.com<br> <b>Mobile:</b> +91-8448444853
                </div>
            </div>
            </div>
		<?php
			require './header.php';
		?>
<?php
			require './footer.php';
		?>
	</body>
</html>