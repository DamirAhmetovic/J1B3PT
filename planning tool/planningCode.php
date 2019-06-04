<?php
        foreach($games as $game){ 
        	?>
        	<div class="indexOpmaak">
        	<?php printf("<h3>%s</h3>", $game["gameName"]);
        	 	  printf("<h3>%s</h3>", $game["explainer"]);
        	      printf("<h3>%s</h3>", $game["players"]);
        	      printf("<h3>%s</h3>", $game["Tijd"]);
			?>

				<div class="delete">
  					<a class="DeleteLink" href="deleteConfirmation.php?id=<?php echo $game['id']; ?>/">delete</a>
				</div>
        	      
        	    <a class="Update" href="update.php?id=<?php echo $game['id']; ?>/">update</a>

        	      

            
        </div>




        <?php }; ?>