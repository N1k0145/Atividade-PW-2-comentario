<?php

require_once '../model/pessoa.php'; // Inclui o arquivo que contém a classe Pessoa

class PessoaController{
    private $pessoa; // Declaração de uma variável privada $pessoa do tipo Pessoa
    
    public function __construct(){
        $this->pessoa = new Pessoa(); // Instancia um objeto da classe Pessoa
        $this->inserir(); // Chama o método inserir quando um objeto PessoaController é instanciado
    }

    public function inserir(){
        // Define os atributos do objeto $pessoa com os valores recebidos do formulário POST
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        
        $this->pessoa->inserir(); // Chama o método inserir da classe Pessoa para inserir os dados no banco de dados
    }
}

new PessoaController(); // Instancia um objeto da classe PessoaController
?>
