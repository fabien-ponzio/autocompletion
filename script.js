$(document).ready(function() {
    $("#Searchbox1").keyup(function(){
        var query= $("#Searchbox1").val();
        if (query.length == 0) {
            $("#response").html("Veuillez entrer une lettre en majuscule");
            return "Oeoeoeoe";
        }
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

    $(document).on('click', 'li', function () {
        var player = $(this).text(); 
        $("#Searchbox1").val(player);
        $("#response").html("");
    })
}); 
