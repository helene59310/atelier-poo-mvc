<?php
require_once 'Services/Render/Render.php';
require_once('Model/MainManager/MainManager.php');

class MainController extends Render{

    private $mainManager;

    public function __construct() {
        parent::__construct(Render::class);
        $this->mainManager = new MainManager;
    }
    public function accueil()
    {
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "View/Accueil/accueil.view.php",
            "template" => "View/layouts/base.php"
        ];
        $this->render($data_page);
    }

    public function page1()
    {
        $datas = $this->mainManager->getDataX();
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil", 
            "datas" => $datas,
            "view" => "View/Page1/page1.view.php",
            "template" => "View/layouts/base.php"
        ];
        $this->render($data_page);
    }


    public function pageErreur($msg)
    {
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "msg" => $msg,
            "view" => "View/Error/404.error.view.php",
            "template" => "View/layouts/base.php"
        ];
        $this->render($data_page);
    }
}
