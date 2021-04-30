<!-- afficher toutes les infos en BDD de l'élement cliqué  -->
<?php 
// $path_ajax = 'ajax.php'; 
// $path_recherche  = 'recherche.php'; 
// $path_element = '';
// $path_index = 'index.php';  

// require_once($path_ajax);
// require_once($path_recherche); 
// require_once($path_index);
session_start();
    $_SESSION['page'] = "element";

if (isset($_GET)) {
    $response = "";
    $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', ''); 
    $query = $connexion->prepare("SELECT * FROM players WHERE id = '$_GET[id]'");
    $query->execute(); 
    var_dump($query); 
    var_dump($_GET); 
    
    $getPlayerInfo = $query->fetch(PDO::FETCH_ASSOC);

    $response .="".$getPlayerInfo['nom']." joue à l'équipe ".$getPlayerInfo['equipe']." et mesure ".$getPlayerInfo['taille']."cm.";

    echo $response;    
}
// var_dump($getPlayerInfo); 
?>