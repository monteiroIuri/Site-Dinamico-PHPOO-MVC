<?php

namespace App\sts\Models;

if (!defined('48b5t9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Cadastrar nova mensagem no banco de dados
 *
 * @author luiz.monteiro
 */
class StsFooter {
    
    /** @var array $dataContact Recebe os dados que são retornados do BD */
    private $dataFooter;

    public function view() {
        $viewFooter = new \App\sts\Models\helper\StsRead();
        $viewFooter->fullRead("SELECT title_site, title_contact, phone, address,
            url_address, cnpj, url_cnpj, title_social_network, txt_one_social_network,
            link_one_social_network, txt_two_social_network, link_two_social_network,
            txt_three_social_network, link_three_social_network, txt_four_social_network,
            link_four_social_network
            FROM sts_footers
            LIMIT :limit", "limit=1");
        $this->dataFooter = $viewFooter->getResult();
        return $this->dataFooter[0];
    }

}
