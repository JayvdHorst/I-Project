<?php include('models/counter.php')  ?>
<div class="online-addon">

    <div class="col-xs-6 col-sm-3">
        <h3 class="text-center onl_l"><strong><?php print_r($sql_t_s['name']); ?></strong></h3>
        <h2 class="text-center onl"><strong>Top Opener</strong></h2>
    </div>
    <div class="col-xs-6 col-sm-3">
        <h2 class="text-center onl"><strong>Cases Opened</strong></h2>
    </div>
    <div class="col-xs-6 col-sm-3">
        <h3 class="text-center onl_l"><strong><?php printf("%d\n",$rowcount);?></strong></h3>
        <h2 class="text-center onl"><strong>Player Registers</strong></h2>
    </div>
    <div class="col-xs-6 col-sm-3">
        <h2 class="text-center onl"><strong>Online Players</strong></h2>
    </div>

</div>
