<?php
include "config.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>abcApartment</title>
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
        <li><a href=edit.php>edit</a></li>
       <li><a href=display2.php>Display contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="section container-fluid" id="blog">
  <div class="section-title text-center text-uppercase">
    <h2 class="underlined">Edit Form</h2>
  </div>
  <div class="container">
    <div class="row">


<form action="contact.php" method="post" name="form1" id="contact-form">
          <input name="txtnOname" required type="text" id="OName" form="contact-form" placeholder=" Old Tenant's Name">
          <input name="txtnname" required type="text" id="Name" form="contact-form" placeholder="New Tenant's Name">
          <input name="txtnapt" required type="text"  id="Apt Number" form="contact-form" placeholder="Apt Number">
          
          <input name="txtntype" required type="text" id="Apt type" form="contact-form" placeholder="Apt type">
          <input name="txtnphone" required type="text" id="phone no" form="contact-form" placeholder="phone no">
          <input name="txtndate" required type="date" id="Entrance date" form="contact-form" placeholder="Entrance date">
          <input name="photo"  required type="File" id="photo" form="contact-form" placeholder="photo">
           <input name="Register" type="submit" class="btn btn-primary" id="submit" formaction="edit.php" value="Edit">
         <input name="Reset" type="submit" class="btn btn-primary" id="submit" formaction="edit.php" value="Reset">
</form>


<?php
$apt=isset($_POST['txtnapt'])?$_POST['txtnapt']:"";
$name=isset($_POST['txtnname'])?$_POST['txtnname']:"";
$Oname=isset($_POST['txtnOname'])?$_POST['txtnOname']:"";

$type=isset($_POST['txtntype'])?$_POST['txtntype']:"";
$phone=isset($_POST['txtnphone'])?$_POST['txtnphone']:"";
$date=isset($_POST['txtndate'])?$_POST['txtndate']:"";
$photo=isset($_POST['photo'])?$_POST['photo']:"";

 $sql=mysqli_query($conn,"update registration
set 
ApartmentNo='$apt',
Name='$name',
ApartmentType='$type',
PhoneNo='$phone',
Date='$date',
Photo='$photo'
 where Name=('$Oname')");
if($Oname==null)
{
echo" ";
}
else if(mysqli_affected_rows($conn)!=0)
{ 
echo "<h2>The record is successfully edited<h2>";
}
else  
echo "The record is not edited";

//}
//else
// echo " ";
?>
<form method="post" action="logout.php">
<p align=right>
<font color=grey size=10>
    <input type="submit" value="Logout">

</body>
</html>