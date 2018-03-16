<?php
   include "server1.php";
   session_start();
   
if(isset($_POST['SIGN'])) {
      $USERNAME = $_POST['USERNAME'];
      $PROPERTYRATE = $_POST['PROPERTYRATE'];
      $PROPERTYAREA = $_POST['PROPERTYAREA'];
      $PROPERTYPRICE = $_POST['PROPERTYPRICE']; 
      $PROPERTYPLACE= $_POST['PROPERTYPLACE']; 
      $qry = "SELECT * FROM 'PROPERTYREGISTER' where USERNAME='&USERNAME',PROPERTYRATE='&PROPERTYRATE',PROPERTYAREA='&PROPERTYAREA',PROPERTYPRICE='&PROPERTYPRICE',PROPERTYPLACE='&PROPERTYPLACE' ";
          $res = mysqli_query($conn, $qry) 
      if(mysqli_num_rows($result)>0) {
        echo "REGISTER SUCCESSFULL";
      	header('location:home.php');
      	}
      	}
?>
<!DOCTYPE html>
<html>
<head>
<title>PROPERTY BHAAJO REGISTER</title>
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
<center>
<div class="b">
<h1>PROPERTY BHAAJO REGISTER</h1></center><br><br>
</div>
<div class="c">
<form action="" method="post">
    <center>SELECT IMAGE TO UPLOAD &nbsp; &nbsp;
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit"></center><br><br><br>
<center>USERNAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" value=""name="USERNAME"><br><br><br>
PROPERTYRATE &nbsp;&nbsp;&nbsp;
<input type="text" value=""name="PROPERTY_RATE"><br><br><br>
PROPERTYAREA &nbsp;&nbsp;&nbsp;
<input type="text" value=""name="PROPERTY_AREA"><br><br><br>
PROPERTYPRICE &nbsp;&nbsp;&nbsp;
<input type="text" value=""name="PROPERTY_PRICE"><br><br><br>
PROPERTYPLACE &nbsp;&nbsp;
<input type="text" value=""name="PROPERTY_PLACE"><br><br><br>
<input type="button" name="ENTER" value="ENTER">
</form>
</div>
</center>
</body>
</html>
