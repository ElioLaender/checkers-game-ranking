/**
 * Created by laender on 09/05/16.
 */
function returnJson(link){

    var retorno;

    $.ajax({
        url: link,
        type:   "get",
        dataType:"json",
        data:   "",
        async: false,

        success: function(data){
            retorno = data;
        }
    });

    return retorno;
}


function downCont(url){

    var increment = "";
     increment = returnJson(url);

    //alert(increment+url);

    $("#qtdDown").val(increment);


}
