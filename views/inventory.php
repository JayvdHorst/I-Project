<?php  if(!isset($_SESSION['steamid'])) {
	echo "<h1 style=\"font-family: Barker;text-align: center\"> PLEASE LOGIN</h1>";
} else {

	include ('helpers/steamauth/userInfo.php');
	?>
    <style>
        body {
            background: transparent;
            background-color: rgb(241, 241, 241);
        }
    </style>

    <div class="inventory">
        <div class="inventory-info">
            <?php
            echo "<img  src=" . $steamprofile['avatarfull'] .' class="loggedin-image-inventory img-responsive center-block" title="" alt="" />' .
                 "<p class='loggedin-name-inventory'>"  . $steamprofile['personaname'] . "</p>" .
                 "<a href='" . $steamprofile['profileurl'] . "'><p class='loggedin-profile-inventory'>steamprofile</p></a>" .
                 "<p class='loggedin-price-inventory'>€ "  . $db_balance . "</p>" .
                 "<p class='glyphicon glyphicon-link loggedin-url_ico-inventory'></p>" .
                 "<p class='loggedin-url-inventory'>Your Trade-URL</p>" .
                 "<a href='" . $sent_tradeOffer . "'><p class='loggedin-url_where-inventory'>Where to get Trade-URL</p></a>" .
                 "<input type='text' value='" . $trade_url . "' placeholder='Enter your Trade-URL!' class='loggedin-url_link-inventory'> ";
            ?>
        </div>
        <div class="inventory-main">
            <h2 class="inv-main-inv"><strong>YOUR INVENTORY</strong></h2>
            <div class="inv-main-items">
                    <div class="row">
                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <img src="main/imgs/400x4001.png" class="img-responsive">
                            <p class="inv-img-add inv-img-txt text-center"><strong>Awp</strong></p>
                            <p class="inv-img-sec inv-img-txt text-center"><strong>Dragon Lore</strong></p>
                            <img src="main/imgs/skins/rifles/awp/dragonlore.png" class="img-responsive inv-item">
                        </div>
                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <img src="main/imgs/400x4001.png" class="img-responsive">
                            <img src="main/imgs/skins/rifles/awp/dragonlore.png" class="img-responsive inv-item">
                        </div>
                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <img src="main/imgs/400x4001.png" class="img-responsive">
                            <img src="main/imgs/skins/rifles/awp/dragonlore.png" class="img-responsive inv-item">
                        </div>
                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <img src="main/imgs/400x4001.png" class="img-responsive">
                            <img src="main/imgs/skins/rifles/awp/dragonlore.png" class="img-responsive inv-item">
                        </div>
                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <img src="main/imgs/400x4001.png" class="img-responsive">
                            <img src="main/imgs/skins/rifles/awp/dragonlore.png" class="img-responsive inv-item">
                        </div>                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <img src="main/imgs/400x4001.png" class="img-responsive">
                            <img src="main/imgs/skins/rifles/awp/dragonlore.png" class="img-responsive inv-item">
                        </div>                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <img src="main/imgs/400x4001.png" class="img-responsive">
                            <img src="main/imgs/skins/rifles/awp/dragonlore.png" class="img-responsive inv-item">
                        </div>
                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <img src="main/imgs/400x4001.png" class="img-responsive">
                            <img src="main/imgs/skins/rifles/awp/dragonlore.png" class="img-responsive inv-item">
                        </div>


                        </div>
                    </div>
            </div>
        </div>



	<?php
}
