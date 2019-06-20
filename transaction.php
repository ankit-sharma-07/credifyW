
<html>
<head>
<style>

body {
  background-image: url("allbg.svg");
  background-size: 100% 100%;
}

p{font-size:25px;
margin-left:270px;}

h1{margin-left:270px;
margin-top:70px;
font-size:70px;}

input[type=submit] {
  padding: 20px 40px;
  margin: 8px 8px;
  box-sizing: border-box;
  background-color: #35586C;
  color: white;
}

</style>
</head>
	<body>
		<?php
		$h="localhost";
		$u="id10020314_root";
		$p="password";
		$con=mysqli_connect($h,$u,$p,"id10020314_test");


		$query="select * from users where id=".$_GET['senderID']."";
		$result=mysqli_query($con,$query);
		$rows1 = mysqli_fetch_array($result);
		echo 
			"<table><tr><td><h1>USER 1</h1><br>
			<p class='p'><b><font color='#002e6e'>NAME : &nbsp&nbsp&nbsp</font></b>".$rows1['name']."<BR>".
			"<b><font color='#002e6e'>EMAIL : &nbsp&nbsp</b></font>".$rows1['email']."<BR>".
			"<b><font color='#002e6e'>CREDIT :&nbsp</b></font>".$rows1['credit']."</p></td>" ;

		$query="select * from users where id=".$_GET['id']."";
		$result=mysqli_query($con,$query);
		$rows2 = mysqli_fetch_array($result);
		echo 
			"<td><h1>USER 2</h1><br>
			<p class='p'><b><font color='#002e6e'>NAME : &nbsp&nbsp&nbsp</font></b> ".$rows2['name']."<BR>".
			"<b><font color='#002e6e'>EMAIL : &nbsp&nbsp</font></b>".$rows2['email']."<BR>".
			"<b><font color='#002e6e'>CREDIT :&nbsp</font></b>".$rows2['credit']
			."</p></td></tr></table>" ;

?>
<div align="center">
	<br><br><br><br><font size="10" color="black"><b>TRANSFER</b> : <?php echo $_GET['amount']; ?></font><br>
	<form action="index.php" method="post">
		<input type="hidden" name="sendId" value="<?php echo $_GET['senderID'];?>">
		<input type="hidden" name="recId" value="<?php echo $_GET['id']; ?>">
		<input type="hidden" name="sCredit" value="<?php echo $rows1['credit']; ?>">
		<input type="hidden" name="rCredit" value="<?php echo $rows2['credit']; ?>">
		<input type="hidden" name="amt" value="<?php echo $_GET['amount']; ?>"><br><br><br>
		<input type="SUBMIT" name="submit" value="CONFIRM">
	</form>
	
	<form action="index.php" method="post">
	<input type="SUBMIT" name="cancel" value="CANCEL">
	</form>
	</div>

</body>
</html>

