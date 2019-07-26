<?php
include "config.php";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>display</title>
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
        
        <li class="active">
        <li><a href=SRF.php>input</a></li>
       <li><a href=display.php>Display</a></li>
       <li><a href=edit.php>Edit</a></li>
        <li><a href=display2.php>Display contact</a></li>

      </ul>
    </div>
  </div>
</nav>




<section class="section container-fluid" id="blog">
  <div class="section-title text-center text-uppercase">
    <h2 class="underlined">Display Form</h2>
  </div>
  <div class="container">
    <div class="row">
<table border='7' color=blue>

<?php

$sql=mysqli_query($conn, "select * from contact");

if(mysqli_affected_rows($conn)!=null)
{
//echo"<table border=6>";
while($r=mysqli_fetch_assoc($sql))

 {
echo"<table border=6><br>";
echo"<tr><td><h4>Name: </h4></td><td>".
$r['Name']."</td></tr>";
 echo"<tr><td><h4>subject:</h4></td><td>".
$r['Subject']."</td></tr>";
 
echo"<tr><td><h4>email: </h4> </td><td>".
$r['Email']."</td></tr>";

echo"<tr><td><h4>message :</h4></td><td>".
$r['Message']."</td></tr>";
echo"&nbsp";
echo"</table>";

//echo"<b><tr><td> </td><td><b>";
//$r['Message']."</td></tr>";

}
//echo"</tr>";
//echo"</table>";
}
else
 echo"The localhost is empty!"
?>

</table>
<form method="post" action="logout.php">
<p align=right>
<font color=grey size=10>
    <input type="submit" value="Logout">


</form>
</body>
</html>


