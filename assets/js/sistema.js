/**
 * @author  Mário Almeida  <prog.almeida@gmail.com> 
 * @file formValidate.js
 * @copyright 22/02/2016 - 21:25:27
 *  
 */

$().ready(function () {

    /* Funções de Formulários */
    // Pula os campos do formulário ao apertar o botão ENTER

    $('input,select').keypress(function (e) {
        if (e.keyCode == 13) {
            var campos = $("input:not(:hidden):not(:button):not(:reset)");
            var elemento = campos.index(this);
            if (campos[elemento + 1] != null) {
                var proximoCampo = campos[elemento + 1];
                proximoCampo.focus();
                e.preventDefault();
                return false;
            }
        }

    });

});

function executar(url, dados, acao, callback) {

    $.ajax({
        url: url,
        type: 'POST',
        data: dados+'&case='+acao,
        success: function (msg) {
            
            callback(msg);
           
        }
    });

}