//retorna os dados para gerar a tabela de ranking dinamicamente.
function rankingGeneretor(limit,pont,mov,data){

    var vetRanking = returnJson("?controller=Ranking&action=topRanking&limit="+limit+"&pont="+pont+"&mov="+mov+"&data="+data);



    var html = "<table class='table table-condensed'>"+
                "<tr>"+
                "<th>Top <select id='select-top'><option value='10'>Ranking</option><option value='10'>10</option><option value='20'>20</option><option value='30'>30</option></select></th>"+
                "<th>Nome</th>"+
                "<th id='pont' style='cursor:pointer;'>Pontuação <div id='set-pont' class='glyphicon glyphicon-chevron-down'></div></th>"+
                "<th id='mov'  style='cursor:pointer;'>Qtd Movimentos <div id='set-mov' class='glyphicon glyphicon-chevron-up'></div></th>"+
                "<th id='data' style='cursor:pointer;'>Data do record <div id='set-data' class='glyphicon glyphicon-chevron-up'></div></th>"+
                "</tr>";



    for(var i = 0; i < vetRanking.length; i++){

            html += "<tr>"+
                    "<td>"+(i+1)+"</td>"+
                    "<td>"+vetRanking[i]['Ranking_name']+"</td>"+
                    "<td>"+vetRanking[i]['Ranking_score']+"</td>"+
                    "<td>"+vetRanking[i]['Ranking_mov']+"</td>"+
                    "<td>"+vetRanking[i]['Ranking_data_reg']+"</td>"+
                    "</tr>";

    }

            html += "</table>";



            return html;


}
























