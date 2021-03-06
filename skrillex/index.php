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
	
    <style type="text/css">

    	#alertMsg {
        	width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;
            font-family: boldText;
            position: fixed;
        }

        #popup {
        	width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;    
            font-family: boldText;
            position: fixed;
        }

        #header>img {
        	height: 45%;
        	width: 100%;
        }

        #btnSubmit {
        	background:#e92330; 
        	color: #fff; 
        	border-radius:2px; 
        	border:1px; 
        }

        label {
        	color: #000;
        }

    </style>

	<script type="text/javascript">

		$(document).ready(function() {

			var alertMsg = $('#alertMsg').fadeOut();
            var popup = $('#popup').fadeOut();    
            $('#btnExitPopup').on('click', function() {
                popup.children('p').remove();
                popup.fadeOut();

                // to hide the progress bar.
                $('.progress').fadeOut();
                return false;
            });


			$('#insert-form').submit(function() {

				var email = $('#email').val().trim();
				var name = $('#name').val().trim();
				var tel = $('#phone').val().trim();
				var age = $('#age').val().trim();

				alertMsg.children('p').remove();
				alertMsg.append("<p>Please wait while we get everything done to register you...</p>").fadeIn();
				$.ajax({
					type: "GET",
					url: "AJAXFunctions.php",
					data: {
						no: "1", email: email, name: name, tel: tel, age: age
					},
					success: function(response) {
						if(response == "1") {
							window.location.href = "success.php";
						}
						else {
							alert("Oops! We encountered  an error processing your request. Please try again.");
						}
					},
					error: function(err) {
						alert("Oops! We encountered  an error processing your request. Please try again.");
					}
				});
				return false;
			});

		});

	</script>

    <!-- for adding the google analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-68222768-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body style="position:initial;">

	<div id="alertMsg" class="alert alert-warning" role="alert">
    </div>

    <div id="popup" class="alert alert-danger" role="alert">
        <button type="button" class="close" id="btnExitPopup" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

	<section id="register">

        <!-- for the main header logo -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="header">
            <img src="images/register-header.jpg" />
        </div>

        <br />

	    <div  class="col-md-12" >
	        <div id="feat_div" class="divider"></div>
	            <h3 style="color: #000;" class="text-center page-header">
	                Vh1 Supersonic Club Nights presents SKRILLEX Official After Party | Registration
	            </h3><br><br>
	    </div>

    	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    		<form id="insert-form" >  
    			<table class="table">
    				<tr>
    					<td>
    						<label for="name">Enter your name</label>
    					</td>
						<td>
							<input type="text" class="form-control" id="name" placeholder="Your Name" required>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<label for="email">Enter your Email address</label>
    					</td>
    					<td>
    						<input type="email" class="form-control" id="email" placeholder="Your Email Address" required>		
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<label for="phone-num">Enter your Phone Number</label>
    					</td>
    					<td>
    						<input type="text" class="form-control" id="phone" placeholder="Phone Number" required>
    					</td>
    				</tr>
					<tr>
						<td>
							<label for="age">Enter your Age</label>
						</td>
						<td>
							<input type="text" class="form-control" id="age" placeholder="Your Age" required>
						</td>
    				</tr>
    				<tr>
    					<td colspan="2">	
    						<button id="btnSubmit" class="btn btn-lg btn-block">Submit</button>
    					</td>
    				</tr>
    			</table>
			  </form>
    	</div>
	</section>
</body>
</html>