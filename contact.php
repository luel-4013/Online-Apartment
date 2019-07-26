<?php
include "config.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>contact</title>
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

<section class="section container-fluid" id="contact">
  <div class="section-title text-center text-uppercase">
    <h2 class="underlined">contact us</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
       
        <form action="contact.php" method="post" name="form1" id="contact-form">
          <input name="name" type="text" id="name" form="contact-form" placeholder="Your name">
          <input name="subject" type="text" id="subject" form="contact-form" placeholder="Message subject">
          <input name="email" required type="email" id="email" form="contact-form" placeholder="Your Email">
          <textarea name="message" required id="Message" form="contact-form" placeholder="Your message"></textarea>
          <input name="submit" type="submit" class="btn btn-primary" id="submit" formaction="contact.php" value="submit">
        </form>
       
       
    </div>
  </div>
</section>

</body>
<?php
$name=isset($_POST['name'])?$_POST['name']:"";
$subject=isset($_POST['subject'])?$_POST['subject']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$message=isset($_POST['message'])?$_POST['message']:"";
$sql=mysqli_query($conn,"insert into contact values('$name','$subject','$email','$message')");

if($name==null||$sub=null||$email==null||$message==null)
{
echo" "; 
}
else if($sql!=0)
{
echo"<h1><center>THE EMAIL HAS BEEN SENT<font color=maroon>!</font></center></h1>";
}
else
echo"THE EMAIL HAS NOT BEEN SENT";
?>
</form>
</body>
</html>
