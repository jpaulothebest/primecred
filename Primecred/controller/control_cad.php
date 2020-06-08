<?php

require_once("../model/usuario/usuario.php");
require_once("../model/DAO/usuarioDAO.php");

$usuario = new usuario();
$usuarioDAO = new usuarioDAO;
?>


<?php

if (isset($_POST['btnSubmit'])) {

    $usuario->setNome($_POST['nome']);
    $usuario->setCpf($_POST['cpf']);
    $usuario->setData($_POST['data']);
    $usuario->setRenda($_POST['renda']);
    $usuario->setCelular($_POST['celular']);
    $usuario->setValor($_POST['valor']);
    $usuario->setTratamento($_POST['tratamento']);
    $usuario->setEmail($_POST['email']);

    if ($usuarioDAO->criarUsuario($usuario)) {
        ?>

        <script type="text/javascript">
            alert("Enviado com Sucesso \n\Você receberá o retorno via Whatsapp ou Email\n\  \n\Agradecemos a Solicitação !\n\
        ");
            window.location.replace('../index.php');
        </script>                   

        <?php

    } else {
        ?>
        <script type="text/javascript">
            document.getElementById("resultadoCadastro").innerHTML = "Erro ao cadastrar.";
            document.getElementById("resultadoCadastro").style.color = "red";</script>
        <?php

    }
} else {
    ?>
    <script type="text/javascript">
        document.getElementById("resultadoCadastro").innerHTML = "O E-mail informado já esta cadastrado.";
        document.getElementById("resultadoCadastro").style.color = "red";</script>
    <?php

}
              
               
            


