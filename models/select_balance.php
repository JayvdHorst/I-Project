<?php
$select_b = "SELECT * FROM users_steam WHERE steamid='". $users_b_id ."'";
$result_b = $conn->query($select_b);

if ($result_b->num_rows > 0) {
	// output data of each row
	while($row_b = $result_b->fetch_assoc()) {
		$user_b =  $row_b['balance'];
	}
}