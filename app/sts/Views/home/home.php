<?php
if (!defined('48b5t9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
//Ler o registro da página home retornado do banco de dados
//A fução Extract é utilizada para extrair o array e imprimir atravéz do nome da chave
extract($this->dados['sts_homes']['top']);
$imagem_topo = URL . "app/sts/assets/images/home_topo/" . $image;
?>

<div class="jumbotron descr-top" style="background-image: url('<?php echo $imagem_topo; ?>');">
    <div class="container text-center">
        <h1 class="display-4"><?php echo $title_top; ?></h1>
        <p class="lead"><?php echo $description_top; ?></p>
        <a class="btn btn-primary btn-lg" href="<?php echo $link_btn_top; ?>" role="button"><?php echo $txt_btn_top; ?></a>
    </div>
</div>
<?php
extract($this->dados['sts_homes']['serv']);
?>
<div class="jumbotron descr-serv">
    <div class="container text-center">
        <h2 class="display-4"><?php echo $title_serv; ?></h2>
        <p class="lead pb-4"><?php echo $description_serv; ?></p>

        <div class="row">
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar border border-info shadow">
                    <i class="<?php echo $icone_one_serv; ?>"></i>
                </div>
                <h2 class="mt-4 mb-4"><?php echo $title_one_serv; ?></h2>
                <p><?php echo $description_one_serv; ?></p>
            </div>
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar border border-info shadow">
                    <i class="<?php echo $icone_two_serv; ?>"></i>
                </div>
                <h2 class="mt-4 mb-4"><?php echo $title_two_serv; ?></h2>
                <p><?php echo $description_two_serv; ?></p>
            </div>
            <div class="col-lg-4">
                <div class="rounded-circle circulo centralizar border border-info shadow">
                    <i class="<?php echo $icone_trhee_serv; ?>"></i>
                </div>
                <h2 class="mt-4 mb-4"><?php echo $title_trhee_serv; ?></h2>
                <p><?php echo $description_trhee_serv; ?></p>
            </div>
        </div>
    </div>
</div>

<?php
extract($this->dados['sts_homes']['action']);
$imagem_action = URL . "app/sts/assets/images/home_action/" . $image;
?>

<div class="jumbotron descr-action" style="background-image: url('<?php echo $imagem_action; ?>');">
    <div class="container text-center">
        <h4 class="lead mb-4"><?php echo $title_action; ?></h4>
        <h2 class="display-4 mb-4"><?php echo $subtitle_action; ?></h2>
        <p class="lead mb-4"><?php echo $description_action; ?></p>
        <a class="btn btn-primary btn-lg" href="<?php echo $link_btn_action; ?>" 
           role="button"><?php echo $txt_btn_action; ?></a>
    </div>
</div>

<?php
extract($this->dados['sts_homes']['det']);
$imagem_det = URL . "app/sts/assets/images/home_det/" . $image;
?>

<div class="jumbotron descr-det">
            <div class="container">
                <h2 class="display-4 text-center titulo"><?php echo $title_det; ?></h2>
                
                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading"><?php echo $subtitle_det; ?></h2>
                        <p class="lead"><?php echo $description_det; ?></p>
                    </div>
                    
                    <div class="col-md-5 order-md-1">
                        <img src="<?php echo $imagem_det; ?>" 
                             class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
                             width="500" height="500" alt="<?php echo $title_det; ?>">
                    </div>
                </div>
            </div>
        </div>