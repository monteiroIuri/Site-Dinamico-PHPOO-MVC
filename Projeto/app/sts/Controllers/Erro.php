<?php

namespace App\sts\Controllers;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * CONTROLLER da página de Erro
 *
 * @author luiz.monteiro
 */
class Erro 
{
    /** @var array $dados Recebe os dados que devem ser enviados para a VIEW */
    private $dados;

    /**
     * Instanciar a classe responsável em carregar a VIEW
     * 
     * @return void
     */
    public function index() {
        $this->dados = [];
        $carregarView = new \Core\ConfigView("sts/Views/erro/erro", $this->dados);
        $carregarView->renderizar();
    }
}
