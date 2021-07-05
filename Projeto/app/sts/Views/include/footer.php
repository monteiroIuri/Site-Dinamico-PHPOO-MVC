<?php
if (!defined('48b5t9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
extract($this->dados['footer']);
?>
<div class="jumbotron footer-per">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <h5><?php echo $title_site;?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?php echo URL; ?>" class="link-footer">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>sobre-empresa" class="link-footer">Sobre Empresa</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>contato" class="link-footer">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <h5><?php echo $title_contact;?></h5>
                <ul class="list-unstyled">
                    <ul class="list-unstyled">
                        <li>
                            <a href="tel: <?php echo $phone;?>" 
                               class="link-footer"><?php echo $phone;?></a>
                        </li>
                        <li>
                            <a href="<?php echo $url_address;?>" class="link-footer"><?php echo $address;?></a>
                        </li>
                        <li>
                            <a href="<?php echo $url_cnpj;?>" class="link-footer"><?php echo $cnpj;?></a>
                        </li>
                    </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <h5><?php echo $title_social_network;?></h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?php echo $link_one_social_network;?>" target="_blank" 
                           class="link-footer"><?php echo $txt_one_social_network;?></a>
                    </li>
                    <li>
                        <a href="<?php echo $link_two_social_network;?>" target="_blank" 
                           class="link-footer"><?php echo $txt_two_social_network;?></a>
                    </li>
                    <li>
                        <a href="<?php echo $link_three_social_network;?>" target="_blank" 
                           class="link-footer"><?php echo $txt_three_social_network;?></a>
                    </li>
                    <li>
                        <a href="<?php echo $link_four_social_network;?>" target="_blank" 
                           class="link-footer"><?php echo $txt_four_social_network;?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

