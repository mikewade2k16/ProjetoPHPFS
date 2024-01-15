<?php

namespace Source\App;

use Source\Core\Controller;

class Web extends Controller{

    public function __construct() {
        parent::__construct(__DIR__ . "/../../themes/". CONF_VIEW_THEME. "/");
    }

    public function home(): void{
        echo $this->view->render("home", [
            "title" => "CoffeControl - Gerenciando suias contas"
        ]);
    }
    public function error(array $data): void{
       echo $this->view->render("error", [
        "title" => "{$data['errcode']} | Oops"
       ]);
    }
}