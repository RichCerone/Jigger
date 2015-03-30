<?php

if(isset($_POST['addr'])){
$addr = $_POST['addr'];
echo $addr;
} else {
	$addr = $_POST['adrs'];
	$name = $_POST['name'];
	echo $name; ?><br><?
		echo $addr;
}

?>
