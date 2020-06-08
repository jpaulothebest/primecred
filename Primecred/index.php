<?php
        ini_set('display_errors','On');
        ini_set('display_sturtup_errors','On');
        error_reporting(E_ALL);
//include de configuracoes do banco de dados
include("config/db.php");

// recebendo os resulstados da tabela para listagem
//$mysqi eh uma variavel da configuracao do banco de dados

//$rst = mysqli_query($mysqli, "SELECT * FROM tb_aluno ORDER BY id_aluno ASC");
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cliente</title>
</head>

<body>
    <a href="../Primecred/view/cliente/cadastro_cliente.php">Pré-cadastramento</a><br/><br/>

    <table width='100%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>id</td>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Data de Nascimento</td>
	    <td></td>
        </tr>
        //<?php
//            if($rst->num_rows > 0 ){
//                while($res = mysqli_fetch_array($rst)) {
//                    $sexo = $res['ds_sexo']=='M'?'Masculino':'Feminino';
//                    echo "<tr>";
//                    echo "<td>".$res['id_aluno']."</td>";
//                    echo "<td>".$res['ds_nome']."</td>";
//                    echo "<td>".$res['ds_sexo']."</td>";
//                    echo "<td>".date('d/m/Y',strtotime($res['dt_nasc']))."</td>";
//                    echo "<td>".$sexo."</td>";
//                    echo "<td><a href=\"editar.php?id=$res[id_aluno]\">Editar</a> | <a href=\"deletar.php?id=$res[id_aluno]\" onClick=\"return confirm('Deseja excluir o registro?')\">Excluir</a></td>";
//                    }
//            }
//        ?>
    </table>
</body>
</html>