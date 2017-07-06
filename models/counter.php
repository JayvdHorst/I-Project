<?php
$sql_ct="SELECT id FROM users_steam";

if ($result=mysqli_query($conn,$sql_ct))
{
	// Return the number of rows in result set
	$rowcount=mysqli_num_rows($result);

	// Free Result
	mysqli_free_result($result);
}

$sql_t ="SELECT name FROM users_steam";
$sql_t_r = mysqli_query($conn, $sql_t);
$sql_t_s = $sql_t_r->fetch_array();