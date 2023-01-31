<?php include_once("sidebar_menu.php"); ?>

<section class="section">
        <div class="content"><?php include_once("notification_page.php"); ?></div>
    </section>
<?php if ( $_GET["rel"]!="page") { echo "</div>"; } ?>
<?php include_once("footer.php"); ?>