<?php

namespace App\sts\Controllers;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * CONTROLLER da página de Contato
 *
 * @author luiz.monteiro
 */
class Contato 
{
    /** @var array $data Recebe os dados que devem ser enviados para a VIEW */
    private $data;
    /** @var array $dataForm Recebe os dados do formulário */
    private $dataForm;
    
    /**
     * Instanciar a classe responsável em carregar a VIEW
     * 
     * @return void
     */
    public function index() {
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($this->dataForm['CreatContMsg'])){
            unset($this->dataForm['CreatContMsg']);
            $createContactMsg = new \App\sts\Models\StsContato;
            //var_dump($this->dataForm);
            if($createContactMsg->create($this->dataForm)){
                
            } else {
                $this->data['form'] = $this->dataForm;
            }
        }
        
        $viewContact = new \App\sts\Models\StsContato();
        $this->data['address'] = $viewContact->view();
        
        $viewFooter = new \App\sts\Models\StsFooter();
        $this->data['footer']= $viewFooter->view();
        
        $carregarView = new \Core\ConfigView("sts/Views/contato/contato", $this->data);
        $carregarView->renderizar();
    }
}
