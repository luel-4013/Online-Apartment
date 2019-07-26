
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>success</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">
      
      	<img src="images/logo.png" alt="site logo" />
      	
      	<span>abc</span>APARTMENTS
      </a>
      	</div>
    <div class="collapse navbar-collapse" id="inverseNavbar1">
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control">
        </div>
      </form>
     
    </div>
  </div>
</nav>





<?php
    // Start the session
    ob_start();
    session_start();

    // Check to see if actually logged in. If not, redirect to login page
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
        header("Location: index.php");
    }
?>

<section class="section container-fluid" id="blog">
  <div class="section-title text-center text-uppercase">
    <h2 class="underlined">Logged In</h2>
  </div>
  <div class="container">
    <div class="row">




<h2><p>You have successfully logged into your page.<br> Click the display button below to see the information entered by potential customers, or if you want to edit, display or delete information.</p><h2>


<p align="right">
<a href=SRF.php><input type="submit" value="display"></a></li>
</p>
</form>
</body>