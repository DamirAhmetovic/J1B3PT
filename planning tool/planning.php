<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Gamedag</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
<body>
	<div class="container">


	

<?php
    require("header.php");

  	require("dataLayer.php");
   $games = planning();

   include("planningCode.php")
?>
</div>
</body>