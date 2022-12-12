<?php
echo 

//Modal Mercado Imobiliario
'<div class="modal fade" id="modal-imob" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title sb-txt-secondary sb-w-700">
                Mercado Imobiliário
            </h5>
        </div>
        <div class="modal-body">
        <form method="post" name="mercadoImobiliario" action="../backend/investments.php">
        <input type="hidden" value="1" name="registroInvestimento" id="registroInvestimento">
        
        <div>O Investimento tem resultado imediato baseado na flutuação do mercado no momento da aplicação. O Investimento não pode ser desfeito.</div>
        <hr>

        <label for="valor">Quantia a ser aplicada:</label>
        <input class="form-control" id="valor" name="valor" type="number" required placeholder="R$0"/>

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
        </form>
    </div>
</div>
</div>
</div>';

echo

//Modal Bolsa de Valores Japonesa
'<div class="modal fade" id="modal-jap" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title sb-txt-secondary sb-w-700">
                Bolsa de Valores Japonesa
            </h5>
        </div>
        <div class="modal-body">
        <form method="post" name="bolsaJaponesa" action="../backend/investments.php">
        <input type="hidden" value="2" name="registroInvestimento" id="registroInvestimento">
        
        <div>O Investimento tem resultado imediato baseado na flutuação do mercado no momento da aplicação. O Investimento não pode ser desfeito.</div>
        <hr>

        <label for="valor">Quantia a ser aplicada:</label>
        <input class="form-control" id="valor" name="valor" type="number" required placeholder="R$0"/>

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
        </form>
    </div>
</div>
</div>
</div>';

echo

//Modal Criptomoedas
'<div class="modal fade" id="modal-cripto" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title sb-txt-secondary sb-w-700">
                Criptomoedas
            </h5>
        </div>
        <div class="modal-body">
        <form method="post" name="Criptomoedas" action="../backend/investments.php">
        <input type="hidden" value="3" name="registroInvestimento" id="registroInvestimento">
        
        <div>O Investimento tem resultado imediato baseado na flutuação do mercado no momento da aplicação. O Investimento não pode ser desfeito.</div>
        <hr>

        <label for="valor">Quantia a ser aplicada:</label>
        <input class="form-control" id="valor" name="valor" type="number" required placeholder="R$0"/>

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
        </form>
    </div>
</div>
</div>
</div>';
?>