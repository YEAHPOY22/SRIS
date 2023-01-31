<?php include_once("sidebar_menu.php"); ?>
<div class="master_list-page page">
<?php include_once("dashboard.php"); ?>
</div>
<?php if ( $_GET["rel"] !="page") { echo "</div>"; } ?>
<?php include_once("footer.php"); ?>