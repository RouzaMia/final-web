<?php 

	$key = $_GET['name'];
	$connection=mysqli_connect('localhost','root','','ecart');

	$sql = "SELECT * FROM ecart WHERE name ='$key'";
	$result = mysqli_query($connection,$sql);
	$row = mysqli_fetch_assoc($result)

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <style>
    	 h1{
            
     text-transform: capitalize;
    border: 2px  #000030 solid;
    width: 16;
    text-align: center;
    width: 19%;
    margin-left: 34%;
        }
        p {
            
            border: 2px black solid;
    width: 19.25%;
    margin: 0px;
    box-sizing: border-box; 
    margin-left: 34%;
    padding: 10px;
        }
        
    </style>
</head>
<body>
	
        
		<h1>Product Details</h1>
        <p><strong>Product ID:</strong> <?php echo $row['id']; ?></p>
        <p><strong>Product Name:</strong> <?php echo $row['name']; ?></p> 
        <p><strong>Product Price:</strong>&#2547; <?php echo $row['price']; ?></p> 
        <p><strong>Discount on the product:</strong> <?php echo $row['discount']; ?> % off</p> 
        <!-- <p><strong>Description:</strong> <?php echo $row['description']; ?></p> 
 -->
	 
    
</body>
</html>