<html>
<head>
<style>

h1.a {
  font-size: 70px;
  color:#35586C;
  margin:40px;
}

body {
  background-image: url("allbg.svg");
  background-size: 100% 100%;
  color:#236B8E;
  font-size: 20px;
}

p{ margin-left:250px;}

input[type=submit] {
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: #35586C;
  color: white;
}

input[type=number] {
  padding: 12px 20px;
  box-sizing: border-box;
  background-color:#50A6C2;
  color: black;
}

</style>
</head>
<body>
	<h1 align="center" class="a"> USER 1</h1>
     <?php
	$h="localhost";
	$u="id10020314_root";
	$p="password";
	$con=mysqli_connect($h,$u,$p,"id10020314_test");

	$sId=$_GET['id'];
	$query="select * from users where id=".$_GET['id']."";
	$result=mysqli_query($con,$query);
	$rows = mysqli_fetch_array($result);

		echo 
			"<p class='p'><b><font color='#002e6e'>NAME :</b></font> &nbsp&nbsp&nbsp&nbsp ".$rows['name']."</p><BR>".
			"<p><b><font color='#002e6e'>EMAIL :</b></font> &nbsp&nbsp&nbsp".$rows['email']."</p><BR>".
			"<p><b><font color='#002e6e'>CREDIT :</b></font>&nbsp&nbsp".$rows['credit']."</p>" ;

     ?>
 	<form action='receiver.php' method='get'>
		<br><br><br><br><br><p><b>
		<font color='#002e6e'>AMOUNT:</b></font> 
		<input type='number' name='amount' min='0' max="<?php echo $rows['credit'];?>" required="required" size="40">
		<br><br>
		<input type='submit' value="CONFIRM" class="submit"></p>
		<input type="hidden" name="sID" value="<?php echo $sId; ?>">
	</form>
</body>
</html>

