<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Minha Conta</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("profile-menu");?>
            </div>
            <div class="col-md-9">
                <?php if( $profileMsg != '' ){ ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $profileMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
                <?php if( $profileError != '' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $profileError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>                
                <form method="post" action="/profile">
                    <div class="form-group">
                    <label for="nme_pessoa">Nome completo</label>
                    <input type="text" class="form-control" id="nme_pessoa" name="nme_pessoa" placeholder="Digite o nome aqui" value="<?php echo htmlspecialchars( $user["nme_pessoa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div class="form-group">
                    <label for="eml_email">E-mail</label>
                    <input type="email" class="form-control" id="eml_email" name="eml_email" placeholder="Digite o e-mail aqui" value="<?php echo htmlspecialchars( $user["eml_email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div class="form-group">
                    <label for="nrphone">Telefone</label>
                    <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone aqui" value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>

                </form>
            </div>
        </div>
    </div>
</div>