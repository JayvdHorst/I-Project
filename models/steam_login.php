<?php
require ('helpers/steamauth/steamauth.php');
# You would uncomment the line beneath to make it refresh the data every time the page is loaded
// unset($_SESSION['steam_uptodate']);

if(!isset($_SESSION['steamid'])) {

?>
	<li><?php loginbutton() ?></li>

<?php
}  else {
	include ('helpers/steamauth/userInfo.php');

    $db_steam_id = $steamprofile['steamid'];
	$db_steam_name = $steamprofile['personaname'];
    $db_steam_avatar = $steamprofile['avatar'];
    $db_balance = 0;
    $counter = 0;
    $trade_url = '';


	$steam_db = "SELECT * FROM users_steam WHERE steamid='". $db_steam_id ."'";
	$result = $conn->query($steam_db);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$db_balance =  $row['balance'];
			$trade_url =  $row['tradeurl'];
		}
	}

	//Protected content
	echo "<img  src=" . $steamprofile['avatar'] .' class="loggedin-image img-responsive center-block" title="" alt="" />' . "<p class='loggedin-name'>"  . $steamprofile['personaname'] . "</p>";
	logoutbutton();


	$query = "SELECT steamid FROM users_steam WHERE steamid='". $db_steam_id ."'";
	$query_vl = mysqli_query($conn , $query);
    $inv_query = "SELECT steamid FROM users_inventory WHERE steamid='". $db_steam_id ."'";
	$query_inv = mysqli_query($conn , $inv_query);

    if (mysqli_num_rows($query_inv) != 0) {

    } else {
	    $sql_inv = "INSERT INTO users_inventory ( `inventory`, `steamid`)VALUES ('$trade_url', '$db_steam_id')";

	    if ($conn->query($sql_inv) === TRUE) {

	    } else {
		    echo "Error: " . $sql_inv . "<br>" . $conn->error;
	    }
    }

	if (mysqli_num_rows($query_vl) != 0)
	{

	} else {
		$sql = "INSERT INTO users_steam (`name`, `steamid`, `avatar`, `balance`, `tradeurl`)VALUES ('$db_steam_name', '$db_steam_id', '$db_steam_avatar','$db_balance','$trade_url')";

		if ($conn->query($sql) === TRUE) {

		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }


}
?>
