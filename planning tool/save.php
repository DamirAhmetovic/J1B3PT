   <?php
        include("datalayer.php");
        addGames($_POST);
        header("Location: planning.php");
    ?>