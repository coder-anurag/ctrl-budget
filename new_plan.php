<?php
	if(isset($_SESSION["email"])){
		header("location: index.php");
	}
	require "./common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create New Plan</title>
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
                    .btn{
                        background-color: white;
                        color: #009468;
                        border-color: #009468;
                    }
                    .btn:hover{
                        background-color: #009468;
                        color: white;                        
                    }
                    .panel-default>.panel-heading{
                        background-color: #009468;
                        color: white;
                    }
                    .panel-title{
                        font-size: 20px;
                        margin: 20px;
                    }
                    a:hover{
                        text-decoration: none;
                    }
                    /* Chrome, Safari, Edge, Opera */
                    input::-webkit-outer-spin-button,
                    input::-webkit-inner-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                    }
                    /* Firefox */
                    input[type=number] {
                        -moz-appearance: textfield;
                    }
                </style>
	</head>
	<body>
		<?php
			require "./header.php";
		?>
		<div class="container panel-margin">
                    <div class="row row_style">
                      <div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
                                    <h3 class="panel-title"><center>Create New Plan</center></h3>
				</div>
				<div class="panel-body">
                                    <form action="plan_details.php" method="get">
						<div class="form-group">
                                                    <label>Initial Budget</label>
                                                    <input type="number" class="form-control" id="budget" name="budget" placeholder="Initial Budget (Ex. 4000)" min="50" required>
						</div>
						<div class="form-group">
                                                    <label>How many people you want to add in your group?</label>
                                                    <input type="number" class="form-control" id="people" name="people" placeholder="No. of People" min="1"required>
						</div>
                                            <button type="submit" class="btn btn-block">Next</button>
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