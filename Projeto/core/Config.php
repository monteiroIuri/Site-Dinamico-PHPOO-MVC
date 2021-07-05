<?php

namespace Core;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}
/**
 * Configurações básicas do site.
 *
 * @author luiz.monteiro
 */
abstract class Config {
    
    /**
     * Possui as CONSTANTES com as configurações.
     * Configurações de endereço do projeto.
     * Página principal do projeto.
     * Credenciais de acesso ao Banco de Dados.
     * E-mail do Administrador.
     * 
     * @return void
     */
    protected function config() {
        //Endereços do projeto
        define('URL', 'http://localhost/celke/');
        define('URLADM', 'http://localhost/celke/adm');
        //Páginas principais
        define('CONTROLLER', 'Home');
        define('METODO', 'index');
        define('CONTROLLERERRO', 'Erro');
        //Credenciais de acesso ao Banco de Dados
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DBNAME', 'celke');
        define('PORT', 3306);
        //Email do Administrador
        define('EMAILADM', 'iurigms@gmail.com');
    }

}
