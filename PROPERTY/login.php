<?php
   include "server.php";
   session_start();
   
if(isset($_POST['LOGIN'])) {
      $USERNAME = $_POST['USERNAME'];
      $PASSWORD = $_POST['PASSWORD'];      
      $qry = "SELECT USERNAME FROM 'PROPERTYSIGNIN' where USERNAME='&USERNAME' and PASSWORD='&PASSWORD' ";      
      $res = mysqli_query($conn, $qry) 
      if(mysqli_num_rows($result)>0) {
        echo "login SUCCESSFULL";
      	header('location:home.php');
      	}
      	}
?>
<!DOCTYPE html>
<html>
<head>
<title>PROPERTY BHAAJO SIGN IN</title>
<style>
.b{
background-color:red;
}
.c{
background-color:orange;
border:10px solid black;
padding-top:20px;
padding-bottom:20px;
width:40em;
}
</style>
</head>
<body>
<form action="" method="post">
<center>
<div class ="b">
<h1>PROPERTY BHAAJO LOG IN</h1></div></center>
<center><div class="c">
<div class=""d>
<h4>SIGN IN</h4>
USERNAME: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" value=""name="USERNAME"><br><br><br>
PASSWORD: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" VALUE="" name="PASSWORD"><br><br>
<input type="button" name="LOGIN" value="LOGIN"></div>
</div></center>
</form>
</body>
</html>

