<?php

include_once "model/DownloadsModel.php";

class DownloadsDAO extends DownloadsModel
{
    private $insert = "",
            $update = "UPDATE Downloads SET downloads_cont = (downloads_cont+1);",
            $select = "SELECT downloads_cont FROM Downloads;";
    
    #atualiza quantidade de downloads realizados.
    public function downIncrement()
    {
        if($this->runQuery($this->update))
        {
        } else 
        {
            echo "Não foi possível realizar o update";
        }
    }
    
    #retorna quantidade de dowwnloads
    public function qtDowns()
    {
         if($row = $this->runSelect($this->select))
         {
             return $row[0]['downloads_cont'];
         } else 
         {
         }
    }
}
