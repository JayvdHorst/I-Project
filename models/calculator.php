<?php
	session_start();

	$users_b_id = $_SESSION['steam_steamid'];
	require( '../includes/config.php' );
	require( '../includes/bootstrap.php' );
	require ( 'select_balance.php' );
	include( 'case_information.php' );


if(isset($_POST['casename'])) {
		$casename = $_POST['casename'];
		$case_db     = "SELECT * FROM website_cases WHERE casename='" . $casename . "'";
		$case_result = $conn->query( $case_db );

		if ( $case_result->num_rows > 0 ) {
			// output data of each row
			while ( $case_row = $case_result->fetch_assoc() ) {
				$case_name  = $case_row['casename'];
				$case_price = $case_row['caseprice'];
			}
		}

		if ($case_price > $user_b) {
			echo "
				<div class=\"alert alert-danger alert-dismissable fade in\">
			    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
			    <strong>WARNING!</strong> BALANCE IS TO LOW
			  	</div>
			";
		} else {
			$new_balance = $user_b - $case_price;
			$sql_price = "UPDATE users_steam SET balance='$new_balance' WHERE steamid='" . $users_b_id . "'";
			echo "<script>
				openCase();
			</script>";
			if ( $conn->query( $sql_price ) === true ) {

			} else {

			}
		}
}
