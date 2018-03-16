<?php
   include "connect.php";
   session_start();
   
if(isset($_POST['SIGNUP'])) {
      $USERNAME = $_POST['USERNAME'];
      $PASSWORD = $_POST['PASSWORD'];
      $EMAIL = $_POST['EMAIL'];
      $PHONE = $_POST['PHONE'];      
      $qry = "INSERT INTO 'PROPERTYSIGNUP' where USERNAME='&USERNAME',PASSWORD='&PASSWORD',EMAIL='&EMAIL',PHONE='&PHONE' ";
      $qry = "INSERT INTO 'SIGNUP'('USERNAME','PASSWORD','EMAIL','PHONE')VALUES ('$USERNAME ','$PASSWORD','$EMAIL','$PHONE')"
          $res = mysqli_query($conn, $qry) 
      if(mysqli_num_rows($result)>0) {
        echo "SIGNUP SUCCESSFULL";
      	header('location:home.php');
      	}
      	}
?>
<!DOCTYPE html>
<html>
<head>
<title>PROPERTY BHAAJO SIGN UP</title>
<style>
.b{
background-color:red;
}
.c{
background-color:orange;
border:10px solid black;
padding-top:20px;
padding-bottom:20px;
}
</style>
</head>
<body>
<form action="" method="post">
<center>
<div class="b">
<h1>PROPERTY BHAAJO SIGN UP</h1></center><br><br>
</div>
<div class="c">
<center>
<h4>PROPERTY BHAAJO SIGN UP</h4><br><br>
USERNAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" value=""name="USERNAME"><br><br><br>
PASSWORD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" value=""name="PASSWORD"><br><br><br>
EMAIL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" value=""name="EMAIL"><br><br><br>
PHONE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" value=""name="PHONE"><br><br><br>
<input type="button" name="SIGNUP" value="SIGNUP">
</div></center>
</form>
</body>
</html>
