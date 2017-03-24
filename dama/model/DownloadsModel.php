<?php

include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class DownloadsModel extends ConnectionFactory{

    private $downloads_id,
            $downloads_cont,
            $downloads_lastdown;

    /**
     * @return mixed
     */
    public function getDownloadsId()
    {
        return $this->downloads_id;
    }

    /**
     * @param mixed $downloads_id
     */
    public function setDownloadsId($downloads_id)
    {
        $this->downloads_id = $downloads_id;
    }

    /**
     * @return mixed
     */
    public function getDownloadsCont()
    {
        return $this->downloads_cont;
    }

    /**
     * @param mixed $downloads_cont
     */
    public function setDownloadsCont($downloads_cont)
    {
        $this->downloads_cont = $downloads_cont;
    }

    /**
     * @return mixed
     */
    public function getDownloadsLastdown()
    {
        return $this->downloads_lastdown;
    }

    /**
     * @param mixed $downloads_lastdown
     */
    public function setDownloadsLastdown($downloads_lastdown)
    {
        $this->downloads_lastdown = $downloads_lastdown;
    }




}