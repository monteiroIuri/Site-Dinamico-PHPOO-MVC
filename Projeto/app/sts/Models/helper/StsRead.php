<?php

namespace App\sts\Models\helper;

if (!defined('48b5t9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

use PDO;

/**
 * Classe genérica para buscar registros no Banco de Dados
 *
 * @author Celke
 */
class StsRead extends StsConn
{
    /** @var string $select Recebe a QUERY */
    private  $select;
    /** @var array $values Recebe os valores que devem ser atribuídos nos links
    da QUERY com bindValue */
    private $values = [];
    /** @var array $result Recebe os registros do Banco de Dados e retorna
    para a Model */
    private $result = [];
    /** @var object $query Recebe a QUERY preparada */
    private $query;
    /** @var object $conn Recebe a QUERY preparada */
    private $conn;
    
    /**
     * 
     * @return array Retorna o array de dados
     */
    function getResult(): array {
        return $this->result;
    }
    
    /**
     * Recebe os valores para montar a QUERY.
     * Converte a parseString de string para array.
     * @param string $tabela Recebe o nome da tabela do BD
     * @param string $termos Recebe os links da QUERY, ex:
     sts_situation_id =:sts_situation_id
     * @param string $parseString Recebe os valores que devem ser substituídos
     nos links, ex: sts_situation_id=1
     * 
     * @return void
     */
    public function exeRead($tabela, $termos = null, $parseString = null) {
        if (!empty($parseString)) {
            parse_str($parseString, $this->values);
        }
        $this->select = "SELECT * FROM {$tabela} {$termos}";
        $this->exeIntruction();
    }
    
    /**
     * Recebe os valores para montar a QUERY.
     * Converte a parseString de string para array.
     * @param string $query Recebe a QUERY da Models
     * @param string $parseString Recebe os valores que devem ser substituídos
     nos links, ex: sts_situation_id=1
     */
    public function fullRead($query, $parseString = null) {
        $this->select = $query;
        if (!empty($parseString)) {
            parse_str($parseString, $this->values);
        }
        $this->exeIntruction();
    }

    /**
     * Executa a QUERY
     * Quando executa a QUERY com sucesso retorna o array de dados,
     senão retorna null.
     * 
     * @return void
     */
    private function exeIntruction() {
        $this->connection();
        try {
            $this->exeParameter();
            $this->query->execute();
            $this->result = $this->query->fetchAll();
        } catch (Exception $ex) {
            $this->result = null;
        }
    }
    
    /**
     * Obtem a conexão com o BD da classe pai "Conn".
     * Prepara uma instrução para execução e retorna um objeto de instrução.
     * 
     * @return void
     */
    private function connection() {
        $this->conn = $this->connect();
        $this->query = $this->conn->prepare($this->select);
        $this->query->setFetchMode(PDO::FETCH_ASSOC);
    }
    
    /**
     * Substitui os links da QUERY pelos valores utilizando o bindValue
     * 
     * @return void
     */
    private function exeParameter() {
        if($this->values){
            foreach ($this->values as $link => $value) {
                if($link == 'limit' || $link == 'offset'){
                    $value = (int) $value;
                }
                $this->query->bindValue(":{$link}", $value, (is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }

}