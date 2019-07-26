<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid grey;
}

input[type=text], input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid green;
    box-sizing: border-box;
}

button {
    background-color: powderblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    cursor: pointer;
    width: 10%;
}

.img {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.pic {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
   
}
</style>
<body>

<h2>Login Form</h2>

<form action="/action_page.php">
  <div class="img">
    <img src="dm.jpg" class="pic">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="dm" required><br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="dm1921" required><br>
        
    <button type="submit"><a href="home.html">Login</a></button><br>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
   <!-- <button type="button" class="cancelbtn">Cancel</button>--!>
    <!--<span class="psw">Forgot <a href="#">password?</a></span>--!>
  </div>
</form>

</body>
</html>
