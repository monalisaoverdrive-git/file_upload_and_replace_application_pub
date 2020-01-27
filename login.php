<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex, nofollow">

    <title>File Update Application</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: https://bootswatch.com/flatly/ -->
    
    <!-- minified bootstrap -->
    <link href="https:./bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https:./style.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="https://blackrockdigital.github.io/startbootstrap-freelancer/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body style="background-color: #3a5ca6;">
	
<section class="contact-2" style="background-color: #3a5ca6; padding-top: 60px;">

	<div class="container" style="background-color: #fff; border-radius: 15px;">
		
		<div class="row contact-details" >
			
			<div class="col-lg-12 m-auto text-center">
	
				<form class="contact-form mt-4" action="login_submit" enctype="multipart/form-data" method="post"> <!-- the form action "login_submit" is executed once the form is submitted via the submit button" -->
	
					<h3>Enter Login Credentials</h3>
					
					<br /> 
					
						<p style="font-size: 18px;">Username:</p><input type="text" name="username" id="username" required=""/>
						
						<p></p>
						
						<p style="font-size: 18px;">Password:</p><input type="password" name="userpass" id="userpass" required=""/>
						
							<div class="divider"></div>
							
							<br/>

							<button type="submit" value="submit" class="btn btn-upload btn-lg mb-4" style="margin-bottom: 20px;">
												
												<span class="button-text-white">Login</span>
												
											</button>

									<br /> 
			
					
			</form>
	
	</section>		
</body>
</html>

