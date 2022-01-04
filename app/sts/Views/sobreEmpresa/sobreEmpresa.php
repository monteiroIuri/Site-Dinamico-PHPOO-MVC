<?php
if (!defined('48b5t9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>
<div class="jumbotron head-sobre">
    <div class="container">
        <h1 class="text-center">Sobre a Empresa</h1>
    </div>            
</div>

<div class="jumbotron sobre">
    <div class="container">
        <?php
        //Ler o array de registro sobre empresa retornado do banco de dados
        foreach ($this->dados['sts_sobres_empresas'] as $sobre_emp) {
            //A função extract é utilizado para extrair o array e imprimir através do nome da chave
            extract($sobre_emp);
            $imagem_about = URL . "app/sts/assets/images/about_company/" . $id . "/" . $image;
            
            ?>

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><?php echo $title; ?></h2>
                    <p class="lead"><?php echo $description; ?></p>
                </div>

                <div class="col-md-5 order-md-1">
                    <img src="<?php echo $imagem_about; ?>"
                         class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
                         width="500" height="500" alt="<?php echo $title; ?>">
                </div>
            </div>

            <hr class="featurette-divider">

            <?php
        }
        ?>
    </div>            
</div> 





