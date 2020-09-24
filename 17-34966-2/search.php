<?php
	$key=$_GET["key"];
	$s="localhost";
	$u="root";
	$p="";
	$d="ecart";
	$conn=mysqli_connect($s,$u,$p,$d);
	$query="SELECT name FROM ecart WHERE name LIKE '%$key%'";
	$rs=mysqli_query($conn,$query);
?>

<table>
	<?php
		while ($row=mysqli_fetch_assoc($rs)) {
			echo "<tr>";
			echo '<td><a href="productdetails.php?name='.$row["name"].'" class="text">'.$row["name"].'</a></td>';
			echo "</tr>";
		}
	?>
</table>