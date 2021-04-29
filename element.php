<!-- afficher toutes les infos en BDD de l'élement cliqué  -->
<?php 
if (isset($_GET)) {
    $response = "";
    $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', ''); 
    $query = $connexion->prepare("SELECT * FROM players WHERE id = '$_GET[id]'");
    $query->execute(); 
    
    $getPlayerInfo = $query->fetch(PDO::FETCH_ASSOC);

    $response .="".$getPlayerInfo['nom']." joue à l'équipe ".$getPlayerInfo['equipe']." et mesure ".$getPlayerInfo['taille']."cm.";

    echo $response;    
}
// var_dump($getPlayerInfo); 
?>