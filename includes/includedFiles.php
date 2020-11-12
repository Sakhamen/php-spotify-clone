<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	include("../config/config.php");
	include("classes/Artist.php");
	include("classes/Album.php");
	include("classes/Song.php");
}
else {
	include("../templates/header.php");
	include("../templates/footer.php");

	$url = $_SERVER['REQUEST_URI'];
	echo "<script>openPage('$url')</script>";
	exit();
}

?>
