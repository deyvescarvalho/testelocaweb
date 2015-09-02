<?php require_once 'head.php';?>
    <div class="container">
        <div class="row">
            <form class="col-xs-12 col-md-6 col-md-offset-3" method="post" action="enviarmail.php">
                <div class="form-group col-xs-12">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>
                <div class="form-group col-xs-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group col-xs-8">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade">
                </div>
                <div class="form-group col-xs-4">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado">
                </div>
                <div class="form-group col-xs-12">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control" name="rua" id="rua">
                </div>
                <div class="form-group col-xs-12">
                    <textarea name="mensagem"   placeholder="Digite aqui Sua mensagem"  id="mensagem" class="col-xs-12" rows="5" ></textarea>
                </div>
                <div class="form-group col-xs-12">
                    <button type="submit" class="col-xs-4  col-xs-offset-3 btn btn-success">Enviar</button>
                    <button type="reset" class="col-xs-4 col-xs-offset-1 btn btn-danger">Cancelar</button>
                </div>

            </form>
        </div>
    </div>
<?php require_once 'footer.php';?>