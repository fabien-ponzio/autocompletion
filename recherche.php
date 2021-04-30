<?php 
// require_once();
// require_once();
?>
<header>
<h2>Nom de joueur:</h2>
    <form action="recherche.php" method="GET">
    <!-- INPUT 1 -->
    <input type="text" name="search" class="playerName" placeholder="Entrez le nom d'un joueur" id="Searchbox1">
    <!-- INPUT 2 -->
    <input type="submit" id="search" value="go">   
    </form>
</header>
<main>
<?php
// var_dump($_GET); 
if (isset($_GET['search'])) {
    $response = "";
    $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', ''); 
    $sql = $connexion->prepare("SELECT * FROM players WHERE nom LIKE '$_GET[search]%'"); 
    $sql->execute();
    $getAll = $sql->fetchAll();

    for ($i=0; isset($getAll[$i]) ; $i++) { 
        $response .="<li><a href='element.php?id=".$getAll[$i]['id']."'>".$getAll[$i]['nom']."</a>  joue à l'équipe ".$getAll[$i]['equipe']." et mesure ".$getAll[$i]['taille']."cm</li>";
    }
   echo $response;
}
// var_dump($getAll); 
?>
</main>
<script src='script.js' type="text/javascript">


