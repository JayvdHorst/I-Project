<?php


$sql_skins = "SELECT * FROM skins WHERE Bayonet='Bayonet'";
$skins = $conn->query($sql_skins);

if ($skins->num_rows > 0) {
	// output data of each row
	while($row_skins = $skins->fetch_assoc()) {
		$skins_name =  $row_skins['name'] . "<br>";
		echo $skins_name;
	}
}
