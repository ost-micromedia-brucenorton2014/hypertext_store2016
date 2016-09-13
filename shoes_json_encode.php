<?php
	include  '_includes/connect.php';

	//define table
	$tbl = "items";//change to your table i.e. John_app
	$tbl2 = "photos";
	//write query
	$query = "SELECT $tbl.itemID, $tbl.title, $tbl.description, $tbl.price, $tbl2.src FROM $tbl, $tbl2 WHERE $tbl.itemID = $tbl2.itemID";
	//prepare statement, execute, store_result
	if($displayStmt = $mysqli->prepare($query)){
		$displayStmt->execute();
		$displayStmt->store_result();
	}
	//bind results
	$displayStmt->bind_result($itemIDResult, $titleResult, $descriptionResult, $priceResult, $srcResult);

	//create an array for the results
	$shoeArray = [];

	//fetch results
	while($displayStmt->fetch()){
		$shoeArray[] = [$titleResult, $srcResult, $priceResult, $descriptionResult];
	}
	//encode the array in json format
	echo( json_encode($shoeArray));
?>

