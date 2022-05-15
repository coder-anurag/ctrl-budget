<?php
        if(isset($_SESSION["email"])){
		header("location: index.php");
	}
	require "./common.php";
        
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My First Plan</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                <style>
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
                    .glyphicon-user{
                        float: right;
                    }
                    h2{
                        margin-top: 80px;
                        margin-left: 110px;
                    }
                    .panel-margin{
                        margin-top: 26px;
                    }
                    .panel-heading{
                        padding: 1px 7px;
                    }
                    .glyphicon-plus-sign{
                        font-size: 50px;
                        color: #009468;
                        position: relative;
                        float: right;
                        margin-right: 50px;
                    }
                    a:hover{
                        text-decoration: none;
                    }
                    .high{
                        float: right;
                    }
                </style>
	</head>
        <body>
            <?php
			require "./header.php";
		?>
            <h2>Your Plans</h2>
		<div class="container panel-margin">
                    <div class="row row_style">
                      <div class="col-sm-4 high-class">
			<div class="panel panel-default">
				<div class="panel-heading">
                                    <center><h2 class="panel-title"> My first Plan<span class="glyphicon glyphicon-user"></span> </h2></center>
                                </div>
				<div class="panel-body">
                                    <label>Budget</label> <div class="high">&#8377 10000</div>
                                    <br>
                                    <br>
                                    <label>Date </label><div class="high">20th Sep-30th Sep 2019</div>
                                    <br>
                                    <br>
                                    <a href="viewplan.php">
                                    <button type="submit" action="viewplan.php" class="btn btn-block">View Plans</button>
                                    </a>
				</div>
                        </div>
                      </div>
		    </div>
		</div>
            <a href="new_plan.php"><span class="glyphicon glyphicon-plus-sign"></span></a>
		<?php
			require "./footer.php";
		?>
        </body>
</html>