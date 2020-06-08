<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>solicitação de pré-análise - avaliação de crédito - sem compromisso</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../bibliotecas/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Solicitação de pré-análise sem compromisso</h2>
<!--        <p class="lead">Abaixo temos um exemplo de formulário construído com controles de formulário Bootstrap. Cada campo obrigatório possui um estado de validação que é ativado quando tenta-se enviar o formulário sem completá-lo.</p>-->
      </div>

<!--      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Seu carrinho</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nome do produto</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Segundo produto</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Terceiro item</h6>
                <small class="text-muted">Breve descrição</small>
              </div>
              <span class="text-muted">R$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Código de promoção</h6>
                <small>CODIGOEXEMEPLO</small>
              </div>
              <span class="text-success">-R$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BRL)</span>
              <strong>R$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Código promocional">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Resgatar</button>
              </div>
            </div>
          </form>
        </div>-->
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Solicite seu empréstimo</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" onkeydown="javascript: fMasc( this, mDtNasc );" maxlength="11" placeholder="000.000.000-00" value="" required="required">
                <script type="text/javascript">$(document).ready(function(){  
                    $(".cpf").mask("999.999.999-99");   

                    $("#cpf").blur(function (){
                      if($("#cpf").val() == '') {           
                        $("#saida").html("Informe um CPF");         
                        return false;   
                      }    
                      if(validarCPF($("#cpf").val())) {         
                        $(".cpf").css('border-color','limegreen');     
                      } 
                      else {            
                        $(".cpf").css('border-color','red');     
                      } 
                    });
                  });
                </script>
                <div class="invalid-feedback">
                  É obrigatório inserir um CPF válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="" value="" required="required">
                <div class="invalid-feedback">
                  É obrigatório inserir seu nome completo.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="dt_nasc">Data de nascimento</label>
                <input type="text" class="form-control" id="dtNasc" onkeydown="javascript: fMasc( this, mDtNasc );" placeholder="DD/MM/AAAA" value="" required="required">
                <script type="text/javascript">
                    function fMasc(objeto,mascara){
                        obj=objeto
                        masc=mascara
                        setTimeout("fMascEx()",1)
                    }
                        function mDtNasc(txtDtNasc){
                            txtDtNasc=txtDtNasc.replace (/\D/g,"")
                            txtDtNasc=txtDtNasc.replace(/(\d{2})(\d)/,"$1/$2")
                            txtDtNasc=txtDtNasc.replace(/(\d{2})(\d/,"$1/$2")
                            return txtDtNasc
                        }
                        {
                            function fMascEx(){
                                obj.value=masc(obj.value)
                            }
                        }
                </script>
                <div class="invalid-feedback">
                  É obrigatório inserir sua data de nascimento.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="celular">Celuar</label>
                <input type="text" class="form-control" id="celular" placeholder="(00)00000-0000" value="" required="required">
                <div class="invalid-feedback">
                  É obrigatório inserir um número de celular válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="renBruta">Renda Bruta</label>
                <input type="text" class="form-control" id="renBruta" placeholder="5.000 (sem centavos)" value="" required="required">
                <div class="invalid-feedback">
                  É obrigatório inserir sua renda bruta.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="vrPretend">Valor pretendido</label>
                <input type="text" class="form-control" id="VrPretend" placeholder="10.000 (sem centavos)" value="" required="required">
                <div class="invalid-feedback">
                  É obrigatório inserir um valor válido.
                </div>
              </div>
            </div>
              
              
              

            <div class="mb-3">
              <label for="fTratam">Forma de tratamento</label>
              <div class="input-group">
                <div class="input-group-prepend">
<!--                  <span class="input-group-text">@</span>-->
                </div>
                <input type="text" class="form-control" id="fTratam" placeholder="José = Sr. José" required="required">
                <div class="invalid-feedback" style="width: 100%;">
                  Forma de tratamento é obrigatório.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email<span class="text-muted">(Obrigatório)</span></label>
              <input type="email" class="form-control" id="email" placeholder="fulano@exemplo.com" required="required">
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
              </div>
            </div>

<!--            <div class="mb-3">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" id="endereco" placeholder="Rua dos bobos, nº 0" required>
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>

            <div class="mb-3">
              <label for="endereco2">Endereço 2 <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="endereco2" placeholder="Apartamento ou casa">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="pais">País</label>
                <select class="custom-select d-block w-100" id="pais" required>
                  <option value="">Escolha...</option>
                  <option>Brasil</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, escolha um país válido.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="estado">Estado</label>
                <select class="custom-select d-block w-100" id="estado" required>
                  <option value="">Escolha...</option>
                  <option>Acre</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, insira um estado válido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="" required>
                <div class="invalid-feedback">
                  É obrigatório inserir um CEP.
                </div>
              </div>
            </div>-->
<!--            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="mesmo-endereco">
              <label class="custom-control-label" for="mesmo-endereco">Endereço de entrega é o mesmo que o de cobrança.</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="salvar-info">
              <label class="custom-control-label" for="salvar-info">Lembrar desta informação, na próxima vez.</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credito">Cartão de crédito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debito" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debito">Cartão de débito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-nome">Nome no cartão</label>
                <input type="text" class="form-control" id="cc-nome" placeholder="" required>
                <small class="text-muted">Nome completo, como mostrado no cartão.</small>
                <div class="invalid-feedback">
                  O nome que está no cartão é obrigatório.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-numero">Número do cartão de crédito</label>
                <input type="text" class="form-control" id="cc-numero" placeholder="" required>
                <div class="invalid-feedback">
                  O número do cartão de crédito é obrigatório.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiracao">Data de expiração</label>
                <input type="text" class="form-control" id="cc-expiracao" placeholder="" required>
                <div class="invalid-feedback">
                  Data de expiração é obrigatória.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Código de segurança é obrigatório.
                </div>
              </div>
            </div>-->
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue o checkout</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 Primecred</p>
<!--        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>-->
      </footer>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
