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
    include("datalayer.php"); 
    require("header.php");
        $event = getPlanning($_GET["id"]);
?>

<div class="formContainer">

    <form method="post" action= "saveUpdate.php">
        <input type="hidden" name="id" value="<?=$event["id"]?>">

        <p>Game</p><select type="text" name="gamename" value="<?php echo $event['gamename'] ?>" required> *<?php
            $games = getGames();

            foreach($games as $game){ ?>
            <option <?php echo $event['gameName'] == $game['name'] ? 'selected' : ''  ?> value="<?php echo $game['name'];?>"> <?php
                    printf("<h3>%s</h3>", $game["name"]);
                }; ?>
            </option>
          </select>

        <p>Time </p><input type="time" name="Tijd" value="<?php echo $event["Tijd"]?>" required> *
        <p>Explainer </p><input type="text" name="explainer" value="<?= $event['explainer'] ?>" required> *
        <p>Players </p><input type="text" name="players" value="<?php echo $event['players']?>" required> * <br><br>
        <input type="submit" name="Versturen">
    </form>
</div>
</div>