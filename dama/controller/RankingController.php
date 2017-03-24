<?php

include_once 'config/ControllerConfig.php';
include_once 'config/RouteConfig.php';
include_once 'dao/AccessObject/RankingDAO.php';
include_once 'libraries/Sanitize.php';

class RankingController extends ControllerConfig{

        #retorna o top dez dos jogadores
        public function topRanking(){

            $objRanking = new RankingDAO();
           $objRanking->selectRanking();

        }

        #insere valores ao ranking
        public function insertRanking(){

            $objRanking = new RankingDAO();
            $objRanking->insertReg(Sanitize::filter($_GET['name']),Sanitize::filter($_GET['score']),Sanitize::filter($_GET['time']),Sanitize::filter($_GET['mov']));

        }


}
