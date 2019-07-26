<?php
include "config2.php";
?>
<html>
    <body bgcolor=powderblue>
    <form name=aa method=post action=password.php>
        <h1><p align=center>Update Your Password</p></h1>
     <pre>  <h2>
                Old Password     :<input type=text name=OPw><br>
                New Password     :<input type=text name=NPw><br>
                Confirm Paswword :<input type=text name=CPw><br>
                                  <input type=submit value=Confirm> <input type=reset value=Reset>                                 
</h2> 
</pre>
        <?php
        
        $opd=isset( $_POST['OPw'] )?$_POST['OPw']:"";
        $npd=isset($_POST['NPw'])?$_POST['NPw']:"";
        $cpd=isset($_POST['CPw'])?$_POST['CPw']:"";
     $sql=mysqli_query($conn2,"select * from passwordtb where password=('$opd')");
    if($npd==$cpd){
        
     $sql=mysqli_query($conn2,"update passwordtb set password=('$cpd') where password=('$opd')");
        if(mysqli_affected_rows($conn2)!=0)
        echo "<h3><p align=center>your Password Changed Successefull</p></h3>";
    }
        else
            echo "<h3><p align=center>your Password is't matched</p></h3>";
        ?>
        </form>
    </body></html>