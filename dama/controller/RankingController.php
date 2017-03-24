<?php

include_once 'config/ControllerConfig.php';
include_once 'config/RouteConfig.php';
include_once 'dao/AccessObject/RankingDAO.php';

class RankingController extends ControllerConfig{

        #retorna o top dez dos jogadores
        public function topRanking(){

            $objRanking = new RankingDAO();
           $objRanking->selectRanking();

        }

        #insere valores ao ranking
        public function insertRanking(){

            $objRanking = new RankingDAO();
            $objRanking->insertReg($_GET['name'],$_GET['score'],$_GET['time'],$_GET['mov']);

        }


}