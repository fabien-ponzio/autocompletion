<!-- afficher toutes les infos en BDD de l'élement cliqué  -->
<?php 
if (isset($_GET)) {
    $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', ''); 
    $query = $connexion->prepare("SELECT * FROM players WHERE id = '$_GET[id]'");
    $query->execute(); 
    $getPlayerInfo = $query->fetch(PDO::FETCH_ASSOC);
    // return $getPlayerInfo;
}
var_dump($getPlayerInfo); 
?>