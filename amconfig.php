  <?php
        // pc name _ip address_localhost =name of server
        $dbHost="localhost";//server name
        $dbUser="root";//db user
        $dbPass="";//password of z database
        $dbName="auth";//database name
        
   $conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
   //mysql_select_db($dbname);//active db it canbe many   
 ?>