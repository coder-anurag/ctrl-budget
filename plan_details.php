<?php
        if(isset($_SESSION["email"])){
		header("location: index.php");
	}
	require "./common.php";
        
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Plan Details</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcd
                n.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                <style>
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
                    .btn{
                        background-color: white;
                        color: #009468;
                        border-color: #009468;
                    }
                    .btn:hover{
                        background-color: #009468;
                        color: white;                        
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
                          <div class="panel">
				<div class="panel-body">
                                    <form action="details_script.php" method="POST">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title (Ex. Trip to Goa)" >
                                            </div>
                                            <div class="col-sm-6">
						<div class="form-group">
                                                    <label>From</label>
							<input type="date" class="form-control" name="from" id="from" placeholder="dd/mm/yy" min="2019-04-01" max="2019-04-20">
						</div>
                                            </div>
                                            <div class="col-sm-6">
						<div class="form-group">
                                                    <label>To</label>
							<input type="date" class="form-control" name="to" id="to" placeholder="dd/mm/yy" min="2019-04-01" max="2019-04-20" >
						</div>
                                            </div>
                                            <div class="col-sm-8">
						<div class="form-group">                                                   
                                                  <label>Initial Budget</label>
                                                  <input type="number" class="form-control" id="budget" name="budget" value="<?php echo htmlspecialchars($_GET['budget']); ?>" disabled>
						</div>
                                            </div>
                                            <div class="col-sm-4">
						<div class="form-group">
                                                    <label>No. of People</label>
                                                    <input type="number" class="form-control" id="people" name="people" value="<?php echo htmlspecialchars($_GET['people']); ?>"disabled>
						</div>
                                            </div>
						<div class="form-group">
                                                    <label>Person1</label>
							<input type="text" class="form-control" name="person1" id="person1" placeholder="Person 1 Name" >
						</div>
                                                <div class="form-group">
                                                    <label>Person2</label>
							<input type="text" class="form-control" name="person2" id="person2" placeholder="Person 2 Name" >
						</div>
						<button type="submit" class="btn btn-block">Submit</button>
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