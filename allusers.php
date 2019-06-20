<html>
<head>
<style>

body {
  background-image: url("allbg.svg");
  background-size: 100% 100%;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
  text-align: left;
   font-size: 20px;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#E0FFFF;}
</style>
</head>


	<body>
		<h1 align="center"><u>SELECT USER TO TRANSFER FROM</u></h1>
	</body>
</html>

		<?php
		$h="localhost";
		$u="id10020314_root";
		$p="password";
		$con=mysqli_connect($h,$u,$p,"id10020314_test");

		$r=mysqli_query($con,"select * from users ");
		echo "<table><tr>
		<th>ID</th>
		<th >Name</th>
		<th>Email</th>
		<th>Credit</th></tr>";
			while($row = mysqli_fetch_array($r)){

				echo "  <tr><td>"
				.$row['id']."</td><td><a href='amount.php?id=".$row['id']."'>"
				.$row['name']."</a></td><td>"
				.$row['email']."</td><td>"
				.$row['credit']."</td></tr>";}
			echo "</table>";

?>

