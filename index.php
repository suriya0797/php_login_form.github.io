
<!DOCTYPE html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="login";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
try
{
if(isset($_POST['reg']))
{
	$name=$_POST['uname'];
	$password=md5($_POST['pass1']);
	$email=$_POST['email'];
	$accept=$_POST['checkbox'];
	if($accept== "ON"||$accept== "on")
		$accept=1;
	else
		$accept=0;
	$sql = "INSERT INTO user (name,email,password,accept)VALUES('$name','$email','$password','$accept')";
	if ($conn->query($sql) == TRUE) {
    echo "Registered succesfully";
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
} 
}
if(isset($_POST['log']))
		{
			$email=$_POST['Username'];
			$password=md5($_POST['Password']);
			if($email!=NULL && $password!=NULL)
			{
			
		    $sql1="SELECT * FROM user where email='$email' and password='$password'";
			$res=mysqli_query($conn,$sql1);
			$row=mysqli_fetch_array($res);
	
			if($row>0)
			{
				echo 'welcome ' .$row['name'] ."        <a href>Logout</a>";
			}
			else
			{
				echo 'Invalid username or password';			
			}
			}
			else
			{
				echo 'Username or password is empty';
			}
	}
}
catch (Exception $ex) {
      $msg= $ex->getMessage();
      $msgtype="warning";
    }
	mysqli_close($conn);
?>
<html>
<head>
<title>Login / Register Form a Responsive</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1>Login / Register Form</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Login form</h2>
			<form action="#" method="post">
				<div class="form-sub-w3">
					<input type="text" name="Username" placeholder="Email id " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="Password" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<p class="p-bottom-w3ls">Are you new?<a class="w3_play_icon1" href="#small-dialog1">  Register here</a></p>
				
				<div class="submit-w3l">
					<input type="submit" name="log" value="Login">
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>
<div id="small-dialog1" class="mfp-hide">
					<div class="contact-form1">
										<div class="contact-w3-agileits">
										<h3>Register Form</h3>
											<form action="#" method="post">
												<div class="form-sub-w3ls">
													<input name="uname" placeholder="User Name"  type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Email" class="mail" name="email" type="email" required="">
													<div class="icon-agile">
														<i class="fa fa-envelope-o" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Password"  type="password" name="pass1" required="">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Confirm Password"  type="password" name="pass2" required="">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="login-check">
								 			 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
											</div>
										<div class="submit-w3l">
											<input type="submit" name="reg" value="Register">
										</div>
										</form>
					</div>	
				</div>
<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2017 Login/Register form . All rights reserved | Design by Suriya</a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>