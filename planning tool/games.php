<?php
        foreach($games as $game){ 
        	?>
        	<div class="indexOpmaak">
        	<?php printf("<h3>%s</h3>", $game["name"]);?>	
            <a href="gameDescription.php?id=<?php echo $game['id']; ?>/"><img href="gameDescription.php?id=<?php echo $game['id']; ?>/" src="img/<?php echo $game['image']; ?>" width="200" heigth="200"/></a>
        </div>

        <?php }; ?>