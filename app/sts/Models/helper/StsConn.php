<?php

namespace App\sts\Models\helper;

use PDO;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Conexão com o Banco de Dados
 *
 * @author luiz.monteiro
 */
abstract class StsConn {
    
    /** @var string $host Recebe o Host da CONSTANTE HOST */
    private $host = HOST;
    /** @var string $user Recebe o usuário da CONSTANTE USER */
    private $user = USER;
    /** @var string $pass Recebe a senha da CONSTANTE PASS */
    private $pass = PASS;
    /** @var string $dbName Recebe a base de dados da CONSTANTE DBNAME */
    private $dbName = DBNAME;
    /** @var int $portRecebe a porta da CONSTANTE PORT */
    private $port = PORT;
    /** @var object $connect Recebe a conexão com o Banco de Dados*/
    private $connect;

    /**
     * Realiza a conexão com o Banco de Dados.
     * @return object Retorna a conexão com o Banco de Dados.
     */
    protected function connect() {
        try {
            $this->connect = new PDO("mysql:host={$this->host};port={$this->port};
            dbname=" . $this->dbName, $this->user, $this->pass);
            return $this->connect;
        } catch (Exception $e) {
            die('Erro: Por favor tente novamente. Caso o problema perssista, entre
                em contato com o admnistrador ' . EMAILADM . '<br>');
        }
    }

}
