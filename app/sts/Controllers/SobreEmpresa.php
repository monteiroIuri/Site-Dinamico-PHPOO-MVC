<?php

namespace App\sts\Controllers;

if (!defined('48b5t9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * CONTROLLER da página SobreEmpresa
 *
 * @author luiz.monteiro
 */
class SobreEmpresa 
{
    /** @var array $dados Recebe os dados que devem ser enviados para a VIEW */
    private $dados;
    
    /**
     * Instanciar a MODEL e receber o retorno
     * 
     * Instanciar a classe responsável em carregar a VIEW e enviar os dados para
     a VIEW.
     * 
     * @return void
     */
    public function index() {
        $list = new \App\sts\Models\StsSobreEmpresa();
        $this->dados['sts_sobres_empresas'] = $list->index();
        
        $viewFooter = new \App\sts\Models\StsFooter();
        $this->dados['footer']= $viewFooter->view();
        
        $carregarView = new \Core\ConfigView("sts/Views/sobreEmpresa/sobreEmpresa", $this->dados);
        $carregarView->renderizar();
    }

}
