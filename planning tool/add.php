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
?>

<div class="formContainer">
    <form method="post" action= "save.php">
        <p>Game</p><select type="text" name="gamename" required> *<?php
            $games = getGames();
            foreach($games as $game){ ?>
            <option value="<?php echo $game['name'];?>"> <?php
                    printf("<h3>%s</h3>", $game["name"]);
                }; ?>
            </option>
          </select>
        <p>Time </p><input type="time" name="Tijd" required> *
        <p>Explainer </p><input type="text" name="explainer" required> *
        <p>Players </p><input type="text" name="players" required> * <br><br>
        <input type="submit" name="Versturen">
    </form>
</div>
</div>
</body>