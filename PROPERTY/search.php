<?php
   include "connect.php";
   session_start();
   
if(isset($_POST['SIGN'])) {
      $PROPERTYRATE = $_POST['PROPERTYRATE'];
      $PROPERTYAREA = $_POST['PROPERTYAREA'];
      $PROPERTYSTATE = $_POST['PROPERTYSTATE']; 
      $PROPERTYPLACE= $_POST['PROPERTYPLACE']; 
      $qry = "SELECT * FROM 'SEARCH' where ,PROPERTYRATE='PROPERTYRATE',PROPERTYAREA='PROPERTYAREA',PROPERTYSTATE='PROPERTYSTATE',PROPERTYPLACE='PROPERTYPLACE' ";
          $res = mysqli_query($conn, $qry) 
      if(mysqli_num_rows($result)>0) {
        echo "SEARCH SUCCESSFULL";
      	header('location:home.php');
      	}
      	}
?>
<!DOCTYPE html>
<html>
<head>
<title>PROPERTY BHAAJO SEARCH</title>
<style>
.b{
background-color:red;
}
.c{
background-color:orange;
border:10px solid black;
padding-top:20px;
padding-bottom:20px;
width:70em;
}
</style>
</head>
<body>
<form action="" method="post">
<center>
<div class="b">
<h1>PROPERTY BHAAJO SEARCH</h1></center><br><br>
</div>
<center><div class="c">
PROPERTYRATE &nbsp;&nbsp;&nbsp;
<select name='1'>
<option value="2">70k</option>
<option value="2">100k</option>
<option value="2">1m</option>
<option value="2">5m</option>&nbsp;&nbsp;&nbsp;&nbsp;
</select><br><br><br>
PROPERTYAREA &nbsp;&nbsp;&nbsp;
<select name='3'>
<option value="4">550sqfeet</option>
<option value="4">1000sqfeet</option>
<option value="4">1500sqfeet</option>
<option value="4">2000sqfeet</option>&nbsp;&nbsp;&nbsp;&nbsp;
</select><br><br><br>
PROPERTYSTATE &nbsp;&nbsp;&nbsp;
<select name='4'>
<option value="5">ANDHRA PRADESH</option>
<option value="5">TAMIL NADU</option>
<option value="5">WEST BENGAL</option>
<option value="5">DELHI</option>&nbsp;&nbsp;&nbsp;&nbsp;
</select><br><br><br>
PROPERTYPLACE &nbsp;&nbsp;
<select name='4'>
<option value="5">MAHAN NAGAR</option>
<option value="5">MAYALAPUR</option>
<option value="5">KOLKATA HUBROAD</option>
<option value="5">GAUTAM NAGAR</option>&nbsp;&nbsp;&nbsp;&nbsp;
</select><br><br><br>
<input type="button" name="SEARCH" value="SEARCH">
</div>
</center>
</form>
</body>
</html>

