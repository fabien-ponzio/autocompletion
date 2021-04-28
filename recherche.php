<?php
var_dump($_GET); 

if (isset($_GET['search'])) {
    $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', ''); 
    $sql = $connexion->prepare("SELECT * FROM players WHERE nom LIKE '$_GET[search]%'"); 
    $sql->execute();
    $getAll = $sql->fetchAll();
    var_dump($sql); 
}
var_dump($getAll); 
?>