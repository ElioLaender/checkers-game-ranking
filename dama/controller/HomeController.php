<?php

include_once 'config/ControllerConfig.php';
include_once 'config/RouteConfig.php';
include_once 'libraries/DownloadFunctions.php';
include_once 'dao/AccessObject/ContatoDAO.php';
include_once 'dao/AccessObject/DownloadsDAO.php';

class HomeController extends ControllerConfig {


	private $route;

	public function index(){

        $objDowns = new DownloadsDAO();

	$this->route = RouteConfig::rotas();
        $this->view->set('URL_INI', $this->route['URL_INI']);
        $this->view->set('qtDowns',$objDowns->qtDowns());
        $this->view->render($this->route['HOME_PAGE_DIR']);

	}


    #solicita persistência da mensagem no banco de dados
    public function persistMenssager(){

        $objContact = new ContatoDAO();
        $objContact->persistContact($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']);
	header("location: http://dama.semprenegocio.com.br/");

    }

    #chama o download de arquivos
    public function gameDownload(){

        $objDown = new DownloadFunctions();
        $objContDown = new DownloadsDAO();
        $objContDown->downIncrement();
        $objDown->directDownload();




    }

}
