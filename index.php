<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>index</title>
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
     


      <ul class="nav navbar-nav navbar-right text-uppercase">
        
        <li class="active"><a href=home.html>home</a></li>
        <li><a href=info.html>about</a></li>
        <li><a href=services.html>services</a></li>
        <li><a href=contact.php>contact us</a></li>
        <li><a href=Team.html>team</a></li>
      <li><a href=index.php>admin</a></li>
      </ul>
    </div>
  </div>
</nav>


<!DOCTYPE HTML>

<?php

    // Start the session
    session_start();

    // Defines username and password. Retrieve however you like,
    $username = "user";
    $password = "password";

    // Error message
    $error = "";

    // Checks to see if the user is already logged in. If so, refirect to correct page.
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        header('Location: success.php');
    } 
        
    // Checks to see if the username and password have been entered.
    // If so and are equal to the username and password defined above, log them in.
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        if ($_POST['user'] == $username && $_POST['pass'] == $password) {
            $_SESSION['loggedIn'] = true;
            header('Location: success.php');
        } else {
            $_SESSION['loggedIn'] = false;
        $error= "<h1><center>Invalid username and password!<center></h1>";
             //header('Location: success.php');
        
        //header('Location: home.php');
        }
    }
?>
<?php
    include "amconfig.php";
    ?>
<html>
    <head>
        <title>Login Page</title>
    </head>
    
    <body>
        <!-- Output error message if any -->
        <?php echo $error; ?>
        <section class="section container-fluid" id="contact">
  <div class="section-title text-center text-uppercase">
    <h2 class="underlined">ADMINSTRATOR'S LOGIN PAGE</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
       
        <form action="index.php" method="post" name="form1" id="contact-form">
          <input name="user" required type="text" id="username" 
                 placeholder=" username">
          <input name="pass" required type="password" id="password" placeholder="password">
          <input name="LOGIN" type="submit" class="btn btn-primary" id="LOGIN" formaction="index.php" value="LOGIN">
        </form>
       
       
    </div>
  </div>
            </div>
        </section>
    </body>
    </html>
    </body>
</html>


        

