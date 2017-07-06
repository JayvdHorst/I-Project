<?php

// DATABASE
require('includes/config.php');
require('includes/bootstrap.php');

// HTML HEAD INCLUDEN
include ('views/head.php');
include ('views/header.php');
include ('views/online.php');

// BASIC ACTION
$action = isset($_GET['action'])?$_GET['action']:'twfcases';

// SWITCH FOR BASIC ACTION / NAV
switch ($action) {
	case 'twfcases':

		include ('views/online_addon.php');
		include ('views/main.php');

		break;
	case 'bayonet';

		include ('views/online_addon.php');
		include('views/case_bayonet.php');

		break;
	case 'inventory';

		include ('views/inventory.php');

		break;
	case 'daily';

		include ('views/online_addon.php');
		include ('views/daily.php');

		break;
	case 'login';

		include ('views/please_login.php');

		break;
}


// HTML FOOTER INCLUDEN
include ('views/footer.php');
