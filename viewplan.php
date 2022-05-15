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
                    .btnmove{
                        margin-top: -460px;
                        margin-left: 880px;
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
                    }
                    .panel-move{
                        margin-left: 531px;
                        margin-top: -17px;
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
            <h2>Your Plans</h2>
		<div class="container panel-margin">
                    <div class="row row_style">
                      <div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
                                    <center><h2 class="panel-title"> My first Plan<span class="glyphicon glyphicon-user"></span> </h2></center>
                                </div>
				<div class="panel-body">
                                    <br>
                                    <label>Budget</label><div class="high">&#8377 10000</div> 
                                    <br>
                                    <br>
                                    <label>Remaining Amount</label><div class="high1">&#8377 10000</div>
                                    <br>
                                    <br>
                                    <label>Date</label> <div class="high">20th Sep-30th Sep 2019</div>                                   
				</div>
                        </div>
                      </div>
		    </div>
		</div>
            <a href="distribution.php"><button type="button" class="btn btnmove">Expense Distribution</button></a>
            <div class="container panel-margin panel-move">
                    <div class="row">
                      <div class="col-sm-5 col-sm-offset-3">
			<div class="panel panel-default">
                            <div class="panel-heading">
                                 <center><h2 class="panel-title">Add New Expense</h2></center>
                            </div>
				<div class="panel-body">
                                    <form method="post" action="plan.php">
						<div class="form-group">
                                                    <label>Title</label>
							<input type="text" class="form-control" name="name" placeholder="Expense Name" required>
						</div>
						<div class="form">
                                                    <label>Date</label>
                                                    <input type="date" class="form-control" name="date" placeholder="dd/mm/yy" min="2019-04-01" max="2019-04-20" required>
                                                </div><br>
						<div class="form-group">
                                                    <label>Amount Spent</label>
                                                    <input type="text" class="form-control" name="spent" placeholder="Amount Spent" required><br>
                                                    <input type="dropbtn" class="form-control" name="dropdown" placeholder="Choose" required>
						</div>
						<div class="form-group">
                                                    <label>Upload Bill</label>
                                                    <input type="file" class="form-control" name="file" placeholder="" required>
						</div>
						<button type="submit" class="btn btn-block">Add</button>
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

