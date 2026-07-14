<?php
include("include/connection.php");
if(isset($_GET['did']))
{
	$a=$_GET['did'];
	$sql=mysqli_query($con,"DELETE FROM student WHERE id='$a' ");
	header("Location:view.php");
}
else{
	$sql=mysqli_query($con,"SELECT * FROM student");
	$row=mysqli_fetch_array($sql);
	$count=mysqli_num_rows($sql);
}
?>

<html>
<head>
</head>
<body>
<table border="1px" height="auto" width="1000px">
<tr>
<th>Id</th>
<th>Name</th>
<th>Phone</th>
<th>Puja</th>
<th>Date</th>
<th>Address</th>
<th>Action</th>
</tr>

<?php
if($count>0){
	$i=1;
	do{
		?>
		<tr>
		<td> <?php echo $i ; ?></td>
		<td> <?php echo $row['name'];?></td>
		<td> <?php echo $row['phone'];?></td>
		<td> <?php echo $row['puja'];?></td>
		<td> <?php echo $row['date'];?></td>
		<td> <?php echo $row['address'];?></td>
		
		<td>
		<a href="view.php?did=<?php echo $row['id']; ?>">DELETE</a>/
		<a href="update.php?uid=<?php echo $row['id']; ?>">UPDATE</a>
		</td>
		</tr>
		
		<?php
		$i++;
	}while($row=mysqli_fetch_array($sql));
}
?>
</table>
</body>
</html>