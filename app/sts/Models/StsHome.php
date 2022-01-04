<?php

namespace App\sts\Models;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Model responsável em buscar os dados da página home
 *
 * @author luiz.monteiro
 */
class StsHome 
{
    /** @var array $data Recebe o registro do Banco de Dados */
    private $data;
    /** @var array $dataTop Recebe o registro do Banco de Dados 
    relacionado ao topo. */
    private $dataTop;
    /** @var array $dataTop Recebe o registro do Banco de Dados 
    relacionado aos Serviços. */
    private $dataServ;
    /** @var array $dataAction Recebe o registro do Banco de Dados 
    relacionado a Ação. */
    private $dataAction;
    /** @var array $dataDet Recebe o registro do Banco de Dados 
    relacionado os Detalhes do serviço. */
    private $dataDet;
    /**
     * Instanciar a classe genérica no helper responsável em buscar os
     registros no Banco de Dados.
     * Possui a QUERY responsável por buscar os registros no BD.
     * @return array Retorna o registro do banco de dados com informações
     para página Home.
     */
    public function index() {
        $this->viewTop();
        $this->viewServ();
        $this->viewAction();
        $this->viewDet();
        return $this->data;
    }
    
    private function viewTop() {
        $viewTop = new \App\sts\Models\helper\StsRead();
        $viewTop->fullRead("SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image
                FROM sts_homes_tops
                LIMIT :limit", "limit=1");
        $this->dataTop = $viewTop->getResult();
        $this->data['top'] = $this->dataTop[0]; 
    }
    
    private function viewServ() {
        $viewServ = new \App\sts\Models\helper\StsRead();
        $viewServ->fullRead("SELECT id, title_serv, description_serv, icone_one_serv, title_one_serv, description_one_serv,
            icone_two_serv, title_two_serv, description_two_serv, icone_trhee_serv, title_trhee_serv, description_trhee_serv
            FROM sts_homes_servs
            LIMIT :limit", "limit=1");
        $this->dataServ = $viewServ->getResult();
        $this->data['serv'] = $this->dataServ[0]; 
    }
    
    private function viewAction() {
        $viewAction = new \App\sts\Models\helper\StsRead();
        $viewAction->fullRead("SELECT id, title_action, subtitle_action, 
            description_action, link_btn_action, txt_btn_action, image
            FROM sts_homes_actions
            LIMIT :limit", "limit=1");
        $this->dataAction = $viewAction->getResult();
        //var_dump($this->dataTop);
        $this->data['action'] = $this->dataAction[0]; 
    }
    
    private function viewDet() {
        $viewDet = new \App\sts\Models\helper\StsRead();
        $viewDet->fullRead("SELECT id, title_det, subtitle_det, description_det, image
                FROM sts_homes_dets
                LIMIT :limit", "limit=1");
        $this->dataDet = $viewDet->getResult();
        $this->data['det'] = $this->dataDet[0]; 
    }
}
