<?php

namespace App\sts\Controllers;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * CONTROLLER da página Home
 *
 * @author luiz.monteiro
 */
class Home 
{
    /** @var array $dados Recebe os dados que devem ser enviados para a VIEW */
    private $dados;
    
    /**
     * Instanciar a classe responsável em carregar a VIEW
     * 
     * @return void
     */
    public function index() {
        
        $home = new \App\sts\Models\StsHome();
        $this->dados['sts_homes'] = $home->index();
        
        $viewFooter = new \App\sts\Models\StsFooter();
        $this->dados['footer']= $viewFooter->view();
        
        $carregarView = new \Core\ConfigView("sts/Views/home/home", $this->dados);
        $carregarView->renderizar();
    }
}
