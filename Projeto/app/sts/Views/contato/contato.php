<?php
if (!defined('48b5t9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
if (isset($this->dados['form'])) {
    $valueForm = $this->dados['form'];
    extract($valueForm);
}
?>
<div class="jumbotron head-contato">
    <div class="container">
        <h1 class="text-center">Contato</h1>
    </div>            
</div>

<div class="jumbotron contato">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-6 mb-4">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nome completo"
                               value="<?php
                               if (isset($name)) {
                                   echo $name;
                               }
                               ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Seu melhor e-mail" 
                               value="<?php
                               if (isset($email)) {
                                   echo $email;
                               }
                               ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Assunto da mensagem" 
                               value="<?php
                               if (isset($subject)) {
                                   echo $subject;
                               }
                               ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Mensagem</label>
                        <textarea name="content" class="form-control" id="content" rows="3" placeholder="Conteúdo da mensagem" 
                                  required><?php
                                      if (isset($content)) {
                                          echo $content;
                                      }
                                      ?></textarea>
                    </div>

                    <button name="CreatContMsg" value="CreatContMsg" type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <?php
            extract($this->dados['address']);
            ?>
            <div class="col-md-6">
                <h3><?php echo $title_oppening_hours; ?></h3>
                <p class="lead"><?php echo $oppening_hours; ?></p>
                <hr>
                <address>
                    <strong><?php echo $title_address; ?></strong><br>
                    <?php echo $address; ?><br>
                    <?php echo $address_two; ?><br>
                    <?php echo $phone; ?><br>
                </address>
            </div>
        </div>
    </div>            
</div>