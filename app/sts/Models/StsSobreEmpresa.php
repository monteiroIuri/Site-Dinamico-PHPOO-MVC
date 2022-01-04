<?php

namespace App\sts\Models;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Model responsável em buscar os dados da página Sobre Empresa
 *
 * @author luiz.monteiro
 */
class StsSobreEmpresa {
    /**
     * Instanciar a classe genérica no helper responsável em buscar os
     registros no Banco de Dados.
     * Possui a QUERY responsável por buscar os registros no BD.
     * @return array Retorna o registro do banco de dados com informações
     para página Sobre Empresa.
     */
    public function index() {
        $listSobreEmpresa = new \App\sts\Models\helper\StsRead();
        $listSobreEmpresa->fullRead("SELECT id, title, description, image
                FROM sts_about_companies
                WHERE sts_situation_id =:sts_situation_id 
                LIMIT :limit", "sts_situation_id=1&limit=10");
        return $listSobreEmpresa->getResult();
    }
}
