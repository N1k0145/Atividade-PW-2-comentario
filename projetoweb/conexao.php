<?php

class Conexao {
    // Atributos privados que armazenam as informações de conexão com o banco de dados
    private $host = "localhost"; // Endereço do servidor do banco de dados
    private $usuario = "root"; // Nome de usuário do banco de dados
    private $senha = ""; // Senha do banco de dados
    private $banco = "exemplo_aula_pw"; // Nome do banco de dados
    private $conexao; // Variável que armazena a conexão com o banco de dados

    // Método construtor que estabelece a conexão com o banco de dados ao criar um objeto Conexao
    public function __construct() {
        // Cria uma nova conexão com o banco de dados utilizando o driver mysqli
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        // Verifica se houve falha na conexão e, se houver, exibe uma mensagem de erro
        if ($this->conexao->connect_error) {
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }

    // Método que retorna a conexão com o banco de dados
    public function getConexao() {
        return $this->conexao;
    }
}

?>
