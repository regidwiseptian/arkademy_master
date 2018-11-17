<?php

$data = array(
	"itemId" => "12341822",
	"itemName" => "FGX Flannel Shirt",
	"price" => "195000",
	"availableColorAndSize" => array(
		array("color" => "blue-black", 
					"size" => array("M","L","XL")),
		array("color" => "black-white",
		  			"size" => "L")	
	),
	"freeShiping" => "false"
);

function FormatJSON($data){
	return json_encode($data);
}

echo FormatJSON($data);

?>