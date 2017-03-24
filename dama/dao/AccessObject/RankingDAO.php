<?php

require_once "model/RankingModel.php";
require_once "libraries/DateTimeFunctions.php";

class RankingDAO extends RankingModel {

    private $insert = "INSERT INTO Ranking (Ranking_name, Ranking_score, Ranking_game_time, Ranking_mov ) VALUES ('%s','%s','%s','%s');",
            $select = "SELECT * FROM Ranking ORDER BY Ranking_score DESC, Ranking_mov ASC, Ranking_game_time ASC;";



    #retorna todos os registros da tabela ranking
    public function selectRanking(){

	    $objDate = new DateTimeFunctions();

	    $row = $this->runSelect($this->select);

	    for($i = 0; $i < count($row); $i++){
		
		#converte horário para pt-br
		$row[$i]['Ranking_data_reg'] = $objDate->dateTimeBr($row[$i]['Ranking_data_reg']);
	
	    }

            echo json_encode($row);

    }


    #insere registro na base de dados
    public function insertReg($name,$score,$time,$qtdMov){

        $this->setRankingName($name);
        $this->setRankingScore($score);
        $this->setRankingGameTime($time);
        $this->setRankingMov($qtdMov);

        $this->select = sprintf($this->insert, $this->getRankingName(), $this->getRankingScore(), $this->getRankingGameTime(), $this->getRankingMov());


        try {

            $this->runQuery($this->select);

        } catch (Exception $e) {

                var_dump($e->getMessage());

        }


    }

}
