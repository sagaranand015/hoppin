<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- above tags to be compulsorily at the top -->

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Skrillex | Official After Party Registration</title>

    <!-- Bootstrap core CSS -->
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.theme.min.css" rel="stylesheet"> -->
<!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script src="js/jquery.scrolly.min.js"></script>
	<script src="js/wow.min.js"></script>


	<link rel="stylesheet" href="css/animate.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript">

		$(document).ready(function() {

			$('#btnSubmit').on('click', function() {

				var email = $('#email').val().trim();
				var name = $('#name').val().trim();
				var tel = $('#phone').val().trim();
				var age = $('#age').val().trim();

				$.ajax({
					type: "GET",
					url: "AJAXFunctions.php",
					data: {
						no: "1", email: email, name: name, tel: tel, age: age
					},
					success: function(response) {
						alert(response + ". this is ok!");
						console.log(response);
					},
					error: function(err) {
						console.log(err);
					},
					complete: function() {
						alert("completed!");
					}
				});

				return false;
			});

		});

	</script>

</head>

<body style="position:initial;">

<section id="register" style="min-height:700px; background-color:#000;">

<div class="col-md-12">
	<img src="skrillex-logo.png" style="width:300px; margin-top:50px;">
</div>

    <div  class="col-md-12" style="color: #fff;">
        <div id="feat_div" class="divider"></div>
            <h2 style="color: #fff;">
                Registration for SKRILLEX Official After Party
            </h2><br><br>
    
    </div>

    	<div class="col-md-12">
    		<form >   <!-- action="insert-form.php" method="post" -->
    		
	    			<div class="form-group" style="margin-left:20%; margin-right:20%;">
				    <label for="name">Enter your name</label>
				    <input type="text" class="form-control" id="name" placeholder="Your Name">
				  </div>
				  <div class="form-group" style="margin-left:20%; margin-right:20%;">
				    <label for="exampleInputEmail1">Enter your Email address</label>
    				<input type="email" class="form-control" id="email" placeholder="Your Email Address">
				  </div>
				  <div class="form-group" style="margin-left:20%; margin-right:20%;">
				    <label for="phone-num">Enter your Phone Number</label>
				    <input type="text" class="form-control" id="phone" placeholder="Phone Number">
				    <!-- <p class="help-block">Example block-level help text here.</p> -->
				  </div>
				  <div class="form-group" style="margin-left:20%; margin-right:20%;">
				    <label for="age">Enter your Age</label>
				    <input type="text" class="form-control" id="age" placeholder="Your Age">
				    <!-- <p class="help-block">Example block-level help text here.</p> -->
				  </div>
					<!-- <input type="submit" class="btn btn-default1" style="background:#e92330; color: #fff; border-radius:0px; border:0px; width:100px;" id="submit1" value="Submit" /> -->

					<button id="btnSubmit" class="btn btn-lg btn-primary btn-block">Submit</button>

					<p style="color:white;" id="result"></p>
			  </form>
			

    	</div>
    		

</section>
</body>
</html>