<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('ajax.php') ?>
    <title>Auto-complétion</title>
    <!-- INSERER FEUILLE DE STYLE ICI -->
    <!-- INSERER FEUILLE DE STYLE ICI -->

</head>
<body>
    <h1>"Auto-Complezione" (à lire en italien)</h1>

    <h2>Nom de joueur:</h2>
    <input type="text" class="playerName" placeholder="Entrez le nom d'un joueur" id="Searchbox1">
    <div id="response"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function name(params) {
        $("#Searchbox1").keyup(function(){
            var query= $("#Searchbox1").val();
            console.log(query); 
        
            $.ajax(
                {
                    url:'ajax.php',
                    method:'POST',
                    data:{
                        search:1,
                        q:query
                    }, 
                    success: function(data){
                        $("#response").html(data); 
                    }, 
                    dataType:'text'
                }
            )
        });
    });
    </script>
</body>
</html>