<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    session_start();
    $_SESSION['page'] = "accueil"
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- REQUIRE -->
   
    <title>Auto-complétion</title>
    <!-- INSERER FEUILLE DE STYLE ICI -->
    <link rel="stylesheet" href="index.css">
    <!-- INSERER FEUILLE DE STYLE ICI -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
<header>

</header>
    <h1>"Auto-Complezione" (à lire en italien)</h1>

    <h2>Nom de joueur:</h2>
    <form action="recherche.php" method="GET">
    <!-- INPUT 1 -->
    <input type="text" name="search" class="playerName" placeholder="Entrez le nom d'un joueur" id="Searchbox1">
    <!-- INPUT 2 -->
    <input type="submit" id="search" value="go">   
    </form>

    <div id="response"></div>
    <script src='script.js' type="text/javascript">
    

    </script>
</body>
</html>