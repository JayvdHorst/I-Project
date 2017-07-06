
<?php  if(!isset($_SESSION['steamid'])) {
	echo "<h1 style=\"font-family: Barker;text-align: center\"> PLEASE LOGIN</h1>";
} else {
	require ('models/case_information.php');
	$casename = $case_bayonet;
    echo "<h1 style='text-align: center'>$casename</h1>";
    ?>
<!--        <p style="text-align: center"><input type="button" id="Btn" name="Button" value="OPEN"> </p>-->

    <p style="text-align: center;"><button type="button" id="Btn"> OPEN </button></p>
    <script type="text/javascript">
        $(document).ready(function(){
            $("button").click(function(){
                $.ajax({
                    type: 'POST',
                    url: 'models/calculator.php',
                    data: {casename: '<?php echo $casename ?>'},
                    success: function(data) {
                        $("#you_won").html(data);

                    }
                });
            });
        });
    </script>

	<div id="spinner" class="img-responsive center-block">
	<div id="spinner-inside">
	</div>
	<div id="selected">

	</div>
</div>
<div id="selected_prize"></div>
<div id="same_selected_counter"></div>
<div id="you_won"></div>


<style>
 #wrapper.active {
 padding-left: 0!important;
	}
</style>

<!-- Script for case includen -->
<script src="main/js/case/bayonet.js"></script>

<!-- Main Javascript For Cases Includen -->
<script src="main/js/case.js"></script>

<?php
}
?>
