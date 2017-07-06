<div id="wrapper" class="active">

	<!-- Sidebar -->
	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul id="sidebar_menu" class="sidebar-nav">
			<li class="sidebar-brand">
				<a href="?action=twfcases">
					<img src="main/imgs/150.png" class="twf">
                    <span id="menu-toggle">
						<span id="main_icon" class="glyphicon glyphicon-menu-left flip-arrow"></span>
                    </span>
					<a href="?action=twfcases" class="mini-icon-a"><span class="glyphicon glyphicon-home nav-icon mini-icon"></span></a>
				</a>
			</li>
		</ul>
		<ul class="sidebar-nav" id="sidebar">
			<li><?php require ('models/steam_login.php'); ?></li>
			<li><a href="?action=inventory">Inventory<span class="glyphicon glyphicon glyphicon-folder-close nav-icon"></a></li>
			<li><a href="?action=daily">Daily Reward<span class="glyphicon glyphicon-star nav-icon"></a></li>
		</ul>
	</div>
