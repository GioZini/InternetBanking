<?php
echo '<div class="modal fade" id="modal-imob" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title sb-txt-secondary sb-w-700">
                Mercado Imobiliário
            </h5>
        </div>
        <div class="modal-body">
            
        <input type="hidden" value="3" name="registro" id="registro">
        
        <div>O Investimento tem resultado imediato baseado na flutuação do mercado no momento da aplicação. O Investimento não pode ser desfeito.</div>
        <hr>

        <label for="valor">Quantia a ser aplicada:</label>
        <input class="form-control" id="valor" name="valor" type="number" required placeholder="R$00"/>

        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger sb-w-700" data-bs-dismiss="modal">
            Fechar
        </button>
        <button type="submit"
            class="btn btn-primary sb-w-700"
            id="Aplicar"
        >
            Enviar
        </button>
    </div>
</div>
</div>
</div>';

?>