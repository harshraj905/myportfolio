<?php 
include('config.php');
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Portfolio | Harsh Raj</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/plugins.css" />
<link rel="stylesheet" type="text/css" href="css/modalboxes.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>

<div class="erling_tm_section clearfix" id="contact">
<div class="erling_tm_contact">
<div class="container">
<div class="erling_tm_title wow fadeInLeft" data-wow-duration="1s">
<span>Login</span>
<h3>Admin's Login</h3>
</div>
<div class="accordion_content">
<div class="form_wrapper">
<form id="contactForm" method="POST">
<ul>
<li>
<input type="text" placeholder="Name" name="username" class="cf-form-control"  />
<span></span>
</li>
<li>
<input type="text" placeholder="Email" name="useremail" class="cf-form-control"  />
<span></span>
</li>
<li>
<input type="password" placeholder="Password" name="password" class="cf-form-control"  />
<span></span>
</li>
</ul>
<div class="erling_tm_button">
<input type="submit" name="submit" value="Login">

</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>






<div class="erling_tm_section clearfix">
<div class="erling_tm_copyright">
<div class="container">
<div class="inner">
<div class="logo wow fadeInLeft" data-wow-duration="1s">
<img src="img/logo/light.png" alt />
</div>
<div class="text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
<p>Copyright &copy; 2024 by <a class="line_effect" href="https://themeforest.net/user/marketify" target="_blank">Harsh Raj</a></p>
</div>
</div>
</div>
</div>
</div>


<div class="progressbar">
<a href="#"><span class="text">To Top</span></a>
<span class="line"></span>
</div>

</div>
</body>
</html>


<?php 

$username = $_POST['username'];
$email = $_POST['useremail'];
$password = $_POST['password'];

$matchCredentials = mysqli_query($config,"SELECT * FROM login WHERE username = '$username' AND email = '$email' AND password = '$password'");

if(isset($_POST['submit']))
{
	if(mysqli_num_rows($matchCredentials)>0)
	{
		session_start();
		$_SESSION['loggedinUser'] = $email;

		echo "<script>alert('Login Successful')</script>";
		echo "<script>window.location.href='http://localhost/myportfolio/dashboard.php	'</script>";
	}
	else
	{
		echo "<script>alert('No Authentic User Found')</script>";
	}
}

?>



