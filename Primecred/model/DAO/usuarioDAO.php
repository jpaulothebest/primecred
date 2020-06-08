<?php

include_once('conexao.php');

date_default_timezone_set('America/Sao_Paulo');

class usuarioDAO {
    

    function __construct() {
        $this->con = new Conexao(); 
        $this->pdo = $this->con->Connect();
    }

    function criarUsuario(usuario $entsolicitacao) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO solicitante VALUES (NULL,:nome,:cpf,:data_n,:renda,:celular,:valor,:tratamento,:email,:chora)");
             $param = array(
                ":nome" => $entsolicitacao->getNome(),
                ":cpf" => $entsolicitacao->getCPF(),
                ":data_n" => $entsolicitacao->getData(),               
                ":renda" => $entsolicitacao->getRenda(),
                ":celular" => $entsolicitacao->getCelular(),
                ":valor" => $entsolicitacao->getValor(),
                ":tratamento" => $entsolicitacao->getTratamento(),
                ":email" => $entsolicitacao->getEmail(),
		":chora" =>  date('d/m/Y H:i')
            );
            
            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo "ERRO 01: {$ex->getMessage()}";
        }
    }
}
