<?php
 	function DBconnect(){
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$database = "GameDag";
	
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    return $conn;
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }	
	};




function getGame($id){
	$conn = DBconnect();
    $query = $conn->prepare("SELECT * FROM games WHERE id=:id");
    $query->bindParam(":id", $id);
    $query->execute();
    $result = $query->fetch();
    return $result;
}

function getGames(){
    $conn = DBconnect();
    $query = $conn->prepare("SELECT * FROM games");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function addGames($data){
	$conn = DBconnect();
	$query = $conn->prepare("INSERT INTO planning (gamename, Tijd, explainer, players) VALUES (:gameName, :Tijd, :explainer, :players)");
    $query->bindParam(":gameName", $data['gamename']);
    $query->bindParam(":Tijd", $data['Tijd']);
    $query->bindParam(":explainer", $data['explainer']);
    $query->bindParam(":players", $data['players']);
    $query->execute();

}

function planning(){
	$conn = DBconnect();
	$query = $conn->prepare("SELECT * FROM planning");	
	$query->execute();
	$result = $query->fetchAll();
	return $result;
}

function deletePlanning($game){
	$conn = DBconnect();
    $query = $conn->prepare('DELETE FROM planning WHERE id=:game');
    $query->bindParam(":game", $game);
    $query->execute();	
}

function update($data){
    $conn = DBconnect();
    $query = $conn->prepare("UPDATE planning SET gameName = :gamename, Tijd = :tijd, explainer = :explainer, players = :players WHERE id=:id");
    $query->bindParam(":id", $data['id']);
    $query->bindParam(":gamename", $data['gamename']);
    $query->bindParam(":tijd", $data['Tijd']);
    $query->bindParam(":explainer", $data['explainer']);
    $query->bindParam(":players", $data['players']);
    $query->execute();
}

function getPlanning($id){
    $conn = DBconnect();
    $query = $conn->prepare("SELECT * FROM planning WHERE id=:id");
    $query->bindParam(":id", $id);
    $query->execute();
    $result = $query->fetch();
    return $result;
}

?>

