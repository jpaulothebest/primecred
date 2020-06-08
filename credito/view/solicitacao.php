<?php

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Primecred - solicite sua avaliação de crédito sem compromisso</title>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <link href="../assets/img/PP.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
        <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="../assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/main.css" rel="stylesheet" media="all">

    <script language="JavaScript">
 /*
 A função Mascara tera como valores no argumento os dados inseridos no input (ou no evento onkeypress)
 onkeypress="mascara(this, '## ####-####')"
 onkeypress = chama uma função quando uma tecla é pressionada, no exemplo acima, chama a função mascara e define os valores do argumento na função
 O primeiro valor é o this, é o Apontador/Indicador da Mascara, o '## ####-####' é o modelo / formato da mascara
 no exemplo acima o # indica os números, e o - (hifen) o caracter que será inserido entre os números, ou seja, no exemplo acima o telefone ficara assim: 11-4000-3562
 para o celular de são paulo o modelo deverá ser assim: '## #####-####' [11 98563-1254]
 para o RG '##.###.###.# [40.123.456.7]
 para o CPF '###.###.###.##' [789.456.123.10]
 Ou seja esta mascara tem como objetivo inserir o hifen ou espaço automáticamente quando o usuário inserir o número do celular, cpf, rg, etc 

 lembrando que o hifen ou qualquer outro caracter é contado tambem, como: 11-4561-6543 temos 10 números e 2 hifens, por isso o valor de maxlength será 12
 <input type="text" name="telefone" onkeypress="mascara(this, '## ####-####')" maxlength="12">
 neste código não é possivel inserir () ou [], apenas . (ponto), - (hifén) ou espaço
 */
        function mascara(t, mask){
            var i = t.value.length;
            var saida = mask.substring(1,0);
            var texto = mask.substring(i)
            if (texto.substring(0,1) != saida){
            t.value += texto.substring(0,1);
            }
        }
    </script>  
</head>

<body>
    <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:primecreditopessoal@gmail.com">primecreditopessoal@gmail.com</a>
        <i class="fa fa-phone"></i> +55 61 3041-9563
        <i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=5561996113435&text=Oi%2C%20vim%20da%20p%C3%A1gina%20da%20Primecred%20e%20tenho%20interesse%20em%20cr%C3%A9dito%20pessoal%20%2C%20poderia%20me%20ajudar%20%3F">+55 61 9 9611-3435 </a>
        <i class="fa fa-phone"></i> +55 62 3998-3064
        <i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=5562999693435&text=Oi%2C%20vim%20da%20p%C3%A1gina%20da%20Primecred%20e%20tenho%20interesse%20em%20cr%C3%A9dito%20pessoal%20%2C%20poderia%20me%20ajudar%20%3F">+55 62 9 9969-3435 </a>
      </div>
      <div class="social-links float-right">
        <a href="https://www.facebook.com/primecreditopessoal" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/primecreditopessoal/" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
        

      <a href="#" class="navbar-expand-lg">
      <!-- Logo Image -->
      <img  src="../assets/img/logo.png" width="200" height="70" class="align-content-around" alt="PrimeCred" class="img-responsive">

      
    </a>
        

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li><a href="../index.php">Página inicial</a></li>
          <li class="menu-active"><a href="../view/solicitacao.php">Solicitar crédito</a></li>
          <li><a href="#">Quem Somos</a></li>
  
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

<section id="topbar" class="d-lg-none">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:primecreditopessoal@gmail.com">primecreditopessoal@gmail.com</a>
        <br><i class="float-right" class="fa fa-phone"></i> +55 61 3041-9563
        <i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=5561996113435&text=Oi%2C%20vim%20da%20p%C3%A1gina%20da%20Primecred%20e%20tenho%20interesse%20em%20cr%C3%A9dito%20pessoal%20%2C%20poderia%20me%20ajudar%20%3F">+55 61 9 9611-3435 </a>
      </div>
      <div class="social-links float-right">
        <a href="https://www.facebook.com/primecreditopessoal" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/primecreditopessoal/" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
      </div>
</section><!-- End Top Bar-->

    
    
    <div class="page-wrapper bg-gra-01 p-t-130 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h3 class="title"><b>Solicite seu empréstimo</b> <br> <br>Sem compromisso</h3>
                    <br>
                    
                    <form action="../controller/control_cad.php  "method="post" name="FrmSolicitacao">
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">CPF</label>
                                    <input  class="input--style-4" type="text" name="cpf"  onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" id="cpf" class="form-control"  required="required" autofocus="autofocus">
                    <script type="text/javascript">
                            function fMasc(objeto,mascara) {
                               	obj=objeto
                                masc=mascara
                                setTimeout("fMascEx()",1)
                            }
                            function mCPF(txtCpf){
				txtCpf=txtCpf.replace(/\D/g,"")
				txtCpf=txtCpf.replace(/(\d{3})(\d)/,"$1.$2")
				txtCpf=txtCpf.replace(/(\d{3})(\d)/,"$1.$2")
				txtCpf=txtCpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return txtCpf
                            }
                            function fMascEx() {
				obj.value=masc(obj.value)
                            }                            
                            </script>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">nome</label>
                                    <input class="input--style-4" type="text" name="nome" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space"> 
                            <div class="col-6">
                             <label class="label">Data nascimento</label>
                                
                                <div class="input-group">
                    <input class="input--style-4" type="text" name="data"id="dt_nasc" onkeydown="javascript: fMasc( this, mDtNasc );"class="form-control" maxlength="10"  required="required" autofocus="autofocus">
       
                     <script type="text/javascript">
                    function fMasc(objeto,mascara) {
                               	obj=objeto
                                masc=mascara
                                setTimeout("fMascEx()",1)
                            }
                            function mDtNasc(txtDtNasc){
				txtDtNasc=txtDtNasc.replace(/\D/g,"")
				txtDtNasc=txtDtNasc.replace(/(\d{2})(\d)/,"$1/$2")
                                txtDtNasc=txtDtNasc.replace(/(\d{2})(\d)/,"$1/$2")
				return txtDtNasc
                            }
                            function fMascEx() {
				obj.value=masc(obj.value)
                            }                            
                            </script>
                  </div>
                   </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Forma de Tratamento</label>
                                    <input class="input--style-4" type="text" name="tratamento" placeholder=" Ex: Sr. José,Sra Maria" required="required">
                                </div>
                            </div>
                        </div>
            
                            
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email"  required="required">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Celular</label>
                                    <input type="text" class="input--style-4" id="celular" name="celular" placeholder="00 00000-0000" required="required" onkeypress="mascara(this, '## #####-####')" maxlength="13">
                                                        
                                </div>
                            </div>
                           
    
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Renda bruta</label>
                                    <input class="input--style-4" type="text" name="renda" step="0.01" min="0.01" max="100.000" placeholder="Ex.: 4.000"  required="required" maxlength="9"> 
                                    
                            
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Valor do empréstimo</label>
                                    <input class="input--style-4" type="text" placeholder="Ex.: 10.000" name="valor" maxlength="9"  required="required">
                                     
                           
                                </div>
                            </div>
                        </div>  
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="btnSubmit" value="Solicitar"/>Solicitar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>PrimeCred</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../assets/vendor/select2/select2.min.js"></script>
    <script src="../assets/vendor/datepicker/moment.min.js"></script>
    <script src="../assets/vendor/datepicker/daterangepicker.js"></script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../assets/vendor/superfish/superfish.min.js"></script>
  <script src="../assets/vendor/hoverIntent/hoverIntent.js"></script>

    <!-- Main JS-->
    <script src="../assets/js/global.js"></script>
    
    

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

