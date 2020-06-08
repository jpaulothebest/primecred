<?php


class usuario {
    
    private $id;
    private $nome;
    private $cpf;
    private $data;
    private $renda;
    private $celular;
    private $valor;
    private $tratamento;
    private $email;
           
    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

        function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getData() {
        return $this->data;
    }

    function getRenda() {
        return $this->renda;
    }

    function getCelular() {
        return $this->celular;
    }

    function getValor() {
        return $this->valor;
    }

    function getTratamento() {
        return $this->tratamento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setRenda($renda) {
        $this->renda = $renda;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setTratamento($tratamento) {
        $this->tratamento = $tratamento;
    }


    
}
