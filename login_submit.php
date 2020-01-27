<?php
session_start();

	$myusername = $_POST['username'];
	//$myusername variable contains the contents from the username field
	
	$mypassword = $_POST['userpass'];
	//$mypassword variable contains the contents from the userpass field

	$servername = " /*insert server address*/ ";
	//$servername = the server address of the database for credential verification

	$theuser = " /*insert db server username*/ ";
	//$theuser = username for db server login

	$thepassword = " /*insert db server password*/ ";
	//$thepassword = password for db server login

	$dbname = " /*insert db name*/ ";
	//$dbname = the name of the database

// Create connection
	$conn = new mysqli($servername, $theuser, $thepassword, $dbname);

// Check connection
	if ( mysqli_connect_errno() ) {
		
		// If there is an error with the connection, stop the script and display the error.
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
		
}

if (!empty($_POST["username"])) {
}       
 //refresh the page if incorrect or no username 
 header('Location: login');  

if (!empty($_POST["userpass"])) {
	
} else {  
    //refresh the page if incorrect or no username
    header('Location: login');
}


$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // check data of each row in database
    while($row = $result->fetch_assoc()) {
      
        if ($row["username"] == $myusername && $row["password"] == $mypassword) {
        	
      session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			
			//load file_uplaod
			header('Location: file_upload');
  	
        }
        	
        	else { 
        	    
        	echo"user not found";
        	
        	//load location page
        	header('Location: login');
        }
    }
} else {
	
  	//load location page
    header('Location: login');
}

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
		
		<div class="row contact-details" >
			
			<div class="col-lg-12 m-auto text-center">
			
		
				<div class="divider"></div>
	
				<form class="contact-form mt-4" action="login_submit" enctype="multipart/form-data" method="post"> 
	
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
											
											<br/>

					
			</form>
	
	</section>		
</body>
</html>

