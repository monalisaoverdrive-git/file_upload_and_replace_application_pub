<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit();
}

$docsent = false;

?>
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
		
		<div class="row contact-details">
			
			<div class="col-lg-12 m-auto text-center">
				
				<h2><b>Investor Notes Pricing Supplement Update Tool</b></h2>
				
				<div class="divider"></div>
	
				<form class="contact-form mt-4" action="<?php print htmlentities($PHP_SELF)?>" enctype="multipart/form-data" method="post"> 
	
					<h3>For uploading and replacing the pricing supplement at the following url:</h3>
					
					<p class="main"><i>The Designated File Path</i></p>
					
					<br /> 
					
						<a href="#" target="_blank" class="btn btn-secondary btn-lg mb-4"><span class="button-text-white">View The Current Document</span></a> <!-- Diasbaled for this example -->
						<p class="main"><i>Disabled For This Example</i></p>
							<hr/>

									<!-- <br />  -->
									
									<p class="main">Click the button below to select the updated pricing supplment from the desktop</p>
									
								
								
									<div class="fileUpload btn btn-primary btn-lg mb-4">
										
    									<span class="button-text-white">Select File</span>
    									
    										<input type="file" name="uploaded_document" class="upload" />
    										
									</div>
									
									
								
											<div class="divider"></div>
											
											<p class="main">After selecting the new file click the button below to upload and finalize the update</p>
											
											
											<button type="submit" name="submit1" class="btn btn-upload btn-lg mb-4">
												
												<span class="button-text-white">Upload File</span>
												
											</button>
											
												<hr/>
												
													<a href="https:./logout" target="_parent" class="btn btn-secondary btn-lg mb-4"><span class="button-text-white"><b>Log out of Application</b></span></a>
					
			</form>
			
			
			
<?php

#upload file
#defines the path to where the file will be uploaded. Initially set to the main directory
define ("filesplace","./");


	if (is_uploaded_file($_FILES['uploaded_document']['tmp_name'])) {

		if ($_FILES['uploaded_document']['type'] != "application/pdf") {
		
			echo "
				
					<div class=\"row contact-details\">
			
						<div class=\"col-lg-12 m-auto text-center alerty\">
			
							<h3 class=\"response\">The document must be in PDF format.</h3>;
							
						</div>
							
				</div>";
				exit();
				
				
	
		} else {
				
				##rename the document 
				$name = 'renamed_pdf_file';
	
				
			  ##upload the file to the specified directory 
				$result = move_uploaded_file($_FILES['uploaded_document']['tmp_name'], filesplace."/$name.pdf");
				
				if ($result == 1) echo "
				
				
						<div class=\"row contact-details\">
			
							<div class=\"col-lg-6 m-auto text-center alertg\">
				
								<h3 class=\"response\">Upload completed</h3>

							</div>
							
					</div>";
					
				

					else echo "
					
					
							<div class=\"row contact-details\">
			
								<div class=\"col-lg-6 m-auto text-center alertr\">
					
									<h3>An error happened while uploading.</h3>
									
								</div>
							
						</div>";
				exit();
		
				} #endIF
		
	} #endIF


#check if file is selected

if ( isset( $_POST['submit1'] ) && $name != 'thedocument') {

		echo "
		
				<div class=\"row contact-details\">
			
					<div class=\"col-lg-6 m-auto text-center alerty\">
	
						<h3 class=\"response\">File Not Selected</h3>
			
					</div>

			</div>";

	} 

?>
	
			</div> <!-- /col-sm-8 m-auto text-center -->
		
		</div> <!-- /row contact-details -->		
	
	</div> <!-- /container -->

</section> <!-- /section -->

</body>

</html>

