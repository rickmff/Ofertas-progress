<div class="open-window">
    <div class="whats-elem">
        <div class="header-whats">
            <div class="row">
                <div class="col-md-2 col-2 logo-chat no-pad-right">
                    <img src="assets/image/logo-navbar.png" alt="Logo Ofertas Imobiliária">
                </div>
                <div class="col-md-10 col-10">
                    <h4>OFERTAS IMOBILIÁRIA</h4>
                </div>
                <div class="close-window">
                    <a href="javascript:" class="close-whats"><i class="fas fa-times-circle"></i></a>
                </div>
            </div>

        </div>
        <form class="form-whats"  name="formWhats" id="formWhats" action="javascript:" method="post" onsubmit="window.open(linkWhatsApp('(15)98123-3493'), '_blank')">
            <div class="form-group col-md-12">
                <label>Nome:</label>
                <input required="" type="text" name="whats_nome" id="whats_nome" class="form-control" placeholder="Digite seu nome">
            </div>
            <div class="form-group col-md-12">
                <label>Celular:</label>
                <input required="" type="text" name="whats_celular" id="whats_celular" class="form-control mask_phone" placeholder="Digite seu celular">
            </div>
            <div class="form-group col-md-12">
                <label>E-mail:</label>
                <input type="text" name="whats_email" id="whats_email" class="form-control" placeholder="Digite seu e-mail">
            </div>
            <div class="col-md-12 iniciar-conversa">
                <input type="hidden" name="whats_secao" id="whats_secao" value="<?=$Header_Title?>">
                <button type="submit" class="btn link-whats col-md-12">INICIAR CONVERSA</button>
            </div>
        </form>
    </div>
</div>