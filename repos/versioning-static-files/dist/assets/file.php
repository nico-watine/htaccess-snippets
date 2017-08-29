# ----------------------------------------------------
# |            Include above open DOCTYPE            |
# ----------------------------------------------------

<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>


# ------------------------------------------------------
# |            Model for linking a CSS file            |
# ------------------------------------------------------

<link href="<?php autoVer('/css/style.css'); ?>" rel="stylesheet">


# ----------------------------------------------------
# |            Model for linking a script            |
# ----------------------------------------------------
	
<script src="<?php autoVer('/js/script-min.js'); ?>"></script>

