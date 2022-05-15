<?php
        if(isset($_SESSION["email"])){
		header("location: index.php");
	}
	require "./common.php";
        
?>
<!DOCTYPE html>
<html>
	<head>
		<title>View Plan</title>
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
                    h2{
                        margin-top: 80px;
                        margin-left: 110px;
                    }
                    .panel-margin{
                        margin-top: 100px;
                    }
                    .panel-heading{
                        padding: 1px 7px;
                    }
                    .high{
                        float: right;
                    }
                    .high1{
                        float: right;
                        color: green;
                    }
                </style>
	</head>
        <body>
            <?php
			require "./header.php";
		?>
            <div class="col-sm-3"></div>
                <div class="container panel-margin">
                    <div class="row row_style">
                      <div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
                                    <center><h2 class="panel-title"> My first Plan<span class="glyphicon glyphicon-user"></span> </h2></center>
                                </div>
				<div class="panel-body">
                                    <br>
                                    <label>Initial Budget</label> <div class="high">&#8377 10000</div>
                                    <br>
                                    <br>
                                    <label>Person A</label><div class="high">&#8377 0</div>
                                    <br>
                                    <br>
                                    <label>Person B</label><div class="high">&#8377 0</div>
                                    <br>
                                    <br>
                                    <label>Total amount spent</label> <div class="high">&#8377 0</div>
                                    <br>
                                    <br>
                                    <label>Remaining Amount</label><div class="high1">&#8377 10000</div>
                                    <br>
                                    <br>
                                    <label>Individual Shares</label><div class="high">&#8377 0</div>
                                    <br>
                                    <br>
                                    <label>Person A</label><div class="high">&#8377 0</div>
                                    <br>
                                    <br>
                                    <label>Person B</label><div class="high">&#8377 0</div>
				</div>
                            <center><a href="viewplan.php"><button type="button" class="btn"><span class="glyphicon glyphicon-arrow-left">Go back</span></button></a></center>
                        </div>
                      </div>
		    </div>
		</div>
            
            <div class="col-sm-3"></div>
            <?php
			require "./footer.php";
		?>
        </body>
</html>
