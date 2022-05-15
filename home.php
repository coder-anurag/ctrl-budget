<?php
	if(isset($_SESSION["email"])){
		header("location: index.php");
	}
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
                    h3{
                        margin-top: 120px;
                        margin-left: 80px;
                    }
                    body{
                        background-color: #8080802e;
                    }
                    a:hover{
                        text-decoration: none;
                        color: #009468;
                    }
                    .panel-body{
                        padding: 100px;
                    }
                    .glyphicon-plus-sign{
                        color: #009468;
                    }
                </style>
        </head>
        <body>
            <?php
			require './header.php';
		?>
            <h3>You don't have any active plans</h3>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-offset-4">
                        <div class="panel panel-deault">
                            <div class="panel-body">
                                <span class="glyphicon glyphicon-plus-sign"></span><a href="new_plan.php">  Create a New Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
<?php
			require './footer.php';
		?>
	</body>
</html>