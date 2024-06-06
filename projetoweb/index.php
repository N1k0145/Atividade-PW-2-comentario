<!DOCTYPE html> <!-- Declaração do tipo de documento HTML -->
<html>
<head>
    <title>Tela de Cadastro</title> <!-- Título da página -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Link para o arquivo CSS do Bootstrap -->
</head>
<body>
    <div class="container"> <!-- Div que envolve todo o conteúdo e aplica o estilo do Bootstrap -->
        <h2>Cadastro</h2> <!-- Título da página de cadastro -->
        <form method="POST" action="controller/pessoaController.php"> <!-- Formulário de cadastro com método POST e ação para o controlador PHP -->
            <div class="form-group">
                <label for="nome">Nome:</label> <!-- Rótulo para o campo "nome" -->
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome"> <!-- Campo de texto para inserir o nome -->
            </div>
            <!-- Repetição similar para os campos de endereço, bairro, CEP, cidade, estado, telefone e celular -->
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro">
            </div>
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
            </div>
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o celular">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button> <!-- Botão para enviar o formulário -->
        </form>
    </div>
</body>
</html>
