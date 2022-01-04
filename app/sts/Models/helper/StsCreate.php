<?php

namespace App\sts\Models\helper;

use PDO;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Classe gernérica para cadastrar registro no banco de dados
 *
 * @author Iuri Monteiro
 */
class StsCreate extends StsConn
{
    /** @var string $table Recebe o nome da tabela */
    private $table;
    /** @var array $data Recebe os dados que devem ser inseridos no BD */
    private $data;
    /** @var string $result Retorna o status do cadastro */
    private $result;
    /** @var object $insert Recebe a QUERY preparada */
    private $insert;
    /** @var string $query Recebe a QUERY */
    private $query;
    /** @var object $conn Recebe a conexão com o BD */
    private $conn;
    
    /**
     * Retornar o status do cadastro, retorna o último id quando cadatrar com sucesso e null quando houver erro
     * @return string Retorna o último id inserido
     */
    public function getResult() {
        return $this->result;
    }
    
    /**
     * Cadatrar no banco de dados
     * 
     * @param string $table Recebe o nome da tabela
     * @param array $data Recebe os dados do formulário
     * @return void
     */
    public function exeCreate($table, $data) {
        $this->table = $table;
        $this->data = $data;
        $this->exeReplaceValues();
        $this->exeInstruction();
    }
    
    /**
     * Cria a QUERY e os links da QUERY
     * 
     * @return void
     */
    private function exeReplaceValues() {
        $coluns = implode(', ', array_keys($this->data));
        $values = ':'. implode(', :', array_keys($this->data));
        $this->query = "INSERT INTO {$this->table} ({$coluns}) VALUES ({$values})";
    }
    
    /**
     * Executa a QUERY. 
     * Quando executa a query com sucesso retorna o último id inserido, senão retorna null.
     * 
     * @return void
     */
    private function exeInstruction() {
        $this->connection();
        try {
            $this->insert->execute($this->data);
            $this->result = $this->conn->lastInsertId();
        } catch (Exception $ex) {
            $this->result = null;
        }
    }
    
    /**
     * Obtem a conexão com o banco de dados da classe pai "Conn".
     * Prepara uma instrução para execução e retorna um objeto de instrução.
     * 
     * @return void
     */
    private function connection() {
        $this->conn = $this->connect();
        $this->insert = $this->conn->prepare($this->query);
    }
}
