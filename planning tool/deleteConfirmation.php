<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Gamedag</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
<body>

	<?php
	require("datalayer.php");

	$game = getPlanning($_GET["id"]);
	?>

		


	<div class="container">
		<form action = "delete.php?id=<?php echo $game['id']; ?>/" method="post">
			<h4>do u want to delete <?php echo $game['gameName'] ?>?</h4>
			<button class="btn btn-primary" >Yes, delete this game</button>
		</form>

		<div class="planning">
  			<a class="planningLink" href="planning.php">No, don't delete this game</a>
		</div>

	</div>