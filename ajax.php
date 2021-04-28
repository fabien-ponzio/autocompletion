<?php
// require_once
    if (isset($_POST['q'])) {
        $q = $_POST['q'];
        $response = "<ul><li>Aucune correspondance</li></ul>"; 
        
        $connexion = new \PDO('mysql:host=localhost; dbname=autocompletion; charset=utf8', 'root', ''); 
        $sql = $connexion->query("SELECT * FROM players WHERE nom LIKE '$q%'"); 
        // var_dump($q);    

        if ($sql->rowCount() >0) {
            $response = "<ul>"; 

            while ($data = $sql->fetch(PDO::FETCH_ASSOC)){
                // var_dump($data);
                $response .="<li><a href='element.php/?id=".$data['id']."'>".$data['nom']."</li>";      
            }
            $response .= "</ul>"; 
        }
        echo $response;
    } 
?>
