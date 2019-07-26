<?php
//include "display.php"; //database table to display
include "config.php";
?>
<html>
<head>
    <title>
       admin page 
    </title>
    <style>
        p
        {
            background-color:brown;
            text-align: center;
           /*position: absolute; crop frame color only*/
            color:lime;
        }
    </style>
    </head>
    <body bgcolor=darkblue>
    <form name=data method=POST action=preadmin_new.php>
        <p>
        username <input type=text id=user name=user required><br>
        password <input type=password id=pass name=pass required><br>
   
        <input type=submit value=login> 
            
        </p>
        <?php
    
   $username=isset($_POST['user'])? $_POST['user']:"";
   $password= isset($_POST['pass'])? $_POST['pass']:"";
   // $ver="select * from verify where username='$user'  password='$pass'";
      //  $tes=mysqli_query($conn,$ver);
    //$old=isset($_POST['oldid'])? $_POST['oldid']:""; 
       if($username == null || $password== null)
        {
            echo "";
        }
        else
        {
         $sql=mysqli_query($conn,"select * from verify where username='$username' and password='$password'") or die("failed to query database");
            $row=mysqli_fetch_array($sql);
            if($row['username']==$username && $row['password']==$password)
            {
                
                //$_session['user']=$user;
               // $_session['pass']=$pass;
                //echo "<br> creds accepted";
               echo "creds accepted";
                
                include "des.html"; //page will be displayed if pass is correct 
        
            }
            else
            {
                echo "invalid username or password";
            }
        }
        
        
        ?>
        </form>
        </body>
</html>