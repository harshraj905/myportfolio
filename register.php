<?php 
include('config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Portfolio</title>
  </head>
  <body>
    <div class="container" style="margin-top: 45px;">
      

      <form method="POST" action="#">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required="">
    
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" required="">
    
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required="">
  </div>
  
  <button type="submit" class="btn btn-primary" name="register">Submit</button>
</form>


    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php 
$usrnm = $_POST['username'];
$eml = $_POST['email'];
$passwrd = $_POST['password'];
$secretCode = random_int(1111, 9999);

 
if(isset($_POST['register']))
{
  $checkEntry = mysqli_query($config,"SELECT * FROM login WHERE username = '$usrnm' OR password='$passwrd'");

  if(mysqli_num_rows($checkEntry)>0)
  {
    echo "<script>alert('User with same Credentials already exists. Please login or recover your password to access the Dashboard.')</script>";
    echo "<script>window.location.href='http://localhost/portfolio/login.php'</script>";
  }

  elseif(mysqli_num_rows($checkEntry) == 0)
  {
    mysqli_query($config,"INSERT INTO login(username,email,password,ssn) VALUES('$usrnm','$eml','$passwrd','$secretCode')");

    echo "<script>alert('Data Entered')</script>";

    echo "Your Secret Code is:" . $secretCode . "<br/>Please remember this code for your further assistance. Secret Code Once lost cannot be recovered.";

    echo "<a href='http://localhost/portfolio_interns/modules/ui/login.php' style='text-decoration:none'>Click Here to Login</a>";

    // echo "<script>window.location.href='http://localhost/portfolio/login.php'</script>";
  }  
  else
  {
    echo "<script>alert('No Data Entered')</script>";
  }
}



?>
