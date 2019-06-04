<?php
	require("datalayer.php");
	deletePlanning($_GET["id"]);
	header("Location: planning.php");

?>