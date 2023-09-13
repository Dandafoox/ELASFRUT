

$(document) .ready(function(){
        $(document).on('click','.view_data', function(){
            var user_id = $(this).attr("id");
           // alert(user_id);
            //verificando se ha alor na variavel "user_id".
           if(user_id !== ''){
               var dados = {
                 user_id: user_id
               };
               $.post('visualizardadosforn.php', dados, function(retorna){
                alert(retorna);
               });
            } 

        });
    });
