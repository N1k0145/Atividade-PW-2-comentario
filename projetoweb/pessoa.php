<?php
require_once '../controller/conexao.php'; // Inclui o arquivo que contém a classe de conexão com o banco de dados

class Pessoa{
    private $id; // Atributo privado para o ID da pessoa
    private $nome; // Atributo privado para o nome da pessoa
    private $endereco; // Atributo privado para o endereço da pessoa
    private $bairro; // Atributo privado para o bairro da pessoa
    private $cep; // Atributo privado para o CEP da pessoa
    private $cidade; // Atributo privado para a cidade da pessoa
    private $estado; // Atributo privado para o estado da pessoa
    private $telefone; // Atributo privado para o telefone da pessoa
    private $celular; // Atributo privado para o celular da pessoa
    private $conexao; // Atributo privado para a conexão com o banco de dados

    // Métodos para obter e definir os valores dos atributos
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    // Métodos semelhantes para os demais atributos...

    // Método construtor que cria uma nova conexão com o banco de dados ao instanciar um objeto Pessoa
    public function __construct(){
        $this->conexao = new Conexao();
    }

    // Método para inserir os dados da pessoa no banco de dados
    public function inserir(){
        $sql = "INSERT INTO pessoa (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)"; // Consulta SQL para inserção
        $stmt = $this->conexao->getConexao()->prepare($sql); // Prepara a consulta SQL
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular); // Liga parâmetros à consulta
        return $stmt->execute(); // Executa a consulta
    }
}

?>
