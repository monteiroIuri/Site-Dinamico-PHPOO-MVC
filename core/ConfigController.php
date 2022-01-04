<?php

namespace Core;

if(!defined('48b5t9')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}
/**
 * Receber a URL e manipular.
 * Carregar a CONTROLLER
 * 
 * @author luiz.monteiro
 */
class ConfigController extends Config {

    /** @var string $url Recebe a URL do .htaccess */
    private $url;
    /** @var array $urlConjunto Recebe a URL convertida para array */
    private $urlConjunto;
    /** @var string $urlController Recebe da URL o nome da CONTROLLER */
    private $urlController;
    /** @var string $urlParametro Recebe da URL o parâmetro */
    private $urlParametro;
    /** @var string $urlSlugController Recebe a CONTROLLER convertida para
    o formato do nome da classe */
    private $urlSlugController;
    /** @var array $format Recebe a URL convertida para array */
    private $format;
    /** @var array $classe Recebe a classe */
    private $classe;

    /**
     * Receber a URL do .htaccess.
     * Validar a URL.
     */
    public function __construct() {
        $this->config();
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->limparUrl();
            $this->urlConjunto = explode("/", $this->url);
            if (isset($this->urlConjunto[0])) {
                $this->urlController = $this->slugController($this->urlConjunto[0]);
            } else {
                $this->urlController = $this->slugController(CONTROLLER);
            }

            if (isset($this->urlConjunto[1])) {
                $this->urlParametro = $this->urlConjunto[1];
            } else {
                $this->urlParametro = "";
            }
        } else {
            $this->urlController = $this->slugController(CONTROLLER);
            $this->urlParametro = "";
        }
    }
    
    /**
     * Limpar a URL, eliminando as TAGS, os espaços em branco, retirar a barra
     no final da URL e retirar os caracteres especiais
     * 
     * @return void
     */
    private function limparUrl() {
        //Eliminar as tags  
        $this->url = strip_tags($this->url);
        //Eliminar espaços em branco
        $this->url = trim($this->url);
        //Eliminar a barra no final da URL
        $this->url = rtrim($this->url, "/");
        //Substituir buscas na URL
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîï
                ðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiii
                dnoooooouuuyybyRr--------------------------------';
        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), utf8_decode($this->format['b']));
    }
    
    /**
     * Converter o valor obtido da URL "sobre-empresa" para "SobreEmpresa".
     * Utilizado as funções para converter tudo para minúsculo, converter o 
     traço para espaço, converter a primera letra de cada palavra para maiúsculo
     e retirar os espaços em branco.
     * @param string $slugController Nome da classe
     * @return string Retorna a controller "sobre-empresa" convertido para o 
     nome da classe "SobreEmpresa"
     */
    private function slugController($slugController) {
        //Converter para minúsculo
        $this->urlSlugController = strtolower($slugController);
        //Converter o traço para espaço em branco
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        //Converter a primeira letra de cada palavra para maiúsculo
        $this->urlSlugController = ucwords($this->urlSlugController);
        //Converter o espaço em branco para nada
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        return $this->urlSlugController;
    }
    /** 
     * Carregar as Controllers.
     * Instanciar as classes da controller e carregar o método index.
     * 
     * @return void
     */
    public function carregar() {
        //Buscar de forma dinâmica
        $this->classe = "\\App\\sts\\Controllers\\" . $this->urlController;
        if(class_exists($this->classe)){
            $this->carregarClasse();
        } else {
            $this->urlController = $this->slugController(CONTROLLERERRO);
            $this->carregar();
        }  
    }
    
    private function carregarClasse() {
        $classeCarregar = new $this->classe();
        if(method_exists($classeCarregar, "index")){
            $classeCarregar->index();
        } else {
            die('Erro: Por favor tente novamente. Caso o problema perssista, entre
                em contato com o admnistrador ' . EMAILADM . '<br>');
        }
    }

}
