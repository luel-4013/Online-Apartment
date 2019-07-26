<?php
include "config.php";
?>

<html>
<body bgcolor=powderblue>
<form name=frmdisplay method=post action=display.php>
<table border=1 align=center cellspacing=8 cellpadding=8>

<?php
$sql=mysqli_query($conn, "select * from Registration");

if(mysqli_affected_rows($conn)!=null)
{
while($r=mysqli_fetch_assoc($sql))

 {
       echo"<tr><td>IDNO</td><td>".
$r['IDNO']."</td></tr>";
 
 echo"<tr><td>NAME</td><td>".
$r['NAME']."</td></tr>";
 
echo"<tr><td>GENDER</td><td>".
$r['SEX']."</td></tr>";
 

echo"<tr><td>PHOTO</td><td> <img src= ".$r['PHOTO']." width=150 length=150></td></tr>";
 


}
}
else
 echo"The localhost is empty!"
?>
</table>
</form>
</body>
</html>