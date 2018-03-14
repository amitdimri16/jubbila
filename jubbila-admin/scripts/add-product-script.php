<?php  
	
	include_once $_SERVER['DOCUMENT_ROOT']. '/jubbila/includes/dbconnection.php';

	if(isset($_POST["insertProduct"])) {

		$pname = mysqli_real_escape_string($connection, $_POST['pname']);
		$pcompany = mysqli_real_escape_string($connection, $_POST['pcompany']);
		$category = mysqli_real_escape_string($connection, $_POST['category']);
		$pdetail = mysqli_real_escape_string($connection, $_POST['pdetail']);
		$file = mysqli_real_escape_string($connection, addslashes(file_get_contents($_FILES["pimage"]["tmp_name"])));
		$price = mysqli_real_escape_string($connection, $_POST['price']);
		$stock = mysqli_real_escape_string($connection, $_POST['stock']);

		//$query = "INSERT INTO product_image(productImage) VALUES ('$file')";

		$milliseconds = round(microtime(true) * 1000);
    	$productID = $category . rand(10, 99) . date('ymds') . substr($milliseconds, -3);

    	var_dump($file);

		$query = "INSERT INTO products(productID, productName, productPrice, productThumbImage, productStock, dateAdded, deliverable, productCategoryID, storeID) values('$productID', '$pname', '$price', '$file', '$stock', NOW(), 'YES', $category, '')";
// echo "sdfgdfg";
		if(!mysqli_query($connection, $query)) {
			echo "Insert Error: " . mysqli_error($connection);
		}
		else {

			echo "Successful";
			
		}
// echo "sadsadadadasd";
	}

?>