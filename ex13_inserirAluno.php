<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];
        $dtNasc = $_POST["dtNasc"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $fone = $_POST["telefone"];
        $endereco = $_POST["endereco"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cep = $_POST["cep"];

        if (!file_exists("alunosNovos.txt")) 
	{
            $cabecalho = "nome;matricula;data Nascimento;email;cpf;telefone;endereco;cidade;estado;cep\n";
            file_put_contents("alunosNovos.txt", $cabecalho);
        }
	    
        $txt = $nome . ";" . $matricula . ";" . $dtNasc . ";" . $email . ";" . $cpf . ";" . $fone;
        $txt = $txt . ";" . $endereco . ";" . $cidade . ";" . $estado . ";" . $cep . "\n";
        file_put_contents("alunosNovos.txt", $txt, FILE_APPEND);

    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Inserir Aluno</h1>
<br>
	<a href="ex13_inserirAluno.php">Inserir</a><br>
	<a href="ex13_alterarAluno.php">Alterar</a><br>
	<a href="ex13_listarAlunos.php">Listar</a><br>
	<a href="ex13_excluirArquivo.php">Excluir</a><br>

<br>
<form action="ex13_inserirAluno.php" method=POST>
	
    Matricula: <input type=text name="matricula"> <br>
    nome: <input type=text name="nome"> <br>
    email: <input type=text name="email"> <br>
    data nascimento: <input type=text name="dtNasc"> <br>
    cpf: <input type=text name="cpf"> <br>
    telefone:<input type=text name="telefone"> <br>
    endereço: <input type=text name="endereco"> <br>
    cidade: <input type=text name="cidade"> <br>
    estado: <input type=text name="estado"> <br>
    cep: <input type=text name="cep"> <br>
    <br><br>
    <input type="submit" value="Inserir">
	
</form>
	
<br>
</body>
</html>
