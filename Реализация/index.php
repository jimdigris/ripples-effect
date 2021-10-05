<?php
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate( "D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    echo '<span style="display: none;">', date('H:i:s'), '</span>';
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php';?>

<main>

<div class="ripples"></div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';?>
