
<?php
  $h="localhost";
  $u="id10020314_root";
  $p="password";
  $con=mysqli_connect($h,$u,$p,"id10020314_test");

	if(isset($_POST['submit']))
	{
  		$sCredit=$_POST['sCredit']-$_POST['amt'];
  		$uQuery="update users set credit=".$sCredit." where id=".$_POST['sendId']."";
  		$rCredit=$_POST['rCredit']+$_POST['amt'];
  		$uQuery2="update users set credit=".$rCredit." where id=".$_POST['recId']."";
		$tQuery="insert into transactions (sender,receiver,credit) values('".$_POST['sendId']."','".$_POST['recId']."','".$_POST['amt']."');";
  	  mysqli_query($con,$uQuery);
  	  mysqli_query($con,$uQuery2);
	  mysqli_query($con,$tQuery);
	}
	
//comment
?>

<html>
<head>
<style>

body {
  background-image: url("bg.jpg");
  background-size: 100% 131%;
}

.button {
  background-color: #35586C;
  color: white;
  padding: 10px 25px;
  text-align: center;
  font-size: 17px;
}

.button:hover{
background-color: #50A6C2;
 }


h1.a {
  font-size: 100px;
margin-top:40px;
}

</style>
<title>credify</title>
</head>

<body>
	<h1 align="center" class="a">CREDIFY</h1>

	<h4 align="center"> <font size="70">Credit Management System</font></h4>
	<br><br><br><br><br><br><br><br>
	<p  align="center">
	<button type="button" onclick="window.location.href='allusers.php'" class="button">ALL USERS</button></p>
</body>
</html>
