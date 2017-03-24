<?php

include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class RankingModel extends ConnectionFactory{

    private $Ranking_id,
            $Ranking_name,
            $Ranking_score,
            $Ranking_data_reg,
            $Ranking_game_time,
            $Ranking_mov;

    /**
     * @return mixed
     */
    public function getRankingId()
    {
        return $this->Ranking_id;
    }

    /**
     * @param mixed $Ranking_id
     */
    public function setRankingId($Ranking_id)
    {
        $this->Ranking_id = $Ranking_id;
    }

    /**
     * @return mixed
     */
    public function getRankingName()
    {
        return $this->Ranking_name;
    }

    /**
     * @param mixed $Ranking_name
     */
    public function setRankingName($Ranking_name)
    {
        $this->Ranking_name = $Ranking_name;
    }

    /**
     * @return mixed
     */
    public function getRankingScore()
    {
        return $this->Ranking_score;
    }

    /**
     * @param mixed $Ranking_score
     */
    public function setRankingScore($Ranking_score)
    {
        $this->Ranking_score = $Ranking_score;
    }

    /**
     * @return mixed
     */
    public function getRankingDataReg()
    {
        return $this->Ranking_data_reg;
    }

    /**
     * @param mixed $Ranking_data_reg
     */
    public function setRankingDataReg($Ranking_data_reg)
    {
        $this->Ranking_data_reg = $Ranking_data_reg;
    }

    /**
     * @return mixed
     */
    public function getRankingGameTime()
    {
        return $this->Ranking_game_time;
    }

    /**
     * @param mixed $Ranking_game_time
     */
    public function setRankingGameTime($Ranking_game_time)
    {
        $this->Ranking_game_time = $Ranking_game_time;
    }

    /**
     * @return mixed
     */
    public function getRankingMov()
    {
        return $this->Ranking_mov;
    }

    /**
     * @param mixed $Ranking_mov
     */
    public function setRankingMov($Ranking_mov)
    {
        $this->Ranking_mov = $Ranking_mov;
    }







}