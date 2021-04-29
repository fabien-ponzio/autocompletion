<?php
var_dump($_GET); 

if (isset($_GET['search'])) {
    $response = "";
    $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', ''); 
    $sql = $connexion->prepare("SELECT * FROM players WHERE nom LIKE '$_GET[search]%'"); 
    $sql->execute();
    $getAll = $sql->fetchAll();

    for ($i=0; isset($getAll[$i]) ; $i++) { 
        $response .="<li>".$getAll[$i]['nom']." joue à l'équipe ".$getAll[$i]['equipe']." et mesure ".$getAll[$i]['taille']."cm</li>";
    }
   echo $response;
}
// var_dump($getAll); 
?>
