<!doctype html>
<?php
    include "amconfig.php";
    ?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>abc apartements</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
</form name=ver method=POST action=test1.php>

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
      <li><a href=test1.php>admin</a></li>
      </ul>
    </div>
  </div>
</nav>

        <section class="section container-fluid" id="contact">
  <div class="section-title text-center text-uppercase">
    <h2 class="underlined">ADMINSTRATOR'S LOGIN PAGE</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
       
      username <input type=text id=user name=user required><br>
        password <input type=password id=pass name=pass required><br>
   
        <input type=submit value=login> 
         
       
   
    </div>
  </div>
            </div>
        </section>   
	   <?php
    // Start the session
  //  session_start();

    // Defines username and password. Retrieve however you like,
    //$username = "user";
    //$password = "password";
   $username=isset($_POST['user'])? $_POST['user']:"";
   $password= isset($_POST['pass'])? $_POST['pass']:"";
    // Error message
    //$error = "";
   if($username == null || $password == null)
   {
	   echo"";
   }
    // Checks to see if the user is already logged in. If so, refirect to correct page.
    //if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
      //  $error = "success";
     //   header('Location: success.php');
    //} 
	else{
        $sql=mysqli_query($conn,"select * from verify where username='$username' and password='$password'") or die("failed to query database");
            $row=mysqli_fetch_array($sql);  
      // Checks to see if the username and password have been entered.
      // If so and are equal to the username and password defined above, log them in.
   
        if ($row['username']==$username && $row['password']==$password) {
            //$_SESSION['loggedIn'] = true;
            //header('Location: success.php');
		   echo "success login";
        } else {
           // $_SESSION['loggedIn'] = false;
                echo "invalid username or password";
             //header('location:home.php');
        }
    }
?>
</form>
    </body>
</html>


        

